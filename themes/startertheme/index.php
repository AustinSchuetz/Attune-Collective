<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

get_header();
?>

	<div id="primary" class="content-area">
        
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-content">
                        <h2>Slide 1</h2>        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-content">
                        <h2>Slide 2</h2>         
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-content">
                        <h2>Slide 3</h2>        
                    </div>
                </div>
            </div>
            <img class="hero-icon-bg" src="/assets/OnePlusBackgroundIcon.png" alt="Company Icon Fade">
            <div class="swiper-pagination"></div>
            <div class="swiper-button swiper-button-prev"></div>
            <div class="swiper-button swiper-button-next"></div>
        </div>
        
        
        <div class="home-blog">
            <div class="subtitle-wrap">
                <h2>News or Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus dictum mauris et auctor. Fusce eu odio eget neque maximus bibendum. Morbi non dolor urna.</p>
            </div>
            <div class="blog-wrap">
                  <?php 
            $today = current_time('Ymd');
            $args = array (
            'nopaging'               => false,
            'paged'                  => $paged,
            'posts_per_page'         => 3,
                'numberposts'   =>  3,
                'category_name' => blog
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {



            while ( $query->have_posts() ) {
                $query->the_post();
                        echo '<div class="blog-item">';
                        echo '<a class="blog-link" href="';
                        echo the_permalink(). '">';
                        echo '<div class="blog-img" style="background: url(';
                        echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full")[0];
                        echo ')  50% 50% no-repeat; background-size: cover;width:100%;height:150px;"></div>';     
                        echo '<div class="blog-item-text">';    
                        echo '<div>';
                        echo '<h5>';
                        echo the_title(). '</h5>';
                        echo '<p>';     
                        echo the_excerpt();
                        echo '</p>';  
                        echo '</div>';
                        echo '<div class="date">';
                        echo get_the_date();
                        echo '</div>';         
                        echo '</div>';   
                        echo '</a>';
                        echo '</div>'; 
            }

        } else {
            // no posts found
            echo '<h1 class="page-title" style="color:#fff">No Blogs Found</h1>';
        }

        // Restore original Post Data
        wp_reset_postdata(); ?>
                    </div>
            
            <div class="btn-holder">
                <a class="cta-btn" href="/blog/">All Blogs</a>
            </div>
            
            
</div>
        
        
	</div><!-- #primary -->

<?php
get_footer();
