<main id="treinamento">
    <section class="treinamento py-lg-4 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 d-flex justify-content-center banner">
                    <!-- SWIPER 1 POR 1 -->
                    <div class="swiper mySwiper-empresa ratio ratio-1x1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                            <img src="<?= asset('images/banners/card-detalhe.svg') ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= asset('images/banners/card-detalhe.svg') ?>" alt="">
                            </div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                        </div>
                        <div class="swiper-pagination h-auto"></div>
                    </div>
                </div>
                <!-- END SWIPER 1 POR 1 -->
 
                  
                </div>
                <div class="col-12 justify-content-center py-lg-4 py-2">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center titulo">
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </div>
                        <div class="col-lg-6 col-md-10 col-12 p py-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nostrum velit nemo ea, ut, porro, 
                                ducimus cupiditate adipisci at nam assumenda vel! Accusamus earum deserunt, necessitatibus ullam enim 
                                cum quas!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nostrum velit nemo ea, ut, porro, 
                                ducimus cupiditate adipisci at nam assumenda vel! Accusamus earum deserunt, necessitatibus ullam enim 
                                cum quas!</p>
                                <img src="<?= asset('images/banners/pistola.png') ?>" class="bg" width="80%" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nostrum velit nemo ea, ut, porro, 
                                ducimus cupiditate adipisci at nam assumenda vel! Accusamus earum deserunt, necessitatibus ullam enim 
                                cum quas!</p>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <button class="btn btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                               Tenho interesse!
                            </button>                  
                        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fale conosco!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <form action="">
            <input type="text" placeholder="Nome *" class="w-100 mt-1">
            <input type="email" placeholder="Email *" class="w-100 mt-1">
            <input type="number" placeholder="Número *" class="w-100 mt-1 mask-telefone">
            <textarea name="" id="" Placeholder="Mensagem *" class="w-100 mt-1" cols="30" rows="10"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>-->
        <button type="button" class="btn btn-custom">
            Enviar
        </button>
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
</main>