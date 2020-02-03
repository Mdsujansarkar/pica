<div class="hearo-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="main-headr wow animated bounceInUp delay-1s slower">
                <?php global $pice; ?>
                    <h1><span class="heading-color"><?php echo $pice['heading-text']; ?></span><?php echo esc_attr($pice['heading-text2']); ?></h1>
                </div>
                <div class="hero-subtitle pt-20 wow animated bounceInUp delay-2s slower">
                    <p><?php echo esc_attr($pice['heading-text3']); ?></p>
                </div>
                <div class="hero-button pt-20 wow animated bounceInUp delay-2s slower">
                    <button type="button" href="<?php echo esc_url($pice['button-link']); ?>" class="hero-btn"><?php echo esc_attr($pice['button-text']); ?></button>
                </div>
            </div>
            <div class="col-xl-7 pt-80 pb-120 wow bounceInRight delay-1s">
            <div class="hero-image">
                <img src="<?php echo esc_url($pice['hero-image']['url']);  ?>" alt="<?php echo esc_attr($pice['hero-alt-texts']); ?>">
            </div>
            </div>
        </div>
</div>
</div>