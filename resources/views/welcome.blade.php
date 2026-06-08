<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRM</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/homeAssets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/homeAssets/css/fontawesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/homeAssets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/homeAssets/css/odometer.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/homeAssets/css/slick.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/homeAssets/css/style.css') }}" />
    </head>
    <body class="antialiased font-sans">
        <x-navbar-section />
        <x-hero-section />
{{--        <x-brands-section />--}}
        <x-features-section />
        <x-features-card-section />
        <x-business-solutions-section />
        <x-pricing-section />
        <x-testimonials-section />
        <x-faq-section />
        <x-footer-section />
    </body>

    <script src="{{ asset('assets/homeAssets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/homeAssets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/homeAssets/js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/homeAssets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/homeAssets/js/main.js') }}"></script>
</html>
