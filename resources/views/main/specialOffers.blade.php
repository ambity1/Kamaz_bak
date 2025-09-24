<section class="specialsOffers d-flex flex-column">
    <div class="container d-flex justify-content-start">
        <div class="specialsOffers-header">
            <h2 сlass="text-uppercase">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h2>
        </div>
    </div>
    <div class="container ">
        <div class="swiper specialsOffersSwiper position-relative">
            <div class="swiper-wrapper">
                
                <!--                <div class="swiper-slide askMe askMeConsultation">-->
                <!--                    <img src="/media/specials/winter.webp" alt="">-->
                <!--                </div>-->
                <div class="swiper-slide askMe askMeSpec">
                    <img src="/assets/img/specialOffer/specials4.webp" alt="">
                </div>
                <div class="swiper-slide askMe askMeSpec">
                    <img src="/assets/img/specialOffer/specials3.webp" alt="">
                </div>
                <div class="swiper-slide askMe askMeSpec">
                    <img src="/assets/img/specialOffer/specials2.webp" alt="">
                </div>
                <div class="swiper-slide askMe askMeSpec">
                    <img src="/assets/img/specialOffer/new-special2.webp" alt="">
                </div>
            </div>

            <img class="swiper-button-prev d-lg-block d-none" src="/assets/img/specialOffer/arrow-left.svg" alt="">
            <img class="swiper-button-next d-lg-block d-none" src="/assets/img/specialOffer/arrow-rigth.svg" alt="">
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.specialsOffersSwiper', {
            slidesPerView: 4,
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                576: { // Экран от 576px до 991px
                    slidesPerView: 3,
                    spaceBetween: 8,
                },
                992: { // Экран от 992px и выше
                    slidesPerView: 4,
                    spaceBetween: 16,
                },
                0: { // Экран до 576px
                    slidesPerView: 2.3,
                    spaceBetween: 2,
                },
            },
        });
    });
</script>