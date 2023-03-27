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
            const s = new IntersectionObserver((e, i) => {
                e.forEach(s => {
                    if (s.isIntersecting) {
                        let e = s.target;
                        e.src = e.dataset.src, s.target.addEventListener("load", function () {
                            let e = this.nextElementSibling;
                            e && e.classList.contains("loader") && e.remove()
                        }), i.unobserve(s.target)
                    }
                })
            }, {
                rootMargin: "50% 50% 50% 50%"
            });
            e.forEach(e => {
                s.observe(e)
            })
        }
    }();
var telefoneMask = function (e) {
        return 11 === e.replace(/\D/g, "").length ? "(00) 00000-0000" : "(00) 0000-00009"
    },
    swiper = (telefoneOptions = {
        onKeyPress: function (e, s, i, r) {
            i.mask(telefoneMask.apply({}, arguments), r)
        },
        clearIfNotMatch: !0
    }, $(".mask-telefone").mask(telefoneMask, telefoneOptions), $(".mask-cpf").mask("000.000.000-00"), $(".mask-data").mask("00/00/0000"), $(".mask-horario").mask("00:00:00"), $(".mask-cep").mask("00000-000"), $(".mask-porcentagem").mask("##0,00%", {
        reverse: !0
    }), new Swiper(".banner-swiper", {
        slidesPerView: 1,
        navigation: {
            nextEl: ".banner-swiper .swiper-button-next",
            prevEl: ".banner-swiper .swiper-button-prev"
        },
        pagination: {
            el: ".banner-swiper .swiper-pagination",
            clickable: !0
        }
    })),
    swiper = new Swiper(".solucoes-img-swiper", {
        slidesPerView: 2,
        navigation: {
            nextEl: ".solucoes-img-swiper .swiper-button-next",
            prevEl: ".solucoes-img-swiper .swiper-button-prev"
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
    swiper = new Swiper(".solucoes-swiper", {
        slidesPerView: 2,
        navigation: {
            nextEl: ".solucoes-swiper .swiper-button-next",
            prevEl: ".solucoes-swiper .swiper-button-prev"
        },
        pagination: {
            el: ".solucoes-swiper .swiper-pagination",
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
/*
const minhaDiv = document.getElementById("biologicos");
const minhaImagem = document.getElementById("img-bg");

minhaDiv.addEventListener("mouseover", function () {
    minhaImagem.src = "/images/backgrounds/residuos-hover.png";
});*/


const btn = document.querySelector(".b-hover");
const btn2 = document.querySelector(".b-hover2");
const btn3 = document.querySelector(".b-hover3");
const biologicos = document.querySelector(".biologicos");
const biologicos2 = document.querySelector(".biologicos2");
const biologicos3 = document.querySelector(".biologicos3");
const h2 = document.querySelector(".h2-h");
const h22 = document.querySelector(".h2-h2");
const h23 = document.querySelector(".h2-h3");

btn.addEventListener("mouseover", function () {
    biologicos.classList.add("hoverr");
    h2.classList.add("hoverr-h2");
});

btn.addEventListener("mouseout", function () {
    biologicos.classList.remove("hoverr");
    h2.classList.remove("hoverr-h2");
});

h2.addEventListener("mouseover", function () {
    biologicos.classList.add("hoverr");
    h2.classList.add("hoverr-h2");
    btn.classList.add("hoverr-button");
});

h2.addEventListener("mouseout", function () {
    biologicos.classList.remove("hoverr");
    h2.classList.remove("hoverr-h2");
    btn.classList.remove("hoverr-button");
});



//b2
btn2.addEventListener("mouseover", function () {
    biologicos2.classList.add("hoverr");
    h22.classList.add("hoverr-h2");
});

btn2.addEventListener("mouseout", function () {
    biologicos2.classList.remove("hoverr");
    h22.classList.remove("hoverr-h2");
});

h22.addEventListener("mouseover", function () {
    biologicos2.classList.add("hoverr");
    h22.classList.add("hoverr-h2");
    btn2.classList.add("hoverr-button");
});

h22.addEventListener("mouseout", function () {
    biologicos2.classList.remove("hoverr");
    h22.classList.remove("hoverr-h2");
    btn2.classList.remove("hoverr-button");
});


//b3
btn3.addEventListener("mouseover", function () {
    biologicos3.classList.add("hoverr");
    h23.classList.add("hoverr-h2");
});

btn3.addEventListener("mouseout", function () {
    biologicos3.classList.remove("hoverr");
    h23.classList.remove("hoverr-h2");
});

h23.addEventListener("mouseover", function () {
    biologicos3.classList.add("hoverr");
    h23.classList.add("hoverr-h2");
    btn3.classList.add("hoverr-button");
});

h23.addEventListener("mouseout", function () {
    biologicos3.classList.remove("hoverr");
    h23.classList.remove("hoverr-h2");
    btn3.classList.remove("hoverr-button");
});