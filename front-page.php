<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Hero Section/Jumbotron -->
<?php get_template_part( 'global-templates/jumbotron' ); ?>

<!-- Up coming events Section -->
<?php get_template_part( 'global-templates/up-coming-events' ); ?>

<!-- Carousel/Slider Section -->
<section class="py-5">

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h1 class="display-5">RESOURCES FOR BUILDING A HEALTHY CHURCH</h1>
				<p>Here are just a few of over 1700 resources available on the Resource Network</p>
			</div>
		</div>
	</div>
	<?php get_template_part( 'global-templates/hero' ); ?>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<a class="btn btn-outline-secondary btn-lg" href="#" role="button">PRICING</a>
				<a class="btn btn-outline-primary btn-lg" href="#" role="button">SIGN UP</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-light">
	<?php get_template_part( 'global-templates/pricing-table' ); ?>
</section>

<?php get_footer(); ?>
