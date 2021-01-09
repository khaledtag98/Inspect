@extends('layout.layout')

@section('content')
<div class="px-10 py-10 sm:mt-0">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{url('save-estate')}}" method="GET">
                @csrf
                <input name="id" type="hidden" value="{{$project_id}}">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="first_name" autocomplete="given-name"
                                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>


                            <div class="col-span-6 sm:col-span-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="description" name="description" rows="5" value=""
                                              class="block w-full p-2 my-2 mt-1 transition-all duration-300 ease-in-out bg-gray-200 border rounded-md outline-none focus:bg-white focus:border-gray-500 sm:text-sm"
                                              placeholder=""></textarea>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                                <select id="type" name="type" autocomplete="type"
                                        class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Apartment</option>
                                    <option>Chalet</option>
                                    <option>Land</option>
                                </select>
                            </div>

                            <div class="col-span-4">
                                <label for="prices" class="block text-sm font-medium text-gray-700">Price</label>
                                <input type="number" name="price" id="price"
                                       autocomplete="street-address"
                                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                <label for="block" class="block text-sm font-medium text-gray-700">Block</label>
                                <input type="text" name="block" id="block"
                                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                <label for="floor" class="block text-sm font-medium text-gray-700">Floor</label>
                                <input type="number" name="floor" id="floor"
                                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            
                            
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Add
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection