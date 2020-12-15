@extends('layout.layout')

@section('title', 'Inspect | Browse Companies')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/all-projects.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content')
<section class='flex p-32 py-32'>
    <div class='my-12 lg:w-1/2 sm:w-full m:w-full lg:text-left sm:text-center md:text-center'>
        <h1 class="text-xl font-bold text-black lg:text-4xl">We provide creativity, innovation, sustainability and harmony</h1>
        <p class='mb-12 text-lg text-gray-700 lg:text-2xl'> All your properties guaranteed</p>
        <div class='justify-center w-full lg:flex md:flex lg:justify-start'>
            <a href='http://localhost/our-beautiful-project/public/all-projects#projects' class='px-12 py-3 mt-6 mr-5 rounded-sm shadow-md bg-button1'>Browse Projects</a>
            <a href='#companies' class='px-12 py-3 mt-6 rounded-sm shadow-md bg-button2'>Browse Companies</a>
        </div>
    </div>
    <div class='hidden w-1/2 lg:block'>
        <img src='http://localhost/our-beautiful-project/resources/img/house-5.jpg'>
    </div>

</section>

    <h1 id='companies' class='pl-32 text-xl font-bold lg:text-3xl '>Available Companies</h1>
    <div class="container px-4 mx-auto my-12 md:px-12">
    <div class="flex flex-wrap justify-center w-full -mx-1 lg:-mx-4">

        <!-- Column -->
        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <!-- Article -->
            <article class="justify-center w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                <a href="{{ route('company') }}"  class='justify-center w-full h-full' href="#">
                    <div class='w-full h-full cont'>
                        <img alt="Placeholder" class="block object-fill w-full h-full" src="http://localhost/our-beautiful-project/resources/img/companies-logo/4aqaar-realestate.jpg">                
                        <a href="{{ route('company') }}" class="btn">View Company</a>
                    </div>
                </a>
              
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                <a href="{{ route('company') }}"  class='justify-center w-full h-full' href="#">
                    <div class='w-full h-full cont'>
                        <img alt="Placeholder" class="block object-fill w-full h-full" src="http://localhost/our-beautiful-project/resources/img/companies-logo/halic-property.jpg">                
                        <a href="{{ route('company') }}" class="btn">View Company</a>
                    </div>
                </a>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                <a href="{{ route('company') }}"  class='justify-center w-full h-full' href="#">
                    <div class='w-full h-full cont'>
                        <img alt="Placeholder" class="block object-fill w-full h-auto" src="http://localhost/our-beautiful-project/resources/img/companies-logo/amlak.jpg">                
                        <a href="{{ route('company') }}" class="btn">View Company</a>
                    </div>
                </a>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                <a href="{{ route('company') }}"  class='justify-center w-full h-full' href="#">
                    <div class='w-full h-full cont'>
                        <img alt="Placeholder" class="block object-fill w-full h-full" src="http://localhost/our-beautiful-project/resources/img/companies-logo/halic-property.jpg">                
                        <a href="{{ route('company') }}" class="btn">View Company</a>
                    </div>
                </a>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                <a href="{{ route('company') }}"  class='justify-center w-full h-full' href="#">
                    <div class='w-full h-full cont'>
                        <img alt="Placeholder" class="block object-fill w-full h-full" src="http://localhost/our-beautiful-project/resources/img/companies-logo/amlak.jpg">                
                        <a href="{{ route('company') }}" class="btn">View Company</a>
                    </div>
                </a>


            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="w-full h-full overflow-hidden rounded-lg shadow-lg pro">

                <a href="{{ route('company') }}"  class='justify-center w-full h-full' href="#">
                    <div class='w-full h-full cont'>
                        <img alt="Placeholder" class="block object-fill w-full h-full" src="http://localhost/our-beautiful-project/resources/img/companies-logo/4aqaar-realestate.jpg">                
                        <a href="{{ route('company') }}" class="btn">View Company</a>
                    </div>
                </a>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    </div>
</div>
    

  
@endsection

@section('customJS')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/carousel.js"></script>
<script src="http://localhost/our-beautiful-project/resources/js/modal.js"></script>
@endsection