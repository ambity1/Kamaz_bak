<div class="meeting-marquee marquee-runline">
    <div>
        <div>
            <div class="meeting_item">
                <p class="white">ПРИВИЛЕГИЯ НА ПЕРВОЕ АВТО</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">ЕСТЬ ПРЕДЛОЖЕНИЕ?</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">СДЕЛАЕМ ЛУЧШЕ!</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">ЕСТЬ ПРЕДЛОЖЕНИЕ?</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">СДЕЛАЕМ ЛУЧШЕ!</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
        </div>
        <div>
            <div class="meeting_item">
                <p class="white">ПРИВИЛЕГИЯ НА ПЕРВОЕ АВТО</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">ЕСТЬ ПРЕДЛОЖЕНИЕ?</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">СДЕЛАЕМ ЛУЧШЕ!</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">ЕСТЬ ПРЕДЛОЖЕНИЕ?</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
            <div class="meeting_item">
                <p class="white">СДЕЛАЕМ ЛУЧШЕ!</p>
                <img src="media/meetingMarquee/flame-white.svg">
            </div>
        </div>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        function meetingMarquee() {
            if(document.querySelector('.marquee .marquee-runline div')){
                document.querySelector('.marquee .marquee-runline div').style.setProperty('--marq','-'+document.querySelector('.marquee .marquee-runline div>div').getBoundingClientRect().width+'px');
            }
        }
        meetingMarquee();
        window.addEventListener('resize', meetingMarquee);
    });
</script>