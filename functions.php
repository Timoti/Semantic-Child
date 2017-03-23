<?php
/**
 * Author: Tim Gummer
 * URL: http://timgummerdesign.com
 *
 * Semantique Child functions and definitions
 *
 * theme as custom template tags. Others are attached to action and filter
 * Set up the theme and provides some helper functions, which are used in the
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package Semantique Child
 * @since Semantique Child 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


/** Default Image Plugin for dedicated post-type image  */
// function dfi_posttype_book ( $dfi_id, $post_id ) {
// 	$post = get_post($post_id);
// 	if ( 'wiki' === $post->post_type ) {
// 		return 31; // the image id
// 	}
// 	return $dfi_id; // the original featured image id
// }
// add_filter( 'dfi_thumbnail_id', 'dfi_posttype_book', 10, 2 );
