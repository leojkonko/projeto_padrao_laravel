<!DOCTYPE html>
<html lang="pt-BR" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="150 words" />
    <meta name="keywords" content="your tags" />
    <meta name="author" content="Agência Ellite Digital">

    <?php /* ==== Favicons ==== */ ?>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon.ico') ?>">
    <!--
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
-->
<!--
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
-->
    <link rel="manifest" href="<?= asset('images/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= asset('images/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

    <!--<title><?= !empty($title) ? $title . " | Projeto Padrão" : "Projeto Padrão" ?></title>-->
    <title>CPM Túneis</title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                            <a href="<?= url('/parceiros') ?>">Parceiros</a>
                        </li>
                        <li class="contato">
                            <a class="contato" href="<?= url('contato') ?>">Contato</a>
                        </li>
                    </ul>
                </div> 
                <div class="col-lg-5 col-md-7 col-5 div-button d-flex justify-content-end align-items-center">
                        <button class="button p d-none d-lg-flex" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg class="ms-1" width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.44444 8.63636C6.44444 8.63636 6.44444 15.9091 12 15.9091C17.5556 15.9091 17.5556 8.63636 17.5556 8.63636M4.59259 8.63636L19.4074 8.63637M6.07407 6.81818C6.07407 6.81818 6.07407 1 12 1C17.9259 1 17.9259 6.81818 17.9259 6.81818M2 25C2 25 2 18.4545 12 18.4545C22 18.4545 22 25 22 25" stroke="white" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <img src="<?= asset('images/icones/especialista.png') ?>" width="50" class="mb-1 button-offcanvas d-none" alt="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close"><span>X</span></button>
            </div>
            <div class="offcanvas-body">
                <div class="row">
                    <div class="text-center w-100">
                        <img width="30%" src="<?= asset('images/logos/logo-footer.png') ?>" alt="">
                   </div>
                    <ul class="menu-offcanvas mt-4">
                        <li>
                            <a href="<?= url('/empresa') ?>">Sobre nós</a>
                        </li>
                        <li>
                            <a href="<?= url('/solucoes') ?>">Soluções</a>
                        </li>
                        <li>
                            <a href="<?= url('/parceiros') ?>">Parceiros</a>
                        </li>
                        <li>
                            <a href="<?= url('/contato') ?>">Contato</a>
                        </li>
                    </ul>
                    <div class="col-12 d-flex justify-content-center mt-4">
                        <img src="<?= asset('images/logos/logo.svg') ?>" class="mt-4" alt="">
                    </div>
                </div>
            </div>
        </div>        
        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="form">
                            <div class="flex-column p-1 div-form-modal text-lg-start text-center">
                                <h2>Fale com um especialista</h2>
                                <form action="" class="flex-column mt-2">
                                    <input type="text" placeholder="Nome *" class="form-control">
                                    <input type="email" placeholder="Email" class="form-control">
                                    <input type="text" placeholder="Telefone *" class="mask-telefone form-control">
                                    <select name="" id="" class="form-select">
                                        <option value="" selected>Solução de interesse</option>
                                        <option value="">opção 1</option>
                                        <option value="">opção 2</option>
                                        <option value="">opção 3</option>
                                    </select>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensagem *" class="form-control"></textarea>
                                    <div class="d-flex">
                                        <input type="checkbox" class="mb-0-50">
                                        <p class="mt-1 ms-1 text-lg-start text-center">Li e aceito os termos da <span>Política de privacidade</span> da CMP</p>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer text-lg-start text-center p-2">
                        <button class="button-azul">Enviar formulário
                            <svg class=" ms-0-50" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 16.0005L18 12.0005M18 12.0005L14 8.00049M18 12.0005L6 12.0005" stroke="white"/>
                            </svg>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        <!--modal-->
    </header>
    <?php
    $header = ob_get_contents();
    ob_end_clean();
    ?>
    <?php if ($pagina_atual === "home") : ?>
                <?= $header ?>
    <?php endif; ?>

    <?php /* Remover essa primeira condicional */ ?>
        <?php if ($pagina_atual === "solucoes") : ?>
            <div class="header-wrapper">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper py-lg-4 bg-primary">
                            <h1 class="h2-blue text-center text-white lh-1 mb-1">
                                Nossas soluções
                            </h1>
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
                                <svg class="mt-0-50 mx-0-25" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
                                </svg>
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
        <?php if ($pagina_atual === "parceiros") : ?>
            <div class="header-wrapper">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper py-lg-4 bg-primary">
                            <h1 class="h2-blue text-center text-white lh-1 mb-1">
                                Nossos parceiros
                            </h1>
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
                                <svg class="mt-0-50 mx-0-25" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
                                </svg>
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
        <?php if ($pagina_atual === "empresa") : ?>
            <div class="header-wrapper">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper py-lg-4 bg-primary">
                            <h1 class="h2-blue text-center text-white lh-1 mb-1">
                                Sobre nós
                            </h1>
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
                                <svg class="mt-0-50 mx-0-25" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
                                </svg>
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
        <?php if ($pagina_atual === "contato") : ?>
            <div class="header-wrapper">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper py-lg-4 bg-primary">
                            <h1 class="h2-blue text-center text-white lh-1 mb-1">
                                Contato
                            </h1>
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
                                <svg class="mt-0-50 mx-0-25" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
                                </svg>
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