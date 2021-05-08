<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $width = $css = $offset = $css_animation = $cryptoland_lgbg_pos = $cryptoland_mdbg_pos = $cryptoland_smbg_pos = $cryptoland_xsbg_pos =  $cryptoland_hidebg_992 = $cryptoland_hidebg_768 = $cryptoland_hidebg_576 = $cryptoland_vc_css_992 = $cryptoland_vc_css_768 = $cryptoland_vc_css_576 = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
	'wpb_column',
	'vc_column_container',
	$width,
);


// custom code start
$css_classes[] = $cryptoland_hidebg_992 == 'off' ? 'md-bg-off': '';
$css_classes[] = $cryptoland_hidebg_768 == 'off' ? 'sm-bg-off': '';
$css_classes[] = $cryptoland_hidebg_576 == 'off' ? 'xs-bg-off': '';
$css_classes[] = $cryptoland_lgbg_pos != '' ? 'bg-'.$cryptoland_lgbg_pos : '';
$css_classes[] = $cryptoland_mdbg_pos != '' ? 'md-bg-'.$cryptoland_mdbg_pos : '';
$css_classes[] = $cryptoland_smbg_pos != '' ? 'sm-bg-'.$cryptoland_smbg_pos : '';
$css_classes[] = $cryptoland_xsbg_pos != '' ? 'xs-bg-'.$cryptoland_xsbg_pos : '';
//end

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background',
) ) ) {
	$css_classes[] = 'vc_col-has-fill';
}

$wrapper_attributes = array();

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

//custom code start
$cryptoland_css_992 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_992);
$cryptoland_css_768 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_768);
$cryptoland_css_576 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_576);

$res_md  = $cryptoland_css_992 != '' ? ' @media only screen and (max-width: 992px) {.'.esc_attr($cryptoland_css_992).'}' : '';
$res_sm  = $cryptoland_css_768 != '' ? ' @media only screen and (max-width: 768px) {.'.esc_attr($cryptoland_css_768).'}' : '';
$res_xs  = $cryptoland_css_576 != '' ? ' @media only screen and (max-width: 576px) {.'.esc_attr($cryptoland_css_576).'}' : '';
$respon = $res_md != '' || $res_sm != '' || $res_xs != '' ? ' data-res-css="'.$res_md.$res_sm.$res_xs.'"' : '';
// end

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
$output .= '<div class="vc_column-inner">';
$output .= '<div class="wpb_wrapper ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ) .'"'.$respon.'>';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo cryptoland_vc_sanitize_data($output);
