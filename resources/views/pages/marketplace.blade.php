@extends('layout.app') @section('content')

<div class="container-fluid has-background-warning" style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered">
                    Marketplace
                </h1>
                <h1 class="subtitle has-text-centered">
                    10000 <i class="fas fa-coins"></i>
                </h1>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="columns">
            <div class="column is-one-fifth">
                <aside class="menu box">
                    <p class="menu-label">
                        Armor
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a class="is-selected" href="{{route('marketplace', ['type' => 'head'])}}">Head</a>
                        </li>
                        <li>
                            <a href="{{route('marketplace', ['type' => 'body'])}}">Body</a>
                        </li>
                        <li>
                            <a href="{{route('marketplace', ['type' => 'hands'])}}">Hands</a>
                        </li>
                        <li>
                            <a href="{{route('marketplace', ['type' => 'legs'])}}">Legs</a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Weapons
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{route('marketplace', ['type' => 'melee'])}}">Melee</a>
                        </li>
                        <li>
                            <a href="{{route('marketplace', ['type' => 'ranged'])}}">Ranged</a>
                        </li>
                        <li>
                            <a href="{{route('marketplace', ['type' => 'thrown'])}}">Thrown</a>
                        </li>
                        <li>
                            <a href="{{route('marketplace', ['type' => 'ammunition'])}}">Ammunition</a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Other
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="{{route('marketplace', ['type' => 'horse'])}}">Horses</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="column">
                <div class="columns is-multiline">


                    @foreach ($Items as $item)


                    <div class="column is-3 ">
                        <div class="card">
                            <header class="card-header">
                                <span class="card-header-title">{{$item->name}}</span>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img src="{{$item->image ?? "https://previews.123rf.com/images/abluecup/abluecup1309/abluecup130900082/22175873-a-3d-human-character-a-question-mark.jpg"}}"
                                        alt="" srcset="" />
                                </div>
                                <p class="has-text-centered">{{$item->price}} <i class="fas fa-coins"></i></p>
                            </div>
                            <footer class="card-footer">
                                <a href="#"
                                    class="card-footer-item @if($user->gold < $item->price)has-background-danger is-disabled @else has-background-success @endif">Buy</a>
                            </footer>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>