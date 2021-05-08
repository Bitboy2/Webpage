<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<!-- Meta UTF8 charset -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#000">

	<?php wp_head(); ?>
</head>

	<!-- BODY START -->
	<body <?php body_class(); ?>>

        <?php

            if ( function_exists( 'wp_body_open' ) ) {
                wp_body_open();
            }

		do_action('cryptoland_preloader_action');
		do_action('cryptoland_before_header');
		do_action('cryptoland_header_action');
		do_action('cryptoland_backtop_action');
	?>

	<!-- Site Wrapper -->
	<div class="wrapper">
