<?php

// WIDGETS: add widgets

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
    echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a>. For WordPress Tutorials visit: <a href="https://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}

// \\ // -- must go in functions.php 
// you need this section

add_action('genesis_hook_beginning_location', 'function_name');

function function_name() {
	?>
	<div> html - what you want added inside the hook(s).
	<?php

}

// \\ // -- optional. use if you want to to wrap site 
// (.site-header and .nav-primary inside a “div.header-nav-wrapper” or something)
add_action('genesis_hook_ending_location', 'function_name_end');

function function_name_end() {
	?>
	</div>
	<?php
}

// STYLES: New

function new_admin_style() {

    wp_enqueue_style( 'rd-dashboard', plugin_dir_url( __FILE__ ) . '../css/rd-dashboard.css', null, null );

}
add_action( 'admin_enqueue_scripts', 'new_admin_style' );

// JAVASCRIPT: New

function new_admin_js() {


    // wp_enqueue_script( 'simplebar', plugin_dir_url( __FILE__ ) . '../js/simplebar.min.js', array(), null, false );
	// wp_script_add_data( 'simplebar', 'async', true );

	wp_enqueue_script( 'rd', plugin_dir_url( __FILE__ ) . '../js/dashboard.js', array(), null, false );
	wp_script_add_data( 'rd', 'async', true );

}
add_action( 'admin_enqueue_scripts', 'new_admin_js' );

// REMOVE DASHBOARD WIDGETS

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
 
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal');
 
}
 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' ); 

add_action( 'admin_init', 'wp_dashboard_menu', 100);

function wp_dashboard_menu() {
    $removeItem = [
        'separator1',
        'upload.php',
        'edit.php?post_type=page',
        'plugins.php',
        'users.php',
        'edit.php',
        'edit-comments.php'
    ];
    foreach($GLOBALS[ 'menu' ] as $item => $itm){
        if(in_array($itm[2], $removeItem)){
            unset($GLOBALS['menu'][$item]);
        }
    }
}

?>