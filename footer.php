<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humane_Society
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info" style="padding: 50px 25px; background-color: rgb(1, 66, 130); color: white;">
			<div class="container">
				<a class="white-link" href="<?php echo esc_url( __( 'https://wordpress.org/', 'humane-society' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'humane-society' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'humane-society' ), 'humane-society', '<a class="white-link" href="https://forrest-wilson.com" target="_blank">Forrest Wilson-Jennings</a>' );
					?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
