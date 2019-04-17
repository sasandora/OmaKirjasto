<div class="col-md-8 offset-md-2">
    <span class="anchor" id="kustantajainfo"></span>
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
                <label class="col-lg-3 col-form-label form-control-label" ></label>
                <label class="col-lg-2 col-form-label form-control-label">Nimi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kustantaja->nimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kotipaikka:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kustantaja->kotipaikka}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Perustusvuosi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kustantaja->perustamisvuosi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Lopetusvuosi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kustantaja->lopettamisvuosi}}</label>
            </div>
        </div>
    </div>