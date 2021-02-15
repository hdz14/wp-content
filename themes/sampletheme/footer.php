<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="row quick-title">
			<h3>Quick Links</h3>
		</div>
		<div class="row quick-link">
			<div class="row">
				<div class="col-3">
					<p>Privacy Policy</p>
					<p>Return Policy</p>
					<p>Help Center</p>
				</div>
				<div class="col-3">
					<p>FAQs</p>
					<p>Shipping</p>
					<p>Current Flyer</p>
				</div>
				<div class="col-3">
					<p>Store Locator</p>
					<p>Services</p>
					<p>Careers</p>
				</div>
				<div class="col-3">
				<img id="map" src="<?php echo get_bloginfo('template_url') ?>/assets/images/map.png"/>
				</div>
			</div>
		</div>

		<div class="row site-info">
			<div class="col">
				<a style="color: white; float: right" href="<?php echo esc_url( __( 'https://wordpress.org/', 'sampletheme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'sampletheme' ), 'WordPress' );
					?>
				</a>
			</div>

			<div class="col">
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'sampletheme' ), 'sampletheme', '<a style="color: white" href="https://handanzhang.com">Handan Zhang</a>' );
					?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
