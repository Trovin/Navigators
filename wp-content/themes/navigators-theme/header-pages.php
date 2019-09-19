<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>
    <div class="wrapper" id="app">
        <div class="content">
            <header class="header-pages">
                <div class="page-container page-container_header">
                    <a href="<?php echo get_home_url(); ?>" class="flex">
                        <img src="<?php
                        if(is_page(27)) {
                            the_field('contact_page_logo', 'options');
                        } else {
                            the_field('logo_image', 'options');
                        }
                        ?>" class="main-logo__image style-svg" alt="main-logo__image">
                    </a>

                    <div class="menu-action">
                        <span class="menu-action__item"></span>
                        <span class="menu-action__item"></span>
                        <span class="menu-action__item"></span>
                    </div>

                    <div class="menu-wrapper">
                        <nav class="main-nav" role="navigation">
                            <?php
                            wp_nav_menu(array('walker' => new mainMenuWalker(), 'container'=>false, 'echo' => true, 'menu_class' => 'main-nav__list', 'theme_location'=>'menu-1', 'fallback_cb'=>false, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 2, ));
                            ?>
                        </nav>
                    </div>
                </div>
            </header>
