<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webuni
 */

?>


<!-- footer section -->
<footer class="footer-section spad pb-0">
    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">


                <?php if ( is_active_sidebar( 'footer-1' )  ) {
                        dynamic_sidebar( 'footer-1' );
                    }
		          ?>


                <?php if ( is_active_sidebar( 'footer-2' )  ) {
                        dynamic_sidebar( 'footer-2' );
                    }
		          ?>

                <?php if ( is_active_sidebar( 'footer-3' )  ) {
                        dynamic_sidebar( 'footer-3' );
                    }
		          ?>

                <?php if ( is_active_sidebar( 'footer-4' )  ) {
                        dynamic_sidebar( 'footer-4' );
                    }
		          ?>


                <?php if ( is_active_sidebar( 'footer-5' )  ) {
                        dynamic_sidebar( 'footer-5' );
                    }
		          ?>


            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-warp">
            <ul class="footer-menu">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
            <div class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script>
                <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'webuni' ), 'webuni', '<a href="https://www.facebook.com/abu.sayem.50702">A.S.M ROFI-UDDIN</a>' );
				?>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->


<!--====== Javascripts & Jquery ======-->

<?php wp_footer(); ?>
</body>

</html>
