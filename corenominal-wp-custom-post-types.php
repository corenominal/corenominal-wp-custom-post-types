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
 * Custom post type, taxonomy & widget for links
 */
require_once( plugin_dir_path( __FILE__ ) . 'post-types/link.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/link-tag.php' );
require_once( plugin_dir_path( __FILE__ ) . 'widgets/recent-links.php' );

/**
 * Custom post type, taxonomies & widget for snippets
 */
require_once( plugin_dir_path( __FILE__ ) . 'post-types/snippet.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/snippet-tag.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/snippet-language.php' );
require_once( plugin_dir_path( __FILE__ ) . 'widgets/recent-snippets.php' );

/**
 * Custom post type, taxonomies and widget for doodles
 */
require_once( plugin_dir_path( __FILE__ ) . 'post-types/doodle.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/doodle-tag.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/doodle-medium.php' );
require_once( plugin_dir_path( __FILE__ ) . 'widgets/latest-doodle.php' );

/**
 * A recent posts widget
 */
require_once( plugin_dir_path( __FILE__ ) . 'widgets/recent-posts.php' );

/**
 * A recent widget to display RSS feeds
 */
require_once( plugin_dir_path( __FILE__ ) . 'widgets/subscriptions.php' );

