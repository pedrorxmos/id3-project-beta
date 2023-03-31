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
		wp_dequeue_style( 'select2' );
    wp_deregister_style( 'select2' );

		//  CARGA MIS ESTILOS Y CSS 
		
		if ( !is_admin() ) { //Si no es en admin

			// if( is_page('Contact')) { //Si es la página Contact

			// wp_enqueue_script ( 'js-topbar', get_stylesheet_directory_uri() . './js/topbar.js' );
	
			// wp_enqueue_style ( 'css-main', get_stylesheet_uri() );
			wp_enqueue_script ( 'js-topbar', get_stylesheet_directory_uri() . '/js/topbar.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-carousel', get_stylesheet_directory_uri() . '/js/carousel.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-variation', get_stylesheet_directory_uri() . '/js/get-actual-variation.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-dropdown', get_stylesheet_directory_uri() . '/js/dropdown.js', array('jquery'), '1.0.0', true, true );
			wp_enqueue_script ( 'js-productwrapper', get_stylesheet_directory_uri() . '/js/product-wrapper.js', array('jquery'), '1.0.0', true, true );

			wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );

		}
	}

	add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 ); //ejecuta el script y los estilos


  //  ELIMINAR TAMAÑOS DE IMÁGENES QUE NO NECESITE MI SITIO WEB

	remove_image_size ( '1536x1536' );
	remove_image_size ( '2048x2048' );

	update_option ( 'medium_large_size_w', '0' ); // Esta y la siguiente línea sirven para eliminar el tamaño 'medium_large'
	update_option ( 'medium_large_size_h', '0' );

	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'cart-thumnail', 200, 200 ); // 100 wide and 100 high
	}

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

	//REMOVE UPDATE BUTTON CART & AUTOUPDATE	
	add_action( 'wp_head', 'cxc_cart_refresh_update_hide_button' );
	function cxc_cart_refresh_update_hide_button() { 
		?>
		<style>
			.woocommerce button[name="update_cart"],
			.woocommerce input[name="update_cart"] { display: none; }
		</style>
		<?php
	}

	add_action( 'wp_footer', 'cxc_cart_refresh_update_qty' ); 
	function cxc_cart_refresh_update_qty() { 
		if ( is_cart() || ( is_cart() && is_checkout() ) ) {
			?>
			<script>
				jQuery( function( $ ) {
					let timeout;
					jQuery('.woocommerce').on('click', '.qty-btn', function(){
							let inpt = $(this).parent().find('.quantity input');
							//console.log($(this).attr('class').indexOf("qty-add") >= 0);
							if($(this).attr('class').indexOf("qty-add") >= 0) {
								inpt.val(+inpt.val() + 1);
								//console.log('add');
								inpt.trigger('change');
							}
							else {
								//if(inpt.val() > 1) {
									inpt.val(+inpt.val() - 1);
									inpt.trigger('change');
								//}
								//console.log('remove');
							}
							//jQuery("input.qty").trigger("change"); // trigger cart update
					});

					jQuery('.woocommerce').on('change', 'input.qty', function(){
						if ( timeout !== undefined ) {
							clearTimeout( timeout );
						}
						timeout = setTimeout(function() {
							jQuery("[name='update_cart']").trigger("click"); // trigger cart update
						}, 0 ); // 1 second delay, half a second (500) seems comfortable too
					});
				} );
			</script>
			<?php
		}
	}

	//AUTO UPDATE CART PRODUCT NUMBER ON TOPBAR
	add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

	function woocommerce_header_add_to_cart_fragment( $fragments ) {
		ob_start();
		?>
		<a href="<?php echo home_url( '/bag/ '); ?>" class="nav-action nav-bag">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
			</svg>
			<?php if(WC()->cart->get_cart_contents_count() > 0) :?>
			<span class="nav-bag__number" ><?php echo WC()->cart->get_cart_contents_count() ?></span>
			<?php endif; ?>
		</a>
		<?php
		
		$fragments['a.nav-bag'] = ob_get_clean();
		
		return $fragments;
	}

	//REMOVE THE QUANTITY ON PRODUCT DETAIL INLINE STYLE
	add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart' );
 
	function bbloomer_echo_qty_front_add_cart() {
		?>
			<script>
				jQuery( function( $ ) {
					$('.woocommerce-variation-add-to-cart .quantity').attr('style', function(i, style)
					{
							return style && style.replace(/display[^;]+;?/g, '');
					});
				} );
			</script>
		<?php
	}


	add_filter( 'woocommerce_account_menu_items', 'misha_remove_my_account_dashboard' );
	function misha_remove_my_account_dashboard( $menu_links ){
		
		unset( $menu_links[ 'dashboard' ] );
		return $menu_links;
		
	}
	// perform a redirect
	add_action( 'template_redirect', 'misha_redirect_to_orders_from_dashboard' );
	function misha_redirect_to_orders_from_dashboard(){
		
		if( is_account_page() && empty( WC()->query->get_current_endpoint() ) ){
			wp_safe_redirect( wc_get_account_endpoint_url( 'edit-account' ) );
			exit;
		}
	}

	//REORDER ACCOUT MENU
	add_filter( 'woocommerce_account_menu_items', 'remove_my_account_menu' );
	function remove_my_account_menu( $menu_links ){
		
		$menu_links = array(
			'edit-account'    => __( 'Account Details', 'woocommerce' ),
			'edit-address'    => _n( 'Address Book', 'Address', (int) wc_shipping_enabled(), 'woocommerce' ),
      'orders'          => __( 'My Orders', 'woocommerce' ),
      
      'customer-logout' => __( 'Logout', 'woocommerce' ),
		);
		//unset( $menu_links[ 'orders' ] );

		return $menu_links;
		
	}

	/**
	 * @snippet       Add First & Last Name to My Account Register Form - WooCommerce
	 * @how-to        Get CustomizeWoo.com FREE
	 * @author        Rodolfo Melogli
	 * @compatible    WC 3.9
	 * @donate $9     https://businessbloomer.com/bloomer-armada/
	 */
		
	///////////////////////////////
	// 1. ADD FIELDS
		
	add_action( 'woocommerce_register_form_start', 'bbloomer_add_name_woo_account_registration' );
		
	function bbloomer_add_name_woo_account_registration() {
			?>
		
			<div class="field form-row form-row-first">
				<label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
			</div>
		
			<div class="field form-row form-row-last">
			<label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
			<input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
			</div>
		
			<div class="clear hide"></div>
		
			<?php
	}
		
	///////////////////////////////
	// 2. VALIDATE FIELDS
		
	add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_name_fields', 10, 3 );
		
	function bbloomer_validate_name_fields( $errors, $username, $email ) {
			if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
					$errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
			}
			if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
					$errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
			}
			return $errors;
	}
		
	///////////////////////////////
	// 3. SAVE FIELDS
		
	add_action( 'woocommerce_created_customer', 'bbloomer_save_name_fields' );
		
	function bbloomer_save_name_fields( $customer_id ) {
			if ( isset( $_POST['billing_first_name'] ) ) {
					update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
					update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
			}
			if ( isset( $_POST['billing_last_name'] ) ) {
					update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
					update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
			}
		
	}

	// CHANGE TEXT WHEN PRODUCT IN LIST IS ADDED TO CART

	add_filter( 'gettext', function( $translated_text ) {
    if ( 'View cart' === $translated_text ) {
        $translated_text = 'Added to your bag';
    }
    return $translated_text;
	} );


	//REDIRECT TO LOGIN WHEN USER IS NOT LOGGED ON CHECKOUT AND REDIRECT BACK TO CHECKOUT

	add_action('template_redirect','check_if_logged_in');
    function check_if_logged_in()
    {
			$pageid = get_option( 'woocommerce_checkout_page_id' );
			if(!is_user_logged_in() && is_page($pageid))
			{
				$url = add_query_arg(
					'redirect_to',
					get_permalink($pagid),
					site_url('/my-account/') // your my account url
				);
				wp_redirect($url);
				exit;
		}
			if(is_user_logged_in())
			{
			if(is_page(get_option( 'woocommerce_myaccount_page_id' )))
			{
					
				$redirect = $_GET['redirect_to'];
				if (isset($redirect)) {
				echo '<script>window.location.href = "'.$redirect.'";</script>';
				}
	
			}
			}
    }
?>