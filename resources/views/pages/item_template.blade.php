@if($item != null)
<div class="card">
    <header class="card-header">
        <span class="card-header-title themeFont">{{$item->name}}</span>
    </header>
    <div class="card-content">
        <div class="content">
            <img src="{{$item->image}}" alt="" srcset="" />
        </div>

    </div>
    <footer class="card-footer">
        <a href="{{route('unequip-item', ['id' => $item->id, 'slot' => $slot ?? null])}}"
            class="card-footer-item  button   themeFontLight "
            style="background-color: orange; border: 2px solid white">Unequip
            <span class="icon is-small">
            </span></a>
    </footer>
</div>
@else
<div class="card">
    <header class="card-header">
        <span class="card-header-title themeFont">None</span>
    </header>
    <div class="card-content">
        <div class="content">
            <img src="https://www.bad-data.sk/image/none.jpg" alt="" srcset="" />
        </div>

    </div>
    <footer class="card-footer">

    </footer>
</div>

@endif
<br>

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