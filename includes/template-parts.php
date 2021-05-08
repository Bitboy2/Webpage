<?php

if ( is_admin() )
return false;

/**
* Custom template parts for this theme.
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package cryptoland
*/

/**********************************
***********************************

THEME PARTS

/**********************************
***********************************/

function cryptoland_allowed_html() {

    $allowed_tags = array(
        'a' => array(
            'class' => array(),
            'href' => array(),
            'rel'  => array(),
            'title' => array(),
            'target' => array(),
        ),
        'abbr' => array(
            'title' => array(),
        ),
        'iframe' => array(
            'src' => array(),
        ),
        'b' => array(),
        'br' => array(),
        'blockquote' => array(
            'cite' => array(),
        ),
        'cite' => array(
            'title' => array(),
        ),
        'code' => array(),
        'del' => array(
            'datetime' => array(),
            'title' => array(),
        ),
        'dd' => array(),
        'div' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'dl' => array(),
        'dt' => array(),
        'em' => array(),
        'h1' => array(),
        'h2' => array(),
        'h3' => array(),
        'h4' => array(),
        'h5' => array(),
        'h6' => array(),
        'i' => array(
            'class' => array(),
        ),
        'img' => array(
            'alt'   => array(),
            'class' => array(),
            'height' => array(),
            'src'   => array(),
            'width' => array(),
        ),
        'li' => array(
            'class' => array(),
        ),
        'ol' => array(
            'class' => array(),
        ),
        'p' => array(
            'class' => array(),
        ),
        'q' => array(
            'cite' => array(),
            'title' => array(),
        ),
        'span' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'strike' => array(),
        'strong' => array(),
        'ul' => array(
            'class' => array(),
        ),
    );

    return $allowed_tags;
}

/*************************************************
## START PRELOADER
*************************************************/

if ( ! function_exists( 'cryptoland_preloader' ) ) {
    function cryptoland_preloader() {

        if ( ot_get_option('cryptoland_pre_settings') != 'off' ) { ?>

            <?php if ( ot_get_option('cryptoland_pre_type') == 'default' OR  ot_get_option('cryptoland_pre_type') == '' ) : ?>
                <div id="preloader" class="preloader"><div class="loader05"></div></div>
            <?php else : ?>
                <div id="preloader" class="preloader"><div class="loader<?php echo esc_attr( ot_get_option('cryptoland_pre_type') ); ?>"></div></div>
                <?php
            endif;
        }
    }
}
add_action( 'cryptoland_preloader_action',  'cryptoland_preloader', 10 );

/*************************************************
## START BACKTOP
*************************************************/

if ( ! function_exists( 'cryptoland_backtop' ) ) {
    function cryptoland_backtop() {
        $el_back = ot_get_option('cryptoland_backtotop_iconclass');
        $back = ($el_back !='' ) ? $el_back : 'fa fa-angle-up';

        if ( ot_get_option('cryptoland_backtotop') !== 'off' ) { ?>
            <!-- Back Top -->
            <div class="c-backtop-1 -js-backtop">
                <i class="c-backtop-1-icon <?php echo esc_attr( $back ) ?>"></i>
            </div>
            <!-- Back Top End -->
            <?php
        }
    }
}

add_action( 'cryptoland_backtop_action',  'cryptoland_backtop', 10 );

/*************************************************
## START LOGO
*************************************************/

if ( ! function_exists( 'cryptoland_logo' ) ) {

    function cryptoland_logo( $logoclass ) {

        // get theme options logo options value
        $logotype = ( ot_get_option('cryptoland_logo_type') );
        $textlogo = ( ot_get_option('cryptoland_textlogo') );
        $staticlogo = ( ot_get_option('cryptoland_img_staticlogo') );
        $stickylogo = ( ot_get_option('cryptoland_img_stickylogo') );
        $imglogo_d = ( ot_get_option( 'cryptoland_logo_dimension', array() ) );
        $imglogo_w = !empty($imglogo_d['width']) ? $imglogo_d['width'] : 45;
        $imglogo_h = !empty($imglogo_d['height']) ? $imglogo_d['height'] : 51;

        // get page metabox options value
        $mblogo = wp_get_attachment_url( get_post_meta(get_the_ID(), 'cryptoland_page_logo', true ),'full' );
        $mbslogo = wp_get_attachment_url( get_post_meta(get_the_ID(), 'cryptoland_page_slogo', true ),'full' );
        $mbtextlogo = get_post_meta(get_the_ID(), 'cryptoland_page_tlogo', true );
        $mblogosize = get_post_meta(get_the_ID(), 'cryptoland_page_logo_size');

        // If metabox logo option values are set
        $text_logo = ( $mbtextlogo != '' ) ? $mbtextlogo : $textlogo ;
        $static_logo = ( $mblogo != '' ) ? $mblogo : $staticlogo ;
        $sticky_logo = ( $mbslogo != '' ) ? $mbslogo : $stickylogo ;
        $logo_w = ( !empty($mblogosize[0])  ) ? $mblogosize[0] : $imglogo_w ;
        $logo_h = ( !empty($mblogosize[1]) ) ? $mblogosize[1] : $imglogo_h ;
        $logo = ($static_logo != '' || $sticky_logo != '' || $text_logo != '' ) ? true : false;

        if ( $logo != false ) {
            ?>
            <a class="<?php echo esc_attr( $logoclass ); ?> nt-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                <?php if ( $logotype =='img-logo' or $logotype == 'text-img-logo' ) { ?>
                    <?php if ( $static_logo OR $sticky_logo ) { ?>
                        <div class="logo__img bg-none nt-img-logo">

                            <?php if ( $static_logo ) { ?>
                                <img class="static-logo" src="<?php echo esc_url( $static_logo ); ?>" width="<?php echo esc_attr( $logo_w ); ?>" height="<?php echo esc_attr( $logo_h ); ?>" alt="<?php esc_attr_e('Logo','cryptoland'); ?>">
                            <?php } ?>

                            <?php if ( $sticky_logo ) { ?>
                                <img class="sticky-logo" src="<?php echo esc_url( $sticky_logo ); ?>" width="<?php echo esc_attr( $logo_w ); ?>" height="<?php echo esc_attr( $logo_h ); ?>" alt="<?php esc_attr_e('Logo','cryptoland'); ?>">
                            <?php } ?>

                        </div>
                    <?php } ?>
                <?php } ?>

                <?php if (  $logotype =='text-logo' or $logotype =='text-img-logo' ) { ?>
                    <?php if ( $text_logo ) { ?>
                        <div class="logo__title nt-text-logo"><?php echo esc_html( $text_logo ); ?></div>
                    <?php } ?>
                <?php } ?>

            </a>


        <?php } else { ?>
            <a class="<?php echo esc_attr( $logoclass ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="logo__img"></div>
                <div class="logo__title"><?php echo esc_html_e( 'Cryptoland', 'cryptoland' ); ?></div>
            </a>
            <?php
        }
    }
}
add_action( 'cryptoland_logo_action',  'cryptoland_logo', 10 );

