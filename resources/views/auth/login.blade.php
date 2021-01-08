@extends('layouts.app')

@section('content')
<div class="text-center third-text-color">
    <p class="display-4 font-weight-bold">Log In</p>
    <p style="font-size: 16px;">Don't have an account? <a href="/register">Sign Up</a></p>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 col-lg-5 offset-lg-1 third-text-color">
            @if (session('error'))
                <div class="alert text-center" role="alert">
                    <b class="text-danger ">
                        <i class="fa fa-warning"></i> {{ session('error') }}
                    </b>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="username">Email / Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" autofocus id="username"  required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Your Email / Username is required</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" id="password"  required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Please Enter your Password</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-5 ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                               <small class=" third-text-color">{{ __('Remember Me') }}</small> 
                            </label>
                        </div>
                    </div>
                    <div class="col-7 text-right">
                        @if (Route::has('password.request'))
                            <a class="btn-link" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                        @endif
                    </div>
                </div>
                <button class="btn btn-outline-main btn-md text-light w-100 rounded-pill mt-3" type="submit">Log In</button>
            </form>
        </div>
        <div class="col-md-1 d-none d-lg-block">
            <div class="ver_line"></div>
        </div>
        @include('includes.visitor_includes.social_login')
    </div>
</div>

@endsection
