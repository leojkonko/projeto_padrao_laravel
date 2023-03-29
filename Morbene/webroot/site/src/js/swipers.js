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

var swiper = new Swiper(".banner-vertical-swiper", {
    direction: "vertical",
    slidesPerView: 3,
    pagination: {
        el: ".banner-vertical-swiper .swiper-pagination",
        clickable: true,
    },
    spaceBetween: 30,
    autoplay: {
        delay: 600,
    },
});



var swiper = new Swiper(".marcas-swiper", {
    slidesPerView: 2,
    //spaceBetween: 30,
    navigation: {
        nextEl: ".marcas-swiper .swiper-button-next",
        prevEl: ".marcas-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".marcas-swiper .swiper-pagination",
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

var swiper = new Swiper(".numeros-swiper", {
    slidesPerView: 2,
    spaceBetween: 25,
    navigation: {
        nextEl: ".numeros-swiper .swiper-button-next",
        prevEl: ".numeros-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".numeros-swiper .swiper-pagination",
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