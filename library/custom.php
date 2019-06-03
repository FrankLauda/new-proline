<?php
/** custom PHP */

add_image_size('slides', 1366, 600, true);
add_image_size('sml_slides', 1024, 576, true);

/**
 * Add a custom product data tab
 */
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['features_title'] = array(
		'title' 	=> __( 'Features', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_features_tab_content'
	);

	$tabs['specifications_title'] = array(
		'title' 	=> __( 'Specifications', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_specifications_tab_content'
	);

	return $tabs;

}
function woo_features_tab_content() {

	// Features tab content

	echo get_field('features');
	
}

function woo_specifications_tab_content() {

	// Specifications tab content

	echo get_field('specifications');
	
}