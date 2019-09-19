<?php
/*
 * Template Name: Contact template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main contact-page" role="main">

    <div class="contact-wrapper">

        <div class="map-section">
            <div class="small-container">
                <div class="map-wrapper">
                    <?php echo do_shortcode('[google_map_easy id="1"]');?>
                </div>
                <div class="map-form">
                    <h1><?php the_field('section_form_-_title'); ?></h1>
                    <p><?php the_field('section_form_-_text'); ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="125" title="Contact us"]');?>
                </div>
            </div>
        </div>

        <div class="contact-info">
            <div class="small-container">
                <div class="contact-col">
                    <div class="col-inner">
                        <h3><?php the_field('column_email_-_title'); ?></h3>
                        <p><?php the_field('column_email_-_content'); ?></p>
                    </div>
                    <div class="col-inner">
                        <h3><?php the_field('column_phone_-_title'); ?></h3>
                        <p><?php the_field('column_phone_-_content'); ?></p>
                    </div>
                </div>
                <div class="contact-col">
                    <div class="col-inner">
                        <h3><?php the_field('column_adress_-_title'); ?></h3>
                        <p><?php the_field('column_adress_-_content'); ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
