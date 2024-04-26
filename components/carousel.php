<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <?php $img = get_theme_mod("carousel_image_$i"); ?>
            <?php if ($img): ?>
                <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                    <img src="<?php echo esc_url($img); ?>" class="d-block w-100" alt="Slide <?php echo $i; ?>">
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>