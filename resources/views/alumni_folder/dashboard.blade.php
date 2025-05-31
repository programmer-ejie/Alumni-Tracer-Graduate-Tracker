<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Dashbaord | Alumni Tracer</title>
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
      {{-- <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i> --}}
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        {{-- <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form> --}}
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      {{-- <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . .">
      </form> --}}
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
           <h6 class="mb-1 alumni-name" id="alumniName" style = "font-size: 12px;">
              {{ empty($alumni->fullname) ? 'New Account !' : $alumni->fullname }}
          </h6>
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
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
     <div class="row">
      <div class="col-12 mb-4">
    <div class="card shadow-sm border-0" style="background: linear-gradient(90deg, #f8fafc 60%, #e3f0ff 100%);">
        <div class="card-body d-flex align-items-center py-4 px-4">
            @if($alumni->profile_pic)
                <img src="{{ asset('images/' . $alumni->profile_pic) }}" alt="user-image" class="rounded-circle shadow-sm border border-3 border-primary" style="width: 80px; height: 80px; object-fit: cover;">
            @else
                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-light border border-3 border-primary shadow-sm" style="width: 80px; height: 80px;">
                    <i class="ti ti-user-circle text-primary" style="font-size: 2.8rem;"></i>
                </span>
            @endif
            <div class="ms-4">
                <h3 class="mb-1 fw-bold" style="color: #2a5caa;">Welcome back, {{ $alumni->fullname ?? 'Alumni' }}!</h3>
                <p class="mb-0 text-muted" style="font-size: 1.08rem;">Here's what's new since your last visit.</p>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4 mb-4">
    <div class="card shadow-sm h-100 border-0" style="background: #f8fbff;">
        <div class="card-header bg-white border-bottom-0">
            <h6 class="mb-0 d-flex align-items-center" style="font-size: 1.1rem;">
                <i class="ti ti-calendar-event text-primary me-2"></i>
                Upcoming Events
            </h6>
        </div>
        <div class="card-body pt-2">
            @forelse($upcomingEvents as $event)
                <div class="mb-3 pb-2 border-bottom" style="min-height: 3.5rem;">
                    <span class="text-muted small d-block mb-1">
                        <i class="ti ti-calendar-event me-1"></i>
                        {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}
                    </span>
                    <div class="text-truncate" style="font-size: 12px; max-width: 100%;" title="{{ $event->title }}">
                        {{ \Illuminate\Support\Str::limit($event->title, 50) }}
                    </div>
                </div>
            @empty
                <div class="text-muted text-center py-4">No upcoming events.</div>
            @endforelse
            <a href="{{ route('alumni.events') }}" class="btn btn-outline-primary btn-sm w-100 mt-2 rounded-pill fw-semibold">
                View all events
            </a>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4 mb-4">
    <div class="card shadow-sm h-100 border-0" style="background: #fff9f3;">
        <div class="card-header bg-white border-bottom-0">
            <h6 class="mb-0 d-flex align-items-center" style="font-size: 1.1rem;">
                <i class="ti ti-speakerphone text-warning me-2"></i>
                Recent Announcements
            </h6>
        </div>
        <div class="card-body pt-2">
            @forelse($recentAnnouncements as $announcement)
                <div class="mb-3 pb-2 border-bottom" style="min-height: 3.5rem;">
                    <span class="text-muted small d-block mb-1">
                        <i class="ti ti-calendar-event me-1"></i>
                        {{ \Carbon\Carbon::parse($announcement->created_at)->format('M d, Y') }}
                    </span>
                    <div class="text-truncate" style="font-size: 12px; max-width: 100%;" title="{{ $announcement->title }}">
                        {{ \Illuminate\Support\Str::limit($announcement->title, 50) }}
                    </div>
                </div>
            @empty
                <div class="text-muted text-center py-4">No recent announcements.</div>
            @endforelse
            <a href="{{ route('alumni.announcements') }}" class="btn btn-outline-warning btn-sm w-100 mt-2 rounded-pill fw-semibold">
                View all announcements
            </a>
        </div>
    </div>
