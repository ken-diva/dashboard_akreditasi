<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

  <head>
    <meta charset="utf-8" />
    {{-- <title>Dashboard | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title> --}}
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    @include('layout._links')
  </head>

  <body>

    <!-- Begin page -->
    <div class="layout-wrapper">

      <!-- ========== Left Sidebar ========== -->
      <div class="main-menu">
        <!-- Brand Logo -->
        <div class="logo-box">
          <!-- Brand Logo Light -->
          <a href="/" class="logo-light">
            <img src="{{ asset('dist/assets/images/logo-light.png') }}" alt="logo" class="logo-lg" height="28">
            <img src="{{ asset('dist/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="28">
          </a>
        </div>

        <!--- Menu -->
        @include('layout._sidebar')
      </div>

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="page-content">

        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
          <div class="topbar">
            <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

              <!-- Brand Logo -->
              <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="/" class="logo-light">
                  <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="22">
                  <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                </a>
              </div>

              <!-- Sidebar Menu Toggle Button -->
              <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
              </button>
            </div>

            <ul class="topbar-menu d-flex align-items-center gap-4">

              <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                  href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <img src="{{ asset('dist/assets/images/users/user.png') }}" alt="user-image" class="rounded-circle">
                  <span class="ms-1 d-none d-md-inline-block">
                    Nama user <i class="mdi mdi-chevron-down"></i>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                  <!-- item-->
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                  </div>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Settings</span>
                  </a>

                  <!-- item-->
                  <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Lock Screen</span>
                  </a>

                  <div class="dropdown-divider"></div>

                  <!-- item-->
                  <a href="pages-login.html" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                  </a>

                </div>
              </li>

            </ul>
          </div>
        </div>
        <!-- ========== Topbar End ========== -->

        @yield('content')

        <!-- Footer Start -->
        @include('layout._footer')
        <!-- end Footer -->

      </div>

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('layout._scripts')

  </body>

</html>
