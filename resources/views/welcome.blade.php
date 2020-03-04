@extends('layout.app') @section('content')
<head>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<div class="container-fluid " style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered themeFont">
                    Mercenaries 
                </h1>
                <h1 class="subtitle has-text-centered themeFontLight">
                    A Mount&Blade with Fire and Sword modification.
                </h1>
            </div>
        </div>
    </section>

    <br /><br />

    <nav class="level themeFontLight">
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Players</p>
                <p class="title themeFont">{{$users->count()}}</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Online</p>
                <p class="title themeFont">0/64</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Rounds</p>
                <p class="title themeFont">422</p>
            </div>
        </div>
        <div class="level-item has-text-centered">
            <div>
                <p class="heading">Cur. Map</p>
                <p class="title themeFont">Fields</p>
            </div>
        </div>
    </nav>
    <br /><br />

    <section class="hero rainbow" style="background-color: white;">
        <div class="hero-body">
            <div class="container">
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

                <div class="notification is-success">
                  
                    Notification: Rewards are doubled every day between 17:00 and 18:00 UTC!
                  </div>
            </div>
        </div>
    </section>



  <div class="bgimg-2">
    <div class="">
        <canvas id="myChart" height="100" style="padding-top:  5vh;"></canvas>
    </div>
  </div>

  <div
    style="color: #777;background-color:white;padding:50px 80px; min-height: 400px;"
  >
  

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
         <p style="font-size: 0.7rem;">*Mercenaries Updater doesn't support Linux <i class="fab fa-linux"></i> distributions. You have to download every new version from Github <i class="fab fa-linux"></i>.</p>
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
                        <i class="fas fa-check-circle"></i> <i class="fab fa-windows"> </i> Windows 7/10 x86  [Recommended] 
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fab fa-github"></i> <i class="fab fa-windows"> </i>Windows 7/10 x86 [Github]
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fab fa-github"> </i>  <i class="fab fa-linux"> </i> Linux  [Github]
                    </a>
                </div>
            </div>
        </div>
      </div>

</div>
  </div>

  <div class="bgimg-3">
    <div class="caption">
      <div data-aos="fade-right"></div>
    </div>
  </div>
  <!-- parralax end -->
</div>

</div>



<style >


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
.bgimg-3 {
  position: relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bgimg-2 {
  background-image: url("https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxH5rd9eDAjcFyv45SRYAFMIcKL_PArgVSL403ulRUWEndVKv5j5iBAxJ3IQdTtb73flY40KWRcGQR7YTnw9eJwfKgMurSxD0Bu50nju-Tot-mxl6krJ7Ipp7R");
  min-height: 600px;
}
.bgimg-3 {
    background-image: url("https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxH5rd9eDAjcFyv45SRYAFMIcKL_PArgVSL403ulRUWEndVKv5j5iBAxJxdVdTtOPzeFI10KbNID5DvovlxdLYk6-taurXxG0EsZd13urD9tX0xl6krFoY5kb9");
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

<style>

 .sasdaad{
    background-color: rgba(214, 158, 52, 0.1)
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