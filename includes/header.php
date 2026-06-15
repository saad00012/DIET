<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title : 'Dnyanshree Institute of Engineering & Technology — DIET Satara'; ?></title>
  <meta name="description" content="<?php echo isset($page_meta_desc) ? $page_meta_desc : 'Dnyanshree Institute of Engineering & Technology (DIET), Satara — NAAC B+ accredited, AICTE approved, affiliated to DBATU.'; ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- ══════════════════════════════════════════════════════════════════
     TOP INFO BAR
     Contains quick links (Admissions, MSBTE, AICTE, etc.) and 
     social media icons positioned above the main navigation.
═══════════════════════════════════════════════════════════════════ -->
<div id="top-info-bar">
  <div class="tib-inner">
    <div class="tib-links">
      <a href="/contact.html" class="tib-link accent">Admission Enquiry</a>
      <a href="https://msbte.org.in/" class="tib-link" target="_blank">MSBTE</a>
      <a href="https://dbatu.ac.in/" class="tib-link" target="_blank">DBATU</a>
      <a href="https://www.aicte-india.org/" class="tib-link" target="_blank">AICTE</a>
      <a href="/Mandatory_Disclosure.html" class="tib-link">Mandatory Disclosure</a>
      <a href="/nirf.html" class="tib-link">NIRF</a>
      <a href="/public_self_disclosure.html" class="tib-link">UGC Disclosure</a>
      <a href="/pdf/2025-26/FRA26-27.pdf" class="tib-link" target="_blank">FRA</a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════════════
     MARQUEE BAR
     Continuously scrolling text ticker for urgent announcements 
     and helpline numbers.
═══════════════════════════════════════════════════════════════════ -->
<div id="marquee-bar">
  <div class="marquee-inner">
    <span class="marquee-item"><a href="#">Anti-Ragging Helpline (24×7): +91 8600009009 | UGC: 1800 180 5522</a></span>
    <span class="marquee-item"><a href="#">Women Harassment Helpline (24×7): +91 9561166273</a></span>
    <span class="marquee-item">NAAC B+ Accredited | AICTE Approved | Affiliated to DBATU, Lonere | Approved by DTE, Mumbai</span>
    <span class="marquee-item">Admissions Open 2026 — Apply Now for Degree &amp; Diploma Programs</span>
    <span class="marquee-item">Student Soham Gholap places at Google with ₹40 LPA package — <a href="#">Read More</a></span>
    <span class="marquee-item">Premier Partner 2025 of Red Hat Academy — DIET Satara</span>
    <span class="marquee-item"><a href="#">Anti-Ragging Helpline (24×7): +91 8600009009 | UGC: 1800 180 5522</a></span>
    <span class="marquee-item"><a href="#">Women Harassment Helpline (24×7): +91 9561166273</a></span>
    <span class="marquee-item">NAAC B+ Accredited | AICTE Approved | Affiliated to DBATU, Lonere | Approved by DTE, Mumbai</span>
    <span class="marquee-item">Admissions Open 2026 — Apply Now for Degree &amp; Diploma Programs</span>
    <span class="marquee-item">Student Soham Gholap places at Google with ₹40 LPA package — <a href="#">Read More</a></span>
    <span class="marquee-item">Premier Partner 2025 of Red Hat Academy — DIET Satara</span>
  </div>
</div>

<!-- ══════════════════════════════════
     CREDENTIAL BAR
══════════════════════════════════ -->
<div id="cred-bar">
  <div class="cred-left">
    <span class="cred-badge">NAAC B+</span>
    <span class="cred-dot"></span>
    <span>AICTE Approved</span>
    <span class="cred-dot"></span>
    <span>DBATU Affiliated</span>
    <span class="cred-dot"></span>
    <span>DTE Approved</span>
    <span class="cred-dot"></span>
    <span>Est. 2012</span>
  </div>
  <div class="cred-right">
    <a href="/nirf.html">NIRF Ranked</a>
    <a href="/Alumni.html">Alumni Network</a>
    <a href="https://dnyanshree.edupluscampus.com/" target="_blank">Faculty Login</a>
    <a href="http://mydnyanshree.edupluscampus.com/" target="_blank">Student Login</a>
    <a href="/grievance.html">Grievance</a>
    <div class="cred-socs">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════
     MAIN NAVBAR
