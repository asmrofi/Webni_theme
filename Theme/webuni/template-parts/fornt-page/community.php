 <!-- banner section -->
 <section class="banner-section spad">
     <div class="container">
         <div class="section-title mb-0 pb-2">
             <h2>
                 <?php
                    global $webuni;
                    echo wp_kses_post($webuni['title-com']);
                ?>
             </h2>
             <p>
                 <?php
                    global $webuni;
                    echo wp_kses_post($webuni['des-com']);
                ?>
             </p>
         </div>
         <div class="text-center pt-5">
             <a href="<?php
                        global $webuni;
                        echo wp_kses_post($webuni['cbutton-url']);
                    ?>" class="site-btn">
                 <?php
                    global $webuni;
                    echo wp_kses_post($webuni['com-button']);
                ?>
             </a>
         </div>
     </div>
 </section>
 <!-- banner section end -->
