@extends('layouts.app')
@section('title', 'Password Reset')

@section('content')
<section class="login-page">
<div class="home-icon flex justify-start items-center p-2">
        <a href="/"> <i class="fa-solid fa-house mr-2"></i> Return to home</a>
    </div>
    <div class="login-container flex justify-center">
        <div class="login-input-container flex justify-center items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-bold text-lg">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection