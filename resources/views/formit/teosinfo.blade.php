</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="teosinfo"></span>
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
    <!-- form kirja info -->
    <div class="card card-outline-secondary">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <img width="20%" src="https://upload.wikimedia.org/wikipedia/fi/thumb/7/77/Taru_sormusten_herrasta.jpg/196px-Taru_sormusten_herrasta.jpg">
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Nimi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->suominimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Alkuperäinen nimi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->alkupenimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kirjoittaja:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$kirjoittajat->nimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kustantaja:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->Kustantaja}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kunto:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->kuntoluokka}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Tyyppi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->tyyppi}}</label>  
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Status:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->status}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Hinta (€):</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->hinta}}€</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Suomentaja:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->suomentaja}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Julkaisuvuosi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->vuosi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kuvittaja:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$teos->Kuvittaja}}</label>
            </div>
        </div>
    </div>
    <!-- /form kirja info --> 