<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/tilaukset/create">Lisää tilaus<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($toimitus->chunk(4) as $chunk)
    <div class="row">
        @foreach ($toimitus as $toimitus)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/toimittaja/{{$toimitus->id}}/" class="card">

                <h4>Tilausaika:{{$toimitus->tilausaika}}</h3>
                <h6>Saapumisaika:{{$toimitus->saapumisaika}}</h5>

            </a>
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('toimitusController@edit',$toimitus->id) }}'" value="Muokkaa">
            <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('tilaukset') }}'" value="Poista">

        </div>
        @endforeach
    </div>
    @endforeach

</body>