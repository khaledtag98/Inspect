@extends('layout.layout')

@section('title', 'Inspect | Search Results')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/all-projects.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content')
<section class='flex p-32 py-16'>

</section>

@if($companies->count() > 0 || $projects->count() > 0 || $estates->count() > 0 )

            <h1 id='companies' class='pl-32 text-xl font-bold lg:text-3xl '>Search Results</h1>

            @if($companies->count() > 0)
                    <h1 class='pt-16 pl-32 font-bold text-l lg:text-xl'>Found in companies</h1>
                    <div class="container px-4 mx-auto my-12 md:px-12">
                    <div class="flex flex-wrap justify-center w-full -mx-1 lg:-mx-4">

                        
                            @foreach($companies as $company)
                            <!-- Column -->
                            <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                <!-- Article -->
                                <article class="justify-center w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                                    <a href="/{{$company->slug}}"  class='justify-center w-full h-full'>
                                        <div class='w-full h-full cont'>
                                            <img alt="Placeholder" class="block object-fill w-full h-full" src="{{$company->picture}}">
                                            <a href="/{{$company->slug}}" class="btn">View Company</a>
                                        </div>
                                    </a>

                                </article>
                                <!-- END Article -->

                            </div>
                            <!-- END Column -->
                                @endforeach

                    </div>
                    </div>
            @endif
            @if($projects->count() > 0)
                <h1 class='pt-16 pl-32 font-bold text-l lg:text-xl'>Found in projects</h1>
                <div class="container px-4 mx-auto my-12 md:px-12">
                    <div class="flex flex-wrap justify-center w-full -mx-1 lg:-mx-4">
                    @foreach($projects as $project)
                        <!-- Column -->
                        <a href="/{{$project->company->slug}}/{{$project->slug}}">
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">

                            <!-- Article -->
                            <article class="overflow-hidden rounded-lg shadow-lg ">
                                    <img alt="Placeholder" class="block w-full h-auto" src="{{$project->picture}}">
                                <header class="flex items-center justify-between p-2 leading-tight md:p-4">
                                    <h1 class="text-lg">
                                        <a class="text-black no-underline hover:underline" href="/{{$project->company->slug}}/{{$project->slug}}">
                                            {{$project->name}}
                                        </a>
                                    </h1>
                                </header>

                                <footer class="flex items-center justify-between p-2 leading-none md:p-4">
                                    <a class="flex items-center text-black no-underline hover:underline" href="/{{$project->company->slug}}">
                                        <img alt="Placeholder" class="block w-12 h-12 rounded-full" src="{{$project->company->picture}}">
                                        <p  class="ml-2 text-sm">
                                        Company Name
                                        </p>
                                    </a>
                                </footer>
                            </article>
                        </div>
                        </a>
                    @endforeach


                    </div>
                </div>
            @endif

            @if($estates->count() > 0)
            <h1 class='pt-16 pl-32 font-bold text-l lg:text-xl'>Found in properties</h1>
            <div class="container py-24 mx-20 mx-auto ms:mx-16 md:pl-8 lg:pl-10">
                <div class="flex flex-wrap -m-4">
                    @foreach($estates as $key=>$estate)
                        <div class="p-4 land-category md:w-1/3">
                            <div class="flex flex-wrap h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                                <div class="w-full">
                                    <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                        src="{{$estate->picture}}"
                                        alt="blog">
                                </div>

                                <div class="w-full">
                                    <div class="flex flex-wrap h-full p-6">
                                        <div class="w-full category">
                                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">{{$estate->type}}</h2>
                                        </div>
                                        <h1 class="w-full mb-3 text-lg font-medium text-gray-900 title-font">{{$estate->name}}</h1>
                                        <p class="w-full mb-3 leading-relaxed">{{$estate->description}}</p>
                                        <div class="flex flex-wrap items-center justify-end w-full ">
                                            <a id="modal-open{{$key}}" onclick="index({{$key}})" class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 lg:mb-0 modal-open">Learn
                                                More
                                                <x-modal :key="$key" :name="$estate->name" :type="$estate->type"
                                                        :price="$estate->price" :description="$estate->description"
                                                        :block="$estate->block" :floor="$estate->floor"
                                                        :available="$estate->available"/>
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
@else 
<div class="mx-auto my-3 mb-32 bg-white rounded-lg shadow-lg md:w-1/3 sm:w-full">
    <div class="flex justify-between px-5 py-4 border-b border-gray-100">
          <div>
          <i class="text-orange-500 fa fa-exclamation-triangle"></i>
          <span class="text-lg font-bold text-gray-700">No results found</span>
          </div>
          <div>
          <button><i class="text-red-500 transition duration-150 fa fa-times-circle hover:text-red-600"></i></button>
          </div>
      </div>
  
      <div class="px-10 py-5 text-gray-600">
      Sorry, we don't have what you're looking for.
      </div>
  
      <div class="flex justify-end px-5 py-4">
      <a href="{{url('/')}}"class="px-3 py-2 mr-1 text-sm text-white transition duration-150 bg-orange-500 rounded hover:bg-orange-600">OK</a>
      </div>
</div>
@endif
    
@endsection

@section('customJS')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/carousel.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/modal.js"></script>
@endsection
