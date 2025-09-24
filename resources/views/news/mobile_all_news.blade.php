@extends('mobile_main')

@section('title', 'Башавтоком | Новости')

@section('content')
    <main>
        <section class="newsAll">
            <div class="container">
                <div class="newsAll-head d-flex flex-column">
                    {{ Diglactic\Breadcrumbs\Breadcrumbs::render('news') }}
                    <h1>Новости Башавтоком</h1>
                </div>

                <div class="newsAll-block">
                    <?php
                    $months = [
                        'января',
                        'февраля',
                        'марта',
                        'апреля',
                        'мая',
                        'июня',
                        'июля',
                        'августа',
                        'сентября',
                        'октября',
                        'ноября',
                        'декабря'
                    ];

                    $news = \App\Models\News::where('category', '=', 1)
                        ->where('archive', '=', 0)
                        ->orderBy('published', 'DESC')
                        ->get()
                    ?>
                        @foreach ($news as $new)
                            @if ($new['category'] == 1)
                                <a href="/{{ 'news' . $new['link_title'] }}" class="newsAll-block-item d-flex flex-column">
                                    <img src="{{ $new['image'] }}" alt="">
                                    <div class="flex-grow-1 d-flex flex-column align-items-start justify-content-between">
                                        <h3>{{ $new['name'] }}</h3>
{{--                                            {{ $month = date('n', strtotime( $new['published']))-1 }}--}}
                                        <p class="publicdate">
                                            <span> <span>{{ date("d.m.Y", strtotime( $new['published'])) }}</span></span>
                                        </p>
                                    </div>
                                </a>
                            @else
                                <a href="/{{ 'events' . $new['link_title'] }}" class="eventsAll-block-item">
                                    <div class="eventsAll-block-item-date">
                                        {{ $month = date('n', strtotime( $new['published']))-1 }}
                                        <p>{{ date("d $months[$month]", strtotime( $new['published'])) }}</p>
                                    </div>
                                    <img src="{{ $new['image'] }}" alt="">
                                    <div class="eventsAll-block-item-desc d-flex flex-column">
                                        <div class="eventsAll-block-item-desc-btn">{{ $new['event_type'] }}</div>
                                        <h3>{{ $new['name'] }}</h3>
                                        <div class="d-flex flex-column">
                                            <p class="publicdate">
                                                <span>{{ date("d.m.Y", strtotime( $new['published'])) }}</span>
                                            </p>
                                            <p>{{ $new['address'] }}</p>
                                        </div>


                                    </div>
                                </a>
                            @endif
                        @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
