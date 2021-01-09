@extends('layout.layout')

@section('title', 'Inspect |Edit Project')

@section('customCSS')
@endsection

@section('content')
    <div class="container mx-auto my-20">
        <div class="">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Project Information</h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">

                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">

                    <div class="px-4 sm:px-0">

                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="POST" action="{{route('editProject')}}">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                <input type="hidden" name="id" value="{{$project->id}}">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="font-semibold text-gray-800 text-md">Project Name</label>
                                        <input type="text" id="name" name="name" value="{{$project->name}}" placeholder=""
                                               class="w-full px-4 py-2 my-2 mr-4 text-base text-blue-700 transition-all duration-300 ease-in-out bg-gray-200 border rounded-lg outline-none focus:border-gray-500 focus:bg-white focus:ring-0">
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="font-semibold text-gray-800 text-md">Project Address</label>
                                        <input type="text" id="address" name="address" value="{{$project->address}}" placeholder=""
                                               class="w-full px-4 py-2 my-2 mr-4 text-base text-blue-700 transition-all duration-300 ease-in-out bg-gray-200 border rounded-lg outline-none focus:border-gray-500 focus:bg-white focus:ring-0">
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="about" class="block font-semibold text-gray-800 text-md">
                                            Description
                                        </label>
                                        <div class="mt-1">
                                    <textarea id="description" name="description" rows="5" value=""
                                              class="block w-full p-2 my-2 mt-1 transition-all duration-300 ease-in-out bg-gray-200 border rounded-md outline-none focus:bg-white focus:border-gray-500 sm:text-sm"
                                              placeholder=""></textarea>
                                        </div>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Brief description for your profile.
                                            </p>
                                    </div>
                                </div>

                                <div>
                                    <label for="picture" class="block text-sm font-medium text-gray-700">
                                        Photo
                                    </label>
                                    <div class="flex items-center mt-2">
                                     <img class="w-12 h-12 mr-3 rounded-full" src="{{$project->picture}}">
                                        <input type="text" id="picture" name="picture" value=""
                                               placeholder=""
                                               class="w-full px-4 py-2 my-2 mr-4 text-base text-blue-700 transition-all duration-300 ease-in-out bg-gray-200 border rounded-lg outline-none focus:border-gray-500 focus:bg-white focus:ring-0">
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                    <button type="submit"
                                            class="inline-flex justify-center px-8 py-2 mr-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                    <a
                                        href="/dashboard"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        cancel
                                    </a>
                                </div>

                            </div>


                        </div>
                    </form>

                </div>

            </div>
        </div>
        <div class="">
            <div class="flex grid w-full mt-6 mb-6 justify-items-stretch">
                <h1 class="text-3xl justify-self-start">Current Properties</h1>
                <div class="px-4 sm:px-0 justify-self-end">
                    <a href="/add-estate/{{$project->id}}" class="px-3 py-2 my-2 bg-button1">Add a new property</a>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-2 py-2 font-semibold text-gray-500 uppercase bg-gray-200 ">
                <div class="col-span-3">Property name</div>
                <div class="col-span-2">Price</div>
                <div class="col-span-2">Block</div>
                <div class="col-span-2">Floor</div>
                <div class="col-span-2">Created at</div>
            </div>

        @foreach ($estate as $estates)

                    <div class="grid grid-cols-12 gap-2 py-2 text-gray-700 bg-white border-b">
                        <div class="text-center truncate"></div>
                        <div class="col-span-2 truncate">
                            <img class="inline w-8 h-8 mr-3 rounded-full"
                                 src="" alt="">
                            {{$estates->name}}
                        </div>
                        <div class="inline col-span-2 truncate">{{$estates->price}}</div>
                        <div class="inline col-span-2 truncate">{{$estates->block}}</div>
                        <div class="inline col-span-2 truncate">{{$estates->floor}}</div>
                        <div class="col-span-1 truncate ">{{$estates->created_at}}</div>
                        <div >
                            <a href="/edit-estate/{{$project->id}}/{{$estates->id}}" class="text-blue-700 cursor-pointer hover:underline">
                                edit
                            </a>
                        </div>
                        <div class="">

                            <a href="/edit-project/{{$project->id}}/{{$estates->id}}" class="text-blue-700 cursor-pointer hover:underline">
                                Delete
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
    </div>

@endsection

