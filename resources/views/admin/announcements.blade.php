<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Annoucements | Alumni Tracer</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">
<link href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">

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
      <a href="{{route('admin.dashboard')}}" class="b-brand text-primary" style = "display: flex;">
                <i class="fas fa-user-graduate fa-2x" style="color: #2a5caa;"></i>
                <h4 style = "color: rgb(46, 44, 44); text-align: center; margin-top: 4px; margin-left: 5px; font-weight: bold;">ALUMNI TRACER</h4>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">

        
      <li class="pc-item">
  <a href="{{route('admin.dashboard')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
    <span class="pc-mtext">Admin Dashboard</span>
  </a>
</li>

<li class="pc-item pc-caption">
  <label>Web Functions</label>
  <i class="ti ti-layout-grid"></i>
</li>

<li class="pc-item">
  <a href="{{route('admin.profile')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-user"></i></span>
    <span class="pc-mtext">Admin Profile</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('admin.survey')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
    <span class="pc-mtext">Survey Data</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('admin.announcements')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-speakerphone"></i></span>
    <span class="pc-mtext">Announcements</span>
  </a>
</li>


<li class="pc-item">
  <a href="{{route('admin.events')}}" class="pc-link">
  <span class="pc-micon"><i class="ti ti-calendar-event"></i></span>
    <span class="pc-mtext">Manage Events</span>
  </a>
</li>

