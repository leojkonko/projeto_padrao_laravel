document.querySelectorAll('a[href^="#"]').forEach(e=>{e.addEventListener("click",function(e){if(e.preventDefault(),"#"!==this.getAttribute("href")){let e=document.querySelector(this.getAttribute("href"));e&&e.scrollIntoView({behavior:"smooth",block:"center",inline:"center"})}})}),function(){var e=document.querySelectorAll("img[data-src]");if(e){const i=new IntersectionObserver((e,r)=>{e.forEach(i=>{if(i.isIntersecting){let e=i.target;e.src=e.dataset.src,i.target.addEventListener("load",function(){let e=this.nextElementSibling;e&&e.classList.contains("loader")&&e.remove()}),r.unobserve(i.target)}})},{rootMargin:"50% 50% 50% 50%"});e.forEach(e=>{i.observe(e)})}}();var telefoneMask=function(e){return 11===e.replace(/\D/g,"").length?"(00) 00000-0000":"(00) 0000-00009"},swiper=(telefoneOptions={onKeyPress:function(e,i,r,s){r.mask(telefoneMask.apply({},arguments),s)},clearIfNotMatch:!0},$(".mask-telefone").mask(telefoneMask,telefoneOptions),$(".mask-cpf").mask("000.000.000-00"),$(".mask-data").mask("00/00/0000"),$(".mask-horario").mask("00:00:00"),$(".mask-cep").mask("00000-000"),$(".mask-porcentagem").mask("##0,00%",{reverse:!0}),new Swiper(".diferenciais-swiper",{slidesPerView:2,navigation:{nextEl:".diferenciais-swiper .swiper-button-next",prevEl:".diferenciais-swiper .swiper-button-prev"},pagination:{el:".diferenciais-swiper .swiper-pagination",clickable:!0},breakpoints:{1200:{slidesPerView:6},992:{slidesPerView:5},767:{slidesPerView:3},576:{slidesPerView:2}}})),swiper=new Swiper(".marcas-swiper",{slidesPerView:2,navigation:{nextEl:".marcas-swiper .swiper-button-next",prevEl:".marcas-swiper .swiper-button-prev"},pagination:{el:".marcas-swiper .swiper-pagination",clickable:!0},breakpoints:{1200:{slidesPerView:6},992:{slidesPerView:5},767:{slidesPerView:3},576:{slidesPerView:2}}}),swiper=new Swiper(".numeros-swiper",{slidesPerView:2,navigation:{nextEl:".numeros-swiper .swiper-button-next",prevEl:".numeros-swiper .swiper-button-prev"},pagination:{el:".numeros-swiper .swiper-pagination",clickable:!0},breakpoints:{992:{slidesPerView:4},767:{slidesPerView:3},576:{slidesPerView:2}}});