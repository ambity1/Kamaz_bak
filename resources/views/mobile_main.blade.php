<!DOCTYPE html>
<html lang="ru">
<head>
{{--    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    {{--    <title>Башавтоком | Omoda<?= htmlspecialchars($this->seo->title) ?></title>--}}
    <meta name="description" content="Официальный дилер OMODA в Уфе! На сайте вы можете купить кроссовер OMODA! Для информации звоните: +7 (347) 216 55 77"/>
    {{--    <meta name="description" content="Официальный дилер OMODA в Уфе! На сайте вы можете купить кроссовер OMODA! Для информации звоните: +7 (347) 216 55 77<?= htmlspecialchars($this->seo->description) ?>"/>--}}
    {{--    <meta name="keywords" content="<?= htmlspecialchars($this->seo->keywords) ?>"/>--}}

    {{--    <meta property="og:title" content="<?= htmlspecialchars($this->seo->op_title) ?>"/>--}}
    {{--    <meta property="og:description" content="<?= htmlspecialchars($this->seo->description) ?>"/>--}}
    {{--    <meta property="og:url" content="<?= 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>--}}
    {{--    <meta property="og:image" content="<?= htmlspecialchars($this->seo->op_image) ?>"/>--}}
    {{--    <meta property="og:type" content="website"/>--}}

    {{--    <meta itemprop="name" content="<?= htmlspecialchars($this->seo->op_title) ?>"/>--}}
    {{--    <meta itemprop="description" content="<?= htmlspecialchars($this->seo->description) ?>"/>--}}
    {{--    <meta itemprop="image" content="<?= htmlspecialchars($this->seo->op_image) ?>"/>--}}
    @include('default.mobile_head')
</head>
<body>
@include('main.mobile_header')
@yield('content')
@include('main.mobile_footer')
@include('default.mobile_footer')
</body>
</html>
