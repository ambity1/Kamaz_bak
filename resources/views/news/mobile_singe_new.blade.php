@extends('mobile_main')

@section('title', $new['name'])

@section('content')
    <main id="content-page">
        <div class="content">
            <div class="container">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('single_new', $new) }}
            </div>
        </div>
        <main id="content">
            <div class="single-news">
                <div class="article container">
                    <div class="single-news-name">
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
        </main>
    </main>
@endsection
