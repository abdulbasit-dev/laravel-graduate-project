<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- tab icon --}}
  <link rel="shortcut icon" href="{{ asset('images/icon.gif') }}" type="image/gif" />
  <title> | {{ config('app.name', 'Laravel') }}</title>


  {{-- Styles --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin-custom.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />

  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  @livewireStyles
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

  @livewireScripts

  <!-- Scripts -->
  {{-- <script src="js/app.js"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>



  {{-- <script src="js/jquery.min.js"></script> --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  {{-- sweetalert2 --}}
  <script src="{{ asset('js/sweetalert2.min.js') }}"></script>


  {{-- Ckedito --}}
  <script src="{{ asset('js/ckeditor.js') }}"></script>


  {{-- Tinymce --}}
  <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>

  @stack('scripts')
  <script>
    // Tinymce config 
    $('textarea.tinymce').tinymce({
      height: 300,
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor emoticons | print preview',
    });
  </script>
  {{-- sweetalert2 message --}}
  @if (Session::has('message'))
    <script>
      Swal.fire({
        timer: 2000,
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
