<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $el_id
 * @var $equal_height
 * @var $content_placement
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row_Inner
 */
$el_class = $equal_height = $content_placement = $css = $el_id = $cryptoland_lgbg_pos = $cryptoland_mdbg_pos = $cryptoland_smbg_pos = $cryptoland_xsbg_pos =  $cryptoland_hidebg_992 = $cryptoland_hidebg_768 = $cryptoland_hidebg_576 = $cryptoland_vc_css_992 = $cryptoland_vc_css_768 = $cryptoland_vc_css_576 = '';
$disable_element = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_classes = array(
	'vc_row',
	'wpb_row',
	//deprecated
	'vc_inner',
	'vc_row-fluid',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

$css_classes[] = $cryptoland_hidebg_992 == 'off' ? 'md-bg-off': '';
$css_classes[] = $cryptoland_hidebg_768 == 'off' ? 'sm-bg-off': '';
$css_classes[] = $cryptoland_hidebg_576 == 'off' ? 'xs-bg-off': '';
$css_classes[] = $cryptoland_lgbg_pos != '' ? 'bg-'.$cryptoland_lgbg_pos : '';
$css_classes[] = $cryptoland_mdbg_pos != '' ? 'md-bg-'.$cryptoland_mdbg_pos : '';
$css_classes[] = $cryptoland_smbg_pos != '' ? 'sm-bg-'.$cryptoland_smbg_pos : '';
$css_classes[] = $cryptoland_xsbg_pos != '' ? 'xs-bg-'.$cryptoland_xsbg_pos : '';


if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background',
) ) ) {
	$css_classes[] = 'vc_row-has-fill';
}

if ( ! empty( $atts['gap'] ) ) {
	$css_classes[] = 'vc_column-gap-' . $atts['gap'];
}

if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-equal-height';
}

if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-content-' . $content_placement;
}

if ( ! empty( $flex_row ) ) {
	$css_classes[] = 'vc_row-flex';
}

$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';


$cryptoland_css_992 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_992);
$cryptoland_css_768 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_768);
$cryptoland_css_576 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_576);

$res_md  = $cryptoland_css_992 != '' ? ' @media only screen and (max-width: 992px) {.'.esc_attr($cryptoland_css_992).'}' : '';
$res_sm  = $cryptoland_css_768 != '' ? ' @media only screen and (max-width: 768px) {.'.esc_attr($cryptoland_css_768).'}' : '';
$res_xs  = $cryptoland_css_576 != '' ? ' @media only screen and (max-width: 576px) {.'.esc_attr($cryptoland_css_576).'}' : '';
$respon = $res_md != '' || $res_sm != '' || $res_xs != '' ? ' data-res-css="'.$res_md.$res_sm.$res_xs.'"' : '';


$output .= '<div ' . implode( ' ', $wrapper_attributes ) .$respon. '>';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= $after_output;

echo cryptoland_vc_sanitize_data($output);
