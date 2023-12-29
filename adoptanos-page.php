<?php
/**
 * Template Name: Adóptanos
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
		<!--Contador de adopciones-->
		<section class="container-fluid banner-causa">
			<article class="container p-4">
				<div class="row">
					<div class="col-6">
						<h1>Nuestra Causa</h1>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti qui pariatur adipisci ex et doloremque quaerat iusto eaque quidem assumenda.</p>
					</div>
					<div class="col-6 d-flex justify-content-around">
						<div class="d-flex flex-column text-center border p-2">
							<span class="fs-1">80</span>
							<p>Animales rescatados</p>
						</div>
						<div class="d-flex flex-column text-center border p-2">
							<span class="fs-1">50</span>
							<p>Animales en adopcion</p>
						</div>
					</div>
				</div>
			</article>
		</section>
		<!--Contador de adopciones-->

		<!--Migas de pan-->
		<div class="container my-5">
			<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a href="#">Inicio</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page"><?php echo get_the_title();?></li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->

		<!--Filtros-->
		<div class="container d-flex justify-content-around">
			<button>Cachorros</button>
			<button>Perros</button>
			<button>Gatos</button>
		</div>
		<!--Filtros-->

		<!--Cards mascotas-->
		<section class="container my-5">
			<div class="row">
				<div class="col-md-4">
					<div class="card mx-auto" style="width: 18rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mx-auto" style="width: 18rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mx-auto" style="width: 18rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!--Cards mascotas-->

		<!--Antes y después-->
		<section class="container my-5">
			<div class="row text-center">
				<h2>Antes y después</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, explicabo ipsum. Ad accusamus itaque incidunt, perspiciatis eligendi cum dolore esse! Nihil minus, soluta blanditiis nemo deserunt veniam magni dolores eveniet numquam odio repudiandae! Minus, consequuntur magnam earum nemo deleniti repudiandae.</p>
			</div>
			<!--Carrusel de casos de exito-->
			<!--Carrusel de casos de exito-->
		</section>
		<!--Antes y después-->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'adoptanos-page' );

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
