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
                <button class='w-1/3 px-6 py-4 m-auto mr-0 border-2 border-r-2 border-gray-700 bg-primary-color'>Sign In</button>
                <button class='w-1/3 px-6 py-4 m-auto ml-0 border-2 border-l-0 border-gray-700'>Register</button>
            </div>
            <form class="block my-6">
                <label>Email </label>
                <input class="w-full px-2 py-1 mt-2 mb-8 border-2 border-gray-600" type="email" name="" placeholder="" aria-describedby="helpId">
                <label>Password </label>
                <input class="w-full px-2 py-1 mt-2 border-2 border-gray-600" type="password" name="" placeholder="" aria-describedby="helpId">
                <div>
                    <a href=""
                        class="flex items-center justify-center w-1/2 px-8 py-3 m-auto mt-12 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent shadow bg-button1 btn hover-no-underline focus:outline-none focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                        Sign In</a>
                </div>
            </form>
        </div>
        <div class="w-1/2 ml-10">
            <img src="http://localhost/our-beautiful-project/resources/img/undraw_authentication_fsn5.svg" alt="">
        </div>
    
    </div>
</div>
@endsection

@section('customJS')
@endsection
