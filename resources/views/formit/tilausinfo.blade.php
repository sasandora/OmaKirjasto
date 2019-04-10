</div>
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="tilausinfo"></span>
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
                <label class="col-lg-2 col-form-label form-control-label">Toimittaja:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimittajat->nimimerkki}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Toimituspaikka:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kauppapaikat->nimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Tilattu:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimitus->tilausaika}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Maksettu:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimitus->maksettuaika}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Postikulut:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimitus->postikulut}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Saapunut:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$toimitus->saapumisaika}}</label>  
            </div>
        </div>
    </div>