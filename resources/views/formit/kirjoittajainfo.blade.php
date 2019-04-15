<div class="col-md-8 offset-md-2">
    <span class="anchor" id="kirjoittajainfo"></span>
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
                <label class="col-lg-2 col-form-label form-control-label">Nimi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittaja->nimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kuvaus:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittaja->kuvaus}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Syntymäaika:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittaja->syntymaaika}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kuolinaika:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittaja->kuolinaika}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Syntymäpaikka:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittaja->syntymapaikka}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Alias:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittaja->alias}}</label>
            </div>
        </div>
    </div>