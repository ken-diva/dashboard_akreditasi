@extends('layout.base')
@section('content')
  <!-- Start Content-->
  <div class="container-fluid">
    <div class="row">
      <div class="mt-3">
        {{-- start --}}
        <div class="col-xxl-12 col-sm-3">
          <div class="card widget-flat">
            <div class="card-body">
              <h4>Dashboard Pemutu</h4>
              <span>Lihat data analitik akreditasi</span>
              <div class="col-xxl-12 col-sm-3">
                <div class="custom-card1">
                  <div class="text-kiri-kanan">
                    <h1>Telkom University</h1>
                    <span>
                      <button class="btn btn-primary rounded-pill btn-sm">Kode PT : 041057</button>
                    </span>
                  </div>
                  <div class="mb-1">
                    <span>LLDIKTI IV - Akademik</span>
                  </div>
                  <div>
                    <span>Kec. Dayeuhkolot, Prov. Jawa Barat</span>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- First Box -->
                <div class="col-xxl-6 col-sm-3">
                  <div class="custom-card2">
                    <div class="red-border-card">
                      <h4>Status Akreditasi</h4>
                      <p>Lihat status akreditasi perguruan tinggi</p>
                    </div>
                    <div class="wrapper-card-dashboard">
                      <div>
                        <img src="{{ asset('dist/assets/images/icons/star.png') }}" alt="" height="35">
                      </div>
                      <div class="text-content">
                        <h4>Unggul</h4>
                        <p>Nilai Akreditasi</p>
                      </div>
                    </div>
                    <div class="wrapper-card-dashboard">
                      <div>
                        <img src="{{ asset('dist/assets/images/icons/date.png') }}" alt="" height="35">
                      </div>
                      <div class="text-content">
                        <h4>28 Desember 2026</h4>
                        <p>Tanggal Berakhir</p>
                      </div>
                    </div>
                    <div class="wrapper-card-dashboard">
                      <div>
                        <img src="{{ asset('dist/assets/images/icons/date2.png') }}" alt="" height="35">
                      </div>
                      <div class="text-content">
                        <h4>2 Tahun 3 Bulan 18 Hari</h4>
                        <p>Masa Akreditasi Perguruan Tinggi</p>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- Second Box -->
                <div class="col-xxl-6 col-sm-3">
                  <div class="custom-card2">
                    <div class="red-border-card">
                      <h4>Ban PT</h4>
                      <p>Lembaga Akreditasi</p>
                    </div>
                    <div class="wrapper-card-dashboard">
                      <div>
                        <img src="{{ asset('dist/assets/images/icons/star.png') }}" alt="" height="35">
                      </div>
                      <div class="text-content">
                        <h4>SK PerBAN-PT No. 5 Tahun 2024</h4>
                        <p>Standar yang Digunakan</p>
                      </div>
                    </div>
                    <div class="wrapper-card-dashboard">
                      <div>
                        <img src="{{ asset('dist/assets/images/icons/date.png') }}" alt="" height="35">
                      </div>
                      <div class="text-content">
                        <h4>Periode APT (01 November 2023 s/d 04 Mei 2024)</h4>
                        <p>Periode</p>
                      </div>
                    </div>
                    <div class="wrapper-card-dashboard">
                      <div>
                        <img src="{{ asset('dist/assets/images/icons/date2.png') }}" alt="" height="35">
                      </div>
                      <div class="text-content">
                        <h4>2022</h4>
                        <p>Tahun Penuh Terakhir (TS)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      {{-- start --}}
      <div class="col-xxl-12 col-sm-3">
        <div class="card widget-flat">
          <div class="card-body">
            <div class="wrapper-card-dashboard2">
              <div class="text-content">
                <h4>Metrik Penilaian</h4>
                <p>Data dan informasi penilaian akreditasi</p>
              </div>
              <div>
                <a href="/study_program">
                  <button type="button" class="btn btn-outline-danger btn-sm">
                    <i class="ri-bookmark-line"></i> Data Program Studi</button>
                </a>
                <a href="">
                  <button type="button" class="btn btn-danger btn-sm">
                    <i class="ri-function-line "></i> Detail Metrik</button>
                </a>
              </div>
            </div>


            <div class="mt-3">
              <div id="chart"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var options = {
        series: [{
          name: 'Actual',
          data: [{
              x: 'Penurunan Mahasiswa',
              y: 2,
              goals: [{
                name: 'Expected',
                value: 20,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'PS dengan dosen homebase',
              y: 93,
              goals: [{
                name: 'Expected',
                value: 100,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Keterlibatan DTT',
              y: 6,
              goals: [{
                name: 'Expected',
                value: 40,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Jumlah mahasiswa aktif ',
              y: 32,
              goals: [{
                name: 'Expected',
                value: 40,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Rerata persentase penurunan lulusan',
              y: 21,
              goals: [{
                name: 'Expected',
                value: 20,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Semua PS aktif terakreditas',
              y: 95,
              goals: [{
                name: 'Expected',
                value: 100,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Jumlah guru besar sebagai dosen homebase',
              y: 100,
              goals: [{
                name: 'Expected',
                value: 100,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Persentase DT memiliki jabatan akademik ',
              y: 80,
              goals: [{
                name: 'Expected',
                value: 60,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Kelulusan tepat masa tempuh kurikulum',
              y: 65,
              goals: [{
                name: 'Expected',
                value: 35,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Kelulusan tepat 2x waktu tempuh kurikulum ',
              y: 83,
              goals: [{
                name: 'Expected',
                value: 60,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Persentase keterlibatan mahasiswa aktif',
              y: 3,
              goals: [{
                name: 'Expected',
                value: 1,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Persentase lulusan terserap lapangan kerja kurang ',
              y: 40,
              goals: [{
                name: 'Expected',
                value: 20,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Rerata persentase luaran penelitian dan PkM ',
              y: 100,
              goals: [{
                name: 'Expected',
                value: 10,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Kepesertaan mahasiswa yang eligible yang mengikuti MBKM',
              y: 3,
              goals: [{
                name: 'Expected',
                value: 10,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
            {
              x: 'Karya DT yang terekognisi/diterapkan masyarakat',
              y: 60,
              goals: [{
                name: 'Expected',
                value: 10,
                strokeWidth: 5,
                strokeHeight: 23,
                strokeColor: '#775DD0'
              }]
            },
          ]
        }],
        chart: {
          height: 1000,
          type: 'bar'
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              position: 'bottom' // use 'bottom' for left and 'top' for right align
            },
          }
        },
        colors: [
          function({
            value,
            series,
            seriesIndex,
            dataPointIndex,
            w
          }) {


            const dataPoint = w.config.series[seriesIndex].data[dataPointIndex];
            const actual = dataPoint.y;
            const threshold = dataPoint.goals[0].value;

            if (actual < threshold) {
              return '#ff263c'
            } else {
              return '#4fe472'
            }
          }
        ],
        dataLabels: {
          textAnchor: 'start',
          style: {
            fontWeight: 'bold',
            colors: ['#333', '#999']
          },
          offsetX: 0,
          formatter: function(val, opt) {
            const goals = opt.w.config.series[opt.seriesIndex].data[opt.dataPointIndex]
              .goals;
            if (goals && goals.length) {
              return `${val} / ${goals[0].value}`;
            }
            return val;
          }
        },
        tooltip: {
          custom: function({
            series,
            seriesIndex,
            dataPointIndex,
            w
          }) {
            const dataPoint = w.config.series[seriesIndex].data[dataPointIndex];
            const actual = dataPoint.y;
            const threshold = dataPoint.goals[0].value;
            const year = dataPoint.x;
            const conclusion = actual >= threshold ? 'Memenuhi Standar Indikator' :
              'Belum Memenuhi Standar Indikator';

            return `
              <div class="apexcharts-tooltip-custom">
                <strong>${year}</strong>
                <ul>
                  <li>Data Aktual: ${actual}</li>  
                  <li>Threshold: ${threshold}</li>  
                </ul>
                <strong class="conclusion">${conclusion}</strong>
              </div>
            `;

          }
        },
        legend: {
          position: 'top', // Places the legend at the top
          horizontalAlign: 'left', // Align the legend in the center, or use 'left' or 'right'
          show: true,
          showForSingleSeries: true,
          customLegendItems: ['Aktual', 'BAN PT'],
          markers: {
            fillColors: ['#00E396', '#775DD0']
          }
        }
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    });
  </script>
@endsection
