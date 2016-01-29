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
 * Custom post type and taxonomy for links
 */
require_once( plugin_dir_path( __FILE__ ) . 'post-types/link.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/link-tag.php' );

/**
 * Custom post type and taxonomies for snippets
 */
require_once( plugin_dir_path( __FILE__ ) . 'post-types/snippet.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/snippet-tag.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/snippet-language.php' );