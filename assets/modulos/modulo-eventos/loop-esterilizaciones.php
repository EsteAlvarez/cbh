<script>
function hoja_estilos_eventos() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/cbh/assets/modulos/modulo-eventos/modulo-eventos.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
hoja_estilos_eventos();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->


    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 3; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'post_type' => 'eventos',
                'orderby' => 'date', // Ordenar por fecha
                'order' => 'DESC', // Orden descendente
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array (
                    array(
                        'taxonomy' => 'categoria-eventos',
                        'field' => 'slug',
                        'terms' => 'esterilizaciones'
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <a class="row link-eventos my-md-5 my-3" href="<?php the_permalink();?>">
            <div class="col-lg-3 d-lg-block d-none">
                <div class="fondo-esterilizaciones p-5 d-flex justify-content-center align-items-center h-100">
                    <h2><?php echo esc_html ( get_field( 'fecha_de_evento' ) ); ?></h2>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="fondo-contenido-eventos-card p-3 h-100">
                    <h2><?php echo get_the_title();?></h2>
                    <h3 class="d-lg-none d-block h4"><?php echo esc_html ( get_field( 'fecha_de_evento' ) ); ?></h3>
                    <p class="extracto-evento-card"><?php the_field('extracto');?></p>
                    <span><?php the_field('hora_de_inicio'); ?> - <?php the_field('hora_de_cierre'); ?></span>
                </div>
            </div>
        </a>
        
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    <!--Custom Loop-->
