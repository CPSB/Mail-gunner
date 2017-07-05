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
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
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

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <span class="@yield('panel-icon')" aria-hidden="true"></span> @yield('panel-title')

                        @if (Request::is('config/backups'))
                            <div class="pull-right">
                                <a href="{{ route('env.create') }}" class="btn btn-xs btn-default">
                                    <span class="fa fa-color fa-btn fa-plus"></span> Nieuwe backup.
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="panel-body">
                        @yield('content')
                    </div>
                    @if (Request::is('config/backups'))
                        @if ($backups)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Date:</th>
                                        <th>Options:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php ($count = 0)

                                    @foreach ($backups as $backup)
                                        <tr>
                                            @php($count++)

                                            <td><strong><code>#{{ $count }}</code></strong></td>
                                            <td>{{ $backup['formatted'] }}</td>

                                            <td> {{-- Options --}}
                                                <a href="{{ route('env.restore', ['timestamp' => $backup['unformatted']]) }}" class="label label-default"><span class="fa fa-wrench" aria-hidden="true"></span> Herstel</a>
                                                <a href="{{ route('env.download', ['filename' => $backup['unformatted']]) }}" class="label label-success"><span class="fa fa-download" aria-hidden="true"></span> Download</a>
                                                <a href="{{ route('env.delete', ['timestamp' => $backup['unformatted']]) }}" class="label label-danger"><span class="fa fa-trash" aria-hidden="true"></span> Verwijder</a>
                                            </td> {{-- /Options --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item">
                        <span style="margin-right: 7px;" class="fa fa-btn fa-color fa-cog" aria-hidden="true"></span>
                        Applicatie configuratie
                    </a>
                    <a href="{{ route('config.index') }}" class="list-group-item">
                        <span style="margin-right: 7px;" class="fa fa-btn fa-color fa-database" aria-hidden="true"></span>
                        Databank configuratie
                    </a>
                    <a href="" class="list-group-item">
                        <span style="margin-right: 7px;" class="fa fa-btn fa-color fa-github" aria-hidden="true"></span> GitHub configuratie
                    </a>
                    <a href="{{ route('config.smtp') }}" class="list-group-item">
                        <span class="fa fa-btn fa-color fa-envelope" aria-hidden="true"></span>
                        SMTP Configuratie
                    </a>
                </div>

                <div class="list-group">
                    <a href="{{ route('config.backup') }}" class="list-group-item">
                        <span style="margin-right: 7px;" class="fa fa-btn fa-color fa-undo" aria-hidden="true"></span>
                        Configuratie back-ups
                    </a>
                </div>
            </div>
        </div>
    </div>
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
