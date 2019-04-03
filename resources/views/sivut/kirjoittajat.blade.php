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


    
        @foreach ($kirjoittaja as $kirjoittaja)
        <div class="row">
        <div class="col-sm-12">
            <a href="/kirjoittaja/{{$kirjoittaja->id}}/" class="card">

                <h4>{{$kirjoittaja->nimi}}</h3>
                <h6>{{$kirjoittaja->kuvaus}}</h5>

            </a>
            <form action="/kirjoittajat/{{$kirjoittaja->id}}" method="POST">
                @method('DELETE')
                @csrf
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('KirjoittajaController@edit',$kirjoittaja->id) }}'" value="Muokkaa">
            
            <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista">
            <script>
                function varmistus(form) {
                    if (confirm("Haluatko varmasti poistaa kirjoittajan {{$kirjoittaja->nimi}}?")) {
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