/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */
var swiper = new Swiper(".mySwiper-banner", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".mySwiper-banner .swiper-button-next",
        prevEl: ".mySwiper-banner .swiper-button-prev",
    },
});
var swiper = new Swiper(".mySwiper-empresa", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".mySwiper-empresa .swiper-button-next",
        prevEl: ".mySwiper-empresa .swiper-button-prev",
    },
});

var swiper = new Swiper(".mySwiper-buttons", {
    slidesPerView: 2,
    spaceBetween: 20,
    pagination: {
        el: ".mySwiper-buttons .swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    }
});

var swiper = new Swiper(".mySwiper-produtos", {
    slidesPerView: 2,
    spaceBetween: 20,
    pagination: {
        el: ".mySwiper-produtos .swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
    }
});

var swiper = new Swiper(".mySwiper-relacionados", {
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
        el: ".mySwiper-relacionados .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".mySwiper-relacionados .swiper-button-next",
        prevEl: ".mySwiper-relacionados .swiper-button-prev",
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    }
});
var swiper = new Swiper(".mySwiper-produto-detalhe", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".mySwiper-produto-detalhe .swiper-button-next",
        prevEl: ".mySwiper-produto-detalhe .swiper-button-prev",
    },
});