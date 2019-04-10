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


    
        @foreach ($toimitus as $toimitus)
        <div class="row">
        <div class="col-sm-12">
            <a href="/tilaukset/{{$toimitus->id}}/" class="card">

                <h4>Tilausaika:{{$toimitus->tilausaika}}</h3>
                <h6>Saapumisaika:{{$toimitus->saapumisaika}}</h5>

            </a>
            <form action="/tilaukset/{{$toimitus->id}}" method="POST">
                @method('DELETE')
                @csrf
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('ToimitusController@edit',$toimitus->id) }}'" value="Muokkaa">
            
            <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista">
                <script>
                    function varmistus(form) {
                        if (confirm("Haluatko varmasti poistaa tilauksen {{$toimitus->tilausaika}}?")) {
                            form.submit();
                        }
                    }
                </script>
            </form>
        </div>

        </div>
        @endforeach
    

</body>