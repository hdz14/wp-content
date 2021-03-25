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

		<!-- <div class="grid-container row">
			<div class="quick-title">
				<h3 id="quick-h3">Quick Links</h3>
			</div>
		</div> -->

		<div class="grid-container row footer-sidebar">
			
			<div class="col-3 footer-sidebar1">
				<hr class="eSeparator">
				<?php
				if ( has_nav_menu( 'menu-footer' ) ) {
				wp_nav_menu( 

					array( 
    					'theme_location' => 'menu-footer', 
    					'menu-id' => 'footer-menu' 
					) 
				); 
				}
				?>
			</div>

			<!-- <div class="col-3 footer-sidebar2">
				<hr class="eSeparator">
				<ul>
					<li><a href="home">FAQs</a></li>
					<li><a href="home">Shipping</a></li>
					<li><a href="post-single">Service</a></li>
				</ul>
			</div>

			<div class="col-3 footer-sidebar3">
				<hr class="eSeparator">
				<ul>
					<li><a href="about-page">About Us</a></li>
					<li><a href="contact">Contact Us</a></li>
					<li><a href="post-page">Blog</a></li>
				</ul>
			</div>

			<div class="col-3 footer-sidebar4">
				<hr class="eSeparator">
				<a href="https://www.google.com/maps" target="_blank"><img id="map" src="<?php echo get_bloginfo('template_url') ?>/assets/images/map.png"/></a>
			</div> -->

		</div>

		<div class="grid-container row site-info">
			
				<div class="col-6">
					<a style="color: white; float: right" href="<?php echo esc_url( __( 'https://wordpress.org/', 'sampletheme' ) ); ?>" target="_blank">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'sampletheme' ), 'WordPress' );
						?>
					</a>
				</div>

				<div class="col-6">
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s', 'sampletheme' ), 'sampletheme', '<a style="color: white" href="https://handanzhang.com">Handan Zhang</a>' );
						?>
				</div>
			<!-- .site-info -->
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
