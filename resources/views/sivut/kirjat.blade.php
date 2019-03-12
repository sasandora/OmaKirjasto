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
        @foreach ($teos as $kirja)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <a href="/teos/{{$kirja->id}}" class="card">

                <h4>{{$kirja->suominimi}}</h3>
                <h6>{{$kirja->alkupenimi}}</h5>
                <input class="btn btn-info"  onclick="{{ action('TeoksetController@update',$kirja->id) }}" value="Muokkaa">

            </a>

        </div>
        @endforeach
    </div>
    @endforeach

</body>

</html> 