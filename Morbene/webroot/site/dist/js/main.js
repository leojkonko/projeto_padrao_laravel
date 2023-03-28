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
            const i = new IntersectionObserver((e, r) => {
                e.forEach(i => {
                    if (i.isIntersecting) {
                        let e = i.target;
                        e.src = e.dataset.src, i.target.addEventListener("load", function () {
                            let e = this.nextElementSibling;
                            e && e.classList.contains("loader") && e.remove()
                        }), r.unobserve(i.target)
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
        onKeyPress: function (e, i, r, s) {
            r.mask(telefoneMask.apply({}, arguments), s)
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
        }
    }),
    swiper = new Swiper(".numeros-swiper", {
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
            992: {
                slidesPerView: 4
            },
            767: {
                slidesPerView: 3
            },
            576: {
                slidesPerView: 2
            }
        }
    });

function mudarTexto(classeImg) {
    // Seleciona o elemento de texto
    var elementoTexto = document.getElementById("conteudo");
    var tituloTexto = document.getElementById("titulo");

    // Altera o texto dependendo da classe da imagem
    if (classeImg === "img_0") {
        //tituloTexto.innerHTML = "titulo 1"
        //
        elementoTexto.innerHTML = "Texto para a primeira imagem!";
    } else if (classeImg === "img_1") {
        tituloTexto.innerHTML = "titulo 2"
        elementoTexto.innerHTML = "Texto para a segunda imagem!";
    } else if (classeImg === "img_2") {
        tituloTexto.innerHTML = "titulo 3"
        elementoTexto.innerHTML = "Texto para a terceira imagem!";
    } else if (classeImg === "img_3") {
        tituloTexto.innerHTML = "titulo 4"
        elementoTexto.innerHTML = "Texto para a quarta imagem!";
    } else if (classeImg === "img_4") {
        tituloTexto.innerHTML = "titulo 5"
        elementoTexto.innerHTML = "Texto para a quinta imagem!";
    } else if (classeImg === "img_5") {
        tituloTexto.innerHTML = "titulo 6"
        elementoTexto.innerHTML = "Texto para a sexta imagem!";
    } else if (classeImg === "img_6") {
        tituloTexto.innerHTML = "titulo 7"
        elementoTexto.innerHTML = "Texto para a sétima imagem!";
    } else if (classeImg === "img_7") {
        tituloTexto.innerHTML = "titulo 8"
        elementoTexto.innerHTML = "Texto para a oitava imagem!";
    } else if (classeImg === "img_8") {
        tituloTexto.innerHTML = "titulo 9"
        elementoTexto.innerHTML = "Texto para a nona imagem!";
    } else if (classeImg === "img_9") {
        tituloTexto.innerHTML = "titulo 10"
        elementoTexto.innerHTML = "Texto para a décima imagem!";
    }
}