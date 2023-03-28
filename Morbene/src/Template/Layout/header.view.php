<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="150 words" />
    <meta name="keywords" content="your tags" />
    <meta name="author" content="Agência Ellite Digital">

    <?php /* ==== Favicons ==== */ ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= asset('images/favicons/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= asset('images/favicons/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= asset('images/favicons/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('images/favicons/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= asset('images/favicons/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= asset('images/favicons/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= asset('images/favicons/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= asset('images/favicons/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('images/favicons/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= asset('images/favicons/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= asset('images/favicons/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= asset('images/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= asset('images/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

    <title><?= !empty($title) ? $title . " | Projeto Padrão" : "Projeto Padrão" ?></title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>

    <?php /* Fonte temporária */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php ob_start() ?>
    <header class="header position-absolute w-100 py-lg-2 text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <img width="216px" src="<?= asset('images/logos/logo.png') ?>" alt="">
                        </div>
                        <div class="col-lg-9 d-flex justify-content-center align-items-center d-none d-lg-flex">
                            <ul class="d-flex ">
                                <li>
                                    <a href="" class="text-white h2">Sobre nós</a>
                                </li>
                                <li>
                                    <a href="" class="text-white h2">Regiões</a>
                                </li>
                                <li>
                                    <a href="" class="text-white h2">Marcas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9 col-6 d-flex justify-content-end d-flex d-lg-none align-items-center pe-2">
                            <button class="btn btn-danger text-blue" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                <svg class="mb-0-25" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="16" height="4" fill="white" />
                                    <rect x="4" y="12" width="16" height="4" fill="white" />
                                    <rect x="4" y="20" width="16" height="4" fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center justify-content-end pe-4">
                    <!--<button class="btn btn-outline-danger text-primary">Entre em contato</button>-->
                </div>
            </div>  
        </div>
        <!--offcanvas-->


<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
  <div class="m-auto">
  <img width="216px" src="<?= asset('images/logos/logo.png') ?>" alt="">
  </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
        <div class="d-flex justify-content-center">
            <ul class="me-2">
                <li>
                    <a href="" class="h2">Sobre nós</a>
                </li>
                <li>
                    <a href="" class="h2">Regiões</a>
                </li>
                <li>
                    <a href="" class="h2">Marcas</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--offcanvas-->
    </header>
    <?php
    $header = ob_get_contents();
    ob_end_clean();
    ?>

    <?php /* Remover essa primeira condicional */ ?>
        <?php if ($pagina_atual === "home") : ?>
            <?= $header ?>
            <?php endif; ?>
            <?php if ($pagina_atual === "contato") : ?>
            <div class="header-wrapper">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper py-lg-4 bg-primary">
                        <?php if (!empty($title)) : ?>
                            <h1 class="h2 text-center text-white lh-1 mb-1">
                                <?= $title ?>
                            </h1>
                        <?php endif; ?>
                        <nav class="breadcrumb justify-content-center">
                            <?php
                            $i = -1;
                            $breadcrumbsLength = count($breadcrumbs) - 1;
                            foreach ($breadcrumbs as $breadcrumb) :
                                $i++;
                            ?>
                                <?php if ($i !== $breadcrumbsLength) : ?>
                                    <a class="breadcrumb-item" href="<?= !empty($breadcrumb['url']) ? $breadcrumb['url'] : "#"  ?>">
                                        <span>
                                            <?= !empty($breadcrumb['title']) ? $breadcrumb['title'] : "Página"  ?>
                                        </span>
                                    </a>
                                <?php else : ?>
                                    <span class="breadcrumb-item active" aria-current="page">
                                        <span>
                                            <?= !empty($breadcrumb['title']) ? $breadcrumb['title'] : "Página"  ?>
                                        </span>
                                    </span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </nav>
                    </section>
                <?php endif; ?>
            </div>
        <?php endif; ?>