<!--Large navbar-->
<div class="d-none d-md-block">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <ul class="navbar-nav">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Etusivu </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('teos') ? 'active' : '' }}" href="{{ URL::to('/teos') }}">Kirjat</a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('sarjat') ? 'active' : '' }}" href="{{ URL::to('/sarjat') }}"> Sarjat</a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('tilaukset') ? 'active' : '' }}" href="{{ URL::to('/tilaukset') }}"> Tilaukset
                            </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('kirjoittajat') ? 'active' : '' }}" href="{{ URL::to('/kirjoittajat') }}">Kirjoittajat </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('kustantajat') ? 'active' : '' }}" href="{{ URL::to('/kustantajat') }}">Kustantajat </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('toimituspaikat') ? 'active' : '' }}" href="{{ URL::to('/toimituspaikat') }}">Toimituspaikat </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('toimittajat') ? 'active' : '' }}" href="{{ URL::to('/toimittajat') }}">Myyjät </a>
                        </li>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</div>

<!--Mobile navbar-->
<div class="d-md-none">
    <nav class="navbar navbar-toggleable-md navbar-dark bg-dark fixed-top">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col d-flex ">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Etusivu </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('teos') ? 'active' : '' }}" href="{{ URL::to('/teos') }}">Kirjat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('sarjat') ? 'active' : '' }}" href="{{ URL::to('/sarjat') }}"> Sarjat</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('tilaukset') ? 'active' : '' }}" href="{{ URL::to('/tilaukset') }}"> Tilaukset</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('kirjoittajat') ? 'active' : '' }}" href="{{ URL::to('/kirjoittajat') }}">Kirjoittajat </a>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div> 