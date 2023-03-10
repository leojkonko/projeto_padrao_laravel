<main id="home">
    <section class="banner ">
        <div class="">
            <div class="row">
                <!-- Swiper -->
                <div class="swiper mySwiper-banner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-5 col-12 px-2 banner-conteudo ms-2">
                                <div class="d-flex justify-content-lg-start justify-content-center align-items-center">
                                    <h2>A beleza do plástico</h2>
                                </div>
                                <div class="d-flex justify-content-lg-start justify-content-center align-items-center">
                                    <p>Conheça nossa linha de produtos de qualidade inigualável</p>
                                </div>
                                <div class="d-flex justify-content-lg-start justify-content-center align-items-center">
                                    <a href="<?= url('produtos') ?>">
                                        <button class="btn btn-custom2"><span>Saiba mais</span>
                                            <svg width="22"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="#FF6A00" stroke-width="2"/>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex justify-content-center align-items-center imagem">
                                <img src="<?= asset('images/banners/cadeira.svg') ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- Swiper -->
                    
                </div>
            </div>  
        </div>
    </section>

    <section class="banner-buttons">
        <div class="">
            <div class="row">
                <!-- Swiper -->
                <div class="swiper mySwiper-buttons">
                    <div class="swiper-wrapper">
                    
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <a href="<?= url('produtos') ?>">
                                    <button class="w-100 b1">
                                    <img src="<?= asset('images/icones/corporativo.svg') ?>" class="me-1" width="35" alt="">    
                                    <span>Corporativo</span></button>
                                </a>          
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <a href="<?= url('produtos') ?>">
                                    <button class="w-100 b2">
                                    <img src="<?= asset('images/icones/componentes.svg') ?>" class="me-1"  width="35" alt="">    
                                        <span>Componentes</span></button>  
                                </a>             
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="col-lg-4 w-100 button-linhas">
                                <a href="<?= url('produtos') ?>">
                                    <button class="w-100 b3">
                                    <img src="<?= asset('images/icones/escolar.svg') ?>" class="me-1" width="60" alt="">    
                                    <span>Escolar</span></button>  
                                </a>             
                            </div>
                        </div>
                        <div class="swiper-slide ">                            
                            <div class="col-lg-4 w-100 button-linhas">
                                <a href="<?= url('produtos') ?>">
                                    <button class="w-100 b1">
                                    <img src="<?= asset('images/icones/corporativo.svg') ?>" class="me-1" width="35" alt="">    
                                    <span>Teste4</span></button> 
                                </a>              
                            </div>
                        </div>
                   
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper -->
            </div>  
        </div>
    </section>

    <section class="areas d-block">
        <div class="row">
            <div class="col-lg-8 d-flex justify-content-start align-items-center img">
                <img src="<?= asset('images/backgrounds/cadeira.png') ?>" alt="">
            </div>
            <div class="col-lg-4 col-12 conteudo">
                <div class="d-flex justify-content-start align-items-center">
                    <h2>Corporativo</h2>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <p>Conheça a nossa linha completa de produtos para o setor corporativo</p>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="<?= url('produtos') ?>">
                        <button class="btn btn-custom2"><span>Linha completa</span>
                        <svg width="22"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="#FF6A00" stroke-width="2"/>
                        </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="produtos">
        <div class="row">
            <!-- Swiper -->
            <div class="swiper mySwiper-produtos">
                    <div class="swiper-wrapper">
                    <?php foreach(range(0,9) as $i) : ?>
                        <a href="<?= url('produtos') ?>">
                        <div class="swiper-slide">
                            <div class="col-12 conteudo">
                                <div class="d-flex justify-content-center">
                                    <h2>Big</h2>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="" class="position">Ver mais 
                                    <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 13L7 7L1 1" stroke="#FF3C01" stroke-width="1.5"/>
                                    </svg>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= url('produtos') ?>">
                                        <img src="<?= asset('images/banners/cadeira-pequena.svg') ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>    
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper -->
        </div>
    </section>
    <section class="areas2">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-12 conteudo">
                <div class="d-flex justify-content-start align-items-center">
                    <h2>Componentes</h2>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <p>Peças diversas para a construção de cadeiras de alta qualidade</p>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="<?= url('produtos') ?>">
                        <button class="btn btn-custom2"><span>Linha completa</span>
                            <svg width="22"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L5 5L1 1" stroke="#253E4F" stroke-width="2"/>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-start align-items-center img">
                <img src="<?= asset('images/backgrounds/componentes.png') ?>" alt="">
            </div>
        </div>
    </section>
    <section class="produtos">
        <div class="row">
            <!-- Swiper -->
            <div class="swiper mySwiper-produtos">
                    <div class="swiper-wrapper">
                    <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide">
                            <div class="col-12 conteudo">
                                <div class="d-flex justify-content-center">
                                    <h2>Big</h2>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= url('produtos') ?>" class="position">Ver mais 
                                        <svg width="" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 13L7 7L1 1" stroke="#FF3C01" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center">
                                     <a href="<?= url('produtos') ?>">
                                         <img src="<?= asset('images/banners/cadeira-pequena.svg') ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Swiper -->
        </div>
    </section>
    <section class="areas2 areas3">
    <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-12 conteudo">
                <div class="d-flex justify-content-start align-items-center">
                    <h2>Corporativo</h2>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <p>Conheça a nossa linha completa de produtos para o setor corporativo</p>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="<?= url('produtos') ?>">
                        <button class="btn btn-custom2"><span>Linha completa</span>
                            <svg width="22"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L5 5L1 1" stroke="#253E4F" stroke-width="2"/>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-start align-items-center img">
                <img src="<?= asset('images/backgrounds/componentes.png') ?>" alt="">
            </div>
        </div>
            <div class="em-breve"></div>
    </section>
    <section class="areas4">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-12 conteudo">
                    <div class="d-flex justify-content-start align-items-center">
                        <h2>Personalização</h2>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <p>Adquira produtos perfeitos para a sua necessidade</p>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="btn btn-custom2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span>Personalize produtos</span>
                        <svg width="22"  class="ms-0-50" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="#FF6A00" stroke-width="2"/>
                        </svg>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-start align-items-center img">
                    <img src="<?= asset('images/backgrounds/cadeiras.png') ?>" alt="">
                </div>
            </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Orçamento</h2>
                        <div class="flex-column inputs">
                            <input type="text" class="form-control" placeholder="Nome completo *">
                            <input type="text" class="form-control" placeholder="E-mail *">
                            <input type="text" class="form-control mask-telefone" placeholder="Telefone">
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="modal-body2">
                            <div class="d-flex personalizar">
                                <h2>Quer personalizar seu produto?</h2>
                                    <label class="switch mt-1 ms-1">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                            </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12 ps-0 pe-lg-1 pe-0">
                                            <div class="textarea-wrapper">
                                                <textarea  maxlength="100" class="form-control" id="myTextarea" name="" placeholder="Frase desejada"
                                                cols="30" rows="10"></textarea>
                                            <div id="charCount"></div>
                                        </div>
                                        <div class="input-group mt-1 select-custom">
                                            <span class="input-group-text" id="basic-addon1">Cor Desejada</span>
