@extends('layout.app') @section('content')

<div class="container-fluid has-background-warning" style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered">
                    Inventory
                </h1>

                <div class="columns">
                    <div class="column is-2"   style="background-color: rgba(81, 19, 180, 0.582); border: 4px solid white; border-radius: 1%; margin: 4;">
                        <div class="card">
                            <header class="card-header">
                                <span class="card-header-title">Item</span>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img
                                        src="https://static.turbosquid.com/Preview/001286/418/KB/_Z.jpg"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <p class="has-text-centered">
                                    2112` <i class="fas fa-coins"></i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <a
                                    href="#"
                                    class="card-footer-item  button is-danger is-outlined"
                                    >Unequip</a
                                >
                            </footer>
                        </div>
                        <br />
                        <div class="card">
                            <header class="card-header">
                                <span class="card-header-title">Item</span>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img
                                        src="https://i.etsystatic.com/14134862/r/il/f8f064/1191420347/il_570xN.1191420347_lh4l.jpg"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <p class="has-text-centered">
                                    2112` <i class="fas fa-coins"></i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <a
                                    href="#"
                                    class="card-footer-item  button is-danger is-outlined"
                                    >Unequip</a
                                >
                            </footer>
                        </div>
                        <br />
                        <div class="card">
                            <header class="card-header">
                                <span class="card-header-title">Item</span>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img
                                        src="https://i.ebayimg.com/images/g/y6gAAOSwBc9cpffb/s-l300.jpg"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <p class="has-text-centered">
                                    2112` <i class="fas fa-coins"></i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <a
                                    href="#"
                                    class="card-footer-item  button is-danger is-outlined"
                                    >Unequip</a
                                >
                            </footer>
                        </div>
                        <br />
                        <div class="card">
                            <header class="card-header">
                                <span class="card-header-title">Item</span>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img
                                        src="https://previews.123rf.com/images/vitaliygaydukov/vitaliygaydukov1702/vitaliygaydukov170200011/71831356-iron-fantasy-high-boots-knight-armor-isolated-3d-illustration.jpg"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <p class="has-text-centered">
                                    2112` <i class="fas fa-coins"></i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <a
                                    href="#"
                                    class="card-footer-item  button is-danger is-outlined"
                                    >Unequip</a
                                >
                            </footer>
                        </div>
                    </div>
                    <div
                        class="column box"
                        style="background-color: rgba(150, 144, 140, 0.849); border: 4px solid white; border-radius: 1%;"
                    >
                        <div class="columns is-multiline">
                            @for ($i = 0; $i < 10 ; $i++)
                            <div class="column is-3">
                                <div class="card">
                                    <header class="card-header">
                                        <span class="card-header-title"
                                            >Item</span
                                        >
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            <img
                                                src="https://i.ebayimg.com/images/g/y6gAAOSwBc9cpffb/s-l300.jpg"
                                                alt=""
                                                srcset=""
                                            />
                                        </div>
                                        <p class="has-text-centered">
                                            2112` <i class="fas fa-coins"></i>
                                        </p>
                                    </div>

                                    <footer class="card-footer">
                                        <form action="" method="post" onchange="submit()">
                                        <div class="select is-success is-outlined">
                                            <select>
                                                <option>Slot 1</option>
                                                <option>Slot 2</option>
                                                <option>Slot 3</option>
                                                <option>Slot 4</option>
                                            </select>
                                        </form>
                                        </div>
                                        <a
                                        href="#"
                                        class="card-footer-item  button is-danger is-outlined"
                                        >SELL  <span class="icon is-small">
                                          </span></a
                                    </footer>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <div class="column is-2"  style="background-color: rgba(17, 89, 223, 0.726); border: 4px solid white; border-radius: 1%; margin: 4;">
                       
                        @for ($i = 0; $i < 4; $i++)
                        <div class="card">
                            <header class="card-header">
                                <span class="card-header-title">Item</span>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <img
                                        src="https://mcishop.azureedge.net/mciassets/w_5_0067404_12th-century-medieval-sword_550.png"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <p class="has-text-centered">
                                    2112` <i class="fas fa-coins"></i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <a
                                    href="#"
                                    class="card-footer-item  button is-danger is-outlined"
                                    >Unequip  <span class="icon is-small">
                                      </span></a
                                >
                            </footer>
                        </div>
                        <br />
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
