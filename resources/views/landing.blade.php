@extends('layout.layout')

@section('title', 'Inspect')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/landing.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content')
<section class="h-screen bg-center bg-no-repeat bg-cover hero_section">
    <div class="container flex items-center px-8 pt-32 mx-auto lg:px-16 lg:pb-12">
        <div class="w-full lg:w-3/5 ">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <section class="max-w-screen-xl px-4 mx-auto mt-10 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2
                            class="inline-flex px-3 text-lg tracking-tighter text-teal-800 rounded-full select-none Badge-primary-color sm:text-xl">
                            Welcome
                        </h2>
                        <div class="mt-3 text-4xl font-medium leading-none tracking-tight sm:text-5xl xxl:text-6xl">
                            <h1>Reimagine home</h1>
                        </div>
                        <div
                            class="mt-3 text-base leading-8 text-gray-700 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </div>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div>
                                <a href="#collections"
                                    class="px-12 py-3 mt-6 mr-5 rounded-sm shadow-md bg-button1">Explore now</a>
                            </div>
                            <div class="mt-6 sm:mt-0 sm:ml-3">
                                <a href="#"
                                    class="px-12 py-3 mt-6 rounded-sm shadow-md bg-button2">Find what suits you</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="hidden lg:block lg:w-2/5">
            <h2
                class="inline-flex px-3 mb-4 text-lg tracking-tighter text-black rounded-full select-none Badge-primary-color ">
                Vendors
            </h2>
            <div>
                <div class=" slider">
                    @for($i = 0; $i < 10; $i++)
                        <div class="outline-none">
                            <img src="http://localhost/our-beautiful-project/resources/img/companies-logo/1.png" alt="">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container px-8 mx-auto lg:px-16">
        <h2 class="text-4xl font-semibold text-indigo-900">Categories</h2>
        <!-- This is an example component -->
        <div class="py-5">
            <div class=" Categories">
                <div class="m-5 outline-none cursor-pointer">
                    <div class="flex items-center p-4 bg-green-100 rounded-md shadow-lg hover:bg-green-200 ">
                        <div class="p-3 mr-4 text-green-500 bg-green-200 rounded-full ">
                            <img class="w-8" src="http://localhost/our-beautiful-project/resources/img/icons/house.svg"
                                alt="">

                        </div>
                        <div>
                            <p class="mb-2 text-lg font-medium text-gray-700 outline-none ">
                                Apartments
                            </p>

                        </div>
                    </div>
                </div>

                <div class="m-5 outline-none cursor-pointer">
                    <div class="flex items-center p-4 bg-purple-100 rounded-md shadow-lg hover:bg-purple-200 ">
                        <div class="p-3 mr-4 text-teal-500 bg-purple-200 rounded-full dark:text-teal-100 ">
                            <img class="w-8" src="http://localhost/our-beautiful-project/resources/img/icons/house.svg"
                                alt="">
                        </div>
                        <div>
                            <p class="mb-2 text-lg font-medium text-gray-700 dark:text-gray-400">
                                Chalet
                            </p>

                        </div>
                    </div>
                </div>
                <div class="m-5 outline-none cursor-pointer">
                    <div class="flex items-center p-4 bg-red-100 rounded-md shadow-lg hover:bg-red-200 ">
                        <div class="p-3 mr-4 text-teal-500 bg-red-200 rounded-full dark:text-teal-100 ">
                            <img class="w-8" src="http://localhost/our-beautiful-project/resources/img/icons/house.svg"
                                alt="">
                        </div>
                        <div>
                            <p class="mb-2 text-lg font-medium text-gray-700 dark:text-gray-400">
                                Land
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="collections" class="my-12 text-gray-700 body-font">
    <div class="container px-8 py-24 mx-auto lg:px-16">
        <h2 class="mb-8 text-4xl font-semibold text-indigo-900">Avalible collections</h2>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 land-category md:w-1/3">
                <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                    <img class="object-cover object-center w-full lg:h-48 md:h-36"
                        src="http://localhost/our-beautiful-project/resources/img/house-1.jpg" alt="blog">
                    <div class="p-6">
                        <div class="category">
                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Land</h2>
                        </div>
                        <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The Catalyzer</h1>
                        <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                            jianbing microdosing tousled waistcoat.</p>
                        <div class="flex flex-wrap items-center ">
                            <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 lg:mb-0 modal-open">Learn More
                                <x-modal/>

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
                        <div class="category">
                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Apartment</h2>
                        </div>
                        <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
                        <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                            jianbing microdosing tousled waistcoat.</p>
                        <div class="flex flex-wrap items-center">
                            <a class="inline-flex items-center text-indigo-500 cursor-pointer md:mb-2 modal-open lg:mb-0">Learn More
                                <x-modal/>

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
    </div>
</section>
<section>
    <div class="container px-8 mx-auto lg:px-16">
    <div class="projects">
        <h2 class="mb-8 text-4xl font-semibold text-indigo-900">Projects</h2>
    </div>
</div>
</section>
@endsection
@section('customJS')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/carousel.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/modal.js"></script>
@endsection
