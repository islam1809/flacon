<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flacon</title>
    <script src="https://unpkg.com/imask"></script>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/slick-1.8.1/slick/slick.css') }}">



</head>

<body>
    <div class="discount" id="discount" style="  background-color: #FF0080; padding:15px 0px 10px 0px;">
        <div class="container d-flex justify-content-between align-items-center">
            <p>Только до конца месяца <span style="font-family:suisseintl-bold">скидка 20%</span> на все
                наливные духи</p>
            <button class="btn p-0" id="hide" onclick="hide()" style="background: none; border: none;"> <img
                    src="{{ asset('/assets/images/cross.png') }}" alt="Close" style="width: 24px; height: 24px;">
            </button>
        </div>
    </div>
    <div class="content-width" style="background-color: #F1F4F9">
        <div class="container justify-content-between align-items-center ">
            <div class="row justify-content-between " style="padding: 13px 0">   

                <div class=" col-2  dropdown" style="width: fit-content">
                    <div class="conditions">
                        <p class="conditions-trigger">Условия работы</p>
                        <div class="conDropIc"></div>
                    </div>
                    <div class="drop-menuCondition">
                        <div class="condition-info">
                            <a href=""> Как сделать заказ </a>
                        </div>
                        <div class="condition-info">
                            <a href=""> Доставка/оплата</a>
                        </div>
                        <div class="condition-info">
                            <a href="">Система скидок</a>
                        </div>
                        <div class="condition-info">
                            <a href="">Рекдамные материалы</a>
                        </div>
                        <div class="condition-info">
                            <a href="">Сертификаты</a>
                        </div>
                        <div class="condition-info">
                            <a href="">Отзывы</a>
                        </div>
                        <div class="condition-info">
                            <a href="">Политика конфиденциальности</a>
                        </div>

                    </div>

                    {{--                     
                    <li class="services"><a href="/" class="about">Условия работы <img class="dropdown-icon"
                                src="{{ asset('/assets/images/arrowdown.png') }}" alt="">
                        </a>
                        <div class="dropdown-content ">
                            <a href="/">Как сделать заказ</a>
                            <a href="/">Доставка/оплата</a>
                            <a href="/">Система скидок</a>
                            <a href="/">Рекдамные материалы</a>
                            <a href="/">Сертификаты</a>
                            <a href="/">Отзывы</a>
                            <a href="/">Политика конфиденциальности</a>
                        </div>
                    </li> --}}
                </div>
                <div class="col-2">
                    <div class=" "><a href="" class="about">Франшиза</a></div>
                </div>
                <div class="col-2">
                    <div class=""><a href="" class="about">Блог</a></div>
                </div>
                <div class="col-2">
                    <div class=""><a href="" class="about">О нас</a></div>
                </div>
                <div class="col-2 text-end">
                    <div class=""><a href="" class="about"> Контакты</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding: 20px 0px">
        <div class="row justify-content-between align-items-center">
            <div class="col-3" style="padding-left:20px">
                <a href=""><img src="{{ asset('/assets/images/logo.png') }} "></a>
            </div>

            <div class="col-4 ">
                <div class="searchdiv">
                    <input class="form" type="search" placeholder="Поиск по товарам" aria-label="Search1">
                    <div class="searchbtn">
                    </div>
                </div>
            </div>
            <div class="col-2 dropdown">
                <div class="drop-trigger">
                    <p class="drop-triggerP">8 (800)-100-60-41</p>
                    <div class="dropIc"></div>
                </div>
                <div class="drop-menu">
                    <div class="content-info">
                        <a href="" style="font-family: suisseintl-medium"> 8 (800)-100-60-41 </a>
                        <p>Звонок бесплатный</p>
                    </div>
                    <div class="content-it">
                        <a href=""> +7 (903) 845 78 02</a>
                        <div class="whatsapp-icon"></div>
                        <div class="viber-icon"></div>
                    </div>
                    <div class="content-it">
                        <a href="">+7 (903) 845 78 02</a>
                        <div class="whatsapp-icon"></div>
                        <div class="viber-icon"></div>
                    </div>
                    <div class="content-it">
                        <a href="">+7 (903) 845 78 02</a>
                        <div class="whatsapp-icon"></div>
                        <div class="viber-icon"></div>
                    </div>
                    <div class="work-info">
                        <p>Время работы</p>
                        <p style="font-family: suisseintl-medium">ПН-ПТ 9:30-18:00</p>
                    </div>
                </div>

            </div>

            {{-- <ul class="nav">
                    <li class="services">
                        <a href="/" class="about">
                            <img class="dropdown-icon" src="{{ asset('/assets/images/arrowdown.png') }}" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="num">
                                <a class="dropdown-item" href="#">8 (800)-100-60-41</a>
                            </li>
                            <li class="dropdown-info">Звонок бесплатный</li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item num" href="#">+7 (903) 845 78 02</a>
                                <div class="whatsapp-icon"></div>
                                <div class="viber-icon"></div>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item num" href="#">+7 (903) 845 78 02</a>
                                <div class="whatsapp-icon"></div>
                                <div class="viber-icon"></div>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item num" href="#">+7 (903) 845 78 02</a>
                                <div class="whatsapp-icon"></div>
                                <div class="viber-icon"></div>
                            </li>
                            <li class="dropdown-info">Время работы:</li>
                            <li class="dropdown-info">ПН-ПТ 9:30-18:00</li>
                        </ul>
                    </li>
                </ul> --}}


            <div class="col-3 text-end">
                <div class="d-flex justify-content-end">
                    <a href="">
                        <div class="user-icon" style="margin-right: 20px">
                        </div>
                    </a>
                    <a href="">
                        <div class="favorite-icon" style="margin-right: 20px">
                        </div>
                    </a>
                    <div class="bag-prc d-flex align-items-center">
                        <a href="">
                            <div class="cart-with-badge">
                                <div class="bag-icon" style="margin-right: 5px">
                                </div>
                                <div class="badge">2</div>
                            </div>
                        </a>
                        <p style="margin: 0">1350₽</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" container-fluid" style="border-top: 2px solid #F1F4F9;border-bottom: 2px solid #F1F4F9">
        <div class="container justify-content-between align-items-center" style="padding: 19px 0;">
            <div class="row justify-content-between">
                <div class=" col-2 dropdown" style="padding-left: 18px">
                    <div class=""><a href="" class="about-parfum">Наливная информация </a></div>
                </div>
                <div class="col-2" style="padding-left:15px">
                    <div class=" "><a href="" class="about-parfum">Флаконы для духов </a></div>
                </div>
                <div class="col-2">
                    <div class=""><a href="" class="about-parfum">SPA-косметика</a></div>
                </div>
                <div class="col-2">
                    <div class=""><a href="" class="about-parfum">Ароматы для дома</a></div>
                </div>
                <div class="col-2 ">
                    <div class=""><a href="" class="about-parfum"> Аксессуары/Упаковка</a></div>
                </div>
                <div class="col-2 text-end">
                    <div class=""><a href="" class="about-parfum"> Готовые решения</a></div>
                </div>
            </div>
        </div>
    </div>

    {{-- BODY --}}
    {{-- start --}}

    <div class="hot-offers">
        <div class="offers-title d-flex">
            <img src="{{ asset('/assets/images/hot.svg') }}" alt="">
            <a href="">
                <p>Текущие акции</p>
            </a>
        </div>
    </div>
    <div class="content-banner">
        <div class="container">
            <div class="banner">
                <p>Производство и продажа парфюмерии, аромадиффузоров и флаконов</p>
                <div class="wholesale">ОПТОМ от 5000 руб.</div>
                <button>В Каталог</button>
            </div>
        </div>
    </div>


    {{-- Лидеры продаж --}}


    {{-- start --}}

    <div class="container" style="margin-top:104px">
        <div class="sales-header">
            <div class="row justify-content-between">
                <div class=" col-9 d-flex">
                    <p>Лидеры продаж</p>
                </div>
                <div class=" col-3 sales-arrow  text-end d-flex">
                </div>
            </div>
        </div>
    </div>


    {{-- Slick Modal window --}}
    {{-- start --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" style="padding: 30px 30px 40px">
                    <div class="row modal-window d-flex justify-space-between">
                        <div class="col-6" style="width: 44%">
                            <div class="slick-modal modal-parfum">
                                <div class="slide-modal">
                                    <img class="modal-productimage"
                                        src="{{ asset('/assets/images/Rectangle 2.svg') }}" alt="">
                                    <div class="modal-arrow"></div>
                                    <div class="stick-sale modal-sale">Sale</div>
                                    <div class="modal-new">New</div>
                                    <div class="stick-modal"><img
                                            src="{{ asset('/assets/images/Favorite.svg') }}"alt="">
                                    </div>
                                    <button class="modal-view-btn"
                                        data-bs-toggle="modal"data-bs-target="#exampleModal">
                                        <img src="{{ asset('/assets/images/modal-view.svg') }}"alt="">
                                    </button>
                                </div>

                                <div class="slide-modal">
                                    <img class="modal-productimage"
                                        src="{{ asset('/assets/images/Rectangle 1.svg') }}" alt="">
                                    <div class="modal-arrow"></div>
                                    <div class="stick-sale modal-sale">Sale</div>
                                    <div class="modal-new">New</div>
                                    <div class="stick-modal"><img src="{{ asset('/assets/images/Favorite.svg') }}"
                                            alt="">
                                    </div>
                                    <button class="modal-view-btn"
                                        data-bs-toggle="modal"data-bs-target="#exampleModal">
                                        <img src="{{ asset('/assets/images/modal-view.svg') }}"alt="">
                                    </button>
                                </div>
                                <div class="slide-modal">
                                    <div class="modal-arrow"></div>
                                    <div class="stick-sale modal-sale">Sale</div>
                                    <div class="modal-new">New</div>
                                    <div class="stick-modal"><img src="{{ asset('/assets/images/Favorite.svg') }}"
                                            alt="">
                                    </div>
                                    <button class="modal-view-btn"
                                        data-bs-toggle="modal"data-bs-target="#exampleModal"><img
                                            src="{{ asset('/assets/images/modal-view.svg') }}"
                                            alt=""></button>
                                    <img class="modal-productimage"
                                        src="{{ asset('/assets/images/Rectangle 3.svg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-flex  ">
                            <div class="slide-modal">
                                <div class="Revstick-sale">
                                    <p class="RevProduct-title">Shermadini House(LAB parfum) №159 (100мл)</p>
                                    Артикул:3938914 <span style="margin-left:15px"> Вес: 118г</span>
                                </div>
                                <div class="Revprice">
                                    <p>470 ₽ <span>690 ₽</span></p>
                                </div>
                                <div class="Revprice-info">
                                    <div class="Revtotal-price">
                                        <p>485 руб/шт <span>При общем заказе от 5.000 ₽</span></p>
                                        <p>480 руб/шт <span>При общем заказе от 10.000 ₽</span></p>
                                        <p>475 руб/шт <span>При общем заказе от 20.000 ₽</span></p>
                                        <p>470 руб/шт <span>При общем заказе от 50.000 ₽</span></p>
                                    </div>
                                </div>

                                <div class="Revmessangers-trig ">
                                    <div class="Revtrigger d-flex justify-content-between">
                                        Аромат №123456789
                                        <img src="{{ asset('/assets/images/formArrow.svg') }}" alt="">
                                    </div>

                                    <div class="RevCustom-options">
                                        <div class="Revcustom-option">
                                            <img class="customimage" src="{{ asset('/assets/images/black.png') }}"
                                                alt="">
                                            Черный
                                        </div>
                                        <div class="Revcustom-option">
                                            <img src="{{ asset('/assets/images/green.png') }}" alt="">
                                            Зеленый
                                        </div>
                                        <div class="Revcustom-option">
                                            <img src="{{ asset('/assets/images/orange.png') }}" alt="">
                                            Оранжевый
                                        </div>
                                        <div class="Revcustom-option">
                                            <img src="{{ asset('/assets/images/red.png') }}" alt="">
                                            Красный
                                        </div>

                                    </div>
                                </div>
                                <div class="buttonsMore d-flex justify-content-between" style="margin: 20px 0">
                                    <button class="Red">10мл</button>
                                    <button>18мл</button>
                                    <button>32мл</button>
                                    <button>50мл</button>
                                    <button>100мл</button>
                                </div>
                                <div class="quantityBtn d-flex">
                                    <button class="minus">-</button>
                                    1
                                    <button class="plus">+</button>
                                    <button class="addBtn">Добавить в Карзину</button>
                                </div>
                                <button class="somoreBtn">Подробнее</button>
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary closeReviews" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

    <div class="container" style="margin-top:35px">
        <div class="slick-carousel">
            <div class=" custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-new">New</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> Быстрый
                    просмотр</button>
                <img class="productimage" src="{{ asset('/assets/images/Rectangle 1.svg') }}" alt="">
                <p class="product-title">Dimond 18мл голубой </p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img class="productimage" src="{{ asset('/assets/images/Rectangle 2.svg') }}" alt="">
                <p class="product-title">Shermadini House(LAB parfum) №159 (100мл)</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Hit</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img src="{{ asset('/assets/images/Rectangle 3.svg') }}" alt="">
                <p class="product-title">Мерцающая соль "Виноград" 300гр</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-new">New</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img src="{{ asset('/assets/images/Rectangle 4.svg') }}" alt="">
                <p class="product-title">Hugo 30гр Pink</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img src="{{ asset('/assets/images/Rectangle 2.svg') }}" alt="">
                <p class="product-title">Hugo 30гр Pink</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img src="{{ asset('/assets/images/Rectangle 4.svg') }}" alt="">
                <p class="product-title">Hugo 30гр Pink</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img src="{{ asset('/assets/images/Rectangle 1.svg') }}" alt="">
                <p class="product-title">Hugo 30гр Pink</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="stick-sale">Sale</div>
                <div class="stick-new">New</div>
                <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}" alt="">
                </div>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <button class="stick-view-btn">Быстрый просмотр</button>
                <img src="{{ asset('/assets/images/Rectangle 3.svg') }}" alt="">
                <p class="product-title">Hugo 30гр Pink</p>
                <div class="description">
                    <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                    <button class="product-btn">Узнать цену</button>
                </div>
            </div>
            <div class="custom-slide">
                <div class="custom-slide">
                    <div class="stick-sale">Sale</div>
                    <div class="stick-favorite"><img src="{{ asset('/assets/images/Favorite.svg') }}"
                            alt=""></div>
                    <button class="stick-view-btn">Быстрый просмотр</button>
                    <button class="stick-view-btn">Быстрый просмотр</button>
                    <img class="productimage" src="{{ asset('/assets/images/Rectangle 3.svg') }}" alt="">
                    <p class="product-title">Shermadini House(LAB parfum) №159 (100мл)</p>
                    <div class="description">
                        <p class="product-descript">Ночной / Апельсин / Зима / Осень</p>
                        <button class="product-btn">Узнать цену</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end --}}

    {{-- Получите подарок --}}

    {{-- start  --}}

    <div class="btn-center">
        <button>В каталог</button>
    </div>

    <div class="container">
        <div class="banner banner-form">
            <p style="margin: 0">Получите каталог</p>
            <div class="form">
                <form action="">
                    <label for="">Введите ваш номер телефона</label>
                    <input id="selector" class="selector" type="tel" placeholder="+ (___) ___-__-__"
                        maxlength="18">
                    <label for="">Куда прислать каталог?</label>
                    <div class="messangers-trig ">
                        <div class="custom-trigger d-flex justify-content-between">
                            Выберите мессенджер
                            <img src="{{ asset('/assets/images/formArrow.svg') }}" alt="">
                        </div>

                        <div class="custom-options">
                            <div class="custom-option">
                                <img class="customimage" src="{{ asset('/assets/images/tgHover.svg') }}"
                                    alt="">
                                Telegram
                            </div>
                            <div class="custom-option">
                                <img src="{{ asset('/assets/images/whatsappHover.png') }}" alt="">
                                Whatsapp
                            </div>
                            <div class="custom-option">
                                <img src="{{ asset('/assets/images/viberHover.png') }}" alt="">
                                Viber
                            </div>

                        </div>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="customCheckbox">
                        <label for="customCheckbox">
                            Я согласен(-на) на обработку персональных данных и с <span> <a href="">условиями
                                    подписки</a></span>
                        </label>
                    </div>
                </form>
                <button style="width:100%; margin-top:20px; ">Получить</button>
            </div>

        </div>
    </div>
    {{-- end --}}

    {{-- Наливная парфюмерия  --}}

    {{-- start --}}


    <div class="container" style="margin-top:100px">
        <div class="categ-row row d-flex">
            <div class="content-parfum col-lg-6 d-flex flex-column ">
                <div class="imgwrap">
                    <a href="">
                        <img src="{{ asset('/assets/images/parfum.png') }}" alt="">
                    </a>
                </div>
                <a href="" class="parfum-descript">
                    Наливная парфюмерия
                </a>
                <a href="" class="parfumarrow">Подробнее
                    <span>
                        <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                    </span>
                </a>
            </div>

            <div class="right-sec d-flex col-6 flex-end">
                <div class="card-wrap d-flex flex-column">
                    <div class="second-imgwrap">
                        <a href="">
                            <img src="{{ asset('/assets/images/parfum 2.png') }}" alt="">
                        </a>
                    </div>
                    <a href="" class="parfum-descript">
                        Стеклянные флаконы из прозрачного стекла
                    </a>
                    <a href="" class="parfumarrow">Подробнее
                        <span>
                            <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="card-wrap d-flex flex-column">
                    <div class="second-imgwrap">
                        <a href="">
                            <img src="{{ asset('/assets/images/parfum 3.png') }}" alt="">
                        </a>
                    </div>
                    <a href="" class="parfum-descript">
                        Стеклянные фдаконы из цветного стекла
                    </a>
                    <a href="" class="parfumarrow">Подробнее
                        <span>
                            <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="card-wrap d-flex flex-column">
                    <div class="second-imgwrap">
                        <a href="">
                            <img src="{{ asset('/assets/images/parfum 4.png') }}" alt="">
                        </a>
                    </div>
                    <a href="" class="parfum-descript">
                        Пластиковые флаконы
                    </a>
                    <a href="" class="parfumarrow">Подробнее
                        <span>
                            <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                        </span>
                    </a>
                </div>
                <div class="card-wrap d-flex flex-column">
                    <div class="second-imgwrap">
                        <a href="">
                            <img src="{{ asset('/assets/images/parfum 4.png') }}" alt="">
                        </a>
                    </div>
                    <a href="" class="parfum-descript">
                        Металлические флаконы
                    </a>
                    <a href="" class="parfumarrow">Подробнее
                        <span>
                            <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                        </span>
                    </a>
                </div>
            </div>


        </div>

        <div class=" row justify-content-between" style="margin-top: 30px">
            <div class="col-lg-4 d-flex flex-column ">
                <div class="imgwrap-sec imgwrap-thr">
                    <a href="">
                        <img src="{{ asset('/assets/images/parfum 5.png') }}" alt="">
                    </a>
                </div>
                <a href="" class="parfum-descript">
                    Наливная парфюмерия
                </a>
                <a href="" class="parfumarrow">Подробнее
                    <span>
                        <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                    </span>
                </a>
            </div>

            <div class="col-lg-4 d-flex flex-column" style="margin-left: 30px">
                <div class="imgwrap-sec imgwrap-thr">
                    <a href="">
                        <img src="{{ asset('/assets/images/parfum 6.png') }}" alt="">
                    </a>
                </div>
                <a href="" class="parfum-descript">
                    Наливная парфюмерия
                </a>
                <a href="" class="parfumarrow">Подробнее
                    <span>
                        <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                    </span>
                </a>
            </div>

            <div class="col-lg-4 d-flex flex-column lastdiv ">
                <div class="imgwrap-sec imgwrap-thr">
                    <a href="">
                        <img src="{{ asset('/assets/images/parfum 7.png') }}" alt="">
                    </a>
                </div>
                <a href="" class="parfum-descript">
                    Наливная парфюмерия
                </a>
                <a href="" class="parfumarrow">Подробнее
                    <span>
                        <img src="{{ asset('/assets/images/parf-right.svg') }}" alt="">
                    </span>
                </a>
            </div>
        </div>

    </div>
    {{-- end --}}


    {{-- Count section  --}}

    {{-- start --}}
    <div class="container count-section">
        <div class=" row count-number d-flex justify-space-between">
            <div class="col-lg-4">
                <div data-num=2016 data-step="10" id="number1" class="number">0</div>
                <p>год основания бренда</p>
            </div>
            <div class="col-lg-4">
                <div id="number2" class="number" data-num="250" data-step="5">0</div>
                <p>видов парфюма</p>
            </div>
            <div class="col-lg-4">
                <div data-num="5000000" data-step="10000" id="number3" class="number">0</div>
                <p>проданных флаконов</p>
            </div>
        </div>
    </div>

    {{-- end --}}


    {{-- Map section --}}

    {{-- start --}}
    <div class="container" style="margin-top: 100px">
        <div class="row map">
            <div class="col-6 map-section d-flex flex-column">
                <p>Станьте нашим диллером</p>
                Если вы хотите стать нашим диллером,<br>
                свяжитесь с нами:
                <div class="map-contacts">
                    <a href="tel:8 800-100-60-41">8 800-100-60-41</a>
                    <a href="mailto:diler@flacon-opt.ru">diler@flacon-opt.ru</a>
                </div>
                <button class="map_btn">Оставить заявку</button>
            </div>

            <div class="col-6 map-img justify-content-end ">
                <img src="{{ asset('/assets/images/map.png') }}" alt="">
                <img class="pin pinsimg1" src="{{ asset('/assets/images/Pin_fill.svg') }}" alt="">
                <img class="pin pinsimg2" src="{{ asset('/assets/images/Pin_fill.svg') }}" alt="">
                <img class="pin pinsimg3" src="{{ asset('/assets/images/Pin_fill.svg') }}" alt="">
                <img class="pin pinsimg4" src="{{ asset('/assets/images/Pin_fill.svg') }}" alt="">
                <img class="pin pinsimg5" src="{{ asset('/assets/images/Pin_fill.svg') }}" alt="">
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- Этапы работы  --}}

    {{-- start --}}
    <div class="container" style="margin-top: 100px">
        <div class="stage">
            <p>Этапы работы</p>

            <div class="row work-stages justify-content-between">
                <div class="col-lg-4 stages-card">
                    <img src="{{ asset('/assets/images/card-stages.png') }}" alt="">
                    <div class="stage-stick">1</div>
                    <p>Оставить заявку</p>
                </div>
                <div class="col-lg-4 stages-card ">
                    <img src="{{ asset('/assets/images/card-stages2.png') }}" alt="">
                    <div class="stage-stick">2</div>
                    <p>Оформление заказа</p>
                </div>
                <div class="col-lg-4 stages-card">
                    <img src="{{ asset('/assets/images/card-stages3.png') }}" alt="">
                    <div class="stage-stick">3</div>
                    <p>Доставка и получение</p>
                </div>
            </div>
        </div>
    </div>

    {{-- end --}}

    {{-- Сертификаты --}}

    {{-- start --}}

    <div class="container" style="margin-top:104px">
        <div class="sales-header">
            <div class="row justify-content-between">
                <div class=" col-9 d-flex">
                    <p>Наши сертификаты</p>
                </div>
                <div class=" col-3 certificate-arrow  justify-content-end d-flex">
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:35px">
        <!-- Первое модальное окно -->
        <div class="modal fade" id="firstModal" tabindex="-1" aria-labelledby="firstModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Второе модальное окно -->
        <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="thirdModal" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body ">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="fourthModal" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body ">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="fivthModal" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body ">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="sixthModal" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body ">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="seventh" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body ">
                        <img src="{{ asset('/assets/images/certificate 0.png') }}" class="img-fluid" alt="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                        </button>
                    </div>

                </div>
            </div>
        </div>



        <div class="slick-cert">
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#firstModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 1.png') }}" alt="">
            </div>
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#secondModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 2.png') }}" alt="">
            </div>
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#thirdModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 3.png') }}" alt="">
            </div>
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#fourthModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 1.png') }}" alt="">
            </div>
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#fivthModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 2.png') }}" alt="">
            </div>
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#sixthModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 3.png') }}" alt="">
            </div>
            <div class="our-certif">
                <button data-bs-toggle="modal" data-bs-target="#seventhModal"><img
                        src="{{ asset('/assets/images/Search_cert.svg') }}" alt=""></button>
                <div class="overlay"></div>
                <img src="{{ asset('/assets/images/certificate 1.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- end --}}

    {{-- Отзывы --}}

    {{-- start --}}
    <div class="container" style="margin-top:104px">
        <div class="sales-header">
            <div class="row justify-content-between">
                <div class=" col-9 d-flex">
                    <p>Отзывы клиентов</p>
                </div>
                <div class=" col-3 reviews-arrow  justify-content-end d-flex">
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 50px">


        {{-- reviews modal --}}
        {{-- start --}}
        <div class="modal fade" id="reviewsdModal" tabindex="-1" aria-labelledby="secondModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable custom-modal">
                <div class="modal-content modal-con ">
                    <div class="reviews-cardMod">
                        <div class="avatarMod">О</div>
                        <div class="review-titleMod">
                            <p style="margin: 0">Ольга Иванова</p>
                            г.Москва
                        </div>
                    </div>
                    <div class="modal-body modalReviews">
                        <p>Посылка пришла через неделю после оформления заказа. Упаковка была целой, флаконы не
                            повреждены. Но когда я открыла их, то почувствовала резкий химический запах. Он был
                            настолько сильным, что у меня даже закружилась голова. На следующий день я решила проверить
                            ароматы ещё раз. К моему удивлению, они пахли совсем иначе! Правда, было ощущение, что я
                            нюхаю духи, которым уже несколько лет. Ароматы были плоскими и быстро исчезали. Я
                            расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную
                            парфюмерию. Я давно хотела попробовать наливную парфюмерию, но всё не решалась. Подруга
                            уговорила меня сделать заказ в одном популярном интернет-магазине. Она сказала, что там
                            очень большой выбор ароматов и можно купить отливант любого объёма. Я долго сомневалась, но
                            потом решилась заказать два аромата по 10 мл.

                            Посылка пришла через неделю после оформления заказа. Упаковка была целой, флаконы не
                            повреждены. Но когда я открыла их, то почувствовала резкий химический запах. Он был
                            настолько сильным, что у меня даже закружилась голова. На следующий день я решила проверить
                            ароматы ещё раз. К моему удивлению, они пахли совсем иначе! Правда, было ощущение, что я
                            нюхаю духи, которым уже несколько лет. Ароматы были плоскими и быстро исчезали. Я
                            расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную
                            парфюмерию. Я давно хотела попробовать наливную парфюмерию, но всё не решалась. Подруга
                            уговорила меня сделать заказ в одном популярном интернет-магазине. Она сказала, что там
                            очень большой выбор ароматов и можно купить отливант любого объёма. Я долго сомневалась, но
                            потом решилась заказать два аромата по 10 мл.
                        </p>
                    </div>
                    <button type="button" class="btn btn-secondary closeReviews" data-bs-dismiss="modal">
                        <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                    </button>

                    <div class="reviewButtons ">
                        <button class="reviewsButton">
                            Оставить отзыв
                        </button>

                        <button class="reviewsButton">
                            СМ. все отзывы
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}

        <div class="slick-reviews">
            <div class="reviews-card">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar" style="background-color: #00FFFF; color:black">Р</div>
                <div class="review-title">
                    <p>Раиса Шевцова</p>
                    г. Челябинск
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Екатерина Артемьева</p>
                    г. Челябинск
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar" style="background-color: #00FFFF; color:black">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card" style="background-color: #00FFFF; color:black">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>

            <div class="reviews-card">
                <div class="avatar">О</div>
                <div class="review-title">
                    <p>Ольга Иванова</p>
                    г.Москва
                </div>
                <p>Посылка пришла через неделю после оформления заказа.
                    Упаковка была целой, флаконы не повреждены. Но когда я открыла их,
                    то почувствовала резкий химический запах. Он был настолько сильным, что у меня даже закружилась
                    голова.
                    На следующий день я решила проверить ароматы ещё раз. К моему удивлению, они пахли совсем иначе!
                    Правда, было ощущение, что я нюхаю духи, которым уже несколько лет. Ароматы были плоскими и
                    быстро
                    исчезали.
                    Я расстроилась, потому что потратила деньги зря. Больше я никогда не куплю наливную парфюмерию.
                </p>
                <button data-bs-toggle="modal" data-bs-target="#reviewsdModal"> Читать полностью</button>
            </div>
        </div>
    </div>


    <div class="btn-center">
        <div class="avter-reviews-btn">
            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#btnCentereModal"
                data-bs-whatever="@mdo">
                Оставить отзыв
            </button>
            <button>См. все отзывы</button>
        </div>
    </div>

    {{-- revierws Оставить отзыв --}}
    {{-- start --}}
    <div class="modal fade" id="btnCentereModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content putreviews">
                <div class="modal-body" style="padding: 0">
                    <div class="avatarPut">О</div>
                    <div class="review-titlePut">
                        <p>Ольга Иванова</p>
                        г.Москва
                    </div>
                    <textarea class="form-control" id="message-text" placeholder="Напишите ваш отзыв"></textarea>
                </div>
                <div class="modal-footer" style="padding: 0">
                    <button type="button" class="btn btn-primary">Отправить</button>
                </div>
                <button type="button" class="btn btn-secondary closeReviews" data-bs-dismiss="modal">
                    <img src="{{ asset('/assets/images/btn-closeModal.png') }}" alt="">
                </button>
            </div>
        </div>
    </div>

    {{-- end --}}


    <div class="container" style="margin-bottom: 100px">
        <div class="row justify-content-between ">
            <div class="col-lg-4 last-cards">
                <img src="{{ asset('/assets/images/last_cards .png') }}" alt="">
                <p>Оригальное сырье из <br> Франции</p>
            </div>
            <div class="col-lg-4 last-cards">
                <img src="{{ asset('/assets/images/last-cards  2.png') }}" alt="">
                <p>Сертифицированное <br>производство</p>

            </div>
            <div class="col-lg-4 last-cards">
                <img src="{{ asset('/assets/images/last-cards  3.png') }}" alt="">
                <p>Бесплатные <br>пробники</p>

            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- end --}}

    <footer>
        <div class="last-arrow">
            <button>
                <img src="{{ asset('/assets/images/last-arrow.png') }}" alt="">
            </button>
        </div>
        <div class="container justify-content-between ">
            <div class="row justify-content-between align-items-start footer-catalog ">

                <div class="col-3 footer-content d-flex flex-column">
                    <p class="footer-title">Каталог</p>
                    <a href="">Флаконы для духов</a>
                    <a href="">Наливная парфюмерия</a>
                    <a href="">СПА косметика</a>
                    <a href=""> Ароматы для дома</a>
                    <a href="">Аксессуары/Упаковка</a>
                </div>
                <div class="col-3 footer-content d-flex flex-column">
                    <p class="footer-title">Условия работы</p>
                    <a href="">Как сделать заказ</a>
                    <a href="">Доставка/оплата</a>
                    <a href="">Скидочная система</a>
                    <a href="">Диллерство</a>
                    <a href="">Рекламные материалы</a>
                    <a href="" style="margin-bottom: 30px">Сертификаты</a>
                </div>
                <div class="col-3 footer-content d-flex flex-column">
                    <p class="footer-title">Контакты</p>
                    <p style="opacity: 0.75"> Время работы: с 09:30 до 18:00, ПН-ПТ</p>
                    <a href="">8 (800) 100 60 41 - звонок по РФ бесплатно </a>
                    <a href="">+7 (903) 845 78 02 - Whatsapp/Viber</a>
                    <a href="">+7 (909) 260 97 97 - Whatsapp/Viber</a>
                    <a href="">+7 (903) 841 66 77 - Whatsapp/Viber</a>
                </div>
                <div class="col-3 footer-content d-flex flex-column">
                    <p class="footer-title">О нас</p>
                    <p style="opacity: 0.75">Производсто и Оптовая продажа Парфюма и Флаконов по России и СНГ </p>
                    <p style="opacity: 0.75">Достовляем закакзы в любой город России, Беларуси,Казахстана и Армении
                    </p>
                    <div class="footer-contact-ic d-flex justify-content-between" style="margin-top: 56px">
                        <a href="" class="footer-ic">
                            <div class="vk"></div>
                        </a>
                        <a href="" class="footer-ic">
                            <div class="youtube"></div>
                        </a>
                        <a href="" class="footer-ic">
                            <div class="telegram"></div>
                        </a>
                        <a href="" class="footer-ic">
                            <div class="whatsapp"></div>
                        </a>
                        <a href="" class="footer-ic">
                            <div class="viber"></div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container logos d-flex" style=" padding:30px 0">
            <div class="col-4" style="padding-top: ">
                <img src="{{ asset('/assets/images/logo.svg') }} ">
            </div>
            <div class="col-4">
                <img src="{{ asset('/assets/images/Frame 3181.svg') }} ">
            </div>
            <div class="col-4">
                <img src="{{ asset('/assets/images/Frame 3184.svg') }} ">
            </div>
        </div>
        <div class="container company-since d-flex justify-content-between" style="padding-top: 15px">
            <div class="col4">
                <p>Работаем с 2016 года.</p>
            </div>
            <div class="col4">
                <p>Работаем с 2016 года.</p>
            </div>
            <div class="col4">
                <p>Работаем с 2016 года.</p>
            </div>
        </div>
    </footer>


    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>



</body>

</html>
