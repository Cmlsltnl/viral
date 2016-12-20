@extends('layout.main')
@section('title', $post->title)
@section('styles')
    <style>
        .navbar-inverse .navbar-brand .logo-point,
        .navbar-inverse .navbar-nav > li > a:hover,
        a:hover, a:focus {
            color: {{ $post->category->color }};
        }

        .navbar-inverse .nav-categories .dropdown .dropdown-toggle {
            background-color: {{ $post->category->color }}  !important;
        }
    </style>
@endsection
@section('content')

    <div id="article-single-top">
        <img class="center-block img-responsive" src="{{ url('img/728x90.jpg') }}" alt="728x90" width="728" height="90">
    </div>

    <div class="posts-single">

        <div class="row">

            <div class="col-md-3 left-sidebar">

            </div>

            <div class="col-md-9">
                <article class="single">
                    <div class="entry-meta">
                        <div class="entry-cats">
                            <span class="entry-cats">
                                <a href="#cat-link" title="View all posts in {{ $post->category->name }}"
                                   style="background-color: {{ $post->category->color }}">
                                    <span>{{ $post->category->name }}</span>
                                </a>
                            </span>
                            <span class="date">October 29, 2016</span>
                        </div>
                    </div>

                    <h1 class="entry-title">{{ $post->title }}</h1>

                    <div class="entry-share">
                        <div class="addthis_inline_share_toolbox"></div>
                    </div>

                    <div class="entry-post-container">
                        <div class="row">
                            <div class="col-md-8 entry-post">
                                <div class="entry-media"
                                     style="background-image: url({{ Storage::url($post->image) }})">
                                </div>

                                <div class="entry-content">
                                    {!! $post->body !!}
                                </div>

                                <div class="entry-author">
                                    <div class="author-image">
                                        <img alt="{{ $post->author->name }}"
                                             src="{{ Storage::url($post->author->avatar) }}" height="120" width="120">
                                    </div>
                                    <div class="author-content">
                                        {{-- todo: add author link & about author text --}}
                                        <h3>
                                            <a href="#">{{ $post->author->name }}</a>
                                        </h3>
                                        <p>About me</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 sidebar">

                                <div class="article-single-sidebar">
                                    <img class="img-responsive" src="{{ url('img/300x250.jpg') }}">
                                </div>

                                <h3 class="sidebar-title">Related News</h3>


                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div>

    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58573dfb1755ef0c"></script>
@endsection
