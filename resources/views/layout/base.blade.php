<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

  <head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    @include('layout._links')
  </head>

  <body>

    <!-- Begin page -->
    <div class="wrapper">

      <!--==========Topbar Start==========-->
      <div class="navbar-custom">
        <div class="topbar container-fluid">
          <div class="d-flex align-items-center gap-1">

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
              <i class="ri-menu-line"></i>
            </button>
          </div>

          <ul class="topbar-menu d-flex align-items-center gap-3">

            <li class="dropdown notification-list">
              <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <i class="ri-notification-3-line fs-22"></i>
                <span class="noti-icon-badge badge text-bg-pink">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                    </div>
                    <div class="col-auto">
                      <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                        <small>Clear All</small>
                      </a>
                    </div>
                  </div>
                </div>

                <div style="max-height: 300px;" data-simplebar>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-primary-subtle">
                      <i class="mdi mdi-comment-account-outline text-primary"></i>
                    </div>
                    <p class="notify-details">Caleb Flakelar commented on Admin
                      <small class="noti-time">1 min ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-warning-subtle">
                      <i class="mdi mdi-account-plus text-warning"></i>
                    </div>
                    <p class="notify-details">New user registered.
                      <small class="noti-time">5 hours ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-danger-subtle">
                      <i class="mdi mdi-heart text-danger"></i>
                    </div>
                    <p class="notify-details">Carlos Crouch liked
                      <small class="noti-time">3 days ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-pink-subtle">
                      <i class="mdi mdi-comment-account-outline text-pink"></i>
                    </div>
                    <p class="notify-details">Caleb Flakelar commented on Admi
                      <small class="noti-time">4 days ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-purple-subtle">
                      <i class="mdi mdi-account-plus text-purple"></i>
                    </div>
                    <p class="notify-details">New user registered.
                      <small class="noti-time">7 days ago</small>
                    </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <div class="notify-icon bg-success-subtle">
                      <i class="mdi mdi-heart text-success"></i>
                    </div>
                    <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                      <small class="noti-time">Carlos Crouch liked</small>
                    </p>
                  </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);"
                  class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                  View All
                </a>

              </div>
            </li>

            <li class="d-flex align-items-center">
              <!-- User Image -->
              <span class="account-user-avatar me-2">
                <img src="{{ asset('dist/assets/images/users/avatar-1.jpg') }}" alt="user-image" width="40"
                  class="rounded-circle">
              </span>

              <!-- Username and Employee Number -->
              <span class="me-2">
                <h5 class="my-0 fw-normal">Thomson</h5>
                <small class="text-muted">Employee #12345</small>
              </span>
            </li>

          </ul>
        </div>
      </div>
      <!-- ========== Topbar End ========== -->


      <!-- ========== Left Sidebar Start ========== -->
      <div class="leftside-menu">

        @include('layout._sidebar')
      </div>
      <!-- ========== Left Sidebar End ========== -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page">
        <div class="content mt-3">

          @yield('content')

        </div>
        <!-- container -->



      </div>
      <!-- content -->

      @include('layout._footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('layout._scripts')

  </body>

</html>
