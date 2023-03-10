<footer class="footer">
    <div class="footer-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-12 d-flex align-items-center justify-content-start logo-footer " >
                    <img src="<?= asset('/images/logos/logo.svg') ?>"  alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 col-12 d-flex align-items-center justify-content-center links-site-div">
                    <ul class="links-site p-0">
                        <li><a href="<?= url('empresa') ?>">Home</a></li>
                        <li><a href="<?= url('produtos') ?>">Sobre nós</a></li>
                        <li><a href="<?= url('produtos') ?>">Produtos</a></li>
                        <li><a href="<?= url('treinamentos') ?>">Contato</a></li>
                    </ul>
                </div>
                <div
                    class="col-lg-5 col-md-5 col-sm-6 col-xs-12 col-12 d-flex align-items-center justify-content-center">
                    <ul class="infos p-0">
                        <li>
                            <a href="https://www.google.com.br/maps/place/Realplast+Componentes+Pl%C3%A1sticos/@-29.1563468,-51.1958414,17z/data=!3m1!4b1!4m6!3m5!1s0x951ebd4caa78dbd3:0xff7fe17ae4689837!8m2!3d-29.1563516!4d-51.1913567!16s%2Fg%2F11hd6zltmz" target="_blank">
                                <img src="<?= asset('/images/icones/localizacao.svg') ?>" alt="">
                            Av. Rosseti, 490 - Caxias do Sul - RS
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?= asset('/images/icones/telefone.svg') ?>" alt="">
                            <a href="">54 3771-4771</a> | <a href="">54 3771-3209</a>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                 <img src="<?= asset('/images/icones/email.svg') ?>" alt="">
                               realplast@realplast.com.br
                                </a>
                            </li>
                    </ul>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12 col-12 d-flex align-items-center justify-content-center">
                    <ul class="infos redes p-0">
                        <li><a href="" target="_blank"><img src="<?= asset('/images/icones/instagramm.svg') ?>"alt=""></a>
                        </li>
                        <li><a href="" target="_blank"><img src="<?= asset('/images/icones/instagram.svg') ?>" alt=""></a>
                        </li>
                        <li><a href="" target="_blank"><img src="<?= asset('/images/icones/youtube.svg') ?>"alt=""></a>
                        </li>
                        <li><a href="" target="_blank"><img src="<?= asset('/images/icones/linkedin.svg') ?>"alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="linha">
            <div class="container">
                <div class="row copyright">
                    <div class="col-lg-7 col-md-12 col-12  d-flex justify-content-center direitos">
                        Copyright @ <?= date('Y') ?> Realplast Componentes. Todos os direitos reservados. CNPJ 00.000.000/0000-00
                    </div>
                    <div class="col-lg-3 col-md-6 politica col-12">
                        <a href="">Política de privacidade</a>
                    </div>
                    <div class="col-lg-1 col-md-6 logo-ellite col-12">
                        <a href="" class="w-100">
                             <img src="<?= asset('/images/logos/logo-ellite.svg') ?>" width="100px" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>





<?php /* ==== Scripts ==== */ ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= asset('js/vendors/jquery.mask.min.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php /* Adicionar no footer logo abaixo do bootstrap.bundle.min.js */ ?>

<?php 
/* Scripts opcionais
// GSAP
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
*/ ?>

<script src="<?= asset('js/vendors/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
/* ==== Arquivo para o pessoal do back end ==== 
<script src="<?= asset('js/custom.js') ?>"></script>  
*/ ?>

</body>

</html>