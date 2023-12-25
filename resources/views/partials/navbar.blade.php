<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #195A5C">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/img/logo.png" width="150rem" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Materi Pembelajaran
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/materi/1">SAINTEK</a></li>
                        <li><a class="dropdown-item" href="/materi/2">SOSHUM</a></li>
                        <li><a class="dropdown-item" href="/materi/3">TPS</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tryout">Tryout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Magazine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutus">About Us</a>
                </li>
            </ul>
            @auth
                <div class="btn-group">
                    <div class="btn-group dropstart" role="group">
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropstart</span>
                        </button>
                        <ul class="dropdown-menu">
                            <form action="/logout" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">LOGOUT</button>
                            </form>
                        </ul>
                    </div>
                    <a href="/user"><img src="/img/User.png" alt=""></a>
                </div>
            @endauth
            @guest
                <a href="/login"><button class="btn btn-warning rounded-pill m-1">Login</button></a>
                <a href="/register"><button class="btn btn-warning rounded-pill m-1">Sign Up</button></a>
            @endguest

        </div>
    </div>
</nav>
