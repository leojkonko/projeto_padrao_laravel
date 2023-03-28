
<footer class="bg-primary py-4 text-white">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-start">
            <div class="col-lg-3 flex-column">
                <img width="270px" src="<?= asset('images/logos/logo.png') ?>" alt="">
            </div>
            <div class="col-lg-3 flex-column text-lg-start text-center">
                <h2 class="h2 w-100">Saiba como chegar</h2>
                <p class="p">BR 116, nº 2930, B. Primavera Novo Hamburgo-RS</p>
            </div>
            <div class="col-lg-3 flex-column text-lg-start text-center">
                 <h2 class="h2 w-100">Atendimento</h2>
                <p class="p">Segunda à sexta, 8h às 18h</p>
            </div>
            <div class="col-lg-3 flex-column text-lg-start text-center">
                 <h2 class="h2 w-100">Contato</h2>
                <p class="p">(51) 3587-2236
 contato@morbene.com.br</p>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class=" copyright col-lg-12 d-flex align-items-center py-2">
            <p class="p ms-auto">© 2023 Morbene Distribuidora</p>
            <p class="p margin-auto"><span>Política de privacidade</span></p>
            <p class="p me-auto">© 2023 Morbene Distribuidora</p>
        </div>
    </div>
</footer>

<?php /* ==== Scripts ==== */ ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= asset('js/vendors/jquery.mask.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js"></script>

<?php /* Scripts opcionais

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