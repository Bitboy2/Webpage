<?php



function cryptoland_anim_aos() {

	$anim_aos = array(
		esc_html__('Select option',    	'cryptoland' )	=> '',
		esc_html__('fade',				'cryptoland' )	=> 'fade',
		esc_html__('fade-up',			'cryptoland' )	=> 'fade-up',
		esc_html__('fade-down',			'cryptoland' )	=> 'fade-down',
		esc_html__('fade-left',			'cryptoland' )	=> 'fade-left',
		esc_html__('fade-right',		'cryptoland' )	=> 'fade-right',
		esc_html__('fade-up-right',		'cryptoland' )	=> 'fade-up-right',
		esc_html__('fade-up-left',		'cryptoland' )	=> 'fade-up-left',
		esc_html__('fade-down-right',	'cryptoland' )	=> 'fade-down-right',
		esc_html__('fade-down-left',	'cryptoland' )	=> 'fade-down-left',
		esc_html__('flip-up',			'cryptoland' )	=> 'flip-up',
		esc_html__('flip-down',			'cryptoland' )	=> 'flip-down',
		esc_html__('flip-left',			'cryptoland' )	=> 'flip-left',
		esc_html__('flip-right',		'cryptoland' )	=> 'flip-right',
		esc_html__('slide-up',			'cryptoland' )	=> 'slide-up',
		esc_html__('slide-down',		'cryptoland' )	=> 'slide-down',
		esc_html__('slide-left',		'cryptoland' )	=> 'slide-left',
		esc_html__('slide-right',		'cryptoland' )	=> 'slide-right',
		esc_html__('zoom-in',			'cryptoland' )	=> 'zoom-in',
		esc_html__('zoom-in-up',		'cryptoland' )	=> 'zoom-in-up',
		esc_html__('zoom-in-down',		'cryptoland' )	=> 'zoom-in-down',
		esc_html__('zoom-in-left',		'cryptoland' )	=> 'zoom-in-left',
		esc_html__('zoom-in-right',		'cryptoland' )	=> 'zoom-in-right',
		esc_html__('zoom-out',			'cryptoland' )	=> 'zoom-out',
		esc_html__('zoom-out-up',		'cryptoland' )	=> 'zoom-out-up',
		esc_html__('zoom-out-down',		'cryptoland' )	=> 'zoom-out-down',
		esc_html__('zoom-out-left',		'cryptoland' )	=> 'zoom-out-left',
		esc_html__('zoom-out-right',	'cryptoland' )	=> 'zoom-out-right',
	 );
	return $anim_aos;
}


