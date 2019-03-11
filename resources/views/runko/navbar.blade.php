<!--Large navbar-->
<div class="d-none d-md-block">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <ul class="navbar-nav">
                <div class="row ">
                    <div class="col d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="index.php">Etusivu </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('teos') ? 'active' : '' }}" href="teos">Kirjat</a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('tilaukset') ? 'active' : '' }}" href="tilaukset"> Tilaukset
                            </a>
                        </li>
                    </div>
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kirjoittajat </a>
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
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="index.php">Etusivu </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('teos') ? 'active' : '' }}" href="teos">Kirjat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('tilaukset') ? 'active' : '' }}" href="tilaukset">Tilaukset</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kirjoittajat </a>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div> 