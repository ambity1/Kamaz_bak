<section class="credit">
    <div class="container">
        <div class="credit-container d-flex">
            <div class="credit-content-wrap">
                <div class="credit-content-wrapper d-flex flex-md-row">
                    <form class="credit-content d-flex flex-column credit-form" id="credit-form">
                        <h3 class="credit-header">JAECOO В КРЕДИТ</h3>
                        <div class="credit-fields">
                            <div class="credit-content-el credit-content-el--range d-flex flex-column">
                                <p class="mb-0">Сумма первоначального взноса: <span id="output-payments"
                                                                                    class="credit-value">0</span>
                                    <span class="credit-value"> ₽</span>
                                </p>
                                <div class="credit-content-el-inputWrapper position-relative d-flex flex-column">
                                    <input class="credit-content-input" id="range-payments" type="range" name="payment"
                                           min="0" max="2399900" step="10000">
                                </div>
                            </div>
                            <div class="credit-content-el credit-content-el--range d-flex flex-column">
                                <p class="mb-0">Срок кредита: <span id="output-term" class="credit-value">0</span>
                                    <span class="credit-value">мес</span>
                                </p>
                                <div class="credit-content-el-inputWrapper position-relative d-flex flex-column">
                                    <input class="credit-content-input" id="range-term" type="range" name="term" min="0"
                                           max="96" step="1">
                                </div>
                            </div>

                            <div class="credit-content-el d-flex flex-column">
                                <p class="mb-0">Выберите модель*</p>

                                <div class="select-credits-container choices" data-choice>
                                    <select class="form-select" id="custom-select" name="model">
                                        <option value="JAECOO J7" data-initial-payment="2479900">JAECOO J7</option>
                                        <option value="JAECOO J8" data-initial-payment="3949000">JAECOO J8</option>
{{--                                        <option value="Omoda-S5" data-initial-payment="1889900">Omoda-S5</option>--}}
{{--                                        <option value="Omoda-S5-GT" data-initial-payment="2129900">Omoda-S5-GT</option>--}}
{{--                                        <option value="Omoda-C7" data-initial-payment="1889900">Omoda-C7</option>--}}
                                    </select>
                                </div>
                            </div>
                            <div class="credit-fields-inputs">
                                <div class="askBlockFieldWrapper d-flex flex-column">
                                    <label for="askname">Имя *</label>
                                    <div class="askBlockField">
                                        <input class="w-100" name="name" placeholder="Имя"
                                               type="text"
                                               required="" id="askname" autocomplete="off">
                                    </div>
                                </div>
                                <div class="askBlockFieldWrapper d-flex flex-column">
                                    <label for="askphone">Телефон *</label>
                                    <div class="askBlockField">
                                        <input class="w-100 masked" name="phone"
                                               placeholder="Телефон" type="text" required="" id="askphone"
                                               autocomplete="off"
                                               inputmode="text">
                                    </div>
                                </div>

                            </div>
                            <div class="credit-content-bottom d-flex flex-column">
                                <button class="btn btn-trnsp-white">Рассчитать платеж</button>
                                <div class="d-flex">
                                    <label class="d-flex align-items-start mt-2 checkbox-content" >
                                        <input type="checkbox" name="terms" required class="checkbox-input">
                                        <p>Я согласен с <a href="/policy" target="_blank">условиями обработки персональных данных</a></p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="credit-img">
                <picture>
{{--                    <img class="d-md-none" src="/media/credit/omoda.webp">--}}
{{--                    <img class="d-none d-md-block" src="/media/credit/moskvisch1000.webp">--}}
                    <source srcset="/media/credit/jaecoo-576.webp" media="(max-width: 991px)"/>
                    <source srcset="/media/credit/jaecoo-1000.webp" media="(min-width: 991px) and (max-width: 1400px)"/>
                    <source srcset="/media/credit/jaecoo-1440.webp" media="(min-width: 1400px) "/>
                    <img src="/media/credit/omoda-1440.webp" class="car-bg">
                </picture>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let select = document.querySelector('.form-select');
        // let choices = new Choices(select, {
        //     searchEnabled: false,
        //     itemSelectText: "",
        // });
        // Получаем ссылки на элементы
        const rangeInput_term = document.getElementById('range-term');
        const rangeInput_payments = document.getElementById('range-payments');
        const output_term = document.getElementById('output-term');
        const output_payments = document.getElementById('output-payments');

        // // Устанавливаем начальное значение
        output_term.textContent = rangeInput_term.value;
        output_payments.textContent = rangeInput_payments.value;

        /// добавляем событие при выборе из выпадающего списка модели москвича и ставим начальное значение равное 50%
        select.addEventListener("change", (e) => {
            let newMaxValue = select.options[select.selectedIndex].dataset.initialPayment;
            rangeInput_payments.max = newMaxValue;
            rangeInput_payments.value = Math.round(newMaxValue / 2 / 10000) * 10000;
            output_payments.textContent = formatNumberWithSpaces(Math.round(newMaxValue / 2 / 10000) * 10000);
            console.log(Math.round(newMaxValue / 2 / 10000) * 10000)
            rangeInput_payments.style.setProperty('--value', `${50}%`);
        })

        function formatNumberWithSpaces(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }

        // Функция для обновления значения и стилей
        function updateRange(rangeInput, output) {

            output.textContent = formatNumberWithSpaces(rangeInput.value);

            // Вычисляем процент от min до max
            const value = (rangeInput.value - rangeInput.min) / (rangeInput.max - rangeInput.min) * 100;
            let rangeWidth;
            // Получаем ширину самого инпута и ползунка (thumb)
            if (window.innerWidth < 768) {
                // Получаем ширину экрана пользователя и вычитаем 60px (отступы)
                rangeWidth = window.innerWidth - 80;
            } else {
                // Если ширина экрана больше или равна 768px, используем ширину элемента
                rangeWidth = rangeInput.offsetWidth;
            }
            console.log("Ширина", rangeWidth)

            const thumbWidth = 14; // примерная ширина thumb, можно уточнить через CSS или вычислить

            // Вычисляем смещение для span, чтобы центрировалось относительно ползунка
            const offset = (value / 100) * (rangeWidth - thumbWidth);

            // Устанавливаем положение span
            output.style.left = `${offset + thumbWidth / 2}px`; // Добавляем половину ширины ползунка для центрирования

            // Можно обновлять CSS переменную для стилизации
            rangeInput.style.setProperty('--value', `${value}%`);
        }

        // Добавляем обработчик события на изменение значения ползунка
        rangeInput_term.addEventListener('input', function () {
            updateRange(rangeInput_term, output_term);
        });

        rangeInput_payments.addEventListener('input', function () {
            updateRange(rangeInput_payments, output_payments);
        });

        function handleResize() {
            updateRange(rangeInput_term, output_term);
            updateRange(rangeInput_payments, output_payments);
        }

        window.addEventListener('resize', handleResize);

        // Устанавливаем начальное значение
        updateRange(rangeInput_term, output_term);
        updateRange(rangeInput_payments, output_payments);

    });

    // document.addEventListener('DOMContentLoaded', function () {
    //     const form = document.getElementById('credit-form');
    //     const modalOk = document.querySelector('.ask.ask-ok');
    //     const rangeInput = document.getElementById('range-payments');
    //     const outputPayments = document.getElementById('output-payments');
    //
    //     // Функция для форматирования числа с пробелами
    //     function formatNumberWithSpaces(number) {
    //         return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    //     }
    //
    //     // Обновление значения в span при изменении значения range
    //     rangeInput.addEventListener('input', function () {
    //         outputPayments.textContent = formatNumberWithSpaces(this.value);
    //     });
    //
    //     form.addEventListener('submit', function (event) {
    //         event.preventDefault();
    //
    //         const formData = new FormData(form);
    //         formData.append('method', 'credit');
    //         formData.append('target', 'Персональный расчет по кредиту');
    //
    //         // Получаем значение из range и форматируем его
    //         const rangeValue = rangeInput.value;
    //         const formattedRangeValue = formatNumberWithSpaces(rangeValue);
    //
    //         // Добавляем отформатированное значение в formData
    //         formData.set('payment', formattedRangeValue);
    //
    //         if (formData.get('phone').split(/[-_()^\s*+$]+/).join('').length === 11) {
    //             try {
    //                 ym(95565168, 'reachGoal', 'credit');
    //             } catch (err) {
    //                 console.log('');
    //             }
    //             fetch('/api/handlerZayavka', {
    //                 method: 'POST',
    //                 body: formData
    //             })
    //                 .then(response => response.json())
    //                 .then(data => {
    //                     if (data.status === 'ok') {
    //                         modalOk.classList.add('active');
    //                         form.reset();
    //                         form.querySelector('button[type="submit"]').disabled = true;
    //                     } else {
    //                         alert('Произошла ошибка при отправке формы.');
    //                     }
    //                 })
    //                 .catch(error => {
    //                     console.error('Ошибка:', error);
    //                     alert('Произошла ошибка при отправке формы.');
    //                 });
    //         } else {
    //             alert("Заполните номер");
    //         }
    //     });
    //     let modalBckg = modalOk.querySelector('.askBckg');
    //     let modalClose = modalOk.querySelector('.askClose');
    //
    //     modalBckg.addEventListener('click', () => {
    //         modalOk.classList.remove('active');
    //         document.body.style.overflowY = null;
    //     });
    //     modalClose.addEventListener('click', () => {
    //         modalOk.classList.remove('active')
    //         document.body.style.overflowY = null;
    //     });
    //     formatNumberWithSpaces(rangeInput.value)
    // });


</script>
