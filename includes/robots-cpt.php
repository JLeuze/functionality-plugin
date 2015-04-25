<?php // Register custom post type for robots
function jl_register_robots_cpt() {
	$jl_robot_labels = array(
		'name'               => _x( 'Robots', 'post type general name', 'jlfunctionality' ),
		'singular_name'      => _x( 'Robot', 'post type singular name', 'jlfunctionality' ),
		'menu_name'          => _x( 'Robots', 'admin menu', 'jlfunctionality' ),
		'name_admin_bar'     => _x( 'Robot', 'add new on admin bar', 'jlfunctionality' ),
		'add_new'            => _x( 'Add New', 'robot', 'jlfunctionality' ),
		'add_new_item'       => __( 'Add New Robot', 'jlfunctionality' ),
		'new_item'           => __( 'New Robot', 'jlfunctionality' ),
		'edit_item'          => __( 'Edit Robot', 'jlfunctionality' ),
		'view_item'          => __( 'View Robot', 'jlfunctionality' ),
		'all_items'          => __( 'All Robots', 'jlfunctionality' ),
		'search_items'       => __( 'Search Robots', 'jlfunctionality' ),
		'parent_item_colon'  => __( 'Parent Robots:', 'jlfunctionality' ),
		'not_found'          => __( 'No robots found.', 'jlfunctionality' ),
		'not_found_in_trash' => __( 'No robots found in Trash.', 'jlfunctionality' )
	);

	$jl_robot_args = array(
		'labels'             => $jl_robot_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'robot' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'robot', $jl_robot_args );
}
add_action( 'init', 'jl_register_robots_cpt' );