<?php
/*
 * Template Name: Startup template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main investor-page" role="main">

    <?php get_template_part('template-parts/sections/section-hero'); ?>

    <div class="section-info investor-info">
        <div class="small-container">
            <div class="section-info__flex">
                <div class="section-info__headline-wrapper">
                    <div class="section-info__headline"><?php the_field('section_startup_-_title'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="investor-wrapper">
        <div class="investor-contant investor-contant__large small-container">
            <?php
            if( have_rows('section_startup_-_columns') ):
                while ( have_rows('section_startup_-_columns') ) : the_row(); ?>
                    <div class="investor-col">
                        <div class="investor-col__inner">
                            <h3><?php the_sub_field('section_startup_-_column_title'); ?></h3>
                            <p><?php the_sub_field('section_startup_-_column_text'); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>

        <div class="investor-slider slick-slider">
            <?php
            if( have_rows('section_startup_-_columns') ):
                while ( have_rows('section_startup_-_columns') ) : the_row(); ?>
                    <div class="investor-col">
                        <div class="investor-col__inner">
                            <h3><?php the_sub_field('section_startup_-_column_title'); ?></h3>
                            <p><?php the_sub_field('section_startup_-_column_text'); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>

    <div class="section-info investor-info no-bg">
        <div class="small-container">
            <div class="section-info__flex">
                <div class="section-info__headline-wrapper">
                    <div class="section-info__headline"><?php the_field('section_investor_-_title'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="investor-wrapper no-bg">
        <div class="investor-contant investor-contant__large small-container">
            <?php
            if( have_rows('section_investor_-_columns') ):
                while ( have_rows('section_investor_-_columns') ) : the_row(); ?>
                    <div class="investor-col">
                        <div class="investor-col__inner">
                            <h3><?php the_sub_field('section_investor_-_column_title'); ?></h3>
                            <p><?php the_sub_field('section_investor_-_column_text'); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>

        <div class="investor-slider slick-slider">
            <?php
            if( have_rows('section_investor_-_columns') ):
                while ( have_rows('section_investor_-_columns') ) : the_row(); ?>
                    <div class="investor-col">
                        <div class="investor-col__inner">
                            <h3><?php the_sub_field('section_investor_-_column_title'); ?></h3>
                            <p><?php the_sub_field('section_investor_-_column_text'); ?></p>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
