@extends('layout.app') @section('content')

<head>
    <style>
        .container-fluid {
            background:
                /* top, transparent black, faked with gradient */
                linear-gradient(rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)),
                /* bottom, image */
                url("/img/wallpaper.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>
<div class="container-fluid has-background-warning" style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered themeFont">
                    Inventory
                </h1>

                @if (\Session::has('success'))
                <div class="container" style="width: 50%;">
                    <div class="notification is-success">
                        @foreach (session()->get('success') as $item)
                        {{ $item}} <br>
                        @endforeach

                    </div>
                    <br>
                </div>
                @endif




                @if($errors->any())
                <div class="container" style="width: 50%;">
                    <div class="notification is-danger">
                        {!! implode('', $errors->all('<div>:message</div>')) !!}

                    </div>
                    <br>
                </div>

                @endif

                <div class="columns">
                    <div class="column is-2"
                        style="background-color: rgba(253, 253, 253, 0.205); border: 4px solid white; border-radius: 1%; margin: 4;">
                        @include('pages.item_template', ['item' => $user->getHead()])
                        @include('pages.item_template', ['item' => $user->getBody()])
                        @include('pages.item_template', ['item' => $user->getGloves()])
                        @include('pages.item_template', ['item' => $user->getBoots()])
                        @include('pages.item_template', ['item' => $user->getHorse()])
                    </div>
                    <div class="column box"
                        style="background-color: rgba(253, 253, 253, 0.205); border: 4px solid white; border-radius: 1%;">
                        <div class="columns is-multiline">
                            @foreach ($user->items as $item)
                            @if(!$item->isEquiped())
                            <div class="column is-3">

                                <div class="card">
                                    <header class="card-header">
                                        <span class="card-header-title themeFont">{{$item->ItemData->name}} </span>
                                    </header>
                                    <div class="card-content">
                                        <div class="content">
                                            <img src="{{$item->ItemData->image}}" alt="" srcset="" style=" width:  150px;
                                                height: 150px;" />
                                        </div>
                                        <p class="has-text-centered">
                                            <a href="{{route('sell-item', ['id' => $item->id])}}"><i
                                                    class="fas fa-hand-holding-usd is-dark"></i>
                                            </a>{{floor(($item->ItemData->price/4)*3)}} <i class="fas fa-coins"></i>
                                        </p>
                                    </div>

                                    <footer>
                                        @if($item->ItemData->isWeapon() == true)
                                        <form action="{{route('equip-item')}}" method="post" onchange="submit()">
                                            <div class="select is-success is-outlined is-fullwidth">
                                                @csrf
                                                <input type="hidden" name="item_id" value="{{$item->id}}">
                                                <select name="slot">
                                                    <option value="none">Select slot</option>
                                                    <option value="1">Slot 1</option>
                                                    <option value="2">Slot 2</option>
                                                    <option value="3">Slot 3</option>
                                                    <option value="4">Slot 4</option>
                                                </select>
                                        </form>
                                        @else

                                        <form action="{{route('equip-item')}}" method="post">

                                            @csrf
                                            <input type="hidden" name="item_id" value="{{$item->id}}">
                                            <input type="submit"
                                                class="button is-success is-outlined is-fullwidth is-center"
                                                value="Equip ">
                                        </form>
                                        @endif

                                    </footer>
                                </div>

                            </div>
                            @endif
                            @endforeach </div>
                    </div>
                    <div class="column is-2"
                        style="background-color: rgba(253, 253, 253, 0.205); border: 4px solid white; border-radius: 1%; margin: 4; ">

                        @include('pages.item_template', ['item' => $user->getWeapon1(), 'slot' => 1])
                        @include('pages.item_template', ['item' => $user->getWeapon2(), 'slot' => 2])
                        @include('pages.item_template', ['item' => $user->getWeapon3(), 'slot' => 3])
                        @include('pages.item_template', ['item' => $user->getWeapon4(), 'slot' => 4])

                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>



@endsection