<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              /
 * @since             1.0.0
 * @package           Wp_Rest_Api_Add_Feature_Image
 *
 * @wordpress-plugin
 * Plugin Name:       WP REST API - Add feature image
 * Plugin URI:        https://github.com/danny-b-livesmart/wp-rest-api-add-feature-image
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Daniel Butterworth
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-rest-api-add-feature-image
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_REST_API_ADD_FEATURE_IMAGE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-rest-api-add-feature-image-activator.php
 */
function activate_wp_rest_api_add_feature_image() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-api-add-feature-image-activator.php';
	Wp_Rest_Api_Add_Feature_Image_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-rest-api-add-feature-image-deactivator.php
 */
function deactivate_wp_rest_api_add_feature_image() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-api-add-feature-image-deactivator.php';
	Wp_Rest_Api_Add_Feature_Image_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_rest_api_add_feature_image' );
register_deactivation_hook( __FILE__, 'deactivate_wp_rest_api_add_feature_image' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-api-add-feature-image.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function run_wp_rest_api_add_feature_image() {

	$plugin = new Wp_Rest_Api_Add_Feature_Image();
	$plugin->run();

}
run_wp_rest_api_add_feature_image();