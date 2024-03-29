<?php

function eventos_register() {

    $labels = array(
        'name' => _x('Eventos', 'post type general name'),
        'singular_name' => _x('Eventos', 'post type singular name'),
        'add_new' => _x('Agregar eventos', 'slideshow_two item'),
        'add_new_item' => __('Agregar eventos'),
        'edit_item' => __('Editar eventos'),
        'new_item' => __('Nuevo eventos'),
        'view_item' => __('Ver el eventos'),
        'search_items' => __('Buscar eventos'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search' => false,
        'capability_type' => 'post', //puede cambiar por 'page'
        'menu_icon'  => 'dashicons-tickets',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'editor'), //Modificar tipo de contenido de post
        'rewrite' => array('slug' => 'eventos', 'with_front' => false)
    ); 

    register_post_type( 'eventos' , $args );
}
    add_action('init', 'eventos_register');

    /*categorías personalizadas, taxonomía de categoría separada para que no se funcione con categorías
    de post*/
    function categoria_eventos() {

        register_taxonomy(
            'categoria-eventos',
            'eventos',
            array(
                'label' => __( 'Categorías' ),
                'rewrite' => array( 'slug' => 'categoria-eventos' ),
                'hierarchical' => true, //Herencia categorías y sub categorías
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
            )
        );
    }
    add_action( 'init', 'categoria_eventos' );
