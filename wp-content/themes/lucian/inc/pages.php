<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){

	// NOSOTROS
	if( ! get_page_by_path('fact-sheet-download') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Fact Sheet Download',
			'post_name'   => 'fact-sheet-download',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

});
