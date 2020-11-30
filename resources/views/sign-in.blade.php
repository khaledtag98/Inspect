@extends('layout.layout')

@section('title', 'Sign In')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/sign-in.css">
@endsection

@section('content')
<div class="container mx-auto">
    <div class='flex my-40'>
        <div class="w-1/2 p-8 ">
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
                        <form class="block -my-12">
                            <label>Email </label>
                            <input class="w-full px-2 py-1 mt-2 mb-4 border-2 border-gray-600" type="email" name="" placeholder="" aria-describedby="helpId">
                            <label>Password </label>
                            <input class="w-full px-2 py-1 mt-2 border-2 border-gray-600" type="password" name="" placeholder="" aria-describedby="helpId">
                            <div>
                                <a href=""
                                    class="flex items-center justify-center w-1/2 px-8 py-3 m-auto mt-12 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent shadow bg-button1 btn hover-no-underline focus:outline-none focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                                    Sign In</a>
                            </div>
                        </form>
                    </div>
                    <div id="tab2" class="tab-slider--body">
                        <form class="block -my-12">
                            <label>Full Name </label>
                            <div class='flex'>
                                <input class='w-3/4 px-2 py-1 mt-2 mb-4 mr-4 border-2 border-gray-600' type="text" placeholder="First Name">
                                <input class='w-3/4 px-2 py-1 mt-2 mb-4 border-2 border-gray-600' type="text" placeholder="Last Name">
                            </div>
                            <label>Email</label>
                            <input class="w-full px-2 py-1 mt-1 mb-4 border-2 border-gray-600" type="email" name="" placeholder="" aria-describedby="helpId">
                            <label>Password </label>
                            <input class="w-full px-2 py-1 mt-1 mb-4 border-2 border-gray-600" type="password" name="" placeholder="" aria-describedby="helpId">
                            <label>Confirm Password </label>
                            <input class="w-full px-2 py-1 mt-1 border-2 border-gray-600" type="password" name="" placeholder="" aria-describedby="helpId">
                            <div>
                                <a href=""
                                    class="flex items-center justify-center w-1/2 px-8 py-3 m-auto mt-12 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent shadow bg-button1 btn hover-no-underline focus:outline-none focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                                    Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-1/2 ml-10">
            <img src="http://localhost/our-beautiful-project/resources/img/undraw_authentication_fsn5.svg" alt="">
        </div>

    </div>
</div>
@endsection

@section('customJS')
<script src="http://localhost/our-beautiful-project/resources/js/sign-in.js"></script>



@endsection
