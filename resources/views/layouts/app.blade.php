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
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <div class="flex justify-center items-center" style="margin-top: 5rem">
                <img src="{{ url('logo.png') }}" class="h-14 rounded-md" alt="logo" style="margin-right: 1.5rem">
                <h2 style="font-size: 4rem" class="font-semibold">Fanthom Store</h2>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <x-footer />
        </div>
    </body>
</html>
