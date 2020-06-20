<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('vendor-assets')
    @stack('styles')

    <style>
        /* always hidden */
        [x-cloak=""] { display: none; }

        /* hidden on mobile/smaller screens */
        @media screen and (max-width: 768px) {
            [x-cloak="mobile"] { display: none; }
        }
    </style>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        @include('user-manager::partials.menus.site_nav')
        @yield('scaffold')
    </div>

    <template x-cloak>
        @stack('partials')
    </template>
    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
