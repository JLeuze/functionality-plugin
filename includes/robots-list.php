<?php // Loop template for the robots list

// Arguments for robots query
$jl_robots_args = array(
	'post_type'      => 'robot',
	'movies'         => $movies,
	'posts_per_page' => -1
);
$jl_robots_query = new WP_Query( $jl_robots_args );

// The Loop
if ( $jl_robots_query->have_posts() ) {
	echo '<h4>Robots</h4>';
	echo '<ul>';
	while ( $jl_robots_query->have_posts() ) {
		$jl_robots_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';
} else {
	// no robots found
}
/* Restore original Post Data */
wp_reset_postdata();