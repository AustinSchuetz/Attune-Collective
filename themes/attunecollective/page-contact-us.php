<?php
/*
Template Name: Contact Us
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="section-standard">
                <div class="content">
                    <h1 class="title-art">Contact Us</h1>
                </div>
            </div>


            <div class="form-wrap form-wrap-padding">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Us Form"]') ?>
            </div>
            <?php echo the_content(); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