/*************************************************
## HEADER NAVIGATION
*************************************************/

if ( ! function_exists( 'cryptoland_header' ) ) {
    function cryptoland_header() {

        $hd = ot_get_option( 'cryptoland_header_display' );
        $hdtxtrans = ' '.ot_get_option( 'cryptoland_header_menu_txtrans' );
        $sh = ot_get_option( 'cryptoland_sticky_header' );
        $hld = ot_get_option( 'cryptoland_header_lang_display' );
        $hl = ot_get_option( 'cryptoland_header_lang', array() );

        $s_in = ot_get_option( 'cryptoland_header_signin_display' );
        $s_up = ot_get_option( 'cryptoland_header_signup_display' );
        $s_in_t = ot_get_option( 'cryptoland_header_signin_title' );
        $s_up_t = ot_get_option( 'cryptoland_header_signup_title' );
        $s_in_url = ot_get_option( 'cryptoland_header_signin_url' );
        $s_up_url = ot_get_option( 'cryptoland_header_signin_url' );
        $s_in_target = ot_get_option( 'cryptoland_header_signin_target' );
        $s_up_target = ot_get_option( 'cryptoland_header_signin_target' );
        $btn_tel_d = ot_get_option( 'cryptoland_header_telegram_display' );
        $tel_img = ot_get_option( 'cryptoland_header_telegram_img' );
        $tel_url = ot_get_option( 'cryptoland_header_telegram_url' );

        $p_h_d = rwmb_meta( 'cryptoland_page_header_display', true );
        $p_s_h = rwmb_meta( 'cryptoland_page_sticky_nav', true );
        $p_l_d = rwmb_meta( 'cryptoland_page_header_lang', true );
        $p_s_in_d = rwmb_meta( 'cryptoland_page_header_btnsignin', true );
        $p_s_up_d = rwmb_meta( 'cryptoland_page_header_btnsignup', true );
        $p_s_in = get_post_meta(get_the_ID(), 'cryptoland_page_header_btnsignin_title');
        $p_s_up = get_post_meta(get_the_ID(), 'cryptoland_page_header_btnsignup_title');
        $p_s_int = rwmb_meta('cryptoland_page_header_btnsigin_target');
        $p_s_upt = rwmb_meta('cryptoland_page_header_btnsignup_target');
        $p_tel_d = rwmb_meta( 'cryptoland_page_header_btntel_display', true );
        $p_tel_img = wp_get_attachment_url( get_post_meta(get_the_ID(), 'cryptoland_page_header_btntelimg', true ),'full' );
        $p_tel_url = rwmb_meta( 'cryptoland_page_header_btntelurl', true );
        $p_m_m = rwmb_meta( 'cryptoland_page_metabox_menu');
        $p_m_m_d = rwmb_meta( 'cryptoland_page_metabox_menu_display');

        if( is_page() ){
            $hd = $hd != 'off' ? $p_h_d  : $hd;
            $sh = $sh != 'off' ? $p_s_h  : $sh;
            $hld = $hld != 'off' ? $p_l_d  : $hld;
            $s_in = $s_in !='off' ? $p_s_in_d : $s_in;
            $s_up = $s_up !='off' ? $p_s_up_d : $s_up;
            $s_in_t = !empty($p_s_in[0]) && isset($p_s_in[0]) != '' ? $p_s_in[0] : $s_in_t;
            $s_in_url = !empty($p_s_in[1]) && isset($p_s_in[1]) != '' ? $p_s_in[1] : $s_in_url;
            $s_up_t = !empty($p_s_up[0]) && isset($p_s_up[0]) != '' ? $p_s_up[0] : $s_up_t;
            $s_up_url = !empty($p_s_up[1]) && isset($p_s_up[1]) != '' ? $p_s_up[1] : $s_up_url;
            $btn_tel_d = $btn_tel_d != 'off' ? $p_tel_d : $btn_tel_d;
            $tel_img = !empty($p_tel_img) && $p_tel_img !='' ? $p_tel_img : $tel_img;
            $tel_url = !empty($p_tel_url) && $p_tel_url !='' ? $p_tel_url : $tel_url;
            $s_in_target = $p_s_int;
            $s_up_target = $p_s_upt;

        }

        if ( $hd != 'off' ) { ?>

            <header class="header sticky-<?php echo esc_attr( $sh.$hdtxtrans ); ?>">

                <?php
                $logoclass = 'logo';
                do_action( 'cryptoland_logo_action', $logoclass );

                //metabox menu
                if( is_page() AND ( !empty( $p_m_m ) ) && ( $p_m_m_d != true ) ){ ?>
                    <ul class="menu">
                        <?php foreach ( $p_m_m as $m_i ) {
                            $menu_title = !empty($m_i[0]) ? $m_i[0] : esc_html__('Add title', 'cryptoland');
                            $menu_link = !empty($m_i[1]) ? $m_i[1] : '#0';
                            ?>
                            <li class="menu__item"><a href="<?php echo esc_attr( $menu_link ); ?>" title="<?php echo esc_attr( $menu_title ); ?>" class="menu__link"><?php echo esc_html( $menu_title ); ?></a></li>
                        <?php } ?>
                    </ul>
                    <?php
                    //default wp menu
                } else {
                    wp_nav_menu( array(
                        'menu'            => 'header_menu_1',
                        'theme_location'  => 'header_menu_1',
                        'depth'           => 2,
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'Cryptoland_Wp_Bootstrap_Navwalker::fallback',
                        'walker'          => new Cryptoland_Wp_Bootstrap_Navwalker()
                    ));
                }
                ?>

                <?php if ( $hld != 'off' OR $s_in != 'off' OR $s_up != 'off' OR $btn_tel_d != 'off' ) : ?>
                    <div class="header__right">
                        <?php if( $btn_tel_d != 'off' AND !empty($tel_img) ) : ?>
                            <a href="<?php echo esc_attr( $tel_url ); ?>" class="telegram-link">
                                <img src="<?php echo esc_attr( $tel_img ); ?>">
                            </a>
                        <?php endif; ?>

                        <?php if ( function_exists('pll_the_languages') ) : ?>
                            <?php cryptoland_header_lang(); ?>
                        <?php else : ?>
                            <?php if ( $hld != 'off' AND !empty($hl) ) : ?>
                                <select class="select">
                                    <?php foreach ( $hl as $item ) { ?>
                                        <?php $cryptoland_lang_item_url = isset($item['cryptoland_lang_item_url']) != '' ? $item['cryptoland_lang_item_url'] : ''; ?>
                                        <option value="<?php echo esc_attr( $cryptoland_lang_item_url ); ?>" ><?php echo esc_html( $item['cryptoland_lang_item'] ) ?></option>
                                    <?php } ?>
                                </select>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if( $s_in != 'off' AND $s_in_t != '' ) : ?>
                            <div class="sign-in-wrap"><a href="<?php echo esc_attr( $s_in_url ); ?>" target="<?php echo esc_attr( $s_in_target ); ?>" class="btn-sign-in"><?php echo esc_html( $s_in_t ); ?></a></div>
                        <?php endif; ?>
                        <?php if( $s_up != 'off' AND $s_up_t != '' ) : ?>
                            <div class="sign-up-wrap"><a href="<?php echo esc_attr( $s_up_url ); ?>" target="<?php echo esc_attr( $s_up_target ); ?>" class="btn-sign-up"><?php echo esc_html( $s_up_t ); ?></a></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="btn-menu">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </header>

            <div class="fixed-menu<?php echo esc_attr( $hdtxtrans ); ?>">
                <div class="fixed-menu__header">

                    <?php
                    $moblogo = ot_get_option('cryptoland_mob_logo');
                    $btnclose = $moblogo == 'mob-logo-off' ? ' align-right' : '';
                    $logoclass = 'logo logo--color '.$moblogo;
                    do_action( 'cryptoland_logo_action', $logoclass );
                    ?>

                    <div class="btn-close<?php echo esc_attr( $btnclose ); ?>">
                        <svg xmlns="<?php echo esc_url( 'http://www.w3.org/2000/svg' ); ?>" xmlns:xlink="<?php echo esc_url( 'http://www.w3.org/1999/xlink' ); ?>" version="1.1" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="512px" height="512px">
                            <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z" fill="#006DF0"/></svg>
                    </div>
                </div>

                <div class="fixed-menu__content">

                    <?php
                    $mob_btn = ( ot_get_option('cryptoland_header_btn_mobile_display') );
                    $mob_lang = ( ot_get_option('cryptoland_header_lang_mobile_display') );

                    //metabox menu
                    if( is_page() AND ( !empty( $p_m_m ) ) && ( $p_m_m_d != true ) ){ ?>
                        <ul class="mob-menu">
                            <?php foreach ( $p_m_m as $m_i ) {
                                $menu_title = isset($m_i[0]) != '' ? $m_i[0] : 'Add title';
                                $menu_link = isset($m_i[1]) != '' ? $m_i[1] : '#0';
                                ?>
                                <li class="mob-menu__item"><a href="<?php echo esc_url( $menu_link ); ?>" title="<?php echo esc_attr( $menu_title ); ?>" class="mob-menu__link"><?php echo esc_html( $menu_title ); ?></a></li>
                            <?php } ?>
                        </ul>
                        <?php
                        //default wp menu
                    } else {
                        wp_nav_menu( array(
                            'menu'           => 'header_menu_1',
                            'theme_location' => 'header_menu_1',
                            'depth'          => 2,
                            'menu_class'     => 'mob-menu',
                            'menu_id'        => '',
                            'echo'           => true,
                            'fallback_cb'    => 'Cryptoland_Mob_Wp_Bootstrap_Navwalker::fallback',
                            'walker'         => new Cryptoland_Mob_Wp_Bootstrap_Navwalker()
                        ));
                    }
                    ?>

                    <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
                        <?php cryptoland_header_lang(); ?>
                    <?php else : ?>
                        <?php if ( $hld != 'off' AND $hl != '' ) : ?>
                            <select class="select mob-<?php echo esc_attr( $mob_lang ) ?>">
                                <?php foreach ( $hl as $item ) { ?>
                                    <?php $cryptoland_lang_item_url = isset($item['cryptoland_lang_item_url']) != '' ? $item['cryptoland_lang_item_url'] : ''; ?>
                                    <option value="<?php echo esc_attr( $cryptoland_lang_item_url ); ?>" ><?php echo esc_html( $item['cryptoland_lang_item'] ) ?></option>
                                <?php } ?>
                            </select>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if ( $s_in != 'off' OR $s_up != 'off' ) : ?>
                        <div class="btn-wrap mob-<?php echo esc_attr( $mob_btn ) ?>">
                            <?php if ( $s_in != 'off' AND $s_in_t != '' ) : ?>
                                <a href="<?php echo esc_attr( $s_in_url ); ?>" class="btn-sign-in"><?php echo esc_html( $s_in_t ); ?></a>
                            <?php endif; ?>
                            <?php if ( $s_up != 'off' AND $s_up_t != '' ) : ?>
                                <a href="<?php echo esc_attr( $s_up_url ); ?>" class="btn-sign-up"><?php echo esc_html( $s_up_t ); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        }
    }
}

