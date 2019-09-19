<?php get_header('pages'); ?>

	<main id="main" class="page-main" role="main">

		<section class="error-404 not-found">
            <div class="small-container small-container-404">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>

                    <a class="btn" href="<?php echo get_home_url(); ?>">
                        <span class="btn-inner__text">Return to home page</span>
                        <span class="btn-inner__decorator">
                            <span class="btn-inner__wrapper"><i class="fas fa-chevron-right btn-icon"></i></span>
                        </span>
                    </a>
                </header>
            </div>
		</section>

	</main>

<?php get_footer(); ?>
