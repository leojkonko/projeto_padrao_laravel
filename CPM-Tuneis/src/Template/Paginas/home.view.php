<main id="home">
    <section class="banner ratio ratio-custom z-index-background">
        <picture>
            <source srcset="<?= asset('images/backgrounds/img_principal.png') ?>" media="(min-width: 992px)">
            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/img_principal.png') ?>" alt="">
        </picture>
    </section>
    <section class="construcao">
        <div class="row p-0">
            <div class="col-lg-4 img p-0">
                <div class="swiper construcao-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
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
                </div>
            </div>
            <div class="col-lg-8 p-0 areas">
                <div class="swiper areas-swiper position-relative">
                        <div class="swiper-wrapper my-lg-4 mx-lg-4">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide ">
                                    <img src="<?= asset('images/logos/areas.png') ?>" alt="">
                                    <h2 class="h2">
                                        Consultoria
                                    </h2>
                                    <p class="p">
                                        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                        e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
</main>