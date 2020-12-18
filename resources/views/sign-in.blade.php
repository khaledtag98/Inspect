
@extends('layout.layout')

@section('title', 'Inspect | Sign In')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/sign-in.css">
@endsection

@section('content')
<div class="container mx-auto">
    <div class='flex my-40'>
        <div class="w-full p-8 lg:w-1/2 ">
            <div class='flex'>
            </div>
            <div class="container">
                <div class="flex justify-center tab-slider--nav">
                    <ul class=" tab-slider--tabs">
                        <li class="tab-slider--trigger active" rel="tab1">Sign In</li>
                        <li class="tab-slider--trigger" rel="tab2">Register</li>
                    </ul>
                </div>
                <div class="tab-slider--container">
                    <div id="tab1" class="tab-slider--body">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        {{--login form--}}
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="block w-full mt-1"
                                         type="password"
                                         name="password"
                                         required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
{{--                                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('register') }}">--}}
{{--                                    {{ __('create account') }}--}}
{{--                                </a>--}}
                                <x-button class="ml-3">
                                    {{ __('Login') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                    <div id="tab2" class="tab-slider--body">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="block w-full mt-1"
                                         type="password"
                                         name="password"
                                         required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-input id="password_confirmation" class="block w-full mt-1"
                                         type="password"
                                         name="password_confirmation" required />
                            </div>

                            <div class="mt-4">
                                <input class="border" id="isCompany"
                                       type="checkbox"
                                       name="isCompany" />
                                <label for="isCompany">Are you a company?</label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
{{--                                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                                    {{ __('Already registered?') }}--}}
{{--                                </a>--}}

                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="self-center hidden ml-10 lg:w-1/2 lg:inline">
            <img src="http://localhost/our-beautiful-project/resources/img/undraw_authentication_fsn5.svg" alt="">
        </div>

    </div>
</div>
@endsection

@section('customJS')
<script src="http://localhost/our-beautiful-project/resources/js/sign-in.js"></script>
@endsection
