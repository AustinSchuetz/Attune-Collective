<?php
/*
Template Name: Thought Leadership
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="section-standard section-standard-services">
                <div class="content">
                    <h1 class="title-art" style="width: 455px;max-width:100%;">Thought Leadership</h1>
                </div>
            </div>
<div class="home-blog">
            <div class="blog-wrap">
                <?php
                $today = current_time('Ymd');
                $args = array (
                    'nopaging'               => false,
                    'paged'                  => $paged,
                    'posts_per_page'         => 9,
                    'numberposts'   =>  9,
                    'category_name' => 'blog'
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
//                        echo '<div class="date">';
//                        echo get_the_date();
//                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                    }

                } else {
                    // no posts found
                    echo '<h1 class="page-title" style="color:#fff">No Articles Found</h1>';
                }

                // Restore original Post Data
                wp_reset_postdata(); ?>
            </div>
</div>
            <?php echo the_content(); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
