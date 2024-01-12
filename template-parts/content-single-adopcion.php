<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cbh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="text-center my-5">
		<h2 class="mb-3">Formulario de adopción</h2>
		<p>Gracias por considerar la adopción de una mascota. Este formulario nos ayuda a conocer más sobre ti y tus circunstancias para asegurarnos de que la mascota y su nuevo hogar sean una combinación perfecta. Por favor, completa el formulario con sinceridad y detalle. Tu compromiso con el bienestar animal es apreciado.</p>
	</div>

	<form class="container" action="post">
			<fieldset class="col-12 row p-1 mb-5 contenedor-form-adopcion mx-auto">
				<legend class="mb-4">Datos Personales</legend>
				<label class="col-md-6 col-12 form-label mb-4" for="nombre">Nombre:
					<input class="w-100 form-control" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="apellidos">Apellidos:
					<input class="w-100 form-control" id="apellidos" name="apellidos" type="text" placeholder="Ingrese sus apellidos">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="rut">RUT:
					<input class="w-100 form-control" id="rut" name="rut" type="text" placeholder="Ingrese su rut">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="nacionalidad">Nacionalidad:
					<input class="w-100 form-control" id="nacionalidad" name="nacionalidad" type="text" placeholder="Ingrese su nacionalidad">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="ciudad">Ciudad:
					<input class="w-100 form-control" id="ciudad" name="ciudad" type="text" placeholder="Ingrese su ciudad">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="comuna">Comuna:
					<input class="w-100 form-control" id="comuna" name="comuna" type="text" placeholder="Ingrese su comuna">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="email">Email:
					<input class="w-100 form-control" id="email" name="email" type="email" placeholder="Ingrese su email">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="telefono">Teléfono:
					<input class="w-100 form-control" id="telefono" name="telefono" type="tel" placeholder="Ingrese su teléfono">
				</label>
			</fieldset>
			<fieldset class="col-12 row p-1 contenedor-form-adopcion  mx-auto">
				<legend class="mb-4">Datos Generales Para Adopción</legend>
				<label class="col-md-6 col-12 form-label mb-4" for="nombre_rescatado">Nombre del rescatado al que postula:
					<input class="w-100 form-control" id="nombre_rescatado" name="nombre_rescatado" type="text" readonly value="<?php echo get_the_title();?>">
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="casa_departamento">¿Vive en casa o departamento?
					<select class="form-select" name="casa_departamento" id="casa_departamento">
						<option selected>Eliga una opción</option>
						<option value="casa">Casa</option>
						<option value="departamento">Departamento</option>
					</select>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="arriendo">En caso de arrendar, ¿desde cuándo lo hace?
					<textarea class="form-control" name="arriendo" id="arriendo" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="familia_acuerdo">¿Toda la familia está de acuerdo con la adopción?
					<textarea class="form-control" name="familia_acuerdo" id="familia_acuerdo" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="numero_personas">¿Cuántas personas viven en el hogar?, ¿qué edades tienen?
					<textarea class="form-control" name="numero_personas" id="numero_personas" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="mascotas">¿Actualmente tiene mascotas?
					<select class="form-select" name="mascotas" id="mascotas">
						<option selected>Eliga una opción</option>
						<option value="si">Si</option>
						<option value="no">No</option>
					</select>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="datos_mascota">Si la respuesta es sí ¿de qué edades? ¿están esterilizadas? ¿vacunadas?
					<textarea class="form-control" name="datos_mascota" id="datos_mascota" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="tiempo_sola_mascota">¿Cuánto tiempo al día pasaría sola la mascota?
					<textarea class="form-control" name="tiempo_sola_mascota" id="tiempo_sola_mascota" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="esterilizacion">¿Está de acuerdo con la esterilización? ¿por qué?
					<textarea class="form-control" name="esterilizacion" id="esterilizacion" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="crecimiento_mascota">¿Qué pasaría si la mascota adoptada crece mas de lo que usted espera?
					<textarea class="form-control" name="crecimiento_mascota" id="crecimiento_mascota" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="cuidado_vacaciones_mascota">¿Quién cuidaría a la mascota si usted saliera de vacaciones?
					<textarea class="form-control" name="cuidado_vacaciones_mascota" id="cuidado_vacaciones_mascota" cols="30" rows="4" placeholder="Escriba aquí su respuesta"></textarea>
				</label>
				<label class="col-md-6 col-12 form-label mb-4" for="ley">¿Está al tanto sobre la tenencia responsable de mascotas?
					<select class="form-select" name="ley" id="ley">
						<option selected>Eliga una opción</option>
						<option value="si">Si</option>
						<option value="no">No</option>
					</select>
				</label>
				<div class="text-center p-4">
					<button class="boton-adoptame-ficha" type="submit">Enviar Formulario</button>
				</div>
			</fieldset>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
