<?php
// Load Composer's autoloader for PHPMailer if available
if (file_exists('../vendor/autoload.php')) {
    require '../vendor/autoload.php';
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Ensure the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize and fetch input data
    $name    = strip_tags(trim($_POST["name"] ?? ""));
    $mobile  = strip_tags(trim($_POST["mobile"] ?? ""));
    $email   = filter_var(trim($_POST["email"] ?? ""), FILTER_VALIDATE_EMAIL);
    $type    = strip_tags(trim($_POST["grievance_type"] ?? "General"));
    $message = strip_tags(trim($_POST["message"] ?? ""));
    $recaptcha_token = $_POST['recaptcha_token'] ?? '';

    // 2. Verify reCAPTCHA token
    if (!empty($recaptcha_token)) {
        $secret_key = 'YOUR_RECAPTCHA_SECRET_KEY';
        $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha_token);
        $response_data = json_decode($verify_response);
        
        if (!$response_data->success || $response_data->score < 0.5) {
            // Score too low, likely a bot
            $redirect_url = $_SERVER['HTTP_REFERER'] ?? '/index.html';
            $base_url = parse_url($redirect_url, PHP_URL_PATH);
            header("Location: " . $base_url . "?status=error&reason=spam_detected");
            exit;
        }
    }

    // Basic Validation
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: " . ($_SERVER['HTTP_REFERER'] ?? '/index.html') . "?status=error&reason=missing_fields");
        exit;
    }

    // 2. Set Email Parameters
    // Important: Change this to your grievance committee's actual email address
    $to = "grievance@dnyanshree.edu.in"; 
    $subject = "New Grievance Submitted: $type";

    // 3. Build Email Content
    $email_content  = "A new grievance form has been submitted via the website.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Mobile Number: $mobile\n";
    $email_content .= "Email Address: $email\n";
    $email_content .= "Grievance Type: $type\n\n";
    $email_content .= "Message:\n$message\n";

    // 4. Build Email Headers
    // Prevent header injection by removing newlines
    $safe_name = str_replace(["\r", "\n"], '', $name);
    $safe_email = str_replace(["\r", "\n"], '', $email);
    $headers = "From: $safe_name <$safe_email>";

    // 5. Send Email and redirect back to the previous page (e.g., grievance.html)
    $redirect_url = $_SERVER['HTTP_REFERER'] ?? '/index.html';
    $base_url = parse_url($redirect_url, PHP_URL_PATH);
    
    // 5. Send Email using PHPMailer (with native mail() fallback)
    if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        $mail = new PHPMailer(true);
        try {
            $mail->setFrom($email, $safe_name);
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body    = $email_content;
            $mail->send();
            header("Location: " . $base_url . "?status=success");
        } catch (Exception $e) {
            header("Location: " . $base_url . "?status=error");
        }
    } else {
        if (mail($to, $subject, $email_content, $headers)) {
            header("Location: " . $base_url . "?status=success");
        } else {
            header("Location: " . $base_url . "?status=error");
        }
    }
} else {
    header("Location: /index.html");
}
?>