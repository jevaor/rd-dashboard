<?php
/**
 * Plugin RD Dashboard
 *
 * @package           PluginPackage
 * @author            Jonatan Vargar
 * @copyright         2020 Desarrollandolo
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       RD Dashboard
 * Plugin URI:        https://vaor.me/rd-dashboard
 * Description:       Another way to look the dashboard
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jonatan Vargas
 * Author URI:        https://vaor.me
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( is_admin() ) {
    // we are in admin mode
    require_once __DIR__ . '/inc/functions.php';
}
?>