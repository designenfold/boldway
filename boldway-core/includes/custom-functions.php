<?php
/**
 * Custom Functions for Boldway
 *
 * @package WordPress
 * @subpackage boldway
 * @since Boldway 0.1
 */
 

/**
 * Include files
 *
 * @return    void
 *
 * @access    public
 * @since     0.1
*/
if(!function_exists('boldway_get_file')):
	function boldway_get_file($file, $boldway_file_data = NULL) {
		if(file_exists(BOLDWAY_CHILD_DRI.'/'.$file)){
			include(BOLDWAY_CHILD_DRI.'/'.$file);
		}elseif(file_exists(BOLDWAY_CHILD_DRI.'/app/'.$file)){
			include(BOLDWAY_CHILD_DRI.'/app/'.$file);
		}elseif(file_exists(BOLDWAY_THEME_DRI.'/'.$file)){
			include(BOLDWAY_THEME_DRI.'/'.$file);
		}elseif(file_exists(BOLDWAY_THEME_DRI.'/app/'.$file)){
			include(BOLDWAY_THEME_DRI.'/app/'.$file);
		}elseif(file_exists(BOLDWAY_DRI.'/'.$file)){
			include(BOLDWAY_DRI.'/'.$file);
		}
	}
endif;



/**
 * return a file URL / DRI
 *
 * @return    string
 *
 * @access    public
 * @since     0.1
*/
if(!function_exists('boldway_get_file_url')):
	function boldway_get_file_url($file, $type='url') {
		$output = '';
		
		if($type=='url'){
			if(file_exists(BOLDWAY_CHILD_DRI.'/'.$file)){
				$output = BOLDWAY_CHILD_URL.'/'.$file;
			}elseif(file_exists(BOLDWAY_CHILD_DRI.'/app/'.$file)){
				$output = BOLDWAY_CHILD_URL.'/app/'.$file;
			}elseif(file_exists(BOLDWAY_THEME_DRI.'/'.$file)){
				$output = BOLDWAY_THEME_URL.'/'.$file;
			}elseif(file_exists(BOLDWAY_THEME_DRI.'/app/'.$file)){
				$output = BOLDWAY_THEME_URL.'/app/'.$file;
			}elseif(file_exists(BOLDWAY_DRI.'/'.$file)){
				$output = BOLDWAY_URL.'/'.$file;
			}
		}else{
			if(file_exists(BOLDWAY_CHILD_DRI.'/'.$file)){
				$output = BOLDWAY_CHILD_DRI.'/'.$file;
			}elseif(file_exists(BOLDWAY_CHILD_DRI.'/app/'.$file)){
				$output = BOLDWAY_CHILD_DRI.'/app/'.$file;
			}elseif(file_exists(BOLDWAY_THEME_DRI.'/'.$file)){
				$output = BOLDWAY_THEME_DRI.'/'.$file;
			}elseif(file_exists(BOLDWAY_THEME_DRI.'/app/'.$file)){
				$output = BOLDWAY_THEME_DRI.'/app/'.$file;
			}elseif(file_exists(BOLDWAY_DRI.'/'.$file)){
				$output = BOLDWAY_DRI.'/'.$file;
			}
		}
		
		return $output;
	}
endif;




/**
 * Render the full HTML of pages
 *
 * @return    string
 *
 * @access    public
 * @since     0.1
*/
if(!function_exists('boldway_layout')):
	function boldway_layout($settings = array()) {
		$default = array(			
			'header' => true,
			'subheader' => true,
			'main' => true,
			'upper_footer' => true,
			'footer_widget' => true,
			'footer' => true,
			'top_panel' => true,
			'left_panel' => true,
			'right_panel' => true,
			'borrom_panel' => true,
				
			'page_type' => 'page', //page, 404, archive .......
			'page_content' => NULL,
			'page_heading' => NULL,
			'page_subheading' => NULL,
			
			'sidebar_layout' => 'left', //left, right, none, full-width
			'site_layout' => 'default',
			'site_header_layout' => 'default',
			'site_subheader_layout' => 'default',
			'site_footer_layout' => 'default',
		);
		$boldway_file_data = array_merge($default, $settings);
		
		boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/layout.php', $boldway_file_data);
	}
endif;




/**
 * Render the full HTML of pages
 *
 * @return    string
 *
 * @access    public
 * @since     0.1
*/
if(!function_exists('boldway_get_content_file')):
	function boldway_get_content_file($type, $boldway_file_data) {
		
		if(file_exists(boldway_get_file_url('contents/'.$type.'.php', 'dri'))){
			boldway_get_file('contents/'.$type.'.php', $boldway_file_data);
		}else{
			_e('Sorry no content type', 'boldway');	
		}

	}
endif;



/**
 * Render The color code
 *
 * @return    string
 *
 * @access    public
 * @since     0.1
*/
if(!function_exists('boldway_css_color')):
	function boldway_css_color($name, $opicity = 1) {
		if($opicity == 1){
			return boldway_config('color', $name);
		}else{
			return 'rgba('.boldway_hex2rgb(boldway_config('color', $name)).','.$opicity.')';
		}

	}
endif;




/**
 * Convert hex code to rgb color code
 *
 * @return    string or arrray
 *
 * @access    public
 * @since     0.1
*/
if(!function_exists('boldway_hex2rgb')):
	function boldway_hex2rgb($hex, $arry_format = false) {
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
	   
	   if( $arry_format == true ){
			return $rgb; // returns an array with the rgb values
	   }else{
			return implode(",", $rgb); // returns the rgb values separated by commas
	   } 
	}
endif;