<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* Add dark mode styles */
        /* Add gray mode styles */
       
       
        .theme-icon {
            font-size: 24px;
            cursor: pointer;
            color: #b3d1ff; /* Initial color */
        }

        .theme-icon.active {
            color: white; /* Color when theme is active */
        }

        .gray-container {
            background-color: #f0f0f0; /* Light gray background */
            padding: 20px; /* Add padding for spacing */
            border-radius: 8px; /* Optional: Add rounded corners */
            margin: 20px auto; /* Optional: Center the container */
        }
    </style>

   
</head>
<body >

    <div id="app">

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        
    </body>
    