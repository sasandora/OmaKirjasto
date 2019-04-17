</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formToimituspaikkaLisäys"></span>
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

    <!-- form toimituspaikka info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää toimituspaikka</h3>
        </div>
        <div class="card-body">
            <form action="{{ action('KauppapaikkaController@store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toimituspaikan nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" placeholder="mistä saa kirjoja tilattua">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-primary" placeholder="Tallenna">
                        <input type="button" class="btn btn-secondary" onclick="location.href="{{ url('toimituspaikka') }}" placeholder="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form toimituspaikka info -->