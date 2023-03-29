<main id="solucoes">
    <section class="text">
        <div class="container">
            <div class="col-12 d-flex justify-content-center py-lg-4 py-2">
                <p class="p text-lg-start text-center">
                    
    Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                </p>
            </div>
        </div>
    </section>
    <section class="solucoes-img">
        <div class="row p-0">
                <div class="swiper solucoes-img-swiper position-relative ">
                    <div class="swiper-wrapper">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide text-center mt-2">
                                <div class="ratio ratio-1x1 text-center">
                                    <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/solucoes.png') ?>" alt="">
                                </div>
                                
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>    
            
        </div>
    </section>
    <section class="solucoes bg-cinza pb-2">
        <div class="row p-0">
            <div class="col-8 p-0 m-auto">
                <div class="swiper solucoes-swiper position-relative ">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide text-center py-2 mt-1">
                                    <div class="ratio ratio-1x1">
                                        <!--<img class="object-fit-cover " src="<?= asset('images/icones/solucoes.png') ?>" alt="">-->
                                        <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M8.88725 41.5368L2.56373 53.9252C0.956449 57.074 2.97759 61 6.20592 61H31.5L22.65 50.6204M43.3 61L56.5877 60.8899C59.9651 60.8619 62.0896 56.93 60.4163 53.8043L47.3054 29.3148L43.5058 43.1052M41.3333 17.2732L34.6412 4.48568C32.9403 1.23542 28.8363 1.15666 27.2457 4.34376L14.7833 29.3148L27.3611 26.0614" stroke="#0055FF" stroke-width="3" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="p px-2">Equipe altamente preparada</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>    
            </div>
            
        </div>
    </section>
    <section class="form py-lg-4 py-2">
        <div class="container">
            <div class="row p-0">
                <div class="col-lg-5 col-xl-6 col-12 p-0 bg-cinza d-flex justify-content-center align-items-center">
                    <div class="flex-column py-4 div-form text-start">
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
                <div class="col-lg-7 col-xl-6 col-12 p-0 bg-cinza">
                    <!--<div class="ratio ratio-1x1">-->
                        <img class="objectf-fit-cover" src="<?= asset('images/banners/form.png') ?>" alt="">                        
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
</main>