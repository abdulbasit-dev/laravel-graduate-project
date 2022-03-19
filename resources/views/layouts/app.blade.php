<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ config('app.locale') !== 'en'?'rtl':'ltr'; }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    {{-- custome style --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    {{-- Navbar --}}
    @include('includes.nav')
    @yield('content')
    {{-- FOOTER --}}
    @include('includes.footer')

    {{-- Jquery --}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')

</body>

</html>
