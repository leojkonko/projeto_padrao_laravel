/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

new Swiper(".banner-swiper", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    direction: $(window).width() > 767 ? 'vertical' : 'horizontal',
    rewind: false,
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    effect: 'creative',
    creativeEffect: {
        prev: {
            translate: [0, 0, -400],
        },
        next: {
            translate: $(window).width() > 767 ? [0, '100%', 0] : ['100%', 0, 0],
        },
    },
});

new Swiper(".setores-swiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    rewind: false,
    centerInsufficientSlides: true,
    pagination: {
        el: ".setores-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        767: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    }
});

new Swiper(".blog-swiper", {
    slidesPerView: 1,
    spaceBetween: 25,
    rewind: false,
    centerInsufficientSlides: true,
    pagination: {
        el: ".blog-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    navigation: {
        prevEl: ".blog .swiper-button-prev",
        nextEl: ".blog .swiper-button-next",
    },
    breakpoints: {
        767: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    },
});
new Swiper(".mySwiper-produto", {
    slidesPerView: 1,
    navigation: {
        prevEl: ".mySwiper-produto .swiper-button-prev",
        nextEl: ".mySwiper-produto .swiper-button-next",
    },
});


new Swiper(".mySwiper-relacionados", {
    slidesPerView: 2,
    spaceBetween: 20,
    /*pagination: {
        el: ".mySwiper-relacionados .swiper-pagination",
        type: "bullets",
        clickable: true,
    },*/
    navigation: {
        prevEl: ".mySwiper-relacionados .swiper-button-prev",
        nextEl: ".mySwiper-relacionados .swiper-button-next",
    },
    breakpoints: {
        767: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    },

});


new Swiper(".mySwiper-blog-detalhe", {
    slidesPerView: 1,
    pagination: {
        el: ".mySwiper-blog-detalhe .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});