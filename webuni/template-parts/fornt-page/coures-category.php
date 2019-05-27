<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2>
                <?php
                    global $webuni;
                    echo wp_kses_post($webuni['opt-title']);
                ?>
            </h2>
            <p>
                <?php
                    global $webuni;
                    echo wp_kses_post($webuni['opt-description']);
                ?>
            </p>
        </div>
        <div class="row" <?php post_class(); ?>>
            <?php
                $args=array('post_type'=>'course_categories');
                $countt =new WP_Query($args);
                    while($countt->have_posts()):$countt->the_post()
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="<?php
                                                                $count = get_post_meta(get_the_ID() , 'c-image', true);
                                                                echo wp_kses_post($count);
                                                            ?>"></div>
                    <div class="ci-text">
                        <h5><?php the_title();?></h5>
                        <p><?php the_content();?></p>
                        <span>
                            <?php
                                $count = get_post_meta(get_the_ID() , 'c-count', true);
                                echo wp_kses_post($count);
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- categories section end -->
