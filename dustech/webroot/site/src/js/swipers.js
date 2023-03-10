/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

var swiper = new Swiper(".produtos-destaque-swiper", {
    slidesPerView: 2,
    spaceBetwen: 10,
    navigation: {
        nextEl: ".produtos-destaque-swiper .swiper-button-next",
        prevEl: ".produtos-destaque-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".produtos-destaque-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
    }

});


var swiper = new Swiper("mySwiper-diferenciais", {
    slidesPerView: 1,
    pagination: {
        el: "mySwiper-diferenciais .swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        992: {
            slidesPerView: 2,
        },
        767: {
            slidesPerView: 2,
        },
    }

});

/*
var swiper = new Swiper(".mySwiper-teste", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
*/

var swiper = new Swiper(".mySwiper-banner-teste", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".banner-teste .swiper-button-next",
        prevEl: ".banner-teste .swiper-button-prev",
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
    }
});


var swiper = new Swiper(".mySwiper-banner", {
    slidesPerView: 2,
    navigation: {
        nextEl: ".banner .swiper-button-next",
        prevEl: ".banner .swiper-button-prev",
    },
    breakpoints: {
        1200: {
            slidesPerView: 5,
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

var swiper = new Swiper(".produtos-detalhe-swiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".produtos-detalhe-swiper .swiper-button-next",
        prevEl: ".produtos-detalhe-swiper .swiper-button-prev",
    },
});


var swiper = new Swiper(".produtos-relacionados-swiper", {
    //spaceBetween: 20,
    slidesPerView: 2,
    navigation: {
        nextEl: ".produtos-relacionados-swiper .swiper-button-next",
        prevEl: ".produtos-relacionados-swiper .swiper-button-prev",
    },
    breakpoints: {
        1500: {
            slidesPerView: 5,
        },
        1200: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 2,
        },
    }
});

var swiper = new Swiper(".mySwiper-empresa", {
    pagination: {
        el: ".mySwiper-empresa .swiper-pagination",
        clickable: true
    },
});