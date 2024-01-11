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

	<main id="primary" class="site-main container">
		<!--Migas de pan-->
		<div class="container my-3">
			<nav aria-label="breadcrumb" class="migas">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo home_url();?>">Inicio</a></li>
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo esc_url(get_permalink(get_page_by_path('adoptanos'))); ?>">Adóptanos</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page"><?php echo get_the_title();?></li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->
		<section class="my-5 p-3">
			<div class="row">
				<div class="col-lg-6">
					<figure class="foto-ficha text-center ms-auto"><?php cbh_post_thumbnail();?></figure>
				</div>
				<div class="col-lg-6 text-md-start text-center my-md-0 my-3">
					<h1><?php echo get_the_title();?></h1>
					<p><i class="fa-solid fa-paw"></i> Edad: <?php the_field('edad');?></p>
					<p><i class="fa-solid fa-venus-mars"></i> Género: <?php the_field('genero');?></p>
					<p><i class="fa-solid fa-ruler-horizontal"></i> Tamaño: <?php the_field('tamano');?></p>
					<p class="pb-3"><i class="fa-solid fa-heart"></i> Personalidad: <?php the_field('personalidad');?></p>
					<a id="boton_adoptame_ficha" class="boton-adoptame-ficha" href="#contenedor_formulario">Adóptame</a>
				</div>
			</div>
		</section>

		<section class="my-5" style="display:none;" id="contenedor_formulario">
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
