<!DOCTYPE html>
<html class="has-navbar-fixed-top" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mercenaries</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"
        integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
    <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="{{ asset('img/Tiger.png') }}" height="50" />
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="/" class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Changelog
                </a>

                @auth
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Character
                    </a>

                    <div class="navbar-dropdown">
                        <a href="{{route('marketplace')}}" class="navbar-item">
                            Marketplace
                        </a>
                        <a href="{{route('inventory')}}" class="navbar-item">
                            Inventory
                        </a>
                        <a href="{{route('stats')}}" class="navbar-item">
                            Statistics
                        </a>
                        <hr class="navbar-divider" />
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
                @endauth
            </div>

            <div class="navbar-end">

                <div class="navbar-item">

                    <div class="buttons">

                        @auth
                        <a href="{{ route('logout') }}" class="button is-light">
                            Logout
                        </a>
                        @endauth

                        @guest
                        <a href="{{route("login_show")}}" class="button is-light">
                            Log in
                        </a>
                        @endguest

                    </div>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Mercenaries</strong> by <a href="https://pitchblack.eu">Pitch</a>.
            </p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>