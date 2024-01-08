<?php
/**
 * Template Name: Inicio Callejeros Buscan Hogar
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
		<!--Carrusel adóptanos-->
		<section class="container-fluid p-0">
			<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item carousel-uno active">
						<div class="d-flex w-75 mx-auto p-lg-0 p-5">
							<figure class="m-0 p-0 text-end col-6 p-4 pb-0 d-lg-block d-none">
								<?php 
								$image = get_field('imagen_primer_item');
								if( !empty( $image ) ): ?>
									<img class="img-fluid imagen-carrusel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</figure>
							<div class="d-flex justify-content-center col-lg-6 col-12 p-lg-3 p-0 flex-column">
								<h1><?php the_field('titulo_primer_item');?></h1>
								<p><?php the_field('descripcion_primer_item');?></p>
							</div>
						</div>
					</div>
					<div class="carousel-item carousel-dos">
						<a href="link_segundo_item" class="d-flex w-75 mx-auto text-decoration-none carusel-redes">
							<figure class="d-lg-block d-none d-none m-0 p-0 col-6 text-end p-4 pb-0">
								<?php 
								$image = get_field('imagen_segundo_item');
								if( !empty( $image ) ): ?>
									<img class="img-fluid imagen-carrusel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</figure>
							<div class="d-flex justify-content-center col-lg-6 col-12 p-lg-3 p-4 flex-column">
								<h2 class="h1"><?php the_field('titulo_segundo_item');?></h2>
								<p><?php the_field('descripcion_segundo_item');?></p>
								<div>
									<i class="bi bi-facebook fs-2"></i>
									<i class="bi bi-instagram fs-2 px-2"></i>
									<i class="bi bi-tiktok fs-2"></i>
								</div>
							</div>
						</a>
					</div>
					<div class="carousel-item carousel-tres">
						<div class="d-flex w-75 mx-auto">
							<figure class="m-0 p-0 col-6 text-end p-4 pb-0">
								<?php 
								$image = get_field('imagen_tercer_item');
								if( !empty( $image ) ): ?>
									<img class="img-fluid imagen-carrusel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</figure>
							<div class="d-flex justify-content-center col-lg-6 col-12 p-lg-3 p-0 flex-column">
								<h2 class="h1"><?php the_field('titulo_tercer_item');?></h2>
								<p><?php the_field('descripcion_tercer_item');?></p>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>
		<!--Carrusel adóptanos-->

		<!--Sección de cuadricula-->
		<section class="container_grid my-5">

			<a href="<?php the_field('link_socios');?>" target="_blank" class="area_centro">
				<h2 class="h3"><?php the_field('donacion');?></h2>
				<p><?php the_field('texto_donacion');?></p>
			</a>

			<a href="proximos-eventos" class="area_izquierda">
				<h2 class="h3"><?php the_field('eventos');?></h2>
				<p><?php the_field('texto_eventos');?></p>
			</a>

			<a href="adoptanos" class="area_derecha">
				<h2 class="h3"><?php the_field('adopta');?></h2>
				<div>
					<p><?php the_field('texto_adopta');?></p>
				</div>
			</a>

			<a href="<?php the_field('link_socios');?>" target="_blank" class="area_derecha_inferior">
				<h2 class="h3"><?php the_field('socio');?></h2>
				<p><?php the_field('texto_socio');?></p>
			</a>

			<a href="contacto" class="area_izquierda_inferior">
				<h2 class="h3"><?php the_field('contacto');?></h2>
				<div>	
					<p><?php the_field('texto_contacto');?></p>
				</div>
			</a>
		</section>
		<!--Sección de cuadricula-->

		<!--Ripley puntos-->
		<section class="ripley-puntos container-fluid my-5 p-2">
			<div class="row m-0 p-2">
				<div class="col-6 mx-auto col-md-5 d-flex justify-content-center align-items-center">
					<a href="<?php the_field('link_ripley');?>" target="_blank">
						<?php 
						$image = get_field('imagen_ripley_puntos');
						if( !empty( $image ) ): ?>
							<img class="img-fluid imagen-ripley" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</a>
				</div>
				<div class="col-12 col-md-7 p-md-5 p-2 d-flex flex-column justify-content-center align-items-center text-center">
					<h2 class="h3 mb-md-4 mb-1"><?php the_field('titulo_banner_ripley');?></h2>
					<p class="fondo-texto-ripley p-2"><?php the_field('texto_banner_ripley');?></p>
				</div>
			</div>
		</section>
		<!--Ripley puntos-->

		<!--Redes sociales-->
		<section id="redes_sociales" class="container my-5">
			<!--Feed de Instagram-->
			<div>
				
			</div>
			<!--Feed de Instagram-->

			<!--Cards de Facebook y tiktok-->
			<div class="row px-lg-5 px-md-3 px-1">
				<div class="col-lg-6 col-md-12 col-12 cards-rrss mb-lg-0 mb-md-3 mb-3">
					<a href="<?php the_field('link_de_primera_red_social');?>" target="_blank">
						<div class="card-facebook card-hover text-center p-4 h-100">
							<p class="contenedor-icono-rrss mb-3"><i class="fa-brands fa-facebook fs-1"></i></p>
							<h3 class="titulo-card-rrss h5"><?php the_field('nombre_de_primera_red_social');?></h3>
							<p class="fw-bold"><?php the_field('usuario_de_primera_red_social');?></p>
							<p><?php the_field('descripcion_de_primera_red_social');?></p>
						</div>	
					</a>
				</div>
				<div class="col-lg-6 col-md-12 col-12 cards-rrss">
					<a href="<?php the_field('link_de_segunda_red_social');?>" target="_blank">
						<div class="card-tiktok card-hover text-center p-4 h-100">
							<p class="contenedor-icono-rrss mb-3">
								<i class="fa-brands fa-tiktok fs-1"></i>
							</p>
							<h3 class="titulo-card-rrss h5"><?php the_field('nombre_de_segunda_red_social');?></h3>
							<p class="fw-bold"><?php the_field('usuario_de_segunda_red_social');?></p>
							<p><?php the_field('descripcion_de_segunda_red_social');?></p>
						</div>
					</a>
				</div>
			</div>
			<!--Cards de Facebook y tiktok-->
		</section>
		<!--Redes sociales-->

		<!--Vitalcan-->
		<section class="container-fluid banner-vitalcan my-5 m-0 p-0">
			<div class="container">
				<a href="<?php the_field('link_vitalcan');?>">
					<?php 
					$image = get_field('imagen_vitalcan');
						if( !empty( $image ) ): ?>
							<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</a>
			</div>
		</section>
		<!--Vitalcan-->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
