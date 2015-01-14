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
	function boldway_get_file_url($url, $type='url') {
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
			'inner_content' => true,
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