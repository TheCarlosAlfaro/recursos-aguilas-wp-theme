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

<!-- Carousel/Slider Section -->
<section class="py-5">

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h3>RESOURCES FOR BUILDING A HEALTHY CHURCH</h3>
				<p>Here are just a few of over 1700 resources available on the Resource Network</p>
			</div>
		</div>
	</div>
	<?php get_template_part( 'global-templates/hero' ); ?>
</section>

<section class="py-5">
<div class="jumbotron jumbotron-fluid" style="background: white;">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<img src="http://recursos-aguilascfc.local/wp-content/uploads/2018/10/podcast-pastora-d_iphone8plusgold_portrait-1-e1538681919381.png" alt="" class="img-fluid">
			</div>
			<div class="col">
				<h1 class="display-4">Hello, world!</h1>
				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				<hr class="my-4">
				<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</div>
		</div>
	</div>
</div>
</section>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
