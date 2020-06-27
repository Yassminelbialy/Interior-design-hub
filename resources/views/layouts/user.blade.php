
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
        
        
    </head>
    <body>
        <div>
            <main>
                @yield('content')
            </main>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
