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
<!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php /* Fonte temporária */ ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Manrope:wght@400;700&family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php ob_start() ?>
    <header class="header position-absolute w-100 text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6 d-flex justify-content-center">
                    <a href="<?= url('/') ?>" class="bg-white p-2">
                        <img width="216px" class="link link-logo" src="<?= asset('images/logos/logo.png') ?>" alt="">
                    </a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center d-none d-lg-flex">
                    <ul class="d-flex mt-0 mb-0">
                        <li>
                            <a href="<?=url('/')?>#empresa" class="text-white p">Sobre nós</a>
                        </li>
                        <li>
                            <a href="<?=url('/')?>#cidades" class="text-white p">Área de atuação</a>
                        </li>
                        <li>
                            <a href="<?=url('/')?>#contato" class="text-white p">Contato</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-6 d-flex justify-content-end d-flex d-lg-none align-items-center pe-2">
                    <button class="btn btn-danger text-blue" id="offcanvasTop-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                        <svg class="mb-0-25" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="16" height="4" fill="white" />
                            <rect x="4" y="12" width="16" height="4" fill="white" />
                            <rect x="4" y="20" width="16" height="4" fill="white" />
                        </svg>
                    </button>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center d-none d-lg-flex ">
                    <button class="btn btn-outline-light text-white p">
                        <svg class="me-0-50 mb-0-50" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="1.09375" width="10" height="10" rx="5" stroke="white" stroke-width="1.2"/>
                            <path d="M17 19.9063C17 15.488 13.4183 11.9062 9 11.9062C4.58172 11.9062 1 15.488 1 19.9063" stroke="white" stroke-width="1.2"/>
                        </svg>
                            Área do cliente
                        <svg class="ms-0-50 mb-0-25" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 5L9 13L17 5" stroke="white" stroke-width="1.3"/>
                        </svg>
                    </button>       
                </div>
            </div>  
        </div>
        <!--offcanvas-->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header flex-column">
                    <button type="button" class="btn-close text-reset link" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="m-auto d-flex justify-content-center w-100 mt-1">
                        <a href="<?= url('/') ?>" class="bg-white p-2 text-center">
                            <img width="216px" class="link" src="<?= asset('images/logos/logo.png') ?>" alt="">
                        </a>
                    </div>
                </div>
            <div class="offcanvas-body">
                <div class="d-flex justify-content-center">
                    <ul class="me-2 text-center">
                        <li>
                            <a href="#empresa" class="text-white p">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#cidades" class="text-white p">Área de atuação</a>
                        </li>
                        <li>
                            <a href="#contato" class="text-white p">Contato</a>
                        </li>
                        <li>
                            <a href="#contato" class="link">
                                <button class="btn btn-outline-dark text-dark p">
                                    <svg class="me-0-50 mb-0-50" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4" y="1.09375" width="10" height="10" rx="5" stroke="black" stroke-width="1.2"/>
                                        <path d="M17 19.9063C17 15.488 13.4183 11.9062 9 11.9062C4.58172 11.9062 1 15.488 1 19.9063" stroke="black" stroke-width="1.2"/>
                                    </svg>
                                        Área do cliente
                                    <svg class="ms-0-50 mb-0-25" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5L9 13L17 5" stroke="black" stroke-width="1.3"/>
                                    </svg>
                                </button> 
                            </a>
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
            <?php if ($pagina_atual === "politica") : ?>
                <?= $header ?>
            <div class="header-wrapper">
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper py-lg-4 bg-cinza">
                        <?php if (!empty($title)) : ?>
                            <h1 class="h2 text-center text-white lh-1 mb-2">
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
                                    <a class="breadcrumb-item mb-4 mb-lg-0" href="<?= !empty($breadcrumb['url']) ? $breadcrumb['url'] : "#"  ?>">
                                        <span>
                                            <?= !empty($breadcrumb['title']) ? $breadcrumb['title'] : "Página"  ?>
                                        </span>
                                    </a>
                                <?php else : ?>
                                    <span class="breadcrumb-item mb-4 mb-lg-0 active" aria-current="page">
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