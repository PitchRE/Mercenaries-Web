@extends('layout.app') @section('content')

<head>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<div class="container-fluid ">
  <div class="bgimg-4">
    <div style="padding-top: 25vh">
      <h1 class="title has-text-centered themeFont">
        Mercenaries
      </h1>
      <h1 class="subtitle has-text-centered themeFontLight">
        A Mount&Blade with Fire and Sword modification.
      </h1>
    </div>
  </div>

  <div style="color: #777;background-color:white;padding:50px 80px; min-height: 300px;">

    <h1 class="title" style="color: orange;">
      About
    </h1>
    <h2 class="subtitle themeText">
      Mercenaries is a multiplayer modification for Mount&Blade
      with Fire and Sword. It allows you to create your own unique
      character with its own persistent characteristics and
      inventory.
      <br />
      <br />Just join the server and visit our merchant to see a
      range of armor and weapons. Your multiplayer experience will
      be enriched by new abilities, achievements, maps, rating,
      clan system and many other features
    </h2>

  </div>




  <div class="bgimg-2">
    <div>

    </div>
  </div>

  <div style="color: #777;background-color:white;padding:50px 80px; min-height: 400px;">


    <div class="columns">
      <div class="column">
        <h1 class="is-5 title">Installation Instructions</h1>
        <li>Download Mercenaries</li>
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

      </div>
      <div class="column">
        <h1 class="is-5 title">Installation Requirements</h1>
        <p>Mount&Blade with Fire and Sword 1,43</p>
        <p>Net Framework 4.5</p>
        Supported OS: <li style="margin-left: 30px;">Windows 7/10</li>
        <li style="margin-left: 30px;">*Linux Mint, Ubuntu &nbsp <i class="fas fa-exclamation-triangle"></i> </li>
        <br>
        <p style="font-size: 0.7rem;">*Mercenaries Updater doesn't support Linux <i class="fab fa-linux"></i>
          distributions. You have to download every new version from Github <i class="fab fa-linux"></i>.</p>
        <br>


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
                <i class="fas fa-check-circle"></i> <i class="fab fa-windows"> </i> Windows 7/10 x86 [Recommended]
              </a>
              <a href="#" class="dropdown-item">
                <i class="fab fa-github"></i> <i class="fab fa-windows"> </i>Windows 7/10 x86 [Github]
              </a>
              <a href="#" class="dropdown-item">
                <i class="fab fa-github"> </i> <i class="fab fa-linux"> </i> Linux [Github]
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="bgimg-3">
    <div class="caption">
      <nav class="level themeFontLight">
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Players</p>
            <p class="title themeFont">{{$users->count()}}</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">{{$server->status}}</p>
            <p class="title themeFont">{{$server->cur_players}}/{{$server->max_players}}</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Faction I</p>
            <p class="title themeFont">{{$server->faction_1}}</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Faction II</p>
            <p class="title themeFont">{{$server->faction_2}}</p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <p class="heading">Cur. Map</p>
            <p class="title themeFont">{{$server->map}}</p>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- parralax end -->
</div>

</div>



<style>
  .profile {
    text-shadow: 2px 2px #000000;
  }

  .bio {
    text-shadow: 1px 1px #000000;
    text-align: justify;
  }

  ul {
    display: table;
    margin: 0 auto;
    font-size: 15px;
  }

  body,
  html {
    height: 100%;
    margin: 0;
    font: 400 15px/1.8 "Lato", sans-serif;
    color: #777;
  }

  .bgimg-2,
  .bgimg-3,
  .bgimg-4 {
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

  }

  .bgimg-2 {
    background-image: url("{{asset('/img/warrior.jpeg')}}");
    min-height: 600px;
  }

  .bgimg-4 {
    background-image: url("{{asset('/img/mercenaries.jpeg')}}");


    min-height: 100vh;
  }

  .bgimg-3 {
    background-image: url("{{asset('/img/campfire.jpeg')}}");
    min-height: 600px;
  }

  .caption {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    color: #000;
  }

  .caption span.border {
    background-color: #111;
    color: #fff;
    padding: 18px;
    font-size: 25px;
    letter-spacing: 10px;
  }

  h3 {
    letter-spacing: 5px;
    text-transform: uppercase;
    font: 20px "Lato", sans-serif;
    color: #111;
  }

  .niceclass {
    background-color: transparent;
  }

  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1024px) {

    .bgimg-1,
    .bgimg-2,
    .bgimg-3,
    .bgimg-4 {
      background-attachment: scroll;
    }
  }
</style>



<script>
  var ctx = document.getElementById('myChart').getContext('2d');
    let chart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Players [WIP]',
            data: [12, 20, 40, 35],
            backgroundColor: 'rgba(214, 158, 52, 0.5)',
            fontColor: 'orange',
        }],
        labels: ['8:00', '12:00', '16:00', '20:00']
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 64,
                    fontSize: 15,
                }
            }]
        }
    }
});
</script>

{{-- <canvas id="myChart" height="100" style="padding-top:  5vh;"></canvas> --}}