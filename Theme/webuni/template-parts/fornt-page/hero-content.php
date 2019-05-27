<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="<?php
                                                    global $webuni;
                                                    echo wp_kses_post($webuni['h-image']['url']);
                                                ?>">
    <div class="container">
        <div class="hero-text text-white">
            <h2><?php bloginfo("name"); ?></h2>
            <p><?php bloginfo("description"); ?></p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form class="intro-newslatter">
                    <input type="text" placeholder="Name">
                    <input type="text" class="last-s" placeholder="E-mail">
                    <a href="<?php
                                global $webuni;
                                echo wp_kses_post($webuni['hbuttonurl']);
                           ?>" class="site-btn"><?php
                                                    global $webuni;
                                                    echo wp_kses_post($webuni['hbutton']);
                                                ?></a>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->
