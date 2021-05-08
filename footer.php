<?php
	/**  The template for displaying the footer 	**/

	echo "</div>"; // Site Wrapper End

	// theme footer area
	do_action('cryptoland_widgetize_action');
	do_action('cryptoland_copyright_action');

	// action for add elements after theme footer
	do_action('cryptoland_after_footer');
	wp_footer();

?>

	</body>
</html>