<li class="pc-item">
  <a href="{{route('admin.notifications')}}" class="pc-link">
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
            <a href="{{route('admin.logout')}}" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
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
              ><i class="ti ti-user"></i> Admin</button
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
           
             <a href="{{route('admin.dashboard')}}" class="dropdown-item">
            <i class="ti ti-dashboard"></i>
              <span>Dashboard</span>
            </a>
            <a href="{{route('admin.profile')}}" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Profile</span>
            </a>
            <a href="{{route('admin.survey')}}" class="dropdown-item">
              <i class="ti ti-clipboard-list"></i>
              <span>Survey</span>
            </a>
           
          </div>
          <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
        
          <a href="{{route('admin.announcements')}}" class="dropdown-item">
          <i class="ti ti-speakerphone"></i>
            <span>Announcements</span>
            </a>
            <a href="{{route('admin.notifications')}}" class="dropdown-item">
            <i class="ti ti-bell"></i>
            <span>Notifications</span>
            </a>
            <a href="{{route('admin.events')}}" class="dropdown-item">
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
                <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                <li class="breadcrumb-item" aria-current="page">Announcements</li>
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
                        <div class="col-md-12 col-xl-12">
                      
                                <a href="#" 
                                  class="btn btn-primary d-inline-flex align-items-center" 
                                  data-bs-toggle="offcanvas" 
                                  data-bs-target="#addAnnouncement" 
                                  aria-controls="addAnnouncement">
                                    <i class="ti ti-bullhorn f-18 me-2"></i> 📢 Make an announcement
                                </a>

                                <!-- Offcanvas form panel -->
                         <div class="offcanvas offcanvas-end" tabindex="-1" id="addAnnouncement" aria-labelledby="addAnnouncement">
                                        <div class="offcanvas-header border-bottom">
                                          <h5 class="offcanvas-title" id="announcementLabel">
                                            <i class="ti ti-edit me-2 text-primary"></i> New Announcement
                                          </h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>

                                        <div class="offcanvas-body px-4 py-3">
                                          <form id="announcementForm" method="POST" action="/submit-announcement" novalidate>
                                            @csrf

                                            <div class="mb-3">
                                              <label for="announcementTitle" class="form-label fw-semibold">📌 Title</label>
                                              <input type="text" class="form-control" id="announcementTitle" name="title" placeholder="Enter announcement title" required>
                                              <div class="invalid-feedback">Please enter a title.</div>
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementMessage" class="form-label fw-semibold">📝 Message</label>
                                              <textarea class="form-control" id="announcementMessage" name="message" rows="4" placeholder="Write your message here..." required></textarea>
                                              <div class="invalid-feedback">Please enter a message.</div>
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementDate" class="form-label fw-semibold">📅 Date</label>
                                              <input type="date" class="form-control" id="announcementDate" name="date" required>
                                              <div class="invalid-feedback">Please select a date.</div>
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementLocation" class="form-label fw-semibold">📍 Location</label>
                                              <input type="text" class="form-control" id="announcementLocation" name="location" placeholder="Where will this take place?">
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementMention" class="form-label fw-semibold">🔔 Mention <small class="text-muted">(optional)</small></label>
                                              <input type="text" class="form-control" id="announcementMention" name="mention" placeholder="E.g., @everyone, @admins">
                                            </div>

                                            <div class="d-grid">
                                              <button type="submit" class="btn btn-primary">
                                                <i class="ti ti-check me-1"></i> Submit Announcement
                                              </button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>

                          <br><hr>
                              <h5 class="mb-3"> Announcements</h5>
                              <div class="card">
                                <div class="list-group list-group-flush">
                                  <div class="list-group-item d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                      <div class="avtar avtar-s rounded-circle text-success bg-light-success me-3">
                                        <span style="font-size:18px;">📢</span>
                                      </div>
                                      <div>
                                        <h6 class="mb-1">Alumni Gathering</h6>
                                        <p class="mb-0 text-muted">Scheduled on May 28, 2025.</p>
                                        <p class="mb-0">First 9 words of the information in db then after that display ... for more information</p>
                                      </div>
                                    </div>
                                    
                                    <div class="d-flex align-items-center gap-3">
                                      <!-- Info icon wrapped with a tag to open offcanvas -->
                                      <a href="#" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#informationcanvas" aria-controls="informationcanvas" title="More info">
                                        <div class="avtar avtar-s rounded-circle text-primary bg-light-primary d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                                          <i class="ti ti-info-circle f-18"></i>
                                        </div>
                                      </a>

                                      <a href="#" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#editInformationcanvas" aria-controls="editInformationcanvas" title="More info">
                                        <div class="avtar avtar-s rounded-circle text-success bg-light-success d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                                            <i class="ti ti-edit f-18"></i>
                                        </div>
                                      </a>

                                       <a href="#" class="text-danger" data-bs-toggle="offcanvas" data-bs-target="#deleteAnnouncementCanvas" aria-controls="deleteAnnouncementCanvas" title="More info">
                                        <div class="avtar avtar-s rounded-circle text-danger bg-light-danger d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                                               <i class="ti ti-trash f-18"></i>
                                        </div>
                                      </a>
                                    </div>
                                  </div>

                                    <!-- [start] edit information Offcanvas form panel -->
                                     <div class="offcanvas offcanvas-end" tabindex="-1" id="editInformationcanvas" aria-labelledby="editInformationcanvas">
                                        <div class="offcanvas-header border-bottom">
                                          <h5 class="offcanvas-title" id="announcementLabel">
                                            <i class="ti ti-edit me-2 text-primary"></i> Edit Information
                                          </h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>

                                        <div class="offcanvas-body px-4 py-3">
                                          <form id="announcementForm" method="POST" action="/submit-announcement" novalidate>
                                            @csrf

                                            <div class="mb-3">
                                              <label for="announcementTitle" class="form-label fw-semibold">📌 Title</label>
                                              <input type="text" class="form-control" id="announcementTitle" name="title" placeholder="Enter announcement title" required>
                                              <div class="invalid-feedback">Please enter a title.</div>
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementMessage" class="form-label fw-semibold">📝 Message</label>
                                              <textarea class="form-control" id="announcementMessage" name="message" rows="4" placeholder="Write your message here..." required></textarea>
                                              <div class="invalid-feedback">Please enter a message.</div>
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementDate" class="form-label fw-semibold">📅 Date</label>
                                              <input type="date" class="form-control" id="announcementDate" name="date" required>
                                              <div class="invalid-feedback">Please select a date.</div>
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementLocation" class="form-label fw-semibold">📍 Location</label>
                                              <input type="text" class="form-control" id="announcementLocation" name="location" placeholder="Where will this take place?">
                                            </div>

                                            <div class="mb-3">
                                              <label for="announcementMention" class="form-label fw-semibold">🔔 Mention <small class="text-muted">(optional)</small></label>
                                              <input type="text" class="form-control" id="announcementMention" name="mention" placeholder="E.g., @everyone, @admins">
                                            </div>

                                            <div class="d-grid">
                                              <button type="submit" class="btn btn-primary">
                                                <i class="ti ti-check me-1"></i> Submit Announcement
                                              </button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    <!-- [end] edit information Offcanvas form panel -->

                                  <!-- [start] view info Offcanvas Announcement Panel -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="informationcanvas" aria-labelledby="informationcanvasLabel">
                                          <div class="offcanvas-header border-bottom">
                                            <h5 class="offcanvas-title" id="informationcanvasLabel">🗓️ Event Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                          </div>
                                          <div class="offcanvas-body p-4">
                                            <div class="card shadow-sm position-relative">
                                              <div class="card-body">
                                                <h5 class="fw-bold mb-3">🎉 Alumni Homecoming Gathering</h5>
                                                <p class="mb-2 fs-6">
                                                  <span class="me-3">📅 <strong>June 15, 2025</strong></span> |
                                                  <span class="ms-3">📍 <strong>SLSU Main Campus Auditorium</strong></span>
                                                </p>

                                                <p class="fs-6 mb-3">
                                                  We are excited to invite all <strong>SLSU admin</strong> to our upcoming Alumni Homecoming Gathering. Join us for a day of reconnection, celebration, and shared memories!
                                                </p>
                                                <p class="text-muted fst-italic mb-0">🗣️ We look forward to seeing you there. Please spread the word!</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                     <!-- [end] view info Offcanvas Announcement Panel -->

                                     <!-- [start] delete Offcanvas Announcement Panel -->
                                         <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteAnnouncementCanvas" aria-labelledby="deleteAnnouncementLabel">
                                            <div class="offcanvas-header border-bottom">
                                              <h5 class="offcanvas-title text-danger" id="deleteAnnouncementLabel">
                                                <i class="ti ti-trash me-2"></i> Confirm Deletion
                                              </h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>

                                            <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 300px;">
                                              <div class="mb-4">
                                                <div class="text-danger mb-2">
                                                  <i class="ti ti-alert-triangle" style="font-size: 3rem;"></i>
                                                </div>
                                                <p class="fs-5 mb-1">Are you sure you want to delete this announcement?</p>
                                                <h6 class="fw-bold text-dark">"Alumni Homecoming Gathering"</h6>
                                                <p class="text-muted small">This action cannot be undone.</p>
                                              </div>

                                              <form method="POST" action="/delete-announcement">
                                                @csrf
                                                <!-- Hidden input for announcement ID (replace value as needed) -->
                                                <input type="hidden" name="announcement_id" value="123">
                                                
                                                <div class="d-grid gap-2">
                                                  <button type="submit" class="btn btn-danger">
                                                    <i class="ti ti-trash me-1"></i> Yes, Delete Permanently
                                                  </button>
                                                  <button type="button" class="btn btn-light border" data-bs-dismiss="offcanvas">
                                                    Cancel
                                                  </button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                     <!-- [end] delete Offcanvas Announcement Panel -->
                               
                                </div>
                              </div>

                        </div>
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