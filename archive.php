<?php

	get_header();

	// page layout option tree settings
	$cryptoland_archive_layout = ot_get_option( 'cryptoland_archive_layout' );

	// archive page layout before action area, you can use this function for your custom codes
	do_action("cryptoland_before_archive");

?> <!-- Archive page before code -->

<div id="cryptoland-archive" class="cryptoland-archive" > <!-- Archive page general div -->

	<!-- HERO SECTION -->
	<?php cryptoland_hero_section(); ?>

	<div id="archive-page-container" class="bg-white c-section -space-large">
		<div class="grid container">
			<div class="row row-xs-middle">

				<!-- Right sidebar -->
				<?php if( ( $cryptoland_archive_layout ) == 'right-sidebar' || ( $cryptoland_archive_layout ) == '') { ?>
				<div class="col col-lg-8  col-md-8 col-sm-12 posts">

				<!-- left sidebar -->
				<?php } elseif( ( $cryptoland_archive_layout ) == 'left-sidebar') { ?>
				<?php cryptoland_inner_page_sidebars();  ?>
				<div class="col col-lg-8  col-md-8 col-sm-12 posts">

				<!-- Sidebar None -->
				<?php } elseif( ( $cryptoland_archive_layout ) == 'full-width') { ?>
				<div class="full-width-index col col-md-10 col-lg-8">
				<?php }

					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							cryptoland_post_format();
						endwhile;
					else :
						get_template_part( 'content', 'none' );
					endif;

				cryptoland_post_pagination();

				?>
				</div><!-- End sidebar + content -->

				<!-- Right sidebar -->
				<?php if( ( $cryptoland_archive_layout ) == 'right-sidebar' || ( $cryptoland_archive_layout ) == '') {
					cryptoland_inner_page_sidebars();
				} ?>

			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End div #blog-post -->

</div> <!-- End archive page general div-->

<?php

	// archive page layout after action area, you can use this function for your custom codes
	do_action("cryptoland_after_archive");

	// theme footer
	get_footer();

?>
