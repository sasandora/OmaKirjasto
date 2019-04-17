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
            <h3 class="mb-0">Lisää toimittaja</h3>
        </div>
        <div class="card-body">
            <form action="{{ action('ToimittajaController@store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nimimerkki</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimimerkki"  type="text" placeholder="Toimittajan nimimerkki">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Oikea nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="myyjannimi" type="text" placeholder="Toimittajan nimi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Osoite</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="osoite" type="text" placeholder="Toimittajan osoite">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Puhelinnumero</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="puhelin" type="text" placeholder="Toimittajan puhelin">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toimittajan sähköposti</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="email" type="text" placeholder="Toimittajan sposti">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" placeholder="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href="{{ url('toimittajat') }}" placeholder="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form toimittaja info -->