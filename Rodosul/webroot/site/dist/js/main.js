document.querySelectorAll('a[href^="#"]').forEach(e=>{e.addEventListener("click",function(e){if(e.preventDefault(),"#"!==this.getAttribute("href")){let e=document.querySelector(this.getAttribute("href"));e&&e.scrollIntoView({behavior:"smooth",block:"center",inline:"center"})}})}),function(){var e=document.querySelectorAll("img[data-src]");if(e){const s=new IntersectionObserver((e,i)=>{e.forEach(s=>{if(s.isIntersecting){let e=s.target;e.src=e.dataset.src,s.target.addEventListener("load",function(){let e=this.nextElementSibling;e&&e.classList.contains("loader")&&e.remove()}),i.unobserve(s.target)}})},{rootMargin:"50% 50% 50% 50%"});e.forEach(e=>{s.observe(e)})}}();var telefoneMask=function(e){return 11===e.replace(/\D/g,"").length?"(00) 00000-0000":"(00) 0000-00009"},swiper=(telefoneOptions={onKeyPress:function(e,s,i,r){i.mask(telefoneMask.apply({},arguments),r)},clearIfNotMatch:!0},$(".mask-telefone").mask(telefoneMask,telefoneOptions),$(".mask-cpf").mask("000.000.000-00"),$(".mask-data").mask("00/00/0000"),$(".mask-horario").mask("00:00:00"),$(".mask-cep").mask("00000-000"),$(".mask-porcentagem").mask("##0,00%",{reverse:!0}),new Swiper(".banner-swiper",{slidesPerView:1,navigation:{nextEl:".banner-swiper .swiper-button-next",prevEl:".banner-swiper .swiper-button-prev"},pagination:{el:".banner-swiper .swiper-pagination",clickable:!0}})),swiper=new Swiper(".solucoes-img-swiper",{slidesPerView:2,navigation:{nextEl:".solucoes-img-swiper .swiper-button-next",prevEl:".solucoes-img-swiper .swiper-button-prev"},breakpoints:{992:{slidesPerView:4},767:{slidesPerView:3},576:{slidesPerView:2}}}),swiper=new Swiper(".solucoes-swiper",{slidesPerView:2,navigation:{nextEl:".solucoes-swiper .swiper-button-next",prevEl:".solucoes-swiper .swiper-button-prev"},pagination:{el:".solucoes-swiper .swiper-pagination",clickable:!0},breakpoints:{992:{slidesPerView:4},767:{slidesPerView:3},576:{slidesPerView:2}}});