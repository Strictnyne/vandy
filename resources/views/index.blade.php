<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vanderbilt | GitHub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {!! Html::style('assets/css/font-awesome.min.css') !!}
        <!-- Styles -->
        {!! Html::style('assets/css/foundation.min.css') !!}
        {!! Html::style('assets/css/extended.css') !!}


        <!-- Scripts -->
        {!! Html::script('assets/js/jquery-3.1.1.min.js') !!}
        {!! Html::script('assets/js/foundation.min.js') !!}

    </head>

    <body>
        <style>
            body {
                background-color: #fff;
                color: #353a3d;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }
            a {
                color: #997F3D !important;
            }
            a:hover {
                color: #b79747;
            }
            .stars {
                color: #c8bf29;
            }
        </style>

        <div class="row" id="main-container">
            <div class="large-12 columns">
                @include('layout.header')

                @yield('content')

                @include('layout.footer')
            </div>
        </div>

    </body>
</html>
