@extends('layout.app') @section('content')

<head>
    <style>
        .container-fluid {
            background:

                /* bottom, image */
                url("/img/main.webp")
        }
    </style>

</head>
<div class="container-fluid has-background-warning" style="min-height: 100vh;">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered themeFont">
                    Marketplace
                </h1>
                <h1 class="subtitle has-text-centered themeFontLight">
                    {{$user->gold}} <i class="fas fa-coins" style="color: gold"></i>
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


                    <div class="column is-3">
                        <div class="card">
                            <header class="card-header">
                                <span
                                    class="card-header-title themeFont limit">{{ \Illuminate\Support\Str::limit($item->name, 22, '...')}}
                                </span>
                            </header>
                            <div class="card-content">
                                <div class="content  card-image">

                                    <img class="ItemBoxForModal" data-target="modal-item-{{$item->id}}"
                                        src="
                                        {{$item->image ?? "https://previews.123rf.com/images/abluecup/abluecup1309/abluecup130900082/22175873-a-3d-human-character-a-question-mark.jpg"}}"
                                        alt="{{$item->name}}" srcset="" />

                                </div>
                                <p class="has-text-centered">{{$item->price}} <i class="fas fa-coins"
                                        style="color: gold"></i></p>
                            </div>
                            <footer class="card-footer">
                                @if($user->gold < $item->price)
                                    <a class="card-footer-item has-background-danger is-disabled">Buy</a>
                                    @else
                                    <a href="{{route('buy-item', ['id' => $item->id])}}"
                                        class="card-footer-item has-background-success">Buy</a>
                                    @endif

                            </footer>
                        </div>
                        @include('pages.item_modal', ['item' => $item])
                    </div>

                    @endforeach


                </div>

                {{ $Items->appends(request()->input())->links()}}
            </div>
        </div>
    </div>
</div>



<style>
    .card .card-image,
    .card .card-image .image img {
        height: 200px;
    }
</style>

<script>
    'use strict';

document.addEventListener('DOMContentLoaded', function () {

  // Modals

  var rootEl = document.documentElement;
  var $modals = getAll('.modal');
  var $modalButtons = getAll('.ItemBoxForModal');
  var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');

  if ($modalButtons.length > 0) {
    $modalButtons.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        rootEl.classList.add('is-clipped');
        $target.classList.add('is-active');
      });
    });
  }

  if ($modalCloses.length > 0) {
    
    $modalCloses.forEach(function ($el) {
      $el.addEventListener('click', function () {
        closeModals();
      
      });
    });
  }

  document.addEventListener('keydown', function (event) {
    var e = event || window.event;
    if (e.keyCode === 27) {
      closeModals();
    }
  });

  function closeModals() {
    rootEl.classList.remove('is-clipped');

    $modals.forEach(function ($el) {
      
      $el.classList.remove('is-active');
      console.log($el.classList)
    });
  }

  // Functions

  function getAll(selector) {
    return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
  }

});

</script>

@endsection