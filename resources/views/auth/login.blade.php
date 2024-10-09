<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SPMI Dashboard" name="description" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('dist/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('dist/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  </head>

  <body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-4 col-lg-4">
            @if (@session('status'))
              <div class="alert alert-danger" role="alert">
                Login Gagal!
              </div>
            @endif
            <div class="card overflow-hidden">
              <div class="row g-0">
                <div class="d-flex flex-column h-100">
                  {{-- <div class="auth-brand p-4">
                      <a href="index.html" class="logo-light">
                        <img src="{{ asset('dist/assets/images/logo.png') }}" alt="logo" height="22">
                      </a>
                      <a href="index.html" class="logo-dark">
                        <img src="{{ asset('dist/assets/images/logo-dark.png') }}" alt="dark logo" height="22">
                      </a>
                    </div> --}}
                  <div class="p-4 my-auto">
                    <h4 class="fs-20">Sign In</h4>
                    <p class="text-muted mb-3">Silahkan login menggunakan akun SSO anda.
                    </p>

                    <!-- form -->
                    <form action="/login" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" required="" placeholder="Username"
                          name="username">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" id="password" placeholder="Password"
                          name="password">
                      </div>
                      <div class="mb-0 text-start">
                        <button class="btn btn-soft-primary w-100" type="submit"><i
                            class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log
                            In</span> </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <footer class="footer footer-alt fw-medium">
      <span class="text-dark">
        <script>
          document.write(new Date().getFullYear())
        </script> © Velonic - Theme by Techzaa
      </span>
    </footer> --}}

    <script src="{{ asset('dist/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/app.min.js') }}"></script>

  </body>

</html>
