<?php

  // if admin - die file
  if ( is_admin() )
  return false;

  function cryptoland_theme_css_options() {

  /* CSS to output */
  $theCSS = '';

  /*************************************************
  ## Admin Bar
  *************************************************/

	if( is_admin_bar_showing() && ! is_customize_preview() ) {
		$theCSS .= '
		html.no-js { margin-top: 0px!important; }
		.header, .header.sticky { top: 32px!important; }

		@media (max-width: 1200px){ .header, .fixed-menu { top: 32px!important; } }
		@media (max-width: 992px){ .header, .fixed-menu { top: 32px!important; } }
		@media (max-width: 782px){ .header, .header.sticky, .fixed-menu { top: 46px!important; } }
		@media (max-width: 768px){ }
		@media (max-width: 600px){
		.header.sticky { top: 0px!important; }
		.fixed-menu { top: 46px!important; }
		.fixed-menu.open.sticky { top: 0px!important; }
		}
		@media (max-width: 480px){
		.fixed-menu.open { top: 46px!important; }
		.fixed-menu.open.sticky { top: 0px!important; }
		}
		';
	}

   /*************************************************
   ## Filter Function
   *************************************************/

	function cryptoland_hex2rgb($hex) {
  	$hex = str_replace("#", "", $hex);

  	if(strlen($hex) == 3) {
  	$r = hexdec(substr($hex,0,1).substr($hex,0,1));
  	$g = hexdec(substr($hex,1,1).substr($hex,1,1));
  	$b = hexdec(substr($hex,2,1).substr($hex,2,1));
  	} else {
  	$r = hexdec(substr($hex,0,2));
  	$g = hexdec(substr($hex,2,2));
  	$b = hexdec(substr($hex,4,2));
  	}
  	$rgb = array($r, $g, $b);

  	return $rgb; // returns an array with the rgb values
	}

   /*************************************************
   ## Color Brightness Settings
   *************************************************/

	function cryptoland_colourBrightness($hex, $percent) {
		// Work out if hash given
		$hash = '';
		if (stristr($hex,'#')) {
			$hex = str_replace('#','',$hex);
			$hash = '#';
		}
		// Hex to rgb
		$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
		// Calculate
		for ($i=0; $i<3; $i++) {
			// See if brighter or darker
			if ($percent > 0) {
				// Lighter
				$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
			} else {
				// Darker
				$positivePercent = $percent - ($percent*2);
				$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
			}
			// In case rounding up causes us to go to 256
			if ($rgb[$i] > 255) {
				$rgb[$i] = 255;
			}
		}
		// RBG to Hex
		$hex = '';
		for($i=0; $i < 3; $i++) {
			// Convert the decimal digit to hex
			$hexDigit = dechex($rgb[$i]);
			// Add a leading zero if necessary
			if(strlen($hexDigit) == 1) {
			$hexDigit = "0" . $hexDigit;
			}
			// Append to the hex string
			$hex .= $hexDigit;
		}
		return $hash.$hex;
	}


   /*************************************************
   ## Preloader Settings
   *************************************************/

	if ( ot_get_option( 'cryptoland_pre_settings' ) != 'off' ) {

		$pretype  	= esc_attr(ot_get_option( 'cryptoland_pre_type' ));
		$spincolor  = esc_attr(ot_get_option( 'cryptoland_pre_spincolor' ));
		$prebg    	= esc_attr(ot_get_option( 'cryptoland_pre_bgcolor' ));

		$prebg     	= ( $prebg != '' ) ?  $prebg  : '#fff';
		$spincolor 	= ( $spincolor != '' ) ? $spincolor : '#8267a6';


		if ( $pretype != 'default' OR $pretype == '' ) {
				$theCSS .= 'div#preloader {
					background-color: '.esc_attr( $prebg ).';
					overflow: hidden;
					background-repeat: no-repeat;
					background-position: center center;
					height: 100%;
					left: 0;
					position: fixed;
					top: 0;
					width: 100%;
					z-index: 10000;
				}';

				$spinrgb   = cryptoland_hex2rgb($spincolor);
				$spin_rgb  = implode(", ", $spinrgb);


				if ( $pretype == '01' ) {
					$theCSS .= '.loader01 {width: 56px;height: 56px;border: 8px solid '.$spincolor.';border-right-color: transparent;border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }.loader01::after {content: \'\';width: 8px;height: 8px;background: '.$spincolor.';border-radius: 50%;position: absolute;top: -1px;left: 33px; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
				}
				if ($pretype == '02' ) {
					$theCSS .= '.loader02 {width: 56px;height: 56px;border: 8px solid rgba('.$spin_rgb.', 0.25);border-top-color: '.$spincolor.';border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
				}
				if ( $pretype == '03' ) {
					$theCSS .= '.loader03 {width: 56px;height: 56px;border: 8px solid transparent;border-top-color: '.$spincolor.';border-bottom-color: '.$spincolor.';border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
				}
				if ( $pretype == '04' ) {
					$theCSS .= '.loader04 {width: 56px;height: 56px;border: 2px solid rgba('.$spin_rgb.', 0.5);border-radius: 50%;position: relative;animation: loader-rotate 1s ease-in-out infinite;top: 50%;margin: -28px auto 0; }.loader04::after {content: \'\';width: 10px;height: 10px;border-radius: 50%;background: '.$spincolor.';position: absolute;top: -6px;left: 50%;margin-left: -5px; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
				}
				if ( $pretype == '05' OR $pretype == '' ) {
					$theCSS .= '.loader05 {width: 56px;height: 56px;border: 4px solid '.$spincolor.';border-radius: 50%;position: relative;animation: loader-scale 1s ease-out infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-scale {0% {transform: scale(0);opacity: 0; }50% {opacity: 1; }100% {transform: scale(1);opacity: 0; } }';
				}
				if ( $pretype == '06' ) {
					$theCSS .= '.loader06 {width: 56px;height: 56px;border: 4px solid transparent;border-radius: 50%;position: relative;top: 50%;margin: -28px auto 0; }.loader06::before {content:  \'\';border: 4px solid rgba('.$spin_rgb.', 0.5);border-radius: 50%;width: 67.2px;height: 67.2px;position: absolute;top: -9.6px;left: -9.6px;animation: loader-scale 1s ease-out infinite;animation-delay: 1s;opacity: 0; }.loader06::after {content:  \'\';border: 4px solid '.$spincolor.';border-radius: 50%;width: 56px;height: 56px;position: absolute;top: -4px;left: -4px;animation: loader-scale 1s ease-out infinite;animation-delay: 0.5s; }@keyframes loader-scale {0% {transform: scale(0);opacity: 0; }50% {opacity: 1; }100% {transform: scale(1);opacity: 0; } }';
				}
				if ( $pretype == '07' ) {
					$theCSS .= '.loader07 {width: 16px;height: 16px;border-radius: 50%;position: relative;animation: loader-circles 1s linear infinite;top: 50%;margin: -8px auto 0; }@keyframes loader-circles {0% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.05), 19px -19px 0 0 rgba('.$spin_rgb.', 0.1), 27px 0 0 0 rgba('.$spin_rgb.', 0.2), 19px 19px 0 0 rgba('.$spin_rgb.', 0.3), 0 27px 0 0 rgba('.$spin_rgb.', 0.4), -19px 19px 0 0 rgba('.$spin_rgb.', 0.6), -27px 0 0 0 rgba('.$spin_rgb.', 0.8), -19px -19px 0 0 '.$spincolor.'; }12.5% {box-shadow: 0 -27px 0 0 '.$spincolor.', 19px -19px 0 0 rgba('.$spin_rgb.', 0.05), 27px 0 0 0 rgba('.$spin_rgb.', 0.1), 19px 19px 0 0 rgba('.$spin_rgb.', 0.2), 0 27px 0 0 rgba('.$spin_rgb.', 0.3), -19px 19px 0 0 rgba('.$spin_rgb.', 0.4), -27px 0 0 0 rgba('.$spin_rgb.', 0.6), -19px -19px 0 0 rgba('.$spin_rgb.', 0.8); }25% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.8), 19px -19px 0 0 '.$spincolor.', 27px 0 0 0 rgba('.$spin_rgb.', 0.05), 19px 19px 0 0 rgba('.$spin_rgb.', 0.1), 0 27px 0 0 rgba('.$spin_rgb.', 0.2), -19px 19px 0 0 rgba('.$spin_rgb.', 0.3), -27px 0 0 0 rgba('.$spin_rgb.', 0.4), -19px -19px 0 0 rgba('.$spin_rgb.', 0.6); }37.5% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.6), 19px -19px 0 0 rgba('.$spin_rgb.', 0.8), 27px 0 0 0 '.$spincolor.', 19px 19px 0 0 rgba('.$spin_rgb.', 0.05), 0 27px 0 0 rgba('.$spin_rgb.', 0.1), -19px 19px 0 0 rgba('.$spin_rgb.', 0.2), -27px 0 0 0 rgba('.$spin_rgb.', 0.3), -19px -19px 0 0 rgba('.$spin_rgb.', 0.4); }50% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.4), 19px -19px 0 0 rgba('.$spin_rgb.', 0.6), 27px 0 0 0 rgba('.$spin_rgb.', 0.8), 19px 19px 0 0 '.$spincolor.', 0 27px 0 0 rgba('.$spin_rgb.', 0.05), -19px 19px 0 0 rgba('.$spin_rgb.', 0.1), -27px 0 0 0 rgba('.$spin_rgb.', 0.2), -19px -19px 0 0 rgba('.$spin_rgb.', 0.3); }62.5% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.3), 19px -19px 0 0 rgba('.$spin_rgb.', 0.4), 27px 0 0 0 rgba('.$spin_rgb.', 0.6), 19px 19px 0 0 rgba('.$spin_rgb.', 0.8), 0 27px 0 0 '.$spincolor.', -19px 19px 0 0 rgba('.$spin_rgb.', 0.05), -27px 0 0 0 rgba('.$spin_rgb.', 0.1), -19px -19px 0 0 rgba('.$spin_rgb.', 0.2); }75% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.2), 19px -19px 0 0 rgba('.$spin_rgb.', 0.3), 27px 0 0 0 rgba('.$spin_rgb.', 0.4), 19px 19px 0 0 rgba('.$spin_rgb.', 0.6), 0 27px 0 0 rgba('.$spin_rgb.', 0.8), -19px 19px 0 0 '.$spincolor.', -27px 0 0 0 rgba('.$spin_rgb.', 0.05), -19px -19px 0 0 rgba('.$spin_rgb.', 0.1); }87.5% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.1), 19px -19px 0 0 rgba('.$spin_rgb.', 0.2), 27px 0 0 0 rgba('.$spin_rgb.', 0.3), 19px 19px 0 0 rgba('.$spin_rgb.', 0.4), 0 27px 0 0 rgba('.$spin_rgb.', 0.6), -19px 19px 0 0 rgba('.$spin_rgb.', 0.8), -27px 0 0 0 '.$spincolor.', -19px -19px 0 0 rgba('.$spin_rgb.', 0.05); }100% {box-shadow: 0 -27px 0 0 rgba('.$spin_rgb.', 0.05), 19px -19px 0 0 rgba('.$spin_rgb.', 0.1), 27px 0 0 0 rgba('.$spin_rgb.', 0.2), 19px 19px 0 0 rgba('.$spin_rgb.', 0.3), 0 27px 0 0 rgba('.$spin_rgb.', 0.4), -19px 19px 0 0 rgba('.$spin_rgb.', 0.6), -27px 0 0 0 rgba('.$spin_rgb.', 0.8), -19px -19px 0 0 '.$spincolor.'; } }';
				}
				if ( $pretype == '08' ) {
					$theCSS .= '.loader08 {width: 20px;height: 20px;position: relative;animation: loader08 1s ease infinite;top: 50%;margin: -46px auto 0; }@keyframes loader08 {0%, 100% {box-shadow: -13px 20px 0 '.$spincolor.', 13px 20px 0 rgba('.$spin_rgb.', 0.2), 13px 46px 0 rgba('.$spin_rgb.', 0.2), -13px 46px 0 rgba('.$spin_rgb.', 0.2); }25% {box-shadow: -13px 20px 0 rgba('.$spin_rgb.', 0.2), 13px 20px 0 '.$spincolor.', 13px 46px 0 rgba('.$spin_rgb.', 0.2), -13px 46px 0 rgba('.$spin_rgb.', 0.2); }50% {box-shadow: -13px 20px 0 rgba('.$spin_rgb.', 0.2), 13px 20px 0 rgba('.$spin_rgb.', 0.2), 13px 46px 0 '.$spincolor.', -13px 46px 0 rgba('.$spin_rgb.', 0.2); }75% {box-shadow: -13px 20px 0 rgba('.$spin_rgb.', 0.2), 13px 20px 0 rgba('.$spin_rgb.', 0.2), 13px 46px 0 rgba('.$spin_rgb.', 0.2), -13px 46px 0 '.$spincolor.'; } }';
				}
				if ( $pretype == '09' ) {
					$theCSS .= '.loader09 {width: 10px;height: 48px;background: '.$spincolor.';position: relative;animation: loader09 1s ease-in-out infinite;animation-delay: 0.4s;top: 50%;margin: -28px auto 0; }.loader09::after, .loader09::before {content:  \'\';position: absolute;width: 10px;height: 48px;background: '.$spincolor.';animation: loader09 1s ease-in-out infinite; }.loader09::before {right: 18px;animation-delay: 0.2s; }.loader09::after {left: 18px;animation-delay: 0.6s; }@keyframes loader09 {0%, 100% {box-shadow: 0 0 0 '.$spincolor.', 0 0 0 '.$spincolor.'; }50% {box-shadow: 0 -8px 0 '.$spincolor.', 0 8px 0 '.$spincolor.'; } }';
				}
				if ( $pretype == '10' ) {
					$theCSS .= '.loader10 {width: 28px;height: 28px;border-radius: 50%;position: relative;animation: loader10 0.9s ease alternate infinite;animation-delay: 0.36s;top: 50%;margin: -42px auto 0; }.loader10::after, .loader10::before {content:  \'\';position: absolute;width: 28px;height: 28px;border-radius: 50%;animation: loader10 0.9s ease alternate infinite; }.loader10::before {left: -40px;animation-delay: 0.18s; }.loader10::after {right: -40px;animation-delay: 0.54s; }@keyframes loader10 {0% {box-shadow: 0 28px 0 -28px '.$spincolor.'; }100% {box-shadow: 0 28px 0 '.$spincolor.'; } }';
				}
				if ( $pretype == '11' ) {
					$theCSS .= '.loader11 {width: 20px;height: 20px;border-radius: 50%;box-shadow: 0 40px 0 '.$spincolor.';position: relative;animation: loader11 0.8s ease-in-out alternate infinite;animation-delay: 0.32s;top: 50%;margin: -50px auto 0; }.loader11::after, .loader11::before {content:  \'\';position: absolute;width: 20px;height: 20px;border-radius: 50%;box-shadow: 0 40px 0 '.$spincolor.';animation: loader11 0.8s ease-in-out alternate infinite; }.loader11::before {left: -30px;animation-delay: 0.48s;}.loader11::after {right: -30px;animation-delay: 0.16s; }@keyframes loader11 {0% {box-shadow: 0 40px 0 '.$spincolor.'; }100% {box-shadow: 0 20px 0 '.$spincolor.'; } }';
				}
				if ( $pretype == '12' ) {
					$theCSS .= '.loader12 {width: 20px;height: 20px;border-radius: 50%;position: relative;animation: loader12 1s linear alternate infinite;top: 50%;margin: -50px auto 0; }@keyframes loader12 {0% {box-shadow: -60px 40px 0 2px '.$spincolor.', -30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 0 40px 0 0 rgba('.$spin_rgb.', 0.2), 30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 60px 40px 0 0 rgba('.$spin_rgb.', 0.2); }25% {box-shadow: -60px 40px 0 0 rgba('.$spin_rgb.', 0.2), -30px 40px 0 2px '.$spincolor.', 0 40px 0 0 rgba('.$spin_rgb.', 0.2), 30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 60px 40px 0 0 rgba('.$spin_rgb.', 0.2); }50% {box-shadow: -60px 40px 0 0 rgba('.$spin_rgb.', 0.2), -30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 0 40px 0 2px '.$spincolor.', 30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 60px 40px 0 0 rgba('.$spin_rgb.', 0.2); }75% {box-shadow: -60px 40px 0 0 rgba('.$spin_rgb.', 0.2), -30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 0 40px 0 0 rgba('.$spin_rgb.', 0.2), 30px 40px 0 2px '.$spincolor.', 60px 40px 0 0 rgba('.$spin_rgb.', 0.2); }100% {box-shadow: -60px 40px 0 0 rgba('.$spin_rgb.', 0.2), -30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 0 40px 0 0 rgba('.$spin_rgb.', 0.2), 30px 40px 0 0 rgba('.$spin_rgb.', 0.2), 60px 40px 0 2px '.$spincolor.'; } }';
				}

		} else {
			$theCSS .= '.preloader {width: 100%;height: 100%;position: fixed;top:0;left:0;background-color: '.$prebg.';z-index: 9999;}';
		}
  }

	if (! is_page_template( 'custom-page.php' ) ) {
		$theCSS .= '
		p {margin-top: 0;margin-bottom: 20px;}
		p:last-child {margin-bottom: 0;}
		p { margin: 10px 0 15px;}
		img{max-width: 100%;}
    ';
  }


  /*************************************************
  ## Theme General Color Settings
  *************************************************/


	$theme_color     = ot_get_option( 'cryptoland_theme_color' ) ;
	$theme_color_2   = ot_get_option( 'cryptoland_theme_color_2' ) ;
	$theme_color_3   = ot_get_option( 'cryptoland_theme_color_3' ) ;

	if ( $theme_color !='' ) {

		$theCSS .= '
		,#widget-area .widget a, .blog-post-social ul li a:hover i, .single-style-1 .pager .previous a, .single-style-1 .pager .next a, .single-style-2 .pager .previous a, .single-style-2 .pager .next a {
			color: '.esc_attr( $theme_color ).';
		}

    body.error404 .index .searchform input[type="submit"]:hover,
	body.search article .searchform input[type="submit"]:hover{background-color: '.esc_attr( $theme_color ).'!important; }

    .single-style-1 .pager .previous a,
	.single-style-1 .pager .next a,
	.single-style-2 .pager .previous a,
	.single-style-2 .pager .next a {border-color: '.esc_attr( $theme_color ).'!important;}

	body.error404 .index .searchform input[type="submit"], .pager li > a:hover,
	body.search article .searchform input[type="submit"],
    #widget-area #searchform input#searchsubmit,
	#respond input:hover, .pager li > span,
	.nav-links span.current,
    body.error404 .content-error .searchform input[type="submit"]{background-color:'.esc_attr( $theme_color ).';}

	.widget-title:after{ color:'.esc_attr( $theme_color ).'; }
		a:hover, a:focus{ color: '.cryptoland_colourBrightness($theme_color,-0.8).'; }
		#widget-area .widget ul li a:hover, .entry-title a:hover, .entry-meta a, #share-buttons i:hover,
    .documents--style-2 .__document .__ico,.facts--dark-color .num,.pricing-table .fontello-check,.pricing-table--style-6 .__price { color:'.esc_attr( $theme_color ).'; }

		{ background-color: '.cryptoland_colourBrightness($theme_color,-0.9).';}

		.breadcrubms, .breadcrubms span a span { color: '.cryptoland_colourBrightness($theme_color,0.7).';}
		.breadcrubms span { color: '.cryptoland_colourBrightness($theme_color,-0.6).';}
		.breadcrubms span a span:hover, .text-logo:hover { color: '.cryptoland_colourBrightness($theme_color,-0.8).';}

		';

	}


	/*************************************************
	## BACK TO TOP BUTTON SETTINGS
	*************************************************/

	$backtotop_dimension    = ot_get_option( 'cryptoland_backtotop_dimension', array() );
	$backtotop_lineheight   = ot_get_option( 'cryptoland_backtotop_lineheight');
	$backtotop_fontsize     = ot_get_option( 'cryptoland_backtotop_iconfs');
	$backtotop_offset       = ot_get_option( 'cryptoland_backtotop_offset');
	$backtotop_border       = ot_get_option( 'cryptoland_backtotop_border', array());
	$backtotop_border_rad   = ot_get_option( 'cryptoland_backtotop_border_radius', array());
	//Backtotop Dimension
	if ( !empty($backtotop_dimension) ) {
	if(!empty($backtotop_dimension['unit']))   	{ $backtotopunit = $backtotop_dimension['unit'];}else{ $backtotopunit = 'px'; }
	if(!empty($backtotop_dimension['width']))   { $theCSS .= '.c-backtop-1{ width:' . esc_attr($backtotop_dimension['width']) .''. esc_attr($backtotopunit) . ' !important; }'; }
	if(!empty($backtotop_dimension['height']))  { $theCSS .= '.c-backtop-1{ height:' . esc_attr($backtotop_dimension['height']) .''. esc_attr($backtotopunit) . ' !important; }'; }
	}
	//Backtotop Design Settings
	if(!empty($backtotop_lineheight))   { $theCSS .= '.c-backtop-1 { line-height:' . esc_attr($backtotop_lineheight). 'px!important; }'; }
	if(!empty($backtotop_fontsize))     { $theCSS .= '.c-backtop-1 i:before { font-size:' . esc_attr($backtotop_fontsize). 'px!important; }'; }
	if(!empty($backtotop_offset))     	{ $theCSS .= '.c-backtop-1 i { bottom:' . esc_attr($backtotop_offset). 'px!important; }'; }


	//Backtotop border
	$backtop_brd  = ot_get_option( 'cryptoland_backtotop_border', array() );
	if(!empty($backtop_brd)) {
	if(!empty($backtop_brd['unit']))    { $sbrdu = $backtop_brd['unit'];}else{ $sbrdu = 'px'; }
	if(!empty($backtop_brd['width']))	{ $theCSS .= '.c-backtop-1 { border-width:'.$backtop_brd['width'].$sbrdu.'!important;}';}
	if(!empty($backtop_brd['style']))	{ $theCSS .= '.c-backtop-1 { border-style:'.$backtop_brd['style'].'!important;}';}
	if(!empty($backtop_brd['color']))	{ $theCSS .= '.c-backtop-1 { border-color:'.$backtop_brd['color'].'!important;}';}
	}
	if(!empty($backtotop_border_rad))       { $theCSS .= '.c-backtop-1{border-radius:' . esc_attr($backtotop_border_rad). 'px!important; }'; }

	//cryptoland_backtotop_color_type
	$btop_type 	= ot_get_option( 'cryptoland_backtotop_color_type', array() );

	if( $btop_type == 'solid') {
	//cryptoland_backtotop_solid
	$btop_solid  = ot_get_option( 'cryptoland_backtotop_solid', array() );
	if(!empty($btop_solid)) {
	{ $theCSS .= '.c-backtop-1{ background-image:none!important;}';}
	if(!empty($btop_solid['bg']))			{ $theCSS .= '.c-backtop-1{ background-color:'.$btop_solid['bg'].'!important;}';}
	if(!empty($btop_solid['bghover']))		{ $theCSS .= '.c-backtop-1:hover{ background-color:'.$btop_solid['bghover'].'!important;}';}
	if(!empty($btop_solid['icon']))   		{ $theCSS .= '.c-backtop-1{ color:'.$btop_solid['icon'].'!important;}';}
	if(!empty($btop_solid['iconhover'])) 	{ $theCSS .= '.c-backtop-1:hover i{ color:'.$btop_solid['iconhover'].'!important;}';}
	if(!empty($btop_solid['bshadow'])) 	{ $theCSS .= '.c-backtop-1{ box-shadow: 10px 10px 82px -5px '.$btop_solid['bshadow'].'!important;}';}

	}
	}else{
	//cryptoland_backtotop_gradient
	$btop_grad  = ot_get_option( 'cryptoland_backtotop_gradient', array() );
	if(!empty($btop_grad)) {
	$grad1 = !empty($btop_grad['grad1']) ? esc_attr($btop_grad['grad1']) : '#8761a8';
	$grad2 = !empty($btop_grad['grad2']) ? esc_attr($btop_grad['grad2']) : '#f4929b';
	$theCSS .= '.c-backtop-1{
		background-color: '.$grad1.';
		background-image: -webkit-gradient(linear,left top,right top,from('.$grad1.'),to('.$grad2.'));
		background-image: -webkit-linear-gradient(left,'.$grad1.' 0,'.$grad2.' 100%);
		background-image: -o-linear-gradient(left,'.$grad1.' 0,'.$grad2.' 100%);
		background-image: linear-gradient(to right,'.$grad1.' 0,'.$grad2.' 100%);
	}';
	if(!empty($btop_grad['icon']))   	{ $theCSS .= '.c-backtop-1{ color:'.$btop_grad['icon'].'!important;}';}
	if(!empty($btop_grad['iconhover'])) { $theCSS .= '.c-backtop-1:hover i{ color:'.$btop_grad['iconhover'].'!important;}';}
	}
	}





	/*************************************************
	## PAGINATION SETTINGS
	*************************************************/
	$pag_type 	= ot_get_option( 'cryptoland_pag_type', array() );

	if( $pag_type == 'default') {
	//default pagination color
	$pag_def  = ot_get_option( 'cryptoland_pag_defaultcolor', array() );
	if(!empty($pag_def)) {
	if(!empty($pag_def['pagbg']))		{ $theCSS .= '.c-pagination-1.-style-default .c-pagination-1-link{ background-color:'.$pag_def['pagbg'].'!important;}';}
	if(!empty($pag_def['bghover']))		{ $theCSS .= '.c-pagination-1.-style-default .c-pagination-1-link:hover{ background-color:'.$pag_def['bghover'].'!important;}';}
	if(!empty($pag_def['bgactive']))	{ $theCSS .= '.c-pagination-1.-style-default .c-pagination-1-link.active{ background-color:'.$pag_def['bgactive'].'!important;}';}
	if(!empty($pag_def['num']))   		{ $theCSS .= '.c-pagination-1.-style-default .c-pagination-1-link{ color:'.$pag_def['num'].'!important;}';}
	if(!empty($pag_def['numhover'])) 	{ $theCSS .= '.c-pagination-1.-style-default .c-pagination-1-link:hover{ color:'.$pag_def['numhover'].'!important;}';}
	if(!empty($pag_def['numactive'])) 	{ $theCSS .= '.c-pagination-1.-style-default .c-pagination-1-link.active{ color:'.$pag_def['numactive'].'!important;}';}
	}
	}else{
	//outline pagination color
	$pag_out  = ot_get_option( 'cryptoland_pag_outlinecolor', array() );
	if(!empty($pag_out)) {
	if(!empty($pag_out['brd']))			{ $theCSS .= '.c-pagination-1.-style-outline .c-pagination-1-link{ border-color:'.$pag_out['brd'].'!important;}';}
	if(!empty($pag_out['brdhover']))	{ $theCSS .= '.c-pagination-1.-style-outline .c-pagination-1-link:hover{ border-color:'.$pag_out['brdhover'].'!important;}';}
	if(!empty($pag_out['brdactive']))	{ $theCSS .= '.c-pagination-1.-style-outline .c-pagination-1-link.active{ border-color:'.$pag_out['brdactive'].'!important;}';}
	if(!empty($pag_out['num']))   		{ $theCSS .= '.c-pagination-1.-style-outline .c-pagination-1-link{ color:'.$pag_out['num'].'!important;}';}
	if(!empty($pag_out['numhover'])) 	{ $theCSS .= '.c-pagination-1.-style-outline .c-pagination-1-link:hover{ color:'.$pag_out['numhover'].'!important;}';}
	if(!empty($pag_out['numactive'])) 	{ $theCSS .= '.c-pagination-1.-style-outline .c-pagination-1-link.active{ color:'.$pag_out['numactive'].'!important;}';}
	}
	}
	/*************************************************
	## IMAGE LOGO SETTINGS
	*************************************************/
	//Image logo size-padding-margin
	$lg_d	= ( ot_get_option( 'cryptoland_logo_dimension', array() ) );
	$lg_p	= ( ot_get_option( 'cryptoland_logo_padding', array() ) );
	$lg_m	= ( ot_get_option( 'cryptoland_logo_margin', array() ) );
	// logo Dimension
	if(!empty($lg_d)) {
	if(!empty($lg_d['unit']))    	{ $lg_du = $lg_d['unit'];}else{ $lg_du = 'px'; }
	if(!empty($lg_d['width']))   	{ $theCSS .= '.nt-img-lg_d img{ width:' . $lg_d['width'] .''. $lg_du . ' !important; }'; }
	if(!empty($lg_d['height']))  	{ $theCSS .= '.nt-img-logo img{ height:' . $lg_d['height'] .''. $lg_du . ' !important; }'; }
	}
	// logo Padding
	if(!empty($lg_p)) {
	if(!empty($lg_p['unit']))   	{ $lg_pu = $lg_p['unit'];}else{ $lg_pu = 'px'; }
	if(!empty($lg_p['top']))    	{ $theCSS .= '.nt-img-logo img{ padding-top:' . $lg_p['top'] .''. $lg_pu . ' !important; }'; }
	if(!empty($lg_p['bottom'])) 	{ $theCSS .= '.nt-img-logo img{ padding-bottom:' . $lg_p['bottom'] .''. $lg_pu . ' !important; }'; }
	if(!empty($lg_p['right']))  	{ $theCSS .= '.nt-img-logo img{ padding-right:' . $lg_p['right'] .''. $lg_pu . ' !important; }'; }
	if(!empty($lg_p['left']))   	{ $theCSS .= '.nt-img-logo img{ padding-left:' . $lg_p['left'] .''. $lg_pu . ' !important; }'; }
	}
	// logo Margin
	if(!empty($lg_m)) {
	if(!empty($lg_m['unit']))   	{ $lg_mu = $lg_m['unit'];}else{ $lg_mu = 'px'; }
	if(!empty($lg_m['top']))    	{ $theCSS .= '.nt-img-logo img{ margin-top:' . $lg_m['top'] .''. $lg_mu . ' !important; }'; }
	if(!empty($lg_m['bottom'])) 	{ $theCSS .= '.nt-img-logo img{ margin-bottom:' . $lg_m['bottom'] .''. $lg_mu . ' !important; }'; }
	if(!empty($lg_m['right']))  	{ $theCSS .= '.nt-img-logo img{ margin-right:' . $lg_m['right'] .''. $lg_mu . ' !important; }'; }
	if(!empty($lg_m['left']))   	{ $theCSS .= '.nt-img-logo img{ margin-left:' . $lg_m['left'] .''. $lg_mu . ' !important; }'; }
	}

	/*************************************************
	## TEXT LOGO SETTINGS
	*************************************************/

	$t_lg	= esc_attr( ot_get_option( 'cryptoland_textlogo' ) );
	$s_h	= esc_attr( ot_get_option( 'cryptoland_sticky_header' ) );

	if ( $t_lg != '' ){
	//static menu text logo typgrph
	$staticlogo= ot_get_option( 'cryptoland_static_textlogo_typograp', array() );
	if ( !empty($staticlogo) ) :
   	$theCSS .= '.nt-text-logo{';
      	if ( !empty($staticlogo['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $staticlogo['font-color'] ).'!important;'; }
      	if ( !empty($staticlogo['font-family']) ) 		{ $theCSS .= 'font-family:"'.esc_attr( $staticlogo['font-family'] ).'"!important;'; }
      	if ( !empty($staticlogo['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $staticlogo['font-size'] ).'!important;'; }
      	if ( !empty($staticlogo['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $staticlogo['font-style'] ).'!important;'; }
      	if ( !empty($staticlogo['font-variant']) ) 		{ $theCSS .= 'font-variant:'.esc_attr( $staticlogo['font-variant'] ).'!important;'; }
      	if ( !empty($staticlogo['font-weight']) ) 		{ $theCSS .= 'font-weight:'.esc_attr( $staticlogo['font-weight'] ).'!important;'; }
      	if ( !empty($staticlogo['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $staticlogo['letter-spacing'] ).'!important;'; }
      	if ( !empty($staticlogo['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $staticlogo['line-height'] ).'!important;'; }
      	if ( !empty($staticlogo['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($staticlogo['text-decoration']).'!important;'; }
      	if ( !empty($staticlogo['text-transform']))		{ $theCSS .= 'text-transform:'.esc_attr($staticlogo['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;

	//sticky menu text logo typgrph
	if ( $s_h != 'off' ){
	$stickylogo= ot_get_option( 'cryptoland_sticky_textlogo_typograp', array() );
	if ( !empty($stickylogo) ) :
   	$theCSS .= '.header.sticky .nt-text-logo {';
      	if ( !empty($stickylogo['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $stickylogo['font-color'] ).'!important;'; }
      	if ( !empty($stickylogo['font-family']) ) 		{ $theCSS .= 'font-family:"'.esc_attr( $stickylogo['font-family'] ).'"!important;'; }
      	if ( !empty($stickylogo['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $stickylogo['font-size'] ).'!important;'; }
      	if ( !empty($stickylogo['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $stickylogo['font-style'] ).'!important;'; }
      	if ( !empty($stickylogo['font-variant']) ) 		{ $theCSS .= 'font-variant:'.esc_attr( $stickylogo['font-variant'] ).'!important;'; }
      	if ( !empty($stickylogo['font-weight']) ) 		{ $theCSS .= 'font-weight:'.esc_attr( $stickylogo['font-weight'] ).'!important;'; }
      	if ( !empty($stickylogo['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $stickylogo['letter-spacing'] ).'!important;'; }
      	if ( !empty($stickylogo['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $stickylogo['line-height'] ).'!important;'; }
      	if ( !empty($stickylogo['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($stickylogo['text-decoration']).'!important;'; }
      	if ( !empty($stickylogo['text-transform']))		{ $theCSS .= 'text-transform:'.esc_attr($stickylogo['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;

	//mobile logo text logo typgrph
	$mobilelogo= ot_get_option( 'cryptoland_mob_textlogo_typograp', array() );
	if ( !empty($mobilelogo) ) :
   	$theCSS .= '.fixed-menu.open .nt-text-logo {';
      	if ( !empty($mobilelogo['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $mobilelogo['font-color'] ).'!important;'; }
      	if ( !empty($mobilelogo['font-family']) ) 		{ $theCSS .= 'font-family:"'.esc_attr( $mobilelogo['font-family'] ).'"!important;'; }
      	if ( !empty($mobilelogo['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $mobilelogo['font-size'] ).'!important;'; }
      	if ( !empty($mobilelogo['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $mobilelogo['font-style'] ).'!important;'; }
      	if ( !empty($mobilelogo['font-variant']) ) 		{ $theCSS .= 'font-variant:'.esc_attr( $mobilelogo['font-variant'] ).'!important;'; }
      	if ( !empty($mobilelogo['font-weight']) ) 		{ $theCSS .= 'font-weight:'.esc_attr( $mobilelogo['font-weight'] ).'!important;'; }
      	if ( !empty($mobilelogo['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $mobilelogo['letter-spacing'] ).'!important;'; }
      	if ( !empty($mobilelogo['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $mobilelogo['line-height'] ).'!important;'; }
      	if ( !empty($mobilelogo['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($mobilelogo['text-decoration']).'!important;'; }
      	if ( !empty($mobilelogo['text-transform']))		{ $theCSS .= 'text-transform:'.esc_attr($mobilelogo['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	}
	}

   /*************************************************
   ## NAVIGATION SETTINGS
   *************************************************/

	//STATIC NAVIGATION
	$n_p    = ot_get_option( 'cryptoland_nav_padding', array() );
	$n_m    = ot_get_option( 'cryptoland_nav_margin', array() );
	$n_c    = ot_get_option( 'cryptoland_navcolor', array() );
	$ni_fs  = ot_get_option( 'cryptoland_header_menu_ifs');

  //menu item fontsize
  if( $ni_fs !=0 )	{ $theCSS .= '.header ul li a{font-size:'.esc_attr($ni_fs).'px!important;}';}
	//static nav item color
	if(!empty($n_c)) {
	if(!empty($n_c['menubg']))	{ $theCSS .= '.header{ background-color:'.$n_c['menubg'].'!important;}';}
	if(!empty($n_c['normal']))	{ $theCSS .= '.header ul > li > a{ color:'.$n_c['normal'].'!important;}';}
	if(!empty($n_c['hover']))   { $theCSS .= '.header ul > li > a:hover{ color:'.$n_c['hover'].'!important;}';}
	if(!empty($n_c['hover']))   { $theCSS .= '.header ul > li > a:after{ border-bottom-color:'.$n_c['hover'].'!important;}';}
	if(!empty($n_c['active']))  { $theCSS .= '.header ul > li.active a{color:'.$n_c['active'].'!important;}';}
	}
	//Navigation Padding
	if(!empty($n_p)) {
	$theCSS .= '.header {';
	if(!empty($n_p['unit']))   	{ $n_pu    = $n_p['unit']; }else{ $n_pu = 'px'; }
	if(!empty($n_p['top']))    	{ $theCSS .= 'padding-top:'.$n_p['top'].''.$n_pu.' !important;'; }
	if(!empty($n_p['bottom'])) 	{ $theCSS .= 'padding-bottom:'.$n_p['bottom'].''.$n_pu.' !important;'; }
	if(!empty($n_p['right']))  	{ $theCSS .= 'padding-right:'.$n_p['right'].''.$n_pu.' !important;'; }
	if(!empty($n_p['left']))   	{ $theCSS .= 'padding-left:'.$n_p['left'].''.$n_pu.' !important;'; }
	$theCSS .= '}';
	}
	//Navigation Margin
	if(!empty($n_m)) {
	$theCSS .= '.header {';
	if(!empty($n_m['unit']))   	{ $n_mu    = $n_m['unit']; }else{ $n_mu = 'px'; }
	if(!empty($n_m['top']))    	{ $theCSS .= 'margin-top:'.$n_m['top'].''.$n_mu.' !important;'; }
	if(!empty($n_m['bottom'])) 	{ $theCSS .= 'margin-bottom:'.$n_m['bottom'].''.$n_mu.' !important;'; }
	if(!empty($n_m['right']))  	{ $theCSS .= 'margin-right:'.$n_m['right'].''.$n_mu.' !important;'; }
	if(!empty($n_m['left']))   	{ $theCSS .= 'margin-left:'.$n_m['left'].''.$n_mu.' !important;'; }
	$theCSS .= '}';
	}

	////STICKY NAVIGATION SETTINGS
	$s_d		= esc_attr( ot_get_option( 'cryptoland_sticky_header' ) );
	$s_n_p		= ot_get_option( 'cryptoland_sticky_padding', array() );
	$s_n_m		= ot_get_option( 'cryptoland_sticky_margin', array() );
	$s_n_c 		= ot_get_option( 'cryptoland_sticky_nav_color', array() );

	//sticky navigation color
	if ( $s_d == 'off' ) 			{ $theCSS .= '.header.sticky-off.sticky {position: absolute !important;}';}
	if ( $s_d != 'off' ) {
	if(!empty($s_n_c)) {
	if(!empty($s_n_c['menubg']))	{ $theCSS .= '.header.sticky{ background-color:'.$s_n_c['menubg'].'!important;}';}
	if(!empty($s_n_c['normal']))	{ $theCSS .= '.header.sticky ul > li > a{ color:'.$s_n_c['normal'].'!important;}';}
	if(!empty($s_n_c['hover']))   	{ $theCSS .= '.header.sticky ul > li > a:hover{ color:'.$s_n_c['hover'].'!important;}';}
	if(!empty($s_n_c['hover']))   	{ $theCSS .= '.header.sticky ul > li > a:after{ border-bottom-color:'.$s_n_c['hover'].'!important;}';}
	if(!empty($s_n_c['active']))  	{ $theCSS .= '.header.sticky ul > li > a:active{ color:'.$s_n_c['active'].'!important;}';}
	}
	//sticky navigation padding
	if(!empty($s_n_p)) {
	$theCSS .= '.header.sticky{';
	if(!empty($s_n_p['unit']))   	{ $s_n_pu  = $s_n_p['unit'];}else{ $s_n_pu = 'px'; }
	if(!empty($s_n_p['top']))    	{ $theCSS .= 'padding-top:'.$s_n_p['top'].''.$s_n_pu.' !important;'; }
	if(!empty($s_n_p['bottom'])) 	{ $theCSS .= 'padding-bottom:'.$s_n_p['bottom'].''.$s_n_pu.' !important;'; }
	if(!empty($s_n_p['right']))  	{ $theCSS .= 'padding-right:'.$s_n_p['right'].''.$s_n_pu.' !important;'; }
	if(!empty($s_n_p['left']))   	{ $theCSS .= 'padding-left:'.$s_n_p['left'].''.$s_n_pu.' !important;'; }
	$theCSS .= '}';
	}
	//sticky navigation margin
	if(!empty($s_n_m)) {
	$theCSS .= '.header.sticky{';
	if(!empty($s_n_m['unit']))   	{ $s_n_mu  = $s_n_m['unit'];}else{ $s_n_mu = 'px'; }
	if(!empty($s_n_m['top']))    	{ $theCSS .= 'margin-top:'.$s_n_m['top'].''.$s_n_mu.' !important;'; }
	if(!empty($s_n_m['bottom'])) 	{ $theCSS .= 'margin-bottom:'.$s_n_m['bottom'].''.$s_n_mu.' !important;'; }
	if(!empty($s_n_m['right']))  	{ $theCSS .= 'margin-right:'.$s_n_m['right'].''.$s_n_mu.' !important;'; }
	if(!empty($s_n_m['left']))   	{ $theCSS .= 'margin-left:'.$s_n_m['left'].''.$s_n_mu.' !important;'; }
	$theCSS .= '}';
	}
	}
    $d_m    = ot_get_option( 'cryptoland_dropdown_menu_color', array() );
    //Dropdown nav item color
	if(!empty($d_m)) {
	if(!empty($d_m['menubg']))	{ $theCSS .= '.header ul > li > ul.menu__dropdown{ background-color:'.$d_m['menubg'].'!important;}';}
	if(!empty($d_m['normal']))	{ $theCSS .= '.header ul > li > ul > li > a{ color:'.$d_m['normal'].'!important;}';}
	if(!empty($d_m['hover']))   { $theCSS .= '.header ul > li > ul > li > a:hover{ color:'.$d_m['hover'].'!important;}';}
	if(!empty($d_m['hover']))   { $theCSS .= '.header ul > li > ul > li > a:after{ border-bottom-color:'.$d_m['hover'].'!important;}';}
	if(!empty($d_m['active']))  { $theCSS .= '.header ul > li > ul > li.active a{color:'.$d_m['active'].'!important;}';}
	}
	////MOBILE NAVIGATION
	$mob_clr 		= ot_get_option( 'cryptoland_mobile_menu_color', array() );
	$mob_btn 		= ot_get_option( 'cryptoland_mobile_menubtn', array() );
	$mob_i_a		= ot_get_option( 'cryptoland_mobile_item_align' );

	$theCSS .= '@media (max-width: 1200px){';
	//mobile navigation item color
	if(!empty($mob_clr) ) {
	if(!empty($mob_clr['menubg'])) 		{ $theCSS .= '.header, .fixed-menu {background-color:'.$mob_clr['menubg'].'!important;}';}
	if(!empty($mob_clr['item']))	  	{ $theCSS .= '.fixed-menu ul > li > a{ color:'.$mob_clr['item'].'!important;}';}
	if(!empty($mob_clr['itemhover']))   { $theCSS .= '.fixed-menu ul > li > a:hover{ color:'.$mob_clr['itemhover'].'!important;}';
										 $theCSS .= '.fixed-menu ul > li > a:after{ border-bottom-color:'.$mob_clr['itemhover'].'!important;}';}
	}
	//mobile navigation open and close svg button color
	if(!empty($mob_btn) ) {
	if(!empty($mob_btn['open'])) { $theCSS .= '.header .btn-menu div, .header .btn-menu div:after{background-color:'.$mob_btn['open'].'!important;}';}
	if(!empty($mob_btn['openhover'])){ $theCSS .= '.header .btn-menu:hover div, .header .btn-menu:hover div:after{background-color:'.$mob_btn['openhover'].'!important;}';}
	if(!empty($mob_btn['close'])) { $theCSS .= '.btn-close svg path{fill:'.$mob_btn['close'].'!important;}';}
	if(!empty($mob_btn['closehover'])){ $theCSS .= '.btn-close:hover svg path{fill:'.$mob_btn['closehover'].'!important;}';}
	}
	//mobile navigation item alignment
	if ( $mob_i_a !='' )      	{ $theCSS .= '.fixed-menu .fixed-menu__content, .mob-menu__item {text-align:'.$mob_i_a.'!important;}';}
	if ( $mob_i_a =='center' )  { $theCSS .= '.fixed-menu .btn-wrap {display: block;}';}
	if ( $mob_i_a =='center' )  { $theCSS .= '.fixed-menu .btn-sign-in,.fixed-menu .btn-sign-up {display:inline-block!important;}';}
	//mobile menu custom typogrphy
	$mobtypgrph = ot_get_option( 'cryptoland_mob_typgrph', array() );
	if ( !empty($mobtypgrph) ) :
   	$theCSS .= '.fixed-menu ul > li > a{';
      	if ( !empty($mobtypgrph['font-color']) ) 	{ $theCSS .= 'color:'.esc_attr( $mobtypgrph['font-color'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $mobtypgrph['font-family'] ).'"!important;'; }
      	if ( !empty($mobtypgrph['font-size']) ) 	{ $theCSS .= 'font-size:'.esc_attr( $mobtypgrph['font-size'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-style']) ) 	{ $theCSS .= 'font-style:'.esc_attr( $mobtypgrph['font-style'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $mobtypgrph['font-variant'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $mobtypgrph['font-weight'] ).'!important;'; }
      	if ( !empty($mobtypgrph['letter-spacing']) ){ $theCSS .= 'letter-spacing:'.esc_attr( $mobtypgrph['letter-spacing'] ).'!important;'; }
      	if ( !empty($mobtypgrph['line-height'])) 	{ $theCSS .= 'line-height:'.esc_attr( $mobtypgrph['line-height'] ).'!important;'; }
      	if ( !empty($mobtypgrph['text-decoration'])){ $theCSS .= 'text-decoration:'.esc_attr($mobtypgrph['text-decoration']).'!important;'; }
      	if ( !empty($mobtypgrph['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($mobtypgrph['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	$theCSS .= '}';

	//navigation buttons color
	//sign-in button
	$signin = ot_get_option( 'cryptoland_header_signin_color', array() );
	if(!empty($signin) ) {
	if(!empty($signin['bg'])) 		{ $theCSS .= '.btn-sign-in {background-color:'.$signin['bg'].'!important;}';}
	if(!empty($signin['bghover'])) 	{ $theCSS .= '.btn-sign-in:hover {background-color:'.$signin['bghover'].'!important;}';}
	if(!empty($signin['color']))	{ $theCSS .= '.btn-sign-in{ color:'.$signin['color'].'!important;}';}
	if(!empty($signin['hover']))   	{ $theCSS .= '.btn-sign-in:hover{ color:'.$signin['hover'].'!important;}';}
	}
	//sign-up button
	$signup = ot_get_option( 'cryptoland_header_signup_color', array() );
	if(!empty($signup) ) {
	if(!empty($signup['bg'])) 		{ $theCSS .= '.btn-sign-up {background-color:'.$signup['bg'].'!important;}';}
	if(!empty($signup['bghover'])) 	{ $theCSS .= '.btn-sign-up:hover {background-color:'.$signup['bghover'].'!important;}';}
	if(!empty($signup['color']))	{ $theCSS .= '.btn-sign-up{ color:'.$signup['color'].'!important;}';}
	if(!empty($signup['hover']))   	{ $theCSS .= '.btn-sign-up:hover{ color:'.$signup['hover'].'!important;}';}
	}

    $lang_bg = ot_get_option( 'cryptoland_header_lang_bg' );
    $lang_a = ot_get_option( 'cryptoland_header_lang_a' );
    $lang_ha = ot_get_option( 'cryptoland_header_lang_hvra' );
    $lang_active = ot_get_option( 'cryptoland_header_lang_active' );
    if ( $lang_bg !='' ) { $theCSS .= '.lang-select .sub-list, .select-options {background-color:'.$lang_bg.';}';}
    if ( $lang_bg !='' ) { $theCSS .= '.lang-select .sub-list:before {border-bottom-color:'.$lang_bg.';}';}
    if ( $lang_a !='' ) { $theCSS .= '.lang-select .sub-list li a, .select-options li a {color:'.$lang_a.';}';}
    if ( $lang_ha !='' ) { $theCSS .= '.lang-select .sub-list li a:hover, , .select-options li a:hover {color:'.$lang_ha.';}';}
    if ( $lang_active !='' ) { $theCSS .= '.lang-select .lang-item.active > span, .select-styled.active {color:'.$lang_active.';}';}

	/*************************************************
	## SIDEBAR SETTINGS
	*************************************************/

	//sidebar color
	$sb_c  = ot_get_option( 'cryptoland_sidebar_color', array() );
	if(!empty($sb_c)) {
	if(!empty($sb_c['bg']))			{ $theCSS .= '#widget-area { background-color:'.$sb_c['bg'].'!important;}';}
	if(!empty($sb_c['normal']))   	{ $theCSS .= '#widget-area .c-sidebar-1-widget { color:'.$sb_c['normal'].'!important;}';}
	if(!empty($sb_c['title']))  	{ $theCSS .= '#widget-area .c-sidebar-1-widget-title, .widget-title:after{ color:'.$sb_c['title'].'!important;}';}
	if(!empty($sb_c['search']))   	{ $theCSS .= '#widget-area .c-sidebar-1-widget .c-sidebar-1-search-field ::placeholder{ color:'.$sb_c['search'].'!important;}';}
	if(!empty($sb_c['searchbg']))   { $theCSS .= '#widget-area .c-sidebar-1-widget .c-sidebar-1-search-field{ background-color:'.$sb_c['searchbg'].'!important;}';}
	if(!empty($sb_c['link'])) 		{ $theCSS .= '#widget-area .c-sidebar-1-widget a { color:'.$sb_c['link'].'!important;}';}
	if(!empty($sb_c['linkhover'])) 	{ $theCSS .= '#widget-area .c-sidebar-1-widget a:hover, .c-sidebar-1-search-button:hover{ color:'.$sb_c['linkhover'].'!important;}';}
	}
	//sidebar border
	$sb_brd  = ot_get_option( 'cryptoland_sidebar_border', array() );
	if(!empty($sb_brd)) {
	if(!empty($sb_brd['unit']))    		{ $sbrdu = $sb_brd['unit'];}else{ $sbrdu = 'px'; }
	if(!empty($sb_brd['width']))		{ $theCSS .= '#widget-area { border-width:'.$sb_brd['width'].$sbrdu.'!important;}';}
	if(!empty($sb_brd['style']))		{ $theCSS .= '#widget-area { border-style:'.$sb_brd['style'].'!important;}';}
	if(!empty($sb_brd['color']))		{ $theCSS .= '#widget-area { border-color:'.$sb_brd['color'].'!important;}';}
	}
	//sidebar padding
	$sb_pad  = ot_get_option( 'cryptoland_sidebar_padding', array() );
	if(!empty($sb_pad)) {
	$theCSS .= '#widget-area{';
	if(!empty($sb_pad['unit']))   	{ $sb_padu  = $sb_pad['unit'];}else{ $sb_padu = 'px'; }
	if(!empty($sb_pad['top']))    	{ $theCSS .= 'padding-top:'.$sb_pad['top'].''.$sb_padu.' !important;'; }
	if(!empty($sb_pad['bottom'])) 	{ $theCSS .= 'padding-bottom:'.$sb_pad['bottom'].''.$sb_padu.' !important;'; }
	if(!empty($sb_pad['right']))  	{ $theCSS .= 'padding-right:'.$sb_pad['right'].''.$sb_padu.' !important;'; }
	if(!empty($sb_pad['left']))   	{ $theCSS .= 'padding-left:'.$sb_pad['left'].''.$sb_padu.' !important;'; }
	$theCSS .= '}';
	}
	$sb_height  = ot_get_option( 'cryptoland_sidebar_height' );
	if( $sb_height != '' ) 	{ $theCSS .= '#widget-area { height:'.$sb_height.'!important;}';}
	//sidebar widget border
	$sb_wbrd  = ot_get_option( 'cryptoland_widget_border', array() );
	if(!empty($sb_wbrd)) {
	if(!empty($sb_wbrd['unit']))    	{ $sbrdu = $sb_wbrd['unit'];}else{ $sbrdu = 'px'; }
	if(!empty($sb_wbrd['width']))		{ $theCSS .= '#widget-area .c-sidebar-1-widget { border-width:'.$sb_wbrd['width'].$sbrdu.'!important;}';}
	if(!empty($sb_wbrd['style']))		{ $theCSS .= '#widget-area .c-sidebar-1-widget { border-style:'.$sb_wbrd['style'].'!important;}';}
	if(!empty($sb_wbrd['color']))		{ $theCSS .= '#widget-area .c-sidebar-1-widget { border-color:'.$sb_wbrd['color'].'!important;}';}
	}
	//sidebar widget box-shadow
	$sb_wbxshdw  = ot_get_option( 'cryptoland_sidebar_widget_bxshdw', array() );
	if(!empty($sb_wbxshdw)) {
	$inset = 	!empty($sb_wbxshdw['inset']) ? $sb_wbxshdw['inset'] : '';
	$offx = 	!empty($sb_wbxshdw['offset-x']) ? ' '.$sb_wbxshdw['offset-x'].'px' : '';
	$offy = 	!empty($sb_wbxshdw['offset-y']) ? ' '.$sb_wbxshdw['offset-y'].'px' : '';
	$blur = 	!empty($sb_wbxshdw['blur-radius']) ? ' '.$sb_wbxshdw['blur-radius'].'px' : '';
	$spread = 	!empty($sb_wbxshdw['spread-radius']) ? ' '.$sb_wbxshdw['spread-radius'].'px' : '';
	$color = 	!empty($sb_wbxshdw['color']) ? ' '.$sb_wbxshdw['color'] : '';
	$theCSS .= '#widget-area .c-sidebar-1-widget { -webkit-box-shadow: '.$inset.$offx.$offy.$blur.$spread.$color.';-moz-box-shadow: '.$inset.$offx.$offy.$blur.$spread.$color.';box-shadow: '.$inset.$offx.$offy.$blur.$spread.$color.';}';
	}
	//sidebar widget typogrphy
	$mobtypgrph = ot_get_option( 'cryptoland_sidebar_widget_typgrph', array() );
	if ( !empty($mobtypgrph) ) :
   	$theCSS .= '#widget-area .c-sidebar-1-widget-title, .widget-title:after{';
      	if ( !empty($mobtypgrph['font-color']) ) 	{ $theCSS .= 'color:'.esc_attr( $mobtypgrph['font-color'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $mobtypgrph['font-family'] ).'"!important;'; }
      	if ( !empty($mobtypgrph['font-size']) ) 	{ $theCSS .= 'font-size:'.esc_attr( $mobtypgrph['font-size'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-style']) ) 	{ $theCSS .= 'font-style:'.esc_attr( $mobtypgrph['font-style'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $mobtypgrph['font-variant'] ).'!important;'; }
      	if ( !empty($mobtypgrph['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $mobtypgrph['font-weight'] ).'!important;'; }
      	if ( !empty($mobtypgrph['letter-spacing']) ){ $theCSS .= 'letter-spacing:'.esc_attr( $mobtypgrph['letter-spacing'] ).'!important;'; }
      	if ( !empty($mobtypgrph['line-height'])) 	{ $theCSS .= 'line-height:'.esc_attr( $mobtypgrph['line-height'] ).'!important;'; }
      	if ( !empty($mobtypgrph['text-decoration'])){ $theCSS .= 'text-decoration:'.esc_attr($mobtypgrph['text-decoration']).'!important;'; }
      	if ( !empty($mobtypgrph['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($mobtypgrph['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;

	/*************************************************
	## INNER PAGES HERO SETTINGS
	*************************************************/
	if ( is_404() ) {// error page
	$name 		= 'error';
	}elseif ( is_archive() ) {	// blog and cpt archive page
	$name 		= 'archive';
	}elseif ( is_search() ) {	// search page
	$name 		= 'search';
	}elseif ( is_home() OR is_front_page() ) {	// blog post loop page index.php or your choise on settings
	$name 		= 'blog';
	}elseif ( is_single() AND ! is_singular('portfolio')) {	// blog post single/singular page
	$name 		= 'single';
	}elseif ( is_singular("portfolio") ) {	// it is cpt and if you want use another clone this condition and add your cpt name as portfolio
	$name 		= 'single_portfolio';
	}elseif ( is_page() ) {	// default or custom page
	$name 		= 'page';
	}

	//default bg image
	$theCSS .= '.page-id-'. get_the_ID().'.hero-fullwidth { background-image:url('.esc_url( get_theme_file_uri() ) . '/framework/images/main_bg.png); }';
	//Hero Bg Height
	$hero_height = esc_attr( ot_get_option( 'cryptoland_'.$name.'_hero_bgheight' ) );
	if ( $hero_height !='' ) { $theCSS .= '.page-id-'. get_the_ID().'.hero-fullwidth { height: '.$hero_height.'vh !important; max-height: 100%; }';
      $theCSS .= '@media (max-width: 767px){.page-id-'. get_the_ID().'.hero-fullwidth { max-height : 60vh !important; }}';
	}
	//Hero Overlay
	$hero_overlay  = esc_attr( ot_get_option( 'cryptoland_'.$name.'_hero_overlay' ) );
	if ( $hero_overlay !='' )      {
		$theCSS .= '.page-id-'. get_the_ID().' .template-overlay{background-color: '.$hero_overlay.'!important; }';
	}

	//text alignment
	$hero_align = esc_attr( ot_get_option( 'cryptoland_'.$name.'_hero_text_align' ) );
	if ( $hero_align !='' )      {
		$theCSS .= '.page-id-'. get_the_ID().'.hero-fullwidth .hero-content{text-align: '.$hero_align.'!important; }';
		if ( $hero_align !='center' )      {
		$theCSS .= '.page-id-'. get_the_ID().'.hero-fullwidth .hero-content h1, .page-id-'. get_the_ID().'.hero-fullwidth .hero-content p{margin: 0 0 30px!important; }';
		}
	}
	//Hero Bg image
	$hero_bg = 	ot_get_option( 'cryptoland_'.$name.'_hero_bg', array() );
	if ( $hero_bg !='' ) {
	$theCSS .= '.page-id-'. get_the_ID().'.hero-fullwidth {';
	if(!empty($hero_bg['background-image']))	 { $theCSS .= 'background-image:url('.$hero_bg['background-image'].')!important;';}
	if(!empty($hero_bg['background-color']))	 { $theCSS .= 'background-color:'.$hero_bg['background-color'].'!important;';}
	if(!empty($hero_bg['background-size']))		 { $theCSS .= 'background-size:'.$hero_bg['background-size'].'!important;';}
	if(!empty($hero_bg['background-repeat']))	 { $theCSS .= 'background-repeat:'.$hero_bg['background-repeat'].'!important;';}
	if(!empty($hero_bg['background-position']))	 { $theCSS .= 'background-position:'.$hero_bg['background-position'].'!important;';}
	if(!empty($hero_bg['background-attachment'])){ $theCSS .= 'background-attachment:'.$hero_bg['background-attachment'].'!important;';}
	$theCSS .= '}';
	}
	//Hero Padding
	$hero_padding    = ( ot_get_option( 'cryptoland_'.$name.'_h_p', array() ) );
	if ( !empty($hero_padding) ) {
	$theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth {';
	$heropunit = (!empty($hero_padding['unit'])) ? $hero_padding['unit'] : 'px';
	if(!empty($hero_padding['top']))    { $theCSS .= 'padding-top:'.$hero_padding['top'].''.$heropunit.' !important;'; }
	if(!empty($hero_padding['bottom'])) { $theCSS .= 'padding-bottom:'.$hero_padding['bottom'].''.$heropunit.' !important;'; }
	if(!empty($hero_padding['right']))  { $theCSS .= 'padding-right:'.$hero_padding['right'].''.$heropunit.' !important;'; }
	if(!empty($hero_padding['left']))   { $theCSS .= 'padding-left:'.$hero_padding['left'].''.$heropunit.' !important;'; }
	$theCSS .= '}';
	}
	//Hero Margin
	$hero_margin  = ( ot_get_option( 'cryptoland_'.$name.'_h_m', array() ) );
	if ( !empty($hero_margin) ) {
	$theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth {';
	$heromunit = (!empty($hero_margin['unit'])) ? $hero_margin['unit'] : 'px';
	if(!empty($hero_margin['top']))   	{ $theCSS .= 'margin-top:'.$hero_margin['top'].''.$heromunit.' !important;'; }
	if(!empty($hero_margin['bottom']))	{ $theCSS .= 'margin-bottom:'.$hero_margin['bottom'].''.$heromunit.' !important;'; }
	if(!empty($hero_margin['right'])) 	{ $theCSS .= 'margin-right:'.$hero_margin['right'].''.$heromunit.' !important;'; }
	if(!empty($hero_margin['left']))  	{ $theCSS .= 'margin-left:'.$hero_margin['left'].''.$heromunit.' !important;'; }
	$theCSS .= '}';
	}
	//Hero Heading typograpy
	$heading = ot_get_option( 'cryptoland_'.$name.'_heading_typgrph', array() );
	if ( !empty($heading) ) :
   	$theCSS .= '.page-id-'. get_the_ID().' .hero-content .hero-innner-last-child .u-text-hero{';
	if ( !empty($heading['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $heading['font-color'] ).'!important;'; }
	if ( !empty($heading['font-family']) ) 		{ $theCSS .= 'font-family:"'.esc_attr( $heading['font-family'] ).'"!important;'; }
	if ( !empty($heading['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $heading['font-size'] ).'!important;'; }
	if ( !empty($heading['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $heading['font-style'] ).'!important;'; }
	if ( !empty($heading['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $heading['font-variant'] ).'!important;'; }
	if ( !empty($heading['font-weight']) ) 		{ $theCSS .= 'font-weight:'.esc_attr( $heading['font-weight'] ).'!important;'; }
	if ( !empty($heading['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $heading['letter-spacing'] ).'!important;'; }
	if ( !empty($heading['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $heading['line-height'] ).'!important;'; }
	if ( !empty($heading['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($heading['text-decoration']).'!important;'; }
	if ( !empty($heading['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($heading['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	if ( !empty($heading['font-size']) ) {
      $theCSS .= '@media screen and (max-width: 767px){ .page-id-'. get_the_ID().' .hero-content .hero-innner-last-child .u-text-hero{font-size: 27px !important; }}';
	}
	//Hero Heading 992px typograpy
	$mdheading = ot_get_option( 'cryptoland_'.$name.'_heading_992_typgrph', array() );
	if ( !empty($mdheading) ) :
   	$theCSS .= '@media screen and (max-width: 992px){ .page-id-'. get_the_ID().' .hero-content .hero-innner-last-child .u-text-hero{';
	if ( !empty($mdheading['font-color']) ) 	{ $theCSS .= 'color:'.esc_attr( $mdheading['font-color'] ).'!important;'; }
	if ( !empty($mdheading['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $mdheading['font-family'] ).'"!important;'; }
	if ( !empty($mdheading['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $mdheading['font-size'] ).'!important;'; }
	if ( !empty($mdheading['font-style']) ) 	{ $theCSS .= 'font-style:'.esc_attr( $mdheading['font-style'] ).'!important;'; }
	if ( !empty($mdheading['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $mdheading['font-variant'] ).'!important;'; }
	if ( !empty($mdheading['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $mdheading['font-weight'] ).'!important;'; }
	if ( !empty($mdheading['letter-spacing']) ) { $theCSS .= 'letter-spacing:'.esc_attr( $mdheading['letter-spacing'] ).'!important;'; }
	if ( !empty($mdheading['line-height'])) 	{ $theCSS .= 'line-height:'.esc_attr( $mdheading['line-height'] ).'!important;'; }
	if ( !empty($mdheading['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($mdheading['text-decoration']).'!important;'; }
	if ( !empty($mdheading['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($mdheading['text-transform']).'!important;'; }
   	$theCSS .= '}}';
	endif;
	//Hero Heading 768px typograpy
	$smheading = ot_get_option( 'cryptoland_'.$name.'_heading_768_typgrph', array() );
	if ( !empty($smheading) ) :
   	$theCSS .= '@media screen and (max-width: 768px){ .page-id-'. get_the_ID().' .hero-content .hero-innner-last-child .u-text-hero{';
	if ( !empty($smheading['font-color']) ) 	{ $theCSS .= 'color:'.esc_attr( $smheading['font-color'] ).'!important;'; }
	if ( !empty($smheading['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $smheading['font-family'] ).'"!important;'; }
	if ( !empty($smheading['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $smheading['font-size'] ).'!important;'; }
	if ( !empty($smheading['font-style']) ) 	{ $theCSS .= 'font-style:'.esc_attr( $smheading['font-style'] ).'!important;'; }
	if ( !empty($smheading['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $smheading['font-variant'] ).'!important;'; }
	if ( !empty($smheading['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $smheading['font-weight'] ).'!important;'; }
	if ( !empty($smheading['letter-spacing']) ) { $theCSS .= 'letter-spacing:'.esc_attr( $smheading['letter-spacing'] ).'!important;'; }
	if ( !empty($smheading['line-height'])) 	{ $theCSS .= 'line-height:'.esc_attr( $smheading['line-height'] ).'!important;'; }
	if ( !empty($smheading['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($smheading['text-decoration']).'!important;'; }
	if ( !empty($smheading['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($smheading['text-transform']).'!important;'; }
   	$theCSS .= '}}';
	endif;
	//Hero Heading 576px typograpy
	$xsheading = ot_get_option( 'cryptoland_'.$name.'_heading_576_typgrph', array() );
	if ( !empty($xsheading) ) :
   	$theCSS .= '@media screen and (max-width: 576px){ .page-id-'. get_the_ID().' .hero-content .hero-innner-last-child .u-text-hero{';
	if ( !empty($xsheading['font-color']) ) 	{ $theCSS .= 'color:'.esc_attr( $xsheading['font-color'] ).'!important;'; }
	if ( !empty($xsheading['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $xsheading['font-family'] ).'"!important;'; }
	if ( !empty($xsheading['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $xsheading['font-size'] ).'!important;'; }
	if ( !empty($xsheading['font-style']) ) 	{ $theCSS .= 'font-style:'.esc_attr( $xsheading['font-style'] ).'!important;'; }
	if ( !empty($xsheading['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $xsheading['font-variant'] ).'!important;'; }
	if ( !empty($xsheading['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $xsheading['font-weight'] ).'!important;'; }
	if ( !empty($xsheading['letter-spacing']) ) { $theCSS .= 'letter-spacing:'.esc_attr( $xsheading['letter-spacing'] ).'!important;'; }
	if ( !empty($xsheading['line-height'])) 	{ $theCSS .= 'line-height:'.esc_attr( $xsheading['line-height'] ).'!important;'; }
	if ( !empty($xsheading['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($xsheading['text-decoration']).'!important;'; }
	if ( !empty($xsheading['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($xsheading['text-transform']).'!important;'; }
   	$theCSS .= '}}';
	endif;
	//Hero Slogan
	$slogan = ot_get_option( 'cryptoland_'.$name.'_slogan_typgrph', array() );
	if ( !empty($slogan) ) :
   	$theCSS .= '.page-id-'. get_the_ID().' h6.u-text-sup{';
	if ( !empty($slogan['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $slogan['font-color'] ).'!important;'; }
	if ( !empty($slogan['font-family']) ) 		{ $theCSS .= 'font-family:"'.esc_attr( $slogan['font-family'] ).'"!important;'; }
	if ( !empty($slogan['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $slogan['font-size'] ).'!important;'; }
	if ( !empty($slogan['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $slogan['font-style'] ).'!important;'; }
	if ( !empty($slogan['font-variant']) ) 		{ $theCSS .= 'font-variant:'.esc_attr( $slogan['font-variant'] ).'!important;'; }
	if ( !empty($slogan['font-weight']) ) 		{ $theCSS .= 'font-weight:'.esc_attr( $slogan['font-weight'] ).'!important;'; }
	if ( !empty($slogan['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $slogan['letter-spacing'] ).'!important;'; }
	if ( !empty($slogan['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $slogan['line-height'] ).'!important;'; }
	if ( !empty($slogan['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($slogan['text-decoration']).'!important;'; }
	if ( !empty($slogan['text-transform']))		{ $theCSS .= 'text-transform:'.esc_attr($slogan['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//Hero Slogan
	$desc = ot_get_option( 'cryptoland_'.$name.'_desc_typgrph', array() );
	if ( !empty($desc) ) :
   	$theCSS .= '.page-id-'. get_the_ID().' .hero-content .hero-innner-last-child .u-text-lead{';
	if ( !empty($desc['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $desc['font-color'] ).'!important;'; }
	if ( !empty($desc['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $desc['font-family'] ).'"!important;'; }
	if ( !empty($desc['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $desc['font-size'] ).'!important;'; }
	if ( !empty($desc['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $desc['font-style'] ).'!important;'; }
	if ( !empty($desc['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $desc['font-variant'] ).'!important;'; }
	if ( !empty($desc['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $desc['font-weight'] ).'!important;'; }
	if ( !empty($desc['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $desc['letter-spacing'] ).'!important;'; }
	if ( !empty($desc['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $desc['line-height'] ).'!important;'; }
	if ( !empty($desc['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($desc['text-decoration']).'!important;'; }
	if ( !empty($desc['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($desc['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//Hero bread typgrph
	$desc = ot_get_option( 'cryptoland_'.$name.'_bread_typgrph', array() );
	if ( !empty($desc) ) :
   	$theCSS .= '.page-id-'. get_the_ID().' .breadcrumb span,.single .breadcrumb{';
	if ( !empty($desc['font-color']) ) 		{ $theCSS .= 'color:'.esc_attr( $desc['font-color'] ).'!important;'; }
	if ( !empty($desc['font-family']) ) 	{ $theCSS .= 'font-family:"'.esc_attr( $desc['font-family'] ).'"!important;'; }
	if ( !empty($desc['font-size']) ) 		{ $theCSS .= 'font-size:'.esc_attr( $desc['font-size'] ).'!important;'; }
	if ( !empty($desc['font-style']) ) 		{ $theCSS .= 'font-style:'.esc_attr( $desc['font-style'] ).'!important;'; }
	if ( !empty($desc['font-variant']) ) 	{ $theCSS .= 'font-variant:'.esc_attr( $desc['font-variant'] ).'!important;'; }
	if ( !empty($desc['font-weight']) ) 	{ $theCSS .= 'font-weight:'.esc_attr( $desc['font-weight'] ).'!important;'; }
	if ( !empty($desc['letter-spacing']) ) 	{ $theCSS .= 'letter-spacing:'.esc_attr( $desc['letter-spacing'] ).'!important;'; }
	if ( !empty($desc['line-height'])) 		{ $theCSS .= 'line-height:'.esc_attr( $desc['line-height'] ).'!important;'; }
	if ( !empty($desc['text-decoration']))	{ $theCSS .= 'text-decoration:'.esc_attr($desc['text-decoration']).'!important;'; }
	if ( !empty($desc['text-transform']))	{ $theCSS .= 'text-transform:'.esc_attr($desc['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
   	//Hero Button
	$hero_btn  = ot_get_option( 'cryptoland_'.$name.'_btn_color', array() );
	if(!empty($hero_btn) ) {
	if(!empty($hero_btn['normal']))		{ $theCSS .= '.hero-innner-last-child .custom-btn{ color:'.$hero_btn['normal'].'!important;}';}
	if(!empty($hero_btn['hover']))  	{ $theCSS .= '.hero-innner-last-child .custom-btn:hover{ color:'.$hero_btn['hover'].'!important;}';}
	if(!empty($hero_btn['bgnormal']))	{ $theCSS .= '.hero-innner-last-child .custom-btn{ background-color:'.$hero_btn['bgnormal'].'!important;padding:10px 15px;height:auto;border-radius: 6px;}';}
	if(!empty($hero_btn['bghover']))	{ $theCSS .= '.hero-innner-last-child .custom-btn:hover{ background-color:'.$hero_btn['bghover'].'!important;}';}
	}
	//Hero Bredcrumbs
	$bread  = ot_get_option( 'cryptoland_'.$name.'_breadcrubms_color', array() );
	if(!empty($bread)) {
	if(!empty($bread['color']))		{ $theCSS .= '.breadcrumb,.single .breadcrumb span a span, .breadcrumb span{ color:'.$bread['color'].'!important;}';}
	if(!empty($bread['icon']))  	{ $theCSS .= '.breadcrumb{ color:'.$bread['icon'].'!important;}';}
	if(!empty($bread['hover']))  	{ $theCSS .= '.breadcrumb span a span:hover{ color:'.$bread['hover'].'!important;}';}
	if(!empty($bread['current'])) 	{ $theCSS .= '.breadcrumb span.current-item{ color:'.$bread['current'].'!important;}';}
	}


	/*************************************************
	## PAGE SETTINGS
	*************************************************/

	//page navigation color
	$p_n_bgtype        	=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_nav_bgtype', true ) );
	$p_n_bg       		=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_nav_bgcolor', true ) );
	$p_n_i        	 	=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_nav_item', true ) );
	$p_n_i_h         	=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_nav_itemhover', true ) );
	//page nav padding and margin
	$p_n_p				=  get_post_meta(get_the_ID(), 'cryptoland_page_nav_padding');
	$p_n_m             	=  get_post_meta(get_the_ID(), 'cryptoland_page_nav_margin');

	//page navigation color
	if ( $p_n_bg !='' )  {
	$theCSS .= '.page-id-'.get_the_ID().' .header{background-color:'.$p_n_bg.' !important;}';
	}
	if ( $p_n_bgtype  =='trans' )  {
	$theCSS .= '.page-id-'.get_the_ID().' .header:not(.sticky){background-color:transparent !important;}';
	}
	if ( $p_n_i !='' )  {
	$theCSS .= '.page-id-'.get_the_ID().' .header ul > li > a {color:'.$p_n_i.' !important;}';
	}
	if ( $p_n_i_h   !='' )  {
	$theCSS .= '.page-id-'.get_the_ID().' .header ul > li > a:hover{color:'.$page_nav_hover.' !important;}';
	$theCSS .= '.page-id-'.get_the_ID().' .header ul > li > a:after{border-bottom-color:'.$page_nav_hover.' !important;}';
	}

	//page navigation padding
	if(!empty($p_n_p)) {
	$theCSS .= '.header{';
	if(!empty($p_n_p[0]))  	{ $theCSS .= 'padding-top:'.$p_n_p[0].' !important;'; }
	if(!empty($p_n_p[1])) 	{ $theCSS .= 'padding-right:'.$p_n_p[1].' !important;'; }
	if(!empty($p_n_p[2])) 	{ $theCSS .= 'padding-bottom:'.$p_n_p[2].' !important;'; }
	if(!empty($p_n_p[3])) 	{ $theCSS .= 'padding-left:'.$p_n_p[3].' !important;'; }
	$theCSS .= '}';
	}
	//page navigation margin
	if ( $p_n_m ) {
	$theCSS .= '.header{';
	if(!empty($p_n_m[0]))  	{ $theCSS .= 'margin-top:'.$p_n_m[0].' !important;'; }
	if(!empty($p_n_m[1]))  	{ $theCSS .= 'margin-right:'.$p_n_m[1].' !important;'; }
	if(!empty($p_n_m[2])) 	{ $theCSS .= 'margin-bottom:'.$p_n_m[2].' !important;'; }
	if(!empty($p_n_m[3]))  	{ $theCSS .= 'margin-left:'.$p_n_m[3].' !important;'; }
	$theCSS .= '}';
	}

	//page sticky navigation color
	$p_s_n			=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_sticky_nav', true ) );
	$p_s_n_bg		=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_sticky_nav_bg', true ) );
	$p_s_n_i   		=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_sticky_nav_item', true ) );
	$p_s_n_i_h 		=  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_sticky_nav_itemhover', true ) );
	//page sticky nav padding and margin
	$p_s_n_p		=  get_post_meta(get_the_ID(), 'cryptoland_page_sticky_nav_padding');
	$p_s_n_m        =  get_post_meta(get_the_ID(), 'cryptoland_page_sticky_nav_margin');

	//Page Sticky Navigation Color
	if ( $p_s_n == 'off' )  {
		  $theCSS .= '.page-id-'.get_the_ID().' .header.sticky-off.sticky {position: absolute !important;}';
		  $theCSS .= '.page-id-'.get_the_ID().' .header.sticky-off.sticky .logo__title {color: transparent !important;}';
	}
	if ( $p_s_n != 'off' )  {
		if ( $p_s_n_bg   !='' )  {
		  $theCSS .= '.page-id-'.get_the_ID().' .header.sticky {background-color:'.$p_s_n_bg.' !important;}';
		}
		if ( $p_s_n_i !='' )  {
		  $theCSS .= '.page-id-'.get_the_ID().' .header.sticky ul > li > a {color:'.$p_s_n_i.' !important;}';
		}
		if ( $p_s_n_i_h !='' )  {
		  $theCSS .= '.page-id-'.get_the_ID().' .header.sticky ul > li > a:hover{color:'.$p_s_n_i_h.' !important;}';
		  $theCSS .= '.page-id-'.get_the_ID().' .header.sticky ul > li > a:after{border-bottom-color:'.$p_s_n_i_h.' !important;}';
		}

		//page navigation padding
		if(!empty($p_s_n_p)) {
		$theCSS .= '.page-id-'.get_the_ID().' .header.sticky{';
		if(!empty($p_s_n_p[0]))  	{ $theCSS .= 'padding-top:'.$p_s_n_p[0].' !important;'; }
		if(!empty($p_s_n_p[1])) 	{ $theCSS .= 'padding-right:'.$p_s_n_p[1].' !important;'; }
		if(!empty($p_s_n_p[2])) 	{ $theCSS .= 'padding-bottom:'.$p_s_n_p[2].' !important;'; }
		if(!empty($p_s_n_p[3])) 	{ $theCSS .= 'padding-left:'.$p_s_n_p[3].' !important;'; }
		$theCSS .= '}';
		}
		//page navigation margin
		if ( $p_s_n_m ) {
		$theCSS .= '.page-id-'.get_the_ID().' .header.sticky{';
		if(!empty($p_s_n_m[0]))  	{ $theCSS .= 'margin-top:'.$p_s_n_m[0].' !important;'; }
		if(!empty($p_s_n_m[1]))  	{ $theCSS .= 'margin-right:'.$p_s_n_m[1].' !important;'; }
		if(!empty($p_s_n_m[2])) 	{ $theCSS .= 'margin-bottom:'.$p_s_n_m[2].' !important;'; }
		if(!empty($p_s_n_m[3]))  	{ $theCSS .= 'margin-left:'.$p_s_n_m[3].' !important;'; }
		$theCSS .= '}';
		}
	}


   //Hero Height
   $page_hero_height       =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_hero_height', true ) );
   //Hero Height
   $page_hero_align        =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_hero_text_align', true ) );
   //hero overlay
   $page_overlay_c         =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_hero_overlay', true ) );
   $page_overlay_opac      =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_hero_overlay_opacity', true ) );
   //Hero Slogan
   $page_slogan_c          =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_slogan_color', true ) );
   $page_slogan_fs         =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_slogan_fs', true ) );
   $page_slogan_mw         =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_slogan_mw', true ) );
   $page_slogan_mb         =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_slogan_mb', true ) );
   //Hero Heading
   $page_heading_c         =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_heading_color', true ) );
   $page_heading_fs        =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_heading_fs', true ) );
   $page_heading_mb        =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_heading_mb', true ) );
   //Hero Description
   $page_desc_c            =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_desc_color', true ) );
   $page_desc_fs           =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_desc_fs', true ) );
   $page_desc_mb           =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_desc_mb', true ) );
   //Hero Button
   $page_herobtn_id        =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_herobtn_icon_display', true ) );
   $page_herobtn_cbg       =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_herobtn_custombg', true ) );
   $page_herobtn_hbg       =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_herobtn_hoverbg', true ) );
   $page_herobtn_tc        =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_herobtn_titlecolor', true ) );
   $page_herobtn_th        =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_herobtn_titlehover', true ) );
   //Hero Bredcrumbs
   $page_bred_ic           =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_bred_iconcolor', true ) );
   $page_bred_tc           =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_bred_textcolor', true ) );
   $page_bred_htc          =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_bred_htextcolor', true ) );
   $page_bred_fs           =  esc_attr( get_post_meta(get_the_ID(), 'cryptoland_page_bred_fs', true ) );


	//Hero Height
	if ( $page_hero_height !='' ) {
	$theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth { height : '.$page_hero_height.'vh !important; max-height:100%; }';
	$theCSS .= '@media (max-width: 767px){.page-id-'.get_the_ID().'.hero-fullwidth { max-height : 60vh !important; }}';
	}

	//Hero background
	$hero_bg = 	rwmb_meta('cryptoland_page_hero_bg');
	$theCSS .= '.page-id-'. get_the_ID().'.hero-fullwidth {';
	if(!empty($hero_bg['image']))	 	{$theCSS .= 'background-image:url('.$hero_bg['image'].')!important;';}
	if(!empty($hero_bg['color']))	 	{$theCSS .= 'background-color:'.$hero_bg['color'].'!important;';}
	if(!empty($hero_bg['size']))		{$theCSS .= 'background-size:'.$hero_bg['size'].'!important;';}
	if(!empty($hero_bg['repeat']))	 	{$theCSS .= 'background-repeat:'.$hero_bg['repeat'].'!important;';}
	if(!empty($hero_bg['position']))	{$theCSS .= 'background-position:'.$hero_bg['position'].'!important;';}
	if(!empty($hero_bg['attachment']))	{$theCSS .= 'background-attachment:'.$hero_bg['attachment'].'!important;';}
	$theCSS .= '}';

	//Hero Padding
	$p_hero_p  =  get_post_meta(get_the_ID(), 'cryptoland_page_hero_padding');
	if(!empty($p_hero_p)) {
	$theCSS .= '.page-id-'.get_the_ID().' .hero-fullwidth{';
	if(!empty($p_hero_p[0]))  	{ $theCSS .= 'padding-top:'.$p_hero_p[0].' !important;'; }
	if(!empty($p_hero_p[1])) 	{ $theCSS .= 'padding-right:'.$p_hero_p[1].' !important;'; }
	if(!empty($p_hero_p[2])) 	{ $theCSS .= 'padding-bottom:'.$p_hero_p[2].' !important;'; }
	if(!empty($p_hero_p[3])) 	{ $theCSS .= 'padding-left:'.$p_hero_p[3].' !important;'; }
	$theCSS .= '}';
	}
	//Hero Margin
	$p_hero_m  =  get_post_meta(get_the_ID(), 'cryptoland_page_hero_margin');
	if ( $p_hero_m ) {
	$theCSS .= '.page-id-'.get_the_ID().' .hero-fullwidth{';
	if(!empty($p_hero_m[0]))  	{ $theCSS .= 'margin-top:'.$p_hero_m[0].' !important;'; }
	if(!empty($p_hero_m[1]))  	{ $theCSS .= 'margin-right:'.$p_hero_m[1].' !important;'; }
	if(!empty($p_hero_m[2])) 	{ $theCSS .= 'margin-bottom:'.$p_hero_m[2].' !important;'; }
	if(!empty($p_hero_m[3]))  	{ $theCSS .= 'margin-left:'.$p_hero_m[3].' !important;'; }
	$theCSS .= '}';
	}

   //Hero Overlay
   if ( $page_overlay_c !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .template-overlay{ background-color: '.$page_overlay_c.' !important; }';
   }
   if ( $page_overlay_c !='' && $page_overlay_opac !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .template-overlay{ opacity: '.$page_overlay_opac.' !important; }';
   }
   if ( $page_hero_align !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-content{ text-align: '.$page_hero_align.' !important; }';
   }

   if ( $page_slogan_c !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-sup{color: '.$page_slogan_c.'!important; }';
   }
   if ( $page_slogan_fs !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-sup{font-size: '.$page_slogan_fs.'px!important; }';
   }
   if ( $page_slogan_mw !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-sup{ max-width: ' .$page_slogan_mw.'px !important; margin-left:auto;margin-right:auto;padding-left:15px;padding-right:15px; }';
   }
   if ( $page_slogan_mb !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-sup{margin-bottom: '.$page_slogan_mb.'px!important; }';
   }
   //Hero Heading
   if ( $page_heading_c !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-hero{color: '.$page_heading_c.'!important; }';
   }
   if ( $page_heading_fs !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-hero{font-size: '.$page_heading_fs.'px!important; }';
   }
   if ( $page_heading_mb !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-hero{margin-bottom: '.$page_heading_mb.'px!important; }';
   }
   //Hero Description
   if ( $page_desc_c !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-lead{color: '.$page_desc_c.'!important; }';
   }
   if ( $page_desc_fs !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-lead{font-size: '.$page_desc_fs.'px!important; }';
   }
   if ( $page_desc_mb !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .u-text-lead{margin-bottom: '.$page_desc_mb.'px!important; }';
   }
   //Hero Button
   if ( $page_herobtn_id == true ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .custom-btn i{ display :none!important; }';
   }
   if ( $page_herobtn_cbg !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .custom-btn { background-color : '.$page_herobtn_cbg .' !important; border-color : '.$page_herobtn_cbg .' !important;padding:10px 15px;border-radius:4px;display:inline-block;  }';
   }
   if ( $page_herobtn_hbg !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .custom-btn:hover{ background-color : '.$page_herobtn_hbg .' !important; border-color : '.$page_herobtn_hbg .' !important; }';
   }
   if ( $page_herobtn_tc !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .custom-btn { color : '.$page_herobtn_tc .' !important; }';
   }
   if ( $page_herobtn_th !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .hero-innner-last-child .custom-btn:hover{ color : '.$page_herobtn_th .' !important; }';
   }
   //Hero Bredcrumbs
   if ( $page_bred_ic !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .breadcrumb,.page-id-'.get_the_ID().'.hero-fullwidth .breadcrumb span a span{ color : '.$page_bred_ic .' !important; }';
   }
   if ( $page_bred_tc !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .breadcrumb span{ color : '.$page_bred_tc .' !important; }';
   }
   if ( $page_bred_htc !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .breadcrumb span:hover{ color : '.$page_bred_htc .' !important; }';
   }
   if ( $page_bred_fs !='' ) {
      $theCSS .= '.page-id-'.get_the_ID().'.hero-fullwidth .breadcrumb span,.page-id-'.get_the_ID().'.hero-fullwidth .breadcrumb{ font-size : '.$page_bred_fs .'px !important; }';
   }

	/*************************************************
	## FOOTER WIDGET AREA SECTION SETTINGS
	*************************************************/

	$fw_d		= 	esc_attr( ot_get_option( 'cryptoland_widgetize_footer' ) );//widget area display
	$fw_bg		= 	ot_get_option( 'cryptoland_fw_bg', array() ) ;//background color
	$fw_c		= 	ot_get_option( 'cryptoland_fw_color', array() );//widget area padding
	$fw_pad		= 	ot_get_option( 'cryptoland_fw_padding', array() );//widget area padding
	$fw_mar		= 	ot_get_option( 'cryptoland_fw_margin', array() );//widget area margin

	if ( $fw_d != 'off' ) {
   	//widget area color
	$fw_c  = ot_get_option( 'cryptoland_'.$name.'_btn_color',array() );
	if(!empty($fw_c) ) {
	if(!empty($fw_c['heading']))	{ $theCSS .= '.footer-widget-area .widget-heading{ color:'.$fw_c['heading'].'!important;}'; }
	if(!empty($fw_c['text']))  		{ $theCSS .= '.footer-widget-area { color:'.$fw_c['text'].'!important;}'; }
	if(!empty($fw_c['link']))		{ $theCSS .= '.footer-widget-area a{ color:'.$fw_c['link'].'!important;}'; }
	if(!empty($fw_c['linkhover']))	{ $theCSS .= '.footer-widget-area a:hover{ color:'.$fw_c['linkhover'].'!important;}'; }
	}
	//widget area background
	if( $fw_bg !='' ) {
	$theCSS .= '.footer-widget-area{';
	if(!empty($fw_bg['background-image']))	 	{ $theCSS .= 'background-image:url('.$fw_bg['background-image'].')!important;'; }
	if(!empty($fw_bg['background-color']))	 	{ $theCSS .= 'background-color:'.$fw_bg['background-color'].'!important;'; }
	if(!empty($fw_bg['background-size']))		{ $theCSS .= 'background-size:'.$fw_bg['background-size'].'!important;'; }
	if(!empty($fw_bg['background-repeat']))	 	{ $theCSS .= 'background-repeat:'.$fw_bg['background-repeat'].'!important;'; }
	if(!empty($fw_bg['background-position']))	{ $theCSS .= 'background-position:'.$fw_bg['background-position'].'!important;'; }
	if(!empty($fw_bg['background-attachment']))	{ $theCSS .= 'background-attachment:'.$fw_bg['background-attachment'].'!important;'; }
	$theCSS .= '}';
	}
	//widget area Padding
	if(!empty($fw_pad)) {
	$theCSS .= '.footer-widget-area{';
	if(!empty($fw_pad['unit']))   	{ $fw_padu  = $fw_pad['unit'];}else{ $fw_padu = 'px'; }
	if(!empty($fw_pad['top']))    	{ $theCSS .= 'padding-top:'.$fw_pad['top'].''.$fw_padu.' !important;'; }
	if(!empty($fw_pad['bottom'])) 	{ $theCSS .= 'padding-bottom:'.$fw_pad['bottom'].''.$fw_padu.' !important;'; }
	if(!empty($fw_pad['right']))  	{ $theCSS .= 'padding-right:'.$fw_pad['right'].''.$fw_padu.' !important;'; }
	if(!empty($fw_pad['left']))   	{ $theCSS .= 'padding-left:'.$fw_pad['left'].''.$fw_padu.' !important;'; }
	$theCSS .= '}';
	}
	//widget area Margin
	if(!empty($fw_mar)) {
	$theCSS .= '.footer-widget-area{';
	if(!empty($fw_mar['unit']))   	{ $fw_maru  = $fw_mar['unit'];}else{ $fw_maru = 'px'; }
	if(!empty($fw_mar['top']))    	{ $theCSS .= 'margin-top:'.$fw_mar['top'].''.$fw_maru.' !important;'; }
	if(!empty($fw_mar['bottom'])) 	{ $theCSS .= 'margin-bottom:'.$fw_mar['bottom'].''.$fw_maru.' !important;'; }
	if(!empty($fw_mar['right']))  	{ $theCSS .= 'margin-right:'.$fw_mar['right'].''.$fw_maru.' !important;'; }
	if(!empty($fw_mar['left']))   	{ $theCSS .= 'margin-left:'.$fw_mar['left'].''.$fw_maru.' !important;'; }
	$theCSS .= '}';
	}

	/*************************************************
	## PAGE FOOTER WIDGET AREA  SETTINGS
	*************************************************/

	if ( is_page() ) {

		//page widgetize text color
		$p_fw_t_c   =  get_post_meta(get_the_ID(), 'cryptoland_p_fw_t_c', true);
		if ( $p_fw_t_c !='' ) { $theCSS .= '.footer-widget-area { color: '. $p_fw_t_c.'; }';}
		//page widgetize background
		$p_fw_bg  =  get_post_meta(get_the_ID(), 'cryptoland_p_fw_bg');
		if ( $p_fw_bg ) {
			$theCSS .= '.footer-widget-area{';
			if(!empty($p_fw_bg['image']))	 	{$theCSS .= 'background-image:url('.$p_fw_bg['image'].')!important;';}
			if(!empty($p_fw_bg['color']))	 	{$theCSS .= 'background-color:'.$p_fw_bg['color'].'!important;';}
			if(!empty($p_fw_bg['size']))		{$theCSS .= 'background-size:'.$p_fw_bg['size'].'!important;';}
			if(!empty($p_fw_bg['repeat']))	 	{$theCSS .= 'background-repeat:'.$p_fw_bg['repeat'].'!important;';}
			if(!empty($p_fw_bg['position']))	{$theCSS .= 'background-position:'.$p_fw_bg['position'].'!important;';}
			if(!empty($p_fw_bg['attachment']))	{$theCSS .= 'background-attachment:'.$p_fw_bg['attachment'].'!important;';}
			$theCSS .= '}';
		}
		//page widgetize footer padding
		$p_fw_p  =  get_post_meta(get_the_ID(), 'cryptoland_p_fw_p');
		if ( $p_fw_p ) 	{
			$theCSS .= '.footer-widget-area{';
			if(!empty($p_fw_p[0]))  { $theCSS .= 'padding-top:'.$p_fw_p[0].' !important;'; }
			if(!empty($p_fw_p[1])) 	{ $theCSS .= 'padding-right:'.$p_fw_p[1].' !important;'; }
			if(!empty($p_fw_p[2])) 	{ $theCSS .= 'padding-bottom:'.$p_fw_p[2].' !important;'; }
			if(!empty($p_fw_p[3])) 	{ $theCSS .= 'padding-left:'.$p_fw_p[3].' !important;'; }
			$theCSS .= '}';
		}
		//page widgetize footer margin
		$p_fw_m  =  get_post_meta(get_the_ID(), 'cryptoland_p_fw_m');
		if ( $p_fw_m ) 	{
			$theCSS .= '.footer-widget-area{';
			if(!empty($p_fw_m[0]))  { $theCSS .= 'margin-top:'.$p_fw_m[0].' !important;'; }
			if(!empty($p_fw_m[1]))  { $theCSS .= 'margin-right:'.$p_fw_m[1].' !important;'; }
			if(!empty($p_fw_m[2])) 	{ $theCSS .= 'margin-bottom:'.$p_fw_m[2].' !important;'; }
			if(!empty($p_fw_m[3]))  { $theCSS .= 'margin-left:'.$p_fw_m[3].' !important;'; }
			$theCSS .= '}';
		}
	}//end if is_page
	}//end if fw display


	/*************************************************
	## FOOTER COPYRIGHT  SETTINGS
	*************************************************/

	$f_c_d	=  esc_attr( ot_get_option( 'cryptoland_copyright_display' ) );
	if ( $f_c_d != 'off' ) {
   	//copyright section color
	$fw_c  = ot_get_option( 'cryptoland_copyright_color',array() );
	if(!empty($f_c) ) {
	if(!empty($f_c['bg']))  		{$theCSS .= '.copyright { color:'.$f_c['bg'].'!important;}';}
	if(!empty($f_c['text']))		{$theCSS .= '.copyright{ background-color:'.$f_c['text'].'!important;}';}
	}
	//copyright section Padding
	$f_c_pad = ( ot_get_option( 'cryptoland_c_padding', array() ) );
	if(!empty($f_c_pad)) {
	$theCSS .= '.copyright{';
	if(!empty($f_c_pad['unit']))   	{ $f_c_padu  = $f_c_pad['unit'];}else{ $f_c_padu = 'px'; }
	if(!empty($f_c_pad['top']))    	{ $theCSS .= 'padding-top:'.$f_c_pad['top'].''.$f_c_padu.' !important;'; }
	if(!empty($f_c_pad['bottom'])) 	{ $theCSS .= 'padding-bottom:'.$f_c_pad['bottom'].''.$f_c_padu.' !important;'; }
	if(!empty($f_c_pad['right']))  	{ $theCSS .= 'padding-right:'.$f_c_pad['right'].''.$f_c_padu.' !important;'; }
	if(!empty($f_c_pad['left']))   	{ $theCSS .= 'padding-left:'.$f_c_pad['left'].''.$f_c_padu.' !important;'; }
	$theCSS .= '}';
	}
	//copyright section Margin
	$f_c_mar  = ( ot_get_option( 'cryptoland_c_margin', array() ) );
	if(!empty($f_c_mar)) {
	$theCSS .= '.copyright{';
	if(!empty($f_c_mar['unit']))   	{ $f_c_maru  = $f_c_mar['unit'];}else{ $f_c_maru = 'px'; }
	if(!empty($f_c_mar['top']))    	{ $theCSS .= 'margin-top:'.$f_c_mar['top'].''.$f_c_maru.' !important;'; }
	if(!empty($f_c_mar['bottom'])) 	{ $theCSS .= 'margin-bottom:'.$f_c_mar['bottom'].''.$f_c_maru.' !important;'; }
	if(!empty($f_c_mar['right']))  	{ $theCSS .= 'margin-right:'.$f_c_mar['right'].''.$f_c_maru.' !important;'; }
	if(!empty($f_c_mar['left']))   	{ $theCSS .= 'margin-left:'.$f_c_mar['left'].''.$f_c_maru.' !important;'; }
	$theCSS .= '}';
	}

	/*************************************************
	## PAGE FOOTER COPYRIGHT  SETTINGS
	*************************************************/

	if ( is_page() ) {
	$p_c_bg   	=  get_post_meta(get_the_ID(), 'cryptoland_p_c_bg', true);
	$p_c_c   	=  get_post_meta(get_the_ID(), 'cryptoland_c_t_c', true);
	$p_c_p   	=  get_post_meta(get_the_ID(), 'cryptoland_p_c_p');
	$p_c_m   	=  get_post_meta(get_the_ID(), 'cryptoland_p_c_m');

	if ( $p_c_bg !='' ) 	{ $theCSS .= '.copyright { background-color: '.$p_c_bg.'; }';}
	if ( $p_c_c !='' ) 		{ $theCSS .= '.copyright { color: '.$p_c_c.'; }';}
	//page copyright padding
	if(!empty($p_c_p)) {
	$theCSS .= '.copyright{';
	if(!empty($p_c_p[0]))  	{ $theCSS .= 'padding-top:'.$p_c_p[0].' !important;'; }
	if(!empty($p_c_p[1])) 	{ $theCSS .= 'padding-right:'.$p_c_p[1].' !important;'; }
	if(!empty($p_c_p[2])) 	{ $theCSS .= 'padding-bottom:'.$p_c_p[2].' !important;'; }
	if(!empty($p_c_p[3])) 	{ $theCSS .= 'padding-left:'.$p_c_p[3].' !important;'; }
	$theCSS .= '}';
	}
	//page copyright margin
	if ( $p_c_m ) {
	$theCSS .= '.copyright{';
	if(!empty($p_c_m[0]))  	{ $theCSS .= 'margin-top:'.$p_c_m[0].' !important;'; }
	if(!empty($p_c_m[1]))  	{ $theCSS .= 'margin-right:'.$p_c_m[1].' !important;'; }
	if(!empty($p_c_m[2])) 	{ $theCSS .= 'margin-bottom:'.$p_c_m[2].' !important;'; }
	if(!empty($p_c_m[3]))  	{ $theCSS .= 'margin-left:'.$p_c_m[3].' !important;'; }
	$theCSS .= '}';
	}
	}//end if is_page
	}//end if copyright display


   /*************************************************
   ## TYPOGRAPHY SETTINGS
   *************************************************/

	$typgrph = ot_get_option( 'cryptoland_typgrph', array() );
	if ( !empty($typgrph) ) :
   	$theCSS .= 'body{';
      	if ( !empty($typgrph['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph['font-color'] ).'!important;'; }
      	if ( !empty($typgrph['font-family']) ) {$theCSS .= 'font-family:"'.esc_attr( $typgrph['font-family'] ).'"!important;'; }
      	if ( !empty($typgrph['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph['font-size'] ).'!important;'; }
      	if ( !empty($typgrph['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph['font-style'] ).'!important;'; }
      	if ( !empty($typgrph['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph['line-height'] ).'!important;'; }
      	if ( !empty($typgrph['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph['text-decoration']).'!important;'; }
      	if ( !empty($typgrph['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//
	$typgrph1 = ot_get_option( 'cryptoland_typgrph1', array() );
	if ( !empty($typgrph1) ) :
   	$theCSS .= 'body h1{';
      	if ( !empty($typgrph1['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph1['font-color'] ).'!important;'; }
      	if ( !empty($typgrph1['font-family']) ) {$theCSS .= 'font-family:"'.esc_attr( $typgrph1['font-family'] ).'"!important;'; }
      	if ( !empty($typgrph1['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph1['font-size'] ).'!important;'; }
      	if ( !empty($typgrph1['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph1['font-style'] ).'!important;'; }
      	if ( !empty($typgrph1['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph1['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph1['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph1['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph1['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph1['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph1['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph1['line-height'] ).'!important;'; }
      	if ( !empty($typgrph1['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph1['text-decoration']).'!important;'; }
      	if ( !empty($typgrph1['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph1['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//
	$typgrph2 = ot_get_option( 'cryptoland_typgrph2', array() );
	if ( !empty($typgrph2) ) :
   	$theCSS .= 'body h2{';
      	if ( !empty($typgrph2['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph2['font-color'] ).'!important;'; }
      	if ( !empty($typgrph2['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $typgrph2['font-family'] ).'!important;'; }
      	if ( !empty($typgrph2['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph2['font-size'] ).'!important;'; }
      	if ( !empty($typgrph2['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph2['font-style'] ).'!important;'; }
      	if ( !empty($typgrph2['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph2['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph2['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph2['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph2['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph2['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph2['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph2['line-height'] ).'!important;'; }
      	if ( !empty($typgrph2['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph2['text-decoration']).'!important;'; }
      	if ( !empty($typgrph2['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph2['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//
	$typgrph3 = ot_get_option( 'cryptoland_typgrph3', array() );
	if ( !empty($typgrph3) ) :
   	$theCSS .= 'body h3{';
      	if ( !empty($typgrph3['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph3['font-color'] ).'!important;'; }
      	if ( !empty($typgrph3['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $typgrph3['font-family'] ).'!important;'; }
      	if ( !empty($typgrph3['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph3['font-size'] ).'!important;'; }
      	if ( !empty($typgrph3['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph3['font-style'] ).'!important;'; }
      	if ( !empty($typgrph3['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph3['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph3['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph3['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph3['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph3['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph3['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph3['line-height'] ).'!important;'; }
      	if ( !empty($typgrph3['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph3['text-decoration']).'!important;'; }
      	if ( !empty($typgrph3['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph3['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//
	$typgrph4 = ot_get_option( 'cryptoland_typgrph4', array() );
	if ( !empty($typgrph4) ) :
   	$theCSS .= 'body h4{';
      	if ( !empty($typgrph4['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph4['font-color'] ).'!important;'; }
      	if ( !empty($typgrph4['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $typgrph4['font-family'] ).'!important;'; }
      	if ( !empty($typgrph4['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph4['font-size'] ).'!important;'; }
      	if ( !empty($typgrph4['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph4['font-style'] ).'!important;'; }
      	if ( !empty($typgrph4['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph4['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph4['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph4['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph4['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph4['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph4['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph4['line-height'] ).'!important;'; }
      	if ( !empty($typgrph4['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph4['text-decoration']).'!important;'; }
      	if ( !empty($typgrph4['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph4['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//
	$typgrph5 = ot_get_option( 'cryptoland_typgrph5', array() );
	if ( !empty($typgrph5) ) :
   	$theCSS .= 'body h5{';
      	if ( !empty($typgrph5['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph5['font-color'] ).'!important;'; }
      	if ( !empty($typgrph5['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $typgrph5['font-family'] ).'!important;'; }
      	if ( !empty($typgrph5['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph5['font-size'] ).'!important;'; }
      	if ( !empty($typgrph5['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph5['font-style'] ).'!important;'; }
      	if ( !empty($typgrph5['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph5['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph5['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph5['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph5['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph5['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph5['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph5['line-height'] ).'!important;'; }
      	if ( !empty($typgrph5['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph5['text-decoration']).'!important;'; }
      	if ( !empty($typgrph5['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph5['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	//
	$typgrph6 = ot_get_option( 'cryptoland_typgrph6', array() );
	if ( !empty($typgrph6) ) :
   	$theCSS .= 'body h6{';
      	if ( !empty($typgrph6['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph6['font-color'] ).'!important;'; }
      	if ( !empty($typgrph6['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $typgrph6['font-family'] ).'!important;'; }
      	if ( !empty($typgrph6['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph6['font-size'] ).'!important;'; }
      	if ( !empty($typgrph6['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph6['font-style'] ).'!important;'; }
      	if ( !empty($typgrph6['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph6['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph6['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph6['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph6['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph6['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph6['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph6['line-height'] ).'!important;'; }
      	if ( !empty($typgrph6['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph6['text-decoration']).'!important;'; }
      	if ( !empty($typgrph6['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph6['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;
	$typgrph7 = ot_get_option( 'cryptoland_typgrph7', array() );
	if ( !empty($typgrph7) ) :
   	$theCSS .= 'body p{';
      	if ( !empty($typgrph7['font-color']) ) {$theCSS .= 'color:'.esc_attr( $typgrph7['font-color'] ).'!important;'; }
      	if ( !empty($typgrph7['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $typgrph7['font-family'] ).'!important;'; }
      	if ( !empty($typgrph7['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $typgrph7['font-size'] ).'!important;'; }
      	if ( !empty($typgrph7['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $typgrph7['font-style'] ).'!important;'; }
      	if ( !empty($typgrph7['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $typgrph7['font-variant'] ).'!important;'; }
      	if ( !empty($typgrph7['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $typgrph7['font-weight'] ).'!important;'; }
      	if ( !empty($typgrph7['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $typgrph7['letter-spacing'] ).'!important;'; }
      	if ( !empty($typgrph7['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $typgrph7['line-height'] ).'!important;'; }
      	if ( !empty($typgrph7['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($typgrph7['text-decoration']).'!important;'; }
      	if ( !empty($typgrph7['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($typgrph7['text-transform']).'!important;'; }
   	$theCSS .= '}';
	endif;

    /* Add CSS to style.css */

    wp_add_inline_style( 'cryptoland-update', $theCSS );
	}

add_action( 'wp_enqueue_scripts', 'cryptoland_theme_css_options' );
