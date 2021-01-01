@extends('layout.layout')

@section('title', 'Inspect | Dashboard')

@section('customCSS')
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
@endsection

@section('content')
    <div x-data={show:false}>
        <div class="container mx-auto mt-10 w-full flex justify-end">
            <button @click="show=!show"
                    class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 active:bg-teal-800 focus:outline-none focus:border-teal-900 focus:ring ring-teal-300 disabled:opacity-25 transition ease-in-out duration-150"
                    type="button">
                ADD A NEW PROJECT
            </button>
        </div>
        <div

            class="py-4 "
        >
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8"
            >
                <div
                    style="" x-ref="addProject"
                    x-bind:style="show == true ? 'max-height: ' + $refs.addProject.scrollHeight + 'px' : ''"
                    class="overflow-hidden max-h-0 transform transition-all duration-500 bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="/create-new-project">
                            @csrf
                            <div class="mt-4">
                                <x-label for="name" :value="__('Project Name')"/>
                                <x-input id="name" class="block w-full mt-1" type="text" name="name"
                                         :value="old('name')"
                                         required autofocus/>
                            </div>
                            <div class="mt-4">
                                <x-label for="description" :value="__('Description')"/>
                                <x-input id="description" class="block w-full mt-1" type="text" name="description"
                                         :value="old('description')" required autofocus/>
                            </div>
                            <div class="mt-4">
                                <x-label for="address" :value="__('Address')"/>
                                <x-input id="address" class="block w-full mt-1" type="text" name="address"
                                         :value="old('address')" required autofocus/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('create project') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-col">
        <div class="overflow-x-auto ">
            <div class="pt-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div x-data={selected:null} class="shadow  bg-white overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="grid grid-cols-10 py-2 px-5 bg-gray-200 gap-2 uppercase font-semibold text-gray-500 ">
                        <div class="">Index</div>
                        <div class="col-span-3">Project name</div>
                        <div class="col-span-2">Address</div>
                        <div class="">status</div>
                        <div class="">Total Estates</div>
                        <div class=""></div>
                    </div>
                    <div class="grid grid-cols-10 px-5 py-2 gap-2 text-gray-700 bg-white ">
                        <div class="truncate">1</div>
                        <div class="col-span-3 truncate">
                            <img class="rounded-full inline mr-3 w-8 h-8"
                                 src="https://via.placeholder.com/600x400.png/d9fbff/85afff?text=khaled" alt="">
                            khaled
                        </div>
                        <div class="col-span-2 inline truncate">20, meed eazxczxczxcsdasd asdasd</div>
                        <div class="truncate">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
                        </div>
                        <div class="truncate">32</div>
                        <div class="">
                            <button
                                type="button"
                                @click="selected !== 1 ? selected = 1 : selected = null"
                                class=" w-full flex justify-center py-2 px-4 cursor-pointer border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Edit
                            </button>
                        </div>
                        <div class="">
                            <button
                                type="button"
                                @click="selected !== 1 ? selected = 1 : selected = null"
                                class=" w-full flex justify-center py-2 px-4 cursor-pointer border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>
                        </div>
                    </div>
                    <section class="bg-white overflow-hidden transition-all max-h-0 duration-700"
                             style="" x-ref="container1"
                             x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">

                        <div class=" container mx-auto  flex flex-wrap justify-center bg-white items-center w-3/4 ">
                            <div class="w-full flex justify-center items-center flex-wrap ">
                                <div
                                    class="w-full">
                                    <div class="flex flex-wrap mt-6">
                                        <div class="w-full md:w-2/5">
                                            <div
                                                style="background-image: url('https://dummyimage.com/600x400/F3F4F7/8693ac')"
                                                class="relative w-56 h-56 mx-auto bg-center bg-no-repeat bg-cover rounded-full shadow-md md:mx-0">
                                                <a href="">
                                                    <div
                                                        class="absolute p-3 bg-gray-100 rounded-full shadow-md edit-photo">
                                                        <i class="text-xl text-gray-600 far fa-edit"></i>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div
                                            class="self-center w-full transition-colors duration-200 ease-in-out md:w-3/5">
                                            <div class="w-full px-3 ">
                                                <label
                                                    class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                                    for="name">
                                                    Project Name
                                                </label>
                                                <input
                                                    class="block w-full px-4 py-2 mt-2 mb-4 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                                    id="name" type="text" placeholder="Project Name">
                                            </div>
                                            <div class="w-full px-3 ">
                                                <label
                                                    class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                                    for="address">
                                                    Address
                                                </label>
                                                <input
                                                    class="block w-full px-4 py-2 mt-2 mb-4 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                                    id="address" type="text" placeholder="your@email.com">
                                            </div>
                                            <div class="mt-8 textarea-container">
                                                <label id="tell"
                                                       class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                                       for="story"
                                                >Tell us about the project</label
                                                >
                                                <textarea
                                                    class="block w-full p-2 mt-2 border-2 border-solid outline-none bg-gray-100 focus:border-gray-500 focus:bg-white focus:ring-0"
                                                    id="story"
                                                    name="message"
                                                    rows="7"
                                                    placeholder="Enter your message here."
                                                ></textarea>
                                                <small class="ml-4 text-gray-600"
                                                >The more details the better!</small
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="" x-data={selectedChild:null}>
                        <button
                            type="button"
                            @click="selectedChild !== 1 ? selectedChild = 1 : selectedChild = null"
                            class=" w-full flex justify-center py-2 px-4 cursor-pointer border border-transparent text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            First Estate
                        </button>
                        <div
                            class="container mx-auto w-2/3 transition-all overflow-hidden max-h-0 duration-700"
                            style="" x-ref="selectedChildContainer1"
                            x-bind:style="selectedChild == 1 ? 'max-height: ' + $refs.selectedChildContainer1.scrollHeight + 'px' : ''"
                            class=" w-full h-auto bg-white">
                            <form class="my-6" action="#" method="POST">
                                <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                        <label
                                            class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                            for="name" minlength="6">
                                            Your Name
                                        </label>
                                        <input
                                            class="block w-full px-4 py-2 mt-2 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                            id="name" type="text" placeholder="Your name">
                                    </div>
                                    <div class="w-full px-3 md:w-1/2">
                                        <label
                                            class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                            for="email">
                                            Email
                                        </label>
                                        <input
                                            class="block w-full px-4 py-2 mt-2 mb-4 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                            id="email" type="text" placeholder="your@email.com">
                                    </div>
                                </div>
                                <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                        <label
                                            class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                            for="name" minlength="6">
                                            Your Name
                                        </label>
                                        <input
                                            class="block w-full px-4 py-2 mt-2 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                            id="name" type="text" placeholder="Your name">
                                    </div>
                                    <div class="w-full px-3 md:w-1/2">
                                        <label
                                            class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                            for="email">
                                            Email
                                        </label>
                                        <input
                                            class="block w-full px-4 py-2 mt-2 mb-4 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                            id="email" type="text" placeholder="your@email.com">
                                    </div>
                                </div>
                                <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                        <label
                                            class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                            for="name" minlength="6">
                                            Your Name
                                        </label>
                                        <input
                                            class="block w-full px-4 py-2 mt-2 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                            id="name" type="text" placeholder="Your name">
                                    </div>
                                    <div class="w-full px-3 md:w-1/2">
                                        <label
                                            class="text-sm font-medium leading-relaxed tracking-tighter text-gray-700"
                                            for="email">
                                            Email
                                        </label>
                                        <input
                                            class="block w-full px-4 py-2 mt-2 mb-4 text-base bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                            id="email" type="text" placeholder="your@email.com">
                                    </div>
                                </div>
                                <button
                                    class="block w-1/5 ml-auto px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:ring focus:outline-none">
                                    Submit
                                </button>
                            </form>
                        </div>
                        <button
                            type="button"
                            @click="selectedChild !== 2 ? selectedChild = 2 : selectedChild = null"
                            class="block  w-full ml-auto uppercase px-4 py-3 mt-1 font-semibold text-white transition duration-500 ease-in-out transform  bg-green-600 hover:bg-green-700 focus:ring focus:outline-none">
                            Add Estate
                        </button>
                        <div
                            class="transition-all overflow-hidden bg-white max-h-0 duration-700"
                            style="" x-ref="selectedChildContainer2"
                            x-bind:style="selectedChild == 2 ? 'max-height: ' + $refs.selectedChildContainer2.scrollHeight + 'px' : ''"
                        >
                            adddadadad
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--    <div class="bg-white px-S4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">--}}
    {{--        <div class="flex-1 flex justify-between sm:hidden">--}}
    {{--            <a href="#"--}}
    {{--               class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">--}}
    {{--                Previous--}}
    {{--            </a>--}}
    {{--            <a href="#"--}}
    {{--               class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">--}}
    {{--                Next--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">--}}
    {{--            <div>--}}
    {{--                <p class="text-sm text-gray-700">--}}
    {{--                    Showing--}}
    {{--                    <span class="font-medium">1</span>--}}
    {{--                    to--}}
    {{--                    <span class="font-medium">10</span>--}}
    {{--                    of--}}
    {{--                    <span class="font-medium">97</span>--}}
    {{--                    results--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--            <div>--}}
    {{--                <nav class="relative z-0 inline-flex shadow-sm -space-x-px" aria-label="Pagination">--}}
    {{--                    <a href="#"--}}
    {{--                       class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">--}}
    {{--                        <span class="sr-only">Previous</span>--}}
    {{--                        <!-- Heroicon name: chevron-left -->--}}
    {{--                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
    {{--                             aria-hidden="true">--}}
    {{--                            <path fill-rule="evenodd"--}}
    {{--                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"--}}
    {{--                                  clip-rule="evenodd"/>--}}
    {{--                        </svg>--}}
    {{--                    </a>--}}
    {{--                    <a href="#"--}}
    {{--                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">--}}
    {{--                        1--}}
    {{--                    </a>--}}
    {{--                    <a href="#"--}}
    {{--                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">--}}
    {{--                        2--}}
    {{--                    </a>--}}
    {{--                    <a href="#"--}}
    {{--                       class="hidden md:inline-flex relative items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">--}}
    {{--                        3--}}
    {{--                    </a>--}}
    {{--                    <span--}}
    {{--                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">--}}
    {{--          ...--}}
    {{--        </span>--}}
    {{--                    <a href="#"--}}
    {{--                       class="hidden md:inline-flex relative items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">--}}
    {{--                        8--}}
    {{--                    </a>--}}
    {{--                    <a href="#"--}}
    {{--                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">--}}
    {{--                        9--}}
    {{--                    </a>--}}
    {{--                    <a href="#"--}}
    {{--                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">--}}
    {{--                        10--}}
    {{--                    </a>--}}
    {{--                    <a href="#"--}}
    {{--                       class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">--}}
    {{--                        <span class="sr-only">Next</span>--}}
    {{--                        <!-- Heroicon name: chevron-right -->--}}
    {{--                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
    {{--                             aria-hidden="true">--}}
    {{--                            <path fill-rule="evenodd"--}}
    {{--                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
    {{--                                  clip-rule="evenodd"/>--}}
    {{--                        </svg>--}}
    {{--                    </a>--}}
    {{--                </nav>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection

@section('customJS')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
