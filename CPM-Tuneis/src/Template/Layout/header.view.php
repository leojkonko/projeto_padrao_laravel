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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php ob_start() ?>
    <header class="header text-white">
        <img class="riscos d-none d-lg-flex" src="<?= asset('images/backgrounds/riscos-header.png') ?>" alt="">
        <div class="container d-flex align-items-center h-100 p-0">
            <div class="row w-100 p-0 m-0">
                <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center bg-img">
                    <a href="<?= url('/') ?>"><img src="<?= asset('images/logos/logo.png') ?>" class="ms-1 logo" width="100%" alt=""></a>
                </div> 
                <div class="col-lg-5 col-md-1 col-1 d-flex align-items-center mt-1">
                    <ul class="d-flex menu">
                        <li>
                            <a href="<?= url('empresa') ?>">Sobre nós</a>
                        </li>
                        <li>
                            <a href="<?= url('solucoes') ?>">Soluções</a>
                        </li>
                        <li>
                            <a href="<?= url('produtos') ?>">Parceiros</a>
                        </li>
                        <li class="contato">
                            <a class="contato" href="<?= url('contato') ?>">Contato</a>
                        </li>
                    </ul>
                </div> 
                <div class="col-lg-5 col-md-7 col-5 div-button d-flex justify-content-end align-items-center">
                        <button class="button p d-none d-lg-flex">
                            <svg class="ms-1" width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.44444 8.63636C6.44444 8.63636 6.44444 15.9091 12 15.9091C17.5556 15.9091 17.5556 8.63636 17.5556 8.63636M4.59259 8.63636L19.4074 8.63637M6.07407 6.81818C6.07407 6.81818 6.07407 1 12 1C17.9259 1 17.9259 6.81818 17.9259 6.81818M2 25C2 25 2 18.4545 12 18.4545C22 18.4545 22 25 22 25" stroke="white" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <img src="<?= asset('images/icones/especialista.png') ?>" width="50" class="mb-1 button-offcanvas d-none" alt="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
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
        <?php else : ?>
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