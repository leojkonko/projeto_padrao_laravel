<footer class="footer pt-2 pt-lg-4 overflow-hidden text-center text-lg-start <?= $pagina_atual === 'home' ? ''  : 'interno' ?>">
    <div class="row g-1">
        <div class="col-lg-3 col-xxl-4">
            <div class="logo-wrapper bg-white py-2 d-flex justify-content-center align-items-center h-100">
                <a href="<?= url('/') ?>" class="logo d-block">
                    <img class="w-100 h-100" src="<?= asset("images/logos/logo_red.svg") ?>" alt="Logo FPM Máquinas">
                </a>
            </div>
        </div>
        <div class="col-lg-9 col-xxl-8 h-100">
            <div class="info bg-white px-4 py-3">
                <div class="row gy-2 gy-lg-0">
                    <div class="col-lg-2">
                        <ul class="p-0 mb-0 list-unstyled d-flex flex-column">
                            <li>
                                <a class="link" href="<?= url('/sobre') ?>">Sobre</a>
                            </li>
                            <li>
                                <a class="link" href="<?= url('/produtos') ?>">Produtos</a>
                            </li>
                            <li>
                                <a class="link" href="<?= url('/servicos') ?>">Serviços</a>
                            </li>
                            <li>
                                <a class="link" href="<?= url('/blog') ?>">Blog</a>
                            </li>
                            <li>
                                <a class="link" href="<?= url('/contato') ?>">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <ul class="contact p-0 mb-0 list-unstyled d-flex flex-column gap-1">
                            <li>
                                <a href="" target="_blank" class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start gap-0-50">
                                    <svg class="flex-0" width="1.25em" height="1.25em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4C7.58297 4 4 7.23436 4 11.2216C4 17.6161 12 24 12 24C12 24 20 17.6161 20 11.2216C20 7.23436 16.417 4 12 4ZM12 14.3287C10.0969 14.3287 8.558 12.9396 8.558 11.2216C8.558 9.50371 10.0969 8.11453 12 8.11453C13.9031 8.11453 15.442 9.50371 15.442 11.2216C15.442 12.9396 13.9031 14.3287 12 14.3287Z" fill="#C81211" />
                                    </svg>
                                    Rua Pernambuco, Nº 172
                                    Bairro Vila Santa Helena, Marau-RS
                                </a>
                            </li>
                            <li class="d-flex flex-column flex-lg-row align-items-center gap-0-50">
                                <svg width="1.25em" height="1.25em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9669 18.8199C20.4911 18.5892 18.0777 17.4357 17.6358 17.271C17.16 17.1062 16.854 17.0073 16.5141 17.5016C16.1742 17.963 15.2565 19.0506 14.9505 19.3801C14.6786 19.6767 14.3727 19.7427 13.8968 19.479C13.387 19.2483 11.8234 18.754 9.91989 17.1062C8.45828 15.8538 7.47254 14.272 7.16662 13.8106C6.89469 13.3162 7.13263 13.0855 7.37057 12.8219C7.6085 12.6242 7.84644 12.2616 8.11837 11.998C8.3563 11.7343 8.45828 11.5366 8.62823 11.207C8.79819 10.9104 8.7302 10.6138 8.59424 10.3831C8.49227 10.1525 7.50653 7.77962 7.09864 6.8239C6.69075 5.90113 6.28286 6.03296 5.97694 6C5.70501 6 5.3651 6 5.02519 6C4.71927 6 4.17542 6.13182 3.73354 6.59321C3.25766 7.08755 2 8.24101 2 10.5809C2 12.9208 3.76753 15.1947 4.00546 15.5243C4.2434 15.8538 7.47254 20.6654 12.4012 22.7417C13.5909 23.236 14.5087 23.5326 15.2225 23.7303C16.4122 24.0928 17.4659 24.0269 18.3156 23.8951C19.2674 23.7633 21.2389 22.7416 21.6468 21.6211C22.0546 20.5336 22.0546 19.5779 21.9187 19.3801C21.8167 19.1824 21.4768 19.0506 20.9669 18.8199Z" fill="#C81211" />
                                </svg>
                                <a href="tel:+55" class="d-flex">
                                    (54) 3342-6410
                                </a>
                                <span class="d-none d-lg-block">|</span>
                                <a href="tel:+55" class="d-flex">
                                    (54) 99933-0073
                                </a>
                            </li>
                            <li>
                                <a href="mailto:" class="d-flex flex-column flex-lg-row align-items-center gap-0-50">
                                    <svg width="1.25em" height="1.25em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.46565 10.76L11.1145 14.968C11.6641 15.384 12.3511 15.384 12.9008 14.968L18.5496 10.76M2 8.936V21.064C2 22.136 2.71756 23 3.61832 23H20.3817C21.2672 23 22 22.136 22 21.064V8.936C22 7.864 21.2824 7 20.3817 7H3.61832C2.71756 7 2 7.864 2 8.936Z" stroke="#C81211" stroke-width="2" stroke-miterlimit="10" />
                                    </svg>
                                    fpm@fpmmaquinas.com.br
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex flex-column align-items-center align-items-lg-start justify-content-center">
                        <span class="text-light-dark">
                            Acesse as nossas<br>
                            <b>Redes Sociais:</b>
                        </span>
                        <ul class="social p-0 mb-0 list-unstyled d-flex align-items-center gap-0-50 mt-1">
                            <?php /* Instagram */ ?>
                            <li>
                                <a href="" target="_blank">
                                    <svg id="instagram" width="1.5em" height="1.5em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M128.025 70.0565C95.9521 70.0565 70.0817 95.9268 70.0817 128C70.0817 160.073 95.9521 185.944 128.025 185.944C160.098 185.944 185.969 160.073 185.969 128C185.969 95.9268 160.098 70.0565 128.025 70.0565ZM128.025 165.671C107.299 165.671 90.3544 148.777 90.3544 128C90.3544 107.223 107.248 90.3291 128.025 90.3291C148.802 90.3291 165.696 107.223 165.696 128C165.696 148.777 148.752 165.671 128.025 165.671V165.671ZM201.854 67.6863C201.854 75.2003 195.803 81.2014 188.339 81.2014C180.825 81.2014 174.824 75.1498 174.824 67.6863C174.824 60.2227 180.875 54.1711 188.339 54.1711C195.803 54.1711 201.854 60.2227 201.854 67.6863ZM240.231 81.4031C239.374 63.2989 235.238 47.2623 221.976 34.0498C208.763 20.8372 192.726 16.702 174.622 15.7943C155.963 14.7352 100.037 14.7352 81.378 15.7943C63.3242 16.6516 47.2876 20.7868 34.0246 33.9993C20.7616 47.2119 16.6769 63.2485 15.7691 81.3527C14.7101 100.012 14.7101 155.938 15.7691 174.597C16.6264 192.701 20.7616 208.738 34.0246 221.95C47.2876 235.163 63.2737 239.298 81.378 240.206C100.037 241.265 155.963 241.265 174.622 240.206C192.726 239.348 208.763 235.213 221.976 221.95C235.188 208.738 239.323 192.701 240.231 174.597C241.29 155.938 241.29 100.062 240.231 81.4031V81.4031ZM216.126 194.617C212.192 204.502 204.577 212.116 194.643 216.1C179.766 222.001 144.465 220.639 128.025 220.639C111.585 220.639 76.2341 221.95 61.4079 216.1C51.5237 212.167 43.9088 204.552 39.9249 194.617C34.0246 179.741 35.3862 144.44 35.3862 128C35.3862 111.56 34.075 76.2089 39.9249 61.3826C43.8584 51.4984 51.4732 43.8835 61.4079 39.8996C76.2846 33.9993 111.585 35.3609 128.025 35.3609C144.465 35.3609 179.816 34.0498 194.643 39.8996C204.527 43.8331 212.142 51.448 216.126 61.3826C222.026 76.2593 220.664 111.56 220.664 128C220.664 144.44 222.026 179.791 216.126 194.617Z" />
                                    </svg>
                                </a>
                            </li>
                            <?php /* Facebook */ ?>
                            <li>
                                <a href="" target="_blank">
                                    <svg id="facebook_rounded" width="1.5em" height="1.5em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M241 128.682C241 66.4341 190.423 16 128 16C65.5766 16 15 66.4341 15 128.682C15 184.922 56.3225 231.54 110.344 240V161.255H81.6381V128.682H110.344V103.855C110.344 75.6167 127.203 60.0185 153.024 60.0185C165.39 60.0185 178.321 62.2176 178.321 62.2176V89.9336H164.069C150.035 89.9336 145.656 98.621 145.656 107.531V128.682H176.996L171.983 161.255H145.656V240C199.678 231.54 241 184.922 241 128.682Z" />
                                    </svg>
                                </a>
                            </li>
                            <?php /* Youtube */ ?>
                            <li>
                                <a href="" target="_blank">
                                    <svg id="youtube" width="1.5em" height="1.5em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M236.278 73.4103C233.678 63.6235 226.02 55.9157 216.297 53.3C198.672 48.5469 128 48.5469 128 48.5469C128 48.5469 57.3282 48.5469 39.7033 53.3C29.9798 55.9161 22.3217 63.6235 19.7225 73.4103C15 91.1494 15 128.16 15 128.16C15 128.16 15 165.171 19.7225 182.911C22.3217 192.697 29.9798 200.084 39.7033 202.7C57.3282 207.453 128 207.453 128 207.453C128 207.453 198.672 207.453 216.297 202.7C226.02 200.084 233.678 192.697 236.278 182.911C241 165.171 241 128.16 241 128.16C241 128.16 241 91.1494 236.278 73.4103V73.4103ZM104.886 161.764V94.5572L163.954 128.161L104.886 161.764V161.764Z" />
                                    </svg>
                                </a>
                            </li>
                            <?php /* LinkedIn */ ?>
                            <li>
                                <a href="" target="_blank">
                                    <svg id="linkedin_square" width="1.5em" height="1.5em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M224.857 15H31.0924C22.2138 15 15 22.3147 15 31.2942V224.706C15 233.685 22.2138 241 31.0924 241H224.857C233.736 241 241 233.685 241 224.706V31.2942C241 22.3147 233.736 15 224.857 15ZM83.3045 208.714H49.808V100.86H83.3549V208.714H83.3045ZM66.5562 86.1295C55.8112 86.1295 47.1344 77.4022 47.1344 66.7076C47.1344 56.0129 55.8112 47.2857 66.5562 47.2857C77.2509 47.2857 85.9781 56.0129 85.9781 66.7076C85.9781 77.4527 77.3013 86.1295 66.5562 86.1295V86.1295ZM208.866 208.714H175.369V156.25C175.369 143.739 175.117 127.647 157.965 127.647C140.511 127.647 137.837 141.267 137.837 155.342V208.714H104.341V100.86H136.475V115.59H136.929C141.419 107.115 152.366 98.1862 168.66 98.1862C202.56 98.1862 208.866 120.534 208.866 149.591V208.714V208.714Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright py-1 d-flex flex-column flex-lg-row gap-0-50 align-items-center justify-content-between">
            <small>Copyright &copy <?= date('Y') ?> FPM Máquinas. Todos os direitos reservados. CNPJ 00.000.000/0000-00</small>
            <a href="<?= url('politica-de-privacidade') ?>" target="_blank" class="small text-decoration-underline">Política de Privacidade</a>
            <a href="https://www.ellitedigital.com.br" title="Ellite Digital - Cria&ccedil;&atilde;o de Sites e Marketing Digital" target="_blank" rel="nofollow noopener noreferrer">
                <img src="https://www.ellitedigital.com.br/logo-sites/logo-ellite-white.svg" alt="Ellite Ag&ecirc;ncia Digital" width="80" height="18">
            </a>
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