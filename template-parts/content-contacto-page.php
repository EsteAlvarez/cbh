<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cbh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
<form class="container" action="post">
    <fieldset class="row">
        <!--Nombre-->
        <label for="contacto_nombre" class="form-label col-md-6 col-12 mb-3">Nombre: 
            <input class="form-control w-100" id="contacto_nombre" name="contacto_nombre" type="text" placeholder="Ingrese su nombre">
        </label>
        <!--Nombre-->

        <!--Apellido-->
        <label for="contacto_apellido" class="form-label col-md-6 col-12 mb-3">Apellido: 
            <input class="form-control w-100" id="contacto_apellido" name="contacto_apellido" type="text" placeholder="Ingrese su apellido">
        </label>
        <!--Apellido-->

        <!--Email-->
        <label for="contacto_email" class="form-label col-md-6 col-12 mb-3">Email: 
            <input class="form-control w-100" id="contacto_email" name="contacto_email" type="email" placeholder="Ingrese su email">
        </label>
        <!--Email-->

        <!--Teléfono-->
        <label for="contacto_telefono" class="form-label col-md-6 col-12 mb-3">Teléfono: 
            <input class="form-control w-100" id="contacto_telefono" name="contacto_telefono" type="email" placeholder="Ingrese su teléfono">
        </label>
        <!--Teléfono-->

        <!--Mensaje-->
        <label for="contacto_mensaje">Mensaje: 
            <textarea class="form-control" name="contacto_mensaje" id="contacto_mensaje" cols="30" rows="10" placeholder="Ingrese su mensaje"></textarea>
        </label>
        <!--Mensaje-->
    </fieldset>
    <div class="text-center my-5">
		<button class="boton-adoptame-ficha" type="submit">Enviar Formulario</button>
	</div>
</form>
</article><!-- #post-<?php the_ID(); ?> -->
