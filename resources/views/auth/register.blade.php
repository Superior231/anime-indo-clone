@extends('layouts.auth', [
    'title' => 'Register',
    'activePage' => 'register'
    ])

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name" class="form-label @error('name') is-invalid @enderror">Username</label>
        <div class="content mb-3">
            <div class="pass-logo">
                <i class='bx bx-user'></i>
            </div>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="addon-wrapping"
                placeholder="Enter Username" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <label for="email" class="form-label">Email</label>
        <div class="content mb-3">
            <div class="pass-logo">
                <i class='bx bx-envelope'></i>
            </div>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                aria-describedby="addon-wrapping" placeholder="Email Address" value="{{ old('email') }}" required
                autocomplete="email">

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
                id="password" placeholder="Enter Password" required autocomplete="new-password">
            <div class="pass-logo-pass" style="background-color: transparent;">
                <div class="showPass" style="display: none;"><i class="fa-regular fa-eye-slash"></i></div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <label for="password-confirm" class="form-label">Confirm Password</label>
        <div class="content mb-3">
            <div class="pass-logo">
                <i class='bx bx-lock-alt'></i>
            </div>
            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password"
                autocomplete="off" required>
            <div class="pass-logo-pass" style="background-color: transparent;">
                <div class="showPass2" style="display: none;"><i class="fa-regular fa-eye-slash"></i></div>
            </div>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary btn-login">Register</button>
        </div>

        <div class="mt-2">
            <label>Have an account? <a href="{{ route('login') }}" class="link">Login here!</a></label>
        </div>
    </form>
@endsection
