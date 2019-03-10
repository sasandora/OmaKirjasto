<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/teos/create">Lisää kirja<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($teos->chunk(4) as $chunk)
    <div class="row">
        @foreach ($chunk as $kirja)
        <div class="col-3 ">
            <a href="/teos/{{$kirja->id}}/edit" class="card">

                <h3>{{$kirja->suominimi}}</h3>
                <h5>{{$kirja->alkupenimi}}</h5>
            </a>

        </div>
        @endforeach
    </div>
    @endforeach

</body>

</html> 