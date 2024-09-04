@extends('layout.base')
@section('content')
  <div class="px-3">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      @include('layout._breadcrumb')
      <!-- end page title -->

      {{-- <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Tambah Data Fakultas</h4>
              <form action="/faculty/add_data/" method="POST">
                @csrf
                <div class="mb-2">
                  <label for="faculty" class="form-label">Nama Fakultas</label>
                  <input type="text" class="form-control" name="faculty_name">
                </div>
                <div class="mb-2 form-check">
                </div>
                <div class="d-flex justify-content-between">
                  <div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> --}}
      <!-- end col -->

      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title mb-3">Tambah Data Fakultas</h4>
              <form id="add-form" action="/faculty/add_data/" method="POST">
                @csrf
                <div class="mb-2">
                  <label for="faculty" class="form-label">Nama Fakultas</label>
                  <input type="text" class="form-control" name="faculty_name">
                </div>
                <div class="mb-2 form-check">
                </div>
                <div class="d-flex justify-content-between">
                  <div>
                    <!-- Trigger Modal Button -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#confirm-add">
                      Submit
                    </button>
                  </div>
                </div>
              </form>

              <!-- Confirmation Modal -->
              <div class="modal fade" id="confirm-add" tabindex="-1" aria-labelledby="confirm-add-label"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="confirm-add-label">Konfirmasi Tambah Fakultas</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apa Anda yakin akan menambahkan data ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-warning"
                        onclick="document.getElementById('add-form').submit();">Konfirmasi</button>
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
@endsection
