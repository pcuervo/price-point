<?php

/*------------------------------------*\
	CUSTOM POST TYPES
\*------------------------------------*/

add_action('init', function(){

	// ARCHIVO
	$labels = array(
		'name'          => 'Fact Sheets',
		'singular_name' => 'Fact Sheets',
		'add_new'       => 'New fact sheet',
		'add_new_item'  => 'New fact sheet',
		'edit_item'     => 'Edit fact sheet',
		'new_item'      => 'New fact sheet',
		'all_items'     => 'All',
		'view_item'     => 'View fact sheet',
		'search_items'  => 'Search usuarios',
		'menu_name'     => 'Fact Sheets'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'fact-sheets' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'fact-sheets', $args );

});