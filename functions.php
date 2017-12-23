<?php
// Include parent theme styles. 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*function shopstar_child_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shopstar_content_width', 660 );
}
add_action( 'after_setup_theme', 'shopstar_child_content_width', 0 );*/
define('WOOCOMMERCE_USE_CSS', false);
define( 'WC_MAX_LINKED_VARIATIONS', 99 );
/*Proceeed To checkout at Top
add_action( 'woocommerce_before_cart', 'move_proceed_button' );
function move_proceed_button( $checkout ) {
	echo '<a href="' . esc_url( WC()->cart->get_checkout_url() ) . '" class="checkout-button button alt wc-forward" >' . __( 'Proceed to Checkout', 'woocommerce' ) . '</a>';
}*/
/*function shopstar_child_after_remove_product($cart_item_key) {
    // Your custom function
}
add_action( 'woocommerce_cart_item_removed', 'shopstar_child_after_remove_product' );*/
/*Add inline script
function add_inline_script() {
  echo "<script></script>\n";
}
add_action( 'wp_head', 'add_inline_script', 0 );*/
/*Add Icomoon Search Icon To AWS Search Box
    add_filter('aws_searchbox_markup', 'aws_searchbox_markup');
    function aws_searchbox_markup( $markup ) {
    $pattern = '/(<input\s*type=\"text\".*?\/>)/i';
    $markup = preg_replace( $pattern, '${1}<i class="icon-search"></i>', $markup );
    return $markup;
    }*/

/* Disable All WooCommerce  Styles and Scripts Except Shop Pages*/
add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_styles_scripts', 99 );
function dequeue_woocommerce_styles_scripts() {
if ( function_exists( 'is_woocommerce' ) ) {
if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
# Styles
wp_dequeue_style( 'woocommerce-general' );
wp_dequeue_style( 'woocommerce-layout' );
wp_dequeue_style( 'woocommerce-smallscreen' );
wp_dequeue_style( 'woocommerce_frontend_styles' );
wp_dequeue_style( 'woocommerce_fancybox_styles' );
wp_dequeue_style( 'woocommerce_chosen_styles' );
wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
# Scripts
wp_dequeue_script( 'wc_price_slider' );
wp_dequeue_script( 'wc-single-product' );
wp_dequeue_script( 'wc-add-to-cart' );
wp_dequeue_script( 'wc-cart-fragments' );
wp_dequeue_script( 'wc-checkout' );
wp_dequeue_script( 'wc-add-to-cart-variation' );
wp_dequeue_script( 'wc-single-product' );
wp_dequeue_script( 'wc-cart' );
wp_dequeue_script( 'wc-chosen' );
wp_dequeue_script( 'woocommerce' );
wp_dequeue_script( 'prettyPhoto' );
wp_dequeue_script( 'prettyPhoto-init' );
wp_dequeue_script( 'jquery-blockui' );
wp_dequeue_script( 'jquery-placeholder' );
wp_dequeue_script( 'fancybox' );
wp_dequeue_script( 'jqueryui' );
}
}
}
/*Redirect Continue Shooping Button*/
/*function my_woocommerce_continue_shopping_redirect( $return_to ) {
	return get_permalink( wc_get_page_id( 'shop' ) );
}
add_filter( 'woocommerce_continue_shopping_redirect', 'my_woocommerce_continue_shopping_redirect', 20 );

/*
 * Define image sizes
 */
function shopstar_child_woocommerce_image_dimensions() {
	global $pagenow;
 
	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}
  	$catalog = array(
		'width' 	=> '300',	// px
		'height'	=> '300',	// px
		'crop'		=> 1 		// true
	);
	$single = array(
		'width' 	=> '400',	// px
		'height'	=> '400',	// px
		'crop'		=> 1 		// true
	);
	$thumbnail = array(
		'width' 	=> '180',	// px
		'height'	=> '180',	// px
		'crop'		=> 0 		// false
	);
	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
