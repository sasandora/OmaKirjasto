<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/toimituspaikat/create">Lisää Kauppapaikka<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    
        @foreach ($kauppapaikka as $kauppapaikka)
        <div class="row">

        <div class="col-sm-12">
            <a href="#" class="card">

                <h4>{{$kauppapaikka->nimi}}</h3>

            </a>
            <form action="/toimituspaikat/{{$kauppapaikka->id}}" method="POST">
                @method('DELETE')
                @csrf
            <input type="button" class="btn btn-info"  onclick="location.href='{{ action('KauppapaikkaController@edit',$kauppapaikka->id) }}'" value="Muokkaa">
            
            <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista">
            <script>
                function varmistus(form) {
                    if (confirm("Haluatko varmasti poistaa kauppapaikan {{$kauppapaikka->nimi}}?")) {
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