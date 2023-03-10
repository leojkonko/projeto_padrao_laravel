<main id="blog" class="py-3 py-lg-4">
    <div class="container">
        <div class="d-flex justify-content-md-end justify-content-center mb-lg-3 mb-1" >
            <button class="search-button btn btn-outline-secondary d-flex align-items-center justify-content-center p-0-75 w-max h-max text-secondary gap-1"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.89445 9.89445L15 15M11.4228 6.21142C11.4228 9.0896 9.0896 11.4228 6.21142 11.4228C3.33323 11.4228 1 9.0896 1 6.21142C1 3.33323 3.33323 1 6.21142 1C9.0896 1 11.4228 3.33323 11.4228 6.21142Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"></path>
                </svg>
                Filtre sua busca
            </button>
        </div>
        <div class="row g-1 g-xxl-2">
            <?php foreach(range(0, 7) as $i) : ?>
                <div class="col-6 col-lg-4 col-xl-3 my-md-2 my-lg-1 my-4 card-blog">
                         <?= element('blog/blog-card') ?>
                </div>
            <?php endforeach ; ?>
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!--<li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <!--<li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas-->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title" id="offcanvasExampleLabel">Categorias</h2>
    <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
  </div>
  <div class="offcanvas-body">
    <div>
      <h6>Selecione uma categoria:</h6>
    </div>
     <div class="mt-3">
            <?php foreach(range(0, 3) as $i) : ?>
                <div class="d-flex justify-content-center align-items-center my-1">
                    <button class="btn btn-outline-light">
                        Categoria
                    </button>
                </div>
            <?php endforeach ; ?>
        </div>
    </div>
  </div>
</div>
                <!--offcanvas-->
</main>