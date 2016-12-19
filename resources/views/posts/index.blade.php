@extends('layout.main')
@section('content')

    <div class="row">
        <div class="col-md-3 blog-column">
            <h5 class="column-title">WHAT'S RISING</h5>
        </div>
        {{-- Start What's Hot --}}
        @include('posts._whats_hot')
        {{-- End What's Hot --}}
        <div class="col-md-3 blog-column">
            <h5 class="column-title">WHAT'S NEW</h5>
        </div>
    </div>

@endsection
