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
			<article class="row">
				<div class="col-lg-6 border p-0 d-flex flex-wrap">

					<figure class="col-6 border h-50 m-0">Imagen</figure>

					<div class="mision col-6 border h-50 p-5 text-center d-flex flex-column justify-content-center align-items-center">
						<h2 class="h4">Misión</h2>
						<p>Nuestra misión es rescatar animales enfermos, maltratados o en total abandono</p>
					</div>

					<div class="vision col-6 border h-50 p-5 text-center d-flex flex-column justify-content-center align-items-center">
						<h2 class="h4">Visión</h2>
						<p>Nuestra visión es crear un mundo en el que cada animal reciba el amor, cuidado y respeto que merece, y trabajamos incansablemente para lograrlo.</p>
					</div>

					<figure class="col-6 border h-50 m-0">Imagen</figure>

				</div>
				<div class="col-lg-6 border">
					imagen
				</div>
			</article>
		</section>
		<!--Sección misión y visión-->

		<!--Banner actividades que realizamos-->
		<section class="container-fluid banner-causa text-center p-4 my-5">
			<h2>Actividades que realizamos</h2>
			<div class="row mt-3">
				<div class="col-lg-4 col-md-6 text-center p-md-5 p-2 pb-md-0 pb-3">
					<i class="fs-3 fa-solid fa-comment"></i>
					<h3 class="h5 mb-3">Charlas</h3>
					<p>Ofrecemos charlas sobre tenencia responsable en colegios y jardines infantiles para educar a los más jóvenes acerca del cuidado de los animales y promover un futuro más compasivo y responsable</p>
				</div>
				<div class="col-lg-4 col-md-6 text-center p-md-5 p-2 pb-md-0 pb-3">
					<i class="fs-3 fa-solid fa-bone"></i>
					<h3 class="h5 mb-3">Jornadas de adopción</h3>
					<p>Nuestras jornadas de adopción son oportunidades emocionantes para encontrar un amigo peludo que necesite un hogar, brindándote un ambiente cálido y amigable para conocer a las mascotas en busca de una familia.</p>
				</div>
				<div class="col-lg-4 text-center p-md-5 p-2 pb-md-0 pb-3">
					<i class="fs-3 fa-solid fa-briefcase-medical"></i>
					<h3 class="h5 mb-3">Esterilizaciones masivas</h3>
					<p>Las esterilizaciones son fundamentales para controlar la población de animales en situación de calle, reducir el sufrimiento y promover una convivencia más armoniosa entre los seres humanos y los animales.</p>
				</div>
			</div>
		</section>
		<!--Banner actividades que realizamos-->

		<!--Sección cómo ayudar-->
		<section class="container my-5">
			<h2 class="text-center my-5">¿Cómo Ayudar?</h2>
			<article class="row">
				<div class="col-lg-6 border">
					imagen
				</div>
				<div class="col-lg-6 border p-0 d-flex flex-wrap">

					<div class="mision col-6 border h-50 p-5 text-center d-flex flex-column justify-content-center align-items-center">
						<h2 class="h4">Adopta</h2>
						<p> Adopta un peludito y dale un hogar lleno de amor y cuidado, donde pueda disfrutar de una vida llena de felicidad y compañía</p>
					</div>

					<div class="mision col-6 border h-50 p-5 text-center d-flex flex-column justify-content-center align-items-center">
						<h2 class="h4">Se Voluntario</h2>
						<p>Únete como voluntario en nuestras jornadas de adopción. Envía un mensaje de WhatsApp a +569 79587688 (Nicolas) para inscribirte y ser parte de nuestro equipo</p>
					</div>

					<div class="vision col-6 border h-50 p-5 text-center d-flex flex-column justify-content-center align-items-center">
						<h2 class="h4">Haz una Donación</h2>
						<p>Haz una donación para marcar una diferencia en las vidas de los animales necesitados y apoyar nuestra causa</p>
						<a href="#">Donar</a>
					</div>

					<div class="vision col-6 border h-50 p-5 text-center d-flex flex-column justify-content-center align-items-center">
						<h2 class="h4">Comparte</h2>
						<p>Comparte nuestras publicaciones en redes sociales y ayúdanos a difundir nuestra causa</p>
					</div>

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
