<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<title>
    @if (View::hasSection('title'))
        @yield('title') | {{ Voyager::setting('title') }}
    @else
        {{ Voyager::setting('title') }}
    @endif
</title>
<meta name="author" content="{{ Voyager::setting('title') }}">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

@include('partials._head_social')

<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Montserrat:400,700" rel="stylesheet">

<script src="https://use.fontawesome.com/dc46af29d6.js"></script>

{{ Html::style('css/app.css') }}

@yield('styles')
