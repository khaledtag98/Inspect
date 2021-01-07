@extends('layout.layout')

@section('title', 'Inspect | Dashboard')

@section('customCSS')
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
@endsection

@section('content')
    <div class="bg-white py-5 px-10 my-8 w-3/5 mx-auto shadow-sm">
        <div class="flex">
            <div class="w-1/3">
                <img class="w-40 h-40 rounded-full" src="{{$company->picture}}">
            </div>
            <div class="w-2/3 self-center">
                <h3 class="text-2xl font-semibold text-blue-800">{{$company->name}}</h3>
                <p class="text-blue-800">{{$company->description}}</p>
            </div>
        </div>
    </div>
    <div x-data={show:false}>
        <div class="container flex justify-end w-full mx-auto mt-10">
            <button @click="show=!show"
                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-teal-600 border border-transparent rounded-md hover:bg-teal-600 active:bg-teal-800 focus:outline-none focus:border-teal-900 focus:ring ring-teal-300 disabled:opacity-25"
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
                    class="overflow-hidden transition-all duration-500 transform bg-white shadow-sm max-h-0 sm:rounded-lg"
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


    <div class="flex flex-col my-10">
        <div class="overflow-x-auto ">

            <div class=" align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div
                     class="shadow w-5/6 mx-auto bg-white overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="grid grid-cols-12 py-2  bg-gray-200 gap-2 uppercase font-semibold text-gray-500 ">
                        <div class="text-center">Index</div>
                        <div class="col-span-3">Project name</div>
                        <div class="col-span-2">Address</div>
                        <div class="col-span-2">Total Estates</div>
                        <div class="col-span-2">created at</div>
                    </div>

                    @if($projects)
                    @foreach($projects as $key=>$project)
                        <div class="grid grid-cols-12 py-2 gap-2 text-gray-700 bg-white border-b">
                            <div class="truncate text-center">{{$key+1}}</div>
                            <div class="col-span-3 truncate">
                                <img class="rounded-full inline mr-3 w-8 h-8"
                                     src="{{$project->picture}}" alt="">
                                {{$project->name}}
                            </div>
                            <div class="col-span-2 inline truncate">{{$project->address}}</div>
                            <div class="truncate col-span-2 ">32</div>
                            <div class="truncate col-span-2 ">{{$project->created_at->format('M, d Y')}}</div>
                            <div >
                                <a href="{{"edit-project/".$project->id}}" class="text-blue-700 hover:underline cursor-pointer">
                                    edit
                                </a>
                            </div>
                            <div class="">
                                <a href="{{"delete/".$project->id}}" class="text-blue-700 hover:underline cursor-pointer">
                                    Delete
                                </a>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <div class="py-2 gap-2 text-gray-700 bg-white border-b">
                            <h1 class="text-center">No projects</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJS')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
