<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="wrapper">
            <div class="footer-left">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/welcome/Logo.png" alt="logo-footer">
                <p>
                    &copy;<?php echo date('Y');?> MI Talent. Designed by Tranmautritam for Mass Impressions.
                </p>
            </div>
            <div class="footer-right">
                <div>
                    sign up our newsletter
                    <i class="far fa-envelope"></i>
                </div>
                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
