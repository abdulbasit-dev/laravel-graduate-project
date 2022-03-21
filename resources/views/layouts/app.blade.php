<!DOCTYPE html>
<html lang="{{ config('app.locale') }}"
  dir="{{ config('app.locale') !== 'en' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <!-- BootStrap -->
  <link rel="stylesheet"
    href="{{ asset('css/bootstrap.css') }}">
  {{-- Bootstrap Icons --}}
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- fontawesome -->
  <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

  {{-- custome style --}}
  <link rel="stylesheet"
    href="{{ asset('css/custom.css') }}">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    rel="stylesheet">

  <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
  {{-- Navbar --}}
  @include('includes.nav')
  @yield('content')
  {{-- FOOTER --}}
  @include('includes.footer')

  {{-- Jquery --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
  @stack('scripts')


</body>

</html>
