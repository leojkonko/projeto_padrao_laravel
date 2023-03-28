/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */
var swiper = new Swiper(".diferenciais-swiper", {
    slidesPerView: 2,
    //spaceBetween: 30,
    navigation: {
        nextEl: ".diferenciais-swiper .swiper-button-next",
        prevEl: ".diferenciais-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".diferenciais-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        1200: {
            slidesPerView: 6,
        },
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    }
});