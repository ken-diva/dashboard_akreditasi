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
        <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">

            <div class="row">
              <div class="mt-3">
                {{-- start --}}
                <div class="col-xxl-12 col-sm-3">
                  <div class="card widget-flat">
                    <div class="card-body">
                      <h4>Dashboard Pemutu</h4>
                      <span>Lihat data analitik akreditasi</span>
                      <div class="col-xxl-12 col-sm-3">
                        <div class="custom-card1">
                          <div class="text-kiri-kanan">
                            <h1>Telkom University</h1>
                            <span>
                              <button class="btn btn-primary rounded-pill btn-sm">Kode PT : 041057</button>
                            </span>
                          </div>
                          <div class="mb-1">
                            <span>LLDIKTI IV - Akademik</span>
                          </div>
                          <div>
                            <span>Kec. Dayeuhkolot, Prov. Jawa Barat</span>
                          </div>
                        </div>
                      </div>
                      {{-- <div class="col-xxl-6 col-sm-3">
                        <div class="custom-card2">
                          <div class="text-kiri-kanan">
                            <h1>Telkom University</h1>
                            <span>
                              <button class="btn btn-primary rounded-pill btn-sm">Kode PT : 041057</button>
                            </span>
                          </div>
                          <div class="mb-1">
                            <span>LLDIKTI IV - Akademik</span>
                          </div>
                          <div>
                            <span>Kec. Dayeuhkolot, Prov. Jawa Barat</span>
                          </div>
                        </div>
                      </div> --}}

                      <div class="row">
                        <!-- First Box -->
                        <div class="col-xxl-6 col-sm-3">
                          <div class="custom-card2">
                            <div class="text-kiri-kanan">
                              <h1>Telkom University</h1>
                              <span>
                                <button class="btn btn-primary rounded-pill btn-sm">Kode PT : 041057</button>
                              </span>
                            </div>
                            <div class="mb-1">
                              <span>LLDIKTI IV - Akademik</span>
                            </div>
                            <div>
                              <span>Kec. Dayeuhkolot, Prov. Jawa Barat</span>
                            </div>
                          </div>
                        </div>

                        <!-- Second Box -->
                        <div class="col-xxl-6 col-sm-3">
                          <div class="custom-card2">
                            <div class="text-kiri-kanan">
                              <h1>Another University</h1>
                              <span>
                                <button class="btn btn-primary rounded-pill btn-sm">Kode PT : 041058</button>
                              </span>
                            </div>
                            <div class="mb-1">
                              <span>LLDIKTI IV - Akademik</span>
                            </div>
                            <div>
                              <span>Kec. Bandung, Prov. Jawa Barat</span>
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

          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="card-widgets">
                    <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                    <a data-bs-toggle="collapse" href="#weeklysales-collapse" role="button" aria-expanded="false"
                      aria-controls="weeklysales-collapse"><i class="ri-subtract-line"></i></a>
                    <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                  </div>
                  <h5 class="header-title mb-0">Weekly Sales Report</h5>

                  <div id="weeklysales-collapse" class="collapse pt-3 show">
                    <div dir="ltr">
                      <div id="revenue-chart" class="apex-charts" data-colors="#3bc0c3,#1a2942,#d1d7d973"></div>
                    </div>

                    <div class="row text-center">
                      <div class="col">
                        <p class="text-muted mt-3">Current Week</p>
                        <h3 class=" mb-0">
                          <span>$506.54</span>
                        </h3>
                      </div>
                      <div class="col">
                        <p class="text-muted mt-3">Previous Week</p>
                        <h3 class=" mb-0">
                          <span>$305.25 </span>
                        </h3>
                      </div>
                      <div class="col">
                        <p class="text-muted mt-3">Conversation</p>
                        <h3 class=" mb-0">
                          <span>3.27%</span>
                        </h3>
                      </div>
                      <div class="col">
                        <p class="text-muted mt-3">Customers</p>
                        <h3 class=" mb-0">
                          <span>3k</span>
                        </h3>
                      </div>
                    </div>
                  </div>

                </div> <!-- end card-body-->
              </div> <!-- end card-->
            </div> <!-- end col-->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-widgets">
                    <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                    <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button" aria-expanded="false"
                      aria-controls="yearly-sales-collapse"><i class="ri-subtract-line"></i></a>
                    <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                  </div>
                  <h5 class="header-title mb-0">Yearly Sales Report</h5>

                  <div id="yearly-sales-collapse" class="collapse pt-3 show">
                    <div dir="ltr">
                      <div id="yearly-sales-chart" class="apex-charts" data-colors="#3bc0c3,#1a2942,#d1d7d973">
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col">
                        <p class="text-muted mt-3 mb-2">Quarter 1</p>
                        <h4 class="mb-0">$56.2k</h4>
                      </div>
                      <div class="col">
                        <p class="text-muted mt-3 mb-2">Quarter 2</p>
                        <h4 class="mb-0">$42.5k</h4>
                      </div>
                      <div class="col">
                        <p class="text-muted mt-3 mb-2">All Time</p>
                        <h4 class="mb-0">$102.03k</h4>
                      </div>
                    </div>
                  </div>

                </div> <!-- end card-body-->
              </div> <!-- end card-->

              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                      <h4 class="fs-22 fw-semibold">69.25%</h4>
                      <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> US Dollar Share</p>
                    </div>
                    <div class="flex-shrink-0">
                      <div id="us-share-chart" class="apex-charts" dir="ltr"></div>
                    </div>
                  </div>
                </div><!-- end card body -->
              </div> <!-- end card-->
            </div> <!-- end col-->

          </div>
          <!-- end row -->

          <div class="row">
            <div class="col-xl-4">
              <!-- Chat-->
              <div class="card">
                <div class="card-body p-0">
                  <div class="p-3">
                    <div class="card-widgets">
                      <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                      <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                        aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                          class="ri-subtract-line"></i></a>
                      <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                    </div>
                    <h5 class="header-title mb-0">Chat</h5>
                  </div>

                  <div id="yearly-sales-collapse" class="collapse show">
                    <div class="chat-conversation mt-2">
                      <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                        <ul class="conversation-list">
                          <li class="clearfix">
                            <div class="chat-avatar">
                              <img src="assets/images/users/avatar-5.jpg" alt="male">
                              <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                              <div class="ctext-wrap">
                                <i>Geneva</i>
                                <p>
                                  Hello!
                                </p>
                              </div>
                            </div>
                          </li>
                          <li class="clearfix odd">
                            <div class="chat-avatar">
                              <img src="assets/images/users/avatar-1.jpg" alt="Female">
                              <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                              <div class="ctext-wrap">
                                <i>Thomson</i>
                                <p>
                                  Hi, How are you? What about our next meeting?
                                </p>
                              </div>
                            </div>
                          </li>
                          <li class="clearfix">
                            <div class="chat-avatar">
                              <img src="assets/images/users/avatar-5.jpg" alt="male">
                              <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                              <div class="ctext-wrap">
                                <i>Geneva</i>
                                <p>
                                  Yeah everything is fine
                                </p>
                              </div>
                            </div>
                          </li>
                          <li class="clearfix odd">
                            <div class="chat-avatar">
                              <img src="assets/images/users/avatar-1.jpg" alt="male">
                              <i>10:02</i>
                            </div>
                            <div class="conversation-text">
                              <div class="ctext-wrap">
                                <i>Thomson</i>
                                <p>
                                  Wow that's great
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body pt-0">
                        <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                          <div class="row align-items-start">
                            <div class="col">
                              <input type="text" class="form-control chat-input" placeholder="Enter your text"
                                required>
                              <div class="invalid-feedback">
                                Please enter your messsage
                              </div>
                            </div>
                            <div class="col-auto d-grid">
                              <button type="submit"
                                class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>

                    </div> <!-- end .chat-conversation-->
                  </div>
                </div>

              </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-8">
              <!-- Todo-->
              <div class="card">
                <div class="card-body p-0">
                  <div class="p-3">
                    <div class="card-widgets">
                      <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                      <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                        aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                          class="ri-subtract-line"></i></a>
                      <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                    </div>
                    <h5 class="header-title mb-0">Projects</h5>
                  </div>

                  <div id="yearly-sales-collapse" class="collapse show">

                    <div class="table-responsive">
                      <table class="table table-nowrap table-hover mb-0">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Start Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Assign</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Velonic Admin v1</td>
                            <td>01/01/2015</td>
                            <td>26/04/2015</td>
                            <td><span class="badge bg-info-subtle text-info">Released</span></td>
                            <td>Techzaa Studio</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Velonic Frontend v1</td>
                            <td>01/01/2015</td>
                            <td>26/04/2015</td>
                            <td><span class="badge bg-info-subtle text-info">Released</span></td>
                            <td>Techzaa Studio</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Velonic Admin v1.1</td>
                            <td>01/05/2015</td>
                            <td>10/05/2015</td>
                            <td><span class="badge bg-pink-subtle text-pink">Pending</span></td>
                            <td>Techzaa Studio</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Velonic Frontend v1.1</td>
                            <td>01/01/2015</td>
                            <td>31/05/2015</td>
                            <td><span class="badge bg-purple-subtle text-purple">Work in Progress</span></td>
                            <td>Techzaa Studio</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Velonic Admin v1.3</td>
                            <td>01/01/2015</td>
                            <td>31/05/2015</td>
                            <td><span class="badge bg-warning-subtle text-warning">Coming soon</span></td>
                            <td>Techzaa Studio</td>
                          </tr>

                          <tr>
                            <td>6</td>
                            <td>Velonic Admin v1.3</td>
                            <td>01/01/2015</td>
                            <td>31/05/2015</td>
                            <td><span class="badge bg-primary-subtle text-primary">Coming soon</span></td>
                            <td>Techzaa Studio</td>
                          </tr>

                          <tr>
                            <td>7</td>
                            <td>Velonic Admin v1.3</td>
                            <td>01/01/2015</td>
                            <td>31/05/2015</td>
                            <td><span class="badge bg-danger-subtle text-danger">Cool</span></td>
                            <td>Techzaa Studio</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> <!-- end card-->
            </div> <!-- end col-->
          </div>
          <!-- end row -->

        </div>
        <!-- container -->

      </div>
      <!-- content -->

      <!-- Footer Start -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center">
              <script>
                document.write(new Date().getFullYear())
              </script> © Velonic - Theme by <b>Techzaa</b>
            </div>
          </div>
        </div>
      </footer>
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
