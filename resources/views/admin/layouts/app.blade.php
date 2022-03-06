<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">

    {{-- Select2 --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
        rel="stylesheet" /> --}}


    <style>
        .sidebar .nav-link {
            font-size: .9rem !important;
        }
    </style>
</head>

<body>
    @include('admin.layouts.nav')
    @include('admin.layouts.sidenav')
    <main class="content">
        {{-- TopBar --}}
        @include('admin.layouts.topbar')
        @yield('content')
        {{-- Footer --}}
        {{-- @include('admin.layouts.footer') --}}
    </main>

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
    @stack('scripts')
</body>

</html>
