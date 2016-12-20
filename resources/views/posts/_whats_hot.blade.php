<div class="col-md-6 blog-column">
    <h5 class="column-title">WHAT'S HOT</h5>
    <div class="column-posts column-posts-featured">

        @foreach($featuredPosts as $post)

            <article class="featured" style="background-image: url({{ Storage::url($post->image) }});">
                <div class="entry-post">
                    <div class="entry-cats">
                        <a href="#cat-link" title="View all posts in {{ $post->category->name }}"
                           style="background-color: {{ $post->category->color }}">
                            <span>{{ $post->category->name }}</span>
                        </a>
                    </div>
                    <h2 class="entry-title">
                        <a href="{{ route('posts.single', $post->slug) }}">
                            <span>{{ $post->title }}</span>
                        </a>
                    </h2>
                    <div class="entry-footer entry-meta">
                        <span class="comment-count">
                            <i class="fa fa-comment" aria-hidden="true"></i> 0
                        </span>
                        <span class="date">
                             {{ date('F j, Y', strtotime($post->created_at)) }}
                        </span>
                    </div>
                </div>
            </article>

        @endforeach

    </div>
</div>
