<div class="produto-card d-flex flex-column shadow overflow-hidden bg-white rounded-3 h-100 position-relative">
    <div class="ratio ratio-16x9">
        <img class="object-fit-cover" src="//source.unsplash.com/600x600?product" alt="Title">
    </div>
    <div class="produto-card-body p-2">
        <h4 class="produto-card-title">
            <?= app()->faker->sentence(rand(5, 8)) ?>
        </h4>
        <p class="produto-card-description mb-0">
            <?= app()->faker->paragraph(rand(1, 8)) ?>
        </p>
    </div>
    <a href="<?php url('produto-detalhe') ?>" class="stretched-link" aria-label="Nome do produto"></a>
</div>