<?php

	// theme header
	get_header();

	//Page settings
	$cryptoland_pagelayout 	= 	rwmb_meta( 'cryptoland_pagelayout' );
	$cryptoland_pagelayout_class 	= 	( ( $cryptoland_pagelayout ) =='right-sidebar' || ( $cryptoland_pagelayout ) =='left-sidebar' || ( $cryptoland_pagelayout ) !='' ) ? 'col-md-8 col-sm-12' : 'col-md-12' ;

	// page action area
	do_action("cryptoland_before_page");

	?> <!-- Page before code -->

<div id="cryptoland-index" class="cryptoland-index"> <!-- Page general div -->

		<!-- HERO SECTION -->
		<?php cryptoland_hero_section(); ?>

	<div id="default-page-container" class="c-section -space-large">
		<div class="grid container">
			<div class="row row-xs-middle">


					<!-- Left sidebar -->
					<?php
						if( ( $cryptoland_pagelayout ) =='left-sidebar'  ){
					 		cryptoland_inner_page_sidebars();
					 	}
				 	?>

					<div class="full-width-index col <?php echo esc_attr( $cryptoland_pagelayout_class ); ?>">


						<?php
							// Start the loop.
							while ( have_posts() ) : the_post();

								// Include the page content template.
								get_template_part( 'content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							// End the loop.
							endwhile;
						?>
					</div>

					<?php if( ( $cryptoland_pagelayout ) =='right-sidebar' ){ cryptoland_inner_page_sidebars(); } ?>

			</div><!--End row -->
		</div><!--End container -->
	</div><!--End #blog -->

</div><!--End page general div -->

	<?php do_action("cryptoland_after_page"); ?><!--End after code -->

	<?php get_footer(); ?>
