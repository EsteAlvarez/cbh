<?php
/**
 * Template Name: Contacto
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

	<main id="primary" class="site-main container">
		<!--Migas de pan-->
		<div class="container my-3">
			<nav aria-label="breadcrumb" class="migas">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo home_url();?>">Inicio</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page">Contacto</li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->

		<!--Formulario de contacto-->
		<section class="row my-md-5 my-3 p-md-0 p-3">
			<div class="col-lg-6 mb-lg-0 mb-md-3 mb-3">
				<h1><?php echo get_the_title();?></h1>
				<p><?php the_content();?></p>
			</div>
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'contacto-page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
		</section>
		<!--Formulario de contacto-->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
