@extends('wp-admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h2 style="font-size: 2rem !important; font-weight: bold !important;">{{ $jumlahSiswa }}</h2>
                        <p>Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h2 style="font-size: 2rem !important; font-weight: bold !important;">{{ $jumlahGtk }}</h2>
                        <p>GTK</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-university"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h2 style="font-size: 2rem !important; font-weight: bold !important;">{{ $jumlahMapel }}</h2>
                        <p>Mata Pelajaran</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-book"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h2 style="font-size: 2rem !important; font-weight: bold !important;">{{ $jumlahJurusan }}</h2>
                        <p>Keahlian</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-briefcase"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h2 style="font-size: 2rem !important; font-weight: bold !important;">{{ $jumlahFasilitas }}
                        </h2>
                        <p>Fasilitas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-home"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <section class="col-lg-7 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Perbandingan Siswa Laki-Laki & Perempuan
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="chart" style="position: relative; height: 300px;">
                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            <section class="col-lg-5 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Perbandingan Guru Berdasarkan Jurusan
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="chart" style="position: relative; height: 300px;">
                            <canvas id="mapel-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const salesCtx = document.getElementById('sales-chart-canvas').getContext('2d');

    const salesChart = new Chart(salesCtx, {
        type: 'doughnut',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                data: [{{ $jumlahLaki }}, {{ $jumlahPerempuan }}],
                backgroundColor: ['#36A2EB', '#FF6384'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mapelCtx = document.getElementById('mapel-chart-canvas').getContext('2d');

        new Chart(mapelCtx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($guruPerJurusan->pluck('jurusan')) !!},
                datasets: [{
                    data: {!! json_encode($guruPerJurusan->pluck('total')) !!},
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF',
                        '#FF9F40', '#B5E61D', '#EC407A', '#7E57C2', '#26A69A'
                    ],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                }
            }
        });
    });
</script>
@endsection