/*-----------------------------------------------------------------------------------*/
/*	HOME HERO 1 PARALLAX
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_home_hero_shortcode_integrateWithVC' );
function cryptoland_home_hero_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Hero Section', 'cryptoland' ),
	'base' => 'cryptoland_home_hero_shortcode',
	'icon'     => 'icon_homepage',
	'category' => esc_html__( 'Home 1', 'cryptoland'),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add your image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Disable Background image on x-small mobile device', 'cryptoland' ),
		'param_name' => 'bgoff',
		'description' => esc_html__('This option disable background-image on mobile device max-width 576px', 'cryptoland' ),
		'group' => esc_html__('Image', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('yes',     			'cryptoland' )	=> 'yes',
			esc_html__('no',    			'cryptoland' )	=> 'no',
			),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Background color type', 'cryptoland' ),
		'param_name' => 'bgclrtype',
		'description' => esc_html__('Select background-color type', 'cryptoland' ),
		'group' => esc_html__('Image', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    		'cryptoland' )	=> 'one',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'bgclr',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'dependency' => array(
			'element' => 'bgclrtype',
			'value'   	=> 'one'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'bgclr1',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
			'dependency' => array(
			'element' => 'bgclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'bgclr2',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
			'dependency' => array(
			'element' => 'bgclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Right image', 'cryptoland'),
		'param_name' => 'rimg',
		'description' => esc_html__('Add right section image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Right image animation', 'cryptoland' ),
		'param_name' => 'img_aos',
		'description' => esc_html__('Add animation for right image', 'cryptoland' ),
		'group' => esc_html__('Image', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'subtitle',
		'description' => esc_html__('Add Subtitle.', 'cryptoland'),
		'group' => esc_html__('Text', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big title', 'cryptoland'),
		'param_name' => 'bigtitle',
		'description' => esc_html__('Add big title.', 'cryptoland'),
		'group' => esc_html__('Text', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Small title', 'cryptoland'),
		'param_name' => 'smtitle',
		'description' => esc_html__('Add small title.', 'cryptoland'),
		'group' => esc_html__('Text', 'cryptoland' ),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Paragraph', 'cryptoland'),
		'param_name' => 'text',
		'description' => esc_html__('Add description or text block.', 'cryptoland'),
		'group' => esc_html__('Text', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Content animation', 'cryptoland' ),
		'param_name' => 'con_aos',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'group' => esc_html__('Text', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textarea_html',
		'heading' => esc_html__('Content Area', 'cryptoland'),
		'param_name' => 'content',
		'description' => esc_html__('You can add your form and other html parts', 'cryptoland'),
		'group' => esc_html__('Form', 'cryptoland' ),
		),
		//SubTitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('SubTitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-2 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		//Big Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Big Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change big title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-2',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change big title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		//Small title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Small title color', 'cryptoland'),
		'param_name' => 'smtclr',
		'description' => esc_html__('Change small title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-2',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Small title font-size', 'cryptoland'),
		'param_name' => 'smtsz',
		'description' => esc_html__('Change small title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Small title line-height', 'cryptoland'),
		'param_name' => 'smtlh',
		'description' => esc_html__('Change small title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		//Description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-2',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		//css
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
		// arrays end
	)
));
} class Cryptoland_Hero_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ICOBAR TIMER HOME 2
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_icobartimer2_shortcode_integrateWithVC' );
function cryptoland_icobartimer2_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'ICO-Bar Timer', 'cryptoland' ),
	'base' => 'cryptoland_icobartimer2_shortcode',
	'icon' => 'icon_analytics',
	'category' => 'Home 2',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add icobar section title.', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('subtitle', 'cryptoland'),
		'param_name' => 'subtitle',
		'description' => esc_html__('Add icobar section subtitle.', 'cryptoland'),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'bgclr',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		),
		//timer December 20, 2018 15:37:25
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Time format : December 20, 2018 15:37:25', 'cryptoland'),
		'param_name' => 'timer_desc',
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Month', 'cryptoland'),
		'param_name' => 'month',
		'description' => esc_html__('Add month name.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-2 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Day', 'cryptoland'),
		'param_name' => 'day',
		'description' => esc_html__('Add day.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Year', 'cryptoland'),
		'param_name' => 'year',
		'description' => esc_html__('Add year.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours', 'cryptoland'),
		'param_name' => 'hours',
		'description' => esc_html__('Add hours.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute', 'cryptoland'),
		'param_name' => 'min',
		'description' => esc_html__('Add minute.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second', 'cryptoland'),
		'param_name' => 'sec',
		'description' => esc_html__('Add second.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-2'
		),
		//bar
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bar width', 'cryptoland'),
		'param_name' => 'barwidth',
		'description' => esc_html__('Add bar width in percentage.default:50%', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Maximum title', 'cryptoland'),
		'param_name' => 'maxtitle',
		'description' => esc_html__('Add icobar maximum title.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Maximum value', 'cryptoland'),
		'param_name' => 'maxvalue',
		'description' => esc_html__('Add icobar maximum value.NOTE: enter only the number value for automatic calculation of the bar marker items', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Bar marker items', 'cryptoland' ),
		'param_name' => 'icobar',
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Marker title', 'cryptoland'),
			'param_name' => 'markertitle',
			'description' => esc_html__('Add icobar marker title.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6 pt15'
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Marker value', 'cryptoland'),
			'param_name' => 'markervalue',
			'description' => esc_html__('Add icobar marker value.use simple number.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6'
			),
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Notice', 'cryptoland'),
		'param_name' => 'notice',
		'description' => esc_html__('Add icobar notice text.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bar description', 'cryptoland'),
		'param_name' => 'icotext',
		'description' => esc_html__('Add icobar description text.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//bar bg color
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Bar color style', 'cryptoland'),
		'param_name' => 'bar_style',
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Bar background color type', 'cryptoland' ),
		'param_name' => 'barbgclrtype',
		'description' => esc_html__('Select background color type', 'cryptoland' ),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    		'cryptoland' )	=> 'one',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Bar background color', 'cryptoland'),
		'param_name' => 'barbgclr',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'dependency' => array(
			'element' => 'brdclrtype',
			'value'   	=> 'one'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'barbgclr1',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'brdclrtype',
			'value'   	=> 'grad'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'barbgclr2',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'brdclrtype',
			'value'   	=> 'grad'
		),
		),
		//bar color
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Bar color type', 'cryptoland' ),
		'param_name' => 'barclrtype',
		'description' => esc_html__('Select bar type', 'cryptoland' ),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    		'cryptoland' )	=> 'one',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Bar color', 'cryptoland'),
		'param_name' => 'barclr',
		'description' => esc_html__('Change bar color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'one'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'barclr1',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'barclr2',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'grad'
			),
		),
		//button
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype',
		'description' => esc_html__('Add prebuilt color for button.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),

		//payments image
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Payments items', 'cryptoland' ),
		'param_name' => 'payments',
		'group' => esc_html__('Payments', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Payments image', 'cryptoland'),
			'param_name' => 'payimg',
			'description' => esc_html__('Add your image for payments', 'cryptoland'),
			),
		),
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//subtitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Subtitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Ico text
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Ico text color', 'cryptoland'),
		'param_name' => 'itclr',
		'description' => esc_html__('Change text color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Ico text font-size', 'cryptoland'),
		'param_name' => 'itsz',
		'description' => esc_html__('Change text font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Ico text line-height', 'cryptoland'),
		'param_name' => 'itlh',
		'description' => esc_html__('Change text line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
      // arrays end
  	)
));
} class Cryptoland_Icobartimer2_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HOME 3 HERO SECTION
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_home3_hero_shortcode_integrateWithVC' );
function cryptoland_home3_hero_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Hero Section', 'cryptoland' ),
	'base' => 'cryptoland_home3_hero_shortcode',
	'icon' => 'icon_homepage',
	'category' => esc_html__('Home 3', 'cryptoland'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add hero section title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description hero section.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Content animation', 'cryptoland' ),
		'param_name' => 'contanim',
		'description' => esc_html__('Add animation for contet', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Right image', 'cryptoland'),
		'param_name' => 'promoimg',
		'description' => esc_html__('Add your image for right section', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Right Image animation', 'cryptoland' ),
		'param_name' => 'imganim',
		'description' => esc_html__('Add animation for right image', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Scroll image', 'cryptoland'),
		'param_name' => 'scrollimg',
		'description' => esc_html__('Add your scroll image for page scroll.', 'cryptoland'),
		),
		//timer
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide label?', 'cryptoland' ),
		'param_name' => 'hidelabel',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the timer label will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Days label', 'cryptoland'),
		'param_name' => 'dlabel',
		'description' => esc_html__('Add timer days label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3 pt15',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours label', 'cryptoland'),
		'param_name' => 'hlabel',
		'description' => esc_html__('Add timer hours label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute label', 'cryptoland'),
		'param_name' => 'minlabel',
		'description' => esc_html__('Add timer minute label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second label', 'cryptoland'),
		'param_name' => 'seclabel',
		'description' => esc_html__('Add timer second label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide Timer?', 'cryptoland' ),
		'param_name' => 'hidetimer',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the timer label will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Timer format : 2018, 11, 5, 0, 0, 0, 0', 'cryptoland'),
		'param_name' => 'timerformat_desc',
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Year', 'cryptoland'),
		'param_name' => 'year',
		'description' => esc_html__('Add year.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Month', 'cryptoland'),
		'param_name' => 'month',
		'description' => esc_html__('Add month name.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Day', 'cryptoland'),
		'param_name' => 'day',
		'description' => esc_html__('Add day.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours', 'cryptoland'),
		'param_name' => 'hours',
		'description' => esc_html__('Add hours.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute', 'cryptoland'),
		'param_name' => 'min',
		'description' => esc_html__('Add minute.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second', 'cryptoland'),
		'param_name' => 'sec',
		'description' => esc_html__('Add second.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-4'
		),

		//button 1
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button first', 'cryptoland' ),
		'param_name' => 'link1',
		'description' => esc_html__('Add first button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize1',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype1',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg1',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg1',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr1',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr1',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		//button 2
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button second', 'cryptoland' ),
		'param_name' => 'link2',
		'description' => esc_html__('Add second button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize2',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype2',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg2',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg2',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr2',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr2',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		//payments image
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Payments items', 'cryptoland' ),
		'param_name' => 'payments',
		'group' => esc_html__('Payments', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Payments image', 'cryptoland'),
			'param_name' => 'payimg',
			'description' => esc_html__('Add your image for payments', 'cryptoland'),
			),
		),
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//subtitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//Timer Label
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Timer Label text color', 'cryptoland'),
		'param_name' => 'lclr',
		'description' => esc_html__('Change timer label color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer Label text font-size', 'cryptoland'),
		'param_name' => 'lsz',
		'description' => esc_html__('Change timer label font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer Label text line-height', 'cryptoland'),
		'param_name' => 'llh',
		'description' => esc_html__('Change timer label line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//css
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background Style', 'cryptoland' ),
		),
      // arrays end
  	)
));
} class Cryptoland_Home3_Hero_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HOME 4 HERO SECTION
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_home4_hero_shortcode_integrateWithVC' );
function cryptoland_home4_hero_shortcode_integrateWithVC() {
vc_map( array(
	'name' 	   	=> esc_html__( 'Hero Section', 'cryptoland' ),
	'base' 	   	=> 'cryptoland_home4_hero_shortcode',
	'icon' => 'icon_homepage',
	'category' => esc_html__('Home 4', 'cryptoland'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Bold Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add hero section bold title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Thin Title', 'cryptoland'),
		'param_name' => 'thintitle',
		'description' => esc_html__('Add hero section thin title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description hero section.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'titleanim',
		'description' => esc_html__('Add animation for title and description', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'titledelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Scroll down image', 'cryptoland'),
		'param_name' => 'scrollimg',
		'description' => esc_html__('Add your image for page scroll', 'cryptoland'),
		),
		//timer
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide label?', 'cryptoland' ),
		'param_name' => 'hidelabel',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the timer label will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Days label', 'cryptoland'),
		'param_name' => 'dlabel',
		'description' => esc_html__('Add timer days label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3 pt15',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours label', 'cryptoland'),
		'param_name' => 'hlabel',
		'description' => esc_html__('Add timer hours label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute label', 'cryptoland'),
		'param_name' => 'minlabel',
		'description' => esc_html__('Add timer minute label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second label', 'cryptoland'),
		'param_name' => 'seclabel',
		'description' => esc_html__('Add timer second label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty' => true
		),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide Timer?', 'cryptoland' ),
		'param_name' => 'hidetimer',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the timer will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Timer format : 2018, 11, 5, 0, 0, 0, 0', 'cryptoland'),
		'param_name' => 'timerformat_desc',
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Year', 'cryptoland'),
		'param_name' => 'year',
		'description' => esc_html__('Add year.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Month', 'cryptoland'),
		'param_name' => 'month',
		'description' => esc_html__('Add month name.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Day', 'cryptoland'),
		'param_name' => 'day',
		'description' => esc_html__('Add day.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours', 'cryptoland'),
		'param_name' => 'hours',
		'description' => esc_html__('Add hours.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute', 'cryptoland'),
		'param_name' => 'min',
		'description' => esc_html__('Add minute.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second', 'cryptoland'),
		'param_name' => 'sec',
		'description' => esc_html__('Add second.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'timeranim',
		'description' => esc_html__('Add animation for timer', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'timerdelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		),
		//bottom timer text
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Text first', 'cryptoland'),
		'param_name' => 'text1',
		'description' => esc_html__('Add bottom timer description text.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Text second', 'cryptoland'),
		'param_name' => 'text2',
		'description' => esc_html__('Add bottom timer description text.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'textanim',
		'description' => esc_html__('Add animation for timer', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'textdelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//payments
		array(
		'type' => 'attach_images',
		'heading' => esc_html__('Payments images', 'cryptoland'),
		'param_name' => 'paymentss',
		'description' => esc_html__('Add your image for payments section', 'cryptoland'),
		'group' => esc_html__('Payments', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'payanim',
		'description' => esc_html__('Add animation for payments image', 'cryptoland' ),
		'group' => esc_html__('Payments', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'paydelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Payments', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//button 1
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button first', 'cryptoland' ),
		'param_name' => 'link1',
		'description' => esc_html__('Add first button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize1',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype1',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg1',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg1',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr1',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr1',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		//button 2
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button second', 'cryptoland' ),
		'param_name' => 'link2',
		'description' => esc_html__('Add second button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize2',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype2',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg2',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg2',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr2',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr2',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'btnanim',
		'description' => esc_html__('Add animation for buttons', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'btndelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//Timer Label
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Timer Label text color', 'cryptoland'),
		'param_name' => 'lclr',
		'description' => esc_html__('Change timer label color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer Label text font-size', 'cryptoland'),
		'param_name' => 'lsz',
		'description' => esc_html__('Change timer label font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer Label text line-height', 'cryptoland'),
		'param_name' => 'llh',
		'description' => esc_html__('Change timer label line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description timer color', 'cryptoland'),
		'param_name' => 'p1clr',
		'description' => esc_html__('Change description timer color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description timer font-size', 'cryptoland'),
		'param_name' => 'p1sz',
		'description' => esc_html__('Change description timer font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description timer line-height', 'cryptoland'),
		'param_name' => 'p1lh',
		'description' => esc_html__('Change description timer line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//css
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background Style', 'cryptoland' ),
		),
      // arrays end
  	)
));
} class Cryptoland_Home4_Hero_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HERO SECTION HOME 5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_home5_hero_shortcode_integrateWithVC' );
function cryptoland_home5_hero_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Hero Section', 'cryptoland' ),
	'base' => 'cryptoland_home5_hero_shortcode',
	'icon' => 'icon_homepage',
	'category' => esc_html__('Home 5', 'cryptoland'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Bold Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add hero section bold title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6 pt15',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Thin Title', 'cryptoland'),
		'param_name' => 'thintitle',
		'description' => esc_html__('Add hero section thin title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'titleanim',
		'description' => esc_html__('Add animation for title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'titledelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description hero section.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'descanim',
		'description' => esc_html__('Add animation for description', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'descdelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//timer
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide label?', 'cryptoland' ),
		'param_name' => 'hidelabel',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the timer label will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Days label', 'cryptoland'),
		'param_name' => 'dlabel',
		'description' => esc_html__('Add timer days label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3 pt15',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty'  => true,
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours label', 'cryptoland'),
		'param_name' => 'hlabel',
		'description' => esc_html__('Add timer hours label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty'  => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute label', 'cryptoland'),
		'param_name' => 'minlabel',
		'description' => esc_html__('Add timer minute label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty'  => true
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second label', 'cryptoland'),
		'param_name' => 'seclabel',
		'description' => esc_html__('Add timer second label.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'hidelabel',
			'is_empty'  => true
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Days progressbar', 'cryptoland'),
		'param_name' => 'dclr',
		'description' => esc_html__('If you like can make different colors', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-3'
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Hours progressbar', 'cryptoland'),
		'param_name' => 'hclr',
		'description' => esc_html__('If you like can make different colors', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-3'
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Minutes progressbar', 'cryptoland'),
		'param_name' => 'minclr',
		'description' => esc_html__('If you like can make different colors', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-3'
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Seconds progressbar', 'cryptoland'),
		'param_name' => 'secclr',
		'description' => esc_html__('If you like can make different colors', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-3'
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Timer Progress bg color', 'cryptoland'),
		'param_name' => 'circlebg',
		'description' => esc_html__('You can change progress background', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Timer format : 2018, 11, 5, 0, 0, 0, 0', 'cryptoland'),
		'param_name' => 'timerformat_desc',
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide Timer?', 'cryptoland' ),
		'param_name' => 'hidetimer',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the timer will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Year', 'cryptoland'),
		'param_name' => 'year',
		'description' => esc_html__('Add year.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Month', 'cryptoland'),
		'param_name' => 'month',
		'description' => esc_html__('Add month name.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Day', 'cryptoland'),
		'param_name' => 'day',
		'description' => esc_html__('Add day.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours', 'cryptoland'),
		'param_name' => 'hours',
		'description' => esc_html__('Add hours.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute', 'cryptoland'),
		'param_name' => 'min',
		'description' => esc_html__('Add minute.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second', 'cryptoland'),
		'param_name' => 'sec',
		'description' => esc_html__('Add second.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'timeranim',
		'description' => esc_html__('Add animation for timer', 'cryptoland' ),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'timerdelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'hidetimer',
			'is_empty' => true
		),
		),
		//button 1
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button first', 'cryptoland' ),
		'param_name' => 'link1',
		'description' => esc_html__('Add first button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize1',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype1',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg1',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg1',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr1',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr1',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		//button 2
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button second', 'cryptoland' ),
		'param_name' => 'link2',
		'description' => esc_html__('Add second button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize2',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype2',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg2',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg2',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr2',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr2',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'btnanim',
		'description' => esc_html__('Add animation for buttons', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'btndelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//payments
		array(
		'type' => 'attach_images',
		'heading' => esc_html__('Payments images', 'cryptoland'),
		'param_name' => 'paymentss',
		'description' => esc_html__('Add your image for payments section', 'cryptoland'),
		'group' => esc_html__('Payments', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'payanim',
		'description' => esc_html__('Add animation for payments image', 'cryptoland' ),
		'group' => esc_html__('Payments', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'paydelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Payments', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//css
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('BG left image', 'cryptoland'),
		'param_name' => 'bgimg1',
		'description' => esc_html__('Add your background left image', 'cryptoland'),
		'group' => esc_html__('BG Images', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-6 pt15'
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('BG right image', 'cryptoland'),
		'param_name' => 'bgimg2',
		'description' => esc_html__('Add your background right image', 'cryptoland'),
		'group' => esc_html__('BG Images', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-6'
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Parallax left image 1', 'cryptoland'),
		'param_name' => 'parallax1',
		'description' => esc_html__('Add your parallax left image', 'cryptoland'),
		'group' => esc_html__('BG Images', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Parallax left image 2', 'cryptoland'),
		'param_name' => 'parallax2',
		'description' => esc_html__('Add your parallax left image', 'cryptoland'),
		'group' => esc_html__('BG Images', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Parallax right image', 'cryptoland'),
		'param_name' => 'parallax3',
		'description' => esc_html__('Add your parallax right image', 'cryptoland'),
		'group' => esc_html__('BG Images', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//title style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//description style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//Timer Label style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Timer Label text color', 'cryptoland'),
		'param_name' => 'lclr',
		'description' => esc_html__('Change timer label color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer Label text font-size', 'cryptoland'),
		'param_name' => 'lsz',
		'description' => esc_html__('Change timer label font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer Label text line-height', 'cryptoland'),
		'param_name' => 'llh',
		'description' => esc_html__('Change timer label line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
      // arrays end
  	)
));
} class Cryptoland_Home5_Hero_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HERO SECTION HOME 6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_home6_hero_shortcode_integrateWithVC' );
function cryptoland_home6_hero_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Hero Section', 'cryptoland' ),
	'base' => 'cryptoland_home6_hero_shortcode',
	'icon' => 'icon_homepage',
	'category' => esc_html__('Home 6', 'cryptoland'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Bold Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add hero section bold title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6 pt15',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Thin Title', 'cryptoland'),
		'param_name' => 'thintitle',
		'description' => esc_html__('Add hero section thin title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'titleanim',
		'description' => esc_html__('Add animation for title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'titledelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description hero section.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'descanim',
		'description' => esc_html__('Add animation for description', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'descdelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//bar
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bar progress width (%)', 'cryptoland'),
		'param_name' => 'barwidth',
		'description' => esc_html__('Add bar width in percentage.default:50%', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Maximum title', 'cryptoland'),
		'param_name' => 'maxtitle',
		'description' => esc_html__('Add icobar maximum title.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Maximum value ( required )', 'cryptoland'),
		'param_name' => 'maxvalue',
		'description' => esc_html__('Add icobar maximum value.NOTE: enter only the number value for automatic calculation of the bar marker items', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Bar marker items', 'cryptoland' ),
		'param_name' => 'icobar',
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Marker title', 'cryptoland'),
			'param_name' => 'markertitle',
			'description' => esc_html__('Add icobar marker title.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6 pt15'
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Marker value', 'cryptoland'),
			'param_name' => 'markervalue',
			'description' => esc_html__('Add icobar marker value.use simple number.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6'
			),
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('IcoBar bottom text 1', 'cryptoland'),
		'param_name' => 'text1',
		'description' => esc_html__('Add icobar notice text.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('IcoBar bottom text 2', 'cryptoland'),
		'param_name' => 'text2',
		'description' => esc_html__('Add icobar notice text.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//bar bg color
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Bar color style', 'cryptoland'),
		'param_name' => 'bar_style',
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Bar background color type', 'cryptoland' ),
		'param_name' => 'barbgclrtype',
		'description' => esc_html__('Select background color type', 'cryptoland' ),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    	'cryptoland' )	=> 'one',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Bar background color', 'cryptoland'),
		'param_name' => 'barbgclr',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-8',
		'dependency' => array(
			'element' => 'barbgclrtype',
			'value'   	=> 'one'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'barbgclr1',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'barbgclrtype',
			'value'   	=> 'grad'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'barbgclr2',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'barbgclrtype',
			'value'   	=> 'grad'
		),
		),
		//bar color
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Bar color type', 'cryptoland' ),
		'param_name' => 'barclrtype',
		'description' => esc_html__('Select bar type', 'cryptoland' ),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    	'cryptoland' )	=> 'one',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Bar color', 'cryptoland'),
		'param_name' => 'barclr',
		'description' => esc_html__('Change bar color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-8',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'one'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'barclr1',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'barclr2',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'grad'
			),
		),
		// animation icobar
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'icoanim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'icodelay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//button 1
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button first', 'cryptoland' ),
		'param_name' => 'link1',
		'description' => esc_html__('Add first button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize1',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype1',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg1',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg1',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr1',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr1',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype1',
			'value'   	=> 'custom'
		),
		),
		//button 2
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button second', 'cryptoland' ),
		'param_name' => 'link2',
		'description' => esc_html__('Add second button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize2',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype2',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg2',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg2',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr2',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr2',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'btnanim',
		'description' => esc_html__('Add animation for buttons', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'btndelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//payments
		array(
		'type' => 'attach_images',
		'heading' => esc_html__('Payments images', 'cryptoland'),
		'param_name' => 'paymentss',
		'description' => esc_html__('Add your image for payments section', 'cryptoland'),
		'group' => esc_html__('Payments', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'payanim',
		'description' => esc_html__('Add animation for payments image', 'cryptoland' ),
		'group' => esc_html__('Payments', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'paydelay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Payments', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//title style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//description style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//Marker max title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Max title color', 'cryptoland'),
		'param_name' => 'mxtclr',
		'description' => esc_html__('Change marker max title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Max title font-size', 'cryptoland'),
		'param_name' => 'mxtsz',
		'description' => esc_html__('Change marker title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Max title line-height', 'cryptoland'),
		'param_name' => 'mxtlh',
		'description' => esc_html__('Change marker title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Marker title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Marker color', 'cryptoland'),
		'param_name' => 'mtclr',
		'description' => esc_html__('Change marker title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Marker font-size', 'cryptoland'),
		'param_name' => 'mtsz',
		'description' => esc_html__('Change marker title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Marker line-height', 'cryptoland'),
		'param_name' => 'mtlh',
		'description' => esc_html__('Change marker title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//bottom text
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Bottom text color', 'cryptoland'),
		'param_name' => 'itclr',
		'description' => esc_html__('Change bottom marker text color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bottom text font-size', 'cryptoland'),
		'param_name' => 'itsz',
		'description' => esc_html__('Change bottom marker text font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bottom text line-height', 'cryptoland'),
		'param_name' => 'itlh',
		'description' => esc_html__('Change bottom marker text line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//css
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background Style', 'cryptoland' ),
		),
      // arrays end
  	)
));
} class Cryptoland_Home6_Hero_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	PARTNERS HOME 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_partners_shortcode_integrateWithVC' );
function cryptoland_partners_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Partners Images', 'cryptoland' ),
	'base' => 'cryptoland_partners_shortcode',
	'icon' => 'icon_partners',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Partners Image', 'cryptoland' ),
		'param_name'=> 'partners',
		'params' => array(
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image', 'cryptoland'),
				'param_name' => 'img',
				'description' => esc_html__('Add your partners image', 'cryptoland'),
			),
		),
		),
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name'=> 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
	// arrays end
	)
));
} class Cryptoland_Partners_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HOME 3 ECONOMY SECTION
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_home3_economy_shortcode_integrateWithVC' );
function cryptoland_home3_economy_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Economy Section', 'cryptoland' ),
	'base' => 'cryptoland_home3_economy_shortcode',
	'icon' => 'icon_economy',
	'category' => esc_html__('Home 3', 'cryptoland'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'subtitle',
		'description' => esc_html__('Add section subtitle.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add section title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add section description.', 'cryptoland'),
		),
		//video group
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Video play image icon', 'cryptoland'),
		'param_name' => 'vbtnimg',
		'description' => esc_html__('Add popup youtube video play icon.', 'cryptoland'),
		'group' => esc_html__('Video', 'cryptoland' ),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Youtube video url', 'cryptoland'),
		'param_name' => 'vurl',
		'description' => esc_html__('Add youtube video url for popup video.', 'cryptoland'),
		'group' => esc_html__('Video', 'cryptoland' ),
		),
		//list loop
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create list', 'cryptoland' ),
		'param_name' => 'list',
		'group' => esc_html__('List', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'textarea',
			'heading' => esc_html__('List item', 'cryptoland'),
			'param_name' => 'listitem',
			'description' => esc_html__('Add section list item for more detail.', 'cryptoland'),
			),
		),
		),
		//Subtitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Subtitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//List item
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('List item color', 'cryptoland'),
		'param_name' => 'lclr',
		'description' => esc_html__('Change list item color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('List item font-size', 'cryptoland'),
		'param_name' => 'lsz',
		'description' => esc_html__('Change list item font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('List item line-height', 'cryptoland'),
		'param_name' => 'llh',
		'description' => esc_html__('Change list item line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4'
		),
		//contentcss
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Content background CSS', 'cryptoland' ),
		'param_name' => 'contentcss',
		'group' => esc_html__('Background Style', 'cryptoland' ),
		),
      // arrays end
  	)
));
} class Cryptoland_Home3_Economy_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	ROAD MAP HOME 1-2-3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_roadmap_shortcode_integrateWithVC' );
function cryptoland_roadmap_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Time Line', 'cryptoland' ),
	'base' => 'cryptoland_roadmap_shortcode',
	'icon' => 'icon_timeline',
	'category' => array('Home 1','Home 2','Home 3'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create map', 'cryptoland' ),
		'param_name'=> 'map',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Date or Title', 'cryptoland'),
			'param_name' => 'date',
			'description' => esc_html__('Add date or title for map', 'cryptoland'),
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add your short description', 'cryptoland'),
			),
			array(
			'type' 			  => 'checkbox',
			'heading' 		  => esc_html__('Select active item?', 'cryptoland'),
			'param_name' 	  => 'active',
			'description' 	  => esc_html__('This option activates the item on the timeline', 'cryptoland'),
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			),
		),
		),
		// Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		// Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		//Description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		//css deasign
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background CSS', 'cryptoland' ),
		)
	)
));
} class Cryptoland_Roadmap_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ROAD MAP HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_roadmap4_shortcode_integrateWithVC' );
function cryptoland_roadmap4_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Time Line', 'cryptoland' ),
	'base' => 'cryptoland_roadmap4_shortcode',
	'icon' => 'icon_timeline',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create map', 'cryptoland' ),
		'group' => esc_html__('Timeline', 'cryptoland' ),
		'param_name' => 'row1',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'cryptoland'),
			'param_name' => 'title1',
			'description' => esc_html__('Add title for map', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-8 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Date', 'cryptoland'),
			'param_name' => 'date1',
			'description' => esc_html__('Add date for map', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc1',
			'description' => esc_html__('Add your short description', 'cryptoland'),
			),
		),
		),
		// animation aos
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Content animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'group' => esc_html__('Timeline', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		//Title style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//date
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Date color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change date color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Date font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change date font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Date line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change date line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//css deasign
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background CSS', 'cryptoland' ),
		),
	)
));
} class Cryptoland_Roadmap4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	ROAD MAP HOME 5-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_roadmap56_shortcode_integrateWithVC' );
function cryptoland_roadmap56_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Time Line', 'cryptoland' ),
	'base' => 'cryptoland_roadmap56_shortcode',
	'icon' => 'icon_timeline',
	'category' => array('Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create map', 'cryptoland' ),
		'group' => esc_html__('Timeline', 'cryptoland' ),
		'param_name' => 'map',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Date or title', 'cryptoland'),
			'param_name' => 'date',
			'description' => esc_html__('Add date or title for map marker', 'cryptoland'),
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add your short description', 'cryptoland'),
			),
			array(
			'type' 			  => 'checkbox',
			'heading' 		  => esc_html__('Select active item', 'cryptoland'),
			'param_name' 	  => 'active',
			'description' 	  => esc_html__('This option activates the item on the timeline', 'cryptoland'),
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			),
		),
		),
		// animation aos
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'group' => esc_html__('Timeline', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		//Date style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Date color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change date color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Date font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change date font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Date line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change date line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//description style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//css deasign
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		),
	)
));
} class Cryptoland_Roadmap56_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PROCESS H-1-5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_process_shortcode_integrateWithVC' );
function cryptoland_process_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Process', 'cryptoland' ),
	'base' => 'cryptoland_process_shortcode',
	'icon' => 'icon_process',
	'category' => array('Home 1','Home 5'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Process loop', 'cryptoland' ),
		'param_name' => 'process',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Item title ', 'cryptoland'),
			'param_name' => 'title',
			'description' => esc_html__('Add title for process item', 'cryptoland'),
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Item description ', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description for process item', 'cryptoland'),
			),
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Item Icon Image', 'cryptoland'),
			'param_name' => 'img',
			'description' => esc_html__('Add your process icon image', 'cryptoland'),
			),
			array(
			'type' => 'dropdown',
			'heading' => esc_html__('Animation', 'cryptoland' ),
			'param_name' => 'anim',
			'description' => esc_html__('Add animation for content', 'cryptoland' ),
			'group' => esc_html__('Text', 'cryptoland' ),
			'edit_field_class' => 'vc_col-sm-6',
			'value' => cryptoland_anim_aos()
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Animation delay', 'cryptoland'),
			'param_name' => 'delay',
			'description' => esc_html__('Add delay for item', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6',
			),

		),
		),
		// Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-2 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
	// arrays end
	)
));
} class Cryptoland_Process_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	PROCESS HOME 6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_process6_shortcode_integrateWithVC' );
function cryptoland_process6_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Process', 'cryptoland' ),
	'base' => 'cryptoland_process6_shortcode',
	'icon' => 'icon_process',
	'category' => 'Home 6',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon Image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add your process line background-image', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Item title ', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title for process item', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Item description ', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description for process item', 'cryptoland'),
		),
		array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__('Item border style', 'cryptoland' ),
		'param_name' => 'brdtype',
		'description' => esc_html__('You can select item border style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'value'       	=> array(
			esc_html__('Select position', 	'cryptoland' )	=> '',
			esc_html__('solid', 			'cryptoland' )	=> 'solid',
			esc_html__('dotted', 			'cryptoland' )	=> 'dotted',
			esc_html__('dashed', 			'cryptoland' )	=> 'dashed',
			esc_html__('double', 			'cryptoland' )	=> 'double',
			esc_html__('groove', 			'cryptoland' )	=> 'groove',
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Border width', 'cryptoland'),
		'param_name' => 'brd',
		'description' => esc_html__('Change border width. Use number in ( px or unit )', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Border color', 'cryptoland'),
		'param_name' => 'brdclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrow image
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Arrow Image', 'cryptoland'),
		'param_name' => 'arrow',
		'description' => esc_html__('Add your process arrow image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Arrow background', 'cryptoland'),
		'param_name' => 'arrowbg',
		'description' => esc_html__('Change arrow background color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide arrow on 1200px', 'cryptoland' ),
		'param_name' => 'moboff',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		// Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-2 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-5',
		),
		//description style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
	// arrays end
	)
));
} class Cryptoland_Process6_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	FACTS HOME 3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_facts3_shortcode_integrateWithVC' );
function cryptoland_facts3_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Facts', 'cryptoland' ),
	'base' => 'cryptoland_facts3_shortcode',
	'icon' => 'icon_process',
	'category' => 'Home 3',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon Image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add your facts background-image', 'cryptoland'),
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Facts loop', 'cryptoland' ),
		'param_name' => 'process',
		'params' => array(
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Item title ', 'cryptoland'),
			'param_name' => 'title',
			'description' => esc_html__('Add title for facts item', 'cryptoland'),
			),
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Item Icon Image', 'cryptoland'),
			'param_name' => 'img',
			'description' => esc_html__('Add your facts icon image', 'cryptoland'),
			),
		),
		),
		// Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
	// arrays end
	)
));
} class Cryptoland_Facts3_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	COUNT NUMBER HOME 1-2-4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_counter_shortcode_integrateWithVC' );
function cryptoland_counter_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Counter Up', 'cryptoland' ),
	'base' => 'cryptoland_counter_shortcode',
	'icon' => 'icon_number',
	'category' => array( 'Home 1','Home 2','Home 4'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number', 'cryptoland'),
		'param_name' => 'number',
		'description' => esc_html__('Add number for counter', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('After number', 'cryptoland'),
		'param_name' => 'percentage',
		'description' => esc_html__('Add percentage or symbol after number', 'cryptoland'),
		),
		// Number
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change number color.', 'cryptoland'),
		),
		array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__('Number alignment', 'cryptoland' ),
		'param_name' => 'align',
		'description' => esc_html__('You can select number position with alignment', 'cryptoland' ),
		'value'       	=> array(
			esc_html__('Select position', 	'cryptoland' )	=> '',
			esc_html__('Left', 				'cryptoland' )	=> 'text-left',
			esc_html__('Right', 			'cryptoland' )	=> 'text-right',
			esc_html__('Center', 			'cryptoland' )	=> 'text-center',
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change number font-size. Use number in ( px or unit )', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change number line-height. Use number in ( px or unit )', 'cryptoland'),
		),
	// arrays end
	)
));
} class Cryptoland_Counter_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	COUNT NUMBER HOME 3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_counter3_shortcode_integrateWithVC' );
function cryptoland_counter3_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Counter Up', 'cryptoland' ),
	'base' => 'cryptoland_counter3_shortcode',
	'icon' => 'icon_number',
	'category' => 'Home 3',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		//Background
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Data Background', 'cryptoland'),
		'param_name' => 'dataimg',
		'description' => esc_html__('Add your image for background', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number 1', 'cryptoland'),
		'param_name' => 'num1',
		'description' => esc_html__('Add number for counter', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Percentage', 'cryptoland'),
		'param_name' => 'per1',
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title 1', 'cryptoland'),
		'param_name' => 'title1',
		'description' => esc_html__('Add title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//number 2
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number 2', 'cryptoland'),
		'param_name' => 'num2',
		'description' => esc_html__('Add number for counter', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Percentage', 'cryptoland'),
		'param_name' => 'per2',
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title 2', 'cryptoland'),
		'param_name' => 'title2',
		'description' => esc_html__('Add title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//number 3
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number 3', 'cryptoland'),
		'param_name' => 'num3',
		'description' => esc_html__('Add number for counter', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Percentage', 'cryptoland'),
		'param_name' => 'per3',
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title 3', 'cryptoland'),
		'param_name' => 'title3',
		'description' => esc_html__('Add title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//number 4
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number 4', 'cryptoland'),
		'param_name' => 'num4',
		'description' => esc_html__('Add number for counter', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Percentage', 'cryptoland'),
		'param_name' => 'per4',
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title 4', 'cryptoland'),
		'param_name' => 'title4',
		'description' => esc_html__('Add title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		// Number
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change number color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-md-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change number font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change number line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
	// arrays end
	)
));
} class Cryptoland_Counter3_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ICOBAR TIMER HOME 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_icobartimer_shortcode_integrateWithVC' );
function cryptoland_icobartimer_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'ICO-Bar Timer', 'cryptoland' ),
	'base' => 'cryptoland_icobartimer_shortcode',
	'icon' => 'icon_analytics',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Icobar section title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title.', 'cryptoland'),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'bgclr',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Border color type', 'cryptoland' ),
		'param_name' => 'brdclrtype',
		'description' => esc_html__('Select border-color type', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    		'cryptoland' )	=> 'one',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Border color', 'cryptoland'),
		'param_name' => 'brdclr',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'dependency' => array(
			'element' => 'brdclrtype',
			'value'   	=> 'one'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'brdclr1',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'brdclrtype',
			'value'   	=> 'grad'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'brdclr2',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'brdclrtype',
			'value'   	=> 'grad'
		),
		),
		//bar
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Bar background image', 'cryptoland'),
		'param_name' => 'barbgimg',
		'description' => esc_html__('Add your image for icobar background', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Bar color type', 'cryptoland' ),
		'param_name' => 'barclrtype',
		'description' => esc_html__('Select bar type', 'cryptoland' ),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    		'cryptoland' )	=> 'one',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Bar color', 'cryptoland'),
		'param_name' => 'barclr',
		'description' => esc_html__('Change bar color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'one'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'barclr1',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'barclr2',
		'description' => esc_html__('Change border color.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'barclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bar width', 'cryptoland'),
		'param_name' => 'barwidth',
		'description' => esc_html__('Add bar width in percentage.default:50%', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		),
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Bar options start', 'cryptoland'),
		'param_name' => 'bar_desc',
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Maximum title', 'cryptoland'),
		'param_name' => 'maxtitle',
		'description' => esc_html__('Add icobar maximum title.', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Maximum value', 'cryptoland'),
		'param_name' => 'maxvalue',
		'description' => esc_html__('Add icobar maximum value.NOTE: enter only the number value for automatic calculation of the bar marker items', 'cryptoland'),
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6'
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Bar marker items', 'cryptoland' ),
		'param_name' => 'icobar',
		'group' => esc_html__('Bar Options', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Marker title', 'cryptoland'),
			'param_name' => 'markertitle',
			'description' => esc_html__('Add icobar marker title.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6 pt15'
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Marker value', 'cryptoland'),
			'param_name' => 'markervalue',
			'description' => esc_html__('Add icobar marker value.use simple number.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6'
			),
		), // params
		), // array

		//timer December 20, 2018 15:37:25
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Timer title', 'cryptoland'),
		'param_name' => 'timertitle',
		'description' => esc_html__('Add bottom timer title.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Month', 'cryptoland'),
		'param_name' => 'month',
		'description' => esc_html__('Add month name.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Day', 'cryptoland'),
		'param_name' => 'day',
		'description' => esc_html__('Add day.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Year', 'cryptoland'),
		'param_name' => 'year',
		'description' => esc_html__('Add year.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Hours', 'cryptoland'),
		'param_name' => 'hours',
		'description' => esc_html__('Add hours.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Minute', 'cryptoland'),
		'param_name' => 'min',
		'description' => esc_html__('Add minute.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Second', 'cryptoland'),
		'param_name' => 'sec',
		'description' => esc_html__('Add second.', 'cryptoland'),
		'group' => esc_html__('Timer', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//button
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button right', 'cryptoland' ),
		'param_name' => 'btnlink',
		'description' => esc_html__('Add right button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype',
		'description' => esc_html__('Select button color style.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'btn-default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype2',
			'value'   	=> 'custom'
		),
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//detail
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'plr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
      // arrays end
  	)
));
} class Cryptoland_Icobartimer_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	SERVICE ITEM HOME 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_service_item_shortcode_integrateWithVC' );
function cryptoland_service_item_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Service Item', 'cryptoland' ),
	'base' => 'cryptoland_service_item_shortcode',
	'icon' => 'icon_service',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image for service item', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Color type', 'cryptoland' ),
		'param_name' => 'clrtype',
		'description' => esc_html__('Add prebuilt color for item.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('green',   	'cryptoland' )	=> 'clr-green',
			esc_html__('blue',    	'cryptoland' )	=> 'clr-blue',
			esc_html__('red',    	'cryptoland' )	=> 'clr-red',
			esc_html__('orange',    'cryptoland' )	=> 'clr-orange',
			),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//button
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button', 'cryptoland' ),
		'param_name' => 'btnlink',
		'description' => esc_html__('Add button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype',
		'description' => esc_html__('Add prebuilt color for button.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('green',   			'cryptoland' )	=> 'bgclr-green',
			esc_html__('blue',    			'cryptoland' )	=> 'bgclr-blue',
			esc_html__('red',    			'cryptoland' )	=> 'bgclr-red',
			esc_html__('orange',    		'cryptoland' )	=> 'bgclr-orange',
			esc_html__('custom color',    	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		//css
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background and Border CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//detail
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'plr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
     // arrays end
  	)
));
} class Cryptoland_Service_Item_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	SERVICES HOME 3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_services3_shortcode_integrateWithVC' );
function cryptoland_services3_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Services', 'cryptoland' ),
	'base' => 'cryptoland_services3_shortcode',
	'icon' => 'icon_service',
	'category' => 'Home 3',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Services Column', 'cryptoland' ),
		'param_name' => 'style',
		'description' => esc_html__('Select services type.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('Two column',   		'cryptoland' )	=> 'default',
			esc_html__('Loop inline',    	'cryptoland' )	=> 'inline',
			esc_html__('Single item',    	'cryptoland' )	=> 'single',
			),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg1',
		'description' => esc_html__('Add main background image', 'cryptoland'),
		'group' => esc_html__('Background Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> array('default','inline'),
		),
		),
		//left coumn
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image first item', 'cryptoland'),
		'param_name' => 'iconimg1',
		'description' => esc_html__('Add icon image for left first item', 'cryptoland'),
		'group' => esc_html__('Left Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title first item', 'cryptoland'),
		'param_name' => 'title1',
		'description' => esc_html__('Add title left services item.', 'cryptoland'),
		'group' => esc_html__('Left Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image second item', 'cryptoland'),
		'param_name' => 'iconimg2',
		'description' => esc_html__('Add icon image for left services item', 'cryptoland'),
		'group' => esc_html__('Left Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title second item', 'cryptoland'),
		'param_name' => 'title2',
		'description' => esc_html__('Add title left services item.', 'cryptoland'),
		'group' => esc_html__('Left Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		//right coumn
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image first item', 'cryptoland'),
		'param_name' => 'iconimg3',
		'description' => esc_html__('Add icon image for right first item', 'cryptoland'),
		'group' => esc_html__('Right Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title first item', 'cryptoland'),
		'param_name' => 'title3',
		'description' => esc_html__('Add title right services item.', 'cryptoland'),
		'group' => esc_html__('Right Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image second item', 'cryptoland'),
		'param_name' => 'iconimg4',
		'description' => esc_html__('Add icon image for right services item', 'cryptoland'),
		'group' => esc_html__('Right Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title second item', 'cryptoland'),
		'param_name' => 'title4',
		'description' => esc_html__('Add title right services item.', 'cryptoland'),
		'group' => esc_html__('Right Column', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'default'
		),
		),
		// style 2
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Services', 'cryptoland' ),
		'param_name' => 'services',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'inline'
		),
		'params' => array(
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Icon image', 'cryptoland'),
			'param_name' => 'iconimg',
			'description' => esc_html__('Add icon image for services item', 'cryptoland'),
			'group' => esc_html__('Right Column', 'cryptoland' ),
			'edit_field_class' => 'vc_col-sm-6 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'cryptoland'),
			'param_name' => 'title',
			'description' => esc_html__('Add title services item.', 'cryptoland'),
			'group' => esc_html__('Right Column', 'cryptoland' ),
			'edit_field_class' => 'vc_col-sm-6',
			'dependency' => array(
				'element' => 'style',
				'value'   	=> 'default'
			),
			),
			array(
			'type' => 'dropdown',
			'heading' => esc_html__('Color type', 'cryptoland' ),
			'param_name' => 'clrtype',
			'description' => esc_html__('Select color services item', 'cryptoland' ),
			'value' => array(
				esc_html__('Select a option',   'cryptoland' )	=> '',
				esc_html__('red',    	'cryptoland' )	=> 'red',
				esc_html__('orange',    'cryptoland' )	=> 'orange',
				esc_html__('green',   	'cryptoland' )	=> 'green',
				esc_html__('blue',    	'cryptoland' )	=> 'blue',
				),
			),
			array(
			'type' => 'dropdown',
			'heading' => esc_html__('Animation', 'cryptoland' ),
			'param_name' => 'anim',
			'description' => esc_html__('Add animation for content', 'cryptoland' ),
			'edit_field_class' => 'vc_col-sm-6',
			'value' => cryptoland_anim_aos()
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Animation delay', 'cryptoland'),
			'param_name' => 'delay',
			'description' => esc_html__('Add delay for item', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-6',
			),
		), // params
		), // array
		// style 3
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Services image icon', 'cryptoland'),
		'param_name' => 'simg',
		'description' => esc_html__('Add icon image for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6 pt15',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'single'
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title item', 'cryptoland'),
		'param_name' => 'stitle',
		'description' => esc_html__('Add title services item.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'single'
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Color type', 'cryptoland' ),
		'param_name' => 'clrtype2',
		'description' => esc_html__('Select color services item', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('red',    	'cryptoland' )	=> 'red',
			esc_html__('orange',    'cryptoland' )	=> 'orange',
			esc_html__('green',   	'cryptoland' )	=> 'green',
			esc_html__('blue',    	'cryptoland' )	=> 'blue',
		),
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'single'
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim2',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'single'
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay2',
		'description' => esc_html__('Add delay for animation item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'style',
			'value'   	=> 'single'
		),
		),

		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),

     // arrays end
  	)
));
} class Cryptoland_Services3_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	SERVICE ITEM HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_service_item4_shortcode_integrateWithVC' );
function cryptoland_service_item4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Service Item', 'cryptoland' ),
	'base' => 'cryptoland_service_item4_shortcode',
	'icon' => 'icon_service',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image for service item', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),

		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//detail
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'plr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
     // arrays end
  	)
));
} class Cryptoland_Service_Item4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	SERVICE ITEM HOME 5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_service_item5_shortcode_integrateWithVC' );
function cryptoland_service_item5_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Service Item', 'cryptoland' ),
	'base' => 'cryptoland_service_item5_shortcode',
	'icon' => 'icon_service',
	'category' => 'Home 5',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image for service item', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),

		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//detail
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'plr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
     // arrays end
  	)
));
} class Cryptoland_Service_Item5_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	HOW IT WORKS ITEM HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_steps_item4_shortcode_integrateWithVC' );
function cryptoland_steps_item4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Steps Item', 'cryptoland' ),
	'base' => 'cryptoland_steps_item4_shortcode',
	'icon' => 'icon_steps',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image for service item', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Step number', 'cryptoland'),
		'param_name' => 'num',
		'description' => esc_html__('Add title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-2'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-10'
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description.', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//number
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3 pt15'
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number BG color', 'cryptoland'),
		'param_name' => 'nbgclr',
		'description' => esc_html__('Change number bg color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3'
		),
		//number
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//detail
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'plr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
     // arrays end
  	)
));
} class Cryptoland_Steps_Item4_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	APP SECTION H-1-5-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_app_shortcode_integrateWithVC' );
function cryptoland_app_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'App Section', 'cryptoland' ),
	'base' => 'cryptoland_app_shortcode',
	'icon' => 'icon_app',
	'category' => array('Home 1','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add your image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//right image
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Right image', 'cryptoland'),
		'param_name' => 'rimg',
		'description' => esc_html__('Add right section image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Right image animation', 'cryptoland' ),
		'param_name' => 'img_aos',
		'description' => esc_html__('Add animation for right image', 'cryptoland' ),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Right image animation delay', 'cryptoland'),
		'param_name' => 'img_delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		// text content
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'stitle',
		'description' => esc_html__('Add Subtitle.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add big title.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Paragraph', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description or text block.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Content animation', 'cryptoland' ),
		'param_name' => 'con_aos',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'group' => esc_html__('Content', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Play store image', 'cryptoland'),
		'param_name' => 'limg1',
		'description' => esc_html__('Add bottom image', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Play store link', 'cryptoland'),
		'param_name' => 'link1',
		'description' => esc_html__('Add link to bottom first image.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('App store image', 'cryptoland'),
		'param_name' => 'limg2',
		'description' => esc_html__('Add bottom image', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('App store link', 'cryptoland'),
		'param_name' => 'link2',
		'description' => esc_html__('Add link to bottom second image.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		//SubTitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('SubTitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Big Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Big Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change big title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change big title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
	// arrays end
  	)
  ));
} class Cryptoland_App_Section_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PLATFORM SECTION HOME 2
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_platform2_integrateWithVC' );
function cryptoland_platform2_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Platform Section', 'cryptoland' ),
	'base' => 'cryptoland_platform2_shortcode',
	'icon' => 'icon_app',
	'category' => 'Home 2',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		// text content
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'stitle',
		'description' => esc_html__('Add Subtitle.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add big title.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Paragraph', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description or text block.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Content animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'group' => esc_html__('Content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Content animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//button
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button', 'cryptoland' ),
		'param_name' => 'btnlink',
		'description' => esc_html__('Add button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype',
		'description' => esc_html__('Add prebuilt color for button.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'default',
			esc_html__('custom color',   	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		// bg image
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background parallax image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add your image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6 pt15'
		),
		//right image
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Right image', 'cryptoland'),
		'param_name' => 'rimg',
		'description' => esc_html__('Add right section image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		//SubTitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('SubTitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Big Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Big Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change big title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change big title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
	// arrays end
  	)
  ));
} class Cryptoland_Platform2_Section_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TOKEN SALE
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_token_shortcode_integrateWithVC' );
function cryptoland_token_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Token Sale', 'cryptoland' ),
	'base' => 'cryptoland_token_shortcode',
	'icon' => 'icon_token',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add your image', 'cryptoland'),
		),
		// text content
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'stitle',
		'description' => esc_html__('Add Subtitle.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add section title.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description heading', 'cryptoland'),
		'param_name' => 'desctitle',
		'description' => esc_html__('Add heading description.', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'textarea_html',
		'heading' => esc_html__('Section description', 'cryptoland'),
		'param_name' => 'content',
		'description' => esc_html__('Add description section', 'cryptoland'),
		'group' => esc_html__('Content', 'cryptoland' ),
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create List', 'cryptoland' ),
		'param_name' => 'list',
		'group' => esc_html__('List', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Item label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label.', 'cryptoland'),
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Detail', 'cryptoland'),
			'param_name' => 'ltitle',
			'description' => esc_html__('Add detail.', 'cryptoland'),
			),
		), // params
		), // array
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Content animation', 'cryptoland' ),
		'param_name' => 'con_aos',
		'description' => esc_html__('Add animation for content', 'cryptoland' ),
		'group' => esc_html__('Content', 'cryptoland' ),
		'value' => cryptoland_anim_aos()
		),
		//button
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Button', 'cryptoland' ),
		'param_name' => 'btnlink',
		'description' => esc_html__('Add button title and link.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a option', 	'cryptoland' )	=> '',
			esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   			'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'bgtype',
		'description' => esc_html__('Add prebuilt color for button.', 'cryptoland' ),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => array(
			esc_html__('Select a color', 	'cryptoland' )	=> '',
			esc_html__('default color',   	'cryptoland' )	=> 'default',
			esc_html__('custom color',    	'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btnbg',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'hvrbg',
		'description' => esc_html__('Change button background hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
			)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title hover color', 'cryptoland'),
		'param_name' => 'hvrclr',
		'description' => esc_html__('Change button title hover color.', 'cryptoland'),
		'group' => esc_html__('Button', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'bgtype',
			'value'   	=> 'custom'
		),
		),
		//SubTitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('SubTitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('SubTitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Big Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Big Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change big title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change big title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Paragraph heading
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Paragraph title color', 'cryptoland'),
		'param_name' => 'tpclr',
		'description' => esc_html__('Change paragraph heading color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Paragraph title font-size', 'cryptoland'),
		'param_name' => 'tpsz',
		'description' => esc_html__('Change paragraph heading font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Paragraph title line-height', 'cryptoland'),
		'param_name' => 'tplh',
		'description' => esc_html__('Change paragraph heading line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
	// arrays end
  	)
  ));
} class Cryptoland_Token_Sale_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	DOCUMENT DOWNLOAD HOME 1-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_docitem_shortcode_integrateWithVC' );
function cryptoland_docitem_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Document Download', 'cryptoland' ),
	'base' => 'cryptoland_docitem_shortcode',
	'icon' => 'icon_docdownload',
	'category' => array('Home 1', 'Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Document image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add image', 'cryptoland'),
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link', 'cryptoland' ),
		'param_name' => 'btnlink',
		'description' => esc_html__('Add button title and link.', 'cryptoland' ),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Big Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
));
} class Cryptoland_Doc_Item_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	DOCUMENT DOWNLOAD HOME 2-3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_docitem2_shortcode_integrateWithVC' );
function cryptoland_docitem2_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Document Download', 'cryptoland' ),
	'base' => 'cryptoland_docitem2_shortcode',
	'icon' => 'icon_docdownload',
	'category' => array('Home 2', 'Home 3'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add your image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6 pt15',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Document image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title for document', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link to download', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link for dowload document.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
  	)
));
} class Cryptoland_Doc_Item2_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	DOCUMENT DOWNLOAD HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_docitem4_shortcode_integrateWithVC' );
function cryptoland_docitem4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Document Download', 'cryptoland' ),
	'base' => 'cryptoland_docitem4_shortcode',
	'icon' => 'icon_docdownload',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params'   	=> array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title for download document.', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title Doc type', 'cryptoland'),
		'param_name' => 'doctype',
		'description' => esc_html__('Add title for document type.e.g:PDF', 'cryptoland'),
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link to download', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link for download document.', 'cryptoland' ),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Doc Type Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Doc type title color', 'cryptoland'),
		'param_name' => 'iclr',
		'description' => esc_html__('Change doc type title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Doc type title font-size', 'cryptoland'),
		'param_name' => 'isz',
		'description' => esc_html__('Change doc type title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Doc type title line-height', 'cryptoland'),
		'param_name' => 'ilh',
		'description' => esc_html__('Change doc type title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
));
} class Cryptoland_Doc_Item4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	DOCUMENT DOWNLOAD HOME 5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_docitem5_shortcode_integrateWithVC' );
function cryptoland_docitem5_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Document Download', 'cryptoland' ),
	'base' => 'cryptoland_docitem5_shortcode',
	'icon' => 'icon_docdownload',
	'category' => 'Home 5',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params'   	=> array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title for download document.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-8',
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link to download', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link for download document.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Document background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add background image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Document image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add doc type image', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Background color type', 'cryptoland' ),
		'param_name' => 'bgclrtype',
		'description' => esc_html__('Select background-color type', 'cryptoland' ),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('gradient color',    'cryptoland' )	=> 'grad',
			esc_html__('solid color',    	'cryptoland' )	=> 'one',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'bgclr',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'bgclrtype',
			'value'   	=> 'one'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 1', 'cryptoland'),
		'param_name' => 'bgclr1',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'bgclrtype',
			'value'   	=> 'grad'
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient color 2', 'cryptoland'),
		'param_name' => 'bgclr2',
		'description' => esc_html__('Change background color.', 'cryptoland'),
		'group' => esc_html__('Image', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'bgclrtype',
			'value'   	=> 'grad'
			),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
  	)
));
} class Cryptoland_Doc_Item5_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	CASES ITEM HOME 3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_cases3_shortcode_integrateWithVC' );
function cryptoland_cases3_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Cases Item', 'cryptoland' ),
	'base' => 'cryptoland_cases3_shortcode',
	'icon' => 'icon_docdownload',
	'category' => 'Home 3',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params'   	=> array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Icon image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add doc type image', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Item title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add title for for cases item.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description for cases item.', 'cryptoland'),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
  	)
));
} class Cryptoland_Cases_Item3_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	POPUP VIDEO HOME 2-5-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_popupvideo_shortcode_integrateWithVC' );
function cryptoland_popupvideo_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Popup Video', 'cryptoland' ),
	'base' => 'cryptoland_popupvideo_shortcode',
	'icon' => 'icon_video',
	'category' => array('Home 2','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params'   	=> array(

		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Play button image', 'cryptoland'),
		'param_name' => 'playimg',
		'description' => esc_html__('Add play button image', 'cryptoland'),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add background image', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Video url', 'cryptoland'),
		'param_name' => 'vidurl',
		'description' => esc_html__('Add youtbe or vimeo video url.', 'cryptoland'),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),

  	)
));
} class Cryptoland_Popupvideo_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	POPUP VIDEO HOME 1-4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_popupvideo4_shortcode_integrateWithVC' );
function cryptoland_popupvideo4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Popup Video', 'cryptoland' ),
	'base' => 'cryptoland_popupvideo4_shortcode',
	'icon' => 'icon_video',
	'category' => array('Home 1', 'Home 4'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params'   	=> array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Play button image', 'cryptoland'),
		'param_name' => 'playimg',
		'description' => esc_html__('Add background image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6 pt15',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add background image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Video url', 'cryptoland'),
		'param_name' => 'vidurl',
		'description' => esc_html__('Add youtbe or vimeo video url.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-8',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Icon background color', 'cryptoland'),
		'param_name' => 'bgclr',
		'description' => esc_html__('Change play button background color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4'
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
  	)
));
} class Cryptoland_Popupvideo4_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ADVISOR HIOME 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_advisor_shortcode_integrateWithVC' );
function cryptoland_advisor_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Advisor', 'cryptoland' ),
	'base' => 'cryptoland_advisor_shortcode',
	'icon' => 'icon_advisor',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Advisor background image', 'cryptoland'),
		'param_name' => 'bgimg',
		'description' => esc_html__('Add image for background advisor item.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Advisor image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Advisor icon image', 'cryptoland'),
		'param_name' => 'iconimg',
		'description' => esc_html__('Add social icon image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Advisor name and link', 'cryptoland' ),
		'param_name' => 'btnlink',
		'description' => esc_html__('Add name and link for advisor.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Advisor position/job', 'cryptoland'),
		'param_name' => 'job',
		'description' => esc_html__('Add advisor job/position', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-8'
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Name
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Name color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change big name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//Job
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Job color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change job color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change job font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change job line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
  ));
} class Cryptoland_Advisor_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ADVISOR HOME 2-3-5-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_advisor2_shortcode_integrateWithVC' );
function cryptoland_advisor2_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Advisor', 'cryptoland' ),
	'base' => 'cryptoland_advisor2_shortcode',
	'icon' => 'icon_advisor',
	'category' => array('Home 2','Home 3','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Advisor image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6 pt15',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Advisor icon image', 'cryptoland'),
		'param_name' => 'icon',
		'description' => esc_html__('Add social icon image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Advisor name', 'cryptoland'),
		'param_name' => 'name',
		'description' => esc_html__('Add advisor name', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Advisor position/job', 'cryptoland'),
		'param_name' => 'job',
		'description' => esc_html__('Add advisor job/position', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Advisor description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add advisor description', 'cryptoland'),
		),

		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Advisor link', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link for advisor.', 'cryptoland' ),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//name style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Name color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change big name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//Job
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Job color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change job color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change job font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change job line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//css deasign
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
	)
));
} class Cryptoland_Advisor2_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TEAM ITEM home 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_teamitem_shortcode_integrateWithVC' );
function cryptoland_teamitem_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Team Item', 'cryptoland' ),
	'base' => 'cryptoland_teamitem_shortcode',
	'icon' => 'icon_teamitem',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Team image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Team icon image', 'cryptoland'),
		'param_name' => 'iconimg',
		'description' => esc_html__('Add social icon image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Team link', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link for team.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team name', 'cryptoland' ),
		'param_name' => 'name',
		'description' => esc_html__('Add name.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team position/job', 'cryptoland'),
		'param_name' => 'job',
		'description' => esc_html__('Add team job/position', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//Name
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Name color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change big name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//Job
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Job color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change job color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change job font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change job line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//css design
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
  ));
} class Cryptoland_Team_Item_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TEAM ITEM HOME 2-3-5-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_teamitem2_shortcode_integrateWithVC' );
function cryptoland_teamitem2_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Team Item', 'cryptoland' ),
	'base' => 'cryptoland_teamitem2_shortcode',
	'icon' => 'icon_teamitem',
	'category' => array('Home 2','Home 3','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Team image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team name', 'cryptoland' ),
		'param_name' => 'name',
		'description' => esc_html__('Add name.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team position/job', 'cryptoland'),
		'param_name' => 'job',
		'description' => esc_html__('Add team job/position', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create team social link', 'cryptoland' ),
		'param_name' => 'social',
		'group' => esc_html__('Social Icon', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Team icon image', 'cryptoland'),
			'param_name' => 'icon',
			'description' => esc_html__('Add social icon image.Note:Icon image required for link', 'cryptoland'),
			),
			array(
			'type' => 'vc_link',
			'heading' => esc_html__('Image Link', 'cryptoland' ),
			'param_name' => 'link',
			'description' => esc_html__('Add link to image.', 'cryptoland' ),
			),
		), // params
		), // array
		//Name
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Name color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change big name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//Job
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Job color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change job color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change job font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change job line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
  ));
} class Cryptoland_Team_Item2_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TEAM ITEM HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_teamitem3_shortcode_integrateWithVC' );
function cryptoland_teamitem3_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Team Item', 'cryptoland' ),
	'base' => 'cryptoland_teamitem3_shortcode',
	'icon' => 'icon_teamitem',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Team image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Team social icon', 'cryptoland'),
		'param_name' => 'icon',
		'description' => esc_html__('Add image social icon.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link to team.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team name', 'cryptoland' ),
		'param_name' => 'name',
		'description' => esc_html__('Add name.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team position/job', 'cryptoland'),
		'param_name' => 'job',
		'description' => esc_html__('Add team job/position', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Team description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add team description', 'cryptoland'),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//name style
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Name color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change big name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//Job
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Job color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change job color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change job font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change job line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//css deasign
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
  ));
} class Cryptoland_Team_Item3_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	TEAM ITEM HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_teamitem4_shortcode_integrateWithVC' );
function cryptoland_teamitem4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Team Item', 'cryptoland' ),
	'base' => 'cryptoland_teamitem4_shortcode',
	'icon' => 'icon_teamitem',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Team image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add image', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team name', 'cryptoland' ),
		'param_name' => 'name',
		'description' => esc_html__('Add name.', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Team position/job', 'cryptoland'),
		'param_name' => 'job',
		'description' => esc_html__('Add team job/position', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Team description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add team description', 'cryptoland'),
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create team social link', 'cryptoland' ),
		'param_name' => 'social',
		'group' => esc_html__('Social Icon', 'cryptoland' ),
		'params' => array(
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Team icon image', 'cryptoland'),
			'param_name' => 'icon',
			'description' => esc_html__('Add social icon image.Note:Icon image required for link', 'cryptoland'),
			),
			array(
			'type' => 'vc_link',
			'heading' => esc_html__('Image Link', 'cryptoland' ),
			'param_name' => 'link',
			'description' => esc_html__('Add link to image.', 'cryptoland' ),
			),
		), // params
		), // array
		//Name
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Name color', 'cryptoland'),
		'param_name' => 'nclr',
		'description' => esc_html__('Change name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name font-size', 'cryptoland'),
		'param_name' => 'nsz',
		'description' => esc_html__('Change name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Name line-height', 'cryptoland'),
		'param_name' => 'nlh',
		'description' => esc_html__('Change big name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//Job
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Job color', 'cryptoland'),
		'param_name' => 'jclr',
		'description' => esc_html__('Change job color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job font-size', 'cryptoland'),
		'param_name' => 'jsz',
		'description' => esc_html__('Change job font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Job line-height', 'cryptoland'),
		'param_name' => 'jlh',
		'description' => esc_html__('Change job line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//css design
		array(
		'type' => 'css_editor',
		'heading' => esc_html__('Background CSS', 'cryptoland' ),
		'param_name' => 'css',
		'group' => esc_html__('Background options', 'cryptoland' ),
		),
  	)
  ));
} class Cryptoland_Team_Item4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PRESS ABOUT CAROUSEL HOME 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_press_carousel_shortcode_integrateWithVC' );
function cryptoland_press_carousel_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Press About Slider', 'cryptoland' ),
	'base' => 'cryptoland_press_carousel_shortcode',
	'icon' => 'icon_press',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create Carousel Slider', 'cryptoland' ),
		'param_name' => 'about',
		'params' => array(
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Text', 'cryptoland'),
			'param_name' => 'desc',
			),
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Image', 'cryptoland'),
			'param_name' => 'img',
			'description' => esc_html__('Add your image', 'cryptoland'),
			),
			array(
			'type' 			=> 'checkbox',
			'heading' => esc_html__( 'Add link image?', 'cryptoland' ),
			'param_name' => 'linkcheck',
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			),
			array(
			'type' => 'vc_link',
			'heading' => esc_html__('Image Link', 'cryptoland' ),
			'param_name' => 'link',
			'description' => esc_html__('Add link to image.', 'cryptoland' ),
			'dependency' => array(
				'element' => 'linkcheck',
				'not_empty' => true,
			),
			),
		), // params
		), // array
		//Description
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Slider options', 'cryptoland'),
		'param_name' => 'slider_heading',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider loop', 'cryptoland' ),
		'param_name' => 'sldloop',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will be looped', 'cryptoland' ),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider autoplay', 'cryptoland' ),
		'param_name' => 'autoplay',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will start automatically.', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Dot color', 'cryptoland' ),
		'param_name' => 'dotclr',
		'description' => esc_html__('Add prebuilt color for the slider dots.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'bgclr-yellow',
			),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Active Dot color', 'cryptoland' ),
		'param_name' => 'actdotclr',
		'description' => esc_html__('Add prebuilt color for the slider active dot.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'act-bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'act-bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'act-bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'act-bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'act-bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'act-bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'act-bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'act-bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'act-bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'act-bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'act-bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'act-bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'act-bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'act-bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'act-bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'act-bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'act-bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'act-bgclr-yellow',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Press_Carousel_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PRESS ABOUT CAROUSEL HOME 2
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_press_carousel2_shortcode_integrateWithVC' );
function cryptoland_press_carousel2_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Press About Slider', 'cryptoland' ),
	'base' => 'cryptoland_press_carousel2_shortcode',
	'icon' => 'icon_press',
	'category' => 'Home 2',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create Carousel Slider', 'cryptoland' ),
		'param_name' => 'about',
		'params' => array(
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Text', 'cryptoland'),
			'param_name' => 'desc',
			),
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Image', 'cryptoland'),
			'param_name' => 'img',
			'description' => esc_html__('Add your image', 'cryptoland'),
			),
			array(
			'type' 			=> 'checkbox',
			'heading' => esc_html__( 'Add link image?', 'cryptoland' ),
			'param_name' => 'linkcheck',
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			),
			array(
			'type' => 'vc_link',
			'heading' => esc_html__('Image Link', 'cryptoland' ),
			'param_name' => 'link',
			'description' => esc_html__('Add link to image.', 'cryptoland' ),
			'dependency' => array(
				'element' => 'linkcheck',
				'not_empty' => true,
			),
			),
		), // params
		), // array
		//Description
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Slider options', 'cryptoland'),
		'param_name' => 'slider_heading',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider loop', 'cryptoland' ),
		'param_name' => 'sldloop',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will be looped', 'cryptoland' ),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider autoplay', 'cryptoland' ),
		'param_name' => 'autoplay',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will start automatically.', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Dot color', 'cryptoland' ),
		'param_name' => 'dotclr',
		'description' => esc_html__('Add prebuilt color for the slider dots.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'bgclr-yellow',
			),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Active Dot color', 'cryptoland' ),
		'param_name' => 'actdotclr',
		'description' => esc_html__('Add prebuilt color for the slider active dot.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'act-bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'act-bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'act-bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'act-bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'act-bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'act-bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'act-bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'act-bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'act-bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'act-bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'act-bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'act-bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'act-bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'act-bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'act-bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'act-bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'act-bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'act-bgclr-yellow',
			),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Press_Carousel2_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PRESS ABOUT ITEM HOME 4-5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_press_carousel4_shortcode_integrateWithVC' );
function cryptoland_press_carousel4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Press About Item', 'cryptoland' ),
	'base' => 'cryptoland_press_carousel4_shortcode',
	'icon' => 'icon_press',
	'category' => array( 'Home 4','Home 5'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add your image', 'cryptoland'),
		),
        array(
        'type' => 'textfield',
        'heading' => esc_html__('Image URL', 'cryptoland'),
        'param_name' => 'href',
        'description' => esc_html__('Add your image URL', 'cryptoland'),
        ),
        array(
		'type' => 'dropdown',
		'heading' => esc_html__('Image URL Target', 'cryptoland' ),
		'param_name' => 'target',
		'description' => esc_html__('Select image url target.', 'cryptoland' ),
		'value' => array(
			esc_html__('Target', 'cryptoland' )	=> '_target',
			esc_html__('Self',   'cryptoland' )	=> '_self',
			esc_html__('Parent', 'cryptoland' )	=> '_parent',
			esc_html__('Top',    'cryptoland' )	=> '_top',
			),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Text', 'cryptoland'),
		'param_name' => 'desc',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Press_Carousel4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PRESS ABOUT ITEM HOME 6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_press_about6_shortcode_integrateWithVC' );
function cryptoland_press_about6_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Press About Item H-6', 'cryptoland' ),
	'base' => 'cryptoland_press_about6_shortcode',
	'icon' => 'icon_press',
	'category' => 'Home 6',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add your image', 'cryptoland'),
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link', 'cryptoland'),
		'param_name' => 'link',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		// arrays end
  	)
  ));
} class Cryptoland_Press_About6_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	EVENT ITEM HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_new_event4_shortcode_integrateWithVC' );
function cryptoland_new_event4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Event Item', 'cryptoland' ),
	'base' => 'cryptoland_new_event4_shortcode',
	'icon' => 'icon_calendar',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add your image', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Event title', 'cryptoland'),
		'param_name' => 'title',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Event date', 'cryptoland'),
		'param_name' => 'date',
		),
		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Event Link', 'cryptoland'),
		'param_name' => 'link',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change text block color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change text block font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change text block line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_New_Event4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	BLOG CAROUSEL HOME 1
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_blog_shortcode_integrateWithVC' );
function cryptoland_blog_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__('Blog Slider', 'cryptoland'),
	'base' => 'cryptoland_blog_shortcode',
	'icon' => 'icon_blogging',
	'category' => 'Home 1',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		"type" 			=> "loop",
		"heading" 		=> esc_html__("Post Query", 'cryptoland' ),
		"param_name" 	=> "build_query",
		'settings' => array(
		'size' 			=> array('hidden' => false, 'value' =>  ''),
		'order_by' => array('value' => 'date'),
		'post_type' => array('value' => 'post', 'hidden' => false)
		),
		"description" 	=> esc_html__("Create WordPress loop, to populate products from your site.", 'cryptoland' )
		),
		// slider options
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Slider options', 'cryptoland'),
		'param_name' => 'slider_heading',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider loop', 'cryptoland' ),
		'param_name' => 'sldloop',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will be looped', 'cryptoland' ),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider autoplay', 'cryptoland' ),
		'param_name' => 'autoplay',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will start automatically.', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Show Items', 'cryptoland'),
		'param_name' => 'itemsmd',
		'description' => esc_html__('Default items 3', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Dot color', 'cryptoland' ),
		'param_name' => 'dotclr',
		'description' => esc_html__('Add prebuilt color for the slider dots.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'bgclr-yellow',
			),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Active Dot color', 'cryptoland' ),
		'param_name' => 'actdotclr',
		'description' => esc_html__('Add prebuilt color for the slider active dot.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'act-bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'act-bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'act-bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'act-bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'act-bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'act-bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'act-bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'act-bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'act-bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'act-bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'act-bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'act-bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'act-bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'act-bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'act-bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'act-bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'act-bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'act-bgclr-yellow',
			),
		),

		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		// Post title
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide post title', 'cryptoland' ),
		'param_name' => 'hidetitle',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post title will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change post title color.', 'cryptoland'),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetitle',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change post title font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetitle',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change post title line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetitle',
			'is_empty' => true
		)
		),
		//taxonomies
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide taxonomies', 'cryptoland' ),
		'param_name' => 'hidetax',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post category will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post category color', 'cryptoland'),
		'param_name' => 'cclr',
		'description' => esc_html__('Change post category color.', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetax',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post category font-size', 'cryptoland'),
		'param_name' => 'csz',
		'description' => esc_html__('Change post category font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetax',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post category line-height', 'cryptoland'),
		'param_name' => 'clh',
		'description' => esc_html__('Change post category line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetax',
			'is_empty' => true
		)
		),
		//post date
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide date', 'cryptoland' ),
		'param_name' => 'hidedate',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post date will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post date color', 'cryptoland'),
		'param_name' => 'dtclr',
		'description' => esc_html__('Change post date color.', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidedate',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post date font-size', 'cryptoland'),
		'param_name' => 'dtsz',
		'description' => esc_html__('Change post date font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidedate',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post date line-height', 'cryptoland'),
		'param_name' => 'dtlh',
		'description' => esc_html__('Change post date line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidedate',
			'is_empty' => true
		)
		),
		//post content
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide content text', 'cryptoland' ),
		'param_name' => 'hidetext',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post content text will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Content limit', 'cryptoland'),
		'param_name' => 'excerptsz',
		'description' => esc_html__('You can control with limit the content text.Use simple number.e.g:25', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty' => true
		)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post content text color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change content text color.', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post content text font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change post content text font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty' => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post content text line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change post content text line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty' => true
		)
		),
) // vc_map
));
}
class Cryptoland_Blog_Shortcode extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	BLOG CAROUSEL HOME 2-3-5-6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_blog2_shortcode_integrateWithVC' );
function cryptoland_blog2_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__('Blog Slider', 'cryptoland'),
	'base' => 'cryptoland_blog2_shortcode',
	'icon' => 'icon_blogging',
	'category' => array('Home 2','Home 3','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		"type" 			=> "loop",
		"heading" 		=> esc_html__("Post Query", 'cryptoland' ),
		"param_name" 	=> "build_query",
		'settings' => array(
		'size' 			=> array('hidden' => false, 'value' =>  ''),
		'order_by' => array('value' => 'date'),
		'post_type' => array('value' => 'post', 'hidden' => false)
		),
		"description" 	=> esc_html__("Create WordPress loop, to populate products from your site.", 'cryptoland' )
		),
		// slider options
		array(
		'type' 			=> 'cryptoland_new_param',
		'holder' => 'div',
		'heading' => esc_html__('Slider options', 'cryptoland'),
		'param_name' => 'slider_heading',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider loop', 'cryptoland' ),
		'param_name' => 'sldloop',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will be looped', 'cryptoland' ),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Slider autoplay', 'cryptoland' ),
		'param_name' => 'autoplay',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the slider will start automatically.', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Show Items', 'cryptoland'),
		'param_name' => 'itemsmd',
		'description' => esc_html__('Default items 3', 'cryptoland'),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Dot color', 'cryptoland' ),
		'param_name' => 'dotclr',
		'description' => esc_html__('Add prebuilt color for the slider dots.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'bgclr-yellow',
			),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Slider Active Dot color', 'cryptoland' ),
		'param_name' => 'actdotclr',
		'description' => esc_html__('Add prebuilt color for the slider active dot.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a color', 'cryptoland' )	=> '',
			esc_html__('green',   		'cryptoland' )	=> 'act-bgclr-green',
			esc_html__('blue',    		'cryptoland' )	=> 'act-bgclr-blue',
			esc_html__('blue2',    		'cryptoland' )	=> 'act-bgclr-blue2',
			esc_html__('lightblue',    	'cryptoland' )	=> 'act-bgclr-lightblue',
			esc_html__('deepblue',    	'cryptoland' )	=> 'act-bgclr-deepblue',
			esc_html__('red',    		'cryptoland' )	=> 'act-bgclr-red',
			esc_html__('orange',    	'cryptoland' )	=> 'act-bgclr-orange',
			esc_html__('purple',    	'cryptoland' )	=> 'act-bgclr-purple',
			esc_html__('deeppurple',    'cryptoland' )	=> 'act-bgclr-deeppurple',
			esc_html__('lightpurple',   'cryptoland' )	=> 'act-bgclr-lightpurple',
			esc_html__('black',    		'cryptoland' )	=> 'act-bgclr-black',
			esc_html__('dark',    		'cryptoland' )	=> 'act-bgclr-dark',
			esc_html__('lightdark',    	'cryptoland' )	=> 'act-bgclr-lightdark',
			esc_html__('grey',    		'cryptoland' )	=> 'act-bgclr-grey',
			esc_html__('lightgrey',    	'cryptoland' )	=> 'act-bgclr-lightgrey',
			esc_html__('deepgrey',    	'cryptoland' )	=> 'act-bgclr-deepgrey',
			esc_html__('rose',    		'cryptoland' )	=> 'act-bgclr-rose',
			esc_html__('yellow',    	'cryptoland' )	=> 'act-bgclr-yellow',
			),
		),

		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		// Post thumb
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide post image', 'cryptoland' ),
		'param_name' => 'hidethumb',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post thumbnail image will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Post Image', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post image width', 'cryptoland'),
		'param_name' => 'imgw',
		'description' => esc_html__('Change post thumbnail image width or leave it blank.Note: use simple number without px or unit.', 'cryptoland'),
		'group' => esc_html__('Post Image', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidethumb',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post image height', 'cryptoland'),
		'param_name' => 'imgh',
		'description' => esc_html__('Change post thumbnail image height or leave it blank.Note: use simple number without px or unit.', 'cryptoland'),
		'group' => esc_html__('Post Image', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidethumb',
			'is_empty'  => true
		)
		),
		// Post title
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide post title', 'cryptoland' ),
		'param_name' => 'hidetitle',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post title will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change post title color.', 'cryptoland'),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetitle',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change post title font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetitle',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change post title line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Title', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetitle',
			'is_empty'  => true
		)
		),
		//taxonomies
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide taxonomies', 'cryptoland' ),
		'param_name' => 'hidetax',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post category will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post category color', 'cryptoland'),
		'param_name' => 'cclr',
		'description' => esc_html__('Change post category color.', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetax',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post category font-size', 'cryptoland'),
		'param_name' => 'csz',
		'description' => esc_html__('Change post category font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetax',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post category line-height', 'cryptoland'),
		'param_name' => 'clh',
		'description' => esc_html__('Change post category line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetax',
			'is_empty'  => true
		)
		),
		//post date
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide date', 'cryptoland' ),
		'param_name' => 'hidedate',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post date will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post date color', 'cryptoland'),
		'param_name' => 'dtclr',
		'description' => esc_html__('Change post date color.', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidedate',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post date font-size', 'cryptoland'),
		'param_name' => 'dtsz',
		'description' => esc_html__('Change post date font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidedate',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post date line-height', 'cryptoland'),
		'param_name' => 'dtlh',
		'description' => esc_html__('Change post date line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Category-Date', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidedate',
			'is_empty'  => true
		)
		),
		//post content
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide content text', 'cryptoland' ),
		'param_name' => 'hidetext',
		'value' => array( esc_html__( 'Hide', 'cryptoland' ) => 'hide' ),
		'description' => esc_html__('If checked, the post content text will be disabled.', 'cryptoland' ),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Content limit', 'cryptoland'),
		'param_name' => 'excerptsz',
		'description' => esc_html__('You can control with limit the content text.Use simple number.e.g:25', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Post content text color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change content text color.', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post content text font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change post content text font-size.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty'  => true
		)
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Post content text line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change post content text line-height.use number in( px or unit )', 'cryptoland'),
		'group' => esc_html__('Post Text', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'hidetext',
			'is_empty'  => true
		)
		),
) // vc_map
));
}
class Cryptoland_Blog2_Shortcode extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	CHART HOME 2
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_chart_shortcode_integrateWithVC' );
function cryptoland_chart_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Chart', 'cryptoland' ),
	'base' => 'cryptoland_chart_shortcode',
	'icon' => 'icon_chart1',
	'category' => 'Home 2',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Chart', 'cryptoland' ),
		'param_name' => 'chart',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label chart value.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Value', 'cryptoland'),
			'param_name' => 'value',
			'description' => esc_html__('Add chart value', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Color', 'cryptoland'),
			'param_name' => 'clr',
			'description' => esc_html__('Add chart value color.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description chart value', 'cryptoland'),
			),
		), // params
		), // array
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart circle size', 'cryptoland'),
		'param_name' => 'chartcutout',
		'description' => esc_html__('The percentage of the chart that is cut out of the middle.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart border width', 'cryptoland'),
		'param_name' => 'chartbrd',
		'description' => esc_html__('Change canvas chart border width.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart border color', 'cryptoland'),
		'param_name' => 'chartbrdclr',
		'description' => esc_html__('Change canvas chart border color.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Chart_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	CHART HOME 3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_chart3_shortcode_integrateWithVC' );
function cryptoland_chart3_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Chart', 'cryptoland' ),
	'base' => 'cryptoland_chart3_shortcode',
	'icon' => 'icon_chart1',
	'category' => 'Home 3',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'subtitle',
		'description' => esc_html__('Add section subtitle.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add section title.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Background big title', 'cryptoland'),
		'param_name' => 'btitle',
		'description' => esc_html__('Add section background big title.', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart title', 'cryptoland'),
		'param_name' => 'charttitle',
		'description' => esc_html__('Add chart title.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description', 'cryptoland'),
		'param_name' => 'chartdesc',
		'description' => esc_html__('Add chart description.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Chart background image', 'cryptoland'),
		'param_name' => 'chartbg',
		'description' => esc_html__('Add chart background image', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart circle size', 'cryptoland'),
		'param_name' => 'chartcutout',
		'description' => esc_html__('The percentage of the chart that is cut out of the middle.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart border width', 'cryptoland'),
		'param_name' => 'chartbrd',
		'description' => esc_html__('Change canvas chart border width.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart border color', 'cryptoland'),
		'param_name' => 'chartbrdclr',
		'description' => esc_html__('Change canvas chart border color.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create Chart', 'cryptoland' ),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'param_name' => 'chart',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label chart value.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Value', 'cryptoland'),
			'param_name' => 'value',
			'description' => esc_html__('Add chart value', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Color', 'cryptoland'),
			'param_name' => 'clr',
			'description' => esc_html__('Add chart value color.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Bar short title', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add short description for bar', 'cryptoland'),
			),
			array(
			'type' => 'checkbox',
			'heading' => esc_html__('Custom Bar Color?', 'cryptoland' ),
			'param_name' => 'barclr',
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			'description' => esc_html__('If checked, you can change the right bars color.', 'cryptoland' ),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Color 1', 'cryptoland'),
			'param_name' => 'custombarclr1',
			'edit_field_class' => 'vc_col-sm-4',
			'dependency' => array(
				'element' => 'barclr',
				'not_empty' => true
			),
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Color 2', 'cryptoland'),
			'param_name' => 'custombarclr2',
			'edit_field_class' => 'vc_col-sm-4',
			'dependency' => array(
				'element' => 'barclr',
				'not_empty' => true
			),
			),
		), // params
		), // array
		//big title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Big title color', 'cryptoland'),
		'param_name' => 'btclr',
		'description' => esc_html__('Change big title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big title font-size', 'cryptoland'),
		'param_name' => 'btsz',
		'description' => esc_html__('Change big title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Big title line-height', 'cryptoland'),
		'param_name' => 'btlh',
		'description' => esc_html__('Change big title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//subtitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Subtitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//chart title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart title color', 'cryptoland'),
		'param_name' => 'chtclr',
		'description' => esc_html__('Change chart title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart title font-size', 'cryptoland'),
		'param_name' => 'chtsz',
		'description' => esc_html__('Change chart title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart title line-height', 'cryptoland'),
		'param_name' => 'chtlh',
		'description' => esc_html__('Change chart title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//chart description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart description color', 'cryptoland'),
		'param_name' => 'chpclr',
		'description' => esc_html__('Change chart description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description font-size', 'cryptoland'),
		'param_name' => 'chpsz',
		'description' => esc_html__('Change chart description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description line-height', 'cryptoland'),
		'param_name' => 'chplh',
		'description' => esc_html__('Change chart description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//chart bar description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart bar description color', 'cryptoland'),
		'param_name' => 'chlclr',
		'description' => esc_html__('Change chart bar description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart bar description font-size', 'cryptoland'),
		'param_name' => 'chlsz',
		'description' => esc_html__('Change chart bar description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart bar description line-height', 'cryptoland'),
		'param_name' => 'chllh',
		'description' => esc_html__('Change chart bar description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),

		// arrays end
  	)
  ));
} class Cryptoland_Chart3_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	CHART HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_chart4_shortcode_integrateWithVC' );
function cryptoland_chart4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Chart', 'cryptoland' ),
	'base' => 'cryptoland_chart4_shortcode',
	'icon' => 'icon_chart1',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle', 'cryptoland'),
		'param_name' => 'subtitle',
		'description' => esc_html__('Add section subtitle.', 'cryptoland'),
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Thin title', 'cryptoland'),
		'param_name' => 'thintitle',
		'description' => esc_html__('Add section title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		array(
		'type' => 'textarea',
		'heading' => esc_html__('Bold title', 'cryptoland'),
		'param_name' => 'title',
		'description' => esc_html__('Add section background big title.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6'
		),
		//chart
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create Chart', 'cryptoland' ),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'param_name' => 'chart',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label chart value.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Value', 'cryptoland'),
			'param_name' => 'value',
			'description' => esc_html__('Add chart value', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Color', 'cryptoland'),
			'param_name' => 'clr',
			'description' => esc_html__('Add chart value color.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description for chart value', 'cryptoland'),
			),
		), // params
		), // array
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart inner title', 'cryptoland'),
		'param_name' => 'charttitle',
		'description' => esc_html__('Add chart title.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart circle size', 'cryptoland'),
		'param_name' => 'chartcutout',
		'description' => esc_html__('The percentage of the chart that is cut out of the middle.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart border width', 'cryptoland'),
		'param_name' => 'chartbrd',
		'description' => esc_html__('Change canvas chart border width.', 'cryptoland'),
		'value' => '',
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart border color', 'cryptoland'),
		'param_name' => 'chartbrdclr',
		'description' => esc_html__('Change canvas chart border color.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Chart animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'group' => esc_html__('Chart', 'cryptoland' ),
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'group' => esc_html__('Chart', 'cryptoland' ),
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('List animation?', 'cryptoland' ),
		'param_name' => 'addanim2',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		'group' => esc_html__('Chart', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim2',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'group' => esc_html__('Chart', 'cryptoland' ),
		'dependency' => array(
			'element' => 'addanim2',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay2',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'group' => esc_html__('Chart', 'cryptoland' ),
		'dependency' => array(
			'element' => 'addanim2',
			'not_empty' => true
		)
		),
		//subtitle
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Subtitle color', 'cryptoland'),
		'param_name' => 'stclr',
		'description' => esc_html__('Change subtitle color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle font-size', 'cryptoland'),
		'param_name' => 'stsz',
		'description' => esc_html__('Change subtitle font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Subtitle line-height', 'cryptoland'),
		'param_name' => 'stlh',
		'description' => esc_html__('Change subtitle line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//chart title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart title color', 'cryptoland'),
		'param_name' => 'chtclr',
		'description' => esc_html__('Change chart title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart title font-size', 'cryptoland'),
		'param_name' => 'chtsz',
		'description' => esc_html__('Change chart title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart title line-height', 'cryptoland'),
		'param_name' => 'chtlh',
		'description' => esc_html__('Change chart title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		//chart description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart description color', 'cryptoland'),
		'param_name' => 'chpclr',
		'description' => esc_html__('Change chart description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description font-size', 'cryptoland'),
		'param_name' => 'chpsz',
		'description' => esc_html__('Change chart description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description line-height', 'cryptoland'),
		'param_name' => 'chplh',
		'description' => esc_html__('Change chart description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		// arrays end
	)
));
} class Cryptoland_Chart4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	CHART HOME 5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_chart5_shortcode_integrateWithVC' );
function cryptoland_chart5_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Chart', 'cryptoland' ),
	'base' => 'cryptoland_chart5_shortcode',
	'icon' => 'icon_chart1',
	'category' => 'Home 5',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(

		//chart
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create Chart', 'cryptoland' ),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'param_name' => 'chart',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label chart value.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Value', 'cryptoland'),
			'param_name' => 'value',
			'description' => esc_html__('Add chart value', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Color', 'cryptoland'),
			'param_name' => 'clr',
			'description' => esc_html__('Add chart value color.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description for chart value', 'cryptoland'),
			),
		), // params
		), // array
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart circle size', 'cryptoland'),
		'param_name' => 'chartcutout',
		'description' => esc_html__('The percentage of the chart that is cut out of the middle.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart border width', 'cryptoland'),
		'param_name' => 'chartbrd',
		'description' => esc_html__('Change canvas chart border width.', 'cryptoland'),
		'value' => '',
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart border color', 'cryptoland'),
		'param_name' => 'chartbrdclr',
		'description' => esc_html__('Change canvas chart border color.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Select animation from list', 'cryptoland' ),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Set animation delay.', 'cryptoland'),
		'group' => esc_html__('Chart', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//chart description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Chart description color', 'cryptoland'),
		'param_name' => 'chpclr',
		'description' => esc_html__('Change chart description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description font-size', 'cryptoland'),
		'param_name' => 'chpsz',
		'description' => esc_html__('Change chart description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Chart description line-height', 'cryptoland'),
		'param_name' => 'chplh',
		'description' => esc_html__('Change chart description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4'
		),
		// arrays end
	)
));
} class Cryptoland_Chart5_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	TOKEN LIST HOME 2
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_tokenlist_shortcode_integrateWithVC' );
function cryptoland_tokenlist_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Token List', 'cryptoland' ),
	'base' => 'cryptoland_tokenlist_shortcode',
	'icon' => 'icon_list',
	'category' => array('Home 2','Home 3'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create list', 'cryptoland' ),
		'param_name' => 'tokenlist',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label list item.', 'cryptoland'),
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description for label.', 'cryptoland'),
			),
		), // params
		), // array
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Label color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change label text color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Label font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change label font-size.Use number in ( px or unit )', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Label line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change label line-height.Use number in ( px or unit )', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description text color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size.Use number in ( px or unit )', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height.Use number in ( px or unit )', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Tokenlist_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TOKEN LIST HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_tokenlist4_shortcode_integrateWithVC' );
function cryptoland_tokenlist4_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Token List H-4', 'cryptoland' ),
	'base' => 'cryptoland_tokenlist4_shortcode',
	'icon' => 'icon_list',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create list', 'cryptoland' ),
		'param_name' => 'tokenlist',
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label list item.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textarea',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description for label.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-8',
			),
		), // params
		), // array
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Label color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change label text color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Label font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change label font-size.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Label line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change label line-height.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description text color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Tokenlist4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TOKEN LIST HOME 5
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_tokenlist5_shortcode_integrateWithVC' );
function cryptoland_tokenlist5_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Token List', 'cryptoland' ),
	'base' => 'cryptoland_tokenlist5_shortcode',
	'icon' => 'icon_list',
	'category' => array('Home 5', 'Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('List type', 'cryptoland' ),
		'param_name' => 'liststyle',
		'value' => array(
			esc_html__('List style',  'cryptoland' )	=> '1',
			esc_html__('Data style',  'cryptoland' )	=> '2',
			),
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create list', 'cryptoland' ),
		'param_name' => 'tokenlist',
		'dependency' => array(
			'element' => 'liststyle',
			'value' => '1',
		),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label list item.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Description', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add description for label.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-8',
			),
		), // params
		), // array
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create Data list', 'cryptoland' ),
		'param_name' => 'tokenlist2',
		'dependency' => array(
			'element' => 'liststyle',
			'value' => '2',
		),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Label', 'cryptoland'),
			'param_name' => 'label',
			'description' => esc_html__('Add label for data.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4 pt15',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Data', 'cryptoland'),
			'param_name' => 'desc',
			'description' => esc_html__('Add data description for label.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Data color', 'cryptoland'),
			'param_name' => 'color',
			'description' => esc_html__('Change data description color.', 'cryptoland'),
			'edit_field_class' => 'vc_col-sm-4',
			),
		), // params
		), // array

		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Label color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change label text color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Label font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change label font-size.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Label line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change label line-height.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description text color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height.Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// arrays end
  	)
  ));
} class Cryptoland_Tokenlist5_Class extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	DATANUM HOME 2
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_datanum_shortcode_integrateWithVC' );
function cryptoland_datanum_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Data Num', 'cryptoland' ),
	'base' => 'cryptoland_datanum_shortcode',
	'icon' => 'icon_heading',
	'category' => 'Home 2',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number', 'cryptoland'),
		'param_name' => 'num',
		'description' => esc_html__('Add number', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number symbol', 'cryptoland'),
		'param_name' => 'symbl',
		'description' => esc_html__('Add symbol', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number name', 'cryptoland'),
		'param_name' => 'symbl2',
		'description' => esc_html__('Add text', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bottom description', 'cryptoland'),
		'param_name' => 'desc',
		'description' => esc_html__('Add description', 'cryptoland'),
		),
		// Number
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// symbol
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number symbol color', 'cryptoland'),
		'param_name' => 'sclr',
		'description' => esc_html__('Change symbol color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number symbol font-size', 'cryptoland'),
		'param_name' => 'ssz',
		'description' => esc_html__('Change symbol font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number symbol line-height', 'cryptoland'),
		'param_name' => 'slh',
		'description' => esc_html__('Change symbol line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//Description
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Description color', 'cryptoland'),
		'param_name' => 'pclr',
		'description' => esc_html__('Change description color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description font-size', 'cryptoland'),
		'param_name' => 'psz',
		'description' => esc_html__('Change description font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Description line-height', 'cryptoland'),
		'param_name' => 'plh',
		'description' => esc_html__('Change description line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
	)
));
} class Cryptoland_Datanum_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	DATANUM HOME 4
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_datanum4_shortcode_integrateWithVC' );
function cryptoland_datanum4_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Data Num', 'cryptoland' ),
	'base' => 'cryptoland_datanum4_shortcode',
	'icon' => 'icon_heading',
	'category' => 'Home 4',
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Data Number', 'cryptoland'),
		'param_name' => 'num',
		'description' => esc_html__('Add number', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Data number name', 'cryptoland'),
		'param_name' => 'numname',
		'description' => esc_html__('Add number name', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Number image', 'cryptoland'),
		'param_name' => 'numimg',
		'description' => esc_html__('Add your image', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Add animation for data content', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-6',
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for animation', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		),
		// Title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change number color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change number font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change number line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		// numname
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Number name color', 'cryptoland'),
		'param_name' => 'sclr',
		'description' => esc_html__('Change number name color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number name font-size', 'cryptoland'),
		'param_name' => 'ssz',
		'description' => esc_html__('Change number name font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Number name line-height', 'cryptoland'),
		'param_name' => 'slh',
		'description' => esc_html__('Change number name line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
	)
));
} class Cryptoland_Datanum4_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	BUTTON INLINE
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_btn_inline_shortcode_integrateWithVC' );
function cryptoland_btn_inline_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Buttons Inline', 'cryptoland' ),
	'base' => 'cryptoland_btn_inline_shortcode',
	'icon' => 'icon_switch',
	'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(

		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Link style', 'cryptoland' ),
		'param_name' => 'btntype',
		'description' => esc_html__('Select link style.', 'cryptoland' ),
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('Text with Icon',   	'cryptoland' )	=> 'text',
			esc_html__('Theme Button',   	'cryptoland' )	=> 'btn',
		),
		),
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create inline link', 'cryptoland' ),
		'param_name' => 'btnloop',
		'dependency' => array(
			'element' => 'btntype',
			'value' => 'text',
		),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Title on button', 'cryptoland'),
			'param_name' => 'title',
			),
			array(
			'type' => 'dropdown',
			'heading' => esc_html__('Icon type', 'cryptoland' ),
			'param_name' => 'imgtype',
			'description' => esc_html__('Select link style.', 'cryptoland' ),
			'value' => array(
				esc_html__('Select a option', 'cryptoland' )	=> '',
				esc_html__('Font Icon',   	'cryptoland' )	=> 'icon',
				esc_html__('Image',   		'cryptoland' )	=> 'img',
			),
			),
			array(
			'type' => 'attach_image',
			'heading' => esc_html__('Image', 'cryptoland'),
			'param_name' => 'img',
			'description' => esc_html__('Add your image', 'cryptoland'),
			'dependency' => array(
				'element' => 'imgtype',
				'value' => 'img',
			),
			),
			array(
			'type' => 'iconpicker',
			'heading' => esc_html__('Image', 'cryptoland'),
			'param_name' => 'icon',
			'description' => esc_html__('Add your icon before title', 'cryptoland'),
			'dependency' => array(
				'element' => 'imgtype',
				'value' => 'icon',
			),
			),
			array(
			'type' 			=> 'checkbox',
			'heading' => esc_html__( 'Add link video?', 'cryptoland' ),
			'param_name' => 'addvideo',
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Youtube Video Url', 'cryptoland'),
			'param_name' => 'videourl',
			'dependency' => array(
				'element' => 'addvideo',
				'not_empty' => true,
			),
			),
			array(
			'type' => 'vc_link',
			'heading' => esc_html__('Link', 'cryptoland' ),
			'param_name' => 'link',
			'description' => esc_html__('Add link.', 'cryptoland' ),
			'dependency' => array(
				'element' => 'addvideo',
				'is_empty'  => true,
			),
			),
		), // params
		), // array
		array(
		'type' => 'param_group',
		'heading' => esc_html__('Create inline link', 'cryptoland' ),
		'param_name' => 'btndef',
		'dependency' => array(
			'element' => 'btntype',
			'value' => 'btn',
		),
		'params' => array(
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Title on button', 'cryptoland'),
			'param_name' => 'title',
			),
			array(
			'type' => 'dropdown',
			'heading' => esc_html__('Button', 'cryptoland' ),
			'param_name' => 'btnsz',
			'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
			'value' => array(
				esc_html__('Select a option', 	'cryptoland' )	=> '',
				esc_html__('medium',   			'cryptoland' )	=> 'btn--medium',
				esc_html__('big',   			'cryptoland' )	=> 'btn--big',
			),
			),
			array(
			'type' => 'dropdown',
			'heading' => esc_html__('Button color', 'cryptoland' ),
			'param_name' => 'btnbg',
			'description' => esc_html__('Add prebuilt color for button.', 'cryptoland' ),
			'value' => array(
				esc_html__('Select a color', 	'cryptoland' )	=> '',
				esc_html__('white',   			'cryptoland' )	=> 'btn--white',
				esc_html__('purple',   			'cryptoland' )	=> 'btn--purpure',
				esc_html__('purple-shadow',   	'cryptoland' )	=> 'btn--purpure-shadow',
				esc_html__('green',   			'cryptoland' )	=> 'btn--green',
				esc_html__('custom color',   	'cryptoland' )	=> 'custom',
			),
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Custom color', 'cryptoland'),
			'param_name' => 'btncbg',
			'description' => esc_html__('Change button background color.', 'cryptoland'),
			'dependency' => array(
				'element' => 'btnbg',
				'value' => 'custom',
			),
			),
			array(
			'type' => 'colorpicker',
			'heading' => esc_html__('Custom hover color', 'cryptoland'),
			'param_name' => 'btnchvr',
			'description' => esc_html__('Change button hover background color.', 'cryptoland'),
			'dependency' => array(
				'element' => 'btnbg',
				'value' => 'custom',
			),
			),
			array(
			'type' 			=> 'checkbox',
			'heading' => esc_html__( 'Add link video?', 'cryptoland' ),
			'param_name' => 'addvideo',
			'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__('Youtube Video Url', 'cryptoland'),
			'param_name' => 'videourl',
			'dependency' => array(
				'element' => 'addvideo',
				'not_empty' => true,
			),
			),
			array(
			'type' => 'vc_link',
			'heading' => esc_html__('Link', 'cryptoland' ),
			'param_name' => 'link',
			'description' => esc_html__('Add link.', 'cryptoland' ),
			'dependency' => array(
				'element' => 'addvideo',
				'is_empty'  => true,
			),
			),
		), // params
		), // array
		//title
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'tclr',
		'description' => esc_html__('Change title color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title font-size', 'cryptoland'),
		'param_name' => 'tsz',
		'description' => esc_html__('Change title font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Title line-height', 'cryptoland'),
		'param_name' => 'tlh',
		'description' => esc_html__('Change title line-height. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		//icon
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Icon color', 'cryptoland'),
		'param_name' => 'iclr',
		'description' => esc_html__('Change icon color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'btntype',
			'value' => 'text',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Icon hover color', 'cryptoland'),
		'param_name' => 'ihvrclr',
		'description' => esc_html__('Change icon hover color.', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'btntype',
			'value' => 'text',
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Icon font-size', 'cryptoland'),
		'param_name' => 'isz',
		'description' => esc_html__('Change icon font-size. Use number in ( px or unit )', 'cryptoland'),
		'group' => esc_html__('Custom Style', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'btntype',
			'value' => 'text',
		),
		),
		// arrays end
  	)
  ));
} class Cryptoland_Btn_Inline_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	BUTTON HOME 3
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_button3_shortcode_integrateWithVC' );
function cryptoland_button3_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Button', 'cryptoland' ),
	'base' => 'cryptoland_button3_shortcode',
	'icon' => 'icon_switch',
	'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
    'params' => array(

		array(
		'type' => 'vc_link',
		'heading' => esc_html__('Link', 'cryptoland' ),
		'param_name' => 'link',
		'description' => esc_html__('Add link and title button.', 'cryptoland' ),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button color', 'cryptoland' ),
		'param_name' => 'btnbg',
		'description' => esc_html__('Select button color .', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'value' => array(
			esc_html__('Select a option','cryptoland' )	=> '',
			esc_html__('orange',   		'cryptoland' )	=> 'btn--orange',
			esc_html__('blue',   		'cryptoland' )	=> 'btn--blue',
			esc_html__('red',   		'cryptoland' )	=> 'btn--red',
			esc_html__('custom color',  'cryptoland' )	=> 'custom',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button size', 'cryptoland' ),
		'param_name' => 'btnsize',
		'description' => esc_html__('Add prebuilt button size.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('small',   		'cryptoland' )	=> 'btn--small',
			esc_html__('medium',   		'cryptoland' )	=> 'btn--medium',
			esc_html__('big',   		'cryptoland' )	=> 'btn--big',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button text transform', 'cryptoland' ),
		'description' => esc_html__('Select title text transform.', 'cryptoland' ),
		'param_name' => 'btntxt',
		'edit_field_class' => 'vc_col-sm-3',
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('uppercase',   	'cryptoland' )	=> 'btn--uppercase',
			esc_html__('lowercase',   'cryptoland' )	=> 'btn--lowercase',
			esc_html__('capitalize',   'cryptoland' )	=> 'btn--capitalize',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Button alinment', 'cryptoland' ),
		'description' => esc_html__('Select button position.', 'cryptoland' ),
		'param_name' => 'btnpos',
		'edit_field_class' => 'vc_col-sm-3',
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('left',   	'cryptoland' )	=> 'btn--left',
			esc_html__('right',   'cryptoland' )	=> 'btn--right',
			esc_html__('center',   'cryptoland' )	=> 'btn--center',
		),
		),
		//button customize
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background color', 'cryptoland'),
		'param_name' => 'btncbg',
		'description' => esc_html__('Change button background color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'btnbg',
			'value' => 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Background hover color', 'cryptoland'),
		'param_name' => 'btnchvrbg',
		'description' => esc_html__('Change button hover background color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'btnbg',
			'value' => 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title color', 'cryptoland'),
		'param_name' => 'btnclr',
		'description' => esc_html__('Change button title color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'btnbg',
			'value' => 'custom',
		),
		),
		array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Title  color', 'cryptoland'),
		'param_name' => 'btnchvrclr',
		'description' => esc_html__('Change button hover title color.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		'dependency' => array(
			'element' => 'btnbg',
			'value' => 'custom',
		),
		),
        array(
		'type' => 'colorpicker',
		'heading' => esc_html__('Gradient 1', 'cryptoland'),
		'param_name' => 'grad1',
		'description' => esc_html__('Change gradient button color 1.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-6',
		'dependency' => array(
			'element' => 'btnbg',
			'value' => 'custom',
		),
		),
        array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Gradient 2', 'cryptoland'),
        'param_name' => 'grad2',
        'description' => esc_html__('Change gradient button color 2.', 'cryptoland'),
        'edit_field_class' => 'vc_col-sm-6',
        'dependency' => array(
            'element' => 'btnbg',
            'value' => 'custom',
        ),
        ),
		// animation aos
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Add animation?', 'cryptoland' ),
		'param_name' => 'addanim',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Animation', 'cryptoland' ),
		'param_name' => 'anim',
		'description' => esc_html__('Set animation delay', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		),
		'value' => cryptoland_anim_aos()
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Animation delay', 'cryptoland'),
		'param_name' => 'delay',
		'description' => esc_html__('Add delay for item', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-4',
		'dependency' => array(
			'element' => 'addanim',
			'not_empty' => true
		)
		),
		//responsive
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('max-width 992px Button alinment', 'cryptoland' ),
		'description' => esc_html__('Select button position.', 'cryptoland' ),
		'param_name' => 'mdbtnpos',
		'group' => esc_html__('Responsive', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4 pt15',
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('left',   	'cryptoland' )	=> 'md-btn--left',
			esc_html__('right',   'cryptoland' )	=> 'md-btn--right',
			esc_html__('center',   'cryptoland' )	=> 'md-btn--center',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('max-width 768px Button alinment', 'cryptoland' ),
		'description' => esc_html__('Select button position.', 'cryptoland' ),
		'param_name' => 'smbtnpos',
		'group' => esc_html__('Responsive', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('left',   	'cryptoland' )	=> 'sm-btn--left',
			esc_html__('right',   'cryptoland' )	=> 'sm-btn--right',
			esc_html__('center',   'cryptoland' )	=> 'sm-btn--center',
		),
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('max-width 576px Button alinment', 'cryptoland' ),
		'description' => esc_html__('Select button position.', 'cryptoland' ),
		'param_name' => 'xsbtnpos',
		'group' => esc_html__('Responsive', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-4',
		'value' => array(
			esc_html__('Select a option', 'cryptoland' )	=> '',
			esc_html__('left',   	'cryptoland' )	=> 'xs-btn--left',
			esc_html__('right',   'cryptoland' )	=> 'xs-btn--right',
			esc_html__('center',   'cryptoland' )	=> 'xs-btn--center',
		),
		),
		// arrays end
  	)
  ));
} class Cryptoland_Button3_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	FOOTER LOGO
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_footerlogo_shortcode_integrateWithVC' );
function cryptoland_footerlogo_shortcode_integrateWithVC() {
    vc_map(
        array(
            'name' => esc_html__( 'Footer logo', 'cryptoland' ),
            'base' => 'cryptoland_footerlogo_shortcode',
            'icon' => 'icon_heading',
            'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
            'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
            'params' => array(
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__('Logo image', 'cryptoland'),
                    'param_name' => 'logo',
                    'description' => esc_html__('Add your logo', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-3 pt15',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Text Logo', 'cryptoland'),
                    'param_name' => 'textlogo',
                    'description' => esc_html__('Add your text logo', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-3',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Image logo width', 'cryptoland'),
                    'param_name' => 'imgwidth',
                    'description' => esc_html__('Set your image logo width in px', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-3',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Image logo height', 'cryptoland'),
                    'param_name' => 'imgheight',
                    'description' => esc_html__('Set your image logo height in px', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-3',
                ),
                // Title
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Text Logo color', 'cryptoland'),
                    'param_name' => 'tclr',
                    'description' => esc_html__('Change text logo color.', 'cryptoland'),
                    'group' => esc_html__('Custom Style', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4 pt15',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Text Logo font-size', 'cryptoland'),
                    'param_name' => 'tsz',
                    'description' => esc_html__('Change text logo font-size. Use number in ( px or unit )', 'cryptoland'),
                    'group' => esc_html__('Custom Style', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Text Logo line-height', 'cryptoland'),
                    'param_name' => 'tlh',
                    'description' => esc_html__('Change text logo line-height. Use number in ( px or unit )', 'cryptoland'),
                    'group' => esc_html__('Custom Style', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
            )
        )
    );
} class Cryptoland_Footer_Logo_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	SOCIAL ICON
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_social_shortcode_integrateWithVC' );
function cryptoland_social_shortcode_integrateWithVC() {
    vc_map(
        array(
            'name' => esc_html__( 'Social Icons', 'cryptoland' ),
            'base' => 'cryptoland_social_shortcode',
            'icon' => 'icon_social',
            'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
            'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
            'params' => array(
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Social Icon picker', 'cryptoland' ),
                    'param_name' => 'social',
                    'params' => array(
                        array(
                            'type' => 'iconpicker',
                            'heading' => esc_html__('Icon name', 'cryptoland'),
                            'param_name' => 'icon',
                            'edit_field_class' => 'vc_col-sm-6 pt15',
                        ),
                        array(
                            'type' => 'vc_link',
                            'heading' => esc_html__('Link', 'cryptoland' ),
                            'param_name' => 'link',
                            'description' => esc_html__('Add link to icon.', 'cryptoland' ),
                            'edit_field_class' => 'vc_col-sm-6',
                        ),
                        array(
                            'type' => 'checkbox',
                            'heading' => esc_html__('Add custom font icon?', 'cryptoland' ),
                            'param_name' => 'addicon',
                            'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
                            'edit_field_class' => 'vc_col-sm-6',
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => esc_html__('Custom font icon', 'cryptoland'),
                            'param_name' => 'icontwo',
                            'description' => esc_html__('Add your custom font icon class here.e.g: fa fa-twitter', 'cryptoland'),
                            'edit_field_class' => 'vc_col-sm-6',
                            'dependency' => array(
                                'element' => 'addicon',
                                'not_empty' => true
                            ),
                        ),
                    ), // params
                ), // array
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Icon font-size', 'cryptoland'),
                    'param_name' => 'isz',
                    'description' => esc_html__('Change icon font-size. Use number in ( px or unit )', 'cryptoland'),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Icon color', 'cryptoland'),
                    'param_name' => 'clr',
                    'description' => esc_html__('Change icon text color.', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Icon hover color', 'cryptoland'),
                    'param_name' => 'bgclr',
                    'description' => esc_html__('Change icon text hover color.', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Icon Background color', 'cryptoland'),
                    'param_name' => 'hvrclr',
                    'description' => esc_html__('Change icon background color.', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Icon hover Background color', 'cryptoland'),
                    'param_name' => 'hvrbg',
                    'description' => esc_html__('Change icon background hover color.', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                // arrays end
            )
        )
    );
} class Cryptoland_Social_Icons_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	PROGRESSBAR HOME 6
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_progressbar6_shortcode_integrateWithVC' );
function cryptoland_progressbar6_shortcode_integrateWithVC() {
    vc_map(
        array(
            'name' => esc_html__( 'Progressbar', 'cryptoland' ),
            'base' => 'cryptoland_progressbar6_shortcode',
            'icon' => 'icon_analytics',
            'category' => 'Home 6',
            'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
            'params' => array(
                // animation aos
                array(
                    'type' => 'checkbox',
                    'heading' => esc_html__('Add animation?', 'cryptoland' ),
                    'param_name' => 'addanim',
                    'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
                    'edit_field_class' => 'vc_col-sm-4 pt15',
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Animation', 'cryptoland' ),
                    'param_name' => 'anim',
                    'description' => esc_html__('Select animation from list', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4',
                    'dependency' => array(
                        'element' => 'addanim',
                        'not_empty' => true
                    ),
                    'value' => cryptoland_anim_aos()
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Delay', 'cryptoland'),
                    'param_name' => 'delay',
                    'description' => esc_html__('Set animation delay.', 'cryptoland'),
                    'edit_field_class' => 'vc_col-sm-4',
                    'dependency' => array(
                        'element' => 'addanim',
                        'not_empty' => true
                    )
                ),
                //lop progressbar
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Progressbar', 'cryptoland' ),
                    'param_name' => 'icobar',
                    'group' => esc_html__('Progressbar Options', 'cryptoland' ),
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'heading' => esc_html__('Marker title', 'cryptoland'),
                            'param_name' => 'markertitle',
                            'description' => esc_html__('Add progressbar marker title.', 'cryptoland'),
                            'edit_field_class' => 'vc_col-sm-4 pt15'
                        ),
                        array(
                            'type' => 'textfield',
                            'heading' => esc_html__('Marker value ( % )', 'cryptoland'),
                            'param_name' => 'markervalue',
                            'description' => esc_html__('Add progressbar marker value.use simple number without percentage.', 'cryptoland'),
                            'edit_field_class' => 'vc_col-sm-4'
                        ),
                        array(
                            'type' => 'colorpicker',
                            'heading' => esc_html__('Bar color', 'cryptoland'),
                            'param_name' => 'barclr',
                            'description' => esc_html__('Change background color.', 'cryptoland'),
                            'group' => esc_html__('Bar Options', 'cryptoland' ),
                            'edit_field_class' => 'vc_col-sm-4',
                        ),
                    ),
                ),
                //Marker title
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Marker color', 'cryptoland'),
                    'param_name' => 'tclr',
                    'description' => esc_html__('Change marker title color.', 'cryptoland'),
                    'group' => esc_html__('Custom Style', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4 pt15'
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Marker font-size', 'cryptoland'),
                    'param_name' => 'tsz',
                    'description' => esc_html__('Change marker title font-size. Use number in ( px or unit )', 'cryptoland'),
                    'group' => esc_html__('Custom Style', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4'
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Marker line-height', 'cryptoland'),
                    'param_name' => 'tlh',
                    'description' => esc_html__('Change marker title line-height. Use number in ( px or unit )', 'cryptoland'),
                    'group' => esc_html__('Custom Style', 'cryptoland' ),
                    'edit_field_class' => 'vc_col-sm-4'
                ),
            )
        )
    );
} class Cryptoland_Progressbar6_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	POSITIONED BG IMAGE
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_positioned_img_shortcode_integrateWithVC' );
function cryptoland_positioned_img_shortcode_integrateWithVC() {
vc_map( array(
	'name' => esc_html__( 'Positioned BG Image', 'cryptoland' ),
	'base' => 'cryptoland_positioned_img_shortcode',
	'icon' => 'icon_absolute_position',
	'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add a specially positioned image to this page', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Width', 'cryptoland'),
		'param_name' => 'width',
		'description' => esc_html__('Enter special posinated image width.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3 pt15',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Min-width', 'cryptoland'),
		'param_name' => 'minwidth',
		'description' => esc_html__('Enter special posinated image min-width.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Height', 'cryptoland'),
		'param_name' => 'height',
		'description' => esc_html__('Enter special posinated image height.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Opacity', 'cryptoland'),
		'param_name' => 'opacity',
		'description' => esc_html__('Enter special posinated image opacity.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Top distance', 'cryptoland'),
		'param_name' => 'top',
		'description' => esc_html__('Enter special location for left distance.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Right distance', 'cryptoland'),
		'param_name' => 'right',
		'description' => esc_html__('Enter special location for right distance in px.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bottom distance', 'cryptoland'),
		'param_name' => 'bottom',
		'description' => esc_html__('Enter special location for bottom distance in px.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Left distance', 'cryptoland'),
		'param_name' => 'left',
		'description' => esc_html__('Enter special location for left distance in px.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		// responsive
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Horizontal center ?', 'cryptoland' ),
		'param_name' => 'center',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the image will be centered in horizontal axis.', 'cryptoland' ),
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide on max 1200px ?', 'cryptoland' ),
		'param_name' => 'hidelg',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide on max 992px ?', 'cryptoland' ),
		'param_name' => 'hidemd',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide on max 768px ?', 'cryptoland' ),
		'param_name' => 'hidesm',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Relative on max 1200px ?', 'cryptoland' ),
		'param_name' => 'rellg',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Relative on max 992px ?', 'cryptoland' ),
		'param_name' => 'relmd',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Relative on max 768px ?', 'cryptoland' ),
		'param_name' => 'relsm',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-4',
		),
     // arrays end
	)
));
} class Cryptoland_Positioned_Image_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	JARALLAX IMG
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_jarallax_img_shortcode_integrateWithVC' );
function cryptoland_jarallax_img_shortcode_integrateWithVC() {
vc_map( array(
	'name' 	   	=> esc_html__( 'Parrallax Image', 'cryptoland' ),
	'base' 	   	=> 'cryptoland_jarallax_img_shortcode',
	'icon' => 'icon_parallax',
	'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params'   	=> array(
		array(
		'type' => 'attach_image',
		'heading' => esc_html__('Image', 'cryptoland'),
		'param_name' => 'img',
		'description' => esc_html__('Add a specially positioned parallax image to this page', 'cryptoland'),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Parallax Y axis offset', 'cryptoland'),
		'param_name' => 'yoffset',
		'description' => esc_html__('Element will be parallaxed on x pixels from the screen center by Y axis', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Parallax X axis offset', 'cryptoland'),
		'param_name' => 'xoffset',
		'description' => esc_html__('Element will be parallaxed on x pixels from the screen center by X axis', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'dropdown',
		'heading' => esc_html__('Parallax type', 'cryptoland' ),
		'param_name' => 'parallaxtype',
		'description' => esc_html__('Select parallax type', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		'value' => array(
			esc_html__('Select a option',   'cryptoland' )	=> '',
			esc_html__('scroll',    		'cryptoland' )	=> 'scroll',
			esc_html__('scale',    			'cryptoland' )	=> 'scale',
			esc_html__('opacity',   		'cryptoland' )	=> 'opacity',
			esc_html__('scroll-opacity',    'cryptoland' )	=> 'scroll-opacity',
			esc_html__('scale-opacity',    	'cryptoland' )	=> 'scale-opacity',
		),
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Parallax speed', 'cryptoland'),
		'param_name' => 'speed',
		'description' => esc_html__('Parallax effect speed. Provide numbers from -1.0 to 2.0.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Top distance', 'cryptoland'),
		'param_name' => 'top',
		'description' => esc_html__('Enter special location for left distance.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Right distance', 'cryptoland'),
		'param_name' => 'right',
		'description' => esc_html__('Enter special location for right distance in px.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Bottom distance', 'cryptoland'),
		'param_name' => 'bottom',
		'description' => esc_html__('Enter special location for bottom distance in px.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Left distance', 'cryptoland'),
		'param_name' => 'left',
		'description' => esc_html__('Enter special location for left distance in px.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Width', 'cryptoland'),
		'param_name' => 'width',
		'description' => esc_html__('Enter special posinated image width.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Min-width', 'cryptoland'),
		'param_name' => 'minwidth',
		'description' => esc_html__('Enter special posinated image min-width.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Height', 'cryptoland'),
		'param_name' => 'height',
		'description' => esc_html__('Enter special posinated image height.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Opacity', 'cryptoland'),
		'param_name' => 'opacity',
		'description' => esc_html__('Enter special posinated image opacity.', 'cryptoland'),
		'edit_field_class' => 'vc_col-sm-3',
		),
		// responsive
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Horizontal center ?', 'cryptoland' ),
		'param_name' => 'center',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'description' => esc_html__('If checked, the image will be centered in horizontal axis.', 'cryptoland' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide on max 1200px ?', 'cryptoland' ),
		'param_name' => 'hidelg',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide on max 992px ?', 'cryptoland' ),
		'param_name' => 'hidemd',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
		array(
		'type' => 'checkbox',
		'heading' => esc_html__('Hide on max 768px ?', 'cryptoland' ),
		'param_name' => 'hidesm',
		'value' => array( esc_html__( 'Yes', 'cryptoland' ) => 'yes' ),
		'edit_field_class' => 'vc_col-sm-3',
		),
     // arrays end
	)
));
} class Cryptoland_Jarallax_Image_Class extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	HERO CANVAS
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'cryptoland_herocanvas_shortcode_integrateWithVC' );
function cryptoland_herocanvas_shortcode_integrateWithVC() {
	vc_map( array(
	'name' => esc_html__( 'Canvas Element', 'cryptoland' ),
	'base' => 'cryptoland_herocanvas_shortcode',
	'icon' => 'icon_canvas',
	'category' => array('Home 1','Home 2','Home 3','Home 4','Home 5','Home 6'),
	'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_templates/vc-icon/vc-icon.css' ),
	'params' => array(
		// Canvas height
		array(
		'type' => 'textfield',
		'heading' => esc_html__('Canvas height', 'cryptoland'),
		'param_name' => 'height',
		'description' => esc_html__('Change canvas parent element height.', 'cryptoland'),
		),

	)
));
} class Cryptoland_Hero_Canvas_Class extends WPBakeryShortCode {}
