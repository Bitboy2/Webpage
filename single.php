<?php

	get_header();

	// single page layout ot settings
	$cryptoland_post_layout_ot = ot_get_option('cryptoland_post_layout');
	$cryptoland_post_layout_mb = get_post_meta(get_the_ID(), 'cryptoland_post_layout', true );
    $cryptoland_post_content_width = ot_get_option('cryptoland_single_content_width');

	if( ( $cryptoland_post_layout_mb ) != '' ) {
		$cryptoland_post_layout = $cryptoland_post_layout_mb;
	} else {
		$cryptoland_post_layout = $cryptoland_post_layout_ot;
	}

    if( $cryptoland_post_content_width == 'full' ) {
		$cryptoland_column = 'col-md-12 col-lg-12';
	} else {
		$cryptoland_column = 'col-md-10 col-lg-8 offset-md-2';
	}

	do_action("cryptoland_before_post_single");

?>

<div id="cryptoland-single" class="cryptoland-single"> <!-- Single page general div -->

	<!-- HERO SECTION -->
	<?php	cryptoland_hero_section(); ?>

	<div id="single-page-container" class="bg-white c-section -space-large">
		<div class="grid container">
			<div class="row row-xs-middle">

				<!-- Right sidebar -->
				<?php	if( ( $cryptoland_post_layout ) == 'right-sidebar' || ( $cryptoland_post_layout ) == '') { ?>
				<div class="col col-lg-8 col-md-8 col-sm-12 posts">

				<!-- left sidebar -->
				<?php } elseif( ( $cryptoland_post_layout ) == 'left-sidebar') { ?>
				<?php cryptoland_inner_page_sidebars(); ?>
				<div class="col col-lg-8 col-md-8 col-sm-12 posts">

				<!-- Sidebar none -->
				<?php } elseif( ( $cryptoland_post_layout ) == 'full-width') { ?>
				<div class="full-width-index col <?php echo esc_attr( $cryptoland_column ); ?>">
				<?php } ?>

					<div class="single-inner">
						<?php

							cryptoland_single_post_formats_content(); // Slider , gallery and more
							//Content Area
							while ( have_posts() ) :

								the_post();

								echo '<div class="single-inner-content">';

									the_content();

									cryptoland_wp_link_pages();

								echo '</div>';

							endwhile;

							cryptoland_single_post_tags();

							//Post Comments Start
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
							//Post Comments End

							cryptoland_port_navigation();

						?>
					</div><!-- single-inner -->

				</div><!-- End sidebar + content -->

				<!-- Right sidebar -->
				<?php if( ( $cryptoland_post_layout ) == 'right-sidebar' || ( $cryptoland_post_layout ) == '') { cryptoland_inner_page_sidebars(); } ?>

				</div><!-- End row -->
			</div><!-- End container -->
		</div><!-- End #blog-post -->


</div><!--End search page general div -->

<?php
	do_action("cryptoland_after_post_single");
	get_footer();
?>
