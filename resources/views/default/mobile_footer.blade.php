<script src="/assets/js/inputmask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
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
        const swiper = new Swiper('.main_slider-slider', {
            direction: 'horizontal',
            centeredSlides: true,
            loop: true,
            allowTouchMove: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        const portfolio = new Swiper('.portfolio-slider', {
            direction: 'horizontal',
            slidesPerView: 'auto',
            breakpoints: {
                768: {
                    slidesPerView: 3,
                }
            },
            loopFillGroupBlank: false,
            loop: true,
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        function clamper(){
            let clamp = document.querySelectorAll('.portfolio-slider .block p');
            let orient = document.querySelectorAll('.portfolio-slider .block h3');
            clamp.forEach((item, i)=>{
                item.style='-webkit-line-clamp: ' + Math.trunc((166 - orient[i].offsetHeight - 10)/18);
            });
        }
        clamper();
        window.addEventListener('resize', () =>{
            clamper();
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

        let modal = document.querySelector('.ask-overlay');
        let askMe = document.querySelectorAll('.askMe');
        let overModal = document.querySelector('.ask-block');
        let close = document.querySelector('.ask-block-close');
        askMe.forEach(function (item){
            modal.classList.remove('fromAskMeDeal', 'fromAskMeZayavka', 'fromAskMeTestDrive');
            item.addEventListener('click', ()=>{
                if(item.classList.contains('askMeConsultation')){
                    modal.querySelector('.request').innerText="Получите консультацию от башавтоком";
                    modal.querySelector('form').classList.add('fromAskMeDeal');
                }
                if(item.classList.contains('askMeTestDrive')){
                    modal.querySelector('.request').innerText="Запись на тест-драйв";
                    modal.querySelector('form').classList.add('fromAskMeTestDrive');
                }
                if(item.classList.contains('askMeSpec')){
                    modal.querySelector('.request').innerText="Получить специальное предложение";
                    modal.querySelector('form').classList.add('fromAskMeZayavka');
                }
                modal.style.display='flex';
                document.querySelector('body').style='overflow-y: hidden;';
            });
        });
        modal.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overModal);
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
        let forms = [...document.querySelectorAll('.ask-call .ask-block form, .contactUs .contactUs-content form')];

        let modal = document.querySelector('.ask-overlay.ask-call');
        let thisModal = modal.querySelector('form');

        forms.forEach(form=>{
            form.addEventListener('submit', (e)=>{
                e.preventDefault();

                let data = new FormData(form);

                if(data.get('phone').split(/[-_()^\s*$]+/).join('').length === 12){
                    form.querySelector('button').setAttribute('disabled', 'disabled');

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
                    fetch('/handlerZayavka.php', {
                        method: 'post',
                        body: data
                    }).then(resp=>resp.json())
                        .then(result=>{
                            let wrap = document.createElement('div');
                            wrap.classList.add('d-flex','flex-column');
                            if(result.status == 'ok'){
                                wrap.innerHTML = '<p class="request">Спасибо!</p><p>Мы получили вашу заявку, скоро с вами свяжутся.</p>';
                            }else{
                                wrap.innerHTML = '<p class="request">Ошибка!</p><p>Попробуйте чуть позже.</p>';
                            }
                            form.remove();
                            document.querySelector('.ask-block').append(wrap);
                        })
                }else{
                    alert('Заполните номер')
                }

            })
        })
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        let masked = document.querySelectorAll('.masked');
        masked.forEach(item=>{
            Inputmask({"mask": "+7 (999) 999 99 99"}).mask(item);
        });
    });
</script>
<script>
    let offer = new Swiper(".about-swiper", {
        direction: 'horizontal',
        centeredSlides: true,
        loop: true,
        pagination: {
            el: ".about-block .swiper-pagination",
            clickable: true,
        },
    });
</script>
<script async src="https://app.konget.ru/inject?token=fac8398de4944ff5a4179b867ed16e6e"></script>
