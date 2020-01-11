<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/includes
 * @author     Interactive MOnkey <atendimento@interactivemonkey.com.br>
 */
class Faculdade_v1 {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Faculdade_v1_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'FACULDADE_V1_VERSION' ) ) {
			$this->version = FACULDADE_V1_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'faculdade_v1';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->define_shortcode_hooks();

		$this->define_metabox_hooks();
		$this->define_meta_dinamic_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Faculdade_v1_Loader. Orchestrates the hooks of the plugin.
	 * - Faculdade_v1_i18n. Defines internationalization functionality.
	 * - Faculdade_v1_Admin. Defines all hooks for the admin area.
	 * - Faculdade_v1_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-faculdade_v1-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-faculdade_v1-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-faculdade_v1-admin.php';

		/**
		 * The class responsible for defining all actions relating to metaboxes.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-faculdade_v1-admin-metaboxes.php';

			/**
		 * The class responsible for defining all actions relating to metaboxes.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-faculdade_v1-admin-meta-dinamic.php';


		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-faculdade_v1-public.php';
	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-faculdade_v1-shortcode.php';

    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-faculdade_v1-sanitize.php';


		$this->loader = new Faculdade_v1_Loader();
		$this->sanitizer = new Faculdade_v1_Sanitize();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Faculdade_v1_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Faculdade_v1_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Faculdade_v1_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

               $this->loader->add_action( 'init', $plugin_admin, 'cpt_inscricoes_faculdade_v1' );
               $this->loader->add_action( 'init', $plugin_admin, 'create_ensino_cpt' );
               $this->loader->add_action( 'init', $plugin_admin, 'inscri_taxonomy_type' );
              //   $this->loader->add_action( 'admin_init', $plugin_admin, 'register_fields' );


               // Pagina de Opções //////////////////////////////////////////////////////////////////////////////////
               // Add menu item
               $this->loader->add_action( 'admin_menu', $plugin_admin, 'add_plugin_admin_menu' );

                // Add Settings link to the plugin
               $plugin_basename = plugin_basename( plugin_dir_path( __DIR__ ) . $this->plugin_name . '.php' );
               $this->loader->add_filter( 'plugin_action_links_' . $plugin_basename, $plugin_admin, 'add_action_links' );

               $this->loader->add_action('admin_init', $plugin_admin, 'options_update');
               // fim pagina de opções ///////////////////////////////////////////////////////////////////////////////

	}


	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Faculdade_v1_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );


	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_shortcode_hooks() {

		$plugin_public = new Faculdade_v1_Shortcode( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );


		$this->loader->add_action( 'init', $plugin_public, 'register_shortcodes' );

	}


       /**
	 * Register all of the hooks related to metaboxes
	 *
	 * @since 		1.0.0
	 * @access 		private
	 */
	private function define_metabox_hooks() {
		$plugin_metaboxes = new Faculdade_Admin_Metaboxes( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'add_meta_boxes', $plugin_metaboxes, 'add_metaboxes' );


		$this->loader->add_action( 'add_meta_boxes_inscricao', $plugin_metaboxes, 'set_meta' );
		$this->loader->add_action( 'save_post_inscricao', $plugin_metaboxes, 'validate_meta', 10, 2 );

	} // define_metabox_hooks()


	 /**
	 * Register all of the hooks related to metaboxes
	 *
	 * @since 		1.0.0
	 * @access 		private
	 */
	private function define_meta_dinamic_hooks() {
		$plugin_meta_dinamic = new Faculdade_Admin_Meta_Dinamic( $this->get_plugin_name(), $this->get_version() );

     $this->loader->add_action( 'admin_init', $plugin_meta_dinamic, 'my_custom_codes_init_func' );
    // $this->loader->add_action( 'add_meta_box', $plugin_meta_dinamic, 'my_custom_metabox_func');

	} // define_meta_dinamic_hooks()




	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Faculdade_v1_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
