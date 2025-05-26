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
 <link rel="icon" href="{{ asset('main_template/dist/assets/images/favicon.svg') }}" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<link rel="stylesheet" href="{{ asset('main_template/dist/assets/fonts/tabler-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('main_template/dist/assets/fonts/feather.css') }}">
<link rel="stylesheet" href="{{ asset('main_template/dist/assets/fonts/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('main_template/dist/assets/fonts/material.css') }}">
<link rel="stylesheet" href="{{ asset('main_template/dist/assets/css/style.css') }}" id="main-style-link">
<link rel="stylesheet" href="{{ asset('main_template/dist/assets/css/style-preset.css') }}">


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
  <a href="{{route('admin.survey')}}" class="pc-link" active>
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
      {{-- <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      > --}}
        {{-- <i class="ti ti-search"></i> --}}
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        {{-- <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input disabled type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form> --}}
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      {{-- <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input disabled type="search" class="form-control" placeholder="Search here. . .">
      </form> --}}
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
               <h6 class="mb-1">{{ $admin->fullname}}</h6>
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
                <li class="breadcrumb-item" aria-current="page">Data Information</li>
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
                    <div class="row">
                        <div class="box" style = "display: flex; justify-content: space-between; align-items: center;">
                        <h6 style = "font-weight: bolder;">ALUMNI BASIC INFORMATIONS</h6>
                            <a href="{{ route('admin.survey') }}" class="btn btn-danger" style="margin-top: -13px; margin-bottom: 5px;">
                                    <i class="ti ti-arrow-narrow-left f-18"></i>
                                </a>


                            </div>
                        <hr>
                      <div class="form-group mb-3">
                            <label>Email</label>
                            <input disabled type="email" name="email" class="form-control" placeholder="Enter email" required value="{{ old('email', $alumni_info->email ?? '') }}" >
                        </div>

                        <div class="form-group mb-3">
                            <label>Full Name</label>
                            <input disabled type="text" name="fullname" class="form-control" placeholder="Enter full name" required value="{{ old('fullname', $alumni_info->fullname ?? '') }}" >
                        </div>

                        <div class="form-group mb-3">
                            <label>School Graduated</label>
                            <input disabled type="text" name="school_graduated" class="form-control" placeholder="Enter school graduated" value="{{ old('school_graduated', $alumni_info->school_graduated ?? '') }}" >
                        </div>

                        <div class="form-group mb-3">
                            <label>Batch</label>
                            <input disabled type="text" name="batch" class="form-control" placeholder="Enter batch year" value="{{ old('batch', $alumni_info->batch ?? '') }}" >
                        </div>

                        <div class="form-group mb-3">
                            <label>Age</label>
                            <input disabled type="number" name="age" class="form-control" placeholder="Enter age" style="width: 150px;" value="{{ old('age', $alumni_info->age ?? '') }}" >
                        </div>

                        <div class="form-group mb-3">
                            <label>Address</label>
                            <textarea disabled name="address" class="form-control" placeholder="Enter address" rows="2" >{{ old('address', $alumni_info->address ?? '') }}</textarea >
                        </div>

                        <div class="form-group mb-3">
                            <label>Gender</label><br>
                            <div class="form-check form-check-inline">
                                <input disabled class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" required 
                                {{ (old('gender', $alumni_info->gender ?? '') === 'Male') ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderMale">Male</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input disabled class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" required 
                                {{ (old('gender', $alumni_info->gender ?? '') === 'Female') ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderFemale">Female</label>
                            </div>
                        </div>

                        </div>
                        <hr>

                    <h6 style = "font-weight: bolder;">QUESTIONS</h6><hr>
                    {{-- number 1 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">1. Current employment status:</label>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="employmentStatus" id="employed" value="Employed" 
                                    @if(isset($survey) && $survey->q1 == 'Employed') checked @endif required>
                                <label class="form-check-label" for="employed">Employed</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="employmentStatus" id="selfEmployed" value="Self-employed" 
                                    @if(isset($survey) && $survey->q1 == 'Self-employed') checked @endif>
                                <label class="form-check-label" for="selfEmployed">Self-employed</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="employmentStatus" id="unemployed" value="Unemployed" 
                                    @if(isset($survey) && $survey->q1 == 'Unemployed') checked @endif>
                                <label class="form-check-label" for="unemployed">Unemployed</label>
                            </div>
                        </div>

                    {{-- number 2 --}}
                       <div class="mb-3">
                            <label class="form-label fw-bold">2. Job title and role description:</label>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobTitle" id="softwareDeveloper" value="Software Developer" 
                                    @if(isset($survey) && $survey->q2 == 'Software Developer') checked @endif required>
                                <label class="form-check-label" for="softwareDeveloper">Software Developer</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobTitle" id="itSupportSpecialist" value="IT Support Specialist" 
                                    @if(isset($survey) && $survey->q2 == 'IT Support Specialist') checked @endif>
                                <label class="form-check-label" for="itSupportSpecialist">IT Support Specialist</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobTitle" id="networkAdministrator" value="Network Administrator" 
                                    @if(isset($survey) && $survey->q2 == 'Network Administrator') checked @endif>
                                <label class="form-check-label" for="networkAdministrator">Network Administrator</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobTitle" id="systemAnalyst" value="System Analyst" 
                                    @if(isset($survey) && $survey->q2 == 'System Analyst') checked @endif>
                                <label class="form-check-label" for="systemAnalyst">System Analyst</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobTitle" id="otherJob" value="Other" 
                                    @if(isset($survey) && !in_array($survey->q2, [
                                        'Software Developer',
                                        'IT Support Specialist',
                                        'Network Administrator',
                                        'System Analyst'
                                    ])) checked @endif>
                                <label class="form-check-label" for="otherJob">Other (Please specify)</label>
                            </div>
                            <input disabled type="text" id="otherJobInput" name="jobTitleOther" placeholder="Please specify" 
                                class="form-control"
                                style="display:{{ isset($survey) && !in_array($survey->q2, [
                                    'Software Developer',
                                    'IT Support Specialist',
                                    'Network Administrator',
                                    'System Analyst'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;"
                                value="{{ isset($survey) && !in_array($survey->q2, [
                                    'Software Developer',
                                    'IT Support Specialist',
                                    'Network Administrator',
                                    'System Analyst'
                                ]) ? $survey->q2 : '' }}">
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
                                <input disabled class="form-check-input" type="radio" name="industry" id="itSoftware" value="IT and Software Development" 
                                    @if(isset($survey) && $survey->q3 == 'IT and Software Development') checked @endif required>
                                <label class="form-check-label" for="itSoftware">IT and Software Development</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="industry" id="networkAdmin" value="Network Administration" 
                                    @if(isset($survey) && $survey->q3 == 'Network Administration') checked @endif>
                                <label class="form-check-label" for="networkAdmin">Network Administration</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="industry" id="databaseMgmt" value="Database Management" 
                                    @if(isset($survey) && $survey->q3 == 'Database Management') checked @endif>
                                <label class="form-check-label" for="databaseMgmt">Database Management</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="industry" id="itSupport" value="IT Support" 
                                    @if(isset($survey) && $survey->q3 == 'IT Support') checked @endif>
                                <label class="form-check-label" for="itSupport">IT Support</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="industry" id="otherIndustry" value="Other" 
                                    @if(isset($survey) && !in_array($survey->q3, [
                                        'IT and Software Development',
                                        'Network Administration',
                                        'Database Management',
                                        'IT Support'
                                    ])) checked @endif>
                                <label class="form-check-label" for="otherIndustry">Other (Please specify)</label>
                            </div>
                            <input disabled type="text" id="otherIndustryInput" name="industryOther" placeholder="Please specify"  
                                class="form-control"
                                style="display:{{ isset($survey) && !in_array($survey->q3, [
                                    'IT and Software Development',
                                    'Network Administration',
                                    'Database Management',
                                    'IT Support'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;"
                                value="{{ isset($survey) && !in_array($survey->q3, [
                                    'IT and Software Development',
                                    'Network Administration',
                                    'Database Management',
                                    'IT Support'
                                ]) ? $survey->q3 : '' }}">
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
                                <input disabled class="form-check-input" type="radio" name="jobDuration" id="less1" value="Less than 1 year" 
                                    @if(isset($survey) && $survey->q4 == 'Less than 1 year') checked @endif required>
                                <label class="form-check-label" for="less1">Less than 1 year</label>
                            </div>

                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobDuration" id="oneToThree" value="1-3 years" 
                                    @if(isset($survey) && $survey->q4 == '1-3 years') checked @endif>
                                <label class="form-check-label" for="oneToThree">1-3 years</label>
                            </div>

                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobDuration" id="fourToSix" value="4-6 years" 
                                    @if(isset($survey) && $survey->q4 == '4-6 years') checked @endif>
                                <label class="form-check-label" for="fourToSix">4-6 years</label>
                            </div>

                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="jobDuration" id="moreThanSix" value="More than 6 years" 
                                    @if(isset($survey) && $survey->q4 == 'More than 6 years') checked @endif>
                                <label class="form-check-label" for="moreThanSix">More than 6 years</label>
                            </div>
                        </div>


                        {{-- number 5 --}}
                          @php
                                $q5Value = old('careerChange', $survey->q5 ?? '');
                                $isYes = $q5Value === 'Yes';
                                $isNo = $q5Value === 'No';
                                $isCustom = !$isYes && !$isNo; // means explanation is stored directly in q5
                            @endphp

                            <div class="mb-3">
                                <label class="form-label fw-bold">5. Have you changed careers since graduation?</label>

                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerChange" id="careerNo" value="No" 
                                        {{ $isNo ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="careerNo">No</label>
                                </div>

                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerChange" id="careerYes" value="Yes" 
                                        {{ $isYes || $isCustom ? 'checked' : '' }}>
                                    <label class="form-check-label" for="careerYes">Yes</label>
                                </div>

                                <div class="form-group mt-2" id="careerReasonGroup" style="display: {{ $isYes || $isCustom ? 'block' : 'none' }};">
                                    <label for="careerReason" class="form-label">If yes, what was your reason for changing, and what is your current field?</label>
                                    <input disabled type="text" class="form-control" id="careerReason" name="careerReason" 
                                        placeholder="Enter reason and current field"
                                        value="{{ old('careerReason', $isCustom ? $q5Value : '') }}">
                                </div>
                            </div>

                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const yesRadio = document.getElementById("careerYes");
                                const noRadio = document.getElementById("careerNo");
                                const reasonGroup = document.getElementById("careerReasonGroup");
                                const reasonInput = document.getElementById("careerReason");

                                function toggleReasonGroup() {
                                    if (yesRadio.checked) {
                                        reasonGroup.style.display = "block";
                                    } else {
                                        reasonGroup.style.display = "none";
                                        reasonInput.value = "";
                                    }
                                }

                                yesRadio.addEventListener("change", toggleReasonGroup);
                                noRadio.addEventListener("change", toggleReasonGroup);

                                toggleReasonGroup(); // run on load
                            });
                            </script>


                        {{-- number 6 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">6. Overall, how satisfied were you with your educational experience at SLSU?</label>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="satisfaction" id="verySatisfied" value="Very Satisfied" 
                                    @if(isset($survey) && $survey->q6 == 'Very Satisfied') checked @endif required>
                                <label class="form-check-label" for="verySatisfied">Very Satisfied</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="satisfaction" id="satisfied" value="Satisfied" 
                                    @if(isset($survey) && $survey->q6 == 'Satisfied') checked @endif>
                                <label class="form-check-label" for="satisfied">Satisfied</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="satisfaction" id="neutral" value="Neutral" 
                                    @if(isset($survey) && $survey->q6 == 'Neutral') checked @endif>
                                <label class="form-check-label" for="neutral">Neutral</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="satisfaction" id="dissatisfied" value="Dissatisfied" 
                                    @if(isset($survey) && $survey->q6 == 'Dissatisfied') checked @endif>
                                <label class="form-check-label" for="dissatisfied">Dissatisfied</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="satisfaction" id="veryDissatisfied" value="Very Dissatisfied" 
                                    @if(isset($survey) && $survey->q6 == 'Very Dissatisfied') checked @endif>
                                <label class="form-check-label" for="veryDissatisfied">Very Dissatisfied</label>
                            </div>
                        </div>

                        {{-- number 7 --}}
                        <div class="mb-3">
                            <label for="workforcePrep" class="form-label fw-bold">7. How well did the BSIT program at SLSU prepare you for the demands of the modern workforce? (Scale of 1-10)</label>
                            <select class="form-select" id="workforcePrep" name="workforcePrep" required disabled>
                                <option value=""  {{ !isset($survey) || !$survey->q7 ? 'selected' : '' }}>Select a rating</option>
                                @for($i=1; $i<=10; $i++)
                                    <option value="{{ $i }}" @if(isset($survey) && $survey->q7 == $i) selected @endif>
                                        {{ $i }}{{ $i == 1 ? ' - Not well at all' : ($i == 10 ? ' - Extremely well' : '') }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        {{-- number 8 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">8. What specific skill or knowledge do you feel was the most beneficial during your studies, and how have you applied it in your career?</label>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="beneficialSkill" id="skillProgramming" value="Programming languages" 
                                    @if(isset($survey) && $survey->q8 == 'Programming languages') checked @endif required>
                                <label class="form-check-label" for="skillProgramming">Programming languages (e.g., Java, Python)</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="beneficialSkill" id="skillProblemSolving" value="Problem-solving techniques" 
                                    @if(isset($survey) && $survey->q8 == 'Problem-solving techniques') checked @endif>
                                <label class="form-check-label" for="skillProblemSolving">Problem-solving techniques</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="beneficialSkill" id="skillDatabase" value="Database management skills" 
                                    @if(isset($survey) && $survey->q8 == 'Database management skills') checked @endif>
                                <label class="form-check-label" for="skillDatabase">Database management skills</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="beneficialSkill" id="skillProjectManagement" value="Project management practices" 
                                    @if(isset($survey) && $survey->q8 == 'Project management practices') checked @endif>
                                <label class="form-check-label" for="skillProjectManagement">Project management practices</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="beneficialSkill" id="skillNetworking" value="Networking and cybersecurity knowledge" 
                                    @if(isset($survey) && $survey->q8 == 'Networking and cybersecurity knowledge') checked @endif>
                                <label class="form-check-label" for="skillNetworking">Networking and cybersecurity knowledge</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="beneficialSkill" id="skillOther" value="Other" 
                                    @if(isset($survey) && !in_array($survey->q8, [
                                        'Programming languages',
                                        'Problem-solving techniques',
                                        'Database management skills',
                                        'Project management practices',
                                        'Networking and cybersecurity knowledge'
                                    ])) checked @endif>
                                <label class="form-check-label" for="skillOther">Other (Please specify)</label>
                            </div>
                            <input disabled type="text" class="form-control mt-2" id="skillOtherInput" name="skillOtherInput" placeholder="Please specify other skill" 
                                style="display:{{ isset($survey) && !in_array($survey->q8, [
                                    'Programming languages',
                                    'Problem-solving techniques',
                                    'Database management skills',
                                    'Project management practices',
                                    'Networking and cybersecurity knowledge'
                                ]) ? 'block' : 'none' }};"
                                value="{{ isset($survey) && !in_array($survey->q8, [
                                    'Programming languages',
                                    'Problem-solving techniques',
                                    'Database management skills',
                                    'Project management practices',
                                    'Networking and cybersecurity knowledge'
                                ]) ? $survey->q8 : '' }}">
                        </div>
                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const skillRadios = document.querySelectorAll('input[name="beneficialSkill"]');
                            const skillOtherInput = document.getElementById("skillOtherInput");
                            skillRadios.forEach(radio => {
                                radio.addEventListener("change", function () {
                                    if (this.value === "Other") {
                                        skillOtherInput.style.display = "block";
                                        skillOtherInput.required = true;
                                    } else {
                                        skillOtherInput.style.display = "none";
                                        skillOtherInput.required = false;
                                    }
                                });
                            });
                        });
                        </script>

                        {{-- number 9 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">9. Did SLSU provide enough opportunities for hands-on experience (internships, projects, etc.)? What more could have been done?</label>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="handsOnExperience" id="handsOnYes" value="Yes, internships and practical projects were helpful" 
                                    @if(isset($survey) && $survey->q9 == 'Yes, internships and practical projects were helpful') checked @endif required>
                                <label class="form-check-label" for="handsOnYes">Yes, internships and practical projects were helpful</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="handsOnExperience" id="handsOnNoCollab" value="No, more industry collaboration opportunities could have been arranged" 
                                    @if(isset($survey) && $survey->q9 == 'No, more industry collaboration opportunities could have been arranged') checked @endif>
                                <label class="form-check-label" for="handsOnNoCollab">No, more industry collaboration opportunities could have been arranged</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="handsOnExperience" id="handsOnMoreProjects" value="More project-based courses with real-world applications" 
                                    @if(isset($survey) && $survey->q9 == 'More project-based courses with real-world applications') checked @endif>
                                <label class="form-check-label" for="handsOnMoreProjects">More project-based courses with real-world applications</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="handsOnExperience" id="handsOnInternships" value="Internships in leading tech companies" 
                                    @if(isset($survey) && $survey->q9 == 'Internships in leading tech companies') checked @endif>
                                <label class="form-check-label" for="handsOnInternships">Internships in leading tech companies</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="handsOnExperience" id="handsOnOther" value="Other" 
                                    @if(isset($survey) && !in_array($survey->q9, [
                                        'Yes, internships and practical projects were helpful',
                                        'No, more industry collaboration opportunities could have been arranged',
                                        'More project-based courses with real-world applications',
                                        'Internships in leading tech companies'
                                    ])) checked @endif>
                                <label class="form-check-label" for="handsOnOther">Other (Please specify)</label>
                            </div>
                            <input disabled type="text" class="form-control mt-2" id="handsOnOtherInput" name="handsOnOtherInput" placeholder="Please specify" 
                                style="display:{{ isset($survey) && !in_array($survey->q9, [
                                    'Yes, internships and practical projects were helpful',
                                    'No, more industry collaboration opportunities could have been arranged',
                                    'More project-based courses with real-world applications',
                                    'Internships in leading tech companies'
                                ]) ? 'block' : 'none' }};"
                                value="{{ isset($survey) && !in_array($survey->q9, [
                                    'Yes, internships and practical projects were helpful',
                                    'No, more industry collaboration opportunities could have been arranged',
                                    'More project-based courses with real-world applications',
                                    'Internships in leading tech companies'
                                ]) ? $survey->q9 : '' }}">
                        </div>
                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const handsOnRadios = document.querySelectorAll('input[name="handsOnExperience"]');
                            const handsOnOtherInput = document.getElementById("handsOnOtherInput");
                            handsOnRadios.forEach(radio => {
                                radio.addEventListener("change", function () {
                                    if (this.value === "Other") {
                                        handsOnOtherInput.style.display = "block";
                                        handsOnOtherInput.required = true;
                                    } else {
                                        handsOnOtherInput.style.display = "none";
                                        handsOnOtherInput.required = false;
                                    }
                                });
                            });
                        });
                        </script>

                        {{-- number 10 --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">10. How satisfied were you with the support and guidance provided by faculty members, both academically and professionally?</label>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="facultySupport" id="facultyVerySatisfied" value="Very Satisfied" 
                                    @if(isset($survey) && $survey->q10 == 'Very Satisfied') checked @endif required>
                                <label class="form-check-label" for="facultyVerySatisfied">Very Satisfied</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="facultySupport" id="facultySatisfied" value="Satisfied" 
                                    @if(isset($survey) && $survey->q10 == 'Satisfied') checked @endif>
                                <label class="form-check-label" for="facultySatisfied">Satisfied</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="facultySupport" id="facultyNeutral" value="Neutral" 
                                    @if(isset($survey) && $survey->q10 == 'Neutral') checked @endif>
                                <label class="form-check-label" for="facultyNeutral">Neutral</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="facultySupport" id="facultyDissatisfied" value="Dissatisfied" 
                                    @if(isset($survey) && $survey->q10 == 'Dissatisfied') checked @endif>
                                <label class="form-check-label" for="facultyDissatisfied">Dissatisfied</label>
                            </div>
                            <div class="form-check">
                                <input disabled class="form-check-input" type="radio" name="facultySupport" id="facultyVeryDissatisfied" value="Very Dissatisfied" 
                                    @if(isset($survey) && $survey->q10 == 'Very Dissatisfied') checked @endif>
                                <label class="form-check-label" for="facultyVeryDissatisfied">Very Dissatisfied</label>
                            </div>
                        </div>

                    {{-- number 11 --}}
                            @php
                                $preparedAnswer = $survey->q11 ?? '';
                                $isPreparedYes = $preparedAnswer === 'Yes';
                                $isPreparedNo = !$isPreparedYes;
                                $improvementText = $isPreparedNo ? $preparedAnswer : '';
                            @endphp

                            <div class="mb-3">
                                <label class="form-label fw-bold">11. Do you feel that your time at SLSU prepared you for challenges in your job market or industry?</label>

                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="preparedness" id="preparedYes" value="Yes" {{ $isPreparedYes ? 'checked' : '' }} required >
                                    <label class="form-check-label" for="preparedYes">Yes</label>
                                </div>

                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="preparedness" id="preparedNo" value="No" {{ $isPreparedNo ? 'checked' : '' }} >
                                    <label class="form-check-label" for="preparedNo">No</label>
                                </div>

                                <div class="form-group mt-2" id="improvementAreaGroup" style="display: {{ $isPreparedNo ? 'block' : 'none' }};">
                                    <label for="improvementArea" class="form-label">If not, what specific areas of improvement would you recommend?</label>
                                    <input disabled type="text" class="form-control" id="improvementArea" name="improvementArea" placeholder="Enter specific areas" value="{{ $improvementText }}" >
                                </div>
                            </div>

                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const yesRadio = document.getElementById("preparedYes");
                                const noRadio = document.getElementById("preparedNo");
                                const improvementGroup = document.getElementById("improvementAreaGroup");
                                const improvementInput = document.getElementById("improvementArea");

                                function toggleImprovement() {
                                    if (noRadio.checked) {
                                        improvementGroup.style.display = "block";
                                    } else {
                                        improvementGroup.style.display = "none";
                                        improvementInput.value = "";
                                    }
                                }

                                yesRadio.addEventListener("change", toggleImprovement);
                                noRadio.addEventListener("change", toggleImprovement);

                                toggleImprovement();
                            });
                            </script>

                            {{-- number 12 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">12. How would you rate the availability and use of university resources (library, internet, lab facilities, etc.) during your studies?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="resourceRating" id="resourceExcellent" value="Excellent" @if(isset($survey) && $survey->q12 == 'Excellent') checked @endif required >
                                    <label class="form-check-label" for="resourceExcellent">Excellent – All resources were readily available</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="resourceRating" id="resourceGood" value="Good" @if(isset($survey) && $survey->q12 == 'Good') checked @endif >
                                    <label class="form-check-label" for="resourceGood">Good – Some resources were available, but limited during peak times</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="resourceRating" id="resourceFair" value="Fair" @if(isset($survey) && $survey->q12 == 'Fair') checked @endif >
                                    <label class="form-check-label" for="resourceFair">Fair – Often had to wait or search for available equipment</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="resourceRating" id="resourcePoor" value="Poor" @if(isset($survey) && $survey->q12 == 'Poor') checked @endif >
                                    <label class="form-check-label" for="resourcePoor">Poor – Resources were insufficient for student needs</label>
                                </div>
                            </div>

                            {{-- number 13 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">13. How long did it take you to find your first job after graduation?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobSearchDuration" id="less3months" value="Less than 3 months" @if(isset($survey) && $survey->q13 == 'Less than 3 months') checked @endif required >
                                    <label class="form-check-label" for="less3months">Less than 3 months</label>
                                </div>
                                <div class="form-check"> 
                                    <input disabled class="form-check-input" type="radio" name="jobSearchDuration" id="3to6months" value="3-6 months" @if(isset($survey) && $survey->q13 == '3-6 months') checked @endif >
                                    <label class="form-check-label" for="3to6months">3-6 months</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobSearchDuration" id="6to12months" value="6-12 months" @if(isset($survey) && $survey->q13 == '6-12 months') checked @endif >
                                    <label class="form-check-label" for="6to12months">6-12 months</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobSearchDuration" id="more12months" value="More than 12 months" @if(isset($survey) && $survey->q13 == 'More than 12 months') checked @endif >
                                    <label class="form-check-label" for="more12months">More than 12 months</label>
                                </div>
                            </div>

                            {{-- number 14 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">14. What were the biggest challenges you faced in finding your first job after graduation, and how did you overcome them?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobChallenges" id="lackExperience" value="Lack of work experience (overcame by internships)" @if(isset($survey) && $survey->q14 == 'Lack of work experience (overcame by internships)') checked @endif required >
                                    <label class="form-check-label" for="lackExperience">Lack of work experience (overcame by internships)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobChallenges" id="limitedOpportunities" value="Limited job opportunities in the region (explored remote positions)" @if(isset($survey) && $survey->q14 == 'Limited job opportunities in the region (explored remote positions)') checked @endif >
                                    <label class="form-check-label" for="limitedOpportunities">Limited job opportunities in the region (explored remote positions)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobChallenges" id="highCompetition" value="High competition in the job market (attended networking events)" @if(isset($survey) && $survey->q14 == 'High competition in the job market (attended networking events)') checked @endif >
                                    <label class="form-check-label" for="highCompetition">High competition in the job market (attended networking events)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobChallenges" id="unclearExpectations" value="Unclear job market expectations (sought career guidance)" @if(isset($survey) && $survey->q14 == 'Unclear job market expectations (sought career guidance)') checked @endif >
                                    <label class="form-check-label" for="unclearExpectations">Unclear job market expectations (sought career guidance)</label>
                                </div>
                            </div>

                                {{-- number 15 --}}
                                @php
                                    $q15Value = old('relatedPosition', $survey->q15 ?? '');
                                    $isYes = $q15Value === 'Yes';
                                    $isNo = $q15Value === 'No';
                                    $isCustom = !$isYes && !$isNo; // meaning explanation text is stored in q15
                                @endphp

                                <div class="mb-3">
                                    <label class="form-label fw-bold">15. Have you worked in a position related to your BSIT degree?</label>

                                    <div class="form-check">
                                        <input disabled class="form-check-input" type="radio" name="relatedPosition" id="relatedYes" value="Yes" 
                                            {{ $isYes ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="relatedYes">Yes</label>
                                    </div>

                                    <div class="form-check">
                                        <input disabled class="form-check-input" type="radio" name="relatedPosition" id="relatedNo" value="No" 
                                            {{ $isNo || $isCustom ? 'checked' : '' }}>
                                        <label class="form-check-label" for="relatedNo">No</label>
                                    </div>

                                    <div class="form-group mt-2" id="differentFieldGroup" style="display: {{ $isNo || $isCustom ? 'block' : 'none' }};">
                                        <label for="differentFieldReason" class="form-label">If no, what made you explore a different field?</label>
                                        <input disabled type="text" class="form-control" id="differentFieldReason" name="differentFieldReason" 
                                            placeholder="Please specify"
                                            value="{{ old('differentFieldReason', $isCustom ? $q15Value : '') }}">
                                    </div>
                                </div>

                                <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    const yesRadio = document.getElementById("relatedYes");
                                    const noRadio = document.getElementById("relatedNo");
                                    const fieldGroup = document.getElementById("differentFieldGroup");
                                    const fieldInput = document.getElementById("differentFieldReason");

                                    function toggleFieldReason() {
                                        if (noRadio.checked) {
                                            fieldGroup.style.display = "block";
                                        } else {
                                            fieldGroup.style.display = "none";
                                            fieldInput.value = "";
                                        }
                                    }

                                    yesRadio.addEventListener("change", toggleFieldReason);
                                    noRadio.addEventListener("change", toggleFieldReason);

                                    toggleFieldReason(); 
                                });
                                </script>



                            {{-- number 16 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">16. How confident did you feel during your job search after graduation?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobConfidence" id="confVery" value="Very Confident" @if(isset($survey) && $survey->q16 == 'Very Confident') checked @endif required >
                                    <label class="form-check-label" for="confVery">Very Confident</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobConfidence" id="confConfident" value="Confident" @if(isset($survey) && $survey->q16 == 'Confident') checked @endif >
                                    <label class="form-check-label" for="confConfident">Confident</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobConfidence" id="confNeutral" value="Neutral" @if(isset($survey) && $survey->q16 == 'Neutral') checked @endif >
                                    <label class="form-check-label" for="confNeutral">Neutral</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobConfidence" id="confUnconfident" value="Unconfident" @if(isset($survey) && $survey->q16 == 'Unconfident') checked @endif >
                                    <label class="form-check-label" for="confUnconfident">Unconfident</label>
                                </div>
                            </div>

                            {{-- number 17 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">17. In what ways did your BSIT degree help you stand out in the job market?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeAdvantage" id="advProgramming" value="Strong programming and technical skills" @if(isset($survey) && $survey->q17 == 'Strong programming and technical skills') checked @endif required >
                                    <label class="form-check-label" for="advProgramming">Strong programming and technical skills</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeAdvantage" id="advSDLC" value="Good understanding of software development lifecycle" @if(isset($survey) && $survey->q17 == 'Good understanding of software development lifecycle') checked @endif >
                                    <label class="form-check-label" for="advSDLC">Good understanding of software development lifecycle</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeAdvantage" id="advTools" value="Familiarity with industry-standard tools and platforms" @if(isset($survey) && $survey->q17 == 'Familiarity with industry-standard tools and platforms') checked @endif >
                                    <label class="form-check-label" for="advTools">Familiarity with industry-standard tools and platforms</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeAdvantage" id="advInternship" value="Internship experience with industry exposure" @if(isset($survey) && $survey->q17 == 'Internship experience with industry exposure') checked @endif >
                                    <label class="form-check-label" for="advInternship">Internship experience with industry exposure</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeAdvantage" id="advOther" value="Other" @if(isset($survey) && !in_array($survey->q17, [
                                        'Strong programming and technical skills',
                                        'Good understanding of software development lifecycle',
                                        'Familiarity with industry-standard tools and platforms',
                                        'Internship experience with industry exposure'
                                    ])) checked @endif >
                                    <label class="form-check-label" for="advOther">Other (Please specify)</label>
                                </div>
                                <div class="form-group mt-2" id="otherAdvInputGroup" style="display:{{ isset($survey) && !in_array($survey->q17, [
                                    'Strong programming and technical skills',
                                    'Good understanding of software development lifecycle',
                                    'Familiarity with industry-standard tools and platforms',
                                    'Internship experience with industry exposure'
                                ]) ? 'block' : 'none' }};">
                                    <input disabled type="text" class="form-control" id="otherAdvInput" name="otherDegreeAdvantage" placeholder="Please specify" value="{{ isset($survey) && !in_array($survey->q17, [
                                        'Strong programming and technical skills',
                                        'Good understanding of software development lifecycle',
                                        'Familiarity with industry-standard tools and platforms',
                                        'Internship experience with industry exposure'
                                    ]) ? $survey->q17 : '' }}">
                                </div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const advRadios = document.querySelectorAll('input[name="degreeAdvantage"]');
                                const advOther = document.getElementById("advOther");
                                const advOtherGroup = document.getElementById("otherAdvInputGroup");
                                const advOtherInput = document.getElementById("otherAdvInput");
                                if (advOther && advOtherGroup && advOtherInput) {
                                    advRadios.forEach(radio => {
                                        radio.addEventListener("change", function () {
                                            if (advOther.checked) {
                                                advOtherGroup.style.display = "block";
                                                advOtherInput.required = true;
                                            } else {
                                                advOtherGroup.style.display = "none";
                                                advOtherInput.value = "";
                                                advOtherInput.required = false;
                                            }
                                        });
                                    });
                                }
                            });
                            </script>

                            {{-- number 18 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">18. Which extracurricular or co-curricular activities during your BSIT studies most contributed to your personal or professional growth?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="extracurricularGrowth" id="orgMembership" value="Membership in IT-related organizations" @if(isset($survey) && $survey->q18 == 'Membership in IT-related organizations') checked @endif required>
                                    <label class="form-check-label" for="orgMembership">Membership in IT-related organizations</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="extracurricularGrowth" id="competitions" value="Participation in programming or tech competitions" @if(isset($survey) && $survey->q18 == 'Participation in programming or tech competitions') checked @endif>
                                    <label class="form-check-label" for="competitions">Participation in programming or tech competitions</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="extracurricularGrowth" id="volunteering" value="Volunteering or community outreach projects" @if(isset($survey) && $survey->q18 == 'Volunteering or community outreach projects') checked @endif>
                                    <label class="form-check-label" for="volunteering">Volunteering or community outreach projects</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="extracurricularGrowth" id="studentLeadership" value="Student leadership roles (e.g., student council)" @if(isset($survey) && $survey->q18 == 'Student leadership roles (e.g., student council)') checked @endif>
                                    <label class="form-check-label" for="studentLeadership">Student leadership roles (e.g., student council)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="extracurricularGrowth" id="extracurricularOther" value="Other" @if(isset($survey) && !in_array($survey->q18, [
                                        'Membership in IT-related organizations',
                                        'Participation in programming or tech competitions',
                                        'Volunteering or community outreach projects',
                                        'Student leadership roles (e.g., student council)'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="extracurricularOther">Other (Please specify)</label>
                                </div>
                                <div class="form-group mt-2" id="otherExtracurricularGroup" style="display:{{ isset($survey) && !in_array($survey->q18, [
                                    'Membership in IT-related organizations',
                                    'Participation in programming or tech competitions',
                                    'Volunteering or community outreach projects',
                                    'Student leadership roles (e.g., student council)'
                                ]) ? 'block' : 'none' }};">
                                    <input disabled type="text" class="form-control" id="otherExtracurricularInput" name="extracurricularGrowthOther" placeholder="Please specify" value="{{ isset($survey) && !in_array($survey->q18, [
                                        'Membership in IT-related organizations',
                                        'Participation in programming or tech competitions',
                                        'Volunteering or community outreach projects',
                                        'Student leadership roles (e.g., student council)'
                                    ]) ? $survey->q18 : '' }}">
                                </div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const radios = document.querySelectorAll('input[name="extracurricularGrowth"]');
                                const otherRadio = document.getElementById("extracurricularOther");
                                const otherGroup = document.getElementById("otherExtracurricularGroup");
                                const otherInput = document.getElementById("otherExtracurricularInput");
                                if (otherRadio && otherGroup && otherInput) {
                                    radios.forEach(radio => {
                                        radio.addEventListener("change", function () {
                                            if (otherRadio.checked) {
                                                otherGroup.style.display = "block";
                                                otherInput.required = true;
                                            } else {
                                                otherGroup.style.display = "none";
                                                otherInput.value = "";
                                                otherInput.required = false;
                                            }
                                        });
                                    });
                                }
                            });
                            </script>

                            {{-- number 19 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">19. How do you feel about the job market for BSIT graduates in the region or country? Has it changed since you graduated?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobMarketOpinion" id="marketImproved" value="Improved – More job opportunities and higher demand for IT professionals" @if(isset($survey) && $survey->q19 == 'Improved – More job opportunities and higher demand for IT professionals') checked @endif required>
                                    <label class="form-check-label" for="marketImproved">Improved – More job opportunities and higher demand for IT professionals</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobMarketOpinion" id="marketStable" value="Stable – Job market has remained the same" @if(isset($survey) && $survey->q19 == 'Stable – Job market has remained the same') checked @endif>
                                    <label class="form-check-label" for="marketStable">Stable – Job market has remained the same</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobMarketOpinion" id="marketDeclined" value="Declined – Limited job openings in the tech industry" @if(isset($survey) && $survey->q19 == 'Declined – Limited job openings in the tech industry') checked @endif>
                                    <label class="form-check-label" for="marketDeclined">Declined – Limited job openings in the tech industry</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="jobMarketOpinion" id="marketUnchanged" value="Unchanged – No significant change in the job market" @if(isset($survey) && $survey->q19 == 'Unchanged – No significant change in the job market') checked @endif>
                                    <label class="form-check-label" for="marketUnchanged">Unchanged – No significant change in the job market</label>
                                </div>
                            </div>

                            {{-- number 20 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">20. Do you believe that SLSU provided sufficient career counseling or support services to help you transition from university to your career?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerSupport" id="careerSupportYes" value="Yes, the services were helpful" @if(isset($survey) && $survey->q20 == 'Yes, the services were helpful') checked @endif required>
                                    <label class="form-check-label" for="careerSupportYes">Yes, the services were helpful</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerSupport" id="careerSupportNo" value="No, the services were lacking" @if(isset($survey) && $survey->q20 == 'No, the services were lacking') checked @endif>
                                    <label class="form-check-label" for="careerSupportNo">No, the services were lacking</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerSupport" id="careerSupportSomewhat" value="Somewhat, but more guidance is needed" @if(isset($survey) && $survey->q20 == 'Somewhat, but more guidance is needed') checked @endif>
                                    <label class="form-check-label" for="careerSupportSomewhat">Somewhat, but more guidance is needed</label>
                                </div>
                            </div>

                    {{-- number 21 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">21. In your opinion, how would you rate the level of support you have received for career advancement since graduation?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportExcellent" value="Excellent – Regular mentorship and career development opportunities" @if(isset($survey) && $survey->q21 == 'Excellent – Regular mentorship and career development opportunities') checked @endif required>
                                    <label class="form-check-label" for="supportExcellent">Excellent – Regular mentorship and career development opportunities</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportGood" value="Good – Occasional support, but more could have been offered." @if(isset($survey) && $survey->q21 == 'Good – Occasional support, but more could have been offered.') checked @endif>
                                    <label class="form-check-label" for="supportGood">Good – Occasional support, but more could have been offered.</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportAverage" value="Average – Limited support for career growth" @if(isset($survey) && $survey->q21 == 'Average – Limited support for career growth') checked @endif>
                                    <label class="form-check-label" for="supportAverage">Average – Limited support for career growth</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerAdvancementSupport" id="supportPoor" value="Poor – No support for career advancement" @if(isset($survey) && $survey->q21 == 'Poor – No support for career advancement') checked @endif>
                                    <label class="form-check-label" for="supportPoor">Poor – No support for career advancement</label>
                                </div>
                            </div>

                            {{-- number 22 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">22. How often have you participated in professional development activities, such as conferences, certifications, or skills training?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devRegularly" value="Regularly (every 6 months or less)" @if(isset($survey) && $survey->q22 == 'Regularly (every 6 months or less)') checked @endif required>
                                    <label class="form-check-label" for="devRegularly">Regularly (every 6 months or less)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devOccasionally" value="Occasionally (once a year)" @if(isset($survey) && $survey->q22 == 'Occasionally (once a year)') checked @endif>
                                    <label class="form-check-label" for="devOccasionally">Occasionally (once a year)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devRarely" value="Rarely (once every few years)" @if(isset($survey) && $survey->q22 == 'Rarely (once every few years)') checked @endif>
                                    <label class="form-check-label" for="devRarely">Rarely (once every few years)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="professionalDevelopmentFrequency" id="devNever" value="Never" @if(isset($survey) && $survey->q22 == 'Never') checked @endif>
                                    <label class="form-check-label" for="devNever">Never</label>
                                </div>
                            </div>

                            {{-- number 23 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">23. Have you noticed changes in your role or responsibilities since you started your career? If yes, how has your career evolved?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerChangeEvolution" id="leadershipRole" value="Leadership Roles" @if(isset($survey) && $survey->q23 == 'Leadership Roles') checked @endif required>
                                    <label class="form-check-label" for="leadershipRole">Yes, I have taken on more leadership roles</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerChangeEvolution" id="managementRole" value="Moved to Management" @if(isset($survey) && $survey->q23 == 'Moved to Management') checked @endif>
                                    <label class="form-check-label" for="managementRole">Yes, I moved from technical work to management.</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerChangeEvolution" id="complexProjects" value="More Complex Projects" @if(isset($survey) && $survey->q23 == 'More Complex Projects') checked @endif>
                                    <label class="form-check-label" for="complexProjects">Yes, I’ve had opportunities to work on more complex projects</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="careerChangeEvolution" id="roleSame" value="Role Remained Same" @if(isset($survey) && $survey->q23 == 'Role Remained Same') checked @endif>
                                    <label class="form-check-label" for="roleSame">No, my role has remained the same</label>
                                </div>
                            </div>

                            {{-- number 24 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">24. What was your starting salary after graduation?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="startingSalary" id="salary1" value="Below 10,000" @if(isset($survey) && $survey->q24 == 'Below 10,000') checked @endif required>
                                    <label class="form-check-label" for="salary1">Below ₱10,000</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="startingSalary" id="salary2" value="10,000-19,999" @if(isset($survey) && $survey->q24 == '10,000-19,999') checked @endif>
                                    <label class="form-check-label" for="salary2">₱10,000 - ₱19,999</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="startingSalary" id="salary3" value="20,000-29,999" @if(isset($survey) && $survey->q24 == '20,000-29,999') checked @endif>
                                    <label class="form-check-label" for="salary3">₱20,000 - ₱29,999</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="startingSalary" id="salary4" value="30,000-39,999" @if(isset($survey) && $survey->q24 == '30,000-39,999') checked @endif>
                                    <label class="form-check-label" for="salary4">₱30,000 - ₱39,999</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="startingSalary" id="salary5" value="40,000 and above" @if(isset($survey) && $survey->q24 == '40,000 and above') checked @endif>
                                    <label class="form-check-label" for="salary5">₱40,000 and above</label>
                                </div>
                            </div>

                            {{-- Question 25 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">25. Are you satisfied with your current salary and benefits?</label>

                                @php
                                    $salaryAnswer = old('salarySatisfaction', $survey->q25 ?? '');
                                    $isYes = $salaryAnswer === 'Yes';
                                    $isNo = !$isYes;
                                @endphp

                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="salarySatisfaction" id="salarySatYes" value="Yes"
                                        {{ $isYes ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="salarySatYes">Yes</label>
                                </div>

                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="salarySatisfaction" id="salarySatNo" value="No"
                                        {{ $isNo ? 'checked' : '' }}>
                                    <label class="form-check-label" for="salarySatNo">No</label>
                                </div>

                                <div class="form-group mt-2" id="salaryChangesGroup" style="display: {{ $isNo ? 'block' : 'none' }};">
                                    <label for="salaryChanges" class="form-label">If no, what changes would you like to see in your compensation package?</label>
                                    <input disabled type="text" class="form-control" id="salaryChanges" name="salaryChanges"
                                        placeholder="Enter desired changes"
                                        value="{{ old('salaryChanges', !$isYes ? $survey->q25 ?? '' : '') }}">
                                </div>
                            </div>

                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const yesRadio = document.getElementById("salarySatYes");
                                const noRadio = document.getElementById("salarySatNo");
                                const changesGroup = document.getElementById("salaryChangesGroup");

                                function toggleChangesGroup() {
                                    changesGroup.style.display = noRadio.checked ? "block" : "none";
                                }

                                yesRadio.addEventListener("change", toggleChangesGroup);
                                noRadio.addEventListener("change", toggleChangesGroup);

                                toggleChangesGroup(); // Run on page load
                            });
                            </script>



                            {{-- number 26 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">26. Do you believe your degree from SLSU has contributed to your earning potential? Why or why not?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeEarningPotential" id="earning1" value="Yes, the degree gave me foundational knowledge and credibility in the job market" @if(isset($survey) && $survey->q26 == 'Yes, the degree gave me foundational knowledge and credibility in the job market') checked @endif required>
                                    <label class="form-check-label" for="earning1">Yes, the degree gave me foundational knowledge and credibility in the job market</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeEarningPotential" id="earning2" value="Yes, but more hands-on experience would have been beneficial" @if(isset($survey) && $survey->q26 == 'Yes, but more hands-on experience would have been beneficial') checked @endif>
                                    <label class="form-check-label" for="earning2">Yes, but more hands-on experience would have been beneficial</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeEarningPotential" id="earning3" value="No, the job market values skills and experience more than academic credentials" @if(isset($survey) && $survey->q26 == 'No, the job market values skills and experience more than academic credentials') checked @endif>
                                    <label class="form-check-label" for="earning3">No, the job market values skills and experience more than academic credentials</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="degreeEarningPotential" id="earning4" value="No, I had to acquire additional certifications to improve my earning potential" @if(isset($survey) && $survey->q26 == 'No, I had to acquire additional certifications to improve my earning potential') checked @endif>
                                    <label class="form-check-label" for="earning4">No, I had to acquire additional certifications to improve my earning potential</label>
                                </div>
                            </div>

                            {{-- number 27 --}}
                                @php
                                    $q27Value = $survey->q27 ?? '';
                                    $isAlumniNo = $q27Value === 'No';
                                    $isAlumniYes = !$isAlumniNo && $q27Value !== '';
                                    $selectedValue = $isAlumniYes ? $q27Value : '';
                                @endphp

                                <div class="mb-3">
                                    <label class="form-label fw-bold">27. Have you been involved in any alumni activities or networking events since graduation? If yes, how valuable were they to you?</label>
                                    <div class="form-check">
                                        <input disabled class="form-check-input" type="radio" name="alumniInvolvement" id="alumniNo" value="No" {{ $isAlumniNo ? 'checked' : '' }} required>
                                        <label class="form-check-label" for="alumniNo">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input disabled class="form-check-input" type="radio" name="alumniInvolvement" id="alumniYes" value="Yes" {{ $isAlumniYes ? 'checked' : '' }}>
                                        <label class="form-check-label" for="alumniYes">Yes</label>
                                    </div>
                                    <div class="form-group mt-2" id="alumniValueGroup" style="display: {{ $isAlumniYes ? 'block' : 'none' }};">
                                        <label for="alumniValue" class="form-label">If yes, how valuable were they to you?</label>
                                        <select class="form-select" id="alumniValue" name="alumniValue" disabled>
                                            <option value=""  {{ $selectedValue === '' ? 'selected' : '' }} >Select value</option>
                                            <option value="Very Valuable" {{ $selectedValue === 'Very Valuable' ? 'selected' : '' }}>Very Valuable</option>
                                            <option value="Somewhat Valuable" {{ $selectedValue === 'Somewhat Valuable' ? 'selected' : '' }}>Somewhat Valuable</option>
                                            <option value="Neutral" {{ $selectedValue === 'Neutral' ? 'selected' : '' }}>Neutral</option>
                                            <option value="Not Valuable" {{ $selectedValue === 'Not Valuable' ? 'selected' : '' }}>Not Valuable</option>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    const yesRadio = document.getElementById("alumniYes");
                                    const noRadio = document.getElementById("alumniNo");
                                    const valueGroup = document.getElementById("alumniValueGroup");
                                    const alumniValue = document.getElementById("alumniValue");

                                    function toggleValueGroup() {
                                        if (yesRadio.checked) {
                                            valueGroup.style.display = "block";
                                        } else {
                                            valueGroup.style.display = "none";
                                            alumniValue.value = "";
                                        }
                                    }

                                    yesRadio.addEventListener("change", toggleValueGroup);
                                    noRadio.addEventListener("change", toggleValueGroup);

                                    toggleValueGroup();
                                });
                                </script>

                            {{-- number 28 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">28. Would you be willing to mentor current students, offer internships, or share your professional journey with SLSU?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="willingToMentor" id="mentorYes" value="Yes" @if(isset($survey) && $survey->q28 == 'Yes') checked @endif required>
                                    <label class="form-check-label" for="mentorYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="willingToMentor" id="mentorNo" value="No" @if(isset($survey) && $survey->q28 == 'No') checked @endif>
                                    <label class="form-check-label" for="mentorNo">No</label>
                                </div>
                            </div>

                            {{-- number 29 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">29. How can SLSU better engage its alumni in helping shape the future of the university and current students?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEngagement" id="engageNetworking" value="Regular alumni networking events" @if(isset($survey) && $survey->q29 == 'Regular alumni networking events') checked @endif required>
                                    <label class="form-check-label" for="engageNetworking">Regular alumni networking events</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEngagement" id="engageMentorship" value="More alumni mentorship programs" @if(isset($survey) && $survey->q29 == 'More alumni mentorship programs') checked @endif>
                                    <label class="form-check-label" for="engageMentorship">More alumni mentorship programs</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEngagement" id="engagePlatform" value="A platform for alumni to share career advice and job opportunities" @if(isset($survey) && $survey->q29 == 'A platform for alumni to share career advice and job opportunities') checked @endif>
                                    <label class="form-check-label" for="engagePlatform">A platform for alumni to share career advice and job opportunities</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEngagement" id="engageProjects" value="Collaborative projects between alumni and students" @if(isset($survey) && $survey->q29 == 'Collaborative projects between alumni and students') checked @endif>
                                    <label class="form-check-label" for="engageProjects">Collaborative projects between alumni and students</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEngagement" id="engageOther" value="Other" @if(isset($survey) && !in_array($survey->q29, [
                                        'Regular alumni networking events',
                                        'More alumni mentorship programs',
                                        'A platform for alumni to share career advice and job opportunities',
                                        'Collaborative projects between alumni and students'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="engageOther">Other (Please specify)</label>
                                </div>
                                <div class="mt-2" id="otherAlumniEngagementGroup" style="display:{{ isset($survey) && !in_array($survey->q29, [
                                    'Regular alumni networking events',
                                    'More alumni mentorship programs',
                                    'A platform for alumni to share career advice and job opportunities',
                                    'Collaborative projects between alumni and students'
                                ]) ? 'block' : 'none' }};">
                                    <input disabled type="text" class="form-control" id="otherAlumniEngagementInput" name="otherAlumniEngagementInput" placeholder="Please specify" value="{{ isset($survey) && !in_array($survey->q29, [
                                        'Regular alumni networking events',
                                        'More alumni mentorship programs',
                                        'A platform for alumni to share career advice and job opportunities',
                                        'Collaborative projects between alumni and students'
                                    ]) ? $survey->q29 : '' }}">
                                </div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const otherRadio = document.getElementById("engageOther");
                                const otherInputGroup = document.getElementById("otherAlumniEngagementGroup");
                                const otherInput = document.getElementById("otherAlumniEngagementInput");
                                document.querySelectorAll('input[name="alumniEngagement"]').forEach((elem) => {
                                    elem.addEventListener("change", function() {
                                        if (otherRadio.checked) {
                                            otherInputGroup.style.display = "block";
                                            otherInput.required = true;
                                        } else {
                                            otherInputGroup.style.display = "none";
                                            otherInput.value = "";
                                            otherInput.required = false;
                                        }
                                    });
                                });
                            });
                            </script>

                            {{-- number 30 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">30. What resources or support would you like to see SLSU offer its alumni in the future?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniSupport" id="resource1" value="Access to professional development resources and courses" @if(isset($survey) && $survey->q30 == 'Access to professional development resources and courses') checked @endif required>
                                    <label class="form-check-label" for="resource1">Access to professional development resources and courses</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniSupport" id="resource2" value="Alumni-only networking events" @if(isset($survey) && $survey->q30 == 'Alumni-only networking events') checked @endif>
                                    <label class="form-check-label" for="resource2">Alumni-only networking events</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniSupport" id="resource3" value="Job boards or career counseling specifically for alumni" @if(isset($survey) && $survey->q30 == 'Job boards or career counseling specifically for alumni') checked @endif>
                                    <label class="form-check-label" for="resource3">Job boards or career counseling specifically for alumni</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniSupport" id="resource4" value="Opportunities to contribute to the university through mentoring or guest lectures" @if(isset($survey) && $survey->q30 == 'Opportunities to contribute to the university through mentoring or guest lectures') checked @endif>
                                    <label class="form-check-label" for="resource4">Opportunities to contribute to the university through mentoring or guest lectures</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniSupport" id="resourceOther" value="Other" @if(isset($survey) && !in_array($survey->q30, [
                                        'Access to professional development resources and courses',
                                        'Alumni-only networking events',
                                        'Job boards or career counseling specifically for alumni',
                                        'Opportunities to contribute to the university through mentoring or guest lectures'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="resourceOther">Other (Please specify)</label>
                                </div>
                                <div class="form-group mt-2" id="otherAlumniSupportGroup" style="display:{{ isset($survey) && !in_array($survey->q30, [
                                    'Access to professional development resources and courses',
                                    'Alumni-only networking events',
                                    'Job boards or career counseling specifically for alumni',
                                    'Opportunities to contribute to the university through mentoring or guest lectures'
                                ]) ? 'block' : 'none' }};">
                                    <input disabled type="text" class="form-control" id="otherAlumniSupport" name="otherAlumniSupport" placeholder="Please specify" value="{{ isset($survey) && !in_array($survey->q30, [
                                        'Access to professional development resources and courses',
                                        'Alumni-only networking events',
                                        'Job boards or career counseling specifically for alumni',
                                        'Opportunities to contribute to the university through mentoring or guest lectures'
                                    ]) ? $survey->q30 : '' }}">
                                </div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const radios = document.querySelectorAll('input[name="alumniSupport"]');
                                const otherInputGroup = document.getElementById("otherAlumniSupportGroup");
                                const otherInput = document.getElementById("otherAlumniSupport");
                                radios.forEach(radio => {
                                    radio.addEventListener("change", function () {
                                        if (this.value === "Other") {
                                            otherInputGroup.style.display = "block";
                                            otherInput.required = true;
                                        } else {
                                            otherInputGroup.style.display = "none";
                                            otherInput.value = "";
                                            otherInput.required = false;
                                        }
                                    });
                                });
                            });
                            </script>

                            {{-- number 31 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">31. How can the university improve its relationship with alumni and foster a sense of community?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniCommunity" id="community1" value="Organize annual alumni reunions and events" @if(isset($survey) && $survey->q31 == 'Organize annual alumni reunions and events') checked @endif required>
                                    <label class="form-check-label" for="community1">Organize annual alumni reunions and events</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniCommunity" id="community2" value="Provide platforms for alumni to share their stories and successes" @if(isset($survey) && $survey->q31 == 'Provide platforms for alumni to share their stories and successes') checked @endif>
                                    <label class="form-check-label" for="community2">Provide platforms for alumni to share their stories and successes</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniCommunity" id="community3" value="Create an online alumni portal for ongoing communication and support" @if(isset($survey) && $survey->q31 == 'Create an online alumni portal for ongoing communication and support') checked @endif>
                                    <label class="form-check-label" for="community3">Create an online alumni portal for ongoing communication and support</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniCommunity" id="community4" value="Engage alumni in university decision-making processes" @if(isset($survey) && $survey->q31 == 'Engage alumni in university decision-making processes') checked @endif>
                                    <label class="form-check-label" for="community4">Engage alumni in university decision-making processes</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniCommunity" id="communityOther" value="Other" @if(isset($survey) && !in_array($survey->q31, [
                                        'Organize annual alumni reunions and events',
                                        'Provide platforms for alumni to share their stories and successes',
                                        'Create an online alumni portal for ongoing communication and support',
                                        'Engage alumni in university decision-making processes'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="communityOther">Other (Please specify)</label>
                                </div>
                                <div class="form-group mt-2" id="otherAlumniCommunityGroup" style="display:{{ isset($survey) && !in_array($survey->q31, [
                                    'Organize annual alumni reunions and events',
                                    'Provide platforms for alumni to share their stories and successes',
                                    'Create an online alumni portal for ongoing communication and support',
                                    'Engage alumni in university decision-making processes'
                                ]) ? 'block' : 'none' }};">
                                    <input disabled type="text" class="form-control" id="otherAlumniCommunity" name="otherAlumniCommunity" placeholder="Please specify" value="{{ isset($survey) && !in_array($survey->q31, [
                                        'Organize annual alumni reunions and events',
                                        'Provide platforms for alumni to share their stories and successes',
                                        'Create an online alumni portal for ongoing communication and support',
                                        'Engage alumni in university decision-making processes'
                                    ]) ? $survey->q31 : '' }}">
                                </div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const radios = document.querySelectorAll('input[name="alumniCommunity"]');
                                const otherInputGroup = document.getElementById("otherAlumniCommunityGroup");
                                const otherInput = document.getElementById("otherAlumniCommunity");
                                radios.forEach(radio => {
                                    radio.addEventListener("change", function () {
                                        if (this.value === "Other") {
                                            otherInputGroup.style.display = "block";
                                            otherInput.required = true;
                                        } else {
                                            otherInputGroup.style.display = "none";
                                            otherInput.value = "";
                                            otherInput.required = false;
                                        }
                                    });
                                });
                            });
                            </script>

                            {{-- number 32 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">32. Would you be willing to contribute financially or in other ways to support future students or university projects?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="contributeSupport" id="contributeYes" value="Yes" @if(isset($survey) && $survey->q32 == 'Yes') checked @endif required>
                                    <label class="form-check-label" for="contributeYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="contributeSupport" id="contributeNo" value="No" @if(isset($survey) && $survey->q32 == 'No') checked @endif>
                                    <label class="form-check-label" for="contributeNo">No</label>
                                </div>
                            </div>

                            {{-- number 33 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">33. How likely are you to participate in future alumni events or activities hosted by SLSU?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="futureParticipation" id="veryLikely" value="Very Likely" @if(isset($survey) && $survey->q33 == 'Very Likely') checked @endif required>
                                    <label class="form-check-label" for="veryLikely">Very Likely</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="futureParticipation" id="likely" value="Likely" @if(isset($survey) && $survey->q33 == 'Likely') checked @endif>
                                    <label class="form-check-label" for="likely">Likely</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="futureParticipation" id="neutral" value="Neutral" @if(isset($survey) && $survey->q33 == 'Neutral') checked @endif>
                                    <label class="form-check-label" for="neutral">Neutral</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="futureParticipation" id="unlikely" value="Unlikely" @if(isset($survey) && $survey->q33 == 'Unlikely') checked @endif>
                                    <label class="form-check-label" for="unlikely">Unlikely</label>
                                </div>
                            </div>

                            {{-- number 34 --}}
                            <div class="mb-3">
                                <label class="form-label fw-bold">34. What types of alumni events or programs would you like to see offered by the university?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEvents" id="careerWorkshops" value="Career development workshops and webinars" @if(isset($survey) && $survey->q34 == 'Career development workshops and webinars') checked @endif required>
                                    <label class="form-check-label" for="careerWorkshops">Career development workshops and webinars</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEvents" id="mentorshipPrograms" value="Alumni mentorship programs for current students" @if(isset($survey) && $survey->q34 == 'Alumni mentorship programs for current students') checked @endif>
                                    <label class="form-check-label" for="mentorshipPrograms">Alumni mentorship programs for current students</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEvents" id="networkingEvents" value="Networking events in major cities" @if(isset($survey) && $survey->q34 == 'Networking events in major cities') checked @endif>
                                    <label class="form-check-label" for="networkingEvents">Networking events in major cities</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniEvents" id="guestLectures" value="Guest lectures and workshops by successful alumni" @if(isset($survey) && $survey->q34 == 'Guest lectures and workshops by successful alumni') checked @endif>
                                    <label class="form-check-label" for="guestLectures">Guest lectures and workshops by successful alumni</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input disabled class="form-check-input" type="radio" name="alumniEvents" id="otherEvent" value="Other" @if(isset($survey) && !in_array($survey->q34, [
                                        'Career development workshops and webinars',
                                        'Alumni mentorship programs for current students',
                                        'Networking events in major cities',
                                        'Guest lectures and workshops by successful alumni'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherEvent">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" class="form-control mt-1" id="otherEventText" name="otherEventText" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q34, [
                                    'Career development workshops and webinars',
                                    'Alumni mentorship programs for current students',
                                    'Networking events in major cities',
                                    'Guest lectures and workshops by successful alumni'
                                ]) ? 'block' : 'none' }};" value="{{ isset($survey) && !in_array($survey->q34, [
                                    'Career development workshops and webinars',
                                    'Alumni mentorship programs for current students',
                                    'Networking events in major cities',
                                    'Guest lectures and workshops by successful alumni'
                                ]) ? $survey->q34 : '' }}">
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
                                <label class="form-label fw-bold">35. What additional steps can SLSU take to build stronger ties with its alumni network?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniTies" id="alumniOffice" value="Establish a dedicated alumni office or team" @if(isset($survey) && $survey->q35 == 'Establish a dedicated alumni office or team') checked @endif required>
                                    <label class="form-check-label" for="alumniOffice">Establish a dedicated alumni office or team</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniTies" id="giveBackOpportunities" value="Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)" @if(isset($survey) && $survey->q35 == 'Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)') checked @endif>
                                    <label class="form-check-label" for="giveBackOpportunities">Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniTies" id="newsletter" value="Create an alumni newsletter or digital publication" @if(isset($survey) && $survey->q35 == 'Create an alumni newsletter or digital publication') checked @endif>
                                    <label class="form-check-label" for="newsletter">Create an alumni newsletter or digital publication</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniTies" id="socialMediaCommunity" value="Foster an alumni community through social media and online platforms" @if(isset($survey) && $survey->q35 == 'Foster an alumni community through social media and online platforms') checked @endif>
                                    <label class="form-check-label" for="socialMediaCommunity">Foster an alumni community through social media and online platforms</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input disabled class="form-check-input" type="radio" name="alumniTies" id="otherTies" value="Other" @if(isset($survey) && !in_array($survey->q35, [
                                        'Establish a dedicated alumni office or team',
                                        'Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)',
                                        'Create an alumni newsletter or digital publication',
                                        'Foster an alumni community through social media and online platforms'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherTies">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" class="form-control mt-1" id="otherTiesText" name="otherTiesText" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q35, [
                                    'Establish a dedicated alumni office or team',
                                    'Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)',
                                    'Create an alumni newsletter or digital publication',
                                    'Foster an alumni community through social media and online platforms'
                                ]) ? 'block' : 'none' }};" value="{{ isset($survey) && !in_array($survey->q35, [
                                    'Establish a dedicated alumni office or team',
                                    'Provide more opportunities for alumni to give back (e.g., guest lectures, mentoring)',
                                    'Create an alumni newsletter or digital publication',
                                    'Foster an alumni community through social media and online platforms'
                                ]) ? $survey->q35 : '' }}">
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
                                <label class="form-label fw-bold">36. In your opinion, what aspects of the BSIT program at SLSU should be updated or improved for future students?</label>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitImprovements" id="handsOnLabs" value="Incorporate more hands-on labs and practical exercises" @if(isset($survey) && $survey->q36 == 'Incorporate more hands-on labs and practical exercises') checked @endif required>
                                    <label class="form-check-label" for="handsOnLabs">Incorporate more hands-on labs and practical exercises</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitImprovements" id="modernTech" value="Integrate more courses on modern technologies (e.g., AI, Data Science)" @if(isset($survey) && $survey->q36 == 'Integrate more courses on modern technologies (e.g., AI, Data Science)') checked @endif>
                                    <label class="form-check-label" for="modernTech">Integrate more courses on modern technologies (e.g., AI, Data Science)</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitImprovements" id="industryExposure" value="Increase exposure to industry practices and software tools" @if(isset($survey) && $survey->q36 == 'Increase exposure to industry practices and software tools') checked @endif>
                                    <label class="form-check-label" for="industryExposure">Increase exposure to industry practices and software tools</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitImprovements" id="softSkills" value="Focus more on communication and soft skills development" @if(isset($survey) && $survey->q36 == 'Focus more on communication and soft skills development') checked @endif>
                                    <label class="form-check-label" for="softSkills">Focus more on communication and soft skills development</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitImprovements" id="otherImprovement" value="Other" @if(isset($survey) && !in_array($survey->q36, [
                                        'Incorporate more hands-on labs and practical exercises',
                                        'Integrate more courses on modern technologies (e.g., AI, Data Science)',
                                        'Increase exposure to industry practices and software tools',
                                        'Focus more on communication and soft skills development'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherImprovement">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" id="otherImprovementInput" name="bsitImprovementsOther" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q36, [
                                    'Incorporate more hands-on labs and practical exercises',
                                    'Integrate more courses on modern technologies (e.g., AI, Data Science)',
                                    'Increase exposure to industry practices and software tools',
                                    'Focus more on communication and soft skills development'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;" class="form-control" value="{{ isset($survey) && !in_array($survey->q36, [
                                    'Incorporate more hands-on labs and practical exercises',
                                    'Integrate more courses on modern technologies (e.g., AI, Data Science)',
                                    'Increase exposure to industry practices and software tools',
                                    'Focus more on communication and soft skills development'
                                ]) ? $survey->q36 : '' }}">
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
                                    <input disabled class="form-check-input" type="radio" name="bsitAdvice" id="beProactive" value="Be proactive in seeking internships and real-world experience" @if(isset($survey) && $survey->q37 == 'Be proactive in seeking internships and real-world experience') checked @endif required>
                                    <label class="form-check-label" for="beProactive">Be proactive in seeking internships and real-world experience</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitAdvice" id="buildNetwork" value="Build a strong network with professors and industry professionals" @if(isset($survey) && $survey->q37 == 'Build a strong network with professors and industry professionals') checked @endif>
                                    <label class="form-check-label" for="buildNetwork">Build a strong network with professors and industry professionals</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitAdvice" id="stayUpdated" value="Stay updated with the latest industry trends and technologies" @if(isset($survey) && $survey->q37 == 'Stay updated with the latest industry trends and technologies') checked @endif>
                                    <label class="form-check-label" for="stayUpdated">Stay updated with the latest industry trends and technologies</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitAdvice" id="focusSkills" value="Focus on developing both technical and soft skills" @if(isset($survey) && $survey->q37 == 'Focus on developing both technical and soft skills') checked @endif>
                                    <label class="form-check-label" for="focusSkills">Focus on developing both technical and soft skills</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="bsitAdvice" id="otherAdvice" value="Other" @if(isset($survey) && !in_array($survey->q37, [
                                        'Be proactive in seeking internships and real-world experience',
                                        'Build a strong network with professors and industry professionals',
                                        'Stay updated with the latest industry trends and technologies',
                                        'Focus on developing both technical and soft skills'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherAdvice">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" id="otherAdviceInput" name="bsitAdviceOther" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q37, [
                                    'Be proactive in seeking internships and real-world experience',
                                    'Build a strong network with professors and industry professionals',
                                    'Stay updated with the latest industry trends and technologies',
                                    'Focus on developing both technical and soft skills'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;" class="form-control" value="{{ isset($survey) && !in_array($survey->q37, [
                                    'Be proactive in seeking internships and real-world experience',
                                    'Build a strong network with professors and industry professionals',
                                    'Stay updated with the latest industry trends and technologies',
                                    'Focus on developing both technical and soft skills'
                                ]) ? $survey->q37 : '' }}">
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
                                    <input disabled class="form-check-input" type="radio" name="preparationWish" id="networkingImportance" value="The importance of networking and building professional relationships" @if(isset($survey) && $survey->q38 == 'The importance of networking and building professional relationships') checked @endif required>
                                    <label class="form-check-label" for="networkingImportance">The importance of networking and building professional relationships</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="preparationWish" id="jobSearchProcess" value="How to handle the job search process more effectively" @if(isset($survey) && $survey->q38 == 'How to handle the job search process more effectively') checked @endif>
                                    <label class="form-check-label" for="jobSearchProcess">How to handle the job search process more effectively</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="preparationWish" id="internshipExperience" value="The significance of gaining work experience through internships" @if(isset($survey) && $survey->q38 == 'The significance of gaining work experience through internships') checked @endif>
                                    <label class="form-check-label" for="internshipExperience">The significance of gaining work experience through internships</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="preparationWish" id="careerExpectations" value="How to manage career expectations and growth" @if(isset($survey) && $survey->q38 == 'How to manage career expectations and growth') checked @endif>
                                    <label class="form-check-label" for="careerExpectations">How to manage career expectations and growth</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="preparationWish" id="otherPreparationWish" value="Other" @if(isset($survey) && !in_array($survey->q38, [
                                        'The importance of networking and building professional relationships',
                                        'How to handle the job search process more effectively',
                                        'The significance of gaining work experience through internships',
                                        'How to manage career expectations and growth'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherPreparationWish">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" id="otherPreparationWishInput" name="preparationWishOther" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q38, [
                                    'The importance of networking and building professional relationships',
                                    'How to handle the job search process more effectively',
                                    'The significance of gaining work experience through internships',
                                    'How to manage career expectations and growth'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;" class="form-control" value="{{ isset($survey) && !in_array($survey->q38, [
                                    'The importance of networking and building professional relationships',
                                    'How to handle the job search process more effectively',
                                    'The significance of gaining work experience through internships',
                                    'How to manage career expectations and growth'
                                ]) ? $survey->q38 : '' }}">
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
                                    <input disabled class="form-check-input" type="radio" name="alumniProgramImprovement" id="careerEvents" value="By offering more career-oriented events and workshops" @if(isset($survey) && $survey->q39 == 'By offering more career-oriented events and workshops') checked @endif required>
                                    <label class="form-check-label" for="careerEvents">By offering more career-oriented events and workshops</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniProgramImprovement" id="jobBoards" value="Providing access to job boards and internship opportunities" @if(isset($survey) && $survey->q39 == 'Providing access to job boards and internship opportunities') checked @endif>
                                    <label class="form-check-label" for="jobBoards">Providing access to job boards and internship opportunities</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniProgramImprovement" id="certificationPrograms" value="Offering ongoing education or certification programs" @if(isset($survey) && $survey->q39 == 'Offering ongoing education or certification programs') checked @endif>
                                    <label class="form-check-label" for="certificationPrograms">Offering ongoing education or certification programs</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniProgramImprovement" id="alumniForum" value="Providing a forum for alumni to connect and collaborate" @if(isset($survey) && $survey->q39 == 'Providing a forum for alumni to connect and collaborate') checked @endif>
                                    <label class="form-check-label" for="alumniForum">Providing a forum for alumni to connect and collaborate</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="alumniProgramImprovement" id="otherAlumniProgram" value="Other" @if(isset($survey) && !in_array($survey->q39, [
                                        'By offering more career-oriented events and workshops',
                                        'Providing access to job boards and internship opportunities',
                                        'Offering ongoing education or certification programs',
                                        'Providing a forum for alumni to connect and collaborate'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherAlumniProgram">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" id="otherAlumniProgramInput" name="alumniProgramOther" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q39, [
                                    'By offering more career-oriented events and workshops',
                                    'Providing access to job boards and internship opportunities',
                                    'Offering ongoing education or certification programs',
                                    'Providing a forum for alumni to connect and collaborate'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;" class="form-control" value="{{ isset($survey) && !in_array($survey->q39, [
                                    'By offering more career-oriented events and workshops',
                                    'Providing access to job boards and internship opportunities',
                                    'Offering ongoing education or certification programs',
                                    'Providing a forum for alumni to connect and collaborate'
                                ]) ? $survey->q39 : '' }}">
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
                                    <input disabled class="form-check-input" type="radio" name="feedbackImprovement" id="techIntegration" value="Improve the integration of technology in the classroom" @if(isset($survey) && $survey->q40 == 'Improve the integration of technology in the classroom') checked @endif required>
                                    <label class="form-check-label" for="techIntegration">Improve the integration of technology in the classroom</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="feedbackImprovement" id="practicalTraining" value="Offer more practical and industry-oriented training" @if(isset($survey) && $survey->q40 == 'Offer more practical and industry-oriented training') checked @endif>
                                    <label class="form-check-label" for="practicalTraining">Offer more practical and industry-oriented training</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="feedbackImprovement" id="strongerAlumniNetwork" value="Create a stronger alumni network for mentorship and career growth" @if(isset($survey) && $survey->q40 == 'Create a stronger alumni network for mentorship and career growth') checked @endif>
                                    <label class="form-check-label" for="strongerAlumniNetwork">Create a stronger alumni network for mentorship and career growth</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="feedbackImprovement" id="closerTies" value="Foster closer ties between current students and alumni for better knowledge transfer" @if(isset($survey) && $survey->q40 == 'Foster closer ties between current students and alumni for better knowledge transfer') checked @endif>
                                    <label class="form-check-label" for="closerTies">Foster closer ties between current students and alumni for better knowledge transfer</label>
                                </div>
                                <div class="form-check">
                                    <input disabled class="form-check-input" type="radio" name="feedbackImprovement" id="otherFeedback" value="Other" @if(isset($survey) && !in_array($survey->q40, [
                                        'Improve the integration of technology in the classroom',
                                        'Offer more practical and industry-oriented training',
                                        'Create a stronger alumni network for mentorship and career growth',
                                        'Foster closer ties between current students and alumni for better knowledge transfer'
                                    ])) checked @endif>
                                    <label class="form-check-label" for="otherFeedback">Other (Please specify)</label>
                                </div>
                                <input disabled type="text" id="otherFeedbackInput" name="feedbackOther" placeholder="Please specify" style="display:{{ isset($survey) && !in_array($survey->q40, [
                                    'Improve the integration of technology in the classroom',
                                    'Offer more practical and industry-oriented training',
                                    'Create a stronger alumni network for mentorship and career growth',
                                    'Foster closer ties between current students and alumni for better knowledge transfer'
                                ]) ? 'block' : 'none' }}; margin-top: 5px;" class="form-control" value="{{ isset($survey) && !in_array($survey->q40, [
                                    'Improve the integration of technology in the classroom',
                                    'Offer more practical and industry-oriented training',
                                    'Create a stronger alumni network for mentorship and career growth',
                                    'Foster closer ties between current students and alumni for better knowledge transfer'
                                ]) ? $survey->q40 : '' }}">
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
<script src="{{ asset('main_template/dist/assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('main_template/dist/assets/js/pages/dashboard-default.js') }}"></script>
<!-- [Page Specific JS] end -->

<!-- Required Js -->
<script src="{{ asset('main_template/dist/assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('main_template/dist/assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('main_template/dist/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('main_template/dist/assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('main_template/dist/assets/js/pcoded.js') }}"></script>
<script src="{{ asset('main_template/dist/assets/js/plugins/feather.min.js') }}"></script>


  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    

</body>
<!-- [Body] end -->

</html>