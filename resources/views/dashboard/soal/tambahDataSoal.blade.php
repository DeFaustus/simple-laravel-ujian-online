@extends('dashboard.layout.main')
@section('dashboard_konten')
    <form action="/tambahdatasoal" method="post" class="col-4">
        @csrf
        <input type="hidden" name="soal_id" value="{{ $soal_id }}">
        <label for="soal">Masukkan Soal :</label>
        <input type="text" name="soal" id="soal" value="{{ old('soal') }}" class="form-control">
        @error('soal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="pil1">Pilihan 1 :</label>
        <input type="text" name="pil_1" id="pil1" value="{{ old('pil_1') }}" class="form-control">
        @error('pil_1')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="pil2">Pilihan 2 :</label>
        <input type="text" name="pil_2" id="pil2" class="form-control" value="{{ old('pil_2') }}">
        @error('pil_2')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="pil3">Pilihan 3 :</label>
        <input type="text" name="pil_3" id="pil3" value="{{ old('pil_3') }}" class="form-control">
        @error('pil_3')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="pil3">Pilihan 4 :</label>
        <input type="text" name="pil_4" id="pil4" value="{{ old('pil_4') }}" class="form-control">
        @error('pil_4')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="benar">Pilihan Yang Benar : </label>
        <select name="kunci" id="benar" class="form-control">
            <option value="">--Pilihan Yang Benar--</option>
            <option value="pil_1">Pilihan 1</option>
            <option value="pil_2">Pilihan 2</option>
            <option value="pil_3">Pilihan 3</option>
            <option value="pil_4">Pilihan 4</option>
        </select>
        @error('kunci')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit" class="btn btn-success">Tambah Soal</button>
    </form>
@endsection
