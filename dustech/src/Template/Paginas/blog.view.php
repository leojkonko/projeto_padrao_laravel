<main id="blog" class="">
<section class="busca">
    <div class="container">
        <div class="row">     
            <!--<div class="div-button2">
                <button class="btn btn-outline-black btn-busca" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="<?= asset('/images/icones/filtro.svg') ?>" alt=""> Filtre sua
                        Busca
                </button> 
            </div>
            <div class="col-12 d-flex alinhamento py-2">
                <div class="div-input">
                    <input type="text" name="" id="" placeholder="Busque por título">
                    <img src="<?= asset('/images/icones/lupa-produtos.svg') ?>" alt="">
                </div>
                <div class="div-button">
                <button class="btn btn-outline-black btn-busca" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="<?= asset('/images/icones/filtro.svg') ?>" alt=""> Filtre sua
                        Busca
                </button> 
                </div>-->


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtros:</h5>
    <div class="d-flex">
    <button type="button" class="btn-close text-reset button-cor" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
    </div>
  </div>
  <div class="offcanvas-body">
    <div class="col-12 d-flex justify-content-center py-1">
        <button class="btn btn-custom btn-categorias">Categorias</button>
    </div>
    <div class="col-12 d-flex justify-content-center py-1">
        <button class="btn btn-custom btn-categorias">Categorias</button>
    </div>
    <div class="col-12 d-flex justify-content-center py-1">
        <button class="btn btn-custom btn-categorias">Categorias</button>
    </div>
    <div class="col-12 d-flex justify-content-center py-1">
        <button class="btn btn-custom btn-categorias">Categorias</button>
    </div>
  </div>
</div>



        <!--</div>-->
            <?php foreach(range(0, 7) as $i) : ?>
                <div class="col-6 col-lg-4 col-xl-3 py-2">
                    <?= element('blog/blog-card') ?>
                </div>
            <?php endforeach ; ?>
        </div>
    </div>
    <div class="row py-2">
            <div class="col-12 d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" id="previous">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#" data-page="1">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-page="4">4</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-page="5">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" id="next">Próximo</a></li>
                </ul>
            </div>
        </div>
            </section>
</main>