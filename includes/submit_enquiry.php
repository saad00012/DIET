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
    $program = isset($_POST["program"]) ? strip_tags(trim($_POST["program"])) : "Not specified";
    $branch  = isset($_POST["branch"]) ? strip_tags(trim($_POST["branch"])) : "Not specified";
    $recaptcha_token = $_POST['recaptcha_token'] ?? '';

    // 2. Verify reCAPTCHA token to prevent bot submissions
    if (!empty($recaptcha_token)) {
        $secret_key = 'YOUR_RECAPTCHA_SECRET_KEY';
        $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha_token);
        $response_data = json_decode($verify_response);
        
        if (!$response_data->success || $response_data->score < 0.5) {
            // Score too low, likely a spam bot
            header("Location: /index.html?status=error&reason=spam_detected");
            exit;
        }
    }

    // Basic Validation
    if (empty($name) || !$email || empty($mobile)) {
        header("Location: /index.html?status=error&reason=invalid_input");
        exit;
    }

    // 2. Set Email Parameters
    // Important: Change this to your actual receiving email address
    $to = "saad.sayyad@dnyanshree.edu.in"; 
    $subject = "New Admission Enquiry from $name";

    // 3. Build Email Content
    $email_content  = "You have received a new admission enquiry.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Mobile Number: $mobile\n";
    $email_content .= "Email Address: $email\n";
    $email_content .= "Program Interested: $program\n";
    $email_content .= "Branch Interested: $branch\n";

    // 4. Build Email Headers
    // Prevent header injection
    $safe_name = str_replace(["\r", "\n"], '', $name);
    $safe_email = str_replace(["\r", "\n"], '', $email);
    $headers = "From: $safe_name <$safe_email>";

    // 5. Send Email using PHPMailer (with native mail() fallback)
    if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        $mail = new PHPMailer(true);
        try {
            $mail->setFrom($email, $safe_name);
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body    = $email_content;
            $mail->send();
            header("Location: /index.html?status=success");
        } catch (Exception $e) {
            header("Location: /index.html?status=error");
        }
    } else {
        if (mail($to, $subject, $email_content, $headers)) {
            header("Location: /index.html?status=success");
        } else {
            header("Location: /index.html?status=error");
        }
    }
} else {
    header("Location: /index.html");
}
?>