<?php

//  REMOVE GUTENBERG CSS y CARGAR CSS Y JS PROPIOS SI NO ESTAMOS EN PANEL DE ADMIN

    function my_scripts_and_css()
    {
        // REMOVE GUTENBERG CSS

        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        // MY STUFF

        if ( !is_admin() )
        {

            wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/index.js', '', '', true );
            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );




//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );




//  REGISTRO DE MENÚS

    register_nav_menu ( 'header-menu', 'Cabecera del sitio' );
    register_nav_menu ( 'footer-menu-left', 'Pie de página a la izquierda' );
    register_nav_menu ( 'footer-menu-right', 'Pie de página a la derecha' );
    register_nav_menu ( 'aside-menu', 'Aside del sitio' );




//  REGISTRO DE TIPOS DE ENTRADA Y TAXONOMÍAS

    function my_custom_characters_and_relation()
    {
        register_post_type ( 'personajes', array
        (
            'public' => true,
            'exclude_from_search' => false,
            'hierarchical' => false,
            'menu_position' => 6,
            'supports' => array
            (
                'title',
                'editor',
                //'author',
                'thumbnail',
                //'excerpt',
                'revisions',
                //'custom-fields'
            ),
            'show_in_rest' => true, // Habilita Gutenberg
            'labels' => array
            (
                'name' => __( 'Personajes', 'fortunatum' ), // Si queremos internacionalizar estas cadenas...
                'singular_name' => 'Personaje',
                'add_new' => 'Añadir nuevo personaje',
                'add_new_item' => 'Añadir nuevo personaje',
                'all_items' => 'Todos los personajes',
                'edit_item' => 'Editar personaje',
                'new_item' => 'Nuevo personaje',
                'view_item' => 'Ver personaje',
                'search_items' => 'Buscar personaje',
                'not_found' =>  'No se han encontrado personajes',
                'not_found_in_trash' => 'No se han encontrado personajes en la papelera'
            )
        ));

        register_taxonomy ( 'relacion', 'personajes', array
        (
            'show_admin_column' => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'labels' => array
            (
                'name' => 'Relación',
                'singular_name' => 'Relación',
                'search_items' => 'Buscar relaciones',
                'all_items' => 'Todas las relaciones',
                'view_item' => 'Ver relación',
                'edit_item' => 'Editar relación',
                'update_item' => 'Actualizar relación',
                'add_new' => 'Añadir nueva relación',
                'add_new_item' => 'Añadir nueva relación',
                'new_item_name' => 'Nueva relación',
                'not_found' => 'No se han encontrado relaciones.',
                'back_to_items' => __( 'Volver a relaciones', 'fortunatum' ),
                'menu_name' => __( 'Relaciones', 'fotunatum' )
            )
        ));
    }

    add_action ( 'init', 'my_custom_characters_and_relation' );

    function my_custom_questions()
    {
        register_post_type ( 'preguntas', array
        (
            'public' => true,
            'exclude_from_search' => false,
            'hierarchical' => false,
            'menu_position' => 7,
            'supports' => array
            (
                'title',
                'editor',
                //'author',
                //'thumbnail',
                //'excerpt',
                'revisions',
                //'custom-fields'
            ),
            'show_in_rest' => true, // Habilita Gutenberg
            'labels' => array
            (
                'name' => __( 'Preguntas', 'fortunatum' ), // Si queremos internacionalizar estas cadenas...
                'singular_name' => 'Pregunta',
                'add_new' => 'Añadir nueva pregunta',
                'add_new_item' => 'Añadir nueva pregunta',
                'all_items' => 'Todas las preguntas',
                'edit_item' => 'Editar pregunta',
                'new_item' => 'Nueva pregunta',
                'view_item' => 'Ver pregunta',
                'search_items' => 'Buscar pregunta',
                'not_found' =>  'No se han encontrado preguntas',
                'not_found_in_trash' => 'No se han encontrado preguntas en la papelera'
            )
        ));
    }

    add_action ( 'init', 'my_custom_questions' );


// REGISTRAR BLOQUES DE GUTENBERG

    function register_my_own_blocks() {
        
        register_block_type( __DIR__ . '/blocks/block-features' );
        register_block_type( __DIR__ . '/blocks/block-review' );

    }
    add_action( 'init', 'register_my_own_blocks' );




//  REGISTRO DE SIDEBARS

    register_sidebar ( array
    (
        'id' => 'game-sidebar',
        'name' => 'Sidebar enlaces juego',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));




//  ACTIVACIÓN DE LAS PÁGINAS DE OPCIONES DE ACF

    acf_add_options_page ( array
    (
        'page_title' => 'Configuración del sitio web',
        'menu_slug' => 'config'
    ));

    acf_add_options_sub_page ( array
    (
        'page_title' => 'Personalización',
        'parent_slug' => 'config',
    ));

    acf_add_options_sub_page ( array
    (
        'page_title' => 'Scripts',
        'parent_slug' => 'config',
    ));

?>