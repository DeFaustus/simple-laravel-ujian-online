@extends('layout_main.main')
@section('konten')
    @include('dashboard.layout.header')
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layout.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <br>
                <div class="justify-content-between pt-3 pb-2 mb-3">
                    @yield('dashboard_konten')
                </div>
            </main>
        </div>
    </div>
    @push('js')
        <script src={{ URL::asset('js/bootstrap.bundle.min.js') }}></script>
    @endpush
    @push('css')
        <link href={{ URL::asset('css/bootstrap.min.css') }} rel="stylesheet" />
        <link href={{ URL::asset('css/dashboard.css') }} rel="stylesheet" />
    @endpush
@endsection
