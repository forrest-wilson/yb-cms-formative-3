<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Humane_Society
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="page-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-lg-9">
								<header class="page-header">
									<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'humane-society' ); ?></h1>
								</header><!-- .page-header -->
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links in the sidebar or a search?', 'humane-society' ); ?></p>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-3">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>