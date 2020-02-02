<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pice
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
         <!-- Header Top Part -->
         <header>
             <div class="header-area">
                 <div class="container">
                     <div class="row align-items-center">
                         <div class="col-xl-3">
                             <div class="logo">
                                 <?php  if('custom-logo'): ?>
                                 <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php  the_custom_logo(); ?>
                                 </a>
                                 <?php endif; ?>
                             </div>
                         </div>
                         <div class="col-xl-7">
                           <div class="main-menu">
                               <nav>
                                   <?php  
                                    wp_nav_menu(array(
                                      'theme_location' => 'menu-1'
                                    ));
                                   ?>
                               </nav>
                           </div>
                         </div>
                         <div class="col-xl-2">
                          <div class="sign-up">
                              <button type="button" class="btn">Sign Up</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</header>