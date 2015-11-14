<?php
/**
 * Plugin Name: JSON REST API WooCommerce bundle data
 * Description: Adds bundled data information to the WooCommerce API
 * Author: Dirk Pennings<dirkpennings@gmail.com>
 * Author URI: https://dirk.me
 * Version: 0.1
 * Plugin URI: https://github.com/dirkpennings/woocommerce-api-bundle-data
 */

function wc_api_bundle_data($product) {
	$product['bundle_data'] = get_post_meta( $product['id'], '_bundle_data', true );

	return $product;
}

add_filter('woocommerce_api_product_response', 'wc_api_bundle_data', 10, 3);
