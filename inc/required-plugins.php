<?php
/**
 * This file represents the code that themes would use to register
 * the required plugins
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

add_action( 'tgmpa_register', 'uv_woo_register_required_plugins' );

function uv_woo_register_required_plugins(): void {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = [
		[
			'name'        => 'WooCommerce',
			'slug'        => 'woocommerce',
			'required' => false,
		],
	];

	$config = [
		'id'           => 'uv-woo',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	];

	tgmpa( $plugins, $config );
}
