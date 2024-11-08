@extends('layout.base')
@section('content')
  {{-- notifikasi --}}
  @if (session('update_success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        let modalId = '#update_success-modal';
        let myModal = new bootstrap.Modal(document.querySelector(modalId));
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
        let modalId = '#delete_success-modal';
        let myModal = new bootstrap.Modal(document.querySelector(modalId));
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
        let modalId = '#add_success-modal';
        let myModal = new bootstrap.Modal(document.querySelector(modalId));
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
          <form id="update-form">
            <div class="mb-2">
              <label class="form-label">Nama Fakultas</label>
              <select class="form-control" name="faculty_id" id="faculty_name-modal" disabled></select>
            </div>
            <div class="mb-2">
              <label class="form-label">Program Studi</label>
              <input type="text" class="form-control" id="studyprogram_name-modal" disabled>
            </div>
            <div class="mb-2">
              <label class="form-label">Jenjang</label>
              <select class="form-control" name="level" id="level-modal" disabled></select>
              {{-- <input type="text" class="form-control" id="level-modal" disabled> --}}
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
              <input type="date" class="form-control" id="date_national_accreditation-modal" disabled>
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Kadaluarsa Akreditasi Nasional</label>
              <input type="date" class="form-control" id="expired_national_accreditation-modal" disabled>
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
              <input type="date" class="form-control" id="date_international_accreditation-modal" disabled>
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Kadaluarsa Akreditasi Internasional</label>
              <input type="date" class="form-control" id="expired_international_accreditation-modal" disabled>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger w-100" id="edit-btn" data-id="edit-data">Edit
            Data</button>
          <button type="submit" class="btn btn-warning w-100" id="update-btn">Update
            Data</button>
        </div>
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
            Note: Data yang ditampilkan masih berupa data dummy.
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
      let itemId = "";
      $('#edit-btn').show();
      $('#update-btn').hide();

      $('#detail-data-modal').on('hide.bs.modal', function() {
        $('#faculty_name-modal').attr('disabled', true);
        $('#studyprogram_name-modal').attr('disabled', true);
        $('#level-modal').attr('disabled', true);
        $('#accreditation_status-modal').attr('disabled', true);
        $('#national_accreditation-modal').attr('disabled', true);
        $('#national_accrediation_grade-modal').attr('disabled', true);
        $('#date_national_accreditation-modal').attr('disabled', true);
        $('#expired_national_accreditation-modal').attr('disabled', true);
        $('#international_accreditaton-modal').attr('disabled', true);
        $('#international_accrediation_grade-modal').attr('disabled', true);
        $('#date_international_accreditation-modal').attr('disabled', true);
        $('#expired_international_accreditation-modal').attr('disabled', true);
        $('#edit-btn').show();
        $('#update-btn').hide();
      });

      $('#detail-data-modal').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget);
        itemId = button.data('id');

        // Make AJAX request to fetch item details
        $.ajax({
          url: '/study_program/detail/' + itemId,
          method: 'GET',
          success: function(response) {

            // Kosongkan select options sebelum mengisinya
            $('#faculty_name-modal').empty();

            // Iterasi response.options untuk menambahkan setiap option ke dalam select
            $.each(response.options, function(key, value) {
              // Tentukan apakah option ini harus dipilih
              let selected = value.id == response.selected_option_id ? 'selected' : '';

              // Tambahkan setiap option ke dalam select
              $('#faculty_name-modal').append('<option value="' + value.id + '" ' + selected + '>' +
                value.faculty_name + '</option>');
            });

            // Populate modal with data
            // $('#faculty_name-modal').val(response.faculty_name);
            $('#studyprogram_name-modal').val(response.studyprogram_name);

            // $('#level-modal').val(response.level);
            $('#level-modal').empty();
            $('#level-modal').append('<option value="1"' + (response.level == 1 ? ' selected' : '') +
              '>S1</option>');
            $('#level-modal').append('<option value="2"' + (response.level == 2 ? ' selected' : '') +
              '>S2</option>');
            $('#level-modal').append('<option value="3"' + (response.level == 3 ? ' selected' : '') +
              '>S3</option>');
            $('#level-modal').append('<option value="4"' + (response.level == 4 ? ' selected' : '') +
              '>D3</option>');
            $('#level-modal').append('<option value="5"' + (response.level == 5 ? ' selected' : '') +
              '>D4</option>');

            $('#accreditation_status-modal').val(response.accreditation_status);
            $('#national_accreditation-modal').val(response.national_accreditation);
            $('#national_accrediation_grade-modal').val(response.national_accrediation_grade);
            $('#date_national_accreditation-modal').val(convertDateToISO(response
              .date_national_accreditation));
            $('#expired_national_accreditation-modal').val(convertDateToISO(response
              .expired_national_accreditation));
            $('#international_accreditaton-modal').val(response.international_accreditaton);
            $('#international_accrediation_grade-modal').val(response.international_accrediation_grade);
            $('#date_international_accreditation-modal').val(convertDateToISO(response
              .date_international_accreditation));
            $('#expired_international_accreditation-modal').val(convertDateToISO(response
              .expired_international_accreditation));
            $('#edit-btn').attr('data-id', itemId);
            // console.log(itemId);
          },
          error: function() {
            alert('Failed to fetch item details');
          }
        });
      });

      $('#edit-btn').click(function() {
        console.log(itemId)

        $('#faculty_name-modal').removeAttr('disabled');
        $('#studyprogram_name-modal').removeAttr('disabled');
        $('#level-modal').removeAttr('disabled');
        $('#accreditation_status-modal').removeAttr('disabled');
        $('#national_accreditation-modal').removeAttr('disabled');
        $('#national_accrediation_grade-modal').removeAttr('disabled');
        $('#date_national_accreditation-modal').removeAttr('disabled');
        $('#expired_national_accreditation-modal').removeAttr('disabled');
        $('#international_accreditaton-modal').removeAttr('disabled');
        $('#international_accrediation_grade-modal').removeAttr('disabled');
        $('#date_international_accreditation-modal').removeAttr('disabled');
        $('#expired_international_accreditation-modal').removeAttr('disabled');

        // show update
        $('#edit-btn').hide();
        $('#update-btn').show();
        // $('#update-btn').attr('hidden', false);
      });

      // Capture form submit event
      $('#update-btn').on('click', function(event) {
        console.log("Updating data..." + itemId);
        event.preventDefault(); // Prevent the default button action

        // Gather form data
        let formData = {
          _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
          faculty_name: $('#faculty_name-modal').val(),
          studyprogram_name: $('#studyprogram_name-modal').val(),
          level: $('#level-modal').val(),
          accreditation_status: $('#accreditation_status-modal').val(),
          national_accreditation: $('#national_accreditation-modal').val(),
          national_accrediation_grade: $('#national_accrediation_grade-modal').val(),
          date_national_accreditation: $('#date_national_accreditation-modal').val(),
          expired_national_accreditation: $('#expired_national_accreditation-modal').val(),
          international_accreditaton: $('#international_accreditaton-modal').val(),
          international_accrediation_grade: $('#international_accrediation_grade-modal').val(),
          date_international_accreditation: $('#date_international_accreditation-modal').val(),
          expired_international_accreditation: $('#expired_international_accreditation-modal').val()
        };

        // AJAX request to update data
        $.ajax({
          url: '/study_program/update_data/' + itemId,
          method: 'POST',
          data: formData,
          success: function(response) {
            // Handle success
            alert(response.success);
            $('#detail-data-modal').modal('hide'); // Close modal

            // Optionally, refresh the table to show updated data
            // $('#basic-datatable').DataTable().ajax.reload();
          },
          error: function(xhr) {
            let errors = xhr.responseJSON.errors;
            for (let field in errors) {
              alert(errors[field][0]); // Display each validation error
            }
          }
        });
      });

    });

    // Fungsi untuk mengonversi format tanggal ke YYYY-MM-DD
    function convertDateToISO(formattedDate) {
      const date = new Date(formattedDate);
      const year = date.getFullYear();
      const month = ("0" + (date.getMonth() + 1)).slice(-2);
      const day = ("0" + date.getDate()).slice(-2);

      // Gabungkan menjadi YYYY-MM-DD
      return `${year}-${month}-${day}`;
    }
  </script>
@endsection
