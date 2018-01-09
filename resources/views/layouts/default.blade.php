<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The minimal stack to develop Landing Pages">
        <meta name="author" content="Onofre Souza <souzaonofre@gmail.com>">
        <meta id="token" name="token" value="{{ csrf_token() }}">


        <title>{{ config('app.name') }}</title>


        <!-- Webpack Styles -->
        <link href="{{ asset('css/vendor.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Page Styles -->
        @yield('styles')

    </head>

    <body id="app" class="bg-landpage">

        <!-- Navigation -->
        <nav class="navbar navbar-light navbar-right">
            <div class="container float-right">

                <div class="navbar-header">
                  <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#navbar-collapse-1"
                    aria-expanded="false">

                    <span class="sr-only">:::</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a  href="#"
                                class="navbar-brand dropdown-toggle"
                                data-toggle="dropdown"
                                role="button"
                                aria-haspopup="true"
                                aria-expanded="false">LandPage</a>

                            <ul class="dropdown-menu">
                                <li><a class="navbar-brand" href="#">"Quem somos"</a></li>
                                <li><a class="navbar-brand small" href="#">...</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if(Session::has('success') || Session::has('fail'))
        <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
            @endif

            @if(Session::has('fail'))
            <div class="alert alert-danger"><em> {!! session('fail') !!}</em></div>
            @endif
        </div>
        @endif

        <div id="main-content">
             @yield('content')
        </div>


        <!-- Webpack Scripts -->
        <script src="{{ asset('js/vendor.js')}}"></script>
        <script src="{{ asset('js/app.js')}}"></script>

        <!-- Page Scripts -->
        @yield('scripts')

    </body>
</html>
