<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dr Abi') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre Franklin:wght@400&display=swap" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <!-- Navigation -->
    @include('livewire.layout.navigation')

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('livewire.layout.footer')

    @livewireScripts
</body>

</html>
