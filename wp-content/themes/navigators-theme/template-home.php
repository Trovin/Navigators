<?php
/*
 * Template Name: Home template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">
        <?php get_template_part('template-parts/sections/section-hero'); ?>

        <div id="info">
            <?php get_template_part('template-parts/sections/section-info'); ?>
        </div>

        <div class="section-developing">
            <div class="small-container small-container_developing">
                <div class="developing-wrapper">
                    <div class="developing-wrapper__headline"><?php the_field('section_developing_left_headline'); ?></div>
                    <?php
                    if( have_rows('section_developing_left_repeater') ):
                        while ( have_rows('section_developing_left_repeater') ) : the_row(); ?>
                            <div class="developing-item">
                                <div class="developing-item__inner">
                                    <span class="developing-item__dropped-text"><?php the_sub_field('section_developing_left_item'); ?></span>
                                    <span class="developing-item__dropped-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>

                                <div class="dropped-content">
                                    <?php the_sub_field('section_developing_left_dropped_item'); ?>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>

                <div class="developing-wrapper">
                    <div class="developing-wrapper__headline"><?php the_field('section_developing_right_headline'); ?></div>
                    <?php
                    if( have_rows('section_developing_right_repeater') ):
                        while ( have_rows('section_developing_right_repeater') ) : the_row(); ?>
                            <div class="developing-item">
                                <div class="developing-item__inner">
                                    <?php the_sub_field('section_developing_right_item'); ?>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>

        <div class="section-competencies">
            <div class="small-container">
                <div class="competencies-headline">
                    <?php
                    $i = 0;
                    if( have_rows('competencies_items') ):
                        while ( have_rows('competencies_items') ) : the_row(); ?>
                        <?php $i++; ?>
                        <?php endwhile;
                    endif; ?>
                    <div>
                        <div>
                            <span class="competencies-headline__counter"><?php echo $i; ?></span>
                            <span class="competencies-headline__info">
                                <div>
                                    <span class="counter-item--sm"><?php echo $i; ?></span>
                                    </span><?php the_field('competencies_headline_1'); ?>
                                </div>

                                <div>
                                    <span class="counter-item--sm"><?php echo $i; ?></span>
                                    <?php the_field('competencies_headline_2'); ?>
                                </div>
                            </span>
                        </div>
                        <span class="competencies-headline__decorator"></span>
                    </div>
                </div>

                <div class="competencies-flex">
                    <?php
                    if( have_rows('competencies_items') ):
                        while ( have_rows('competencies_items') ) : the_row(); ?>
                            <div class="competencies-item">
                                <img src="<?php the_sub_field('competencies_item_icon'); ?>" alt="competencies-item__image" class="competencies-item__image style-svg">
                                <div class="competencies-item__headline"><?php the_sub_field('competencies_headline'); ?></div>
                                <div class="competencies-item__description"><?php the_sub_field('competencies_description'); ?></div>
                            </div>
                        <?php endwhile;
                    endif; ?>

                    <?php
                    if( have_rows('competencie_link_item') ):
                        while ( have_rows('competencie_link_item') ) : the_row(); ?>
                            <div class="competencies-item competencies-item__with-buttons">
                                <div class="competencies-inner__headline"><?php the_sub_field('competencie_link_item_headline'); ?></div>
                                <?php
                                $link = get_sub_field('competencie_link_item_button');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                                        <span class="btn-inner__decorator">
                                            <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php
                                $link = get_sub_field('competencie_link_item_button2');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                                        <span class="btn-inner__decorator">
                                            <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>

                <div class="mobile-competencies__slider slick-slider">
                    <?php
                    if( have_rows('competencies_items') ):
                        while ( have_rows('competencies_items') ) : the_row(); ?>
                            <div class="competencies-item">
                                <img src="<?php the_sub_field('competencies_item_icon'); ?>" alt="competencies-item__image" class="competencies-item__image style-svg">
                                <div class="competencies-item__headline"><?php the_sub_field('competencies_headline'); ?></div>
                                <div class="competencies-item__description"><?php the_sub_field('competencies_description'); ?></div>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>

                <div class="mobile-competencies__item">
                    <?php
                    if( have_rows('competencie_link_item') ):
                        while ( have_rows('competencie_link_item') ) : the_row(); ?>
                            <div class="competencies-item competencies-item__with-buttons">
                                <div class="competencies-inner__headline"><?php the_sub_field('competencie_link_item_headline'); ?></div>
                                <?php
                                $link = get_sub_field('competencie_link_item_button');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                                        <span class="btn-inner__decorator">
                                            <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php
                                $link = get_sub_field('competencie_link_item_button2');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                                        <span class="btn-inner__decorator">
                                            <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>

        <div class="section-startup">
            <div class="small-container">
                <div class="startup-headline"><?php the_field('startup_section_headline'); ?></div>

                <div class="startup-wrapper">
                    <div class="startup-tabs">
                        <?php
                        $i = 0;
                        if( have_rows('startup_tab') ):
                            while ( have_rows('startup_tab') ) : the_row();
                                $i++; ?>
                                <?php if($i == 1) : ?>
                                    <div class="startup-tab__headline startup-tab__headline_active" data-tab="<?php echo $i; ?>"><?php the_sub_field('startup_tab_text'); ?></div>
                                    <?php else : ?>
                                    <div class="startup-tab__headline" data-tab="<?php echo $i; ?>"><?php the_sub_field('startup_tab_text'); ?></div>
                                <?php endif; ?>
                            <?php endwhile;
                        endif; ?>
                    </div>

                    <div class="startup-content">
                        <?php
                        $i = 0;
                        if( have_rows('startup_tab') ):
                            while ( have_rows('startup_tab') ) : the_row();
                                $i++; ?>

                                <?php if($i == 1) : ?>
                                    <div class="startup-content__inner startup-content__inner-active startup-content-<?php echo $i; ?>">
                                        <div class="startup-flex">
                                            <div class="startup-content__left">
                                                <div class="startup-content__info"><?php the_sub_field('startup_tab_content_left'); ?></div>

                                                <?php
                                                $link = get_sub_field('startup_tab_content_left_link');
                                                if( $link ):
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                    <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                                        <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                                                        <span class="btn-inner__decorator">
                                                        <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                                                    </span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="startup-content__right">
                                                <div class="startup-content__info"><?php the_sub_field('startup_tab_content_right'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="startup-content__inner startup-content-<?php echo $i; ?>">
                                        <div class="startup-flex">
                                            <div class="startup-content__left">
                                                <div class="startup-content__info"><?php the_sub_field('startup_tab_content_left'); ?></div>

                                                <?php
                                                $link = get_sub_field('startup_tab_content_left_link');
                                                if( $link ):
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                    <a class="btn btn_white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                                        <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                                                        <span class="btn-inner__decorator">
                                                        <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                                                    </span>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="startup-content__right">
                                                <div class="startup-content__info"><?php the_sub_field('startup_tab_content_right'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-experts" id="experts">
            <div class="experts-wrapper">
                <div class="small-container">
                    <div class="section-info__headline-wrapper">
                        <div class="section-info__headline"><?php the_field('experts_headline'); ?></div>
                    </div>

                    <div class="slick-control">
                        <div class="slider-control__icon slider-control__prev"><i class="fas fa-arrow-left"></i></div>
                        <div class="slider-control__icon slider-control__next"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="experts-slider-wrapper">
                <div class="experts-slider slick-slider">
                    <?php
                    if( have_rows('experts_items') ):
                        while ( have_rows('experts_items') ) : the_row(); ?>
                            <div class="experts-slide">
                                <img src="<?php the_sub_field('experts_item_image'); ?>" class="experts-person__image"/>

                                <div class="experts-person__name"><?php the_sub_field('experts_item_name'); ?></div>
                                <div class="experts-person__position"><?php the_sub_field('experts_item_position'); ?></div>
                                <div class="experts-person__info"><?php the_sub_field('experts_item_info'); ?></div>
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <div class="section-dates">
            <div class="small-container">
                <div class="section-info__flex">
                    <div class="section-info__headline-wrapper">
                        <div class="section-info__headline"><?php the_field('dates_headline'); ?></div>
                    </div>

                    <div class="section-info__text"><?php the_field('dates_headline_description'); ?></div>
                </div>
            </div>

            <div class="dates-container">
                <?php
                if( have_rows('dates_items') ):
                    while ( have_rows('dates_items') ) : the_row(); ?>
                        <div class="dates-item">
                            <div class="dates-item__inner">
                                <div class="dates-item__title">
                                    <?php
                                        $title = get_sub_field('dates_title');
                                        if($title) :?>
                                        <div class="dates-item__title-inner"><?php the_sub_field('dates_title'); ?></div>
                                        <?php else : ?>

                                        <?php endif; ?>
                                    <?php ?>
                                </div>

                                <div class="dates-item__content">
                                    <div class="dates-item__description"><?php the_sub_field('dates_description'); ?></div>
                                    <div class="dates-item__value"><?php the_sub_field('dates_value'); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>
	</main>

<?php get_footer(); ?>
