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
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Montserrat:wght@400;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">    
</head>

<body>

    <?php ob_start() ?>
    <header class="header py-0-50 text-white">
        <div class="row px-1 py-1">
            <div class="col-lg-4 col-6">
                <div class="d-flex justify-content-start align-items-center">
                    <a href="<?= url('/') ?>">
                        <img width="80%" src="<?= asset('images/logos/logo.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center d-none d-lg-flex">
                
                    <ul class="d-flex">
                        <li>
                            <a class="empresa" href="<?= url('empresa') ?>">Sobre a empresa</a>
                        </li>
                        <li type="button" class="d-flex drop" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            <a class="produto solucoess" href="" >Soluções</a>
                            <svg class="mt-0-50 ms-0-25" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 5L8 11L14 5" stroke="white" stroke-width="3"/>
                            </svg>
                        </li>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <li><a class="dropdown-item" href="<?= url('solucoes') ?>">Resíduos Biológicos</a></li>
                            <li><a class="dropdown-item" href="<?= url('solucoes') ?>">Resíduos Industriais</a></li>
                            <li><a class="dropdown-item" href="<?= url('solucoes') ?>">Resíduos Químicos</a></li>
                        </ul>
                        <li>
                            <a class="certificacoes" href="<?= url('solucoes') ?>">Certificações</a>
                        </li>
                        <li>
                            <a class="contato" href="<?= url('contato') ?>">Contato</a>
                        </li>
                    </ul>               
            </div>
            <div class="col-lg-4 col-6">
                <div class="d-flex justify-content-end align-items-center">
                    <button class="p-button btn btn-success text-blue d-none d-xl-flex" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Solicite seu orçamento</button>
                    <button class="p-button btn btn-success text-blue d-none d-lg-flex d-xl-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Orçamento</button>
                    <button class="btn btn-success text-blue d-flex d-lg-none me-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img width="30px" src="<?= asset('images/icones/orcamento-w.png') ?>" alt="">
                    </button>
                    <button class="btn btn-success text-blue d-flex d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <svg class="" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="16" height="4" fill="white" />
                            <rect x="4" y="12" width="16" height="4" fill="white" />
                            <rect x="4" y="20" width="16" height="4" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                <section class="form ">
        <div class="ajuste-lateral">
            <div class="row p-0">
                <div class="col-lg-5 col-xl-7 col-12 p-0 bg-cinza d-flex justify-content-center align-items-center">
                    <div class="flex-column py-4 div-form text-center text-lg-start">
                        <h2>Fale com um especialista!</h2>
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
                                <input type="checkbox" class="input-checkbox">
                                <p class="mt-1 ms-1">Li e aceito os termos da <span>Política de privacidade</span> da CMP</p>
                            </div>
                        </form>
                        <button class="p-button btn btn-success text-blue mt-2">Enviar formulário
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-5 col-12 p-0 bg-cinza">
                    <!--<div class="ratio ratio-1x1">-->
                        <img class="objectf-fit-cover h-100 w-100" src="<?= asset('images/banners/form.png') ?>" alt="">                        
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
                </div>
            </div>
            </div><!--modal-->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div><!--offcanvas-->
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
                    <section class="breadcrumb-wrapper py-lg-4">
                        <div class="d-flex m-auto flex-column div">
                            <img class="img" src="<?= asset('images/banners/text-breadcrumb.png') ?>" alt="">
                            <h2>Resíduos Industriais</h2>
                            <div class="d-flex m-auto">
                                <a href="">Home</a>
                                    <svg class="mt-0-50 mx-0-50" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="white" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>
                                <a href="">Resíduos Industriais</a>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        <?php endif; ?>