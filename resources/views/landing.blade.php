@extends('layout.layout')

@section('title', 'Real-Estate')

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
                                <a href=""
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent shadow bg-primary-color btn hover-no-underline focus:outline-none focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">Explore
                                    now</a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out border border-transparent border-primary-color btn hover-no-underline focus:outline-none focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">Find
                                    the best for you</a>
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
        <div class="flex flex-wrap py-12">
            <div class="w-1/4 bg-white rounded">
                <div><img class="w-10 h-10 m-auto"
                        src="http://localhost/our-beautiful-project/resources/img/icons/house.svg" alt="buy house">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-center">Home</h3>
                </div>
                <div class="flex items-center justify-center h-16 cursor-pointer">
                    <div class="arrowFromLeft"><svg xmlns="http://www.w3.org/2000/svg" width="5.002" height="8.576"
                            viewBox="0 0 5.002 8.576">
                            <path
                                d="M1.06,8.428a.5.5,0,0,1-.71,0l-.2-.2A.49.49,0,0,1,0,7.868V.708A.49.49,0,0,1,.15.348l.2-.2a.5.5,0,0,1,.71,0l3.79,3.79a.48.48,0,0,1,0,.7Z">
                            </path>
                        </svg><span class="text-lg font-semibold">Hover me</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>

    <section class="my-12 text-gray-700 body-font">
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
                                <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
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
                                <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
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
                <div class="p-4 chalet-category md:w-1/3">
                    <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                        <img class="object-cover object-center w-full lg:h-48 md:h-36"
                            src="http://localhost/our-beautiful-project/resources/img/house-3.jpg" alt="blog">
                        <div class="p-6">
                            <div class="category">
                                <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Chalet</h2>
                            </div>
                            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                            <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <div class="flex flex-wrap items-center ">
                                <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
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
                <div class="p-4 land-category md:w-1/3">
                    <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                        <img class="object-cover object-center w-full lg:h-48 md:h-36"
                            src="http://localhost/our-beautiful-project/resources/img/house-4.jpg" alt="blog">
                        <div class="p-6">
                            <div class="category">
                                <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Land</h2>
                            </div>
                            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                            <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <div class="flex flex-wrap items-center ">
                                <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
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
                <div class="p-4 chalet-category md:w-1/3">
                    <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg">
                        <img class="object-cover object-center w-full lg:h-48 md:h-36"
                            src="http://localhost/our-beautiful-project/resources/img/house-5.jpg" alt="blog">
                        <div class="p-6">
                            <div class="category">
                                <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Chalet</h2>
                            </div>
                            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                            <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <div class="flex flex-wrap items-center ">
                                <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Learn More
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
</section>
@endsection
@section('customJS')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slider').slick({
        dots: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true
                }
            },
        ]
    });

</script>
@endsection
{{-- <style scoped>
    .hero_section
{
    background-image: url("http://localhost/our-beautiful-project/resources/img/hero-section-bg.jpg")
}

</style> --}}
