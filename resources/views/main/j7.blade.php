@extends('desktop_main')

@section('title', 'Jaecoo J7 вся информация о модели | Официальный дилер Jaecoo Башавтоком')
@section('description', 'Jaecoo J7 - стиль, безопасность и комфорт на дорогах. Купите ДЖЕЙКУ J7 у нас. Официальный дилер "Башавтоком". Для информации звоните: +7 (347) 216 55 77')


@section('footer-disclaimer')
            <p class="text" style="margin-bottom: 10px"><sup>1</sup>Цена на автомобиль JAECOO J7 с двигателем 1.6 Turbo 2WD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
                <sup>2</sup>Цена на автомобиль JAECOO J7 с двигателем 1.6 Turbo AWD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).
            </p>
@endsection
@section('content')
    <section class="modelMainBlock d-flex flex-column justify-content-end align-items-center position-relative">
        <div class="modelMainBlock-photo w-100">
            <img src="/media/J7/model_bck.jpg" alt="JAECOO J7 от 2 709 900 ₽">
        </div>
        <div class="modelMainBlock-info w-100 h-100 d-flex flex-column justify-content-md-end justify-content-xxl-center align-items-start">
            <div class="container d-flex flex-column">
                <div class="text d-flex flex-column">
                    <h1 class="text-uppercase mb-0">JAECOO J7</h1>
                    <p class="mb-0">Это по-настоящему</p>
                    <h2 class="mb-0">от {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>1</sup></h2>
                </div>
                <div class="btns d-flex flex-column flex-md-row">
                    <a class="btn btn-white-trnsp askMe askMeSpec">Получить спецпредложение</a>
                    <a class="btn btn-trnsp-white askMe askMeTestDrive">Тест-драйв</a>
                </div>
            </div>
        </div>
    </section>
    
    @include("blocks.timer")

    <section class="modelColors">
        <div class="container d-flex flex-column">
            <div class="modelColors-header d-flex d-lg-none flex-column">
                <h2 class="text-start text-uppercase mb-0">JAECOO J7</h2>
                <div toSwitch="1.6 TURBO 2WD">
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
                                                    "price": 2399900,
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
                            <p class="text-start mb-0">От {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>1</sup></p>
                        </div>
                    </div>
                </div>
                <div toSwitch="1.6 TURBO AWD">
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
                                                    "price": 3089900,
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
                            <p class="text-start mb-0 d-none" toSwitch="1.6 TURBO AWD">От 3 089 900 ₽<sup>2</sup></p>
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
                            <h2 class="text-start text-uppercase mb-0">JAECOO J7</h2>
                            <p class="text-start mb-0" toSwitch="1.6 TURBO 2WD">От {{ number_format(config('price.j7'), 0, ',', ' ') }} ₽<sup>1</sup></p>
                            <p class="text-start mb-0 d-none" toSwitch="1.6 TURBO AWD">От 3 089 900 ₽<sup>2</sup></p>
                        </div>
                        <div class="model-switcherWrap d-flex flex-column">
                            <p>Двигатель</p>
                            <div class="d-flex model-switcher align-items-center">
                                <div class="active">1.6 TURBO 2WD</div>
                                <div>1.6 TURBO AWD</div>
                            </div>
                        </div>
                        <div class="chars">
                            <div class="chars_content" toSwitch="1.6 TURBO 2WD">
                                <div>
                                    <p class="val">186 Л.С.</p>
                                    <p class="val_desc mb-0">Мощность двигателя</p>
                                </div>
                                <div>
                                    <p class="val">275 Нм</p>
                                    <p class="val_desc mb-0">Крутящий момент</p>
                                </div>
                                <div>
                                    <p class="val">1,6 Л</p>
                                    <p class="val_desc mb-0">Объем двигателя</p>
                                </div>
                                <div>
                                    <p class="val">9,4 Сек</p>
                                    <p class="val_desc mb-0">Разгон до 100 км/ч</p>
                                </div>
                            </div>
                            <div class="d-none chars_content" toSwitch="1.6 TURBO AWD">
                                <div>
                                    <p class="val">186 Л.С.</p>
                                    <p class="val_desc mb-0">Мощность двигателя</p>
                                </div>
                                <div>
                                    <p class="val">275 Нм</p>
                                    <p class="val_desc mb-0">Крутящий момент</p>
                                </div>
                                <div>
                                    <p class="val">1,6 Л</p>
                                    <p class="val_desc mb-0">Объем двигателя</p>
                                </div>
                                <div>
                                    <p class="val">8,9 Сек</p>
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
                <div class="modelColors-model d-flex flex-column">
                    <div class="stickers-wrap d-lg-flex d-none">
                        <div class="stickers askMe askMeSpec text-uppercase">День продаж</div>
                        <div class="stickers askMe askMeSpec text-uppercase">Кредит от 30 000 руб.</div>
                    </div>
                    <div class="swiper colorsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/media/J7/green.png" mc="color-green" alt="Попробуй для себя JAECOO J7 зелёный в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7/green-black-roof.png" mc="color-green-black-roof" alt="Попробуй для себя JAECOO J7 зелёный с чёрной крышей в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7/black.png" mc="color-black" alt="Попробуй для себя JAECOO J7 чёрный в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7/gray-black-roof.png" mc="color-gray-black-roof" alt="Попробуй для себя JAECOO J7 серо-голубой с чёрной крышей в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7/silver.png" mc="color-silver" alt="Попробуй для себя JAECOO J7 серебристый в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7/silver-black-roof.png" mc="color-silver-black-roof" alt="Попробуй для себя JAECOO J7 серебристый с чёрной крышей в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J7/white.png" mc="color-white" alt="Попробуй для себя JAECOO J7 белый в Башавтоком с максимальной привилегией">
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
                <h2 class="text-uppercase">Технологичный дизайн</h2>
            </div>
            <div class="exterior-content d-flex flex-column">
                <div class="swiper exteriorSwiper">
                    <div class="swiper-pagination d-md-none"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-1.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Классика и современность</h3>
                                    <p class="mb-0">Дизайн JAECOO J7 выполнен в классическом внедорожном стиле. Автомобиль выглядит брутально и, в то же время, по-современному элегантно. Его эстетика не подвержена течению времени благодаря проверенным годами дизайнерским решениям.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-2.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Уверенный и запоминающийся «взгляд»</h3>
                                    <p class="mb-0">Доминирующий элемент дизайна передней части – крупная решетка радиатора с вертикальными линиями. Высокотехнологичная светодиодная оптика выполнена в два этажа, что делает облик более привлекательным и запоминающимся.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-3.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">LED-оптика премиального уровня</h3>
                                    <p class="mb-0">Световая температура светодиодных фар J7 подобрана максимально близко к естественному освещению. Такой свет наиболее эффективен и гарантирует безопасность управления автомобилем в любых погодных условиях.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-4.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Уверенный облик в любом ракурсе</h3>
                                    <p class="mb-0">Задняя светотехника выполнена в современном стиле – J7 выглядит узнаваемым в транспортном потоке, а его «световая подпись» легко запоминается.</p>
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
                            <img src="/media/J7/exterior-1.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Классика и современность</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-2.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Уверенный и запоминающийся «взгляд»</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-3.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">LED-оптика премиального уровня</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J7/exterior-4.jpg">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Уверенный облик в любом ракурсе</p>
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
                <p class="mb-0">Салон JAECOO J7 тщательно продуман и сбалансирован. Классические штрихи сочетаются в нем с самыми передовыми технологиями, а характерные для внедорожников решения —<br>с элементами роскоши в отделке.</p>
            </div>
            <div class="interiorSwiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/media/J7/interior-1.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7/interior-3.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7/interior-4.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7/interior-5.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J7/interior-6.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="technologies">
        <div class="container d-flex flex-column">
            <div class="technologies-header d-flex flex-column">
                <h2 class="text-uppercase mb-0">Динамика и безопасность</h2>
                <p class="mb-0">Прочный и безопасный кузов, мощный тяговитый двигатель и отличная трансмиссия, полный привод и хорошая проходимость – JAECOO J7 готов стать надёжным и удобным партнёром в ежедневных поездках или захватывающих дальних путешествиях.</p>
            </div>
            <div class="technologies-grid">
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/technologies/engineAndTransmission.jpg" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Современный двигатель и надёжная трансмиссия</h3>
                        <p>JAECOO J7 использует 1.6L двигатель с 186 лс (136.5 kw) и 275 nm крутящего момента, работая в паре с 7DCT коробкой передач с 98% эффективностью. Переключения происходят за 0.2s.</p>
                    </div>
                </div>
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/technologies/sevenregdrive.jpg" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">7 режимов движения</h3>
                        <p>JAECOO J7 предлагает выбор из семи различных режимов движения: «Экономичный», «Стандартный», «Спортивный», «Песок», «Грязь», «Снег» или «Бездорожье»</p>
                    </div>
                </div>
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/technologies/awd.jpg" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Интеллектуальный полный привод</h3>
                        <p>JAECOO J7 имеет интеллектуальную систему полного привода, которая может автоматически адаптироваться к различным дорожным условиям. Она реагирует на изменения дорожного покрытия за 0,1 секунды.</p>
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
                    <h2 class="text-uppercase mb-0">Получите выгодное предложение на покупку</h2>
                    <p class="mb-0">От официального дилера Башавтоком</p>
                    <div>
                        <div class="btn btn-white-trnsp askMe askMeSpec">Получить максимальную привилегию</div>
                    </div>
                </div>
            </div>
            <div class="offer-bckg" style="background-image: url('/media/offer/1.jpg')"></div>
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