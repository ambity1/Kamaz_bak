    <section class="tradeInAssessmentWrapper">
    <div class="tradeInAssessmentContent">
        <div class="container d-flex justify-content-center">
            <div class="tradeInAssessment d-flex flex-column align-items-md-center align-items-start">
                <h2 class="tradeInAssessmentHeader mb-0 text-start text-md-center">Оценка вашего автомобиля <br>по Trade-in выше рынка</h2>
                <form class="tradeInAssessmentForm d-flex flex-column w-100 mb-0">
                    <div class="tradeInAssessmentField">
                        <input class="w-100" type="text" placeholder="Марка и модель" name="automobile">
                    </div>
                    <div class="tradeInAssessmentField">
                        <input class="w-100" type="number" placeholder="Год выпуска" name="year">
                    </div>
                    <div class="tradeInAssessmentField">
                        <input class="w-100 masked" type="text" placeholder="Телефон" name="phone" required>
                    </div>
                    <div class="tradeInAssessmentSubmit">
                        <button class="btn btn-black-trnsp w-100">Получить привилегию</button>
                    </div>
                    <div class="tradeInAssessmentPolicy">
                        <div class="d-flex">
                            <label class="d-flex align-items-start mt-2 checkbox-content" >
                                <input type="checkbox" name="terms" required class="checkbox-input">
                                <p>Я согласен с <a href="/policy" target="_blank">условиями обработки персональных данных</a></p>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let tradeInForm = document.querySelector(".tradeInAssessment .tradeInAssessmentForm");

        let modalOk = document.querySelector('.ask-ok');
        console.log(modalOk)
        tradeInForm.addEventListener('submit', (e)=>{
            e.preventDefault();

            let data = new FormData(tradeInForm);

            if(data.get('phone').split(/[-_()^\s*+$]+/).join('').length === 11){
                tradeInForm.querySelector('button').setAttribute('disabled', 'disabled');
                data.append('method', 'tradeIn');

                try {
                    ym(95762906,'reachGoal','tradein')
                } catch (err) {
                    console.log('');
                }

                fetch('/api/handlerZayavka', {
                    method: 'post',
                    body: data
                }).then(result=>{
                        if(result.ok){
                            form.querySelector('button').setAttribute('disabled', 'disabled');
                            modalOk.style.display = "flex";
                            document.querySelector('body').style='overflow-y: hidden;';
                            tradeInForm.reset();
                        }
                    })

            }else{
                alert('Заполните номер')
            }
        })
    })
</script>