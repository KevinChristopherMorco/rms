@extends('layouts.app')

@section('content')
<section class="register-page">
    <div class="register-container flex justify-center">
        <div class="register-input-container">
            <div>
                <div class="pt-8">
                    <div class="card">
                        <p class="text-center font-bold text-xl mb-1">{{ __('Create an account') }}</p>
                        <p class="text-center font-200 text-base mb-8">{{ __('Introduce your self') }}</p>

                        <div class="register-breadcrumb-container">
                            <ul class="register-breadcrumb-item flex justify-around items-center">
                                <li class="flex text-center items-center active">
                                    <div class="reg-number mr-4">1. </div> Personal Information
                                </li>

                                <li class="flex text-center items-center">
                                    <div class="reg-number mr-4">2. </div> Identification Information
                                </li>

                                <li class="flex text-center items-center">
                                    <div class="reg-number mr-4">3. </div> Membership Type
                                </li>
                            </ul>
                        </div>
                        <div class="personal-information">
                            <form method="POST" action="{{ route('register') }}">
                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    @csrf
                                    <div class="col-span-1">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                        <div class="text-center">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your first name" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-1">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                                        <div class="text-center">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your middle name" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-1">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                                        <div class="">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your last name" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2">
                                    <div class="col-span-1">
                                        <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>

                                        <div class="text-center">
                                            <input id="date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" placeholder="Enter your birthdate" required autocomplete="email">
                                            @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-1">
                                        <label for="gender">{{__('Gender') }}</label>
                                        <select class="" name="gender" id="gender" required>
                                            <option value="" selected>Please select your gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Male">Female</option>
                                            <option value="Male">Gay</option>
                                            <option value="Male">Lesbian</option>
                                            <option value="Male">Transgender</option>
                                            <option value="Male">Transwoman</option>
                                        </select>
                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!--
                                <div class="">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
-->

                                <div class="register-button flex justify-between items-center mr-4">
                                    <p>Alread have an account? <a class="font-bold" href="/login">Sign in</a></p>
                                    <button type="submit" class="">
                                        {{ __('Next') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection