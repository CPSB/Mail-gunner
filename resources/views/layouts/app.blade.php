<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    {!! Charts::assets() !!}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if (Auth::check())
                            <li><a href="{{ url('home') }}"><span class="fa fa-color fa-file-text-o" aria-hidden="true"></span> Mailing tekst</a></li>
                            <li><a href="{{ route('config.index') }}"><span class="fa fa-color fa-wrench" aria-hidden="true"></span> Configuratie</a></li>
                            <li><a href="{{ route('statistics.index') }}"><span class="fa fa-bar-chart-o fa-color" aria-hidden="true"></span> Statistieken</a></li>
                        @endif

                        <li><a href="{{ route('disclaimer.index') }}"><span class="fa fa-color fa-legal" aria-hidden="true"></span> Disclaimer</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                                    Taal: {{ strtoupper(app()->getLocale()) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="?lang=nl"><span class="flag-icon flag-icon-nl"></span> Nederlands</a></li>
                                    <li><a href="?lang=en"><span class="flag-icon flag-icon-gb"></span> Engels</a></li>
                                    <li><a href="?lang=fr"><span class="flag-icon flag-icon-fr"></span> Frans</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="fa fa-user fa-color" aria-hidden="true"></span> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href=""><span class="fa fa-color fa-btn fa-cog" aria-hidden="true"></span> Instellingen</a></li>
                                    <li><a href=""><span class="fa fa-color fa-btn fa-bug" aria-hidden="true"></span> Meld een probleem</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="fa fa-color fa-btn fa-sign-out" aria-hidden="true"></span> Uitloggen
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote_nl').summernote({height: 450});
            $('#summernote_fr').summernote({height: 450});
            $('#summernote_en').summernote({height: 450});
        });
    </script>
</body>
</html>
