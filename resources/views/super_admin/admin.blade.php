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
  <link rel="icon" href="main_template/dist/assets/images/web_logo.png"> <!-- [Google Font] Family -->
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
      <a href="{{route('super_admin.dashboard')}}" class="b-brand text-primary" style = "display: flex;">
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
            <a href="{{route('home')}}" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
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
        
        </ul>
        <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
           
          <a href="{{route('super_admin.dashboard')}}" class="dropdown-item">
            <i class="ti ti-dashboard"></i>
              <span>Dashboard</span>
            </a>
             <a href="{{ route('super_admin.school') }}" class="dropdown-item">
         <i class="ti ti-school"></i>
            <span >Manage School</span>
          </a>

            <a href="{{ route('super_admin.accounts') }}" class="dropdown-item">
          <i class="ti ti-user-check"></i>
            <span >Manage Admin</span>
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
                                 Admin Accounts
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#registerAdminOffcanvas" aria-controls="registerAdminOffcanvas">
                                  <i class="ti ti-plus"></i>
                              </button>
                            </h5>
                          <!-- Register Admin Offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="registerAdminOffcanvas" aria-labelledby="registerAdminOffcanvasLabel">
                                    <div class="offcanvas-header border-bottom">
                                        <h5 class="offcanvas-title fw-bold" id="registerAdminOffcanvasLabel">
                                            <i class="ti ti-user-plus text-primary me-2"></i>Register Admin
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center" style="min-height: 60vh;">
                                       @if ($errors->any())
                                          <div class="alert alert-danger">
                                              <ul>
                                                  @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                  @endforeach
                                              </ul>
                                          </div>
                                      @endif
                                      @if(session('success'))
                                          <div class="alert alert-success">{{ session('success') }}</div>
                                      @endif
                                      @if(session('error'))
                                          <div class="alert alert-danger">{{ session('error') }}</div>
                                      @endif
                                      <form method="POST" action="{{ route('super_admin.admin.store') }}" class="w-100" style="max-width: 400px;">
                                            @csrf
                                            <div class="mb-4 text-center">
                                                <div class="rounded-circle bg-light d-flex justify-content-center align-items-center mx-auto mb-2" style="width: 70px; height: 70px;">
                                                    <i class="ti ti-user text-primary" style="font-size: 2.5rem;"></i>
                                                </div>
                                                <h4 class="fw-semibold mb-0">Admin Registration</h4>
                                                <small class="text-muted">Fill in the details below to add a new admin.</small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label fw-semibold">Fullname</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter fullname" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label fw-semibold">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="school_id" class="form-label fw-semibold">School</label>
                                                <select class="form-select" id="school_id" name="school_id" required>
                                                    <option value="" disabled selected>Select School</option>
                                                    @foreach($schools as $school)
                                                        <option value="{{ $school->id }}">{{ $school->school_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                           <div class="mb-4 position-relative">
                                                <label for="password" class="form-label fw-semibold">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                                <span class=" end-0 translate-middle-y me-3" style="cursor:pointer; position: absolute; top: 52px;" onclick="togglePasswordVisibility()">
                                                    <i id="togglePasswordIcon" class="fa fa-eye-slash"></i>
                                                </span>
                                            </div>
                                            <script>
                                            function togglePasswordVisibility() {
                                                const passwordInput = document.getElementById('password');
                                                const icon = document.getElementById('togglePasswordIcon');
                                                if (passwordInput.type === 'password') {
                                                    passwordInput.type = 'text';
                                                    icon.classList.remove('fa-eye-slash');
                                                    icon.classList.add('fa-eye');
                                                } else {
                                                    passwordInput.type = 'password';
                                                    icon.classList.remove('fa-eye');
                                                    icon.classList.add('fa-eye-slash');
                                                }
                                            }
                                            </script>
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
        <div class="table-responsive">
            <table class="table table-hover table-borderless mb-0 " id="admin-table">
                <thead class="table-info">
                    <tr>
                       <th>Logo</th>
                        <th>Email</th>
                        <th>Fullname</th>
                        <th>School</th>
                       
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($admins as $adminAccount)
                        <tr>
                            <td >
                                @if($adminAccount->school && $adminAccount->school->logo)
                                    <img src="{{ asset('logos/' . $adminAccount->school->logo) }}" alt="School Logo" style="height: 30px; width: 30px; object-fit: cover; border-radius: 50%; ">
                                @else
                                    <span class="text-muted">No Logo</span>
                                @endif
                            </td>
                            <td>{{ $adminAccount->email }}</td>
                            <td>{{ $adminAccount->fullname }}</td>
                            <td>
                                {{ $adminAccount->school->school_name ?? 'N/A' }}
                            </td>
                           
                           <td class="text-center">
                            <!-- Edit Button -->
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#editAdminOffcanvas{{ $adminAccount->id }}" aria-controls="editAdminOffcanvas{{ $adminAccount->id }}" title="Edit Admin">
                                <i class="ti ti-edit-circle f-18 text-success"></i>
                            </a>
                            <!-- Delete Button -->
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#deleteAdminOffcanvas{{ $adminAccount->id }}" aria-controls="deleteAdminOffcanvas{{ $adminAccount->id }}" title="Delete Admin">
                                <i class="ti ti-trash f-18 text-danger"></i>
                            </a>
                        </td>

                      <!-- Edit Admin Offcanvas -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="editAdminOffcanvas{{ $adminAccount->id }}" aria-labelledby="editAdminLabel{{ $adminAccount->id }}">
                            <div class="offcanvas-header border-bottom d-flex align-items-center">
                                <span class="rounded-circle bg-success bg-opacity-10 d-flex justify-content-center align-items-center me-2" style="width: 40px; height: 40px;">
                                    <i class="ti ti-edit-circle text-success" style="font-size: 1.5rem;"></i>
                                </span>
                                <h5 class="offcanvas-title fw-bold mb-0 flex-grow-1" id="editAdminLabel{{ $adminAccount->id }}">Edit Admin</h5>
                                <button type="button" class="btn-close ms-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <form method="POST" action="{{ route('super_admin.admin.update', $adminAccount->id) }}" class="" style="max-width:400px; margin:auto;">
                                    @csrf
                                    @method('PUT')
                                    <div class="text-center mb-3">
                                        <div class="rounded-circle bg-light d-flex justify-content-center align-items-center mx-auto mb-2" style="width: 70px; height: 70px;">
                                            <i class="ti ti-user text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="fw-semibold mb-1 mt-2">Edit Admin</h5>
                                        <small class="text-muted">Only fullname and email can be updated.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullname{{ $adminAccount->id }}" class="form-label fw-semibold">Fullname</label>
                                        <input type="text" class="form-control w-100" id="fullname{{ $adminAccount->id }}" name="fullname" value="{{ $adminAccount->fullname }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email{{ $adminAccount->id }}" class="form-label fw-semibold">Email</label>
                                        <input type="email" class="form-control w-100" id="email{{ $adminAccount->id }}" name="email" value="{{ $adminAccount->email }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">School</label>
                                        <input type="text" class="form-control w-100" value="{{ $adminAccount->school->school_name ?? 'N/A' }}" disabled>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100">
                                        <i class="ti ti-device-floppy me-1"></i> Update
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- Delete Admin Offcanvas -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="deleteAdminOffcanvas{{ $adminAccount->id }}" aria-labelledby="deleteAdminLabel{{ $adminAccount->id }}">
                            <div class="offcanvas-header border-bottom">
                                <h5 class="offcanvas-title text-danger" id="deleteAdminLabel{{ $adminAccount->id }}">
                                    <i class="ti ti-trash me-2"></i> Confirm Admin Deletion
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body d-flex flex-column justify-content-center text-center" style="min-height: 200px;">
                                <div class="mb-4">
                                    <div class="text-danger mb-2">
                                        <i class="ti ti-alert-triangle" style="font-size: 2.5rem;"></i>
                                    </div>
                                    <p class="fs-5 mb-1">Are you sure you want to delete <b>{{ $adminAccount->fullname }}</b>?</p>
                                    <p class="text-muted small">This action cannot be undone.</p>
                                </div>
                                <form method="POST" action="{{ route('super_admin.admin.destroy', $adminAccount->id) }}">
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
                        </tr>
                    @empty
                        <td colspan="5">
                                   <div class="alert alert-danger text-center mb-0" role="alert">
                                            <i class="ti ti-alert-triangle"></i> No School Data Yet!
                                     </div>
                                 </td>
                    @endforelse
                </tbody>
            </table>
            <div id="noResultsMessage" class="alert alert-danger text-center d-none" role="alert">
                No Admin Accounts found.
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