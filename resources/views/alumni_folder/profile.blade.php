<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Profile | Alumni Tracer</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

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
                <li class="breadcrumb-item" aria-current="page">Profile</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">

          <!-- [start] delete Offcanvas Admin Account Panel -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteAccount" aria-labelledby="deleteAccount">
               <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title text-danger" id="deleteAccountLabel">
                  <i class="ti ti-trash me-2"></i> Confirm Account Deletion
                   </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                         </div>
                            <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 300px;">
                                 <div class="mb-4">
                                        <div class="text-danger mb-2">
                                                                              <i class="ti ti-alert-triangle" style="font-size: 3rem;"></i>
                                                                          </div>
                                                                          <p class="fs-5 mb-1">Are you sure you want to delete your admin account?</p>
                                                                          <p class="text-muted small">This action cannot be undone.</p>
                                                                      </div>
                                                                      <form method="POST" action="{{ route('alumni.profile.delete') }}">
                                                                          @csrf
                                                                          @method('DELETE')
                                                                          <div class="d-grid gap-2">
                                                                              <button type="submit" class="btn btn-danger">
                                                                                  <i class="ti ti-trash me-1"></i> Yes, Delete My Account
                                                                              </button>
                                                                              <button type="button" class="btn btn-light border" data-bs-dismiss="offcanvas">
                                                                                  Cancel
                                                                              </button>
                                                                          </div>
                                                                      </form>
                                                                  </div>
                                                              </div>             
               
         <!-- [end] delete Offcanvas Admin Account Panel -->
                    <!-- [ sample-page ] start -->
                  <form method="POST" action="{{ route('alumni.profile.update') }}" enctype="multipart/form-data">
                    @csrf

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                      <div class="card construction-card">
                          <div class="card-body">
                            <div class="container">
                                <div class="main-body">
                                
                                    <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                              <!-- Hidden File Input -->
                                                <input type="file" id="profilePicInput" name="profile_pic" accept="image/*" style="display: none;">

                                                <!-- Image Preview -->
                                                <img id="profilePreview"
                                                    src="{{ asset('images/' . ($alumni->profile_pic ?? 'default.jpg')) }}"
                                                    alt="Admin"
                                                    class="rounded-circle"
                                                    width="150"
                                                    height="150"
                                                    style="border: 2px solid #2a5caa; object-fit: cover;">

                                                    
                                                <div class="mt-3">
                                                <h4>{{$alumni->fullname}}</h4>
                                                <p class="text-secondary mb-1">                               
                                                          {{ empty($alumni->fullname) ? 'New Account !' : $alumni->fullname }}       
                                                </p>
                                                <p class="text-muted font-size-sm">
                                                    @if(isset($alumni->email))
                                                          {{ $alumni->email }}
                                                      @else
                                                          No email provided
                                                      @endif
                                                </p>
                                            <button type="button" class="btn btn-secondary" onclick="document.getElementById('profilePicInput').click();">
                                              <i class="ti ti-camera-plus"></i>
                                            </button>

                                              <script>
                                                  const fileInput = document.getElementById('profilePicInput');
                                                  const previewImage = document.getElementById('profilePreview');

                                                  fileInput.addEventListener('change', function () {
                                                    const file = this.files[0];
                                                    if (file) {
                                                      const reader = new FileReader();
                                                      reader.onload = function (e) {
                                                        previewImage.src = e.target.result;
                                                      };
                                                      reader.readAsDataURL(file);
                                                    }
                                                  });
                                                </script>

                                                  <a href="#" class="btn btn-danger" data-bs-toggle="offcanvas" data-bs-target="#deleteAccount" aria-controls="deleteAccount">
                                                      Delete Account
                                                  </a>

                                                  

                                                </div>
                                            </div>
                                            </div>
                            </div>
                            <div class="card mt-3">
                                <ul class="list-group list-group-flush">
                                
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></h6>
                                      <span class="text-secondary">{{ empty($alumni->github) ? 'No GitHub provided' : $alumni->github }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></h6>
                                    <span class="text-secondary">{{ empty($alumni->twitter) ? 'No Twitter provided' : $alumni->twitter }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></h6>
                                    <span class="text-secondary">{{ empty($alumni->instagram) ? 'No Instagram provided' : $alumni->instagram}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></h6>
                                    <span class="text-secondary">{{ empty($alumni->facebook) ? 'No Facebook provided' : $alumni->facebook}}</span>
                                </li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                    <h6 class="mb-0">School</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      {{ empty($alumni->school_graduated) ? 'No Data Provided' : $alumni->school_graduated}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                    <h6 class="mb-0">Year Batch</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      {{ empty($alumni->batch) ? 'No Data Provided' : $alumni->batch}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                    <h6 class="mb-0">Current Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                       {{ empty($alumni->age) ? 'No Data Provided' : $alumni->age}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary"> 
                                      {{ empty($alumni->gender) ? 'No Data Provided' : $alumni->gender}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    {{ empty($alumni->address) ? 'No Data Provided' : $alumni->address}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                    {{-- <a class="btn btn-primary " href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                                      <a href="#" class = "btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#editProfileCanvas" aria-controls="editProfileCanvas">Edit Information</a>

                                           {{-- start sa edit canvas --}}
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="editProfileCanvas" aria-labelledby="editProfileLabel">
                                                  <div class="offcanvas-header border-bottom">
                                                    <h5 class="offcanvas-title" id="editProfileLabel">
                                                      <i class="ti ti-user me-2 text-primary"></i> Edit Profile
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                  </div>

                                                  <div class="offcanvas-body">
                                                    <div class="card shadow-sm border-0">
                                                      <div class="card-body">
                                                       

                                                         <!-- Hidden ID -->
                                                            <input type="hidden" name="id" value="{{ $alumni->id }}">

                                                            <!-- Full Name -->
                                                            <div class="mb-3">
                                                              <label for="editFullname" class="form-label fw-semibold">🧑 Full Name</label>
                                                              <input type="text" class="form-control" id="editFullname" name="fullname" value="{{ $alumni->fullname }}" placeholder="Enter Fullname" required>
                                                            </div>

                                                            <!-- Email -->
                                                            <div class="mb-3">
                                                              <label for="editEmail" class="form-label fw-semibold">📧 Email</label>
                                                              <input type="email" class="form-control" id="editEmail" name="email" value="{{ $alumni->email }}" required>
                                                            </div>

                                                            <!-- School Graduated -->
                                                            <select class="form-select" id="editSchoolGraduated" name="school_id">
                                                            <option value="">Select School</option>
                                                            @foreach($schools as $school)
                                                                <option value="{{ $school->id }}" 
                                                                    {{ $alumni->school_id == $school->id ? 'selected' : '' }}>
                                                                    {{ $school->school_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                            <!-- School Batch -->
                                                            <div class="mb-3">
                                                              <label for="editBatch" class="form-label fw-semibold">🎓 Year Batch</label>
                                                              <input type="text" class="form-control" id="editBatch" name="batch" value="{{ $alumni->batch }}" placeholder="Enter Year Batch">
                                                            </div>

                                                            <!-- Current Age -->
                                                            <div class="mb-3">
                                                              <label for="editAge" class="form-label fw-semibold">🎂 Current Age</label>
                                                              <input type="number" class="form-control" id="editAge" name="age" value="{{ $alumni->age }}" placeholder="Enter Current Age" min="0">
                                                            </div>

                                                            <!-- Gender -->
                                                            <div class="mb-3">
                                                              <label for="editGender" class="form-label fw-semibold">🚻 Gender</label>
                                                              <select class="form-select" id="editGender" name="gender">
                                                                <option value="Male" {{ $alumni->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                                <option value="Female" {{ $alumni->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                                <option value="Other" {{ $alumni->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                                              </select>
                                                            </div>

                                                            <!-- Address -->
                                                            <div class="mb-3">
                                                              <label for="editAddress" class="form-label fw-semibold">📍 Address (Optional)</label>
                                                              <textarea class="form-control" id="editAddress" name="address" rows="2">{{ empty($alumni->address) ? 'Enter your Address here!' : $alumni->address }}</textarea>
                                                            </div>

                                                            <!-- 📂 GitHub -->
                                                            <div class="mb-3">
                                                              <label for="editGithub" class="form-label fw-semibold">🔗 GitHub (Optional)</label>
                                                              <input type="text" class="form-control" id="editGithub" name="github" value="{{ $alumni->github }}" placeholder="Github Url">
                                                            </div>

                                                            <!-- 🐦 Twitter -->
                                                            <div class="mb-3">
                                                              <label for="editTwitter" class="form-label fw-semibold">🔗 Twitter (Optional)</label>
                                                              <input type="text" class="form-control" id="editTwitter" name="twitter" value="{{ $alumni->twitter }}" placeholder="Twitter Url">
                                                            </div>

                                                            <!-- 📸 Instagram -->
                                                            <div class="mb-3">
                                                              <label for="editInstagram" class="form-label fw-semibold">🔗 Instagram (Optional)</label>
                                                              <input type="text" class="form-control" id="editInstagram" name="instagram" value="{{ $alumni->instagram }}" placeholder="Instagram Url">
                                                            </div>

                                                            <!-- 📘 Facebook -->
                                                            <div class="mb-3">
                                                              <label for="editFacebook" class="form-label fw-semibold">📘 Facebook</label>
                                                              <input type="text" class="form-control" id="editFacebook" name="facebook" value="{{ $alumni->facebook }}" placeholder="Facebook Url">
                                                            </div>


                                                          <!-- Submit -->
                                                          <div class="d-grid">
                                                            <input type="submit" class="btn btn-primary" value="ᯓ➤ Update Profile">
                                                          
                                                          </div>
                                                        </form>

                                                       
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>



                                            {{-- end sa edit canvas --}}
                                      
                                         
                                    </div>
                                </div>
                                </div>
                            </div>

                        <div class="row gutters-sm">
    <div class="col-sm-12 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="d-flex align-items-center mb-3">
                    <i class="material-icons text-info mr-2"></i>Alumni Engagement
                </h6>
                <small>Profile Completion</small>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar"
                        style="width: {{ $profileComplete ? 100 : 60 }}%"
                        aria-valuenow="{{ $profileComplete ? 100 : 60 }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $profileComplete ? 'Complete' : 'Incomplete' }}
                    </div>
                </div>
                <small>Surveys Completed</small>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-success" role="progressbar"
                        style="width: {{ $surveysCompleted > 0 ? 100 : 0 }}%"
                        aria-valuenow="{{ $surveysCompleted > 0 ? 100 : 0 }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $surveysCompleted }}
                    </div>
                </div>
                <small>Events Attended</small>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: {{ min($eventsAttended * 20, 100) }}%"
                        aria-valuenow="{{ min($eventsAttended * 20, 100) }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $eventsAttended }}
                    </div>
                </div>
                <small>Connections</small>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-warning" role="progressbar"
                        style="width: {{ min($connections * 10, 100) }}%"
                        aria-valuenow="{{ min($connections * 10, 100) }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $connections }}
                    </div>
                </div>
                <small>Last Profile Update</small>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-secondary" role="progressbar"
                        style="width: 100%"
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        {{ $alumni->updated_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                            </div>
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