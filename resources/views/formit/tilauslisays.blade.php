</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formTilausLisays"></span>
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
            <form action="{{ action('ToimitusController@store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toimittaja</label>
                    <div class="col-lg-9">
                            <select id="toimittaja" name="toimittaja" class="form-control" size="0">
                                    @foreach ($toimittajat as $toimittaja)
                                        <option value="{{$toimittaja->id}}">
                                        {{$toimittaja->myyjannimi}}
                                        </option>
                                    @endforeach
                                </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kauppapaikka</label>
                    <div class="col-lg-9">
                            <select id="kauppapaikka" name="kauppapaikka" class="form-control" size="0">
                                    @foreach ($kauppapaikat as $kauppapaikka)
                                        <option value="{{$kauppapaikka->id}}">
                                        {{$kauppapaikka->nimi}}
                                        </option>
                                    @endforeach
                                </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kirjat
                        <input type="button" class="btn btn-info" id="button" onclick="uusikirja()" value="+"></label>
                    <div class="col-lg-9">
                        <ol>
                        </ol>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tilausaika</label>
                    <div class="col-lg-9">
                        <input type="text" name="tilausaika" id="syntymadatepicker">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Maksettu</label>
                    <div class="col-lg-9">
                        <input type="text" name="maksettuaika" id="kuolindatepicker">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Postikulut</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="postikulut" type="text" placeholder="postikulut">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Saapumisaika</label>
                    <div class="col-lg-9">
                        <input type="text" name="saapumisaika" id="saapumisaikapicker">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" placeholder="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href="{{ url('tilaukset') }}"  value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form toimittaja info -->

    <script>
        var kerta = 0;
        var kirjat = {!!$teos!!};

        function uusikirja() {
            kerta++;
            var selekti = '<li class="li' + kerta +
                '">            <div class="input-group mb-3"> <div class="input-group-prepend">' +
                '<input type = "button" onclick = "poista(' + kerta +
                ')" class = "btn btn-primary" value = "X" > </div>' +
                '<select class="custom-select " name="teos[teos' + kerta +
                ']" id="inputGroupSelect01">';


            for (var y = 0; y < kirjat.length; y++) {
                selekti += '<option value="' + kirjat[y].id + '">' +
                    kirjat[y].suominimi + '</option>  ';
            }
            selekti += '< /select></div></li >';

            $("ol").prepend(selekti);
        }

        function poista(p) {
            var poista = ".li" + p;
            $(poista).remove();
        }

    </script>