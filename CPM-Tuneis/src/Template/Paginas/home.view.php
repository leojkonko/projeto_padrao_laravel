
<main id="home">
    <section class="banner ratio ratio-custom z-index-background">
        <picture>
            <source srcset="<?= asset('images/backgrounds/img_principal.png') ?>" media="(min-width: 992px)">
            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/img_principal.png') ?>" alt="">
        </picture>
    </section>
    <section class="construcao pb-lg-0 pb-1">
        <div class="row p-0">
            <div class="col-lg-4 img p-0">
                <div class="swiper construcao-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100 cont">
                                    <div class="slide-img position-relative">
                                        <!--<img class="object-fit-cover w-100 h-100 " src="<?= asset('images/backgrounds/construcao.png') ?>" alt="">-->
                                        <div class="z-index-2 position-relative flex-column d-flex conteudo">
                                            <h2 class="text-center h2-light">Quero construir</h2>
                                            <button class="btn btn-outline-light m-auto mt-1">Saiba mais</button>
                                        </div>
                                        <p class="p m-auto text-center mb-1">Conheça <span>todas</span> as soluções
                                            <svg class="ms-0-50" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L5 5L1 9" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-scrollbar" id="my-scrollbar"></div> 
                </div>
            </div>
            <div class="col-lg-8 areas d-flex px-2">
                <div class="container d-flex align-items-center">
                    <div class="swiper areas-swiper position-relative">
                            <div class="swiper-wrapper">
                                <?php foreach(range(0,9) as $i) : ?>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-1x1">
                                            <img width="30px" src="<?= asset('images/logos/areas.png') ?>" alt="">
                                        </div>
                                        <h2 class="h4 mt-1">
                                            Consultoria
                                        </h2>
                                        <p class="p">
                                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nossa-historia">
        <div class="row p-0">
            <div class="col-lg-12 col-12 p-0 position-relative">
                <div class="d-flex align-items-center">
                    <div class="flex-column conteudo text-center text-lg-start">
                        <h2 class="h2-blue">Nossa história</h2>
                        <p class="p-light">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, 
                            quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                            Lorem Ipsum sobreviveu não só a cinco séculos, [...]</p>
                        <button class="btn btn-outline-light">História completa</button>
                    </div>
                            <img class="eng d-none d-lg-flex object-fit-cover" width="100%" src="<?= asset('images/backgrounds/historia2.png') ?>" alt="">
                    
                </div>
            </div>
            <div class="col-12 d-flex d-lg-none coluna2">
                <img class="eng2 d-flex d-lg-none ms-auto" width="80%" src="<?= asset('images/backgrounds/historia2.png') ?>" alt="">
            </div>                 
        </div>
    </section>

    <section class="diferenciais p-0 m-0">
        <div class="row p-0">
            <div class="col-lg-10 p-0 col-12 m-auto">
                <div class="swiper diferenciais-swiper position-relative ">
                        <div class="swiper-wrapper my-lg-4 my-4">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide text-center mt-2">
                                    <div class="ratio ratio-1x1 text-center">
                                         <img src="<?= asset('images/logos/dif.png') ?>" alt="">
                                    </div>
                                    
                                    <h6 class="h6 mt-1 m-auto">
                                        Assistência técnica
                                    </h6>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <div class="swiper-pagination"></div>
                </div>               
            </div>
        </div>
    </section>
    <section class="empresas-parceiras">
        <div class="row p-0">
            <div class="col-lg-10 p-0 col-12 m-auto">
                <div class="swiper empresas-swiper position-relative my-lg-4 my-4">
                <h2 class="text-center w-100 mb-3">Empresas parceiras</h2>
                        <div class="swiper-wrapper mb-4">
                            <?php foreach(range(0,30) as $i) : ?>
                                <div class="swiper-slide text-center mt-2">
                                     <div class="ratio ratio-1x1 text-center">
                                        <a href="" target="_blank">
                                            <img src="<?= asset('images/logos/empresas.png') ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <!--<div class="swiper-pagination"></div>-->
                    <div class="swiper-scrollbar"></div>
                </div>               
            </div>
        </div>
    </section>
</main>