<?php
/**
*
* @package WordPress
* @subpackage cryptoland
* @since cryptoland 1.0
*
**/

/*************************************************
## Google Font
*************************************************/

if ( ! function_exists( 'cryptoland_theme_fonts' ) ) :
    function cryptoland_theme_fonts() {
        $fonts_url = '';

        $Catamaran = _x( 'on', 'Catamaran font: on or off', 'cryptoland' );
        $Raleway = _x( 'on', 'Raleway font: on or off', 'cryptoland' );
        $Roboto = _x( 'on', 'Roboto font: on or off', 'cryptoland' );

        if ( 'off' !== $Catamaran OR 'off' !== $Raleway OR 'off' !== $Roboto ) {
            $font_families = array();

            if ( 'off' !== $Catamaran )
            $font_families[] = 'Catamaran:300,400,600,700';

            if ( 'off' !== $Raleway )
            $font_families[] = 'Raleway:100,700';

            if ( 'off' !== $Roboto )
            $font_families[] = 'Roboto:700';

            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' )
            );
            $fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
        }

        return $fonts_url;
    }
endif;

/*************************************************
## Styles and Scripts
*************************************************/

function cryptoland_scripts() {

    // flexslider css file for blog post

    wp_enqueue_style( 'ion-icon',get_template_directory_uri() . '/framework/dist/ion-icons/ionicon-stylesheet.css',false, '1.0');
    wp_enqueue_style( 'themify',get_template_directory_uri() . '/framework/dist/themify/themify-stylesheet.css',false, '1.0');
    wp_enqueue_style( 'font-awesome',get_template_directory_uri() . '/framework/dist/font-awesome/fontawesome.min.css',false, '1.0');
    wp_enqueue_style( 'cryptoland-custom-flexslider',get_template_directory_uri() . '/framework/js/flexslider/flexslider.css',false, '1.0');

    $cryptoland_page_style =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_style', true ) );
    $cryptoland_page_style =  $cryptoland_page_style != '' ? $cryptoland_page_style : 1;
    wp_enqueue_style( 'cryptoland-main', get_template_directory_uri() . '/css/main'.$cryptoland_page_style.'.css',false, '1.0');
    wp_enqueue_style( 'cryptoland-extra', get_template_directory_uri() . '/framework/css/cryptoland-extra.css',false, '1.0');


    // theme default css file for blog posts
    wp_enqueue_style( 'cryptoland-theme-style',get_template_directory_uri() . '/framework/css/theme-blog.css',false, '1.0');
    wp_enqueue_style( 'cryptoland-wordpress',get_template_directory_uri() . '/framework/css/framework-wordpress.css',false, '1.0');
    wp_enqueue_style( 'cryptoland-update',get_template_directory_uri() . '/framework/css/framework-update.css',false, '1.0');
    wp_enqueue_style( 'cryptoland-fonts', cryptoland_theme_fonts(), array(), '1.0' );
    wp_enqueue_style( 'cryptoland-style', get_stylesheet_uri() );

    // WP default scripts for theme
    wp_enqueue_script('cryptoland-custom-flexslider',get_template_directory_uri() . '/framework/js/flexslider/flexslider-min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('cryptoland-custom-parallax',get_template_directory_uri() . '/framework/js/jarallax.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('fitvids',get_template_directory_uri() . '/framework/js/fitvids.js',array('jquery'), '1.0', true);
    wp_enqueue_script('stickyelement',get_template_directory_uri() . '/framework/js/jquery.stickyelement.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('cryptoland-blog-settings',get_template_directory_uri() . '/framework/js/framework-blog-settings.js',array('jquery'), '1.0', true);

    // default scripts for theme
    wp_enqueue_script('cryptoland-custom',get_template_directory_uri() . '/framework/js/cryptoland-custom.js',array('jquery'), '1.0', true);
    wp_enqueue_script('charts',get_template_directory_uri() . '/js/charts.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('counterup',get_template_directory_uri() . '/js/counterup.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('flip-clock',get_template_directory_uri() . '/js/flip-clock.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('match-height',get_template_directory_uri() . '/js/jquery.match-height.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-popup',get_template_directory_uri() . '/js/magnific-popup.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('smooth-scroll',get_template_directory_uri() . '/js/smooth-scroll.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('three',get_template_directory_uri() . '/js/three.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('timer',get_template_directory_uri() . '/js/timer.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('waypoints',get_template_directory_uri() . '/js/waypoints.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('cryptoland-main-scripts',get_template_directory_uri() . '/js/scripts.js',array('jquery'), '1.0', true);

    // IE fixers
    wp_enqueue_script( 'modernizr',get_template_directory_uri() . '/framework/js/modernizr.min.js',array('jquery'), '1,0', false );
    wp_script_add_data('modernizr', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'respond',get_template_directory_uri() . '/framework/js/respond.min.js',array('jquery'), '1.0', false );
    wp_script_add_data('respond', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'html5shiv',get_template_directory_uri() . '/js/html5shiv.min.js',array('jquery'), '1.0', false );
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9' );

    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'cryptoland_scripts' );


/*************************************************
## Admin style and scripts
*************************************************/

function cryptoland_admin_style() {

    // Update CSS within in Admin
    wp_enqueue_style( 'cryptoland-custom-admin',get_template_directory_uri() . '/framework/css/framework-admin.css');
    wp_enqueue_script('cryptoland-custom-admin',get_template_directory_uri() . '/framework/js/framework-custom.admin.js');

}
add_action('admin_enqueue_scripts', 'cryptoland_admin_style');


/*************************************************
## Theme option & Metaboxes & shortcodes
*************************************************/

// Theme wpbakery page builder shortcodes settings
if(function_exists('vc_set_as_theme')) {
    require_once get_template_directory() . '/includes/vc-shortcodes.php';
    require_once get_template_directory() . '/includes/vc-custom-settings.php';

    vc_set_as_theme( $disable_updater = false );
    vc_is_updater_disabled();

}

// Metabox plugin check
if ( ! function_exists( 'rwmb_meta' ) ) {

    function rwmb_meta( $key, $args = '', $post_id = null ) {
        return false;
    }

}

// Option tree controllers
if ( ! class_exists( 'OT_Loader' ) ) {

    function ot_get_option() {
        return false;
    }

}

// Theme post and page meta plugin for customization and more features
include get_template_directory() . '/includes/page-metaboxes.php';

// Theme css setting file
include get_template_directory() . '/includes/custom-style.php';

// Theme parts
include get_template_directory() . '/includes/template-parts.php';

// TGM plugin activation
include get_template_directory() . '/includes/class-tgm-plugin-activation.php';

// add filter for  options panel loader
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );

// Theme options admin panel setings file
include get_template_directory() . '/includes/theme-options.php';

/*************************************************
## Default Categories Widget
*************************************************/
function cryptoland_add_span_cat_count($links) {

    $links = str_replace('</a> (', '</a> <span class="widget-list-span">(', $links);
    $links = str_replace(')', ')</span>', $links);

    return $links;
}
add_filter('wp_list_categories', 'cryptoland_add_span_cat_count');

/*************************************************
## Excerpt Filter and Limit
*************************************************/

// more
function cryptoland_custom_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'cryptoland_custom_excerpt_more' );

// limit
function cryptoland_excerpt_limit($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}


/*************************************************
## Theme Setup
*************************************************/

if ( ! isset( $content_width ) ) $content_width = 960;

function cryptoland_theme_setup() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );

    // theme standarts
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'html5', array( 'search-form' ) );

    /*
    * Enable support for Post Formats.
    *
    * See: https://codex.wordpress.org/Post_Formats
    */
    add_theme_support( 'post-formats', array('gallery', 'quote', 'chat', 'link', 'status', 'video', 'aside', 'audio'));

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'cryptoland', get_template_directory() . '/languages' );

    register_nav_menus( array(
        'header_menu_1' => esc_html__( 'Header Menu 1', 'cryptoland' ),
        'header_menu_2' => esc_html__( 'Header Menu 2', 'cryptoland' ),
    ) );

}
add_action( 'after_setup_theme', 'cryptoland_theme_setup' );


