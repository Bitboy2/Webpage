<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $source
 * @var $text
 * @var $link
 * @var $google_fonts
 * @var $font_container
 * @var $el_class
 * @var $el_id
 * @var $css
 * @var $css_animation
 * @var $font_container_data - returned from $this->getAttributes
 * @var $google_fonts_data - returned from $this->getAttributes
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Custom_heading
 */
$source = $text = $link = $google_fonts = $font_container = $el_id = $el_class = $css = $css_animation = $font_container_data = $google_fonts_data = $cryptoland_ch_link_style = $cryptoland_ch_style = $list_stat_clr = $cryptoland_ch_f = $cryptoland_ch_clr = $cryptoland_ch_fw = $cryptoland_ch_lts = $res_md_align = $res_md_ch_fs = $res_md_lh = $res_md_lts  = $res_sm_align = $res_sm_ch_fs = $res_sm_lh= $res_sm_lts = $cryptoland_vc_css_992 = $cryptoland_vc_css_768 = $cryptoland_vc_css_576  = array();
$cryptoland_md_ch_style = $cryptoland_md_ch_style = $cryptoland_md_ch_style = '';
// This is needed to extract $font_container_data and $google_fonts_data
extract( $this->getAttributes( $atts ) );

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

/**
 * @var $css_class
 */
extract( $this->getStyles( $el_class . $this->getCSSAnimation( $css_animation ), $css, $google_fonts_data, $font_container_data, $atts ) );

$settings = get_option( 'wpb_js_google_fonts_subsets' );
if ( is_array( $settings ) && ! empty( $settings ) ) {
	$subsets = '&subset=' . implode( ',', $settings );
} else {
	$subsets = '';
}

if ( ( ! isset( $atts['use_theme_fonts'] ) || 'yes' !== $atts['use_theme_fonts'] ) && isset( $google_fonts_data['values']['font_family'] ) ) {
	wp_enqueue_style( 'vc_google_fonts_' . vc_build_safe_css_class( $google_fonts_data['values']['font_family'] ), '//fonts.googleapis.com/css?family=' . $google_fonts_data['values']['font_family'] . $subsets );
}

if ( ! empty( $styles ) ) {
	$style = 'style="' . esc_attr( implode( ';', $styles ) ) . '"';
} else {
	$style = '';
}

if ( 'post_title' === $source ) {
	$text = get_the_title( get_the_ID() );
}

if ( ! empty( $link ) ) {
	$link = vc_build_link( $link );
	$text = '<a href="' . esc_attr( $link['url'] ) . '"' . ( $link['target'] ? ' target="' . esc_attr( $link['target'] ) . '"' : '' ) . ( $link['rel'] ? ' rel="' . esc_attr( $link['rel'] ) . '"' : '' ) . ( $link['title'] ? ' title="' . esc_attr( $link['title'] ) . '"' : '' ) . '>' . $text . '</a>';
}
$wrapper_attributes = array();
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$unique_class = 'ch_'.mt_rand(5, 1000000);
//
$lg_lts = $cryptoland_ch_lts != '' ? '.'.$unique_class.'{letter-spacing:'.esc_attr($cryptoland_ch_lts).';}' : '';
//992px

$md_font = array();
$md_font[] 	= $res_md_align  != '' ? 'text-align:'.esc_attr($res_md_align).'!important;' : '';
$md_font[] 	= $res_md_ch_fs  != '' ? 'font-size:'.esc_attr($res_md_ch_fs).'!important;' : '';
$md_font[] 	= $res_md_lh  	!= '' ? 'line-height:'.esc_attr($res_md_lh).'!important;' : '';
$md_font[] 	= $res_md_lts  	!= '' ? 'letter-spacing:'.esc_attr($res_md_lts).'!important;' : '';

//768px
$sm_font = array();
$sm_font[] 	= $res_sm_align != '' ? 'text-align:'.esc_attr($res_sm_align).'!important;' : '';
$sm_font[] 	= $res_sm_ch_fs != '' ? 'font-size:'.esc_attr($res_sm_ch_fs).'!important;' : '';
$sm_font[] 	= $res_sm_lh    != '' ? 'line-height:'.esc_attr($res_sm_lh).'!important;' : '';
$sm_font[] 	= $res_sm_lts   != '' ? 'letter-spacing:'.esc_attr($res_sm_lts).'!important;' : '';

//576px
$xs_font = array();
$xs_font[] 	= $res_xs_align != '' ? 'text-align:'.esc_attr($res_xs_align).'!important;' : '';
$xs_font[] 	= $res_xs_ch_fs != '' ? 'font-size:'.esc_attr($res_xs_ch_fs).'!important;' : '';
$xs_font[] 	= $res_xs_lh    != '' ? 'line-height:'.esc_attr($res_xs_lh).'!important;' : '';
$xs_font[] 	= $res_xs_lts   != '' ? 'letter-spacing:'.esc_attr($res_xs_lts).'!important;' : '';


$md_font  = !empty($md_font) ? ' @media only screen and (max-width: 992px) {.'.$unique_class.'{'.implode( ' ', array_filter( array_unique( $md_font ) ) ).'}}' : '';
$sm_font  = !empty($sm_font) ? ' @media only screen and (max-width: 768px) {.'.$unique_class.'{'.implode( ' ', array_filter( array_unique( $sm_font ) ) ).'}}' : '';
$xs_font  = !empty($xs_font) ? ' @media only screen and (max-width: 576px) {.'.$unique_class.'{'.implode( ' ', array_filter( array_unique( $xs_font ) ) ).'}}' : '';


$cryptoland_css_992 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_992);
$cryptoland_css_768 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_768);
$cryptoland_css_576 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_576);

$res_md  = $cryptoland_css_992 != '' ? ' @media only screen and (max-width: 992px) {.'.esc_attr($cryptoland_css_992).'}' : '';
$res_sm  = $cryptoland_css_768 != '' ? ' @media only screen and (max-width: 768px) {.'.esc_attr($cryptoland_css_768).'}' : '';
$res_xs  = $cryptoland_css_576 != '' ? ' @media only screen and (max-width: 576px) {.'.esc_attr($cryptoland_css_576).'}' : '';
$respon = $res_md != '' || $res_sm != '' || $res_xs != '' || $md_font != '' || $sm_font != '' || $xs_font != '' || $lg_lts != '' ? ' data-res-css="'.$res_md.$res_sm.$res_xs.$md_font.$sm_font.$xs_font.$lg_lts.'"' : '';
// end


$cryptoland_md_ch_style =  $cryptoland_md_ch_style == 'normal' ? 'md-style-normal' : $cryptoland_md_ch_style;
$cryptoland_sm_ch_style =  $cryptoland_sm_ch_style == 'normal' ? 'sm-style-normal' : $cryptoland_sm_ch_style;
$cryptoland_xs_ch_style =  $cryptoland_xs_ch_style == 'normal' ? 'xs-style-normal' : $cryptoland_xs_ch_style;
$list_stat_clr = $list_stat_clr ? $list_stat_clr : '#8761a8';

$before_list = $cryptoland_ch_style == 'list-stat' ? '<span class="stat-line" style="background-color: '.$list_stat_clr.';"></span>' : '';

$bg_classes = array();
$bg_classes[] = $cryptoland_hidebg_992 == 'off' ? 'md-bg-off': '';
$bg_classes[] = $cryptoland_hidebg_768 == 'off' ? 'sm-bg-off': '';
$bg_classes[] = $cryptoland_hidebg_576 == 'off' ? 'xs-bg-off': '';
$bg_classes[] = $cryptoland_mdbg_pos != '' ? 'md-bg-'.$cryptoland_mdbg_pos : '';
$bg_classes[] = $cryptoland_smbg_pos != '' ? 'sm-bg-'.$cryptoland_smbg_pos : '';
$bg_classes[] = $cryptoland_xsbg_pos != '' ? 'xs-bg-'.$cryptoland_xsbg_pos : '';
$bg_classes = implode( ' ', array_filter( array_unique( $bg_classes ) ) );

$cryptoland_vch_classes = array($cryptoland_ch_link_style, $cryptoland_ch_style, $cryptoland_ch_f, $cryptoland_ch_clr, $cryptoland_ch_fw, $cryptoland_md_ch_style, $cryptoland_sm_ch_style, $cryptoland_xs_ch_style, $css_class);



$output = '';


if ( apply_filters( 'vc_custom_heading_template_use_wrapper', false ) ) {
	$output .= '<div class="'.$unique_class.' ' . implode( ' ', array_filter( array_unique( $cryptoland_vch_classes ) ) ) . ' '.$bg_classes.'" ' . implode( ' ', $wrapper_attributes ) .$respon. '>';
	$output .= '<' . $font_container_data['values']['tag'] . ' ' . $style . ' >';
	$output .= $text;
	$output .= $before_list;
	$output .= '</' . $font_container_data['values']['tag'] . '>';
	$output .= '</div>';
} else {

	$output .= '<' . $font_container_data['values']['tag'] . ' ' . $style . ' class="'.$unique_class.' ' . implode( ' ', array_filter( array_unique( $cryptoland_vch_classes ) ) ) . '" ' . implode( ' ', $wrapper_attributes ) .$respon. '>';
	$output .= $text;
	$output .= $before_list;
	$output .= '</' . $font_container_data['values']['tag'] . '>';
}

echo cryptoland_vc_sanitize_data($output);
