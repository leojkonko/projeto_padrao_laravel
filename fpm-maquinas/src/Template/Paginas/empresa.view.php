<main id="empresa" class="pt-1">
    <!--<img class="riscos2" src="<?= asset('images/backgrounds/riscos2.png') ?>" alt="">-->
    <section class="empresa ">
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
    <section class="relacionados pb-4">
        <div class="container">
            <div class="row">
                <h2 class="titulo">NOSSO PROPÓSITO</h2>
                <div class="col-lg-4">
                   <div class="d-flex justify-content-center align-items-center bg-white">
                        <div class="flex-column text-center p-2">
                            <img width="80px" src="<?= asset('images/icones/missao.png') ?>" alt="">
                            <h2 class="h2 mt-2">Missão</h2>
                            <p class="p">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ab eaque earum, 
                                consequuntur impedit expedita dolor velit distinctio dignissimos nostrum perspiciatis totam corporis, doloribus laboriosam consectetur aut asperiores similique sequi!
                            </p>
                        </div>
                   </div>
                </div>
                <div class="col-lg-4 py-lg-0 py-4">
                    <div class="d-flex justify-content-center align-items-center bg-white">
                            <div class="flex-column text-center p-2">
                            <img width="80px" src="<?= asset('images/icones/visao.png') ?>" alt="">
                                <h2 class="h2 mt-2">Visão</h2>
                                <p class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ab eaque earum, 
                                    consequuntur impedit expedita dolor velit distinctio dignissimos nostrum perspiciatis totam corporis, doloribus laboriosam consectetur aut asperiores similique sequi!
                                </p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center bg-white">
                            <div class="flex-column text-center p-2">
                            <img width="80px" src="<?= asset('images/icones/valor.png') ?>" alt="">
                                <h2 class="h2 mt-2">Valores</h2>
                                <p class="p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ab eaque earum, 
                                    consequuntur impedit expedita dolor velit distinctio dignissimos nostrum perspiciatis totam corporis, doloribus laboriosam consectetur aut asperiores similique sequi!
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>