</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formToimittajaLisays"></span>
    <hr class="my-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- form toimittaja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Muokkaa toimittajaa</h3>
        </div>
        <div class="card-body">
            <form action="/toimittajat/{{$toimittaja->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nimimerkki</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimimerkki"  type="text" value="{{$toimittaja->nimimerkki}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Oikea nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="myyjannimi" type="text" value="{{$toimittaja->myyjannimi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Osoite</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="osoite" type="text" value="{{$toimittaja->osoite}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Puhelinnumero</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="puhelin" type="text" value="{{$toimittaja->puhelin}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toimittajan sähköposti</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="email" type="text" value="{{$toimittaja->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href="{{ url('toimittajat') }}" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form toimittaja info -->
    <div class="card ">
        <div class="card-header>
            <div class="card-body">
                <form action="/toimittajat/{{$toimittaja->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="col-lg-9">
                        <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista" style="float:right">

                        <script>
                            function varmistus(form) {
                                if (confirm("Haluatko varmasti poistaa toimittajan {{$toimittaja->nimi}}?")) {
                                    form.submit();
                                }
                            }
                        </script>

                    </div>
                </form>
            </div>
        </div> 