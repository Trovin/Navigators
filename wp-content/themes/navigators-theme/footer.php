        </div>
        <!-- close content class tag -->
        <footer class="footer" role="contentinfo">
            <div class="pre-footer">
                <div class="small-container">
                    <h2 class="pre-footer__info"><?php the_field('pre_footer_headline','options'); ?></h2>

                    <?php
                    $link = get_field('pre_footer_button', 'options');
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
                </div>
            </div>

            <div class="page-container page-container_footer">
                <div class="footer-item__info">
                    <a href="<?php echo get_home_url(); ?>" class="flex">
                        <img src="<?php the_field('footer_logo_image', 'options'); ?>" class="footer-logo__image style-svg" alt="main-logo__image">
                    </a>

                    <p class="copyright hide-sm">&copy; <?php echo date("Y"); ?>
                        <?php the_field('footer_copyright','options'); ?>
                    </p>
                </div>

                <nav class="footer-nav" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'footer-nav__list', 'container' => false ) ); ?>
                </nav>

                <div class="footer__item-form">
                    <!-- Begin Mailchimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup {
                            background: #fff;
                            clear: left;
                            font: 14px Helvetica, Arial, sans-serif;
                            width: 100%;
                        }
                        #mc_embed_signup .button {
                            background-color: transparent;
                            color: transparent;
                        }
                        #mc_embed_signup .button:hover {
                            background-color: transparent;
                        }
                        #mc-embedded-subscribe-form input[type=checkbox] {
                            display: inline;
                            width: auto;
                            margin-right: 10px;
                        }
                        #mc_embed_signup label {
                            text-align: left;
                            font-size: 16px;
                            font-weight: 600;
                            font-style: normal;
                            font-stretch: normal;
                            line-height: normal;
                            letter-spacing: normal;
                            color: #522b2f;
                        }
                        #mc_embed_signup input.email {
                            width: 237px;
                        }
                        #mergeRow-gdpr {
                            margin-top: 20px;
                        }
                        #mergeRow-gdpr fieldset label {
                            font-weight: normal;
                        }
                        #mc-embedded-subscribe-form .mc_fieldset{
                            border: none;
                            min-height: 0;
                            padding-bottom :0;
                        }
                    </style>
                    <div id="mc_embed_signup">
                        <form action="https://madebysoulmates.us18.list-manage.com/subscribe/post?u=e727ac50b74299da9d67cd7cb&amp;id=e5dfd9f133" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <label for="mce-EMAIL"><?php the_field('footer_form_headline', 'options'); ?></label>
                                <span class="form-wrapper">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Váš email" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e727ac50b74299da9d67cd7cb_e5dfd9f133" tabindex="-1" value=""></div>
                                    <div class="clear">
                                        <input type="submit" value=">" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        <i class="fas fa-chevron-right btn-icon footer-form__icon"></i>
                                    </div>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->

                    <p class="copyright show-sm">&copy; <?php echo date("Y"); ?>
                        <?php the_field('footer_copyright','options'); ?>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- close wrapper class tag -->
<?php wp_footer(); ?>

</body>
</html>
