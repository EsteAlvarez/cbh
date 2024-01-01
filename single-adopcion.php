<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cbh
 */

get_header();
?>

	<main id="primary" class="site-main container p-5">
		<section class="ficha-adopcion row my-5">
			<div class="col-lg-5 col-md-12 contenedor-imagen-ficha p-0 m-0"><?php cbh_post_thumbnail();?></div>
			<div class="col-lg-7 col-md-12 contenedor-datos-mascota pt-3">
				<h1><?php echo get_the_title();?></h1>
				<p><i class="fa-solid fa-paw"></i> <?php the_field('edad');?></p>
				<p><i class="fa-solid fa-venus-mars"></i> <?php the_field('genero');?></p>
				<p><i class="fa-solid fa-ruler-horizontal"></i> <?php the_field('tamano');?></p>
				<p><i class="fa-solid fa-heart"></i> <?php the_field('personalidad');?></p>
				<p class="pb-3"><i class="fa-solid fa-circle-exclamation"></i> <?php the_field('personalidad');?></p>
				<a id="boton_adoptame_ficha" class="boton-adoptame-ficha" href="#contenedor_formulario">Adóptame</a>
			</div>
		</section>

		<section style="display:none;" id="contenedor_formulario">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single-adopcion', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'cbh' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'cbh' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</section>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
