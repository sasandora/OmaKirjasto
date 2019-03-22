<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/toimittajat/create">Lisää toimittaja<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($toimittaja->chunk(4) as $chunk)
    <div class="row">
        @foreach ($toimittaja as $toimittaja)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/toimittaja/{{$toimittaja->id}}/" class="card">

                <h4>{{$toimittaja->myyjannimi}}</h3>
                <h6>{{$toimittaja->nimimerkki}}</h5>

            </a>
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('ToimittajaController@edit',$toimittaja->id) }}'" value="Muokkaa">
            <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('toimittaja') }}'" value="Poista">

        </div>
        @endforeach
    </div>
    @endforeach

</body>

</html> 