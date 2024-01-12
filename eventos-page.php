<?php
/**
 * Template Name: Próximos Eventos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cbh
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!--Banner sobre nosotros-->
		<section class="container-fluid banner-causa text-center p-4 d-flex justify-content-center align-items-center">
			<div class="container">
				<h1><?php echo get_the_title();?></h1>
				<p><?php the_content();?></p>
			</div>
		</section>
		<!--Banner sobre nosotros-->

		<!--Migas de pan-->
		<div class="container my-5">
			<nav aria-label="breadcrumb" class="migas">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo home_url();?>">Inicio</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page"><?php echo get_the_title();?></li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->

		<!--Loops de eventos-->
		<section class="container my-5">
			<?php include get_template_directory() . '/assets/modulos/modulo-eventos/loop-adopcion.php';?>
			<?php include get_template_directory() . '/assets/modulos/modulo-eventos/loop-charlas.php';?>
			<?php include get_template_directory() . '/assets/modulos/modulo-eventos/loop-esterilizaciones.php';?>
		</section>
		<!--Loops de eventos-->



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'eventos-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
