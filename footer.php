<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cbh
 */

?>

	<footer class="container-fluid py-4">
		<div class="row text-center">
			<div class="col-12">
				<span class="logo-footer zoom"><?php the_custom_logo(); ?></span>
			</div>
			<div class="col-12 py-2">
				<a href="https://web.facebook.com/CallejerosBuscanHogar/?locale=es_LA&_rdc=1&_rdr" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
				<a href="https://www.instagram.com/fundacioncbh/" target="_blank"><i class="bi bi-instagram fs-2 px-5"></i></a>
				<a href="https://www.tiktok.com/@fundacioncbh" target="_blank"><i class="bi bi-tiktok fs-2"></i></a>
			</div>
			<div class="col-12 mt-3 correo">
				<p><i class="fa-regular fa-envelope"></i> contacto@fundacioncbh.cl</p>
				<a class="fw-semibold aqui" href="http://fundacioncbh.cl/admin/login.php" target="_blank">Registro</a>
				<p class="pt-3">Obtén información sobre la Ley de Tenencia Responsable de Mascotas y Animales de Compañía haciendo clic <a class="aqui" href="https://www.chileatiende.gob.cl/fichas/51436-ley-de-tenencia-responsable-de-mascotas-y-animales-de-compania-ley-cholito" target="_blank">aquí</a></p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
