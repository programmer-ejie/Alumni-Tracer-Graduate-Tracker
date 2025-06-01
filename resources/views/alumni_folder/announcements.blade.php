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
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." id = "announcement-search-mobile">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . ." id = "announcement-search">
      </form>

       <script>
        document.getElementById('announcement-search').addEventListener('input', function() {
            let filter = this.value.toLowerCase().trim();
            let items = document.querySelectorAll('.announcement-item');
            let anyVisible = false;
            items.forEach(item => {
                let text = item.textContent.toLowerCase();
                let match = text.includes(filter);
                item.style.display = match ? '' : 'none';
                if (match) anyVisible = true;
            });
            document.getElementById('no-announcement-alert').style.display = anyVisible ? 'none' : '';
        });
        </script>

       <script>
            document.getElementById('announcement-search-mobile').addEventListener('input', function() {
                let filter = this.value.toLowerCase().trim();
                let items = document.querySelectorAll('.announcement-item');
                let anyVisible = false;
                items.forEach(item => {
                    let text = item.textContent.toLowerCase();
                    let match = text.includes(filter);
                    item.style.display = match ? '' : 'none';
                    if (match) anyVisible = true;
                });
                document.getElementById('no-announcement-alert').style.display = anyVisible ? 'none' : '';
            });
            </script>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      {{-- <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-mail"></i>
      </a> --}}
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
     <img src="{{ asset('images/' . ($alumni->profile_pic ?? 'default.jpg')) }}"
                alt="user-image"
                class="user-avtar wid-35"
                style="height: 23px; object-fit: cover;">
        <span>{{ empty($alumni->fullname) ? 'New Account !' : $alumni->fullname }}</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
               <img src="{{ asset('images/' . ($alumni->profile_pic ?? 'default.jpg')) }}"
                alt="user-image"
                class="user-avtar wid-35"
                style="height: 35px; object-fit: cover;">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1" style = "font-size: 12px;">{{ empty($alumni->fullname) ? 'New Account !' : $alumni->fullname }}</h6>
              <span>School Alumni</span>
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
                  <h5 class="mb-3">Announcements</h5>
                  <div class="card border-0 shadow-sm">
                      <div class="list-group list-group-flush">
                          @if($announcements->isEmpty())
                              <div class="alert alert-danger text-center my-3" role="alert" style="background: #f8d7da;">
                                  <strong>No Announcements Available</strong>
                              </div>
                          @else
                              @foreach($announcements as $announcement)
                                 <a href="#" class="list-group-item list-group-item-action border rounded mb-3 py-3 px-3 announcement-item"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#informationcanvas{{ $announcement->id }}"
                                    aria-controls="informationcanvas{{ $announcement->id }}"
                                    title="View Details"
                                    style="background: #f9fbfd; transition: box-shadow 0.2s; box-shadow: 0 2px 8px rgba(44,62,80,0.04);">
                                      <div class="d-flex align-items-center flex-wrap flex-md-nowrap">
                                          <div class="flex-shrink-0 mb-2 mb-md-0">
                                              <div class="avtar avtar-s rounded-circle bg-light-primary text-primary d-flex align-items-center justify-content-center"
                                                  style="width: 48px; height: 48px;">
                                                  <i class="ti ti-speakerphone f-24"></i>
                                              </div>
                                          </div>
                                          <div class="flex-grow-1 ms-3" style="min-width: 0;">
                                              <h5 class="mb-1 fw-bold text-primary" style="font-size: 1.1rem;">{{ $announcement->title }}</h5>
                                              <div class="d-flex flex-wrap align-items-center mb-1">
                                                  <span class="badge bg-info me-2 mb-1" style="font-size: 0.85rem;">
                                                      {{ $announcement->mention_id == 0 ? '@ Everyone' : '@ ' . optional(\App\Models\AlumniInfo::find($announcement->mention_id))->fullname }}
                                                  </span>
                                                  <span class="text-muted small mb-1">
                                                      <i class="ti ti-calendar-event me-1"></i>
                                                      {{ \Carbon\Carbon::parse($announcement->date)->format('F d, Y') }}
                                                  </span>
                                              </div>
                                              <p class="mb-0 text-dark" style="font-size: 0.98rem; word-break: break-word;">
                                                  {{ \Illuminate\Support\Str::words($announcement->announcement_message, 15, '...') }}
                                              </p>
                                          </div>
                                          <div class="flex-shrink-0 text-end d-flex flex-column align-items-end justify-content-between ms-2"
                                              style="min-width: 40px;">
                                              <small class="text-muted mb-2 d-none d-md-block">
                                                  {{ \Carbon\Carbon::parse($announcement->created_at)->diffForHumans() }}
                                              </small>
                                             <span title="More info" class="d-none d-lg-inline">
                                                <i class="ti ti-info-circle text-info f-20"></i>
                                            </span>
                                          </div>
                                      </div>
                                      <!-- Show time below on mobile -->
                                      <div class="d-block d-md-none mt-2 text-end">
                                          <small class="text-muted">
                                              {{ \Carbon\Carbon::parse($announcement->created_at)->diffForHumans() }}
                                          </small>
                                      </div>
                                  </a>

                                  <!-- Offcanvas Announcement Panel -->
                                  <div class="offcanvas offcanvas-end" tabindex="-1" id="informationcanvas{{ $announcement->id }}" aria-labelledby="informationcanvasLabel{{ $announcement->id }}">
                                      <div class="offcanvas-header border-bottom">
                                          <h5 class="offcanvas-title" id="informationcanvasLabel{{ $announcement->id }}">
                                              <span class="me-2" style="font-size: 1.5rem;">📢</span>
                                              Announcement Details
                                          </h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                      </div>
                                      <div class="offcanvas-body p-4">
                                          <div class="card shadow-sm border-primary position-relative">
                                              <div class="card-body">
                                                  <div class="mb-3 text-center">
                                                      <span style="font-size: 2.5rem;">🎉</span>
                                                      <h4 class="fw-bold mt-2 mb-1 text-primary">Hello, Alumni!</h4>
                                                      <p class="mb-2 text-muted">Here's the latest update from your community:</p>
                                                  </div>
                                                  <h5 class="fw-bold mb-3 text-success">
                                                      <i class="ti ti-speakerphone me-2"></i>{{ $announcement->title }}
                                                  </h5>
                                                  <p class="mb-2 fs-6">
                                                      <span class="me-1" style="text-transform: capitalize; font-size: 10px;">
                                                          <i class="ti ti-clock-hour-4 text-info"></i>
                                                          <strong>Updated at:</strong>
                                                          {{ $announcement->updated_at->format('F d, Y h:i A') }}
                                                      </span>
                                                  </p>
                                                  <p class="mb-2 fs-6">
                                                      <i class="ti ti-at text-warning"></i>
                                                      <strong>Mention:</strong>
                                                      @if($announcement->mention_id == 0)
                                                          <span class="badge bg-primary">@everyone</span>
                                                      @else
                                                          @php
                                                              $user = \App\Models\AlumniInfo::find($announcement->mention_id);
                                                          @endphp
                                                          <span class="badge bg-info">{{ $user ? '@' . $user->fullname : 'Unknown' }}</span>
                                                      @endif
                                                  </p>
                                                  <hr>
                                                  <p class="fs-5 mb-3 text-dark">
                                                      {{ $announcement->announcement_message }}
                                                  </p>
                                                  <div class="alert alert-light border mt-4 mb-0 text-center" role="alert">
                                                      <span style="font-size: 1.2rem;">🙌</span>
                                                      <span class="ms-2">Stay connected and spread the word! <b>Your participation makes a difference.</b></span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                    <div id="no-announcement-alert" class="alert alert-danger text-center my-3" role="alert" style="background: #f8d7da; display: none;">
                                            <strong>No Data Available</strong>
                                        </div>
                                  <!-- End Offcanvas -->
                              @endforeach
                          @endif
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