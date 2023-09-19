@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <section class="login-container">
        <div class="home-icon flex justify-start items-center p-2">
            <a href="/"> <i class="fa-solid fa-house mr-2"></i> Return to home</a>
        </div>
        <div class="login-container__login-container flex justify-center">
            <div class="login-container__login-input-container flex justify-center items-center px-6 md:px-20 md:py10">
                <form method="POST" action="{{ route('login.process') }}">
                    @csrf
                    <div class="login-container__input-group py-2">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end py-2">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="form-control login-container__input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Enter your email address" required autocomplete="email"
                            autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login-container__input-group py-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="">{{ __('Password') }}</label>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-xs font-bold login-container__anchor-link"
                                    href="{{ route('resetPassword') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        </div>
                        @endif
                        <div class="login-container__login-input-group flex items-center">
                            <input id="password" type="password"
                                class="form-control login-container__input @error('password') is-invalid @enderror"
                                name="password" placeholder="Enter your password" required autocomplete="current-password">
                            <i class="fa-regular fa-eye-slash"></i>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input login-container__input login-input--checkbox" type="checkbox"
                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex justify-end items-center">
                            <p class="text-xs">Don't have an account?</p><a
                                class="login-container__anchor-link text-xs font-bold mx-1" href="/register">Sign Up</a>
                        </div>
                        <button type="submit" class="btn btn-primary login-container__button">{{ __('Login') }}
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </section>

    <script>
        const passwordIcon = document.querySelectorAll(
            '.login-container__login-input-container .login-container__login-input-group i')
        const passwordInput = document.querySelectorAll('.login-container__login-input-container input[type="password"]')

        passwordIcon.forEach((passwordIconEl) => {
            passwordIconEl.addEventListener('click', (e) => {
                passwordInput.forEach((passwordInputEl) => {
                    if (passwordInputEl.type == 'password') {
                        passwordInputEl.type = 'text'
                        passwordIconEl.classList.remove('fa-eye-slash')
                        passwordIconEl.classList.add('fa-eye')

                    } else {
                        passwordInputEl.type = 'password'
                        passwordIconEl.classList.remove('fa-eye')
                        passwordIconEl.classList.add('fa-eye-slash')
                    }
                })

            })
        })
    </script>

@endsection
