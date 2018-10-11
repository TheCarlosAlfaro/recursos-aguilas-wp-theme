<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<div class="search-overlay">
	<div class="search-overlay__top">
		<div class="container">
			<i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
			<input type="text" class="search-term" placeholder="¿Qué está buscando?" id="search-term">
			<i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
		</div>
	</div>

	<div class="container">
		<div id="search-overlay__results"></div>
	</div>

</div>

<?php wp_footer(); ?>

</body>

</html>

