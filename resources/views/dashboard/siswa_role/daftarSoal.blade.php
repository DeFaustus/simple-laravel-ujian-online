@extends('dashboard.layout.main')
@section('dashboard_konten')
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
                        <a href="/dashboard/kerjakansoal/{{ $item->id }}" class="btn btn-primary">Mulai Mengerjakan</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
