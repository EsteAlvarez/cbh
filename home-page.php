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
		<section class="carousel mb-5">

		</section>

		<!--Sección de cuadricula-->
		<section class="container_grid my-5">

			<a href="<?php the_field('link_socios');?>" target="_blank" class="area_centro">
				<h2 class="fs-3"><?php the_field('donacion');?></h2>
				<p><?php the_field('texto_donacion');?></p>
			</a>

			<a href="proximos-eventos" class="area_izquierda">
				<h2 class="fs-3"><?php the_field('eventos');?></h2>
				<p><?php the_field('texto_eventos');?></p>
			</a>

			<a href="adoptanos" class="area_derecha">
				<h2 class="h3"><?php the_field('adopta');?></h2>
				<div>
					<p><?php the_field('texto_adopta');?></p>
				</div>
			</a>

			<a href="<?php the_field('link_socios');?>" target="_blank" class="area_derecha_inferior">
				<h2 class="fs-3"><?php the_field('socio');?></h2>
				<p><?php the_field('texto_socio');?></p>
			</a>

			<a href="contacto" class="area_izquierda_inferior">
				<h2 class="fs-3"><?php the_field('contacto');?></h2>
				<div>	
					<p><?php the_field('texto_contacto');?></p>
				</div>
			</a>
		</section>
		<!--Sección de cuadricula-->

		<!--Ripley puntos-->
		<section class="ripley-puntos my-5 p-5">
			<div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
				<a href="https://simple.ripley.cl">
				
				</a>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
				<h4>Haz tus compras en Ripley utilizando el código de la fundación</h4>
				<p class="fondo-texto-ripley p-1">Cuando realicen sus compras en las tiendas, simplemente proporcionen el <span class="fw-bold">código 415627268</span> para que acumulemos puntos, y lo más beneficioso es que no se descontarán de sus propios puntos</p>
			</div>
		</section>
		<!--Ripley puntos-->

		<!--Redes sociales-->
		<section class="container my-5">
			<!--Feed de Instagram-->
			<div>
				
			</div>
			<!--Feed de Instagram-->

			<!--Cards de Facebook y tiktok-->
			<div class="row p-lg-5 p-md-3 p-1">
				<div class="col-lg-6 col-md-12 col-12 cards-rrss mb-lg-0 mb-md-3 mb-3">
					<a href="">
						<div class="card-facebook card-hover text-center p-4 h-100">
							<p class="contenedor-icono-rrss mb-3">
								<i class="fa-brands fa-facebook fs-1"></i>
							</p>
							<p class="fw-bold">Usuario de Facebook</p>
							<h5 class="titulo-card-rrss">Facebook</h5>
							<p>Visítanos en Facebook y mantente al tanto de nuestras últimas noticias y eventos. ¡Síguenos para estar conectado con nuestra comunidad amante de los animales!</p>
						</div>	
					</a>
				</div>
				<div class="col-lg-6 col-md-12 col-12 cards-rrss mb-lg-0 mb-md-3 mb-3">
					<a href="">
						<div class="card-tiktok card-hover text-center p-4 h-100">
							<p class="contenedor-icono-rrss mb-3">
								<i class="fa-brands fa-tiktok fs-1"></i>
							</p>
							<p class="fw-bold">Usuario de Tiktok</p>
							<h5 class="titulo-card-rrss">Tiktok</h5>
							<p>¡Síguenos en TikTok para disfrutar de videos entretenidos y llenos de amor con nuestras adorables mascotas! Únete a la diversión y comparte el cariño por los animales con nosotros.</p>
						</div>
					</a>
				</div>
			</div>
			<!--Cards de Facebook y tiktok-->
		</section>
		<!--Cards de Facebook y tiktok-->
		<!--Redes sociales-->

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
