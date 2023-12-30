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
			<?php
			function contar_entradas() {
				$count_custom_posts = wp_count_posts('adopcion')->publish;
				return $count_custom_posts;;
			}
			?>
			<article class="container p-4">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12 mb-lg-0 mb-md-3 mb-3">
						<h1><?php the_field('titulo_nuestra_causa');?></h1>
						<p><?php the_field('descripcion_nuestra_causa');?></p>
					</div>
					<div class="col-lg-6 col-md-12 col-12">
						<div class="d-flex flex-column text-center contenedor-contador p-2">
							<span class="fs-1"><?php echo contar_entradas();?></span>
							<p><?php the_field('texto_contador_de_adopcion');?></p>
						</div>
					</div>
				</div>
			</article>
		</section>
		<!--Contador de adopciones-->

		<!--Migas de pan-->
		<div class="container my-5">
			<nav aria-label="breadcrumb" class="migas">
			<ol class="breadcrumb m-0 p-0">
				<li class="breadcrumb-item"><a class="text-decoration-none link-migas" href="<?php echo home_url();?>">Inicio</a></li>
				<li class="breadcrumb-item active fw-bold" aria-current="page"><?php echo get_the_title();?></li>
			</ol>
			</nav>
		</div>
		<!--Migas de pan-->

		<!--Filtros-->
		<div class="container d-flex flex-lg-row flex-column justify-content-lg-around justify-content-center align-items-center">
			<button id="cachorros" class="boton-filtro-mascotas mb-lg-0 mb-3"><i class="fa-solid fa-dog fs-6"></i> Cachorros</button>
			<button id="perros" class="boton-filtro-mascotas mb-lg-0 mb-3"><i class="fa-solid fa-dog fs-5"></i> Perros</button>
			<button id="gatos" class="boton-filtro-mascotas"><i class="fa-solid fa-cat fs-5"></i> Gatos</button>
		</div>
		<!--Filtros-->

		<!--Cards mascotas-->
		<section class="container my-5">
			<?php include get_template_directory() . '/assets/modulos/modulo-adopcion/loop-cachorros.php';?>
			<?php include get_template_directory() . '/assets/modulos/modulo-adopcion/loop-perros.php';?>
			<?php include get_template_directory() . '/assets/modulos/modulo-adopcion/loop-gatos.php';?>
		</section>
		<!--Cards mascotas-->

		<!--Antes y después-->
		<section class="container my-5">
			<div class="row text-center">
				<h2><?php the_field('titulo_de_seccion');?></h2>
				<p><?php the_field('descripcion_de_la_seccion');?></p>
			</div>
			<!--Carrusel de casos de exito-->
			<div id="carrusel_exitos" class="my-5">

				<figure>
					<?php 
						$image = get_field('foto_1');
						if( !empty( $image ) ): ?>
							<img class="img-ayd" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</figure>
				<figure>
					<?php 
						$image = get_field('foto_2');
						if( !empty( $image ) ): ?>
							<img class="img-ayd" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</figure>
				<figure>
					<?php 
						$image = get_field('foto_3');
						if( !empty( $image ) ): ?>
							<img class="img-ayd" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</figure>
				<figure>
					<?php 
						$image = get_field('foto_4');
						if( !empty( $image ) ): ?>
							<img class="img-ayd" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</figure>
				<figure>
					<?php 
						$image = get_field('foto_5');
						if( !empty( $image ) ): ?>
							<img class="img-ayd" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</figure>
				
			</div>
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
