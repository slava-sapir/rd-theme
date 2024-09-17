import Swiper from 'swiper';
import {Navigation, EffectFade, Autoplay} from 'swiper/modules';

document.addEventListener("DOMContentLoaded", function () {
    const reviewsSwiper = new Swiper(".swiper", {
        modules: [Navigation, EffectFade, Autoplay],
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        grabCursor: true,
        loop: true,
    });
});