<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $source
 * @var $image
 * @var $custom_src
 * @var $onclick
 * @var $img_size
 * @var $external_img_size
 * @var $caption
 * @var $img_link_large
 * @var $link
 * @var $img_link_target
 * @var $alignment
 * @var $el_class
 * @var $css_animation
 * @var $style
 * @var $external_style
 * @var $border_color
 * @var $css
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Single_image
 */
$title = $source = $image = $custom_src = $onclick = $img_size = $external_img_size =
$caption = $img_link_large = $link = $img_link_target = $alignment = $el_class = $css_animation = $style = $external_style = $border_color = $css =  $cryptoland_hover_style = $res_img_md_aling = $res_img_sm_aling = $res_img_xs_aling = $cryptoland_maxwidth = $cryptoland_same_height = $cryptoland_custom_opacity = $cryptoland_custom_hvr_opacity = $cryptoland_custom_overlay = $cryptoland_custom_transform = $cryptoland_lgbg_pos = $cryptoland_mdbg_pos = $cryptoland_smbg_pos = $cryptoland_xsbg_pos =  $cryptoland_hidebg_992 = $cryptoland_hidebg_768 = $cryptoland_hidebg_576 = $cryptoland_vc_css_992 = $cryptoland_vc_css_768 = $cryptoland_vc_css_576 = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$default_src = vc_asset_url( 'vc/no_image.png' );

// backward compatibility. since 4.6
if ( empty( $onclick ) && isset( $img_link_large ) && 'yes' === $img_link_large ) {
	$onclick = 'img_link_large';
} elseif ( empty( $atts['onclick'] ) && ( ! isset( $atts['img_link_large'] ) || 'yes' !== $atts['img_link_large'] ) ) {
	$onclick = 'custom_link';
}

if ( 'external_link' === $source ) {
	$style = $external_style;
	$border_color = $external_border_color;
}

$border_color = ( '' !== $border_color ) ? ' vc_box_border_' . $border_color : '';

$img = false;

switch ( $source ) {
	case 'media_library':
	case 'featured_image':

		if ( 'featured_image' === $source ) {
			$post_id = get_the_ID();
			if ( $post_id && has_post_thumbnail( $post_id ) ) {
				$img_id = get_post_thumbnail_id( $post_id );
			} else {
				$img_id = 0;
			}
		} else {
			$img_id = preg_replace( '/[^\d]/', '', $image );
		}

		// set rectangular
		if ( preg_match( '/_circle_2$/', $style ) ) {
			$style = preg_replace( '/_circle_2$/', '_circle', $style );
			$img_size = $this->getImageSquareSize( $img_id, $img_size );
		}

		if ( ! $img_size ) {
			$img_size = 'medium';
		}

		$img = wpb_getImageBySize( array(
			'attach_id' => $img_id,
			'thumb_size' => $img_size,
			'class' => 'vc_single_image-img',
		) );

		// don't show placeholder in public version if post doesn't have featured image
		if ( 'featured_image' === $source ) {
			if ( ! $img && 'page' === vc_manager()->mode() ) {
				return;
			}
		}

		break;

	case 'external_link':
		$dimensions = vcExtractDimensions( $external_img_size );
		$hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

		$custom_src = $custom_src ? esc_attr( $custom_src ) : $default_src;

		$img = array(
			'thumbnail' => '<img class="vc_single_image-img" ' . $hwstring . ' src="' . $custom_src . '" />',
		);
		break;

	default:
		$img = false;
}

if ( ! $img ) {
	$img['thumbnail'] = '<img class="vc_img-placeholder vc_single_image-img" src="' . $default_src . '" />';
}

$el_class = $this->getExtraClass( $el_class );

// backward compatibility
if ( vc_has_class( 'prettyphoto', $el_class ) ) {
	$onclick = 'link_image';
}

// backward compatibility. will be removed in 4.7+
if ( ! empty( $atts['img_link'] ) ) {
	$link = $atts['img_link'];
	if ( ! preg_match( '/^(https?\:\/\/|\/\/)/', $link ) ) {
		$link = 'http://' . $link;
	}
}

