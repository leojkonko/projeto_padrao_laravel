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

var swiper = new Swiper(".atuacao-swiper", {
    slidesPerView: 2,
    //spaceBetween: 30,
    navigation: {
        nextEl: ".atuacao-swiper .swiper-button-next",
        prevEl: ".atuacao-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".atuacao-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 3,
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
        delay: 400,
    },
    speed: 1000,
});


const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
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
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        },
        slideChange: function () {
            var activeSlide = this.slides[this.activeIndex];
            console.log(activeSlide.classList[3]);
            mudarTexto(activeSlide.classList[3])
        }
    },
});

var swiper = new Swiper(".numeros-swiper", {
    slidesPerView: 2,
    //spaceBetween: 50,
    navigation: {
        nextEl: ".numeros-swiper .swiper-button-next",
        prevEl: ".numeros-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".numeros-swiper .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 3,
        },
        800: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
        /*450: {
            slidesPerView: 2,
        },*/
    }
});