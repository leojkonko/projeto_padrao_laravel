<a href="<?= url('/blog-detalhe') ?>" class="ratio ratio-4x3 d-block">
    <div class="blog-card d-flex flex-column overflow-hidden rounded-3" style="background-image: url('<?= asset("images/backgrounds/footer-bg.jpg") ?>')">
        <div class="d-flex justify-content-end h-100">
            <div class="col-3 col-xxl-2 h-100">
                <div class="date h-100 p-1 d-flex flex-column justify-content-center gap-0-50 gap-xxl-1 align-items-center">
                    <span class="fs-5 z-index-1">10</span>
                    <span class="fs-5 z-index-1">02</span>
                    <span class="fs-5 z-index-1">23</span>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-9 col-xxl-10">
                <div class="description p-1">
                    <div class="editor-texto editor-texto-light z-index-1 position-relative">
                        <p><?= app()->faker->paragraph(rand(1, 3)) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3 col-xxl-2 d-flex align-items-center justify-content-center">
                <span class="btn btn-light p-0-50 d-flex rounded-pill w-max">
                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0V8M8 8H16M8 8V16M8 8L0 8" stroke="#18346E" stroke-width="1.5" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</a>