@extends('dashboard.layout.main')
@section('dashboard_konten')
@section('dashboard_konten')
    <form action="/tambahsoal" method="post" class="col-4">
        @csrf
        <label for="mapel">Mapel : </label>
        <select name="mapel_id" id="mapel" class="form-control">
            <option value="">--Pilih Mapel--</option>
            @foreach ($mapel as $item)
                <option value="{{ $item->id }}">{{ $item->mapel }}</option>
            @endforeach
        </select>
        @error('mapel_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="kelas">kelas : </label>
        <select name="kelas_id" id="kelas" class="form-control">
            <option value="">--Pilih Kelas--</option>
            @foreach ($kelas as $item)
                <option value="{{ $item->id }}">{{ $item->kelas }}</option>
            @endforeach
        </select>
        @error('kelas_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="namaSoal">Nama Soal : </label>
        <input type="text" name="nama" id="namaSoal" class="form-control">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="waktu">Waktu : </label>
        <select name="waktu" id="waktu" class="form-control">
            <option value="">--Pilih Waktu--</option>
            <option value="01:00:00">60 menit</option>
            <option value="02:00:00">120 menit</option>
        </select>
        @error('waktu')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
