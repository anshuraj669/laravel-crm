<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="DexignZone">
        <meta name="robots" content="index, follow">
        <meta name="format-detection" content="telephone=no">

        <meta name="keywords" content="admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit">
        <meta name="description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">

        <meta property="og:title" content="W3CRM - Bootstrap Admin Dashboard Template">
        <meta property="og:description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
        <meta property="og:image" content="social-image.png">

        <!-- TWITTER META -->
        <meta name="twitter:title" content="W3CRM - Bootstrap Admin Dashboard Template">
        <meta name="twitter:description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
        <meta name="twitter:image" content="social-image.png">
        <meta name="twitter:card" content="summary_large_image">

        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/dashboardAssets/images/favicon.png') }}">

        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'CRM') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!--Styles-->
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/icons/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/icons/line-awesome/css/line-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/icons/bootstrap-icons/font/bootstrap-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/metismenu/dist/metisMenu.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/@yaireo/tagify/dist/tagify.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/datatables/css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/dropzone/dropzone.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/dashboardAssets/vendor/star-rating/star-rating-svg.css') }}" />

        <!-- Start - Style CSS (classed links are toggled by styleSwitcher.js) -->
        <link class="main-plugins" href="{{ asset('assets/dashboardAssets/css/plugins.css') }}" rel="stylesheet" />
        <link class="main-css" href="{{ asset('assets/dashboardAssets/css/style.css') }}" rel="stylesheet" />
        <link class="main-switcher" href="{{ asset('assets/dashboardAssets/css/switcher.css') }}" rel="stylesheet" />


    </head>
    <body>
        <div id="main-wrapper" class="show">
            <x-auth-navbar />
            <x-auth-sidebar />

            {{ $slot }}

            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; {{ date("Y") }} {{ config('app.name', 'CRM') }}. All Rights Reserved.</p>

                </div>
            </div>

        </div>
        <!-- Core: jQuery + Bootstrap (must load first) -->
        <script src="{{ asset('assets/dashboardAssets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugins used by the header/navbar -->
        <script src="{{ asset('assets/dashboardAssets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/vendor/metismenu/dist/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/vendor/@yaireo/tagify/dist/tagify.js') }}"></script>

        <!-- Script For apexchart -->
        <script src="{{ asset('assets/dashboardAssets/vendor/apexcharts/dist/apexcharts.min.js') }}"></script>

        <!-- Script For Bootstrap Datepicker -->
        <script src="{{ asset('assets/dashboardAssets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

        <!-- Script For Bootstrap Datetimepicker -->
        <script src="{{ asset('assets/dashboardAssets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

        <!-- Script For Dropzone -->
        <script src="{{ asset('assets/dashboardAssets/vendor/dropzone/dropzone.min.js') }}"></script>

        <!-- Script For JQVMAP -->
        <script src="{{ asset('assets/dashboardAssets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>

        <!-- Script For Star Rating -->
        <script src="{{ asset('assets/dashboardAssets/vendor/star-rating/jquery.star-rating-svg.js') }}"></script>

        <!-- Script For Draggable -->
        <script src="{{ asset('assets/dashboardAssets/vendor/draggable/draggable.js') }}"></script>

        <!-- Script For Datatables -->
        <script src="{{ asset('assets/dashboardAssets/vendor/datatables/js/jquery.dataTables.bundle.min.js') }}"></script>

        <!-- Script For Dashboard (charts init) -->
        <script src="{{ asset('assets/dashboardAssets/js/dashboard/dashboard.js') }}"></script>

        <!-- Script For Multiple Languages -->
        <script src="{{ asset('assets/dashboardAssets/vendor/i18n/i18n.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/js/translator.js') }}"></script>

        <!-- Script For Custom JS -->
        <script src="{{ asset('assets/dashboardAssets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/js/deznav-init.js') }}"></script>

        <!-- Script For demo Styleswitcher -->
        <script src="{{ asset('assets/dashboardAssets/js/styleSwitcher.js') }}"></script>
        <script src="{{ asset('assets/dashboardAssets/js/demo.js') }}"></script>

        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447" integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ==" data-cf-beacon='{"version":"2024.11.0","token":"0931814f84b94398b852d3ac91b5f293","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
    </body>
</html>
