</div>
<!--/col-->
<div class="col-md-10 offset-md-1">
    <span class="anchor" id="formSarjaLisays"></span>
    <hr class="my-5">

    <!-- form kirjasarja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää kirjasarja</h3>
        </div>
        <div class="card-body">
            <form action="{{ action('SarjaController@update',$sarja->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kirjasarjan nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" value="{{$sarja->nimi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kirjasarjan kuvaus</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" name="kuvaus" rows="3" value="{{$sarja->kuvaus}}"></textarea>
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
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-secondary" value="Tallenna">
                        <input type="button" onclick="location.href='{{ url('sarjat') }}'" class="btn btn-primary" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function uusikirja() {
            var kirjat = {!!$teos!!};

            var selekti = '<li><select class="custom-select" id="inputGroupSelect01">';

            for (var y = 0; y < kirjat.length; y++) {
                selekti += '<option value="' + kirjat[y].id + '">' + kirjat[y].suominimi + '</option>';
            }
            selekti += '</select></li>'

            $("ol").prepend(selekti);
        }
    </script>

    <!-- /form kirjasarja info --> 