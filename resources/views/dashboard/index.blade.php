@extends('dashboard.layout.main')
@section('dashboard_konten')
    @can('can admin')
        <div class="row">
            <div class="col">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Guru : {{ $jumlahGuru }}</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Siswa : {{ $jumlahSiswa }}</h5>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Soal : {{ $jumlahSoal }}</h5>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    @hasrole('GURU')
        <h1>Guru</h1>
    @endhasrole
@endsection
