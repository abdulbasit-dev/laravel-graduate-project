<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        {{-- custome style  --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        @if (config('app.locale') == 'ar' || config('app.locale') == 'kr')
        <link href="{{ asset('/css/bootstrap-rtl.css') }}"
          rel="stylesheet">
      @endif
    <title>{{ _('No Name') }}</title>
</head>

<body>
    {{-- Navbar --}}
    @include('includes.nav')
    @yield('content')
</body>

</html>
