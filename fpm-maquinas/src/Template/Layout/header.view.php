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

    <title><?= !empty($title) ? $title . " | FPM Máquinas" : "FPM Máquinas" ?></title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php ob_start() ?>
    <header class="w-100 header text-white <?= $pagina_atual === 'home' ? 'position-absolute start-0 top-0' : 'position-relative interno' ?>">

        <?php /* Input search no mobile */ ?>
        <form class="input-mobile w-100 h-100 position-absolute start-0 top-0 bg-white">
            <input type="search" class="w-100 h-100 form-control" placeholder="Busque por produtos...">
            <button type="submit" class="search d-flex align-items-center justify-content-center p-0-50 w-max h-max text-secondary">
                <svg width="1.4em" height="1.4em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.71786 7.71786L9.35893 9.35893L11 11M8.70037 5.3502C8.70037 7.20046 7.20046 8.70037 5.3502 8.70037C3.49993 8.70037 2 7.20046 2 5.3502C2 3.49993 3.49993 2 5.3502 2C7.20046 2 8.70037 3.49993 8.70037 5.3502Z" stroke="currentColor" stroke-miterlimit="10" />
                </svg>
            </button>
            <button id="closeSearch" type="button" class="d-flex align-items-center justify-content-center p-0-50 w-max h-max text-secondary">
                <svg width="1.4em" height="1.4em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </form>

        <div class="d-flex align-items-center justify-content-between">
            <div class="col-5 col-sm-4 col-lg-3">
                <div class="bg-white px-5 py-1 py-sm-2 py-lg-3 d-flex align-items-center justify-content-center">
                    <a href="<?= url('/') ?>" class="logo d-block">
                        <img class="w-100 h-100" src="<?= asset("images/logos/logo_red.svg") ?>" alt="Logo FPM Máquinas">
                    </a>
                </div>
            </div>
            <div class="col-auto ms-auto d-flex d-lg-none menu-mobile gap-0-50 pe-1">
                <button id="showSearch" type="submit" title="Pesquisar" class="search d-flex align-items-center justify-content-center p-0-75 w-max h-max text-secondary">
                    <svg width="1.4em" height="1.4em" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.71786 7.71786L9.35893 9.35893L11 11M8.70037 5.3502C8.70037 7.20046 7.20046 8.70037 5.3502 8.70037C3.49993 8.70037 2 7.20046 2 5.3502C2 3.49993 3.49993 2 5.3502 2C7.20046 2 8.70037 3.49993 8.70037 5.3502Z" stroke="currentColor" stroke-miterlimit="10" />
                    </svg>
                </button>
                <button class="header-offcanvas-toggle text-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeaderMenu" aria-controls="offcanvasHeaderMenu" aria-label="Abrir menu">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.4em" width="1.4em" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <div class="col-lg-8 col-xxl-7">
                <div class="header-offcanvas offcanvas offcanvas-start d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-end" tabindex="-1" id="offcanvasHeaderMenu" aria-labelledby="offcanvasHeaderMenuLabel">
                    <div class="offcanvas-header bg-white d-flex d-lg-none align-items-start">
                        <?php /* Manter esse elemento, serve para dar altura ao offcanvas-header */ ?>
                        <span aria-hidden="true" tabindex="-1" class="d-flex d-lg-none logo pe-none user-select-none opacity-0">
                            <img class="w-100 h-100 object-fit-contain" src="<?= asset("images/logos/logo_red.svg") ?>" alt="Logo FPM Máquinas">
                        </span>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Fechar menu"></button>
                    </div>
                    <nav class="header-offcanvas-body offcanvas-body p-1 pb-2 p-lg-0 h-max">

                        <ul class="menu mb-0 p-0 list-unstyled d-flex gap-0-50 gap-lg-0 flex-column flex-lg-row align-items-lg-center justify-content-evenly">
                            <li class="mb-1 d-lg-none">
                                <span class="fw-bold fs-5">Acesso rápido</span>
                            </li>
                            <li>
                                <a href="<?= url('empresa') ?>" class="link active" title="Sobre">Sobre</a>
                            </li>

                            <li>
                                <a href="<?= url('/produtos') ?>" class="link" title="Sobre">Produtos</a>
                            </li>

                            <li class="d-none d-lg-block">
                                <div class="dropdown">
                                    <button class="link dropdown-toggle" type="button" id="dropdownHeader" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        Produtos
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownHeader">
                                        <li class="">
                                            <a class="dropdown-item category px-0-50 py-0-25" href="<?= url('/') ?>">Setor Naval</a>
                                        </li>

                                        <?php /* Com subcategoria */ ?>
                                        <li class="dropdown dropend">
                                            <button class="dropdown-toggle submenu-toggle dropdown-item category px-0-50 py-0-25" href="#" id="dropdownMultilevel" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Setor Moveleiro</button>
                                            <div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdownMultilevel">
                                                <div class="ratio ratio-4x1">
                                                    <img class="object-fit-cover" src="<?= asset('images/banners/banner1.jpg') ?>" alt="">
                                                </div>
                                                <ul class="list mb-0 p-1 list-unstyled">
                                                    <?php foreach (range(0, 3) as $i) : ?>
                                                        <li>
                                                            <a class="dropdown-item" href="#" title="Contractor King Pulverizador Pneumático Airless">Contractor King Pulverizador Pneumático Airless</a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php /* Fim subcategoria */ ?>

                                        <li class="">
                                            <a class="dropdown-item category px-0-50 py-0-25" href="#">Construção Civil</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="" class="link" title="Serviços">Serviços</a>
                            </li>
                            <li>
                                <a href="<?= url('/blog') ?>" class="link" title="Blog">Blog</a>
                            </li>
                            <li>
                                <a href="<?= url('/contato') ?>" class="link" title="Contato">Contato</a>
                            </li>
                            <li class="col-lg-4 search d-none d-lg-block">
                                <form action="" class="d-flex gap-0-50">
                                    <div class="input-wrapper w-100">
                                        <input type="search" class="form-control px-0" placeholder="Busque por produtos">
                                    </div>
                                    <button type="submit" title="Pesquisar" class="search-button d-flex align-items-center justify-content-center p-0-75 w-max h-max text-secondary">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.89445 9.89445L15 15M11.4228 6.21142C11.4228 9.0896 9.0896 11.4228 6.21142 11.4228C3.33323 11.4228 1 9.0896 1 6.21142C1 3.33323 3.33323 1 6.21142 1C9.0896 1 11.4228 3.33323 11.4228 6.21142Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" />
                                        </svg>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?php
    $header = ob_get_contents();
    ob_end_clean();
    ?>

    <?php if ($pagina_atual === "home") : ?>
        <?= $header ?>
    <?php endif; ?>
    <?php if ($pagina_atual === "produtos") : ?>
        <?= $header ?>
        <div class="header-wrapper">
            <?php if (!empty($breadcrumbs)) : ?>
                <section class="breadcrumb-wrapper py-lg-4 py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="">Home</a>
                                        <svg width="6" height="10" class=" mx-0-25" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#8F8F8F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="">Produtos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if ($pagina_atual === "blog") : ?>
        <?= $header ?>
        <div class="header-wrapper">
            <?php if (!empty($breadcrumbs)) : ?>
                <section class="breadcrumb-wrapper py-lg-4 py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="">Home</a>
                                        <svg width="6" height="10" class=" mx-0-25" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#8F8F8F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="">Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if ($pagina_atual === "blog_detalhe") : ?>
        <?= $header ?>
        <div class="header-wrapper">
            <?php if (!empty($breadcrumbs)) : ?>
                <section class="breadcrumb-wrapper py-lg-4 py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="">Home</a>
                                        <svg width="6" height="10" class=" mx-0-25" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#8F8F8F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="">Blog</a>
                                        <svg width="6" height="10" class=" mx-0-25" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#8F8F8F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="">Blog detalhe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if ($pagina_atual === "empresa") : ?>
        <?= $header ?>
        <div class="header-wrapper">
            <?php if (!empty($breadcrumbs)) : ?>
                <section class="breadcrumb-wrapper py-lg-4 py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="">Home</a>
                                        <svg width="6" height="10" class=" mx-0-25" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#8F8F8F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="">Sobre nós</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if ($pagina_atual === "contato") : ?>
        <?= $header ?>
        <div class="header-wrapper">
            <?php if (!empty($breadcrumbs)) : ?>
                <section class="breadcrumb-wrapper py-lg-4 py-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="">Home</a>
                                        <svg width="6" height="10" class=" mx-0-25" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#8F8F8F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="">Contato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    <?php endif; ?>