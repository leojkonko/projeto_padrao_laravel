<?php /* Adicionar no head logo abaixo do bootstrap.css */ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php /* Adicionar no footer logo abaixo do bootstrap.bundle.min.js */ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php /* Criar essa classe no css */ ?>
<style>
    .circle-color {
        width: 1rem;
        height: 1rem;
        display: block;
        border-radius: $border-radius-pill;
    }
</style>

<?php /* Utilizar o select dentro do formulario */ ?>
<select class="selectpicker position-relative">
    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: #000'></div>Preto</div>"></option>
    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: red'></div>Vermelho</div>"></option>
    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: gray'></div>Cinza</div>"></option>
    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: green'></div>Verde</div>"></option>
    <option data-content="<div class='d-flex align-items-center gap-0-50'><div class='circle-color' style='background-color: orange'></div>Laranja</div>"></option>
</select>