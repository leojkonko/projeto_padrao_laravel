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
    scrollbar: {
        el: ".swiper-scrollbar",
        //hide: true,
        draggable: true,
    },
});
/*
const quantidadeDeElementos = document.querySelectorAll('.cont').length;
console.log(`Existem ${quantidadeDeElementos} elementos com a classe 'sua-classe'`);
const scrollbar = document.getElementsByClassName('swiper-scrollbar-drag')
const scrollbar_drag = document.getElementById('my-scrollbar')
//scrollbar.style.width = ;
console.log(scrollbar_drag.style.width);*/

var swiper = new Swiper(".areas-swiper", {
    slidesPerView: 1,
    spaceBetween: 40,
    pagination: {
        el: ".areas-swiper .swiper-pagination",
        clickable: true

    },
    breakpoints: {
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
var swiper = new Swiper(".diferenciais-swiper", {
    slidesPerView: 7,
    spaceBetween: 0,
    pagination: {
        el: ".diferenciais-swiper .swiper-pagination",
        clickable: true
    },
});
var swiper = new Swiper(".diferenciais-swiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    pagination: {
        el: ".diferenciais-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        992: {
            slidesPerView: 7,
        },
        767: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
    }
});
var swiper = new Swiper(".empresas-swiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    pagination: {
        el: ".empresas-swiper .swiper-pagination",
        clickable: true,
        //draggable: true,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
        //hide: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 6,
        },
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 4,
        },
        576: {
            slidesPerView: 3,
        },
    }
});


var swiper = new Swiper(".consultoria-swiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".consultoria-swiper .swiper-button-next",
        prevEl: ".consultoria-swiper .swiper-button-prev",
    },
    scrollbar: {
        el: ".consultoria-swiper .swiper-scrollbar",
        //hide: true,
    },
});
var swiper = new Swiper(".swiper-consultoria-diferenciais", {
    slidesPerView: 2,
    spaceBetween: 0,
    pagination: {
        el: ".swiper-consultoria-diferenciais .swiper-pagination",
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

var swiper = new Swiper(".cont-swiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".cont-swiper .swiper-button-next",
        prevEl: ".cont-swiper .swiper-button-prev",
    },
    scrollbar: {
        el: ".cont-swiper .swiper-scrollbar",
        //hide: true,
    },
});