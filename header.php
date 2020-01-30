<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package henock_fantahun
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'henock-fantahun' ); ?></a>
	

	<header id="masthead" class="site-header" style="padding-bottom: 35px">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
				<?php
			endif;
			$henock_fantahun_description = get_bloginfo( 'description', 'display' );
			if ( $henock_fantahun_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $henock_fantahun_description; /* WPCS: xss ok. */ ?></p> -->
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation"  class="navbar navbar-expand-md navbar-dark top bg-dark">
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
    <button class="navbar-toggler navbar-toggler-icon navbar-toggler-right " type = "button" data-toggle="collapse" data-target="#bs4navbar" aria-controls = "bs4navbar" aria-expanded="false" aria-label="Toggle navigation"><?php esc_html_e( '', 'yflowery' ); ?></button>

<?php
            wp_nav_menu([
            'menu'            => 'primary-menu',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'functions::fallback',
            'walker'          => new henock_navbar()
			]);
		
        ?>
		</nav>


	</header ><!-- #masthead -->

	<div id="content" class="site-content">
