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
 * Version:           5.16.30
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

    // JavaScript Active? load asynchronously
    $str = '<link rel="preload" href="'.$path.'/css/all.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';    
    
    // If No JavaScripts
    $str .= '<noscript><link rel="stylesheet" href="'.$path.'/css/all.css"></noscript>';    

	return $items.$str;
}
add_filter('page_head', 'rnd_font_awesome_free_add_all_to_head');


