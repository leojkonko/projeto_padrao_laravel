<div class="blog-card d-flex flex-column shadow overflow-hidden bg-white rounded-3 h-100 position-relative">
    <div class="ratio ratio-16x9">
        <img class="object-fit-cover" src="//source.unsplash.com/600x600" alt="Title">
    </div>
    <div class="blog-card-body p-2">
        <span class="text-muted">08/08/2022</span>
        <h4 class="blog-card-title">
            <?= app()->faker->sentence(rand(5, 8)) ?>
        </h4>
        <p class="blog-card-description mb-0">
            <?= app()->faker->paragraph(rand(1, 8)) ?>
        </p>
    </div>
    <a href="<?php url('blog-detalhe') ?>" class="stretched-link" aria-label="Nome do produto"></a>
</div>