@extends('layout.layout')

@section('title', 'Available Projects')

@section('customCSS')
<link rel="stylesheet" href="{{ asset('styles') }}/all-projects.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content')
<section class='flex p-32 py-48'>
    <div class='w-1/2 my-12'>
        <h1 class="text-4xl font-bold text-black">We provide creativity, innovation, sustainability and harmony</h1>
        <p class='mb-12 text-2xl text-gray-700'> All your properties guaranteed</p>
        <div class='flex w-full'>
            <a href='#projects' class='px-12 py-3 mt-6 mr-5 rounded-sm shadow-md bg-button1'>Browse Projects</a>
            <a href='#companies' class='px-12 py-3 mt-6 rounded-sm shadow-md bg-button2'>Browse Companies</a>
        </div>
    </div>
    <div class='w-1/2'>
        <img src='http://localhost/our-beautiful-project/resources/img/house-5.jpg'>
    </div>

</section>
<section class='container'>
    <h1 id='projects' class='px-32 pt-24 pb-10 text-3xl font-bold'>Available Projects</h1>
    <div class='flex flex-wrap px-32'>
        <div class="p-4 land-category md:w-1/3">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                    src="http://localhost/our-beautiful-project/resources/img/house-1.jpg" alt="blog">
                <div class="p-6">
                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The Catalyzer</h1>
                    <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                        jianbing microdosing tousled waistcoat.</p>
                    <div class="flex flex-wrap items-center ">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 lg:mb-0 modal-open">Learn More
                            <x-modal/>
                            @yield('modal')    
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span
                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600 border-r-2 border-gray-300 lg:ml-auto md:ml-0">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="inline-flex items-center text-sm leading-none text-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 apartment-category md:w-1/3">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                    src="http://localhost/our-beautiful-project/resources/img/house-2.jpg" alt="blog">
                <div class="p-6">
                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
                    <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                        jianbing microdosing tousled waistcoat.</p>
                    <div class="flex flex-wrap items-center">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 modal-open lg:mb-0">Learn More
                            <x-modal/>
                            @yield('modal')
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span
                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600 border-r-2 border-gray-300 lg:ml-auto md:ml-0">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="inline-flex items-center text-sm leading-none text-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 apartment-category md:w-1/3">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                    src="http://localhost/our-beautiful-project/resources/img/house-3.jpg" alt="blog">
                <div class="p-6">
                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
                    <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                        jianbing microdosing tousled waistcoat.</p>
                    <div class="flex flex-wrap items-center">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 modal-open lg:mb-0">Learn More
                            <x-modal/>
                            @yield('modal')
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span
                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600 border-r-2 border-gray-300 lg:ml-auto md:ml-0">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="inline-flex items-center text-sm leading-none text-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <h1 id='companies' class='px-32 pt-24 pb-10 text-3xl font-bold'>All Companies</h1>
    <div class='flex flex-wrap px-32'>
        <div class="p-4 land-category md:w-1/3">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                    src="http://localhost/our-beautiful-project/resources/img/house-1.jpg" alt="blog">
                <div class="p-6">
                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The Catalyzer</h1>
                    <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                        jianbing microdosing tousled waistcoat.</p>
                    <div class="flex flex-wrap items-center ">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 lg:mb-0 modal-open">Learn More
                            <x-modal/>
                            @yield('modal')    
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span
                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600 border-r-2 border-gray-300 lg:ml-auto md:ml-0">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="inline-flex items-center text-sm leading-none text-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 apartment-category md:w-1/3">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                    src="http://localhost/our-beautiful-project/resources/img/house-2.jpg" alt="blog">
                <div class="p-6">
                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
                    <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                        jianbing microdosing tousled waistcoat.</p>
                    <div class="flex flex-wrap items-center">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 modal-open lg:mb-0">Learn More
                            <x-modal/>
                            @yield('modal')
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span
                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600 border-r-2 border-gray-300 lg:ml-auto md:ml-0">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="inline-flex items-center text-sm leading-none text-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 apartment-category md:w-1/3">
            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                    src="http://localhost/our-beautiful-project/resources/img/house-3.jpg" alt="blog">
                <div class="p-6">
                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
                    <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                        jianbing microdosing tousled waistcoat.</p>
                    <div class="flex flex-wrap items-center">
                        <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 modal-open lg:mb-0">Learn More
                            <x-modal/>
                            @yield('modal')
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span
                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600 border-r-2 border-gray-300 lg:ml-auto md:ml-0">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="inline-flex items-center text-sm leading-none text-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section> 
  
@endsection

@section('customJS')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/carousel.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/modal.js"></script>
@endsection