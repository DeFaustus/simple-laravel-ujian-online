@extends('dashboard.layout.main')
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
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah">
        Tambah Guru
    </button>
    <br>
    <br>
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>mapel</th>
                <th>foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->dataUser->nik }}</td>
                    <td>{{ $item->dataUser->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->dataUser->no_telp }}</td>
                    <td>{{ $item->dataUser->mapel->mapel }}</td>
                    <td>{{ $item->dataUser->foto }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $item->id }}">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#hapus{{ $item->id }}">
                            Hapus
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Mapel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/update" method="post">
                                    @method('PUT')
                                    @csrf
                                    <label for="mapel">Nama Mapel :</label>
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="text" name="mapel" class="form-control" value="{{ $item->mapel }}"
                                        id="mapel">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submi" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Mapel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/hapus" method="post">
                                    @method('DElETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <h3>Apakah Anda Yakin ?</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submi" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mapel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/tambah" method="post">
                        @csrf
                        <label for="">Nama Mapel :</label>
                        <input type="text" name="mapel" class="form-control" id="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah Mapel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
