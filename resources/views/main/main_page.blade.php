@extends('desktop_main')

@section('title', 'Официальный дилер JAECOO в Уфе - Башавтоком')
@section('description', 'Официальный дилер JAECOO в Уфе! На сайте вы можете купить автомобиль ДЖЕЙКУ комплектации на свой вкус! Для информации звоните: +7 (347) 216 55 77')

@section('footer-disclaimer')
    <p class="text" style="margin-bottom: 10px"><sup>1</sup>Цена на автомобиль JAECOO J7 с двигателем 1.6 Turbo 2WD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
        <sup>2</sup>Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
        <sup>3</sup>Цена на автомобиль JAECOO J7 с двигателем 1.6 Turbo AWD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
        <sup>4</sup>Цена на автомобиль JAECOO J8 с двигателем 2.0 AWD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).
    </p>
@endsection

@section('content')
    <h1 class="d-none" style="display: none">Башавтоком JAECOO - официальный дилер JAECOO в Уфе</h1>
    <main class="main-page">
        @include('main.desktop_slider')
        @include('blocks.meetingMarquee')
{{--        <section class="favs">--}}
{{--            <div class="d-flex container flex-column flex-md-row">--}}
{{--                <div class="favs-item d-flex flex-md-column flex-lg-row align-items-center align-items-md-start align-items-lg-center flex-grow-1">--}}
{{--                    <img src="/assets/favs/favs-check.svg" alt="">--}}
{{--                    <p>Официальный дилер JAECOO в Республике Башкортостан</p>--}}
{{--                </div>--}}
{{--                <div class="favs-item d-flex flex-md-column flex-lg-row align-items-center align-items-md-start align-items-lg-center flex-grow-1">--}}
{{--                    <img src="/assets/favs/favs-super.svg" alt="">--}}
{{--                    <p>Выгодные предложения для всех покупателей Башавтоком</p>--}}
{{--                </div>--}}
{{--                <div class="favs-item d-flex flex-md-column flex-lg-row align-items-center align-items-md-start align-items-lg-center flex-grow-1">--}}
{{--                    <img src="/assets/favs/favs-loc.svg" alt="">--}}
{{--                    <p>14 автоцентров в 4-x городах Республики Башкортотан</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        @include("blocks.timer")
        @include("main.specialOffers");

        <section class="models position-relative" id="models">
            <div class="container">
                <div class="swiper modelsSwiper d-flex flex-column">
                    <div class="models-header d-flex flex-column align-items-start">
                        <h2 class="mb-0 text-start text-uppercase">Модельный ряд</h2>
                            <div class="swiper-pagination text-start"></div>
                        <div class="stickers-wrap d-md-flex d-none flex-lg-row flex-column align-items-end">
                            <a href="https://files.jaecoo.ru/priceJ7.pdf?_gl=1*6rohwq*_ga*MzY5NzQ4OTguMTc1MDc2NDY0NA..*_ga_2DCLCZP52M*czE3NTA3NjQ2NDMkbzEkZzEkdDE3NTA3NjQ2ODgkajE1JGwwJGgw" rel="noopener noreferrer" target="_blank" class="price-list-btn" data-model="J7">
                                <div class="stickers text-center text-uppercase w-100">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="35.994" height="35.992" transform="translate(0 0.00313568)" fill="white"/>
                                        <path d="M24.09 16.3731C25.0353 16.7256 25.8765 17.3107 26.5358 18.0743C27.195 18.838 27.6511 19.7556 27.8617 20.7422C28.0724 21.7288 28.0309 22.7527 27.741 23.719C27.4512 24.6853 26.9223 25.563 26.2034 26.2707C25.4845 26.9785 24.5987 27.4936 23.628 27.7684C22.6572 28.0431 21.6329 28.0686 20.6497 27.8426C19.6665 27.6165 18.7561 27.1462 18.0028 26.4751C17.2495 25.804 16.6776 24.9538 16.34 24.0031M13 12.0031H14V16.0031M22.71 19.8831L23.41 20.5931L20.59 23.4131M20 14.0031C20 17.3168 17.3137 20.0031 14 20.0031C10.6863 20.0031 8 17.3168 8 14.0031C8 10.6894 10.6863 8.00314 14 8.00314C17.3137 8.00314 20 10.6894 20 14.0031Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p class="mb-0">Скачать прайс-лист</p>
                                </div>
                            </a>
                            <div class="stickers text-center text-uppercase w-100 askMe askMeSpec">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="36.0061" height="35.9983" transform="translate(-0.00585938)" fill="white"/>
                                    <path d="M21.0051 14.9952L15.0051 20.9952M15.0051 14.9952H15.0151M21.0051 20.9952H21.0151M9.85508 14.6152C9.70912 13.9577 9.73153 13.2741 9.92023 12.6276C10.1089 11.9811 10.4578 11.3927 10.9345 10.9169C11.4113 10.4412 12.0004 10.0936 12.6473 9.90621C13.2942 9.71886 13.9779 9.69788 14.6351 9.84521C14.9968 9.27952 15.4951 8.81397 16.084 8.4915C16.673 8.16903 17.3336 8 18.0051 8C18.6765 8 19.3372 8.16903 19.9261 8.4915C20.5151 8.81397 21.0134 9.27952 21.3751 9.84521C22.0332 9.69724 22.7181 9.71812 23.3661 9.90593C24.014 10.0937 24.6039 10.4424 25.0809 10.9194C25.5579 11.3964 25.9066 11.9863 26.0944 12.6342C26.2822 13.2821 26.3031 13.967 26.1551 14.6252C26.7208 14.9869 27.1863 15.4852 27.5088 16.0742C27.8313 16.6631 28.0003 17.3238 28.0003 17.9952C28.0003 18.6667 27.8313 19.3273 27.5088 19.9163C27.1863 20.5052 26.7208 21.0035 26.1551 21.3652C26.3024 22.0224 26.2814 22.7061 26.0941 23.353C25.9067 23.9999 25.5591 24.589 25.0834 25.0657C24.6076 25.5425 24.0192 25.8914 23.3727 26.0801C22.7262 26.2688 22.0425 26.2912 21.3851 26.1452C21.0238 26.7131 20.5252 27.1806 19.9352 27.5045C19.3452 27.8284 18.6831 27.9983 18.0101 27.9983C17.337 27.9983 16.6749 27.8284 16.0849 27.5045C15.495 27.1806 14.9963 26.7131 14.6351 26.1452C13.9779 26.2925 13.2942 26.2716 12.6473 26.0842C12.0004 25.8969 11.4113 25.5492 10.9345 25.0735C10.4578 24.5978 10.1089 24.0094 9.92023 23.3629C9.73153 22.7164 9.70912 22.0327 9.85508 21.3752C9.28503 21.0145 8.81549 20.5154 8.49012 19.9244C8.16476 19.3335 7.99414 18.6698 7.99414 17.9952C7.99414 17.3206 8.16476 16.657 8.49012 16.066C8.81549 15.475 9.28503 14.976 9.85508 14.6152Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p class="mb-0">Кредит от 26 000 руб</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex flex-column model">
                            <div class=" model-container d-flex d-xl-none align-items-start justify-content-between">
                                <div class="model-nameWrap d-flex flex-column align-items-start">
                                    <p class="text-uppercase model-name">JAECOO J7</p>
                                    <span toSwitch="2.0 AWD">от 2 469 900 ₽<sup>4</sup></span>
                                    <div toSwitch="1.6 TURBO 2WD" class="d-none">
                                        <script type="application/ld+json">{
                                    "@context": "https://schema.org",
                                    "@type": "Car",
                                    "name": "JAECOO J7 1.6 TURBO 2WD",
                                    "vehicleIdentificationNumber": "LVVDB21B9RC000000",
                                    "image": [
                                        "/media/slider/jaecoo_J7.png"
                                    ],
                                    "url": "https://jaecooufa.bashauto.com/jaecoo-J7",
                                    "offers": {
                                        "@type": "Offer",
                                        "availability": "https://schema.org/InStock",
                                        "price": 2709900,
                                        "priceCurrency": "RUB"
                                    },
                                    "itemCondition": "https://schema.org/NewCondition",
                                    "brand": {
                                        "@type": "Brand",
                                        "name": "jaecoo"
                                    },
                                    "model": "J7",
                                    "vehicleConfiguration": "1.6 TURBO 2WD",
                                    "vehicleModelDate": "2024",
                                    "bodyType": "fastback-crossover",
                                    "driveWheelConfiguration": "https://schema.org/FourWheelDriveConfiguration",
                                    "numberOfDoors": 5,
                                    "vehicleSeatingCapacity": 5
                                }
                                        </script>
                                        <div>
                                            <div>
                                                <span>От {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>1</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div toSwitch="1.6 TURBO AWD" class="d-none">
                                        <script type="application/ld+json">{
                                    "@context": "https://schema.org",
                                    "@type": "Car",
                                    "name": "JAECOO J7 1.6 TURBO AWD",
                                    "vehicleIdentificationNumber": "LVVDB21B3RC000000",
                                    "image": [
                                        "/media/slider/jaecoo_J7.png"
                                    ],
                                    "url": "https://jaecooufa.bashauto.com/jaecoo-J7",
                                    "offers": {
                                        "@type": "Offer",
                                        "availability": "https://schema.org/InStock",
                                        "price": {{ config('price.j7') }},
                                        "priceCurrency": "RUB"
                                    },
                                    "itemCondition": "https://schema.org/NewCondition",
                                    "brand": {
                                        "@type": "Brand",
                                        "name": "JAECOO"
                                    },
                                    "model": "J7",
                                    "vehicleConfiguration": "1.6 TURBO AWD",
                                    "vehicleModelDate": "2024",
                                    "bodyType": "fastback-crossover",
                                    "driveWheelConfiguration": "https://schema.org/FourWheelDriveConfiguration",
                                    "numberOfDoors": 5,
                                    "vehicleSeatingCapacity": 5
                                }
                                        </script>
                                        <div>
                                            <div>
                                                <span>От 3 089 900 ₽<sup>3</sup></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modelContentTablet">
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Отдаем за 30% от цены</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Авторассрочка до 8 лет</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Лизинг для физ. лиц</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">выгода до 300 000 ₽ </span>
                                    </div>
                                </div>
{{--                                <div class="model-switcherWrap d-block d-md-none d-lg-flex d-xl-none flex-column">--}}
{{--                                    <div class="d-flex desc-chars_switcher align-items-center justify-content-end">--}}
{{--                                        <div class="active">ВОЗМОЖНОСТИ</div>--}}
{{--                                        <div>ПРЕИМУЩЕСТВА</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-none d-md-flex flex-column desc-chars_switcher_motors">--}}
{{--                                        <p toSwitchChar="ВОЗМОЖНОСТИ" class="">Двигатель</p>--}}
{{--                                        <div toSwitchChar="ВОЗМОЖНОСТИ" class="d-flex model-switcher align-items-center">--}}
{{--                                            <div class="active">1.6 TURBO 2WD</div>--}}
{{--                                            <div>1.6 TURBO AWD</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="descAndPhoto d-flex flex-column-reverse flex-lg-row-reverse flex-xl-row align-items-center justify-content-between">

                                <div class="desc d-flex flex-row flex-lg-column justify-content-between">
                                    <div class="model-nameWrap d-none d-xl-flex flex-column align-items-start">
                                        <p class="text-uppercase model-name">JAECOO J7</p>
                                        <span toSwitch="1.6 TURBO 2WD">От {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>1</sup></span>
                                        <span class="d-none" toSwitch="1.6 TURBO AWD">От {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>3</sup></span>
                                    </div>
                                    <div class="desc-chars d-flex flex-column">

                                        <div class="modelContent">
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Отдаем за 30% от цены</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Авторассрочка до 8 лет</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Лизинг для физ. лиц</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">выгода до 300 000 ₽ </span>
                                            </div>
                                        </div>

{{--                                        <div class="model-switcherWrap d-flex d-lg-none d-xl-flex flex-column">--}}
{{--                                            <div class="d-none d-md-flex desc-chars_switcher align-items-center">--}}
{{--                                                <div class="active">ВОЗМОЖНОСТИ</div>--}}
{{--                                                <div>ПРЕИМУЩЕСТВА</div>--}}
{{--                                            </div>--}}
{{--                                            <p toSwitchChar="ВОЗМОЖНОСТИ">Двигатель</p>--}}
{{--                                            <div toSwitchChar="ВОЗМОЖНОСТИ" class="d-flex model-switcher align-items-center">--}}
{{--                                                <div class="active">1.6 TURBO 2WD</div>--}}
{{--                                                <div>1.6 TURBO AWD</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-none" toSwitchChar="ПРЕИМУЩЕСТВА">--}}
{{--                                            <div class="desc-chars_switcher_content">--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">СТИЛЬ</p>--}}
{{--                                                    <p class="val_desc">Отличная видимость в темное время</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">ПРИВОД</p>--}}
{{--                                                    <p class="val_desc">Система полного привода AWD от ZF и Borgwarner</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">ТЕХНОЛОГИИ</p>--}}
{{--                                                    <p class="val_desc">Плавная и быстрая загрузка, высокая четкость</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">ПОДВЕСКА</p>--}}
{{--                                                    <p class="val_desc">7 подушек безопасности + системы помощи</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div toSwitchChar="ВОЗМОЖНОСТИ">--}}
{{--                                            <div class="desc-chars_switcher_content" toSwitch="1.6 TURBO 2WD" itemscope itemtype="https://schema.org/Car">--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">186 Л.С.</p>--}}
{{--                                                    <p class="val_desc">Мощность двигателя</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">275 Нм</p>--}}
{{--                                                    <p class="val_desc">Крутящий момент</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">1,6 Л</p>--}}
{{--                                                    <p class="val_desc">Объем двигателя</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">9,4 Сек</p>--}}
{{--                                                    <p class="val_desc">Разгон до 100 км/ч</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-none desc-chars_switcher_content" toSwitch="1.6 TURBO AWD">--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">186 Л.С.</p>--}}
{{--                                                    <p class="val_desc">Мощность двигателя</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">275 Нм</p>--}}
{{--                                                    <p class="val_desc">Крутящий момент</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">1,6 Л</p>--}}
{{--                                                    <p class="val_desc">Объем двигателя</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">8,9 Сек</p>--}}
{{--                                                    <p class="val_desc">Разгон до 100 км/ч</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="d-flex d-lg-none flex-column flex-md-row desc-btns justify-content-between">
                                            <button class="btn btn-black-trnsp askMe askMeSpec w-100">Получить спецпредложение</button>
                                            <a class="btn btn-trnsp-black w-100" href="/jaecoo-J7">Подробнее о модели</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="photo position-relative" modelName="JAECOO J7" data-credit="{{ config('price.j7_month') }}">
                                    <img src="/media/slider/jaecoo_J7.png" alt="Попробуй для себя JAECOO J7 в Башавтоком с максимальной привилегией">
                                    <div class="stickers-wrap d-flex d-md-none flex-column">
                                        <a href="https://files.jaecoo.ru/priceJ7.pdf?_gl=1*6rohwq*_ga*MzY5NzQ4OTguMTc1MDc2NDY0NA..*_ga_2DCLCZP52M*czE3NTA3NjQ2NDMkbzEkZzEkdDE3NTA3NjQ2ODgkajE1JGwwJGgw" rel="noopener noreferrer" target="_blank" class="price-list-btn" data-model="J7">
                                            <div class="stickers text-center text-uppercase w-100">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="35.994" height="35.992" transform="translate(0 0.00313568)" fill="white"/>
                                                    <path d="M24.09 16.3731C25.0353 16.7256 25.8765 17.3107 26.5358 18.0743C27.195 18.838 27.6511 19.7556 27.8617 20.7422C28.0724 21.7288 28.0309 22.7527 27.741 23.719C27.4512 24.6853 26.9223 25.563 26.2034 26.2707C25.4845 26.9785 24.5987 27.4936 23.628 27.7684C22.6572 28.0431 21.6329 28.0686 20.6497 27.8426C19.6665 27.6165 18.7561 27.1462 18.0028 26.4751C17.2495 25.804 16.6776 24.9538 16.34 24.0031M13 12.0031H14V16.0031M22.71 19.8831L23.41 20.5931L20.59 23.4131M20 14.0031C20 17.3168 17.3137 20.0031 14 20.0031C10.6863 20.0031 8 17.3168 8 14.0031C8 10.6894 10.6863 8.00314 14 8.00314C17.3137 8.00314 20 10.6894 20 14.0031Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <p class="mb-0">Скачать прайс-лист</p>
                                            </div>
                                        </a>
                                        <div class="stickers text-center text-uppercase w-100 askMe askMeSpec">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="36.0061" height="35.9983" transform="translate(-0.00585938)" fill="white"/>
                                                <path d="M21.0051 14.9952L15.0051 20.9952M15.0051 14.9952H15.0151M21.0051 20.9952H21.0151M9.85508 14.6152C9.70912 13.9577 9.73153 13.2741 9.92023 12.6276C10.1089 11.9811 10.4578 11.3927 10.9345 10.9169C11.4113 10.4412 12.0004 10.0936 12.6473 9.90621C13.2942 9.71886 13.9779 9.69788 14.6351 9.84521C14.9968 9.27952 15.4951 8.81397 16.084 8.4915C16.673 8.16903 17.3336 8 18.0051 8C18.6765 8 19.3372 8.16903 19.9261 8.4915C20.5151 8.81397 21.0134 9.27952 21.3751 9.84521C22.0332 9.69724 22.7181 9.71812 23.3661 9.90593C24.014 10.0937 24.6039 10.4424 25.0809 10.9194C25.5579 11.3964 25.9066 11.9863 26.0944 12.6342C26.2822 13.2821 26.3031 13.967 26.1551 14.6252C26.7208 14.9869 27.1863 15.4852 27.5088 16.0742C27.8313 16.6631 28.0003 17.3238 28.0003 17.9952C28.0003 18.6667 27.8313 19.3273 27.5088 19.9163C27.1863 20.5052 26.7208 21.0035 26.1551 21.3652C26.3024 22.0224 26.2814 22.7061 26.0941 23.353C25.9067 23.9999 25.5591 24.589 25.0834 25.0657C24.6076 25.5425 24.0192 25.8914 23.3727 26.0801C22.7262 26.2688 22.0425 26.2912 21.3851 26.1452C21.0238 26.7131 20.5252 27.1806 19.9352 27.5045C19.3452 27.8284 18.6831 27.9983 18.0101 27.9983C17.337 27.9983 16.6749 27.8284 16.0849 27.5045C15.495 27.1806 14.9963 26.7131 14.6351 26.1452C13.9779 26.2925 13.2942 26.2716 12.6473 26.0842C12.0004 25.8969 11.4113 25.5492 10.9345 25.0735C10.4578 24.5978 10.1089 24.0094 9.92023 23.3629C9.73153 22.7164 9.70912 22.0327 9.85508 21.3752C9.28503 21.0145 8.81549 20.5154 8.49012 19.9244C8.16476 19.3335 7.99414 18.6698 7.99414 17.9952C7.99414 17.3206 8.16476 16.657 8.49012 16.066C8.81549 15.475 9.28503 14.976 9.85508 14.6152Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <p class="mb-0">Кредит от 26 000 руб</p>
                                        </div>
                                    </div>
                                    <div class="popover J7-1 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>СТИЛЬНАЯ <br> РЕШЕТКА </br> РАДИАТОРАЙ </p>
                                        </div>
                                    </div>
                                    <div class="popover J7-2 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>ДНЕВНЫЕ ХОДОВЫЕ </br> ОГНИ </p>
                                        </div>
                                    </div>
                                    <div class="popover J7-3 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>СВЕТОДИОДНАЯ </br> ГОЛОВНАЯ </br> ОПТИКА</p>
                                        </div>
                                    </div>
                                    <div class="popover J7-4 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>19" ЛЕГКОСПЛАВНЫЕ</br>ДИСК</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none d-lg-flex flex-column flex-md-row desc-btns justify-content-between">
                                <button class="btn btn-black-trnsp askMe askMeSpec w-100">Получить спецпредложение</button>
                                <a class="btn btn-trnsp-black w-100" href="/jaecoo-J7">Подробнее о модели</a>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex flex-column model">
                            <div class="model-container d-flex d-xl-none align-items-start justify-content-between">
                                <div class="model-nameWrap d-flex flex-column align-items-start">
                                    <p class="text-uppercase model-name">JAECOO J8</p>
                                    <span toSwitch="2.0 AWD">от {{ number_format(config('price.j8'), 0, ',', ' ') }} ₽<sup>4</sup></span>
                                </div>
                                <div class="modelContentTablet">
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Отдаем за 30% от цены</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Авторассрочка до 8 лет</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Лизинг для физ. лиц</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">выгода до 355 000 ₽ </span>
                                    </div>
                                </div>
{{--                                <div class="model-switcherWrap d-block d-md-none d-lg-flex d-xl-none flex-column">--}}
{{--                                    <div class="d-flex  desc-chars_switcher align-items-center justify-content-end">--}}
{{--                                        <div class="active">ВОЗМОЖНОСТИ</div>--}}
{{--                                        <div>ПРЕИМУЩЕСТВА</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-none d-md-flex flex-column desc-chars_switcher_motors">--}}
{{--                                        <p toSwitchChar="ВОЗМОЖНОСТИ">Двигатель</p>--}}
{{--                                        <div toSwitchChar="ВОЗМОЖНОСТИ" class="d-flex model-switcher align-items-center">--}}
{{--                                            <div class="active">2.0 AWD</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="descAndPhoto d-flex flex-column-reverse flex-lg-row-reverse flex-xl-row align-items-center justify-content-between">
                                <div class="desc d-flex flex-row flex-lg-column justify-content-between">
                                    <div class="model-nameWrap d-none d-xl-flex flex-column align-items-start">
                                        <p class="text-uppercase model-name">JAECOO J8</p>
                                        <span toSwitch="2.0 AWD">От {{ number_format(config('price.j8'), 0, ',', ' ') }} ₽<sup>4</sup></span>
                                        <script type="application/ld+json">{
                                    "@context": "https://schema.org",
                                    "@type": "Car",
                                    "name": "JAECOO J8 2.0 AWD",
                                    "vehicleIdentificationNumber": "LVTDD24B8RD000000",
                                    "image": [
                                        "/media/J8/blue.webp"
                                    ],
                                    "url": "https://jaecooufa.bashauto.com/jaecoo-J8",
                                    "offers": {
                                        "@type": "Offer",
                                        "availability": "https://schema.org/InStock",
                                        "price": 3949000,
                                        "priceCurrency": "RUB"
                                    },
                                    "itemCondition": "https://schema.org/NewCondition",
                                    "brand": {
                                        "@type": "Brand",
                                        "name": "JAECOO"
                                    },
                                    "model": "J8",
                                    "vehicleConfiguration": "2.0 AWD",
                                    "vehicleModelDate": "2024",
                                    "bodyType": "fastback-crossover",
                                    "driveWheelConfiguration": "https://schema.org/FourWheelDriveConfiguration",
                                    "numberOfDoors": 5,
                                    "vehicleSeatingCapacity": 5
                                }
                                        </script>
                                    </div>

                                    <div class="desc-chars d-flex flex-column">
                                        <div class="modelContent">
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Отдаем за 30% от цены</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Авторассрочка до 8 лет</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Лизинг для физ. лиц</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">выгода до 355 000 ₽ </span>
                                            </div>
                                        </div>
{{--                                        <div class="model-switcherWrap d-flex d-lg-none d-xl-flex flex-column">--}}
{{--                                            <div class="d-none d-md-flex desc-chars_switcher align-items-center">--}}
{{--                                                <div class="active">ВОЗМОЖНОСТИ</div>--}}
{{--                                                <div>ПРЕИМУЩЕСТВА</div>--}}
{{--                                            </div>--}}
{{--                                            <p toSwitchChar="ВОЗМОЖНОСТИ"> Двигатель</p>--}}
{{--                                            <div toSwitchChar="ВОЗМОЖНОСТИ" class="d-flex model-switcher align-items-center">--}}
{{--                                                <div class="active">2.0 AWD</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div toSwitchChar="ВОЗМОЖНОСТИ">--}}
{{--                                            <div class="desc-chars_switcher_content" toSwitch="2.0 AWD">--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">249 Л.С.</p>--}}
{{--                                                    <p class="val_desc">Мощность двигателя</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">385 Нм</p>--}}
{{--                                                    <p class="val_desc">Крутящий момент</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">2 Л</p>--}}
{{--                                                    <p class="val_desc">Объем двигателя</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">8,5 Сек</p>--}}
{{--                                                    <p class="val_desc">Разгон до 100 км/ч</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-none" toSwitchChar="ПРЕИМУЩЕСТВА">--}}
{{--                                            <div class="desc-chars_switcher_content">--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">КОМФОРТ</p>--}}
{{--                                                    <p class="val_desc">Кожаные сиденья с массажем и вентиляцией</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">ЗАЩИТА</p>--}}
{{--                                                    <p class="val_desc">До 10 подушек безопасности</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">ПРИВОД</p>--}}
{{--                                                    <p class="val_desc">Интеллектуальная система TORQUE VECTORING</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="val">ПОДВЕСКА</p>--}}
{{--                                                    <p class="val_desc">Автоматически адаптируется к дорожным условиям</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="d-flex d-lg-none flex-column flex-md-row desc-btns justify-content-between">
                                            <button class="btn btn-black-trnsp askMe askMeSpec w-100">Получить спецпредложение</button>
                                            <a class="btn btn-trnsp-black w-100" href="/jaecoo-J8">Подробнее о модели</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo position-relative" modelName="JAECOO J8" data-credit="{{ config('price.j8_month') }}">
                                    <img src="/media/slider/jaecoo_J8.png" alt="Попробуй для себя JAECOO J8 в Башавтоком с максимальной привилегией">
                                    <div class="stickers-wrap d-flex d-md-none flex-column">
                                        <a href="https://files.jaecoo.ru/priceJ8.pdf?_gl=1*1xxlt1s*_ga*MzY5NzQ4OTguMTc1MDc2NDY0NA..*_ga_2DCLCZP52M*czE3NTA3Njg0MTgkbzIkZzEkdDE3NTA3Njg0NDIkajM2JGwwJGgw" rel="noopener noreferrer" target="_blank" class="price-list-btn" data-model="J8">
                                            <div class="stickers text-center text-uppercase w-100">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="35.994" height="35.992" transform="translate(0 0.00313568)" fill="white"/>
                                                    <path d="M24.09 16.3731C25.0353 16.7256 25.8765 17.3107 26.5358 18.0743C27.195 18.838 27.6511 19.7556 27.8617 20.7422C28.0724 21.7288 28.0309 22.7527 27.741 23.719C27.4512 24.6853 26.9223 25.563 26.2034 26.2707C25.4845 26.9785 24.5987 27.4936 23.628 27.7684C22.6572 28.0431 21.6329 28.0686 20.6497 27.8426C19.6665 27.6165 18.7561 27.1462 18.0028 26.4751C17.2495 25.804 16.6776 24.9538 16.34 24.0031M13 12.0031H14V16.0031M22.71 19.8831L23.41 20.5931L20.59 23.4131M20 14.0031C20 17.3168 17.3137 20.0031 14 20.0031C10.6863 20.0031 8 17.3168 8 14.0031C8 10.6894 10.6863 8.00314 14 8.00314C17.3137 8.00314 20 10.6894 20 14.0031Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <p class="mb-0">Скачать прайс-лист</p>
                                            </div>
                                        </a>
                                        <div class="stickers text-center text-uppercase w-100 askMe askMeSpec">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="36.0061" height="35.9983" transform="translate(-0.00585938)" fill="white"/>
                                                <path d="M21.0051 14.9952L15.0051 20.9952M15.0051 14.9952H15.0151M21.0051 20.9952H21.0151M9.85508 14.6152C9.70912 13.9577 9.73153 13.2741 9.92023 12.6276C10.1089 11.9811 10.4578 11.3927 10.9345 10.9169C11.4113 10.4412 12.0004 10.0936 12.6473 9.90621C13.2942 9.71886 13.9779 9.69788 14.6351 9.84521C14.9968 9.27952 15.4951 8.81397 16.084 8.4915C16.673 8.16903 17.3336 8 18.0051 8C18.6765 8 19.3372 8.16903 19.9261 8.4915C20.5151 8.81397 21.0134 9.27952 21.3751 9.84521C22.0332 9.69724 22.7181 9.71812 23.3661 9.90593C24.014 10.0937 24.6039 10.4424 25.0809 10.9194C25.5579 11.3964 25.9066 11.9863 26.0944 12.6342C26.2822 13.2821 26.3031 13.967 26.1551 14.6252C26.7208 14.9869 27.1863 15.4852 27.5088 16.0742C27.8313 16.6631 28.0003 17.3238 28.0003 17.9952C28.0003 18.6667 27.8313 19.3273 27.5088 19.9163C27.1863 20.5052 26.7208 21.0035 26.1551 21.3652C26.3024 22.0224 26.2814 22.7061 26.0941 23.353C25.9067 23.9999 25.5591 24.589 25.0834 25.0657C24.6076 25.5425 24.0192 25.8914 23.3727 26.0801C22.7262 26.2688 22.0425 26.2912 21.3851 26.1452C21.0238 26.7131 20.5252 27.1806 19.9352 27.5045C19.3452 27.8284 18.6831 27.9983 18.0101 27.9983C17.337 27.9983 16.6749 27.8284 16.0849 27.5045C15.495 27.1806 14.9963 26.7131 14.6351 26.1452C13.9779 26.2925 13.2942 26.2716 12.6473 26.0842C12.0004 25.8969 11.4113 25.5492 10.9345 25.0735C10.4578 24.5978 10.1089 24.0094 9.92023 23.3629C9.73153 22.7164 9.70912 22.0327 9.85508 21.3752C9.28503 21.0145 8.81549 20.5154 8.49012 19.9244C8.16476 19.3335 7.99414 18.6698 7.99414 17.9952C7.99414 17.3206 8.16476 16.657 8.49012 16.066C8.81549 15.475 9.28503 14.976 9.85508 14.6152Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <p class="mb-0">Кредит от 26 000 руб</p>
                                        </div>
                                    </div>
                                    <div class="popover J8-1 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>ФИРМЕННАЯ РЕШЕТКА <br> РАДИАТОРА </p>
                                        </div>
                                    </div>
                                    <div class="popover J8-2 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>СВЕТОДИОДНАЯ<br>ОПТИКА ГОЛОВНАЯ<br>ОПТИКА </p>
                                        </div>
                                    </div>
                                    <div class="popover J8-3 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>ПОДВЕСКА CDC</p>
                                        </div>
                                    </div>
                                    <div class="popover J8-4 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>СКРЫТЫЕ РУЧКИ <br> ДВЕРЕЙ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none d-lg-flex flex-column flex-md-row desc-btns justify-content-between">
                                <button class="btn btn-black-trnsp askMe askMeSpec w-100">Получить спецпредложение</button>
                                <a class="btn btn-trnsp-black w-100" href="/jaecoo-J8">Подробнее о модели</a>
                            </div>
                        </div>


                        <div class="swiper-slide d-flex flex-column model">
                            <div class="model-container d-flex d-xl-none align-items-start justify-content-between">
                                <div class="model-nameWrap d-flex flex-column align-items-start">
                                    <p class="text-uppercase model-name">JAECOO J7 LE</p>
                                    <span toSwitch="2.0 AWD">от {{ number_format(config('price.j7-le'), 0, ',', ' ') }} ₽<sup>4</sup></span>
                                </div>
                                <div class="modelContentTablet">
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Отдаем за 30% от цены</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Авторассрочка до 8 лет</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">Лизинг для физ. лиц</span>
                                    </div>
                                    <div class="d-flex modelBlock">
                                        <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                        <span class="text-uppercase modelText">выгода до 650 000 ₽ </span>
                                    </div>
                                </div>
                            </div>
                            <div class="descAndPhoto d-flex flex-column-reverse flex-lg-row-reverse flex-xl-row align-items-center justify-content-between">
                                <div class="desc d-flex flex-row flex-lg-column justify-content-between">
                                    <div class="model-nameWrap d-none d-xl-flex flex-column align-items-start">
                                        <p class="text-uppercase model-name">JAECOO J7 LE</p>
                                        <span toSwitch="2.0 AWD">От {{ number_format(config('price.j7-le'), 0, ',', ' ') }} ₽<sup>4</sup></span>
                                        <script type="application/ld+json">{
                                                "@context": "https://schema.org",
                                                "@type": "Car",
                                                "name": "JAECOO J8 2.0 AWD",
                                                "vehicleIdentificationNumber": "LVTDD24B8RD000000",
                                                "image": [
                                                    "/media/J7_LE/white.webp"
                                                ],
                                                "url": "https://jaecooufa.bashauto.com/jaecoo-J8",
                                                "offers": {
                                                    "@type": "Offer",
                                                    "availability": "https://schema.org/InStock",
                                                    "price": 3949000,
                                                    "priceCurrency": "RUB"
                                                },
                                                "itemCondition": "https://schema.org/NewCondition",
                                                "brand": {
                                                    "@type": "Brand",
                                                    "name": "JAECOO"
                                                },
                                                "model": "J7",
                                                "vehicleConfiguration": "2.0 AWD",
                                                "vehicleModelDate": "2024",
                                                "bodyType": "fastback-crossover",
                                                "driveWheelConfiguration": "https://schema.org/FourWheelDriveConfiguration",
                                                "numberOfDoors": 5,
                                                "vehicleSeatingCapacity": 5
                                            }
                                        </script>
                                    </div>

                                    <div class="desc-chars d-flex flex-column">
                                        <div class="modelContent">
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Отдаем за 30% от цены</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Авторассрочка до 8 лет</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">Лизинг для физ. лиц</span>
                                            </div>
                                            <div class="d-flex modelBlock">
                                                <img class="modelImg" src="/assets/favs/favs-check.svg" alt="">
                                                <span class="text-uppercase modelText">выгода до 200 000 ₽ </span>
                                            </div>
                                        </div>
                                        <div class="d-flex d-lg-none flex-column flex-md-row desc-btns justify-content-between">
                                            <button class="btn btn-black-trnsp askMe askMeSpec w-100">Получить спецпредложение</button>
                                            <a class="btn btn-trnsp-black w-100" href="/jaecoo-J8">Подробнее о модели</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo position-relative" modelName="JAECOO J7 LE" data-credit="{{ config('price.j7-le_month') }}">
                                    <img src="/media/slider/jaecoo_J7_LE.png" alt="Попробуй для себя JAECOO J7 LE в Башавтоком с максимальной привилегией">
                                    <div class="stickers-wrap d-flex d-md-none flex-column">
                                        <a href="https://files.jaecoo.ru/priceJ8.pdf?_gl=1*1xxlt1s*_ga*MzY5NzQ4OTguMTc1MDc2NDY0NA..*_ga_2DCLCZP52M*czE3NTA3Njg0MTgkbzIkZzEkdDE3NTA3Njg0NDIkajM2JGwwJGgw" rel="noopener noreferrer" target="_blank" class="price-list-btn" data-model="J8">
                                            <div class="stickers text-center text-uppercase w-100">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="35.994" height="35.992" transform="translate(0 0.00313568)" fill="white"/>
                                                    <path d="M24.09 16.3731C25.0353 16.7256 25.8765 17.3107 26.5358 18.0743C27.195 18.838 27.6511 19.7556 27.8617 20.7422C28.0724 21.7288 28.0309 22.7527 27.741 23.719C27.4512 24.6853 26.9223 25.563 26.2034 26.2707C25.4845 26.9785 24.5987 27.4936 23.628 27.7684C22.6572 28.0431 21.6329 28.0686 20.6497 27.8426C19.6665 27.6165 18.7561 27.1462 18.0028 26.4751C17.2495 25.804 16.6776 24.9538 16.34 24.0031M13 12.0031H14V16.0031M22.71 19.8831L23.41 20.5931L20.59 23.4131M20 14.0031C20 17.3168 17.3137 20.0031 14 20.0031C10.6863 20.0031 8 17.3168 8 14.0031C8 10.6894 10.6863 8.00314 14 8.00314C17.3137 8.00314 20 10.6894 20 14.0031Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <p class="mb-0">Скачать прайс-лист</p>
                                            </div>
                                        </a>
                                        <div class="stickers text-center text-uppercase w-100 askMe askMeSpec d-none">
                                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="36.0061" height="35.9983" transform="translate(-0.00585938)" fill="white"/>
                                                <path d="M21.0051 14.9952L15.0051 20.9952M15.0051 14.9952H15.0151M21.0051 20.9952H21.0151M9.85508 14.6152C9.70912 13.9577 9.73153 13.2741 9.92023 12.6276C10.1089 11.9811 10.4578 11.3927 10.9345 10.9169C11.4113 10.4412 12.0004 10.0936 12.6473 9.90621C13.2942 9.71886 13.9779 9.69788 14.6351 9.84521C14.9968 9.27952 15.4951 8.81397 16.084 8.4915C16.673 8.16903 17.3336 8 18.0051 8C18.6765 8 19.3372 8.16903 19.9261 8.4915C20.5151 8.81397 21.0134 9.27952 21.3751 9.84521C22.0332 9.69724 22.7181 9.71812 23.3661 9.90593C24.014 10.0937 24.6039 10.4424 25.0809 10.9194C25.5579 11.3964 25.9066 11.9863 26.0944 12.6342C26.2822 13.2821 26.3031 13.967 26.1551 14.6252C26.7208 14.9869 27.1863 15.4852 27.5088 16.0742C27.8313 16.6631 28.0003 17.3238 28.0003 17.9952C28.0003 18.6667 27.8313 19.3273 27.5088 19.9163C27.1863 20.5052 26.7208 21.0035 26.1551 21.3652C26.3024 22.0224 26.2814 22.7061 26.0941 23.353C25.9067 23.9999 25.5591 24.589 25.0834 25.0657C24.6076 25.5425 24.0192 25.8914 23.3727 26.0801C22.7262 26.2688 22.0425 26.2912 21.3851 26.1452C21.0238 26.7131 20.5252 27.1806 19.9352 27.5045C19.3452 27.8284 18.6831 27.9983 18.0101 27.9983C17.337 27.9983 16.6749 27.8284 16.0849 27.5045C15.495 27.1806 14.9963 26.7131 14.6351 26.1452C13.9779 26.2925 13.2942 26.2716 12.6473 26.0842C12.0004 25.8969 11.4113 25.5492 10.9345 25.0735C10.4578 24.5978 10.1089 24.0094 9.92023 23.3629C9.73153 22.7164 9.70912 22.0327 9.85508 21.3752C9.28503 21.0145 8.81549 20.5154 8.49012 19.9244C8.16476 19.3335 7.99414 18.6698 7.99414 17.9952C7.99414 17.3206 8.16476 16.657 8.49012 16.066C8.81549 15.475 9.28503 14.976 9.85508 14.6152Z" stroke="#2C2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <p class="mb-0">Кредит от 26 000 руб</p>
                                        </div>
                                    </div>
                                    <div class="popover J7-LE-1 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>ФИРМЕННАЯ РЕШЕТКА <br> РАДИАТОРА </p>
                                        </div>
                                    </div>

                                    <div class="popover J7-LE-2 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>ПОДВЕСКА CDC</p>
                                        </div>
                                    </div>
                                    <div class="popover J7-LE-3 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>СКРЫТЫЕ РУЧКИ <br> ДВЕРЕЙ</p>
                                        </div>
                                    </div>
                                    <div class="popover J7-LE-4 position-absolute">
                                        <a>
                                            <img src="/assets/img/models/plus.svg">
                                        </a>
                                        <div class="popover-content">
                                            <p>19" ЛЕГКОСПЛАВНЫЕ <br> ДИСКИ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none d-lg-flex flex-column flex-md-row desc-btns justify-content-between">
                                <button class="btn btn-black-trnsp askMe askMeSpec w-100">Получить спецпредложение</button>
                                <a class="btn btn-trnsp-black w-100" href="/jaecoo-J7-LE">Подробнее о модели</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include("blocks.autoInStock")

        <section class="specials" id="specials" itemscope itemtype="https://schema.org/OfferCatalog">
            <div class="container d-flex flex-column">
                <div class="specials-header">
                    <h2 class="text-uppercase">Специальные предложения</h2>
                </div>
                <div class="specials-slider">
                    <div class="swiper-pagination d-md-none"></div>
                    <div class="swiper-wrapper specials-list">
                        <div class="specials-list-el swiper-slide" itemscope itemtype="https://schema.org/Offer">
                            <div class="background" style="background-image: url('/media/specials/avtorassrochka.jpg')"></div>
                            <div class="content d-flex flex-column" itemscope itemtype="https://schema.org/Service" itemprop="itemOffered">
                                <meta itemprop="image" content="/media/specials/avtorassrochka.jpg">
                                <h3 class="text-uppercase" itemprop="name">Авторассрочка с учетом увеличенного срока остаточного платежа до 24 месяцев</h3>
                                <p itemprop="description">JAECOO совместно с ПАО «Совкомбанк» увеличивает максимальный срок по программе «Авторассрочка по карте Халва».</p>
                                <div class="d-flex">
                                    <div class="btn btn-white-trnsp askMe askMeSpec">Получить спецпредложение</div>
                                </div>
                            </div>
                        </div>
                        <div class="specials-list-el swiper-slide" itemscope itemtype="https://schema.org/Offer">
                            <div class="background" style="background-image: url('/media/specials/tradein.jpg')"></div>
                            <div class="content d-flex flex-column justify-content-center justify-content-lg-between h-100" itemscope itemtype="https://schema.org/Service" itemprop="itemOffered">
                                <meta itemprop="image" content="/media/specials/tradein.jpg">
                                <h3 class="text-uppercase" itemprop="name">Выгодный trade-in</h3>
                                <div class="d-flex">
                                    <div class="btn btn-white-trnsp askMe askMeSpec">Получить спецпредложение</div>
                                </div>
                            </div>
                        </div>
                        <div class="specials-list-el swiper-slide" itemscope itemtype="https://schema.org/Offer">
                            <div class="background" style="background-image: url('/media/specials/avtokredit.jpg')"></div>
                            <div class="content d-flex flex-column justify-content-center h-100" itemscope itemtype="https://schema.org/Service" itemprop="itemOffered">
                                <meta itemprop="image" content="/media/specials/avtokredit.jpg">
                                <h3 class="text-uppercase" itemprop="name">Программа кредитования совместно с «Росбанк Авто»</h3>
                                <p itemprop="description">Ваша возможность стать владельцем автомобиля в кредит со ставкой 0,01% на 36 месяцев.</p>
                                <div class="d-flex">
                                    <div class="btn btn-white-trnsp askMe askMeSpec">Получить спецпредложение</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testDriveWrap" >
            <div class="testDrive" >
                <div class="container d-flex flex-column flex-md-row justify-content-end">
                    <div class="testDrive-info d-flex flex-column">
                        <div class="position-relative">
                            <h5 class="d-none d-xxl-block">
                                НЕТ ВРЕМЕНИ ПРИЕХАТЬ В АВТОСАЛОН?
                                ПОПРОБУЙТЕ
                            </h5>
                            <h5 class="d-xxl-none">
                                НЕТ ВРЕМЕНИ ПРИЕХАТЬ В АВТОСАЛОН?
                                ПОПРОБУЙТЕ ВЫЕЗДНОЙ
                            </h5 >
                            <div class="d-flex align-items-center">
                                <h5 class="d-none d-xxl-block">
                                    ВЫЕЗДНОЙ ТЕСТ-ДРАЙВ
                                </h5>
                                <h5 class="d-xxl-none">
                                    ТЕСТ-ДРАЙВ
                                </h5>
                                <div class="popover position-relative">
                                    <a>
                                        <img src="/media/test-drive/popover.svg"/>
                                    </a>
                                    <div class="popover-content">
                                        <p>Есть ограничения по территории</br> распространения акции, </br>подробности уточняйте в отделе продаж</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Только в Башавтоком</p>
                        <div>
                            <div class="btn btn-white-trnsp askMe askMeExitTestDrive">Записаться на тест-драйв</div>
                        </div>
                    </div>
                </div>
                <div class="testDrive-bckg" itemprop="image" style="background-image: url('/media/test-drive/test-drive.webp')"></div>
            </div>
        </section>
        @include("blocks.credit")
        <section class="mobileApplication">
            <div class="container d-flex flex-column flex-md-row align-items-md-center">
                <div class="mobileApplication-info d-flex flex-column">
                    <h2 class="text-uppercase mb-0">Мобильное приложение JAECOO</h2>
                    <p class="mb-0">В приложении вы сможете получать актуальную информацию об автомобилях бренда и специальных предложениях, общаться с владельцами и поклонниками бренда и сделать процесс эксплуатации вашего автомобиля ещё комфортнее.</p>
                    <div class="d-flex d-md-block">
                        <div class="btn btn-trnsp-black askMe askMeTestDrive flex-grow-1">Записаться на тест-драйв</div>
                    </div>
                </div>
                <div class="mobileApplication-photo flex-grow-1">
                    <img src="/media/mobileApplication/mob_app.png" alt="Мобильное приложение JAECOO В приложении вы сможете получать актуальную информацию об автомобилях бренда и специальных предложениях, общаться с владельцами и поклонниками бренда и сделать процесс эксплуатации вашего автомобиля ещё комфортнее.">
                </div>
            </div>
        </section>

        <section class="offerWrap" itemscope itemtype="https://schema.org/Offer">
            <div class="offer" itemscope itemtype="https://schema.org/Service">
                <div class="container d-flex flex-column flex-md-row">
                    <div class="offer-info d-flex flex-column">
                        <h2 class="text-uppercase mb-0" itemprop="name">Получите выгодное предложение на покупку</h2>
                        <p class="mb-0">От официального дилера Башавтоком</p>
                        <div>
                            <div class="btn btn-white-trnsp askMe askMeSpec">Получить максимальную привилегию</div>
                        </div>
                    </div>
                </div>
                <div class="offer-bckg"  itemprop="image" style="background-image: url('/media/offer/1.jpg')"></div>
            </div>
        </section>

        @include('blocks.aboutDealer')

        @include('blocks.services')

{{--        @include('news.desktop')--}}

        @include('blocks.tradeinAssessment')

        @include('blocks.contacts')
    </main>

    <!-- Возвращён исходный JS страницы (Swiper, переключатели, обновление ссылки) -->
    <script>
        document.addEventListener('DOMContentLoaded', ()=>{
            /* Инициализация Swiper моделей */
            const names = [...document.querySelectorAll('.modelsSwiper .photo')].map(item=> item.getAttribute('modelName'));
            const modelsSwiper = new Swiper('.modelsSwiper', {
                effect: 'fade',
                noSwipingSelector: '.models .swiper-pagination',
                slidesPerView: 1,
                allowTouchMove:false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="'+className+'">'+(names[index])+'</span>';
                    },
                },
                on: {
                    init: function() {
                        // при старте подставляем цену
                        // updateCredit();
                        updateHeaderCredit(this);
                    },
                    slideChange: function() {
                        // при смене слайда подставляем цену
                        // updateCredit();
                        updateHeaderCredit(this);
                    }
                }
            });



            /* Мобильный слайдер "specials" */
            let specialsInit = false; let specialsSwiper;
            function handleSpecials() {
                if (window.innerWidth<=768) {
                    if (!specialsInit){
                        specialsInit = true;
                        specialsSwiper = new Swiper('.specials-slider', {
                            slidesPerView:1,
                            spaceBetween:10,
                            pagination:{ el:'.specials-slider .swiper-pagination' },
                        });
                    }
                } else if (specialsInit){
                    specialsSwiper.destroy(); specialsInit=false;
                }
            }
            handleSpecials();
            window.addEventListener('resize', handleSpecials);

            /* Переключатели характеристик */
            [...document.querySelectorAll('.models .model')].forEach(model=>{
                const btns=[...model.querySelectorAll('.model-switcher>div')];
                btns.forEach(btn=>btn.addEventListener('click', ()=>{
                    const target=btn.innerText;
                    btns.forEach(b=>b.classList.toggle('active', b===btn));
                    [...model.querySelectorAll('[toSwitch]')].forEach(el=>{
                        el.classList.toggle('d-none', el.getAttribute('toSwitch')!==target);
                    });
                }));
            });
            [...document.querySelectorAll('.modelsSwiper .swiper-slide')].forEach(wrap=>{
                const btns=[...wrap.querySelectorAll('.desc-chars_switcher>div')];
                btns.forEach(btn=>btn.addEventListener('click', ()=>{
                    btns.forEach(b=>b.classList.remove('active'));
                    btn.classList.add('active');
                    [...wrap.querySelectorAll('[toSwitchChar]')].forEach(el=>{
                        el.classList.toggle('d-none', el.getAttribute('toSwitchChar')!==btn.innerText);
                        el.classList.toggle('d-grid', el.getAttribute('toSwitchChar')===btn.innerText);
                    });
                }));
            });

            /* Обновление href у ссылки "Скачать прайс-лист" под активную модель (остается для десктопа) */
            const bullets = document.querySelectorAll('.swiper-pagination-bullet');
            const priceLinkAnchor = document.querySelector('.stickers-wrap a');
            const priceMap = { 'JAECOO J7':'https://files.jaecoo.ru/priceJ7.pdf', 'JAECOO J8':'https://files.jaecoo.ru/priceJ8.pdf' };
            bullets.forEach(bul=> bul.addEventListener('click', ()=>{
                const model = bul.textContent.trim();
                if (priceMap[model] && priceLinkAnchor){ priceLinkAnchor.href = priceMap[model]; }
            }));
        });
    </script>

    <script>
        /* Функция форматирования 1 234 567 */
        function formatWithSpaces(n){
            return String(n).replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }

        /* Обновляет Header Credit в .models-header */
        function updateHeaderCredit(modelsSwiper){
            try {
                // селектор целевого параграфа в шапке
                const headerPriceEls = document.querySelectorAll('.models-header .askMeSpec p.mb-0, .stickers-wrap .askMeSpec p.mb-0');
                if(!headerPriceEls || headerPriceEls.length === 0){
                    console.warn('updateHeaderCredit: target header element .models-header .askMeSpec p.mb-0 not found');
                    return;
                }

                // получаем активный слайд
                let activeSlide = null;
                if (modelsSwiper && modelsSwiper instanceof Swiper) {
                    activeSlide = modelsSwiper.slides[modelsSwiper.activeIndex];
                } else {
                    // fallback: возьмём видимый слайд в DOM
                    activeSlide = document.querySelector('.modelsSwiper .swiper-slide.active') || document.querySelector('.modelsSwiper .swiper-slide');
                }
                if(!activeSlide){
                    console.warn('updateHeaderCredit: active slide not found');
                    return;
                }

                // внутри активного слайда ищем .photo (там поставлен data-credit)
                let photo = activeSlide.querySelector('.photo');
                // если .photo нет внутри слайда, пробуем найти по modelName, взяв имя из .model-name или h3
                if(!photo){
                    const nameEl = activeSlide.querySelector('.model-name, .desc-name h3, .model-nameWrap .model-name') || activeSlide.querySelector('h3, p.model-name');
                    const modelName = nameEl ? nameEl.innerText.trim() : null;
                    if(modelName){
                        // защищённо: ищем в документе .photo с соответствующим modelName
                        photo = document.querySelector(`.photo[modelName="${modelName}"]`) || document.querySelector(`.photo[modelname="${modelName}"]`);
                    }
                }

                if(!photo){
                    console.warn('updateHeaderCredit: .photo element with data-credit not found for active slide');
                    return;
                }

                // получаем значение
                const creditRaw = photo.getAttribute('data-credit') || photo.dataset && photo.dataset.credit;
                if(!creditRaw){
                    console.warn('updateHeaderCredit: data-credit attribute empty on', photo);
                    return;
                }

                const formatted = formatWithSpaces(creditRaw);

                // Обновляем все целевые элементы (например десктоп и мобильный штук по одному)
                headerPriceEls.forEach(el => {
                    el.textContent = 'Кредит от ' + formatted + ' руб';
                });

            } catch (err) {
                console.error('updateHeaderCredit error', err);
            }
        }

        /* --- Пример использования: вызвать сразу и при смене слайда --- */
        /* Предполагается, что modelsSwiper уже объявлен ранее в вашем код. */
        if (typeof models !== 'undefined' && models) {
            // при старте
            updateHeaderCredit(models);

            // на смене слайда (работает для Swiper API)
            if (typeof models.on === 'function') {
                models.on('slideChange', function(){ updateHeaderCredit(models); });
            } else {
                // fallback: наблюдаем за изменением active-класса (если у вас не тот Swiper)
                document.querySelector('.modelsSwiper').addEventListener('slidechange', ()=> updateHeaderCredit(models));
            }
        } else {
            // Если моделиSwiper создаётся позже, можно повесить таймаут/observer, но лучше вставить вызовы сразу после создания Swiper
            console.warn('updateHeaderCredit: modelsSwiper not found — вставьте вызов updateHeaderCredit(modelsSwiper) сразу после инициализации Swiper');
        }
    </script>

    <script>
        // ЛОГИКА ПРАЙС-ЛИСТА. Используем .ask-call и .ask-ok
        document.addEventListener('DOMContentLoaded', () => {
            const priceButtons = document.querySelectorAll('.price-list-btn');
            const askCall  = document.querySelector('.ask-overlay.ask-call');
            const askOk    = document.querySelector('.ask-overlay.ask-ok');
            if (!askCall || !askOk) return;

            const form      = askCall.querySelector('form');
            const nameWrap  = askCall.querySelector('[name="name"]')?.closest('div');
            const requestEl = askCall.querySelector('.request');
            const submitBtn = askCall.querySelector('button[type="submit"]');
            const closeBtns = askCall.querySelectorAll('.ask-block-close, .ask-ok .ask-block-close');

            const priceLinks = { J7: 'https://files.jaecoo.ru/priceJ7.pdf', J8: 'https://files.jaecoo.ru/priceJ8.pdf' };
            const detectModel = () => {
                const swiperEl = document.querySelector('.modelsSwiper');
                if (swiperEl && swiperEl.swiper){
                    const active = swiperEl.swiper.slides[swiperEl.swiper.activeIndex];
                    const n = active?.querySelector('.photo')?.getAttribute('modelName')?.toUpperCase() || '';
                    return n.includes('J8') ? 'J8' : 'J7';
                }
                return 'J7';
            };
            let currentModel = 'J7';
            let isPriceListModal = false; // Флаг для отслеживания открытия через прайс-лист
            const open = ov => { ov.style.display='flex'; document.body.style.overflow='hidden'; };
            const close = ov => { ov.style.display='none'; document.body.style.overflow=''; };

            priceButtons.forEach(btn=>btn.addEventListener('click', e=>{
                e.preventDefault();
                currentModel = detectModel();
                isPriceListModal = true; // Устанавливаем флаг при открытии через прайс-лист
                if (nameWrap) nameWrap.style.display='none';
                if (requestEl) requestEl.textContent = 'Введите свой номер телефона, чтобы получить прайс-лист';
                const bckg = askCall.querySelector('.ask-block-bckg');
                if (bckg) {
                    bckg.style.backgroundImage = 'url("/media/askModal/askPriceList.webp")';
                    bckg.style.backgroundPosition = '100% center';
                }
                if (submitBtn) submitBtn.textContent='Получить';
                open(askCall);
            }));

            // Наблюдаем за открытием модалки успеха
            const observer = new MutationObserver(()=>{
                const isVisible = askOk.style.display !== 'none';
                if (isVisible){
                    if (isPriceListModal) {
                        let dl = askOk.querySelector('#priceOkDownload');
                        if (!dl){
                            dl=document.createElement('a');
                            dl.id='priceOkDownload';
                            dl.className='btn btn-black-trnsp w-100 mt-3';
                            dl.textContent='Скачать прайс-лист';
                            dl.target='_blank';
                            askOk.querySelector('.header').appendChild(dl);
                        }
                        dl.target='_blank';
                        dl.href = priceLinks[currentModel] || '#';
                        dl.style.display = 'block';
                        askOk.classList.add('price-success');
                    } else {
                        const dl = askOk.querySelector('#priceOkDownload');
                        if (dl) dl.style.display = 'none';
                        askOk.classList.remove('price-success');
                    }
                }
            });
            observer.observe(askOk, { attributes: true, attributeFilter: ['style'] });

            // Сброс флага при закрытии модалки
            const resetModal = () => {
                isPriceListModal = false;
                if (nameWrap) nameWrap.style.display = '';
                if (requestEl) requestEl.textContent = '';
                const bckg = askCall.querySelector('.ask-block-bckg');
                if (bckg) {
                    bckg.style.backgroundImage = '';
                    bckg.style.backgroundPosition = '';
                }
                if (submitBtn) submitBtn.textContent = '';
                const dl = askOk.querySelector('#priceOkDownload');
                if (dl) dl.style.display = 'none';
                askOk.classList.remove('price-success');
            };

            // закрытие крестиком и по фону
            document.querySelectorAll('.ask-overlay').forEach(ov=>{
                ov.addEventListener('click', e=>{
                    if (e.target===ov) {
                        close(ov);
                        resetModal();
                    }
                });
            });
            closeBtns.forEach(btn=>btn.addEventListener('click', ()=> {
                close(btn.closest('.ask-overlay'));
                resetModal();
            }));
        });
    </script>
@endsection
