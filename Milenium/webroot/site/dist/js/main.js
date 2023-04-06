document.querySelectorAll('a[href^="#"]').forEach(e => {
        e.addEventListener("click", function (e) {
            if (e.preventDefault(), "#" !== this.getAttribute("href")) {
                let e = document.querySelector(this.getAttribute("href"));
                e && e.scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                    inline: "center"
                })
            }
        })
    }),
    function () {
        var e = document.querySelectorAll("img[data-src]");
        if (e) {
            const i = new IntersectionObserver((e, s) => {
                e.forEach(i => {
                    if (i.isIntersecting) {
                        let e = i.target;
                        e.src = e.dataset.src, i.target.addEventListener("load", function () {
                            let e = this.nextElementSibling;
                            e && e.classList.contains("loader") && e.remove()
                        }), s.unobserve(i.target)
                    }
                })
            }, {
                rootMargin: "50% 50% 50% 50%"
            });
            e.forEach(e => {
                i.observe(e)
            })
        }
    }();
var telefoneMask = function (e) {
        return 11 === e.replace(/\D/g, "").length ? "(00) 00000-0000" : "(00) 0000-00009"
    },
    swiper = (telefoneOptions = {
        onKeyPress: function (e, i, s, r) {
            s.mask(telefoneMask.apply({}, arguments), r)
        },
        clearIfNotMatch: !0
    }, $(".mask-telefone").mask(telefoneMask, telefoneOptions), $(".mask-cpf").mask("000.000.000-00"), $(".mask-data").mask("00/00/0000"), $(".mask-horario").mask("00:00:00"), $(".mask-cep").mask("00000-000"), $(".mask-porcentagem").mask("##0,00%", {
        reverse: !0
    }), new Swiper(".diferenciais-swiper", {
        slidesPerView: 2,
        navigation: {
            nextEl: ".diferenciais-swiper .swiper-button-next",
            prevEl: ".diferenciais-swiper .swiper-button-prev"
        },
        pagination: {
            el: ".diferenciais-swiper .swiper-pagination",
            clickable: !0
        },
        breakpoints: {
            1200: {
                slidesPerView: 6
            },
            992: {
                slidesPerView: 5
            },
            767: {
                slidesPerView: 3
            },
            576: {
                slidesPerView: 2
            }
        }
    })),
    swiper = new Swiper(".banner-vertical-swiper", {
        direction: "vertical",
        slidesPerView: 3,
        pagination: {
            el: ".banner-vertical-swiper .swiper-pagination",
            clickable: !0
        },
        spaceBetween: 30,
        autoplay: {
            delay: 400
        },
        speed: 1e3
    });
const progressCircle = document.querySelector(".autoplay-progress svg"),
    progressContent = document.querySelector(".autoplay-progress span");
swiper = new Swiper(".marcas-swiper", {
    slidesPerView: 2,
    navigation: {
        nextEl: ".marcas-swiper .swiper-button-next",
        prevEl: ".marcas-swiper .swiper-button-prev"
    },
    pagination: {
        el: ".marcas-swiper .swiper-pagination",
        clickable: !0
    },
    breakpoints: {
        1200: {
            slidesPerView: 6
        },
        992: {
            slidesPerView: 5
        },
        767: {
            slidesPerView: 3
        },
        576: {
            slidesPerView: 2
        }
    },
    autoplay: {
        delay: 5e3,
        disableOnInteraction: !1
    },
    on: {
        autoplayTimeLeft(e, i, s) {
            progressCircle.style.setProperty("--progress", 1 - s), progressContent.textContent = Math.ceil(i / 1e3) + "s"
        },
        slideChange: function () {
            var e = this.slides[this.activeIndex];
            console.log(e.classList[3]), mudarTexto(e.classList[3])
        }
    }
}), swiper = new Swiper(".numeros-swiper", {
    slidesPerView: 2,
    navigation: {
        nextEl: ".numeros-swiper .swiper-button-next",
        prevEl: ".numeros-swiper .swiper-button-prev"
    },
    pagination: {
        el: ".numeros-swiper .swiper-pagination",
        clickable: !0
    },
    breakpoints: {
        1200: {
            slidesPerView: 4
        },
        992: {
            slidesPerView: 3
        },
        800: {
            slidesPerView: 3
        },
        576: {
            slidesPerView: 2
        }
    }
});


// Seleciona o elemento select
const select = document.querySelector('select');

// Verifica se a largura da tela é menor que 767 pixels
if (window.innerWidth < 767) {
    // Cria um novo elemento option
    const newOption = document.createElement('option');
    // Define o valor e o texto do novo elemento option
    newOption.value = 'new-option';
    newOption.text = 'Selecione uma cidade';
    // Define o atributo selected no novo elemento option
    newOption.selected = true;
    // Adiciona o novo elemento option ao select
    select.appendChild(newOption);
}