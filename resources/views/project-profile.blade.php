@extends('layout.layout')

@section('title', 'Inspect | Project Name')

@section('customCSS')
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/all-projects.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endsection

@section('content')

    <div class='flex flex-wrap mx-10 sm:container sm:mx-auto my-16'>
        <div class='w-full justify-center lg:w-1/3 bg-blue'>
            <h1 id='c_name' class='mb-6 text-2xl font-bold'>{{$project->name}}</h1>
            <div class="w-full mb-12 align-center">
                <img class="antialiased rounded-lg shadow-lg" src="{{$project->picture}}">
            </div>
            <h1 class='mt-6 mb-3 font-bold text-l'>Address</h1>
            <p id='c_address' class='text-l'>{{$project->address}}</p>
            <h1 class='mt-6 mb-3 font-bold text-l'>Phone Number(s)</h1>
            <p id='c_address' class='text-l'>010001000<br>0112901001</p>


        </div>
        <div class=' w-full lg:w-2/3'>
            <h1 class='mb-6 ml-16 text-2xl font-bold'>All properties</h1>
            <div class="container mx-20 ms:mx-16 md:pl-8 py-24 mx-auto lg:pl-10">
                <div class="flex flex-wrap -m-4">
                    @foreach($project->estates as $key=>$estate)
                        <div class="p-4 land-category md:w-1/2">
                            <div class="h-full flex flex-wrap overflow-hidden border-2 border-gray-200 rounded-lg">
                                <div class="w-full">
                                    <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                         src="{{$estate->picture}}"
                                         alt="blog">
                                </div>

                                <div class="w-full">
                                    <div class="p-6 flex flex-wrap h-full">
                                        <div class="category w-full">
                                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">{{$estate->type}}</h2>
                                        </div>
                                        <h1 class="mb-3 text-lg w-full font-medium text-gray-900 title-font">{{$estate->name}}</h1>
                                        <p class="mb-3 w-full leading-relaxed">{{$estate->description}}</p>
                                        <div class="flex justify-end w-full flex-wrap items-center ">
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
        </div>
    </div>




@endsection

@section('customJS')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="http://localhost/our-beautiful-project/resources/js/carousel.js"></script>
    <script src="http://localhost/our-beautiful-project/resources/js/modal.js"></script>
@endsection
