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

	<main id="primary" class="site-main">
		<!--Banner sobre nosotros-->
		<section class="container-fluid banner-causa text-center p-4 d-flex justify-content-center align-items-center">
			<div class="container">
				<h1><?php echo get_the_title();?></h1>
			</div>
		</section>
		<!--Banner sobre nosotros-->
		<!--Migas de pan-->
		<div class="container my-5 d-md-block d-none">
			<nav aria-label="breadcrumb" class="migas">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo home_url();?>">Inicio</a></li>
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo esc_url(get_permalink(get_page_by_path('proximos-eventos'))); ?>">Proximos Eventos</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page"><?php echo get_the_title();?></li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->
		<section class="container my-md-0 my-5">
			<article class="row">
				<div class="col-12">
					<?php the_content();?>
				</div>
			</article>
			<article class="row my-3">
				<div class="col-12">
					<p>Fecha del evento: <?php echo esc_html ( get_field( 'fecha_de_evento' ) ); ?></p>
					<p>Ubicación: <?php echo esc_html ( get_field( 'ubicacion' ) ); ?></p>
					<p>Horario: <?php the_field('hora_de_inicio'); ?> - <?php the_field('hora_de_cierre'); ?></p>
				</div>
			</article>
		</section>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single-eventos', get_post_type() );

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

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
