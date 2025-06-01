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
                       
                        {{-- <div class="card">
                            <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
                            <h4 class="mb-3">4,42,236 <br><span class="badge bg-light-primary border border-primary"><i
                                    class="ti ti-trending-up"></i> 59.3%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                            <h4 class="mb-3">78,250 <br><span class="badge bg-light-success border border-success"><i
                                    class="ti ti-trending-up"></i> 70.5%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                            <h4 class="mb-3">18,800 <br><span class="badge bg-light-warning border border-warning"><i
                                    class="ti ti-trending-down"></i> 27.4%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                            <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                                    class="ti ti-trending-down"></i> 27.4%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year
                            </p>
                            </div>
                        </div>
                        </div> --}}
                      </div>

                             <div class="col-md-12 col-xl-12">
                                  <h5 class="mb-3">Alumni Survey Data</h5>
                                  <div class="d-flex flex-row flex-wrap align-items-end gap-2">
                                    <div>
                                      <label for="batchStart" class="form-label mb-1">Batch Start Year</label>
                                      <input type="number" class="form-control" id="batchStart" placeholder="e.g., 2016"
                                            maxlength="4" oninput="limitToFourDigits(this)" style="width: 130px;">
                                    </div>
                                    <div>
                                      <label for="batchEnd" class="form-label mb-1">Batch End Year</label>
                                      <input type="number" class="form-control" id="batchEnd" placeholder="e.g., 2020"
                                            maxlength="4" oninput="limitToFourDigits(this)" style="width: 130px;">
                                    </div>
                                    <div>
                                      <button class="btn btn-primary" onclick="filterBatch()" title="Filter" style = "margin-top: -27px;">
                                        <i class="fas fa-search"></i>
                                      </button>
                                    </div>
                                  </div><br><hr>

                                <div class="card tbl-card">
                                  <div class="card-body">
                                    <div class="table-responsive ">
                                     <table class="table table-hover table-borderless mb-0" id="survey-table">
                                        <thead class = "table-info">
                                            <tr>
                                                <th>Email</th>
                                                <th>Fullname</th>
                                                <th>Age</th>
                                                <th>Batch</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                              <tbody>
                                  @if($surveys->isEmpty())
                                      <tr style="background-color: #f8d7da; color: #842029;">
                                          <td colspan="5" class="text-center fw-bold">No Alumni Survey Data Yet!</td>
                                      </tr>
                                  @else
                                      @foreach($surveys as $survey)
                                          @php
                                              $alumniData = $alumni->firstWhere('id', $survey->alumni_id);
                                          @endphp
                                          <tr style="border-bottom: 1px solid #dee2e6;">
                                              <td>
                                                  <a href="#" class="text-muted">{{ $alumniData->email ?? 'N/A' }}</a>
                                              </td>
                                              <td>{{ $alumniData->fullname ?? 'N/A' }}</td>
                                              <td>{{ $alumniData->age ?? 'N/A' }}</td>
                                              <td>
                                                  <span class="d-flex align-items-center gap-2">
                                                      <i class="fas fa-circle text-success f-10 m-r-5"></i>
                                                      {{ $alumniData->batch ?? 'N/A' }}
                                                  </span>
                                              </td>
                                              <td class="text-center">
                                                  <a href="{{ route('admin.viewData', ['id' => $survey->id]) }}">
                                                      <i class="fas fa-info-circle"></i>
                                                      <span style="margin-left: 5px;">View</span>
                                                  </a>
                                              </td>
                                          </tr>
                                      @endforeach
                                      <tr id="noResultsRow" style="background-color: #f8d7da; color: #842029; display: none;" role="alert">
                                          <td colspan="5" class="text-center fw-bold">No Survey Data found.</td>
                                      </tr>
                                  @endif
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
    const noResultsRow = document.getElementById('noResultsRow');
    // Only select survey rows, skip the "No Alumni Survey Data Yet!" row and the noResultsRow
    const rows = Array.from(document.querySelectorAll('#survey-table tbody tr'))
        .filter(row => !row.id && !row.querySelector('td[colspan]'));

    // If there are no survey rows at all, just hide the noResultsRow and return
    if (rows.length === 0) {
        if (noResultsRow) noResultsRow.style.display = 'none';
        return;
    }

    // If both fields are empty, show all rows and hide the alert
    if (startVal === '' && endVal === '') {
        rows.forEach(row => row.style.display = '');
        if (noResultsRow) noResultsRow.style.display = 'none';
        return;
    }

    let start = parseInt(startVal);
    let end = parseInt(endVal);
    let matchFound = false;

    rows.forEach(row => {
        const batchText = row.querySelector('td:nth-child(4)')?.innerText.trim();
        if (!batchText) {
            row.style.display = 'none';
            return;
        }

        if (batchText.includes('-')) {
            const [batchStart, batchEnd] = batchText.split('-').map(num => parseInt(num.trim()));
            if (!isNaN(start) && !isNaN(end) && batchStart === start && batchEnd === end) {
                row.style.display = '';
                matchFound = true;
            } else {
                row.style.display = 'none';
            }
        } else {
            // Handle single year batch
            if (!isNaN(start) && !isNaN(end) && parseInt(batchText) === start && parseInt(batchText) === end) {
                row.style.display = '';
                matchFound = true;
            } else {
                row.style.display = 'none';
            }
        }
    });

    // Show/hide the "No Results" row if there are filter values and no matches
    if ((startVal !== '' || endVal !== '') && !matchFound) {
        if (noResultsRow) noResultsRow.style.display = '';
    } else {
        if (noResultsRow) noResultsRow.style.display = 'none';
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