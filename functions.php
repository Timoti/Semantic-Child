<?php
/**
 * Author: Tim Gummer
 * URL: http://timgummerdesign.com
 *
 * Sem Child (test clone of Semantique Child) functions and definitions
 *
 * theme as custom template tags. Others are attached to action and filter
 * Set up the theme and provides some helper functions, which are used in the
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package Sem Child
 * @since Sem Child 1.0.0
 */
if ( ! function_exists( 'semantic_child_scripts' ) ) { 
	function semantic_child_scripts() {
		wp_dequeue_style('main-stylesheet');
/*
Append items to this array to load styles.

array key would be the file name (and path).

array(
	'dep' => array(),
	'ver' => '1.0.0',
	'media' => 'all',
)
*/
		$styles = array(
			'child-stylesheet' => 'assets/css/app.css',
		);
		foreach($styles as $key => $value) {
			$dep = isset($style['dep'])? $style['dep'] : array();
			$ver = isset($style['ver'])? $style['ver'] : '1.0.0';
			$media = isset($style['media']) ? $style['media'] : 'all';
			wp_enqueue_style( $key, get_stylesheet_directory_uri() . '/' . $value, $dep, $ver, $media);
		}

		wp_deregister_script('jquery');
		wp_deregister_script('foundation_mobmenu_js');
		wp_deregister_script('js_app');
		$jss = array(
				'child-app' => 'assets/js/app.js',
				'child-off-canvas' => 'assets/js/off-canvas.js',
		);
		foreach ($jss as $key => $value) {
			wp_enqueue_script($key, get_stylesheet_directory_uri() . '/' . $value, array(), false, true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'semantic_child_scripts', 30);
}


//  add js  - assets/js/offCanvas.js