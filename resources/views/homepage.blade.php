<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flacon</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>
    <div class="discount">
        <div class="container d-flex">
            <p style="color: white;">Только до конца месяца <span>скидка 20%</span> на все наливные духи</p>
            <button style="background: none; border:none; color:white"> <img
                    src="{{ asset('/assets/images/cross.png') }}"></button>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <div class=" p-3 dropdown">
             <a href="/" class="dropbtn">Условия работы</a>
             <div class="dropdowncontent">
             </div>
            </div>
            <div class="col">
                <div class="p-3"><a href="">Франшиза</a></div>
            </div>
            <div class="col">
                <div class="p-3"><a href="">Блог</a></div>
            </div>
            <div class="col">
                <div class="p-3"><a href="">О нас</a></div>
            </div>
            <div class="col">
                <div class="p-3"><a href=""> Контакты</a></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    
</body>

</html>
