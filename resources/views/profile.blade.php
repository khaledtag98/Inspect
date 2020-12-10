@extends('layout.layout')

@section('title', 'profile')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/profile.css">
@endsection

@section('content')
<section class="my-32">

    <div class="container w-11/12 px-8 pt-6 pb-16 mx-auto bg-white rounded-lg shadow-lg md:w-5/6 md:pb-16 md:px-16 lg:w-2/3">
        <div class="flex justify-end">
            <a href="{{url('/edit-profile')}}">
                <div class="flex items-center justify-center cursor-pointer">
                    <div class="font-medium shadow-md magnifyBtn">Edit</div>
                </div>
            </a>
        </div>
        <div class="flex items-center justify-center">
            <div style="background-image: url('http://localhost/our-beautiful-project/resources/img/profile-placeholder.jpg')" class="w-48 h-48 bg-red-500 bg-center bg-no-repeat bg-cover rounded-full shadow-md"></div>
        </div>
        <div class="my-5 ">
            <p class="text-4xl font-semibold text-center text-gray-800">khaled tag</p>
            <div class="mt-1 text-lg text-center text-gray-500">
                <i class="text-center fas fa-globe"></i>
                <p class="inline-block text-center">Alexandia, Egypt</p>
            </div>
            <p class="mt-8 text-sm font-semibold text-center text-gray-600 sm:text-base">Lorem Ipsum is simply dummy
                text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                survived not only five cen</p>
        </div>
        <div class="flex justify-center mt-0 sm:mt-16">
            <div class="space-x-6 social">
                {{-- <i class="fas fa-phone-square-alt"></i> --}}
                <a href=""><i class="text-6xl text-gray-800 fab fa-whatsapp-square"></i></a>
                <a href=""><i class="text-6xl text-gray-800 fab fa-facebook-square"></i></a>
                <a href=""><i class="text-6xl text-gray-800 fab fa-twitter-square"></i></a>
            </div>
        </div>

    </div>
</section>
@endsection

@section('customJS')
@endsection
