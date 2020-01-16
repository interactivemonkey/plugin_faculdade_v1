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

//Function to add a meta box
function my_custom_codes_init_func() {

     $dmb_post_type = 'ensino';
     $dmb_metabox_label = 'Other information';


  add_meta_box(
    'dynamic_sectionid',
    $dmb_metabox_label ,
    array( $this, 'dynamic_inner_custom_box'),
     $dmb_post_type
    // 'normal',
     // 'default'
  );




}


// My custom codes will be here
//add_action( 'admin_init', 'code_func_meta_dinamic' );

//public function code_func_meta_dinamic() {
    //$id, $title, $callback, $page, $context, $priority, $callback_args
   // add_meta_box('my_custom_info', 'Custom Info', 'my_custom_metabox_func', 'post', 'normal', 'low');
//}
 public function dynamic_inner_custom_box () {


  $dmb_cf_name = 'tribe_events_miscinfo';
    //=======Options 2=======
  $dmb_label_addnew = 'Add more';
  $dmb_label_remove = 'Remove';
  $dmb_key_name = 'title';
  $dmb_value_name = 'content';
  $dmb_value2_name = 'tooltip';

  $dmb_key_label = 'Title of element';
  $dmb_value_label = 'Content of element';
  $dmb_value2_label = 'Tooltip on element';
  global $post;



  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'dynamicMeta_noncename' );
  // Use nonce for verification
  //wp_nonce_field( plugin_basename( __FILE__ ), 'dynamicMeta_noncename' );
  //OPTIONAL - if using a date field
  //Load admin scripts & styles for JS datepicker via the class from Meta Box plugin. This requires Meta Box plugin by Rilwis installed http://x.co/1YgqA
  // $loadJqUIfromMetaboxPlugin = new RWMB_Date_Field();
  // $loadJqUIfromMetaboxPlugin->admin_enqueue_scripts();
  ?>
  <div id="dynamic_inner_custom_box">
  <?php
  $dmb_items = get_post_meta($post->ID, $dmb_cf_name  ,true);
  $c = 0;
  if ( is_array($dmb_items) && count( $dmb_items ) > 0 ) {

    foreach( $dmb_items as $dmb_item ) {



      if ( isset( $dmb_item[$dmb_key_name] ) || isset( $dmb_item[$dmb_value_name] ) ) {
        printf( '<p class="dmb_parent"><label for="%6$s[%1$s][%4$s]">%8$s</label> <input type="text" name="%6$s[%1$s][%4$s]" id="%6$s[%1$s][%4$s]" value="%2$s"> <label for="%6$s[%1$s][%5$s]">%9$s</label> <input id="%6$s[%1$s][%5$s]" type="text" name="%6$s[%1$s][%5$s]" value="%3$s"> <label for="%6$s[%1$s][%10$s]">%11$s</label> <input type="text" id="%6$s[%1$s][%10$s]" name="%6$s[%1$s][%10$s]" value="%12$s"> <a href="#" class="remove">%7$s</a></p>',
      /*1*/   $c,
      /*2*/   $dmb_item[$dmb_key_name],
      /*3*/   $dmb_item[$dmb_value_name],
      /*4*/   $dmb_key_name,
      /*5*/   $dmb_value_name,
      /*6*/   $dmb_cf_name,
      /*7*/   $dmb_label_remove,
      /*8*/   $dmb_key_label,
      /*9*/   $dmb_value_label,
      /*10*/   $dmb_value2_name,
      /*11*/   $dmb_value2_label,
      /*12*/   $dmb_item[$dmb_value2_name]
        );
        $c = $c + 1;
      }
    }

  }
?>
  <span id="here"></span>
  <a href="#" class="add button-secondary"><?php echo $dmb_label_addnew; ?></a>
  <style type="text/css">
    .dmb_parent {display: flex;}
    .dmb_parent > * {flex:1 1 auto;}
    .dmb_parent label {padding-right:5px; text-align: right;}
    .dmb_parent .remove {padding-left: 5px;}
  </style>
  <script>
    var $ =jQuery.noConflict();
    $(document).ready(function() {

      //OPTIONAL
      //Add datepicker to an input
      //$('body').on('focus',".choosedate", function(){ //Allows to init datepicker on non existing yet elements
      //  $(this).datepicker({ dateFormat: "dd.mm.yy" });
      //});
      var count = <?php echo $c; ?>;
      $(".add").on('click',function(e) {
        e.preventDefault();
        count = count + 1;
        $('#here').append('<p class="dmb_parent"><label for="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_key_name; ?>]"><?php echo $dmb_key_label; ?></label> <input type="text" id="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_key_name; ?>]" name="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_key_name; ?>]" value="<?php echo $dmb_item[$dmb_key_name]?>">  <label for="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_value_name; ?>]"><?php echo $dmb_value_label; ?></label> <input type="text" name="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_value_name; ?>]" id="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_value_name; ?>]" value=""> <label for="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_value2_name; ?>]"><?php echo $dmb_value2_label; ?></label> <input type="text" name="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_value2_name; ?>]" id="<?php echo $dmb_cf_name; ?>['+count+'][<?php echo $dmb_value2_name; ?>]" value=""> <a href="#" class="remove"><?php echo $dmb_label_remove; ?></a></p>');
        return false;
      });
      $("#dynamic_inner_custom_box").on('click', '.remove', function(e) {
        e.preventDefault();
        $(this).parent().remove();
      });
    });
    </script>

  </div><?php
}
/* When the post is saved, saves our custom data */
function save_my_post_meta( $post_id ) {


  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
    return $post_id;
  if ( !isset( $_POST['dynamicMeta_noncename'] ) )
    return;
  if ( !wp_verify_nonce( $_POST['dynamicMeta_noncename'], plugin_basename( __FILE__ ) ) )
    return;
  $data2post = $_POST[$dmb_cf_name];
  update_post_meta($post_id,$dmb_cf_name,$data2post);

}




}
