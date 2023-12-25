<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard | Teman Ambis</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/css/dashboard.css" rel="stylesheet">


</head>

<body>

    <header class="navbar sticky-top flex-md-nowrap p-0 shadow" style="background-color: #195A5C">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admin/event"><img src="/img/logo.png" class="img-fluid"
                alt="" srcset=""></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">LOGOUT</button>
                </form>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 mt-5 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/admin/event">
                                <span data-feather="home"></span>
                                Event Review
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown"  aria-expanded="false">
                                <span data-feather="file"></span>
                                Materi Pembelajaran
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/admin/materi/1">SAINTEK</a></li>
                                <li><a class="dropdown-item" href="/admin/materi/2">SOSHUM</a></li>
                                <li><a class="dropdown-item" href="/admin/materi/3">TPS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="/admin/users">
                                <span data-feather="users"></span>
                                Manage User
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('main_body')
            </main>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>

</body>
