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
              <form id="add-form" action="/study_program/add_data/" method="POST">
                @csrf
                <div class="mb-2">
                  <label class="form-label">Nama Fakultas</label>
                  <select class="form-control" required name="faculty_id">
                    @foreach ($faculty_data as $d)
                      <option value="{{ $d->id }}">{{ $d->faculty_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-2">
                  <label class="form-label">Program Studi</label>
                  <input type="text" class="form-control" required name="studyprogram_name">
                </div>
                <div class="mb-2">
                  <label class="form-label">Jenjang</label>
                  <select class="form-control" required name="level">
                    <option selected value="1">S1</option>
                    <option value="2">S2</option>
                    <option value="3">S3</option>
                    <option value="4">D3</option>
                    <option value="5">D4</option>
                  </select>
                </div>
                <div class="mb-2">
                  <label class="form-label">Status Akreditasi</label>
                  <input type="text" class="form-control" required name="accreditation_status">
                </div>
                <div class="mb-2">
                  <label class="form-label">Akreditasi Nasional</label>
                  <input type="text" class="form-control" required name="national_accreditation">
                </div>
                <div class="mb-2">
                  <label class="form-label">Grade Akreditasi Nasional</label>
                  <input type="number" class="form-control" required name="national_accrediation_grade">
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Akreditasi Nasional</label>
                  <input type="date" class="form-control" required name="date_national_accreditation">
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
                  <input type="date" class="form-control" required name="expired_national_accreditation">
                </div>
                <div class="mb-2">
                  <label class="form-label">Akreditasi Internasional</label>
                  <input type="text" class="form-control" required name="international_accreditaton">
                </div>
                <div class="mb-2">
                  <label class="form-label">Grade Akreditasi Internasional</label>
                  <input type="number" class="form-control" required name="international_accrediation_grade">
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Akreditasi Internasional</label>
                  <input type="date" class="form-control" required name="date_international_accreditation">
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
                  <input type="date" class="form-control" required name="expired_international_accreditation">
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
                      <h5 class="modal-title" id="confirm-add-label">Konfirmasi Tambah Data
                        Program Studi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apa Anda yakin akan menambahkan data program studi?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                      <button type="button" class="btn btn-warning"
                        onclick="document.getElementById('add-form').submit();">Konfirmasi</button>
                    </div>
                  </div>
                </div>
              </div>

              {{-- <form id="add-form" action="/faculty/add_data/" method="POST">
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
              </div> --}}

            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection
