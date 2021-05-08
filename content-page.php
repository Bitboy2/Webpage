<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage cryptoland
 * @since cryptoland 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				esc_html__( 'Continue reading %s', 'cryptoland' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			cryptoland_wp_link_pages();
		?>
	</div><!-- End .entry-content -->

</article><!--End article -->
