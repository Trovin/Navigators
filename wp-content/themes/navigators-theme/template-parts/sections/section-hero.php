<!-- section hero -->
<div class="section-hero">
    <div class="section-hero__inner-image" style="background-image: url(<?php the_field('section_hero_background_image'); ?>)"></div>

    <div class="small-container">
        <h1 class="section-hero__info"><?php the_field('section_hero_info'); ?></h1>
        <div class="section-hero__additional-wrapper">
            <div class="section-hero__additional-info"><?php the_field('section_hero_additional_info_'); ?></div>
        </div>

        <?php
        $link = get_field('section_hero_link');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn btn-hero" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <span class="btn-inner__text"><?php echo esc_html($link_title); ?></span>
                <span class="btn-inner__decorator">
                    <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                </span>
            </a>
        <?php endif; ?>
    </div>
</div>