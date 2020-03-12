@extends('layout.app') @section('content')

<head>
    <style>
        .item {
            position: relative;
            padding-top: 20px;
            display: inline-block;
        }

        .lvl-badge {
            width: 30%;
            position: absolute;
            bottom: 0;
            right: 0;
            border-radius: 0px !important;
        }

        .is-selected {
            background-color: orange !important;
            color: black !important;
        }


        html {
            background-image: url("{{asset('/img/campfire.webp')}}");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<div class="container" style="min-height: 100vh;">
    <div class="div" style="padding-top: 1vh;">
        <div class="columns">
            <div class="column">
                <div class="column is-6 ">
                    <div class="item">
                        <a href="#">
                            <span class="tag is-white lvl-badge">{{$user->level}}</span>
                            <img src="https://static.smite.guru/i/avatars/0.png" alt="" />
                        </a>
                    </div>
                </div>

                &nbsp;
                <span class="flag-icon flag-icon-eu flag-icon-squared"></span>
                <span style="text-align: right" class="themeFont">{{$user->name}} <br /><span class="themeFontLight">
                        Free Agent
                    </span>
                </span>
            </div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
        </div>

        <div class="hero-foot">
            <nav class="tabs is-centered is-boxed">
                <div class="container">
                    <ul>
                        <li class="tab is-selected" style="background-color: white" onclick="openTab(event,'Summary')">
                            <a>Summary</a>
                        </li>
                        <li class="tab" style="background-color: white" onclick="openTab(event,'Ranked')">
                            <a>Ranked</a>
                        </li>
                        <li class="tab" style="background-color: white" onclick="openTab(event,'Casual')">
                            <a>Casual</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container section">
            <div id="Summary" class="content-tab">
                <div class="columns">
                    <div class="column is-3">
                        <table class="table" style="width: 100%; background-color: rgba(255, 255, 255, 0.13);">
                            <span class="tag is-black" style="width: 100%; text-align: left;">Player Stats</span>

                            <tbody>
                                <tr>
                                    <td class="themeFontLight">
                                        Rounds Played:
                                    </td>
                                    <td class="themeFontLight">
                                        {{$user->rounds_won + $user->rounds_lost}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="themeFontLight">Rounds Won:</td>
                                    <td class="themeFontLight">
                                        {{$user->rounds_won}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="themeFontLight">
                                        Rounds Lost:
                                    </td>
                                    <td class="themeFontLight">
                                        {{$user->rounds_lost}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="themeFontLight">KD Ratio</td>
                                    <td class="themeFontLight">
                                        @if($user->deaths > 0)
                                        {{$user->kills / $user->deaths}}
                                        @else
                                        {{$user->kills}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="themeFontLight">Kills</td>
                                    <td class="themeFontLight">
                                        {{$user->kills}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="themeFontLight">Deaths</td>
                                    <td class="themeFontLight">
                                        {{$user->deaths}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="themeFontLight">Favourite Weapon</td>
                                    <td class="themeFontLight">
                                        {{$favWpn->ItemData->name}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="column">
                        <canvas id="myChart" style="width: 100%; background-color: rgba(255, 255, 255, 0.13);"></canvas>
                    </div>
                </div>
            </div>
            <div id="Ranked" class="content-tab" style="display:none">
                <p>
                    wip
                </p>
            </div>
            <div id="Casual" class="content-tab" style="display:none">
                <p>
                    wip
                </p>
            </div>
        </div>
    </div>


</div>

<script>
    var ctx = document.getElementById("myChart").getContext("2d");
    let chart = new Chart(ctx, {
        type: "line",
        data: {
            datasets: [
                {
                    label: "KD",
                    data: [{!! $kd_history[4]->kd ?? 0 !!}, {!!$kd_history[3]->kd ?? 0 !!}, {!!$kd_history[2]->kd ?? 0 !!}, {!!$kd_history[1]->kd ?? 0 !!}, {!!$kd_history[0]->kd ?? 0 !!}],
                    backgroundColor: "rgba(214, 158, 52, 0.5)",
                    fontColor: "orange"
                }
            ],
            labels: ["{!! $kd_history[4]->created_at->diffForHumans() !!}", "{!! $kd_history[3]->created_at->diffForHumans() !!}", "{!! $kd_history[2]->created_at->diffForHumans() !!}", "{!! $kd_history[1]->created_at->diffForHumans() !!}", "{!! $kd_history[0]->created_at->diffForHumans() !!}"]
        },
        options: {
            scales: {
                yAxes: [
                    {
                        ticks: {
                            suggestedMin: {!! $lowest !!},
                            suggestedMax: {!! $highest !!},
                            fontSize: 15
                        }
                    }
                ]
            }
        }
    });


    function openTab(evt, tabName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("content-tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(
                " is-selected",
                ""
            );
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " is-selected";
    }
</script>
@endsection