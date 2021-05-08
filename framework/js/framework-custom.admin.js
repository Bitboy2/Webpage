
(function ($) {

  "use strict";

/*-----------------------------------------------------------------------------------*/
/*	Custom JS - All back-end jQuery
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {


	// A few overrides to the rwmb metaboxes.

	jQuery('.rwmb-text').addClass('widefat');
	jQuery('.rwmb-oembed').css('width', '80%');
	jQuery('.rwmb-textarea').removeClass('large-text').addClass('widefat');
	jQuery('.rwmb-delete-file').on(function(e) {
		e.preventDefault();
		jQuery(this).parent().parent().slideUp(600);
	});

	// Show metaboxes according to the current post format.

/*----------------------------------------------------------------------------------*/
/*	Gallery Options
/*----------------------------------------------------------------------------------*/

	var galleryOptions = jQuery('#gallery-settings');
	var galleryTrigger = jQuery('#post-format-gallery');

	galleryOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	Quote Options
/*----------------------------------------------------------------------------------*/

	var quoteOptions = jQuery('#quote-settings');
	var quoteTrigger = jQuery('#post-format-quote');

	quoteOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	Image Options
/*----------------------------------------------------------------------------------*/

	var imageOptions = jQuery('#image-settings');
	var imageTrigger = jQuery('#post-format-image');

	imageOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	Link Options
/*----------------------------------------------------------------------------------*/

	var linkOptions = jQuery('#link-settings');
	var linkTrigger = jQuery('#post-format-link');

	linkOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	Status Options
/*----------------------------------------------------------------------------------*/

	var statusOptions = jQuery('#status-settings');
	var statusTrigger = jQuery('#post-format-status');

	statusOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	Audio Options
/*----------------------------------------------------------------------------------*/

	var audioOptions = jQuery('#audio-settings');
	var audioTrigger = jQuery('#post-format-audio');

	audioOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	Video Options
/*----------------------------------------------------------------------------------*/

	var videoOptions = jQuery('#video-settings');
	var videoTrigger = jQuery('#post-format-video');

	videoOptions.css('display', 'none');

/*----------------------------------------------------------------------------------*/
/*	The Brain
/*----------------------------------------------------------------------------------*/

	var group = jQuery('#post-formats-select input');

	group.change( function() {

		if (jQuery(this).val() == 'gallery') {
			galleryOptions.css('display', 'block');
			ninethemeHideAll(galleryOptions);

		} else if(jQuery(this).val() == 'quote') {
			quoteOptions.css('display', 'block');
			ninethemeHideAll(quoteOptions);

		} else if(jQuery(this).val() == 'link') {
			linkOptions.css('display', 'block');
			ninethemeHideAll(linkOptions);

		} else if(jQuery(this).val() == 'status') {
			statusOptions.css('display', 'block');
			ninethemeHideAll(statusOptions);

		} else if(jQuery(this).val() == 'audio') {
			audioOptions.css('display', 'block');
			ninethemeHideAll(audioOptions);

		} else if(jQuery(this).val() == 'video') {
			videoOptions.css('display', 'block');
			ninethemeHideAll(videoOptions);

		} else if(jQuery(this).val() == 'image') {
			imageOptions.css('display', 'block');
			ninethemeHideAll(imageOptions);

		} else {
			quoteOptions.css('display', 'none');
			videoOptions.css('display', 'none');
			linkOptions.css('display', 'none');
			statusOptions.css('display', 'none');
			audioOptions.css('display', 'none');
			imageOptions.css('display', 'none');
		}

	});

	if(galleryTrigger.is(':checked'))
		galleryOptions.css('display', 'block');

	if(quoteTrigger.is(':checked'))
		quoteOptions.css('display', 'block');

	if(linkTrigger.is(':checked'))
		linkOptions.css('display', 'block');

	if(statusTrigger.is(':checked'))
		statusOptions.css('display', 'block');

	if(audioTrigger.is(':checked'))
		audioOptions.css('display', 'block');

	if(videoTrigger.is(':checked'))
		videoOptions.css('display', 'block');

	if(imageTrigger.is(':checked'))
		imageOptions.css('display', 'block');

	function ninethemeHideAll(notThisOne) {
		videoOptions.css('display', 'none');
		galleryOptions.css('display', 'none');
		quoteOptions.css('display', 'none');
		linkOptions.css('display', 'none');
		statusOptions.css('display', 'none');
		audioOptions.css('display', 'none');
		imageOptions.css('display', 'none');
		notThisOne.css('display', 'block');
	}

/*----------------------------------------------------------------------------------*/
/*	for displaying homepage opt
/*----------------------------------------------------------------------------------*/

	var pageherooptions = jQuery('#cryptoland_page_hero_display');
	var herotab2 = jQuery('#pageherosettings .rwmb-tab-tab2');
	var herotab3 = jQuery('#pageherosettings .rwmb-tab-tab3');
	var herotab4 = jQuery('#pageherosettings .rwmb-tab-tab4');
	var herotab5 = jQuery('#pageherosettings .rwmb-tab-tab5');
	var herotab6 = jQuery('#pageherosettings .rwmb-tab-tab6');
	var herotab7 = jQuery('#pageherosettings .rwmb-tab-tab7');

	if( pageherooptions.is(':checked')) {
		herotab2.slideUp();
		herotab3.slideUp();
		herotab4.slideUp();
		herotab5.slideUp();
		herotab6.slideUp();
		herotab7.slideUp();
	}
	else {
		herotab2.slideDown();
		herotab3.slideDown();
		herotab4.slideDown();
		herotab5.slideDown();
		herotab6.slideDown();
		herotab7.slideDown();
	}
	pageherooptions.on('change', function(){
		if(pageherooptions.is(':checked')) {
			herotab2.slideUp();
			herotab3.slideUp();
			herotab4.slideUp();
			herotab5.slideUp();
			herotab6.slideUp();
			herotab7.slideUp();
		}
		else {
			herotab2.slideDown();
			herotab3.slideDown();
			herotab4.slideDown();
			herotab5.slideDown();
			herotab6.slideDown();
			herotab7.slideDown();
		}
	});
	//page title
	var pagetitledisplay = jQuery('#cryptoland_page_heading_display');
	var pagetitle = jQuery('label[for="cryptoland_page_heading"]').parents('.rwmb-text-wrapper');
	var pagetitlecolor = jQuery('label[for="cryptoland_page_heading_color"]').parents('.rwmb-color-wrapper');
	var pagetitlefontsize = jQuery('label[for="cryptoland_page_heading_fs"]').parents('.rwmb-number-wrapper');
	var pagetitlemargin = jQuery('label[for="cryptoland_page_heading_mb"]').parents('.rwmb-number-wrapper');


	if( pagetitledisplay.is(':checked')) {
		pagetitle.slideUp();
		pagetitlecolor.slideUp();
		pagetitlefontsize.slideUp();
		pagetitlemargin.slideUp();
	}
	else {
		pagetitle.slideDown();
		pagetitlecolor.slideDown();
		pagetitlefontsize.slideDown();
		pagetitlemargin.slideDown();
	}
	pagetitledisplay.on('change', function(){
		if(pagetitledisplay.is(':checked')) {
			pagetitle.slideUp();
			pagetitlecolor.slideUp();
			pagetitlefontsize.slideUp();
			pagetitlemargin.slideUp();
		}
		else {
			pagetitle.slideDown();
			pagetitlecolor.slideDown();
			pagetitlefontsize.slideDown();
			pagetitlemargin.slideDown();
		}
	});
	//page subtitle
	var pageslogandisplay = jQuery('#cryptoland_page_slogan_display');
	var pageslogan = jQuery('label[for="cryptoland_page_slogan"]').parents('.rwmb-text-wrapper');
	var pageslogancolor = jQuery('label[for="cryptoland_page_slogan_color"]').parents('.rwmb-color-wrapper');
	var pagesloganfs = jQuery('label[for="cryptoland_page_slogan_fs"]').parents('.rwmb-number-wrapper');
	var pagesloganmaxw = jQuery('label[for="cryptoland_page_slogan_mw"]').parents('.rwmb-number-wrapper');
	var pagesloganmargin = jQuery('label[for="cryptoland_page_slogan_mb"]').parents('.rwmb-number-wrapper');

	if( pageslogandisplay.is(':checked')) {
		pageslogan.slideUp();
		pageslogancolor.slideUp();
		pagesloganfs.slideUp();
		pagesloganmaxw.slideUp();
		pagesloganmargin.slideUp();
	}
	else {
		pageslogan.slideDown();
		pageslogancolor.slideDown();
		pagesloganfs.slideDown();
		pagesloganmaxw.slideDown();
		pagesloganmargin.slideDown();
	}
	pageslogandisplay.on('change', function(){
		if(pageslogandisplay.is(':checked')) {
			pageslogan.slideUp();
			pageslogancolor.slideUp();
			pagesloganfs.slideUp();
			pagesloganmaxw.slideUp();
			pagesloganmargin.slideUp();
		}
		else {
			pageslogan.slideDown();
			pageslogancolor.slideDown();
			pagesloganfs.slideDown();
			pagesloganmaxw.slideDown();
			pagesloganmargin.slideDown();
		}
	});
	//page desc
	var pagedescdisplay = jQuery('#cryptoland_page_desc_display');
	var pagedesc = jQuery('label[for="cryptoland_page_desc"]').parents('.rwmb-text-wrapper');
	var pagedesccolor = jQuery('label[for="cryptoland_page_desc_color"]').parents('.rwmb-color-wrapper');
	var pagedescfs = jQuery('label[for="cryptoland_page_desc_fs"]').parents('.rwmb-number-wrapper');
	var pagedescmargin = jQuery('label[for="cryptoland_page_desc_mb"]').parents('.rwmb-number-wrapper');

	if( pagedescdisplay.is(':checked')) {
		pagedesc.slideUp();
		pagedesccolor.slideUp();
		pagedescfs.slideUp();
		pagedescmargin.slideUp();
	}
	else {
		pagedesc.slideDown();
		pagedesccolor.slideDown();
		pagedescfs.slideDown();
		pagedescmargin.slideDown();
	}
	pagedescdisplay.on('change', function(){
		if(pagedescdisplay.is(':checked')) {
			pagedesc.slideUp();
			pagedesccolor.slideUp();
			pagedescfs.slideUp();
			pagedescmargin.slideUp();
		}
		else {
			pagedesc.slideDown();
			pagedesccolor.slideDown();
			pagedescfs.slideDown();
			pagedescmargin.slideDown();
		}
	});

	//page breadcrumb
	var pagebreaddisplay = jQuery('#cryptoland_page_bread_display');
	var pagebreadiconcolor = jQuery('label[for="cryptoland_page_bred_iconcolor"]').parents('.rwmb-color-wrapper');
	var pagebreadtextcolor = jQuery('label[for="cryptoland_page_bred_textcolor"]').parents('.rwmb-color-wrapper');
	var pagebreadhtextcolor = jQuery('label[for="cryptoland_page_bred_htextcolor"]').parents('.rwmb-color-wrapper');
	var pagebreadfs = jQuery('label[for="cryptoland_page_bred_fs"]').parents('.rwmb-number-wrapper');

	if( pagebreaddisplay.is(':checked')) {
		pagebreadiconcolor.slideUp();
		pagebreadtextcolor.slideUp();
		pagebreadhtextcolor.slideUp();
		pagebreadfs.slideUp();
	}
	else {
		pagebreadiconcolor.slideDown();
		pagebreadtextcolor.slideDown();
		pagebreadhtextcolor.slideDown();
		pagebreadfs.slideDown();
	}
	pagebreaddisplay.on('change', function(){
		if(pagebreaddisplay.is(':checked')) {
			pagebreadiconcolor.slideUp();
			pagebreadtextcolor.slideUp();
			pagebreadhtextcolor.slideUp();
			pagebreadfs.slideUp();
		}
		else {
			pagebreadiconcolor.slideDown();
			pagebreadtextcolor.slideDown();
			pagebreadhtextcolor.slideDown();
			pagebreadfs.slideDown();
		}
	});
	//page button
	var pageherobtn = jQuery('#cryptoland_page_herobtn_display');
	var pagebtntitle = jQuery('label[for="cryptoland_page_herobtn"]').parents('.rwmb-text-wrapper');
	var pagebtntitleurl = jQuery('label[for="cryptoland_page_herobtn_url"]').parents('.rwmb-text-wrapper');
	var pagebtnbg = jQuery('label[for="cryptoland_page_herobtn_custombg"]').parents('.rwmb-color-wrapper');
	var pagebtnhbg = jQuery('label[for="cryptoland_page_herobtn_hoverbg"]').parents('.rwmb-color-wrapper');
	var pagebtntitlecolor = jQuery('label[for="cryptoland_page_herobtn_titlecolor"]').parents('.rwmb-color-wrapper');
	var pagebtnhtitlecolor = jQuery('label[for="cryptoland_page_herobtn_titlehover"]').parents('.rwmb-color-wrapper');
	var pagebtnicondisplay = jQuery('label[for="cryptoland_page_herobtn_icon_display"]').parents('.rwmb-checkbox-wrapper');
	var pagebtndivider = jQuery('#pageherosettings .rwmb-tab-panel-tab6 .rwmb-divider-wrapper');

	if( pageherobtn.is(':checked')) {
		pagebtntitle.slideUp();
		pagebtntitleurl.slideUp();
		pagebtnbg.slideUp();
		pagebtnhbg.slideUp();
		pagebtntitlecolor.slideUp();
		pagebtnhtitlecolor.slideUp();
		pagebtnicondisplay.slideUp();
		pagebtndivider.slideUp();
	}
	else {
		pagebtntitle.slideDown();
		pagebtntitleurl.slideDown();
		pagebtnbg.slideDown();
		pagebtnhbg.slideDown();
		pagebtntitlecolor.slideDown();
		pagebtnhtitlecolor.slideDown();
		pagebtnicondisplay.slideDown();
		pagebtndivider.slideDown();
	}
	pageherobtn.on('change', function(){
		if(pageherobtn.is(':checked')) {
			pagebtntitle.slideUp();
			pagebtntitleurl.slideUp();
			pagebtnbg.slideUp();
			pagebtnhbg.slideUp();
			pagebtntitlecolor.slideUp();
			pagebtnhtitlecolor.slideUp();
			pagebtnicondisplay.slideUp();
			pagebtndivider.slideUp();
		}
		else {
			pagebtntitle.slideDown();
			pagebtntitleurl.slideDown();
			pagebtnbg.slideDown();
			pagebtnhbg.slideDown();
			pagebtntitlecolor.slideDown();
			pagebtnhtitlecolor.slideDown();
			pagebtnicondisplay.slideDown();
			pagebtndivider.slideDown();
		}
	});
	//page hero style
	var pageheroparallax = jQuery('#cryptoland_page_hero_parallax');
	var pageheroparallaxtype = jQuery('label[for="cryptoland_page_hero_parallax_type"]').parents('.rwmb-select-wrapper');
	var pageheroparallaxspeed  = jQuery('label[for="cryptoland_page_hero_parallax_speed"]').parents('.rwmb-number-wrapper');
	var pageheroparallaxvideo = jQuery('label[for="cryptoland_page_hero_parallax_video"]').parents('.rwmb-text-wrapper');
	var pageheroparallaxmobile = jQuery('label[for="cryptoland_page_hero_parallax_mobile"]').parents('.rwmb-select-wrapper');

	if(pageheroparallax.val() == 'off') {
		pageheroparallaxtype.slideUp();
		pageheroparallaxspeed.slideUp();
		pageheroparallaxvideo.slideUp();
		pageheroparallaxmobile.slideUp();
	}
	else {
		pageheroparallaxtype.slideDown();
		pageheroparallaxspeed.slideDown();
		pageheroparallaxvideo.slideDown();
		pageheroparallaxmobile.slideDown();
	}
	pageheroparallax.on('change', function(){
		if(pageheroparallax.val() == 'off') {
			pageheroparallaxtype.slideUp();
			pageheroparallaxspeed.slideUp();
			pageheroparallaxvideo.slideUp();
			pageheroparallaxmobile.slideUp();
		}
		else {
			pageheroparallaxtype.slideDown();
			pageheroparallaxspeed.slideDown();
			pageheroparallaxvideo.slideDown();
			pageheroparallaxmobile.slideDown();
		}
	});


  	//page header on/off
	var headerdisplay = jQuery('#cryptoland_page_header_display');
	var headertab3 = jQuery('#pageheadersettings .rwmb-tab-tab3');
	var headertab4 = jQuery('#pageheadersettings .rwmb-tab-tab4');
	var headertab5 = jQuery('#pageheadersettings .rwmb-tab-tab5');
	var headertab6 = jQuery('#pageheadersettings .rwmb-tab-tab6');
	var headertab7 = jQuery('#pageheadersettings .rwmb-tab-tab7');

	if(headerdisplay.val() == 'off') {
		headertab3.slideUp();
		headertab4.slideUp();
		headertab5.slideUp();
		headertab6.slideUp();
		headertab7.slideUp();
	}
	else {
		headertab3.slideDown();
		headertab4.slideDown();
		headertab5.slideDown();
		headertab6.slideDown();
		headertab7.slideDown();
	}
	headerdisplay.on('change', function(){
		if(headerdisplay.val() == 'off') {
			headertab3.slideUp();
			headertab4.slideUp();
			headertab5.slideUp();
			headertab6.slideUp();
			headertab7.slideUp();
		}
		else {
		headertab3.slideDown();
		headertab4.slideDown();
		headertab5.slideDown();
		headertab6.slideDown();
		headertab7.slideDown();
		}
	});


  	//page_sticky_nav on/off
	var stickynav = jQuery('#cryptoland_page_sticky_nav');
	var headerstickybg = jQuery('label[for="cryptoland_page_sticky_nav_bg"]').parents('.rwmb-color-wrapper');
	var headerstickynav = jQuery('label[for="cryptoland_page_sticky_nav_item"]').parents('.rwmb-color-wrapper');
	var headerstickynavhover =jQuery('label[for="cryptoland_page_sticky_nav_itemhover"]').parents('.rwmb-color-wrapper');
	var headerstickynavpad =jQuery('label[for="cryptoland_page_sticky_nav_padding"]').parents('.rwmb-text_list-wrapper');
	var headerstickynavmar =jQuery('label[for="cryptoland_page_sticky_nav_margin"]').parents('.rwmb-text_list-wrapper');
	var headertab5divider = jQuery('#pageheadersettings .rwmb-tab-panel-tab4 .rwmb-divider-wrapper');

	if(stickynav.val() == 'off') {
		headerstickybg.slideUp();
		headerstickynav.slideUp();
		headerstickynavhover.slideUp();
		headerstickynavmar.slideUp();
		headerstickynavpad.slideUp();
		headertab5divider.slideUp();
	}
	else {
		headerstickybg.slideDown();
		headerstickynav.slideDown();
		headerstickynavhover.slideDown();
		headerstickynavpad.slideDown();
		headerstickynavmar.slideDown();
		headertab5divider.slideDown();
	}
	stickynav.on('change', function(){
		if(stickynav.val() == 'off') {
			headerstickybg.slideUp();
			headerstickynav.slideUp();
			headerstickynavhover.slideUp();
			headerstickynavmar.slideUp();
			headerstickynavpad.slideUp();
			headertab5divider.slideUp();
		}
		else {
			headerstickybg.slideDown();
			headerstickynav.slideDown();
			headerstickynavhover.slideDown();
			headerstickynavpad.slideDown();
			headerstickynavmar.slideDown();
			headertab5divider.slideDown();
		}
	});


  	//page header on/off
	var navbgtype = jQuery('#cryptoland_page_nav_bgtype');
	var headerbgcolor = jQuery('label[for="cryptoland_page_nav_bgcolor"]').parents('.rwmb-color-wrapper');

	if(navbgtype.val() == 'trans') {
		headerbgcolor.slideUp();
	}
	else {
		headerbgcolor.slideDown();
	}
	navbgtype.on('change', function(){
		if(navbgtype.val() == 'trans') {
			headerbgcolor.slideUp();
		}
		else {
			headerbgcolor.slideDown();
		}
	});


  	//page header btn 1 on/off
	var btnsignin = jQuery('#cryptoland_page_header_btnsignin');
	var headerbtnsignintitle =jQuery('label[for="cryptoland_page_header_btnsignin_title"]').parents('.rwmb-text_list-wrapper');

	if(btnsignin.val() == 'off' || btnsignin.val() == '') {
		headerbtnsignintitle.slideUp();
	}
	else {
		headerbtnsignintitle.slideDown();
	}
	btnsignin.on('change', function(){
		if(btnsignin.val() == 'off' || btnsignin.val() == '') {
			headerbtnsignintitle.slideUp();
		}
		else {
			headerbtnsignintitle.slideDown();
		}
	});

  	//page header btn 2 on/off
	var headerbtnsignup = jQuery('#cryptoland_page_header_btnsignup');
	var headerbtnsignuptitle =jQuery('label[for="cryptoland_page_header_btnsignup_title"]').parents('.rwmb-text_list-wrapper');

	if(headerbtnsignup.val() == 'off' || headerbtnsignup.val() == '') {
		headerbtnsignuptitle.slideUp();
	}
	else {
		headerbtnsignuptitle.slideDown();
	}
	headerbtnsignup.on('change', function(){
		if(headerbtnsignup.val() == 'off' || headerbtnsignup.val() == '') {
			headerbtnsignuptitle.slideUp();
		}
		else {
			headerbtnsignuptitle.slideDown();
		}
	});

  	//page header btn 3 on/off
	var headerbtntel = jQuery('#cryptoland_page_header_btntel_display');
	var headerbtntelimg =jQuery('label[for="cryptoland_page_header_btntelimg"]').parents('.rwmb-image_advanced-wrapper');
	var headerbtntelurl =jQuery('label[for="cryptoland_page_header_btntelurl"]').parents('.rwmb-text-wrapper');

	if(headerbtntel.val() == 'off' || headerbtntel.val() == '') {
		headerbtntelimg.slideUp();
		headerbtntelurl.slideUp();
	}
	else {
		headerbtntelimg.slideDown();
		headerbtntelurl.slideDown();
	}
	headerbtntel.on('change', function(){
		if(headerbtntel.val() == 'off' || headerbtntel.val() == '') {
			headerbtntelimg.slideUp();
			headerbtntelurl.slideUp();
		}
		else {
			headerbtntelimg.slideDown();
			headerbtntelurl.slideDown();
		}
	});


  	//page widgetize footer off
	var widgetizedisplay = jQuery('#cryptoland_page_widgetize_footer');
	var widgetizebg = jQuery('label[for="cryptoland_p_fw_bg"]').parents('.rwmb-background-wrapper');
	var widgetizetextcolor = jQuery('label[for="cryptoland_p_fw_t_c"]').parents('.rwmb-color-wrapper');
	var widgetizepad = jQuery('label[for="cryptoland_p_fw_p"]').parents('.rwmb-text_list-wrapper');
	var widgetizemar = jQuery('label[for="cryptoland_p_fw_m"]').parents('.rwmb-text_list-wrapper');
	var widgetizedivider =jQuery('.rwmb-tab-panel-tab8 .rwmb-divider-wrapper');

	if(widgetizedisplay.val() == 'off') {
		widgetizebg.slideUp();
		widgetizetextcolor.slideUp();
		widgetizepad.slideUp();
		widgetizemar.slideUp();
		widgetizedivider.slideUp();
	}
	else {
		widgetizebg.slideDown();
		widgetizetextcolor.slideDown();
		widgetizepad.slideDown();
		widgetizemar.slideDown();
		widgetizedivider.slideDown();
	}
	widgetizedisplay.on('change', function(){
		if(widgetizedisplay.val() == 'off') {
			widgetizebg.slideUp();
			widgetizetextcolor.slideUp();
			widgetizepad.slideUp();
			widgetizemar.slideUp();
			widgetizedivider.slideUp();
		}
		else {
			widgetizebg.slideDown();
			widgetizetextcolor.slideDown();
			widgetizepad.slideDown();
			widgetizemar.slideDown();
			widgetizedivider.slideDown();
		}
	});

  	//page copyright off
	var copyrightdisplay = jQuery('#cryptoland_page_copyright_display');
	var copyrightbgcolor =jQuery('label[for="cryptoland_p_c_bg"]').parents('.rwmb-color-wrapper');
	var copyrighttextcolor = jQuery('label[for="cryptoland_c_t_c"]').parents('.rwmb-color-wrapper');
	var copyrightpad = jQuery('label[for="cryptoland_p_c_p"]').parents('.rwmb-text_list-wrapper');
	var copyrightmar = jQuery('label[for="cryptoland_p_c_m"]').parents('.rwmb-text_list-wrapper');
	var copyrightdivider =jQuery('.rwmb-tab-panel-tab9 .rwmb-divider-wrapper');

	if(copyrightdisplay.val() == 'off') {
		copyrightbgcolor.slideUp();
		copyrighttextcolor.slideUp();
		copyrightpad.slideUp();
		copyrightmar.slideUp();
		copyrightdivider.slideUp();
	}
	else {
		copyrightbgcolor.slideDown();
		copyrighttextcolor.slideDown();
		copyrightpad.slideDown();
		copyrightmar.slideDown();
		copyrightdivider.slideDown();
	}
	copyrightdisplay.on('change', function(){
		if(copyrightdisplay.val() == 'off') {
			copyrightbgcolor.slideUp();
			copyrighttextcolor.slideUp();
			copyrightpad.slideUp();
			copyrightmar.slideUp();
			copyrightdivider.slideUp();
		}
		else {
			copyrightbgcolor.slideDown();
			copyrighttextcolor.slideDown();
			copyrightpad.slideDown();
			copyrightmar.slideDown();
			copyrightdivider.slideDown();
		}
	});

  	//page sidebar off
	var pagelayout = jQuery('input[value="full-width"]');
	var pagesidebar =jQuery('.rwmb-sidebar-wrapper');
	var sidebardivider = jQuery('#pagesidebarsettings .rwmb-divider-wrapper');


	jQuery('#pagesidebarsettings .rwmb-image-select').on('click', function(){
		if(pagelayout.is(':checked')) {
			pagesidebar.slideUp();
			sidebardivider.slideUp();
		}
		else {
			pagesidebar.slideDown();
			sidebardivider.slideDown();
		}
	});
	if(pagelayout.is(':checked')) {
		pagesidebar.slideUp();
		sidebardivider.slideUp();
	}
	else {
		pagesidebar.slideDown();
		sidebardivider.slideDown();
	}
	pagelayout.on('change', function(){
		if(pagelayout.is(':checked')) {
			pagesidebar.slideUp();
			sidebardivider.slideUp();
		}
		else {
			pagesidebar.slideDown();
			sidebardivider.slideDown();
		}
	});


});
})(jQuery);
