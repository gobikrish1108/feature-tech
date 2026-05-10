<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UN Digital Marketing Services</title>
    <meta name="description" content="UN Digital Marketing single page website built with Laravel Livewire and Tailwind CSS.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800,900" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('site.css') }}">
        <script type="module" src="{{ asset('site.js') }}" defer></script>
    @endif
    @livewireStyles
</head>
<body class="bg-white font-sans text-slate-950 antialiased">
    {{ $slot }}

    @livewireScripts
</body>
</html>
