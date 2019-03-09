<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    @include('tayte/carousel')

    @include('tayte/lorem')
    <script>var userObj = {!! $teos !!}
    </script></body>

</html>