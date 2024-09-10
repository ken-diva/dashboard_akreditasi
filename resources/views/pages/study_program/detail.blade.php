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
              <h4 class="header-title mb-3">Detail Data Program Studi</h4>
              <p class="sub-header">
                Gunakan tombol "Update Data" untuk merubah data Program Studi.
              </p>
              @foreach ($data as $d)
                <div class="mb-2">
                  <label class="form-label">Nama Fakultas</label>
                  <input type="text" class="form-control" value="{{ $d->faculty_name }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Program Studi</label>
                  <input type="text" class="form-control" value="{{ $d->studyprogram_name }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Jenjang</label>
                  @if ($d->level == 1)
                    <input type="text" class="form-control" value="S1" disabled>
                  @elseif ($d->level == 2)
                    <input type="text" class="form-control" value="S2" disabled>
                  @elseif ($d->level == 3)
                    <input type="text" class="form-control" value="S3" disabled>
                  @elseif ($d->level == 4)
                    <input type="text" class="form-control" value="D3" disabled>
                  @else
                    <input type="text" class="form-control" value="D4" disabled>
                  @endif
                </div>
                <div class="mb-2">
                  <label class="form-label">Status Akreditasi</label>
                  <input type="text" class="form-control" value="{{ $d->accreditation_status }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Akreditasi Nasional</label>
                  <input type="text" class="form-control" value="{{ $d->national_accreditation }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Grade Akreditasi Nasional</label>
                  <input type="text" class="form-control" value="{{ $d->national_accrediation_grade }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Akreditasi Nasional</label>
                  <input type="text" class="form-control"
                    value="{{ date('d F Y', strtotime($d->date_national_accreditation)) }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
                  <input type="text" class="form-control"
                    value="{{ date('d F Y', strtotime($d->expired_national_accreditation)) }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Akreditasi Internasional</label>
                  <input type="text" class="form-control" value="{{ $d->international_accreditaton }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Grade Akreditasi Internasional</label>
                  <input type="text" class="form-control" value="{{ $d->international_accrediation_grade }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Akreditasi Internasional</label>
                  <input type="text" class="form-control"
                    value="{{ date('d F Y', strtotime($d->date_international_accreditation)) }}" disabled>
                </div>
                <div class="mb-2">
                  <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
                  <input type="text" class="form-control"
                    value="{{ date('d F Y', strtotime($d->expired_international_accreditation)) }}" disabled>
                </div>
                <div class="mb-2 form-check">
                </div>
                <div class="d-flex justify-content-between">
                  <div>
                    <a href="/study_program/update/{{ $d->id }}">
                      <button class="btn btn-warning">Update Data</button>
                    </a>
                  </div>
                  <div>
                    <a href="/study_program/">
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
