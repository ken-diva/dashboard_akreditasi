<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

  <head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('dist/assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('dist/assets/js/config.js') }}"></script>
  </head>

  <body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-4 col-md-5">
          <div class="card">
            <div class="card-body p-4">

              <div class="text-center w-75 mx-auto auth-logo mb-4">
                <a href="/" class="logo-dark">
                  <span><img src="{{ asset('dist/assets/images/logo-dark.png') }}" alt="" height="26"></span>
                </a>
              </div>

              <form action="#">
                @csrf
                <div class="form-group mb-3">
                  <label class="form-label" for="emailaddress">Email address</label>
                  <input class="form-control" type="email" name="username" required placeholder="Username">
                </div>

                <div class="form-group mb-3">
                  <a href="pages-recoverpw.html" class="text-muted float-end"><small></small></a>
                  <label class="form-label" for="password">Password</label>
                  <input class="form-control" type="password" name="password" required placeholder="Password">
                </div>

                <div class="form-group mb-0 text-center">
                  <button class="btn btn-primary w-100" type="submit"> Log In </button>
                </div>

              </form>
            </div> <!-- end card-body -->
          </div>
          <!-- end card -->

          <div class="row mt-3">
            <div class="col-12 text-center">
              <p class="text-white-50"> <a href="pages-register.html" class="text-white-50 ms-1">Silahkan Sign In
                  menggunakan akun SSO Anda.</a></p>
            </div> <!-- end col -->
          </div>
          <!-- end row -->

        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </div>

    <!-- App js -->
    <script src="{{ asset('dist/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/app.js') }}"></script>

  </body>

</html>
