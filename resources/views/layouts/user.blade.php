
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>Interior Design</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="{{ asset('css/userProfileStyle.css')}}" rel="stylesheet">
        
        <!-- chat liks -->
        <link rel="stylesheet" href="{{ asset('css/chatstyle.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
        <script src="https://use.typekit.net/hoy3lrg.js"></script>
        <script>
            try {
                Typekit.load({
                    async: true
                });
            } catch (e) {}
        </script>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>


    </head>
    <body>
        <div>
            <main>
                @yield('content')
            </main>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- chat scripts -->
        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
        <script src="{{ asset('js/chat.js') }}"></script>
        <script>
            $(function () {
                "use strict";
                $('.terms').on('click', function () {
                    $('.show_more').slideToggle(1000);
                });
            });
        </script>
    </body>
</html>
