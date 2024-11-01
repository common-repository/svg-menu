<?php

/**
 *
 * @link              http://manish.dev
 * @since             1.0.0
 * @package           Svgmenu
 *
 * @wordpress-plugin
 * Plugin Name:       SVG Menu
 * Plugin URI:        http://manish.dev
 * Description:       SVG menu will help you create animated menu for your site.
 * Version:           1.0.0
 * Author:            Manish Mandal
 * Author URI:        http://manish.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       svgmenu
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
define( 'SVG_MENU_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-svgmenu-activator.php
 */
function activate_svgmenu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-svgmenu-activator.php';
	Svgmenu_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-svgmenu-deactivator.php
 */
function deactivate_svgmenu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-svgmenu-deactivator.php';
	Svgmenu_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_svgmenu' );
register_deactivation_hook( __FILE__, 'deactivate_svgmenu' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-svgmenu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_svgmenu() {

	$plugin = new Svgmenu();
	$plugin->run();

}
run_svgmenu();
