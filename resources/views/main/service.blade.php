@extends('desktop_main')

@section('title', 'Сервис | Башавтоком - Официальный дилер Jaecoo в Уфе')
@section('description', 'Официальный дилер jaecoo в Уфе. На сайте вы можете подобрать и купить автомобиль ДЖЕЙКУ на свой вкус. Для информации звоните: +7 (347) 216 55 77')

@section('content')
<main>
    <section class="remont-container ">
        <div  class="grid-container remont d-flex flex-column container">
            <div class="remont-title-container d-flex flex-column">
                <div class="remont-navigation">
                    <a href="/">Главная / </a>
                    <a>Кузовной ремонт</a>
                </div>
                <h1>КУЗОВНОЙ РЕМОНТ ЛЮБОЙ СЛОЖНОСТИ</h1>
            </div>
            <div class="d-none d-md-block">
                <div class="remont-grid-container">
                    <div class="remont-grid1">
                        <div class="remont-grid-item1  ">
                            <div class="remont-item d-flex justify-content-between">
                                <div class="remont-item-text white">
                                    <h3>ОКРАСКА, ПОЛИРОВКА КУЗОВА</h3>
                                    <p>Любой сложности!</p>
                                </div>
                                <img src="/media/service/remont.png" alt=""/>
                            </div>
                        </div>
                        <div class="remont-grid-item2  remont-item flex-column justify-content-between">
                            <div class="remont-item d-flex flex-column justify-content-between">
                                <div class="remont-item-text white">
                                    <h3>ПРЕДПРОДАЖНАЯ ПОДГОТОВКА АВТОМОБИЛЯ</h3>
                                </div>
                                <img src="/media/service/remont3.png" alt=""/>
                            </div>
                        </div>
                        <div class="remont-grid-item3  remont-item  ">
                            <div class="remont-item d-flex flex-column  justify-content-between">
                                <div class="remont-item-text dark ">
                                    <h3>АНТИКОРРОЗИЙНАЯ ОБРАБОТКА АВТОМОБИЛЯ</h3>
                                    <a class="btn btn-black-trnsp askMe askMeServices">Записаться в сервис</a>
                                </div>
                                <img src="/media/service/remont4.png" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="remont-grid2">
                        <div class="remont-grid-item4  remont-item">
                            <div class="remont-item d-flex flex-column justify-content-between">
                                <div class="remont-item-text dark">
                                    <h3>РЕМОНТ ЦАРАПИН, СКОЛОВ, ВМЯТИН  НА КУЗОВЕ</h3>
                                </div>
                                <img class="d-sm-block d-none" src="/media/service/remont2.png" alt=""/>
                                <img class="d-block d-sm-none" src="/media/service/remont2-sm.png" alt=""/>
                            </div>
                        </div>
                        <div class="remont-grid-item5  remont-item ">
                            <div class="remont-item d-flex flex-column justify-content-between">
                                <div class="remont-item-text white">
                                    <h3>ЗАМЕНА АВТОСТЁКОЛ</h3>
                                </div>
                                <img src="/media/service/remont5.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none">
                <div class="remont-grid-container">
                    <div class="remont-grid-item1  ">
                        <div class="remont-item d-flex justify-content-between flex-column ">
                            <div class="remont-item-text white">
                                <h3>ОКРАСКА, ПОЛИРОВКА КУЗОВА</h3>
                                <p>Любой сложности!</p>
                            </div>
                            <div class="remont-item-image-container">
                                <div class="remont-item-image remont-item-image1">
                                    <img src="/media/service/remont.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remont-grid-item3  remont-item  ">
                        <div class="remont-item d-flex flex-column  justify-content-between">
                            <div class="remont-item-text dark ">
                                <h3>АНТИКОРРОЗИЙНАЯ ОБРАБОТКА АВТОМОБИЛЯ</h3>
                                <a class="btn btn-black-trnsp d-none d-sm-block askMe askMeServices">Записаться в сервис</a>
                            </div>
                            <div class="remont-item-image-container">
                                <div class="remont-item-image remont-item-image2">
                                    <img src="/media/service/remont4.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remont-grid-item2  remont-item flex-column justify-content-between">
                        <div class="remont-item d-flex flex-column justify-content-between">
                            <div class="remont-item-text white">
                                <h3>ПРЕДПРОДАЖНАЯ ПОДГОТОВКА АВТОМОБИЛЯ</h3>
                            </div>
                            <div class="remont-item-image-container">
                                <div class="remont-item-image remont-item-image3">
                                    <img src="/media/service/remont3.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="remont-grid-item4  remont-item">
                        <div class="remont-item d-flex flex-column justify-content-between">
                            <div class="remont-item-text dark">
                                <h3>РЕМОНТ ЦАРАПИН, СКОЛОВ, ВМЯТИН  НА КУЗОВЕ</h3>
                            </div>
                            <div class="remont-item-image-container">
                                <div class="remont-item-image remont-item-image4">
                                    <img class="d-sm-block d-none" src="/media/service/remont2.png" alt=""/>
                                    <img class="d-block d-sm-none" src="/media/service/remont2-sm.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="remont-grid-item5  remont-item ">
                        <div class="remont-item d-flex flex-column justify-content-between">
                            <div class="remont-item-text white">
                                <h3>ЗАМЕНА<br> АВТОСТЁКОЛ</h3>
                            </div>
                            <div class="remont-item-image-container">
                                <div class="remont-item-image remont-item-image5">
                                    <img src="/media/service/remont5.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offerWrap">
        <div class="offer">
            <div class="container d-flex flex-column flex-md-row">
                <div class="offer-info d-flex flex-column">
                    <h2 class="text-uppercase mb-0">СОВРЕМЕННЫЙ КУЗОВНОЙ ЦЕХ</h2>
                    <p class="mb-0">Современный-малярно-кузовной цех является частью группы компаний “Башавтоком”.  Работаем на профессиональном оборудовании.  Осуществляем ремонты автомобилей любых брендов.  Благодаря узкой специализации мы делаем это быстро  и качественно. </p>
                    <div>
                        <div class="btn btn-white-trnsp askMe askMeServices">Записаться в сервис</div>
                    </div>
                </div>
            </div>
            <div class="offer-bckg" style="background-image: url('/media/service/service2.png')"></div>
        </div>
    </section>
    @include('blocks.services')
    @include('news.desktop')
    <section class="contacts_main" id="contacts" itemscope itemtype="https://schema.org/LocalBusiness">
        <meta itemprop="name" content="Башавтоком | Jaecoo">
        <meta itemprop="address" content="Уфа, ул. Адмирала Макарова, 32">
        <div class="contacts d-flex flex-column-reverse flex-md-row justify-content-between align-items-center container">
            <div class="contacts-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa4325f24271393e6359c37031d235a63e5dacee3099642313c595e31adb2124f&amp;width=879&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="contacts-info d-flex flex-column align-items-start">
                <h2 class="text-uppercase mb-0">Контакты</h2>
                <div class="d-flex flex-column" itemscope itemtype="https://schema.org/PostalAddress">
                    <a class="d-flex align-items-center">
                        <img src="/assets/img/contacts/mappin.svg">
                        <span itemprop="streetAddress">г. Уфа, ул. Адмирала Макарова, 32</span>
                    </a>
                    <a class="d-flex align-items-center" href="tel:+73472165577">
                        <img src="/assets/img/contacts/phone.svg">
                        <span itemprop="telephone">+7 (347) 216-55-77</span>
                    </a>
                    <a class="d-flex align-items-center">
                        <img src="/assets/img/contacts/clock.svg">
                        <span itemprop="telephone">ПН-ВС: С 09:00 ДО 21:00</span>
                    </a>
                </div>
                <a class="btn btn-trnsp-black askMe askMeConsultation">Получить консультацию</a>
            </div>
        </div>
    </section>
</main>


@endsection