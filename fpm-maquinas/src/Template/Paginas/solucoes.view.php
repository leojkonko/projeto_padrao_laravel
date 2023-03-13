<main id="solucoes" class="">
    <!--<img class="riscos2" src="<?= asset('images/backgrounds/riscos2.png') ?>" alt="">-->
    <section class="empresa mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0 bg-white d-flex align-items-center">
                        <!-- Swiper -->
                            <div class="swiper mySwiper-produto">
                                <div class="swiper-wrapper">
                                <?php foreach(range(0, 7) as $i) : ?>
                                    <div class="swiper-slide  d-flex justify-content-center align-items-center">   
                                        <div class="d-flex justify-content-center align-items-center imagem">
                                            <img src="<?= asset('images/vinculos/produto1.png') ?>" alt="">
                                        </div>
                                    </div>
                                <?php endforeach ; ?>
                                </div>
                                <div class="swiper-button-next btn btn-outline-white rounded-pill p-0-50">
                                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 14L12 8L6 2" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </div>
                                <div class="swiper-button-prev btn btn-outline-white rounded-pill p-0-50">
                                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 2L4 8L10 14" stroke="currentColor" stroke-width="2" />
                                    </svg>
                                </div>
                            </div>
                            <!-- Swiper -->
                        </div>
                    <div class="col-lg-6 py-lg-4 py-2 conteudo bg-cinza">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-column">
                                <h2 class="h2">
                                Contractor King Pulverizador Pneumático Airless
                                </h2>
                                <p class="p pt-2">Alta qualidade, alto volume, alta pressão. Os pulverizadores de ar pneumáticos King da Graco são as máquinas mais poderosas, 
                                    para revestimentos protetores. O sistema fornece os valores de saída do aplicador, taxas de pressão e capacidades de ...</p>
                                <p class="p pt-2">Alta qualidade, alto volume, alta pressão. Os pulverizadores de ar pneumáticos King da Graco são as máquinas mais poderosas, 
                                    para revestimentos protetores. O sistema fornece os valores de saída do aplicador, taxas de pressão e capacidades de ...</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</main>