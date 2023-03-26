<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
					<h1 style="margin:50px auto 0;text-align:center;width:750px;max-width:100%;" class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'startertheme' ); ?></h1>

				<div class="page-content">
					<p style="margin:0 auto 50px;text-align:center;width:750px;max-width:100%;"><?php esc_html_e( 'It looks like nothing was found at this location.', 'attunecollective' ); ?></p>

					<?php 
    echo '<div class="search-header"><h1 class="search-title">Search: ';
    echo '<form class="searchpage-box-form" role="search" method="get" action="/">';
    echo '<input type="search" class="searchpage-box" value="';
    echo get_search_query();
    echo '" name="s" title="Search" />';
    echo '<button class="cta-btn search-btn" type="submit">Search</button>';    
    echo  '</form></h1></div>';
					?>

<!--                    <div style="margin:50px auto;text-align:center;width:750px;max-width:100%;">-->
<!--                    -->
<!--					--><?php
//					the_widget( 'WP_Widget_Tag_Cloud' );
//					?>
<!--                        -->
<!--                    </div>-->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
