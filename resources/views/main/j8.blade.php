@extends('desktop_main')

@section('title', 'Jaecoo J8 вся информация о модели | Официальный дилер Jaecoo Башавтоком')
@section('description', 'Jaecoo J8 -высочайший комфорт на дорогах, современные технологии и прекрасный стиль. Купите ДЖЕЙКУ J8 у нас. Официальный дилер "Башавтоком". Для информации звоните: +7 (347) 216 55 77')


@section('footer-disclaimer')
    <p class="text" style="margin-bottom: 10px">
        <sup>1</sup>Цена на автомобиль JAECOO J7 с двигателем 1.6 Turbo 2WD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
        <sup>4</sup>Цена на автомобиль JAECOO J8 с двигателем 2.0 AWD. Предложение ограничено, не является офертой (в соответствии со ст. 437, 494 ГК РФ).<br>
    </p>
@endsection
@section('content')
    <section class="modelMainBlock d-flex flex-column justify-content-end align-items-center position-relative">
        <div class="modelMainBlock-photo w-100">
            <img src="/media/J8/model_bck.webp" alt="JAECOO J8 от 3 949 000 ₽">
        </div>
        <div class="modelMainBlock-info w-100 h-100 d-flex flex-column justify-content-md-end justify-content-xxl-center align-items-start">
            <div class="container d-flex flex-column">
                <div class="text d-flex flex-column">
                    <h1 class="text-uppercase mb-0">JAECOO J8</h1>
                    <h2 class="mb-0">от {{ number_format(config('price.j8'), 0, ',', ' ') }} ₽<sup>1</sup></h2>
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
                <h2 class="text-start text-uppercase mb-0">JAECOO J8</h2>
                <div toSwitch="2.0 AWD">
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
                    <div>
                        <div>
                            <p class="text-start mb-0">от {{ number_format(config('price.j8'), 0, ',', ' ') }} ₽<sup>4</sup></p>
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
                            <h2 class="text-start text-uppercase mb-0">JAECOO J8</h2>
                            <p class="text-start mb-0" toSwitch="2.0 AWD">От {{ number_format(config('price.j8'), 0, ',', ' ') }} ₽<sup>4</sup></p>
                        </div>
                        <div class="model-switcherWrap d-flex flex-column">
                            <p>Двигатель</p>
                            <div class="d-flex model-switcher align-items-center">
                                <div class="active">2.0 AWD</div>
                            </div>
                        </div>
                        <div class="chars">
                            <div class="chars_content" toSwitch="2.0 AWD">
                                <div>
                                    <p class="val">249 Л.С.</p>
                                    <p class="val_desc mb-0">Мощность двигателя</p>
                                </div>
                                <div>
                                    <p class="val">385 Нм</p>
                                    <p class="val_desc mb-0">Крутящий момент</p>
                                </div>
                                <div>
                                    <p class="val">2 Л</p>
                                    <p class="val_desc mb-0">Объем двигателя</p>
                                </div>
                                <div>
                                    <p class="val">8.5 Сек</p>
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
                        <div class="stickers askMe askMeSpec text-uppercase">Кредит от 30 000 руб.</div>
                    </div>
                    <div class="swiper colorsSwiper d-flex flex-column">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/media/J8/black.webp" mc="color-black" alt="Попробуй для себя JAECOO J8 чёрный в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/blue.webp" mc="color-blue" alt="Попробуй для себя JAECOO J8 серо-голубой в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/blue-black-roof.webp" mc="color-blue-black-roof" alt="Попробуй для себя JAECOO J8 серо-голубой с чёрной крышей в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/gray.webp" mc="color-gray" alt="Попробуй для себя JAECOO J8 серый в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/dark-gray.webp" mc="color-gray-black-roof" alt="Попробуй для себя JAECOO J8 серый с чёрной крышей в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/gray-black-roof.webp" mc="color-dark-gray" alt="Попробуй для себя JAECOO J8 темно-серый в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/white.webp" mc="color-white" alt="Попробуй для себя JAECOO J8 белый в Башавтоком с максимальной привилегией">
                            </div>
                            <div class="swiper-slide">
                                <img src="/media/J8/white-black-roof.webp" mc="color-white-black-roof" alt="Попробуй для себя JAECOO J8 белый с черной крышей в Башавтоком с максимальной привилегией">
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
                            <img src="/media/J8/exterior-1.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Классика в деталях</h3>
                                    <p class="mb-0">Стильный и элегантный, он не затеряется в транспортном потоке большого города и везде будет к месту. JAECOO J8 в своей стихии на асфальте, на грунтовых или заснеженных дорогах и даже на бездорожье.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J8/exterior-2.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Идеальное освещение</h3>
                                    <p class="mb-0">Доминирующий элемент дизайна передней части – крупная решетка радиатора с вертикальными линиями. Высокотехнологичная светодиодная оптика выполнена в два этажа, что делает облик более привлекательным и запоминающимся.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J8/exterior-3.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Притягивает взгляды</h3>
                                    <p class="mb-0">Вертикальные ребра решетки радиатора с хромированными акцентами, светодиодные фары с полосками дневных ходовых огней, изящный воздухозаборник ставят J8 в ряд с самыми стильными внедорожниками мира.</p>
                                </div>
                                <div class="content-arrows d-none d-md-flex align-items-center justify-content-between justify-content-lg-start">
                                    <div class="swiper-button-prev"><img src="/assets/img/slider/arrow_prev_exterior.svg" alt=""></div>
                                    <div class="swiper-button-next"><img src="/assets/img/slider/arrow_next_exterior.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J8/exterior-4.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <div class="text d-flex flex-column">
                                    <h3 class="text-uppercase mb-0">Королевский размер</h3>
                                    <p class="mb-0">Легкосплавные колесные диски диаметром 20 дюймов идеально дополняют облик J8. Продуманный дизайн спиц направляет воздушные потоки к тормозным механизмам для более эффективного охлаждения.</p>
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
                            <img src="/media/J8/exterior-1.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Классика в деталях</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J8/exterior-2.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Идеальное освещение</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J8/exterior-3.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Притягивает взгляды</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/media/J8/exterior-4.webp">
                            <div class="content d-flex flex-column justify-content-end">
                                <p class="text-uppercase mb-0">Королевский размер</p>
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
                <p class="mb-0">Салон J8 тщательно продуман и безупречно сбалансирован. Классические штрихи сочетаются в нём с самыми передовыми технологиями, характерные для внедорожников решения – с элементами роскоши в интерьере, премиальные материалы отделки с образцовым качеством изготовления.</p>
            </div>
            <div class="interiorSwiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/media/J8/interior-1.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J8/interior-2.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J8/interior-3.webp">
                    </div>
                    <div class="swiper-slide">
                        <img src="/media/J8/interior-4.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="technologies">
        <div class="container d-flex flex-column">
            <div class="technologies-header d-flex flex-column">
                <h2 class="text-uppercase mb-0">Технологии и безопасность</h2>
                <p class="mb-0">Премиальный автомобиль безупречен во всём – в дизайне, в оснащении и, конечно, в движении. Благодаря мощному двигателю J8 уверенно преодолевает большие расстояния, современная трансмиссия незаметно переключает передачи и экономит топливо, а продвинутая система полного привода с электронным управлением сама подстраивается под конкретные дорожные условия.</p>
            </div>
            <div class="technologies-grid">
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/J8/tech-1.webp" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Скорость в вашем вкусе</h3>
                        <p>Новый J8 оснащен бензиновым турбомотором рабочим объемом 2,0 л с непосредственным впрыском и турбонаддувом. Это налогово-комфортные 249 л.с. и отличные характеристики во всём рабочем диапазоне.</p>
                    </div>
                </div>
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/J8/tech-2.webp" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">На большом экране</h3>
                        <p>Суммарная диагональ приборной панели J8, объединенной с дисплеем мультимедиа, составляет 24,6 дюйма. Изогнутые боковые грани дисплея обеспечивают безупречную читаемость, при любом освещении.</p>
                    </div>
                </div>
                <div class="technologies-grid-block d-flex flex-column flex-md-row flex-lg-column">
                    <img src="/media/J8/tech-3.webp" alt="">
                    <div class="d-flex flex-column text">
                        <h3 class="text-uppercase mb-0">Будет исполнено</h3>
                        <p>Мощный восьмиядерный процессор Snapdragon 8155 – самый скоростной из всех применяемых в автомобилях – обеспечивает мгновенную загрузку мультимедийной системы и незамедлительную реакцию на команды.</p>
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
            <div class="offer-bckg" style="background-image: url('/media/J8/offer-1.webp')"></div>
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