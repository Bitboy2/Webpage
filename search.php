<?php

	get_header();

	//Search page settings
	$cryptoland_search_layout = ot_get_option( 'cryptoland_search_layout' );

	do_action("cryptoland_before_search");

?> <!-- Search page before code -->

<div id="cryptoland-search" class="cryptoland-search"> <!-- Search page general div -->

		<!-- HERO SECTION -->
		<?php cryptoland_hero_section(); ?>

	<div id="search-page-container" class="bg-white c-section -space-large">
		<div class="grid container">
			<div class="row row-xs-middle">

				<!-- Right sidebar -->
				<?php	if( ( $cryptoland_search_layout ) == 'right-sidebar' || ( $cryptoland_search_layout ) == '') { ?>
				<div class="col col-lg-8  col-md-8 col-sm-12 posts">

				<!-- left sidebar -->
				<?php } elseif( ( $cryptoland_search_layout ) == 'left-sidebar') { ?>
				<?php cryptoland_inner_page_sidebars(); ?>
				<div class="col col-lg-8  col-md-8 col-sm-12 posts">

				<!-- Sidebar none -->
				<?php } elseif( ( $cryptoland_search_layout ) == 'full-width') { ?>
				<div class="full-width-index col col-md-10 col-lg-8">
				<?php }

					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'search' );
						endwhile;
					else :
						get_template_part( 'content', 'none' );
					endif;

					cryptoland_post_pagination();

				?>
				</div><!-- End sidebar + content -->

				<!-- Right sidebar -->
				<?php if( ( $cryptoland_search_layout ) == 'right-sidebar' || ( $cryptoland_search_layout ) == '') { cryptoland_inner_page_sidebars(); } ?>

			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End #blog-post -->
</div><!--End search page general div -->

<?php do_action("cryptoland_after_search") ?><!-- Search page after code -->

<?php get_footer(); ?>
