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
              <h4 class="header-title mb-3">Update Fakultas</h4>
              {{-- <p class="sub-header">Gunakan tombol "Update Data" untuk merubah data fakultas.</p> --}}
              @foreach ($data as $d)
                <form id="update-form-{{ $d->id }}" action="/faculty/update_data/{{ $d->id }}" method="POST">
                  @csrf
                  <div class="mb-2">
                    <label for="faculty" class="form-label">Nama Fakultas</label>
                    <input type="text" class="form-control" value="{{ $d->faculty_name }}" name="faculty_name">
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