/*************************************************
## HEADER SEARCH FORM
*************************************************/

function cryptoland_custom_search_form( $form ) {
    $form = '<div class="c-sidebar-1-search">
    <form class="c-sidebar-1-search-form" role="search" method="get" id="custom-searchform" action="' . esc_url( home_url( '/' ) ) . '" >
    <input class="c-sidebar-1-search-field" type="text" value="' . get_search_query() . '" placeholder="'. esc_attr__( 'Search for...', 'cryptoland' ) .'" name="s" id="s" >
    <button class="c-sidebar-1-search-button" id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    </div>';
    return $form;
}
add_filter( 'get_search_form', 'cryptoland_custom_search_form' );

/*************************************************
## add custom post types in arciheve
*************************************************/

function cryptoland_add_custom_types( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
            'post', 'nav_menu_item', 'portfolio'
        ));
        return $query;
    }
}
add_filter( 'pre_get_posts', 'cryptoland_add_custom_types' );

/*************************************************
## CUSTOM BODY CLASS
*************************************************/

function cryptoland_body_theme_classes($classes) {

    $theme_name = 'Ninetheme-' . wp_get_theme();
    $theme_version = 'Ninetheme-Version-' . wp_get_theme()->get( 'Version' );

    if ( ! is_page_template( 'custom-page.php' ) ) {
        $inner_class =  'body-inner-class';
        $classes[] =  $inner_class;
    }
    if (  is_page_template( 'custom-page.php' ) ) {
        $home_style =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_style', true ) );
        $home_style =  $home_style != '' ? 'home'.$home_style : 'home1';
        $classes[] =  $home_style;
    }

    $classes[] = $theme_name;
    $classes[] = $theme_version;

    return $classes;
}
add_filter('body_class','cryptoland_body_theme_classes');


/*************************************************
## CUSTOM HTML CLASS
*************************************************/

add_filter( 'language_attributes', 'cryptoland_add_no_js_class_to_html_tag', 10, 2 );
/**
* https://gist.github.com/nickdavis/73d91d674b843b77a1cd0a21f9c0353a
* Add 'no-js' class to <html> tag in order to work with Modernizr.
*
* (Modernizr will change class to 'js' if JavaScript is supported).
*
* @since 1.0.0
*
* @param string $output A space-separated list of language attributes.
* @param string $doctype The type of html document (xhtml|html).
*
* @return string $output A space-separated list of language attributes.
*/
function cryptoland_add_no_js_class_to_html_tag( $output, $doctype ) {
    if ( 'html' !== $doctype ) {
        return $output;
    }
    $output .= ' class="no-js"';
    return $output;
}

/*************************************************
## CUSTOM BODY POST CLASS
*************************************************/

function cryptoland_post_theme_class($classes) {

    $cryptoland_blog_style = ot_get_option( 'blog_style' );
    $masonrycolumn = ot_get_option( 'blog_masonrycolumn' );
    $column = ( $masonrycolumn != '' ) ? $masonrycolumn : 4;
    $class ='';
    if ( $cryptoland_blog_style == '1' OR $cryptoland_blog_style == '' ) :
        $class = ' c-blog-1-item  cryptoland-post-class';
    endif;

    $classes[] =  $class;

    return $classes;
}
add_filter('post_class','cryptoland_post_theme_class');

// pagination next page attributes
function cryptoland_posts_next_pag_attrs() {
    return 'class="c-pagination-1-link -next"';
}
add_filter('next_posts_link_attributes', 'cryptoland_posts_next_pag_attrs');

// pagination prev page attributes
function cryptoland_posts_prev_pag_attrs() {
    return 'class="c-pagination-1-link -previous"';
}
add_filter('previous_posts_link_attributes', 'cryptoland_posts_prev_pag_attrs');

/*************************************************
## Widget columns
*************************************************/

