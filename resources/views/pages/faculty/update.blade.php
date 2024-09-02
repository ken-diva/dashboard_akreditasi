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
              <p class="sub-header">
                Gunakan tombol "Update Data" untuk merubah data fakultas.
              </p>
              @foreach ($data as $d)
                <form action="/faculty/update_data/{{ $d->id }}" method="POST">
                  @csrf
                  <div class="mb-2">
                    <label for="faculty" class="form-label">Nama Fakultas</label>
                    <input type="text" class="form-control" value="{{ $d->faculty_name }}" name="faculty_name">
                  </div>
                  <div class="mb-2 form-check">
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                  </div>
                </form>
              @endforeach
            </div>
          </div>
        </div>
        <!-- end col -->

      </div>
    </div>
  </div>
@endsection
