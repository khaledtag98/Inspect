{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    Company--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
@extends('layout.layout')

@section('title', 'dashboard')

@section('customCSS')
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/create-new-project">
                    @csrf
                        <div class="mt-4">
                            <x-label for="name" :value="__('Project Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="address" :value="__('Address')" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
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

@endsection

@section('customJS')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection