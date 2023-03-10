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
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon.ico') ?>">
    <!--<link rel="apple-touch-icon" sizes="57x57" href="<?= asset('images/favicons/apple-icon-57x57.png') ?>">
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

    <!--<title><?= !empty($title) ? $title . " | Projeto Padrão" : "Projeto Padrão" ?></title>-->
    <title>Dustech</title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>

    <?php /* Swiper.js
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />
    */ ?>

    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200;300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<!--
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <?php ob_start() ?>
<header class="header <?= $pagina_atual !== 'home' ? 'background-internas' : '' ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-3 logo">
                <a href="/" class=""><img src="<?= asset('/images/logos/logo.svg') ?>" width="70%"
                        alt=""></a>
            </div>
            <div class="col-lg-7 col-xl-7 col-3 d-flex justify-content-center align-items-center menu-div">
                <ul class="d-flex align-items-center menu d-lg-flex d-md-none d-sm-none d-xs-none ">
                    <li><a href="<?= url('empresa') ?>">Empresa</a></li>
                    <li class="dropdown">
                        <button class="dropdown-button gap-0-50">Produtos
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flecha w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                        </button>
                        <ul class="dropdown-content">
                            <li><a href="<?= url('produtos') ?>">Cores sólidas</a></li>
                            <li><a href="<?= url('produtos') ?>">Cores metálicas</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= url('treinamento') ?>">Treinamento</a></li>
                    <li><a href="<?= url('blog') ?>">Blog</a></li>
                    <li><a href="<?= url('contato') ?>">Contato</a></li>    
                </ul>
                <button class="btn me-1 d-lg-none d-md-flex d-sm-flex d-xs-flex p-0" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="4" width="16" height="4" fill="white" />
                        <rect x="4" y="12" width="16" height="4" fill="white" />
                        <rect x="4" y="20" width="16" height="4" fill="white" />
                    </svg>
                </button>
                <div class="align-items-center col-lg-2 justify-content-end div-menulateral">
                     <button class="btn p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                        <img src="<?= asset('/images/icones/lupa.svg') ?>" width="100%" alt="">
                </button>
                </div>
            </div>
            <div class="d-none d-lg-flex col-2 justify-content-end div-menulateral2">
                     <button class="btn p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                        <img src="<?= asset('/images/icones/lupa.svg') ?>" width="100%" alt="">
                </button>
            </div>
        </div><!-- row -->
    </div><!-- container -->

</header>
<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span>X</span></button>
    </div>
    <div class="offcanvas-body">
        <div class="">
            <ul>
                <li><a href="<?= url('empresa') ?>">Empresa</a></li>
                <li><a href="<?= url('produtos') ?>">Produtos</a>
                    <div class="mt-1">
                        <button class="btn btn-light text-dark cor-solida"><a href="<?= url('produtos') ?>" class="text-dark">Cor sólida</a></button>
                        <button class="btn  btn-outline-light "><a href="<?= url('produtos') ?>">Cor metálica</a></button>
                    </div>
                </li>
                <li><a href="<?= url('treinamento') ?>">Treinamento</a></li>
                <li><a href="<?= url('blog') ?>">Blog</a></li>
                <li><a href="<?= url('contato') ?>">Contato</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">

        <button type="button" class="btn-close text-reset text-light" data-bs-dismiss="offcanvas"
            aria-label="Close">X</button>

        <div class="offcanvas-body">
            <ul class="lista justify-content-center d-flex" id="menu">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center img-cards">
                        <img src="<?= asset('/images/banners/cards-menu.svg') ?>" width="80%" alt="">
                    </div>
                    <div class="col-lg-12 busca">
                        <h2 class="busca ">Busca</h2>
                        <p>Busque produtos por tipo e/ou código</p>
                        <input type="text" class="form-control text-light" placeholder="Digite o código">
                    </div>
                    <div class="col-lg-12 mt-1 buttons">
                        <button class="btn btn-light text-dark button-cor b1"><a href="<?= url('produtos') ?>" class="solida">Cor sólida</a></button>
                        <button class="btn  btn-outline-light button-cor b2"><a href="<?= url('produtos') ?>" class="metalica">Cor metálica</a></button>
                        <button class="btn btn-custom"><img
                                src="<?= asset('/images/icones/lupa-pequena.svg') ?>" width="16px"
                                alt=""></button>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center logo">
                        <img src="<?= asset('/images/logos/logo.svg') ?>" width="45%" alt="">
                    </div>
                    
                </div>

            </ul>
        </div>
    </div>
</div>
    <?php
    $header = ob_get_contents();
    ob_end_clean();
    ?>
    <?php if ($pagina_atual === "home") : ?>
    <?= $header ?>
    <?php endif; ?>
<?php if ($pagina_atual === "produtos") : ?>
    <?= $header ?>
    <?php endif; ?>
    <?php if ($pagina_atual === "produtos") : ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2>Produtos</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-1 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Produtos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>         
        <?php endif; ?>

    <?php //echo ($pagina_atual); ?>
    <?php if ($pagina_atual === "produto_detalhe") : ?>
            <?= $header ?>
            <div class="header-wrapper">
                <?php //if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2></h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-0-50 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Produtos</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-0-50 d-flex" width="5px" alt="">
                                         <a href="" class="p2">C1011</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php //endif; ?>
            </div>         
        <?php endif; ?>

 <?php if ($pagina_atual === "contato") : ?>
    <?= $header ?>
    <?php endif; ?>
    <?php if ($pagina_atual === "contato") : ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2>Contato</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-1 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Contato</a>
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
    <?php endif; ?>
    <?php if ($pagina_atual === "blog") : ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2>Blog</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-1 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Blog</a>
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
    <?php endif; ?>
    <?php if ($pagina_atual === "empresa") : ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2>Empresa</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-1 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Empresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>         
        <?php endif; ?>
        
 <?php if ($pagina_atual === "treinamentos") : ?>
    <?= $header ?>
    <?php endif; ?>
    <?php if ($pagina_atual === "treinamentos") : ?>
            <div class="header-wrapper pb-3">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2>Treinamento</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-1 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Treinamento</a>
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
    <?php endif; ?>
    <?php if ($pagina_atual === "blog_detalhe") : ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class=""> 
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="col-6 d-flex justify-content-start titulo">                              
                                        <h2>Blog Detalhe</h2>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end links">
                                        <a href="" class="p1">Home</a>
                                        <img src="<?= asset('/images/icones/seta-lateral.svg') ?>" class="mx-0-50 mb-1 d-flex" width="5px" alt="">
                                         <a href="" class="p2">Blog Detalhe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>         
        <?php endif; ?>