══════════════════════════════════ -->
<nav id="navbar">
  <div class="nav-inner">
    <a class="nav-logo" href="/index.html">
      <img src="/Assets/core/smlogo.png" alt="DIET Logo" class="nav-logo-img">
      <div class="nav-logo-text">
        <span class="nav-logo-t1">
          Dnyanshree Institute
        </span>
        <span class="nav-logo-t2">
          of Engineering &amp; Technology, Satara
        </span>
      </div>
    </a>
    <div class="nav-links">
      <div class="nav-item">
        <a href="/index.html">Home</a>
      </div>

      <div class="nav-item">
        <a href="#">About <i class="fas fa-chevron-down"></i></a>
        <div class="mega wide">
          <div class="mega-col">
            <h4>Institute</h4>
            <a href="/about-rwmct.html"><i class="fas fa-landmark"></i> About RWMCT</a>
            <a href="/about-dnyanshree.html"><i class="fas fa-university"></i> About Dnyanshree</a>
            <a href="/chairperson-desk.html"><i class="fas fa-user-tie"></i> Presiding Words</a>
              <a href="/md-desk.html"><i class="fas fa-briefcase"></i> From MD's Desk</a>
              <a href="/ceo-desk.html"><i class="fas fa-briefcase"></i> From CEO's Desk</a>
              <a href="/principal-desk.html"><i class="fas fa-chalkboard-teacher"></i> Principal Desk</a>
              <a href="/viceprincipal-desk.html"><i class="fas fa-user-graduate"></i> Vice Principal Desk</a>
          </div>
          <div class="mega-col">
              <h4>Policy &amp; Reports</h4>
            <a href="/institutepolicy.html"><i class="fas fa-file-contract"></i> Institute Policy</a>
              <a href="/ActandStatutesorMoA.html"><i class="fas fa-gavel"></i> Act &amp; Statutes</a>
              <a href="/InstitutionalDevelopmentPlan.html"><i class="fas fa-chart-line"></i> IDP</a>
              <a href="/pdf/2025-26/2f.pdf"><i class="fas fa-file-pdf"></i> UGC (2F)</a>
            <a href="/bestpractices.html"><i class="fas fa-star"></i> Best Practices</a>
              <a href="/pdf/2025-26/Annual_Report_2024-25.pdf"><i class="fas fa-book"></i> Annual Reports</a>
              <a href="/pdf/2025-26/Organization_Chart_2025-26.pdf"><i class="fas fa-sitemap"></i> Organisation Chart</a>
              <a href="/pdf/2024-25/Newsletter.pdf"><i class="fas fa-newspaper"></i> Newsletter</a>
          </div>
        </div>
      </div>

      <div class="nav-item">
          <a href="#">Administration <i class="fas fa-chevron-down"></i></a>
          <div class="mega wide">
            <div class="mega-col">
              <h4>Governance</h4>
              <a href="/loa_and_eoa.php"><i class="fas fa-file-alt"></i> AICTE LOA &amp; EOA</a>
              <a href="/pdf/Affiliation_AY-2025-26.pdf"><i class="fas fa-handshake"></i> Affiliation</a>
              <a href="/governing-council.html"><i class="fas fa-users"></i> Governing Body</a>
              <a href="/Finance_Account.html"><i class="fas fa-rupee-sign"></i> Finance &amp; Accounts</a>
              <a href="/Committees.html"><i class="fas fa-tasks"></i> Committees</a>
              <a href="/rti-committee.html"><i class="fas fa-info-circle"></i> RTI</a>
            </div>
            <div class="mega-col">
              <h4>Staff &amp; Students</h4>
              <a href="/administration.html"><i class="fas fa-user-tie"></i> Administrative Staff</a>
              <a href="/assets/private/faculty.html"><i class="fas fa-chalkboard-user"></i> Faculty List</a>
              <a href="/student_section.html"><i class="fas fa-users"></i> Students Section</a>
              <a href="/exam_cell.html"><i class="fas fa-pen-nib"></i> Examination Section</a>
              <a href="/pdf/2025-26/ROSTER_2025-26.pdf"><i class="fas fa-list"></i> Reservation Roster</a>
              <a href="/job.html"><i class="fas fa-briefcase"></i> Job Openings</a>
            </div>
          </div>
        </div>

        <div class="nav-item">
        <a href="#">Programs <i class="fas fa-chevron-down"></i></a>
        <div class="mega wide">
          <div class="mega-col">
              <h4>Degree Programme</h4>
              <a href="/cse.html" style="color:var(--gold-lt);"><i class="fas fa-laptop-code"></i> Computer Science &amp; Engg.</a>
              <a href="/civil.html"><i class="fas fa-hard-hat"></i> Civil &amp; Environmental Engg.</a>
              <a href="/electrical.html"><i class="fas fa-bolt"></i> Electrical &amp; Computer Engg.</a>
              <a href="/etc.html"><i class="fas fa-broadcast-tower"></i> Electronics &amp; Telecom Engg.</a>
              <a href="/mech.html"><i class="fas fa-cogs"></i> Mechanical &amp; Mechatronics</a>
              <a href="/gsh.html"><i class="fas fa-atom"></i> Applied Sciences &amp; Engg.</a>
          </div>
          <div class="mega-col">
              <h4>Diploma Programme</h4>
              <a href="/diploma-cse.html"><i class="fas fa-laptop-code"></i> Computer Science &amp; Engg.</a>
              <a href="/diploma-etc.html"><i class="fas fa-broadcast-tower"></i> Electronics &amp; Telecom</a>
              <a href="/diploma-ASE.html"><i class="fas fa-flask"></i> Applied Sciences &amp; Engg.</a>
            <h4 style="margin-top:1rem;">Admissions</h4>
              <a href="/degree-program.html"><i class="fas fa-graduation-cap"></i> UG (B.Tech) Admissions</a>
              <a href="/diploma-program.html"><i class="fas fa-school"></i> Polytechnic (Diploma)</a>
            <a href="/admission_process.html"><i class="fas fa-paper-plane"></i> Admission Process</a>
            <a href="/scholarship.html"><i class="fas fa-award"></i> Scholarships</a>
          </div>
        </div>
      </div>

      <div class="nav-item">
        <a href="#">Academics <i class="fas fa-chevron-down"></i></a>
        <div class="mega">
          <div class="mega-col">
              <h4>Academic Info</h4>
            <a href="/intake.html"><i class="fas fa-users"></i> Intake</a>
            <a href="/academic_Calendar.html"><i class="fas fa-calendar-alt"></i> Academic Calendar</a>
              <a href="/pdf/DIET_SOP.pdf"><i class="fas fa-book-open"></i> Rules &amp; Regulations</a>
              <a href="#academics"><i class="fas fa-list-alt"></i> CSE Curriculum</a>
              <a href="#syllabus"><i class="fas fa-file-pdf"></i> CSE Syllabus</a>
              <a href="#result-analysis"><i class="fas fa-chart-bar"></i> Result Analysis</a>
            </div>
          </div>
        </div>

        <div class="nav-item">
          <a href="#">Students Information <i class="fas fa-chevron-down"></i></a>
          <div class="mega">
            <div class="mega-col">
              <h4>Academic Info</h4>
              <a href="/intake.html"><i class="fas fa-users"></i> Intake</a>
              <a href="/academic_Calendar.html"><i class="fas fa-calendar-alt"></i> Academic Calendar</a>
              <a href="/pdf/DIET_SOP.pdf"><i class="fas fa-book-open"></i> Rules &amp; Regulations</a>
              <a href="#academics"><i class="fas fa-list-alt"></i> CSE Curriculum</a>
              <a href="#syllabus"><i class="fas fa-file-pdf"></i> CSE Syllabus</a>
              <a href="#result-analysis"><i class="fas fa-chart-bar"></i> Result Analysis</a>
          </div>
        </div>
      </div>

      <div class="nav-item">
        <a href="#">Life @ DIET <i class="fas fa-chevron-down"></i></a>
        <div class="mega wide">
          <div class="mega-col">
            <h4>Campus Life</h4>
            <a href="/clubs.html"><i class="fas fa-users-cog"></i> Student Clubs</a>
            <a href="/nss.html"><i class="fas fa-hands-helping"></i> NSS</a>
            <a href="/annual_events.html"><i class="fas fa-calendar-star"></i> Annual Events</a>
              <a href="/extra_c.html"><i class="fas fa-running"></i> Extra Curricular</a>
              <a href="/eco_campus.html"><i class="fas fa-leaf"></i> Eco Friendly Campus</a>
          </div>
          <div class="mega-col">
            <h4>Innovation</h4>
            <a href="https://diic.in/" target="_blank"><i class="fas fa-lightbulb"></i> DIIC</a>
              <a href="/research.html"><i class="fas fa-microscope"></i> Research &amp; IPR</a>
            <a href="/IIC.html"><i class="fas fa-rocket"></i> IIC</a>
              <a href="/iipc.html"><i class="fas fa-industry"></i> IIPC</a>
              <a href="/IQAC_Details.html"><i class="fas fa-medal"></i> IQAC</a>
              <a href="/naac.html"><i class="fas fa-award"></i> NAAC</a>
          </div>
        </div>
      </div>

      <div class="nav-item">
        <a href="/placement.html">Placements</a>
      </div>

        <div class="nav-item">
          <a href="#">More <i class="fas fa-chevron-down"></i></a>
          <div class="mega">
            <div class="mega-col">
              <h4>Quick Access</h4>
              <a href="/infra.html"><i class="fas fa-building"></i> Infrastructure</a>
              <a href="/Alumni.html"><i class="fas fa-user-graduate"></i> Alumni</a>
              <a href="/cir.html"><i class="fas fa-bell"></i> Circulars</a>
              <a href="/Gallary.html"><i class="fas fa-images"></i> Gallery</a>
              <a href="/contact.html"><i class="fas fa-envelope"></i> Contact</a>
              <a href="/grievance.html"><i class="fas fa-comment-dots"></i> Grievance Form</a>
              <a href="https://dnyanshree.edupluscampus.com/" target="_blank"><i class="fas fa-sign-in-alt"></i> Faculty Login</a>
              <a href="http://mydnyanshree.edupluscampus.com/" target="_blank"><i class="fas fa-user-circle"></i> Student Login</a>
            </div>
          </div>
        </div>
    </div>

    <div class="nav-actions" style="display:flex;align-items:center;gap:.6rem;">
      <button class="nav-search-btn" id="nav-search-btn" aria-label="Search"><i class="fas fa-search"></i></button>
      <a href="/admission_process.html" class="btn btn-gold nav-cta" style="padding:.6rem 1.5rem;font-size:.78rem;">Apply 2026</a>
      <button class="nav-hamburger" id="hamburger" aria-label="Menu"><i class="fas fa-bars"></i></button>
    </div>
  </div>
