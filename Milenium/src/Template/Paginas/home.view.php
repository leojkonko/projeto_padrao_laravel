<main id="home">
    <section class="banner position-relative">
        <div class="row">
            <div class="col-12 p-0">
                <div class="bg-index">
                    <div class="ratio ratio-21x9 text-center d-none d-lg-flex z-index-background">
                            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">
                    </div>
                    <div class="ratio ratio-6x9 text-center d-flex d-lg-none z-index-background">
                            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">
                    </div>
                    <div class="conteudo-banner flex-column w-100 p-lg-4 p-2">
                        <h2 class="text-white h2 h2-50 text-center">Segurança e agilidade na entrega da sua carga</h2>
                        <p class="text-white text-center p">Acompanhe sua carga.</p>
                        <div class="d-flex justify-content-center gap-1 pt-1">
                            <button class="btn btn-outline-light p">Consulta simples</button>
                            <button class="btn btn-outline-light p">Consulta completa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="empresa" class="saiba-mais bg-cinza mt-2 mt-lg-3">
        <div class="container">
            <div class="row">
                <div class="col-12 p-lg-4 p-2 d-flex justify-content-center align-items-center flex-column conteudo-texto text-lg-start text-center">
                    <h2 class="h2 text-primary w-100">Saiba mais sobre a <span class="h2 text-danger">Milenium</span></h2>
                    <p class="p pt-2">
                    Com visão empreendedora e focada na satisfação de seus clientes, a Milenium em seus 20 anos de atuação se especializou no transporte de cargas e encomendas. Nossas filiais de Caxias do Sul, Guarulhos, Curitiba, Bento Gonçalves e Novo Hamburgo, contam com terminal de cargas, equipe treinada e especializada para atender as necessidades dos clientes.
                    </p>
                    <p class="p">
