<?php
/**
 * Plugin Name: JL Functionality Plugin
 * Plugin URI: https://github.com/JLeuze/functionality-plugin
 * Description: An example functionality plugin that adds movies CPT.
 * Version: 1.0.0
 * Author: Josh Leuze
 * Author URI: http://jleuze.com
 * Text Domain: jlfunctionality
 * Domain Path: /locale/
 * Network: true
 * License: GPL2
 */

// Add custom post type for robots
include( 'includes/robots-cpt.php' );

// Add custom taxonomy for movies to the robots taxonomy
include( 'includes/movies-tax.php' );

// Adds function to load list of robots from CPT
function jl_robots_list( $movies='' ) {
	include( 'includes/robots-list.php' );
}

/* To load the robots list, add this line to your theme:
	<?php if(function_exists('jl_robots_list')) { jl_robots_list(); } ?>
*/
	
// Adds shortcode to load robots list in content
function jl_robots_list_shortcode( $jl_robots_atts ) {

	$jl_robots_atts = shortcode_atts( array(
		'movies' => ''
	), $jl_robots_atts, 'jl_robots' );
	
	ob_start();
	
	jl_robots_list( $jl_robots_atts['movies'] );

	$jl_robots_list_content = ob_get_clean();
	
	return $jl_robots_list_content;

}
add_shortcode( 'jl_robots', 'jl_robots_list_shortcode' );

/* To load the robots list, add this line to your page or post:
	[jl_robots movies=""]
*/