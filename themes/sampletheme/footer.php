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
	</div>

	<?php 
	$recipe_args = array(
		'post_type' 	=> 'sampletheme_recipe',
		'post_per_page' => 3,
	);

	$recipe_query = new WP_Query( $recipe_args );

	if ( $recipe_query->have_posts() ) {
		while ( $recipe_query->have_posts() ) {
			$recipe_query->the_post();
			?>
			<div class="grid-x recipe-footer">
				<div class="large-4">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<div class="large-4">
					<?php the_excerpt(); ?>
				</div>
				<div class="large-4" style="width: 100px;" >
					<?php the_post_thumbnail(); ?>
				</div>
		</div>
			<?php
		}
	}
	?>


	<footer id="colophon" class="site-footer">
		<div class="grid-container row footer-sidebar">
			<!-- custom footer menu -->
			<div class="col-4 footer-sidebar1">
				<h4>Recent Posts</h4>
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
			<!-- footer social media link -->
			<div class="col-4 footer-sidebar2">
				<h4>Social Media</h4>
				<hr class="eSeparator">
				<ul id="social">
					<li>
						<?php 
						$facebook_url = get_theme_mod( 'facebook_url' );
						if ( $facebook_url ) { 
							?>
							<a class="facebook-link" href="<?php echo get_theme_mod( 'facebook_url' ); ?>"><?php echo esc_html__( 'Facebook', 'sampletheme' ); ?></a>
							<?php 
						}
						?>
					</li>
					<li>
					<?php 
						$twitter_url = get_theme_mod( 'twitter_url' );
						if ( $twitter_url ) { 
							?>
							<a class="twitter-link" href="<?php echo get_theme_mod( 'twitter_url' ); ?>"><?php echo esc_html__( 'Twitter', 'sampletheme' ); ?></a>
							<?php 
						}
						?>
					</li>
					<li>
						<?php 
						$youtube_url = get_theme_mod( 'youtube_url' );
						if ( $youtube_url ) { 
							?>
							<a class="youtube-link" href="<?php echo get_theme_mod( 'youtube_url' ); ?>"><?php echo esc_html__( 'Youtube', 'sampletheme' ); ?></a>
							<?php 
						}
						?>
					</li>
					<br>
					<li id="socialmedia">
						<a href="https://www.facebook.com/" target="_blank"><img id="facebook" style="width: 25px; " src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.png"/></a>
						<a href="https://www.twitter.com/" target="_blank"><img id="twitter" style="width: 25px; " src="<?php echo get_bloginfo('template_url') ?>/assets/images/twitter.png"/></a>
						<a href="https://www.youtube.com/" target="_blank"><img id="youtube" style="width: 25px; " src="<?php echo get_bloginfo('template_url') ?>/assets/images/youtube.png"/></a>
			
					</li>
				</ul>
			</div>
			<!-- footer sidebar 3 -->
			<div class="col-4 footer-sidebar3">
				<h4>Find Us</h4>
				<hr class="eSeparator">
				<a href="https://www.google.com/maps" target="_blank"><img id="map" src="<?php echo get_bloginfo('template_url') ?>/assets/images/map.png"/></a>
			</div>
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
						&copy; 2000 - <?php echo date( 'Y' ); ?>
				</div>
				<!-- .site-info -->
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