add_action( 'cryptoland_header_action',  'cryptoland_header', 10 );

/*************************************************
##  HEADER LANGUAGE
*************************************************/

if (! function_exists('cryptoland_header_lang')) {
    function cryptoland_header_lang()
    {
        $mob_lang = ot_get_option('cryptoland_header_lang_mobile_display');
        ?>
        <ul class="lang-select mob-<?php echo esc_attr( $mob_lang ) ?>">
            <li class="lang-item active"><?php echo pll_current_language( 'flag' ) ?> <span class="uppercase"><?php echo pll_current_language('slug') ?></span>
                <ul class="sub-list">
                    <?php
                    pll_the_languages(
                        array(
                            'show_flags'=>1,
                            'show_names'=>1,
                            'dropdown'=>0,
                            'raw'=>0,
                            'hide_current'=>1,
                            'display_names_as'=>'name'
                        )
                    );
                    ?>
                </ul>
            </li>
        </ul>
        <?php
    }
}



/*************************************************
## START WIDGETIZE FOOTER
*************************************************/

if ( ! function_exists( 'cryptoland_widgetize' ) ) {
    function cryptoland_widgetize() {

        $fwv = ot_get_option('cryptoland_widgetize_footer');
        if(is_page()){
            $fpv = rwmb_meta('cryptoland_page_widgetize_footer', true );
            $fwv = isset( $fpv ) != '' || $fpv != '' ? $fpv : $fwv;
        }

        if ( $fwv == 'on' ) {
            ?>
            <footer class="footer footer-widget-area">
                <div class="container">
                    <div class="row">

                        <?php
                        if ( is_active_sidebar( 'cryptoland_footer_widget_1' )){ dynamic_sidebar( 'cryptoland_footer_widget_1' ); }
                        if ( is_active_sidebar( 'cryptoland_footer_widget_2' )){ dynamic_sidebar( 'cryptoland_footer_widget_2' ); }
                        if ( is_active_sidebar( 'cryptoland_footer_widget_3' )){ dynamic_sidebar( 'cryptoland_footer_widget_3' ); }
                        if ( is_active_sidebar( 'cryptoland_footer_widget_4' )){ dynamic_sidebar( 'cryptoland_footer_widget_4' ); }
                        ?>

                    </div>
                </div>
            </footer>
            <?php
        } // cryptoland_footer_visibility
    } //cryptoland_widgetize_ function
} //Function exists
add_action( 'cryptoland_widgetize_action',  'cryptoland_widgetize', 10 );



/*************************************************
## START FOOTER COPYRIGHT
*************************************************/

