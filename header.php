<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cbh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('m-0 overflow-preload'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cbh' ); ?></a>
	
	<!--Preload-->
	<div id="preload_fcbh" class="preload text-center"><?php the_custom_logo(); ?></div>
	<!--Preload-->

<header id="masthead" class="container-fluid bg-white">
	<nav class="navbar navbar-expand-lg bg-transparent">
		<div class="container-fluid">
		<span class="navbar-brand zoom m-0 p-0"><?php the_custom_logo(); ?></span>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa-solid fa-dog"></i> / <i class="fa-solid fa-cat"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto text-lg-start text-center">
				<li class="nav-item pe-2 mb-lg-0 mb-2">
					<a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path('inicio'))); ?>">Inicio</a>
				</li>
				<li class="nav-item pe-2 mb-lg-0 mb-2">
					<a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path('sobre-nosotros'))); ?>">Sobre Nosotros</a>
				</li>
				<li class="nav-item pe-2 mb-lg-0 mb-2">
					<a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path('adoptanos'))); ?>">Adóptanos</a>
				</li>
				<li class="nav-item pe-2 mb-lg-0 mb-2">
					<a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path('proximos-eventos'))); ?>">Próximos Eventos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))); ?>">Contacto</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>
	<!-- <div class="modal fade modal-info" id="inicio" tabindex="-1" aria-labelledby="inicioModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollabl modal-lg">
				<div class="modal-content">
					<div class="modal-body p-5 d-flex justify-content-center">
						<form>
							<label class="fw-bold" for="username">Nombre de Usuario:</label>
							<input class="mb-5" type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
							<label class="fw-bold" for="password">Contraseña:</label>
							<input class="mb-3" type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
							<div class="d-flex justify-content-end mb-5">
							<a href="#">¿Olvidó su contraseña?</a>
							</div>
							<div class="d-flex justify-content-center">
								<button class="mb-4 px-5" type="submit">Iniciar Sesión</button>
							</div>
					</div>
				</div>
			</div>
	</div> -->
</header>