<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
