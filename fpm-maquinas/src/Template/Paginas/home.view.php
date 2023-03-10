<main id="home" class="overflow-hidden">
    <section class="banner overflow-hidden position-relative">
        <div class="container-fluid g-0">
            <div class="ratio banner-ratio">
                <div class="banner-swiper">
                    <?php
                    $banners = [
                        asset('images/banners/banner1.jpg'),
                        asset('images/banners/banner1.jpg'),
                        asset('images/banners/banner1.jpg'),
                        asset('images/banners/banner1.jpg'),
                        asset('images/banners/banner1.jpg'),
                        asset('images/banners/banner1.jpg'),
                    ];
                    ?>

                    <div class="swiper-wrapper">

                        <?php foreach ($banners as $banner) : ?>
                            <div class="swiper-slide overflow-hidden">
                                <picture>
                                    <source media="(min-width: 767px)" srcset="<?= $banner ?>">
                                    <img class="object-fit-cover w-100 h-100" data-src="<?= $banner ?>" alt="Alt do banner" title="Nome do banner" width="600" height="900">
                                </picture>
                                <div class="banner-text container px-2 ps-md-3 ps-lg-4 z-index-1">

                                    <?php /* Permitir quebra de linha */ ?>
                                    <h2 class="text">O melhor equipamento <br> com a melhor tecnologia</h2>

                                    <?php /* Caso tenha link */ ?>
                                    <?php if (true) : ?>
                                        <a title="Saiba mais" href="#" class="btn btn-gradient d-flex align-items-center gap-0-50 w-max mt-1 mt-md-2">
                                            Saiba mais
                                            <svg width="1.25em" height="1.25em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="banner-arrows container position-absolute top-50 start-50 translate-middle">
                        <div class="swiper-pagination start-0 w-max"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="setores py-2 py-lg-4 position-relative">
        <div class="container">
            <div class="setores-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $setores = [
                        [
                            'image' => asset('images/vinculos/setor1.png'),
                            'title' => 'Setor Naval'
                        ],
                        [
                            'image' => asset('images/vinculos/setor2.png'),
                            'title' => 'Setor Industrial'
                        ],
                        [
                            'image' => asset('images/vinculos/setor3.png'),
                            'title' => 'Construção Civil'
                        ]
                    ];

                    foreach ($setores as $setor) :
                    ?>
                        <div class="swiper-slide">
                            <a href="#" title="<?= $setor['title'] ?>" class="text-center card">
                                <div class="ratio ratio-3x1">
                                    <img class="object-fit-contain" src="<?= $setor['image'] ?>" alt="">
                                </div>
                                <span class="fw-bold d-block text-light-dark mt-1 fs-5"><?= $setor['title'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination dark relative mt-1 mt-lg-2"></div>
            </div>
        </div>
        <svg class="position-absolute top-0 z-index-background pe-none start-0 d-none d-xl-block" width="544" height="543" viewBox="0 0 544 543" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.29353" y1="541.808" x2="542.779" y2="1.29222" stroke="#D9D9D9" stroke-width="2" />
        </svg>
        <svg class="position-absolute top-0 z-index-background pe-none end-0 d-none d-xl-block" width="544" height="543" viewBox="0 0 544 543" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.29353" y1="541.808" x2="542.779" y2="1.29222" stroke="#D9D9D9" stroke-width="2" />
        </svg>
    </section>

    <section class="produtos-destaque pb-2 pb-lg-4 position-relative">
        <div class="container">
            <div class="row gy-2">
                <div class="col-12">
                    <h2 class="h1 title fw-bold text-uppercase text-center">Produtos destaque</h2>
                </div>
                <div class="col-12 d-flex flex-column gap-2 gap-lg-3 wrapper">
                    <?php
                    $produtos = [
                        asset("images/vinculos/produto1.png"),
                        asset("images/vinculos/produto2.png"),
                        asset("images/vinculos/setor4.png"),
                    ];

                    foreach ($produtos as $produto) : ?>
                        <div class="col-12 card-wrapper">
                            <div class="card py-2 p-2 px-lg-4">
                                <div class="row gy-2 gy-lg-0">
                                    <div class="col-lg-5 col-xxl-6">
                                        <div class="image ratio ratio-6x9 m-auto">
                                            <img class="object-fit-contain" src="<?= $produto ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-xxl-6 d-flex flex-column gap-1 gap-md-2 justify-content-center">
                                        <h3 class="h4 text-primary fw-bold mb-0"><?= app()->faker->paragraph(1) ?></h3>
                                        <div class="editor-texto description">
                                            <p><?= app()->faker->paragraph(rand(1, 8)) ?></p>
                                            <p><?= app()->faker->paragraph(rand(1, 8)) ?></p>
                                        </div>
                                        <div class="button-wrapper d-flex flex-column flex-md-row align-items-center gap-0-50">
                                            <a href="#" class="btn btn-outline-primary d-flex align-items-center gap-0-50">
                                                <svg width="1.25em" height="1.25em" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.21239 7.31327L8.00177 12.1365M8.00177 12.1365L12.7876 7.31327M8.00177 12.1365V0M15 16H1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" />
                                                </svg>
                                                Baixar PDF
                                            </a>
                                            <a href="#" class="btn btn-primary d-flex align-items-center gap-0-50">
                                                <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.99994 2V8M7.99994 8H13.9999M7.99994 8V14M7.99994 8L1.99994 8" stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                                Detalhes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <svg class="position-absolute bottom-0 z-index-background pe-none start-0 d-none d-xl-block" width="544" height="543" viewBox="0 0 544 543" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.29353" y1="541.808" x2="542.779" y2="1.29222" stroke="#D9D9D9" stroke-width="2" />
        </svg>
        <svg class="position-absolute bottom-0 z-index-background pe-none end-0 d-none d-xl-block" width="544" height="543" viewBox="0 0 544 543" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.29353" y1="541.808" x2="542.779" y2="1.29222" stroke="#D9D9D9" stroke-width="2" />
        </svg>
    </section>

    <section class="blog pt-2 pt-lg-4 position-relative">
        <div class="container">
            <div class="row gy-2">
                <div class="col-12">
                    <h2 class="h1 mb-0 title title-light fw-bold text-uppercase text-center">Blog</h2>
                </div>
                <div class="col-12 position-relative">
                    <div class="blog-swiper overflow-hidden">
                        <div class="swiper-wrapper">
                            <?php foreach (range(0, 8) as $i) : ?>
                                <div class="swiper-slide">
                                    <?= element("blog/blog-card") ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev btn btn-outline-white rounded-pill p-0-50">
                        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2L4 8L10 14" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="swiper-button-next btn btn-outline-white rounded-pill p-0-50">
                        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 14L12 8L6 2" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <?php /* Footer sendo incluso aqui por conta do background do blog (Somente na home) */ ?>
        <?php include('src/Template/Layout/footer.view.php') ?>

    </section>

</main>