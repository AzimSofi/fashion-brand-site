<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased d-flex flex-column min-vh-100">
    <div class="flex-grow-1">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <!-- Footer -->
    <footer class="d-flex align-items-center justify-content-center py-4 mt-auto border-top border-2"
        style="background-color: #F1F1F1;">
        <p class="text-black m-0"> Copyright © 2025, Fashion Clothing Store. All Rights Reserved.</p>
    </footer>
</body>

</html>
