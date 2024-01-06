<?php
/**
 * Template Name: Sobre Nosotros
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
		<section class="container-fluid banner-causa text-center p-4">
			<div class="container">
				<h1><?php echo get_the_title();?></h1>
				<p><?php the_content();?></p>
			</div>
		</section>
		<!--Banner sobre nosotros-->

		<!--Migas de pan-->
		<div class="container my-3">
			<nav aria-label="breadcrumb" class="migas">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo home_url();?>">Inicio</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page"><?php echo get_the_title();?></li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->

		<!--Sección misión y visión-->
		<section class="container my-5">
			<article class="row p-md-0 p-3">
				<div class="col-lg-6 p-0 d-flex flex-wrap">
					<!--Misión-->
					<div class="col-12 p-1 text-center d-flex flex-column justify-content-center align-items-center">
						<div class="mision p-5 w-100">
							<h2 class="h4"><?php the_field('titulo_mision');?></h2>
							<span><?php the_field('texto_mision');?></span>
						</div>
					</div>
					<!--Misión-->
					<!--Visión-->
					<div class="col-12 p-1 text-center d-flex flex-column justify-content-center align-items-center">
						<div class="vision p-5 w-100">
							<h2 class="h4"><?php the_field('titulo_vision');?></h2>
							<span><?php the_field('texto_vision');?></span>
						</div>
					</div>
					<!--Visión-->
				</div>
				<div class="col-lg-6 d-lg-flex d-none border">
					imagen
				</div>
			</article>
		</section>
		<!--Sección misión y visión-->

		<!--Banner actividades que realizamos-->
		<section class="container-fluid banner-causa text-center p-4 my-5">
			<h2><?php the_field('titulo_seccion_actividades');?></h2>
			<div class="row mt-3">
				<!--Charlas-->
				<div class="col-lg-4 col-md-6 text-center p-md-5 p-2 pb-md-0 pb-3">
					<i class="fs-3 fa-solid fa-comment"></i>
					<h3 class="h5 mb-3"><?php the_field('titulo_actividad_uno');?></h3>
					<p><?php the_field('descripcion_actividad_uno');?></p>
				</div>
				<!--Charlas-->
				<!--Jornadas de adopción-->
				<div class="col-lg-4 col-md-6 text-center p-md-5 p-2 pb-md-0 pb-3">
					<i class="fs-3 fa-solid fa-bone"></i>
					<h3 class="h5 mb-3"><?php the_field('titulo_actividad_dos');?></h3>
					<p><?php the_field('descripcion_actividad_dos');?></p>
				</div>
				<!--Jornadas de adopción-->
				<!--Esterilizaciones masivas-->
				<div class="col-lg-4 text-center p-md-5 p-2 pb-md-0 pb-3">
					<i class="fs-3 fa-solid fa-briefcase-medical"></i>
					<h3 class="h5 mb-3"><?php the_field('titulo_actividad_tres');?></h3>
					<p><?php the_field('descripcion_actividad_tres');?></p>
				</div>
				<!--Esterilizaciones masivas-->
			</div>
		</section>
		<!--Banner actividades que realizamos-->

		<!--Sección cómo ayudar-->
		<section class="container my-5">
			<h2 class="text-center my-5"><?php the_field('titulo_seccion_como_ayudar');?></h2>
			<article class="row p-md-0 p-3">
				<div class="col-lg-5 d-lg-flex d-none border">
					imagen
				</div>
				<div class="col-lg-7 cuadricula-como-ayudar p-1">
					<!--Adopta-->
					<div class="adopta-sobre-nosotros text-center d-flex flex-column justify-content-center align-items-center p-4">
						<h3 class="h4"><?php the_field('titulo_adopta');?></h3>
						<span><?php the_field('descripcion_adopta');?></span>
					</div>
					<!--Adopta-->
					<!--Se voluntario-->
					<div class="voluntario-sobre-nosotros text-center d-flex flex-column justify-content-center align-items-center p-4">
						<h3 class="h4"><?php the_field('titulo_se_voluntario');?></h3>
						<span><?php the_field('descripcion_se_voluntario');?></span>
					</div>
					<!--Se voluntario-->
					<!--Haz una donación-->
					<div class="donacion-sobre-nosotros text-center d-flex flex-column justify-content-center align-items-center p-4">
						<h3 class="h4"><?php the_field('titulo_donacion');?></h3>
						<span><?php the_field('descripcion_donacion');?></span><br>
						<a href="<?php the_field('link_a_donacion');?>">Donar</a>
					</div>
					<!--Haz una donación-->
					<!--Comparte-->
					<div class="mision text-center d-flex flex-column justify-content-center align-items-center p-4">
						<h3 class="h4"><?php the_field('titulo_comparte');?></h3>
						<span><?php the_field('descripcion_comparte');?></span>
					</div>
					<!--Comparte-->
				</div>
			</article>
		</section>
		<!--Sección cómo ayudar-->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'sobre-nosotros-page' );

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
