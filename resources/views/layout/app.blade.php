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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css"
        integrity="sha256-YjcCvXkdRVOucibC9I4mBS41lXPrWfqY2BnpskhZPnw=" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar is-fixed-top is-black" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <h1 class="title has-text-centered themeFont">
                    Mercenaries
                </h1>


                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    </<span>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">


                <a class="navbar-item themeFont">
                    Changelog
                </a>

                @auth
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link themeFont">
                        Character
                    </a>

                    <div class="navbar-dropdown">
                        <a href="{{route('marketplace')}}" class="navbar-item themeFont">
                            Marketplace
                        </a>
                        <a href="{{route('inventory')}}" class="navbar-item themeFont">
                            Inventory
                        </a>
                        <a href="{{route('stats')}}" class="navbar-item themeFont">
                            Statistics
                        </a>
                        <a href="{{route('profile')}}" class="navbar-item themeFont">
                            Profile
                        </a>
                        {{-- <hr class="navbar-divider" />
                        <a class="navbar-item">
                            Report an issue
                        </a> --}}
                    </div>
                </div>
                @endauth
            </div>

            <div class="navbar-end">

                <div class="navbar-item">

                    <div class="buttons">
                        <a href="https://github.com/PitchRE/Mercenaries" class="tag is-warning">0.3.1b [1d ago]</a>
                        &nbsp;
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

    {{-- <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Mercenaries</strong> by Pitch.
            </p>
        </div>
    </footer> --}}

    <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>