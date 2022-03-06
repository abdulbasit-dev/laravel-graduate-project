<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ config('app.locale') !== 'en'?'rtl':'ltr'; }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    {{-- custome style --}}
    <link rel="stylesheet" href="css/custom.css">

    @if (config('app.locale') !== 'en')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    @endif
    {{-- <title>{{ _('Student Graduation Projects') }}</title> --}}
    <title>'Student Graduation Projects'</title>
</head>

<body>
    {{-- Navbar --}}
    @include('includes.nav')
    @yield('content')

    {{-- Jquery --}}
    <script src="js/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')

</body>

</html>
