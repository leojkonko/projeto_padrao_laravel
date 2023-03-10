<footer class="footer">
    <div class="footer-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-12 d-flex align-items-center justify-content-center logo-footer">
                    <img src="<?= asset('/images/logos/logo.svg') ?>" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-12 d-flex align-items-center justify-content-center">
                    <ul class="links-site p-0">
                        <li><a href="<?= url('empresa') ?>">Empresa</a></li>
                        <li><a href="<?= url('produtos') ?>">Cores sólidas</a></li>
                        <li><a href="<?= url('produtos') ?>">Cores metálicas</a></li>
                        <li><a href="<?= url('treinamentos') ?>">Treinamentos</a></li>
                        <li><a href="<?= url('blog') ?>">Blog</a></li>
                        <li><a href="<?= url('contato') ?>">Contato</a></li>
                    </ul>
                </div>
                <div
                    class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-12 d-flex align-items-center justify-content-center">
                    <ul class="infos p-0">
                        <li>
                            <a href="https://www.google.com.br/maps/place/Dustech+-+Ind%C3%BAstria+e+Com%C3%A9rcio+de+Tintas+em+P%C3%B3/@-29.2193736,-51.5208998,17z/data=!3m1!4b1!4m6!3m5!1s0x951c3df1e6285cc1:0xf17d3d08347c6bc5!8m2!3d-29.2193783!4d-51.5187111!16s%2Fg%2F11jj4bgnsf" target="_blank">
                                <img src="<?= asset('/images/icones/localizacao.svg') ?>" alt="">
                            BR 470, Km222 | Pavilhão 1 - Garibaldina, Garibaldi - RS, 95720-000
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?= asset('/images/icones/telefone.svg') ?>" alt="">
                            +55
                            (54) 3698-6555
                            </a>
                        </li>
                        <li>
                            <a href="">
                                 <img src="<?= asset('/images/icones/email.svg') ?>" alt="">
                               contato@dustech.com.br
                                </a>
                            </li>
                    </ul>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-12 d-flex align-items-center justify-content-center">
                    <ul class="infos redes p-0">
                        <li><a href="" target="_blank"><img src="<?= asset('/images/icones/facebook.svg') ?>"alt=""></a>
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
        <div class="row copyright">
            <div class="col-lg-8 col-md-12 col-12  d-flex justify-content-center direitos">
                Copyright @ <?= date('Y') ?> Dustech Premium Powder Coating. Todos os direitos reservados. CNPJ 00.000.000/0000-00
            </div>
            <div class="col-lg-2 col-md-6 politica col-12">
                <a href="">Política de privacidade</a>
            </div>
            <div class="col-lg-2 col-md-6  logo-ellite col-12">
                <img src="<?= asset('/images/logos/logo-ellite.svg') ?>" alt="">
            </div>
        </div>
    </div>
</footer>

<style>
    @font-face {
        font-family: 'Archivo';
        src: url('../../../../webroot/site/src/fonts/Archivo-VariableFont_wdth\,wght.ttf') format('truetype');
    }
</style>

<?php /* ==== Scripts ==== */ ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= asset('js/vendors/jquery.mask.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php 

/* Scripts opcionais
// GSAP
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
*/ ?>

<script src="<?= asset('js/vendors/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>

<?php
/* ==== Arquivo para o pessoal do back end ==== 
<script src="<?= asset('js/custom.js') ?>"></script>  
*/ ?>

</body>

</html>