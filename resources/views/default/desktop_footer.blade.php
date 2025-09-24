<script src="/assets/js/inputmask.min.js"></script>
<script src="/assets/desktop/js/bootstrap.min.js"></script>

<!-- StreamWood code -->
<script defer src="https://clients.streamwood.ru/code?swKey=6d628faa2a6071cdbebc37ae626c7bf0&swDomainKey=d057319544483e4e5e08d1b1c500edc0" charset="utf-8"></script>
<!-- /StreamWood code -->

<!-- StreamWood QUIZ code -->
<script defer src="https://clients.streamwood.ru/quiz/code/?swKey=6d628faa2a6071cdbebc37ae626c7bf0&swDomainKey=d057319544483e4e5e08d1b1c500edc0" charset="utf-8"></script>
<!-- /StreamWood QUIZ code -->
<script defer src="/assets/js/fslightbox.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        [...document.querySelectorAll('[toblock]')].forEach(item=>{
            item.addEventListener('click', (e)=>{
                console.log(1)
                if(document.getElementById(item.getAttribute('toblock'))){
                    e.preventDefault();
                    document.querySelector('.sidenav').classList.remove('active');
                    document.querySelector('body').style.overflowY=null;
                    window.scrollTo({top: document.getElementById(item.getAttribute('toBlock')).offsetTop-document.querySelector('header').offsetHeight ,behavior: 'smooth' })
                }
            })
        })
    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const telLinks = document.querySelectorAll('a[href^="tel:"]');
        const isMobile = /Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
        telLinks.forEach(function (link) {
            // ✅ Добавляем классы
            if (!isMobile){
                link.classList.add("askMe", "askMeSpec");
            }
            // ✅ Обработка клика
            link.addEventListener("click", function (event) {
                if (!isMobile) {
                    event.preventDefault(); // Блокируем действие на десктопе
                    // Модалка откроется, если есть логика на класс (например, .js-open-modal)
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.pageYOffset >= 5) {
            document.querySelector('.sticky-header').classList.add('active');
        }
        document.addEventListener("scroll", function (){
            if (window.pageYOffset >= 5) {
                document.querySelector('.sticky-header').classList.add('active');
            }
            else {
                document.querySelector('.sticky-header').classList.remove('active');
            }
        });

        let overlay = document.querySelector('.sidenav');
        let overBlock = document.querySelector('.sidenav-block');
        overlay.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overBlock);
            if ( ! withinBoundaries ) {
                overlay.classList.remove('active');
                document.querySelector('body').style='overflow-y: auto;';
            }
        });

        let modal = document.querySelector('.ask-overlay.ask-call');
        let askMe = document.querySelectorAll('.askMe');
        let overModal = document.querySelector('.ask-block-bckg');
        let overModal2 = document.querySelector('.ask-block-content');
        let close = document.querySelector('.ask-block-close');
        askMe.forEach(function (item){
            modal.classList.remove('fromAskMeSpec', 'fromAskMeConsultation', 'fromAskMeTestDrive', 'fromAskMeServices', 'fromAskMeExitDrive');
            item.addEventListener('click', ()=>{
                modal.querySelector('form').classList.remove('fromAskMeSpec','fromAskMeConsultation','fromAskMeTestDrive', 'fromAskMeServices', 'fromAskMeExitDrive');
                if(item.classList.contains('askMeSpec')){
                    modal.querySelector('.request').innerText="Получить специальное предложение";
                    modal.querySelector('form').classList.add('fromAskMeSpec');
                    modal.querySelector('.ask-block-bckg').style.backgroundImage='url(/media/askModal/spec.jpg)';
                    modal.querySelector('.ask-block-bckg').style.backgroundPosition = '75% center';
                }
                if(item.classList.contains('askMeConsultation')){
                    modal.querySelector('.request').innerText="Получите консультацию от башавтоком";
                    modal.querySelector('form').classList.add('fromAskMeConsultation');
                    modal.querySelector('.ask-block-bckg').style.backgroundImage='url(/media/askModal/consult.jpg)';
                    modal.querySelector('.ask-block-bckg').style.backgroundPosition = '75% center';
                }
                if(item.classList.contains('askMeTestDrive')){
                    modal.querySelector('.request').innerText="Запись на тест-драйв";
                    modal.querySelector('form').classList.add('fromAskMeTestDrive');
                    modal.querySelector('.ask-block-bckg').style.backgroundImage = 'url(/media/askModal/testDrive.png)';
                    modal.querySelector('.ask-block-bckg').style.backgroundPosition = '45% center';
                }
                if(item.classList.contains('askMeExitTestDrive')){
                    modal.querySelector('.request').innerText="ОСТАВИТЬ ЗАЯВКУ НА ВЫЕЗДНОЙ ТЕСТ-ДРАЙВ";
                    modal.querySelector('form').classList.add('fromAskMeExitDrive');
                    modal.querySelector('.ask-block-bckg').style.backgroundImage = 'url(/media/test-drive/test-drive.webp)';
                    modal.querySelector('.ask-block-bckg').style.backgroundPosition = '45% center';
                }
                if(item.classList.contains('askMeServices')){
                    modal.querySelector('.request').innerText="Записаться в сервисный центр";
                    modal.querySelector('form').classList.add('fromAskMeServices');
                    modal.querySelector('.ask-block-bckg').style.backgroundImage = 'url(/media/askModal/services.webp)';
                    modal.querySelector('.ask-block-bckg').style.backgroundPosition = '45% center';
                }
                modal.style.display='flex';
                document.querySelector('body').style='overflow-y: hidden;';
            });
        });
        modal.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overModal) || e.composedPath().includes(overModal2);
            if ( ! withinBoundaries ) {
                modal.style='display: none';
                document.querySelector('body').style='overflow-y: auto;';
            }
        });
        close.addEventListener('click', (e) =>{
            modal.style.display='none';
            document.querySelector('body').style='overflow-y: auto;';
        });
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        let masked = document.querySelectorAll('.masked');
        // Функция для применения маски к полю ввода
        function applyPhoneMask(input) {
            Inputmask({
                mask: "+7 (999) 999 99 99",
                clearIncomplete: false,
                showMaskOnHover: false,
                onBeforeMask: function (value, opts) {
                    // Проверяем, начинается ли номер с "8"
                    if (value.startsWith("8") || value.startsWith("7")) {
                        // Убираем "8" и добавляем "+7"
                        return "+7" + value.slice(1);
                    }
                    if (value.startsWith("+8")) {
                        return "+7" + value.slice(2);
                    }
                    if (value.startsWith("+7")) {
                        return "+7" + value.slice(2);
                    }
                    return value;
                }
            }).mask(input);
        }

        masked.forEach(item=>{
            item.addEventListener("input", (e) => {
                if(e.target.value.length === 1){
                    if(e.target.value === "8" || e.target.value === "7"){
                        e.target.value = '';
                        if (!e.target.inputmask){
                            applyPhoneMask(item);
                        }
                    }
                }else if(e.target.value.length === 2){
                    if(e.target.value === "+7"){
                        e.target.value = '';
                        if (!e.target.inputmask){
                            applyPhoneMask(item);
                        }
                    }else{
                        if (!e.target.inputmask){
                            applyPhoneMask(item);
                        }
                    }
                }else if(e.target.value.length === 0){
                    if (e.target.inputmask){
                        e.target.inputmask.remove()
                    }
                }else{
                    if (!e.target.inputmask){
                        applyPhoneMask(item);
                    }
                }
            })
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        let forms = [...document.querySelectorAll('.ask-call .ask-block form, .contactUs .contactUs-content form, .credit-form')];
        let okModal = document.querySelector('.ask-ok');
        let close = okModal.querySelector('.ask-block-close')
        let overModal = okModal.querySelector('.ask-block-content');
        let request = okModal.querySelector('.request');
        let additional = okModal.querySelector('.additional');
        let modal = document.querySelector('.ask-overlay.ask-call');

        let thisModal = modal.querySelector('form');

        forms.forEach(form=>{
            form.addEventListener('submit', (e)=>{
                e.preventDefault();

                let data = new FormData(form);
                // calltouch
                try {
                    data.append("sessionId", window.ct('calltracking_params','p5iraygo').sessionId)
                } catch (err) {
                    console.log('');
                }

                if(data.get('phone').split(/[-_()^\s*+$]+/).join('').length === 11){
                    if(thisModal.classList.contains('fromAskMeSpec')){
                        try {
                            ym(95762906,'reachGoal','offer')
                        } catch (err) {
                            console.log('');
                        }
                    }

                    if(thisModal.classList.contains('fromAskMeConsultation')){
                        try {
                            ym(95762906,'reachGoal','consult')
                        } catch (err) {
                            console.log('');
                        }
                    }

                    if(thisModal.classList.contains('fromAskMeTestDrive')){
                        try {
                            ym(95762906,'reachGoal','test-drive')
                        } catch (err) {
                            console.log('');
                        }
                    }
                    if(thisModal.classList.contains('fromAskMeExitDrive')){
                        data.append('target', 'Запись на выездной тест-драйв');
                        try {
                            ym(95762906,'reachGoal','test-drive')
                        } catch (err) {
                            console.log('');
                        }
                    }
                    if(thisModal.classList.contains('fromAskMeServices')){
                        try {
                            ym(95762906,'reachGoal','service')
                        } catch (err) {
                            console.log('');
                        }
                    }

                    try {
                        ym(95762906,'reachGoal','forma')
                    } catch (err) {
                        console.log('');
                    }

                    try{
                        window.ctw.createRequest(
                            'callback',
                            data.get('phone').split(/[-_()^\s*$+]+/).join(''),
                            [
                                {"name": "Name", "value": data.get('name') ?? ''},
                            ],
                            function(success, data){
                                if (success) {
                                    console.log('Создана заявка на колбек, идентификатор: ' + data.callbackRequestId)
                                } else {
                                    switch(data.type) {
                                        case "request_throttle_timeout":
                                        case "request_throttle_count":
                                            console.log('Достигнут лимит создания заявок, попробуйте позже');
                                            break;
                                        case "request_phone_blacklisted":
                                            console.log('номер телефона находится в черном списке');
                                            break;
                                        case "validation_error":
                                            console.log('были переданы некорректные данные');
                                            break;
                                        default:
                                            console.log('Во время выполнения запроса произошла ошибка: ' + data.type);
                                    }
                                }
                            },
                            null,
                            []
                        )
                    } catch (e){
                        console.log('calltouch fail');
                    }

                    data.append('method', 'sendZayavka');
                    form.querySelectorAll('input, button').forEach(item=>item.setAttribute('disabled', 'disabled'))
                    fetch('/api/handlerZayavka', {
                        method: 'post',
                        body: data
                    }).then(resp=>resp.json(), ()=>{form.querySelectorAll('input, button').forEach(item=>item.removeAttribute('disabled'));})
                        .then(result=>{
                            if(result.status === 'ok'){
                                modal.style='display: none';
                                document.querySelector('body').style='overflow-y: auto;';
                                form.reset();
                                document.querySelectorAll('input[type="range"]').forEach(range => {
                                    range.style.setProperty('--value', '50%');
                                });
                                form.querySelectorAll('input, button').forEach(item=>item.removeAttribute('disabled'));
                                if (form.classList.contains("credit-form")) {
                                    request.innerText = 'Успешно отправлено!';
                                    additional.innerText = 'Мы скоро Вам перезвоним';
                                } else {
                                    request.innerText = 'Заявка успешно отправлена';
                                    additional.innerText = 'Мы свяжемся с вами для уточнения деталей и ответим на все вопросы';
                                }
                                if(!document.querySelector('.modelModal')?.classList?.contains('open')) {
                                    okModal.style.display = 'flex';
                                }
                                document.querySelector('body').style='overflow-y: hidden;';
                            }else{
                                form.querySelectorAll('input, button').forEach(item=>item.removeAttribute('disabled'));
                            }
                        }, ()=>{
                            form.querySelectorAll('input, button').forEach(item=>item.removeAttribute('disabled'));
                        })
                }else{
                    alert('Заполните номер')
                }
            })
        })
        okModal.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overModal);
            if ( ! withinBoundaries ) {
                okModal.style='display: none';
                document.querySelector('body').style='overflow-y: auto;';
            }
        });
        close.addEventListener('click', (e) =>{
            okModal.style.display='none';
            document.querySelector('body').style='overflow-y: auto;';
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: false,
            freeMode: true,
            // loopedSlides: 5,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            loop: false,
            freeMode: true,
            slidesPerView: 1.2,
            centeredSlides: true,
            spaceBetween: 5,
            updateOnWindowResize: true,
            thumbs: {
                swiper: galleryThumbs,
            },
            breakpoints: {
                768: {
                    spaceBetween: 10,
                    freeMode: false,
                    slidesPerView: 1.3,
                    centeredSlides: false,
                },
            }
        });

    });
</script>

<script async src="//app.konget.ru/inject?token=da8a925e3e0c4f5095079f8924345af4"></script>