<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $equal_height
 * @var $columns_placement
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $parallax_speed_bg
 * @var $parallax_speed_video
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row
*/

$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $flex_row =
$columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax  = $cryptoland_jarallaxtype = $cryptoland_parallax_speed = $cryptoland_bg_pos = $cryptoland_lgbg_pos = $cryptoland_mdbg_pos = $cryptoland_smbg_pos = $cryptoland_xsbg_pos = $cryptoland_bg_size = $cryptoland_custom_bg_pos = $cryptoland_custom_bg_size = $cryptoland_bg_repeat = $cryptoland_mobile_parallax = $vc_overlayclr = $cryptoland_row_overflow = $cryptoland_parallax_bg_opacity = $cryptoland_bg_zindex = $cryptoland_hidebg_992 = $cryptoland_hidebg_768 = $cryptoland_hidebg_576 = $cryptoland_vc_css_992 = $cryptoland_vc_css_768 = $cryptoland_vc_css_576 = '';
$disable_element 	= '';
$output 			= $after_output = '';
$atts 				= vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );


$el_class = $this->getExtraClass( $el_class );

$css_classes = array(
	'vc_row',
	'wpb_row', //deprecated
	'vc_row-fluid',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);


//bg position class
$css_classes[] = $cryptoland_hidebg_992 == 'off' ? 'md-bg-off': '';
$css_classes[] = $cryptoland_hidebg_768 == 'off' ? 'sm-bg-off': '';
$css_classes[] = $cryptoland_hidebg_576 == 'off' ? 'xs-bg-off': '';
$css_classes[] = $cryptoland_lgbg_pos != '' ? 'bg-'.$cryptoland_lgbg_pos : '';
$css_classes[] = $cryptoland_mdbg_pos != '' ? 'md-bg-'.$cryptoland_mdbg_pos : '';
$css_classes[] = $cryptoland_smbg_pos != '' ? 'sm-bg-'.$cryptoland_smbg_pos : '';
$css_classes[] = $cryptoland_xsbg_pos != '' ? 'xs-bg-'.$cryptoland_xsbg_pos : '';
$css_classes[] = $cryptoland_row_overflow != '' ? $cryptoland_row_overflow : '';
$css_classes[] = $cryptoland_parallax_bg_opacity != '' ? 'parallax-bg-opacity-'.$cryptoland_parallax_bg_opacity : '';
$css_classes[] = $cryptoland_bg_zindex != '' ? 'zindex'.$cryptoland_bg_zindex : '';
$cryptoland_bg_zindex = $cryptoland_bg_zindex !='' ? ' zindex'.$cryptoland_bg_zindex : '';


if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

if (vc_shortcode_custom_css_has_property( $css, array('border', 'background') ) || $video_bg || $parallax) {
	$css_classes[]='vc_row-has-fill';
}

if (!empty($atts['gap'])) {
	$css_classes[] = 'vc_column-gap-'.$atts['gap'];
}


$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
if ( ! empty( $full_width ) ) {
	$wrapper_attributes[] = 'data-vc-full-width="true"';
	$wrapper_attributes[] = 'data-vc-full-width-init="false"';
	if ( 'stretch_row_content' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
	} elseif ( 'stretch_row_content_no_spaces' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
		$css_classes[] = 'vc_row-no-padding';
	}
	$after_output .= '<div class="vc_row-full-width vc_clearfix"></div>';
}

