@extends('layouts.auth')


@section('content')
    <input type="hidden" value="{{ $title = 'Login' }}">
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email" class="form-label">Email</label>
        <div class="content mb-4">
            <div class="pass-logo">
                <i class='bx bx-envelope'></i>
            </div>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                aria-describedby="addon-wrapping" placeholder="Enter Email" value="{{ old('email') }}" autocomplete="email"
                autofocus required>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <label for="password" class="form-label">Password</label>
        <div class="content mb-3">
            <div class="pass-logo">
                <i class='bx bx-lock-alt'></i>
            </div>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                id="password" placeholder="Enter Password" autocomplete="off" required>
            <div class="pass-logo-pass" style="background-color: transparent;">
                <div class="showPass" style="display: none;"><i class="fa-regular fa-eye-slash"></i></div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary btn-login" name="login_btn">Login</button>
        </div>

        <div class="mt-2">
            <label>Not registered yet? <a href="{{ route('register') }}" class="link">Create an account!</a></label>
        </div>
    </form>


    <script src="{{ url('/assets/js/login.js') }}"></script>
@endsection
