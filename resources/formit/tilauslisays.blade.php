</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formTilausLisays"></span>
    <hr class="my-5">

    <!-- form toimittaja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää tilaus</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kirjan nimi (vaatii toiminnallisuuden)</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="Nimi">
                    </div>
                </div>
                <div class="col-lg-9">
                    <input type="button" class="btn btn-secondary" value="Lisää kirja">
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toimittaja</label>
                    <div class="col-lg-9">
                        <select id="toimittaja" class="form-control" size="0">
                            <option>Markku68</option>
                            <option>BookLover3</option>
                            <option>Kirjamies1</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toimituspaikka</label>
                    <div class="col-lg-9">
                        <select id="toimituspaikka" class="form-control" size="0">
                            <option>Huuto.net</option>
                            <option>Keltainen pörssi</option>
                            <option>Yksityinen</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Tilausaika</label>
                    <div class="col-lg-9">
                        <!-- Tarvitsee toimivan datepickerin -->
                        <input class="form-control" type="text" value="Ei vielä datepickeriä">
                        <!-- Tarvitsee toimivan datepickerin -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Maksamisaika</label>
                    <div class="col-lg-9">
                        <!-- Tarvitsee toimivan datepickerin -->
                        <input class="form-control" type="text" value="Ei vielä datepickeriä">
                        <!-- Tarvitsee toimivan datepickerin -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Postikulut</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="postikulujen hinta">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Saapumisaika</label>
                    <div class="col-lg-9">
                        <!-- Tarvitsee toimivan datepickerin -->
                        <input class="form-control" type="text" value="Ei vielä datepickeriä">
                        <!-- Tarvitsee toimivan datepickerin -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="button" class="btn btn-secondary" value="Tallenna">
                        <input type="button" class="btn btn-primary" value="Peruuta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form toimittaja info -->