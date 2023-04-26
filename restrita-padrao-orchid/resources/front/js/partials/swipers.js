/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

new Swiper(".banner-swiper", {
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    rewind: false,
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});

new Swiper(".gallery-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".gallery-swiper .swiper-button-next",
        prevEl: ".gallery-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".gallery-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
