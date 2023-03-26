<?php
/*
Template Name: Our Services
*/

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="section-standard section-standard-services">
                <div class="content">
                    <h1 class="title-art">Our Services</h1>
                </div>
            </div>

            <div class="services-flex">
                <a href="/services/change-navigation-leadership-coaching/" class="service-item service-leader">
                    <h2>Change Navigation Leadership Coaching</h2>
                    <p>No other factor is as important as leadership to organization performance. Leadership behaviors affect organizational performance more than culture, strategy, processes or incentive systems.</p>
                    <p>Learn More <i class="fa fa-long-arrow-right"></i></p>
                </a>
                <a href="/services/building-high-thriving-teams/" class="service-item service-teams">
                    <h2>Building High Thriving Teams</h2>
                    <p>Teams are often treated solely as a structure of organization design, but they offer so much more than cross-functional or subject matter expertise configurations.</p>
                    <p>Learn More <i class="fa fa-long-arrow-right"></i></p>
                </a>
                <a href="/services/change-navigation/" class="service-item service-change-nav">
                    <h2>Change Navigation</h2>
                    <p>Our proprietary method builds on these reliable and well-tested methods and leverages advanced analytics and whole systems change methods, to navigate the complex change that your organization faces.</p>
                    <p>Learn More <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>

            <?php echo the_content(); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
