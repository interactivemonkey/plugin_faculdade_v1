<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              interactivemoney.com.br
 * @since             1.0.0
 * @package           Faculdade_v1
 *
 * @wordpress-plugin
 * Plugin Name:       Faculdade v1
 * Plugin URI:        interactivemonkey.com.br
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Interactive MOnkey
 * Author URI:        interactivemoney.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       faculdade_v1
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
define( 'FACULDADE_V1_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-faculdade_v1-activator.php
 */
function activate_faculdade_v1() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-faculdade_v1-activator.php';
	Faculdade_v1_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-faculdade_v1-deactivator.php
 */
function deactivate_faculdade_v1() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-faculdade_v1-deactivator.php';
	Faculdade_v1_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_faculdade_v1' );
register_deactivation_hook( __FILE__, 'deactivate_faculdade_v1' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-faculdade_v1.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_faculdade_v1() {

	$plugin = new Faculdade_v1();
	$plugin->run();

}
run_faculdade_v1();
