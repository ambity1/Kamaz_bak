@extends('desktop_main')

@section('title', 'JAECOO J7-LE вся информация о модели | Официальный дилер Jaecoo Башавтоком')
@section('description', 'JAECOO J7-LE -высочайший комфорт на дорогах, современные технологии и прекрасный стиль. Купите ДЖЕЙКУ J7-LE у нас. Официальный дилер "Башавтоком". Для информации звоните: +7 (347) 216 55 77')


@section('footer-disclaimer')
    <p class="text" style="margin-bottom: 10px">
        <sup>1</sup>Цена на автомобиль JAECOO J7 с двигателем 1.6 Turbo 2WD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
        <sup>4</sup>Цена на автомобиль JAECOO J7-LE с двигателем 2.0 AWD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
    </p>
@endsection
@section('content')
    <section class="modelMainBlock d-flex flex-column justify-content-end align-items-center position-relative">
        <div class="modelMainBlock-photo w-100">
            <img src="/media/J7_LE/model_bck.webp" alt="JAECOO J7-LE от 3 949 000 ₽">
        </div>
        <div class="modelMainBlock-info w-100 h-100 d-flex flex-column justify-content-md-end justify-content-xxl-center align-items-start">
            <div class="container d-flex flex-column">
                <div class="text d-flex flex-column">
                    <h1 class="text-uppercase mb-0">JAECOO J7-LE</h1>
                    <p class="mb-0">Лимитированная версия</p>
                    <h2 class="mb-0">от {{ number_format(config('price.j7-le'), 0, ',', ' ') }} ₽<sup>1</sup></h2>
                </div>
                <div class="btns d-flex flex-column flex-md-row">
                    <button class="btn btn-white-trnsp askMe askMeSpec">Получить спецпредложение</button>
                    <button class="btn btn-trnsp-white askMe askMeTestDrive">Тест-драйв</button>
                </div>
            </div>
        </div>
    </section>

    @include("blocks.timer")

    <section class="modelColors">
        <div class="container d-flex flex-column">
            <div class="modelColors-header d-flex d-lg-none flex-column">
                <h2 class="text-start text-uppercase mb-0">JAECOO J7-LE</h2>
                <div toSwitch="1.5 TURBO 2WD LE, LE TOP">
                    <script type="application/ld+json">{
                                                  "@context": "https://schema.org",
                                                  "@type": "Car",
                                                  "name": "JAECOO J7-LE 1.5 TURBO 2WD LE, LE TOP",
                                                  "vehicleIdentificationNumber": "LVTDD24B8RD000000",
                                                  "image": [
                                                    "/media/J7_LE/blue.webp"
                                                  ],
                                                  "url": "https://jaecooufa.bashauto.com/jaecoo-J7-LE",
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
                                                  "model": "J7-LE",
                                                  "vehicleConfiguration": "1.5 TURBO 2WD LE, LE TOP",
                                                  "vehicleModelDate": "2024",
                                                  "bodyType": "fastback-crossover",
                                                  "driveWheelConfiguration": "https://schema.org/FourWheelDriveConfiguration",
                                                  "numberOfDoors": 5,
                                                  "vehicleSeatingCapacity": 5
                                                }
                                        </script>
                    <div>
                        <div>
                            <p class="text-start mb-0">от {{ number_format(config('price.j7-le'), 0, ',', ' ') }} ₽<sup>4</sup></p>
                        </div>
                    </div>
                </div>
                <div class="stickers-wrap d-lg-none d-flex flex-column align-items-end">
                    <div class="stickers askMe askMeSpec text-uppercase">День продаж</div>
                    <div class="stickers askMe askMeSpec text-uppercase">Кредит от 30 000 руб.</div>
                </div>
            </div>
            <div class="modelColors-modelWrap d-flex flex-column-reverse flex-lg-row justify-content-between align-items-lg-start">
                <div class="modelColors-data d-flex flex-column">
                    <div class="model-info d-flex flex-column align-items-start">
                        <div class="modelColors-header d-none d-lg-flex flex-column">
                            <h2 class="text-start text-uppercase mb-0">JAECOO J7-LE</h2>
                            <p class="text-start mb-0" toSwitch="1.5 TURBO 2WD LE, LE TOP">От {{ number_format(config('price.j7-le'), 0, ',', ' ') }} ₽<sup>4</sup></p>
                        </div>
                        <div class="model-switcherWrap d-flex flex-column">
                            <p>Двигатель</p>
                            <div class="d-flex model-switcher align-items-center">
                                <div class="active">1.5 TURBO 2WD LE, LE TOP</div>
                            </div>
                        </div>
                        <div class="chars">
                            <div class="chars_content" toSwitch="1.5 TURBO 2WD LE, LE TOP">
                                <div>
                                    <p class="val">147 Л.С.</p>
                                    <p class="val_desc mb-0">Мощность двигателя</p>
                                </div>
                                <div>
                                    <p class="val">210 Нм</p>
                                    <p class="val_desc mb-0">Крутящий момент</p>
                                </div>
                                <div>
                                    <p class="val">1,5 Л</p>
                                    <p class="val_desc mb-0">Объем двигателя</p>
                                </div>
                                <div>
                                    <p class="val">12,5 Сек</p>
                                    <p class="val_desc mb-0">Разгон до 100 км/ч</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row flex-lg-column btns">
                        <a class="btn btn-black-trnsp flex-grow-1 askMe askMeSpec">Получить спецпредложение</a>
                        <a class="btn btn-trnsp-black flex-grow-1 askMe askMeTestDrive">Записаться на тест-драйв</a>
                    </div>
                </div>
                <div class="modelColors-model">
                    <div class="stickers-wrap d-lg-flex d-none">
                        <div class="stickers askMe askMeSpec text-uppercase">День продаж</div>
                        <div class="stickers askMe askMeSpec text-uppercase">Кредит от 7 764 руб.</div>
                    </div>
                    <div class="swiper colorsSwiper d-flex flex-column">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/media/J7_LE/white.webp" mc="color-white" alt="Попробуй для себя JAECOO J7-LE белый в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7_LE/gray_blue.webp" mc="color-silver" alt="Попробуй для себя JAECOO J7-LE серо-голубой в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7_LE/silver.webp" mc="color-silver-black-roof" alt="Попробуй для себя JAECOO J7-LE серебрянный с чёрной крышей в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7_LE/black.webp" mc="color-black" alt="Попробуй для себя JAECOO J7-LE черный в Башавтоком с максимальной привилегией">
                            </div>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="exterior">
        <div class="container d-flex flex-column">
            <div class="exterior-header">
                <h2 class="text-uppercase">современные технологии</h2>
            </div>
            <div class="exterior-content d-flex flex-column">
                <div class="swiper exteriorSwiper">
                    <div class="swiper-pagination d-md-none"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-1.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Выдвигающиеся ручки</h3>
                                    <p class="mb-0">Автоматические дверные ручки с электроприводом открываются легким касанием и не боятся морозов</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-2.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Колеса 18”</h3>
                                    <p class="mb-0">18-дюймовые легкосплавные диски — стильные
                                        и технологичные. Аэродинамичные спицы делают внешний вид спортивным и еще лучше охлаждают тормоза.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-3.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">дистанционное открытие багажника</h3>
                                    <p class="mb-0">Багажник открывается автоматически — достаточно приблизиться к нему с ключом в кармане. Не нужно искать ключ, даже если руки заняты.
                                        Угол открытия можно настроить под свой рост,
                                        и автомобиль запомнит ваш выбор.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-4.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Зеркала заднего вида</h3>
                                    <p class="mb-0">Зеркала на стойках — неброская, но эстетичная деталь дизайна JAECOO J7 LE. Их контрастные вставки гармонично перекликаются с другими акцентными штрихами экстерьера.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper exteriorThumbSwiper d-none d-md-block">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-1.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Выдвигающиеся
                                    ручки</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-2.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Колеса 18”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-3.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Дистанционное открытие багажника</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7_LE/exterior-4.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Зеркала
                                    заднего вида</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interior">
        <div class="container d-flex flex-column">
            <div class="interior-header d-flex flex-column">
                <h2 class="text-uppercase mb-0">Комфортный салон</h2>
                <p class="mb-0">Салон JAECOO J7 LE тщательно продуман и сбалансирован. Классические штрихи сочетаются в нем с самыми передовыми технологиями, а характерные для внедорожников решения
                    – с элементами роскоши в отделке.</p>
            </div>
            <div class="interiorSwiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/media/J7_LE/interior-1.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7_LE/interior-2.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7_LE/interior-3.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7_LE/interior-4.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="technologies">
        <div class="container d-flex flex-column">
            <div class="technologies-header d-flex flex-column">
                <h2 class="text-uppercase mb-0">динамика и безопасность</h2>
                <p class="mb-0">Прочный и безопасный кузов, мощный тяговитый двигатель и отличная трансмиссия – JAECOO J7 LE готов стать надежным и удобным партнером
                    в ежедневных поездках или захватывающих дальних путешествиях.</p>
            </div>
            <div class="technologies-grid">
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/J7_LE/tech-1.webp" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Современный двигатель
                            и надежная трансмиссия</h3>
                        <p>JAECOO J7 LE оснащен современным турбированным двигателем с рабочим объемом 1,5 л. Мощность составляет 147 л. с. (108 кВт),
                            а крутящий момент достигает 210 Н•м. Двигатель работает в паре с роботизированной трансмиссией 6DCT с двумя сцеплениями.</p>
                    </div>
                </div>
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/J7_LE/tech-2.webp" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Высокий дорожный просвет</h3>
                        <p>Этот автомобиль создан для приключений! Высокий дорожный просвет и короткие свесы дарят уверенность на любом покрытии,
                            а практичная отделка нижней части кузова неокрашенным пластиком позволяет не беспокоиться о мелких царапинах в пути. С ним вы откроете новые горизонты, не ограничивая себя в выборе маршрута.</p>
                    </div>
                </div>
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/J7_LE/tech-3.webp" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Удобный селектор КПП</h3>
                        <p>Элегантный селектор КПП, идеально ощущаемый в руке, открывает свободу ручного переключения передач, даря полный контроль над динамикой. А интуитивно понятная круглая шайба выбора режимов движения позволяет мгновенно адаптировать автомобиль к любым условиям прямо на ходу, превращая каждую поездку в захватывающее приключение.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("blocks.autoInStock")

    <section class="offerWrap">
        <div class="offer">
            <div class="container d-flex flex-column flex-md-row">
                <div class="offer-info d-flex flex-column">
                    <h2 class="text-uppercase mb-0">Получите выгодное предложение на покупку</h2>
                    <p class="mb-0">От официального дилера Башавтоком</p>
                    <div>
                        <div class="btn btn-white-trnsp askMe askMeSpec">Получить максимальную привилегию</div>
                    </div>
                </div>
            </div>
            <div class="offer-bckg" style="background-image: url('/media/J7_LE/offer-1.webp')"></div>
        </div>
    </section>

    @include('blocks.aboutDealer')

    @include('blocks.services')

    @include('news.desktop')

    @include('blocks.contacts')

    <script>
        let names = [...document.querySelectorAll('.colorsSwiper .swiper-slide img')].map(item=> item.getAttribute('mc'))
        let models = new Swiper(".colorsSwiper", {
            effect: "fade",
            allowTouchMove: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    return `<div class="${className}"><img src="/assets/img/colors/${names[index]}.svg"></div>`;
                },
            }
        });

        let exteriorThumbs = new Swiper('.exteriorThumbSwiper', {
            spaceBetween:20,
            slidesPerView:4,
            freeMode:true,
            loop:false,
            slideToClickedSlide:true,
        });

        let exterior = new Swiper('.exteriorSwiper', {
            effect:'fade',
            slidesPerView: 1,
            loop: true,
            thumbs:{
                swiper: exteriorThumbs
            },
            navigation: {
                nextEl: '.exteriorSwiper .swiper-button-next',
                prevEl: '.exteriorSwiper .swiper-button-prev',
            },
            pagination: {
                el: ".exteriorSwiper .swiper-pagination",
            },
        });

        let interior = new Swiper('.interiorSwiper', {
            slidesPerView: 1,
            initialSlide: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: true,
            centeredSlides: false,
            breakpoints:{
                992 : {
                    slidesPerView: "auto",
                    spaceBetween: 30,
                    initialSlide: 1,
                    autoplay: true,
                    loop: true,
                    centeredSlides: true,
                }
            },
            pagination: {
                el: ".interiorSwiper .swiper-pagination",
            },
        });

        document.addEventListener('DOMContentLoaded', ()=>{
            let slideSwitcherBtns = [...document.querySelectorAll('.modelColors .model-switcher>div')];
            slideSwitcherBtns.forEach(btn=>{
                btn.addEventListener('click', ()=>{
                    // let currContent = document.querySelector(`.modelColors .chars_content[toSwitch="${btn.innerText}"]`);
                    slideSwitcherBtns.forEach(item=>{
                        item.classList.remove('active');

                        if(btn.innerText === item.innerText){
                            item.classList.add('active');
                        }
                    });
                    [...document.querySelectorAll('.modelColors [toSwitch]')].forEach(item=>{
                        if(btn.innerText === item.getAttribute('toSwitch')){
                            // item.classList.add('d-flex');
                            item.classList.remove('d-none');
                        }else{
                            // item.classList.remove('d-flex');
                            item.classList.add('d-none');
                        }
                    });
                })
            })
        })
    </script>
@endsection