Com política de manutenção, renovação de frota e monitoramento de veículos com rastreamento de última geração, podemos garantir maior segurança e agilidade em nossas operações. Atualmente a Milenium atende clientes dos mais diversos segmentos, conforme sua necessidade (fracionado e lotação)
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6 p-0 bg-cinza">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100 br-inf-esq" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 p-0">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 p-0">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 p-0">
                <div class="mais-fotos">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" class="a-ratio" data-fancybox="gallery">
                        <div class="ratio ratio-1x1">
                            <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                            <a href="<?= asset('images/banners/fotos.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                            <a href="<?= asset('images/banners/fotos1.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="diferenciais py-lg-4 py-2">
    <div class="container">
        <h2 class="h2 text-white w-100 text-center mt-2">Diferenciais</h2>
            <div class="swiper diferenciais-swiper">
                    <div class="swiper-wrapper my-4">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide d-flex justify-content-center flex-column">
                                <div class="ratio ratio-1x1 m-auto">
                                    <img class="" src="<?= asset('images/icones/diferenciais.png') ?>" alt="">
                                </div>
                                <p class="p text-white text-center pt-1">
                                    Estoque vertical
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <div class="swiper-pagination mb-2"></div> 
            </div>
        </div>
    </section>
    <section id="cidades" class="cidades py-4">
        <div class="row">
            <div class="col-lg-6 col-12 bg-cinza d-flex justify-content-center align-items-center p-xl-4 p-lg-1 p-2 flex-column">
                <div class="row d-flex justify-content-center infos my-lg-4 my-1">    
                    <h2 class="h2 h2-50 text-primary text-lg-start text-center">Área de atuação</h2>
                    <select name="" id="" class="form-select p mt-2 mb-1">
                        <option value="" >Selecione uma cidade aqui ou clicando no mapa</option>
                        <option value="">opção 1</option>
                        <option value="">opção 2</option>
                    </select>
                    <div class="col-lg-5 col-md-6 col-12 p-0 imagem">
                        <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/banners/caminhao.png') ?>" alt="">
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 p-0 bg-light infos px-lg-1 px-2 py-1 d-flex justify-content-center align-items-center flex-column">
                        <div class="m-auto">
                            <h2 class="h2 h2-20 text-lg-start ps-lg-0-50 ps-0 mb-1 mt-1 w-100">Matriz - Caxias do Sul</h2>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.77252 3.82L8.2916 6.976C8.7313 7.288 9.28092 7.288 9.72061 6.976L14.2397 3.82M1 2.452V11.548C1 12.352 1.57405 13 2.29466 13H15.7053C16.4137 13 17 12.352 17 11.548V2.452C17 1.648 16.426 1 15.7053 1H2.29466C1.57405 1 1 1.648 1 2.452Z" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10"/>
                                </svg>
                                cx@mileniumtransp.com.br
                            </p>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1736 9.97102C14.7929 9.7916 12.8622 8.89446 12.5087 8.7663C12.128 8.63814 11.8832 8.56124 11.6113 8.94573C11.3394 9.30458 10.6052 10.1505 10.3604 10.4068C10.1429 10.6375 9.89816 10.6887 9.51746 10.4837C9.10957 10.3042 7.8587 9.91976 6.33591 8.63814C5.16662 7.6641 4.37803 6.43374 4.1333 6.07489C3.91576 5.6904 4.1061 5.51098 4.29645 5.30592C4.4868 5.15212 4.67715 4.87017 4.89469 4.66511C5.08504 4.46005 5.16662 4.30625 5.30259 4.04993C5.43855 3.81924 5.38416 3.58854 5.27539 3.40912C5.19381 3.22969 4.40522 1.38415 4.07891 0.640811C3.7526 -0.0768974 3.42629 0.0256325 3.18155 0C2.96401 0 2.69208 0 2.42015 0C2.17542 0 1.74034 0.10253 1.38683 0.461384C1.00613 0.845871 0 1.74301 0 3.56291C0 5.38281 1.41402 7.15145 1.60437 7.40778C1.79472 7.6641 4.37803 11.4064 8.32098 13.0213C9.27273 13.4058 10.0069 13.6365 10.578 13.7903C11.5297 14.0722 12.3727 14.021 13.0525 13.9184C13.8139 13.8159 15.3911 13.0213 15.7174 12.1498C16.0437 11.3039 16.0437 10.5606 15.9349 10.4068C15.8534 10.253 15.5814 10.1505 15.1736 9.97102Z" fill="#FF0000"/>
                                </svg>
                                (54) 3224-2304   <br>                         
                                <span class="ps-2">(54) 3224-4645</span>
                            </p>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59653 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04295 4.61333C5.88152 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79833 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="#FF0000"/>
                                </svg>
                                55*47863*3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 bg-danger">Espaço para o mapa</div>
        </div>
    </section>

<section class="contato py-lg-4 py-2" id="contato">
    <div class="container px-1 px-lg-0">
        <div class="row">
            <h2 class="w-100 text-center h2 h2-50 text-light mb-4">Entre em contato</h2>
            <div class="col-12 bg-white p-1">
                <form action="">
                    <div class="d-lg-flex d-block">
                        <input type="text" class="form-control p  m-1" placeholder="Nome*">
                        <input type="number" class="form-control p  m-1 mask-telefone" placeholder="Telefone*">
                        <input type="email" class="form-control p  m-1" placeholder="E-mail*">
                    </div>
                    <textarea class="form-control p  m-1" name="" id="" cols="30" rows="10" placeholder="Mensagem*"></textarea>
                    <div class="d-lg-flex d-block pt-lg-1 pt-0 m-1 align-items-center">
                    <label class="checkbox-round mt-lg-1 mt-0">
                        <input type="checkbox">
                        <span class="checkmark mt-0-25"></span>
                        <p class="p ms-1">Li e aceito a <span>Política de privacidade</span> da Milenium transportes</p>
                    </label>
                        <button class="btn-outline-primary btn text-dark p ms-lg-auto d-flex ml-auto">Entre em contato</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</main>