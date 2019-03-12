</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formSarjaLisays"></span>
    <hr class="my-5">

    <!-- form kirjasarja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää kirjasarja</h3>
        </div>
        <div class="card-body">
        <form action="{{ action('SarjaController@store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kirjasarjan nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" value="joko alkuperäinen tai suomennettu">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Kirjasarjan kuvaus</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="kuvaus" rows="3" placeholder="Kirjoita kuvaus"></textarea>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-secondary" value="Tallenna">
                        <input type="button" class="btn btn-primary" onclick="location.href='{{ url('teos') }}'" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form kirjasarja info -->