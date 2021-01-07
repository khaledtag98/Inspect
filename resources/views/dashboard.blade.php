@extends('layout.layout')

@section('title', 'Inspect | Dashboard')

@section('customCSS')
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')

    <section class="my-32">
        <div
            class="container w-11/12 px-8 pt-6 pb-16 mx-auto bg-white rounded-lg shadow-lg md:w-5/6 md:pb-16 md:px-16 lg:w-2/3">
            <div class="flex flex-wrap mt-6">
                <div class="w-full md:w-2/5">
                    <div
                        style="background-image: url('http://localhost/our-beautiful-project/resources/img/profile-placeholder.jpg')"
                        class="relative w-56 h-56 mx-auto bg-center bg-no-repeat bg-cover rounded-full shadow-md md:mx-0">
                        <a href="">
                            <div class="absolute p-3 bg-gray-100 rounded-full shadow-md edit-photo">
                                <i class="text-xl text-gray-600 far fa-edit"></i>
                            </div>
                        </a>

                    </div>

                </div>
                <div class="self-center w-full transition-colors duration-200 ease-in-out md:w-3/5">
                    <form method="POST" action="{{ route('updateUserInfo') }}">
                    @csrf

                    <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')"/>

                            <x-input id="name" class="block w-full mt-1" type="text" name="name"
                                     :value="old('name')"  />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')"/>

                            <x-input id="email" class="block w-full mt-1" type="email" name="email"
                                     :value="old('email')" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')"/>

                            <x-input id="password" class="block w-full mt-1"
                                     type="password"
                                     name="password"
                                      autocomplete="new-password"/>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                            <x-input id="password_confirmation" class="block w-full mt-1"
                                     type="password"
                                     name="password_confirmation"/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>

@endsection

@section('customJS')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection
