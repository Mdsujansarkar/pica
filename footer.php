<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pice
 */

?>
<?php global $pice; ?>
<footer>
            <div class="main-footer">
                <div class="container">
                <?php if( $pice['opt-radio']== 3): ?>
                    <div class="row pt-80 pb-40">
                    <div class="col-md-3">
                        <?php if(is_active_sidebar('sidebar-1')): ?>
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php endif;?>
                    </div>
                        <div class="col-md-3">
                        <?php if(is_active_sidebar('sidebar-2')): ?>
                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        <?php endif;?>
                        </div>
                        <div class="col-md-3">
                        <?php if(is_active_sidebar('sidebar-3')): ?>
                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        <?php endif;?>
                        </div>
                        <div class="col-md-2">
                        <?php if(is_active_sidebar('sidebar-4')): ?>
                            <?php dynamic_sidebar( 'sidebar-4' ); ?>
                        <?php endif;?>
                        </div>
                    </div>
                <?php elseif($pice['opt-radio']== 2): ?>
                    <div class="row pt-80 pb-40">
                        <div class="col-md-4">
                        <?php if(is_active_sidebar('sidebar-1')): ?>
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php endif;?>
                        </div>
                        <div class="col-md-4">
                        <?php if(is_active_sidebar('sidebar-2')): ?>
                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        <?php endif;?>
                        </div>
                        <div class="col-md-4">
                        <?php if(is_active_sidebar('sidebar-3')): ?>
                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        <?php endif;?>
                        </div>
                    </div>
                <?php elseif($pice['opt-radio']== 1): ?>
                    <div class="row pt-80 pb-40">
                        <div class="col-md-6">
                        <?php if(is_active_sidebar('sidebar-1')): ?>
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php endif;?>
                        </div>
                        <div class="col-md-6">
                        <?php if(is_active_sidebar('sidebar-2')): ?>
                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        <?php endif;?>
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <?php global $pice; ?>
                        <div class="col-md-6">
                            <p><?php echo esc_attr($pice['copy-wright']); ?></p>
                        </div>
                        <div class="col-md-6">
                           <ul class="copy-right">
                               <li><a href="<?php echo esc_url($pice['link-1']); ?>"><?php echo esc_attr($pice['link-2']); ?></a></li>
                               <li><a href="<?php echo esc_attr($pice['link-3']); ?>"><?php echo esc_attr($pice['link-4']); ?></a></li>
                               <li><a href="<?php echo esc_attr($pice['link-5']); ?>"><?php echo esc_attr($pice['link-6']); ?></a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_footer();  ?>
        </footer>
    </body>
</html>
