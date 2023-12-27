<?php
function css_fcbh(){
    //Registrar estilos
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', 'all');
    wp_register_style('iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css', 'all'); //Iconos Bootstrap
    wp_register_style('estilos-esteban', get_template_directory_uri() . '/assets/librerias/css/estilos-esteban.css', 'all');
    wp_register_style('estilos-sebastian', get_template_directory_uri() . '/assets/librerias/css/estilos-sebastian.css', 'all');
    
    
    
    //Encolar estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('iconos');
    wp_enqueue_style('estilos-esteban');
    wp_enqueue_style('estilos-sebastian');
}

add_action('wp_enqueue_scripts', 'css_fcbh');