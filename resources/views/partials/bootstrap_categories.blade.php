<ul class="nav navbar-nav nav-categories">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false" style="background-color: #ce1126">
            Home
        </a>
        <ul class="dropdown-menu">
            @foreach($items as $menu_item)
                <li>
                    <span style="background-color: {{ $menu_item->color }}"></span>
                    <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
