<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Survey | Alumni Tracer</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .step {
      display: none;
    }
    .step.active {
      display: block;
    }
  </style>
  <!-- [Favicon] icon -->
  <link rel="icon" href="../main_template/dist/assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../main_template/dist/assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="../main_template/dist/assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="../main_template/dist/assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../main_template/dist/assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../main_template/dist/assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="../main_template/dist/assets/css/style-preset.css" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{route('alumni.dashboard')}}" class="b-brand text-primary" style = "display: flex;">
                <i class="fas fa-user-graduate fa-2x" style="color: #2a5caa;"></i>
                <h4 style = "color: rgb(46, 44, 44); text-align: center; margin-top: 4px; margin-left: 5px; font-weight: bold;">ALUMNI TRACER</h4>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">

        
      <li class="pc-item">
  <a href="{{route('alumni.dashboard')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
    <span class="pc-mtext">Dashboard</span>
  </a>
</li>

<li class="pc-item pc-caption">
  <label>Web Functions</label>
  <i class="ti ti-layout-grid"></i>
</li>

<li class="pc-item">
  <a href="{{route('alumni.profile')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-user"></i></span>
    <span class="pc-mtext">Profile</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('alumni.survey')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
    <span class="pc-mtext">Survey</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('alumni.announcements')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-speakerphone"></i></span>
    <span class="pc-mtext">Announcements</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('alumni.events')}}" class="pc-link">
  <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
    <span class="pc-mtext">Events</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('alumni.notifications')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-bell"></i></span>
    <span class="pc-mtext">Notifications</span>
  </a>
