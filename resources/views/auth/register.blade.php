@extends('layouts.app')

@section('content')
<div class="text-center third-text-color">
    <p class="display-4 font-weight-bold">Sign Up</p>
    <p style="font-size: 16px;">Already have an account? <a href="/login">Log In</a></p>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 col-lg-5 offset-lg-1 third-text-color">
            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus id="first_name"  required>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>First name is required</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus id="last_name"  required>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Last name is required</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="col-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus id="email"  required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Email is required</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" autofocus id="username"  required>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Username is required</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" id="password"  required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Please Enter Password</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-6 mb-3">
                        <label for="password-confirm">Confirm Password</label>
                        <input type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password"  id="password-confirm" >
                        
                    </div>
                </div>
                
                <button class="btn btn-outline-main btn-md text-light w-100 rounded-pill mt-3" type="submit">Sign Up</button>
            </form>
        </div>
        <div class="col-md-1 d-none d-lg-block">
            <div class="ver_line2"></div>
        </div>
        
        @include('includes.visitor_includes.social_login')
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
