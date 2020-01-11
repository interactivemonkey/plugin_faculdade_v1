<?php

/**
 * The metabox-specific functionality of the plugin.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin
 */
/**
 * The metabox-specific functionality of the plugin.
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin
 * @author     Interactive MOnkey <atendimento@interactivemonkey.com.br>
 */
class Faculdade_Admin_Meta_Dinamic {

	/**
	 * The ID of this plugin.
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$plugin_name 		The ID of this plugin.
	 */
	private $plugin_name;
	/**
	 * The version of this plugin.
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$version 			The current version of this plugin.
	 */
	private $version;
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 		1.0.0
	 * @param 		string 			$Now_Hiring 		The name of this plugin.
	 * @param 		string 			$version 			The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

// My custom codes will be here
//add_action( 'admin_init', 'code_func_meta_dinamic' );

//public function code_func_meta_dinamic() {
    //$id, $title, $callback, $page, $context, $priority, $callback_args
   // add_meta_box('my_custom_info', 'Custom Info', 'my_custom_metabox_func', 'post', 'normal', 'low');
//}
 public function my_custom_codes_init_func() {
    //$id, $title, $callback, $page, $context, $priority, $callback_args
    add_meta_box(
    	 'my_custom_info',
    	 'Custom Info',
    	 array( $this, 'metabox_dinamic' ),
    	 'post',
    	 'normal',
    	 'default'
    	);
}

		public function metabox_dinamic() {
			  include 'partials/faculdade_v1-admin-metabox-dinamico.php';
		  }

}