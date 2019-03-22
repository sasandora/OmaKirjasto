</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formKustantajaLisays"></span>
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

    <!-- form kustantaja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää kustantaja</h3>
        </div>
        <div class="card-body">
            <form action="{{ action('KustantajaController@store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toiminimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" value="Kustantajan nimi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kotipaikka</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="kotipaikka" type="text" value="Kustantajan kotipaikka">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Perustamisvuosi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="perustamisvuosi" type="number" value="1920">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Lopettamisvuosi</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="lopettamisvuosi" type="number" value="1990">
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" value="Tallenna">
                        <input type="button" class="btn btn-secondary onclick="location.href="{{ url('kustantajat') }}" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form kustantaja info -->