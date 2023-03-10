<main id="produto" class="" style="background: #F0F0F0;overflow-x:hidden;">

<section class="catalogo-produtos my-4">
    <div class="container opa">
        <div class="row">
            <div class="col-12 d-flex justify-content-start align-items-center div-titulo">
                <h2>Conheça a linha completa de produtos em nosso <img
                        src="<?= asset('/images/banners/catalogo.svg') ?>" alt=""></h2>
            </div>
            <div class="col-12 d-flex justify-content-start div-buttons align-items-center">
                <button class="btn btn-black button1" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
                <button class="btn btn-black button2"><svg width="20px" class="ms-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </button>
             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">Fale Conosco!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body py-2">
                        <form action="">
                            <input type="text" placeholder="Nome *" class="w-100 mt-1">
                            <input type="email" placeholder="Email *" class="w-100 mt-1">
                            <input type="number" placeholder="Número *" class="w-100 mt-1">
                            <input type="text" placeholder="Endereço *" class="w-100 mt-1">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
                                <!-- Modal -->
            </div>
        </div>
    </div>
</section>
<section class="busca">
    <div class="container">
        <div class="row">     
            <div class="div-button2">
                <button class="btn btn-outline-black btn-busca" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="<?= asset('/images/icones/filtro.svg') ?>" alt=""> Filtre sua
                        Busca
                </button> 
            </div>
            <div class="col-12 d-flex alinhamento">
                <div class="div-input">
                    <input type="text" name="" id="" placeholder="Busque por código">
                    <img src="<?= asset('/images/icones/lupa-produtos.svg') ?>" alt="">
                </div>
                <div class="div-button">
                <button class="btn btn-outline-black btn-busca" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="<?= asset('/images/icones/filtro.svg') ?>" alt=""> Filtre sua
                        Busca
                </button> 
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cards">
    <div class="container">
        
    <div class="page active" id="page-1">
        <div class="row">
            <?php foreach(range(0,14) as $i) : ?>
                    <div class="col-2 cards-conteudo">
                        <a href="<?= url('produto-detalhe') ?>">
                                <div class="cor">
                                <span>Cor Sólida</span>
                            </div>
                            
                            <img src="<?= asset('images/banners/card1.svg') ?>" alt="">
                            
                            <div class="span bg-white">
                                    <span>A001</span>
                            </div>
                        </a> 
                </div>             
            <?php endforeach; ?>    
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
    </div>
</section>
<!-- Modal -->
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
                 <!--modal -->
                 <nav aria-label="Page navigation example">
</main>