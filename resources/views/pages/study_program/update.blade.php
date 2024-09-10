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
              <h4 class="header-title mb-3">Update Program Studi</h4>
              {{-- <p class="sub-header">Gunakan tombol "Update Data" untuk merubah data fakultas.</p> --}}
              @foreach ($data as $d)
                <form id="update-form-{{ $d->id }}" action="/study_program/update_data/{{ $d->id }}"
                  method="POST">
                  @csrf
                  <div class="mb-2">
                    <label class="form-label">Nama Fakultas</label>
                    <input type="text" class="form-control" disabled value="{{ $d->faculty_name }}"
                      name="faculty_name">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Program Studi</label>
                    <input type="text" class="form-control" required value="{{ $d->studyprogram_name }}"
                      name="studyprogram_name">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Jenjang</label>
                    <select class="form-control" required name="level">
                      <option {{ $d->level == 1 ? 'selected' : '' }} value="1">S1</option>
                      <option {{ $d->level == 2 ? 'selected' : '' }} value="2">S2</option>
                      <option {{ $d->level == 3 ? 'selected' : '' }} value="3">S3</option>
                      <option {{ $d->level == 4 ? 'selected' : '' }} value="4">D3</option>
                      <option {{ $d->level == 5 ? 'selected' : '' }} value="5">D4</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Status Akreditasi</label>
                    <input type="text" class="form-control" required value="{{ $d->accreditation_status }}"
                      name="accreditation_status">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Akreditasi Nasional</label>
                    <input type="text" class="form-control" required value="{{ $d->national_accreditation }}"
                      name="national_accreditation">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Grade Akreditasi Nasional</label>
                    <input type="number" class="form-control" required value="{{ $d->national_accrediation_grade }}"
                      name="national_accrediation_grade">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Tanggal Akreditasi Nasional</label>
                    <input type="date" class="form-control" required
                      value="{{ date('Y-m-d', strtotime($d->date_national_accreditation)) }}"
                      name="date_national_accreditation">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
                    <input type="date" class="form-control" required
                      value="{{ date('Y-m-d', strtotime($d->expired_national_accreditation)) }}"
                      name="expired_national_accreditation">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Akreditasi Internasional</label>
                    <input type="text" class="form-control" required value="{{ $d->international_accreditaton }}"
                      name="international_accreditaton">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Grade Akreditasi Internasional</label>
                    <input type="number" class="form-control" required
                      value="{{ $d->international_accrediation_grade }}" name="international_accrediation_grade">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Tanggal Akreditasi Internasional</label>
                    <input type="date" class="form-control" required
                      value="{{ date('Y-m-d', strtotime($d->date_international_accreditation)) }}"
                      name="date_international_accreditation">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
                    <input type="date" class="form-control" required
                      value="{{ date('Y-m-d', strtotime($d->expired_international_accreditation)) }}"
                      name="expired_international_accreditation">
                  </div>
                  <div class="mb-2 form-check">
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <!-- Trigger Modal Button -->
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#confirm-update-{{ $d->id }}">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>

                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirm-update-{{ $d->id }}" tabindex="-1"
                  aria-labelledby="confirm-update-label-{{ $d->id }}" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="confirm-update-label-{{ $d->id }}">Konfirmasi Update Data
                          Fakultas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Apa Anda yakin akan mengupdate data "{{ $d->faculty_name }}"?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-warning"
                          onclick="document.getElementById('update-form-{{ $d->id }}').submit();">Konfirmasi</button>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <!-- end col -->

    </div>
  </div>
@endsection