</div>
<div class="col-md-12 col-xl-4 mb-4">
    <div class="card shadow-sm h-100 border-0" style="background: #f6fff8;">
        <div class="card-header bg-white border-bottom-0">
            <h6 class="mb-0 d-flex align-items-center" style="font-size: 1.1rem;">
                <i class="ti ti-bell text-success me-2"></i>
                Notifications
            </h6>
        </div>
        <div class="card-body pt-2">
            @forelse($latestNotifications as $notification)
                <div class="mb-3 pb-2 border-bottom" style="min-height: 3.5rem;">
                    <span class="text-muted small d-block mb-1">
                        <i class="ti ti-calendar-event me-1"></i>
                        {{ \Carbon\Carbon::parse($notification->created_at)->format('M d, Y') }}
                    </span>
                    <div class="text-truncate" style="font-size: 12px; max-width: 100%;" title="{{ strip_tags($notification->message) }}">
                        {!! \Illuminate\Support\Str::limit(strip_tags($notification->message), 60) !!}
                    </div>
                </div>
            @empty
                <div class="text-muted text-center py-4">No notifications.</div>
            @endforelse
            <a href="{{ route('alumni.notifications') }}" class="btn btn-outline-success btn-sm w-100 mt-2 rounded-pill fw-semibold">
                View all notifications
            </a>
        </div>
    </div>
</div>
    <div class="col-md-6 col-xl-4 mb-4">
    <div class="card shadow-sm h-100 border-0" style="background: #f3faff;">
        <div class="card-header bg-white border-bottom-0 pb-2">
            <h6 class="mb-0 d-flex align-items-center" style="font-size: 1.13rem; font-weight: 600;">
                <span class="rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center me-2" style="width: 36px; height: 36px;">
                    <i class="ti ti-clipboard-list text-info" style="font-size: 1.3rem;"></i>
                </span>
                Survey Participation
            </h6>
        </div>
        <div class="card-body pt-2">
           <div class="mb-2 text-dark" style="font-size: 12px;">
              Surveys Completed: <span class="fw-semibold"></span>
              <span class="ms-2">
                  @if($surveysCompleted > 0)
                      <span class="badge bg-success">Completed</span>
                  @else
                      <span class="badge bg-warning text-dark">Not Completed</span>
                  @endif
              </span>
          </div>
            <div class="mb-2 text-dark" style="font-size: 12px;">
                Last Survey: <span class="text-muted">{{ $lastSurveyDate ? \Carbon\Carbon::parse($lastSurveyDate)->format('M d, Y') : 'N/A' }}</span>
            </div>
            <a href="{{ route('alumni.survey') }}" class="btn btn-outline-info btn-sm w-100 mt-2 rounded-pill fw-semibold">Take a survey</a>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4 mb-4">
    <div class="card shadow-sm h-100 border-0" style="background: #f7faff;">
        <div class="card-header bg-white border-bottom-0 pb-2">
            <h6 class="mb-0 d-flex align-items-center" style="font-size: 1.13rem; font-weight: 600;">
                <span class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center me-2" style="width: 36px; height: 36px;">
                    <i class="ti ti-user-check text-primary" style="font-size: 1.3rem;"></i>
                </span>
                Profile Completion
            </h6>
        </div>
        <div class="card-body pt-2">
            <div class="mb-2 text-dark" style="font-size: 12px;">
                Profile Status:
                @if($profileComplete)
                    <span class="badge bg-success ms-2">Complete</span>
                @else
                    <span class="badge bg-warning text-dark ms-2">Incomplete</span>
                @endif
            </div>
            <div class="mb-2 text-dark" style="font-size: 12px;">
                Last Updated:
                <span class="text-muted">
                    {{ $alumni->updated_at ? \Carbon\Carbon::parse($alumni->updated_at)->format('M d, Y') : 'N/A' }}
                </span>
            </div>
            <a href="{{ route('alumni.profile') }}" class="btn btn-outline-primary btn-sm w-100 mt-2 rounded-pill fw-semibold">Update profile</a>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4 mb-4">
    <div class="card shadow-sm h-100 border-0" style="background: #f9f9ff;">
        <div class="card-header bg-white border-bottom-0 pb-2">
            <h6 class="mb-0 d-flex align-items-center" style="font-size: 1.13rem; font-weight: 600;">
                <span class="rounded-circle bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center me-2" style="width: 36px; height: 36px;">
                    <i class="ti ti-users text-secondary" style="font-size: 1.3rem;"></i>
                </span>
                My Network
            </h6>
        </div>
        <div class="card-body pt-2">
            <div class="mb-2 text-dark" style="font-size: 12px;">
                Events Attended: <span class="fw-semibold">{{ $eventsAttended }}</span>
            </div>
            <div class="mb-2 text-dark" style="font-size: 12px;">
                Connections: <span class="fw-semibold">{{ $connections }}</span>
            </div>
            <a href="{{ route('alumni.profile') }}" class="btn btn-outline-secondary btn-sm w-100 mt-2 rounded-pill fw-semibold">View my connections</a>
        </div>
    </div>
</div>
    </div>
  </div>
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