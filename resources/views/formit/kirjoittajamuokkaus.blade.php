</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formKirjoittajaMuokkaus"></span>
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
            <h3 class="mb-0">Muokkaa kirjoittajaa</h3>
        </div>
        <div class="card-body">
            <form action="/kirjoittajat/{{$kirjoittaja->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" value="{{$kirjoittaja->nimi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alias</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="alias" type="text" value="{{$kirjoittaja->alias}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Syntymäaika</label>
                    <div class="col-lg-9">
                        <input type="text" name="syntymaaika" id="syntymadatepicker" value="{{$kirjoittaja->syntymaaika}}">
                    </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Kuolinaika</label>
                        <div class="col-lg-9">
                            <input type="text" name="kuolinaika" id="kuolindatepicker" value="{{$kirjoittaja->kuolinaika}}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Syntymäpaikka</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="syntymapaikka" type="text" value="{{$kirjoittaja->syntymapaikka}}">
                        </div>
                </div>
                <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Kuvaus</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="kuvaus" rows="3" value="{{$kirjoittaja->kuvaus}}"></textarea>
                            </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('kirjoittajat') }}'" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form kirjoittaja info -->
    <div class="card ">
        <div class="card-header>
            <div class="card-body">
                <form action="/kirjoittajat/{{$kirjoittaja->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="col-lg-9">
                        <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista" style="float:right">

                        <script>
                            function varmistus(form) {
                                if (confirm("Haluatko varmasti poistaa kirjoittajan {{$kirjoittaja->nimi}}?")) {
                                    form.submit();
                                }
                            }
                        </script>

                    </div>
                </form>
            </div>
        </div> 