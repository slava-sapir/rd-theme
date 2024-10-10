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
    });

    const productSwiper = new Swiper(".product-carousel", {
        modules: [Pagination],
        slidesPerView: 2,
        centeredSlides: true,
        spaceBetween: 20,
        initialSlide: 0,
        loop: false,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 3,
                initialSlide: 1,
            },
            768: {
                slidesPerView: 3,
                initialSlide: 1,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 5,
                spaceBetween: 40,
                initialSlide: 2,
            }
        }
    });
});