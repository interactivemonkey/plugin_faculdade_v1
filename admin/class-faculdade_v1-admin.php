<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin
 * @author     Interactive MOnkey <atendimento@interactivemonkey.com.br>
 */
class Faculdade_v1_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Faculdade_v1_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Faculdade_v1_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
                    // folha estilo meta box inserida por flavio
                       global $typenow;


			   if( $typenow == 'inscricao' ) {
			        wp_enqueue_style( 'bootstrap-cpt', plugin_dir_url( __FILE__ ) . 'css/bootstrap/css/bootstrap.css', array(), $this->version, 'all' );
			        wp_enqueue_style( 'custom-style', plugin_dir_url( __FILE__ ) . 'css/custom.css', array(), $this->version, 'all' );
			    }elseif ($typenow == 'ensino' ) {
                   wp_enqueue_style( 'bootstrap-cpt', plugin_dir_url( __FILE__ ) . 'css/bootstrap/css/bootstrap.css', array(), $this->version, 'all' );
          }else {
			    	  wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/faculdade_v1-admin.css', array(), $this->version, 'all' );
			    }


	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Faculdade_v1_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Faculdade_v1_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		global $typenow;



			   if( $typenow == 'inscricao' ) {
			        wp_enqueue_script( 'bootstra-js', plugin_dir_url( __FILE__ ) . 'css/bootstrap/js/bootstrap.min.js', array(), $this->version, false );
        }elseif ($typenow == 'ensino' ){

                wp_enqueue_script( 'metadynamic-js', plugin_dir_url( __FILE__ ) . 'js/dynamic-fields.js', array('jquery'), $this->version, true );


			    }else {

		                  wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/faculdade_v1-admin.js', array( 'jquery' ), $this->version, false );
          }
	}


	        /**
	* Creates a new custom post type
	*
	* @since 1.0.0
	* @access public
	* @uses register_post_type()
	*/
	public static function cpt_inscricoes_faculdade_v1() {
			$cap_type = 'post';
			$plural = 'Inscrições';
			$single = 'Inscrição';
			$cpt_name = 'inscricao';
			$opts['can_export'] = TRUE;
			$opts['capability_type'] = $cap_type;
			$opts['description'] = '';
			$opts['exclude_from_search'] = FALSE;
			$opts['has_archive'] = FALSE;
			$opts['hierarchical'] = FALSE;
			$opts['map_meta_cap'] = TRUE;
			$opts['menu_icon'] = 'dashicons-groups';
			$opts['menu_position'] = 25;
			$opts['public'] = FALSE; // FALSE esconde o permalink
			$opts['publicly_querable'] = TRUE;
			$opts['query_var'] = TRUE;
			$opts['register_meta_box_cb'] = '';
			$opts['rewrite'] = FALSE;
			$opts['show_in_admin_bar'] = TRUE;
			$opts['show_in_menu'] = TRUE;
			$opts['show_in_nav_menu'] = TRUE;
			$opts['show_ui'] = TRUE;
                      $opts['supports'] = array( 'title');
		       $opts['taxonomies'] = array();
		       $opts['capabilities']['delete_others_posts']       = "delete_others_{$cap_type}s";
			$opts['capabilities']['delete_post']	                       = "delete_{$cap_type}";
			$opts['capabilities']['delete_posts']                      = "delete_{$cap_type}s";
			$opts['capabilities']['delete_private_posts']      = "delete_private_{$cap_type}s";
			$opts['capabilities']['delete_published_posts'] = "delete_published_{$cap_type}s";
			$opts['capabilities']['edit_others_posts']		 = "edit_others_{$cap_type}s";
			$opts['capabilities']['edit_post']				 = "edit_{$cap_type}";
			$opts['capabilities']['edit_posts']				 = "edit_{$cap_type}s";
			$opts['capabilities']['edit_private_posts']		 = "edit_private_{$cap_type}s";
			$opts['capabilities']['edit_published_posts']	 = "edit_published_{$cap_type}s";
			$opts['capabilities']['publish_posts']			 = "publish_{$cap_type}s";
			$opts['capabilities']['read_post']				 = "read_{$cap_type}";
			$opts['capabilities']['read_private_posts']		 = "read_private_{$cap_type}s";
			$opts['labels']['add_new']                                         = esc_html__( "Adicionar {$single}", 'faculdade_v1' );
			$opts['labels']['add_new_item']                              = esc_html__( "Adicionar Nova {$single}", 'faculdade_v1' );
			$opts['labels']['all_items']                                         = esc_html__( $plural, 'wisdom' );
			$opts['labels']['edit_item']                                        = esc_html__( "Editar {$single}" , 'faculdade_v1' );
			$opts['labels']['menu_name']                                   = esc_html__( $plural, 'faculdade_v1' );
			$opts['labels']['name']                                                = esc_html__( $plural, 'faculdade_v1' );
			$opts['labels']['name_admin_bar']                          = esc_html__( $single, 'faculdade_v1' );
			$opts['labels']['new_item']                                        = esc_html__( "Nova {$single}", 'faculdade_v1' );
			$opts['labels']['not_found']                                       = esc_html__( "Nenhuma {$single} encontrada", 'faculdade_v1' );
			$opts['labels']['not_found_in_trash']                     = esc_html__( "Nenhuma {$single} encontrata na lixeira", 'faculdade_v1' );
			$opts['labels']['parent_item_colon']                      = esc_html__( "Parent {$plural} :", 'faculdade_v1' );
			$opts['labels']['search_items']                                 = esc_html__( "Pesquisar {$plural}", 'faculdade_v1' );
			$opts['labels']['singular_name']                              = esc_html__( $single, 'faculdade_v1' );
			$opts['labels']['view_item']                                       = esc_html__( "Ver {$single}", 'faculdade_v1' );

			$opts['rewrite']['ep_mask']					  = EP_PERMALINK;
			$opts['rewrite']['feeds']						  = FALSE;
			$opts['rewrite']['pages']						  = TRUE;
			$opts['rewrite']['slug']						          = esc_html__( strtolower( $plural ), 'faculdade_v1' );
			$opts['rewrite']['with_front']					   = FALSE;
			$opts = apply_filters( 'incricoes-cpt-options', $opts );

	                register_post_type( strtolower( $cpt_name ), $opts );

	} // new_cpt_job()



