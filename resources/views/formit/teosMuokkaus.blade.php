</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formKirjaLisays"></span>
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
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Muokkaa kirjaa</h3>
        </div>
        <div class="card-body">
            <form action="/teos/{{$teos->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="suominimi" type="text" value="{{$teos->suominimi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alkuperäinen nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="alkupenimi" type="text" value="{{$teos->alkupenimi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kirjoittaja</label>
                    <div class="col-lg-9">
                        <select id="kirjoittajaSelect" name="kirjoittaja" class="form-control" size="0">
                            @foreach ($kirjoittajat as $kirjoittaja)
                            <option value="{{$kirjoittaja->id}}">
                                {{$kirjoittaja->nimi}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kustantaja</label>
                    <div class="col-lg-9">
                        <select id="kustantaja" name="kustantaja" class="form-control" size="0">
                            <option>Semic Oy</option>
                            <option>Otava</option>
                            <option>Muu Yritys</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kunto</label>
                    <div class="col-lg-9">
                        <select id="kunto" name="kunto" class="form-control" size="0">
                            <option value="K1">Kuntoluokka 1</option>
                            <option value="K2">Kuntoluokka 2</option>
                            <option value="K3">Kuntoluokka 3</option>
                            <option value="K4">Kuntoluokka 4</option>
                            <option value="K5">Kuntoluokka 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tyyppi</label>
                    <div class="col-lg-9">
                        <select id="tyyppi" name="tyyppi" class="form-control" size="0">
                            <option value="sidottu">Sidottu</option>
                            <option value="nidottu">Nidottu</option>
                            <option value="nidottuKova">Nidottu(Kovakantinen)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Status</label>
                    <div class="col-lg-9">
                        <select id="status" name="status" class="form-control" size="0">
                            <option value="omistus">Omistettu</option>
                            <option value="eiOmistus">Ei omistettu</option>
                            <option value="tilattu">Tilattu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Hinta (€)</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="hinta" type="text" value="{{$teos->hinta}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Suomentaja</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="suomentaja" type="text" value="{{$teos->suomentaja}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Julkaisuvuosi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="vuosi" type="text" value="{{$teos->vuosi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kuvittaja</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="kuvittaja" type="text" value="kuvittaja">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href='{{ url('teos') }}'"
                            value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form kirja info -->
    <div class="card ">
        <div class="card-header">
            <div class=" card-body">
            <form action="/teos/{{$teos->id}}" method="POST">
                @method('DELETE')
                @csrf
                <div class="col-lg-9">
                    <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista"
                        style="float:right">

                    <script>
                        function varmistus(form) {
                            if (confirm("Haluatko varmasti poistaa kirjan {{$teos->suominimi}}?")) {
                                form.submit();
                            }
                        }
                    </script>

                </div>
            </form>
        </div>
    </div>


    <script>
        var kirjoittaja = {!!$kirjoittaja!!};
        $('#kirjoittajaSelect').val(kirjoittaja.id);
    </script>