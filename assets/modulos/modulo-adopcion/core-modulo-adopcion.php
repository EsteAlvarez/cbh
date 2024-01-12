<?php

function adopcion_register() {

    $labels = array(
        'name' => _x('Adopción', 'post type general name'),
        'singular_name' => _x('Adopción', 'post type singular name'),
        'add_new' => _x('Agregar Callejero', 'slideshow_two item'),
        'add_new_item' => __('Agregar adopcion'),
        'edit_item' => __('Editar adopcion'),
        'new_item' => __('Nuevo adopcion'),
        'view_item' => __('Ver el adopcion'),
        'search_items' => __('Buscar adopcion'),
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
        'menu_icon'  => 'dashicons-heart',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail'), //Modificar tipo de contenido de post
        'rewrite' => array('slug' => 'adopcion', 'with_front' => false)
    ); 

    register_post_type( 'adopcion' , $args );
}
    add_action('init', 'adopcion_register');

    /*categorías personalizadas, taxonomía de categoría separada para que no se fucione con categorías
    de post*/
    function categoria_adopcion() {

        register_taxonomy(
            'categoria-adopcion',
            'adopcion',
            array(
                'label' => __( 'Categorías' ),
                'rewrite' => array( 'slug' => 'categoria-adopcion' ),
                'hierarchical' => true, //Herencia categorías y sub categorías
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
            )
        );
    }
    add_action( 'init', 'categoria_adopcion' );
