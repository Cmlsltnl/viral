<ul class="nav navbar-nav navbar-right">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>
