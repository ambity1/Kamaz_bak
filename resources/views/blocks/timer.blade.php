<section class='timer0' style="margin-top: 40px">
    <div class='container'>
        <div class='timer-container'>
            <h2 class='timer-title text-center mb-0'>До конца акции осталось</h2>
            <div class='timer-content d-flex flex-wrap justify-content-between'>
                <div class='align-items-center flex-column'>
                    <div id="timer" class='d-flex'></div>
                    <div class='labels row d-flex'>
                        <div class='col-3 text-center'>дня</div>
                        <div class='col-3 text-center'>часов</div>
                        <div class='col-3 text-center'>минут</div>
                        <div class='col-3 text-center'>секунд</div>
                    </div>
                </div>
                <form class='timer-form d-flex flex-column align-items-center' id='form' autocomplete="off">
                    <input
                            class='w-100 masked'
                            name='phone'
                            placeholder='Телефон'
                            autocomplete="off"
                            required

                    />
                    <button class='btn btn-black-trnsp w-100' type='submit' >Узнать цену</button>
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
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        function getNextSaturday() {
            const now = new Date();
            const dayOfWeek = now.getDay();
            const daysUntilNextSaturday = (6 - dayOfWeek + 7) % 7;
            const nextSaturday = new Date(now);
            nextSaturday.setDate(now.getDate() + daysUntilNextSaturday);
            nextSaturday.setHours(23, 59, 59, 999); // конец следующей субботы
            return nextSaturday;
        }

        // Функция запуска таймера
        function startTimer() {
            const now = new Date();
            let targetDate = new Date('2024-11-02T15:59:59');
            const twoHoursInSeconds = 2 * 60 * 60;

            // Проверяем, нужно ли обновить дату окончания на следующую субботу
            if ((targetDate - now) / 1000 < twoHoursInSeconds) {
                targetDate = getNextSaturday(); // Обновляем на следующую субботу
            }

            // Проверяем, если время истекло, скрываем таймер
            if (now >= targetDate) {
                document.querySelector('.timer').style.display = 'none';
                return;
            }

            // Вычисляем разницу во времени в секундах
            const diff = Math.floor((targetDate - now) / 1000);

            // Создаем таймер
            const clock = $('#timer').FlipClock(diff, {
                clockFace: 'DailyCounter',
                countdown: true
            });
        }

        // Запуск таймера
        startTimer();

        // Логика формы
        const form = document.getElementById('form');
        const modalOk = document.querySelector('.ask-ok');
        const submitButton = form.querySelector('button');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const data = new FormData(form);
            if (data.get('phone').replace(/[-_()^\s*+$]+/g, '').length === 11) {
                submitButton.setAttribute('disabled', 'disabled');
                data.append('method', 'timer');
                try {
                    ym(95762906, 'reachGoal', 'gift');
                } catch (err) {
                    console.log('Ошибка в вызове цели:', err);
                }

                fetch('/api/handlerZayavka', {
                    method: 'POST',
                    body: data
                })
                    .then(resp => resp.json())
                    .then(result => {
                        if (result.status === 'ok') {
                            submitButton.setAttribute('disabled', 'disabled');
                            modalOk.style.display = "flex";
                            document.body.style.overflowY = 'hidden';
                            form.reset();
                        } else {
                            alert('Произошла ошибка при отправке данных');
                        }
                    })
                    .catch(error => {
                        console.error('Ошибка:', error);
                        submitButton.removeAttribute('disabled');
                    });
            } else {
                alert('Заполните номер');
            }
        });
    });
</script>


