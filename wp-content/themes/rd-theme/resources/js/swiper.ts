import Swiper from 'swiper';
import {Pagination, EffectFade, Autoplay} from 'swiper/modules';

document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".image-carousel", {
        modules: [Pagination, EffectFade, Autoplay],
        slidesPerView: 1.5,
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // breakpoints: {
        //     640: {
        //         slidesPerView: 1,
        //         spaceBetween: 10,
        //     },
        //     768: {
        //         slidesPerView: 2,
        //         spaceBetween: 20,
        //     },
        //     1024: {
        //         slidesPerView: 3,
        //         spaceBetween: 30,
        //     },
        // },
    });
});