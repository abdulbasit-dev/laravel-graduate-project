<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <meta name="csrf-token"
    content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} | Dashboard</title>

  <!-- Styles -->
  {{-- <link rel="stylesheet" href="css/app.css"> --}}
  <link rel="stylesheet"
    href="{{ asset('css/app.css') }}">

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




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
  {{-- <script src="js/app.js"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- <script src="js/jquery.min.js"></script> --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @stack('scripts')

  {{-- sweetalert2 message --}}
  @if (Session::has('message'))
    <script>
      Swal.fire({
        timer: 3000,
        icon: "{{ Session::get('icon') }}",
        title: "{{ Session::get('title') }}",
        text: "{{ Session::get('message') }}",
        showClass: {
          popup: 'animate__animated animate__backInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__backOutDown'
        },
      })
    </script>
  @endif
</body>

</html>
