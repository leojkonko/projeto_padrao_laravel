/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */
var swiper = new Swiper(".banner-swiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        clickable: true
    },
});
var swiper = new Swiper(".solucoes-img-swiper", {
    slidesPerView: 2,
    //spaceBetween: 30,
    navigation: {
        nextEl: ".solucoes-img-swiper .swiper-button-next",
        prevEl: ".solucoes-img-swiper .swiper-button-prev",
    },
    breakpoints: {
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    }
});
var swiper = new Swiper(".solucoes-swiper", {
    slidesPerView: 2,
    //spaceBetween: 30,
    navigation: {
        nextEl: ".solucoes-swiper .swiper-button-next",
        prevEl: ".solucoes-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".solucoes-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    }
});