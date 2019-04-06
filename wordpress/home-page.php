<?php
/**
 * The template for Home
 *
  * @package wordpress
 */

get_header();
?>

            <section class="welcome">
                <div class="wrapper">
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
                        <div id="gallery">
                            <ul class="photos">
                                <li class="item-block-img active">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/welcome_img.jpg" alt="photo">
                                </li>

                            </ul>
                        </div>
                            <div class="btn-counter-block">
                                <div class="buttons">
                                    <a class="prev">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <a class="next">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <div class="pagination">

                    </div>
                </div>
            </section>
            <div class="portfolio">
                <div class="container">
                    <div class="filtr">
                        <input type="radio" id="actor" name="profi"/>
                        <label for="blue">Actor</label>
                        <input type="radio" id="musician" name="profi"/>
                        <label for="red">Musician</label>
                        <input type="radio" id="comedian" name="profi"/>
                        <label for="green">Comedian</label>
                        <input type="radio" id="model" name="profi"/>
                        <label for="reset">Model</label>
                        <input type="radio" id="all" name="profi"/>
                        <label for="reset">All</label>
                    </div>
                    <div class="portfolio-photos">
                        <div class="tile actor"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo">
                        </div>
                        <div class="tile musician"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                        <div class="tile comedian"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                        <div class="tile model"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                        <div class="tile model"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                        <div class="tile model"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                        <div class="tile comedian"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                        <div class="tile actor"><img src="<?php bloginfo('template_url'); ?>/assets/img/welcome/photo.jpg" alt="photo"></div>
                    </div>
                    <div class="btn-box">
                        <a class="btn" href="#">explore more</a>
                    </div>

                </div>
            </div>
            <section class="news">
                <div class="container">
                    <h2>
                        Latest News
                    </h2>
                    <div class="news-box">
                        <?php $args = array('post_type' => 'news', 'news_per_page' => 3);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            echo '<div class="one_new"><figure>';
                            the_post_thumbnail('', array('class' => 'news-img'));
                            echo '</figure>';
                            echo '<div class="news-content"><h3>';
                            the_title();
                            echo '</h3>';
                            the_date();
                            echo '</div></div>';
                        endwhile;
                        ?>
                    </div>
                </div>
            </section>

     <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>



<?php
get_footer();
?>