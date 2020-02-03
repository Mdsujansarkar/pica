<div class="easi-section pt-100">
<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="bg-images">
                <?php global $pice; ?>
                <img src="<?php echo esc_url($pice['easy-image-back']['url']); ?>" alt="">
            </div>
            <div class="cran-image wow animated bounceInLeft delay-1.5s slower">
                <img src="<?php echo esc_url($pice['easy-image-front']['url']); ?>" alt="">
            </div>
        </div>
        <div class="col-xl-6">
        <div class="easy-whole">
                <div class="easy-image">
                    <img src="<?php echo esc_url($pice['easy-image-front-small']['url']); ?>" alt="">
                </div>
                <div class="main-headr pt-25 animated bounce delay-1s">
                    <h1><?php echo esc_attr($pice['easy-headin-text']); ?></h1>
                </div>
                <div class="hero-subtitle pt-20 wow animated bounceInLeft delay-1.5s slower">
                    <p><?php echo esc_attr($pice['easy-headin-subtext']); ?></p>
                </div>
                <div class="hero-button pt-20">
                    <button type="button" href="<?php echo esc_url($pice['easy-button-link']); ?>" class="hero-btn"><?php echo esc_attr($pice['easy-button-text']); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>