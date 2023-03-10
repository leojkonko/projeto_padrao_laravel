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
    <!--<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('images/favicons/favicon.ico') ?>">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon.ico') ?>">
    <!--<link rel="apple-touch-icon" sizes="57x57" href="<?= asset('images/favicons/favicon.ico') ?>">
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon-16x16.png') ?>">-->
    <link rel="manifest" href="<?= asset('images/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= asset('images/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

<!--<title><?= !empty($title) ? $title . " | Realplast" : "Realplast" ?></title>-->
<title>Realplast</title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>
    <?php /* Adicionar no head logo abaixo do bootstrap.css */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />
    

    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>

    <?php /* Fonte temporária */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php ob_start() ?>
    <header class="header py-lg-2 text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center bg-img">
                    <a href="<?= url('/') ?>"><img src="<?= asset('images/logos/logo.svg') ?>" class="ms-1" width="100%" alt=""></a>
                </div> 
                <div class="col-lg-5 col-md-1 col-1 d-flex align-items-center mt-1">
                    <ul class="d-flex menu">
                        <li>
                            <a class="active home" href="<?= url('/') ?>">Home</a>
                        </li>
                        <li>
                            <a class="sobre-nos" href="<?= url('empresa') ?>">Sobre nós</a>
                        </li>
                        <li type="button" class="d-flex drop" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            <a class="produto" href="">Produtos</a>
                            <svg class="text-custom2 seta ms-0-25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flecha w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </li>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <li><a class="dropdown-item" href="<?= url('produtos') ?>">Corporativo</a></li>
                            <li><a class="dropdown-item" href="<?= url('produtos') ?>">Componentes</a></li>
                            <li><a class="dropdown-item disabled" href="#">Escolar (em breve)</a></li>
                        </ul>
                        <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flecha w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>-->
                        <li class="contato-li">
                            <a class="contato" href="<?= url('contato') ?>">Contato</a>
                        </li>
                    </ul>
                </div> 
                <div class="col-lg-5 col-md-7 col-5 div-input d-flex justify-content-end align-items-center mt-1">
                        <input type="text" class="form-control mb-1" placeholder="Busque por produtos">
                        <img src="<?= asset('images/icones/lupa.svg') ?>" width="50" class="mb-1 button-pesquisa d-none" alt="" >
                        <img src="<?= asset('images/icones/lupa.svg') ?>" width="50" class="mb-1 button-offcanvas d-none" alt="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <button class="btn me-1 d-lg-none d-md-flex d-sm-flex d-xs-flex p-0 ms-1 button-menu mb-0-25" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="16" height="4" fill="white" />
                                    <rect x="4" y="12" width="16" height="4" fill="white" />
                                    <rect x="4" y="20" width="16" height="4" fill="white" />
                                </svg>
                            </button>
                </div> 
                <div class="d-none div-teste">
                        <img src="<?= asset('images/icones/lupa.svg') ?>" width="40" alt="">
                </div> 
            </div>
        </div>
        <!--offcanvas-->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span></span></button>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <ul class="menu-offcanvas">
                        <li>
                            <a href="<?= url('/') ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= url('empresa') ?>">Sobre nós</a>
                        </li>
                        <li>
                            <!--<div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Produtos
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                            <?php foreach(range(0,4) as $i) : ?>
                                                <li>
                                                    <a href="">
                                                        <button>
                                                            Corporativo
                                                        </button>
                                                    </a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>    
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <a href="<?= url('produtos') ?>">Produtos</a>
                        </li>
                        <li>
                            <a href="<?= url('contato') ?>">Contato</a>
                        </li>
                    </ul>
                    <div class="col-12 d-flex justify-content-center mt-4">
                        <img src="<?= asset('images/logos/logo.svg') ?>" class="mt-4" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--offcanvas-->
        <!--offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="div-input-offcanvas">
                        <div class="col-12 d-flex justify-content-center mt-4">
                            <h2>Pesquise seu produto desejado</h2>
                        </div>
                        <input type="text" class="form-control mb-1 mt-4" placeholder="Busque por produtos">
                        <div class="col-12 d-flex justify-content-center mt-2">
                        <button class="btn btn-custom text-white">Pesquisar</button>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-4">
                            <img src="<?= asset('images/logos/logo.svg') ?>" class="mt-4" alt="">
                        </div>
                    </div>
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
           <!-- <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-6 d-flex justify-content-start">
                                    <h2>Corporativo</h2>
                                </div>
                                <div class="col-lg-6 col-6 d-flex justify-content-end mt-lg-2 mt-sm-2 links">
                                    <a href="" class="p1">Home</a>
                                        <svg width="6" height="10" class="mt-0-50 mx-0-50" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#253E4F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="" class="p2">Produtos</a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>-->
        <?php endif; ?>

        <?php if ($pagina_atual === "empresa") : ?>
            <?= $header ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-6 d-flex justify-content-start">
                                    <h2>Sobre nós</h2>
                                </div>
                                <div class="col-lg-6 col-6 d-flex justify-content-end mt-lg-2 mt-sm-2 links">
                                    <a href="" class="p1">Home</a>
                                        <svg width="6" height="10" class="mt-0-50 mx-0-50" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#253E4F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="" class="p2">Sobre nós</a>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if ($pagina_atual === "produtos") : ?>
            <?= $header ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-6 d-flex justify-content-start">
                                    <h2>Corporativo</h2>
                                </div>
                                <div class="col-lg-6 col-6 d-flex justify-content-end mt-lg-2 mt-sm-2 links">
                                    <a href="" class="p1">Home</a>
                                        <svg width="6" height="10" class="mt-0-50 mx-0-50" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#253E4F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="" class="p2">Produtos</a>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if ($pagina_atual === "produto_detalhe") : ?>
            <?= $header ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-6 d-flex justify-content-start">
                                    <h2>Atuali</h2>
                                </div>
                                <div class="col-lg-6 col-6 d-flex justify-content-end mt-lg-2 mt-sm-2 links">
                                    <a href="" class="p1">Home</a>
                                        <svg width="6" height="10" class="mt-0-50 mx-0-50" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#253E4F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="" class="p2">Corporativo</a>
                                    <svg width="6" height="10" class="mt-0-50 mx-0-50" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#253E4F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>
                                    <a href="" class="p2">Atuali</a>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        <?php endif; ?>
        <?php endif; ?>

        <?php if ($pagina_atual === "contato") : ?>
            <?= $header ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-6 d-flex justify-content-start">
                                    <h2>Contato</h2>
                                </div>
                                <div class="col-lg-6 col-6 d-flex justify-content-end mt-lg-2 mt-sm-2 links">
                                    <a href="" class="p1">Home</a>
                                        <svg width="6" height="10" class="mt-0-50 mx-0-50" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1L5 5L1 9" stroke="#253E4F" stroke-width="1.3" stroke-miterlimit="10" stroke-linejoin="round"/>
                                        </svg>
                                    <a href="" class="p2">Contato</a>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        <?php endif; ?>
        <?php endif; ?>