// backward compatibility
if ( in_array( $link, array( 'none', 'link_no' ) ) ) {
	$link = '';
}

$a_attrs = array();

switch ( $onclick ) {
	case 'img_link_large':

		if ( 'external_link' === $source ) {
			$link = $custom_src;
		} else {
			$link = wp_get_attachment_image_src( $img_id, 'large' );
			$link = $link[0];
		}

		break;

	case 'link_image':
		wp_enqueue_script( 'prettyphoto' );
		wp_enqueue_style( 'prettyphoto' );

		$a_attrs['class'] = 'prettyphoto';
		$a_attrs['data-rel'] = 'prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']';

		// backward compatibility
		if ( vc_has_class( 'prettyphoto', $el_class ) ) {
			// $link is already defined
		} elseif ( 'external_link' === $source ) {
			$link = $custom_src;
		} else {
			$link = wp_get_attachment_image_src( $img_id, 'large' );
			$link = $link[0];
		}

		break;

	case 'custom_link':
		// $link is already defined
		break;

	case 'zoom':
		wp_enqueue_script( 'vc_image_zoom' );

		if ( 'external_link' === $source ) {
			$large_img_src = $custom_src;
		} else {
			$large_img_src = wp_get_attachment_image_src( $img_id, 'large' );
			if ( $large_img_src ) {
				$large_img_src = $large_img_src[0];
			}
		}

		$img['thumbnail'] = str_replace( '<img ', '<img data-vc-zoom="' . $large_img_src . '" ', $img['thumbnail'] );

		break;

	case 'mfp':
		//wp_enqueue_script( 'vc_image_zoom' );

		$a_attrs['class'] = 'img-fluid';

		break;

	case 'mfp-video':
		//wp_enqueue_script( 'vc_image_zoom' );

		$a_attrs['class'] = 'img-fluid';

		break;
}

// backward compatibility
if ( vc_has_class( 'prettyphoto', $el_class ) ) {
	$el_class = vc_remove_class( 'prettyphoto', $el_class );
}

$wrapperClass = 'vc_single_image-wrapper ' . $style . ' ' . $border_color;



if ( 'mfp' === $onclick ) {
	$large_img_src = wp_get_attachment_image_src( $img_id, 'large' );
	$nt_theme_mfp_popup = '<div class="project-image"><div class="hover-overlay">'.$img['thumbnail'].'<div class="item-overlay"></div><div class="image-zoom"><a class="popup--link" href="'.$large_img_src[0].'"><i class="fa fa-search-plus"></i></a></div></div></div>';
}elseif( 'mfp-video' === $onclick ){
	if($cryptoland_theme_mfpvideo){
	$nt_theme_mfp_popup = '<a class="popup-youtube content-center" href="'.esc_url($cryptoland_theme_mfpvideo).'"></a>';
	}else{
	$nt_theme_mfp_popup = $img['thumbnail'];
	}
}else{
	$nt_theme_mfp_popup = $img['thumbnail'];
}
// custom code
$hover_style = $cryptoland_hover_style != '' ? esc_attr($cryptoland_hover_style) : '';
$opacity 	= ($hover_style == 'has_opacity' && $cryptoland_custom_opacity != '') ? ' data-opacity="'.esc_attr($cryptoland_custom_opacity).'"' : '';
$hvropacity = ($hover_style == 'has_opacity' && $cryptoland_custom_hvr_opacity != '') ? ' data-hvr-opacity="'.esc_attr($cryptoland_custom_hvr_opacity).'"' : '';
$hvroverlay = ($hover_style == 'has_overlay' && $cryptoland_custom_overlay != '') ? ' data-hvr-overlay="'.esc_attr($cryptoland_custom_overlay).'"' : '';
$hvrtransform = ($hover_style == 'has_transform' && $cryptoland_custom_transform != '') ? ' data-hvr-scale="'.esc_attr($cryptoland_custom_transform).'"' : '';
//end
if ( $link ) {
	$a_attrs['href'] = $link;
	$a_attrs['target'] = $img_link_target;
	if ( ! empty( $a_attrs['class'] ) ) {
		$wrapperClass .= ' ' . $a_attrs['class'];
		unset( $a_attrs['class'] );
	}
	$html = '<a ' . vc_stringify_attributes( $a_attrs ) . ' class="' . $wrapperClass . '">' . $img['thumbnail'] . ' </a>';
} else {
	$html = '<div class="' . $wrapperClass . '"';if($cryptoland_maxwidth != ''){$html .= ' style="max-width:'.esc_attr($cryptoland_maxwidth).';"';}$html .= '>' . $nt_theme_mfp_popup . '</div>';
}

