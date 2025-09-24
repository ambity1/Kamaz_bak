@extends('desktop_main')

@section('title', 'Jaecoo J5 вся информация о модели | Официальный дилер Jaecoo Башавтоком')
@section('description', 'Jaecoo J5 - стиль, безопасность и комфорт на дорогах. Премьера ДЖЕЙКУ J5. Официальный дилер Башавтоком. Для информации звоните: +7 (347) 216 55 77')

@section('content')

    <section class="J5banner">
        <div class="J5banner-block position-relative">
            <picture class="position-absolute">
                <source srcset="/media/j5Premiere/j5-premiere-320w.webp" media="(max-width:768px)">
                <source srcset="/media/j5Premiere/j5-premiere-576w.webp" media="(max-width:992px) and (min-width:768px)">
                <source srcset="/media/j5Premiere/j5-premiere-1000w.webp" media="(max-width:1400px) and (min-width:992px)">
                <source srcset="/media/j5Premiere/j5-premiere-1400w.webp" media="(min-width:1400px)">
                <img src="/media/j5Premiere/j5-premiere-1400w.webp">
            </picture>
            <div class="J5banner-block-text">
                <div class="container">
                    <h2 class="text-uppercase mb-0 text-header">JAECOO J5 </br> ДОЛГОЖДАННАЯ </br> ПРЕМЬЕРА 2025 года</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="J5info">
        <div class="container">
            <div class="J5info-block">
                <div class="J5info-block-text">
                    <h2>КОМПАКТНЫЙ КРОССОВЕР </br>JAECOO J5:</h2>
                    <p>JAECOO J5 воплощает в себе все узнаваемые и традиционные элементы текущих моделей бренда: дизайн вдохновлен горными пейзажами и отображает его характер - уверенный во всем.
                        </br>
                        Классика каждой детали автомобиля сочетается с инновационными разработками, что позволит вам чувствовать себя комфортно на любом дорожном покрытии.
                    </p>
                    <p>
                        Характеристики JAECOO J5:</br>
                        Класс автомобиля: B SUV</br>
                        Габаритные размеры длина/ширина высота мм: 4380 / 1860 / 1650</br>
                        Колесная база: 2610</br>
                        Двигатель/КПП: 2WD 1.5Т/CVT 25( вариатор); AWD 1.6T 7DCT (роботизированная)</br>
                        Требования к топливу: минимально допустимое 92</br>
                        Дорожный просвет: 190 мм</br>
                        Расход топлива в смешанном цикле от: 7,2 л/100 км
                    </p>
                </div>
                <picture>
                    <img src="/media/j5Premiere/j5-inf-1400.webp">
                </picture>
            </div>
        </div>
    </section>

    @include('blocks.services')

    @include('news.desktop')

    @include('blocks.contacts')
@endsection