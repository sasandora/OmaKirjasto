</div>
<!--/col-->
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formKirjoittajaLisays"></span>
    <hr class="my-5">

    <!-- form kirjoittaja info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Lisää kirjoittaja</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="Kirjoittajan nimi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Alias</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="Kirjoittajan vaihtoehtoinen nimi">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Syntymäaika</label>
                    <div class="col-lg-9">
                        <!-- Tarvitsee toimivan datepickerin -->
                        <input class="form-control" type="text" value="Ei vielä datepickeriä">
                        <!-- Tarvitsee toimivan datepickerin -->
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Kuolinaika</label>
                        <div class="col-lg-9">
                            <!-- Tarvitsee toimivan datepickerin -->
                            <input class="form-control" type="text" value="Ei vielä datepickeriä">
                            <!-- Tarvitsee toimivan datepickerin -->
                        </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Kuvaus</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" rows="3" placeholder="Kirjoita kuvaus"></textarea>
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
    <!-- /form kirjoittaja info -->