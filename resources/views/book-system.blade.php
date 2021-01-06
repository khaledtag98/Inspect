@extends('layout.layout')
@section('content')
    <!-- component -->
<form class="w-full max-w-2xl px-5 py-10 m-auto mt-10 mb-10 bg-white" method ="POST" action="/send-request">

    <div class="mb-6 text-3xl text-center ">
      Request Inspection
    </div>
  
    <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
  
      <div class="col-span-2 lg:col-span-1">
        <input type="text" name="firstname" class="w-full p-3 border-2 border-gray-400 border-solid md:text-xl" placeholder="First Name"/>
      </div>

      <div class="col-span-2 lg:col-span-1">
        <input type="text" name="lastname" class="w-full p-3 border-2 border-gray-400 border-solid md:text-xl" placeholder="Last Name"/>
      </div>
  
      <div class="col-span-2 lg:col-span-1">
        <input type="text" name="phone" class="w-full p-3 border-2 border-gray-400 border-solid md:text-xl" placeholder="Phone Number"/>
      </div>

      <div class="col-span-2 lg:col-span-1">
        <input type="text" name="email" class="w-full p-3 border-2 border-gray-400 border-solid md:text-xl" placeholder="Email address"/> 
      </div>
  
    

      <div class="col-span-2">
        <textarea cols="30" rows="8" class="w-full p-3 border-2 border-gray-400 border-solid md:text-xl" name="message" placeholder="How can we help you?"></textarea>
      </div>
  
      <div class="col-span-2 text-right">
        <button onclick="" class="w-full px-6 py-3 font-bold text-white bg-button1 sm:w-32">
          Send
        </button>
      </div>
  
    </div>
  </div>
@endsection