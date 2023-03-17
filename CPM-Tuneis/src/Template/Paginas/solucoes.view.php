<main id="solucoes">
    <section class="solucoes">
        <div class="row p-0 d-none d-lg-flex">
            <div class="col-lg-4 p-0 cont1">
                <div class="d-flex justify-content-center align-items-center p-0 bg-custom">
                    <div class="p-0 flex-column">
                        <h2>Consultoria</h2>
                        <p class="mt-1">Análise completa do sistema de congelamento da sua empresa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0 cont2">
                <div class="d-flex justify-content-center align-items-center p-0 bg-custom">
                    <div class="p-0 flex-column">
                        <h2>Projeto</h2>
                        <p class="mt-1">Análise completa do sistema de congelamento da sua empresa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0 cont3">
                <div class="d-flex justify-content-center align-items-center p-0 bg-custom">
                    <div class="p-0 flex-column">
                        <h2>Construção</h2>
                        <p class="mt-1">Análise completa do sistema de congelamento da sua empresa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0 cont4">
                <div class="d-flex justify-content-center align-items-center p-0 bg-custom">
                    <div class="p-0 flex-column">
                        <h2>Ampliação</h2>
                        <p class="mt-1">Análise completa do sistema de congelamento da sua empresa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0 cont5">
                <div class="d-flex justify-content-center align-items-center p-0 bg-custom">
                    <div class="p-0 flex-column">
                        <h2>Manutenção</h2>
                        <p class="mt-1">Análise completa do sistema de congelamento da sua empresa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0 cont6">
                <div class="d-flex justify-content-center align-items-center p-0 bg-custom">
                    <div class="p-0 flex-column">
                        <h2>Reposição</h2>
                        <p class="mt-1">Análise completa do sistema de congelamento da sua empresa</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0">
             <div class="col-12 p-0 d-flex d-lg-none">
                <div class="swiper cont-swiper w-100 h-100">
                    <div class="swiper-wrapper w-100">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide h-100 w-100">
                                <div class="slide-img w-100 h-100 p-0">
                                    <div class="p-0 w-100 h-100 bg-custom">
                                         <h2>Consultoria</h2>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                    <!--<div class="swiper-scrollbar"></div>--> 
                </div><!--consultoria-->  
             </div>
        </div>
    </section>
    <section class="consultoria bg-cinza py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
                <div class="col-lg-6 col-consult d-flex justify-content-center p-0">
                    <div class="swiper consultoria-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img position-relative">
                                        <div class="ratio ratio-1x1">
                                            <img class="w-100 h-100" src="<?= asset('images/backgrounds/consultoria.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        <!--<div class="swiper-scrollbar"></div>--> 
                    </div><!--consultoria-->                   
                </div>
                <div class="col-lg-6 ps-xxl-4 p-0 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="flex-column px-xxl-4 px-xl-2 px-lg-1 text-lg-start text-center">
                            <h2>  
                                <svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 22L31 31M22 11.5C22 17.299 17.299 22 11.5 22C5.70101 22 1 17.299 1 11.5C1 5.70101 5.70101 1 11.5 1C17.299 1 22 5.70101 22 11.5Z" stroke="#0072BE" stroke-width="2" stroke-linejoin="round"/>
                                </svg>    
                                Consultoria
                            </h2>
                            <p class="p">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, 
                                quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum é simplesmente 
                                uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI. Lorem Ipsum é simplesmente uma simulação 
                                de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de 
                                tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica.
                            </p>
                            <button class="button-azul mt-2">
                                Tenho interesse
                                <svg class="ms-1" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 9L12 5M12 5L8 1M12 5L4.76995e-08 5" stroke="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <div class="swiper swiper-consultoria-diferenciais ">
                                <div class="swiper-wrapper mb-lg-4 my-3">
                                    <?php foreach(range(0,9) as $i) : ?>
                                        <div class="swiper-slide text-center mt-2">
                                            <div class="ratio ratio-1x1">
                                                <img src="<?= asset('images/logos/dif.png') ?>" alt="">
                                            </div>
                                            <h6 class="h6 mt-1 m-auto">
                                                Assistência técnica
                                            </h6>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="inf-dir" width="133" height="126" viewBox="0 0 133 126" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 126L0.999989 1L133 0.999988" stroke="#0072BE"/>
        </svg>
    </section>
    <section class="section2 py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
                <div class="col-lg-6 col-consult d-flex justify-content-center align-items-center p-0">
                    <div class="swiper consultoria-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img position-relative">
                                        <div class="ratio ratio-1x1">
                                                <img class="w-100 h-100" src="<?= asset('images/backgrounds/consultoria.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        <!--<div class="swiper-scrollbar"></div>--> 
                    </div><!--consultoria-->                   
                </div>
                <div class="col-lg-6 ps-xxl-4 p-0 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="flex-column px-xxl-4 px-xl-2 px-lg-1 text-lg-start text-center">
                            <h2>  
                                <svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 22L31 31M22 11.5C22 17.299 17.299 22 11.5 22C5.70101 22 1 17.299 1 11.5C1 5.70101 5.70101 1 11.5 1C17.299 1 22 5.70101 22 11.5Z" stroke="#0072BE" stroke-width="2" stroke-linejoin="round"/>
                                </svg>    
                                Consultoria
                            </h2>
                            <p class="p">
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um 
                            impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                            </p>
                            <button class="button-azul mt-1">
                                Tenho interesse
                                <svg class="ms-1" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 9L12 5M12 5L8 1M12 5L4.76995e-08 5" stroke="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="sup-esq" width="133" height="126" viewBox="0 0 133 126" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M132 0V125H0" stroke="#0072BE"/>
        </svg>
    </section>
    <section class="section2 bg-cinza py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
            <div class="col-lg-6 ps-xxl-4 p-0 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="flex-column px-xxl-4 px-xl-2 px-lg-1 text-lg-start text-center">
                            <h2>  
                                <svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 22L31 31M22 11.5C22 17.299 17.299 22 11.5 22C5.70101 22 1 17.299 1 11.5C1 5.70101 5.70101 1 11.5 1C17.299 1 22 5.70101 22 11.5Z" stroke="#0072BE" stroke-width="2" stroke-linejoin="round"/>
                                </svg>    
                                Consultoria
                            </h2>
                            <p class="p">
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um 
                            impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                            </p>
                            <button class="button-azul mt-1">
                                Tenho interesse
                                <svg class="ms-1" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 9L12 5M12 5L8 1M12 5L4.76995e-08 5" stroke="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-consult d-flex justify-content-center align-items-center p-0">
                    <div class="swiper consultoria-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img position-relative">
                                         <div class="ratio ratio-1x1">
                                            <img class="w-100 h-100" src="<?= asset('images/backgrounds/consultoria.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        <!--<div class="swiper-scrollbar"></div>--> 
                    </div><!--consultoria-->                   
                </div>
            </div>
        </div>
        <svg class="inf-dir" width="133" height="126" viewBox="0 0 133 126" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 126L0.999989 1L133 0.999988" stroke="#0072BE"/>
        </svg>
    </section>
    <section class="section2 py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
                <div class="col-lg-6 col-consult d-flex justify-content-center align-items-center p-0">
                    <div class="swiper consultoria-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img position-relative">
                                        <div class="ratio ratio-1x1">
                                           <img class="w-100 h-100" src="<?= asset('images/backgrounds/consultoria.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        <!--<div class="swiper-scrollbar"></div>--> 
                    </div><!--consultoria-->                   
                </div>
                <div class="col-lg-6 ps-xxl-4 p-0 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="flex-column px-xxl-4 px-xl-2 px-lg-1 text-lg-start text-center">
                            <h2>  
                                <svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 22L31 31M22 11.5C22 17.299 17.299 22 11.5 22C5.70101 22 1 17.299 1 11.5C1 5.70101 5.70101 1 11.5 1C17.299 1 22 5.70101 22 11.5Z" stroke="#0072BE" stroke-width="2" stroke-linejoin="round"/>
                                </svg>    
                                Consultoria
                            </h2>
                            <p class="p">
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um 
                            impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                            </p>
                            <button class="button-azul mt-1">
                                Tenho interesse
                                <svg class="ms-1" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 9L12 5M12 5L8 1M12 5L4.76995e-08 5" stroke="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="sup-esq" width="133" height="126" viewBox="0 0 133 126" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M132 0V125H0" stroke="#0072BE"/>
        </svg>
    </section>
    <section class="section2 bg-cinza py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
            <div class="col-lg-6 ps-xxl-4 p-0 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="flex-column px-xxl-4 px-xl-2 px-lg-1 text-lg-start text-center">
                            <h2>  
                                <svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 22L31 31M22 11.5C22 17.299 17.299 22 11.5 22C5.70101 22 1 17.299 1 11.5C1 5.70101 5.70101 1 11.5 1C17.299 1 22 5.70101 22 11.5Z" stroke="#0072BE" stroke-width="2" stroke-linejoin="round"/>
                                </svg>    
                                Consultoria
                            </h2>
                            <p class="p">
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um 
                            impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                            </p>
                            <button class="button-azul mt-1">
                                Tenho interesse
                                <svg class="ms-1" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 9L12 5M12 5L8 1M12 5L4.76995e-08 5" stroke="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-consult d-flex justify-content-center align-items-center p-0">
                    <div class="swiper consultoria-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img position-relative">
                                        <div class="ratio ratio-1x1">
                                             <img class="w-100 h-100" src="<?= asset('images/backgrounds/consultoria.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        <!--<div class="swiper-scrollbar"></div>--> 
                    </div><!--consultoria-->                   
                </div>
            </div>
        </div>
        <svg class="sup-esq" width="133" height="126" viewBox="0 0 133 126" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M132 0V125H0" stroke="#0072BE"/>
        </svg>
    </section>
    <section class="section2 py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
                <div class="col-lg-6 col-consult d-flex justify-content-center align-items-center p-0">
                    <div class="swiper consultoria-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide h-100">
                                    <div class="slide-img position-relative">
                                        <div class="ratio ratio-1x1">
                                            <img class="w-100 h-100" src="<?= asset('images/backgrounds/consultoria.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                        <!--<div class="swiper-scrollbar"></div>--> 
                    </div><!--consultoria-->                   
                </div>
                <div class="col-lg-6 ps-xxl-4 p-0 conteudo">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="flex-column px-xxl-4 px-xl-2 px-lg-1 text-lg-start text-center">
                            <h2>  
                                <svg class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 22L31 31M22 11.5C22 17.299 17.299 22 11.5 22C5.70101 22 1 17.299 1 11.5C1 5.70101 5.70101 1 11.5 1C17.299 1 22 5.70101 22 11.5Z" stroke="#0072BE" stroke-width="2" stroke-linejoin="round"/>
                                </svg>    
                                Consultoria
                            </h2>
                            <p class="p">
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um 
                            impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                            </p>
                            <button class="button-azul mt-1">
                                Tenho interesse
                                <svg class="ms-1" width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M8 9L12 5M12 5L8 1M12 5L4.76995e-08 5" stroke="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="sup-dir" width="133" height="126" viewBox="0 0 133 126" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 0V125H133" stroke="#0072BE"/>
        </svg>
    </section>
    <section class="empresas-parceiras">
        <div class="row p-0">
            <div class="col-lg-10 p-0 col-12 m-auto">
                <div class="swiper empresas-swiper position-relative my-lg-4 my-4">
                <h2 class="text-center w-100 mb-3"><span>Empresas que</span> confiam</h2>
                        <div class="swiper-wrapper mb-4">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide text-center mt-2">
                                    <div class="ratio ratio-1x1">
                                            <img src="<?= asset('images/logos/empresas.png') ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <div class="swiper-pagination"></div>
                    <!--<div class="swiper-scrollbar"></div>-->
                </div>               
            </div>
        </div>
    </section>
    <section class="form">
        <div class="row p-0">
            <div class="col-lg-5 col-xl-7 col-12 p-0 bg-cinza d-flex justify-content-center align-items-center">
                <div class="flex-column py-4 div-form text-center text-lg-start">
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
                            <input type="checkbox" class="input-checkbox">
                            <p class="mt-1 ms-1">Li e aceito os termos da <span>Política de privacidade</span> da CMP</p>
                        </div>
                    </form>
                    <button class="button-azul mt-2">Enviar formulário

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 16.0005L18 12.0005M18 12.0005L14 8.00049M18 12.0005L6 12.0005" stroke="white"/>
                    </svg>
                    </button>
                </div>
            </div>
            <div class="col-lg-7 col-xl-5 col-12 p-0 bg-cinza">
                <!--<div class="ratio ratio-1x1">-->
                    <img class="objectf-fit-cover h-100" src="<?= asset('images/banners/form.png') ?>" alt="">                        
                <!--</div>-->
            </div>
        </div>
    </section>
</main>