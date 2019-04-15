</div>
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="toimittajainfo"></span>
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
    <div class="card card-outline-secondary">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Nimimerkki:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimittaja->nimimerkki}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Oikea nimi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimittaja->myyjannimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Osoite:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimittaja->osoite}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Puhelinnumero:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimittaja->puhelin}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Email:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimittaja->email}}</label>
            </div>
        </div>
    </div>