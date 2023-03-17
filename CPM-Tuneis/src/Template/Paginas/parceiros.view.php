<main id="parceiros">
    <section class="parceiros">
        <div class="container">
            <div class="row">
                <?php foreach(range(0,20) as $i) : ?>
                    <div class="col-xxl-2 col-lg-3 py-4 px-4 col-md-4 col-6 col-xs-12 col-custom">
                        <div class="d-flex justify-content-center">
                            <a href="" target="_blank">
                                <div class="ratio ratio-1x1 text-center">
                                    <img width="140%" src="<?= asset('images/logos/empresas.png') ?>" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>