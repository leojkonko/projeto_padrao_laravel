<main id="produto" class="pt-1">
    <!--<img class="riscos2" src="<?= asset('images/backgrounds/riscos2.png') ?>" alt="">-->
    <section class="produtos ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 p-0 bg-white d-flex align-items-center">
                        <!-- Swiper -->
                            <div class="swiper mySwiper-produto">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide d-flex justify-content-center align-items-center">   
                                        <div class="d-flex justify-content-center align-items-center imagem">
                                            <img src="<?= asset('images/vinculos/produto1.png') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide d-flex justify-content-center align-items-center">   
                                        <div class="d-flex justify-content-center align-items-center imagem">
                                            <img src="<?= asset('images/vinculos/produto1.png') ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide d-flex justify-content-center align-items-center">   
                                        <div class="d-flex justify-content-center align-items-center imagem">
                                           <img src="<?= asset('images/vinculos/produto1.png') ?>" alt="">
                                        </div>
                                    </div>
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
                    <div class="col-lg-7 py-lg-4 py-2 conteudo bg-cinza">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-column">
                                <h2 class="h2">
                                Contractor King Pulverizador Pneumático Airless
                                </h2>
                                <h6 class="h6">
                                CÓD.: KLM01
                                </h6>
                                <p class="p pt-2">Alta qualidade, alto volume, alta pressão. Os pulverizadores de ar pneumáticos King da Graco são as máquinas mais poderosas, 
                                    para revestimentos protetores. O sistema fornece os valores de saída do aplicador, taxas de pressão e capacidades de ...</p>
                                <a href="">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M5 0V5M5 5H10M5 5V10M5 5L0 5" stroke="#C81211" stroke-width="1.5"/>
                                    </svg>
                                    Mais informações
                                </a>
                                <p class="p pt-2">Aplicabilidade: Naval, industrial</p>
                                <div class="d-flex pt-2 div-buttons">
                                  <a href="#" class="btn btn-primary d-flex align-items-center gap-0-50 me-2">
                                        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99994 2V8M7.99994 8H13.9999M7.99994 8V14M7.99994 8L1.99994 8" stroke="currentColor" stroke-width="1.5" />
                                        </svg>
                                        Tenho interesse
                                    </a>
                                    <a href="#" class="btn btn-outline-primary d-flex align-items-center gap-0-50">
                                        <svg width="1.25em" height="1.25em" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.21239 7.31327L8.00177 12.1365M8.00177 12.1365L12.7876 7.31327M8.00177 12.1365V0M15 16H1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" />
                                        </svg>
                                        Baixar PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="relacionados">
        <div class="container p-0">
            <div class="row">
                <h2 class="titulo">PRODUTOS RELACIONADOS</h2>
                <div class="col-12 p-0">
                    <!-- Swiper -->
                         <div class="swiper mySwiper-relacionados">
                                <div class="swiper-wrapper p-1">
                                    <?php foreach(range(0,9) as $i) : ?>
                                        <div class="swiper-slide">   
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <img width="80%" src="<?= asset('images/vinculos/produto1.png') ?>" alt="">
                                                </div>
                                                <div class="flex-column">
                                                    <p class="p pt-1">Contractor King Pulverizador Pneumático Airless</p>
                                                    <button href="#" class="btn btn-outline-primary d-flex align-items-center gap-0-50">
                                                        <a href="">
                                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 0V5M5 5H10M5 5V10M5 5L0 5" stroke="#C81211" stroke-width="1.5"/>
                                                            </svg>
                                                            Detalhes
                                                        </a>
                                                    </button>
                                                </div>
                                        </div>
                                    <?php endforeach; ?>
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
            </div>
        </div>
    </section>
</main>