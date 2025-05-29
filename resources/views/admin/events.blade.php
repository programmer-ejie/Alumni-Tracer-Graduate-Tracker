<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events | Alumni Tracer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="../main_template/dist/assets/images/favicon.svg" type="image/x-icon">
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
      <a href="{{route('admin.dashboard')}}" class="b-brand text-primary" style="display: flex;">
        <i class="fas fa-user-graduate fa-2x" style="color: #2a5caa;"></i>
        <h4 style="color: rgb(46, 44, 44); text-align: center; margin-top: 4px; margin-left: 5px; font-weight: bold;">ALUMNI TRACER</h4>
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
          <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
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
                <button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i> Admin</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="drp-t2" data-bs-toggle="tab" data-bs-target="#drp-tab-2" type="button" role="tab" aria-controls="drp-tab-2" aria-selected="false"><i class="ti ti-settings"></i> Setting</button>
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
          <button class="btn btn-primary shadow" data-bs-toggle="offcanvas" data-bs-target="#addEventOffcanvas" aria-controls="addEventOffcanvas">
            <i class="ti ti-calendar-event me-1"></i> Add Event
          </button>
        </div>
        <div>
          <form id="eventFilterForm" method="GET" action="{{ route('admin.events') }}">
              <select id="eventFilter" name="filter" class="form-select" aria-label="Filter Event Status" style="width: 200px; height: 36px; font-size: 10px; font-weight: bolder;">
                <option value="all" {{ request('filter') == 'all' ? 'selected' : '' }}>All Events</option>
                <option value="completed" {{ request('filter') == 'completed' ? 'selected' : '' }}>Completed Events</option>
                <option value="upcoming" {{ request('filter') == 'upcoming' ? 'selected' : '' }}>Upcoming Events</option>
              </select>
            </form>
            <script>
            document.getElementById('eventFilter').addEventListener('change', function() {
              document.getElementById('eventFilterForm').submit();
            });
          </script>
        </div>
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="addEventOffcanvas" aria-labelledby="addEventOffcanvasLabel">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title fw-bold text-primary" id="addEventOffcanvasLabel">
            <i class="ti ti-calendar-event me-2"></i> Create New Event
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4 py-3">
          <form method="POST" action="{{ route('admin.events.store') }}" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
              <label for="eventTitle" class="form-label fw-semibold">📌 Event Title</label>
              <input type="text" class="form-control shadow-sm" id="eventTitle" name="title" placeholder="Enter event title" required>
              <div class="invalid-feedback">Please enter an event title.</div>
            </div>
            <div class="mb-3">
              <label for="eventMessage" class="form-label fw-semibold">📝 Description</label>
              <textarea class="form-control shadow-sm" id="eventMessage" name="message" rows="4" placeholder="Describe your event..." required></textarea>
              <div class="invalid-feedback">Please enter a description.</div>
            </div>
            <div class="mb-3">
              <label for="eventDate" class="form-label fw-semibold">📅 Date</label>
              <input type="date" class="form-control shadow-sm" id="eventDate" name="date" required>
              <div class="invalid-feedback">Please select a date.</div>
            </div>
            <div class="mb-3">
              <label for="eventLocation" class="form-label fw-semibold">📍 Location</label>
              <input type="text" class="form-control shadow-sm" id="eventLocation" name="location" placeholder="Event location" required>
              <div class="invalid-feedback">Please enter a location.</div>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success btn-m shadow">
                <i class="ti ti-plus me-1"></i> Create Event
              </button>
            </div>
          </form>
          <div class="alert alert-info mt-4" style="font-size: 0.95rem;">
            <i class="ti ti-info-circle me-2"></i>
            <b>Tip:</b> Make your event engaging! Add a catchy title and clear details.
          </div>
        </div>
      </div>
      <script>
        (() => {
          'use strict'
          const forms = document.querySelectorAll('.needs-validation')
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
              form.classList.add('was-validated')
            }, false)
          })
        })()
      </script>
      <div class="card construction-card">
        <div class="card-body p-0">
          <div class="row gx-2">
            @foreach($events as $event)
              <div class="col-12 col-md-6 col-xl-3 mb-4 d-flex align-items-stretch event-card"
                   data-date="{{ $event->date }}">
                <div class="card shadow-sm position-relative h-100 w-100">
                  <div class="card-body">
                    <div class="position-absolute top-0 end-0 p-2 d-flex gap-2">
                      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#viewEventOffcanvas{{ $event->id }}" aria-controls="viewEventOffcanvas{{ $event->id }}" title="View Event">
                        <i class="ti ti-info-circle f-18 text-primary"></i>
                      </a>
                      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#editEventOffcanvas{{ $event->id }}" aria-controls="editEventOffcanvas{{ $event->id }}" title="Edit Event">
                        <i class="ti ti-edit-circle f-18 text-success"></i>
                      </a>
                      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#deleteEventOffcanvas{{ $event->id }}" aria-controls="deleteEventOffcanvas{{ $event->id }}" title="Delete Event">
                        <i class="ti ti-trash f-18 text-danger"></i>
                      </a>
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
  <div class="offcanvas offcanvas-end" tabindex="-1" id="editEventOffcanvas{{ $event->id }}" aria-labelledby="editEventLabel{{ $event->id }}">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="editEventLabel{{ $event->id }}">
        <i class="ti ti-pencil me-2 text-success"></i> Edit Event
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form method="POST" action="{{ route('admin.events.update', $event->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="editTitle{{ $event->id }}" class="form-label fw-semibold">📌 Title</label>
          <input type="text" class="form-control" id="editTitle{{ $event->id }}" name="title" value="{{ $event->title }}" required>
        </div>
        <div class="mb-3">
          <label for="editMessage{{ $event->id }}" class="form-label fw-semibold">📝 Description</label>
          <textarea class="form-control" id="editMessage{{ $event->id }}" name="message" rows="4" required>{{ $event->message }}</textarea>
        </div>
        <div class="mb-3">
          <label for="editDate{{ $event->id }}" class="form-label fw-semibold">📅 Date</label>
          <input type="date" class="form-control" id="editDate{{ $event->id }}" name="date" value="{{ $event->date }}" required>
        </div>
        <div class="mb-3">
          <label for="editLocation{{ $event->id }}" class="form-label fw-semibold">📍 Location</label>
          <input type="text" class="form-control" id="editLocation{{ $event->id }}" name="location" value="{{ $event->location }}">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success">
            <i class="ti ti-check me-1"></i> Update Event
          </button>
        </div>
      </form>
    </div>
  </div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteEventOffcanvas{{ $event->id }}" aria-labelledby="deleteEventLabel{{ $event->id }}">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title text-danger" id="deleteEventLabel{{ $event->id }}">
        <i class="ti ti-trash me-2"></i> Confirm Deletion
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 300px;">
      <div class="mb-4">
        <div class="text-danger mb-2">
          <i class="ti ti-alert-triangle" style="font-size: 3rem;"></i>
        </div>
        <p class="fs-5 mb-1">Are you sure you want to delete this event?</p>
        <h6 class="fw-bold text-dark">"{{ $event->title }}"</h6>
        <p class="text-muted small">This action cannot be undone.</p>
      </div>
      <form method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
        @csrf
        @method('DELETE')
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