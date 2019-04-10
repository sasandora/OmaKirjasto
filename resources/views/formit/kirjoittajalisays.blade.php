</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formKirjoittajaLisays"></span>
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
    <!-- form kirjoittaja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää kirjoittaja</h3>
        </div>
        <div class="card-body">
            <form action="{{ action('KirjoittajaController@store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" value="Kirjoittajan nimi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alias</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="alias" type="text" value="Kirjoittajan vaihtoehtoinen nimi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Syntymäaika</label>
                    <div class="col-lg-9">
                        <input type="text" name="syntymaaika" id="syntymadatepicker">
                    </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Kuolinaika</label>
                        <div class="col-lg-9">
                            <input type="text" name="kuolinaika" id="kuolindatepicker">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Syntymäpaikka</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="syntymapaikka" type="text" value="Kirjoittajan syntymäpaikka">
                        </div>
                </div>
                <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Kuvaus</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="kuvaus" rows="3" placeholder="Kirjoita kuvaus"></textarea>
                            </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                        <input type="button" class="btn btn-secondary onclick="location.href="{{ url('kirjoittajat') }}" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form kirjoittaja info -->