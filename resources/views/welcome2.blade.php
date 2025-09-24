<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Башавтоком | Omoda</title>
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
    @include('default.desktop_head')
</head>
<body>
@include('default.desktop_header')
<? Layout::add_file_mark(); //для страниц которые хранятся в файлах ?>
<main class="main-page">
    <?php
    \Engine\Module::insert_by_params([
        'mod' => '1',
        'id' => '5',
        'alias' => 'desktop_slider',
        'position' => 'body',
    ])->render();
    ?>
    <?php
    // \Engine\Component::insert(false, \Engine\System::get_params())->render();
    ?>
    <?php

    \Engine\Module::insert_by_params([
        'mod' => '1',
        'id' => '5',
        'alias' => 'desktop_main_page',
        'position' => 'body',
    ])->render();

    ?>
    <?php
    /*    \Engine\Module::insert_by_params([
            'mod' => '5',
            'id' => '1',
            'alias' => 'last_news_main',
            'position' => 'body',
        ])->render();*/
    ?>
</main>
<?php
\Engine\Module::insert_by_params([
    'mod' => '1',
    'id' => '1',
    'alias' => 'desktop_footer',
    'position' => 'body',
])->render();
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/.default/' . $this->layout . '_footer.php' ?>
<? Layout::add_footer_mark(); //контент генерируемый модулями и компонентами ?>
</body>
</html>
