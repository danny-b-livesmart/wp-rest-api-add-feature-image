<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       /
 * @since      1.0.0
 *
 * @package    Wp_Rest_Api_Add_Feature_Image
 * @subpackage Wp_Rest_Api_Add_Feature_Image/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Rest_Api_Add_Feature_Image
 * @subpackage Wp_Rest_Api_Add_Feature_Image/includes
 * @author     Daniel Butterworth <dannybutte@gmail.com>
 */
class Wp_Rest_Api_Add_Feature_Image_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-rest-api-add-feature-image',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
