<?php
function css_fcbh(){
    //Registrar estilos
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', 'all');
    wp_register_style('iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css', 'all'); //Iconos Bootstrap
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Rubik:wght@300;400&display=swap', 'all');
    wp_register_style('slick-css', get_template_directory_uri() . '/assets/librerias/css/slick.css', 'all');
    wp_register_style('slick-theme', get_template_directory_uri() . '/assets/librerias/css/slick-theme.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
        
    
    
    //Encolar estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('iconos');
    wp_enqueue_style('fuente');
    wp_enqueue_style('slick-css');
    wp_enqueue_style('slick-theme');
    wp_enqueue_style('estilos');
}

add_action('wp_enqueue_scripts', 'css_fcbh');