if ( ! function_exists( 'cryptoland_copyright' ) ) {
    function cryptoland_copyright() {

        $fcv = ot_get_option('cryptoland_copyright_display');

        if(is_page()){
            $fpcv = rwmb_meta('cryptoland_page_copyright_display', true );
            $fcv = isset($fpcv) != '' || $fpcv != '' ? $fpcv : $fcv;
        }

        $copyright = ot_get_option('cryptoland_copyright');

        if ( $fcv != 'off' ) {
            ?>
            <div class="copyright pt-45">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php if ( $copyright != '' ) {
                                echo wp_kses( $copyright, cryptoland_allowed_html() );
                            } else {
                                echo esc_html__( '2018, Ninetheme. All Rights Reserved.', 'cryptoland' );
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
add_action( 'cryptoland_copyright_action',  'cryptoland_copyright', 10 );



/*************************************************
## START POST_FORMAT FUNCTION
*************************************************/

if ( ! function_exists( 'cryptoland_post_format' ) ) {
    function cryptoland_post_format() {

        $blog_style = ot_get_option( 'blog_style' );
        $blog_s    = ( $blog_style !='' ) ? $blog_style : '3';
        $sticky    = ( is_sticky() ) ? ' -has-sticky ' : '';

        if ( get_post_format() == 'aside' ) {
            $format_class = 'aside';
        } elseif (  get_post_format() == 'audio' ) {
            $format_class = 'audio';
        } elseif (  get_post_format() == 'chat' ) {
            $format_class = 'chat';
        } elseif (  get_post_format() == 'gallery' ) {
            $format_class = 'gallery';
        } elseif (  get_post_format() == 'link' ) {
            $format_class = 'link';
        } elseif (  get_post_format() == 'quote' ) {
            $format_class = 'quote';
        } elseif (  get_post_format() == 'status' ) {
            $format_class = 'status';
        } elseif (  get_post_format() == 'video' ) {
            $format_class = 'video';
        } else {
            $format_class = 'standart';
        }

        ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class('c-blog-' . esc_attr($blog_s) . '-item '.esc_attr( $sticky ) . '-format-'.esc_attr($format_class)); ?>>
            <div class="c-blog-<?php echo esc_attr($blog_s); ?>-item-inner">

                <?php if ( is_sticky() ) : ?>
                    <div class="c-blog-<?php echo esc_attr($blog_s); ?>-sticky">
                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                    </div>
                <?php endif; ?>

                <?php if ( false == get_post_format() ) { ?>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media">
                            <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media-photo">
                                <a class="c-blog-<?php echo esc_attr($blog_s); ?>-media-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('full',array('class' => 'c-blog-1-media-image')); ?></a>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php } elseif ( get_post_format() == 'audio' ) { ?>

                    <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media">
                        <?php
                        $mp3 = rwmb_meta( 'cryptoland_audio_mp3' );
                        $oga = rwmb_meta( 'cryptoland_audio_ogg' );
                        $sc_iframe	= rwmb_meta( 'cryptoland_audio_sc' );
                        $sc_color = rwmb_meta( 'cryptoland_audio_sc_color' );
                        $wp_audio = '[audio mp3="'.$mp3.'"  ogg="'.$oga.'"]';
                        ?>
                        <?php if($sc_iframe!='') : ?>
                            <div class="post-thumb" color="<?php echo esc_attr($sc_color) ?>"><?php echo wp_kses( $sc_iframe, cryptoland_allowed_html() ); ?></div>
                        <?php else : ?>
                            <div class="post-thumb">
                                <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
                                <?php echo do_shortcode ( $wp_audio ); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php } elseif ( get_post_format() == 'video' ) { ?>

                    <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media">
                        <?php
                        $embed = rwmb_meta( 'cryptoland_video_embed' );
                        if( $embed!='' ) :
                            ?>
                            <div class="post-thumb blog-bg">
                                <div class="media-element video-responsive"><?php echo wp_kses( $embed, cryptoland_allowed_html() ); ?></div>
                            </div>

                        <?php else :

                            $m4v = rwmb_meta( 'cryptoland_video_m4v' );
                            $ogv = rwmb_meta( 'cryptoland_video_ogv' );
                            $webm = rwmb_meta( 'cryptoland_video_webm' );
                            $image_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src($image_id, true);
                            $wp_video = '[video poster="'.$image_url[0].'" mp4="'.$m4v.'"  webm="'.$webm.'"]';
                            ?>

                            <div class="post-thumb"><?php echo do_shortcode ($wp_video); ?></div>
                        <?php endif; ?>
                    </div>

                <?php } elseif ( get_post_format() == 'quote' ) {

                    $quote_text = rwmb_meta( 'cryptoland_quote_text' );
                    $quote_author = rwmb_meta( 'cryptoland_quote_author' );
                    $image_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src($image_id, true);
                    $quote_color = rwmb_meta( 'cryptoland_quote_bg' );
                    $q_opacity = rwmb_meta( 'cryptoland_quote_bg_opacity' );
                    $q_opacity = $q_opacity !='' ? $q_opacity / 100 : '' ;

                    if ( $quote_text !='') { ?>
                        <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media">

                            <div class="post-thumb">
                                <div class="content-quote-format-wrapper">
                                    <?php if(has_post_thumbnail()) : ?>
                                        <div class="entry-media">
                                        <?php else : ?>
                                            <div class="entry-media">
                                            <?php endif; ?>
                                            <div class="content-quote-format-overlay"></div>
                                            <div class="content-quote-format-textwrap">
                                                <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php echo esc_html( $quote_text ); ?></a></h3>
                                                <p><a href="#0" target="_blank"><?php echo esc_html( $quote_author ); ?></a></p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    <?php } elseif ( get_post_format() == 'gallery' )  { ?>

                        <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media">
                            <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media-gallery">
                                <?php
                                wp_enqueue_style( 'cryptoland-custom-flexslider');
                                wp_enqueue_script( 'cryptoland-custom-flexslider');
                                wp_enqueue_script( 'fitvids');
                                wp_enqueue_script( 'cryptoland-blog-settings');
                                $format_gallery_images = rwmb_meta( 'cryptoland_gallery_image','type=image_advanced' );
                                if(  !empty($format_gallery_images) ) {
                                    ?>
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <?php
                                            foreach ( $format_gallery_images as $image ) {
                                                echo "<li><img src='{$image['full_url']}' alt='{$image['alt']}' /></li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    <?php } // end if get_post_format

                    do_action('cryptoland_formats_content_action');

                    ?>

                </div>
            </div><!--End Post- -->
            <?php
        }
    }

/*************************************************
## START FORMATS_CONTENT
*************************************************/

if ( ! function_exists( 'cryptoland_formats_content' ) ) {
    function cryptoland_formats_content() {

        wp_enqueue_style( 'cryptoland-custom-flexslider');
        wp_enqueue_script( 'cryptoland-custom-flexslider');
        wp_enqueue_script( 'fitvids');
        wp_enqueue_script( 'cryptoland-blog-settings');
        $type = ot_get_option( 'blog_style' );
        $blog_s = ( $type !='' ) ? $type : '3';

        $author_id = get_the_author_meta( 'ID' );
        $author_link = get_author_posts_url( $author_id );
        ?>

        <div class="c-blog-<?php echo esc_attr($blog_s); ?>-info">
            <h5 class="c-blog-<?php echo esc_attr($blog_s); ?>-info-category"><?php the_category(' - '); ?></h5>

            <?php
            if ( is_single() ) :
                the_title( '<h3 class="c-blog-'. esc_attr($blog_s).'-info-title">', '</h3>' );
                else :
                    the_title( sprintf( '<h3 class="c-blog-'. esc_attr($blog_s).'-info-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                endif;
                ?>

                <ul class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta">

                    <li class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta-item the-date"><i class="fa fa-calendar"></i> <a class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta-link" href="#"><?php echo get_the_date(); ?></a> </li>
                    <li class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta-item"><i class="fa fa-comment"></i> <a class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta-link" href="<?php esc_url( comments_link() ); ?>"><?php comments_number( '0 Comments', '1 comment', '% Comments' ); ?></a></li>
                    <li class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta-item"><i class="fa fa-user"></i> <a class="c-blog-<?php echo esc_attr($blog_s); ?>-info-meta-link" href="<?php echo esc_url( $author_link ); ?>"><?php the_author(); ?></a></li>

                </ul>
                <div class="c-blog-<?php echo esc_attr($blog_s); ?>-info-summary">
                    <?php

                    if ( is_single() ) : 	the_content(); 	else : 	the_excerpt();  endif ;

                    cryptoland_wp_link_pages();
                    ?>
                </div>

                <?php if ( ! is_single() ) : ?>
                    <div class="c-blog-<?php echo esc_attr($blog_s); ?>-info-link">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="c-link-1"><?php esc_html_e('Read more', 'cryptoland'); ?> <span class="c-link-1-icon -right ion-android-arrow-forward"></span></a>
                    </div>
                <?php endif; // is_single() ?>

            </div>

            <?php
        }
    }

    add_action( 'cryptoland_formats_content_action',  'cryptoland_formats_content', 10 );

/*************************************************
## START CUSTOM FORMATS_CONTENT
*************************************************/

if ( ! function_exists( 'cryptoland_single_post_formats_content' ) ) {
    function cryptoland_single_post_formats_content() {

        $blog_style = ot_get_option( 'blog_style' );
        $blog_s    = ( $blog_style !='' ) ? $blog_style : '3';

        if ( false == get_post_format() ) { ?>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media">
                    <div class="c-blog-<?php echo esc_attr($blog_s); ?>-media-photo">
                        <a class="c-blog-<?php echo esc_attr($blog_s); ?>-media-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('full',array('class' => 'c-blog-1-media-image')); ?></a>
                    </div>
                </div>
            <?php endif;

        }	elseif ( get_post_format() == 'video' ) {

            $embed = rwmb_meta( 'cryptoland_video_embed' );
            if( $embed!='' ) :
                ?>
                <div class="post-thumb blog-bg">
                    <div class="media-element video-responsive"><?php echo wp_kses( $embed, cryptoland_allowed_html() ); ?></div>
                </div>

            <?php else :

                $m4v =	rwmb_meta( 'cryptoland_video_m4v' );
                $ogv =	rwmb_meta( 'cryptoland_video_ogv' );
                $webm =	rwmb_meta( 'cryptoland_video_webm' );
                $image_id =	get_post_thumbnail_id();
                $image_url	=	wp_get_attachment_image_src($image_id, true);
                $wp_video =	'[video poster="'.$image_url[0].'" mp4="'.$m4v.'"  webm="'.$webm.'"]';
                ?>

                <div class="post-thumb"><?php echo do_shortcode ($wp_video); ?></div>
            <?php endif;
        } elseif( get_post_format() == 'quote' ) { ?>
            <?php
            $quote_text =	rwmb_meta( 'cryptoland_quote_text' );
            $quote_author =	rwmb_meta( 'cryptoland_quote_author' );
            $image_id =	get_post_thumbnail_id();
            $image_url =	wp_get_attachment_image_src($image_id, true);
            $quote_color =	rwmb_meta( 'cryptoland_quote_bg' );
            $q_opacity =	rwmb_meta( 'cryptoland_quote_bg_opacity' );
            $q_opacity =	$q_opacity !='' ? $q_opacity / 100 : '' ;
            if ( $quote_text !='') {
                ?>

                <div class="post-thumb">
                    <div class="content-quote-format-wrapper">
                        <?php if( has_post_thumbnail() ) : ?>
                            <div class="entry-media">
                            <?php else : ?>
                                <div class="entry-media">
                                <?php endif; ?>
                                <div class="content-quote-format-overlay"></div>
                                <div class="content-quote-format-textwrap">
                                    <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php echo esc_html( $quote_text ); ?></a></h3>
                                    <p><a href="#0" target="_blank"><?php echo esc_html( $quote_author ); ?></a></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        <?php 	} elseif( get_post_format() == 'gallery' ) { ?>
            <?php
            wp_enqueue_style( 'cryptoland-custom-flexslider');
            wp_enqueue_script( 'cryptoland-custom-flexslider');
            wp_enqueue_script( 'fitvids');
            wp_enqueue_script( 'cryptoland-blog-settings');
            $cryptoland_images = rwmb_meta( 'cryptoland_gallery_image','type=image_advanced' );
            if( !empty($cryptoland_images)  ) :
                ?>
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                        foreach ( $cryptoland_images as $image ) {
                            echo "<li><img src='{$image['full_url']}' alt='{$image['alt']}' /></li>";
                        }
                        ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php } elseif( get_post_format() == 'audio' ) {

            $mp3 = rwmb_meta( 'cryptoland_audio_mp3' );
            $oga = rwmb_meta( 'cryptoland_audio_ogg' );
            $sc_iframe = rwmb_meta( 'cryptoland_audio_sc' );
            $sc_color	= rwmb_meta( 'cryptoland_audio_sc_color' );
            $wp_audio	= '[audio mp3="'.$mp3.'"  ogg="'.$oga.'"]';
            ?>

            <?php if($sc_iframe!='') : ?>
                <div class="post-thumb blog-bg" color="<?php echo esc_attr($sc_color) ?>"><?php echo wp_kses( $sc_iframe, cryptoland_allowed_html() ); ?></div>
            <?php else : ?>
                <div class="post-thumb blog-bg">
                    <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
                    <?php echo do_shortcode ( $wp_audio ); ?>
                </div>
            <?php endif;
        }
    }
}


/*************************************************
## START PORT. NAVIGATION
*************************************************/

if ( ! function_exists( 'cryptoland_port_navigation' ) ) {

    /**
    * Display navigation to next/previous post when applicable.
    *
    * @return void
    */

    function cryptoland_port_navigation() {

        if ( get_previous_post() =='' ){
            $class = 'pag-next';
        } elseif ( get_next_post() =='' ) {
            $class = 'pag-previous';
        } else {
            $class = 'pag-previous-next';
        }

        ?>

        <div class="c-section m_top_40">
            <div class="c-container -size-full">
                <!-- Project Pager -->
                <nav class="c-pager-1 -style-centered">
                    <ul class="c-pager-1-inner <?php echo esc_attr( $class );?>">

                        <?php	if ( get_previous_post() ) { ?>
                            <li class="c-pager-1-item -prev">
                                <h5 class="c-pager-1-title"><?php echo esc_html_e( 'Previous post','cryptoland' );?></h5>
                                <?php previous_post_link( '%link', _x( '%title ', 'Previous post link', 'cryptoland' ) ); ?>
                            </li>
                        <?php } ?>

                        <?php	if ( get_next_post() ) { ?>
                            <li class="c-pager-1-item -next">
                                <h5 class="c-pager-1-title"><?php echo esc_html_e( 'Next post','cryptoland' );?></h5>
                                <?php next_post_link( '%link', _x( '%title', 'Next post link', 'cryptoland' ) ); ?>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
                <!-- Project Pager End -->
            </div>
        </div>
        <?php
    }
}

/*************************************************
## NAVIGATION PAGINATION
*************************************************/

if ( ! function_exists( 'cryptoland_paging_nav' ) ) {

    /**
    * Display navigation to next/previous set of posts when applicable.
    *
    * @return void
    */

    function cryptoland_paging_nav() {

        // Don't print empty markup if there's only one page.
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return;
        }
        ?>
        <nav class="navigation paging-navigation">
            <ul class="pager">

                <?php if ( get_next_posts_link() ) : ?>
                    <li class="previous"><?php next_posts_link( esc_html__( ' Older posts', 'cryptoland' ) ); ?></li>
                <?php endif; ?>

                <?php if ( get_previous_posts_link() ) : ?>
                    <li class="next"><span class="icon-facebook"></span><?php previous_posts_link( esc_html__( 'Newer posts ', 'cryptoland' ) ); ?></li>
                <?php endif; ?>

            </ul><!-- End Nav-links -->
        </nav><!-- End Igation -->
        <?php
    }
}

/*************************************************
## POST NAVIGATION
*************************************************/

if ( ! function_exists( 'cryptoland_post_nav' ) ) {

    /**
    * Display navigation to next/previous post when applicable.
    *
    * @return void
    */

    function cryptoland_post_nav() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous ) {
            return;
        }
        ?>
        <!-- Navigation -->
        <ul class="pager">
            <li class="previous"><?php previous_post_link( '%link', _x( '<i class="fa fa-angle-left"></i> %title ', 'Previous post link', 'cryptoland' ) ); ?></li>
            <li class="next"><?php next_post_link(     '%link', _x( '%title <i class="fa fa-angle-right"></i> ', 'Next post link',     'cryptoland' ) ); ?><li>
        </ul>
        <?php
    }
}


/*************************************************
## POST PAGINATION - Display post navigation to next/previous post when applicable.
*************************************************/

function cryptoland_post_pagination() {

    $type = ot_get_option( 'cryptoland_pag_type' );
    $size = ot_get_option( 'cryptoland_pag_size' );
    $group = ot_get_option( 'cryptoland_pag_group' );
    $corner = ot_get_option( 'cryptoland_pag_corner' );
    $align = ot_get_option( 'cryptoland_pag_align' );
    $groupo = ( $group == 'yes' ) ? ' -group' : '';
    $typeo = ( $type == '' ) ? 'default' : ''.$type.'';
    $sizeo = ( $size == '' ) ? 'large' : ''.$size.'';
    $aligno = ( $align == '' ) ? 'left' : ''.$align.'';
    $cornero	= ( $corner == '' ) ? 'square' : ''.$corner.'';
    $prev = get_previous_posts_link('<i class="c-pagination-1-icon fa fa-angle-left" aria-hidden="true"></i>');
    $next = get_next_posts_link('<i class="c-pagination-1-icon fa fa-angle-right" aria-hidden="true"></i>');

    if( is_singular() )
    return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
    return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
    $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo "<div class='c-pagination-1 -style-".$typeo." -size-".$sizeo." -align-".$aligno." -corner-".$cornero." ".$groupo." '><ul class='c-pagination-1-inner'>" . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
    echo '<li class="c-pagination-1-item">' . $prev . '</li>';

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' active c-pagination-1-item' : '';

        printf( '<li class=" %s c-pagination-1-item" ><a class="c-pagination-1-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
        echo '<li class="c-pagination-1-item">…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' active c-pagination-1-item' : '';
        printf( '<li class="%s c-pagination-1-item" ><a class="c-pagination-1-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
        echo '<li class="c-pagination-1-item">…</li>' . "\n";

        $class = $paged == $max ? ' active c-pagination-1-item' : '';
        printf( '<li%s class="c-pagination-1-item" ><a class="c-pagination-1-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
    echo '<li class="c-pagination-1-item">' . $next . '</li>';

    echo '</ul></div>' . "\n";

}

/*************************************************
## HERO FUNCTION
*************************************************/

if(! function_exists('cryptoland_hero_section')){
    function cryptoland_hero_section(){

        if ( is_404() ) {  // error page
            $name = 'error';
            $d_slogan = esc_html__( 'OOPS! THAT PAGE CAN NOT BE FOUND', 'cryptoland' );
            $d_heading = esc_html__( '404 - Not Found', 'cryptoland' );
        } elseif ( is_archive() ) {  // blog and cpt archive page
            $name = 'archive';
            $d_slogan = esc_html__( 'Archive', 'cryptoland' );
            $d_heading = get_the_archive_title();
        } elseif ( is_search() ) {  // search page
            $name = 'search';
            $d_slogan = esc_html__( 'Search Completed', 'cryptoland' );
            $d_heading	= esc_html__( 'Search Results for : ', 'cryptoland' ) . '"' . get_search_query() . '"' ;
        } elseif ( is_home() OR is_front_page() ) {  	// blog post loop page index.php or your choise on settings
            $name = 'blog';
            $d_slogan = esc_html__( 'CRYPTOLAND BLOG', 'cryptoland' );
            $d_heading = 'BLOG';
        } elseif ( is_single() ) {  	// blog post single/singular page
            $name = 'single';
            $d_slogan = get_the_title();
            $d_heading = get_the_title();
        } elseif ( is_page() ) { 	// default or custom page
            $name = 'page';
            $d_slogan = esc_html__( 'Page', 'cryptoland' );
            $d_heading = get_the_title();
        }

        if( ! is_page() ){
            $hero_display = ot_get_option( 'cryptoland_'.$name.'_hero_display' );
            //parallax background
            $hero_parallax = ot_get_option( 'cryptoland_'.$name.'_hero_parallax');
            $p_bg = ot_get_option( 'cryptoland_'.$name.'_hero_bg', array() );
            $p_img_src = isset($p_bg['background-image']) ? $p_bg['background-image'] : '';
            $p_size = isset($p_bg['background-size']) ? $p_bg['background-size'] : 'cover';
            $p_position = isset($p_bg['background-position']) ? $p_bg['background-position'] : 'center';
            $p_repeat = isset($p_bg['background-repeat']) ? $p_bg['background-repeat'] : 'no-repeat';
            $p_attachment = isset($p_bg['background-attachment']) ? $p_bg['background-attachment'] : 'fixed';
            $p_type = ot_get_option( 'cryptoland_'.$name.'_hero_parallax_type');
            $p_speed = ot_get_option( 'cryptoland_'.$name.'_hero_parallax_speed');
            $p_mobile = ot_get_option( 'cryptoland_'.$name.'_hero_parallax_mobile');
            $p_video = ot_get_option( 'cryptoland_'.$name.'_hero_parallax_video');
            //hero text
            $hero_slogan_display = ot_get_option( 'cryptoland_'.$name.'_slogan_display' );
            $hero_slogan = ot_get_option( 'cryptoland_'.$name.'_slogan' );
            $hero_heading_display = ot_get_option( 'cryptoland_'.$name.'_heading_display' );
            $hero_heading = ot_get_option( 'cryptoland_'.$name.'_heading' );
            $hero_desc_display = ot_get_option( 'cryptoland_'.$name.'_desc_display' );
            $hero_desc = ot_get_option( 'cryptoland_'.$name.'_desc' );
            //hero breadcrumb
            $hero_bread_display	 = ot_get_option( 'cryptoland_'.$name.'_bread' );
            //hero overlay color
            $hero_overlay = ot_get_option( 'cryptoland_'.$name.'_hero_overlay' );
            //hero button
            $herobtn_display = ot_get_option( 'cryptoland_'.$name.'_hero_btn_display' );
            $herobtn = ot_get_option( 'cryptoland_'.$name.'_hero_btn' );
            $herobtn_url = ot_get_option( 'cryptoland_'.$name.'_hero_btn_url' );
            $herobtn_target = ot_get_option( 'cryptoland_'.$name.'_hero_btn_target' );
            $herobtn_title = ( $herobtn != '' ) ? $herobtn : esc_html__( 'Back To Homepage', 'cryptoland' );
            $hero_btn_url = ( $herobtn_url != '' ) ? esc_url($herobtn_url) : home_url( '/' );
        }
        if( is_page() ){
            $hero_display = rwmb_meta( 'cryptoland_page_hero_display' );
            //parallax background
            $hero_parallax = rwmb_meta( 'cryptoland_page_hero_parallax' );
            $p_bg = rwmb_meta( 'cryptoland_page_hero_bg');
            $p_img_src = isset($p_bg['image']) ? $p_bg['image'] : '';
            $p_size = isset($p_bg['size']) ? $p_bg['size'] : 'cover';
            $p_position = isset($p_bg['position']) ? $p_bg['position'] : 'center';
            $p_repeat = isset($p_bg['repeat']) ? $p_bg['repeat'] : 'no-repeat';
            $p_attachment = isset($p_bg['attachment']) ? $p_bg['attachment'] : 'fixed';
            $p_type = rwmb_meta( 'cryptoland_page_hero_parallax_type' );
            $p_speed = rwmb_meta( 'cryptoland_page_hero_parallax_speed' );
            $p_mobile = rwmb_meta( 'cryptoland_page_hero_parallax_mobile' );
            $p_video = rwmb_meta( 'cryptoland_page_hero_parallax_video' );
            //hero text
            $hero_slogan_display = rwmb_meta( 'cryptoland_page_slogan_display' );
            $hero_slogan = rwmb_meta( 'cryptoland_page_slogan' );
            $hero_heading_display = rwmb_meta( 'cryptoland_page_heading_display' );
            $hero_heading = rwmb_meta( 'cryptoland_page_heading' );
            $hero_desc_display = rwmb_meta( 'cryptoland_page_desc_display' );
            $hero_desc = rwmb_meta( 'cryptoland_page_desc' );
            //hero breadcrumb
            $hero_bread_display = rwmb_meta( 'cryptoland_page_bread_display' );
            //hero overlay color
            $hero_overlay = rwmb_meta( 'cryptoland_page_hero_overlay' );
            //hero button
            $herobtn_display = rwmb_meta( 'cryptoland_page_herobtn_display' );
            $herobtn = rwmb_meta( 'cryptoland_page_herobtn' );
            $herobtn_url = rwmb_meta( 'cryptoland_page_herobtn_url' );
            $herobtn_title = ( $herobtn != '' ) ? $herobtn : esc_html__( 'Back To Homepage', 'cryptoland' );
            $hero_btn_url = ( $herobtn_url != '' ) ? esc_url($herobtn_url) : home_url( '/' );
        }

        $hero_d_setting = is_page() ? true : "off" ;

        $parallax_attr = array();
        $parallax_attr[] = 'data-jarallax';
        $parallax_attr[] = $p_img_src != '' ? 'data-img-src="' . esc_url( $p_img_src ) . '"' : '';
        $parallax_attr[] = $p_size != '' ? 'data-img-size="'.esc_attr( $p_size ).'"' : 'data-img-size="cover"';
        $parallax_attr[] = $p_position != '' ? 'data-img-position="'.esc_attr( $p_position).'"' : 'data-img-position="center"';
        $parallax_attr[] = $p_repeat != '' ? 'data-img-repeat="'.esc_attr( $p_repeat).'"' : 'data-img-repeat="no-repeat"';
        $parallax_attr[] = $p_attachment != '' ? 'data-img-attachment="'.esc_attr( $p_attachment).'"' : 'data-img-attachment="fixed"';
        $parallax_attr[] = $p_type != '' ? 'data-type="'.esc_attr($p_type).'"' : 'data-type="scroll"';
        $parallax_attr[] = $p_speed != '' ? 'data-speed="'.esc_attr($p_speed).'"' : 'data-speed="0.2"';
        $parallax_attr[] = $p_mobile != 'off' ? 'data-mobile-parallax="true"' : 'data-mobile-parallax="false"';
        $parallax_attr[] = $p_video != '' ? 'data-jarallax-video="'.esc_attr( $p_video ).'"' : '';
        $parallax_mob_class = $p_mobile == 'off' ? ' jarallax-cryptoland mobile-parallax-off' : '';

        $parallax = $hero_parallax == 'on' && isset($p_img_src) ? implode( ' ', array_filter( array_unique( $parallax_attr ) ) ) : '' ;


        if( $hero_display != $hero_d_setting ) {

            ?>
            <!-- Start Hero Section -->
            <div id="hero" class="first-screen page-id-<?php echo get_the_ID(); ?> hero-fullwidth nt-inner-pages-hero<?php echo esc_attr( $parallax_mob_class ); ?>" <?php echo esc_attr( $parallax ); ?> >

                <!-- Overlay -->
                <?php if( $hero_overlay != '' ) { ?><div class="template-overlay"></div><?php }?>

                <div class="hero-content text-center">
                    <div class="grid container">
                        <div class="row row-xs-middle">
                            <div class="hero-innner-last-child">

                                <?php

                                //Slogan
                                if( $hero_slogan_display != $hero_d_setting ) {
                                    if( $hero_slogan != '' ) { 	?>
                                        <h6 class="u-text-sup"><?php echo wp_kses( $hero_slogan, cryptoland_allowed_html() ); ?></h6>
                                        <?php
                                    }
                                }

                                //Title
                                if(  $hero_heading_display != $hero_d_setting ) {
                                    if( $hero_heading  != '' ) {  ?>
                                        <h1 class="u-text-hero"><?php echo wp_kses( $hero_heading, cryptoland_allowed_html() ); ?></h1>
                                    <?php } else { ?>
                                        <h1 class="u-text-hero"><?php echo wp_kses( $d_heading, cryptoland_allowed_html() ); ?></h1>
                                        <?php
                                    }
                                }

                                // Description
                                if ( $hero_desc_display != $hero_d_setting ) {
                                    if ( $hero_desc != '' ) { ?>
                                        <p class="u-text-lead"><?php echo wp_kses( $hero_desc, cryptoland_allowed_html() ); ?></p>
                                        <?php
                                    }
                                }
                                // Button
                                if ( $herobtn_display != $hero_d_setting  ) {
                                    if ( ! is_home() OR ! is_front_page() ) { ?>
                                        <a  href="<?php echo esc_url( $hero_btn_url  ); ?>" target="<?php echo esc_attr($herobtn_target); ?>" class="btn hero-btn-g btn--medium"><i class="ion-chevron-left pr5"></i><?php echo esc_html( $herobtn_title ); ?></a>
                                    <?php } ?>
                                <?php }
                                //Breadcrubms
                                if( $hero_bread_display != $hero_d_setting AND  function_exists( 'bcn_display') ) { ?>  <p class="breadcrumb"><?php bcn_display(); ?></p>  <?php }

                                if ( is_single() ) { ?>
                                    <ul class="c-blog-2-info-meta single-hero">
                                        <li class="c-blog-2-info-meta-item"><?php the_time('F j, Y'); ?></li>
                                    </ul>
                                <?php } ?>

                            </div><!-- End hero-innner-last-child -->
                        </div><!-- End row -->
                    </div><!-- End container -->
                </div><!-- End hero-content -->
            </div>	<!-- End Hero Section -->
            <?php
        } // hide hero area
    }
}

/*************************************************
## THEME SIDEBARS
*************************************************/

if ( ! function_exists( 'cryptoland_inner_page_sidebars' ) ) {
    function cryptoland_inner_page_sidebars() {
        $sticky_attr = array();
        $sidebar_sticky = ot_get_option('cryptoland_sidebar_sticky');
        $sticky_class = $sidebar_sticky == 'on' ? ' sidebar-sticky' : '';
        $sticky_animate = esc_attr(ot_get_option('cryptoland_sidebar_sticky_animate'));
        $sticky_animtime = esc_attr(ot_get_option('cryptoland_sidebar_sticky_animate_time'));
        $sticky_offset = esc_attr(ot_get_option('cryptoland_sidebar_sticky_offset'));
        $sticky_attr[] = $sticky_animate == 'on' ? 'data-stcky-animate="true"' : 'data-stcky-animate="false"';
        $sticky_attr[] = $sticky_animtime != '' ? 'data-stcky-animate-time="'.$sticky_animtime.'"' : 'data-stcky-animate-time="1000"';
        $sticky_attr[] = $sticky_offset != '' ? 'data-stcky-offset="'.$sticky_offset.'"' : 'data-stcky-offset="100"';
        $sidebar_attr = $sidebar_sticky == 'on' ? implode( ' ', array_filter( array_unique( $sticky_attr ) ) ) : false;
        ?>

        <div id="widget-area" class="widget-area col-lg-4 col-xs-12 col-md-4 col-sm-12">
            <div class="c-sidebar-1<?php echo esc_attr( $sticky_class ); ?>" <?php echo esc_attr( $sidebar_attr ); ?>>

                <?php
                if ( ot_get_option('cryptoland_sidebar_type') == 'custom' ){

                    if (  is_active_sidebar( 'cryptoland_error_sidebar' ) AND is_404()  ){
                        dynamic_sidebar( 'cryptoland_error_sidebar' );
                    } elseif (  is_active_sidebar( 'cryptoland_archive_sidebar' ) AND is_archive() ) {
                        dynamic_sidebar( 'cryptoland_archive_sidebar' );
                    } elseif (  is_active_sidebar( 'cryptoland_blog_sidebar' ) AND is_home() OR is_front_page() ) {
                        dynamic_sidebar( 'cryptoland_blog_sidebar' );
                    } elseif ( is_page() ) {
                        $sidebar_id = rwmb_meta('cryptoland_page_sidebar_type' );
                        if ( is_active_sidebar( $sidebar_id ) ) {
                            dynamic_sidebar( $sidebar_id );
                        }else{
                            if( is_active_sidebar( 'cryptoland_page_sidebar' )){
                                dynamic_sidebar( 'cryptoland_page_sidebar' );
                            }
                        }
                    } elseif (  is_active_sidebar( 'cryptoland_search_sidebar' ) AND is_search() ) {
                        dynamic_sidebar( 'cryptoland_search_sidebar' );
                    } elseif (  is_active_sidebar( 'cryptoland_single_sidebar' ) AND is_single() ) {
                        dynamic_sidebar( 'cryptoland_single_sidebar' );
                    }

                } else {

                    get_sidebar();

                } // endif sidebar_type
                ?>

            </div>
        </div>
        <?php
    }
}

/*************************************************
##  LINK PAGES CURRENT CLASS
*************************************************/


function cryptoland_current_link_pages( $link ) {
    if ( ctype_digit( $link ) ) {
        return '<span class="current">' . $link . '</span>';
    }
    return $link;
}
add_filter( 'wp_link_pages_link', 'cryptoland_current_link_pages' );


/*************************************************
##  LINK PAGES
*************************************************/

if ( ! function_exists( 'cryptoland_wp_link_pages' ) ) {
    function cryptoland_wp_link_pages() {

        // pagination for page links
        wp_link_pages( array(

            'before'     => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages', 'cryptoland' ) . '</span>',
            'after'      => '</div>',
            'link_before'     => '',
            'link_after'      => '',
            'next_or_number'  => 'number',
            'separator'       => ' ',
            'nextpagelink'    => esc_html__( 'Next page', 'cryptoland' ),
            'previouspagelink' => esc_html__( 'Previous page', 'cryptoland' ),
            'pagelink'        => '%',
            'echo'            => 1

        )
    );

}
}


/*************************************************
##  SINLGE POST/CPT TAGS
*************************************************/

if ( ! function_exists( 'cryptoland_single_post_tags' ) ) {
    function cryptoland_single_post_tags() {
        if( has_tag() ) {
            ?>
            <!-- Post Tags -->
            <div class="page-post-1-tags">
                <ul class="c-tags-1">
                    <?php
                    $tags = get_the_tags(get_the_ID());
                    foreach($tags as $tag){
                        echo '<li class="c-tags-1-item"><a class="c-tags-1-link uppercase '. esc_attr( $tag->name ) .'" href="'.esc_url( get_tag_link( $tag->term_id ) ).'">'. esc_html( $tag->name ) .'</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <!-- Post Tags End -->
            <?php
        }
    }
}
