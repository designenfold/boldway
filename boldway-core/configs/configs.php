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
		
		'copyright_text' => '©2015 Boldway', // text (Option)
		'credit_text' => 'Design By Designenfold', // text (Option)
		'logo' => '', // url (Option)
		'footer_logo' => '', // url (Option)
	);	
	
	if(isset($config[$id])){
		return $config[$id];
	}
}