function cryptoland_widgets_init() {

    //Widgetize footer settings
    $footer_widget1_display = ot_get_option('cryptoland_footer_widget1_display');
    $footer_widget1_column = ot_get_option('cryptoland_footer_widget1_column');
    $footer_widget2_display = ot_get_option('cryptoland_footer_widget2_display');
    $footer_widget2_column = ot_get_option('cryptoland_footer_widget2_column');
    $footer_widget3_display = ot_get_option('cryptoland_footer_widget3_display');
    $footer_widget3_column = ot_get_option('cryptoland_footer_widget3_column');
    $footer_widget4_display = ot_get_option('cryptoland_footer_widget4_display');
    $footer_widget4_column = ot_get_option('cryptoland_footer_widget4_column');

    register_sidebar( array(
        'name' => esc_html__( 'General Sidebar', 'cryptoland' ),
        'id' => 'sidebar-1',
        'description' => esc_html__( 'These widgets for the all inner pages.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Blog Index Page Sidebar', 'cryptoland' ),
        'id' => 'cryptoland_blog_sidebar',
        'description' => esc_html__( 'These widgets for the all inner pages.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Blog Single Page Sidebar', 'cryptoland' ),
        'id' => 'cryptoland_single_sidebar',
        'description' => esc_html__( 'These widgets for the blog single page.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Default Page Template Sidebar', 'cryptoland' ),
        'id' => 'cryptoland_page_sidebar',
        'description' => esc_html__( 'These widgets for the default pages.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Error Page Sidebar', 'cryptoland' ),
        'id' => 'cryptoland_error_sidebar',
        'description' => esc_html__( 'These widgets for the error/404 page.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Search Page Sidebar', 'cryptoland' ),
        'id' => 'cryptoland_search_sidebar',
        'description' => esc_html__( 'These widgets for the search page.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );

    register_sidebar( array(
        'name' => esc_html__( 'Archive Page Sidebar', 'cryptoland' ),
        'id' => 'cryptoland_archive_sidebar',
        'description' => esc_html__( 'These widgets for the archive page.','cryptoland' ),
        'before_widget' => '<div class="c-sidebar-1-widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="c-sidebar-1-widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );

    //widgetize footer column and display settings
    if( $footer_widget1_display !=='off' AND $footer_widget1_column !='' ){
        register_sidebar( array(
            'name' => esc_html__( 'Footer Widget Area 1', 'cryptoland' ),
            'id' => 'cryptoland_footer_widget_1',
            'description' => esc_html__( 'Theme footer widget area first column.','cryptoland' ),
            'before_widget' => '<div class="col col-sm-10 col-md-8 col-lg-'.esc_attr($footer_widget1_column).'"><div class="widget %2$s">',
            'after_widget' => '</div></div>',
            'before_title' => '<h4 class="widget-heading">',
            'after_title' => '</h4>'
        ) );
    }
    if( $footer_widget2_display !=='off' AND $footer_widget2_column !='' ){
        register_sidebar( array(
            'name' => esc_html__( 'Footer Widget Area 2', 'cryptoland' ),
            'id' => 'cryptoland_footer_widget_2',
            'description' => esc_html__( 'Theme footer widget area second column.','cryptoland' ),
            'before_widget' => '<div class="col-xl-offset-1 col col-sm-10 col-md-8 col-lg-'.esc_attr($footer_widget2_column).'"><div class="widget %2$s">',
            'after_widget' => '</div></div>',
            'before_title' => '<h4 class="widget-heading">',
            'after_title' => '</h4>'
        ) );
    }
    if( $footer_widget3_display !='off' AND $footer_widget3_column !='' ){
        register_sidebar( array(
            'name' => esc_html__( 'Footer Widget Area 3', 'cryptoland' ),
            'id' => 'cryptoland_footer_widget_3',
            'description' => esc_html__( 'Theme footer widget area third column.','cryptoland' ),
            'before_widget' => '<div class=" col col-sm-10 col-md-8 col-lg-'.esc_attr($footer_widget3_column).'"><div class="widget %2$s">',
            'after_widget' => '</div></div>',
            'before_title' => '<h4 class="widget-heading">',
            'after_title' => '</h4>'
        ) );
    }
    if( $footer_widget4_display !='off' AND $footer_widget4_column !='' ){
        register_sidebar( array(
            'name' => esc_html__( 'Footer Widget Area 4', 'cryptoland' ),
            'id' => 'cryptoland_footer_widget_4',
            'description' => esc_html__( 'Theme footer widget area third column.','cryptoland' ),
            'before_widget' => '<div class=" col col-sm-10 col-md-8 col-lg-'.esc_attr($footer_widget4_column).'"><div class="widget %2$s">',
            'after_widget' => '</div></div>',
            'before_title' => '<h4 class="widget-heading">',
            'after_title' => '</h4>'
        ) );
    }
}
add_action( 'widgets_init', 'cryptoland_widgets_init' );


/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/

function cryptoland_register_required_plugins() {

    $plugins = array(
        array(
            'name' => esc_html__('Breadcrumb NavXT', "cryptoland"),
            'slug' => 'breadcrumb-navxt',
        ),
        array(
            'name' => esc_html__('Contact Form 7', "cryptoland"),
            'slug' => 'contact-form-7',
        ),
        array(
            'name' => esc_html__('Meta Box', "cryptoland"),
            'slug' => 'meta-box',
            'required' => true,
        ),
        array(
            'name' => esc_html__('SVG Support', "cryptoland"),
            'slug' => 'svg-support',
            'required' => true,
        ),
        array(
            'name' => esc_html__('Theme Options Panel', "cryptoland"),
            'slug' => 'option-tree',
            'required' => true,
        ),
        array(
            'name' => esc_html__('Metabox Tabs', "cryptoland"),
            'slug' => 'meta-box-tabs',
            'source' => 'https://ninetheme.com/documentation/plugins/meta-box-tabs.zip',
            'required' => true,
            'version' => '1.1.5',
        ),
        array(
            'name' => esc_html__('Metabox Show/Hide', "cryptoland"),
            'slug' => 'meta-box-show-hide',
            'source' => 'https://ninetheme.com/documentation/plugins/meta-box-show-hide.zip',
            'required' => true,
            'version' => '1.3',
        ),
        array(
            'name' => esc_html__('Envato Auto Update Theme', "cryptoland"),
            'slug' => 'envato-market',
            'source' => 'https://ninetheme.com/documentation/plugins/envato-market.zip',
            'required' => false,
        ),
        array(
            'name' => esc_html__('Page Builder', "cryptoland"),
            'slug' => 'js_composer',
            'source' => 'https://ninetheme.com/documentation/plugins/js_composer.zip',
            'required' => true,
        ),
        array(
            'name' => esc_html__('Revolution Slider', "cryptoland"),
            'slug' => 'revolution_slider',
            'source' => 'https://ninetheme.com/documentation/plugins/revolution_slider.zip',
            'required' => false,
        ),
        array(
            'name' => esc_html__('WP Cryptoland Shortcodes', "cryptoland"),
            'slug' => 'nt-theme-shortcodes',
            'source' => get_template_directory() . '/plugins/nt-theme-shortcodes.zip',
            'required' => true,
            'version' => '1.2.4',
        ),
    );

    $config = array(
        'id' => 'tgmpa',
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => true,
        'message' => '',
    );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'cryptoland_register_required_plugins' );


/*************************************************
## OPTION TREE WEBFONTS API
*************************************************/

add_filter( 'ot_google_fonts_api_key', 'cryptoland_change_ot_google_fonts_api_key' );

function cryptoland_change_ot_google_fonts_api_key( $key ) {

    $api = ot_get_option( 'ot_font_api' );
    return "$api";

}


/*************************************************
## ADMIN NOTICES
*************************************************/

function cryptoland_theme_activation_notice()
{
    global $current_user;

    $user_id = $current_user->ID;

    if (!get_user_meta($user_id, 'cryptoland_theme_activation_notice')) {
        ?>

        <div class="updated notice">
            <p>
                <?php echo sprintf(
                    esc_html__('If you need help about demodata installation, please read docs and %s', 'cryptoland'),
                    '<a target="_blank" href="' . esc_url('https://ninetheme.com/contact/') . '">' . esc_html__('Open a ticket', 'cryptoland') . '</a> ' . esc_html__('or', 'cryptoland') . ' <a href="?cryptoland-ignore-notice">' . esc_html__('Dismiss', 'cryptoland') . '</a>'
                ); ?>
            </p>
        </div>

        <?php
    }
}
add_action('admin_notices', 'cryptoland_theme_activation_notice');

function cryptoland_theme_activation_notice_ignore()
{
    global $current_user;

    $user_id = $current_user->ID;

    if (isset($_GET['cryptoland-ignore-notice'])) {
        add_user_meta($user_id, 'cryptoland_theme_activation_notice', 'true', true);
    }
}
add_action('admin_init', 'cryptoland_theme_activation_notice_ignore');




/*************************************************
## Navigation Customization
*************************************************/

function cryptoland_markup_pagination($content) {

    // Remove role attribute
    $content = str_replace('role="navigation"', '', $content);

    // Remove h2 tag
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);

    return $content;
}
add_action('navigation_markup_template', 'cryptoland_markup_pagination');


/*************************************************
## Register Menu
*************************************************/

class Cryptoland_Wp_Bootstrap_Navwalker extends Walker_Nav_Menu {
    /**
    * @see Walker::start_lvl()
    * @since 3.0.0
    */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"menu__dropdown\">\n";
    }

    /**
    * @see Walker::start_el()
    * @since 3.0.0
    */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /**
        * Dividers, Headers or Disabled
        */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider item-has-children has-submenu">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider item-has-children has-submenu">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header item-has-children') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="dropdown-header item-has-children has-submenu">' . esc_html( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_html( $item->title ) . '</a>';
        } else {

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu__item menu-item-' . $item->ID;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );


            if($args->has_children && $depth === 0) {
                $class_names .= ' has-submenu item-has-children';
            }elseif($args->has_children && $depth > 0) {
                $class_names .= ' has-submenu ';
            }
            if ( in_array( 'current-menu-item', $classes ) )
            $class_names .= ' active';

            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            $atts = array();
            $atts['title']  = ! empty( $item->title )	? $item->title	: '';
            $atts['target'] = ! empty( $item->target )	? $item->target	: '';
            $atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

            // If item has_children add atts to a.
            if ( $args->has_children && $depth === 0 ) {
                $atts['href']   		= $item->url;
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            }

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;

            /*
            * Glyphicons
            **/
            if ( ! empty( $item->attr_title ) )
            $item_output .= '<a class="menu__link" '. $attributes .'><span class=" ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
            $item_output .= '<a class="menu__link" '. $attributes .'>';

            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children && 0 === $depth ) ? '</a>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
    * Traverse elements to create list from elements.
    **/
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
        return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
        $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    /**
    * Menu Fallback
    **/
    public static function fallback( $args ) {
        if ( current_user_can( 'manage_options' ) ) {

            extract( $args );

            $fb_output = null;

            if ( $container ) {
                $fb_output = '<' . $container;

                if ( $container_id )
                $fb_output .= ' id="' . $container_id . '"';

                if ( $container_class )
                $fb_output .= ' class="' . $container_class . '"';

                $fb_output .= '>';
            }

            $fb_output .= '<ul';

            if ( $menu_id )
            $fb_output .= ' id="' . $menu_id . '"';

            if ( $menu_class )
            $fb_output .= ' class="' . $menu_class . '"';

            $fb_output .= '>';
            $fb_output .= '<li class="menu__item"><a class="menu__link" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__('Add a menu','cryptoland') .'</a></li>';
            $fb_output .= '</ul>';

            if ( $container )
            $fb_output .= '</' . $container . '>';


            echo wp_kses( $fb_output, cryptoland_allowed_html() );
        }
    }
}

/*************************************************
## Register Mobile Menu
*************************************************/

class Cryptoland_Mob_Wp_Bootstrap_Navwalker extends Walker_Nav_Menu {
    /**
    * @see Walker::start_lvl()
    * @since 3.0.0
    */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"submenu\">\n";
    }

    /**
    * @see Walker::start_el()
    * @since 3.0.0
    */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /**
        * Dividers, Headers or Disabled
        */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider item-has-children has-submenu">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider item-has-children has-submenu">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header item-has-children') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="dropdown-header item-has-children has-submenu">' . esc_html( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_html( $item->title ) . '</a>';
        } else {

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'mob-menu__item menu-item-' . $item->ID;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );


            if($args->has_children && $depth === 0) {
                $class_names .= ' has-submenu item-has-children';
            }elseif($args->has_children && $depth > 0) {
                $class_names .= ' has-submenu ';
            }
            if ( in_array( 'current-menu-item', $classes ) )
            $class_names .= ' active';

            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            $atts = array();
            $atts['title']  = ! empty( $item->title )	? $item->title	: '';
            $atts['target'] = ! empty( $item->target )	? $item->target	: '';
            $atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

            // If item has_children add atts to a.
            if ( $args->has_children && $depth === 0 ) {
                $atts['href']   		= $item->url;
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            }

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;

            /*
            * Glyphicons
            **/
            if ( ! empty( $item->attr_title ) )
            $item_output .= '<a class="mob-menu__link" '. $attributes .'><span class=" ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
            $item_output .= '<a class="mob-menu__link" '. $attributes .'>';

            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children && 0 === $depth ) ? '</a>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
    * Traverse elements to create list from elements.
    **/
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
        return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
        $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    /**
    * Menu Fallback
    **/
    public static function fallback( $args ) {
        if ( current_user_can( 'manage_options' ) ) {

            extract( $args );

            $fb_output = null;

            if ( $container ) {
                $fb_output = '<' . $container;

                if ( $container_id )
                $fb_output .= ' id="' . $container_id . '"';

                if ( $container_class )
                $fb_output .= ' class="' . $container_class . '"';

                $fb_output .= '>';
            }

            $fb_output .= '<ul';

            if ( $menu_id )
            $fb_output .= ' id="' . $menu_id . '"';

            if ( $menu_class )
            $fb_output .= ' class="' . $menu_class . '"';

            $fb_output .= '>';
            $fb_output .= '<li class="mob-menu__item"><a class="mob-menu__link" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__('Add a menu','cryptoland') .'</a></li>';
            $fb_output .= '</ul>';

            if ( $container )
            $fb_output .= '</' . $container . '>';

            echo wp_kses( $fb_output, cryptoland_allowed_html() );
        }
    }
}

// Unset URL from comment form
function cryptoland_move_comment_form_below( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'cryptoland_move_comment_form_below' );

// control comment form partials
function cryptoland_move_modify_comment_form_fields($fields){

    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields['author'] = '<div class="row"><div class="col col--sm-4">' . '<input
    class="c-form-input"
    id="author"
    placeholder="'.esc_attr__('Your Name (No Keywords)','cryptoland').'"
    name="author"
    type="text"
    value="' . esc_attr( $commenter['comment_author'] ) . '"
    size="30"' . $aria_req . '
    required />'. '</div>';
    $fields['email'] = '<div class="col col--sm-4">' . '<input
    class="c-form-input"
    id="email"
    placeholder="'.esc_attr__('your-real-email@example.com','cryptoland').'"
    name="email"
    type="text"
    value="' . esc_attr(  $commenter['comment_author_email'] ) . '"
    size="30"' . $aria_req . '
    required/>' . '</div>';
    $fields['url'] = '<div class="col col--sm-4">' .
    '<input
    class="c-form-input" id="url"
    name="url"
    placeholder="'.esc_attr__('Add your website url','cryptoland').'"
    type="text"
    value="' . esc_attr( $commenter['comment_author_url'] ) . '"
    size="30"
    required/> ' . '</div></div>';

    return $fields;
}
add_filter('comment_form_default_fields','cryptoland_move_modify_comment_form_fields');

// add classes comment form button
function cryptoland_addclass_form_button( $arg ) {
    // $arg contains all the comment form defaults
    // simply redefine one of the existing array keys to change the comment form
    // see http://codex.wordpress.org/Function_Reference/comment_form for a list
    // of array keys
    // add Foundation classes to the button class
    $arg['class_submit'] = 'btn btn--medium';
    // return the modified array
    return $arg;
}
// run the comment form defaults through the newly defined filter
add_filter( 'comment_form_defaults', 'cryptoland_addclass_form_button' );

// add classes comment form replay link
function cryptoland_replace_reply_link_class($class){
    $class = str_replace("class='c-comments-1-reply", "class='reply xxx", $class);
    return $class;
}
add_filter('comment_reply_link', 'cryptoland_replace_reply_link_class');

// mce span fix
function cryptoland_override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'cryptoland_override_mce_options');

// Theme custom comment list
function cryptoland_custom_commentlist($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class('c-comments-1-item'); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">
            <div class="c-comments-1-avatar">
                <?php echo get_avatar($comment,$size='48' ); ?>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php esc_html_e('Your comment is awaiting moderation.', 'cryptoland') ?></em>
                <br />
            <?php endif; ?>

            <div class="c-comments-1-info">
                <div class="c-comments-1-info">
                    <div class="c-comments-1-user"><?php echo get_comment_author_link(); ?></div>
                    <div class="c-comments-1-date"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'cryptoland'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)', 'cryptoland'),'  ','') ?></div>
                    <div class="c-comments-1-message"><?php comment_text() ?></div>
                    <div class="c-comments-1-reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
                </div>
            </div>
        </div>
        <?php
}


/*************************************************
## SANITIZE MODIFIED VC-ELEMENTS OUTPUT
*************************************************/


if (!function_exists('cryptoland_vc_sanitize_data')) {
    function cryptoland_vc_sanitize_data($html_data)
    {
        return $html_data;
    }
}

/*************************************************
## VC COMPOSER PAGE CSS
*************************************************/
/*
*	get vc composer custom css from by page id
*	and add css to head by wp_head hook
*/
if( ! function_exists('cryptoland_vc_inject_shortcode_css') )  {
    function cryptoland_vc_inject_shortcode_css( $id ){
        $shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
        if ( ! empty( $shortcodes_custom_css ) ) {
            $shortcodes_custom_css = strip_tags( $shortcodes_custom_css );
            echo '<style type="text/css" data-type="nt-shortcodes-custom-css-page-'.$id.'">';
            echo esc_attr( $shortcodes_custom_css );
            echo '</style>';
        }
    }
    add_action('wp_head', 'cryptoland_vc_inject_shortcode_css');
}