add_action( 'after_switch_theme', 'shopstar_child_woocommerce_image_dimensions', 1 );
//Add Footer Mneu
function register_menu() {
  register_nav_menu('footer',__( 'Footer' ));
}
add_action( 'init', 'register_menu' );
//Unregister default Wordpress widgets
 function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     unregister_widget('WP_Widget_Search');
     unregister_widget('WP_Widget_Text');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     unregister_widget('WP_Nav_Menu_Widget');
}
add_action('widgets_init', 'unregister_default_widgets', 11);
/*Remove Additonal information Tab*/
add_filter( 'woocommerce_product_tabs', 'shopstar_child_remove_product_tabs', 98 );
 function shopstar_child_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] ); 
    return $tabs;
} 
/*Hide Product Count showing in Category View*/
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );
function woo_remove_category_products_count() {
	return;
}
/*Auto Update cart and show Update Button
add_action( 'wp_footer', 'cart_update_qty_script' );
function cart_update_qty_script() {
  if (is_cart()) :
   ?>
    <script>
    	jQuery(window).on('load', function(){
    		 jQuery("[name='update_cart']").removeAttr('disabled');
    	});
    	jQuery( document.body ).on( 'updated_cart_totals', function(){
             jQuery("[name='update_cart']").removeAttr('disabled');
		});
		jQuery('div.woocommerce').on('change', '.qty', function(){
           jQuery("[name='update_cart']").trigger("click"); 
        });
   </script>
<?php
endif;
}
/*Auto Update cart and hide Update Button - script now on cart page
add_action( 'wp_footer', 'cart_update_qty_script' );
function cart_update_qty_script() {
  if (is_cart()) :
   ?>
    <script>
    	   jQuery(window).on('load', function(){
    	     jQuery("[name='update_cart']").closest( 'form' ).find( 'input[name=\"update_cart\"]' ).hide();
    	          });
    	         jQuery( document.body ).on( 'updated_cart_totals', function(){
              jQuery("[name='update_cart']").closest( 'form' ).find( 'input[name=\"update_cart\"]' ).hide();
		        });
		          jQuery('div.woocommerce').on('change', '.qty', function(){
               jQuery("[name='update_cart']").trigger("click"); 
        });
   </script>
<?php
endif;
}
/*Direct To Cart
add_filter('woocommerce_add_to_cart_redirect', 'add_to_cart_redirect');
function add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = wc_get_checkout_url();
 return $checkout_url;
}*/
/*Remove Breadcrumbs
add_action( 'init', 'shopstar_child_remove_wc_breadcrumbs' );
function shopstar_child_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}*/
/*Change Breadcrumb values*/
function woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' > ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Shop', 'breadcrumb', 'woocommerce' ),
        );
}
add_filter( 'woocommerce_breadcrumb_defaults', 'woocommerce_breadcrumbs' );
/*Direct To Checkout using cart and checkout on checkout page*/
add_filter('woocommerce_add_to_cart_redirect', 'shopstar_child_add_to_cart_redirect');
function shopstar_child_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = $woocommerce->cart->get_checkout_url();
 return $checkout_url;
}
/*Check for empty-cart get param to clear the cart*/
add_action('init', 'woocommerce_clear_cart_url');
function woocommerce_clear_cart_url() {
    global $woocommerce;
    if( isset($_REQUEST['clear-cart']) ) {
        $woocommerce->cart->empty_cart();
    }
}
/*Remove Choose Option Text on Variations Dropdaown*/
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'shopstar_child_remove_select_text');
function shopstar_child_remove_select_text( $args ){ $args['show_option_none'] = '';
return $args; }
// Main Price Setting changed to "From" and remove higher price
function shopstar_child_variable_price_format( $price, $product ) {
    $prefix = sprintf('%s: ', __('From', 'shopstar_child'));
 
    $min_price_regular = $product->get_variation_regular_price( 'min', true );
    $min_price_sale    = $product->get_variation_sale_price( 'min', true );
    $max_price = $product->get_variation_price( 'max', true );
    $min_price = $product->get_variation_price( 'min', true );
 
    $price = ( $min_price_sale == $min_price_regular ) ?
        wc_price( $min_price_regular ) :
        '<del>' . wc_price( $min_price_regular ) . '</del>' . '<ins>' . wc_price( $min_price_sale ) . '</ins>';
 
    return ( $min_price == $max_price ) ?
        $price :
        sprintf('%s%s', $prefix, $price);
}
add_filter( 'woocommerce_variable_sale_price_html', 'shopstar_child_variable_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'shopstar_child_variable_price_format', 10, 2 );
/*Remove Default Sorting Dropdown*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
