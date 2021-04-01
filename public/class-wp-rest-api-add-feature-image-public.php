<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       /
 * @since      1.0.0
 *
 * @package    Wp_Rest_Api_Add_Feature_Image
 * @subpackage Wp_Rest_Api_Add_Feature_Image/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Rest_Api_Add_Feature_Image
 * @subpackage Wp_Rest_Api_Add_Feature_Image/public
 * @author     Daniel Butterworth <dannybutte@gmail.com>
 */
class Wp_Rest_Api_Add_Feature_Image_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since 1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since 1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Rest_Api_Add_Feature_Image_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Rest_Api_Add_Feature_Image_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-rest-api-add-feature-image-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Rest_Api_Add_Feature_Image_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Rest_Api_Add_Feature_Image_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-rest-api-add-feature-image-public.js', array( 'jquery' ), $this->version, false );

	}


  /**
   * Add feature image to WP REST API
   * 
   * @since 1.0.0
   * @return void
   */
  public function register_rest_images() {
    register_rest_field( array('post'),
        'fimg_url',
        array(
            'get_callback'    => array($this, 'get_rest_featured_image'),
            'update_callback' => null,
            'schema'          => null,
        )
    );
  }

  /**
   * Get featured media and return src path
   * 
   * @param array $object Post array 
   *  
   * @since 1.0.0
   * @return string|false Featured image src path or false if object has no featured image src
   */
  public function get_rest_featured_image( $object ) {

    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
  }

}
