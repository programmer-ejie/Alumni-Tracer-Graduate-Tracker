<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events | Alumni Tracer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free alumni template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="main_template/dist/assets/images/web_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <link rel="stylesheet" href="../main_template/dist/assets/fonts/tabler-icons.min.css" >
  <link rel="stylesheet" href="../main_template/dist/assets/fonts/feather.css" >
  <link rel="stylesheet" href="../main_template/dist/assets/fonts/fontawesome.css" >
  <link rel="stylesheet" href="../main_template/dist/assets/fonts/material.css" >
  <link rel="stylesheet" href="../main_template/dist/assets/css/style.css" id="main-style-link" >
  <link rel="stylesheet" href="../main_template/dist/assets/css/style-preset.css" >
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{route('alumni.dashboard')}}" class="b-brand text-primary" style="display: flex;">
        <i class="fas fa-user-graduate fa-2x" style="color: #2a5caa;"></i>
        <h4 style="color: rgb(46, 44, 44); text-align: center; margin-top: 4px; margin-left: 5px; font-weight: bold;">ALUMNI TRACER</h4>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{route('alumni.dashboard')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Admin Dashboard</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Web Functions</label>
          <i class="ti ti-layout-grid"></i>
        </li>
        <li class="pc-item">
          <a href="{{route('alumni.profile')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user"></i></span>
            <span class="pc-mtext">Admin Profile</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{route('alumni.survey')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
            <span class="pc-mtext">Survey Data</span>
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
            <span class="pc-mtext">Manage Events</span>
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
<header class="pc-header">
  <div class="header-wrapper">
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled">
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
          {{-- <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="ti ti-search"></i>
          </a> --}}
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
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          {{-- <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
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
                <button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i> Admin</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="drp-t2" data-bs-toggle="tab" data-bs-target="#drp-tab-2" type="button" role="tab" aria-controls="drp-tab-2" aria-selected="false"><i class="ti ti-settings"></i> Setting</button>
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
<div class="pc-container">
  <div class="pc-content">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Alumni Tracer</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
              <li class="breadcrumb-item" aria-current="page">Events</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="d-flex mb-3" style="justify-content:space-between;">
        <div>
          <form id="eventFilterForm" method="GET" action="{{ route('alumni.events') }}">
              <select id="eventFilter" name="filter" class="form-select" aria-label="Filter Event Status" style="width: 200px; height: 36px; font-size: 10px; font-weight: bolder;">
                <option value="all" {{ request('filter') == 'all' ? 'selected' : '' }}>All Events</option>
                <option value="completed" {{ request('filter') == 'completed' ? 'selected' : '' }}>Completed Events</option>
                <option value="upcoming" {{ request('filter') == 'upcoming' ? 'selected' : '' }}>Upcoming Events</option>
                <option value="my" {{ request('filter') == 'my' ? 'selected' : '' }}>Flagged Events</option>
            </select>
            </form>
            <script>
            document.getElementById('eventFilter').addEventListener('change', function() {
              document.getElementById('eventFilterForm').submit();
            });
            </script>
        </div>
        <div>
          {{-- <button class="btn btn-primary shadow" data-bs-toggle="offcanvas" data-bs-target="#addEventOffcanvas" aria-controls="addEventOffcanvas">
            <i class="ti ti-calendar-event me-1"></i> Add Event
          </button> --}}
        </div>
        
      </div>
   
      <div class="card construction-card">
        <div class="card-body p-0">
          <div class="row gx-2">
            @foreach($events as $event)
              <div class="col-12 col-md-6 col-xl-3 mb-4 d-flex align-items-stretch event-card" style = "margin-top: 20px;
                   data-date="{{ $event->date }}">
                <div class="card shadow-sm position-relative h-100 w-100">
                  <div class="card-body">
                    <div class="position-absolute top-0 end-0 p-2 d-flex gap-2">
                      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#viewEventOffcanvas{{ $event->id }}" aria-controls="viewEventOffcanvas{{ $event->id }}" title="View Event">
                        <i class="ti ti-info-circle f-18 text-primary"></i>
                      </a>
                 
                        @php
                          $isAttending = $alumni->events->contains($event->id);
                        @endphp

                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#attendEventOffcanvas{{ $event->id }}" aria-controls="attendEventOffcanvas{{ $event->id }}" title="Attend Event">
                          @if($isAttending)
                            <i class="ti ti-flag f-18 text-success"></i>
                          @else
                            <i class="ti ti-flag f-18 text-warning"></i>
                          @endif
                        </a>
                        </div>

                        <!-- Unique Offcanvas for Attend -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="attendEventOffcanvas{{ $event->id }}" aria-labelledby="attendEventLabel{{ $event->id }}">
                          <div class="offcanvas-header border-bottom bg-warning bg-opacity-10">
                            <h5 class="offcanvas-title text-warning fw-bold" id="attendEventLabel{{ $event->id }}">
                              <i class="ti ti-flag me-2"></i> Attend Event
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                          </div>
                          <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center" style="min-height: 300px;">
                            <div class="mb-4 text-center">
                              <i class="ti ti-calendar-event" style="font-size: 2.5rem; color: #f59e42;"></i>
                              <h5 class="fw-bold mt-3 mb-2">{{ $event->title }}</h5>
                              <p class="mb-1 text-muted">
                                <i class="ti ti-calendar-event"></i>
                                {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
                              </p>
                              <p class="mb-3 text-muted">
                                <i class="ti ti-map-pin"></i>
                                {{ $event->location ?? 'No location' }}
                              </p>
                              @if(!$isAttending)
                                <div class="alert alert-warning" style="font-size: 1rem;">
                                  Are you sure you want to attend this event?<br>
                                  Click <b>Attend</b> to confirm your participation.
                                </div>
                                <form method="POST" action="{{ route('alumni.events.attend', $event->id) }}">
                                  @csrf
                                  <button type="submit" class="btn btn-success shadow mb-2">
                                    <i class="ti ti-flag me-1"></i> Attend
                                  </button>
                                  <button type="button" class="btn btn-secondary shadow mb-2" data-bs-dismiss="offcanvas">
                                    Cancel
                                  </button>
                                </form>
                              @else
                                <div class="alert alert-success" style="font-size: 1rem;">
                                  You are attending this event.<br>
                                  If you want to cancel your attendance, click below.
                                </div>
                                <form method="POST" action="{{ route('alumni.events.unattend', $event->id) }}">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger shadow mb-2">
                                    <i class="ti ti-flag-off me-1"></i> Cancel Attendance
                                  </button>
                                  <button type="button" class="btn btn-secondary shadow mb-2" data-bs-dismiss="offcanvas">
                                    Close
                                  </button>
                                </form>
                              @endif
                            </div>
                          </div>
                        </div>
                    <h6 class="mb-2 f-w-400 text-muted">Event</h6>
                    <h6 class="mb-3">
                      {{ $event->title }}<br>
                      <span class="badge bg-light-warning border border-warning">
                        <i class="ti ti-users-group"></i>
                        {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
                      </span>
                    </h6>
                    <hr>
                    <p class="mb-0 text-muted text-sm">
                      <i class="ti ti-map-pin"></i> {{ $event->location ?? 'No location' }}
                    </p>
                    <p class="mb-0 mt-2">{{ \Illuminate\Support\Str::limit($event->message, 30) }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@foreach($events as $event)
  <div class="offcanvas offcanvas-end" tabindex="-1" id="viewEventOffcanvas{{ $event->id }}" aria-labelledby="viewEventLabel{{ $event->id }}" >
    <div class="offcanvas-header border-bottom bg-primary bg-opacity-10">
      <h5 class="offcanvas-title text-primary fw-bold" id="viewEventLabel{{ $event->id }}">
        <i class="ti ti-calendar-event me-2"></i> Event Details
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="card border-0 shadow-sm mb-0">
        <div class="card-body">
          <h4 class="card-title fw-bold text-dark mb-2">
            <i class="ti ti-bolt text-warning me-2"></i>{{ $event->title }}
          </h4>
          <div class="mb-3">
            <span class="badge bg-light-primary text-primary border border-primary me-2">
              <i class="ti ti-calendar-event"></i>
              {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
            </span>
            <span class="badge bg-light-info text-info border border-info">
              <i class="ti ti-map-pin"></i>
              {{ $event->location ?? 'No location' }}
            </span>
          </div>
          <div class="mb-3">
            <label class="fw-semibold text-secondary mb-1"><i class="ti ti-info-circle"></i> Description</label>
            <div class="p-2 rounded bg-light border text-dark" style="min-height: 60px;">
              {{ $event->message }}
            </div>
          </div>
          <hr>
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-muted small">
              <i class="ti ti-clock"></i> Created: {{ $event->created_at->diffForHumans() }}
            </span>
            <span class="badge {{ \Carbon\Carbon::parse($event->date)->isPast() ? 'bg-danger' : 'bg-success' }}">
              {{ \Carbon\Carbon::parse($event->date)->isPast() ? 'Completed' : 'Upcoming' }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endforeach

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
<script>
document.addEventListener('DOMContentLoaded', function () {
  const filter = document.getElementById('eventFilter');
  filter.addEventListener('change', function () {
    const selected = this.value;
    const now = new Date();
    const today = now.toISOString().slice(0, 10);
    document.querySelectorAll('.event-card').forEach(function (card) {
      const eventDate = (card.getAttribute('data-date') || '').trim();
      if (!eventDate) {
        card.style.display = 'none';
        return;
      }
      if (selected === 'all') {
        card.style.display = '';
      } else if (selected === 'completed') {
        card.style.display = (eventDate < today) ? '' : 'none';
      } else if (selected === 'upcoming') {
        card.style.display = (eventDate >= today) ? '' : 'none';
      }
    });
  });
});
document.addEventListener('show.bs.offcanvas', function (event) {
  document.querySelectorAll('.offcanvas.show').forEach(function (canvas) {
    if (canvas !== event.target) {
      bootstrap.Offcanvas.getInstance(canvas).hide();
    }
  });
  document.querySelectorAll('[data-bs-toggle="offcanvas"]').forEach(function (btn) {
    btn.disabled = true;
  });
  event.target.addEventListener('hidden.bs.offcanvas', function handler() {
    document.querySelectorAll('[data-bs-toggle="offcanvas"]').forEach(function (btn) {
      btn.disabled = false;
    });
    event.target.removeEventListener('hidden.bs.offcanvas', handler);
  });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../main_template/dist/assets/js/plugins/apexcharts.min.js"></script>
<script src="../main_template/dist/assets/js/pages/dashboard-default.js"></script>
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
</html>