/*************************************************
## THEME SETUP WIZARD
https://github.com/richtabor/MerlinWP
*************************************************/

require_once get_parent_theme_file_path( '/includes/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/includes/demo-wizard-config.php' );


function nt_forester_local_import_files() {
    return array(
        array(
            'import_file_name' => esc_html__( 'Demo Import', 'cryptoland' ),
            // xml data
            'local_import_file' => get_parent_theme_file_path( 'includes/merlin/demodata/data.xml' ),
            // widget data
            'local_import_widget_file' => get_parent_theme_file_path( 'includes/merlin/demodata/widgets.wie' ),
            // option tree -> theme options
            'local_import_option_tree_file' => get_parent_theme_file_path( 'includes/merlin/demodata/optiontree.txt' ),
        ),
    );
}
add_filter( 'merlin_import_files', 'nt_forester_local_import_files' );


/**
* Execute custom code after the whole import has finished.
*/
function nt_forester_merlin_after_import_setup() {

    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'primary', 'nav_menu' );

    set_theme_mod(
        'nav_menu_locations', array(
            'primary' => $primary->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 3' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'merlin_after_all_import', 'nt_forester_merlin_after_import_setup' );

add_action('init', 'do_output_buffer'); function do_output_buffer() { ob_start(); }

/*************************************************
## CUSTOM POST CLASS
*************************************************/

if (! function_exists('nt_cryptoland_post_theme_class')) {
    function nt_cryptoland_post_theme_class($classes)
    {

        if ( is_single() ) {
            $classes[] =  has_blocks() ? 'nt-single-has-block' : '';
        }

        return $classes;
    }
    add_filter('post_class', 'nt_cryptoland_post_theme_class');
}
