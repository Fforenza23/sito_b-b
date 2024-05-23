<nav class=" container-navbar navbar navbar-expand-lg">
    <div class="backg container-fluid">
        <div class="container-logo">
            <a href="{{ route('home') }}" class="backg">
                <img src='/img/Casa.di.Nonna.Lia3.png' alt="" class="logo">
            </a>
        </div>
        <div class="backg navbar-collapse" id="navbarNav">
            <ul class="navbar-nav backg">
                <li class="nav-item backg">
                    <a class="nav-link" aria-current="page" {{-- href="{{ route('chisiamo') }}" --}}class="backg">CHI SIAMO</a>
                </li>
                <li class="nav-item dropdown backg">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" class="backg">
                        STANZE </a>
                    <ul class="dropdown-menu backg">
                        <li><a class="dropdown-item backg" href="#">Stanza 1</a></li>
                        <li><a class="dropdown-item backg" href="#">Stanza 2</a></li>
                        <li><a class="dropdown-item backg" href="#">Stanza 3</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item dropdown backg">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" class="backg">
                        Servizi
                    </a>
                    <ul class="dropdown-menu backg">
                        <li><a class="dropdown-item backg" href="#">Stanza 1</a></li>
                        <li><a class="dropdown-item backg" href="#">Stanza 2</a></li>
                        <li><a class="dropdown-item backg" href="#">Stanza 3</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item backg">
                    <a class="nav-link" aria-current="page" href="#" class="backg"> SERVIZI</a>
                </li>
                <li class="nav-item backg">
                    <a class="nav-link" href="#" class="backg">PRENOTA</a>
                </li>
                <li class="nav-item backg">
                    <a class="nav-link" href="{{ route('contattaci') }}" class="backg">CONTATTACI</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navTablet navbar ">
    <div class="container-fluid">
        <div class="container-logo" style="width: 50%">
            <a href="{{ route('home') }}" class="backg">
                <img src='/img/Casa.di.Nonna.Lia3.png' alt="" class="logo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <div class="container-logo">
                    <a href="{{ route('home') }}" class="backg">
                        <img src='/img/Casa.di.Nonna.Lia3.png' alt="" class="logo">
                    </a>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" {{-- href="{{ route('chisiamo') }}" --}}class="backg">CHI SIAMO</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" class="backg">
                            STANZE </a>
                        <ul class="dropdown-menu backg">
                            <li><a class="dropdown-item backg" href="#">Stanza 1</a></li>
                            <li><a class="dropdown-item backg" href="#">Stanza 2</a></li>
                            <li><a class="dropdown-item backg" href="#">Stanza 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item backg">
                        <a class="nav-link" aria-current="page" href="#" class="backg"> SERVIZI</a>
                    </li>
                    <li class="nav-item backg">
                        <a class="nav-link" href="#" class="backg">PRENOTA</a>
                    </li>
                    <li class="nav-item backg">
                        <a class="nav-link" href="{{ route('contattaci') }}" class="backg">CONTATTACI</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
