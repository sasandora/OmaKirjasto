</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formTilausMuokkaus"></span>
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
            <h3 class="mb-0">Lisää tilaus</h3>
        </div>
        <div class="card-body">
            <form action="/tilaukset/{{$toimitus->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">ToimittajaId</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="toimittajaid" type="text" value="{{$toimitus->toimittajaid}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">KauppapaikkaId</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="kauppapaikkaid" type="text" value="{{$toimitus->kauppapaikkaid}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tilausaika</label>
                    <div class="col-lg-9">
                        <input type="text" name="tilausaika" id="syntymadatepicker" value="{{$toimitus->tilausaika}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Maksettu</label>
                    <div class="col-lg-9">
                        <input type="text" name="maksettuaika" id="kuolindatepicker" value="{{$toimitus->maksettuaika}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Postikulut</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="postikulut" type="text" value="postikulut" value="{{$toimitus->postikulut}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Saapumisaika</label>
                    <div class="col-lg-9">
                        <input type="text" name="saapumisaika" id="saapumisaikapicker" value="{{$toimitus->saapumisaika}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href="{{ url('tilaukset') }}"  value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form toimittaja info -->
    <div class="card ">
        <div class="card-header>
            <div class="card-body">
                <form action="/tilaukset/{{$toimitus->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="col-lg-9">
                        <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista" style="float:right">

                        <script>
                            function varmistus(form) {
                                if (confirm("Haluatko varmasti poistaa tilaukset {{$toimitus->tilausaika}}?")) {
                                    form.submit();
                                }
                            }
                        </script>

                    </div>
                </form>
            </div>
        </div> 