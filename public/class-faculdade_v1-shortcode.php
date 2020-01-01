<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/public
 * @author     Interactive MOnkey <atendimento@interactivemonkey.com.br>
 */
class Faculdade_v1_Shortcode
{
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
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
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

        wp_enqueue_style(
            $this->plugin_name,
            plugin_dir_url(__FILE__) . 'css/faculdade_v1-public.css',
            array(),
            $this->version,
            'all'
        );
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
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

        wp_enqueue_script(
            $this->plugin_name,
            plugin_dir_url(__FILE__) . 'js/faculdade_v1-public.js',
            array('jquery'),
            $this->version,
            false
        );
    }


    /**
     * Registers all shortcodes at once
     *
     * @return [type] [description]
     */

    public function register_shortcodes()
    {
        add_shortcode('inscrito_formulario', array(
            $this,
            'visualizar_form_inscrito'
        ));
    } // register_shortcodes()

    /**
     * Processes shortcode inscrito_formulario
     *
     * @param array $atts The attributes from the shortcode
     *
     *
     * @return mixed $output Output of the buffer
     */

    public function visualizar_form_inscrito($atts)
    {
        $a = shortcode_atts(
            array(
                'inscrito_cat' => 'eventos'
            ),
            $atts
        );
        //return 'Hello ' . $a['inscrito_cat'];
        include 'partials/faculdade_v1-shortcode-display.php';
    }
}
