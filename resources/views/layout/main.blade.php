<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive_style.css">
    <script src="https://kit.fontawesome.com/fc56662415.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-2 border-warning"
        data-bs-theme="dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>R<span class="text-warning">I</span>FQY</b></a>
            <button
                class="navbar-toggler border border-white"
                type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="transition:0.5s">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/about'}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/portofolio'}}">Portofolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                        class="nav-link dropdown-toggle"
                        href="#" role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://wa.me/6282321213637" target="_blank">Contact (WA)</a></li>
                            <li><a class="dropdown-item" href="{{'/cv'}}">CV</a></li>
                            <li><a class="dropdown-item" href="{{'/project'}}">Project</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{'/lapres'}}">Pengumpulan Lapres</a></li>
                            <li><a class="dropdown-item" href="{{'/games'}}">Games</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- SECTION -->
    @yield('content')
    <section class="bg-dark d-flex justify-content-center align-items-center position-absolute"
    style="height:60px; width:100%; z-index:8;">
        <span class="far fa-copyright text-secondary" style="font-size: 12pt"></span>
        <span class="text-secondary" style="font-size: 12pt; margin-left:4px">Moh Rifqy Risqullah   |  2023</span>
    </section>
</body>
</html>