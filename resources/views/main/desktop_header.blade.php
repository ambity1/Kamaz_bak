<header class="d-none d-md-block">
    <div class="header_upper">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="text-uppercase">
                Официальный дилер JAECOO - Башавтоком
            </div>
            <div class="d-flex align-items-center header_upper-contacts">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="/assets/img/headericons/loc.svg" alt="">
                    </div>
                    <div>
                        г. Уфа, ул. Адмирала Макарова, 32
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="/assets/img/headericons/tel.svg" alt="">
                    </div>
                    <a href="tel:+73472165577" style="white-space: nowrap;">
                        +7 (347) 216-55-77
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="sticky-header d-flex">
    <div class="header_mid position-relative flex-grow-1">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div class="logo d-flex align-items-center">
                <a href="/" id="logo" class="d-flex flex-row align-items-center">
                    <img src="/media/header/logo.svg">
                </a>
            </div>
            <div id="logo_bash" class="d-none d-xxl-flex align-items-center justify-content-center"><img src="/media/header/bashavto_logo_n.svg"></div>
            <nav class="d-flex flex-grow-1 justify-content-end align-items-center">
                <div class="d-none d-md-flex align-items-center links">
                    <a href="/#models" class="d-flex align-items-center">Модели<img src="/assets/img/headericons/arr_dwn.svg"></a>
                    <div class="modelsGrid">
                        <div class="container">
                            <div class="d-grid">
                                <a href="/jaecoo-J7">
                                    <div class="d-flex flex-column align-items-center modelsGrid-el">
                                        <img src="/media/slider/jaecoo_J7.png">
                                        <div>
                                            <h2 class="text-center">J7</h2>
                                            <p class="text-center">От {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>1</sup></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="/jaecoo-J8">
                                    <div class="d-flex flex-column align-items-center modelsGrid-el">
                                        <img src="/media/J8/blue.webp">
                                        <div>
                                            <h2 class="text-center">J8</h2>
                                            <p class="text-center">От {{ number_format(config('price.j8'), 0, ',', ' ') }} ₽<sup>4</sup></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="/jaecoo-J7-LE">
                                    <div class="d-flex flex-column align-items-center modelsGrid-el">
                                        <img src="/media/J7_LE/white2.png">
                                        <div>
                                            <h2 class="text-center">J7 LE</h2>
                                            <p class="text-center">От {{ number_format(config('price.j7-le'), 0, ',', ' ') }} ₽<sup>3</sup></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="/j5premiere">
                                    <div class="d-flex flex-column align-items-center modelsGrid-el">
                                        <img src="/media/j5Premiere/picj5.webp">
                                        <div>
                                            <h2 class="text-center">J5</h2>
                                            <p class="text-center">СКОРО В РОССИИ</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-flex d-none align-items-center links">
                    <a class="align-items-center d-none d-lg-flex">Владельцам<img src="/assets/img/headericons/arr_dwn.svg"></a>
                    <div class="ownerGrid">
                        <div class="container">
                            <div class="d-flex flex-column">
                                <a href="/service">
                                    <p style="color: black; margin: 0" class="text-center">Кузовной ремонт</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <a href="/#aboutDealer" toblock="aboutDealer" class="link d-none d-md-block">О дилере</a>--}}
{{--                <a href="/news" class="link d-none d-md-block">Новости</a>--}}
                <a href="/#contacts" toblock="contacts" class="link d-none d-lg-block">Контакты</a>
                <div class="d-flex align-items-center d-none d-md-flex" style="gap: 8px">
                    <div class="d-flex align-items-center">
                        <img src="/assets/img/headericons/tel-b.svg" alt="">
                    </div>
                    <a href="tel:+73472165577" style="white-space: nowrap; color: black; font-size: 16px">
                        +7 (347) 216-55-77
                    </a>
                </div>
                <div class="btn btn-black-trnsp d-none d-xxl-block askMe askMeSpec" style="white-space: nowrap;">Получить спецпредложение</div>
                <div class="header_mid-burger d-flex align-items-center justify-content-center d-xxl-none" onclick=" document.querySelector('body').style.overflowY='hidden'; document.querySelector('.sidenav').classList.add('active');">
                    <div></div>
                </div>
            </nav>
        </div>
    </div>
</div>
