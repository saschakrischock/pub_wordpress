<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PUB
 */

?>
</div>
<nav id="site-navigation" class="main-navigation">
	<div class="wrapper-main">
		<a class="pub-main">Contact<br>PUB<br>About</a>
	</div>
	<div class="wrapper">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>radio" class="radio bubble-down">Radio</a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>tv" class="video bubble-down">TV</a>
	</div>
</nav><!-- #site-navigation -->

<?php wp_footer(); ?>

</body>
</html>
