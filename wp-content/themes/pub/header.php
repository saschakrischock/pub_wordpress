<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PUB
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pub' ); ?></a>

	<header id="masthead" class="site-header">
		<!---<div class="site-branding">
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
			$pub_description = get_bloginfo( 'description', 'display' );
			if ( $pub_description || is_customize_preview() ) :
				?>
			<!---	<p class="site-description"><?php echo $pub_description; /* WPCS: xss ok. */ ?></p>-->
			<?php endif; ?>
		</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation">
	<div  class="wrapper">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>schedule" class="schedule bubble">Schedule</a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>journal" class="journal bubble">Journal</a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>publications" class="publications bubble">Publications</a>
	</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
