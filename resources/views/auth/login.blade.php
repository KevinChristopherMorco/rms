@extends('layouts.app')

@section ('title', 'Sign In')

@section('content')
<section class="login-page">
    <div class="home-icon flex justify-start items-center p-2">
        <a href="/"> <i class="fa-solid fa-house mr-2"></i> Return to home</a>
    </div>
    <div class="login-container flex justify-center">
        <div class="login-input-container flex justify-center items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/authenticate">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="flex justify-between items-center">
                                    <label for="password" class="">{{ __('Password') }}</label>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link text-xs font-bold" href="{{ route('resetPassword') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <div class="flex justify-end items-center">
                                    <p class="text-xs">Don't have an account?</p><a class="text-xs font-bold mx-1" href="/register">Sign Up</a>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}
                                </button>
                            </div>


                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection