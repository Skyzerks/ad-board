<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

    @section('title')
            ad board
    @show

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{--<script>--}}
        {{--window.Laravel = {!! json_encode([--}}
            {{--'csrfToken' => csrf_token(),--}}
        {{--]) !!};--}}
    {{--</script>--}}
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
                    <a class="navbar-brand" href="{{ url('/') }}" style="color:#31b0d5">
                        {{ trans('menu.main_message') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/en') }}" style="color:#133d55">
                        {{ trans('menu.local_eng') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/ua') }}" style="color:#133d55">
                        {{ trans('menu.local_ua') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{ trans('menu.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ trans('menu.register') }}</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @if(Auth::user()->is_admin==1)
                                            <a href="{{route('admin::index')}}">{{ trans('menu.admin') }}</a>
                                        @endif
                                        <a href="/user/info">{{ trans('menu.info') }}</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ trans('menu.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li><a href="{{ route('catalog') }}">{{ trans('menu.catalog') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ trans('menu.about') }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>


    {{--{{ dd(Auth::user()->is_admin) }}--}}
<!--        --><?php //dd($GLOBALS); ?>
        {{--<br>--}}
        {{--echo--}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                <div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
