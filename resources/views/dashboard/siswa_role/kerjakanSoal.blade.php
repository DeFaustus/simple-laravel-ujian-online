@extends('layout_main.main')
@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card w-75">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center text-center">
                            {{-- @foreach ($soal->dataSoals as $value)
                                <a href="#soalnomor{{ $loop->iteration }}"
                                    class="col-3 p-2 m-2 {{ $value->jawaban->jawaban != null ? 'bg-primary' : 'bg-secondary' }} rounded text-white text-decoration-none"
                                    id="soalnomor{{ $loop->iteration }}">
                                    {{ $loop->iteration }}</a>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <input type="hidden" name="id_soal" id="id_soal" value="{{ $soal->id }}">
                @foreach ($soal->dataSoals as $item)
                    <div class="card w-70 m-2 p-2" id="soalnomor{{ $loop->iteration }}">
                        <div class="card-body">
                            <h4> {{ $loop->iteration }} . {{ $item->soal }}</h4>
                            <div class="ms-4">
                                <p>Jawab :</p>
                                <fieldset id="soal{{ $item->id }}">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal{{ $item->id }}"
                                            id="{{ $item->id }}" value="{{ $item->pil_1 }}"
                                            onclick="check(this.value,this.id)"
                                            {{ $item->jawaban->jawaban == $item->pil_1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="{{ $item->soal }}">
                                            {{ $item->pil_1 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal{{ $item->id }}"
                                            id="{{ $item->id }}" value="{{ $item->pil_2 }}"
                                            onclick="check(this.value,this.id)"
                                            {{ $item->jawaban->jawaban == $item->pil_2 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="{{ $item->soal }}">
                                            {{ $item->pil_2 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal{{ $item->id }}"
                                            id="{{ $item->id }}" value="{{ $item->pil_3 }}"
                                            onclick="check(this.value,this.id)"
                                            {{ $item->jawaban->jawaban == $item->pil_3 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="{{ $item->soal }}">
                                            {{ $item->pil_3 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal{{ $item->id }}"
                                            id="{{ $item->id }}" value="{{ $item->pil_4 }}"
                                            onchange="check(this.value,this.id)"
                                            {{ $item->jawaban->jawaban == $item->pil_4 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="{{ $item->soal }}">
                                            {{ $item->pil_4 }}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/kerjakanSoal.js') }}"></script>
@endpush
