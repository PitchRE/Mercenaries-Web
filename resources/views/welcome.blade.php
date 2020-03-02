@extends('layout.app') @section('content')

<section class="hero is-warning is-medium is-mobile">

    <div class="hero-body">

        <div class="container">

            <div class="columns is-mobile">


                </h1>
                <div class="column">
                    <nav class="level  ">
                        <div class="level-item has-text-centered ">
                            <div>
                                <p class="heading">Players</p>
                                <p class="title">{{$users->count()}}</p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Online</p>
                                <p class="title">26/64</p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">Version</p>
                                <p class="title">1.12.3</p>
                            </div>
                        </div>
                        <div class="level-item has-text-centered">
                            <div>
                                <p class="heading">MAP</p>
                                <p class="title" id="targetId">Fields</p>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>

        </div>
        <canvas id="myChart" height="100" style="padding-top:  5vh;"></canvas>
    </div>


    <div class="container has-background-warning">

        <div class="columns is-vcentered has-background-warning ">
            <div class="column box auto">
                <div class=" has-text-centered has-text-weight-ligh is-family-monospace is-italic ">
                    <h1 class="is-5 title">Installation Instructions</h1>
                    <li>Download Mercenaries.</li>
                    <li>
                        Extract the contents of the file to
                        <code>Mount & Blade: With Fire & Sword/Modules/Mercenaries</code>
                    </li>
                    <li>
                        Run <code>Mercenaries/Updater/Mercenaries-Updater.exe</code>
                    </li>
                    <li>Run the game and join the server.</li>
                    <li>
                        After first join, you will be kicked and your character will be
                        created.
                    </li>
                    <li>On your next re-joining, your credentials will be printed.</li>
                    <br />
                    <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                <span>Download</span>
                                <span class="icon is-small">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    Windows 7/10 x86
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-three-fif">
                <div class="box">
                    <img class="
            is-fullwidth"
                        src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxH5rd9eDAjcFyv45SRYAFMIcKL_PArgVSL403ulRUWEndVKv5j5iBAxJ3IQdTtb73flY40KWRcGQR7YTnw9eJwfKgMurSxD0Bu50nju-Tot-mxl6krJ7Ipp7R"
                        alt="" />
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    let chart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Players in last 24h',
            data: [2, 20, 40, 35]
        }],
        labels: ['8:00', '12:00', '16:00', '20:00']
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 50
                }
            }]
        }
    }
});
</script>

@endsection