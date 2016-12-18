<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>

@include('partials._nav')

<div class="container">

    @include('partials._messages')

    @yield('content')

</div>
<!-- end of .container -->

@include('partials._footer')

</body>
</html>
