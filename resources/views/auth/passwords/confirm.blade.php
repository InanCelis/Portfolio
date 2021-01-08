@extends('layouts.app')

@section('content')
<div class="text-center third-text-color">
    <p class="display-4 font-weight-bold">Confirm Password</p>
    <p style="font-size: 16px;">Please confirm your password before continuing.</a></p>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-5 third-text-color ">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.confirm') }}"class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <button class="btn btn-outline-main btn-md text-light w-100 rounded-pill mt-4" type="submit">Confirm Password</button>
            </form>
        </div>
        
    </div>
</div>

@endsection
