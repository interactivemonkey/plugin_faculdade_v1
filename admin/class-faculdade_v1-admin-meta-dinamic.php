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
    	 'Mini Curso',
    	 array( $this, 'metabox_dinamic' ),
    	 'ensino',
    	 'normal',
    	 'default'
    	);
}

		public function metabox_dinamic() {

        global $post;

          $mytext =   get_post_meta($post->ID, 'mytext', true);
          // $mytext2 =   get_post_meta($post->ID, 'mytext2', true);


			  include 'partials/faculdade_v1-admin-metabox-dinamico.php';
		  }


    public function save_my_post_meta($post_id) {
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // now we can actually save the data
    $allowed = array(
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
    // If any value present in input field, then update the post meta
    if(isset($_POST['mytext']) ) {
        // $post_id, $meta_key, $meta_value
        update_post_meta( $post_id, 'mytext', $_POST['mytext'] );
    }
}




}