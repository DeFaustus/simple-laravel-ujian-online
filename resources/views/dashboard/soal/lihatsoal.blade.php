@extends('dashboard.layout.main')
@section('dashboard_konten')
    <a href="/dashboard/soal" class="btn btn-primary">Kembali</a>
    @foreach ($data as $item)
        <h3 class="text-center ">{{ $item->nama }}</h3>
        @foreach ($item->dataSoals as $soal)
            <div class="box">
                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>
                <div class="pil ms-4">
                    <h5>A. {{ $soal->pil_1 }}</h5>
                    <h5>B. {{ $soal->pil_2 }}</h5>
                    <h5>C. {{ $soal->pil_3 }}</h5>
                    <h5>D. {{ $soal->pil_4 }}</h5>
                    <div class="jawaban ms-3 col-3">
                        <div class="alert alert-success" role="alert">
                            <h6>Jawaban : {{ $soal->kunci }}</h6>
                        </div>
                    </div>
                </div>
        @endforeach
    @endforeach
@endsection
