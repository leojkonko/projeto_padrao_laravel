<main id="produto" class="py-3 py-lg-4">
    <section class="corporativo">
        <div class="row">
            <div class="col-lg-3 col-12 d-flex justify-content-center ps-4 pe-2 buttons-accordion">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Corporativo
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="d-flex justify-content-start align-items-center">
                                <ul>
                                    <?php foreach(range(0,6) as $i) : ?>
                                        <li><a href="">item1</a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Componentes
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="d-flex justify-content-start align-items-center">
                                <ul class="">
                                    <?php foreach(range(0,6) as $i) : ?>
                                        <li><a href="">item1</a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>                 
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed disabled" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Escolar - Em breve
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12 d-flex justify-content-center">
                <div class="row">
                <?php foreach(range(0,8) as $i) : ?>
                    <div class="col-lg-4 col-6 conteudo">
                        <div class="d-flex justify-content-center">
                            <h2>Big</h2>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?= url('produto-detalhe') ?>">Ver mais 
                            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13L7 7L1 1" stroke="#FF3C01" stroke-width="1.5"/>
                            </svg>
                            </a>
                        </div>
                        <a href="<?= url('produto-detalhe') ?>">
                            <div class="d-flex justify-content-center">
                            <img src="<?= asset('images/banners/cadeira-pequena.svg') ?>" alt="">
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                    <div class="col-lg-12 pt-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <nav aria-label="...">
                                <ul class="pagination me-lg-3">
                                    <!--<li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>-->
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <!--<li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                    </li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><!--col-lg-9-->
        </div>
    </section>
</main>