@extends('layouts.app')

@section('title', 'Register')

@section('content')
<section class="register-page">
    <div class="home-icon flex justify-start items-center p-2">
        <a href="/"> <i class="fa-solid fa-house mr-2"></i> Return to home</a>
    </div>

    <div class="register-container flex justify-center">
        <div class="register-input-container">
            <div>
                <div class="pt-8">
                    <div class="card">
                        <p class="text-center font-bold text-xl mb-1">{{ __('Create an account') }}</p>
                        <p class="text-center font-200 text-base mb-8">{{ __('Introduce your self') }}</p>

                        <div class="register-breadcrumb-container">
                            <ul class="register-breadcrumb-item flex justify-around items-center">
                                <li class="step flex text-center items-center">
                                    <div class="reg-number mr-4">1. </div> Personal Information
                                </li>

                                <li class="step flex text-center items-center">
                                    <div class="reg-number mr-4">2. </div> Identification Information
                                </li>

                                <li class="step flex text-center items-center">
                                    <div class="reg-number mr-4">3. </div> Membership Type
                                </li>
                            </ul>
                        </div>
                        <div class="user-registration">
                            <form method="POST" action="{{ route('register.create') }}">
                                <div class="tab user-information">
                                    <div class="grid grid-cols-1 md:grid-cols-3">
                                        @csrf
                                        <div class="col-span-1">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                            <div class="text-center">
                                                <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="Enter your first name" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                                            <div class="text-center">
                                                <input id="middle_name" type="text" class="form-control @error('name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" placeholder="Enter your middle name" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                                            <div class="">
                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your last name" required autocomplete="name" autofocus>

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
                                            <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>

                                            <div class="text-center">
                                                <input id="birthdate" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control @error('date') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" placeholder="Enter your birthdate" required autocomplete="email">
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
                                                <option value="Female">Female</option>
                                                <option value="Gay">Gay</option>
                                                <option value="Lesbian">Lesbian</option>
                                                <option value="Transgender">Transgender</option>
                                                <option value="Transwoman">Transwoman</option>
                                            </select>
                                            @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="tab user-identification ">
                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                        <div class="col-span-1">
                                            <label for="card_number">{{__('Library Card Number')}}</label>
                                            <div>
                                                <input type="number" name="card_number" id="card_number">
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                            <div>
                                                <input type="text" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4">
                                        <div class="col-span-1">
                                            <label for="house_no">{{__('House No.')}}</label>
                                            <div>
                                                <input type="text" name="house_no" id="house_no">
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="barangay">{{__('Barangay')}}</label>
                                            <div>
                                                <input type="text" name="barangay" id="barangay">
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="city_municipality">{{__('City/Municipality')}}</label>
                                            <div>
                                                <input type="text" name="city_municipality" id="city_municipality">
                                            </div>
                                        </div>

                                        <div class="col-span-1">
                                            <label for="province">{{__('Province')}}</label>
                                            <div>
                                                <input type="text" name="province" id="province">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab member-identification">
                                    <div class="grid grid-cols-2">
                                        <div class="col-span-1">
                                            <div class="flex items-center">
                                                <input type="radio" name="member" value="Faculty" id="faculty"> Faculty
                                                <input type="radio" name="member" value="Stiudent" id="student"> Student
                                            
                                    
                                            </div>

                                        </div>

                                        <div class="col-span-1">
                                            <label for="password">Password</label>
                                            <input type="Password" name="password" id="password">
                                            <label for="cpassword">Confirm Password</label>
                                            <input type="Password" name="cpassword" id="cpassword">

                                        </div>
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
                                    <p class="account-indicator text-xs">Already have an account? <a class="text-xs font-bold" href="/login">Sign in</a></p>
                                    <button type="button" onclick="prevTab()" class="" id="prevBtn">
                                        {{ __('Previous') }}
                                    </button>

                                    <button type="button" onclick="nextTab();" class="" id="nextBtn">
                                        {{ __('Next') }}
                                    </button>


                                </div>
                                <button type="submit">
                                    {{ __('Register') }}

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var currentTab = 0;
    showTab(currentTab);
    const elements = document.querySelectorAll('.step');
    elements[0].classList.add('active');
    var y = document.querySelectorAll(".account-indicator");


    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
    }


    function nextTab() {
        var x = document.getElementsByClassName("tab");

        currentTab += 1;
        showTab(currentTab);

        for (let i = 1; i < elements.length; i++) {
            elements[currentTab].classList.add('active');
            elements[currentTab - 1].classList.remove('active');

        }

        if (currentTab < x.length) {
            x[currentTab].style.display = 'block';
            x[currentTab - 1].style.display = 'none';

        }

        if (currentTab != 0) {
            y[0].style.display = 'none';
        }

    }

    function prevTab() {
        var x = document.getElementsByClassName("tab");

        currentTab -= 1;
        showTab(currentTab);
        x[currentTab + 1].style.display = 'none';
        for (let i = 1; i < elements.length; i++) {
            elements[currentTab].classList.add('active');
            elements[currentTab + 1].classList.remove('active');
        }

        if (currentTab == 0) {
            y[0].style.display = 'block';
        }
    }
</script>
@endsection