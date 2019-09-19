<?php
/*
 * Template Name: About template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main about-page" role="main">

    <?php get_template_part('template-parts/sections/section-hero'); ?>

    <div id="info">
        <?php get_template_part('template-parts/sections/section-info'); ?>
    </div>

    <div class="we-want">
        <div class="small-container we-want__wrapper">
            <div class="we-want__col image-col" style="background-image: url(<?php the_field('section_we_want_-_image'); ?>)"></div>
            <div class="we-want__col text-col">
                <h3><?php the_field('section_we_want_-_title'); ?></h3>
                <p><?php the_field('section_we_want_-_text'); ?></p>
            </div>
        </div>
    </div>

    <div class="about-contact">
        <div class="small-container we-want__wrapper">
            <div class="we-want__col form-col">
                <h3><?php the_field('section_form_-_form_title'); ?></h3>
                <?php echo do_shortcode('[contact-form-7 id="125" title="Contact us"]');?>
            </div>

            <div class="we-want__col info-col">
                <?php
                if( have_rows('column_info') ):
                    while ( have_rows('column_info') ) : the_row(); ?>
                        <div class="item-info">
                            <div class="item-info__inner">
                                <h3><?php the_sub_field('contact_info_-title'); ?></h3>
                                <p><?php the_sub_field('contact_info_-_text'); ?></p>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>


</main>

<?php get_footer(); ?>
