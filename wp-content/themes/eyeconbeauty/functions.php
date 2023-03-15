<?php

//  CARGAR JS Y CSS

    function my_scripts_and_css()
    {

        //  QUITAR GUTENBERG CSS

        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        //  CARGA MIS ESTILOS Y CSS 
        
        if ( !is_admin() ) { //Si no es en admin

            // if( is_page('Contact')) { //Si es la página Contact

            // wp_enqueue_script ( 'js-topbar', get_stylesheet_directory_uri() . './js/topbar.js' );
        
            // wp_enqueue_style ( 'css-main', get_stylesheet_uri() );
            wp_enqueue_script ( 'js-topbar', get_stylesheet_directory_uri() . '/js/topbar.js', array('jquery'), '1.0.0', true, true );
            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );
			
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 ); //ejecuta el script y los estilos



//  ELIMINAR TAMAÑOS DE IMÁGENES QUE NO NECESITE MI SITIO WEB

    remove_image_size ( '1536x1536' );
    remove_image_size ( '2048x2048' );

    update_option ( 'medium_large_size_w', '0' ); // Esta y la siguiente línea sirven para eliminar el tamaño 'medium_large'
    update_option ( 'medium_large_size_h', '0' );



//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );

    // add_post_type_support ( 'page', 'excerpt' );



//  REGISTRO DE MENÚS

    register_nav_menu ( 'header-menu', 'Menu principal del sitio' );
    register_nav_menu ( 'socialmedia-menu', 'Redes sociales del footer' );
    register_nav_menu ( 'shop-menu', 'Menu de la tienda en el footer' );
		register_nav_menu ( 'help-menu', 'Menu de ayuda en el footer' );
		register_nav_menu ( 'company-menu', 'Menu de la compañia en el footer' );
		register_nav_menu ( 'legal-menu', 'Menu legal de la tienda en el footer' );



//  REGISTRO DE SIDEBARS

    register_sidebar ( array
    (
        'id' => 'post-sidebar',
        'name' => 'Sidebar en entradas',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));

    register_sidebar ( array
    (
        'id' => 'page-sidebar',
        'name' => 'Sidebar en páginas',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));

    //  REGISTRO DE TIPOS DE ENTRADA Y TAXONOMÍAS

    // function my_custom_post_types_and_taxonomies()
    // {
    //     register_post_type ( 'fotofolio', array
    //     (
    //         'public' => true,
    //         'exclude_from_search' => false,
    //         'hierarchical' => false,
    //         'menu_position' => 2,
    //         'supports' => array
    //         (
    //             'title',
    //             'editor',
    //             'author',
    //             'thumbnail',
    //             'excerpt',
    //             'revisions',
    //             'custom-fields'
    //         ),
    //         'show_in_rest' => true, // Habilita Gutenberg
    //         'labels' => array
    //         (
    //             'name' => __( 'Fotofolio', 'loosing' ), // Si queremos internacionalizar estas cadenas...
    //             'singular_name' => 'Foto',
    //             'add_new' => 'Añadir nueva foto',
    //             'add_new_item' => 'Añadir nueva foto',
    //             'all_items' => 'Todas los fotos',
    //             'edit_item' => 'Editar foto',
    //             'new_item' => 'Nueva foto',
    //             'view_item' => 'Ver foto',
    //             'search_items' => 'Buscar fotos',
    //             'not_found' =>  'No se han encontrado fotos',
    //             'not_found_in_trash' => 'No se han encontrado fotos en la papelera'
    //         )
    //     ));

    //     register_taxonomy ( 'place', 'fotofolio', array
    //     (
    //         'show_admin_column' => true,
    //         'hierarchical' => false,
    //         'show_in_rest' => true,
    //         'labels' => array
    //         (
    //             'name' => 'Lugares',
    //             'singular_name' => 'Lugar',
    //             'search_items' => 'Buscar lugares',
    //             'all_items' => 'Todos los lugares',
    //             'view_item' => 'Ver lugar',
    //             'edit_item' => 'Editar lugar',
    //             'update_item' => 'Actualizar lugar',
    //             'add_new' => 'Añadir nuevo lugar',
    //             'add_new_item' => 'Añadir nuevo lugar',
    //             'new_item_name' => 'Nuevo nombre de lugar',
    //             'not_found' => 'No se han encontrado lugares.',
    //             'back_to_items' => __( 'Volver a Lugares', 'loosing' ),
    //             'menu_name' => __( 'Lugares', 'loosing' )
    //         )
    //     ));
    // }

    // add_action ( 'init', 'my_custom_post_types_and_taxonomies' );


    //  ACTIVACIÓN DE LAS PÁGINAS DE OPCIONES DE ACF
    
    // acf_add_options_page ( array
    // (
    //     'page_title' => 'Configuración del sitio web',
    //     'menu_slug' => 'config'
    // ));
    
    // acf_add_options_sub_page ( array
    // (
    //     'page_title' => 'Personalización',
    //     'parent_slug' => 'config',
    // ));
    
    // acf_add_options_sub_page ( array
    // (
    //     'page_title' => 'Scripts',
    //     'parent_slug' => 'config',
    // ));


		// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
?>