// Register Custom Post Type Ensino
function create_ensino_cpt() {

  $labels = array(
    'name' => _x( 'Ensinos', 'Post Type General Name', 'faculdade_v1' ),
    'singular_name' => _x( 'Ensino', 'Post Type Singular Name', 'faculdade_v1' ),
    'menu_name' => _x( 'Ensino', 'Admin Menu text', 'faculdade_v1' ),
    'name_admin_bar' => _x( 'Ensino', 'Add New on Toolbar', 'faculdade_v1' ),
    'archives' => __( 'Ensino Archives', 'faculdade_v1' ),
    'attributes' => __( 'Ensino Attributes', 'faculdade_v1' ),
    'parent_item_colon' => __( 'Parent Ensino:', 'faculdade_v1' ),
    'all_items' => __( 'Todos ensinos', 'faculdade_v1' ),
    'add_new_item' => __( 'Add New Ensino', 'faculdade_v1' ),
    'add_new' => __( 'Add New', 'faculdade_v1' ),
    'new_item' => __( 'New Ensino', 'faculdade_v1' ),
    'edit_item' => __( 'Edit Ensino', 'faculdade_v1' ),
    'update_item' => __( 'Update Ensino', 'faculdade_v1' ),
    'view_item' => __( 'View Ensino', 'faculdade_v1' ),
    'view_items' => __( 'View Eninos', 'faculdade_v1' ),
    'search_items' => __( 'Search Ensino', 'faculdade_v1' ),
    'not_found' => __( 'Not found', 'faculdade_v1' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'faculdade_v1' ),
    'featured_image' => __( 'Featured Image', 'faculdade_v1' ),
    'set_featured_image' => __( 'Set featured image', 'faculdade_v1' ),
    'remove_featured_image' => __( 'Remove featured image', 'faculdade_v1' ),
    'use_featured_image' => __( 'Use as featured image', 'faculdade_v1' ),
    'insert_into_item' => __( 'Insert into Ensino', 'faculdade_v1' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Ensino', 'faculdade_v1' ),
    'items_list' => __( 'Eninos list', 'faculdade_v1' ),
    'items_list_navigation' => __( 'Eninos list navigation', 'faculdade_v1' ),
    'filter_items_list' => __( 'Filter Eninos list', 'faculdade_v1' ),
  );
  $args = array(
    'label' => __( 'Ensino', 'faculdade_v1' ),
    'description' => __( 'Criar cursos', 'faculdade_v1' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-list-view',
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('categoria-curso'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'exclude_from_search' => false,
    //'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
  );
  register_post_type( 'ensino', $args );

}




// Register Custom Post Type
function cursinho_faculdade() {

  $labels = array(
    'name'                  => _x( 'Cursinhos', 'Post Type General Name', 'faculdade_v1' ),
    'singular_name'         => _x( 'Cursinho', 'Post Type Singular Name', 'faculdade_v1' ),
    'menu_name'             => __( 'Cursinho', 'faculdade_v1' ),
    'name_admin_bar'        => __( 'Cursinho', 'faculdade_v1' ),
    'archives'              => __( 'Item Archives', 'faculdade_v1' ),
    'attributes'            => __( 'Item Attributes', 'faculdade_v1' ),
    'parent_item_colon'     => __( 'Parent Item:', 'faculdade_v1' ),
    'all_items'             => __( 'All Items', 'faculdade_v1' ),
    'add_new_item'          => __( 'Add New Item', 'faculdade_v1' ),
    'add_new'               => __( 'Adicionar Cursinho', 'faculdade_v1' ),
    'new_item'              => __( 'Novo Cursinho', 'faculdade_v1' ),
    'edit_item'             => __( 'Editar Cursinho', 'faculdade_v1' ),
    'update_item'           => __( 'Atualizar Cursinho', 'faculdade_v1' ),
    'view_item'             => __( 'Ver Cursinho', 'faculdade_v1' ),
    'view_items'            => __( 'Ver Cursinhos', 'faculdade_v1' ),
    'search_items'          => __( 'Search Item', 'faculdade_v1' ),
    'not_found'             => __( 'Not found', 'faculdade_v1' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'faculdade_v1' ),
    'featured_image'        => __( 'Featured Image', 'faculdade_v1' ),
    'set_featured_image'    => __( 'Set featured image', 'faculdade_v1' ),
    'remove_featured_image' => __( 'Remove featured image', 'faculdade_v1' ),
    'use_featured_image'    => __( 'Use as featured image', 'faculdade_v1' ),
    'insert_into_item'      => __( 'Insert into item', 'faculdade_v1' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'faculdade_v1' ),
    'items_list'            => __( 'Items list', 'faculdade_v1' ),
    'items_list_navigation' => __( 'Items list navigation', 'faculdade_v1' ),
    'filter_items_list'     => __( 'Filter items list', 'faculdade_v1' ),
  );
  $args = array(
    'label'                 => __( 'Cursinho', 'faculdade_v1' ),
    'description'           => __( 'Post Type Description', 'faculdade_v1' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'cursinho', $args );

}



	/**
	 * Creates a new taxonomy for a custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_taxonomy()
	 */
	public static function inscri_taxonomy_type() {
		$plural 	       = 'Tipos';
		$single 	       = 'Tipo';
		// $tax_name 	= 'curso_type';
    $tax_name   = 'categoria-curso';
		$opts['hierarchical']							 = TRUE;
		//$opts['meta_box_cb'] 						 = '';
		$opts['public']									 = TRUE;
		$opts['query_var']								 = $tax_name;
		$opts['show_admin_column'] 					 = FALSE;
		$opts['show_in_nav_menus']					 = TRUE;
		$opts['show_tag_cloud'] 						 = TRUE;
		$opts['show_ui']								 = TRUE;
		$opts['sort'] 									 = '';
		//$opts['update_count_callback'] 					= '';
		$opts['capabilities']['assign_terms'] 			    = 'edit_posts';
		$opts['capabilities']['delete_terms'] 			    = 'manage_categories';
		$opts['capabilities']['edit_terms'] 			            = 'manage_categories';
		$opts['capabilities']['manage_terms'] 			    = 'manage_categories';
		$opts['labels']['add_new_item'] 				    = esc_html__( "Adicionar novo {$single}", 'faculdade_v1' );
		$opts['labels']['add_or_remove_items'] 		    = esc_html__( "Adicionar ou remover {$plural}", 'faculdade_v1' );
		$opts['labels']['all_items'] 					            = esc_html__( $plural, 'faculdade_v1' );
		$opts['labels']['choose_from_most_used'] 	    = esc_html__( "Escolha entre os {$plural} mais usados", 'faculdade_v1' );
		$opts['labels']['edit_item'] 					    = esc_html__( "Editar {$single}" , 'faculdade_v1');
		$opts['labels']['menu_name'] 					    = esc_html__( $plural, 'faculdade_v1' );
		$opts['labels']['name'] 						    = esc_html__( $plural, 'faculdade_v1' );
		$opts['labels']['new_item_name'] 				    = esc_html__( "Novo nome da {$single}", 'faculdade_v1' );
		$opts['labels']['not_found'] 					    = esc_html__( "Nenhum {$single} encontrado", 'faculdade_v1' );
		$opts['labels']['parent_item'] 					    = esc_html__( "Parent {$single}", 'faculdade_v1' );
		$opts['labels']['parent_item_colon'] 			    = esc_html__( "Parent {$single}:", 'faculdade_v1' );
		$opts['labels']['popular_items'] 				    = esc_html__( "Popular {$plural}", 'faculdade_v1' );
		$opts['labels']['search_items'] 				    = esc_html__( "Pesquisar {$plural}", 'faculdade_v1' );
		$opts['labels']['separate_items_with_commas']  = esc_html__( "Separe os {$plural} por virgula", 'faculdade_v1' );
		$opts['labels']['singular_name'] 				     = esc_html__( $single, 'faculdade_v1' );
		$opts['labels']['update_item'] 					     = esc_html__( "Atualizar {$single}", 'faculdade_v1' );
		$opts['labels']['view_item'] 					     = esc_html__( "Ver {$single}", 'faculdade_v1' );
		$opts['rewrite']['ep_mask']					     = EP_NONE;
		$opts['rewrite']['hierarchical']				             = FALSE;
		$opts['rewrite']['slug']						             = esc_html__( strtolower( $tax_name ), 'faculdade_v1' );
		$opts['rewrite']['with_front']					      = FALSE;
		$opts = apply_filters( 'inscri-taxonomy-options', $opts );

		register_taxonomy( $tax_name, array('inscricao','ensino'), $opts );
	} // new_taxonomy_type()


	/**
	* Register the administration menu for this plugin into the WordPress Dashboard menu.
	*
	* @since 1.0.0
	*/

	public function add_plugin_admin_menu() {
		add_options_page( 'My Random Quotes Options Settings', 'My Random Quotes', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page'));
	}

	/**
	* Add settings action link to the plugins page.
	*
	* @since 1.0.0
	*/

	public function add_action_links( $links ) {
		$settings_link = array(
			'<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
		);
		return array_merge( $settings_link, $links );
	}

	/**
	* Render the settings page for this plugin.
	*
	* @since 1.0.0
	*/


	public function display_plugin_setup_page() {
		include_once( 'partials/faculdade_v1-admin-display.php' );
	}


        public function validate($input) {
	    // All checkboxes inputs
	    $valid = array();

	    //Quote title
	    $valid['quo-title'] = (isset($input['quo-title']) && !empty($input['quo-title'])) ? 1 : 0;
	    //return 1;
	    return $valid;
	 }

	 public function options_update() {
              register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
        }



}
