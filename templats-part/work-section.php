<div class="how-to-works">
                 <div class="container pt-150 pb-80">
                     <div class="row pb-80">
                         <div class="col-xl-12">
                             <div class="how-it-works-main-heading text-center wow animated bounce delay-1.5s slower">
                             <?php global $pice; ?>
                                 <h2><?php echo esc_attr($pice['work-main-heading']); ?></h2>
                                 <p><?php echo esc_attr($pice['work-main-heading-subtitle']); ?></p>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-xl-4">
                           <div class="work-items wow animated bounceInRight delay-1.5s slower">
                               <div class="work-item-image pt-30">
                                <img src="<?php echo esc_url($pice['work-image']['url']);  ?>" alt="">
                               </div>
                               <div class="work-item-heading pt-15">
                                   <h3><?php echo esc_attr($pice['work-main-heading-one']); ?></h3>
                               </div>
                               <div class="work-item-text pt-15 pb-25">
                                   <p><?php echo esc_attr($pice['work-main-sub-one']); ?> </p>
                               </div>
                           </div>
                         </div>
                         <div class="col-xl-4">
                            <div class="work-items wow animated bounceInDown delay-1.5s slower">
                            <div class="work-item-image pt-30">
                                <img src="<?php echo esc_url($pice['work-image-two']['url']);  ?>" alt="">
                               </div>
                               <div class="work-item-heading pt-15">
                                   <h3><?php echo esc_attr($pice['work-main-heading-two']); ?></h3>
                               </div>
                               <div class="work-item-text pt-15 pb-25">
                                   <p><?php echo esc_attr($pice['work-main-sub-two']); ?> </p>
                               </div>
                               <div class="read-more pb-25">
                                   <a href="<?php echo esc_url($pice['work-link-readmore']); ?>">read more</a>
                               </div>
                           </div>
                         </div>
                         <div class="col-xl-4">
                         <div class="work-items wow animated bounceInRight delay-1.5s slower">
                               <div class="work-item-image pt-30">
                                <img src="<?php echo esc_url($pice['work-image-three']['url']);  ?>" alt="">
                               </div>
                               <div class="work-item-heading pt-15">
                                   <h3><?php echo esc_attr($pice['work-main-heading-three']); ?></h3>
                               </div>
                               <div class="work-item-text pt-15 pb-25">
                                   <p><?php echo esc_attr($pice['work-main-sub-three']); ?> </p>
                               </div>
                           </div>
                         </div>
                     </div>
                 </div>
             </div>