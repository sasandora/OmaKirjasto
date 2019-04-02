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



    @foreach ($teos as $kirja)
    <div class="row">

        <div class="col-sm-12 ">
            <a href="/teos/{{$kirja->id}}/" class="card">

                <h4>{{$kirja->suominimi}}</h3>
                    <h6>{{$kirja->alkupenimi}}</h5>

            </a>
            <form action="/teos/{{$kirja->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="button" class="btn btn-info"
                onclick="location.href='{{ action('TeoksetController@edit',$kirja->id) }}'" value="Muokkaa">

                <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista">
                <script>
                    function varmistus(form) {
                        if (confirm("Haluatko varmasti poistaa kirjan {{$kirja->suominimi}}?")) {
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