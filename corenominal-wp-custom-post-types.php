<?php
/**
 * Plugin Name: corenominal's Custom Post Types
 * Description: This plugin provides custom post types and taxonomies for my site.
 * Plugin URI: https://github.com/corenominal/corenominal-wp-custom-post-types
 * Author: Philip Newborough
 * Author URI: http://corenominal.org
 * Version: 0.0.1
 * License: GPLv2
 */

/**
 * Custom post type for links
 */
require_once( plugin_dir_path( __FILE__ ) . 'post-types/link.php' );

/**
 * Custom taxonomy link tags
 */
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/link-tag.php' );