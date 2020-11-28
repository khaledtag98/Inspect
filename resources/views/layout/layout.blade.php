<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- main CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/tailwind.css">
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/app.css">
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/NavBar.css">
    <link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/footer.css">
    {{-- custom CSS --}}
    @yield('customCSS')
</head>

<body>
    <x-Navbar />
    @yield('content')
    <x-Footer />
    {{-- main JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="http://localhost/our-beautiful-project/resources/js/NavBar/jquery-3.0.0.min.js"></script>
    <script src="http://localhost/our-beautiful-project/resources/js/NavBar/modernizr-custom.js"></script>
    <script src="http://localhost/our-beautiful-project/resources/js/NavBar/NavBar.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="http://localhost/our-beautiful-project/resources/js/AOS.js"></script>
    {{-- Custom JS --}}
    @yield('customJS')
</body>

</html>
