<?php

	// if not admin or plugin installed - die
	if ( ! class_exists( 'OT_Loader' ) || ! is_admin() )
	return false;

	add_action( 'init', 'cryptoland_custom_theme_options' );
	function cryptoland_custom_theme_options() {

	$cryptoland_saved_settings = get_option( ot_settings_id(), array() );

	$cryptoland_ot_custom_settings = array(
    'contextual_help' => array(
      'sidebar'       => ''
    ),

	'sections'        => array(

		array(
			'id'		=> 'general',
			'title'		=> esc_html__( 'General', 'cryptoland' ),
		),
		array(
			'id'		=> 'logo',
			'title'		=> esc_html__( 'Logo', 'cryptoland' ),
		),
		array(
			'id'		=> 'navigation',
			'title'		=> esc_html__( 'Header & Nav', 'cryptoland' ),
		),
		array(
			'id'		=> 'pre',
			'title'		=> esc_html__( 'Preloader', 'cryptoland' ),
		),
		array(
			'id'		=> 'sidebars',
			'title'		=> esc_html__( 'Sidebars', 'cryptoland' ),
		),
		array(
			'id'        => 'sidebars_settings',
			'title'     => esc_html__( 'Sidebar Settings', 'cryptoland' ),
		),
      array(
			'id'		=> 'blog_page',
			'title'		=> esc_html__( 'Blog Page', 'cryptoland' ),
		),
		array(
			'id'		=> 'single_page',
			'title'		=> esc_html__( 'Single Page', 'cryptoland' ),
		),
		array(
			'id'		=> 'archive_page',
			'title'		=> esc_html__( 'Archive Page', 'cryptoland' ),
		),
		array(
			'id'		=> 'error_page',
			'title'		=> esc_html__( '404 Page', 'cryptoland' ),
		),
		array(
			'id'		=> 'search_page',
			'title'		=> esc_html__( 'Search Page', 'cryptoland' ),
		),
		array(
			'id'		=> 'footer',
			'title'		=> esc_html__( 'Footer', 'cryptoland' ),
		),
      array(
			'id'  		=> 'google_fonts',
			'title' 	=> esc_html__('Google Fonts', 'cryptoland' )
		),
		array(
			'id'  		=> 'typography',
			'title' 	=> esc_html__('Typography', 'cryptoland' )
		),
	),

/**--- Options Start ---**/
'settings'  => array(

	/*************************************************
	## GENERAL SETTINGS.
	*************************************************/

		//Pagination settings
		array(
			'id'          => 'cryptoland_general_pagination_tab',
			'label'       => esc_html__( 'Pagination Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'general'
		),
		array(
		  'id'        => 'cryptoland_pag_type',
		  'label'     => esc_html__('Pagination types', 'cryptoland' ),
		  'desc'      => esc_html__('Please choose a pagination type', 'cryptoland' ),
		  'std'       => 'default',
		  'type'      => 'select',
		  'section'   => 'general',
		  'operator'  => 'and',
		  'choices'   => array(
		  array(
			  'value' => 'default',
			  'label' => esc_html__('Default', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'outline',
			  'label' => esc_html__('Outline', 'cryptoland' ),
		  ),
		 )
	  	),
		array(
			'id'          => 'cryptoland_pag_defaultcolor',
			'label'       => esc_html__( 'Pagination default type color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the default type pagination colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'general',
			'settings'    => array(
			  'pagbg'     	=> _x( 'Background', 'color picker', 'cryptoland' ),
			  'bghover'     => _x( 'Background Hover', 'color picker', 'cryptoland' ),
			  'bgactive'    => _x( 'Background Active', 'color picker', 'cryptoland' ),
			  'num'   		=> _x( 'Number Color', 'color picker', 'cryptoland' ),
			  'numhover'   	=> _x( 'Number Hover', 'color picker', 'cryptoland' ),
			  'numactive'   => _x( 'Number Active', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_pag_type:is(default)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_pag_outlinecolor',
			'label'       => esc_html__( 'Pagination outline type color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the outline type pagination colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'general',
			'settings'    => array(
			  'brd'     	=> _x( 'Border Color', 'color picker', 'cryptoland' ),
			  'brdhover'    => _x( 'Border Hover', 'color picker', 'cryptoland' ),
			  'brdactive'   => _x( 'Border Active', 'color picker', 'cryptoland' ),
			  'num'   		=> _x( 'Number Color', 'color picker', 'cryptoland' ),
			  'numhover'   	=> _x( 'Number Hover', 'color picker', 'cryptoland' ),
			  'numactive'   => _x( 'Number Active', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_pag_type:is(outline)',
			'operator'    => 'and'
		),
		array(
		  'id'        => 'cryptoland_pag_size',
		  'label'     => esc_html__('Pagination size', 'cryptoland' ),
		  'desc'      => esc_html__('Please choose a pagination size', 'cryptoland' ),
		  'std'       => 'large',
		  'type'      => 'select',
		  'section'   => 'general',
		  'operator'  => 'and',
		  'choices'   => array(
		  array(
			  'value' => 'small',
			  'label' => esc_html__('small', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'medium',
			  'label' => esc_html__('medium', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'large',
			  'label' => esc_html__('large', 'cryptoland' ),
		  ),
		 )
	  	),
		array(
		  'id'        => 'cryptoland_pag_group',
		  'label'     => esc_html__('Pagination group', 'cryptoland' ),
		  'desc'      => esc_html__('Please choose a pagination group type', 'cryptoland' ),
		  'std'       => 'no',
		  'type'      => 'select',
		  'section'   => 'general',
		  'operator'  => 'and',
		  'choices'   => array(
		  array(
			  'value' => 'no',
			  'label' => esc_html__('default', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'yes',
			  'label' => esc_html__('group', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'no',
			  'label' => esc_html__('none', 'cryptoland' ),
		  ),
		 )
	  	),
		array(
		  'id'        => 'cryptoland_pag_corner',
		  'label'     => esc_html__('Pagination corner', 'cryptoland' ),
		  'desc'      => esc_html__('Please choose a pagination corner type', 'cryptoland' ),
		  'std'       => 'square',
		  'type'      => 'select',
		  'section'   => 'general',
		  'operator'  => 'and',
		  'choices'   => array(
		  array(
			  'value' => 'square',
			  'label' => esc_html__('default', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'square',
			  'label' => esc_html__('square', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'rounded',
			  'label' => esc_html__('rounded', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'circle',
			  'label' => esc_html__('circle', 'cryptoland' ),
		  ),
		 )
	  	),
		array(
		  'id'        => 'cryptoland_pag_align',
		  'label'     => esc_html__('Pagination align', 'cryptoland' ),
		  'desc'      => esc_html__('Please choose a pagination align type', 'cryptoland' ),
		  'std'       => 'left',
		  'type'      => 'select',
		  'section'   => 'general',
		  'operator'  => 'and',
		  'choices'   => array(
		  array(
			  'value' => 'left',
			  'label' => esc_html__('default', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'left',
			  'label' => esc_html__('left', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'right',
			  'label' => esc_html__('right', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'center',
			  'label' => esc_html__('center', 'cryptoland' ),
		  ),
		 )
	  	),
		//Back to top button settings
		array(
			'id'          => 'cryptoland_backtotop_tab',
			'label'       => esc_html__( 'Back To Top Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'general'
		),
		array(
			'id'        => 'cryptoland_backtotop',
			'label'     => esc_html__( 'Back to top button display', 'cryptoland' ),
			'desc'      => sprintf( esc_html__( 'Backtotop button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'       => 'on',
			'type'      => 'on-off',
			'section'   => 'general',
			'operator'  => 'and'
		),
		array(
			'id'          => 'cryptoland_backtotop_dimension',
			'label'       => esc_html__( 'Back to top dimension', 'cryptoland' ),
			'desc'        => esc_html__( 'Please add backtotop dimension.', 'cryptoland' ),
			'type'        => 'dimension',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general',
		),
		array(
			'id'          => 'cryptoland_backtotop_border',
			'label'       => esc_html__('Back to top border', 'cryptoland' ),
			'desc'        => esc_html__('Enter back to top border radius.', 'cryptoland' ),
			'std'         => '0',
			'type'        => 'border',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_backtotop_border_radius',
			'label'       => esc_html__('Back to top border radius', 'cryptoland' ),
			'desc'        => esc_html__('Enter back to top border radius.', 'cryptoland' ),
			'std'         => '0',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,500',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_backtotop_lineheight',
			'label'       => esc_html__('Back to top line-height', 'cryptoland' ),
			'desc'        => esc_html__('Enter back to top line-height.', 'cryptoland' ),
			'std'         => '50',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,200',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_backtotop_offset',
			'label'       => esc_html__('Back to top bottom offset', 'cryptoland' ),
			'desc'        => esc_html__('Enter back to top bottom offset.', 'cryptoland' ),
			'std'         => '50',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,200',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_backtotop_iconclass',
			'label'       => esc_html__('Back to top icon class', 'cryptoland' ),
			'desc'        => esc_html__('Please Add back to top icon class.', 'cryptoland' ),
			'std'         => 'fa fa-angle-up',
			'type'        => 'text',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general'
		),
		array(
			'id'          => 'cryptoland_backtotop_iconfs',
			'label'       => esc_html__('Back to top icon font-size', 'cryptoland' ),
			'desc'        => esc_html__('Enter back to top icon font-size.', 'cryptoland' ),
			'std'         => '17',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'condition'   => 'cryptoland_backtotop:is(on)',
			'section'     => 'general',
			'operator'    => 'and'
		),
		array(
		  'id'        => 'cryptoland_backtotop_color_type',
		  'label'     => esc_html__('Back to top color type', 'cryptoland' ),
		  'desc'      => esc_html__('Please choose a back to top color type', 'cryptoland' ),
		  'std'       => '',
		  'type'      => 'select',
		  'section'   => 'general',
		  'condition' => 'cryptoland_backtotop:is(on)',
		  'operator'  => 'and',
		  'choices'   => array(
		  array(
			  'value' => '',
			  'label' => esc_html__('Select a type', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'solid',
			  'label' => esc_html__('Solid', 'cryptoland' ),
		  ),
		  array(
			  'value' => 'gradient',
			  'label' => esc_html__('Gradient', 'cryptoland' ),
		  ),
		 )
	  	),
		array(
			'id'          => 'cryptoland_backtotop_solid',
			'label'       => esc_html__( 'Back to top solid color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the back to top button colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'general',
			'settings'    => array(
			  'bg'     		=> _x( 'Background', 'color picker', 'cryptoland' ),
			  'bghover'     => _x( 'Background Hover', 'color picker', 'cryptoland' ),
				'bshadow'     	=> _x( 'Box Shadow', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'iconhover'   => _x( 'Icon Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_backtotop:is(on),cryptoland_backtotop_color_type:is(solid)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_backtotop_gradient',
			'label'       => esc_html__( 'Back to top gradient color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the back to top button colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'general',
			'settings'    => array(
			  'grad1'     	=> _x( 'Gradient 1', 'color picker', 'cryptoland' ),
			  'grad2'     	=> _x( 'Gradient 2', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'iconhover'   => _x( 'Icon Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_backtotop:is(on),cryptoland_backtotop_color_type:is(gradient)',
			'operator'    => 'and'
		),


		/*************************************************
		## LOGO OPTIONS.
		*************************************************/

		array(
			'id'          => 'cryptoland_logogeneral_tab',
			'label'       => esc_html__( 'General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'logo'
		),
		array(
			'id'          => 'cryptoland_logo_type',
			'label'       => esc_html__( 'Logo Type', 'cryptoland' ),
			'desc'        => esc_html__( 'Use this logo type.' , 'cryptoland' ),
			'std'         => 'text-img-logo',
			'type'        => 'radio',
			'section'     => 'logo',
			'condition'   => '',
			'operator'    => '',
			'choices'     => array(
				array(
					'value'       => '',
					'label'       => esc_html__( 'Select Logo', 'cryptoland' )
				),
				array(
					'value'       => 'text-logo',
					'label'       => esc_html__( 'Text Logo', 'cryptoland' )
				),
				array(
					'value'       => 'img-logo',
					'label'       => esc_html__( 'Image logo', 'cryptoland' )
				),
				array(
					'value'       => 'text-img-logo',
					'label'       => esc_html__( 'Text And Image Logo', 'cryptoland' )
				),
			)
		),
		array(
			'id'          => 'cryptoland_logo_padding',
			'label'       => esc_html__( 'Logo padding', 'cryptoland' ),
			'desc'        => esc_html__( 'The CSS padding properties are used to generate space around an element\'s content, inside of any defined borders.', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => '',
			'section'     => 'logo',
		),
		array(
			'id'          => 'cryptoland_logo_margin',
			'label'       => esc_html__( 'Logo margin', 'cryptoland' ),
			'desc'        => esc_html__( 'The CSS margin properties are used to create space around elements, outside of any defined borders.', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => '',
			'section'     => 'logo',
		),
		// text logo
		array(
			'id'          => 'cryptoland_textlogo_tab',
			'label'       => esc_html__( 'Text Logo Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'logo'
		),
		array(
			'id'          => 'cryptoland_textlogo',
			'label'       => esc_html__('Text logo', 'cryptoland' ),
			'desc'        => esc_html__('Add your text logo.Please leave this field blank if you do not want to use it', 'cryptoland' ),
			'std'         => 'Cryptoland',
			'type'        => 'text',
			'condition'   => '',
			'section'     => 'logo'
		),
		array(
			'id'         => 'cryptoland_static_textlogo_typograp',
			'label'      => esc_html__( 'Static text logo typography', 'cryptoland' ),
			'desc'       => esc_html__( 'You can export your style to the static text logo with these properties', 'cryptoland' ),
			'type'       => 'typography',
			'section'    => 'logo',
			'operator'   => 'and'
		),
		array(
			'id'         => 'cryptoland_sticky_textlogo_typograp',
			'label'      => esc_html__( 'Sticky text logo typography', 'cryptoland' ),
			'desc'       => esc_html__( 'You can export your style to the sticky text logo with these properties', 'cryptoland' ),
			'type'       => 'typography',
			'section'    => 'logo',
			'operator'   => 'and'
		),
		array(
			'id'         => 'cryptoland_mob_textlogo_typograp',
			'label'      => esc_html__( 'Mobile open menu text logo typography', 'cryptoland' ),
			'desc'       => esc_html__( 'You can export your style to the Mobile open menu static text logo with these properties', 'cryptoland' ),
			'type'       => 'typography',
			'section'    => 'logo',
			'operator'   => 'and'
		),
		// image logo
		array(
			'id'          => 'cryptoland_imglogo_tab',
			'label'       => esc_html__( 'Img Logo Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'logo'
		),
		array(
			'id'          => 'cryptoland_img_staticlogo',
			'label'       => esc_html__( 'Upload static logo image', 'cryptoland' ),
			'desc'        => esc_html__( 'Upload static navigation logo image.Please leave this field blank if you do not want to use it', 'cryptoland' ),
			'type'        => 'upload',
			'condition'   => '',
			'section'     => 'logo'
		),
		array(
			'id'          => 'cryptoland_img_stickylogo',
			'label'       => esc_html__( 'Upload sticky logo image', 'cryptoland' ),
			'desc'        => esc_html__( 'Upload sticky navigation logo image.Please leave this field blank if you do not want to use it', 'cryptoland' ),
			'type'        => 'upload',
			'condition'   => '',
			'section'     => 'logo'
		),
		array(
			'id'          => 'cryptoland_logo_dimension',
			'label'       => esc_html__( 'Logo dimension', 'cryptoland' ),
			'desc'        => esc_html__( 'Logo dimension', 'cryptoland' ),
			'type'        => 'dimension',
			'condition'   => '',
			'section'     => 'logo',
		),
		array(
			'id'          => 'cryptoland_mob_logo',
			'label'       => esc_html__( 'Mobile menu logo selection', 'cryptoland' ),
			'desc'        => esc_html__( 'Use this logo selection in the mobile menu.' , 'cryptoland' ),
			'std'         => 'mob-sticky-text-logo',
			'type'        => 'radio',
			'section'     => 'logo',
			'condition'   => '',
			'operator'    => '',
			'choices'     => array(
				array(
					'value'       => 'mob-static-logo',
					'label'       => esc_html__( 'Static logo', 'cryptoland' )
				),
				array(
					'value'       => 'mob-sticky-logo',
					'label'       => esc_html__( 'Sticky logo', 'cryptoland' )
				),
				array(
					'value'       => 'mob-text-logo',
					'label'       => esc_html__( 'Text logo', 'cryptoland' )
				),
				array(
					'value'       => 'mob-static-text-logo',
					'label'       => esc_html__( 'Static and Text logo', 'cryptoland' )
				),
				array(
					'value'       => 'mob-sticky-text-logo',
					'label'       => esc_html__( 'Sticky and Text logo', 'cryptoland' )
				),
				array(
					'value'       => 'mob-logo-off',
					'label'       => esc_html__( 'Disable all logo type', 'cryptoland' )
				),
			)
		),

		/*************************************************
		## NAVIGATION SETTINGS.
		*************************************************/

		array(
			'id'          => 'cryptoland_nav_tab_set',
			'label'       => esc_html__( 'General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
		array(
			'id'          => 'cryptoland_header_display',
			'label'       => esc_html__( 'Header menu on-off', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Theme navigation menu display %s or %s.You can change this option in page header options.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'navigation',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_header_menu_ifs',
			'label'       => esc_html__('Header menu item font-size', 'cryptoland' ),
			'desc'        => esc_html__('Header menu item font-size', 'cryptoland' ),
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_header_menu_txtrans',
			'label'       => esc_html__( 'Header menu item text transform', 'cryptoland' ),
			'desc'        => esc_html__( 'Select text transform for the header menu item.' , 'cryptoland' ),
			'std'         => 'normal',
			'type'        => 'radio',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'text-normal',
					'label'       => esc_html__( 'Normal', 'cryptoland' )
				),
				array(
					'value'       => 'text-lowercase',
					'label'       => esc_html__( 'Lowercase', 'cryptoland' )
				),
				array(
					'value'       => 'text-uppercase',
					'label'       => esc_html__( 'Uppercase', 'cryptoland' )
				),
				array(
					'value'       => 'text-capitalize',
					'label'       => esc_html__( 'Capitalize', 'cryptoland' )
				)
			)
		),
		array(
			'id'          => 'cryptoland_header_info',
			'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(off)',
			'operator'    => 'or'
		),
		//static nav
		array(
			'id'          => 'cryptoland_staticnav_tab',
			'label'       => esc_html__( 'Static Navigation', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
		array(
			'id'          => 'cryptoland_staticnav_info',
			'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_navcolor',
			'label'       => esc_html__( 'Theme static menu colors', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the menu item colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'navigation',
			'settings'    => array(
			  'menubg'     	=> _x( 'Menu Background', 'color picker', 'cryptoland' ),
			  'normal'     	=> _x( 'Item Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Item Hover', 'color picker', 'cryptoland' ),
			  'active'   	=> _x( 'Item Active', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_nav_padding',
			'label'       => esc_html__( 'Theme static menu padding', 'cryptoland' ),
			'desc'        => esc_html__( 'The Spacing option type is used to set spacing values padding in the form of top, right, bottom, and left.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'spacing',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
		),
		array(
			'id'          => 'cryptoland_nav_margin',
			'label'       => esc_html__( 'Theme static menu margin', 'cryptoland' ),
			'desc'        => esc_html__( 'The Spacing option type is used to set spacing values margin in the form of top, right, bottom, and left.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'spacing',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
		),
		//sticky nav
		array(
			'id'          => 'cryptoland_stickynav_tab',
			'label'       => esc_html__( 'Sticky Navigation', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
		array(
			'id'          => 'cryptoland_stickyheader_info',
			'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_sticky_header',
			'label'       => esc_html__( 'Sticky menu on-off', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Sticky menu display %s or %s.You can change this option in page header options.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_stickynav_info',
			'label'       => esc_html__( 'Sticky menu is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_sticky_header:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_sticky_nav_color',
			'label'       => esc_html__( 'Theme sticky menu colors', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the sticky menu item colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'navigation',
			'settings'    => array(
			  'menubg'     	=> _x( 'Sticky Background', 'color picker', 'cryptoland' ),
			  'normal'     	=> _x( 'Item Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Item Hover', 'color picker', 'cryptoland' ),
			  'active'   	=> _x( 'Item Active', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_sticky_header:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sticky_padding',
			'label'       => esc_html__( 'Theme sticky menu padding', 'cryptoland' ),
			'desc'        => esc_html__( 'The Spacing option type is used to set spacing values padding in the form of top, right, bottom, and left.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'spacing',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_sticky_header:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sticky_margin',
			'label'       => esc_html__( 'Theme sticky menu padding', 'cryptoland' ),
			'desc'        => esc_html__( 'The Spacing option type is used to set spacing values margin in the form of top, right, bottom, and left.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'spacing',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_sticky_header:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and'
		),
        //sticky nav
		array(
			'id'          => 'cryptoland_dropdown_tab',
			'label'       => esc_html__( 'Dropdown Navigation', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
        array(
            'id'          => 'cryptoland_mobilenav_info',
            'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
            'type'        => 'textblock-titled',
            'section'     => 'navigation',
            'condition'   => 'cryptoland_header_display:is(off)',
            'operator'    => 'or'
        ),
        array(
            'id'          => 'cryptoland_dropdown_menu_color',
            'label'       => esc_html__( 'Dropdown menu color', 'cryptoland' ),
            'desc'        => esc_html__( 'You can change the dropdown menu background and menu item colors here.', 'cryptoland' ),
            'std'         => '',
            'type'        => 'super_awesome',
            'section'     => 'navigation',
            'settings'    => array(
                'menubg'     	=> _x( 'Background', 'color picker', 'cryptoland' ),
                'normal'     	=> _x( 'Item Color', 'color picker', 'cryptoland' ),
                'hover'   	=> _x( 'Item Hover', 'color picker', 'cryptoland' ),
                'active'   	=> _x( 'Item Active', 'color picker', 'cryptoland' ),
            ),
            'condition'   => 'cryptoland_header_display:is(on)',
            'operator'    => 'and'
        ),
		//mobile menu
		array(
			'id'          => 'cryptoland_mobilenav_tab',
			'label'       => esc_html__( 'Mobile Navigation', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
		array(
			'id'          => 'cryptoland_mobilenav_info',
			'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_mobile_menu_color',
			'label'       => esc_html__( 'Mobile menu color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the mobile menu background and menu item colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'navigation',
			'settings'    => array(
			  'menubg'     	=> _x( 'Menu background', 'color picker', 'cryptoland' ),
			  'item'     	=> _x( 'Menu Item', 'color picker', 'cryptoland' ),
			  'itemhover'   => _x( 'Item Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_mobile_menubtn',
			'label'       => esc_html__( 'Mobile menu open/close button color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the mobile menu open and close button colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'navigation',
			'settings'    => array(
			  'open'     	=> _x( 'Open', 'color picker', 'cryptoland' ),
			  'openhover' 	=> _x( 'Open Hover', 'color picker', 'cryptoland' ),
			  'close' 		=> _x( 'Close', 'color picker', 'cryptoland' ),
			  'closehover' 	=> _x( 'Close Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_mob_typgrph',
			'label'     => esc_html__( 'Mobile menu item font typography', 'cryptoland' ),
			'desc'      => esc_html__( 'You can change mobile menu item typography', 'cryptoland' ),
			'type'      => 'typography',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_mobile_item_align',
			'label'       => esc_html__( 'Mobile menu text alignment', 'cryptoland' ),
			'desc'        => esc_html__( 'Select text position for text alignment in the mobile menu.' , 'cryptoland' ),
			'std'         => 'left',
			'type'        => 'select',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'left',
					'label'       => esc_html__( 'Left', 'cryptoland' )
				),
				array(
					'value'       => 'right',
					'label'       => esc_html__( 'Right', 'cryptoland' )
				),
				array(
					'value'       => 'center',
					'label'       => esc_html__( 'Center', 'cryptoland' )
				),
			)
		),
		// Header Login Buttons
		array(
			'id'          => 'cryptoland_buttons_tab',
			'label'       => esc_html__( 'Header Buttons', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
		array(
			'id'          => 'cryptoland_buttons_info',
			'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(off)',
			'operator'    => 'or'
		),
		// btn first
		array(
			'id'          => 'cryptoland_header_signin_display',
			'label'       => esc_html__( 'Header sign-in button visibility', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Header sign-in button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_signin_info',
			'label'       => esc_html__( 'Header sign-in button is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_signin_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_header_signin_title',
			'label'       => esc_html__( 'Header sign-in button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Add header sign-in button title', 'cryptoland' ),
			'type'        => 'text',
			'std'         => 'Sign in',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_signin_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_header_signin_url',
			'label'       => esc_html__( 'Header sign-in button url', 'cryptoland' ),
			'desc'        => esc_html__( 'Add header sign-in button url', 'cryptoland' ),
			'type'        => 'text',
			'std'         => '#0',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_signin_display:is(on)',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_header_signin_target',
		'label'     => esc_html__('Header sign-in button target', 'cryptoland' ),
		'desc'      => esc_html__('Add header sign-in button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_header_display:is(on),cryptoland_header_signin_display:is(on)',
		'section'   => 'navigation',
		'operator'  => 'and',
			'choices'   => array(
				array(
					'value' => '_blank',
					'label' => esc_html__('_blank', 'cryptoland' ),
				),
				array(
					'value' => '_self',
					'label' => esc_html__('_self', 'cryptoland' ),
				),
				array(
					'value' => '_top',
					'label' => esc_html__('_top', 'cryptoland' ),
				),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
			)
		),
		array(
			'id'          => 'cryptoland_header_signin_color',
			'label'       => esc_html__( 'Header sign-in button color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the header sign-in button colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'navigation',
			'settings'    => array(
			  'color'     	=> _x( 'Title color', 'color picker', 'cryptoland' ),
			  'hover' 		=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bg' 			=> _x( 'Background', 'color picker', 'cryptoland' ),
			  'bghover' 	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_signin_display:is(on)',
			'operator'    => 'and'
		),
		// btn second
		array(
			'id'          => 'cryptoland_header_signup_display',
			'label'       => esc_html__( 'Header sign-up button visibility', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Header sign-up button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_signup_info',
			'label'       => esc_html__( 'Header sign-up button is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_signup_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_header_signup_title',
			'label'       => esc_html__( 'Header sign-up button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Add header sign-up button title', 'cryptoland' ),
			'type'        => 'text',
			'std'         => 'Sign up',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_signup_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_header_signup_url',
			'label'       => esc_html__( 'Header sign-up button url', 'cryptoland' ),
			'desc'        => esc_html__( 'Add header sign-up button url', 'cryptoland' ),
			'type'        => 'text',
			'std'         => '#0',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_signup_display:is(on)',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_header_signup_target',
		'label'     => esc_html__('Header sign-up button target', 'cryptoland' ),
		'desc'      => esc_html__('Add header sign-up button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_header_display:is(on),cryptoland_header_signup_display:is(on)',
		'section'   => 'navigation',
		'operator'  => 'and',
			'choices'   => array(
				array(
					'value' => '_blank',
					'label' => esc_html__('_blank', 'cryptoland' ),
				),
				array(
					'value' => '_self',
					'label' => esc_html__('_self', 'cryptoland' ),
				),
				array(
					'value' => '_top',
					'label' => esc_html__('_top', 'cryptoland' ),
				),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
			)
		),
		array(
			'id'          => 'cryptoland_header_signup_color',
			'label'       => esc_html__( 'Header sign-up button color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the header signin button colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'navigation',
			'settings'    => array(
			  'color'     	=> _x( 'Title color', 'color picker', 'cryptoland' ),
			  'hover' 		=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bg' 			=> _x( 'Background', 'color picker', 'cryptoland' ),
			  'bghover' 	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_signup_display:is(on)',
			'operator'    => 'and'
		),
		// btn third
		array(
			'id'          => 'cryptoland_header_telegram_display',
			'label'       => esc_html__( 'Header telegram button visibility', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Telegram button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_header_display:is(on)',
			'section'     => 'navigation',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_btntel_info',
			'label'       => esc_html__( 'Header telegram button is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_telegram_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_header_telegram_img',
			'label'       => esc_html__( 'Telegram button image', 'cryptoland' ),
			'desc'        => esc_html__( 'Upload the telegram button image.Please leave this field blank if you do not want to use it', 'cryptoland' ),
			'type'        => 'upload',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on), cryptoland_header_telegram_display:is(on)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_header_telegram_url',
			'label'       => esc_html__( 'Telegram button  button URL', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter the telegram button URL', 'cryptoland' ),
			'type'        => 'text',
			'std'         => '#0',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_telegram_display:is(on)',
			'operator'    => 'and'
		),
		//mobile btn display
		array(
			'id'          => 'cryptoland_header_btn_mobile_display',
			'label'       => esc_html__( 'On mobile menu header button visibility', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'In the mobile menu, you can show or hide the all button with %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_btn_mobile_info',
			'label'       => esc_html__( 'Header mobile menu button is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_btn_mobile_display:is(off)',
			'operator'    => 'or'
		),
		// header language switcher
		array(
			'id'          => 'cryptoland_lang_tab',
			'label'       => esc_html__( 'Header Language', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'navigation'
		),
		array(
			'id'          => 'cryptoland_headerlang_info',
			'label'       => esc_html__( 'Theme header navigation is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_header_lang_display',
			'label'       => esc_html__( 'Header language visibility', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Language switcher display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_lang_info',
			'label'       => esc_html__( 'Theme header language is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_lang_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_header_lang',
			'label'       => esc_html__( 'Language Switcher', 'cryptoland' ),
			'desc'        => esc_html__( 'Create your language switcher for header', 'cryptoland' ),
			'type'        => 'list-item',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_lang_display:is(on)',
			'operator'    => 'and',
			'settings'    => array(
				array(
					'id'          => 'cryptoland_lang_item',
					'label'       => esc_html__( 'Language name', 'cryptoland' ),
					'desc'        => esc_html__( 'Enter language name. example : ru', 'cryptoland' ),
					'type'        => 'text'
				),
                array(
					'id'          => 'cryptoland_lang_item_url',
					'label'       => esc_html__( 'Language URL', 'cryptoland' ),
					'desc'        => esc_html__( 'Enter language URL.', 'cryptoland' ),
					'type'        => 'text'
				),
			)
		),
		array(
			'id'          => 'cryptoland_header_lang_mobile_display',
			'label'       => esc_html__( 'On mobile menu language switcher visibility', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'In the mobile menu, you can show or hide the language switcher with %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_display:is(on),cryptoland_header_lang_display:is(on)',
			'operator'    => 'and',
		),
        array(
			'id'        => 'cryptoland_header_lang_bg',
			'label'     => esc_html__( 'Language list background color ', 'cryptoland' ),
			'desc'      => esc_html__( 'Please select color', 'cryptoland' ),
			'type'      => 'colorpicker-opacity',
			'condition' => 'cryptoland_header_display:is(on),cryptoland_header_lang_display:is(on)',
			'section'   => 'navigation',
			'operator'  => 'and'
		),
        array(
			'id'        => 'cryptoland_header_lang_a',
			'label'     => esc_html__( 'Language list link color ', 'cryptoland' ),
			'desc'      => esc_html__( 'Please select color', 'cryptoland' ),
			'type'      => 'colorpicker',
			'condition' => 'cryptoland_header_display:is(on),cryptoland_header_lang_display:is(on)',
			'section'   => 'navigation',
			'operator'  => 'and'
		),
        array(
			'id'        => 'cryptoland_header_lang_hvra',
			'label'     => esc_html__( 'Hover link color ', 'cryptoland' ),
			'desc'      => esc_html__( 'Please select color', 'cryptoland' ),
			'type'      => 'colorpicker',
			'condition' => 'cryptoland_header_display:is(on),cryptoland_header_lang_display:is(on)',
			'section'   => 'navigation',
			'operator'  => 'and'
		),
        array(
			'id'        => 'cryptoland_header_lang_active',
			'label'     => esc_html__( 'Active lang text color ', 'cryptoland' ),
			'desc'      => esc_html__( 'Please select color', 'cryptoland' ),
			'type'      => 'colorpicker-opacity',
			'condition' => 'cryptoland_header_display:is(on),cryptoland_header_lang_display:is(on)',
			'section'   => 'navigation',
			'operator'  => 'and'
		),
		array(
			'id'          => 'cryptoland_lang_mobile_info',
			'label'       => esc_html__( 'Theme mobile menu header language is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'navigation',
			'condition'   => 'cryptoland_header_lang_mobile_display:is(off)',
			'operator'    => 'or'
		),
		/*************************************************
		## PRELOADER SETTİNGS.
		*************************************************/

		array(
			'id'        => 'cryptoland_pre_settings',
			'label'     => esc_html__( 'Preloader', 'cryptoland' ),
			'desc'      => sprintf( esc_html__( 'Preloader display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'       => 'on',
			'type'      => 'on-off',
			'section'   => 'pre',
			'operator'  => 'and'
		),
		 array(
			'id'        => 'cryptoland_pre_type',
			'label'     => esc_html__('Preloader types', 'cryptoland' ),
			'desc'      => esc_html__('Please choose a preloader type', 'cryptoland' ),
			'std'       => 'default',
			'type'      => 'select',
			'section'   => 'pre',
			'condition' => 'cryptoland_pre_settings:is(on)',
			'operator'  => 'and',
			'choices'   => array(
			array(
				'value' => 'default',
				'label' => esc_html__('Default', 'cryptoland' ),
			),
			array(
				'value' => '01',
				'label' => esc_html__('Type 1', 'cryptoland' ),
			),
			array(
				'value' => '02',
				'label' => esc_html__('Type 2', 'cryptoland' ),
			),
			array(
				'value' => '03',
				'label' => esc_html__('Type 3', 'cryptoland' ),
			),
			array(
				'value' => '04',
				'label' => esc_html__('Type 4', 'cryptoland' ),
			),
			array(
				'value' => '05',
				'label' => esc_html__('Type 5', 'cryptoland' ),
			),
			array(
				'value' => '06',
				'label' => esc_html__('Type 6', 'cryptoland' ),
			),
			array(
				'value' => '07',
				'label' => esc_html__('Type 7', 'cryptoland' ),
			),
			array(
				'value' => '08',
				'label' => esc_html__('Type 8', 'cryptoland' ),
			),
			array(
				'value' => '09',
				'label' => esc_html__('Type 9', 'cryptoland' ),
			),
			array(
				'value' => '10',
				'label' => esc_html__('Type 10', 'cryptoland' ),
			),
			array(
				'value' => '11',
				'label' => esc_html__('Type 11', 'cryptoland' ),
			),
			array(
				'value' => '12',
				'label' => esc_html__('Type 12', 'cryptoland' ),
			),
		  )
		),
		array(
			'id'        => 'cryptoland_pre_bgcolor',
			'label'     => esc_html__( 'Preloader BG color ', 'cryptoland' ),
			'desc'      => esc_html__( 'Please select color', 'cryptoland' ),
			'type'      => 'colorpicker-opacity',
			'condition' => 'cryptoland_pre_settings:is(on)',
			'section'   => 'pre'
		),
		array(
			'id'        => 'cryptoland_pre_spincolor',
			'label'     => esc_html__( 'Preloader spin color ', 'cryptoland' ),
			'desc'      => esc_html__( 'Please select color', 'cryptoland' ),
			'type'      => 'colorpicker-opacity',
			'condition' => 'cryptoland_pre_settings:is(on),cryptoland_pre_settings:not(default)',
			'section'   => 'pre',
			'operator'  => 'and'
		),
		array(
			'id'          => 'cryptoland_pre_info',
			'label'       => esc_html__( 'Preloader is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'pre',
			'condition'   => 'cryptoland_pre_settings:is(off)',
			'operator'    => 'or'
		),
		/*************************************************
		## SIDEBAR TYPE SETTINGS.
		*************************************************/

		array(
		 'id'        => 'cryptoland_sidebar_type',
		 'label'     => esc_html__('General sidebar', 'cryptoland' ),
		 'desc'      => esc_html__('If you want to use same sidebar on all inner pages, select ON', 'cryptoland' ),
		 'std'       => 'default',
		 'type'      => 'select',
		 'section'   => 'sidebars',
		 'operator'  => 'and',
		 'choices'   => array(
				array(
				 'value' => 'default',
				 'label' => esc_html__('Default', 'cryptoland' ),
				),
				array(
				 'value' => 'custom',
				 'label' => esc_html__('Custom', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'          => 'cryptoland_blog_layout',
			'label'       => esc_html__( 'Blog layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose blog page layout type', 'cryptoland' ),
			'std'         => 'right-sidebar',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_post_layout',
			'label'       => esc_html__( 'Blog single page layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose post page layout type', 'cryptoland' ),
			'std'         => 'right-sidebar',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_layout',
			'label'       => esc_html__( 'Search page Layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose search page layout type', 'cryptoland' ),
			'std'         => 'right-sidebar',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_layout',
			'label'       => esc_html__( 'Archive page layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose archive page layout type', 'cryptoland' ),
			'std'         => 'right-sidebar',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_404_layout',
			'label'       => esc_html__( '404 page layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose 404 page layout type', 'cryptoland' ),
			'std'         => 'full-width',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_woosingle_layout',
			'label'       => esc_html__( 'Woocommerce single page layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose Woocommerce single page layout type', 'cryptoland' ),
			'std'         => 'right-sidebar',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),
		   array(
			'id'          => 'cryptoland_woopage_layout',
			'label'       => esc_html__( 'Woocommerce page layout', 'cryptoland' ),
			'desc'        => esc_html__( 'Choose Woocommerce page layout type', 'cryptoland' ),
			'std'         => 'right-sidebar',
			'type'        => 'radio-image',
			'section'     => 'sidebars',
			'operator'    => 'and'
		),

		/*************************************************
		## SIDEBAR SETTINGS.
		*************************************************/

		array(
			'id'          => 'cryptoland_sidebar_color',
			'label'       => esc_html__( 'Theme sidebar color', 'cryptoland' ),
			'desc'        => esc_html__( 'You can change the sidebar colors here.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'settings'    => array(
			  'bg'     		=> _x( 'Sidebar Background', 'color picker', 'cryptoland' ),
			  'normal'     	=> _x( 'General Color', 'color picker', 'cryptoland' ),
			  'title'   	=> _x( 'Widget Title', 'color picker', 'cryptoland' ),
			  'search'   	=> _x( 'Search Text', 'color picker', 'cryptoland' ),
			  'searchbg'   	=> _x( 'Search Background', 'color picker', 'cryptoland' ),
			  'link'   		=> _x( 'Link Color', 'color picker', 'cryptoland' ),
			  'linkhover'   => _x( 'Link Hover', 'color picker', 'cryptoland' ),
			),
			'section'     => 'sidebars_settings',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sidebar_padding',
			'label'       => esc_html__( 'Sidebar padding spacing', 'cryptoland' ),
			'desc'        => esc_html__( 'Blog/Post page hero section margin', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => '',
			'section'     => 'sidebars_settings',
		),
		array(
		 'id'        	=> 'cryptoland_sidebar_height',
		 'label'     	=> esc_html__('Sidebar height', 'cryptoland' ),
		 'desc'        => esc_html__( 'This option is useful when there is a background color or border in the sidebar', 'cryptoland' ),
		 'std'       	=> '',
		 'type'      	=> 'select',
		 'section'   	=> 'sidebars_settings',
		 'condition'    => '',
		 'operator'  	=> 'and',
		 'choices'   	=> array(
				array(
				 'value' => '',
				 'label' => esc_html__('default', 'cryptoland' ),
				),
				array(
				 'value' => 'fit-content',
				 'label' => esc_html__('fit-content', 'cryptoland' ),
				),
				array(
				 'value' => 'max-content',
				 'label' => esc_html__('max-content', 'cryptoland' ),
				),
				array(
				 'value' => 'inherit',
				 'label' => esc_html__('inherit', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'        => 'cryptoland_sidebar_border',
			'label'     => esc_html__( 'Sidebar border', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change the border style properties of the sidebar.', 'cryptoland' ),
			'type'      => 'border',
			'section'   => 'sidebars_settings',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sidebar_border_radius',
			'label'       => esc_html__('Sidebar border radius', 'cryptoland' ),
			'desc'        => esc_html__('With this feature you can change the border-radius style properties of the sidebar', 'cryptoland' ),
			'std'         => '0',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100,1',
			'section'     => 'sidebars_settings',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_widget_border',
			'label'     => esc_html__( 'Widget border', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change the border style properties of the sidebar widget.', 'cryptoland' ),
			'type'      => 'border',
			'section'   => 'sidebars_settings',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_sidebar_widget_typgrph',
			'label'     => esc_html__( 'Widget heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the widget heading.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'sidebars_settings',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_sidebar_widget_bxshdw',
			'label'     => esc_html__( 'Widget box shadow', 'cryptoland' ),
			'desc'        => sprintf( __( 'The Box Shadow option type is used to set %s, %s, %s, %s, %s, and %s values.', 'cryptoland' ), '<code>inset</code>', '<code>offset-x</code>', '<code>offset-y</code>', '<code>blur-radius</code>', '<code>spread-radius</code>', '<code>color</code>' ),
			'std'         => '',
			'type'        => 'box-shadow',
			'section'     => 'sidebars_settings',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sidebar_sticky',
			'label'       => esc_html__( 'Sticky sidebar ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'You can make the sidebar is sticked/un with %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'sidebars_settings',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sidebar_sticky_offset',
			'label'       => esc_html__('Sidebar sticky offset', 'cryptoland' ),
			'desc'        => esc_html__('Offset the sticky element, useful if you have a fixed header that scrolls with the page', 'cryptoland' ),
			'std'         => '100',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,1000,1',
			'section'     => 'sidebars_settings',
			'condition'   => 'cryptoland_sidebar_sticky:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sidebar_sticky_animate',
			'label'       => esc_html__( 'Sticky animate ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'You can make the sidebar is animated %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'sidebars_settings',
			'condition'   => 'cryptoland_sidebar_sticky:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_sidebar_sticky_animate_time',
			'label'       => esc_html__('Sticky animate time', 'cryptoland' ),
			'desc'        => esc_html__('Set animate time for the sticky sidebar', 'cryptoland' ),
			'std'         => '1000',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,10000,10',
			'section'     => 'sidebars_settings',
			'condition'   => 'cryptoland_sidebar_sticky:is(on),cryptoland_sidebar_sticky_animate:is(on)',
			'operator'    => 'and'
		),
		/*************************************************
		## BLOG PAGE SETTINGS
		*************************************************/

		array(
			'id'          => 'cryptoland_blog_hero_tab',
			'label'       =>  esc_html__( 'Blog Hero', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_hero_display',
			'label'       => esc_html__( 'Blog/Post page hero section display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select blog post page hero section display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_hero_info',
			'label'       => esc_html__( 'Blog/Post page hero section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_cryptoland_blog_hero_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_blog_hero_bg',
			'label'       =>  esc_html__( 'Blog/Post page hero section background image', 'cryptoland' ),
			'desc'        =>  esc_html__( 'You can upload your image for header', 'cryptoland' ),
			'type'        => 'background',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_hero_overlay',
			'label'       => esc_html__( 'Blog/Post page overlay color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Please select color', 'cryptoland' ),
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'type'        => 'colorpicker-opacity',
			'section'     => 'blog_page'
		),
		//parallax options
		array(
			'id'          => 'cryptoland_blog_hero_parallax',
			'label'       => esc_html__( 'Blog/Post page hero parallax background', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option adds parallax to hero background image %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
		 'id'        	=> 'cryptoland_blog_hero_parallax_type',
		 'label'     	=> esc_html__('Parallax type', 'cryptoland' ),
		 'std'       	=> 'default',
		 'type'      	=> 'select',
		 'section'   	=> 'blog_page',
		 'condition'    => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_parallax:is(on)',
		 'operator'  	=> 'and',
		 'choices'   	=> array(
				array(
				 'value' => 'scroll',
				 'label' => esc_html__('scroll', 'cryptoland' ),
				),
				array(
				 'value' => 'scale',
				 'label' => esc_html__('scale', 'cryptoland' ),
				),
				array(
				 'value' => 'opacity',
				 'label' => esc_html__('opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scroll-opacity',
				 'label' => esc_html__('scroll-opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scale-opacity',
				 'label' => esc_html__('scale-opacity', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'          => 'cryptoland_blog_hero_parallax_speed',
			'label'       => esc_html__('Parallax speed', 'cryptoland' ),
			'desc'        => esc_html__('Default parallax spedd : 0.2', 'cryptoland' ),
			'std'         => '0.2',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,2,0.1',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_hero_parallax_video',
			'label'       => esc_html__( 'Parallax video', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Enter video url.Support youtube,vimeo and local video.youtube: %s vimeo: %s local: %s.', 'cryptoland' ), '<code>https://www.youtube.com/watch?v=ab0TSkLe-E0</code>', '<code>https://vimeo.com/110138539</code>', '<code>mp4:./video/local-video.mp4</code>' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_parallax:is(on)',
			'section'     => 'blog_page'
		),
		array(
			'id'          => 'cryptoland_blog_hero_parallax_mobile',
			'label'       => esc_html__( 'On mobile device ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option disable parallax effect to hero background image on mobile device.%s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_hero_bgheight',
			'label'       => esc_html__('Blog/Post page hero section height', 'cryptoland' ),
			'desc'        => esc_html__('Blog/Post page hero section height', 'cryptoland' ),
			'std'         => '55',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_h_p',
			'label'       => esc_html__( 'Blog/Post page hero section padding', 'cryptoland' ),
			'desc'        => esc_html__( 'Blog/Post page hero section padding', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_h_m',
			'label'       => esc_html__( 'Blog/Post page hero section margin', 'cryptoland' ),
			'desc'        => esc_html__( 'Blog/Post page hero section margin', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
		),
		//Blog heading
		array(
			'id'          => 'cryptoland_blog_heading_tab',
			'label'       =>  esc_html__( 'Blog Heading', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_heading_display',
			'label'       => esc_html__( 'Blog/Post page heading display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select blog post page heading display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_heading_info',
			'label'       => esc_html__( 'Blog/Post page heading is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_heading_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_blog_heading',
			'label'       => esc_html__( 'Blog/Post page heading', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter blog post page heading', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_blog_heading_display:is(on),cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page'
		),
		array(
			'id'        => 'cryptoland_blog_heading_typgrph',
			'label'     => esc_html__( 'Heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'blog_page',
			'condition'   => 'cryptoland_blog_heading_display:is(on),cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_blog_heading_992_typgrph',
			'label'     => esc_html__( 'Desktop device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 992px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'blog_page',
			'condition'   => 'cryptoland_blog_heading_display:is(on),cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_blog_heading_768_typgrph',
			'label'     => esc_html__( 'Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 768px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'blog_page',
			'condition'   => 'cryptoland_blog_heading_display:is(on),cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_blog_heading_576_typgrph',
			'label'     => esc_html__( 'Extra Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 576px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'blog_page',
			'condition'   => 'cryptoland_blog_heading_display:is(on),cryptoland_blog_hero_display:is(on)',
			'operator'    => 'and'
		),
		//Blog slogan
		array(
			'id'          => 'cryptoland_blog_slogan_tab',
			'label'       =>  esc_html__( 'Blog Slogan', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_slogan_display',
			'label'       => esc_html__( 'Blog/Post page slogan display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select blog post page slogan display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_slogan_info',
			'label'       => esc_html__( 'Blog/Post Slogan is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_slogan_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_blog_slogan',
			'label'       => esc_html__( 'Blog/Post page slogan', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter blog post page slogan', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_blog_slogan_display:is(on),cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page'
		),
		array(
			'id'          => 'cryptoland_blog_slogan_typgrph',
			'label'       => esc_html__( 'Slogan typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the blog slogan.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_slogan_display:is(on)',
			'operator'    => 'and'
		),
		//Blog desc
		array(
			'id'          => 'cryptoland_blog_desc_tab',
			'label'       =>  esc_html__( 'Blog Description', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_desc_display',
			'label'       => esc_html__( 'Blog/Post page description display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select blog post page description display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_desc_info',
			'label'       => esc_html__( 'Blog/Post description is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_desc_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_blog_desc',
			'label'       => esc_html__( 'Blog/Post page description', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter blog post page description', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_desc_display:is(on)',
			'section'     => 'blog_page'
		),
		array(
			'id'          => 'cryptoland_blog_desc_typgrph',
			'label'       => esc_html__( 'Description typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the blog description.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_desc_display:is(on)',
			'operator'    => 'and'
		),
		//Blog post page hero button settings
		array(
			'id'          => 'cryptoland_blog_herobutton_tab',
			'label'       => esc_html__( 'Blog Button', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_hero_btn_display',
			'label'       => esc_html__( 'Blog/Post page button display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select blog post page button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_hero_btn',
			'label'       => esc_html__( 'Blog/Post page button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter blog post page button title', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_btn_display:is(on)',
			'section'     => 'blog_page'
		),
		array(
			'id'          => 'cryptoland_blog_hero_btn_url',
			'label'       => esc_html__( 'Blog/Post page button URL', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter blog post page button URL', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_btn_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_blog_hero_btn_target',
		'label'     => esc_html__('Blog/Post page button target', 'cryptoland' ),
		'desc'      => esc_html__('Enter blog post page button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_btn_display:is(on)',
		'section'   => 'blog_page',
		'operator'  => 'and',
		  'choices'   => array(
			  array(
				  'value' => '_blank',
				  'label' => esc_html__('_blank', 'cryptoland' ),
			  ),
			  array(
				  'value' => '_self',
				  'label' => esc_html__('_self', 'cryptoland' ),
			  ),
				array(
				  'value' => '_top',
				  'label' => esc_html__('_top', 'cryptoland' ),
			  ),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
		 	)
		),
		array(
			'id'          => 'cryptoland_blog_btn_color',
			'label'       => esc_html__( 'Button Color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change blog hero button color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'blog_page',
			'settings'    => array(
			  'normal'     	=> _x( 'Title Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bgnormal'   	=> _x( 'Background Color', 'color picker', 'cryptoland' ),
			  'bghover'   	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_hero_btn_display:is(on)',
			'operator'    => 'and'
		),
		//Blog post page breadcrumb
		array(
			'id'          => 'cryptoland_blog_bred_tab',
			'label'       => esc_html__( 'Blog Breadcrubms', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_bread',
			'label'       => esc_html__( 'Blog/Post page breadcrubms display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Breadcrubms display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_breadcrubms_color',
			'label'       => esc_html__( 'Blog/Post page breadcrubms color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Change blog hero breadcrubms color .', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'blog_page',
			'settings'    => array(
			  'color'     	=> _x( 'General Color', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Link Hover Color', 'color picker', 'cryptoland' ),
			  'current'   	=> _x( 'Current Color', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_bread:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_blog_bread_typgrph',
			'label'       => esc_html__( 'Breadcrubms typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the blog breadcrubms.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'blog_page',
			'condition'   => 'cryptoland_blog_hero_display:is(on),cryptoland_blog_bread:is(on)',
			'operator'    => 'and'
		),
		//Blog/post page general setting
		array(
			'id'          => 'cryptoland_blog_generalsetting_tab',
			'label'       => esc_html__( 'Blog General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'blog_page',
		),
		array(
			'id'          => 'cryptoland_blog_hero_text_align',
			'label'       => esc_html__( 'Blog/Post page hero align', 'cryptoland' ),
			'desc'        => esc_html__( 'Select Blog/Post page hero align. Default :center.' , 'cryptoland' ),
			'std'         => 'center',
			'type'        => 'select',
			'condition'   => 'cryptoland_blog_hero_display:is(on)',
			'section'     => 'blog_page',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'left',
					'label'       => esc_html__( 'Left', 'cryptoland' )
				),
				array(
					'value'       => 'center',
					'label'       => esc_html__( 'Center', 'cryptoland' )
				),
				array(
					'value'       => 'right',
					'label'       => esc_html__( 'Right', 'cryptoland' )
				),
			)
		),


		/*************************************************
		## SINGLE  HERO SETTINGS
		*************************************************/

		array(
			'id'          => 'cryptoland_single_hero_tab',
			'label'       =>  esc_html__( 'Single Hero', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_hero_display',
			'label'       => esc_html__( 'Single page hero section display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select single post page hero section display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_hero_info',
			'label'       => esc_html__( 'Single page hero section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_cryptoland_single_hero_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_single_hero_bg',
			'label'       =>  esc_html__( 'Single page hero section background image', 'cryptoland' ),
			'desc'        =>  esc_html__( 'You can upload your image for header', 'cryptoland' ),
			'type'        => 'background',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_hero_overlay',
			'label'       => esc_html__( 'Single page overlay color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Please select color', 'cryptoland' ),
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'type'        => 'colorpicker-opacity',
			'section'     => 'single_page'
		),
		//parallax options
		array(
			'id'          => 'cryptoland_single_hero_parallax',
			'label'       => esc_html__( 'Single page hero parallax background', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option adds parallax to hero background image %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
		 'id'        	=> 'cryptoland_single_hero_parallax_type',
		 'label'     	=> esc_html__('Parallax type', 'cryptoland' ),
		 'std'       	=> 'default',
		 'type'      	=> 'select',
		 'section'   	=> 'single_page',
		 'condition'    => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_parallax:is(on)',
		 'operator'  	=> 'and',
		 'choices'   	=> array(
				array(
				 'value' => 'scroll',
				 'label' => esc_html__('scroll', 'cryptoland' ),
				),
				array(
				 'value' => 'scale',
				 'label' => esc_html__('scale', 'cryptoland' ),
				),
				array(
				 'value' => 'opacity',
				 'label' => esc_html__('opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scroll-opacity',
				 'label' => esc_html__('scroll-opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scale-opacity',
				 'label' => esc_html__('scale-opacity', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'          => 'cryptoland_single_hero_parallax_speed',
			'label'       => esc_html__('Parallax speed', 'cryptoland' ),
			'desc'        => esc_html__('Default parallax spedd : 0.2', 'cryptoland' ),
			'std'         => '0.2',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,2,0.1',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_hero_parallax_video',
			'label'       => esc_html__( 'Parallax video', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter video url.Support youtube,vimeo and local video.e.g:https://www.youtube.com/watch?v=ab0TSkLe-E0', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_parallax:is(on)',
			'section'     => 'single_page'
		),
		array(
			'id'          => 'cryptoland_single_hero_parallax_mobile',
			'label'       => esc_html__( 'On mobile device ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option disable parallax effect to hero background image on mobile device.%s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_hero_bgheight',
			'label'       => esc_html__('Single page hero section height', 'cryptoland' ),
			'desc'        => esc_html__('Single page hero section height', 'cryptoland' ),
			'std'         => '55',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_h_p',
			'label'       => esc_html__( 'Single page hero section padding', 'cryptoland' ),
			'desc'        => esc_html__( 'Single page hero section padding', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_h_m',
			'label'       => esc_html__( 'Single page hero section margin', 'cryptoland' ),
			'desc'        => esc_html__( 'Single page hero section margin', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
		),
		//Single heading
		array(
			'id'          => 'cryptoland_single_heading_tab',
			'label'       =>  esc_html__( 'Single Heading', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_heading_display',
			'label'       => esc_html__( 'Single page heading display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select single post page heading display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_heading_info',
			'label'       => esc_html__( 'Single page heading is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_heading_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_single_heading',
			'label'       => esc_html__( 'Single page heading', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter single post page heading', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_single_heading_display:is(on),cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page'
		),
		array(
			'id'        => 'cryptoland_single_heading_typgrph',
			'label'     => esc_html__( 'Heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'single_page',
			'condition'   => 'cryptoland_single_heading_display:is(on),cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_single_heading_992_typgrph',
			'label'     => esc_html__( 'Desktop device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 992px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'single_page',
			'condition'   => 'cryptoland_single_heading_display:is(on),cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_single_heading_768_typgrph',
			'label'     => esc_html__( 'Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 768px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'single_page',
			'condition'   => 'cryptoland_single_heading_display:is(on),cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_single_heading_576_typgrph',
			'label'     => esc_html__( 'Extra Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 576px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'single_page',
			'condition'   => 'cryptoland_single_heading_display:is(on),cryptoland_single_hero_display:is(on)',
			'operator'    => 'and'
		),
		//Single slogan
		array(
			'id'          => 'cryptoland_single_slogan_tab',
			'label'       =>  esc_html__( 'Single Slogan', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_slogan_display',
			'label'       => esc_html__( 'Single page slogan display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select single post page slogan display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_slogan_info',
			'label'       => esc_html__( 'Single Slogan is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_slogan_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_single_slogan',
			'label'       => esc_html__( 'Single page slogan', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter single post page slogan', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_single_slogan_display:is(on),cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page'
		),
		array(
			'id'          => 'cryptoland_single_slogan_typgrph',
			'label'       => esc_html__( 'Slogan typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the single slogan.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_slogan_display:is(on)',
			'operator'    => 'and'
		),
		//Single desc
		array(
			'id'          => 'cryptoland_single_desc_tab',
			'label'       =>  esc_html__( 'Single Description', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_desc_display',
			'label'       => esc_html__( 'Single page description display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select single post page description display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_desc_info',
			'label'       => esc_html__( 'Single description is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_desc_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_single_desc',
			'label'       => esc_html__( 'Single page description', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter single post page description', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_desc_display:is(on)',
			'section'     => 'single_page'
		),
		array(
			'id'          => 'cryptoland_single_desc_typgrph',
			'label'       => esc_html__( 'Description typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the single description.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_desc_display:is(on)',
			'operator'    => 'and'
		),
		//Single post page hero button settings
		array(
			'id'          => 'cryptoland_single_herobutton_tab',
			'label'       => esc_html__( 'Single Button', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_hero_btn_display',
			'label'       => esc_html__( 'Single page button display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select single post page button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_hero_btn',
			'label'       => esc_html__( 'Single page button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter single post page button title', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_btn_display:is(on)',
			'section'     => 'single_page'
		),
		array(
			'id'          => 'cryptoland_single_hero_btn_url',
			'label'       => esc_html__( 'Single page button URL', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter single post page button URL', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_btn_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_single_hero_btn_target',
		'label'     => esc_html__('Single page button target', 'cryptoland' ),
		'desc'      => esc_html__('Enter single page button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_btn_display:is(on)',
		'section'   => 'single_page',
		'operator'  => 'and',
		  'choices'   => array(
			  array(
				  'value' => '_blank',
				  'label' => esc_html__('_blank', 'cryptoland' ),
			  ),
			  array(
				  'value' => '_self',
				  'label' => esc_html__('_self', 'cryptoland' ),
			  ),
				array(
				  'value' => '_top',
				  'label' => esc_html__('_top', 'cryptoland' ),
			  ),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
		 	)
		),
		array(
			'id'          => 'cryptoland_single_btn_color',
			'label'       => esc_html__( 'Button Color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change single hero button color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'single_page',
			'settings'    => array(
			  'normal'     	=> _x( 'Title Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bgnormal'   	=> _x( 'Background Color', 'color picker', 'cryptoland' ),
			  'bghover'   	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_hero_btn_display:is(on)',
			'operator'    => 'and'
		),
		//Single post page breadcrumb
		array(
			'id'          => 'cryptoland_single_bred_tab',
			'label'       => esc_html__( 'Single Breadcrubms', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_bread',
			'label'       => esc_html__( 'Single page breadcrubms display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Breadcrubms display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_breadcrubms_color',
			'label'       => esc_html__( 'Single page breadcrubms color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Change single hero breadcrubms color .', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'single_page',
			'settings'    => array(
			  'color'     	=> _x( 'General Color', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Link Hover Color', 'color picker', 'cryptoland' ),
			  'current'   	=> _x( 'Current Color', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_bread:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_single_bread_typgrph',
			'label'       => esc_html__( 'Breadcrubms typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the single breadcrubms.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'single_page',
			'condition'   => 'cryptoland_single_hero_display:is(on),cryptoland_single_bread:is(on)',
			'operator'    => 'and'
		),
		//Single/post page general setting
		array(
			'id'          => 'cryptoland_single_generalsetting_tab',
			'label'       => esc_html__( 'Single General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'single_page',
		),
		array(
			'id'          => 'cryptoland_single_hero_text_align',
			'label'       => esc_html__( 'Single page hero align', 'cryptoland' ),
			'desc'        => esc_html__( 'Select Single page hero align. Default :center.' , 'cryptoland' ),
			'std'         => 'center',
			'type'        => 'select',
			'condition'   => 'cryptoland_single_hero_display:is(on)',
			'section'     => 'single_page',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'left',
					'label'       => esc_html__( 'Left', 'cryptoland' )
				),
				array(
					'value'       => 'center',
					'label'       => esc_html__( 'Center', 'cryptoland' )
				),
				array(
					'value'       => 'right',
					'label'       => esc_html__( 'Right', 'cryptoland' )
				),
			)
		),
        array(
			'id'          => 'cryptoland_single_hero_content_width',
			'label'       => esc_html__( 'Single page content width', 'cryptoland' ),
			'desc'        => esc_html__( 'Select Single page hero align. Default :center.' , 'cryptoland' ),
			'std'         => 'center',
			'type'        => 'select',
			'section'     => 'single_page',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'default',
					'label'       => esc_html__( 'Default', 'cryptoland' )
				),
				array(
					'value'       => 'full',
					'label'       => esc_html__( 'Full-width', 'cryptoland' )
				),
				array(
					'value'       => 'full-nopadding',
					'label'       => esc_html__( 'Full-width ( no-padding )', 'cryptoland' )
				),
			)
		),
		/*************************************************
		## ARCHIVE  HERO SETTINGS
		*************************************************/

		array(
			'id'          => 'cryptoland_archive_hero_tab',
			'label'       =>  esc_html__( 'Archive Hero', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_hero_display',
			'label'       => esc_html__( 'Archive page hero section display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select archive post page hero section display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_hero_info',
			'label'       => esc_html__( 'Archive page hero section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_cryptoland_archive_hero_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_archive_hero_bg',
			'label'       =>  esc_html__( 'Archive page hero section background image', 'cryptoland' ),
			'desc'        =>  esc_html__( 'You can upload your image for header', 'cryptoland' ),
			'type'        => 'background',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_hero_overlay',
			'label'       => esc_html__( 'Archive page overlay color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Please select color', 'cryptoland' ),
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'type'        => 'colorpicker-opacity',
			'section'     => 'archive_page'
		),
		//parallax options
		array(
			'id'          => 'cryptoland_archive_hero_parallax',
			'label'       => esc_html__( 'Archive page hero parallax background', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option adds parallax to hero background image %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
		 'id'        	=> 'cryptoland_archive_hero_parallax_type',
		 'label'     	=> esc_html__('Parallax type', 'cryptoland' ),
		 'std'       	=> 'default',
		 'type'      	=> 'select',
		 'section'   	=> 'archive_page',
		 'condition'    => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_parallax:is(on)',
		 'operator'  	=> 'and',
		 'choices'   	=> array(
				array(
				 'value' => 'scroll',
				 'label' => esc_html__('scroll', 'cryptoland' ),
				),
				array(
				 'value' => 'scale',
				 'label' => esc_html__('scale', 'cryptoland' ),
				),
				array(
				 'value' => 'opacity',
				 'label' => esc_html__('opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scroll-opacity',
				 'label' => esc_html__('scroll-opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scale-opacity',
				 'label' => esc_html__('scale-opacity', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'          => 'cryptoland_archive_hero_parallax_speed',
			'label'       => esc_html__('Parallax speed', 'cryptoland' ),
			'desc'        => esc_html__('Default parallax spedd : 0.2', 'cryptoland' ),
			'std'         => '0.2',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,2,0.1',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_hero_parallax_video',
			'label'       => esc_html__( 'Parallax video', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter video url.Support youtube,vimeo and local video.e.g:https://www.youtube.com/watch?v=ab0TSkLe-E0', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_parallax:is(on)',
			'section'     => 'archive_page'
		),
		array(
			'id'          => 'cryptoland_archive_hero_parallax_mobile',
			'label'       => esc_html__( 'On mobile device ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option disable parallax effect to hero background image on mobile device.%s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_hero_bgheight',
			'label'       => esc_html__('Archive page hero section height', 'cryptoland' ),
			'desc'        => esc_html__('Archive page hero section height', 'cryptoland' ),
			'std'         => '55',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_h_p',
			'label'       => esc_html__( 'Archive page hero section padding', 'cryptoland' ),
			'desc'        => esc_html__( 'Archive page hero section padding', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_h_m',
			'label'       => esc_html__( 'Archive page hero section margin', 'cryptoland' ),
			'desc'        => esc_html__( 'Archive page hero section margin', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
		),
		//Archive heading
		array(
			'id'          => 'cryptoland_archive_heading_tab',
			'label'       =>  esc_html__( 'Archive Heading', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_heading_display',
			'label'       => esc_html__( 'Archive page heading display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select archive post page heading display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_heading_info',
			'label'       => esc_html__( 'Archive page heading is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_heading_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_archive_heading',
			'label'       => esc_html__( 'Archive page heading', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter archive post page heading', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_archive_heading_display:is(on),cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page'
		),
		array(
			'id'        => 'cryptoland_archive_heading_typgrph',
			'label'     => esc_html__( 'Heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'archive_page',
			'condition'   => 'cryptoland_archive_heading_display:is(on),cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_archive_heading_992_typgrph',
			'label'     => esc_html__( 'Desktop device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 992px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'archive_page',
			'condition'   => 'cryptoland_archive_heading_display:is(on),cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_archive_heading_768_typgrph',
			'label'     => esc_html__( 'Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 768px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'archive_page',
			'condition'   => 'cryptoland_archive_heading_display:is(on),cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_archive_heading_576_typgrph',
			'label'     => esc_html__( 'Extra Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 576px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'archive_page',
			'condition'   => 'cryptoland_archive_heading_display:is(on),cryptoland_archive_hero_display:is(on)',
			'operator'    => 'and'
		),

		//Archive slogan
		array(
			'id'          => 'cryptoland_archive_slogan_tab',
			'label'       =>  esc_html__( 'Archive Slogan', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_slogan_display',
			'label'       => esc_html__( 'Archive page slogan display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select archive post page slogan display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_slogan_info',
			'label'       => esc_html__( 'Archive Slogan is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_slogan_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_archive_slogan',
			'label'       => esc_html__( 'Archive page slogan', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter archive post page slogan', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_archive_slogan_display:is(on),cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page'
		),
		array(
			'id'          => 'cryptoland_archive_slogan_typgrph',
			'label'       => esc_html__( 'Slogan typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the archive slogan.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_slogan_display:is(on)',
			'operator'    => 'and'
		),
		//Archive desc
		array(
			'id'          => 'cryptoland_archive_desc_tab',
			'label'       =>  esc_html__( 'Archive Description', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_desc_display',
			'label'       => esc_html__( 'Archive page description display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select archive post page description display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_desc_info',
			'label'       => esc_html__( 'Archive description is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_desc_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_archive_desc',
			'label'       => esc_html__( 'Archive page description', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter archive post page description', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_desc_display:is(on)',
			'section'     => 'archive_page'
		),
		array(
			'id'          => 'cryptoland_archive_desc_typgrph',
			'label'       => esc_html__( 'Description typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the archive description.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_desc_display:is(on)',
			'operator'    => 'and'
		),
		//Archive page hero button settings
		array(
			'id'          => 'cryptoland_archive_herobutton_tab',
			'label'       => esc_html__( 'Archive Button', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_hero_btn_display',
			'label'       => esc_html__( 'Archive page button display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select archive post page button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_hero_btn',
			'label'       => esc_html__( 'Archive page button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter archive post page button title', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_btn_display:is(on)',
			'section'     => 'archive_page'
		),
		array(
			'id'          => 'cryptoland_archive_hero_btn_url',
			'label'       => esc_html__( 'Archive page button URL', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter archive post page button URL', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_btn_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_archive_hero_btn_target',
		'label'     => esc_html__('Archive page button target', 'cryptoland' ),
		'desc'      => esc_html__('Enter archive page button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_btn_display:is(on)',
		'section'   => 'archive_page',
		'operator'  => 'and',
			'choices'   => array(
				array(
					'value' => '_blank',
					'label' => esc_html__('_blank', 'cryptoland' ),
				),
				array(
					'value' => '_self',
					'label' => esc_html__('_self', 'cryptoland' ),
				),
				array(
					'value' => '_top',
					'label' => esc_html__('_top', 'cryptoland' ),
				),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
			)
		),
		array(
			'id'          => 'cryptoland_archive_btn_color',
			'label'       => esc_html__( 'Button Color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change archive hero button color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'blog_page',
			'settings'    => array(
			  'normal'     	=> _x( 'Title Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bgnormal'   	=> _x( 'Background Color', 'color picker', 'cryptoland' ),
			  'bghover'   	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_hero_btn_display:is(on)',
			'operator'    => 'and'
		),
		//Archive page breadcrumb
		array(
			'id'          => 'cryptoland_archive_bred_tab',
			'label'       => esc_html__( 'Archive Breadcrubms', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_bread',
			'label'       => esc_html__( 'Archive page breadcrubms display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Breadcrubms display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_breadcrubms_color',
			'label'       => esc_html__( 'Archive page breadcrubms color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Change archive hero breadcrubms color .', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'archive_page',
			'settings'    => array(
			  'color'     	=> _x( 'General Color', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Link Hover Color', 'color picker', 'cryptoland' ),
			  'current'   	=> _x( 'Current Color', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_bread:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_archive_bread_typgrph',
			'label'       => esc_html__( 'Breadcrubms typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the archive breadcrubms.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'archive_page',
			'condition'   => 'cryptoland_archive_hero_display:is(on),cryptoland_archive_bread:is(on)',
			'operator'    => 'and'
		),
		//Archive page general setting
		array(
			'id'          => 'cryptoland_archive_generalsetting_tab',
			'label'       => esc_html__( 'Archive General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'archive_page',
		),
		array(
			'id'          => 'cryptoland_archive_hero_text_align',
			'label'       => esc_html__( 'Archive page hero align', 'cryptoland' ),
			'desc'        => esc_html__( 'Select Archive page hero align. Default :center.' , 'cryptoland' ),
			'std'         => 'center',
			'type'        => 'select',
			'condition'   => 'cryptoland_archive_hero_display:is(on)',
			'section'     => 'archive_page',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'left',
					'label'       => esc_html__( 'Left', 'cryptoland' )
				),
				array(
					'value'       => 'center',
					'label'       => esc_html__( 'Center', 'cryptoland' )
				),
				array(
					'value'       => 'right',
					'label'       => esc_html__( 'Right', 'cryptoland' )
				),
			)
		),

		/*************************************************
		## 404 HERO SETTINGS
		*************************************************/

		array(
			'id'          => 'cryptoland_error_general_tab',
			'label'       =>  esc_html__( 'Custom 404 Page', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
        array(
			'id'          => 'cryptoland_use_custom_error_page',
			'label'       => esc_html__( 'Use Custom 404 Page?', 'cryptoland' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
        array(
          'id'            => 'cryptoland_error_selected_page',
          'label'         => esc_html__( 'Select Custom 404 Page', 'cryptoland' ),
          'std'           => '',
          'type'          => 'page-select',
          'section'       => 'error_page',
          'condition'     => 'cryptoland_use_custom_error_page:is(on)',
        ),
        array(
			'id'          => 'cryptoland_disable_header_on_error_page',
			'label'       => esc_html__( 'Display Header Navigation on Custom 404 Page?', 'cryptoland' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'operator'    => 'and',
            'condition'     => 'cryptoland_use_custom_error_page:is(on)',
		),
        array(
			'id'          => 'cryptoland_disable_widgetize_on_error_page',
			'label'       => esc_html__( 'Display Footer Widget Area on Custom 404 Page?', 'cryptoland' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'operator'    => 'and',
            'condition'     => 'cryptoland_use_custom_error_page:is(on)',
		),
        array(
			'id'          => 'cryptoland_disable_copyright_on_error_page',
			'label'       => esc_html__( 'Display Footer Copyright on Custom 404 Page?', 'cryptoland' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'operator'    => 'and',
            'condition'     => 'cryptoland_use_custom_error_page:is(on)',
		),
		array(
			'id'          => 'cryptoland_error_hero_tab',
			'label'       =>  esc_html__( '404 Hero', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_hero_display',
			'label'       => esc_html__( '404 page hero section display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select error post page hero section display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_hero_info',
			'label'       => esc_html__( '404 page hero section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_cryptoland_error_hero_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_error_hero_bg',
			'label'       =>  esc_html__( '404 page hero section background image', 'cryptoland' ),
			'desc'        =>  esc_html__( 'You can upload your image for header', 'cryptoland' ),
			'type'        => 'background',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_hero_overlay',
			'label'       => esc_html__( '404 page overlay color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Please select color', 'cryptoland' ),
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'type'        => 'colorpicker-opacity',
			'section'     => 'error_page'
		),
		//parallax options
		array(
			'id'          => 'cryptoland_error_hero_parallax',
			'label'       => esc_html__( '404 page hero parallax background', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option adds parallax to hero background image %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
		 'id'        	=> 'cryptoland_error_hero_parallax_type',
		 'label'     	=> esc_html__('Parallax type', 'cryptoland' ),
		 'std'       	=> 'default',
		 'type'      	=> 'select',
		 'section'   	=> 'error_page',
		 'condition'    => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_parallax:is(on)',
		 'operator'  	=> 'and',
		 'choices'   	=> array(
				array(
				 'value' => 'scroll',
				 'label' => esc_html__('scroll', 'cryptoland' ),
				),
				array(
				 'value' => 'scale',
				 'label' => esc_html__('scale', 'cryptoland' ),
				),
				array(
				 'value' => 'opacity',
				 'label' => esc_html__('opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scroll-opacity',
				 'label' => esc_html__('scroll-opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scale-opacity',
				 'label' => esc_html__('scale-opacity', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'          => 'cryptoland_error_hero_parallax_speed',
			'label'       => esc_html__('Parallax speed', 'cryptoland' ),
			'desc'        => esc_html__('Default parallax spedd : 0.2', 'cryptoland' ),
			'std'         => '0.2',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,2,0.1',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_hero_parallax_video',
			'label'       => esc_html__( 'Parallax video', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter video url.Support youtube,vimeo and local video.e.g:https://www.youtube.com/watch?v=ab0TSkLe-E0', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_parallax:is(on)',
			'section'     => 'error_page'
		),
		array(
			'id'          => 'cryptoland_error_hero_parallax_mobile',
			'label'       => esc_html__( 'On mobile device ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option disable parallax effect to hero background image on mobile device.%s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_hero_bgheight',
			'label'       => esc_html__('404 page hero section height', 'cryptoland' ),
			'desc'        => esc_html__('404 page hero section height', 'cryptoland' ),
			'std'         => '55',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_h_p',
			'label'       => esc_html__( '404 page hero section padding', 'cryptoland' ),
			'desc'        => esc_html__( '404 page hero section padding', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_h_m',
			'label'       => esc_html__( '404 page hero section margin', 'cryptoland' ),
			'desc'        => esc_html__( '404 page hero section margin', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
		),
		//404 heading
		array(
			'id'          => 'cryptoland_error_heading_tab',
			'label'       =>  esc_html__( '404 Heading', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_heading_display',
			'label'       => esc_html__( '404 page heading display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select error post page heading display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_heading_info',
			'label'       => esc_html__( '404 page heading is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_heading_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_error_heading',
			'label'       => esc_html__( '404 page heading', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter error post page heading', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_error_heading_display:is(on),cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page'
		),
		array(
			'id'        => 'cryptoland_error_heading_typgrph',
			'label'     => esc_html__( 'Heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'error_page',
			'condition'   => 'cryptoland_error_heading_display:is(on),cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_error_heading_992_typgrph',
			'label'     => esc_html__( 'Desktop device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 992px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'error_page',
			'condition'   => 'cryptoland_error_heading_display:is(on),cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_error_heading_768_typgrph',
			'label'     => esc_html__( 'Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 768px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'error_page',
			'condition'   => 'cryptoland_error_heading_display:is(on),cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_error_heading_576_typgrph',
			'label'     => esc_html__( 'Extra Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 576px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'error_page',
			'condition'   => 'cryptoland_error_heading_display:is(on),cryptoland_error_hero_display:is(on)',
			'operator'    => 'and'
		),
		//404 slogan
		array(
			'id'          => 'cryptoland_error_slogan_tab',
			'label'       =>  esc_html__( '404 Slogan', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_slogan_display',
			'label'       => esc_html__( '404 page slogan display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select error post page slogan display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_slogan_info',
			'label'       => esc_html__( '404 Slogan is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_slogan_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_error_slogan',
			'label'       => esc_html__( '404 page slogan', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter error post page slogan', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_error_slogan_display:is(on),cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page'
		),
		array(
			'id'          => 'cryptoland_error_slogan_typgrph',
			'label'       => esc_html__( 'Slogan typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the error slogan.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_slogan_display:is(on)',
			'operator'    => 'and'
		),
		//404 desc
		array(
			'id'          => 'cryptoland_error_desc_tab',
			'label'       =>  esc_html__( '404 Description', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_desc_display',
			'label'       => esc_html__( '404 page description display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select error post page description display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_desc_info',
			'label'       => esc_html__( '404 description is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_desc_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_error_desc',
			'label'       => esc_html__( '404 page description', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter error post page description', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_desc_display:is(on)',
			'section'     => 'error_page'
		),
		array(
			'id'          => 'cryptoland_error_desc_typgrph',
			'label'       => esc_html__( 'Description typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the error description.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_desc_display:is(on)',
			'operator'    => 'and'
		),
		//404 page hero button settings
		array(
			'id'          => 'cryptoland_error_herobutton_tab',
			'label'       => esc_html__( '404 Button', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_hero_btn_display',
			'label'       => esc_html__( '404 page button display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select error post page button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_hero_btn',
			'label'       => esc_html__( '404 page button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter error post page button title', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_btn_display:is(on)',
			'section'     => 'error_page'
		),
		array(
			'id'          => 'cryptoland_error_hero_btn_url',
			'label'       => esc_html__( '404 page button URL', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter error post page button URL', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_btn_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_error_hero_btn_target',
		'label'     => esc_html__('404 page button target', 'cryptoland' ),
		'desc'      => esc_html__('Enter error page button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_btn_display:is(on)',
		'section'   => 'error_page',
		'operator'  => 'and',
			'choices'   => array(
				array(
					'value' => '_blank',
					'label' => esc_html__('_blank', 'cryptoland' ),
				),
				array(
					'value' => '_self',
					'label' => esc_html__('_self', 'cryptoland' ),
				),
				array(
					'value' => '_top',
					'label' => esc_html__('_top', 'cryptoland' ),
				),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
			)
		),
		array(
			'id'          => 'cryptoland_error_btn_color',
			'label'       => esc_html__( 'Button Color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change error hero button color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'blog_page',
			'settings'    => array(
			  'normal'     	=> _x( 'Title Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bgnormal'   	=> _x( 'Background Color', 'color picker', 'cryptoland' ),
			  'bghover'   	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_hero_btn_display:is(on)',
			'operator'    => 'and'
		),
		//404 page breadcrumb
		array(
			'id'          => 'cryptoland_error_bred_tab',
			'label'       => esc_html__( '404 Breadcrubms', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_bread',
			'label'       => esc_html__( '404 page breadcrubms display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Breadcrubms display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_breadcrubms_color',
			'label'       => esc_html__( '404 page breadcrubms color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Change error hero breadcrubms color .', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'error_page',
			'settings'    => array(
			  'color'     	=> _x( 'General Color', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Link Hover Color', 'color picker', 'cryptoland' ),
			  'current'   	=> _x( 'Current Color', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_bread:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_error_bread_typgrph',
			'label'       => esc_html__( 'Breadcrubms typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the error breadcrubms.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'error_page',
			'condition'   => 'cryptoland_error_hero_display:is(on),cryptoland_error_bread:is(on)',
			'operator'    => 'and'
		),
		//404 page general setting
		array(
			'id'          => 'cryptoland_error_generalsetting_tab',
			'label'       => esc_html__( '404 General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'error_page',
		),
		array(
			'id'          => 'cryptoland_error_hero_text_align',
			'label'       => esc_html__( '404 page hero align', 'cryptoland' ),
			'desc'        => esc_html__( 'Select 404 page hero align. Default :center.' , 'cryptoland' ),
			'std'         => 'center',
			'type'        => 'select',
			'condition'   => 'cryptoland_error_hero_display:is(on)',
			'section'     => 'error_page',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'left',
					'label'       => esc_html__( 'Left', 'cryptoland' )
				),
				array(
					'value'       => 'center',
					'label'       => esc_html__( 'Center', 'cryptoland' )
				),
				array(
					'value'       => 'right',
					'label'       => esc_html__( 'Right', 'cryptoland' )
				),
			)
		),

		/*************************************************
		## SEARCH PAGE HERO SETTINGS
		*************************************************/

		array(
			'id'          => 'cryptoland_search_hero_tab',
			'label'       =>  esc_html__( 'Search Hero', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_hero_display',
			'label'       => esc_html__( 'Search page hero section display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select search post page hero section display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_hero_info',
			'label'       => esc_html__( 'Search page hero section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_cryptoland_search_hero_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_search_hero_bg',
			'label'       =>  esc_html__( 'Search page hero section background image', 'cryptoland' ),
			'desc'        =>  esc_html__( 'You can upload your image for header', 'cryptoland' ),
			'type'        => 'background',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_hero_overlay',
			'label'       => esc_html__( 'Search page overlay color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Please select color', 'cryptoland' ),
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'type'        => 'colorpicker-opacity',
			'section'     => 'search_page'
		),
		//parallax options
		array(
			'id'          => 'cryptoland_search_hero_parallax',
			'label'       => esc_html__( 'Search page hero parallax background', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option adds parallax to hero background image %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
		 'id'        	=> 'cryptoland_search_hero_parallax_type',
		 'label'     	=> esc_html__('Parallax type', 'cryptoland' ),
		 'std'       	=> 'default',
		 'type'      	=> 'select',
		 'section'   	=> 'search_page',
		 'condition'    => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_parallax:is(on)',
		 'operator'  	=> 'and',
		 'choices'   	=> array(
				array(
				 'value' => 'scroll',
				 'label' => esc_html__('scroll', 'cryptoland' ),
				),
				array(
				 'value' => 'scale',
				 'label' => esc_html__('scale', 'cryptoland' ),
				),
				array(
				 'value' => 'opacity',
				 'label' => esc_html__('opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scroll-opacity',
				 'label' => esc_html__('scroll-opacity', 'cryptoland' ),
				),
				array(
				 'value' => 'scale-opacity',
				 'label' => esc_html__('scale-opacity', 'cryptoland' ),
				),
		 	)
	 	),
		array(
			'id'          => 'cryptoland_search_hero_parallax_speed',
			'label'       => esc_html__('Parallax speed', 'cryptoland' ),
			'desc'        => esc_html__('Default parallax spedd : 0.2', 'cryptoland' ),
			'std'         => '0.2',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,2,0.1',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_hero_parallax_video',
			'label'       => esc_html__( 'Parallax video', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter video url.Support youtube,vimeo and local video.e.g:https://www.youtube.com/watch?v=ab0TSkLe-E0', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_parallax:is(on)',
			'section'     => 'search_page'
		),
		array(
			'id'          => 'cryptoland_search_hero_parallax_mobile',
			'label'       => esc_html__( 'On mobile device ?', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'This option disable parallax effect to hero background image on mobile device.%s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_parallax:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_hero_bgheight',
			'label'       => esc_html__('Search page hero section height', 'cryptoland' ),
			'desc'        => esc_html__('Search page hero section height', 'cryptoland' ),
			'std'         => '55',
			'type'        => 'numeric-slider',
			'min_max_step'=> '0,100',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_h_p',
			'label'       => esc_html__( 'Search page hero section padding', 'cryptoland' ),
			'desc'        => esc_html__( 'Search page hero section padding', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_h_m',
			'label'       => esc_html__( 'Search page hero section margin', 'cryptoland' ),
			'desc'        => esc_html__( 'Search page hero section margin', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
		),
		//Search heading
		array(
			'id'          => 'cryptoland_search_heading_tab',
			'label'       =>  esc_html__( 'Search Heading', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_heading_display',
			'label'       => esc_html__( 'Search page heading display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select search post page heading display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_heading_info',
			'label'       => esc_html__( 'Search page heading is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_heading_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_search_heading',
			'label'       => esc_html__( 'Search page heading', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter search post page heading', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_search_heading_display:is(on),cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page'
		),
		array(
			'id'        => 'cryptoland_search_heading_typgrph',
			'label'     => esc_html__( 'Heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'search_page',
			'condition'   => 'cryptoland_search_heading_display:is(on),cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_search_heading_992_typgrph',
			'label'     => esc_html__( 'Desktop device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 992px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'search_page',
			'condition'   => 'cryptoland_search_heading_display:is(on),cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_search_heading_768_typgrph',
			'label'     => esc_html__( 'Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 768px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'search_page',
			'condition'   => 'cryptoland_search_heading_display:is(on),cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'        => 'cryptoland_search_heading_576_typgrph',
			'label'     => esc_html__( 'Extra Small device heading typography', 'cryptoland' ),
			'desc'      => esc_html__( 'With this feature you can change all the style properties of the title on max-width 576px mobile device.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'search_page',
			'condition'   => 'cryptoland_search_heading_display:is(on),cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		//Search slogan
		array(
			'id'          => 'cryptoland_search_slogan_tab',
			'label'       =>  esc_html__( 'Search Slogan', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_slogan_display',
			'label'       => esc_html__( 'Search page slogan display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select search post page slogan display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_slogan_info',
			'label'       => esc_html__( 'Search Slogan is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_slogan_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_search_slogan',
			'label'       => esc_html__( 'Search page slogan', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter search post page slogan', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_search_slogan_display:is(on),cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page'
		),
		array(
			'id'          => 'cryptoland_search_slogan_typgrph',
			'label'       => esc_html__( 'Slogan typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the search slogan.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_slogan_display:is(on)',
			'operator'    => 'and'
		),
		//Search desc
		array(
			'id'          => 'cryptoland_search_desc_tab',
			'label'       =>  esc_html__( 'Search Description', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_desc_display',
			'label'       => esc_html__( 'Search page description display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select search post page description display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_desc_info',
			'label'       => esc_html__( 'Search description is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_desc_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_search_desc',
			'label'       => esc_html__( 'Search page description', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter search post page description', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_desc_display:is(on)',
			'section'     => 'search_page'
		),
		array(
			'id'          => 'cryptoland_search_desc_typgrph',
			'label'       => esc_html__( 'Description typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the search description.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_desc_display:is(on)',
			'operator'    => 'and'
		),
		//Search page hero button settings
		array(
			'id'          => 'cryptoland_search_herobutton_tab',
			'label'       => esc_html__( 'Search Button', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_hero_btn_display',
			'label'       => esc_html__( 'Search page button display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Please select search post page button display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_hero_btn',
			'label'       => esc_html__( 'Search page button title', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter search post page button title', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_btn_display:is(on)',
			'section'     => 'search_page'
		),
		array(
			'id'          => 'cryptoland_search_hero_btn_url',
			'label'       => esc_html__( 'Search page button URL', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter search post page button URL', 'cryptoland' ),
			'type'        => 'text',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_btn_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
		'id'        => 'cryptoland_search_hero_btn_target',
		'label'     => esc_html__('Search page button target', 'cryptoland' ),
		'desc'      => esc_html__('Enter search page button target', 'cryptoland' ),
		'std'       => '_blank',
		'type'      => 'select',
		'condition'=> 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_btn_display:is(on)',
		'section'   => 'search_page',
		'operator'  => 'and',
			'choices'   => array(
				array(
					'value' => '_blank',
					'label' => esc_html__('_blank', 'cryptoland' ),
				),
				array(
					'value' => '_self',
					'label' => esc_html__('_self', 'cryptoland' ),
				),
				array(
					'value' => '_top',
					'label' => esc_html__('_top', 'cryptoland' ),
				),
				array(
					'value' => '_parent',
					'label' => esc_html__('_parent', 'cryptoland' ),
				),
			)
		),
		array(
			'id'          => 'cryptoland_search_btn_color',
			'label'       => esc_html__( 'Button Color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change search hero button color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'blog_page',
			'settings'    => array(
			  'normal'     	=> _x( 'Title Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Title Hover', 'color picker', 'cryptoland' ),
			  'bgnormal'   	=> _x( 'Background Color', 'color picker', 'cryptoland' ),
			  'bghover'   	=> _x( 'Background Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_hero_btn_display:is(on)',
			'operator'    => 'and'
		),
		//Search page breadcrumb
		array(
			'id'          => 'cryptoland_search_bred_tab',
			'label'       => esc_html__( 'Search Breadcrubms', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_bread',
			'label'       => esc_html__( 'Search page breadcrubms display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Breadcrubms display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_breadcrubms_color',
			'label'       => esc_html__( 'Search page breadcrubms color ', 'cryptoland' ),
			'desc'        => esc_html__( 'Change search hero breadcrubms color .', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'search_page',
			'settings'    => array(
			  'color'     	=> _x( 'General Color', 'color picker', 'cryptoland' ),
			  'icon'   		=> _x( 'Icon Color', 'color picker', 'cryptoland' ),
			  'hover'   	=> _x( 'Link Hover Color', 'color picker', 'cryptoland' ),
			  'current'   	=> _x( 'Current Color', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_bread:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_search_bread_typgrph',
			'label'       => esc_html__( 'Breadcrubms typography', 'cryptoland' ),
			'desc'        => esc_html__( 'With this feature you can change all the style properties of the search breadcrubms.', 'cryptoland' ),
			'type'        => 'typography',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on),cryptoland_search_bread:is(on)',
			'operator'    => 'and'
		),
		//Search page general setting
		array(
			'id'          => 'cryptoland_search_generalsetting_tab',
			'label'       => esc_html__( 'Search General Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'search_page',
		),
		array(
			'id'          => 'cryptoland_search_hero_text_align',
			'label'       => esc_html__( 'Search page hero align', 'cryptoland' ),
			'desc'        => esc_html__( 'Select Search page hero align. Default :center.' , 'cryptoland' ),
			'std'         => 'center',
			'type'        => 'select',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'section'     => 'search_page',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => 'left',
					'label'       => esc_html__( 'Left', 'cryptoland' )
				),
				array(
					'value'       => 'center',
					'label'       => esc_html__( 'Center', 'cryptoland' )
				),
				array(
					'value'       => 'right',
					'label'       => esc_html__( 'Right', 'cryptoland' )
				),
			)
		),

		/*************************************************
		## WIDGETIZE FOOTER SETTINGS.
		*************************************************/
		array(
			'id'          => 'cryptoland_footer',
			'label'       => esc_html__( 'Footer Widgetize', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'footer'
		),
		array(
			'id'          => 'cryptoland_widgetize_footer',
			'label'       => esc_html__( 'Widget area section display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Choose footer widget area section%s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'off',
			'type'        => 'on-off',
			'section'     => 'footer',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_widgetize_info',
			'label'       => esc_html__( 'Widgetize area section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_search_hero_bg',
			'label'       =>  esc_html__( 'Search page hero section background image', 'cryptoland' ),
			'desc'        =>  esc_html__( 'You can upload your image for header', 'cryptoland' ),
			'type'        => 'background',
			'section'     => 'search_page',
			'condition'   => 'cryptoland_search_hero_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_fw_color',
			'label'       => esc_html__( 'Footer widget area color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change footer widget area color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'footer',
			'settings'    => array(
				'heading'   => _x( 'Widget Heading', 'color picker', 'cryptoland' ),
				'text'   	=> _x( 'Widget Text', 'color picker', 'cryptoland' ),
				'link'   	=> _x( 'Link', 'color picker', 'cryptoland' ),
				'linkhover' => _x( 'Link Hover', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_widgetize_footer:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_fw_padding',
			'label'       => esc_html__( 'Widget area section padding', 'cryptoland' ),
			'desc'        => esc_html__( 'Please add footer widget area section padding or leave a blank.', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_widgetize_footer:is(on)',
			'section'     => 'footer',
		),
		array(
			'id'          => 'cryptoland_fw_margin',
			'label'       => esc_html__( 'Widget area section margin', 'cryptoland' ),
			'desc'        => esc_html__( 'Please add footer widget area section padding or leave a blank.', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_widgetize_footer:is(on)',
			'section'     => 'footer',
		),
		// footer_widget_settings
		array(
			'id'          => 'cryptoland_footer_widget_settings',
			'label'       => esc_html__( 'Widget Settings', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'footer'
		),
		//close message
		array(
			'id'          => 'cryptoland_widget_info',
			'label'       => esc_html__( 'Widget area section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_footer_widget1_display',
			'label'       => esc_html__( 'Footer Widget 1 display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Footer widget 1 display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on),cryptoland_footer_widget1_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_footer_widget1_column',
			'label'       => esc_html__( 'Footer Widget 1 column', 'cryptoland' ),
			'desc'        => esc_html__( 'Select footer widget 1 column. Default :Column 3' , 'cryptoland' ),
			'type'        => 'select',
			'std'         => '4',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on),cryptoland_footer_widget1_display:is(on)',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => '3',
					'label'       => esc_html__( 'Column 3', 'cryptoland' )
				),
				array(
					'value'       => '4',
					'label'       => esc_html__( 'Column 4', 'cryptoland' )
				),
				array(
					'value'       => '5',
					'label'       => esc_html__( 'Column 5', 'cryptoland' )
				),
				array(
					'value'       => '6',
					'label'       => esc_html__( 'Column 6', 'cryptoland' )
				),
				array(
					'value'       => '7',
					'label'       => esc_html__( 'Column 7', 'cryptoland' )
				),
				array(
					'value'       => '8',
					'label'       => esc_html__( 'Column 8', 'cryptoland' )
				),
				array(
					'value'       => '9',
					'label'       => esc_html__( 'Column 9', 'cryptoland' )
				),
				array(
					'value'       => '10',
					'label'       => esc_html__( 'Column 10', 'cryptoland' )
				),
				array(
					'value'       => '11',
					'label'       => esc_html__( 'Column 11', 'cryptoland' )
				),
				array(
					'value'       => '12',
					'label'       => esc_html__( 'Column 12', 'cryptoland' )
				),
			)
		),
		array(
			'id'          => 'cryptoland_footer_widget2_display',
			'label'       => esc_html__( 'Footer Widget 2 display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Footer widget 2 display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_footer_widget2_column',
			'label'       => esc_html__( 'Footer Widget 2 column', 'cryptoland' ),
			'desc'        => esc_html__( 'Select footer widget 2 column. Default :Column 3' , 'cryptoland' ),
			'type'        => 'select',
			'std'         => '3',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on),cryptoland_footer_widget2_display:is(on)',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => '3',
					'label'       => esc_html__( 'Column 3', 'cryptoland' )
				),
				array(
					'value'       => '4',
					'label'       => esc_html__( 'Column 4', 'cryptoland' )
				),
				array(
					'value'       => '5',
					'label'       => esc_html__( 'Column 5', 'cryptoland' )
				),
				array(
					'value'       => '6',
					'label'       => esc_html__( 'Column 6', 'cryptoland' )
				),
				array(
					'value'       => '7',
					'label'       => esc_html__( 'Column 7', 'cryptoland' )
				),
				array(
					'value'       => '8',
					'label'       => esc_html__( 'Column 8', 'cryptoland' )
				),
				array(
					'value'       => '9',
					'label'       => esc_html__( 'Column 9', 'cryptoland' )
				),
				array(
					'value'       => '10',
					'label'       => esc_html__( 'Column 10', 'cryptoland' )
				),
				array(
					'value'       => '11',
					'label'       => esc_html__( 'Column 11', 'cryptoland' )
				),
				array(
					'value'       => '12',
					'label'       => esc_html__( 'Column 12', 'cryptoland' )
				),
			)
		),
		array(
			'id'          => 'cryptoland_footer_widget3_display',
			'label'       => esc_html__( 'Footer Widget 3 display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Footer widget 3 display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_footer_widget3_column',
			'label'       => esc_html__( 'Footer Widget 3 column', 'cryptoland' ),
			'desc'        => esc_html__( 'Select footer widget 3 column. Default :Column 3' , 'cryptoland' ),
			'type'        => 'select',
			'std'         => '5',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on),cryptoland_footer_widget3_display:is(on)',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => '3',
					'label'       => esc_html__( 'Column 3', 'cryptoland' )
				),
				array(
					'value'       => '4',
					'label'       => esc_html__( 'Column 4', 'cryptoland' )
				),
				array(
					'value'       => '5',
					'label'       => esc_html__( 'Column 5', 'cryptoland' )
				),
				array(
					'value'       => '6',
					'label'       => esc_html__( 'Column 6', 'cryptoland' )
				),
				array(
					'value'       => '7',
					'label'       => esc_html__( 'Column 7', 'cryptoland' )
				),
				array(
					'value'       => '8',
					'label'       => esc_html__( 'Column 8', 'cryptoland' )
				),
				array(
					'value'       => '9',
					'label'       => esc_html__( 'Column 9', 'cryptoland' )
				),
				array(
					'value'       => '10',
					'label'       => esc_html__( 'Column 10', 'cryptoland' )
				),
				array(
					'value'       => '11',
					'label'       => esc_html__( 'Column 11', 'cryptoland' )
				),
				array(
					'value'       => '12',
					'label'       => esc_html__( 'Column 12', 'cryptoland' )
				),
			)
		),
		array(
			'id'          => 'cryptoland_footer_widget4_display',
			'label'       => esc_html__( 'Footer Widget 4 display', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Footer widget 4 display %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_footer_widget4_column',
			'label'       => esc_html__( 'Footer Widget 4 column', 'cryptoland' ),
			'desc'        => esc_html__( 'Select footer widget 4 column. Default :Column 3' , 'cryptoland' ),
			'type'        => 'select',
			'std'         => '3',
			'section'     => 'footer',
			'condition'   => 'cryptoland_widgetize_footer:is(on),cryptoland_footer_widget4_display:is(on)',
			'operator'    => 'and',
			'choices'     => array(
				array(
					'value'       => '3',
					'label'       => esc_html__( 'Column 3', 'cryptoland' )
				),
				array(
					'value'       => '4',
					'label'       => esc_html__( 'Column 4', 'cryptoland' )
				),
				array(
					'value'       => '5',
					'label'       => esc_html__( 'Column 5', 'cryptoland' )
				),
				array(
					'value'       => '6',
					'label'       => esc_html__( 'Column 6', 'cryptoland' )
				),
				array(
					'value'       => '7',
					'label'       => esc_html__( 'Column 7', 'cryptoland' )
				),
				array(
					'value'       => '8',
					'label'       => esc_html__( 'Column 8', 'cryptoland' )
				),
				array(
					'value'       => '9',
					'label'       => esc_html__( 'Column 9', 'cryptoland' )
				),
				array(
					'value'       => '10',
					'label'       => esc_html__( 'Column 10', 'cryptoland' )
				),
				array(
					'value'       => '11',
					'label'       => esc_html__( 'Column 11', 'cryptoland' )
				),
				array(
					'value'       => '12',
					'label'       => esc_html__( 'Column 12', 'cryptoland' )
				),
			)
		),
		// footer_copyright
		array(
			'id'          => 'cryptoland_footer_copyright',
			'label'       => esc_html__( 'Footer Copyright', 'cryptoland' ),
			'type'        => 'tab',
			'section'     => 'footer',
		),
		//copyright_display
		array(
			'id'          => 'cryptoland_copyright_display',
			'label'       => esc_html__( 'Footer copyright section', 'cryptoland' ),
			'desc'        => sprintf( esc_html__( 'Choose footer copyright section %s or %s.', 'cryptoland' ), '<code>on</code>', '<code>off</code>' ),
			'std'         => 'on',
			'type'        => 'on-off',
			'section'     => 'footer',
			'condition'   => '',
			'operator'    => 'and'
		),
		//close message
		array(
			'id'          => 'cryptoland_copyright_info',
			'label'       => esc_html__( 'Copyright section is off', 'cryptoland' ),
			'type'        => 'textblock-titled',
			'section'     => 'footer',
			'condition'   => 'cryptoland_copyright_display:is(off)',
			'operator'    => 'or'
		),
		array(
			'id'          => 'cryptoland_copyright',
			'label'       => esc_html__( 'Footer copyright', 'cryptoland' ),
			'std'         => '2018, Cryptoland Theme by Ninetheme',
			'type'        => 'textarea',
			'condition'   => 'cryptoland_copyright_display:is(on)',
			'section'     => 'footer'
		),
		array(
			'id'          => 'cryptoland_copyright_color',
			'label'       => esc_html__( 'Footer copyright color', 'cryptoland' ),
			'desc'        => esc_html__( 'Change footer copyright section color.', 'cryptoland' ),
			'std'         => '',
			'type'        => 'super_awesome',
			'section'     => 'footer',
			'settings'    => array(
				'bg'   		=> _x( 'Background', 'color picker', 'cryptoland' ),
				'text'   	=> _x( 'Copyright Text', 'color picker', 'cryptoland' ),
			),
			'condition'   => 'cryptoland_copyright_display:is(on)',
			'operator'    => 'and'
		),
		array(
			'id'          => 'cryptoland_c_padding',
			'label'       => esc_html__( 'Footer copyright section padding', 'cryptoland' ),
			'desc'        => esc_html__( 'Please add footer copyright section padding or leave a blank.', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_copyright_display:is(on)',
			'section'     => 'footer',
		),
		array(
			'id'          => 'cryptoland_c_margin',
			'label'       => esc_html__( 'Footer copyright section margin', 'cryptoland' ),
			'desc'        => esc_html__( 'Please add footer copyright section padding or leave a blank.', 'cryptoland' ),
			'type'        => 'spacing',
			'condition'   => 'cryptoland_copyright_display:is(on)',
			'section'     => 'footer',
		),
		/*************************************************
		## GOOGLE FONTS SETTINGS.
		*************************************************/

		array(
			'id'        => 'cryptoland_body_google_fonts',
			'label'     => esc_html__( 'Google Fonts', 'cryptoland'  ),
			'desc'      => esc_html__( 'Add Google Font and after the save settings follow these steps Dashbocryptoland > Appearance > Theme Options > Typography', 'cryptoland' ),
			'type'      => 'google-fonts',
			'section'   => 'google_fonts',
			'operator'  => 'and'
		),

        array(
			'id'          => 'ot_font_api',
			'label'       => esc_html__( 'Google Webfonts API for Theme Options fonts', 'cryptoland' ),
			'desc'        => esc_html__( 'Enter your API, ', 'cryptoland' ),
			'type'        => 'text',
			'section'     => 'google_fonts',
			'operator'    => 'and'
		),

		/*************************************************
		## TYPOGRAPHY  SETTINGS.
		*************************************************/

		array(
			'id'        => 'cryptoland_typgrph',
			'label'     => esc_html__( 'Typography', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph1',
			'label'     => esc_html__( 'Typography h1', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph2',
			'label'     => esc_html__( 'Typography h2', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph3',
			'label'     => esc_html__( 'Typography h3', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph4',
			'label'     => esc_html__( 'Typography h4', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph5',
			'label'     => esc_html__( 'Typography h5', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph6',
			'label'     => esc_html__( 'Typography h6', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),
		array(
			'id'        => 'cryptoland_typgrph7',
			'label'     => esc_html__( 'Typography p', 'cryptoland' ),
			'desc'      => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'cryptoland' ),
			'type'      => 'typography',
			'section'   => 'typography',
			'operator'  => 'and'
		),


	) // end array
);

// add filter to radio images
function cryptoland_custom_radio_images( $array, $field_id ) {
if ( $field_id != '' ) {
    $array = array(
      array(
        'value'   => 'left-sidebar',
        'label'   => esc_html__( 'Left Sidebar', 'cryptoland' ),
        'class'   => 'custom-sidebar-left',
        'src'     => get_template_directory_uri().'/framework/images/sidebar-left.png'
      ),
      array(
        'value'   => 'full-width',
        'label'   => esc_html__( 'Full-width ( No sidebar )', 'cryptoland' ),
        'class'   => 'custom-sidebar-none',
        'src'     => get_template_directory_uri().'/framework/images/sidebar-none.png'
      ),
      array(
        'value'   => 'right-sidebar',
        'label'   => esc_html__( 'Right Sidebar', 'cryptoland' ),
        'class'   => 'custom-sidebar-right',
        'src'     => get_template_directory_uri().'/framework/images/sidebar-right.png'
      ),
    );
  }
return $array;

}
add_filter( 'ot_radio_images', 'cryptoland_custom_radio_images', 10, 2 );


// end function
	/* allow settings to be filtered before saving */
	$cryptoland_ot_custom_settings = apply_filters( ot_settings_id() . '_args', $cryptoland_ot_custom_settings );
	/* settings are not the same update the DB */
	if ( $cryptoland_saved_settings !== $cryptoland_ot_custom_settings ) {
		update_option( ot_settings_id(), $cryptoland_ot_custom_settings );
	}
	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
} // end function



/**
* function onünde  ot_type_ olmak zorunda sonrasınd param_type ismi ornek : super_awesome
* burada param type gore html oluşturulacak
*/

if ( ! function_exists( 'ot_type_super_awesome' ) ) {

  function ot_type_super_awesome( $args = array() ) {

    /* turns arguments array into variables */
    extract( $args );

    /* verify a description */
    $has_desc = $field_desc ? true : false;

    /* format setting outer wrapper */
    echo '<div class="format-setting type-link-color ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';

      /* description */
      echo esc_attr( $has_desc ) ? '<div class="description">' . wp_kses_post( wp_specialchars_decode( $field_desc ) ) . '</div>' : '';

      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';


        /* allow fields to be filtered */
        $ot_recognized_link_color_fields = apply_filters( 'ot_recognized_link_color_fields', $field_settings, $field_id );

        /* build link color fields */
        foreach( $ot_recognized_link_color_fields as $type => $label ) {

          if ( array_key_exists( $type, $ot_recognized_link_color_fields ) ) {

            echo '<div class="option-tree-ui-colorpicker-input-wrap">';

              echo '<label for="' . esc_attr( $field_id ) . '-picker-' . esc_attr( $type ) . '" class="option-tree-ui-colorpicker-label">' . esc_attr( $label ) . '</label>';

              /* colorpicker JS */
              echo '<script>jQuery(document).ready(function($) { OT_UI.bind_colorpicker("' . esc_attr( $field_id ) . '-picker-' . esc_attr( $type ) . '"); });</script>';

              /* set color */
              $color = isset( $field_value[ $type ] ) ? esc_attr( $field_value[ $type ] ) : '';

              /* set default color */
              $std = isset( $field_std[ $type ] ) ? 'data-default-color="' . $field_std[ $type ] . '"' : '';

              /* input */
              echo '<input type="text" name="' . esc_attr( $field_name ) . '[' .esc_attr(  $type ) . ']" id="' . esc_attr( $field_id ) . '-picker-' . esc_attr( $type ) . '" value="' . esc_attr( $color ) . '" class="hide-color-picker ' . esc_attr( $field_class ) . '" ' . esc_attr( $std ) . ' />';

            echo '</div>';

          }

        }

      echo '</div>';

    echo '</div>';

  }

}


function cryptoland_add_custom_option_types( $types ) {

  $types['super_awesome'] = 'Super Awesome';

  return $types;

}
add_filter( 'ot_option_types_array', 'cryptoland_add_custom_option_types' );
