@extends('desktop_main')

@section('title', $new['name'])
@section('description', 'Официальный дилер Jaecoo в Уфе. На сайте вы можете подобрать и купить автомобиль Jaecoo на свой вкус. Для информации звоните: +7 (347) 216 55 77')

@section('content')
    <main>
        <section class="typed">
            <div class="single-news">
                <div class="article container">
                    <div class="single-news-name">
                        <div class="content" style="margin-bottom: 40px">
                        {{ Diglactic\Breadcrumbs\Breadcrumbs::render('single_new', $new) }}
                        </div>
                        <div class="single-news-name-text d-flex flex-column">

                            <h3>{{ $new['name'] }}</h3>
                        </div>
                        <img src="{{ $new['image'] }}">
                    </div>
                    <div class="single-news-desc d-flex justify-content-between align-items-center">
                        <div>{!! $new['html'] !!}</div>
                    </div>

                    <p class="publicdate">Опубликовано {{ date("d.m.Y", strtotime($new['published'])) }}</p>
                </div>
            </div>
        </section>
    </main>
@endsection
