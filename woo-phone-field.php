<?php
/*
Plugin Name: WooCommerce Phone Field
Plugin URI: https://wordpress.org/plugins/woo-phone-field/
Description: Adds phone field to the billing and shipping address form.
Version: 1.0.0
Author: Malik Naik
Author URI: https://www.linkedin.com/in/maliknaik/
License: GPLv2 or later
Text Domain: wpfmn_woocommerce
*/


/**
 * Returns the array with the field details.
 * @return array
 */
function wpfmn_get_field_args() {
	return array(
		'type' => 'text',
		'label' => __('Phone', 'woocommerce'),
		'placeholder' => _x('Phone', 'placeholder', 'woocommerce'),
		'required' => true,
		'class' => array('form-row-wide'),
		'clear' => true,
		'priority' => 45,
	);
}


/** 
 * Hooks the phone field to the shipping address form
 */
add_action( 'woocommerce_shipping_fields', 'wpfmn_shipping_add_phone_field' );

function wpfmn_shipping_add_phone_field( $fields ) {
	$args = wpfmn_get_field_args();
	$fields['shipping_phone'] = $args;
	
	return $fields;
}

/** 
 * Hooks the phone field to the billing address form
 */
add_action( 'woocommerce_billing_fields', 'wpfmn_billing_add_phone_field' );

function wpfmn_billing_add_phone_field( $fields ) {
	$args = wpfmn_get_field_args();
	$fields['billing_phone'] = $args;
	
	return $fields;
}