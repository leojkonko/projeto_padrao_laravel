<main id="produto">
    <section class="produto-detalhe py-lg-4 py-2">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 ps-1 col-xxl-4 col-md-10 col-sm-12 d-flex justify-content-center">
                <div class="swiper produtos-detalhe-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img">
                                    <a href="/produtos">
                                        <div class="cor">
                                            <span>Cor Sólida</span>
                                        </div>
                                            <img src="<?= asset('/images/banners/card-detalhe.svg') ?>" alt="">
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
                    </div>                         
                </div>
                <div class="col-lg-6 col-xxl-5 col-md-12 col-sm-12 px-lg-4 py-4 py-sm-0 info">
                    <div class="d-flex justify-content-start titulo">
                        <h2>C1011</h2>
                    </div>
                    <div class="p p-text pt-4">
                        <p><span>Descrição:</span> Lorem ipsum dolor sit amet consectetur. Molestie fermentum fringilla sem ultrices. 
                            Eget viverra erat sapien ut mauris placerat lacinia arcu. Pulvinar turpis aliquet aliquet id elit feugiat.</p>
                    </div>
                    <div class="aplicabilidade p d-flex align-items-center pt-2">
                        <p>Aplicabilidade</p>
                        <div class="ms-2">
                        <img src="<?= asset('/images/icones/aplicabilidade.svg') ?>" class="ms-0-50 mb-1" width="40" alt="">
                        <img src="<?= asset('/images/icones/aplicabilidade.svg') ?>" class="ms-0-50 mb-1" width="40" alt="">
                        <img src="<?= asset('/images/icones/aplicabilidade.svg') ?>" class="ms-0-50 mb-1" width="40" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 py-sm-4  py-md-4 py-lg-4 py-xl-4 py-xxl-0 col-xxl-3 col-md-12 form-contato ps-1">
                    <div class="d-flex">
                        <h2>Formulário para contato</h2>
                    </div>
                    <div class="">
                        <form action="">
                            <input type="text" placeholder="Nome *" class="w-100 mt-1">
                            <input type="email" placeholder="Email *" class="w-100 mt-1">
                            <input type="number" placeholder="Número de Telefone*" class="w-100 mt-1 mask-telefone">
                            <textarea name="" id="" Placeholder="Mensagem" class="w-100 mt-1" cols="30" rows="10"></textarea>
                        </form>
                    </div>
                    <div class="g-recaptcha pt-1 d-block" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    
                    <div class="div-button">
                    <button class="btn btn-custom mt-1 ">
                        Enviar
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relacionados">
        <div class="container">
            <div class="row">
            <div class="col-12 d-flex justify-content-start titulo">
                <h2 class="ps-lg-4 ">Relacionados</h2>
            </div>
            <div class="swiper produtos-relacionados-swiper mt-2 col-11">
                <div class="swiper-wrapper">
                    <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide">
                            <div class="slide-img">
                                <div class=" cards-conteudo">
                                    <a href="/produto-detalhe">
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
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
                
                                     
            </div>
        </div>
    </section>
</main>