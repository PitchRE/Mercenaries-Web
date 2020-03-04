@if($item != null)
<div class="card">
    <header class="card-header">
        <span class="card-header-title">{{$item->name}}</span>
    </header>
    <div class="card-content">
        <div class="content">
            <img src="{{$item->image}}" alt="" srcset="" />
        </div>

    </div>
    <footer class="card-footer">
        <a href="{{route('unequip-item', ['id' => $item->id, 'slot' => $slot ?? null])}}"
            class="card-footer-item  button is-danger is-outlined">Unequip <span class="icon is-small">
            </span></a>
    </footer>
</div>
@else
<div class="card">
    <header class="card-header">
        <span class="card-header-title">None</span>
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