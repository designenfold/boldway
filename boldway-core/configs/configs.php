<?php
function boldway_config($id){
	
	$config = array(
		'subheader' => true, // (Option + Metabox)
		'upper_footer' => true, // (Option + Metabox)
		'footer_widget' => true, // (Option + Metabox)
		'footer' => true, // (Option + Metabox)
		'top_panel' => true, // (Option + Metabox)
		'left_panel' => true, // (Option + Metabox)
		'right_panel' => true, // (Option + Metabox)
		'borrom_panel' => true, // (Option + Metabox)
			
		'sidebar_layout' => 'left', //left, right, none, full-width // (Option + Metabox)
		'site_layout' => 'default', // (Option)
		'site_header_layout' => 'default', // (Option)
		'site_subheader_layout' => 'default', // (Option)
		'site_footer_layout' => 'default', // (Option)
		
		
		/* 
			Footer 
		--------------------------------------------------*/
		'copyright_text' => '©2015 Boldway', // text (Option)
		'credit_text' => 'Design By Designenfold', // text (Option)
		'footer_logo' => '', // url (Option)
		
		
		/* Header
		--------------------------------------------------*/
		'logo' => '', // url (Option)
		'header_phone' => '983 432 8437', // text (Option)
		'header_email' => 'info@domain.com', // text (Option)
		'header_login' => '#', // url (Option)
		'header_register' => '#', // url (Option)
		'header_ads' => '<a href=""><img src="http://placehold.it/468x60"></a>', // html (Option)
		'header_text' => 'We are Boldway.', // text (Option)
		'header_search' => true, // true, false (Option)
		'header_social_icons' => array(
			'facebook' => '#',
			'twitter' => '#',
			'linkedin' => '#',
			'pinterest' => '#',
			'google-plus' => '#',
			'tumblr' => '#',
			'instagram' => '#',
			'vk' => '#',
			'fllickr' => '#',
			'youtube' => '#',
			'vimeo' => '#',
		),
		
		'header_text_color' => '#444', // color (Option)
		'header_heading_color' => '#444', // color (Option)
		'header_link_color' => '#444', // color (Option)
		'header_link_hover_color' => '#444', // color (Option)
		'header_bg_color' => '#444', // color (Option)
		'header_bg_image' => '', // url (Option)
		'header_bg_attachment' => 'initial', // (Option)
		'header_bg_position' => 'top center', // (Option)
		'header_bg_repeat' => 'no-repeat', // (Option)
		'header_bg_size' => 'cover', // (Option)
		
		'topbar_text_color' => '#444', // color (Option)
		'topbar_heading_color' => '#444', // color (Option)
		'topbar_link_color' => '#444', // color (Option)
		'topbar_link_hover_color' => '#444', // color (Option)
		'topbar_bg_color' => '#444', // color (Option)
		'topbar_bg_image' => '', // url (Option)
		'topbar_bg_attachment' => 'initial', // (Option)
		'topbar_bg_position' => 'top center', // (Option)
		'topbar_bg_repeat' => 'no-repeat', // (Option)
		'topbar_bg_size' => 'cover', // (Option)
		
		'mavbar_bg_color' => '#444', // color (Option)
		'mavbar_border_color' => '#444', // color (Option)
		'mav_text_color' => '#444', // color (Option)
		'nav_text_hover_color' => '#444', // color (Option)
		'nav_bg_color' => '#444', // color (Option)
		'nav_bg_hover_color' => '#444', // color (Option)
		'nav_border_color' => '#444', // color (Option)
		'nav_border_hover_color' => '#444', // color (Option)
		'mav_sub_text_color' => '#444', // color (Option)
		'nav_sub_text_hover_color' => '#444', // color (Option)
		'nav_sub_bg_color' => '#444', // color (Option)
		'nav_sub_bg_hover_color' => '#444', // color (Option)
		'nav_sub_border_color' => '#444', // color (Option)
		'nav_sub_border_hover_color' => '#444', // color (Option)

	);	
	
	if(isset($config[$id])){
		return $config[$id];
	}
}