</li>


       
      </ul>
     
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . .">
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-mail"></i>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Message</h5>
          <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../main_template/dist/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3:00 AM</span>
                  <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                  <span class="text-muted">2 min ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../main_template/dist/assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">6:00 PM</span>
                  <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                  <span class="text-muted">5 August</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../main_template/dist/assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">2:45 PM</span>
                  <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                  <span class="text-muted">7 hours ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../main_template/dist/assets/images/user/avatar-4.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">9:10 PM</span>
                  <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                  <span class="text-muted">Daily scrum meeting time</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">View all</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="../main_template/dist/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
        <span>Stebin Ben</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="../main_template/dist/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Stebin Ben</h6>
              <span>UI/UX Designer</span>
            </div>
            <a href="{{route('alumni.logout')}}" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
          </div>
        </div>
        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="drp-t1"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-1"
              type="button"
              role="tab"
              aria-controls="drp-tab-1"
              aria-selected="true"
              ><i class="ti ti-user"></i> User</button
            >
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="drp-t2"
              data-bs-toggle="tab"
              data-bs-target="#drp-tab-2"
              type="button"
              role="tab"
              aria-controls="drp-tab-2"
              aria-selected="false"
              ><i class="ti ti-settings"></i> Setting</button
            >
          </li>
        </ul>
        <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
           
             <a href="{{route('alumni.dashboard')}}" class="dropdown-item">
            <i class="ti ti-dashboard"></i>
              <span>Dashboard</span>
            </a>
            <a href="{{route('alumni.profile')}}" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Profile</span>
            </a>
            <a href="{{route('alumni.survey')}}" class="dropdown-item">
              <i class="ti ti-clipboard-list"></i>
              <span>Survey</span>
            </a>
           
          </div>
          <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
        
          <a href="{{route('alumni.announcements')}}" class="dropdown-item">
          <i class="ti ti-speakerphone"></i>
            <span>Announcements</span>
            </a>
            <a href="{{route('alumni.notifications')}}" class="dropdown-item">
            <i class="ti ti-bell"></i>
            <span>Notifications</span>
            </a>
            <a href="{{route('alumni.events')}}" class="dropdown-item">
            <i class="ti ti-phone-call"></i>
            <span>Events</span>
            </a>

          </div>
        </div>  
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">      
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Alumni Tracer</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">User</a></li>
                <li class="breadcrumb-item" aria-current="page">Survey Questioner</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
          <div class="card construction-card">
              <div class="card-body">
                <h3 style = "font-weight: bolder;">📰 SURVEY QUESTIONER</h3><br>
                <hr>

                <form id="surveyForm" method="POST" action="">
                    {{-- number 1 --}}
                    <div class="mb-3">
                    <label class="form-label fw-bold">1. Current employment status:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="employmentStatus" id="employed" value="Employed" required>
                        <label class="form-check-label" for="employed">Employed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="employmentStatus" id="selfEmployed" value="Self-employed">
                        <label class="form-check-label" for="selfEmployed">Self-employed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="employmentStatus" id="unemployed" value="Unemployed">
                        <label class="form-check-label" for="unemployed">Unemployed</label>
                    </div>
                    </div>

                    {{-- number 2 --}}
                 <div class="mb-3">
                    <label class="form-label fw-bold">2. Job title and role description:</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobTitle" id="softwareDeveloper" value="Software Developer" required>
                        <label class="form-check-label" for="softwareDeveloper">Software Developer</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobTitle" id="itSupportSpecialist" value="IT Support Specialist">
                        <label class="form-check-label" for="itSupportSpecialist">IT Support Specialist</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobTitle" id="networkAdministrator" value="Network Administrator">
                        <label class="form-check-label" for="networkAdministrator">Network Administrator</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobTitle" id="systemAnalyst" value="System Analyst">
                        <label class="form-check-label" for="systemAnalyst">System Analyst</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobTitle" id="otherJob" value="Other">
                        <label class="form-check-label" for="otherJob">Other (Please specify)</label>
                    </div>

                    <input type="text" id="otherJobInput" name="jobTitleOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">
                    </div>

                    <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const jobRadios = document.querySelectorAll('input[name="jobTitle"]');
                        const otherJobInput = document.getElementById("otherJobInput");

                        jobRadios.forEach(radio => {
                        radio.addEventListener("change", function () {
                            if (this.value === "Other") {
                            otherJobInput.style.display = "block";
                            otherJobInput.required = true;
                            } else {
                            otherJobInput.style.display = "none";
                            otherJobInput.value = "";
                            otherJobInput.required = false;
                            }
                        });
                        });
                    });
                    </script>



                    {{-- number 3 --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">3. Which industry do you currently work in?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="industry" id="itSoftware" value="IT and Software Development" required>
                        <label class="form-check-label" for="itSoftware">IT and Software Development</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="industry" id="networkAdmin" value="Network Administration">
                        <label class="form-check-label" for="networkAdmin">Network Administration</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="industry" id="databaseMgmt" value="Database Management">
                        <label class="form-check-label" for="databaseMgmt">Database Management</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="industry" id="itSupport" value="IT Support">
                        <label class="form-check-label" for="itSupport">IT Support</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="industry" id="otherIndustry" value="Other">
                        <label class="form-check-label" for="otherIndustry">Other (Please specify)</label>
                    </div>

                    <input type="text" id="otherIndustryInput" name="industryOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">
                    </div>

                    <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const industryRadios = document.querySelectorAll('input[name="industry"]');
                        const otherIndustryInput = document.getElementById("otherIndustryInput");

                        industryRadios.forEach(radio => {
                        radio.addEventListener("change", function () {
                            if (this.value === "Other") {
                            otherIndustryInput.style.display = "block";
                            otherIndustryInput.required = true;
                            } else {
                            otherIndustryInput.style.display = "none";
                            otherIndustryInput.value = "";
                            otherIndustryInput.required = false;
                            }
                        });
                        });
                    });
                    </script>


                    {{-- number 4 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">4. Length of time in your current job:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobDuration" id="less1" value="Less than 1 year" required>
                            <label class="form-check-label" for="less1">Less than 1 year</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobDuration" id="oneToThree" value="1-3 years">
                            <label class="form-check-label" for="oneToThree">1-3 years</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobDuration" id="fourToSix" value="4-6 years">
                            <label class="form-check-label" for="fourToSix">4-6 years</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobDuration" id="moreThanSix" value="More than 6 years">
                            <label class="form-check-label" for="moreThanSix">More than 6 years</label>
                        </div>
                        </div>
                    
                    {{-- number 5 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">5. Have you changed careers since graduation?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerChange" id="careerNo" value="No" required>
                            <label class="form-check-label" for="careerNo">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerChange" id="careerYes" value="Yes">
                            <label class="form-check-label" for="careerYes">Yes</label>
                        </div>
                        <div class="form-group mt-2">
                            <label for="careerReason" class="form-label">If yes, what was your reason for changing, and what is your current field?</label>
                            <input type="text" class="form-control" id="careerReason" name="careerReason" placeholder="Enter reason and current field">
                        </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const yesRadio = document.getElementById("careerYes");
                                const noRadio = document.getElementById("careerNo");
                                const reasonInputGroup = document.getElementById("careerReason").parentElement;

                               
                                reasonInputGroup.style.display = "none";

                                yesRadio.addEventListener("change", function () {
                                if (yesRadio.checked) {
                                    reasonInputGroup.style.display = "block";
                                }
                                });

                                noRadio.addEventListener("change", function () {
                                if (noRadio.checked) {
                                    reasonInputGroup.style.display = "none";
                                    document.getElementById("careerReason").value = "";
                                }
                                });
                            });
                            </script>
                        
                    {{-- number 6 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">6. Overall, how satisfied were you with your educational experience at SLSU?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satisfaction" id="verySatisfied" value="Very Satisfied" required>
                            <label class="form-check-label" for="verySatisfied">Very Satisfied</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satisfaction" id="satisfied" value="Satisfied">
                            <label class="form-check-label" for="satisfied">Satisfied</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satisfaction" id="neutral" value="Neutral">
                            <label class="form-check-label" for="neutral">Neutral</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satisfaction" id="dissatisfied" value="Dissatisfied">
                            <label class="form-check-label" for="dissatisfied">Dissatisfied</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="satisfaction" id="veryDissatisfied" value="Very Dissatisfied">
                            <label class="form-check-label" for="veryDissatisfied">Very Dissatisfied</label>
                        </div>
                        </div>

                    {{-- number 7 --}}
                    <div class="mb-3">
                        <label for="workforcePrep" class="form-label fw-bold">7. How well did the BSIT program at SLSU prepare you for the demands of the modern workforce? (Scale of 1-10)</label>
                        <select class="form-select" id="workforcePrep" name="workforcePrep" required>
                            <option value="" disabled selected>Select a rating</option>
                            <option value="1">1 - Not well at all</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10 - Extremely well</option>
                        </select>
                        </div>
                    
                        
                    {{-- number 8 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">8. What specific skill or knowledge do you feel was the most beneficial during your studies, and how have you applied it in your career?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="beneficialSkill" id="skillProgramming" value="Programming languages" required>
                            <label class="form-check-label" for="skillProgramming">Programming languages (e.g., Java, Python)</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="beneficialSkill" id="skillProblemSolving" value="Problem-solving techniques">
                            <label class="form-check-label" for="skillProblemSolving">Problem-solving techniques</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="beneficialSkill" id="skillDatabase" value="Database management skills">
                            <label class="form-check-label" for="skillDatabase">Database management skills</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="beneficialSkill" id="skillProjectManagement" value="Project management practices">
                            <label class="form-check-label" for="skillProjectManagement">Project management practices</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="beneficialSkill" id="skillNetworking" value="Networking and cybersecurity knowledge">
                            <label class="form-check-label" for="skillNetworking">Networking and cybersecurity knowledge</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="beneficialSkill" id="skillOther" value="Other">
                            <label class="form-check-label" for="skillOther">Other (Please specify)</label>
                        </div>

                        <input type="text" class="form-control mt-2" id="skillOtherInput" name="skillOtherInput" placeholder="Please specify other skill" style="display:none;">
                        </div>

                        <script>
                        document.querySelectorAll('input[name="beneficialSkill"]').forEach((elem) => {
                            elem.addEventListener('change', function() {
                            const otherInput = document.getElementById('skillOtherInput');
                            if (this.id === 'skillOther' && this.checked) {
                                otherInput.style.display = 'block';
                                otherInput.required = true;
                            } else {
                                otherInput.style.display = 'none';
                                otherInput.required = false;
                                otherInput.value = '';
                            }
                            });
                        });
                        </script>
                    
                    {{-- number 9 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">9. Did SLSU provide enough opportunities for hands-on experience (internships, projects, etc.)? What more could have been done?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="handsOnExperience" id="handsOnYes" value="Yes, internships and practical projects were helpful" required>
                            <label class="form-check-label" for="handsOnYes">Yes, internships and practical projects were helpful</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="handsOnExperience" id="handsOnNoCollab" value="No, more industry collaboration opportunities could have been arranged">
                            <label class="form-check-label" for="handsOnNoCollab">No, more industry collaboration opportunities could have been arranged</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="handsOnExperience" id="handsOnMoreProjects" value="More project-based courses with real-world applications">
                            <label class="form-check-label" for="handsOnMoreProjects">More project-based courses with real-world applications</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="handsOnExperience" id="handsOnInternships" value="Internships in leading tech companies">
                            <label class="form-check-label" for="handsOnInternships">Internships in leading tech companies</label>
                        </div>

                        <div class="form-group mt-2" id="handsOnSuggestionGroup" style="display:none;">
                            <label for="handsOnSuggestion" class="form-label">Please share any other suggestions or improvements:</label>
                            <input type="text" class="form-control" id="handsOnSuggestion" name="handsOnSuggestion" placeholder="Your suggestions">
                        </div>
                        </div>

                        <script>
                        document.querySelectorAll('input[name="handsOnExperience"]').forEach((elem) => {
                            elem.addEventListener('change', function() {
                            const suggestionGroup = document.getElementById('handsOnSuggestionGroup');
                            if (this.id !== 'handsOnYes' && this.checked) {
                                suggestionGroup.style.display = 'block';
                                document.getElementById('handsOnSuggestion').required = true;
                            } else {
                                suggestionGroup.style.display = 'none';
                                const input = document.getElementById('handsOnSuggestion');
                                input.required = false;
                                input.value = '';
                            }
                            });
                        });
                        </script>
                    
                    {{-- number 10 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">10. How satisfied were you with the support and guidance provided by faculty members, both academically and professionally?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultySupport" id="facultyVerySatisfied" value="Very Satisfied" required>
                            <label class="form-check-label" for="facultyVerySatisfied">Very Satisfied</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultySupport" id="facultySatisfied" value="Satisfied">
                            <label class="form-check-label" for="facultySatisfied">Satisfied</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultySupport" id="facultyNeutral" value="Neutral">
                            <label class="form-check-label" for="facultyNeutral">Neutral</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultySupport" id="facultyDissatisfied" value="Dissatisfied">
                            <label class="form-check-label" for="facultyDissatisfied">Dissatisfied</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultySupport" id="facultyVeryDissatisfied" value="Very Dissatisfied">
                            <label class="form-check-label" for="facultyVeryDissatisfied">Very Dissatisfied</label>
                        </div>
                        </div>

                    {{-- number 11 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">11. Do you feel that your time at SLSU prepared you for challenges in your job market or industry?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="preparedness" id="preparedYes" value="Yes" required>
                            <label class="form-check-label" for="preparedYes">Yes</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="preparedness" id="preparedNo" value="No">
                            <label class="form-check-label" for="preparedNo">No</label>
                        </div>

                        <div class="form-group mt-2" id="improvementAreaGroup" style="display:none;">
                            <label for="improvementArea" class="form-label">If not, what specific areas of improvement would you recommend?</label>
                            <input type="text" class="form-control" id="improvementArea" name="improvementArea" placeholder="Enter specific areas">
                        </div>
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const yesRadio = document.getElementById("preparedYes");
                            const noRadio = document.getElementById("preparedNo");
                            const improvementGroup = document.getElementById("improvementAreaGroup");
                            const improvementInput = document.getElementById("improvementArea");

                            improvementGroup.style.display = "none";

                            yesRadio.addEventListener("change", () => {
                            if (yesRadio.checked) {
                                improvementGroup.style.display = "none";
                                improvementInput.value = "";
                            }
                            });

                            noRadio.addEventListener("change", () => {
                            if (noRadio.checked) {
                                improvementGroup.style.display = "block";
                            }
                            });
                        });
                        </script>

                    {{-- number 12 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">12. How would you rate the availability and use of university resources (library, internet, lab facilities, etc.) during your studies?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resourceRating" id="resourceExcellent" value="Excellent" required>
                            <label class="form-check-label" for="resourceExcellent">Excellent – All resources were readily available</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resourceRating" id="resourceGood" value="Good">
                            <label class="form-check-label" for="resourceGood">Good – Some resources were available, but limited during peak times</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resourceRating" id="resourceFair" value="Fair">
                            <label class="form-check-label" for="resourceFair">Fair – Often had to wait or search for available equipment</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resourceRating" id="resourcePoor" value="Poor">
                            <label class="form-check-label" for="resourcePoor">Poor – Resources were insufficient for student needs</label>
                        </div>
                        </div>
                        
                    {{-- number 13 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">13. How long did it take you to find your first job after graduation?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobSearchDuration" id="less3months" value="Less than 3 months" required>
                            <label class="form-check-label" for="less3months">Less than 3 months</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobSearchDuration" id="3to6months" value="3-6 months">
                            <label class="form-check-label" for="3to6months">3-6 months</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobSearchDuration" id="6to12months" value="6-12 months">
                            <label class="form-check-label" for="6to12months">6-12 months</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobSearchDuration" id="more12months" value="More than 12 months">
                            <label class="form-check-label" for="more12months">More than 12 months</label>
                        </div>
                        </div>
                    
                    {{-- number 14 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">14. What were the biggest challenges you faced in finding your first job after graduation, and how did you overcome them?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobChallenges" id="lackExperience" value="Lack of work experience (overcame by internships)" required>
                            <label class="form-check-label" for="lackExperience">Lack of work experience (overcame by internships)</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobChallenges" id="limitedOpportunities" value="Limited job opportunities in the region (explored remote positions)">
                            <label class="form-check-label" for="limitedOpportunities">Limited job opportunities in the region (explored remote positions)</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobChallenges" id="highCompetition" value="High competition in the job market (attended networking events)">
                            <label class="form-check-label" for="highCompetition">High competition in the job market (attended networking events)</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobChallenges" id="unclearExpectations" value="Unclear job market expectations (sought career guidance)">
                            <label class="form-check-label" for="unclearExpectations">Unclear job market expectations (sought career guidance)</label>
                        </div>
                        </div>

                    {{-- number 15 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">15. Have you worked in a position related to your BSIT degree?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="relatedPosition" id="relatedYes" value="Yes" required>
                            <label class="form-check-label" for="relatedYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="relatedPosition" id="relatedNo" value="No">
                            <label class="form-check-label" for="relatedNo">No</label>
                        </div>
                        
                        <div class="form-group mt-2" id="differentFieldGroup" style="display:none;">
                            <label for="differentFieldReason" class="form-label">If no, what made you explore a different field?</label>
                            <input type="text" class="form-control" id="differentFieldReason" name="differentFieldReason" placeholder="Please specify">
                        </div>
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const yesRadio = document.getElementById("relatedYes");
                            const noRadio = document.getElementById("relatedNo");
                            const differentFieldGroup = document.getElementById("differentFieldGroup");

                            differentFieldGroup.style.display = "none";

                            yesRadio.addEventListener("change", function () {
                            if (yesRadio.checked) {
                                differentFieldGroup.style.display = "none";
                                document.getElementById("differentFieldReason").value = "";
                            }
                            });

                            noRadio.addEventListener("change", function () {
                            if (noRadio.checked) {
                                differentFieldGroup.style.display = "block";
                            }
                            });
                        });
                        </script>
                    
                    {{-- number 16 --}}
                    <div class="mb-3">
                    <label class="form-label fw-bold">16. How confident did you feel during your job search after graduation?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobConfidence" id="confVery" value="Very Confident" required>
                        <label class="form-check-label" for="confVery">Very Confident</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobConfidence" id="confConfident" value="Confident">
                        <label class="form-check-label" for="confConfident">Confident</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobConfidence" id="confNeutral" value="Neutral">
                        <label class="form-check-label" for="confNeutral">Neutral</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jobConfidence" id="confUnconfident" value="Unconfident">
                        <label class="form-check-label" for="confUnconfident">Unconfident</label>
                    </div>
                    </div>

                    {{-- number 17 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">17. In what ways did your BSIT degree help you stand out in the job market?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeAdvantage" id="advProgramming" value="Strong programming and technical skills" required>
                            <label class="form-check-label" for="advProgramming">Strong programming and technical skills</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeAdvantage" id="advSDLC" value="Good understanding of software development lifecycle">
                            <label class="form-check-label" for="advSDLC">Good understanding of software development lifecycle</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeAdvantage" id="advTools" value="Familiarity with industry-standard tools and platforms">
                            <label class="form-check-label" for="advTools">Familiarity with industry-standard tools and platforms</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeAdvantage" id="advInternship" value="Internship experience with industry exposure">
                            <label class="form-check-label" for="advInternship">Internship experience with industry exposure</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeAdvantage" id="advOther" value="Other">
                            <label class="form-check-label" for="advOther">Other (Please specify)</label>
                        </div>
                        <div class="form-group mt-2" id="otherAdvInputGroup" style="display:none;">
                            <input type="text" class="form-control" id="otherAdvInput" name="otherDegreeAdvantage" placeholder="Please specify">
                        </div>
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                        const otherRadio = document.getElementById("advOther");
                        const otherInputGroup = document.getElementById("otherAdvInputGroup");
                        const radios = document.querySelectorAll('input[name="degreeAdvantage"]');

                        radios.forEach(radio => {
                            radio.addEventListener("change", () => {
                            if (otherRadio.checked) {
                                otherInputGroup.style.display = "block";
                            } else {
                                otherInputGroup.style.display = "none";
                                document.getElementById("otherAdvInput").value = "";
                            }
                            });
                        });
                        });
                        </script>

                    {{-- number 18 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">18. In what ways did your BSIT degree help you stand out in the job market?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="degreeAdvantage" id="advProgramming" value="Strong programming and technical skills" required>
                                <label class="form-check-label" for="advProgramming">Strong programming and technical skills</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="degreeAdvantage" id="advSDLC" value="Good understanding of software development lifecycle">
                                <label class="form-check-label" for="advSDLC">Good understanding of software development lifecycle</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="degreeAdvantage" id="advTools" value="Familiarity with industry-standard tools and platforms">
                                <label class="form-check-label" for="advTools">Familiarity with industry-standard tools and platforms</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="degreeAdvantage" id="advInternship" value="Internship experience with industry exposure">
                                <label class="form-check-label" for="advInternship">Internship experience with industry exposure</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="degreeAdvantage" id="advOther" value="Other">
                                <label class="form-check-label" for="advOther">Other (Please specify)</label>
                            </div>
                            <div class="form-group mt-2" id="otherAdvInputGroup" style="display:none;">
                                <input type="text" class="form-control" id="otherAdvInput" name="otherDegreeAdvantage" placeholder="Please specify">
                            </div>
                            </div>

                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                            const otherRadio = document.getElementById("advOther");
                            const otherInputGroup = document.getElementById("otherAdvInputGroup");
                            const radios = document.querySelectorAll('input[name="degreeAdvantage"]');

                            radios.forEach(radio => {
                                radio.addEventListener("change", () => {
                                if (otherRadio.checked) {
                                    otherInputGroup.style.display = "block";
                                } else {
                                    otherInputGroup.style.display = "none";
                                    document.getElementById("otherAdvInput").value = "";
                                }
                                });
                            });
                            });
                            </script>
                
                    {{-- number 19 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">19. How do you feel about the job market for BSIT graduates in the region or country? Has it changed since you graduated?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobMarketOpinion" id="marketImproved" value="Improved – More job opportunities and higher demand for IT professionals" required>
                            <label class="form-check-label" for="marketImproved">Improved – More job opportunities and higher demand for IT professionals</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobMarketOpinion" id="marketStable" value="Stable – Job market has remained the same">
                            <label class="form-check-label" for="marketStable">Stable – Job market has remained the same</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobMarketOpinion" id="marketDeclined" value="Declined – Limited job openings in the tech industry">
                            <label class="form-check-label" for="marketDeclined">Declined – Limited job openings in the tech industry</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jobMarketOpinion" id="marketUnchanged" value="Unchanged – No significant change in the job market">
                            <label class="form-check-label" for="marketUnchanged">Unchanged – No significant change in the job market</label>
                        </div>
                        </div>
                    
                    {{-- number 20 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">20. Do you believe that SLSU provided sufficient career counseling or support services to help you transition from university to your career?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerSupport" id="careerSupportYes" value="Yes, the services were helpful" required>
                            <label class="form-check-label" for="careerSupportYes">Yes, the services were helpful</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerSupport" id="careerSupportNo" value="No, the services were lacking">
                            <label class="form-check-label" for="careerSupportNo">No, the services were lacking</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerSupport" id="careerSupportSomewhat" value="Somewhat, but more guidance is needed">
                            <label class="form-check-label" for="careerSupportSomewhat">Somewhat, but more guidance is needed</label>
                        </div>
                        </div>

                    {{-- number 21 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">21. In your opinion, how would you rate the level of support you have received for career advancement since graduation?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportExcellent" value="Excellent – Regular mentorship and career development opportunities" required>
                            <label class="form-check-label" for="supportExcellent">Excellent – Regular mentorship and career development opportunities</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportGood" value="Good – Occasional support, but more could have been offered">
                            <label class="form-check-label" for="supportGood">Good – Occasional support, but more could have been offered.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportAverage" value="Average – Limited support for career growth">
                            <label class="form-check-label" for="supportAverage">Average – Limited support for career growth</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportPoor" value="Poor – No support for career advancement">
                            <label class="form-check-label" for="supportPoor">Poor – No support for career advancement</label>
                        </div>
                        </div>

                    {{-- number 22 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">22. How often have you participated in professional development activities, such as conferences, certifications, or skills training?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devRegularly" value="Regularly (every 6 months or less)" required>
                                <label class="form-check-label" for="devRegularly">Regularly (every 6 months or less)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devOccasionally" value="Occasionally (once a year)">
                                <label class="form-check-label" for="devOccasionally">Occasionally (once a year)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devRarely" value="Rarely (once every few years)">
                                <label class="form-check-label" for="devRarely">Rarely (once every few years)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devNever" value="Never">
                                <label class="form-check-label" for="devNever">Never</label>
                            </div>
                            </div>

                    {{-- number 23 --}}
                        <div class="mb-3">
                        <label class="form-label fw-bold">23. Have you noticed changes in your role or responsibilities since you started your career? If yes, how has your career evolved?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerChangeEvolution" id="leadershipRole" value="Leadership Roles" required>
                            <label class="form-check-label" for="leadershipRole">Yes, I have taken on more leadership roles</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerChangeEvolution" id="managementRole" value="Moved to Management">
                            <label class="form-check-label" for="managementRole">Yes, I moved from technical work to management.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerChangeEvolution" id="complexProjects" value="More Complex Projects">
                            <label class="form-check-label" for="complexProjects">Yes, I’ve had opportunities to work on more complex projects</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="careerChangeEvolution" id="roleSame" value="Role Remained Same">
                            <label class="form-check-label" for="roleSame">No, my role has remained the same</label>
                        </div>
                        </div>
                        
                    {{-- number 24 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">24. What was your starting salary after graduation?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startingSalary" id="salary1" value="Below 10,000" required>
                            <label class="form-check-label" for="salary1">Below ₱10,000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startingSalary" id="salary2" value="10,000-19,999">
                            <label class="form-check-label" for="salary2">₱10,000 - ₱19,999</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startingSalary" id="salary3" value="20,000-29,999">
                            <label class="form-check-label" for="salary3">₱20,000 - ₱29,999</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startingSalary" id="salary4" value="30,000-39,999">
                            <label class="form-check-label" for="salary4">₱30,000 - ₱39,999</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startingSalary" id="salary5" value="40,000 and above">
                            <label class="form-check-label" for="salary5">₱40,000 and above</label>
                        </div>
          
                        </div>

                    {{-- number 25 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">25. Are you satisfied with your current salary and benefits?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="salarySatisfaction" id="salarySatYes" value="Yes" required>
                                <label class="form-check-label" for="salarySatYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="salarySatisfaction" id="salarySatNo" value="No">
                                <label class="form-check-label" for="salarySatNo">No</label>
                            </div>
                            <div class="form-group mt-2" id="salaryChangesGroup" style="display: none;">
                                <label for="salaryChanges" class="form-label">If no, what changes would you like to see in your compensation package?</label>
                                <input type="text" class="form-control" id="salaryChanges" name="salaryChanges" placeholder="Enter desired changes">
                            </div>
                            </div>

                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                            const yesRadio = document.getElementById("salarySatYes");
                            const noRadio = document.getElementById("salarySatNo");
                            const changesGroup = document.getElementById("salaryChangesGroup");
                            const changesInput = document.getElementById("salaryChanges");

                            changesGroup.style.display = "none";

                            yesRadio.addEventListener("change", () => {
                                if (yesRadio.checked) {
                                changesGroup.style.display = "none";
                                changesInput.value = "";
                                }
                            });

                            noRadio.addEventListener("change", () => {
                                if (noRadio.checked) {
                                changesGroup.style.display = "block";
                                }
                            });
                            });
                            </script>

                    {{-- number 26 --}}
                     <div class="mb-3">
                        <label class="form-label fw-bold">26. Do you believe your degree from SLSU has contributed to your earning potential? Why or why not?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeEarningPotential" id="earning1" value="Yes, the degree gave me foundational knowledge and credibility in the job market" required>
                            <label class="form-check-label" for="earning1">Yes, the degree gave me foundational knowledge and credibility in the job market</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeEarningPotential" id="earning2" value="Yes, but more hands-on experience would have been beneficial">
                            <label class="form-check-label" for="earning2">Yes, but more hands-on experience would have been beneficial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeEarningPotential" id="earning3" value="No, the job market values skills and experience more than academic credentials">
                            <label class="form-check-label" for="earning3">No, the job market values skills and experience more than academic credentials</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="degreeEarningPotential" id="earning4" value="No, I had to acquire additional certifications to improve my earning potential">
                            <label class="form-check-label" for="earning4">No, I had to acquire additional certifications to improve my earning potential</label>
                        </div>
                        </div>

                    {{-- number 27 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">27. Have you been involved in any alumni activities or networking events since graduation? If yes, how valuable were they to you?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="alumniInvolvement" id="alumniNo" value="No" required>
                                <label class="form-check-label" for="alumniNo">No</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="alumniInvolvement" id="alumniYes" value="Yes">
                                <label class="form-check-label" for="alumniYes">Yes</label>
                            </div>
                            <div class="form-group mt-2" id="alumniValueGroup" style="display:none;">
                                <label for="alumniValue" class="form-label">If yes, how valuable were they to you?</label>
                                <select class="form-select" id="alumniValue" name="alumniValue">
                                <option value="" selected disabled>Select value</option>
                                <option value="Very Valuable">Very Valuable</option>
                                <option value="Somewhat Valuable">Somewhat Valuable</option>
                                <option value="Neutral">Neutral</option>
                                <option value="Not Valuable">Not Valuable</option>
                                </select>
                            </div>
                            </div>

                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const yesRadio = document.getElementById("alumniYes");
                                const noRadio = document.getElementById("alumniNo");
                                const valueGroup = document.getElementById("alumniValueGroup");

                                yesRadio.addEventListener("change", function () {
                                if (yesRadio.checked) {
                                    valueGroup.style.display = "block";
                                }
                                });

                                noRadio.addEventListener("change", function () {
                                if (noRadio.checked) {
                                    valueGroup.style.display = "none";
                                    document.getElementById("alumniValue").value = "";
                                }
                                });
                            });
                            </script>
                    
                    {{-- number 28 --}}
                    <div class="mb-3">
                    <label class="form-label fw-bold">34. Would you be willing to mentor current students, offer internships, or share your professional journey with SLSU?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="willingToMentor" id="mentorYes" value="Yes" required>
                        <label class="form-check-label" for="mentorYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="willingToMentor" id="mentorNo" value="No">
                        <label class="form-check-label" for="mentorNo">No</label>
                    </div>
                    </div>

                    {{-- number 29 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">29. How can SLSU better engage its alumni in helping shape the future of the university and current students?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEngagement" id="engageNetworking" value="Regular alumni networking events" required>
                            <label class="form-check-label" for="engageNetworking">Regular alumni networking events</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEngagement" id="engageMentorship" value="More alumni mentorship programs">
                            <label class="form-check-label" for="engageMentorship">More alumni mentorship programs</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEngagement" id="engagePlatform" value="A platform for alumni to share career advice and job opportunities">
                            <label class="form-check-label" for="engagePlatform">A platform for alumni to share career advice and job opportunities</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEngagement" id="engageProjects" value="Collaborative projects between alumni and students">
                            <label class="form-check-label" for="engageProjects">Collaborative projects between alumni and students</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEngagement" id="engageOther" value="Other">
                            <label class="form-check-label" for="engageOther">Other (Please specify)</label>
                        </div>
                        <div class="mt-2" id="otherAlumniEngagementGroup" style="display:none;">
                            <input type="text" class="form-control" id="otherAlumniEngagementInput" name="otherAlumniEngagementInput" placeholder="Please specify">
                        </div>
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const otherRadio = document.getElementById("engageOther");
                            const otherInputGroup = document.getElementById("otherAlumniEngagementGroup");

                            document.querySelectorAll('input[name="alumniEngagement"]').forEach((elem) => {
                            elem.addEventListener("change", function() {
                                if (otherRadio.checked) {
                                otherInputGroup.style.display = "block";
                                } else {
                                otherInputGroup.style.display = "none";
                                document.getElementById("otherAlumniEngagementInput").value = "";
                                }
                            });
                            });
                        });
                        </script>

                    {{-- number 30 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">30. What resources or support would you like to see SLSU offer its alumni in the future?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniSupport" id="resource1" value="Access to professional development resources and courses" required>
                            <label class="form-check-label" for="resource1">Access to professional development resources and courses</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniSupport" id="resource2" value="Alumni-only networking events">
                            <label class="form-check-label" for="resource2">Alumni-only networking events</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniSupport" id="resource3" value="Job boards or career counseling specifically for alumni">
                            <label class="form-check-label" for="resource3">Job boards or career counseling specifically for alumni</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniSupport" id="resource4" value="Opportunities to contribute to the university through mentoring or guest lectures">
                            <label class="form-check-label" for="resource4">Opportunities to contribute to the university through mentoring or guest lectures</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniSupport" id="resourceOther" value="Other">
                            <label class="form-check-label" for="resourceOther">Other (Please specify)</label>
                        </div>

                        <div class="form-group mt-2" id="otherAlumniSupportGroup" style="display:none;">
                            <input type="text" class="form-control" id="otherAlumniSupport" name="otherAlumniSupport" placeholder="Please specify">
                        </div>
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                        const radios = document.querySelectorAll('input[name="alumniSupport"]');
                        const otherInputGroup = document.getElementById("otherAlumniSupportGroup");

                        radios.forEach(radio => {
                            radio.addEventListener("change", function () {
                            if (this.value === "Other") {
                                otherInputGroup.style.display = "block";
                            } else {
                                otherInputGroup.style.display = "none";
                                document.getElementById("otherAlumniSupport").value = "";
                            }
                            });
                        });
                        });
                        </script>
                
                    {{-- number 31 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">31. How can the university improve its relationship with alumni and foster a sense of community?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniCommunity" id="community1" value="Organize annual alumni reunions and events" required>
                            <label class="form-check-label" for="community1">Organize annual alumni reunions and events</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniCommunity" id="community2" value="Provide platforms for alumni to share their stories and successes">
                            <label class="form-check-label" for="community2">Provide platforms for alumni to share their stories and successes</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniCommunity" id="community3" value="Create an online alumni portal for ongoing communication and support">
                            <label class="form-check-label" for="community3">Create an online alumni portal for ongoing communication and support</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniCommunity" id="community4" value="Engage alumni in university decision-making processes">
                            <label class="form-check-label" for="community4">Engage alumni in university decision-making processes</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniCommunity" id="communityOther" value="Other">
                            <label class="form-check-label" for="communityOther">Other (Please specify)</label>
                        </div>

                        <div class="form-group mt-2" id="otherAlumniCommunityGroup" style="display:none;">
                            <input type="text" class="form-control" id="otherAlumniCommunity" name="otherAlumniCommunity" placeholder="Please specify">
                        </div>
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                        const radios = document.querySelectorAll('input[name="alumniCommunity"]');
                        const otherInputGroup = document.getElementById("otherAlumniCommunityGroup");

                        radios.forEach(radio => {
                            radio.addEventListener("change", function () {
                            if (this.value === "Other") {
                                otherInputGroup.style.display = "block";
                            } else {
                                otherInputGroup.style.display = "none";
                                document.getElementById("otherAlumniCommunity").value = "";
                            }
                            });
                        });
                        });
                        </script>
                
                    {{-- number 32 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">32. Would you be willing to contribute financially or in other ways to support future students or university projects?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contributeSupport" id="contributeYes" value="Yes" required>
                            <label class="form-check-label" for="contributeYes">Yes</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contributeSupport" id="contributeNo" value="No">
                            <label class="form-check-label" for="contributeNo">No</label>
                        </div>
                        </div>
                    
                    {{-- number 33 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">33. How likely are you to participate in future alumni events or activities hosted by SLSU?</label>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="futureParticipation" id="veryLikely" value="Very Likely" required>
                            <label class="form-check-label" for="veryLikely">Very Likely</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="futureParticipation" id="likely" value="Likely">
                            <label class="form-check-label" for="likely">Likely</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="futureParticipation" id="neutral" value="Neutral">
                            <label class="form-check-label" for="neutral">Neutral</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="futureParticipation" id="unlikely" value="Unlikely">
                            <label class="form-check-label" for="unlikely">Unlikely</label>
                        </div>
                        </div>
                    
                    {{-- number 34 --}}
                        <div class="mb-3">
                        <label class="form-label fw-bold">34. What types of alumni events or programs would you like to see offered by the university?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEvents" id="careerWorkshops" value="Career development workshops and webinars" required>
                            <label class="form-check-label" for="careerWorkshops">Career development workshops and webinars</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEvents" id="mentorshipPrograms" value="Alumni mentorship programs for current students">
                            <label class="form-check-label" for="mentorshipPrograms">Alumni mentorship programs for current students</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEvents" id="networkingEvents" value="Networking events in major cities">
                            <label class="form-check-label" for="networkingEvents">Networking events in major cities</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="alumniEvents" id="guestLectures" value="Guest lectures and workshops by successful alumni">
                            <label class="form-check-label" for="guestLectures">Guest lectures and workshops by successful alumni</label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="alumniEvents" id="otherEvent" value="Other">
                            <label class="form-check-label" for="otherEvent">Other (Please specify)</label>
                        </div>
                        <input type="text" class="form-control mt-1" id="otherEventText" name="otherEventText" placeholder="Please specify" style="display:none;">

                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const otherRadio = document.getElementById("otherEvent");
                            const otherText = document.getElementById("otherEventText");
                            const radios = document.querySelectorAll('input[name="alumniEvents"]');

                            radios.forEach(radio => {
                            radio.addEventListener("change", function () {
                                if (otherRadio.checked) {
                                otherText.style.display = "block";
                                otherText.required = true;
                                } else {
                                otherText.style.display = "none";
                                otherText.value = "";
                                otherText.required = false;
                                }
                            });
                            });
                        });
                        </script>
                
            {{-- number 35 --}}
            <div class="mb-3">
                <label class="form-label fw-bold">34. What additional steps can SLSU take to build stronger ties with its alumni network?</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniTies" id="alumniOffice" value="Establish a dedicated alumni office or team" required>
                    <label class="form-check-label" for="alumniOffice">Establish a dedicated alumni office or team</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniTies" id="giveBackOpportunities" value="Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)">
                    <label class="form-check-label" for="giveBackOpportunities">Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniTies" id="newsletter" value="Create an alumni newsletter or digital publication">
                    <label class="form-check-label" for="newsletter">Create an alumni newsletter or digital publication</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniTies" id="socialMediaCommunity" value="Foster an alumni community through social media and online platforms">
                    <label class="form-check-label" for="socialMediaCommunity">Foster an alumni community through social media and online platforms</label>
                </div>

                <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="alumniTies" id="otherTies" value="Other">
                    <label class="form-check-label" for="otherTies">Other (Please specify)</label>
                </div>
                <input type="text" class="form-control mt-1" id="otherTiesText" name="otherTiesText" placeholder="Please specify" style="display:none;">

                </div>

                <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const otherRadio = document.getElementById("otherTies");
                    const otherText = document.getElementById("otherTiesText");
                    const radios = document.querySelectorAll('input[name="alumniTies"]');

                    radios.forEach(radio => {
                    radio.addEventListener("change", function () {
                        if (otherRadio.checked) {
                        otherText.style.display = "block";
                        otherText.required = true;
                        } else {
                        otherText.style.display = "none";
                        otherText.value = "";
                        otherText.required = false;
                        }
                    });
                    });
                });
                </script>
        
        {{-- number 36 --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">34. In your opinion, what aspects of the BSIT program at SLSU should be updated or improved for future students?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bsitImprovements" id="handsOnLabs" value="Incorporate more hands-on labs and practical exercises" required>
                        <label class="form-check-label" for="handsOnLabs">Incorporate more hands-on labs and practical exercises</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bsitImprovements" id="modernTech" value="Integrate more courses on modern technologies (e.g., AI, Data Science)">
                        <label class="form-check-label" for="modernTech">Integrate more courses on modern technologies (e.g., AI, Data Science)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bsitImprovements" id="industryExposure" value="Increase exposure to industry practices and software tools">
                        <label class="form-check-label" for="industryExposure">Increase exposure to industry practices and software tools</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bsitImprovements" id="softSkills" value="Focus more on communication and soft skills development">
                        <label class="form-check-label" for="softSkills">Focus more on communication and soft skills development</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bsitImprovements" id="otherImprovement" value="Other">
                        <label class="form-check-label" for="otherImprovement">Other (Please specify)</label>
                    </div>

                    <input type="text" id="otherImprovementInput" name="bsitImprovementsOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">

                    </div>

                    <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const radios = document.querySelectorAll('input[name="bsitImprovements"]');
                        const otherInput = document.getElementById("otherImprovementInput");

                        radios.forEach(radio => {
                        radio.addEventListener("change", function () {
                            if (this.value === "Other") {
                            otherInput.style.display = "block";
                            otherInput.required = true;
                            } else {
                            otherInput.style.display = "none";
                            otherInput.value = "";
                            otherInput.required = false;
                            }
                        });
                        });
                    });
                    </script>


        {{-- number 37 --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">37. What advice would you offer to current students in the BSIT program to help them succeed in their studies and career paths?</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bsitAdvice" id="beProactive" value="Be proactive in seeking internships and real-world experience" required>
                            <label class="form-check-label" for="beProactive">Be proactive in seeking internships and real-world experience</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bsitAdvice" id="buildNetwork" value="Build a strong network with professors and industry professionals">
                            <label class="form-check-label" for="buildNetwork">Build a strong network with professors and industry professionals</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bsitAdvice" id="stayUpdated" value="Stay updated with the latest industry trends and technologies">
                            <label class="form-check-label" for="stayUpdated">Stay updated with the latest industry trends and technologies</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bsitAdvice" id="focusSkills" value="Focus on developing both technical and soft skills">
                            <label class="form-check-label" for="focusSkills">Focus on developing both technical and soft skills</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bsitAdvice" id="otherAdvice" value="Other">
                            <label class="form-check-label" for="otherAdvice">Other (Please specify)</label>
                        </div>

                        <input type="text" id="otherAdviceInput" name="bsitAdviceOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">
                        </div>

                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const radios = document.querySelectorAll('input[name="bsitAdvice"]');
                            const otherInput = document.getElementById("otherAdviceInput");

                            radios.forEach(radio => {
                            radio.addEventListener("change", function () {
                                if (this.value === "Other") {
                                otherInput.style.display = "block";
                                otherInput.required = true;
                                } else {
                                otherInput.style.display = "none";
                                otherInput.value = "";
                                otherInput.required = false;
                                }
                            });
                            });
                        });
                        </script>


        {{-- number 38 --}}
            <div class="mb-3">
            <label class="form-label fw-bold">38. What do you wish you had known before graduating that would have better prepared you for life after university?</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="preparationWish" id="networkingImportance" value="The importance of networking and building professional relationships" required>
                <label class="form-check-label" for="networkingImportance">The importance of networking and building professional relationships</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="preparationWish" id="jobSearchProcess" value="How to handle the job search process more effectively">
                <label class="form-check-label" for="jobSearchProcess">How to handle the job search process more effectively</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="preparationWish" id="internshipExperience" value="The significance of gaining work experience through internships">
                <label class="form-check-label" for="internshipExperience">The significance of gaining work experience through internships</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="preparationWish" id="careerExpectations" value="How to manage career expectations and growth">
                <label class="form-check-label" for="careerExpectations">How to manage career expectations and growth</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="preparationWish" id="otherPreparationWish" value="Other">
                <label class="form-check-label" for="otherPreparationWish">Other (Please specify)</label>
            </div>

            <input type="text" id="otherPreparationWishInput" name="preparationWishOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">
            </div>

            <script>
            document.addEventListener("DOMContentLoaded", function () {
                const radios = document.querySelectorAll('input[name="preparationWish"]');
                const otherInput = document.getElementById("otherPreparationWishInput");

                radios.forEach(radio => {
                radio.addEventListener("change", function () {
                    if (this.value === "Other") {
                    otherInput.style.display = "block";
                    otherInput.required = true;
                    } else {
                    otherInput.style.display = "none";
                    otherInput.value = "";
                    otherInput.required = false;
                    }
                });
                });
            });
            </script>


        {{-- number 39 --}}
                <div class="mb-3">
                <label class="form-label fw-bold">39. How do you think the alumni program at SLSU can better serve the needs of graduates?</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniProgramImprovement" id="careerEvents" value="By offering more career-oriented events and workshops" required>
                    <label class="form-check-label" for="careerEvents">By offering more career-oriented events and workshops</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniProgramImprovement" id="jobBoards" value="Providing access to job boards and internship opportunities">
                    <label class="form-check-label" for="jobBoards">Providing access to job boards and internship opportunities</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniProgramImprovement" id="certificationPrograms" value="Offering ongoing education or certification programs">
                    <label class="form-check-label" for="certificationPrograms">Offering ongoing education or certification programs</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniProgramImprovement" id="alumniForum" value="Providing a forum for alumni to connect and collaborate">
                    <label class="form-check-label" for="alumniForum">Providing a forum for alumni to connect and collaborate</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alumniProgramImprovement" id="otherAlumniProgram" value="Other">
                    <label class="form-check-label" for="otherAlumniProgram">Other (Please specify)</label>
                </div>

                <input type="text" id="otherAlumniProgramInput" name="alumniProgramOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">
                </div>

                <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const radios = document.querySelectorAll('input[name="alumniProgramImprovement"]');
                    const otherInput = document.getElementById("otherAlumniProgramInput");

                    radios.forEach(radio => {
                    radio.addEventListener("change", function () {
                        if (this.value === "Other") {
                        otherInput.style.display = "block";
                        otherInput.required = true;
                        } else {
                        otherInput.style.display = "none";
                        otherInput.value = "";
                        otherInput.required = false;
                        }
                    });
                    });
                });
                </script>


        {{-- number 40 --}}
            <div class="mb-3">
            <label class="form-label fw-bold">40. Please share any other feedback or suggestions you have for improving SLSU’s educational programs or alumni engagement.</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackImprovement" id="techIntegration" value="Improve the integration of technology in the classroom" required>
                <label class="form-check-label" for="techIntegration">Improve the integration of technology in the classroom</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackImprovement" id="practicalTraining" value="Offer more practical and industry-oriented training">
                <label class="form-check-label" for="practicalTraining">Offer more practical and industry-oriented training</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackImprovement" id="strongerAlumniNetwork" value="Create a stronger alumni network for mentorship and career growth">
                <label class="form-check-label" for="strongerAlumniNetwork">Create a stronger alumni network for mentorship and career growth</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackImprovement" id="closerTies" value="Foster closer ties between current students and alumni for better knowledge transfer">
                <label class="form-check-label" for="closerTies">Foster closer ties between current students and alumni for better knowledge transfer</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackImprovement" id="otherFeedback" value="Other">
                <label class="form-check-label" for="otherFeedback">Other (Please specify)</label>
            </div>

            <input type="text" id="otherFeedbackInput" name="feedbackOther" placeholder="Please specify" style="display:none; margin-top: 5px;" class="form-control">
            </div>

            <script>
            document.addEventListener("DOMContentLoaded", function () {
                const radios = document.querySelectorAll('input[name="feedbackImprovement"]');
                const otherInput = document.getElementById("otherFeedbackInput");

                radios.forEach(radio => {
                radio.addEventListener("change", function () {
                    if (this.value === "Other") {
                    otherInput.style.display = "block";
                    otherInput.required = true;
                    } else {
                    otherInput.style.display = "none";
                    otherInput.value = "";
                    otherInput.required = false;
                    }
                });
                });
            });
            </script>
                </div>
            </form>
              </div>
         </div>

        <!-- [ sample-page ] end -->
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1">
         <p class="m-0">
           © Van's Group Capstone Project 2025
         </p>

        </div>
        
      </div>
    </div>
  </footer>

  <!-- [Page Specific JS] start -->
  <script src="../main_template/dist/assets/js/plugins/apexcharts.min.js"></script>
  <script src="../main_template/dist/assets/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="../main_template/dist/assets/js/plugins/popper.min.js"></script>
  <script src="../main_template/dist/assets/js/plugins/simplebar.min.js"></script>
  <script src="../main_template/dist/assets/js/plugins/bootstrap.min.js"></script>
  <script src="../main_template/dist/assets/js/fonts/custom-font.js"></script>
  <script src="../main_template/dist/assets/js/pcoded.js"></script>
  <script src="../main_template/dist/assets/js/plugins/feather.min.js"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    

</body>
<!-- [Body] end -->

</html>