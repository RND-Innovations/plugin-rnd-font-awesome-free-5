<?php

/**
 * RND Font Awesome Free
 *
 * @package           RNDCorePlugins
 * @author            Developer Dilantha
 * @copyright         2021 RND Innovations
 * @license           GPL-2.0-or-later
 *
 * @rnd-plugin
 * Plugin Name:       RND Font Awesome Free
 * Plugin URI:        https://rnd.rodee.ca/core-plugins
 * Description:       This plugin will add font awesome free icons to the theme. Read fontawesome license before using.
 * Version:           5.17.0
 * Requires at least: 1.0.0
 * Requires PHP:      5.2
 * Author:            Dilantha
 * Author URI:        https://www.dilantha.org
 * Text Domain:       dilantha
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function rnd_font_awesome_free_add_all_to_head($items) {

    $path   = APP_TMPL_URL . '/plugins/' . basename( dirname( __FILE__ ) ) ;
    
    $str = ''; 

    // If No JavaScripts load fonts on head
    $str .= '<noscript><link rel="stylesheet" href="'.$path.'/css/all.css"></noscript>';    

	return $items.$str;
}
add_filter('page_head', 'rnd_font_awesome_free_add_all_to_head');

// Load fonts without slowing page load
function rnd_font_awesome_free_add_all_to_footer($items) {

    $path   = APP_TMPL_URL . '/plugins/' . basename( dirname( __FILE__ ) ) ;
    
    $str = ''; 

	$str .= '<script>';
    // without jQuery (doesn't work in older IEs)
	$str .= 'document.addEventListener("DOMContentLoaded", function(event) {';
        $str .= 'var cssrndfa5 = document.createElement("link");';
        $str .= 'cssrndfa5.rel = "stylesheet"; cssrndfa5.href="'.$path.'/css/all.css"; cssrndfa5.type="text/css";';
        $str .= 'var defrndfa5 = document.getElementsByTagName("link")[1];';
        $str .= 'defrndfa5.parentNode.insertBefore(cssrndfa5, defrndfa5);';
	$str .= '});';    
	$str .= '</script>';   

	return $items.$str;
}
add_filter('page_footer', 'rnd_font_awesome_free_add_all_to_footer');


