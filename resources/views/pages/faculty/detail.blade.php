@extends('layout.base')
@section('content')
  <div class="px-3">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      @include('layout._breadcrumb')
      <!-- end page title -->

      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Detail Data Fakultas</h4>
              <p class="sub-header">
                Gunakan tombol "Update Data" untuk merubah data fakultas.
              </p>
              @foreach ($data as $d)
                <div class="mb-2">
                  <label for="faculty" class="form-label">Nama Fakultas</label>
                  <input type="text" class="form-control" value="{{ $d->faculty_name }}" disabled>
                </div>
                <div class="mb-2">
                  <label for="faculty" class="form-label">Created At</label>
                  <input type="text" class="form-control" value="{{ $d->created_at }}" disabled>
                </div>
                <div class="mb-2 form-check">
                </div>
                <div class="d-flex justify-content-between">
                  <div>
                    <a href="/faculty/update/{{ $d->id }}">
                      <button class="btn btn-warning">Update Data</button>
                    </a>
                  </div>
                  <div>
                    <a href="/faculty/">
                      <button class="btn btn-primary">Kembali</button>
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- end col -->

      </div>
    </div>
  </div>
@endsection
