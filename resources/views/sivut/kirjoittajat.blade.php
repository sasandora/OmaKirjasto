<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/kirjoittajat/create">Lisää kirjoittaja<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($kirjoittaja->chunk(4) as $chunk)
    <div class="row">
        @foreach ($kirjoittaja as $kirjoittaja)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/kirjoittajat/{{$kirjoittaja->id}}/" class="card">

                <h4>{{$kirjoittaja->nimi}}</h3>
                <h6>{{$kirjoittaja->kuvaus}}</h5>

            </a>
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('KirjoittajaController@edit',$kirjoittaja->id) }}'" value="Muokkaa">
            <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('kirjoittaja') }}'" value="Poista">

        </div>
        @endforeach
    </div>
    @endforeach

</body>

</html> 