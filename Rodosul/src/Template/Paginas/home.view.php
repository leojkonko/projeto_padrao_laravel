<main id="home">
    <section class="home">
        <div class="">
            <div class="row">
                <div class="swiper banner-swiper position-relative ">
                    <div class="swiper-wrapper">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide text-center mt-2">
                                <div class="ratio ratio-16x9 text-center">
                                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>     
            </div>
        </div>
    </section>
    <section class="bg-azul residuos">
        <div class="container">
            <div class="row p-0 d-flex justify-content-center">
            <div class="col-lg-4  col_center">
                    <div class="d-flex justify-content-center div-cont">
                        <div class="biologicos ratio ratio-1x1" id="biologicos">
                            <img class="img-bg" src="<?= asset('images/backgrounds/residuos.png') ?>" alt="">
                            <img class="img-hover d-none" src="<?= asset('images/backgrounds/residuos-hover.png') ?>" alt="">
                        </div>
                        <h2 class="position-absolute h2 text-white text-center">Resíduos biológicos</h2>
                        <button class="btn btn-success p-button text-blue">Saiba mais</button>
                    </div>
                </div>
                <div class="col-lg-4  col_center">
                    <div class="d-flex justify-content-center div-cont">
                        <div class="biologicos ratio ratio-1x1" id="biologicos">
                            <img class="img-bg" src="<?= asset('images/backgrounds/residuos.png') ?>" alt="">
                            <img class="img-hover d-none" src="<?= asset('images/backgrounds/residuos-hover.png') ?>" alt="">
                        </div>
                        <h2 class="position-absolute h2 text-white text-center">Resíduos biológicos</h2>
                        <button class="btn btn-success p-button text-blue">Saiba mais</button>
                    </div>
                </div>
                <div class="col-lg-4  col_center">
                    <div class="d-flex justify-content-center div-cont">
                        <div class="biologicos ratio ratio-1x1" id="biologicos">
                            <img class="img-bg" src="<?= asset('images/backgrounds/residuos.png') ?>" alt="">
                            <img class="img-hover d-none" src="<?= asset('images/backgrounds/residuos-hover.png') ?>" alt="">
                        </div>
                        <h2 class="position-absolute h2 text-white text-center">Resíduos biológicos</h2>
                        <button class="btn btn-success p-button text-blue">Saiba mais</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rodosul">
        <div class="row">
            <div class="col-lg-6 p-0 position-relative">
                <img class="sem-rodosul" src="<?= asset('images/banners/sem-rodosul.png') ?>" alt="">
                <div class="d-flex justify-content-end w-100 position-relative">
                <svg class="border" width="2" height="310" viewBox="0 0 2 310" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0L1.00001 310" stroke="#283C65" stroke-opacity="0.8"/>
                </svg>
                    <div class="flex-column w-100 text-end ">
                    <h2 class="w-100 bg-primary p-1 px-2 h2 text-white">Sem a Rodosul</h2>
                        <ul class="text-end py-2 position-relative z-index-3">
                            <li class="pe-2 p">Irresponsabilidade e mau atendimento 
                                <svg class="ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#DD3F3F"/>
                                    <path d="M6 6L14 14M14 6L6 14" stroke="white" stroke-width="2"/>
                                </svg>
                            </li>
                            <li class="pe-2 p">Sem compromisso com o meio ambiente
                                <svg class="ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#DD3F3F"/>
                                    <path d="M6 6L14 14M14 6L6 14" stroke="white" stroke-width="2"/>
                                </svg>
                            </li>
                            <li class="pe-2 p">Profissionais inexperientes
                                <svg class="ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#DD3F3F"/>
                                    <path d="M6 6L14 14M14 6L6 14" stroke="white" stroke-width="2"/>
                                </svg>
                            </li>
                            <li class="pe-2 p">Barato que sai caro
                                <svg class="ms-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#DD3F3F"/>
                                    <path d="M6 6L14 14M14 6L6 14" stroke="white" stroke-width="2"/>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0 position-relative">
            <img class="com-rodosul" src="<?= asset('images/banners/com-rodosul.png') ?>" alt="">
                <div class="d-flex justify-content-start w-100">
                    <div class="flex-column w-100">
                        <h2 class="h2 text-azul bg-success w-100 p-1 px-2">Com a Rodosul</h2>
                        <ul class="text-start pt-2">
                            <li class="p">
                                <svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#51EEC3"/>
                                    <path d="M5 9L9 13L15 7" stroke="#0055FF" stroke-width="2"/>
                                </svg>
                                Profisionalismo e qualidade
                            </li>
                            <li class="p">
                                <svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#51EEC3"/>
                                    <path d="M5 9L9 13L15 7" stroke="#0055FF" stroke-width="2"/>
                                </svg>
                                Melhor destinação de resíduos
                            </li>
                            <li class="p">
                                <svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#51EEC3"/>
                                    <path d="M5 9L9 13L15 7" stroke="#0055FF" stroke-width="2"/>
                                </svg>
                                Equipe altamente preparada
                            </li>
                            <li class="p">
                                <svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#51EEC3"/>
                                    <path d="M5 9L9 13L15 7" stroke="#0055FF" stroke-width="2"/>
                                </svg>
                                Garantia de solução de problemas
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parceiros py-lg-4 py-2">
        <div class="container">
            <div class="row">
                <h2 class="w-100 h2 pb-2 text-center">Quem confia</h2>
                <?php foreach(range(0,11) as $i) : ?>
                    <div class="col-lg-3 col-md-4 col-6 my-2 d-flex justify-content-center p-0">
                        <div class="ratio ratio-21x9">
                            <img width="80%" src="<?= asset('images/banners/marcas.png') ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="form pb-4">
        <div class="container">
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
</main>