<!--
<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
<option value="1">Opção 1</option>
<option value="2">Opção 2</option>
<option value="3">
<img src="<?= asset('/images/icones/bolinha.png') ?>" alt="">    
Opção 3</option>
<option value="4">Opção 4</option>
</select> --> 
                                                <select class="selectpicker position-relative input-group form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: #000'></div>Preto</div>">opa</option>
                                                    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: red'></div>Vermelho</div>"></option>
                                                    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: gray'></div>Cinza</div>"></option>
                                                    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: green'></div>Verde</div>"></option>
                                                    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: orange'></div>Laranja</div>"></option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-lg-6 col-12 pe-0 ps-lg-1 ps-0">
                                        <div class="custom-file-input">
                                            <label for="file-input"></label>
                                            <input type="file" id="file-input" name="file">
                                        </div>
                                    </div>
                                    <div class="col-12 poltica-privacidade">
                                        <div class="d-flex">
                                        <input type="checkbox" class="me-1">

                                            <h6 class="mt-0-50">Li e aceito os termos da <span>Política de Privacidade</span> da RealPlast</h6>
                                        </div>
                                        <button class="btn btn-custom2">Enviar</button>
                                    </div>
                                </div>
                        </div>  
                    </div>
                    <!--<div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>-->
                    </div>
                </div>
                </div>
    </section>
</main>

<script>
const textarea = document.getElementById("myTextarea");
const charCount = document.getElementById("charCount");

function countChars() {
  charCount.innerHTML = `${textarea.value.length}/${textarea.maxLength}`;
}

countChars();

textarea.addEventListener("input", () => {
  countChars();
});

window.addEventListener("resize", () => {
  positionCharCount();
});

window.addEventListener("load", () => {
  positionCharCount();
});

function positionCharCount() {
  const textareaRect = textarea.getBoundingClientRect();
  charCount.style.left = `${textareaRect.right - charCount.offsetWidth}px`;
  charCount.style.top = `${textareaRect.bottom - charCount.offsetHeight}px`;
}
</script>