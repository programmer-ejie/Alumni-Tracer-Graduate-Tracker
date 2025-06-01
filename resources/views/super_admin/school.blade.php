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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
      <a href="{{route('admin.dashboard')}}" class="b-brand text-primary" style = "display: flex;">
                <i class="fas fa-user-graduate fa-2x" style="color: #2a5caa;"></i>
                <h4 style = "color: rgb(46, 44, 44); text-align: center; margin-top: 4px; margin-left: 5px; font-weight: bold;">ALUMNI TRACER</h4>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">

        
       <li class="pc-item">
  <a href="{{route('super_admin.dashboard')}}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
    <span class="pc-mtext">Super Dashboard</span>
  </a>
</li>

    <li class="pc-item pc-caption">
              <label>Management</label>
              <i class="ti ti-layout-grid"></i>
            </li>

        <li class="pc-item">
          <a href="{{ route('super_admin.school') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-school"></i></span>
            <span class="pc-mtext">Manage School</span>
          </a>
        </li>

        <li class="pc-item">
          <a href="{{ route('super_admin.accounts') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user-check"></i></span>
            <span class="pc-mtext">Manage Admin</span>
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
            <input type="search" class="form-control border-0 shadow-none" id="survey-search-mobile" placeholder="Search here. . .">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" id="survey-search" placeholder="Search here. . .">
      </form>

  <script>
          document.getElementById('survey-search').addEventListener('input', function() {
              let filter = this.value.toLowerCase().trim();
              let rows = document.querySelectorAll('#survey-table tbody tr');
              rows.forEach(row => {
                  let cells = row.querySelectorAll('td');
                  if (cells.length < 4) return;

                 
                  let email = cells[0].textContent.toLowerCase();
                  let fullname = cells[1].textContent.toLowerCase();
                  let age = cells[2].textContent.toLowerCase();
                  let batch = cells[3].textContent.toLowerCase();

                 
                  if (!isNaN(filter) && filter !== '') {
                      row.style.display =
                          age === filter || batch === filter || email.includes(filter) || fullname.includes(filter)
                          ? '' : 'none';
                  } else {
                   
                      let searchText = email + ' ' + fullname + ' ' + age + ' ' + batch;
                      row.style.display = searchText.includes(filter) ? '' : 'none';
                  }
              });
          });
          </script>

            <script>
            document.getElementById('survey-search-mobile').addEventListener('input', function() {
                let filter = this.value.toLowerCase().trim();
                let rows = document.querySelectorAll('#survey-table tbody tr');
                rows.forEach(row => {
                    let cells = row.querySelectorAll('td');
                    if (cells.length < 4) return; 

                
                    let email = cells[0].textContent.toLowerCase();
                    let fullname = cells[1].textContent.toLowerCase();
                    let age = cells[2].textContent.toLowerCase();
                    let batch = cells[3].textContent.toLowerCase();

                 
                    if (!isNaN(filter) && filter !== '') {
                        row.style.display =
                            age === filter || batch === filter || email.includes(filter) || fullname.includes(filter)
                            ? '' : 'none';
                    } else {
                       
                        let searchText = email + ' ' + fullname + ' ' + age + ' ' + batch;
                        row.style.display = searchText.includes(filter) ? '' : 'none';
                    }
                });
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
        <img src="{{ asset('images/' . ($admin->profile_pic ?? 'super.png')) }}"
        alt="user-image"
        class="user-avtar wid-35"
        style="height: 23px; object-fit: cover;">

        <span>{{$admin->fullname}}</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
                <img src="{{ asset('images/' . ($admin->profile_pic ?? 'super.png')) }}"
              alt="user-image"
              class="user-avtar wid-35"
              style="height: 35px; object-fit: cover;">
            </div>
            <div class="flex-grow-1 ms-3">
               <h6 class="mb-1"  style = "font-size: 12px;">{{ $admin->fullname}}</h6>
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
                <li class="breadcrumb-item" aria-current="page">Survey Data</li>
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
                      {{-- <h5 class="mb-3">Alumni Survey Count</h5> --}}
                     <div class="col-md-6 col-xl-3">                
                      </div>
                             <div class="col-md-12 col-xl-12">
                              <h5 class="mb-3 d-flex justify-content-between align-items-center">
                                 School Information
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#registerSchoolOffcanvas" aria-controls="registerSchoolOffcanvas">
                                    <i class="ti ti-plus"></i>
                                </button>
                            </h5>

                            <!-- Register School Offcanvas -->
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="registerSchoolOffcanvas" aria-labelledby="registerSchoolOffcanvasLabel">
                              <div class="offcanvas-header border-bottom">
                                  <h5 class="offcanvas-title fw-bold" id="registerSchoolOffcanvasLabel">
                                      <i class="ti ti-school text-primary me-2"></i>Register School
                                  </h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center" style="min-height: 60vh;">
                                  <form method="POST" action="{{ route('super_admin.school.store') }}" enctype="multipart/form-data" class="w-100" style="max-width: 400px;">
                                      @csrf
                                      <div class="mb-4 text-center">
                                          <div class="rounded-circle bg-light d-flex justify-content-center align-items-center mx-auto mb-2" style="width: 70px; height: 70px;">
                                              <i class="ti ti-building text-primary" style="font-size: 2.5rem;"></i>
                                          </div>
                                          <h4 class="fw-semibold mb-0">School Registration</h4>
                                          <small class="text-muted">Fill in the details below to add a new school.</small>
                                      </div>
                                      <div class="mb-3">
                                          <label for="schoolName" class="form-label fw-semibold">School Name</label>
                                          <input type="text" class="form-control" id="schoolName" name="school_name" placeholder="Enter school name" required>
                                      </div>
                                      <div class="mb-4">
                                          <label for="schoolLogo" class="form-label fw-semibold">Logo <span class="text-muted">(optional)</span></label>
                                          <input type="file" class="form-control" id="schoolLogo" name="logo" accept="image/*">
                                      </div>
                                      <div class="d-grid">
                                          <button type="submit" class="btn btn-primary">
                                              <i class="ti ti-plus me-1"></i> Register
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div><hr>
                              
                                <div class="card tbl-card">
                                  <div class="card-body">
                                    <div class="table-responsive ">
                                    <table class="table table-hover table-borderless mb-0" id="school-table">
                                          <thead class="table-info">
                                              <tr>   <th>School Logo</th>
                                                  <th>School Name</th>
                                               
                                                  <th>Registration Date</th>
                                                  <th class="text-center">Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @forelse($schools as $school)
                                                  <tr>
                                                    <td>
                                                          @if($school->logo)
                                                              <img src="{{ asset('logos/' . $school->logo) }}" alt="Logo" style="height: 30px;">
                                                          @else
                                                              <span class="text-muted">No Logo</span>
                                                          @endif
                                                      </td>
                                                      <td>{{ $school->school_name }}</td>
                                                      
                                                      <td>{{ $school->created_at->format('Y-m-d') }}</td>
                                                      <td class="text-center">
                                                          <!-- Edit Icon -->
                                                          <a href="#" data-bs-toggle="offcanvas" data-bs-target="#editSchoolOffcanvas{{ $school->id }}" aria-controls="editSchoolOffcanvas{{ $school->id }}" title="Edit School">
                                                              <i class="ti ti-edit-circle f-18 text-success"></i>
                                                          </a>
                                                          <!-- Delete Icon -->
                                                          <a href="#" data-bs-toggle="offcanvas" data-bs-target="#deleteSchoolOffcanvas{{ $school->id }}" aria-controls="deleteSchoolOffcanvas{{ $school->id }}" title="Delete School">
                                                              <i class="ti ti-trash f-18 text-danger"></i>
                                                          </a>
                                                      </td>
                                                  </tr>

                                                  <!-- Edit School Offcanvas -->
                                                  <div class="offcanvas offcanvas-end" tabindex="-1" id="editSchoolOffcanvas{{ $school->id }}" aria-labelledby="editSchoolLabel{{ $school->id }}">
                                                     <div class="offcanvas-header border-bottom d-flex align-items-center">
                                                          <span class="rounded-circle bg-success bg-opacity-10 d-flex justify-content-center align-items-center me-2" style="width: 40px; height: 40px;">
                                                              <i class="ti ti-edit-circle text-success" style="font-size: 1.5rem;"></i>
                                                          </span>
                                                          <h5 class="offcanvas-title fw-bold mb-0 flex-grow-1" id="editSchoolLabel{{ $school->id }}">Edit School</h5>
                                                          <button type="button" class="btn-close ms-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                      </div>
                                                      <div class="offcanvas-body">
                                                        <form method="POST" action="{{ route('super_admin.school.update', $school->id) }}" enctype="multipart/form-data" class="" style="max-width:400px; margin:auto;">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="text-center mb-3">
                                                                @if($school->logo)
                                                                    <img src="{{ asset('logos/' . $school->logo) }}" alt="Current Logo" class="img-thumbnail shadow-sm mb-2" style="height: 160px; width: 160px; object-fit: cover;">
                                                                    <div class="small text-muted">Current Logo</div>
                                                                @else
                                                                    <div class="rounded-circle bg-light d-flex justify-content-center align-items-center mx-auto mb-2" style="width: 70px; height: 70px;">
                                                                        <i class="ti ti-building text-primary" style="font-size: 2.5rem;"></i>
                                                                    </div>
                                                                @endif
                                                                <h5 class="fw-semibold mb-1 mt-2">Edit School</h5>
                                                                <small class="text-muted">Update the details below.</small>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="schoolName{{ $school->id }}" class="form-label fw-semibold">School Name</label>
                                                                <input type="text" class="form-control w-100" id="schoolName{{ $school->id }}" name="school_name" value="{{ $school->school_name }}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="schoolLogo{{ $school->id }}" class="form-label fw-semibold">Logo <span class="text-muted">(optional)</span></label>
                                                                <input type="file" class="form-control w-100" id="schoolLogo{{ $school->id }}" name="logo" accept="image/*">
                                                            </div>
                                                            <button type="submit" class="btn btn-success w-100">
                                                                <i class="ti ti-device-floppy me-1"></i> Update
                                                            </button>
                                                        </form>
                                                      </div>
                                                  </div>

                                                  <!-- Delete School Offcanvas -->
                                                 <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteSchoolOffcanvas{{ $school->id }}" aria-labelledby="deleteSchoolLabel{{ $school->id }}">
                                                    <div class="offcanvas-header border-bottom">
                                                        <h5 class="offcanvas-title text-danger" id="deleteSchoolLabel{{ $school->id }}">
                                                            <i class="ti ti-trash me-2"></i> Confirm School Deletion
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 300px;">
                                                        <div class="mb-4">
                                                            <div class="text-danger mb-2">
                                                                <i class="ti ti-alert-triangle" style="font-size: 3rem;"></i>
                                                            </div>
                                                            <p class="fs-5 mb-1">Are you sure you want to delete <b>{{ $school->school_name }}</b>?</p>
                                                            <p class="text-muted small">This action cannot be undone.</p>
                                                        </div>
                                                        <form method="POST" action="{{ route('super_admin.school.destroy', $school->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="d-grid gap-2">
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="ti ti-trash me-1"></i> Yes, Delete
                                                                </button>
                                                                <button type="button" class="btn btn-light border" data-bs-dismiss="offcanvas">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                              @empty
                                                  <tr>
                                                      <td colspan="4">
                                                          <div class="alert alert-danger text-center mb-0" role="alert">
                                                              <i class="ti ti-alert-triangle"></i> No School Data Yet!
                                                          </div>
                                                      </td>
                                                  </tr>
                                              @endforelse
                                          </tbody>
                                      </table>
                                      <div id="noResultsMessage" class="alert alert-danger text-center d-none" role="alert">
                                          No Survey Data found.
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
<script>

function limitToFourDigits(input) {
  if (input.value.length > 4) {
    input.value = input.value.slice(0, 4);
  }
}

function filterBatch() {
    let startVal = document.getElementById('batchStart').value;
    let endVal = document.getElementById('batchEnd').value;
    const noResults = document.getElementById('noResultsMessage');
    const rows = document.querySelectorAll('#survey-table tbody tr');

    if (startVal === '' && endVal === '') {
        rows.forEach(row => {
            if (!row.querySelector('td[colspan]')) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
        noResults.classList.add('d-none');
        return;
    }

    let start = parseInt(startVal);
    let end = parseInt(endVal);
    let matchFound = false;

    rows.forEach(row => {
        if (row.querySelector('td[colspan]')) {
            row.style.display = 'none';
            return;
        }

        const batchText = row.querySelector('td:nth-child(4)')?.innerText.trim();
        if (!batchText.includes('-')) {
            row.style.display = 'none';
            return;
        }

        const [batchStart, batchEnd] = batchText.split('-').map(num => parseInt(num.trim()));

      
        if (!isNaN(start) && !isNaN(end) && batchStart === start && batchEnd === end) {
            row.style.display = '';
            matchFound = true;
        } else {
            row.style.display = 'none';
        }
    });

    if (!matchFound) {
        noResults.classList.remove('d-none');
    } else {
        noResults.classList.add('d-none');
    }
}
</script>


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