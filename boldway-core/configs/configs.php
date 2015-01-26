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
	
	$config['color'] = array(
		'accent'	=> '', // color (Option)
		'accent2'	=> '', // color (Option)
		'accent3'	=> '', // color (Option)
		
		'heading_d'			=> '', // color (Option)
		'subheading_d'		=> '', // color (Option)
		'text_d'			=> '', // color (Option)
		'meta_d'			=> '', // color (Option)
		'border_d'			=> '', // color (Option)
		'border_bold_d'		=> '', // color (Option)
		'border_light_d'	=> '', // color (Option)
		'inner_bg_d'		=> '', // color (Option)
		'inner_bg_bold_d'	=> '', // color (Option)
		'inner_bg_light_d'	=> '', // color (Option)
		'bg_d'				=> '', // color (Option)
		
		'heading_l'			=> '', // color (Option)
		'subheading_l'		=> '', // color (Option)
		'text_l'			=> '#939393', // color (Option)
		'meta_l'			=> '', // color (Option)
		'border_l'			=> '', // color (Option)
		'border_bold_l'		=> '', // color (Option)
		'border_light_l'	=> '', // color (Option)
		'inner_bg_l'		=> '#525252', // color (Option)
		'inner_bg_bold_l'	=> '', // color (Option)
		'inner_bg_light_l'	=> '', // color (Option)
		'bg_l'				=> '', // color (Option)
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
		
		'color_mood'	=> 'light', // light, dark (Option)
		'bg_color'		=> '#444', // color (Option)
		'bg_image'		=> '', // url (Option)
		'bg_attachment'	=> 'initial', // (Option)
		'bg_position'	=> 'top center', // (Option)
		'bg_repeat'		=> 'no-repeat', // (Option)
		'bg_size'		=> 'cover', // (Option)
		
		'topbar_color_mood'		=> 'light', // light, dark (Option)
		'topbar_bg_color'		=> '#444', // color (Option)
		'topbar_bg_image'		=> '', // url (Option)
		'topbar_bg_attachment'	=> 'initial', // (Option)
		'topbar_bg_position'	=> 'top center', // (Option)
		'topbar_bg_repeat'		=> 'no-repeat', // (Option)
		'topbar_bg_size'		=> 'cover', // (Option)

	);
	
	
	$config['subheader'] = array(
		'subheader' 	=> true, // (Option + Metabox)
		'layout'		=> 'default', // (Option)
		'breadcrumb'	=> true, // (Option + Metabox)
		'title'			=> NULL, // null or text (Option + Metabox)
		'subtitle'		=> NULL, // null or text (Option + Metabox)
		
		'color_mood'	=> 'light', // light, dark (Option)
		'bg_color'		=> '#444', // color (Option)
		'bg_image'		=> '', // url (Option)
		'bg_attachment'	=> 'initial', // (Option)
		'bg_position'	=> 'top center', // (Option)
		'bg_repeat'		=> 'no-repeat', // (Option)
		'bg_size'		=> 'cover', // (Option)
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
		
		'color_mood'	=> 'light', // light, dark (Option)
		'bg_color'		=> '#444', // color (Option)
		'bg_image'		=> '', // url (Option)
		'bg_attachment'	=> 'initial', // (Option)
		'bg_position'	=> 'top center', // (Option)
		'bg_repeat'		=> 'no-repeat', // (Option)
		'bg_size'		=> 'cover', // (Option)
	);
	
	
	$config['footer'] = array(
		'upper_footer'			=> true, // (Option + Metabox)
		'upper_footer_columns'	=> '4', //1, 2, 3, 4 (Option)
		
		'footer_widget' => true, // (Option + Metabox)
		'footer_widget_columns'	=> '4', //1, 2, 3, 4 (Option)
		
		'copyright'				=> true, // (Option + Metabox)
		'copyright_layout'		=> 'default', // (Option)
		'copyright_text'		=> '©2015 Boldway', // text (Option)
		'credit_text'			=> 'Design By Designenfold', // text (Option)
		'logo'					=> '', // url (Option)
		'menu'					=> true, // (Option)
		
		'upper_color_mood'		=> 'light', // light, dark (Option)
		'upper_bg_color'		=> '#444', // color (Option)
		'upper_bg_image'		=> '', // url (Option)
		'upper_bg_attachment'	=> 'initial', // (Option)
		'upper_bg_position'		=> 'top center', // (Option)
		'upper_bg_repeat'		=> 'no-repeat', // (Option)
		'upper_bg_size'			=> 'cover', // (Option)
		
		'widget_color_mood'		=> 'light', // light, dark (Option)
		'widget_bg_color'		=> '#444', // color (Option)
		'widget_bg_image'		=> '', // url (Option)
		'widget_bg_attachment'	=> 'initial', // (Option)
		'widget_bg_position'	=> 'top center', // (Option)
		'widget_bg_repeat'		=> 'no-repeat', // (Option)
		'widget_bg_size'		=> 'cover', // (Option)
		
		'copyright_color_mood'		=> 'light', // light, dark (Option)
		'copyright_bg_color'		=> '#444', // color (Option)
		'copyright_bg_image'		=> '', // url (Option)
		'copyright_bg_attachment'	=> 'initial', // (Option)
		'copyright_bg_position'		=> 'top center', // (Option)
		'copyright_bg_repeat'		=> 'no-repeat', // (Option)
		'copyright_bg_size'			=> 'cover', // (Option)
	);
	
	
	$config['panel'] = array(
		'top'			=> true, // (Option + Metabox)
		'top_columns'	=> '4', //1, 2, 3, 4 (Option)
		'top_button'	=> 'right', //left, right, left-corner, right-corner, center (Option)
		
		'bottom'		=> true, // (Option + Metabox)
		'bottom_columns'=> '4', //1, 2, 3, 4 (Option)
		'bottom_button'	=> 'right', //left, right, left-corner, right-corner, center (Option)
		
		'left'			=> true, // (Option + Metabox)
		'left_button'	=> 'top', //top, bottom, center (Option)
		
		'right'			=> true, // (Option + Metabox)
		'right_button'	=> 'top', //top, bottom, center (Option)
		
		'top_color_mood'	=> 'light', // light, dark (Option)
		'top_bg_color'		=> '#444', // color (Option)
		'top_bg_image'		=> '', // url (Option)
		'top_bg_attachment'	=> 'initial', // (Option)
		'top_bg_position'	=> 'top center', // (Option)
		'top_bg_repeat'		=> 'no-repeat', // (Option)
		'top_bg_size'		=> 'cover', // (Option)
		
		'bottom_color_mood'		=> 'light', // light, dark (Option)
		'bottom_bg_color'		=> '#444', // color (Option)
		'bottom_bg_image'		=> '', // url (Option)
		'bottom_bg_attachment'	=> 'initial', // (Option)
		'bottom_bg_position'	=> 'top center', // (Option)
		'bottom_bg_repeat'		=> 'no-repeat', // (Option)
		'bottom_bg_size'		=> 'cover', // (Option)
		
		'left_color_mood'		=> 'light', // light, dark (Option)
		'left_bg_color'			=> '#444', // color (Option)
		'left_bg_image'			=> '', // url (Option)
		'left_bg_attachment'	=> 'initial', // (Option)
		'left_bg_position'		=> 'top center', // (Option)
		'left_bg_repeat'		=> 'no-repeat', // (Option)
		'left_bg_size'			=> 'cover', // (Option)
		
		'right_color_mood'		=> 'light', // light, dark (Option)
		'right_bg_color'		=> '#444', // color (Option)
		'right_bg_image'		=> '', // url (Option)
		'right_bg_attachment'	=> 'initial', // (Option)
		'right_bg_position'		=> 'top center', // (Option)
		'right_bg_repeat'		=> 'no-repeat', // (Option)
		'right_bg_size'			=> 'cover', // (Option)
	);
		
	
	if(isset($config[$section])){
		if($config[$section][$id]){
			return $config[$section][$id];
		}
	}
}