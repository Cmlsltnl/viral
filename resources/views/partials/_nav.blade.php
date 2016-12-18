<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#viral-main-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" title="{{ Voyager::setting('description') }}">
                {{ Voyager::setting('title') }}<span class="logo-point">.</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="viral-main-menu">
            {!! Menu::display('categories', 'partials.bootstrap_categories') !!}

            {!! Menu::display('main', 'partials.bootstrap_menu') !!}
        </div>
    </div>
</nav>
