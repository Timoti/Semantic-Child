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

function semanticchild_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'semantic-style' for the Twenty Fifteen theme.

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'semanticchild_enqueue_styles' );
?>



