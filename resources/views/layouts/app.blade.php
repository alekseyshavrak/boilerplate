<!doctype html>
<html lang="{{ app()->getLocale() }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>My first project with Laravel 8</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body id="app" class="bg-gray-50">

    <!-- Application -->
    <div class="relative">
        <livewire:layouts.header />
        <main>
            {{ $slot }}
        </main>
        <livewire:layouts.footer />
    </div>

    <!-- Notification -->
    <x-notification.toast />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</body>
</html>
