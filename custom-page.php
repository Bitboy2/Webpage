<?php

	/*
	Template name: Custom-page Template
	*/

	get_header();

	do_action('cryptoland_page_header_action');

	// the_content
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;
	
	get_footer();

?>
