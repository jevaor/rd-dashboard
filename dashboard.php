<?php
/**
 * Plugin RD Dashboard
 *
 * @package           Versatile
 * @author            Jonatan Vargas
 * @copyright         2020 Desarrollandolo
 * @license           MIT
 *
 * @wordpress-plugin
 * Plugin Name:       RD Dashboard
 * Plugin URI:        https://vaor.me/rd-dashboard
 * Description:       Another way to look the dashboard
 * Version:           0.4
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jonatan Vargas
 * Author URI:        https://vaor.me
 * Text Domain:       vaor
 * License:           MIT
 * License URI:       https://raw.githubusercontent.com/jevaor/rd-dashboard/master/LICENSE
 */

if ( is_admin() ) {
    // we are in admin mode
    require_once __DIR__ . '/inc/functions.php';
}
?>