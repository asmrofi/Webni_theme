 <!-- search section -->
 <section class="search-section">
     <div class="container">
         <div class="search-warp">
             <div class="section-title text-white">
                 <h2>
                     <?php
                        global $webuni;
                        echo wp_kses_post($webuni['search-title']);
                    ?>
                 </h2>
             </div>
             <div class="row">
                 <div class="col-md-10 offset-md-1">
                     <!-- search form -->
                     <form class="course-search-form">
                         <input type="text" placeholder="Course">
                         <input type="text" class="last-m" placeholder="Category">
                         <a href="<?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['search-buttonurl']);
                                    ?>" class="site-btn">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['search-button']);
                            ?>
                         </a>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- search section end -->
