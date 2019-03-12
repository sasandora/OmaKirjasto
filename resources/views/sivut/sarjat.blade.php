<!doctype html>
<html lang="fi">

@include('runko/head')

<body>
    @include('runko/navbar')
    <h3 style="Margin-top: 3em;">
        <a href="/sarjat/create">Uusi sarja<a>
    </h3>
    @if(session()->has('alert-success'))
    <div class="alert alert-success">
        {{ session()->get('alert-success') }}
    </div>
    @endif


    @foreach ($sarja as $sarja)
    <div class="row">
        <div class="col-12 ">
            <a href="/sarjat/{{$sarja->id}}/edit" class="card">
                <h4>{{$sarja->nimi}}</h4>
                <h6>{{$sarja->kuvaus}}</h6>
            </a>
        </div>
    </div>

    @endforeach
</body>

</html> 