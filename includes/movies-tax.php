<?php // Register custom taxonomy for movies to the robots taxonomy
function jl_register_movies_tax() {
	$jl_movies_labels = array(
		'name'              => _x( 'Movies', 'taxonomy general name' ),
		'singular_name'     => _x( 'Movie', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Movies' ),
		'all_items'         => __( 'All Movies' ),
		'parent_item'       => __( 'Parent Movie' ),
		'parent_item_colon' => __( 'Parent Movie:' ),
		'edit_item'         => __( 'Edit Movie' ),
		'update_item'       => __( 'Update Movie' ),
		'add_new_item'      => __( 'Add New Movie' ),
		'new_item_name'     => __( 'New Movie Name' ),
		'menu_name'         => __( 'Movie' ),
	);

	$jl_movies_args = array(
		'hierarchical'      => true,
		'labels'            => $jl_movies_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'movies', array( 'robot' ), $jl_movies_args );
}
add_action( 'init', 'jl_register_movies_tax', 0 );