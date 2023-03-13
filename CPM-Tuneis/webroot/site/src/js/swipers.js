/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

var swiper = new Swiper(".construcao-swiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".construcao-swiper .swiper-button-next",
        prevEl: ".construcao-swiper .swiper-button-prev",
    },
});
var swiper = new Swiper(".areas-swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".areas-swiper .swiper-pagination",
        clickable: true
    },
});