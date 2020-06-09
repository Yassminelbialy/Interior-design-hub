<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','A default title')</title>
    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script
      src="https://kit.fontawesome.com/5c57781684.js"
      crossorigin="anonymous"
    ></script>
    <!-- Styles -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@stack('token')
</head>
<body>


  <main id="app">
      @yield('content')
  </main>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js" defer></script>
  <script src="{{ asset('js/lazyLoading.js') }}" defer></script>
  <script src="{{ asset('js/main.js') }}" defer ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
  <script>
    document.getElementById("vidEle").disabled=false;
  </script>
  <script src="{{ asset('js/map.js') }}" defer></script>
  <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=45185f8a-5595-4dca-a730-067482a1af71" type="text/javascript"></script>
  @stack('quizscript')


</body>
</html>