// custom code start
$css_classes[] = $cryptoland_hidebg_992 == 'off' ? 'md-bg-off': '';
$css_classes[] = $cryptoland_hidebg_768 == 'off' ? 'sm-bg-off': '';
$css_classes[] = $cryptoland_hidebg_576 == 'off' ? 'xs-bg-off': '';
$css_classes[] = $cryptoland_lgbg_pos != '' ? 'bg-'.$cryptoland_lgbg_pos : '';
$css_classes[] = $cryptoland_mdbg_pos != '' ? 'md-bg-'.$cryptoland_mdbg_pos : '';
$css_classes[] = $cryptoland_smbg_pos != '' ? 'sm-bg-'.$cryptoland_smbg_pos : '';
$css_classes[] = $cryptoland_xsbg_pos != '' ? 'xs-bg-'.$cryptoland_xsbg_pos : '';

$cryptoland_classes[] = $res_img_md_aling != '' ? 'md-'.esc_attr($res_img_md_aling) : '';
$cryptoland_classes[] = $res_img_sm_aling != '' ? 'sm-'.esc_attr($res_img_sm_aling) : '';
$cryptoland_classes[] = $res_img_xs_aling != '' ? 'xs-'.esc_attr($res_img_xs_aling) : '';
$cryptoland_classes[] = $cryptoland_hover_style != '' ? esc_attr($cryptoland_hover_style) : '';
$cryptoland_classes[] = $cryptoland_same_height != '' ? 'same_height' : '';
//end

$class_to_filter = 'wpb_single_image wpb_content_element vc_align_' . $alignment . ' ' . $this->getCSSAnimation( $css_animation );
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

if ( in_array( $source, array( 'media_library', 'featured_image' ) ) && 'yes' === $add_caption ) {
	$post = get_post( $img_id );
	$caption = $post->post_excerpt;
} else {
	if ( 'external_link' === $source ) {
		$add_caption = 'yes';
	}
}

if ( 'yes' === $add_caption && '' !== $caption ) {
	$html .= '<figcaption class="vc_figure-caption">' . esc_html( $caption ) . '</figcaption>';
}

//custom code start
$cryptoland_css_992 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_992);
$cryptoland_css_768 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_768);
$cryptoland_css_576 = preg_replace('/.vc_custom_[0-9]*/',esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ),$cryptoland_vc_css_576);

$res_md  = $cryptoland_css_992 != '' ? ' @media only screen and (max-width: 992px) {.'.esc_attr($cryptoland_css_992).'}' : '';
$res_sm  = $cryptoland_css_768 != '' ? ' @media only screen and (max-width: 768px) {.'.esc_attr($cryptoland_css_768).'}' : '';
$res_xs  = $cryptoland_css_576 != '' ? ' @media only screen and (max-width: 576px) {.'.esc_attr($cryptoland_css_576).'}' : '';
$respon = $res_md != '' || $res_sm != '' || $res_xs != '' ? ' data-res-css="'.$res_md.$res_sm.$res_xs.'"' : '';
// end

$output = '
	<div class="' . esc_attr( trim( $css_class ) ). ' '. implode( ' ', array_filter( array_unique( $cryptoland_classes ) ) ).'"'.$opacity.$hvropacity.$hvroverlay.$hvrtransform.$respon.'>
		' . wpb_widget_title( array( 'title' => $title, 'extraclass' => 'wpb_singleimage_heading' ) ) . '
		<figure class="wpb_wrapper vc_figure">
			' . $html . '
		</figure>
	</div>
';

echo cryptoland_vc_sanitize_data($output);
