@extends('layout.app') @section('content')

<div class="container-fluid has-background-warning" style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered">
                    Inventory
                </h1>

                <div class="columns">
                    <div class="column is-2">
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
                                    class="card-footer-item  has-background-danger"
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
                                    class="card-footer-item  has-background-danger"
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
                                    class="card-footer-item  has-background-danger"
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
                                        src="data:image/jpeg;base64,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"
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
                                    class="card-footer-item  has-background-danger"
                                    >Unequip</a
                                >
                            </footer>
                        </div>
                    </div>
                    <div
                        class="column box"
                        style="background-color: rgba(179, 97, 38, 0.822); border: 4px solid white; border-radius: 1%;"
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
                                        <a
                                            href="#"
                                            class="card-footer-item  has-background-success"
                                            >Equip</a
                                        >
                                        <a
                                            href="#"
                                            class="card-footer-item  has-background-warning"
                                            >Sell</a
                                        >
                                    </footer>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <div class="column is-2">
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
                                    class="card-footer-item  has-background-danger"
                                    >Unequip</a
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
