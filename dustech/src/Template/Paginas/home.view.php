

<main>
    <section class="ratio ratio-6x9 ratio-lg-21x9 z-index-background">
        <picture>
            <source srcset="<?= asset('images/backgrounds/img_principal.svg') ?>" media="(min-width: 992px)">
            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/img_principal.svg') ?>" alt="">
        </picture>
    </section>

<section class="produtos-destaques py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 texto">
                    <div>
                        <h2>Produtos Destaques</h2>
                    </div>
                    <div>
                        <button class="btn btn-custom"><a href="<?= url('produtos') ?>">Veja Todos</a></button>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="swiper produtos-destaque-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img">
                                    <a href="<?= url('produtos') ?>">
                                        <div class="cor">
                                            <span>Cor Sólida</span>
                                        </div>
                                        
                                            <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                                        
                                        <div class="span bg-white">
                                            <span>A001</span>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination swiper-pagination1 d-xs-flex d-sm-none d-md-none d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-treinamento">
        <div class="row coluna py-2 py-lg-4">
            <div class=" col-md-6 col-sm-6 col-xs-12 col-12">
                <img class="pistola" src="<?= asset('images/banners/pistola.png') ?>" width="90%" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-12 text-primary text-consultoria">
                <div class="d-flex justify-content-start div-h2">
                    <h2>Treinamento <br><span class="">e Consultoria</span></h2>
                </div>
                <img src="<?= asset('images/banners/in-company-sect3.svg') ?>" class="mt-5" alt="">
                    <div class="d-none w-100 img-mobile">
                        <img src="<?= asset('images/banners/in-company-sect3.svg') ?>" class="mt-5" alt="">
                    </div>
                <div class="d-flex justify-content-start div-button">
                    <button class="btn btn-custom"><a href="<?= url('treinamento') ?>">Saiba Mais</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="catalogo py-lg-4">
        <div class=" container" >
                <div class="row" >
                    <div class="col-md-6 d-flex align-items-center div-catalogo">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <h2>Conheça a linha completa <br> de produtos em nosso <span>catálogo</span>
                                    <img src="<?= asset('images/banners/catalogo.svg') ?>" alt="">
                                </h2>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center justify-content-lg-start">
                                <button class="btn btn-black button1"  data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
                                <button class="btn btn-black button2">
                                    <svg width="20px" class="ms-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>
                                </button>

                                    <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">Fale Conosco!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body py-2">
                        <form action="">
                            <input type="text" placeholder="Nome *" class="w-100 mt-1">
                            <input type="email" placeholder="Email *" class="w-100 mt-1">
                            <input type="number" placeholder="Número*" class="w-100 mt-1 mask-telefone">
                            <input type="text" placeholder="Endereço *" class="w-100 mt-1">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom">
                            Enviar
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                                <!-- Modal -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
 
 


<!--
    <section class="diferenciais py-2 py-lg-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start text-diferenciais">Diferenciais</div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 icones d-flex justify-content-center">
                    <div class="row conteudo">
                        <div class="col-md-12 d-flex justify-content-center icone">
                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                        </div>
                        <div class="col-md-12 d-flex justify-content-center titulo">
                            <h2>Estoque pronta entrega</h2>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <p>Produtos da linha premium a pronta entrega</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
                            -->




<section class="banner-teste diferenciais">
    <!-- Swiper -->
<div class="">       
              <div class="swiper mySwiper-banner-teste col-10">
              <div class="col-md-12 d-flex justify-content-start text-diferenciais">Diferenciais</div>
                 <div class="swiper-wrapper">

                        <?php foreach(range(0,9) as $i) : ?>
                                    <div class="swiper-slide">
                                        <div class="d-flex justify-content-center icone">
                                            <img src="<?= asset('images/icones/icon1.svg') ?>" alt="">
                                        </div>
                                        <div class="conteudo">
                                            <div class="d-flex justify-content-center titulo">
                                                <h2>Estoque pronta entrega</h2>
                                            </div>
                                            <div class="d-flex justify-content-center p">
                                                <p>Produtos da linha premium a pronta entrega</p>
                                            </div>
                                        </div>
                                    </div>
                        <?php endforeach; ?>
                     </div>   
                  <div class="swiper-button-next button-next"></div>
                <div class="swiper-button-prev button-prev"></div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
</section>


<section class="banner">
    <div class="container">
    <!-- Swiper -->
        <div class="swiper mySwiper-banner">
            <div class="swiper-wrapper text-dark">
            <?php foreach(range(0,9) as $i) : ?>               
                <div class="swiper-slide d-flex justify-content-center">
                    <img src="<?= asset('images/logos/logo-banner.svg') ?>" alt="">
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
  </div>
</section>
</main>


</body>
</html>