@extends('layout.base')
@section('content')
  <div class="px-3">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      @include('layout._breadcrumb')
      <!-- end page title -->

      <div class="row">
        <div class="col-md-6 col-xl-3">
          <a href="/faculty">
            <div class="card">
              <div class="card-body">
                <div class="mb-4">
                  <h5 class="card-title mb-0">Jumlah Fakultas</h5>
                </div>
                <div class="col-8">
                  <h2 class="d-flex align-items-center mb-0">
                    7
                  </h2>
                </div>
              </div>
            </div><!-- end card-->
          </a>
        </div> <!-- end col-->
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="mb-4">
                <h5 class="card-title mb-0">Jumlah Program Studi</h5>
              </div>
              <div class="col-8">
                <h2 class="d-flex align-items-center mb-0">
                  13
                </h2>
              </div>
            </div>
          </div><!-- end card-->
        </div> <!-- end col-->
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="mb-4">
                <h5 class="card-title mb-0">Jumlah Mahasiswa</h5>
              </div>
              <div class="col-8">
                <h2 class="d-flex align-items-center mb-0">
                  372
                </h2>
              </div>
            </div>
          </div><!-- end card-->
        </div> <!-- end col-->
      </div>


    </div> <!-- container -->

  </div> <!-- content -->
@endsection
