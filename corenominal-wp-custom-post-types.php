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
 * Fix pagination for combined post types
 */
require_once( plugin_dir_path( __FILE__ ) . 'misc/fix-pagination.php' );

/**
 * Unified RSS main feed
 */
require_once( plugin_dir_path( __FILE__ ) . 'misc/unified-rss-feed.php' );

/**
 * A recent posts widget
 */
require_once( plugin_dir_path( __FILE__ ) . 'widgets/recent-posts.php' );

/**
 * A widget to display RSS feed links
 */
require_once( plugin_dir_path( __FILE__ ) . 'widgets/subscriptions.php' );

