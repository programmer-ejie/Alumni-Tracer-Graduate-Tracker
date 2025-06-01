<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Super Dashbaord | Alumni Tracer</title>
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
      {{-- <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
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
              <span>Super Admin</span>
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
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
       <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Alumni Page Views</h6>
              <h4 class="mb-3">{{ number_format($totalPageViews) }} <span class="badge bg-light-primary border border-primary"><i
                    class="ti ti-trending-up"></i> {{ $pageViewsPercent }}%</span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">{{ number_format($extraPageViews) }}</span> this week!
              </p>
            </div>
          </div>
        </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body">
               <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                  <h4 class="mb-3">{{ number_format($totalUsers) }} <span class="badge bg-light-success border border-success"><i
                        class="ti ti-trending-up"></i> {{ $usersPercent }}%</span></h4>
                  <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">{{ number_format($extraUsers) }}</span> this week!</p>
              </div>
            </div>
          </div>
         <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-2 f-w-400 text-muted">Total Surveys</h6>
                <h4 class="mb-3">{{ number_format($totalSurveys) }} <span class="badge bg-light-warning border border-warning"><i
                      class="ti ti-trending-{{ $surveysPercent >= 0 ? 'up' : 'down' }}"></i> {{ $surveysPercent }}%</span></h4>
                <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">{{ number_format($extraSurveys) }}</span> this week!</p>
              </div>
            </div>
          </div>
         <div class="col-md-6 col-xl-3">
  <div class="card">
    <div class="card-body">
      <h6 class="mb-2 f-w-400 text-muted">NLP Sentiment Score</h6>
      <h4 class="mb-3">
        {{ $nlpPercent }} / 100
        <span class="badge bg-light-danger border border-danger">
          <i class="ti ti-trending-{{ $nlpTrend }}"></i> {{ $nlpPercent }}%
        </span>
      </h4>
      <p class="mb-0 text-muted text-sm">
        Sentiment:
        <span class="text-danger">{{ $nlpSentiment }}</span>
        {{-- Emoji Reaction --}}
        @if($nlpSentiment === 'Positive')
          <span style="font-size: 1.5rem;">😊</span>
        @elseif($nlpSentiment === 'Negative')
          <span style="font-size: 1.5rem;">😞</span>
        @else
          <span style="font-size: 1.5rem;">😐</span>
        @endif
      </p>
    </div>
  </div>
</div>
      <div class="col-md-12 col-xl-8 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-3">Survey Sentiment Trend</h5>
              <div id="sentiment-chart"></div>
            </div>
          </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            const sentimentData = @json($sentimentStats);
            const months = sentimentData.map(item => item.month);
            const positive = sentimentData.map(item => Number(item.positive));
            const negative = sentimentData.map(item => Number(item.negative));
            const neutral = sentimentData.map(item => Number(item.neutral));

            var options = {
                chart: { type: 'line', height: 350 },
                series: [
                    { name: 'Positive', data: positive },
                    { name: 'Negative', data: negative },
                    { name: 'Neutral', data: neutral }
                ],
                xaxis: { categories: months }
            };

            var chart = new ApexCharts(document.querySelector("#sentiment-chart"), options);
            chart.render();
        </script>
      <div class="col-md-12 col-xl-4">
        <div class="card">  <h5 class="mb-3" style = "margin: 20px;">Daily Survey Sentiment Trend</h5>
          <div class="card-body">
            <div id="sentiment-day-chart"></div>
            <script>
              const sentimentDataDay = @json($sentimentStatsDay);
              const days = sentimentDataDay.map(item => item.day);
              const positiveDay = sentimentDataDay.map(item => Number(item.positive));
              const negativeDay = sentimentDataDay.map(item => Number(item.negative));
              const neutralDay = sentimentDataDay.map(item => Number(item.neutral));

              var optionsDay = {
                  chart: { type: 'bar', height: 350 },
                  series: [
                      { name: 'Positive', data: positiveDay },
                      { name: 'Negative', data: negativeDay },
                      { name: 'Neutral', data: neutralDay }
                  ],
                  xaxis: { categories: days }
              };

              var chartDay = new ApexCharts(document.querySelector("#sentiment-day-chart"), optionsDay);
              chartDay.render();
            </script>
          </div>
        </div>
      </div>

        <div class="col-md-12 col-xl-4">
          <h5 class="mb-3">Event Analytics Report</h5>
          <div class="card">
            <div class="list-group list-group-flush">
             <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                Total Events This Month
                <span class="h5 mb-0">{{ $eventsThisMonth }}</span>
              </a>
              <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
                Total Attendees
                <span class="h5 mb-0">{{ $totalAttendees }}</span>
              </a>
              <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
             
               ⭐ <span class="p mb-0">{{ $mostPopularEvent ?? 'N/A' }}</span>
              </a>
            </div>
            <div class="card-body px-2">
             <div id="analytics-report-chart"></div>
              <script>
                  const eventsData = @json($eventsPerMonth);
                  const eventMonths = eventsData.map(item => item.month);
                  const eventCounts = eventsData.map(item => Number(item.count));

                  var analyticsOptions = {
                      chart: { type: 'bar', height: 250 },
                      series: [{ name: 'Events', data: eventCounts }],
                      xaxis: { categories: eventMonths }
                  };

                  var analyticsChart = new ApexCharts(document.querySelector("#analytics-report-chart"), analyticsOptions);
                  analyticsChart.render();
              </script>
            </div>
          </div>
        </div>

       <div class="col-md-12 col-xl-8">
        <h5 class="mb-3">Surveys Per Week</h5>
        <div class="card">
          <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
            
            <div id="sales-report-chart"></div>
            <script>
              const surveysWeekData = @json($surveysPerWeek);
              const weeks = surveysWeekData.map(item => item.week);
              const counts = surveysWeekData.map(item => Number(item.count));

              var salesOptions = {
                  chart: { type: 'bar', height: 390 },
                  series: [{ name: 'Surveys', data: counts }],
                  xaxis: { categories: weeks }
              };

              var salesChart = new ApexCharts(document.querySelector("#sales-report-chart"), salesOptions);
              salesChart.render();
            </script>
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
  {{-- <script src="../main_template/dist/assets/js/plugins/apexcharts.min.js"></script>
  <script src="../main_template/dist/assets/js/pages/dashboard-default.js"></script> --}}
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
{{--