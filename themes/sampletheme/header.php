<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sampletheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$sampletheme_description = get_bloginfo( 'description', 'display' );
						if ( $sampletheme_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $sampletheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div>
				</div>
				
				<div class="col-6 topnav">
					<!-- <div class="search-container">
					<form action="/action_page.php">
						<input type="text" placeholder="Search..." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					</div> -->
				</div>

				<div class="col-2 topnav cart">
					<a href="cart"><h3>My Cart</h3></a>
				</div>
				

			</div>

			<div class="site-nav row">
				
				<?php
				wp_nav_menu( 

					array( 
    					'theme_location' => 'top-menu', 
    					'container_class' => 'top-bar' 
					) 
				); 
				?>
			</div>

			<!-- Use in conjunction with https://gist.github.com/woogists/c0a86397015b88f4ca722782a724ff6c -->

			<!-- view shopping cart content -->
			<!-- <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a> -->



		</div>

	</header>

	<div class="container">
