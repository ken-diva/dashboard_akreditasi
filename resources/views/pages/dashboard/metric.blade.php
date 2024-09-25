@extends('layout.base')
@section('content')
  {{-- modal --}}
  <div class="modal fade" id="bs-example-modal-full-width" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-full-width">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Informasi Indikator</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card card-body">
            <div class="row">
              <div class="col-8">
                <div id="chart1"></div>
              </div>
              <div class="col-4">
                <div id="chart2"></div>
              </div>
            </div>
          </div>
          <div class="card card-body">
            <div class="row">
              <div class="col-12">
                <div id="chart3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-full-width">Large
    Modal</button> --}}

  <script>
    var options = {
      series: [{
          name: "D4",
          data: [6233, 5823, 6115, 5115, 6323]
        },
        {
          name: "D3",
          data: [5233, 4223, 5215, 4215, 5223]
        },
        {
          name: "D1",
          data: [3133, 2523, 3325, 2815, 3123]
        },
      ],
      chart: {
        height: 350,
        type: 'line',
        dropShadow: {
          enabled: true,
          color: '#000',
          top: 18,
          left: 7,
          blur: 10,
          opacity: 0.2
        },
        zoom: {
          enabled: false
        },
        toolbar: {
          show: false
        }
      },
      colors: ['#757575', '#BF6A02', '#0BA44C'],
      dataLabels: {
        enabled: true,
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: 'Jumlah Mahasiswa Baru TS hingga TS-5',
        align: 'left'
      },
      grid: {
        borderColor: '#e7e7e7',
        row: {
          colors: ['#f3f3f3', 'transparent'],
          opacity: 0.5
        },
      },
      markers: {
        size: 1
      },
      xaxis: {
        categories: ['2018', '2019', '2020', '2021', '2022'],
        // title: {
        //   text: 'Tahun'
        // }
      },
      yaxis: {
        // title: {
        //   text: 'Temperature'
        // },
        min: 2000,
        max: 7000
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
  </script>

  <script>
    var options = {
      series: [30000, 20000, 10000],
      chart: {
        type: 'donut',
      },
      labels: ['D4', 'D3', 'D1'],
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200
          },
          legend: {
            position: 'top'
          }
        }
      }]
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();
  </script>

  <script>
    var options = {
      series: [{
          name: "D4",
          data: [6233, 5823, 6115, 5115, 6323]
        },
        {
          name: "D3",
          data: [5233, 4223, 5215, 4215, 5223]
        },
        {
          name: "D1",
          data: [3133, 2523, 3325, 2815, 3123]
        },
      ],
      chart: {
        height: 350,
        type: 'line',
        dropShadow: {
          enabled: true,
          color: '#000',
          top: 18,
          left: 7,
          blur: 10,
          opacity: 0.2
        },
        zoom: {
          enabled: false
        },
        toolbar: {
          show: false
        }
      },
      colors: ['#757575', '#BF6A02', '#0BA44C'],
      dataLabels: {
        enabled: true,
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: 'Data dan informasi penilaian akreditasi',
        align: 'left'
      },
      grid: {
        borderColor: '#e7e7e7',
        row: {
          colors: ['#f3f3f3', 'transparent'],
          opacity: 0.5
        },
      },
      markers: {
        size: 1
      },
      xaxis: {
        categories: ['2018', '2019', '2020', '2021', '2022'],
        // title: {
        //   text: 'Tahun'
        // }
      },
      yaxis: {
        // title: {
        //   text: 'Temperature'
        // },
        min: 2000,
        max: 7000
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      }
    };

    var chart = new ApexCharts(document.querySelector("#chart3"), options);
    chart.render();
  </script>

  {{-- tabel --}}
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="text-kiri-kanan">
            <div class="wrapper-card-metric">
              <div>
                <a href="/">
                  <img src="{{ asset('dist/assets/images/icons/left-arrow.png') }}" alt="" height="35">
                </a>
              </div>
              <div class="text-content">
                <h4 class="header-title">Metrik dan Skor Analitik</h4>
                <p>Lihat metrik dan skor analitik</p>
              </div>
            </div>
            <div>
              <form action="" method="POST">
                <div class="row">
                  <div class="col-lg-6">
                    <select class="form-select" id="example-select">
                      <option>SK PerBAN-PT No. 5 Tahun 2024</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <select class="form-select" id="example-select">
                      <option>Periode APT</option>
                    </select>
                  </div>
                  <div class="col-lg-2">
                    <button type="submit" class="btn btn-danger">Filter</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="text-kiri-kanan">
            <div class="text-biru">Terakhir diperbarui: 06 Juli 2024, 18:43 WIB</div>
            <div class="text-biru"><i class="ri-lock-line "></i> Indikator Wajib</div>
          </div>
        </div>
        <div class="card-body">
          <table id="basic-datatable" class="table dt-responsive w-100">
            <thead>
              <tr>
                <th width="5%">No.</th>
                <th width="32%">Indikator</th>
                <th width="7%">Satuan</th>
                <th width="10%">Minimal</th>
                <th width="7%">Nilai</th>
                <th>Keterangan</th>
                <th width="12%">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td><i class="ri-lock-line "></i> Rerata persentase penurunan mahasiswa baru (S1, D4, D3) dalam 5 tahun
                  terakhir</td>
                <td>PPM</td>
                <td>PPM ≤ 20%</td>
                <td>1.4%</td>
                <td>
                  Persentase penurunan mahasiswa baru sebesar 1.4%, maka dinyatakan memenuhi persyaratan dengan memperoleh
                  sebanyak 35.963 mahasiswa terdaftar dalam 5 tahun terakhi
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                    data-bs-target="#bs-example-modal-full-width">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td><i class="ri-lock-line "></i> Semua program studi aktif memiliki Dosen Homebase (NIDN/NIDK)</td>
                <td>(DH ≥ 5)</td>
                <td>(DH ≥ 5) = 100%</td>
                <td>93.85%</td>
                <td>
                  PT memiliki persentase dosen homebase sebesar 93.85%, sehingga tidak memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td><i class="ri-lock-line "></i> Keterlibatan dosen tidak tetap</td>
                <td>DTT</td>
                <td>DTT ≤ 40%</td>
                <td>6.05%</td>
                <td>
                  PT memiliki 54 dosen tidak tetap dan 838 dosen tetap sehingga keterlibatan dosen tidak tetap sebesar
                  6.05%, maka dinyatakan memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td><i class="ri-lock-line "></i> Jumlah mahasiswa aktif (S1, D4, D3) dibagi jumlah dosen tetap saat TS
                </td>
                <td>RM/DT</td>
                <td>RM/DT ≤ 40</td>
                <td>32.9</td>
                <td>
                  Persentase penurunan mahasiswa baru sebesar 1.4%, maka dinyatakan memenuhi persyaratan dengan memperoleh
                  sebanyak 35.963 mahasiswa terdaftar dalam 5 tahun terakhi
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td><i class="ri-lock-line "></i> Rerata persentase penurunan lulusan (S1, D4, D3) dalam 5 tahun terakhir
                </td>
                <td>RPL</td>
                <td>RPL ≤ 20%</td>
                <td>6.05%</td>
                <td>
                  Rasio bernilai 32.9 dari keselurahan 30.201 mahasiswa dan 918 dosen tetap, maka dinyatakan memenuhi
                  terhadap persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td><i class="ri-lock-line "></i> Semua PS aktif terakreditasi</td>
                <td>PSA</td>
                <td>PSA = 100%</td>
                <td>32.9</td>
                <td>
                  Persentase penurunan lulusan mahasiswa sebesar 21.62%, maka dinyatakan memenuhi persyaratan dengan
                  memperoleh sebanyak 8.029 lulusan mahasiswa dalam 5 tahun terakhir
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td><i class="ri-lock-line "></i> Jumlah guru besar sebagai dosen homebase sekurangnya 2 orang per program
                  doktor</td>
                <td>(DGB ≥ 2)</td>
                <td>(DGB ≥ 2) =100%</td>
                <td>21.62%</td>
                <td>
                  PT memiliki 62 PS aktif terakreditasi atau 95.38% dari total 65 PS, maka dinyatakan tidak memenuhi
                  persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td><i class="ri-lock-line "></i> Persentase DT memiliki jabatan akademik (GB+LK+L+AA)</td>
                <td>DTJA</td>
                <td>DTJA ≥ 60%</td>
                <td>95.38%</td>
                <td>
                  PT memiliki persentase guru besar sebagai dosen homebase sebesar 100%, sehingga memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td><i class="ri-lock-line "></i> Kelulusan tepat masa tempuh kurikulum (mahasiswa S1/D4 masuk TS-3 lulus
                  sampai TS, mahasiswa D3 masuk
                  TS-2 lulus TS dan rerata pengamatan dalam tiga tahun terakhir untuk tiga angkatan mahasiswa terakhir)
                </td>
                <td>PKMTK</td>
                <td>PKMTK ≥ 35%</td>
                <td>100%</td>
                <td>
                  PT memiliki persentase DT bergelar GB+LK+L+AA sebesar 80%, yaitu 792 DT bergelar GB, LK, L, AA dari
                  total 990 DT, maka dinyatakan memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td><i class="ri-lock-line "></i> Kelulusan tepat 2x waktu tempuh kurikulum (mahasiswa S1/D4 masuk TS-6
                  lulus sampai TS, mahasiswa D3
                  masuk TS-4 lulus sampai TS dan rerata pengamatan dalam tiga tahun terakhir untuk tiga angkatan mahasiswa
                  terakhir)</td>
                <td>PK2MTK</td>
                <td>PK2MTK ≥ 60%</td>
                <td>80%</td>
                <td>
                  Pernyataan ini memenuhi persyaratan dengan peroleh nilai 83.79%, mempunyai sebanyak 15.790 kelulusan
                  mahasiswa 2x tepat waktu atau 83.79% dari total 18.845 mahasiswa
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>11</td>
                <td><i class="ri-lock-line "></i> Persentase keterlibatan mahasiswa aktif dalam memperoleh prestasi
                  mahasiswa tingkat internasional
                  nasional/provinsi peringkat 1, 2 dan 3 saat TS</td>
                <td>PMAP</td>
                <td>PMAP ≥ 0.01%</td>
                <td>65.42%</td>
                <td>PT memiliki 1.005 keterlibatan mahasiswa aktif yang berprestasi atau 3.33% dari total 30.201
                  mahasiswa, maka dinyatakan memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>12</td>
                <td><i class="ri-lock-line "></i> Persentase lulusan terserap lapangan kerja kurang dari sama dengan 1
                  tahun saat tahun lulusan TS-2
                </td>
                <td>PLLK</td>
                <td>PLLK ≥ 20%</td>
                <td>21.85%</td>
                <td>PT memiliki 2.408 lulusan yang bekerja atau 40.61% dari total 5.930 lulusan lulusan terserap lapangan
                  kerja, maka dinyatakan memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>13</td>
                <td><i class="ri-lock-line "></i> Rerata persentase luaran penelitian dan PkM dalam bentuk Jurnal DT
                  terindeks Scopus Sinta 2 dalam 3
                  tahun saat TS</td>
                <td>PPPKM</td>
                <td>PPPKM ≥ 10%</td>
                <td>3.33%</td>
                <td>
                  PT memenuhi persyaratan ini dengan nilai 103.87%, data terdiri dari 3.085 publikasi internasional scopus
                  Q1 - Q4, non Q, dan SINTA 1 - 2 dalam 3 tahun terakhir yang dihasilkan dari 990 keseluruhan dosen tetap
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>14</td>
                <td><i class="ri-lock-line "></i> Kepesertaan mahasiswa yang eligible yang mengikuti MBKM saat TS</td>
                <td>MEMBKM</td>
                <td>MEMBKM ≥ 10%</td>
                <td>2.21%</td>
                <td>PT memiliki 666 mahasiswa yang mengikuti MBKM atau 2.21% dari total 30.201 mahasiswa, maka dinyatakan
                  tidak memenuhi persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
              <tr>
                <td>15</td>
                <td><i class="ri-lock-line "></i> Kepesertaan mahasiswa yang eligible yang mengikuti MBKM saat TS</td>
                <td>PKDT</td>
                <td>PKDT ≥ 10</td>
                <td>60.64 PKDT</td>
                <td>
                  PT memiliki 60.64 PKDT, dengan 1.801 HKI yang diperoleh dari 990 dosen tetap, maka dinyatakan memenuhi
                  persyaratan ini
                </td>
                <td>
                  <button class="btn btn-outline-danger btn-sm">Lihat Detail</button>
                </td>
              </tr>
            </tbody>

          </table>

        </div>
      </div>
    </div>
  </div>
@endsection
