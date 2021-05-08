<?php
if ( ! function_exists( 'rwmb_meta' ) || ! is_admin() )
return false;

add_filter( 'rwmb_meta_boxes', 'cryptoland_register_meta_boxes' );
function cryptoland_register_meta_boxes( $meta_boxes ) {



$meta_boxes = array();

/* ----------------------------------------------------- */
// PAGE HEADER COLOR
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'title' 	=> esc_html__( 'Header - Footer', 'cryptoland' ),
	'id' 		=> 'pageheadersettings',
	'pages' 	=> array( 'page' ),
	'context'	=> 'normal',
	'tab_style' => 'box',
	'priority'	=> 'high',
	'tabs'    	=> array(
    'tab1' 		=> 'Page Template',
    'tab2' 		=> 'Header General',
    'tab3' 		=> 'Header Static',
    'tab4' 		=> 'Header Sticky',
    'tab5' 		=> 'Header Buttons',
    'tab6' 		=> 'Logo Customize',
    'tab7' 		=> 'Metabox Menu',
    'tab8' 		=> 'Footer Widgetize',
    'tab9' 		=> 'Footer Copyright',
	),
	'fields' 	=> array(
		// tab1
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_header_section',
			'name'		=> esc_html__( 'Page Template Options', 'cryptoland' ),
			'tab'  		=> 'tab1',
		),
		array(
			'name' 			=> esc_html__('Select Template Style', 'cryptoland'),
			'desc' 			=> esc_html__('Select template style', 'cryptoland'),
			'id'   			=> 'cryptoland_page_style',
			'type' 			=> 'select',
			'options'  		=> array(
				'1' 		=> esc_html__( 'Home Page 1', 'cryptoland' ),
				'2' 		=> esc_html__( 'Home Page 2', 'cryptoland' ),
				'3' 		=> esc_html__( 'Home Page 3', 'cryptoland' ),
				'4' 		=> esc_html__( 'Home Page 4', 'cryptoland' ),
				'5' 		=> esc_html__( 'Home Page 5', 'cryptoland' ),
				'6' 		=> esc_html__( 'Home Page 6', 'cryptoland' ),
			),
		 	'tab'  			=> 'tab1',
			'std'     		=> '1'
		),
		// tab1
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_header_section',
			'name'		=> esc_html__( 'Header Options', 'cryptoland' ),
			'tab'  		=> 'tab2',
		),
		array(
			'name' 			=> esc_html__('Header visibility', 'cryptoland'),
			'desc' 			=> esc_html__('Select header visibility', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_display',
			'type' 			=> 'select',
			'options'  		=> array(
				'on' 		=> esc_html__( 'Show', 'cryptoland' ),
				'off' 		=> esc_html__( 'Hide', 'cryptoland' ),
			),
		 	'tab'  			=> 'tab2',
			'std'     		=> 'show'
		),

		// tab3 Header Static
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_sticky_nav_section',
			'name'		=> esc_html__( 'Header Static', 'cryptoland' ),
			'tab'  		=> 'tab3',
		),
		array(
			'name' 			=> esc_html__('Static menu background type', 'cryptoland'),
			'desc' 			=> esc_html__('Select menu background type', 'cryptoland'),
			'id'   			=> 'cryptoland_page_nav_bgtype',
			'type' 			=> 'select',
			'options'  		=> array(
				'trans' 	=> esc_html__( 'Transparent', 'cryptoland' ),
				'bg' 		=> esc_html__( 'Bg Color', 'cryptoland' ),
			),
			'std'     		=> 'trans',
			'tab'  			=> 'tab3',
		),
		// Static menu
		array(
			'name' 		=> esc_html__( 'Static menu background color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_nav_bgcolor',
			'type' 		=> 'color',
			 'tab'  	=> 'tab3',
		),
		array(
			'name' 		=> esc_html__( 'Static menu item color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_nav_color',
			'type' 		=> 'color',
			 'tab'  	=> 'tab3',
		),
		array(
			'name' 		=> esc_html__( 'Static menu item hover color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_nav_hovercolor',
			'type' 		=> 'color',
			 'tab'  	=> 'tab3',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab3',
		),
		array(
			'name'		=> esc_html__( 'Static menu padding', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the padding of the theme header navigation for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_page_nav_padding',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab3',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab3',
		),
		array(
			'name'		=> esc_html__( 'Static menu margin', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the margin of the theme header navigation for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_page_nav_margin',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab3',
		),
		// tab4 Header Sticky
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_sticky_nav_section',
			'name'		=> esc_html__( 'Header Sticky', 'cryptoland' ),
			'tab'  		=> 'tab4',
		),
		array(
			'name' 			=> esc_html__('Sticky Header ?', 'cryptoland'),
			'desc' 			=> esc_html__('Disable or enable sticky header', 'cryptoland'),
			'id'   			=> 'cryptoland_page_sticky_nav',
			'type' 			=> 'select',
			'options'  		=> array(
				'on' 		=> esc_html__( 'Yes', 'cryptoland' ),
				'off' 		=> esc_html__( 'No', 'cryptoland' ),
			),
			'std'     		=> 'bg',
			'tab'  			=> 'tab4'
		),
		// color
		array(
			'name' 		=> esc_html__( 'Sticky menu background color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_sticky_nav_bg',
			'type' 		=> 'color',
			 'tab'  	=> 'tab4',
		),
		array(
			'name' 		=> esc_html__( 'Sticky menu item color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_sticky_nav_item',
			'type' 		=> 'color',
			'tab'  		=> 'tab4',
		),
		array(
			'name' 		=> esc_html__( 'Sticky menu item hover color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_sticky_nav_itemhover',
			'type' 		=> 'color',
			 'tab'  	=> 'tab4',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab4',
		),
		array(
			'name'		=> esc_html__( 'Sticky menu padding', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the padding of the theme sticky navigation for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_page_sticky_nav_padding',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab4',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab4',
		),
		array(
			'name'		=> esc_html__( 'Sticky menu margin', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the margin of the theme sticky navigation for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_page_sticky_nav_margin',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab4',
		),
		// tab5 Header buttons
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_navbtn_section',
			'name'		=> esc_html__( 'Header Buttons', 'cryptoland' ),
			'tab'  		=> 'tab5',
		),
		array(
			'name' 			=> esc_html__('Show language ?', 'cryptoland'),
			'desc' 			=> esc_html__('Disable or enable first button', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_lang',
			'type' 			=> 'select',
			'options'  		=> array(
				'on' 		=> esc_html__( 'Yes', 'cryptoland' ),
				'off' 		=> esc_html__( 'No', 'cryptoland' ),
			),
			'std'     		=> 'bg',
			'tab'  			=> 'tab5',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab5',
		),
		array(
			'name' 			=> esc_html__('Show signin button ?', 'cryptoland'),
			'desc' 			=> esc_html__('Disable or enable first button', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_btnsignin',
			'type' 			=> 'select',
			'options'  		=> array(
				'' 		    => esc_html__( 'Select a option', 'cryptoland' ),
				'on' 		=> esc_html__( 'Yes', 'cryptoland' ),
				'off' 		=> esc_html__( 'No', 'cryptoland' ),
			),
		 	'tab'  			=> 'tab5',
			'std'     		=> ''
		),
        array(
            'name' 			=> esc_html__('Signin button target', 'cryptoland'),
            'desc' 			=> esc_html__('You can change signin button target.', 'cryptoland'),
            'id'   			=> 'cryptoland_page_header_btnsigin_target',
            'type' 			=> 'select',
            'options'  		=> array(
                '' 		    => esc_html__( 'Select a target', 'cryptoland' ),
                '_target' 		=> esc_html__( 'Blank', 'cryptoland' ),
                '_self' 		=> esc_html__( 'Self', 'cryptoland' ),
                '_parent' 		=> esc_html__( 'Parent', 'cryptoland' ),
                '_top' 		=> esc_html__( 'Top', 'cryptoland' ),
            ),
            'tab'  			=> 'tab5',
            'std'     		=> ''
        ),
		array(
			'name' 			=> esc_html__('Button title and URL', 'cryptoland'),
			'desc' 			=> esc_html__('You can change first button title and link.', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_btnsignin_title',
			'type'    		=> 'text_list',
			'clone'    		=> false,
			'size' 			=> 100,
			'options' 		=> array(
				'Sign in'   => esc_html__('Title', 'cryptoland'),
				'http://' 	=> esc_html__('URL', 'cryptoland'),
			),
			'tab'  			=> 'tab5',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab5',
		),
		array(
			'name' 			=> esc_html__('Show signup button ?', 'cryptoland'),
			'desc' 			=> esc_html__('Disable or enable first button', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_btnsignup',
			'type' 			=> 'select',
			'options'  		=> array(
				'' 		    => esc_html__( 'Select a option', 'cryptoland' ),
				'on' 		=> esc_html__( 'Yes', 'cryptoland' ),
				'off' 		=> esc_html__( 'No', 'cryptoland' ),
			),
		 	'tab'  			=> 'tab5',
			'std'     		=> ''
		),
		array(
			'name' 			=> esc_html__('Button title and URL', 'cryptoland'),
			'desc' 			=> esc_html__('You can change second button title and link.', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_btnsignup_title',
			'type'    		=> 'text_list',
			'class'    		=> 'btn-display-none',
			'clone'    		=> false,
			'size' 			=> 100,
			'options' 		=> array(
				'Sign up'   => esc_html__('Title', 'cryptoland'),
				'http://' 	=> esc_html__('URL', 'cryptoland'),
			),
			'tab'  			=> 'tab5',
		),
        array(
            'name' 			=> esc_html__('Signup button target', 'cryptoland'),
            'desc' 			=> esc_html__('You can change signup button target.', 'cryptoland'),
            'id'   			=> 'cryptoland_page_header_btnsignup_target',
            'type' 			=> 'select',
            'options'  		=> array(
                '' 		    => esc_html__( 'Select a target', 'cryptoland' ),
                '_target' 		=> esc_html__( 'Blank', 'cryptoland' ),
                '_self' 		=> esc_html__( 'Self', 'cryptoland' ),
                '_parent' 		=> esc_html__( 'Parent', 'cryptoland' ),
                '_top' 		=> esc_html__( 'Top', 'cryptoland' ),
            ),
            'tab'  			=> 'tab5',
            'std'     		=> ''
        ),
		array(
			'name' 			=> esc_html__('Show telegram button ?', 'cryptoland'),
			'desc' 			=> esc_html__('Disable or enable telegram button', 'cryptoland'),
			'id'   			=> 'cryptoland_page_header_btntel_display',
			'type' 			=> 'select',
			'options'  		=> array(
				'' 		    => esc_html__( 'Select a option', 'cryptoland' ),
				'on' 		=> esc_html__( 'Yes', 'cryptoland' ),
				'off' 		=> esc_html__( 'No', 'cryptoland' ),
			),
		 	'tab'  			=> 'tab5',
			'std'     		=> ''
		),
		array(
			'name' 		=> esc_html__( 'Telegram button image', 'cryptoland' ),
			'id'      	=> 'cryptoland_page_header_btntelimg',
			'desc' 		=> esc_html__( 'Use this option to change the telegram button image', 'cryptoland' ),
			'type'    	=> 'image_advanced',
			'max_file_uploads' 	=> 1,
			'tab'  		=> 'tab5',
		),
		array(
			'name'		=> esc_html__( 'Telegram button URL', 'cryptoland' ),
			'desc' 		=> esc_html__('Add link to telegram button', 'cryptoland'),
			'id'		=> 'cryptoland_page_header_btntelurl',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'tab'  		=> 'tab5',
		),
		// tab6 Logo Customization
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_logo_section',
			'name'		=> esc_html__( 'Page Logo Customization', 'cryptoland' ),
			'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Static nav logo', 'cryptoland' ),
			'id'      	=> 'cryptoland_page_logo',
			'desc' 		=> esc_html__( 'Use this option to change the static navigation image logo for this page', 'cryptoland' ),
			'type'    	=> 'image_advanced',
			'max_file_uploads' 	=> 1,
			'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Sticky nav logo', 'cryptoland' ),
			'id'      	=> 'cryptoland_page_slogo',
			'desc' 		=> esc_html__( 'Use this option to change the sticky navigation image logo for this page', 'cryptoland' ),
			'type'    	=> 'image_advanced',
			'max_file_uploads' 	=> 1,
			'tab'  		=> 'tab6',
		),
		array(
			'name' 			=> esc_html__('Image logo size', 'cryptoland'),
			'desc' 			=> esc_html__('Use simple number.Default logo width : 45 height : 51', 'cryptoland'),
			'id'   			=> 'cryptoland_page_logo_size',
			'type'    		=> 'text_list',
			'class'    		=> 'default-column',
			'clone'    		=> false,
			'options' 		=> array(
				'width'   	=> 'Logo width',
				'height' 	=> 'Logo height',
			),
			'tab'  			=> 'tab6',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab6',
		),
		array(
			'name'		=> esc_html__( 'Navigation text logo', 'cryptoland' ),
			'desc' 		=> esc_html__('Use this option to change the navigation text logo for this page', 'cryptoland'),
			'id'		=> 'cryptoland_page_tlogo',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'tab'  		=> 'tab6',
		),
		// tab7 Logo Customization
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_metboxmenu_section',
			'name'		=> esc_html__( 'Metabox Menu', 'cryptoland' ),
			'tab'  		=> 'tab7',
		),
		array(
			'name' 		=> esc_html__( 'Disable Metabox Menu', 'cryptoland' ),
			'desc' 		=> esc_html__('This option for using theme primary menu.If checked, the metabox menu will be disabled.', 'cryptoland'),
			'id'   		=> 'cryptoland_page_metabox_menu_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab7',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab7',
		),
		array(
			'name' 			=> esc_html__('Metabox Menu', 'cryptoland'),
			'desc' 			=> esc_html__('You can create different menu for this page.', 'cryptoland'),
			'id'   			=> 'cryptoland_page_metabox_menu',
			'type'    		=> 'key_value',
			'clone' 		=> true,
			'size' 			=> 40,
			'placeholder' 	=> array(
				'key' 		=> esc_html__('Menu title', 'cryptoland'),
				'value' 	=> esc_html__('Menu URL/link', 'cryptoland'),
			),
			'tab'  			=> 'tab7',
		),
		// tab8 Footer Widget Area
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_widget_section',
			'name'		=> esc_html__( 'Page Footer Widget Area', 'cryptoland' ),
			'tab'  		=> 'tab8',
		),
		array(
			'name' 		=> esc_html__('Widget area visibility', 'cryptoland'),
			'desc' 		=> esc_html__('Select widget area visibility for this page.default: hide', 'cryptoland'),
			'id'      	=> 'cryptoland_page_widgetize_footer',
			'type'    	=> 'select',
			'options' 	=> array(
				'' 		=> esc_html__('Select a option', 'cryptoland'),
				'off' 	=> esc_html__('Hide', 'cryptoland'),
				'on' 	=> esc_html__('Show', 'cryptoland'),
			),
			'std' 		=> 'off',
			'tab'  		=> 'tab8',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab8',
		),
		array(
			'name' 		=> esc_html__( 'Widget area background', 'cryptoland' ),
			'id'   		=> 'cryptoland_p_fw_bg',
			'type' 		=> 'background',
			'tab'  		=> 'tab8',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab8',
		),
		array(
			'name' 		=> esc_html__( 'Widget area text color', 'cryptoland' ),
			'id'   		=> 'cryptoland_p_fw_t_c',
			'type' 		=> 'color',
			'tab'  		=> 'tab8',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab8',
		),
		array(
			'name'		=> esc_html__( 'Widget area padding', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the padding of the widget field or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_p_fw_p',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab8',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab8',
		),
		array(
			'name'		=> esc_html__( 'Widget area margin', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the margin of the widget field or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_p_fw_m',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab8',
		),
		// tab9 Copyright
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_copyright_section',
			'name'		=> esc_html__( 'Page Copyright', 'cryptoland' ),
			'tab'  		=> 'tab9',
		),
		array(
			'name' 		=> esc_html__('Copyright section visibility', 'cryptoland'),
			'desc' 		=> esc_html__('Select copyright section visibility for this page.default: show', 'cryptoland'),
			'id'      	=> 'cryptoland_page_copyright_display',
			'type'    	=> 'select',
			'options' 	=> array(
				'' 		=> esc_html__('Select a option', 'cryptoland'),
				'on' 	=> esc_html__('Show', 'cryptoland'),
				'off' 	=> esc_html__('Hide', 'cryptoland'),
			),
			'std' 		=> 'on',
			'tab'  		=> 'tab9',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab9',
		),
		array(
			'name' 		=> esc_html__( 'Copyright section background color', 'cryptoland' ),
			'id'   		=> 'cryptoland_p_c_bg',
			'type' 		=> 'color',
			'tab'  		=> 'tab9',
		),
		array(
			'name' 		=> esc_html__( 'Copyright text color', 'cryptoland' ),
			'id'   		=> 'cryptoland_c_t_c',
			'type' 		=> 'color',
			'tab'  		=> 'tab9',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab9',
		),
		array(
			'name'		=> esc_html__( 'Copyright section padding', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the padding of the copyright section for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_p_c_p',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab9',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab9',
		),
		array(
			'name'		=> esc_html__( 'Copyright section margin', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the margin of the copyright section for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_p_c_m',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab9',
		),
	)
);


/* ----------------------------------------------------- */
// PAGE HEADER COLOR
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'title' 	=> esc_html__( 'Hero Options', 'cryptoland' ),
	'id' 		=> 'pageherosettings',
	'pages' 	=> array( 'page' ),
	'context' 	=> 'normal',
	'priority'	=> 'high',
	'tab_style' => 'box',
 	'hide'    	=> array( 'template'    => 'custom-page.php' ),
	'tabs'    	=> array(
		'tab1' 	=> 'Hero Display',
		'tab2' 	=> 'Subtitle',
		'tab3' 	=> 'Title',
		'tab4' 	=> 'Description',
		'tab5' 	=> 'Breadcrumb',
		'tab6' 	=> 'Button',
		'tab7' 	=> 'Hero Style',
	),
	'fields' 	=> array(
		// tab1
		// heading
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_hero_display_settings',
			'name'		=> esc_html__( 'Page Hero Display', 'cryptoland' ),
		 	'tab'  		=> 'tab1',
		),
		array(
			'name' 		=> esc_html__( 'Disable page hero section', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_hero_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab1',
		),
		// tab2 start
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_slogan_settings',
			'name'		=> esc_html__( 'Page Slogan Options', 'cryptoland' ),
		 	'tab'  		=> 'tab2',
		),
		array(
			'name' 		=> esc_html__( 'Disable Page Slogan', 'cryptoland' ),
			'id'  		=> 'cryptoland_page_slogan_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab2',
		),
		array(
			'name' 		=> esc_html__( 'Page Slogan', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_slogan',
			'type' 		=> 'text',
			'clone'		=> false,
		 	'tab'  		=> 'tab2',
		),
		array(
			'name' 		=> esc_html__( 'Page Slogan Color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_slogan_color',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab2',
		),
		array(
			'name' 		=> esc_html__( 'Page Slogan Font Size', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_slogan_fs',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab2',
		),
		array(
			'name' 		=> esc_html__( 'Page Slogan max-width', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_slogan_mw',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab2',
		),
		array(
			'name' 		=> esc_html__( 'Page Slogan margin-bottom', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_slogan_mb',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab2',
		),
		// tab3
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_heading_settings',
			'name'		=> esc_html__( 'Page Heading Options', 'cryptoland' ),
		 	'tab'  		=> 'tab3',
		),
		array(
			'name' 		=> esc_html__( 'Disable Page Heading', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_heading_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab3',
		),
		array(
			'name'		=> esc_html__( 'Alternate Page Heading', 'cryptoland' ),
			'id'		=> 'cryptoland_page_heading',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
		 	'tab'  		=> 'tab3',
		),
		array(
			'name' 		=> esc_html__( 'Page Heading Color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_heading_color',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab3',
		),
		array(
			'name' 		=> esc_html__( 'Page Heading Font Size', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_heading_fs',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab3',
		),
		array(
			'name' 		=> esc_html__( 'Page Heading margin-bottom', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_heading_mb',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab3',
		),
		// tab4
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_description_settings',
			'name'		=> esc_html__( 'Page Description Options', 'cryptoland' ),
		 	'tab'  		=> 'tab4',
		),
		array(
			'name' 		=> esc_html__( 'Disable Page Description', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_desc_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab4',
		),
		array(
			'name'		=> esc_html__( 'Page Description', 'cryptoland' ),
			'id'			=> 'cryptoland_page_desc',
			'clone'		=> false,
		 	'tab'  		=> 'tab4',
			'type'		=> 'text',
			'std'			=> '',
		),
		array(
			'name' 		=> esc_html__( 'Page Description Color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_desc_color',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab4',
		),
		array(
			'name' 		=> esc_html__( 'Page Description Font Size', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_desc_fs',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab4',
		),
		array(
			'name' 		=> esc_html__( 'Page Description margin-bottom', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_desc_mb',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab4',
		),
		// tab5
		// heading
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_design_section',
			'name'		=> esc_html__( 'Page Breadcrumbs', 'cryptoland' ),
		 	'tab'  		=> 'tab5',
		),
		array(
			'name' 		=> esc_html__( 'Disable page breadcrumbs section', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_bread_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab5',
		),
		array(
			'name' 		=> esc_html__( 'Page Breadcrumb Icon Color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_bred_iconcolor',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab5',
		),
		array(
			'name' 		=> esc_html__( 'Page Breadcrumb Text Color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_bred_textcolor',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab5',
		),
		array(
			'name' 		=> esc_html__( 'Page Breadcrumb Text Hover Color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_bred_htextcolor',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab5',
		),
		array(
			'name' 		=> esc_html__( 'Page Breadcrumb Font Size', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_bred_fs',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab5',
		),
		// tab6
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_button_settings',
			'name'		=> esc_html__( 'Page Button Options', 'cryptoland' ),
		 	'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Disable page button section', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_herobtn_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab6',
		),
		array(
			'name'		=> esc_html__( 'Button custom title', 'cryptoland' ),
			'id'		=> 'cryptoland_page_herobtn',
			'clone'		=> false,
			'type'		=> 'text',
		 	'tab'  		=> 'tab6',
			'std'		=> ''
		),
		array(
			'name'		=> esc_html__( 'Button custom URL', 'cryptoland' ),
			'id'		=> 'cryptoland_page_herobtn_url',
			'clone'		=> false,
			'type'		=> 'text',
		 	'tab'  		=> 'tab6',
			'std'		=> ''
		),
		array(
			'type' 		=> 'divider',
		 	'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Disable button icon', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_herobtn_icon_display',
			'type' 		=> 'checkbox',
			'std'  		=> 0,
		 	'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Button background color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_herobtn_custombg',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Button hover background color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_herobtn_hoverbg',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Button title color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_herobtn_titlecolor',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab6',
		),
		array(
			'name' 		=> esc_html__( 'Button hover title color', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_herobtn_titlehover',
			'type' 		=> 'color',
		 	'tab'  		=> 'tab6',
		),
		// tab7
		// heading
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_page_general_settings',
			'name'		=> esc_html__( 'Page Hero Style', 'cryptoland' ),
		 	'tab'  		=> 'tab7',
		),
		// Background
		array(
			'id'   		=> 'cryptoland_page_hero_bg',
			'name' 		=> esc_html__( 'Background image', 'cryptoland' ),
			'type' 		=> 'background',
			'tab'  		=> 'tab7',
		),
		// overlay
		array(
			'name' 		=> esc_html__( 'Background image overlay', 'cryptoland' ),
			'desc' 		=> esc_html__('Please enter the color as rgba.', 'cryptoland'),
			'id'   		=> 'cryptoland_page_hero_overlay',
			'type' 		=> 'color',
			'tab'  		=> 'tab7',
		),
		array(
			'name' 		=> esc_html__( 'Overlay opacity', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_hero_overlay_opacity',
			'type' 		=> 'number',
			'min'  		=> 0,
			'max'  		=> 1,
			'step' 		=> 0.1,
			'std' 		=> 0.5,
		 	'tab'  		=> 'tab7',
		),
		array(
			'type' 		=> 'divider',
		 	'tab'  		=> 'tab7',
		),
		// Hero Height
		array(
			'name' 		=> esc_html__( 'Hero height', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_hero_height',
			'type' 		=> 'number',
			'min'  		=> 0,
			'step' 		=> 1,
		 	'tab'  		=> 'tab7',
		),
		array(
			'type' 		=> 'divider',
		 	'tab'  		=> 'tab7',
		),
		array(
			'name' 		=> esc_html__('Hero parallax background', 'cryptoland'),
			'desc' 		=> esc_html__('Select hero section parallax effect for background image.default: No', 'cryptoland'),
			'id'      	=> 'cryptoland_page_hero_parallax',
			'type'    	=> 'select',
			'options' 	=> array(
				'off' 	=> esc_html__('No', 'cryptoland'),
				'on' 	=> esc_html__('Yes', 'cryptoland'),

			),
			'std' 		=> 'off',
			'tab'  		=> 'tab7',
		),
		array(
			'name' 		=> esc_html__('Parallax type', 'cryptoland'),
			'desc' 		=> esc_html__('Select hero area align.', 'cryptoland'),
			'id'   		=> 'cryptoland_page_hero_parallax_type',
			'type' 		=> 'select',
			'options'  	=> array(
				'scroll' 			=> esc_html__( 'scroll', 'cryptoland' ),
				'scale' 			=> esc_html__( 'scale', 'cryptoland' ),
				'opacity' 			=> esc_html__( 'opacity', 'cryptoland' ),
				'scroll-opacity' 	=> esc_html__( 'scroll-opacity', 'cryptoland' ),
				'scale-opacity' 	=> esc_html__( 'scale-opacity', 'cryptoland' ),
			),
		 	'tab'  		=> 'tab7',
			'std'       => 'scroll'
		),
		array(
			'name' 		=> esc_html__( 'Parallax speed', 'cryptoland' ),
			'id'   		=> 'cryptoland_page_hero_parallax_speed',
			'type' 		=> 'number',
			'min'  		=> 0,
			'max'  		=> 2,
			'step' 		=> 0.1,
			'std' 		=> 0.2,
		 	'tab'  		=> 'tab7',
		),
		array(
			'name'		=> esc_html__( 'Parallax video', 'cryptoland' ),
			'id'		=> 'cryptoland_page_hero_parallax_video',
			'desc'		=> sprintf( esc_html__( 'Enter video url.Support youtube,vimeo and local video.youtube: %s vimeo: %s local: %s.', 'cryptoland' ), '<code>https://www.youtube.com/watch?v=ab0TSkLe-E0</code>', '<code>https://vimeo.com/110138539</code>', '<code>mp4:./video/local-video.mp4</code>' ),
			'clone'		=> false,
			'type'		=> 'text',
		 	'tab'  		=> 'tab7',
			'std'		=> ''
		),
		array(
			'name' 		=> esc_html__('Parallax on mobile device ?', 'cryptoland'),
			'desc' 		=> esc_html__('This option disable parallax effect to on devices iPad|iPhone|iPod|Android', 'cryptoland'),
			'id'      	=> 'cryptoland_page_hero_parallax_mobile',
			'type'    	=> 'select',
			'options' 	=> array(
				'off' 	=> esc_html__('No', 'cryptoland'),
				'on' 	=> esc_html__('Yes', 'cryptoland'),

			),
			'std' 		=> 'off',
			'tab'  		=> 'tab7',
		),
		array(
			'type' 		=> 'divider',
		 	'tab'  		=> 'tab7',
		),
		// Hero padding
		array(
			'name'		=> esc_html__( 'Hero padding', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the padding of the hero section for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_page_hero_padding',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab7',
		),
		array(
			'type' 		=> 'divider',
			'tab'  		=> 'tab7',
		),
		// Hero margin
		array(
			'name'		=> esc_html__( 'Hero margin', 'cryptoland' ),
			'desc' 		=> esc_html__('Set the margin of the hero section for this page or leave it blank.e.g: 30px,30%...', 'cryptoland'),
			'id'		=> 'cryptoland_page_hero_margin',
			'type'    	=> 'text_list',
			'class'    	=> 'default-column',
			'clone'    	=> false,
			'options' 	=> array(
				'top'    	=> 'Top',
				'right' 	=> 'Right',
				'bottom'   	=> 'Bottom',
				'left'   	=> 'Left',
			),
			'tab'  		=> 'tab7',
		),
		// hero align
		array(
			'name' 		=> esc_html__('Hero text align', 'cryptoland'),
			'desc' 		=> esc_html__('Select hero area align.', 'cryptoland'),
			'id'   		=> 'cryptoland_page_hero_text_align',
			'type' 		=> 'select',
			'options'  	=> array(
				'left' 		=> esc_html__( 'Left', 'cryptoland' ),
				'center' 	=> esc_html__( 'Center', 'cryptoland' ),
				'right' 	=> esc_html__( 'Right', 'cryptoland' ),
			),
		 	'tab'  		=> 'tab7',
			'std'       => 'center'
		),
	)
);

/* ----------------------------------------------------- */
// PAGE SIDEBAR
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'title' 	=> esc_html__( 'Page Sidebar Options', 'cryptoland' ),
	'id' 		=> 'pagesidebarsettings',
	'pages' 	=> array( 'page' ),
	'context' 	=> 'normal',
	'priority'	=> 'high',
	'tab_style' => 'box',
 	'hide'    	=> array( 'template'    => 'custom-page.php' ),
	'fields' 	=> array(

		array(
			'name'     		=> esc_html__( 'Page Layout', 'cryptoland' ),
			'id'   			=> 'cryptoland_pagelayout',
			'type'     		=> 'image_select',
			'options'  		=> array(
				'left-sidebar' 		=> get_template_directory_uri().'/framework/images/sidebar-left.png',
				'full-width' 		=> get_template_directory_uri().'/framework/images/sidebar-none.png',
				'right-sidebar' 	=> get_template_directory_uri().'/framework/images/sidebar-right.png',

			),
			'multiple'  	=> false,
			'std'       	=> 'full-width',
		),
		array(
			'type' 		=> 'divider',
		),
		array(
			'name'     		=> esc_html__( 'Page sidebar', 'cryptoland' ),
			'id'          	=> 'cryptoland_page_sidebar_type',
			'type'        	=> 'sidebar',
			'field_type'  	=> 'radio_list',
			'inline'      	=> true,
		),

	)
);





/* ----------------------------------------------------- */
// SINGLE POST SIDEBAR
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'title' 	=> esc_html__( 'Single Post Sidebar Settings', 'cryptoland' ),
	'id' 			=> 'postsidebarsettings',
	'pages' 	=> array( 'post' ),
	'context' => 'advanced',
	'priority'=> 'high',
	'fields' 	=> array(
		// heading
		array(
			'type' 		=> 'heading',
			'id'   		=> 'cryptoland_post_sidebar_heading',
			'name'		=> esc_html__( 'Single Post Sidebar Settings', 'cryptoland' ),
		),
		array(
			'name'     => esc_html__( 'Single Post Sidebar', 'cryptoland' ),
			'id'       => 'cryptoland_post_layout',
			'type'     => 'select',
			'options'  => array(
				'left-sidebar' 	=> esc_html__( 'left', 'cryptoland' ),
				'right-sidebar' => esc_html__( 'right', 'cryptoland' ),
				'full-width' 		=> esc_html__( 'full', 'cryptoland' ),
			),
			'multiple'    => false,
			'std'         => 'full-width',
			'placeholder' => esc_html__( 'Select an Item', 'cryptoland' ),
		)
	)
);

/*----------------------------------------------------------------------------------*/
/*  GALLERY POST FORMAT
/*-----------------------------------------------------------------------------------*/

$meta_boxes[] = array(
	'title'    	=> esc_html__('Gallery Settings', 'cryptoland'),
	'pages'    	=> array('post'),
	'fields' 	=> array(
		array(
			'name' 		=> esc_html__('Select Images', 'cryptoland'),
			'desc' 		=> esc_html__('Select the images from the media library or upload your new ones.', 'cryptoland'),
			'id'   		=> 'cryptoland_gallery_image',
			'type' 		=> 'image_advanced',
		)
	)
);

/*----------------------------------------------------------------------------------*/
/*  QUOTE POST FORMAT
/*-----------------------------------------------------------------------------------*/

$meta_boxes[] = array(
	'title'    	=> esc_html__('Quote Settings', 'cryptoland'),
	'pages'    	=> array('post'),
	'fields' 	=> array(
		array(
			'name' 		=> esc_html__('The Quote', 'cryptoland'),
			'desc' 		=> esc_html__('Write your quote in this field.', 'cryptoland'),
			'id'   		=> 'cryptoland_quote_text',
			'type' 		=> 'textarea',
			'rows' 		=> 5
		),
		array(
			'name' 		=> esc_html__('The Author', 'cryptoland'),
			'desc' 		=> esc_html__('Enter the name of the author of this quote.', 'cryptoland'),
			'id'   		=> 'cryptoland_quote_author',
			'type' 		=> 'text'
		),
		array(
			'name' 		=> esc_html__('Background Color', 'cryptoland'),
			'desc' 		=> esc_html__('Choose the background color for this quote.', 'cryptoland'),
			'id'   		=> 'cryptoland_quote_bg',
			'type' 		=> 'color'
		),
		array(
			'name' 		=> esc_html__('Background Opacity', 'cryptoland'),
			'desc' 		=> esc_html__('Choose the opacity of the background color.', 'cryptoland'),
			'id'   		=> 'cryptoland_quote_bg_opacity',
			'type' 		=> 'text',
			'std' 		=> 80
		)
	)
);

/*----------------------------------------------------------------------------------*/
/*  AUDIO POST FORMAT
/*-----------------------------------------------------------------------------------*/

$meta_boxes[] = array(
	'title'    	=> esc_html__('Audio Settings', 'cryptoland'),
	'pages'    	=> array('post'),
	'fields' 	=> array(
		array(
			'type' 		=> 'heading',
			'name' 		=> esc_html__( 'These settings enable you to embed audio in your posts. Note that for audio, you must supply both MP3 and OGG files to satisfy all browsers. For poster you can select a featured image.', 'cryptoland' ),
			'id'   		=> 'cryptoland_audio_head'
		),
		array(
			'name' 		=> esc_html__('MP3 File URL', 'cryptoland'),
			'desc' 		=> esc_html__('The URL to the .mp3 audio file.', 'cryptoland'),
			'id'   		=> 'cryptoland_audio_mp3',
			'type' 		=> 'text',
		),
		array(
			'name' 		=> esc_html__('OGA File URL', 'cryptoland'),
			'desc' 		=> esc_html__('The URL to the .oga, .ogg audio file.', 'cryptoland'),
			'id'   		=> 'cryptoland_audio_ogg',
			'type' 		=> 'text',
		),
		array(
			'name' 		=> esc_html__('Divider', 'cryptoland'),
			'desc' 		=> esc_html__('divider.', 'cryptoland'),
			'id'   		=> 'cryptoland_audio_divider',
			'type' 		=> 'divider'
		),
		array(
			'name' 		=> esc_html__('SoundCloud', 'cryptoland'),
			'desc' 		=> esc_html__('Enter the iframe of the soundcloud audio.', 'cryptoland'),
			'id'   		=> 'cryptoland_audio_sc',
			'type' 		=> 'text',
		),
		array(
			'name' 		=> esc_html__('Color', 'cryptoland'),
			'desc' 		=> esc_html__('Choose the color.', 'cryptoland'),
			'id'   		=> 'cryptoland_audio_sc_color',
			'type' 		=> 'color',
			'std'  		=> '#ff7700'
		)
	)
);

/*----------------------------------------------------------------------------------*/
/*  VIDEO POST FORMAT
/*-----------------------------------------------------------------------------------*/

$meta_boxes[] = array(
	'title'    	=> esc_html__('Video Settings', 'cryptoland'),
	'pages'    	=> array('post'),
	'fields' 	=> array(
		array(
			'type' 		=> 'heading',
			'name' 		=> esc_html__( 'These settings enable you to embed videos into your posts. Note that for video, you must supply an M4V file to satisfy both HTML5 and Flash solutions. The optional OGV format is used to increase x-browser support for HTML5 browsers such as Firefox and Opera. For the poster, you can select a featured image.', 'cryptoland' ),
			'id'   		=> 'cryptoland_video_head'
		),
		array(
			'name' 		=> esc_html__('M4V File URL', 'cryptoland'),
			'desc' 		=> esc_html__('The URL to the .m4v video file.', 'cryptoland'),
			'id'   		=> 'cryptoland_video_m4v',
			'type' 		=> 'text',
		),
		array(
			'name' 		=> esc_html__('OGV File URL', 'cryptoland'),
			'desc' 		=> esc_html__('The URL to the .ogv video file.', 'cryptoland'),
			'id'   		=> 'cryptoland_video_ogv',
			'type' 		=> 'text',
		),
		array(
			'name' 		=> esc_html__('WEBM File URL', 'cryptoland'),
			'desc' 		=> esc_html__('The URL to the .webm video file.', 'cryptoland'),
			'id'   		=> 'cryptoland_video_webm',
			'type' 		=> 'text',
		),
		array(
			'name' 		=> esc_html__('Embeded Code', 'cryptoland'),
			'desc' 		=> esc_html__('Select the preview image for this video.', 'cryptoland'),
			'id'   		=> 'cryptoland_video_embed',
			'type' 		=> 'textarea',
			'rows' 		=> 8
		)
	)
);

	//end
	return $meta_boxes;
}
