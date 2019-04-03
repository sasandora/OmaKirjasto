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
                <input type="button" class="btn btn-info" data-toggle="modal" data-target="#addPicMod"
                    value=" Lisää kuva">

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
    <!-- Modal -->
    <div class="modal fade" id="addPicMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lisää kuva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ action('KuvaController@update',$kirja->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">

                            <label class="col-lg-3 col-form-label form-control-label">Linkki</label>
                            <input class="form-control" name="url" type="text" placeholder="Suora linkki kuvaan">
                        </div>
                        <div class="form-group row">
                            <video id="video" width="640" height="480" autoplay></video>
                            <button id="snap">Snap Photo</button>
                            <canvas id="canvas" width="640" height="480"></canvas>
                            <input type="button" class="btn btn-primary" value="Ota kuva">
                        </div>

                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>