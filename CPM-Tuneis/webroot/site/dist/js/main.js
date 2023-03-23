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
    }), new Swiper(".construcao-swiper", {
        slidesPerView: 1,
        navigation: {
            nextEl: ".construcao-swiper .swiper-button-next",
            prevEl: ".construcao-swiper .swiper-button-prev"
        },
        scrollbar: {
            el: ".swiper-scrollbar"
        }
    })),
    swiper = new Swiper(".areas-swiper", {
        slidesPerView: 1,
        spaceBetween: 40,
        pagination: {
            el: ".areas-swiper .swiper-pagination",
            clickable: !0
        },
        breakpoints: {
            992: {
                slidesPerView: 3
            },
            767: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 2
            }
        }
    }),
    swiper = new Swiper(".diferenciais-swiper", {
        slidesPerView: 7,
        spaceBetween: 0,
        pagination: {
            el: ".diferenciais-swiper .swiper-pagination",
            clickable: !0
        }
    }),
    swiper = new Swiper(".diferenciais-swiper", {
        slidesPerView: 2,
        spaceBetween: 0,
        pagination: {
            el: ".diferenciais-swiper .swiper-pagination",
            clickable: !0
        },
        breakpoints: {
            992: {
                slidesPerView: 7
            },
            767: {
                slidesPerView: 4
            },
            576: {
                slidesPerView: 3
            }
        }
    }),
    swiper = new Swiper(".empresas-swiper", {
        slidesPerView: 2,
        spaceBetween: 0,
        pagination: {
            el: ".empresas-swiper .swiper-pagination",
            clickable: !0
        },
        scrollbar: {
            el: ".swiper-scrollbar"
        },
        breakpoints: {
            992: {
                slidesPerView: 6
            },
            767: {
                slidesPerView: 4
            },
            576: {
                slidesPerView: 3
            }
        }
    }),
    swiper = new Swiper(".consultoria-swiper", {
        slidesPerView: 1,
        navigation: {
            nextEl: ".consultoria-swiper .swiper-button-next",
            prevEl: ".consultoria-swiper .swiper-button-prev"
        },
        scrollbar: {
            el: ".consultoria-swiper .swiper-scrollbar"
        }
    }),
    swiper = new Swiper(".swiper-consultoria-diferenciais", {
        slidesPerView: 2,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-consultoria-diferenciais .swiper-pagination",
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
    }),
    swiper = new Swiper(".cont-swiper", {
        slidesPerView: 1,
        navigation: {
            nextEl: ".cont-swiper .swiper-button-next",
            prevEl: ".cont-swiper .swiper-button-prev"
        },
        scrollbar: {
            el: ".cont-swiper .swiper-scrollbar"
        }
    });

// Quando o modal for exibido
$('#exampleModal').on('show.bs.modal', function () {
    // Define o z-index do elemento com a classe "construcao" como 0
    $('.construcao').css('z-index', '0');
});

// Quando o modal for fechado
$('#exampleModal').on('hidden.bs.modal', function () {
    // Define o z-index do elemento com a classe "construcao" como 1
    $('.construcao').css('z-index', '1');
});
$('#exampleModal').on('show.bs.modal', function () {
    // Define o z-index do elemento com a classe "construcao" como 0
    $('#empresa').css('z-index', '0');
});

// Quando o modal for fechado
$('#exampleModal').on('hidden.bs.modal', function () {
    // Define o z-index do elemento com a classe "construcao" como 1
    $('#empresa').css('z-index', '99');
});

////////
// Quando o offcanvas for exibido
$('#offcanvasTop').on('shown.bs.offcanvas', function () {
    // Define a posição relativa e o z-index da tag body
    $('#empresa').css({
        //'position': 'relative',
        'z-index': '0'
    });
});

// Quando o offcanvas for fechado
$('#offcanvasTop').on('hidden.bs.offcanvas', function () {
    // Define a posição estática e o z-index da tag body
    $('#empresa').css({
        //'position': 'relative',
        'z-index': '1'
    });
});