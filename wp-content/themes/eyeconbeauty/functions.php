<?php 

	function disable_woocommerce_styles() {
		add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
	}
	add_action ( 'init', 'disable_woocommerce_styles' );
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
			wp_enqueue_script ( 'js-carousel', get_stylesheet_directory_uri() . '/js/carousel.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-variation', get_stylesheet_directory_uri() . '/js/get-actual-variation.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-infogroup', get_stylesheet_directory_uri() . '/js/info-groups.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-cartvardd', get_stylesheet_directory_uri() . '/js/cart-variation-dd.js', array('jquery'), '1.0.0', true, true );

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

  //  REGISTRO DE TIPOS DE ENTRADA Y TAXONOMÍAS

	function my_custom_post_types_and_taxonomies()
	{
		register_post_type ( 'hero-banner', array
		(
			'public' => true,
			'exclude_from_search' => false,
			'hierarchical' => false,
			'supports' => array
			(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'revisions',
				'custom-fields'
			),
			'show_in_rest' => true, // Habilita Gutenberg
			'labels' => array
			(
				'name' => __( 'Hero Banner', 'eyecon' ), // Si queremos internacionalizar estas cadenas...
				'singular_name' => 'Banner',
				'add_new' => 'Añadir nuevo banner',
				'add_new_item' => 'Añadir nuevo banner',
				'all_items' => 'Todas los banners',
				'edit_item' => 'Editar banner',
				'new_item' => 'Nueva banner',
				'view_item' => 'Ver banner',
				'search_items' => 'Buscar banner',
				'not_found' =>  'No se han encontrado banners',
				'not_found_in_trash' => 'No se han encontrado banners en la papelera'
			)
		));

		register_post_type ( 'community', array
		(
			'public' => true,
			'exclude_from_search' => false,
			'hierarchical' => false,
			'supports' => array
			(
				'title',
				'custom-fields'
			),
			'show_in_rest' => true, // Habilita Gutenberg
			'labels' => array
			(
				'name' => __( 'Community', 'eyecon' ), // Si queremos internacionalizar estas cadenas...
				'singular_name' => 'Community Post',
				'add_new' => 'Añadir nuevo community post',
				'add_new_item' => 'Añadir nuevo community post',
				'all_items' => 'Todas los community posts',
				'edit_item' => 'Editar community post',
				'new_item' => 'Nueva community post',
				'view_item' => 'Ver community post',
				'search_items' => 'Buscar community post',
				'not_found' =>  'No se han encontrado community posts',
				'not_found_in_trash' => 'No se han encontrado community posts en la papelera'
			)
		));

		// register_taxonomy ( 'place', 'fotofolio', array
		// (
		// 	'show_admin_column' => true,
		// 	'hierarchical' => false,
		// 	'show_in_rest' => true,
		// 	'labels' => array
		// 	(
		// 		'name' => 'Lugares',
		// 		'singular_name' => 'Lugar',
		// 		'search_items' => 'Buscar lugares',
		// 		'all_items' => 'Todos los lugares',
		// 		'view_item' => 'Ver lugar',
		// 		'edit_item' => 'Editar lugar',
		// 		'update_item' => 'Actualizar lugar',
		// 		'add_new' => 'Añadir nuevo lugar',
		// 		'add_new_item' => 'Añadir nuevo lugar',
		// 		'new_item_name' => 'Nuevo nombre de lugar',
		// 		'not_found' => 'No se han encontrado lugares.',
		// 		'back_to_items' => __( 'Volver a Lugares', 'loosing' ),
		// 		'menu_name' => __( 'Lugares', 'loosing' )
		// 		)
		// ));
	}

	add_action ( 'init', 'my_custom_post_types_and_taxonomies' );

	//ADD WOOCOMMERCE SUPPORT TO MY THEME

	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


	// RENAME SORTING OPTIONS OF PRODUCT LIST
		
	function bbloomer_rename_sorting_option_woocommerce_shop( $options ) {
		$options['menu_order'] = 'Staff Faves';  
		$options['popularity'] = 'Best Sellers';  
		$options['rating'] = 'Top Rated';   
		$options['date'] = 'Newest';  
		$options['price'] = 'Lowest Price';  
		$options['price-desc'] = 'Highest Price';  
		return $options;
	}

	add_filter( 'woocommerce_catalog_orderby', 'bbloomer_rename_sorting_option_woocommerce_shop' );


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
			'page_title' => 'Scripts & Styles',
			'parent_slug' => 'config',
	));

	
  //Remove product data tabs

	add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

	function woo_remove_product_tabs( $tabs ) {

			//unset( $tabs['description'] );      	// Remove the description tab
			unset( $tabs['reviews'] ); 			// Remove the reviews tab
			unset( $tabs['additional_information'] );  	// Remove the additional information tab

			return $tabs;
	}

	//REMOVE THE LINK FROM WOOCOMMERCE IMAGES

	add_filter( 'woocommerce_single_product_image_thumbnail_html', 'custom_remove_product_link' );
	add_filter( 'woocommerce_single_product_image_gallery_html', 'custom_remove_product_link' );
	function custom_remove_product_link( $html ) {
		return strip_tags( $html, '<div><img>' );
	}

	//REMOVE THE SPAN WRAPPER OF CONTACTFORM7 INPUTS

	add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

			return $content;
	});

		
	//Do not copy the opening PHP tag.

/*
*@link: http://extracatchy.net/remove-p-and-br-tags-cf7/
*@remove default <p> and <br> tags from CF7
*/

define('WPCF7_AUTOP', false );

?>