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
<link rel="icon" href="main_template/dist/assets/images/web_logo.png" type="image/x-icon"> <!-- [Google Font] Family -->
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
<script>
window.alumniMentions = [
    { id: 0, name: 'Everyone' },
    @foreach(\App\Models\AlumniInfo::all() as $user)
        { id: {{ $user->id }}, name: '{{ addslashes($user->fullname) }}' },
    @endforeach
];
</script>
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
            <input type="search" class="form-control border-0 shadow-none" id = "announcement-search-mobile" placeholder="Search here. . .">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
          <i data-feather="search" class="icon-search"></i>
          <input type="search" class="form-control" id="announcement-search" placeholder="Search here. . .">
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
        <i class="ti ti-mail"></i> --}}
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
           <img src="{{ asset('images/' . ($admin->profile_pic ?? 'default.jpg')) }}"
        alt="user-image"
        class="user-avtar wid-35"
        style="height: 23px; object-fit: cover;">

        <span>{{$admin->fullname}}</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="{{ asset('images/' . ($admin->profile_pic ?? 'default.jpg')) }}"
              alt="user-image"
              class="user-avtar wid-35"
              style="height: 35px; object-fit: cover;">
            </div>
            <div class="flex-grow-1 ms-3">
               <h6 class="mb-1" style = "font-size: 12px;">{{ $admin->fullname}}</h6>
              <span>Administrator</span>
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

                                <!-- Offcanvas form panel start -->
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
                                            <textarea class="form-control" id="announcementMessage" name="announcement_message" rows="10" placeholder="Write your message here..." required></textarea>
                                            <div class="invalid-feedback">Please enter a message.</div>
                                          </div>

                                         <div class="mb-3 position-relative">
                                              <label for="announcementMention" class="form-label fw-semibold">
                                                  🔔 Mention <small class="text-muted">(optional)</small>
                                              </label>
                                              <div class="input-group">
                                                  <span class="input-group-text" style="user-select: none;">@</span>
                                                  <input type="text" class="form-control" id="announcementMention" name="mention" autocomplete="off" placeholder="everyone, alumni_name">
                                              </div>
                                              <input type="hidden" id="mentionId" name="mention_id">
                                              <div id="mentionSuggestions" class="list-group position-absolute w-100" style="z-index: 10; display: none;"></div>
                                          </div>
                                          <script>
                                            const alumniMentions = window.alumniMentions;

                                              document.addEventListener('DOMContentLoaded', function () {
                                                  const input = document.getElementById('announcementMention');
                                                  const suggestions = document.getElementById('mentionSuggestions');
                                                  const mentionIdInput = document.getElementById('mentionId');

                                                  input.addEventListener('input', function () {
                                                      const value = input.value.toLowerCase();
                                                      if (value.length === 0) {
                                                          suggestions.style.display = 'none';
                                                          mentionIdInput.value = '';
                                                          return;
                                                      }
                                                  
                                                      const filtered = alumniMentions.filter(u => u.name.toLowerCase().includes(value)).slice(0, 3);
                                                      if (filtered.length === 0) {
                                                          suggestions.style.display = 'none';
                                                          mentionIdInput.value = '';
                                                          return;
                                                      }
                                                      suggestions.innerHTML = '';
                                                      filtered.forEach((user, idx) => {
                                                          const item = document.createElement('button');
                                                          item.type = 'button';
                                                          item.className = 'list-group-item list-group-item-action';
                                                          item.style.fontSize = '1rem';
                                                          item.textContent = '@ ' + user.name;
                                                          item.onclick = () => {
                                                              input.value = user.name;
                                                              mentionIdInput.value = user.id;
                                                              suggestions.style.display = 'none';
                                                          };
                                                          suggestions.appendChild(item);

                                                        
                                                          if (idx < filtered.length - 1) {
                                                              const hr = document.createElement('hr');
                                                              hr.className = 'my-0';
                                                              suggestions.appendChild(hr);
                                                          }
                                                      });
                                                      suggestions.style.display = 'block';
                                                  });

                                                
                                                  input.addEventListener('blur', () => setTimeout(() => suggestions.style.display = 'none', 100));
                                                  input.addEventListener('focus', () => {
                                                      if (input.value.length > 0) input.dispatchEvent(new Event('input'));
                                                  });
                                              });
                                          </script>

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
                                
                                  @if($announcements->isEmpty())
                                      <div id="no-announcement-alert" class="alert alert-danger text-center my-3" role="alert" style="background: #f8d7da;">
                                          <strong>No Data Available</strong>
                                      </div>
                                  @else
                                     @foreach($announcements as $announcement)
                                        <div class="list-group-item border-0 rounded shadow-sm mb-3 px-2 py-3 announcement-item" style="background: #f7faff;">
                                            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-3">
                                                <!-- Icon -->
                                                <div class="flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                                    <div class="rounded-circle bg-light-success text-success d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                                        <span style="font-size: 1.5rem;">📢</span>
                                                    </div>
                                                </div>
                                                <!-- Main Info -->
                                                <div class="flex-grow-1 w-100">
                                                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                                        <h6 class="mb-1 fw-bold text-primary" style="font-size: 1.1rem; word-break: break-word;">{{ $announcement->title }}</h6>
                                                        <span class="badge bg-info ms-0 ms-sm-2 mb-2 mb-sm-0" style="font-size: 0.85rem;">
                                                            {{ $announcement->mention_id == 0 ? '@ Everyone' : '@ ' . optional(\App\Models\AlumniInfo::find($announcement->mention_id))->fullname }}
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                                        <span class="text-muted small me-3">
                                                            <i class="ti ti-calendar-event me-1"></i>
                                                            {{ \Carbon\Carbon::parse($announcement->date)->format('F d, Y') }}
                                                        </span>
                                                        <span class="text-muted small d-none d-md-inline">
                                                            <i class="ti ti-clock-hour-4 me-1"></i>
                                                            {{ \Carbon\Carbon::parse($announcement->created_at)->diffForHumans() }}
                                                        </span>
                                                    </div>
                                                    <p class="mb-0 text-dark" style="font-size: 0.98rem; word-break: break-word;">
                                                        {{ \Illuminate\Support\Str::words($announcement->announcement_message ?? $announcement->message, 15, '...') }}
                                                    </p>
                                                </div>
                                                <!-- Action Buttons -->
                                                <div class="d-flex flex-row flex-md-column align-items-center align-items-md-end gap-2 mt-2 mt-md-0">
                                                    <a href="#" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#informationcanvas{{ $announcement->id }}" aria-controls="informationcanvas{{ $announcement->id }}" title="More info">
                                                        <div class="avtar avtar-s rounded-circle text-primary bg-light-primary d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                                                            <i class="ti ti-info-circle f-18"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#editInformationcanvas{{ $announcement->id }}" aria-controls="editInformationcanvas{{ $announcement->id }}" title="Edit">
                                                        <div class="avtar avtar-s rounded-circle text-success bg-light-success d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                                                            <i class="ti ti-edit f-18"></i>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-danger" data-bs-toggle="offcanvas" data-bs-target="#deleteAnnouncementCanvas{{ $announcement->id }}" aria-controls="deleteAnnouncementCanvas{{ $announcement->id }}" title="Delete">
                                                        <div class="avtar avtar-s rounded-circle text-danger bg-light-danger d-flex justify-content-center align-items-center" style="width: 36px; height: 36px;">
                                                            <i class="ti ti-trash f-18"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Mobile: time below -->
                                            <div class="d-flex w-100 justify-content-between align-items-center d-md-none mt-2">
                                                <small class="text-muted">
                                                    <i class="ti ti-clock-hour-4 me-1"></i>
                                                    {{ \Carbon\Carbon::parse($announcement->created_at)->diffForHumans() }}
                                                </small>
                                            </div>
                                        </div>

                                        <div id="no-announcement-alert" class="alert alert-danger text-center my-3" role="alert" style="background: #f8d7da; display: none;">
                                            <strong>No Data Available</strong>
                                        </div>

                                        <!-- [start] edit information Offcanvas form panel -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="editInformationcanvas{{ $announcement->id }}" aria-labelledby="editInformationcanvasLabel{{ $announcement->id }}">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="editInformationcanvasLabel{{ $announcement->id }}">
                                                    <i class="ti ti-edit me-2 text-primary"></i> Edit Information
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body px-4 py-3">
                                                <form method="POST" action="/edit-announcement" novalidate>
                                                    @csrf
                                                    <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
                                                    <div class="mb-3">
                                                        <label for="announcementTitle{{ $announcement->id }}" class="form-label fw-semibold">📌 Title</label>
                                                        <input type="text" class="form-control" id="announcementTitle{{ $announcement->id }}" name="title" value="{{ $announcement->title }}" required>
                                                        <div class="invalid-feedback">Please enter a title.</div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="announcementMessage{{ $announcement->id }}" class="form-label fw-semibold">📝 Message</label>
                                                        <textarea class="form-control" id="announcementMessage{{ $announcement->id }}" name="announcement_message" rows="10" required>{{ $announcement->announcement_message }}</textarea>
                                                        <div class="invalid-feedback">Please enter a message.</div>
                                                    </div>
                                                    <div class="mb-3 position-relative">
                                                        <label for="announcementMention{{ $announcement->id }}" class="form-label fw-semibold">
                                                            🔔 Mention <small class="text-muted">(optional)</small>
                                                        </label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" style="user-select: none;">@</span>
                                                            <input type="text" class="form-control"
                                                                id="announcementMention{{ $announcement->id }}"
                                                                name="mention"
                                                                autocomplete="off"
                                                                placeholder="everyone, alumni_name"
                                                                value="{{ $announcement->mention_id == 0 ? 'Everyone' : (\App\Models\AlumniInfo::find($announcement->mention_id)?->fullname ?? '') }}">
                                                        </div>
                                                        <input type="hidden" id="mentionId{{ $announcement->id }}" name="mention_id" value="{{ $announcement->mention_id }}">
                                                        <div id="mentionSuggestions{{ $announcement->id }}" class="list-group position-absolute w-100" style="z-index: 10; display: none;"></div>
                                                    </div>
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="ti ti-check me-1"></i> Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- [end] edit information Offcanvas form panel -->

                                        <script>
                                        document.addEventListener('shown.bs.offcanvas', function (event) {
                                            const offcanvas = event.target;
                                            if (!offcanvas.id.startsWith('editInformationcanvas')) return;

                                            const input = offcanvas.querySelector('input[name="mention"]');
                                            const suggestions = offcanvas.querySelector('.list-group');
                                            const mentionIdInput = offcanvas.querySelector('input[name="mention_id"]');
                                            if (!input || !suggestions || !mentionIdInput) return;

                                            // Use the global alumniMentions
                                            const alumniMentions = window.alumniMentions;

                                            // Pre-fill the mention field with the correct name if editing
                                            if (mentionIdInput.value == "0") {
                                                input.value = "Everyone";
                                            } else {
                                                const selected = alumniMentions.find(u => u.id == mentionIdInput.value);
                                                if (selected) input.value = selected.name;
                                            }

                                            input.addEventListener('input', function () {
                                                const value = input.value.trim().toLowerCase();

                                                // Separate alumni and "Everyone"
                                                const alumniOnly = alumniMentions.filter(u => u.id !== 0 && u.name.toLowerCase().includes(value));
                                                const everyoneMatch = alumniMentions[0].name.toLowerCase().includes(value) ? [alumniMentions[0]] : [];

                                                // Combine: alumni matches first, then "Everyone" if it matches
                                                let filtered = alumniOnly.concat(everyoneMatch).slice(0, 3);

                                                if (filtered.length === 0) {
                                                    suggestions.style.display = 'none';
                                                    mentionIdInput.value = '';
                                                    return;
                                                }
                                                suggestions.innerHTML = '';
                                                filtered.forEach((user, idx) => {
                                                    const item = document.createElement('button');
                                                    item.type = 'button';
                                                    item.className = 'list-group-item list-group-item-action';
                                                    item.style.fontSize = '1rem';
                                                    item.textContent = '@ ' + user.name;
                                                    item.onclick = () => {
                                                        input.value = user.name;
                                                        mentionIdInput.value = user.id;
                                                        suggestions.style.display = 'none';
                                                    };
                                                    suggestions.appendChild(item);
                                                    if (idx < filtered.length - 1) {
                                                        const hr = document.createElement('hr');
                                                        hr.className = 'my-0';
                                                        suggestions.appendChild(hr);
                                                    }
                                                });
                                                suggestions.style.display = 'block';
                                            });
                                            // Prevent suggestions from disappearing when clicking on them
                                            suggestions.onmousedown = (e) => {
                                                e.preventDefault();
                                            };

                                            input.addEventListener('blur', () => setTimeout(() => suggestions.style.display = 'none', 150));
                                            input.addEventListener('focus', () => {
                                                if (input.value.length > 0) input.dispatchEvent(new Event('input'));
                                            });
                                        });
                                        </script>

                                        <!-- [start] view info Offcanvas Announcement Panel -->
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
                                                            <span class="me-1" style = "text-transform: capitalize; font-size: 10px;">
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
                                        <!-- [end] view info Offcanvas Announcement Panel -->

                                        <!-- [start] delete Offcanvas Announcement Panel -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteAnnouncementCanvas{{ $announcement->id }}" aria-labelledby="deleteAnnouncementLabel{{ $announcement->id }}">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title text-danger" id="deleteAnnouncementLabel{{ $announcement->id }}">
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
                                                    <h6 class="fw-bold text-dark">"{{ $announcement->title }}"</h6>
                                                    <p class="text-muted small">This action cannot be undone.</p>
                                                </div>
                                                <form method="POST" action="/delete-announcement">
                                                    @csrf
                                                    <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
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