<?php
/*
Plugin Name: WordPress Blog Security Auditor
Plugin URI:  https://www.waytocode.com/
Description: This plugin audits your site for specific security related checkpoints. Made by waytocode.com where beginners learn how to start a blog.
Version:     1.0
Author:      Ankit Panchal
Author URI:  https://profiles.wordpress.org/ankitmaru/
Text Domain: blog-security-auditor
Domain Path: /english
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
WordPress Blog Security Auditor is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
WordPress Blog Security Auditor is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Wordpress Security Audit Pro. If not, see {License URI}.
This plugin is developed and managed by WPHEXA - A Premium WordPress Plugin Development Agency
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( !function_exists( 'bl_sec_plugin_uninstallation_hook' ) ) {
	function bl_sec_plugin_uninstallation_hook() {
		global $wpdb;
	}
}
register_uninstall_hook(__FILE__, 'bl_sec_plugin_uninstallation_hook');


if ( !function_exists( 'bl_sec_plugin_activation_hook' ) ) {
	function bl_sec_plugin_activation_hook(){
		global $wpdb;


	}
}
register_activation_hook( __FILE__, 'bl_sec_plugin_activation_hook' );


if ( !function_exists( 'bl_sec_plugin_deactivation_hook' ) ) {
	function bl_sec_plugin_deactivation_hook(){
		global $wpdb;

	}
}
register_deactivation_hook( __FILE__, 'bl_sec_plugin_deactivation_hook' );



function bl_sec_security_blog_audit_settings_page() {
	global $wpdb;
	if( is_admin() ){ 
		include("includes/wp-security-blog-auditor-settings-page.php");
	} else {
		echo '<div class="wrap">You have not enough rights to view this page</div>';
	}
}

function bl_sec_security_blog_audit_enqueue_style() {
	$page = $_GET['page'];
    if($page != 'sec_wp_security-blog-audit-settings') {
            return;
    }
	wp_enqueue_style( 'sec_wp_bootstrap', plugins_url('assets/css/bootstrap.min.css', __FILE__), false ); 
	wp_enqueue_style( 'sec_wp_bootstrap-animate', plugins_url('assets/css/animate.min.css', __FILE__), false ); 
	wp_enqueue_style( 'sec_wp_light-bootstrap-dashboard', plugins_url('assets/css/light-bootstrap-dashboard.css', __FILE__), false ); 
	wp_enqueue_style( 'sec_wp_font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', false ); 
	wp_enqueue_style( 'sec_wp_google-fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,700,300', false ); 
	wp_enqueue_style( 'sec_wp_icons', plugins_url('assets/css/pe-icon-7-stroke.css', __FILE__), false ); 
}

function bl_sec_security_blog_audit_enqueue_script() {
	$page = $_GET['page'];
    if($page != 'sec_wp_security-blog-audit-settings') {
            return;
    }
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'sec_wp_bootstrap', plugins_url('assets/js/bootstrap.min.js', __FILE__), false );
	wp_enqueue_script( 'sec_wp_checkbox', plugins_url('assets/js/bootstrap-checkbox-radio-switch.js', __FILE__), false );
	wp_enqueue_script( 'sec_wp_bootstrap-notify', plugins_url('assets/js/bootstrap-notify.js', __FILE__), false );
	wp_enqueue_script( 'sec_wp_bootstrap-dashboard', plugins_url('assets/js/light-bootstrap-dashboard.js', __FILE__), false );
	wp_enqueue_script( 'sec_wp_custom', plugins_url('assets/js/sec_wp_custom.js', __FILE__), false );

}

add_action( 'admin_enqueue_scripts', 'bl_sec_security_blog_audit_enqueue_style' );
add_action( 'admin_enqueue_scripts', 'bl_sec_security_blog_audit_enqueue_script' );

/**
 * Register a plugin's options menu page.
 */
function bl_sec_register_security_audit_menu_page() {
    add_menu_page(
        __( 'Security Auditor', 'blog-security-auditor' ),
        'Security Auditor',
        'manage_options',
        'sec_wp_security-blog-audit-settings',
        'bl_sec_security_blog_audit_settings_page',
        'dashicons-pressthis'
    );
}
add_action( 'admin_menu', 'bl_sec_register_security_audit_menu_page' );