if ( ! empty( $full_height ) ) {
	$css_classes[] = 'vc_row-o-full-height';
	if ( ! empty( $columns_placement ) ) {
		$flex_row = true;
		$css_classes[] = 'vc_row-o-columns-' . $columns_placement;
		if ( 'stretch' === $columns_placement ) {
			$css_classes[] = 'vc_row-o-equal-height';
		}
	}
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

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

$parallax_speed = $parallax_speed_bg;
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$css_classes[] = 'vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}


if ( ! empty( $parallax ) ) {

	//CUSTOM PARALLAX CODE START
	if ( ($parallax == 'cryptoland-scroll' || $parallax == 'cryptoland-scale' || $parallax == 'cryptoland-opacity' || $parallax == 'cryptoland-scroll-opacity' || $parallax == 'cryptoland-scale-opacity' ) AND ( empty( $video_bg ) ) ) {
		//CUSTOM PARALLAX CODE START
		//wp_enqueue_script( 'cryptoland-custom-parallax' );
		$cryptoland_bg_pos = $cryptoland_bg_pos == 'custom' ? $cryptoland_custom_bg_pos : $cryptoland_bg_pos;
		$cryptoland_bg_size = $cryptoland_bg_size == 'custom' ? $cryptoland_custom_bg_size : $cryptoland_bg_size;

		$wrapper_attributes[] = 'data-jarallax';
		$wrapper_attributes[] = $cryptoland_parallax_speed ? 'data-speed="'.esc_attr($cryptoland_parallax_speed).'"' : 'data-speed="0.2"';
		$wrapper_attributes[] = $cryptoland_bg_pos ? 'data-img-position="'.esc_attr( $cryptoland_bg_pos).'"' : 'data-img-position="center"';
		$wrapper_attributes[] = $cryptoland_bg_size ? 'data-img-size="'.esc_attr( $cryptoland_bg_size ).'"' : 'data-img-size="cover"';
		$wrapper_attributes[] = $cryptoland_bg_repeat ? 'data-img-repeat="'.esc_attr( $cryptoland_bg_repeat).'"' : 'data-img-repeat="no-repeat"';
		$wrapper_attributes[] = $cryptoland_mobile_parallax ? 'data-mobile-parallax="'.esc_attr( $cryptoland_mobile_parallax ).'"' : '';

		$css_classes[] = 'jarallax jarallax-cryptoland jarallax-' . $parallax;

		if ( 'cryptoland-scroll' ===  $parallax ) {
			$wrapper_attributes[] = 'data-type="scroll"';
			$css_classes[] = 'jarallax-bg-scroll mobile-parallax-'.$cryptoland_mobile_parallax .'';
		}elseif ( 'cryptoland-scale' ===  $parallax ) {
			$wrapper_attributes[] = 'data-type="scale"';
			$css_classes[] = 'jarallax-bg-scale mobile-parallax-'.$cryptoland_mobile_parallax .'';
		}elseif ( 'cryptoland-opacity' ===  $parallax ) {
			$wrapper_attributes[] = 'data-type="opacity"';
			$css_classes[] = 'jarallax-bg-opacity mobile-parallax-'.$cryptoland_mobile_parallax .'';
		}elseif ( 'cryptoland-scroll-opacity' ===  $parallax ) {
			$wrapper_attributes[] = 'data-type="scroll-opacity"';
			$css_classes[] = 'jarallax-bg-scroll-opacity mobile-parallax-'.$cryptoland_mobile_parallax .'';
		}elseif ( 'cryptoland-scale-opacity' ===  $parallax ) {
			$wrapper_attributes[] = 'data-type="scale-opacity"';
			$css_classes[] = 'jarallax-bg-scale-opacity mobile-parallax-'.$cryptoland_mobile_parallax .'';
		}else {
			$wrapper_attributes[] = 'data-type="scroll"';
			$css_classes[] = 'jarallax-bg-scroll mobile-parallax-'.$cryptoland_mobile_parallax .'';
		}
		//CUSTOM CODE END
	}else {
		wp_enqueue_script( 'vc_jquery_skrollr_js' );
		$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
		$css_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
		if ( false !== strpos( $parallax, 'fade' ) ) {
			$css_classes[] = 'js-vc_parallax-o-fade';
			$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
		} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
			$css_classes[] = 'js-vc_parallax-o-fixed';
		}
	}
}




if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	// CUSTOM CODE START
	if ( ($parallax == 'cryptoland-scroll' || $parallax == 'cryptoland-scale' || $parallax == 'cryptoland-opacity' || $parallax == 'cryptoland-scroll-opacity' || $parallax == 'cryptoland-scale-opacity' ) AND (  $video_bg == '' ) ) {
		$wrapper_attributes[] = 'data-img-src="' . esc_attr( $parallax_image_src ) . '"';
	}else {
		$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
	}
	// CUSTOM CODE END
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="ult-responsive ' . esc_attr( trim( $css_class ) ) . '"';

// custom code start - for container
if ( 'stretch_row' === $full_width ) { $output .= '<div class="container'.$cryptoland_bg_zindex.'">'; }
if ( 'clear_layout' === $full_width ) { $output .= '<div class="none-container">'; }
if ( empty($full_width) ) { $output .= '<div class="container'.$cryptoland_bg_zindex.'">'; }
// custom code end - for container

$cryptoland_css_992 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_992);
$cryptoland_css_768 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_768);
$cryptoland_css_576 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_576);

$res_md  = $cryptoland_css_992 != '' ? ' @media only screen and (max-width: 992px) {.'.esc_attr($cryptoland_css_992).'}' : '';
$res_sm  = $cryptoland_css_768 != '' ? ' @media only screen and (max-width: 768px) {.'.esc_attr($cryptoland_css_768).'}' : '';
$res_xs  = $cryptoland_css_576 != '' ? ' @media only screen and (max-width: 576px) {.'.esc_attr($cryptoland_css_576).'}' : '';
$respon = $res_md != '' || $res_sm != '' || $res_xs != '' ? ' data-res-css="'.$res_md.$res_sm.$res_xs.'"' : '';


$output .= '<div ' . implode( ' ', $wrapper_attributes ) .$respon.'>';
// custom code start - for row_overlay
if($vc_overlayclr != '' ){
$output .= '<div class="vc_row_overlay_clr" style="background-color:'.$vc_overlayclr.'"></div>';
}
// custom code end - for row_overlay

$output .= wpb_js_remove_wpautop( $content );

$output .= '</div>';

if ( empty($full_width) ) { $output .= '</div>'; } // custom line start - for container

$output .= $after_output;

if ( 'stretch_row' === $full_width ) { $output .= '</div>'; } // custom line start - for container
if ( 'clear_layout' === $full_width ) { $output .= '</div>'; } // custom line start - for container

echo cryptoland_vc_sanitize_data($output);
