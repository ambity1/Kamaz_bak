<!DOCTYPE html>
<html lang="ru">
<head>
{{--    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="Башавтоком, JAECOO, Жеко, Джеко, Джейку, J7, J8, Ж7, Ж8, Джей семь, Джей восемь, авто, автомобиль, китайский автомобиль, авто в Уфе"/>

    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:url" content="https://jaecooufa.bashauto.com/"/>
    <meta property="og:image" content="https://jaecooufa.bashauto.com/media/aboutDealer/1.jpg"/>
    {{--    <meta property="og:type" content="website"/>--}}

    {{--    <meta itemprop="name" content="<?= htmlspecialchars($this->seo->op_title) ?>"/>--}}
    {{--    <meta itemprop="description" content="<?= htmlspecialchars($this->seo->description) ?>"/>--}}
    {{--    <meta itemprop="image" content="<?= htmlspecialchars($this->seo->op_image) ?>"/>--}}
    @include('default.desktop_head')
</head>
<body>
@include('main.desktop_header')
@yield('content')
<footer class="d-flex flex-column">
    <div class="footerTop container d-flex flex-column flex-md-row justify-content-between align-items-start">
        <div class="footerTop-logo">
            <a href="/" class="d-flex flex-column align-items-start">
                <img src="/media/footer/logo_w.svg" alt="">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="/media/footer/logo.svg" alt="">
                </div>
                <p>Башавтоком — официальный дилер JAECOO в Башкирии</p>
            </a>
        </div>
        <div class="footerTop-links">
            <div>
                <p>Модельный ряд</p>
                <nav class="d-flex flex-column">
                    <a href="/jaecoo-J7">J7</a>
                    <a href="/jaecoo-J7-LE">J7-LE</a>
                    <a href="/jaecoo-J8">J8</a>
                    <a href="/j5premiere">J5</a>
                </nav>
            </div>
            <div>
                <p>Покупка</p>
                <nav class="d-flex flex-column">
                    <a href="/#specials" toblock="specials">Специальные предложения</a>
                    <a class="askMe askMeTestDrive">Запись на тест-драйв</a>
                    <a class="askMe askMeConsultation">Консультация</a>
                </nav>
            </div>
        </div>
        <div class="footerTop-links d-none d-lg-block">
            <div>
                <p>О компании</p>
                <nav class="d-flex flex-column">
                    <a href="/#contacts" toblock="contacts">Контакты</a>
                    <a href="/#aboutDealer" toblock="aboutDealer">О компании</a>
                </nav>
            </div>
        </div>
        <div class="footerTop-links">
            <div class="d-block d-lg-none">
                <p>О компании</p>
                <nav class="d-flex flex-column">
                    <a href="/#contacts" toblock="contacts">Контакты</a>
                    <a href="/#aboutDealer" toblock="aboutDealer">О компании</a>
                </nav>
            </div>
            <div class="footerTop-contacts">
                <p>Контакты</p>
                <div class="footerTop-contacts--item">
                    <p>г. Уфа, ул. Адмирала Макарова, 32</p>
                </div>
                <div class="footerTop-contacts--item">
                    <a href="tel:+73472165577">+7 (347) 216-55-77</a>
                </div>
                <a class="btn btn-white-trnsp askMe askMeConsultation">Получить консультацию</a>
            </div>
        </div>
    </div>
    <div class="footerBottom container d-flex flex-column flex-md-row justify-content-between">
        <p class="policy"><a href="/policy">Политика конфиденциальности</a></p>
        <a href="https://ambity.ru" target="_blank">Разработка сайта - Амбити</a>
    </div>
    <div class="footerBottom container">
        @yield('footer-disclaimer')
        <p class="text">Изложенная на данном сайте информация носит ознакомительный характер не является публичной офертой, определяемой положениями статей 435 и 437 Гражданского Кодекса Российской Федерации. Подробности актуальных предложений доступны в салонах официальных дилеров JAECOO. Указанные на сайте цены, комплектации и технические характеристики, а также условия гарантии могут быть изменены в любое время без специального уведомления. Внешний вид товара, включая цвет, могут отличаться от представленных на фотографиях. Товар сертифицирован.</p>
        <p class="text">* Указана максимальная цена перепродажи с учетом всех выгод на автомобиль JAECOO J7 (Джей 7) комплектации Urban (Урбан) 1.6 Turbo (Турбо) 2WD - 2 539 900 руб. на дату 01.01.2025 г., без учета дополнительного оборудования или иных услуг, без учета предложений, программ или скидок официального дилера. Данная цена указана с учетом скидки дилера в размере 420 000 рублей, которая состоит из скидок: программы «Трейд-ин» 100 000 рублей, программы «Трейд-ин для своих» 100 000 рублей, программы «Зимняя выгода» 120 000 рублей и программы «Лучший кредит» 100 000 рублей. Подробности уточняйте у официальных дилеров, список которых расположен по адресу www.jaecoo.ru. Не является офертой. 2 Указан максимальный размер выгоды потребителя - 150 000 рублей, которая достигается за счет программы «Трейд-ин». Под скидкой по программе «Трейд-ин» понимается единовременная и разовая выгода потребителю на все комплектации от максимальной цены перепродажи автомобиля, приобретаемого по Программе, при сдаче в зачёт его стоимости принадлежащего потребителю любого автомобиля с пробегом. Условия программы уточняйте у официальных дилеров JAECOO. 3 Дополнительная скидка трейд-ин при сдаче автомобиля с пробегом марки: CHERY / EXEED / OMODA / JAECOO / Audi / Volkswagen / BMW / Land Rover / Mercedes-Benz / Skoda 4 Условия комбинируются с субсидированными кредитными программами. Кредит предоставляют партнеры программы Jaecoo Finance: ПАО «Совкомбанк», Генеральная лицензия ЦБ РФ №963 от 5 декабря 2014 года; ПАО «РОСБАНК», Генеральная лицензия №2272 от 28.01.15 г.; ПАО «ВТБ», Генеральная лицензия №1000 от 08.07.15 г.; АО «Альфа Банк», Генеральная лицензия №1326 от 16.01.15 г. 5 Выгода предоставляется при покупке нового автомобиля JAECOO J7 в кредит в любом банке. Программа действует с 16.12.2024 г. по 31.01.2025 г. 6 Фактические цвета серийных автомобилей могут отличаться от цветов, показанных на изображениях. Возможное сочетание цветов кузова, отделки, крыши, оборудование может быть опциональным. Наличие автомобилей, цены, цвета, модели, комплектации, оснащение и прочие подробности уточняйте у официальных дилеров JAECOO, список которых расположен на сайте jaecoo.ru. Для автомобилей, произведенных с 1 сентября 2024. Представленная информация по комплектации, оснащению, цвету и материалам носит предварительный характер, не является офертой, требует уточнения в отношении выбранного автомобиля у дилера.</p>
        <p class="text">** Указана максимальная цена перепродажи с учетом всех выгод на автомобиль JAECOO J8 (Джей 8) комплектации Active (Актив) 2.0 Turbo (Турбо) 4WD - 3 949 000 руб. на дату 01.01.2025 г., без учета дополнительного оборудования или иных услуг, без учета предложений, программ или скидок официального дилера. Данная цена указана с учетом скидки дилера в размере 650 000 рублей, которая состоит из скидок: программы «Трейд-ин» 175 000 рублей, программы «Трейд-ин для своих» 100 000 рублей, программы «Зимняя выгода» 200 000 рублей и программы «Лучший кредит» 175 000 рублей. Подробности уточняйте у официальных дилеров, список которых расположен по адресу www.jaecoo.ru. Не является офертой. 3 Указан максимальный размер выгоды потребителя - 175 000 рублей, которая достигается за счет программы «Трейд-ин». Под скидкой по программе «Трейд-ин» понимается единовременная и разовая выгода потребителю на все комплектации от максимальной цены перепродажи автомобиля, приобретаемого по Программе, при сдаче в зачёт его стоимости принадлежащего потребителю любого автомобиля с пробегом. Условия программы уточняйте у официальных дилеров JAECOO. 4 Дополнительная скидка трейд-ин при сдаче автомобиля с пробегом марки: CHERY / EXEED / OMODA / JAECOO / Audi / Volkswagen / BMW / Land Rover / Mercedes-Benz / Skoda 5 Условия комбинируются с субсидированными кредитными программами. Кредит предоставляют партнеры программы Jaecoo Finance: ПАО «Совкомбанк», Генеральная лицензия ЦБ РФ №963 от 5 декабря 2014 года; ПАО «РОСБАНК», Генеральная лицензия №2272 от 28.01.15 г.; ПАО «ВТБ», Генеральная лицензия №1000 от 08.07.15 г.; АО «Альфа Банк», Генеральная лицензия №1326 от 16.01.15 г. 6 Выгода предоставляется при покупке нового автомобиля JAECOO J8 в кредит в любом банке. Программа действует с 16.12.2024 г. по 31.01.2025 г. 7 Фактические цвета серийных автомобилей могут отличаться от цветов, показанных на изображениях. Возможное сочетание цветов кузова, отделки, крыши, оборудование может быть опциональным. Наличие автомобилей, цены, цвета, модели, комплектации, оснащение и прочие подробности уточняйте у официальных дилеров JAECOO, список которых расположен на сайте jaecoo.ru. 8 Натуральной кожей отделаны лицевые и центральные элементы сидений. Для автомобилей 2024 года выпуска/модельного ряда. Представленная информация по комплектации, оснащению, цвету и материалам носит предварительный характер, не является офертой, требует уточнения в отношении выбранного автомобиля у дилера.</p>
    </div>
</footer>

<div class="sidenav">
    <div class="sidenav-block d-flex flex-column">
        <div class="d-flex align-items-center justify-content-between">
            <img src="/media/header/bashavto_logo_n.svg" alt="" class="logo">
            <div class="close" onclick="document.querySelector('.sidenav').classList.remove('active'); document.querySelector('body').style='overflow-y: auto;';">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="sidenav-block-desc d-flex flex-column">
            <div class="modelsList d-flex flex-column">
                <p class="text-uppercase">Модельный ряд</p>
                <div class="d-flex flex-column">
                    <a href="/jaecoo-J7"><div>J7</div></a>
                    <a href="/jaecoo-J7-LE"><div>J7-LE</div></a>
                    <a href="/jaecoo-J8"><div>J8</div></a>
                    <a href="/j5premiere"><div>J5</div></a>
                </div>
            </div>
{{--            <div class="modelsList d-flex flex-column">--}}
{{--                <p class="text-uppercase">Владельцам</p>--}}
{{--                <div class="d-flex flex-column">--}}
{{--                    <a href="/service"><div>Кузовной ремонт</div></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a href="/#aboutDealer" toblock="aboutDealer"  class="text-uppercase">--}}
{{--                О дилере--}}
{{--            </a>--}}
{{--            <a href="/news"  class="text-uppercase">--}}
{{--                Новости--}}
{{--            </a>--}}
            <div class="sidenav-block-contacts d-flex flex-column">
                <a href="/#contacts" toblock="contacts"><p class="text-uppercase">Контакты</p></a>
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="/assets/img/contacts/mappin.svg" alt="">
                        </div>
                        <p>г. Уфа, ул. Адмирала Макарова, 32</p>
                    </div>
                    <a href="tel:+73472165577">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="/assets/img/contacts/phone.svg" alt="">
                            </div>
                            <p>+7 (347) 216-55-77</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="sidenav-block-btns d-flex flex-column">
                <div class="btn btn-black-trnsp askMe askMeSpec" onclick="document.querySelector('.sidenav').classList.remove('active'); document.querySelector('body').style='overflow-y: auto;';">Получить спецпредложение</div>
                <div class="btn btn-trnsp-black askMe askMeTestDrive" onclick="document.querySelector('.sidenav').classList.remove('active'); document.querySelector('body').style='overflow-y: auto;';">Записаться на тест-драйв</div>
            </div>
        </div>
    </div>
</div>

<div class="ask-overlay ask-call align-items-center justify-content-center fromAskMeSpec" style="display: none;">
    <div class="d-flex justify-content-center ask-block w-100">
        <div style="background-image: url(&quot;/media/askModal/spec.jpg&quot;); background-position: 75% center;" class="ask-block-bckg"></div>
        <div class="ask-block-content">
            <div class="ask-block-close"></div>
            <form class="d-flex flex-column align-items-center justify-content-center" autocomplete="off">
                <div class="d-flex flex-column">
                    <p class="request text-uppercase">Получить специальное предложение</p>
                </div>
                <div class="ask-block-fields d-flex flex-column">
{{--                    <div class="d-flex flex-column">--}}
{{--                        <p>Ваше имя *</p>--}}
{{--                        <input--}}
{{--                            name="name"--}}
{{--                            placeholder="Имя"--}}
{{--                            type="text"--}}
{{--                            autocomplete="off"--}}
{{--                            required--}}

{{--                        >--}}
{{--                        <div class="icon-container">--}}
{{--                            <div class="icon-user"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="d-flex flex-column">
                        <p>Телефон *</p>
                        <input
                            name="phone"
                            class="masked"
                            placeholder="Телефон"
                            type="text"
                            inputmode="text"
                            autocomplete="off"
                            required

                        >
                        <div class="icon-container">
                            <div class="icon-phone"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-black-trnsp w-100">Отправить</button>
                <div class="d-flex">
                    <label class="d-flex align-items-start mt-2 checkbox-content" >
                        <input type="checkbox" name="terms" required class="checkbox-input">
                        <p>Я согласен с <a href="/policy" target="_blank">условиями обработки персональных данных</a></p>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="ask-overlay ask-ok align-items-center justify-content-center" style="display: none;">
    <div class="ask-block-content">
        <div class="ask-block-close"></div>
        <div class="header d-flex flex-column align-items-center">
            <img src="/media/askModal/check-square.svg" alt="">
            <p class="request text-center mb-0">Заявка успешно отправлена</p>
            <p class="additional text-center mb-0">Мы свяжемся с вами для уточнения деталей и ответим на все вопросы</p>
        </div>
    </div>
</div>
</body>
</html>
@include('default.desktop_footer')
<div class="fixed-content">
    <div class="cookie_block" id="cookieNotice">
        <div class="container">
            <div class="cookie_block-content">
                <p class="cookie_block-text">Продолжая использовать сайт, Вы даете согласие на обработку файлов cookies и пользовательских данных, в
                    соответствии <a class="cookie_block-link" id="policyLink"> с политикой конфиденциальности</a></p>
                <button onclick="acceptCookies()"  class="btn btn-black-trnsp cookie_block-button">Cогласен</button>
            </div>
        </div>
    </div>
</div>


<script>
    function loadKongetScript() {
        const s = document.createElement('script');
        // s.src = '//app.konget.ru/inject?token=d83c3e61fef54a679c48285e3e65e5a3';
        s.async = true;
        document.body.appendChild(s);
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('policyLink').href = location.origin + '/policy';
        if (localStorage.getItem('cookieAccepted')) {
            loadKongetScript();
        }else {
            document.getElementById('cookieNotice').style.display = 'block';
        }
    });

    function acceptCookies() {
        localStorage.setItem('cookieAccepted', '1');
        document.getElementById('cookieNotice').style.display = 'none';
        loadKongetScript();
    }
</script>
