<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/toimituspaikat/create">Lisää Toimituspaikka<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($kauppapaikka->chunk(4) as $chunk)
    <div class="row">
        @foreach ($kauppapaikka as $kauppapaikka)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/kustantaja/{{$kauppapaikka->id}}/" class="card">

                <h4>{{$kauppapaikka->nimi}}</h3>

            </a>
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('KauppapaikkaController@edit',$kauppapaikka->id) }}'" value="Muokkaa">
            <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('kauppapaikka') }}'" value="Poista">

        </div>
        @endforeach
    </div>
    @endforeach

</body>

</html> 