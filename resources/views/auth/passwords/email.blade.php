@extends('layouts.app')

@section('content')
<div class="text-center third-text-color">
    <p class="display-4 font-weight-bold">Reset Password</p>
    <p style="font-size: 16px;">Enter your email address & we'll send you a link to reset your password.</a></p>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-5 third-text-color ">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @else
                            <span class="invalid-feedback" role="alert">
                                <strong>Valid Email is required</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-outline-main btn-md text-light w-100 rounded-pill mt-4" type="submit">Send Password Reset Link</button>
            </form>
        </div>
        
    </div>
</div>


@endsection
