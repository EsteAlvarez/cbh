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

			<a href="https://esponsor.com/callejerosbuscanhogar?fbclid=IwAR2eN9qOX95zuOZ7PVTKR9f9L86VySsm6CQv0Zheb_sp8e5TLPVuDzhE7G0" target="_blank" class="area_centro">
				<h3>HAZ UNA DONACIÓN</h3>
				<p>Donar para marcar la diferencia en las vidas de animales necesitados y apoyar nuestra causa.</p>
				<img class="img_enlaces" src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/pngwing-3.png'; ?>" alt="">
			</a>

			<a href="proximos-eventos" class="area_izquierda">
				<h3>PRÓXIMOS EVENTOS</h3>
				<p>Descubre nuestros próximos eventos: jornadas de adopción, charlas y esterilizaciones masivas.</p>
				<img class="img_enlaces" src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/Black-Dog-PNG-High-Quality-Image-1.png'; ?>" alt="">
			</a>

			<a href="adoptanos" class="area_derecha">
				<h3>ADOPTA UN PELUDITO</h3>
				<div>
				<img class="img_enlaces" src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/kisspng-dog-pet-puppy-cat-dog-5a7525d302cf50.png'; ?>" alt="">
				<p> Adopta un peludito y dale un hogar lleno de amor y cuidado, donde pueda disfrutar de una vida llena de felicidad y compañía</p>
				</div>
			</a>

			<a href="https://esponsor.com/callejerosbuscanhogar?fbclid=IwAR2eN9qOX95zuOZ7PVTKR9f9L86VySsm6CQv0Zheb_sp8e5TLPVuDzhE7G0" target="_blank" class="area_derecha_inferior">
				<h3>HAZTE SOCIO</h3>
				<p>Únete a nuestra causa y hazte socio para ser parte activa en la protección de los animales necesitados. Juntos, podemos lograr un impacto duradero en sus vidas.</p>
				<img class="img_enlaces" src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/pngwing-1.png'; ?>" alt="">
			</a>

			<a href="contacto" class="area_izquierda_inferior">
				<h3>CONTÁCTANOS</h3>
				<div>
					<img class="img_enlaces" src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/pngwing-2.png'; ?>" alt="">
					<p>Si tienes alguna duda, deseas ser voluntario o necesitas más información no dudes en contactarnos</p>
				</div>
			</a>
		</section>
		<!--Sección de cuadricula-->

		<!--Ripley puntos-->
		<section class="ripley-puntos my-5 p-5">
			<div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
				<a href="https://simple.ripley.cl">
					<img src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/ripley-puntos-cbh-1.png'; ?>" alt="">
				</a>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
				<h4>Haz tus compras en Ripley utilizando el código de la fundación</h4>
				<p class="fondo-texto-ripley p-1">Cuando realicen sus compras en las tiendas, simplemente proporcionen el <span class="fw-bold">código 415627268</span> para que acumulemos puntos, y lo más beneficioso es que no se descontarán de sus propios puntos</p>
			</div>
		</section>
		<!--Ripley puntos-->

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
get_sidebar();
get_footer();
