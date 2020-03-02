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
                            <a
                                href="{{route('marketplace', ['type' => 'head'])}}"
                                >Head</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'body'])}}"
                                >Body</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'hands'])}}"
                                >Hands</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'legs'])}}"
                                >Legs</a
                            >
                        </li>
                    </ul>
                    <p class="menu-label">
                        Weapons
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'melee'])}}"
                                >Melee</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'ranged'])}}"
                                >Ranged</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'thrown'])}}"
                                >Thrown</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'ammunition'])}}"
                                >Ammunition</a
                            >
                        </li>
                    </ul>
                    <p class="menu-label">
                        Other
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a
                                href="{{route('marketplace', ['type' => 'horse'])}}"
                                >Horses</a
                            >
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="column">
                <div class="columns is-multiline">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="column is-3 ">
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">Item {{ $i }}</p>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img
                                        src="https://i.etsystatic.com/14134862/r/il/f8f064/1191420347/il_570xN.1191420347_lh4l.jpg"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <code class="has-text-centered">10000$</code>
                            </div>
                            <footer class="card-footer">
                                <a
                                    href="#"
                                    class="card-footer-item has-background-success"
                                    >Buy</a
                                >
                            </footer>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
