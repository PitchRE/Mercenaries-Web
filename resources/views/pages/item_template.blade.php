@if($item != null)
<div class="card">
    <header class="card-header">
        <span class="card-header-title themeFont">{{$item->ItemData->name}} | {{$item->id}}</span>
    </header>
    <div class="card-content">
        <div class="content">
            <img src="{{$item->ItemData->image}}" alt="" srcset="" />
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