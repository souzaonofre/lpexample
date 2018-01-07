<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The minimal stack to develop Landing Pages">
        <meta name="author" content="Onofre Souza <souzaonofre@gmail.com>">


        <title>{{ config('app.name') }}</title>


        <!-- Webpack Styles -->
        <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Page Styles -->
        @yield('styles')

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-light bg-light static-top">
          <div class="container">
            <a class="navbar-brand" href="#">LandPage Example</a>
            <a class="navbar-brand" href="#">About us</a>
            <a class="navbar-brand" href="#">Admin</a>
          </div>
        </nav>


        <div id="main-content">
             @yield('content')
        </div>


        <!-- Webpack Scripts -->
        <script src="{{ asset('js/app.js')}}"></script>

        <!-- Page Scripts -->
        @yield('scripts')

    </body>
</html>
