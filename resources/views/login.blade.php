<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Login | Mantis Bootstrap 5 Admin Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="main_template/dist/assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="main_template/dist/assets/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="main_template/dist/assets/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="main_template/dist/assets/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="main_template/dist/assets/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="main_template/dist/assets/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="main_template/dist/assets/css/style-preset.css" >
<style>
   
    body {
        /* background: url('{{ asset('images/alumni_bg.png') }}') no-repeat center center; */
        background-size: cover;
        font-family: 'Public Sans', sans-serif; 
    }
</style>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

        <div class="auth-main shadow" >
            <div class="auth-wrapper v3" >
            <div class="auth-form">
                <div class="auth-header">
                    <a href="{{route('home')}}" class="b-brand text-primary" style = "display: flex; margin-left: 10px;">
                        <i class="fas fa-user-graduate fa-2x" style="color: #2a5caa;"></i>
                        <h4 style = "color: rgb(46, 44, 44); text-align: center; margin-top: 4px; margin-left: 5px; font-weight: bold; ">ALUMNI TRACER</h4>
                </div>
            <style>
        @media (max-width: 576px) {
            .card.my-5 {
                margin-top: -20rem !important;
                margin-bottom: 1rem !important;
            }
            .auth-main {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
            }
        }
        </style>

        <div class="card my-5"   style="border: 1px solid rgba(255,255,255,0.2); border-radius: 12px; background: rgba(255,255,255,0.18); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);">
       
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-end mb-4">
                    <h3 class="mb-0"><b>Login</b></h3>
                    <a href="{{route('home')}}" class="btn btn-danger">✖</a>
                </div>
            <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="form-group mb-3 position-relative">
                <label class="form-label">Email Address</label>
                <input type="email" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email Address"
                    value="{{ old('email') }}"
                    required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert" style="display:block;">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3 position-relative">
                <label class="form-label">Password</label>
                <input type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password"
                    id="passwordInput"
                    required>
                        <span class="position-absolute" style="top: 38px; right: 15px; cursor: pointer; z-index: 2; font-size: 18px;" onclick="togglePassword()">
                              <i class="ti ti-eye-off" id="togglePasswordIcon" style="color: #888;"></i>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert" style="display:block;">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    @if(session('login_error'))
                        <div class="mb-3" style="color: red; background-color: #ffdddd; padding: 10px; border-radius: 5px;">
                            {{ session('login_error') }}
                        </div>
                    @endif

                    <div class="d-flex mt-1 justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                        <label class="form-check-label text-muted" for="customCheckc1">Keep me sign in</label>
                    </div>
                    {{-- <h5 class="text-secondary f-w-400">Forgot Password?</h5> --}}
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

                <script>
                function togglePassword() {
                    const input = document.getElementById('passwordInput');
                    const icon = document.getElementById('togglePasswordIcon');
                    if (input.type === "password") {
                        input.type = "text";
                        icon.classList.remove('ti-eye');
                        icon.classList.add('ti-eye-off');
                    } else {
                        input.type = "password";
                        icon.classList.remove('ti-eye-off');
                        icon.classList.add('ti-eye');
                    }
                }
                </script>

                <script>
                function togglePassword() {
                    const input = document.getElementById('passwordInput');
                    const icon = document.getElementById('togglePasswordIcon');
                    if (input.type === "password") {
                        input.type = "text";
                        icon.classList.remove('ti-eye-off');
                        icon.classList.add('ti-eye');
                    } else {
                        input.type = "password";
                        icon.classList.remove('ti-eye');
                        
                        icon.classList.add('ti-eye-off');
                    }
                }
                </script>
            
            </div>
        </div>
        <div class="auth-footer row">
          <!-- <div class=""> -->
            <div class="col my-1">
               <p class="m-0">Copyright © <a href="#">Capstone Project , Van's Group</a></p>
            </div>
            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item"><a href="#" >Home</a></li>
                 <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
              </ul>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  <script src="main_template/dist/assets/js/plugins/popper.min.js"></script>
  <script src="main_template/dist/assets/js/plugins/simplebar.min.js"></script>
  <script src="main_template/dist/assets/js/plugins/bootstrap.min.js"></script>
  <script src="main_template/dist/assets/js/fonts/custom-font.js"></script>
  <script src="main_template/dist/assets/js/pcoded.js"></script>
  <script src="main_template/dist/assets/js/plugins/feather.min.js"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    
 
</body>
<!-- [Body] end -->

</html>