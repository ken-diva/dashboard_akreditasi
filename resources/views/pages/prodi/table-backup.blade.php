@extends('layout.base')
@section('content')
  {{-- notifikasi --}}
  @if (session('update_success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var modalId = '#update_success-modal';
        var myModal = new bootstrap.Modal(document.querySelector(modalId));
        myModal.show();
      });
    </script>

    <!-- Info Alert Modal -->
    <div id="update_success-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body p-4">
            <div class="text-center">
              <i class="ri-information-line h1 text-info"></i>
              <h4 class="mt-2">Informasi</h4>
              <img src="{{ asset('dist/assets/images/img-success.png') }}" alt="" class="w-50 mb-2">
              <h4><b>Berhasil Memperbaharui Data</b></h4>
              <p class="mt-3">Data baru telah berhasil diperbaharui. Terima kasih telah memperbarui informasi
                dengan tepat.
              </p>
              <button type="button" class="btn btn-danger mt-2 w-100" data-bs-dismiss="modal">Mengerti</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  @if (session('update_failed'))
    <div class="row">
      <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('update_failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif
  @if (session('delete_success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var modalId = '#delete_success-modal';
        var myModal = new bootstrap.Modal(document.querySelector(modalId));
        myModal.show();
      });
    </script>

    <!-- Info Alert Modal -->
    <div id="delete_success-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body p-4">
            <div class="text-center">
              <i class="ri-information-line h1 text-info"></i>
              <h4 class="mt-2">Informasi</h4>
              <img src="{{ asset('dist/assets/images/img-success.png') }}" alt="" class="w-50 mb-2">
              <h4><b>Berhasil Menghapus Data</b></h4>
              <p class="mt-3">Data baru telah berhasil dihapus dari sistem. Terima kasih telah memperbarui informasi
                dengan tepat.
              </p>
              <button type="button" class="btn btn-danger mt-2 w-100" data-bs-dismiss="modal">Mengerti</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  @if (session('delete_failed'))
    <div class="row">
      <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('delete_failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif
  @if (session('add_success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var modalId = '#add_success-modal';
        var myModal = new bootstrap.Modal(document.querySelector(modalId));
        myModal.show();
      });
    </script>

    <!-- Info Alert Modal -->
    <div id="add_success-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body p-4">
            <div class="text-center">
              <i class="ri-information-line h1 text-info"></i>
              <h4 class="mt-2">Informasi</h4>
              <img src="{{ asset('dist/assets/images/img-success.png') }}" alt="" class="w-50 mb-2">
              <h4><b>Berhasil Menambah Data</b></h4>
              <p class="mt-3">Data baru telah berhasil ditambahkan ke sistem. Terima kasih telah memperbarui informasi
                dengan tepat.
              </p>
              <button type="button" class="btn btn-danger mt-2 w-100" data-bs-dismiss="modal">Mengerti</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  @if (session('add_failed'))
    <div class="row">
      <div class="col-12">

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('add_failed') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif
  {{-- end notifikasi --}}

  {{-- add import export --}}
  <div class="rata-kanan mb-2">
    <div class="pl-3">
      <button type="button" class="btn btn-light btn-sm text-danger">
        <i class="ri-"></i> <span>Import Data</span>
      </button>
      <button type="button" class="btn btn-outline-danger btn-sm">
        <i class="ri-"></i> <span>Export Data</span>
      </button>
      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#add-data-modal">
        <i class="ri-add-line"></i> <span>Tambah Data</span>
      </button>
    </div>
  </div>

  <!-- Modal add data -->
  <div id="add-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-data-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="add-data-modalLabel">Tambah Data Fakultas</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
              <div class="mb-3 position-relative" id="date_national_accreditation">
                <label class="form-label">Tanggal Akreditasi Nasional</label>
                <input type="text" class="form-control" placeholder="Pilih Tanggal" data-provide="datepicker"
                  data-date-autoclose="true" data-date-container="#date_national_accreditation"
                  name="date_national_accreditation">
              </div>
            </div>
            <div class="mb-2">
              <div class="mb-3 position-relative" id="expired_national_accreditation">
                <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
                <input type="text" class="form-control" placeholder="Pilih Tanggal" data-provide="datepicker"
                  data-date-autoclose="true" data-date-container="#expired_national_accreditation"
                  name="expired_national_accreditation">
              </div>
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
              <div class="mb-3 position-relative" id="date_international_accreditation">
                <label class="form-label">Tanggal Akreditasi Internasional</label>
                <input type="text" class="form-control" placeholder="Pilih Tanggal" data-provide="datepicker"
                  data-date-autoclose="true" data-date-container="#date_international_accreditation"
                  name="date_international_accreditation">
              </div>
            </div>
            <div class="mb-2">
              <div class="mb-3 position-relative" id="expired_international_accreditation">
                <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
                <input type="text" class="form-control" placeholder="Pilih Tanggal" data-provide="datepicker"
                  data-date-autoclose="true" data-date-container="#expired_international_accreditation"
                  name="expired_international_accreditation">
              </div>
            </div>
            <div class="mt-5">
              <div class="d-flex">
                <button type="button" data-bs-dismiss="modal" class="btn btn-outline-danger w-100 me-2"><i
                    class="ri-close-line "></i><span class="px-1">Batalkan</span></button>
                <button type="submit" class="btn btn-danger w-100"><i class="ri-check-line "></i><span
                    class="px-1">Tambahkan
                    Data</span></button>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal detail data -->
  <div id="detail-data-modal" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="detail-data-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="detail-data-modalLabel">Detail Data Fakultas</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <label class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control" id="faculty_name-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Program Studi</label>
            <input type="text" class="form-control" id="studyprogram_name-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Jenjang</label>
            <input type="text" class="form-control" id="level-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Status Akreditasi</label>
            <input type="text" class="form-control" id="accreditation_status-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Akreditasi Nasional</label>
            <input type="text" class="form-control" id="national_accreditation-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Grade Akreditasi Nasional</label>
            <input type="text" class="form-control" id="national_accrediation_grade-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Tanggal Akreditasi Nasional</label>
            <input type="text" class="form-control" id="date_national_accreditation-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
            <input type="text" class="form-control" id="expired_national_accreditation-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Akreditasi Internasional</label>
            <input type="text" class="form-control" id="international_accreditaton-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Grade Akreditasi Internasional</label>
            <input type="text" class="form-control" id="international_accrediation_grade-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Tanggal Akreditasi Internasional</label>
            <input type="text" class="form-control" id="date_international_accreditation-modal" disabled>
          </div>
          <div class="mb-2">
            <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
            <input type="text" class="form-control" id="expired_international_accreditation-modal" disabled>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal"
            data-bs-target="#edit-data-modal" data-bs-toggle="modal" data-id="edit-btn" id="edit-btn">Edit
            Data</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal edit data -->
  <div id="edit-data-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit-data-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="edit-form" action="#" method="POST">
          @csrf
          <div class="modal-header">
            <h4 class="modal-title" id="edit-data-modalLabel">Edit Data Fakultas</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              <label class="form-label">Nama Fakultas</label>
              {{-- <input type="text" class="form-control" id="faculty_name-modal2"> --}}
              <select class="form-control" name="faculty_id" id="faculty_name-modal2">

              </select>
            </div>
            <div class="mb-2">
              <label class="form-label">Program Studi</label>
              <input type="text" class="form-control" id="studyprogram_name-modal2" required
                name="studyprogram_name">
            </div>
            <div class="mb-2">
              <label class="form-label">Jenjang</label>
              <input type="text" class="form-control" id="level-modal2">
            </div>
            <div class="mb-2">
              <label class="form-label">Status Akreditasi</label>
              <input type="text" class="form-control" id="accreditation_status-modal2" required
                name="accreditation_status">
            </div>
            <div class="mb-2">
              <label class="form-label">Akreditasi Nasional</label>
              <input type="text" class="form-control" id="national_accreditation-modal2" required
                name="national_accreditation">
            </div>
            <div class="mb-2">
              <label class="form-label">Grade Akreditasi Nasional</label>
              <input type="text" class="form-control" id="national_accrediation_grade-modal2" required
                name="national_accrediation_grade">
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Akreditasi Nasional</label>
              <input type="text" class="form-control" id="date_national_accreditation-modal2">
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
              <input type="text" class="form-control" id="expired_national_accreditation-modal2">
            </div>
            <div class="mb-2">
              <label class="form-label">Akreditasi Internasional</label>
              <input type="text" class="form-control" id="international_accreditaton-modal2" required
                name="international_accreditaton">
            </div>
            <div class="mb-2">
              <label class="form-label">Grade Akreditasi Internasional</label>
              <input type="text" class="form-control" id="international_accrediation_grade-modal2" required
                name="international_accrediation_grade">
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Akreditasi Internasional</label>
              <input type="text" class="form-control" id="date_international_accreditation-modal2">
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
              <input type="text" class="form-control" id="expired_international_accreditation-modal2">
            </div>
            <hr>
            <div class="mt-2">
              <div class="d-flex">
                <button type="button" data-bs-dismiss="modal" class="btn btn-outline-danger w-100 me-2"><i
                    class="ri-close-line "></i><span class="px-1">Batalkan</span></button>
                <button type="submit" class="btn btn-danger w-100"><i class="ri-check-line "></i><span
                    class="px-1">Update
                    Data</span></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  {{-- tabel --}}
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="header-title">Data Program Studi</h4>
          <p class="text-muted mb-0">
            DataTables has most features enabled by default, so all you need to do to use it
            with your own tables is to call the construction
            function:
            <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on
            any table. Events (focus, blur, action etc) can be assigned to individual
            cells, columns, rows or all cells.
          </p>
        </div>
        <div class="card-body">
          <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
            <thead>
              <tr>
                <th>No.</th>
                <th>Fakultas</th>
                <th>Program Studi</th>
                <th>Jenjang</th>
                <th>Akreditasi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($data as $d)
                <tr>
                  <td width="5%">{{ $loop->iteration }}.</td>
                  <td>{{ $d->faculty_name }}</td>
                  <td>{{ $d->studyprogram_name }}</td>
                  <td>
                    @if ($d->level == 1)
                      S1
                    @elseif ($d->level == 2)
                      S2
                    @elseif ($d->level == 3)
                      S3
                    @elseif ($d->level == 4)
                      D3
                    @else
                      D4
                    @endif
                  </td>
                  <td width="10%">
                    {{-- <a href="/study_program/detail/{{ $d->id }}">
                      <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="Detail">
                        <i class="mdi mdi-eye"></i>
                      </button>
                    </a> --}}
                    <button type="button" class="btn btn-warning btn-sm" data-id="{{ $d->id }}"
                      data-bs-toggle="modal" data-bs-target="#detail-data-modal">
                      <i class="mdi mdi-eye"></i>
                    </button>

                    <!-- Danger header modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                      data-bs-target="#confirm-delete-{{ $d->id }}"><i class="mdi mdi-trash-can"></i></button>

                    <!-- Danger Header Modal -->
                    <div id="confirm-delete-{{ $d->id }}" class="modal fade" tabindex="-1" role="dialog"
                      aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header modal-colored-header bg-danger">
                            <h4 class="modal-title" id="danger-header-modalLabel">Konfirmasi Hapus</h4>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apa Anda yakin akan mengapus data "{{ $d->studyprogram_name }}"?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
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

        </div>
      </div>
    </div>
  </div>

  {{-- script detail --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Event listener for when the modal is triggered
      $('#detail-data-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var itemId = button.data('id'); // Extract item ID from data-* attributes

        // Make AJAX request to fetch item details
        $.ajax({
          url: '/study_program/detail/' + itemId, // Replace with your route to get item details
          method: 'GET',
          success: function(response) {
            // Populate modal with data
            $('#faculty_name-modal').val(response.faculty_name);
            $('#studyprogram_name-modal').val(response.studyprogram_name);
            $('#level-modal').val(response.level);
            $('#accreditation_status-modal').val(response.accreditation_status);
            $('#national_accreditation-modal').val(response.national_accreditation);
            $('#national_accrediation_grade-modal').val(response.national_accrediation_grade);
            $('#date_national_accreditation-modal').val(response.date_national_accreditation);
            $('#expired_national_accreditation-modal').val(response.expired_national_accreditation);
            $('#international_accreditaton-modal').val(response.international_accreditaton);
            $('#international_accrediation_grade-modal').val(response.international_accrediation_grade);
            $('#date_international_accreditation-modal').val(response.date_international_accreditation);
            $('#expired_international_accreditation-modal').val(response
              .expired_international_accreditation);
            $('#edit-btn').attr('data-id', itemId);
          },
          error: function() {
            alert('Failed to fetch item details');
          }
        });
      });
    });
  </script>

  {{-- script edit --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Event listener for when the modal is triggered
      $('#edit-data-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var itemId = button.data('id'); // Extract item ID from data-* attributes

        console.log(button);

        // Make AJAX request to fetch item details
        $.ajax({
          url: '/study_program/detail_edit/' + itemId, // Replace with your route to get item details
          method: 'GET',
          success: function(response) {

            // Kosongkan select options sebelum mengisinya
            $('#faculty_name-modal2').empty();

            // Iterasi response.options untuk menambahkan setiap option ke dalam select
            $.each(response.options, function(key, value) {
              // Tentukan apakah option ini harus dipilih
              var selected = value.id == response.selected_option_id ? 'selected' : '';

              // Tambahkan setiap option ke dalam select
              $('#faculty_name-modal2').append('<option value="' + value.id + '" ' + selected + '>' +
                value.faculty_name + '</option>');
            });

            // Tampilkan modal dan atur action pada form
            $('#edit-data-modal').modal('show');
            $('#edit-form').attr('action', "/study_program/update_data/" + itemId);
          },
          error: function() {
            alert('Failed to fetch item details');
          }
        });
      });
    });
  </script>
@endsection
