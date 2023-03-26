<?php
/*
Template Name: Leadership Summer Camp Registration
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="section-standard course-section">
                <div class="content" style="max-width: 470px;width: 100%;">
                    <p><strong>Course Name:</strong>Attunement Leadership Summer Camp</p>
                    <p><strong>Duration:</strong>1 Day</p>
                    <p><strong>Date and Time:</strong>August 26, 2022 10:00am-3:30pm CST</p>
                    <p><strong>Location:</strong>Virtual</p>
                    <p>$299/participant (early bird price until Aug 12)<br>$349 (regular pricing Aug 13-Aug 22)*Registration closes Aug 22</p>
                </div>
            </div>


            <div class="form-wrap form-wrap-padding">
                <?php echo do_shortcode('[contact-form-7 id="890" title="Summer Leadership Camp"]') ?>
            </div>


            <div class="section-standard course-section">
                <div class="content" style="max-width: 470px;width: 100%;">
                    <p><strong>Course Name:</strong>Attunement Leadership Summer Camp</p>
                    <p><strong>Duration:</strong>1 Day</p>
                    <p><strong>Date and Time:</strong>August 26, 2022 10:00am-3:30pm CST</p>
                    <p><strong>Location:</strong>Virtual</p>
                    <p>$299/participant (early bird price until Aug 12)<br>$349 (regular pricing Aug 13-Aug 22)*Registration closes Aug 22</p>
                </div>
            </div>

            <?php echo the_content(); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
