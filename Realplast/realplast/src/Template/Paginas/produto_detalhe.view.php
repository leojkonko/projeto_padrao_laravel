<main id="produto">
    <section class="produto-detalhe">
        <div class="container">
            <div class="row produto">
                <div class="col-lg-6 p-0">
                    <!-- Swiper -->
                        <div class="swiper mySwiper-produto-detalhe">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide d-flex justify-content-center align-items-center">   
                                    <div class="d-flex justify-content-center align-items-center imagem">
                                        <img src="<?= asset('images/banners/produto-detalhe.svg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">   
                                    <div class="d-flex justify-content-center align-items-center imagem">
                                        <img src="<?= asset('images/banners/produto-detalhe.svg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide d-flex justify-content-center align-items-center">   
                                    <div class="d-flex justify-content-center align-items-center imagem">
                                        <img src="<?= asset('images/banners/produto-detalhe.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Swiper -->
                    </div>
                <div class="col-lg-6 py-lg-4 py-2 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <h2>Kit Assento + Encosto</h2>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2">
                        <h6>Disponível para <span>tubos</span>:</h6>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2 tubos">
                        <div class=" d-flex flex-column pe-2 tubos-desenho">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="22" height="22" rx="11" stroke="#FF3C01" stroke-width="2"/>
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="22" height="22" rx="11" stroke="#FF3C01" stroke-width="2"/>
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="22" height="22" rx="11" stroke="#FF3C01" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class=" d-flex flex-column ps-2">
                            <h6>Redondo <span>7/80</span></h6>
                            <h6>Oblongo <span>7/80</span></h6>
                            <h6>Redondo <span>7/80</span></h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2">
                        <button>Orçar agora
                            <svg width="36" height="36" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M3.77252 3.82L8.2916 6.976C8.7313 7.288 9.28092 7.288 9.72061 6.976L14.2397 3.82M1 2.452V11.548C1 12.352 1.57405 13 2.29466 13H15.7053C16.4137 13 17 12.352 17 11.548V2.452C17 1.648 16.426 1 15.7053 1H2.29466C1.57405 1 1 1.648 1 2.452Z" stroke="#FF6A00" stroke-width="1.5" stroke-miterlimit="10"/>
                            </svg>
                            <svg width="36" height="36" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59653 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04295 4.61333C5.88152 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79833 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="#FF6A00"/>
                            </svg>

                        </button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2 cores">
                        <p class="me-2">Visualizar cores: </p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="12" cy="12" r="11" fill="#253E4F" stroke="white" stroke-width="2"/>
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="12" cy="12" r="11" fill="#253E4F" stroke="white" stroke-width="2"/>
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="12" cy="12" r="11" fill="#253E4F" stroke="white" stroke-width="2"/>
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="12" cy="12" r="11" fill="#253E4F" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2 ">
                        <svg width="15" class="mb-1 me-1" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 12.4459V4.02797L7 7.34512V12.3597C7 12.6214 7.22386 12.8336 7.5 12.8336C7.77614 12.8336 8 12.6214 8 12.3597V7.34512L15 4.02797V12.4459L7.5 16L0 12.4459Z" fill="#253E4F"/>
                            <path d="M14.382 3.26122L7.5 6.52243L0.618034 3.26122L7.5 0L14.382 3.26122Z" fill="#253E4F"/>
                        </svg>
                        <p>Caixas com <span>10 kits</span> Assento + Encosto </p>
                    </div>
                </div>
                <div class="col-lg-12 conteudo-opcoes py-lg-3 py-2 p-0 overflow-hidden">
                    <hr>
                        <div class="row">
                            <div class="col-lg-3 cont col-md-6 d-flex justify-content-center">
                                <h6 class="prod">Produto personalizável</h6>
                            </div>
                            <div class="col-lg-3 cont col-md-6 d-flex justify-content-center">
                                <svg width="36"  height="27" viewBox="0 0 36 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M25.407 22.7688C25.7526 23.1065 25.5065 23.6824 25.0173 23.6824H22.9462C22.4509 23.6824 21.9757 23.4902 21.6252 23.1484L19.0435 20.6282L19.0418 20.6298C18.4668 20.0685 17.5376 20.0669 16.9588 20.6282L10.5899 26.8421C10.244 27.1794 9.65281 26.9405 9.65281 26.4629V24.5158C9.65281 23.9822 9.86995 23.4704 10.2563 23.0932L14.8683 18.5912C14.8683 18.5912 14.8687 18.5912 14.8687 18.5908C16.5699 16.9301 19.3139 16.9031 21.0481 18.5142C21.0684 18.5311 23.8924 21.2895 25.407 22.7688ZM14.9509 8.48487C16.6851 10.096 19.4291 10.069 21.1303 8.40831L25.7422 3.90583C26.1286 3.52864 26.3458 3.01686 26.3458 2.48332V0.536933C26.3458 0.0594035 25.7546 -0.179563 25.4087 0.158133L19.432 5.99245C18.641 6.76456 17.3584 6.76456 16.567 5.99245L14.375 3.85264C14.0249 3.51091 13.5502 3.31869 13.0548 3.31869L10.9821 3.31789C10.4929 3.31748 10.2464 3.89374 10.5924 4.23144C12.1074 5.71037 14.9306 8.46795 14.9509 8.48487ZM25.3018 14.5191C24.7358 13.9666 24.7267 13.0808 25.2687 12.5159L27.8823 9.96139C28.2319 9.61966 28.4284 9.15583 28.4284 8.67266V6.64729C28.4284 6.16976 27.8373 5.9308 27.4913 6.26849L23.603 10.0641C21.6595 11.9614 21.6595 15.0373 23.603 16.9345L31.9984 25.1299C32.3848 25.5071 32.9091 25.719 33.4557 25.719H35.45C35.9391 25.719 36.1839 25.142 35.838 24.8043L25.3018 14.5191ZM12.3955 10.0641L4.00057 1.86958C3.61376 1.49199 3.08949 1.28002 2.54251 1.28043L0.549854 1.28123C0.06067 1.28123 -0.183716 1.8583 0.161809 2.19599L10.3088 12.1012C11.0997 12.8733 11.0997 14.1254 10.3088 14.8979L8.11673 17.0377C7.76625 17.3798 7.56975 17.8436 7.56975 18.3272V20.3518C7.56975 20.8293 8.1609 21.0683 8.50684 20.7306L12.3951 16.9349C14.3391 15.0377 14.3391 11.9614 12.3955 10.0641Z" fill="#253E4F"/>
                                </svg>
                                <h6 class="ps-1">Adicione um <span>logotipo</span></h6>
                            </div>
                            <div class="col-lg-3 cont col-md-6 d-flex justify-content-center">
                                <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M14.0724 15.3475C14.0272 18.1467 11.7647 20.5116 8.73303 20.5116C6.87783 20.5116 5.88235 19.6429 5.88235 17.8571C5.88235 15.8301 6.96833 14.8166 10.3167 14.1409C12.4887 13.7066 13.5294 13.3687 14.1176 12.7413L14.0724 15.3475ZM20 24.3726V9.36293C20 3.37838 17.5566 0 10.4977 0C3.34842 0 0.81448 3.42664 0.723982 8.34942H6.1991C6.47059 6.22587 7.55656 4.82625 10.2262 4.82625C12.5339 4.82625 13.9819 5.74324 13.9819 7.28765C13.9819 8.92857 13.1674 9.55598 10.2262 9.99035C4.29864 10.8591 0 11.6313 0 18.4846C0 22.3456 2.35294 25 7.42081 25C10.4072 25 12.7602 23.89 14.1629 22.249C14.2081 22.973 14.3439 23.7934 14.5249 24.3726H20Z" fill="#253E4F"/>
                                </svg>

                                <h6 class="ps-1">Adicione uma <span>frase</span></h6>
                            </div>
                            <div class="col-lg-3 cont col-md-6 d-flex justify-content-center">
                                <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M12.3272 0.0561105C-2.18806 0.983016 -2.62486 11.061 4.51515 12.1227C14.4104 13.6058 6.49755 18.7965 12.8816 22.7232C20.1728 27.206 32 19.0324 32 11.4149C32 3.79744 21.8864 -0.550592 12.3272 0.0561105ZM12.2432 7.38709C11.0336 7.38709 10.0592 6.40963 10.0592 5.19622C10.0592 3.98282 11.0336 3.00536 12.2432 3.00536C13.4528 3.00536 14.4272 3.98282 14.4272 5.19622C14.4272 6.39278 13.4528 7.38709 12.2432 7.38709ZM15.9896 20.3301C14.78 20.3301 13.8056 19.3526 13.8056 18.1392C13.8056 16.9258 14.78 15.9483 15.9896 15.9483C17.1992 15.9483 18.1736 16.9258 18.1736 18.1392C18.1736 19.3526 17.1992 20.3301 15.9896 20.3301ZM19.4504 8.04435C18.2408 8.04435 17.2664 7.06689 17.2664 5.85348C17.2664 4.64008 18.2408 3.66262 19.4504 3.66262C20.66 3.66262 21.6344 4.64008 21.6344 5.85348C21.6344 7.06689 20.66 8.04435 19.4504 8.04435ZM25.6328 12.0048C24.4232 12.0048 23.4488 11.0273 23.4488 9.8139C23.4488 8.6005 24.4232 7.62303 25.6328 7.62303C26.8424 7.62303 27.8168 8.6005 27.8168 9.8139C27.8168 11.0273 26.8424 12.0048 25.6328 12.0048Z" fill="#253E4F"/>
                                </svg>
                                <h6 class="ps-1">Escolha uma <span>cor</span></h6>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="kits py-lg-4 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 p-sm-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <h6>Kit composto por Assento e Encosto injetado em Polipropileno (PP) de alta resistência. 
                            Assento com curva anatômica que facilita a circulação sanguínea e orifícios laterais para fixação de estofados. 
                            Encosto de apoio anatômico com orifícios para ventilação.</h6>
                    </div>
                    <div class="d-flex  justify-content-start align-items-center ">
                        <p class="pt-2"> Referência do kit: <span>2051</span></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center conteudo-kit p-sm-0">
                    <div class="flex-column">
                        <p class="ps-2">Conteúdo do kit:</p>
                        <ul class="pt-2">
                            <li><span>01</span>Encosto Atuali</li>
                            <li><span>01</span>Assento Atuali</li>
                            <li><span>02</span>Pinos Plásticos</li>
                            <li><span>01</span>Parafusos mitoplastic -05x25mm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="detalhes-tecnicos">
        <div class="container">
            <div class="row">
                <div class="col-12 div-titulo">
                    <h2>Detalhes Técnicos</h2>
                </div>
                <div class="col-lg-12 div-detalhes">
                    <div class="row">
                        <div class="col-lg-4 col-12 d-flex justify-content-center py-lg-4 py-2">
                            <div class="flex-column conteudo">
                                <h2>Encosto</h2>
                                <p>Cód: 805100</p>
                                <img class="mt-2" src="<?= asset('images/banners/detalhes-tec.png') ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-flex justify-content-center py-lg-4 py-2">
                            <div class="flex-column conteudo">
                                <h2>Encosto</h2>
                                <p>Cód: 805100</p>
                                <img class="mt-2" src="<?= asset('images/banners/detalhes-tec2.png') ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 d-flex justify-content-center py-lg-4 py-2">
                            <div class="flex-column conteudo">
                                <h2>Encosto</h2>
                                <p>Cód: 805100</p>
                                <img class="mt-2" src="<?= asset('images/banners/detalhes-tec3.png') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relacionados py-lg-4 py-2">
    <div class="container">
                 <div class="row">
                    <div class="col-lg-12 div-titulo py-2 ps-0">
                        <h2>Produtos Relacionados</h2>
                    </div>
        <!-- Swiper -->
        <div class="swiper mySwiper-relacionados">
                    <div class="swiper-wrapper">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide">
                                <div class=" conteudo">
                                    <div class="d-flex justify-content-center">
                                        <h2>Big</h2>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="">Ver mais 
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="#FF3C01" stroke-width="1.5"/>
                                        </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <img src="<?= asset('images/banners/cadeira-pequena.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- Swiper -->
            </div>
        </div>
    </section>
</main>