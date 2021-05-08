<?php

if ( 'on' == ot_get_option( 'cryptoland_use_custom_error_page' ) && 'off' == ot_get_option( 'cryptoland_disable_header_on_error_page' ) ) {
    remove_action( 'cryptoland_header_action', 'cryptoland_header', 10 );
}


// theme header
get_header();

//  error page action area, you can use this function for your custom codes
do_action("cryptoland_before_404");

if ( 'on' == ot_get_option( 'cryptoland_use_custom_error_page' ) && '' != ot_get_option( 'cryptoland_error_selected_page' ) ) {

    cryptoland_vc_inject_shortcode_css( ot_get_option( 'cryptoland_error_selected_page' ) );
    $content = get_post_field('post_content', ot_get_option( 'cryptoland_error_selected_page' ));
    echo do_shortcode( $content );

} else {

//404 page metaboxes settings
$cryptoland_404_layout = ot_get_option( 'cryptoland_404_layout' );

?>

    <div id="cryptoland-404" class="cryptoland-404">  <!-- 404 page general div -->

        <!-- HERO SECTION -->
        <?php cryptoland_hero_section(); ?>

        <div id="error-page-container" class="bg-white c-section -space-large">
            <div class="grid container">
                <div class="row row-xs-middle">

                    <!-- Right sidebar -->
                    <?php if ( $cryptoland_404_layout == 'right-sidebar' ) { ?>
                    <div class="col-lg-8 col-md-8 col-sm-12 posts content-error">

                    <!-- left sidebar -->
                    <?php } elseif ( $cryptoland_404_layout == 'left-sidebar' ) { ?>
                    <?php cryptoland_inner_page_sidebars(); ?>
                    <div class="col-lg-8 col-md-8 col-sm-12 posts content-error">

                    <!-- Sidebar none -->
                    <?php } elseif ( $cryptoland_404_layout == 'full-width' || $cryptoland_404_layout == '' ) { ?>
                    <div class="full-width-index col-md-10 offset-2 col-lg-8 content-error text-center">
                    <?php } ?>

                        <h3 class="black"><?php esc_html_e( 'Hmm, we could not find what you are looking for.', 'cryptoland' ); ?></h3>
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'cryptoland' ); ?></p>

                        <div class="search-form-page-container">
                            <?php get_search_form(); ?>
                        </div>

                    </div><!-- End sidebar + content -->

                    <!-- Right sidebar -->
                    <?php
                    if ( $cryptoland_404_layout == 'right-sidebar' ) {
                        cryptoland_inner_page_sidebars();
                    }
                    ?>

                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End div #blog-post -->
    </div> <!-- End 404 page general div -->

<?php
}
if ( 'on' == ot_get_option( 'cryptoland_use_custom_error_page' ) && 'off' == ot_get_option( 'cryptoland_disable_widgetize_on_error_page' ) ) {
    remove_action( 'cryptoland_widgetize_action', 'cryptoland_widgetize', 10 );
}
if ( 'on' == ot_get_option( 'cryptoland_use_custom_error_page' ) && 'off' == ot_get_option( 'cryptoland_disable_copyright_on_error_page' ) ) {
    remove_action( 'cryptoland_copyright_action', 'cryptoland_copyright', 10 );
}
do_action("cryptoland_after_404");
get_footer();
?>
