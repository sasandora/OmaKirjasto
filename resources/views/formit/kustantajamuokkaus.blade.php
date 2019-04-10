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
            <h3 class="mb-0">Muokkaa kustantajaa</h3>
        </div>
        <div class="card-body">
            <form action="/kustantajat/{{$kustantaja->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Toiminimi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nimi" type="text" value="{{$kustantaja->nimi}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Kotipaikka</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="kotipaikka" type="text" value="{{$kustantaja->kotipaikka}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Perustamisvuosi</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="perustamisvuosi" type="number" value="{{$kustantaja->perustamisvuosi}}">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Lopettamisvuosi</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="lopettamisvuosi" type="number" value="{{$kustantaja->lopettamisvuosi}}">
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
    <div class="card ">
        <div class="card-header>
            <div class="card-body">
                <form action="/kustantajat/{{$kustantaja->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="col-lg-9">
                        <input type="button" onclick="varmistus(form)" class="btn btn-danger" value="Poista" style="float:right">

                        <script>
                            function varmistus(form) {
                                if (confirm("Haluatko varmasti poistaa kustantajan {{$kustantaja->nimi}}?")) {
                                    form.submit();
                                }
                            }
                        </script>

                    </div>
                </form>
            </div>
        </div> 