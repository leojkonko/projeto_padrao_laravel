<main id="blog" class="py-3 py-lg-4">
    <div class="container">
        <div class="row g-1 g-xxl-2">
            <?php foreach(range(0, 7) as $i) : ?>
                <div class="col-6 col-lg-4 col-xl-3">
                    <?= element('blog/blog-card') ?>
                </div>
            <?php endforeach ; ?>
        </div>
    </div>
</main>