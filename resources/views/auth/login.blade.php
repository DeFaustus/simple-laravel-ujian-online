@extends('layout_main.main')
@section('konten')
    <div class="container col-3 mt-5">
        <form method="POST" action="/login">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" name="email"
                    class="form-control @error('email')
                    is-invalid
                @enderror" />
                <label class="form-label" for="form2Example1">Email address</label>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form2Example2"
                    class="form-control @error('password')
                    is-invalid
                @enderror" />
                <label class="form-label" for="form2Example2">Password</label>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

        </form>
    </div>
@endsection
