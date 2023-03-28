<main id="home">
    <section class="banner position-relative">
        <div class="row">
            <div class="col-lg-7 col-12 p-0">
                <div class="ratio ratio-16x9 text-center d-none d-lg-flex z-index-background">
                        <!--<img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">-->
                        <div class="d-flex align-items-center conteudo">
                            <h2 class="h2 text-white text-start pt-4 mt-1">Serviço de distribuição para grandes marcas</h2>
                        </div>
                </div>
                <div class="ratio ratio-6x9 text-center d-flex d-lg-none">
                        <!--<img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">-->
                        <div class="d-flex align-items-center conteudo">
                            <h2 class="h2 text-white text-center pt-4 mt-1">Serviço de distribuição para grandes marcas</h2>
                        </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 p-0 text-center pt-2">
                <button class="btn btn-outline-danger text-primary">Entre em contato</button>
                <div class="marcas-banner z-index-background w-100 h-100">
                </div>
            </div>
        </div>
        <img class="eng position-absolute" src="<?= asset('images/banners/eng.png') ?>" alt="">
    </section>
    <section class="saiba-mais bg-cinza my-2">
        <div class="row">
            <div class="col-lg-9 p-0 d-flex justify-content-center align-items-center flex-column conteudo-texto">
                <h2 class="h2 text-primary w-100">Saiba mais sobre a <span class="h2 text-danger">Morbene</span></h2>
                <p class="p pt-2">
                A Morbene iniciou seus serviços de distribuição em maio de 1983, na cidade de Novo Hamburgo/RS, trabalhando com exclusividade com a Rayovac. Após algum tempo, 
                outras grandes marcas como Bic, Ferrero, Nivea, Perfetti e Fini somaram-se ao quadro, <span>que hoje conta com 6.900 clientes ativos, nos mais diversos ramos de atividade.</span>
                </p>
            </div>
            <div class="col-lg-3 p-0">
                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos.png') ?>" alt="">
            </div>
            <div class="col-lg-3 p-0 bg-cinza">
                <div class="ratio ratio-1x1">
                    <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos1.png') ?>" alt="">
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="ratio ratio-1x1">
                    <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="ratio ratio-1x1">
                    <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                </div>
            </div>
            <div class="col-lg-3 p-0">
                <div class="mais-fotos">
                    <div class="ratio ratio-1x1">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="numeros bg-cinza py-lg-4">
        <div class="row">
            <div class="col-lg-9 flex-column conteudo-texto p-0 mt-lg-3 text-center text-lg-start">
                <h2 class="h2 text-primary">Nossos <span class="h2 text-danger">Números</span></h2>
                <p class="p pt-3 pb-2">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, 
                    quando uma misturou os caracteres de um texto para criar um espécime de livro.</p>
                    <div class="dados d-none d-lg-flex">
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">6895</h2>
                            <h2 class="p-dados pt-0-50">Clientes ativos</h2>
                        </div>
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">7045</h2>
                            <h2 class="p-dados pt-0-50">Pedidos entregues ao mês</h2>
                        </div>
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">R$ 2 bilhões</h2>
                            <h2 class="p-dados pt-0-50">Movimentados ao ano</h2>
                        </div>
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">21</h2>
                            <h2 class="p-dados pt-0-50">Cidades</h2>
                        </div>
                    </div>
                    <div class="swiper numeros-swiper d-flex d-lg-none">
                        <div class="swiper-wrapper mb-4">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide d-flex justify-content-center dados">
                                    <div class="d-flex item align-items-center bg-light flex-column">
                                        <h2 class="h2 text-primary w-100 pt-0-50">21</h2>
                                        <h2 class="p-dados pt-0-50">Cidades</h2>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                                </div>
                            <div class="swiper-pagination pagination-style"></div> 
                        </div>

                    <button class="btn btn-outline-danger text-primary mt-3">Entre em contato</button>
            </div>
        </div>
    </section>
    <section class="diferenciais py-4">
        <div class="container">
        <h2 class="h2 text-white w-100 text-center mt-2">Diferenciais</h2>
            <div class="swiper diferenciais-swiper">
                    <div class="swiper-wrapper my-4">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="ratio ratio-1x1">
                                    <img class="" src="<?= asset('images/icones/diferenciais.png') ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <div class="swiper-pagination"></div> 
            </div>
        </div>
    </section>
    <section class="marcas py-4">
    <h2 class="h2 text-primary w-100 text-center"><span class="h2 text-danger">Marcas</span> que confiam</h2>
        <div class="container position-relative">
            <div class="swiper marcas-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide d-flex justify-content-center">
                                <div class="ratio ratio-1x1">
                                    <img class="" src="<?= asset('images/icones/nivea.png') ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <div class="swiper-button-prev"></div> 
                <div class="swiper-button-next"></div> 
            </div>                  
        </div>
        
    </section>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
<section class="contato py-4">
    <div class="container">
        <div class="row">
            <h2 class="w-100 text-center h2 text-light mb-4">Entre em contato</h2>
            <div class="col-12 bg-white p-1">
                <form action="">
                    <div class="d-flex">
                        <input type="text" class="form-select m-1" placeholder="Nome">
                        <input type="number" class="form-select m-1 mask-telefone" placeholder="Telefone">
                        <input type="email" class="form-select m-1" placeholder="E-mail">
                    </div>
                    <textarea class="form-select m-1" name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                    <div class="d-flex my-2 m-1 align-items-center">
                    <label class="checkbox-round mt-1">
                        <input type="checkbox">
                        <span class="checkmark mt-0-25"></span>
                        <p class="p ms-1">Li e aceito a <span>Política de privacidade</span> da Morbene distribuidora</p>
                    </label>
                        
                        <button class="btn-outline-danger bg-light text-primary ms-auto">Entre em contato</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</main>