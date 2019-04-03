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


    

        @foreach ($kustantaja as $kustantaja)
        <div class="row">

        <div class="col-sm-12">
            <a href="/kustantaja/{{$kustantaja->id}}/" class="card">

                <h4>{{$kustantaja->nimi}}</h3>
                <h6>{{$kustantaja->kotipaikka}}</h5>

            </a>
            <form action="/kustantajat/{{$kustantaja->id}}" method="POST">
                @method('DELETE')
                @csrf
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('KustantajaController@edit',$kustantaja->id) }}'" value="Muokkaa">
            
            <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista">
                <script>
                    function varmistus(form) {
                        if (confirm("Haluatko varmasti poistaa kustantajan {{$kustantaja->suominimi}}?")) {
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