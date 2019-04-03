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


    
        @foreach ($toimittaja as $toimittaja)
        <div class="row">

        <div class="col-sm-12">
            <a href="/toimittaja/{{$toimittaja->id}}/" class="card">

                <h4>{{$toimittaja->myyjannimi}}</h3>
                <h6>{{$toimittaja->nimimerkki}}</h5>

            </a>
            <form action="/toimittajat/{{$toimittaja->id}}" method="POST">
                @method('DELETE')
                @csrf
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('ToimittajaController@edit',$toimittaja->id) }}'" value="Muokkaa">
            
            <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista">
                <script>
                    function varmistus(form) {
                        if (confirm("Haluatko varmasti poistaa myyjän {{$toimittaja->nimi}}?")) {
                            form.submit();
                        }
                    }
                </script>
            </form>
        </div>

        </div>
        @endforeach
    

</body>

</html> 