</nav>

<!-- MOBILE NAV -->
<div id="mobile-nav">
  <div class="mn-head">
    <div class="nav-logo">
      <img src="/Assets/core/smlogo.png" alt="DIET Logo" class="nav-logo-img">
    </div>
    <button class="mn-close" id="mn-close" aria-label="Close"><i class="fas fa-times"></i></button>
  </div>
  <div class="mn-links">
    <a href="/index.html">🏠 Home</a>

    <details>
      <summary>About</summary>
      <div class="mn-sub-links">
        <h4>Institute</h4>
        <a href="/about-rwmct.html">About RWMCT</a>
        <a href="/about-dnyanshree.html">About Dnyanshree</a>
        <a href="/chairperson-desk.html">Presiding Words</a>
        <a href="/md-desk.html">From MD's Desk</a>
        <a href="/ceo-desk.html">From CEO's Desk</a>
        <a href="/principal-desk.html">Principal Desk</a>
        <a href="/viceprincipal-desk.html">Vice Principal Desk</a>
        <h4>Policy &amp; Reports</h4>
        <a href="/institutepolicy.html">Institute Policy</a>
        <a href="/ActandStatutesorMoA.html">Act &amp; Statutes</a>
        <a href="/InstitutionalDevelopmentPlan.html">IDP</a>
        <a href="/pdf/2025-26/2f.pdf">UGC (2F)</a>
        <a href="/bestpractices.html">Best Practices</a>
        <a href="/pdf/2025-26/Annual_Report_2024-25.pdf">Annual Reports</a>
        <a href="/pdf/2025-26/Organization_Chart_2025-26.pdf">Organisation Chart</a>
        <a href="/pdf/2024-25/Newsletter.pdf">Newsletter</a>
      </div>
    </details>

    <details>
      <summary>Administration</summary>
      <div class="mn-sub-links">
        <h4>Governance</h4>
        <a href="/loa_and_eoa.php">AICTE LOA &amp; EOA</a>
        <a href="/pdf/Affiliation_AY-2025-26.pdf">Affiliation</a>
        <a href="/governing-council.html">Governing Body</a>
        <a href="/Finance_Account.html">Finance &amp; Accounts</a>
        <a href="/Committees.html">Committees</a>
        <a href="/rti-committee.html">RTI</a>
        <h4>Staff &amp; Students</h4>
        <a href="/administration.html">Administrative Staff</a>
        <a href="/assets/private/faculty.html">Faculty List</a>
        <a href="/student_section.html">Students Section</a>
        <a href="/exam_cell.html">Examination Section</a>
        <a href="/pdf/2025-26/ROSTER_2025-26.pdf">Reservation Roster</a>
        <a href="/job.html">Job Openings</a>
      </div>
    </details>

    <details>
      <summary>Programs</summary>
      <div class="mn-sub-links">
        <h4>Degree Programme</h4>
        <a href="/cse.html">Computer Science &amp; Engg.</a>
        <a href="/civil.html">Civil &amp; Environmental Engg.</a>
        <a href="/electrical.html">Electrical &amp; Computer Engg.</a>
        <a href="/etc.html">Electronics &amp; Telecom Engg.</a>
        <a href="/mech.html">Mechanical &amp; Mechatronics</a>
        <a href="/gsh.html">Applied Sciences &amp; Engg.</a>
        <h4>Diploma Programme</h4>
        <a href="/diploma-cse.html">Computer Science &amp; Engg.</a>
        <a href="/diploma-etc.html">Electronics &amp; Telecom</a>
        <a href="/diploma-ASE.html">Applied Sciences &amp; Engg.</a>
        <h4>Admissions</h4>
        <a href="/degree-program.html">UG (B.Tech) Admissions</a>
        <a href="/diploma-program.html">Polytechnic (Diploma)</a>
        <a href="/admission_process.html">Admission Process</a>
        <a href="/scholarship.html">Scholarships</a>
      </div>
    </details>

    <details>
      <summary>Academics &amp; Students</summary>
      <div class="mn-sub-links">
        <h4>Academic Info</h4>
        <a href="/intake.html">Intake</a>
        <a href="/academic_Calendar.html">Academic Calendar</a>
        <a href="/pdf/DIET_SOP.pdf">Rules &amp; Regulations</a>
        <a href="#academics">CSE Curriculum</a>
        <a href="#syllabus">CSE Syllabus</a>
        <a href="#result-analysis">Result Analysis</a>
      </div>
    </details>

    <details>
      <summary>Life @ DIET</summary>
      <div class="mn-sub-links">
        <h4>Campus Life</h4>
        <a href="/clubs.html">Student Clubs</a>
        <a href="/nss.html">NSS</a>
        <a href="/annual_events.html">Annual Events</a>
        <a href="/extra_c.html">Extra Curricular</a>
        <a href="/eco_campus.html">Eco Friendly Campus</a>
        <h4>Innovation</h4>
        <a href="https://diic.in/" target="_blank">DIIC</a>
        <a href="/research.html">Research &amp; IPR</a>
        <a href="/IIC.html">IIC</a>
        <a href="/iipc.html">IIPC</a>
        <a href="/IQAC_Details.html">IQAC</a>
        <a href="/naac.html">NAAC</a>
      </div>
    </details>

    <a href="/placement.html">Placements</a>

    <details>
      <summary>More</summary>
      <div class="mn-sub-links">
        <h4>Quick Access</h4>
        <a href="/infra.html">Infrastructure</a>
        <a href="/Alumni.html">Alumni</a>
        <a href="/cir.html">Circulars</a>
        <a href="/Gallary.html">Gallery</a>
        <a href="/contact.html">Contact</a>
        <a href="/grievance.html">Grievance Form</a>
        <a href="https://dnyanshree.edupluscampus.com/" target="_blank">Faculty Login</a>
        <a href="http://mydnyanshree.edupluscampus.com/" target="_blank">Student Login</a>
      </div>
    </details>
  </div>
  <div style="margin-top:2rem;display:flex;flex-direction:column;gap:.75rem;">
    <a href="/admission_process.html" class="btn btn-gold" style="width:100%;justify-content:center;">Apply for 2026</a>
    <a href="/contact.html" class="btn btn-glass" style="width:100%;justify-content:center;color:#fff;">Enquire Now</a>
  </div>
</div>

<!-- GLOBAL SEARCH MODAL -->
<div id="search-modal" class="search-modal">
  <div class="search-modal-overlay"></div>
  <div class="search-modal-content">
    <div class="search-header">
      <i class="fas fa-search search-icon-left"></i>
      <input type="text" id="search-input" placeholder="Search pages, courses, facilities..." autocomplete="off">
      <button class="search-close" id="search-close"><i class="fas fa-times"></i></button>
    </div>
    <div class="search-results" id="search-results">
      <div class="sr-empty">Start typing to search DIET Satara...</div>
    </div>
  </div>
</div>