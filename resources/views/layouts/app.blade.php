<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" rel="stylesheet">

    <style type="text/css">
        .container
        {
            padding-top: 30px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <strong> {{ config('app.name', 'Laravel') }} </strong>
                </a>
            </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>
                <a class="navbar-item">
                    Flights
                </a>
                <a class="navbar-item">
                    BnB's
                </a>
                <a class="navbar-item">
                    Rent-a-Car
                </a>
</div>

        <div class="navbar-end">
            @guest
            <div class="navbar-item">
                <div class="buttons">
                    @if (Route::has('register'))
                    <a class="button is-primary" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                    <a class="button is-light" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                    @endif
                </div>
            </div>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>
        <!-- end -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
