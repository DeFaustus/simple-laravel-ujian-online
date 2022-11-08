@extends('dashboard.layout.main')
@section('dashboard_konten')
@section('dashboard_konten')
    @if (session()->has('sukses'))
        <div class="alert alert-success">
            {{ session()->get('sukses') }}
        </div>
    @endif
    @if (session()->has('gagal'))
        <div class="alert alert-danger">
            {{ session()->get('gagal') }}
        </div>
    @endif
    <a href="/dashboard/soal/tambahsoal" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin ?')">Tambah
        Daftar Soal</a>
    <br>
    <br>
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Mapel</th>
                <th>Kelas</th>
                <th>Nama Guru</th>
                <th>Waktu</th>
                <th>Jumlah Soal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->mapel->mapel }}</td>
                    <td>{{ $item->kelas->kelas }}</td>
                    <td>{{ $item->dataUser->nama }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->dataSoals->count() }}</td>
                    <td>
                        <a href="/dashboard/soal/lihatsoal/{{ $item->id }}" class="btn btn-primary">Lihat Soal</a>
                        <a href="/dashboard/soal/tambahdatasoal/{{ $item->id }}" class="btn btn-warning">Tambah Soal</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
