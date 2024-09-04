@extends('layout.base')
@section('content')
  <div class="px-3">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="py-3 py-lg-4">
        <div class="row">
          <div class="col-lg-5">
            <h4 class="page-title mb-0">{{ $title }}</h4>
          </div>
          <div class="col-lg-5">
            <div class="d-none d-lg-block">
              <ol class="breadcrumb m-0 float-end">
                <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $bread_item }}</a></li>
                <li class="breadcrumb-item active">{{ $bread_item_active }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- end page title -->

      {{-- notifikasi --}}
      @if (session('update_success'))
        <div class="row">
          <div class="col-10">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              {{ session('update_success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      @endif
      @if (session('update_failed'))
        <div class="row">
          <div class="col-10">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('update_failed') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      @endif
      @if (session('delete_success'))
        <div class="row">
          <div class="col-10">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              {{ session('delete_success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      @endif
      @if (session('delete_failed'))
        <div class="row">
          <div class="col-10">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('delete_failed') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      @endif
      @if (session('add_success'))
        <div class="row">
          <div class="col-10">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              {{ session('add_success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      @endif
      @if (session('add_failed'))
        <div class="row">
          <div class="col-10">

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('add_failed') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
      @endif

      <div class="row">
        <div class="col-10">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h4 class="header-title">Basic Data Table</h4>
                  <p class="text-muted font-size-13 mb-4">
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables
                    is
                    to call the construction
                    function:
                    <code>$().DataTable();</code>.
                  </p>
                </div>
                <div>
                  <a href="/study_program/add">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-placement="top"
                      title="Detail">
                      <i class="mdi mdi-plus"></i> Tambah Data
                    </button>
                  </a>
                </div>
              </div>





              <table id="scroll-horizontal-datatable" class="table w-100 nowrap" style="width:100%">
                {{-- <table id="contoh" class="display nowrap" style="width:100%"> --}}
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Fakultas</th>
                    <th>Program Studi</th>
                    <th>Level</th>
                    <th>Akreditasi</th>
                    <th>Akreditasi Nasional</th>
                    <th>Grade Akreditasi Nasional</th>
                    <th>Tanggal Akreditasi Nasional</th>
                    <th>Tanggal Habis Akreditasi Nasional</th>
                    <th>Akreditasi Internasional</th>
                    <th>Grade Akreditasi Internasional</th>
                    <th>Tanggal Akreditasi Internasional</th>
                    <th>Tanggal Habis Akreditasi Internasional</th>
                    <th>#</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($data as $d)
                    <tr>
                      <td width="5%">{{ $loop->iteration }}.</td>
                      <td>{{ $d->faculty_name }}</td>
                      <td>{{ $d->studyprogram_name }}</td>
                      <td>{{ $d->level }}</td>
                      <td>{{ $d->accreditation_status }}</td>
                      <td>{{ $d->national_accreditation }}</td>
                      <td>{{ $d->national_accrediation_grade }}</td>
                      <td>{{ $d->date_national_accreditation }}</td>
                      <td>{{ $d->expired_national_accreditation }}</td>
                      <td>{{ $d->international_accreditaton }}</td>
                      <td>{{ $d->international_accrediation_grade }}</td>
                      <td>{{ $d->date_international_accreditation }}</td>
                      <td>{{ $d->expired_international_accreditation }}</td>
                      <td width="10%">
                        <a href="/study_program/{{ $d->id }}">
                          <button type="button" class="btn btn-warning btn-xs waves-effect waves-light"
                            data-bs-placement="top" title="Detail">
                            <i class="mdi mdi-eye"></i>
                          </button>
                        </a>

                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger btn-xs waves-effect waves-light"
                          data-bs-placement="top" data-bs-toggle="modal"
                          data-bs-target="#confirm-delete-{{ $d->id }}" title="Hapus">
                          <i class="mdi mdi-trash-can"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="confirm-delete-{{ $d->id }}" data-bs-backdrop="static"
                          data-bs-keyboard="false" tabindex="-1"
                          aria-labelledby="confirm-delete-Label-{{ $d->id }}" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="confirm-delete-Label-{{ $d->id }}">Konfirmasi
                                  Hapus
                                  Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apa Anda yakin akan mengapus data "{{ $d->studyprogram_name }}"?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Kembali</button>
                                <a href="/study_program/delete/{{ $d->id }}">
                                  <button type="button" class="btn btn-danger">Konfirmasi</button>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </td>
                    </tr>
                  @endforeach
                </tbody>

              </table>

            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- end row-->

    </div> <!-- container -->

  </div> <!-- content -->
@endsection
