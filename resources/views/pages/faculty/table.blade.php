@extends('layout.base')
@section('content')
  <div class="px-3">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      @include('layout._breadcrumb')

      <div class="d-flex">
        <div class="ms-auto">
          <div class="row">
            <div class="col-12 mb-3">
              <a href="">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-placement="top"
                  title="Detail">
                  <i class="mdi mdi-plus"></i> Tambah Data
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- end page title -->

      {{-- notifikasi --}}
      @if (session('update_success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          {{ session('update_success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('update_failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('update_failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('delete_success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          {{ session('delete_success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('delete_failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('delete_failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title">Basic Data Table</h4>
              <p class="text-muted font-size-13 mb-4">
                DataTables has most features enabled by default, so all you need to do to use it with your own tables is
                to call the construction
                function:
                <code>$().DataTable();</code>.
              </p>

              <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Fakultas</th>
                    <th>Created At</th>
                    <th>Deleted At</th>
                    <th>#</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($data as $d)
                    <tr>
                      <td width="5%">{{ $loop->iteration }}.</td>
                      <td>{{ $d->faculty_name }}</td>
                      <td>{{ $d->created_at }}</td>
                      <td>{{ $d->updated_at }}</td>
                      <td width="10%">
                        <a href="/faculty/{{ $d->id }}">
                          <button type="button" class="btn btn-warning btn-xs waves-effect waves-light"
                            data-bs-placement="top" title="Detail">
                            <i class="mdi mdi-eye"></i>
                          </button>
                        </a>
                        <a href="/faculty/delete/{{ $d->id }}">
                          <button type="button" class="btn btn-danger btn-xs waves-effect waves-light"
                            data-bs-placement="top" title="Hapus">
                            <i class="mdi mdi-trash-can"></i>
                          </button>
                        </a>
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
