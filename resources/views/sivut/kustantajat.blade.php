<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/kustantajat/create">Lisää kustantaja<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($kustantaja->chunk(4) as $chunk)
    <div class="row">
        @foreach ($kustantaja as $kustantaja)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/kustantajat/{{$kustantaja->id}}/" class="card">

                <h4>{{$kustantaja->nimi}}</h3>
                <h6>{{$kustantaja->kotipaikka}}</h5>

            </a>
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('KustantajaController@edit',$kustantaja->id) }}'" value="Muokkaa">
            <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('kustantaja') }}'" value="Poista">

        </div>
        @endforeach
    </div>
    @endforeach

</body>

</html> 