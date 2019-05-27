 <!-- course section -->
 <section class="course-section spad">
     <div class="container">
         <div class="section-title mb-0">
             <h2>
                 <?php
                    global $webuni;
                   echo wp_kses_post($webuni['f-title']);
                ?>
             </h2>
             <p>
                 <?php
                    global $webuni;
                   echo wp_kses_post($webuni['f-description']);
                ?>
             </p>
         </div>
     </div>
     <div class="course-warp">
         <ul class="course-filter controls">
             <li class="control active" data-filter="all">All</li>
             <li class="control" data-filter=".finance">Finance</li>
             <li class="control" data-filter=".design">Design</li>
             <li class="control" data-filter=".web">Web Development</li>
             <li class="control" data-filter=".photo">Photography</li>
         </ul>
         <div class="row course-items-area">
             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m1']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m1']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m1']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m1']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m1']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m1']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m1']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m1']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->

             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m2']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m2']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m2']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m2']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m2']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m2']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m2']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m2']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->


             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m12']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m12']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m12']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m12']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m12']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m12']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m12']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m12']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->

             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m22']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m22']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m22']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m22']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m22']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m22']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m22']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m22']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->

             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m3']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m3']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m3']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m3']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m3']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m3']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m3']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m3']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->

             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m4']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m4']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m4']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m4']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m4']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m4']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m4']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m4']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->


             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m32']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m32']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m32']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;echo wp_kses_post($webuni['description-m32']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m32']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m32']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m32']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m32']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->

             <!-- course -->
             <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                 <div class="course-item">
                     <div class="course-thumb set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                       echo wp_kses_post($webuni['image-m42']['url']);
                                                                    ?>">
                         <div class="price">
                             <?php
                                global $webuni;
                                echo wp_kses_post($webuni['price-m42']);
                            ?>
                         </div>
                     </div>
                     <div class="course-info">
                         <div class="course-text">
                             <h5>
                                 <?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['title-m42']);
                                ?>
                             </h5>
                             <p>
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['description-m42']);
                            ?>
                             </p>
                             <div class="students">
                                 <?php
                                global $webuni;
                                echo wp_kses_post($webuni['scount-m42']);
                            ?>
                             </div>
                         </div>
                         <div class="course-author">
                             <div class="ca-pic set-bg" data-setbg="<?php
                                                                        global $webuni;
                                                                        echo wp_kses_post($webuni['author-m42']['url']);
                                                                    ?>"></div>
                             <p><?php
                                    global $webuni;
                                    echo wp_kses_post($webuni['name-m42']);
                                    ?>,
                                 <span>
                                     <?php
                                        global $webuni;
                                        echo wp_kses_post($webuni['designation-m42']);
                                    ?>
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- course -->


         </div>
     </div>
 </section>
 <!-- course section end -->
