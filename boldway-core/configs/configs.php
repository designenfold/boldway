<?php
function boldway_config($section, $id){
	
	$config = array(
		'general'	=> array(),
		'subheader'	=> array(),
		'header'	=> array(),
		'main'		=> array(),
		'footer'	=> array(),
		'panel'		=> array(),
	);
	
	$config['general'] = array(
		'site_layout'	=> 'default', // (Option)
		'header_layout'	=> 'default', // (Option)
		'logo'			=> '', // url (Option)
		'logo2x'		=> '', // url (Option)
		'favicon'		=> '', // url (Option)
		'favicon_57'	=> '', // url (Option)
		'favicon_72'	=> '', // url (Option)
		'favicon_114'	=> '', // url (Option)
		'favicon_120'	=> '', // url (Option)
		'favicon_144'	=> '', // url (Option)
		'favicon_152'	=> '', // url (Option)
		'custom_css'	=> '', // css code (Option)
		'header_code'	=> '', // html or javascript (Option)
		'footer_code'	=> '', // html or javascript (Option)
	);
	
	
	$config['header'] = array(
		'header'				=> true,
		'topbar'				=> true,
		'phone'					=> '983 432 8437', // text (Option)
		'email'					=> 'info@domain.com', // text (Option)
		'login_register'		=> true, // true, false (Option)
		'login_url'				=> '#', // url (Option)
		'register_url'			=> '#', // url (Option)
		'logout_url'			=> '#', // url (Option)
		'account_url'			=> '#', // url (Option)
		'ads'					=> '<a href=""><img src="http://placehold.it/468x60"></a>', // html (Option)
		'text'					=> 'We are Boldway.', // text (Option)
		'primary_menu'			=> true, // true, false (Option)
		'secondary_menu'		=> true, // true, false (Option)
		'search'				=> true, // true, false (Option)
		'social_icon_display'	=> true, // true, false (Option)
		'social_icons' => array(
			array( 'type' => 'linkedin',		'url'=>'', 'title'=>'' ),
			array( 'type' => 'vk',				'url'=>'', 'title'=>'' ),
			array( 'type' => 'twitter',			'url'=>'', 'title'=>'' ),
			array( 'type' => 'dribbble',		'url'=>'', 'title'=>'' ),
			array( 'type' => 'facebook',		'url'=>'', 'title'=>'' ),
			array( 'type' => 'github-alt',		'url'=>'', 'title'=>'' ),
			array( 'type' => 'google-plus',		'url'=>'', 'title'=>'' ),
			array( 'type' => 'pinterest',		'url'=>'', 'title'=>'' ),
			array( 'type' => 'youtube-play',	'url'=>'', 'title'=>'' ),
		),
		
		'text_color'		=> '#444', // color (Option)
		'heading_color'		=> '#444', // color (Option)
		'link_color'		=> '#444', // color (Option)
		'link_hover_color'	=> '#444', // color (Option)
		'border_color'		=> '#444', // color (Option)
		'bg_color'			=> '#444', // color (Option)
		'bg_image'			=> '', // url (Option)
		'bg_attachment'		=> 'initial', // (Option)
		'bg_position'		=> 'top center', // (Option)
		'bg_repeat'			=> 'no-repeat', // (Option)
		'bg_size'			=> 'cover', // (Option)
		
		'topbar_text_color'			=> '#444', // color (Option)
		'topbar_heading_color'		=> '#444', // color (Option)
		'topbar_link_color'			=> '#444', // color (Option)
		'topbar_link_hover_color'	=> '#444', // color (Option)
		'topbar_bg_color'			=> '#444', // color (Option)
		'topbar_bg_image'			=> '', // url (Option)
		'topbar_bg_attachment'		=> 'initial', // (Option)
		'topbar_bg_position'		=> 'top center', // (Option)
		'topbar_bg_repeat'			=> 'no-repeat', // (Option)
		'topbar_bg_size'			=> 'cover', // (Option)
		
		'mavbar_bg_color'				=> '#444', // color (Option)
		'mavbar_border_color'			=> '#444', // color (Option)
		'mav_text_color'				=> '#444', // color (Option)
		'nav_text_hover_color'			=> '#444', // color (Option)
		'nav_bg_color'					=> '#444', // color (Option)
		'nav_bg_hover_color'			=> '#444', // color (Option)
		'nav_border_color'				=> '#444', // color (Option)
		'nav_border_hover_color'		=> '#444', // color (Option)
		'mav_sub_text_color'			=> '#444', // color (Option)
		'nav_sub_text_hover_color'		=> '#444', // color (Option)
		'nav_sub_bg_color'				=> '#444', // color (Option)
		'nav_sub_bg_hover_color'		=> '#444', // color (Option)
		'nav_sub_border_color'			=> '#444', // color (Option)
		'nav_sub_border_hover_color'	=> '#444', // color (Option)
	);
	
	
	$config['subheader'] = array(
		'subheader' 	=> true, // (Option + Metabox)
		'layout'		=> 'default', // (Option)
		'breadcrumb'	=> true, // (Option + Metabox)
		'title'			=> NULL, // null or text (Option + Metabox)
		'subtitle'		=> NULL, // null or text (Option + Metabox)
		
		'text_color'		=> '#444', // color (Option)
		'heading_color'		=> '#444', // color (Option)
		'link_color'		=> '#444', // color (Option)
		'link_hover_color'	=> '#444', // color (Option)
		'border_color'		=> '#444', // color (Option)
		'bg_color'			=> '#444', // color (Option)
		'bg_image'			=> '', // url (Option)
		'bg_attachment'		=> 'initial', // (Option)
		'bg_position'		=> 'top center', // (Option)
		'bg_repeat'			=> 'no-repeat', // (Option)
		'bg_size'			=> 'cover', // (Option)
	);
	
	
	$config['main'] = array(
		'sidebar_layout'				=> 'left', //left, right, none, full-width // (Option + Metabox)
		'sidebar_layout_page'			=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_404'			=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_archive'		=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_author'			=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_bbpress'		=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_buddypress'		=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_woocommerce'	=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_home'			=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_frontpage'		=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_category'		=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_tag'			=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_search'			=> 'left', //left, right, none, full-width // (Option)
		'sidebar_layout_single'			=> 'left', //left, right, none, full-width // (Option)
		
		'text_color'		=> '#444', // color (Option)
		'heading_color'		=> '#444', // color (Option)
		'link_color'		=> '#444', // color (Option)
		'link_hover_color'	=> '#444', // color (Option)
		'border_color'		=> '#444', // color (Option)
		'bg_color'			=> '#444', // color (Option)
		'bg_image'			=> '', // url (Option)
		'bg_attachment'		=> 'initial', // (Option)
		'bg_position'		=> 'top center', // (Option)
		'bg_repeat'			=> 'no-repeat', // (Option)
		'bg_size'			=> 'cover', // (Option)
	);
	
	
	$config['footer'] = array(
		'upper_footer' => true, // (Option + Metabox)
		'upper_footer_columns' => '4', //1, 2, 3, 4 (Option)
		
		'footer_widget' => true, // (Option + Metabox)
		'footer_widget_columns' => '4', //1, 2, 3, 4 (Option)
		
		'copyright' => true, // (Option + Metabox)
		'copyright_layout' => 'default', // (Option)
		'copyright_text' => '©2015 Boldway', // text (Option)
		'credit_text' => 'Design By Designenfold', // text (Option)
		'logo' => '', // url (Option)
		'menu' => true, // (Option)
		
		'upper_text_color'		=> '#444', // color (Option)
		'upper_heading_color'	=> '#444', // color (Option)
		'upper_link_color'		=> '#444', // color (Option)
		'upper_link_hover_color'=> '#444', // color (Option)
		'upper_border_color'	=> '#444', // color (Option)
		'upper_bg_color'		=> '#444', // color (Option)
		'upper_bg_image'		=> '', // url (Option)
		'upper_bg_attachment'	=> 'initial', // (Option)
		'upper_bg_position'		=> 'top center', // (Option)
		'upper_bg_repeat'		=> 'no-repeat', // (Option)
		'upper_bg_size'			=> 'cover', // (Option)
		
		'widget_text_color'		=> '#444', // color (Option)
		'widget_heading_color'	=> '#444', // color (Option)
		'widget_link_color'		=> '#444', // color (Option)
		'widget_link_hover_color'=> '#444', // color (Option)
		'widget_border_color'	=> '#444', // color (Option)
		'widget_bg_color'		=> '#444', // color (Option)
		'widget_bg_image'		=> '', // url (Option)
		'widget_bg_attachment'	=> 'initial', // (Option)
		'widget_bg_position'		=> 'top center', // (Option)
		'widget_bg_repeat'		=> 'no-repeat', // (Option)
		'widget_bg_size'			=> 'cover', // (Option)
		
		'copyright_text_color'		=> '#444', // color (Option)
		'copyright_link_color'		=> '#444', // color (Option)
		'copyright_link_hover_color'=> '#444', // color (Option)
		'copyright_border_color'	=> '#444', // color (Option)
		'copyright_bg_color'		=> '#444', // color (Option)
		'copyright_bg_image'		=> '', // url (Option)
		'copyright_bg_attachment'	=> 'initial', // (Option)
		'copyright_bg_position'		=> 'top center', // (Option)
		'copyright_bg_repeat'		=> 'no-repeat', // (Option)
		'copyright_bg_size'			=> 'cover', // (Option)
	);
	
	
	$config['panel'] = array(
		'top' => true, // (Option + Metabox)
		'top_columns' => '4', //1, 2, 3, 4 (Option)
		'top_button' => 'right', //left, right, left-corner, right-corner, center (Option)
		
		'bottom' => true, // (Option + Metabox)
		'bottom_columns' => '4', //1, 2, 3, 4 (Option)
		'bottom_button' => 'right', //left, right, left-corner, right-corner, center (Option)
		
		'left' => true, // (Option + Metabox)
		'left_button' => 'top', //top, bottom, center (Option)
		
		'right' => true, // (Option + Metabox)
		'right_button' => 'top', //top, bottom, center (Option)
		
		'top_text_color'		=> '#444', // color (Option)
		'top_heading_color'		=> '#444', // color (Option)
		'top_link_color'		=> '#444', // color (Option)
		'top_link_hover_color'	=> '#444', // color (Option)
		'top_border_color'		=> '#444', // color (Option)
		'top_bg_color'			=> '#444', // color (Option)
		'top_bg_image'			=> '', // url (Option)
		'top_bg_attachment'		=> 'initial', // (Option)
		'top_bg_position'		=> 'top center', // (Option)
		'top_bg_repeat'			=> 'no-repeat', // (Option)
		'top_bg_size'			=> 'cover', // (Option)
		
		'bottom_text_color'		=> '#444', // color (Option)
		'bottom_heading_color'		=> '#444', // color (Option)
		'bottom_link_color'		=> '#444', // color (Option)
		'bottom_link_hover_color'	=> '#444', // color (Option)
		'bottom_border_color'		=> '#444', // color (Option)
		'bottom_bg_color'			=> '#444', // color (Option)
		'bottom_bg_image'			=> '', // url (Option)
		'bottom_bg_attachment'		=> 'initial', // (Option)
		'bottom_bg_position'		=> 'top center', // (Option)
		'bottom_bg_repeat'			=> 'no-repeat', // (Option)
		'bottom_bg_size'			=> 'cover', // (Option)
		
		'left_text_color'		=> '#444', // color (Option)
		'left_heading_color'		=> '#444', // color (Option)
		'left_link_color'		=> '#444', // color (Option)
		'left_link_hover_color'	=> '#444', // color (Option)
		'left_border_color'		=> '#444', // color (Option)
		'left_bg_color'			=> '#444', // color (Option)
		'left_bg_image'			=> '', // url (Option)
		'left_bg_attachment'		=> 'initial', // (Option)
		'left_bg_position'		=> 'top center', // (Option)
		'left_bg_repeat'			=> 'no-repeat', // (Option)
		'left_bg_size'			=> 'cover', // (Option)
		
		'right_text_color'		=> '#444', // color (Option)
		'right_heading_color'		=> '#444', // color (Option)
		'right_link_color'		=> '#444', // color (Option)
		'right_link_hover_color'	=> '#444', // color (Option)
		'right_border_color'		=> '#444', // color (Option)
		'right_bg_color'			=> '#444', // color (Option)
		'right_bg_image'			=> '', // url (Option)
		'right_bg_attachment'		=> 'initial', // (Option)
		'right_bg_position'		=> 'top center', // (Option)
		'right_bg_repeat'			=> 'no-repeat', // (Option)
		'right_bg_size'			=> 'cover', // (Option)
	);
		
	
	if(isset($config[$section])){
		if($config[$section][$id]){
			return $config[$section][$id];
		}
	}
}