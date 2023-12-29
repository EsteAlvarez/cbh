<script>
function hoja_estilos_adopcion() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/cbh/assets/modulos/modulo-adopcion/modulo-adopcion.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
hoja_estilos_adopcion();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->


<!--Sección 1-->
<div class="row" id="contenedor_cachorros">
    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 6; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'post_type' => 'adopcion',
                'orderby' => 'DSC',
                'order' => 'ASC',//DSC descendente 
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array (
                    array(
                        'taxonomy' => 'categoria-adopcion',
                        'field' => 'slug',
                        'terms' => 'cachorros'
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="card mx-auto h-100 position-relative" style="width: 18rem;">
                <figure class="p-2 imagen-mascota m-0"><?php echo cbh_post_thumbnail(); ?></figure>
                <div class="card-body pt-0 position-absolute">
                    <h3 class="card-title fw-bold"><i class="fa-solid fa-dog h3"></i> <?php echo get_the_title();?></h3>
                    <p class="card-text"><?php the_field('personalidad');?></p>
                    <a href="<?php the_permalink();?>" class="boton-adoptame-cachorros">Más información</a>
                </div>
            </div>
		</div>
        
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    <!--Custom Loop-->

</div>
<!--Sección 1-->