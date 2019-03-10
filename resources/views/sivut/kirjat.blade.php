<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;"><a href="/teos/create">Lisää kirja<a>
    </h3>
    @foreach($teos as $teos)
    <div class="card">
        <h3>{{$teos->suominimi}}</h3>
        <h5>{{$teos->alkupenimi}}</h5>
    </div>
    @endforeach
</body>

</html> 