<div class="col-md-8 offset-md-2">
    <span class="anchor" id="sarjainfo"></span>
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
                <label class="col-lg-2 col-form-label form-control-label">Kirjasarjan nimi:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$sarja->nimi}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Kirjasarjan kuvaus:</label>
                <label class="col-lg-3 col-form-label form-control-label">{{$sarja->kuvaus}}</label>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <label class="col-lg-2 col-form-label form-control-label">Sisältää kirjat:</label>
               
            </div>
            @foreach ($teokset as $kirja)
                    <div class="form-group row justify-content-center">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                         <div class="card-body">
                         <a href="/teos/{{$kirja->id}}/" class="card">

                            <label>{{$kirja->suominimi}}</label>
                            <label>{{$kirja->alkupenimi}}</label>

                        </a>
                        </div>
                    </div>
                @endforeach
            
        </div>
    </div>