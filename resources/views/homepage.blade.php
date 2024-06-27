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
        <div class="container d-flex justify-content-between align-items-center">
            <p style="color: white; margin-bottom: 0;">Только до конца месяца <span style="">скидка 20%</span> на
                все наливные духи</p>
            <button class="btn p-0" style="background: none; border: none;">
                <img src="{{ asset('/assets/images/cross.png') }}" alt="Close" style="width: 24px; height: 24px;">
            </button>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-3 me-auto ">
            <div class=" p-3 dropdown">
                <li class="services"><a href="/">Условия работы <img class="dropdown-icon"
                            src="{{ asset('/assets/images/arrowdown.png') }}" alt="">
                    </a>
                    <div class="dropdown-content">
                        <a href="/">Как сделать заказ</a>
                        <a href="/">Доставка/оплата</a>
                        <a href="/">Система скидок</a>
                        <a href="/">Рекдамные материалы</a>
                        <a href="/">Сертификаты</a>
                        <a href="/">Отзывы</a>
                        <a href="/">Политика конфиденциальности</a>
                    </div>
                </li>
            </div>
            <div class="col">
                <div class="p-3 "><a href="">Франшиза</a></div>
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
            <img src="{{ asset('/assets/images/logo.png') }} ">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="services"><a href="/">8(800)-100-60-41 <img class="dropdown-icon" src="{{ asset('/assets/images/arrowdown.png') }}" alt=""></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="num"><a class="dropdown-item" style="padding-top: 20px"
                                    href="#">8(800)-100-60-41</a></li>
                            <li style="padding: 0px 0px 15px 13px !important; font-size:small">Звонок бесплатный</li>
                            <li class="num"><a class="dropdown-item" href="#">+7 (903) 845 78 02 <img
                                        class="phoneicon" src="{{ asset('/assets/images/whatsapp2.png') }}"> <img
                                        src="{{ asset('/assets/images/viber.png') }}"></a></li>
                            <li class="num"><a class="dropdown-item" href="#">+7 (909) 260 97 97 <img
                                        class="phoneicon" src="{{ asset('/assets/images/whatsapp2.png') }}"> <img
                                        src="{{ asset('/assets/images/viber.png') }}"></a></li>
                            <li class="num"><a class="dropdown-item" href="#">+7 (903) 841 66 77 <img
                                        class="phoneicon" src="{{ asset('/assets/images/whatsapp2.png') }}"> <img
                                        src="{{ asset('/assets/images/viber.png') }}"></a></li>
                            <li style="padding: 15px 0px 0px 17px ; font-size:small" >Время работы:</li>
                            <li style="padding-left: 17px">ПН-ПТ 9:30-18:00</li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>

</body>

</html>
