<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Devaraju R — Full Stack Laravel Developer')</title>
    <meta name="title" content="@yield('meta_title', 'Devaraju R — Full Stack Laravel Developer | TALL Stack Engineer')">
    <meta name="description" content="@yield('meta_description', 'Full Stack Laravel & TALL Stack Developer based in Bangalore, India. Building premium web applications with Laravel, Livewire, TailwindCSS, and Alpine.js.')">
    <meta name="keywords" content="Laravel Developer, PHP Developer, Full Stack Developer, TALL Stack, Livewire, Bangalore, Devaraju R">
    <meta name="author" content="Devaraju R">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('meta_title', 'Devaraju R — Full Stack Laravel Developer')">
    <meta property="og:description" content="@yield('meta_description', 'Full Stack Laravel & TALL Stack Developer based in Bangalore, India.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="bg-surface-950 text-surface-100 font-sans antialiased overflow-x-hidden">

    <!-- Custom Cursor -->
    <div id="custom-cursor" class="hidden md:block"></div>
    <div id="cursor-follower" class="hidden md:block"></div>

    <!-- Navigation -->
    @include('layouts.partials.nav')

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Floating Widgets -->
    @include('layouts.partials.widgets')

    @livewireScripts
    @stack('scripts')
</body>
</html>
