<?php
/**
 * Boldway
 *
 * @package WordPress
 * @subpackage boldway
 * @since Boldway 0.1
 */
 
if(!class_exists('boldway_init')):
	class boldway_init{
		 
		/**
		 * PHP5 constructor method.
		 *
		 * This method loads other methods of the class.
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function __construct() {
			add_action( 'after_setup_theme', array( $this, 'load_boldway' ));
		}
		
		
		
		
		/**
		 * Load the theme on the 'after_setup_theme' action.
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function load_boldway(){
			$this->load_languages();
			$this->constants();
			$this->theme_supports();
			$this->theme_menu();
			$this->register_sidebar();
			$this->inludes();
		}
		
		
		
		
		/**
		 * Load languages of the theme.
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function load_languages() {
			load_theme_textdomain( 'boldway', get_template_directory().'/languages' );
		}
		
		
		
		
		/**
		 * Defines the constants for use within The Theme. Constants 
		 * are prefixed with 'BOLDWAY_' to avoid any naming collisions.
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function constants(){
			define('BOLDWAY', 'Boldway');
			define('BOLDWAY_URL', get_template_directory_uri().'/boldway-core');
			define('BOLDWAY_DRI', get_template_directory().'/boldway-core');
			define('BOLDWAY_THEME_URL', get_template_directory_uri());
			define('BOLDWAY_THEME_DRI', get_template_directory());
			define('BOLDWAY_CHILD_URL', get_stylesheet_directory_uri());
			define('BOLDWAY_CHILD_DRI', get_stylesheet_directory());
			
			if(!defined('BOLDWAY_BLOG_IMG_W')){ define('BOLDWAY_BLOG_IMG_W', 960); }
			if(!defined('BOLDWAY_BLOG_IMG_H')){ define('BOLDWAY_BLOG_IMG_H', 500); }
			if(!defined('BOLDWAY_IMAGE_RETINA_SUPPORT')){ define('BOLDWAY_IMAGE_RETINA_SUPPORT', false); }
			
			if(!defined('BOLDWAY_THEME_STORE_URL')){ define('BOLDWAY_THEME_STORE_URL', ''); }
			if(!defined('BOLDWAY_THEME_DEMO_URL')){ define('BOLDWAY_THEME_DEMO_URL', ''); }
			if(!defined('BOLDWAY_THEME_ORG_URL')){ define('BOLDWAY_THEME_ORG_URL', ''); }
			if(!defined('BOLDWAY_THEME_DOC_URL')){ define('BOLDWAY_THEME_DOC_URL', ''); }
			if(!defined('BOLDWAY_THEME_SUPPORT_URL')){ define('BOLDWAY_THEME_SUPPORT_URL', ''); }
			if(!defined('BOLDWAY_THEME_MORE_URL')){ define('BOLDWAY_THEME_MORE_URL', ''); }
			if(!defined('BOLDWAY_THEME_NAME')){ define('BOLDWAY_THEME_NAME', ''); }
			
			include('configs/configs.php');
		}
		
		
		
		
		/**
		 * Defines Theme Supports
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function theme_supports() {
			add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat' ) );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'post-thumbnails' );
			add_filter('widget_text', 'do_shortcode');
		}
		
		
		
		
		/**
		 * Defines The Menu of the theme
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function theme_menu() {
			
			$menus = array();
			
			$menus['primary'] =  'Primary Menu';
			$menus['secondary'] =  'Secondary Menu';
			$menus['footer'] =  'Footer Menu';
			
			register_nav_menus($menus);	
		}
		
		
		
		
		/**
		 * Defines Widget Area of the theme
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function register_sidebar(){
			register_sidebar( array(
				'name' => __('Primary Sidebar', 'boldway'),
				'id' => 'sidebar',
				'description' => __('Primary Sidebar Widgets', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));

			register_sidebar( array(
				'name' => __('Footer Widget #1', 'boldway'),
				'id' => 'footer_widget_1',
				'description' => __('Footer Widget #1', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));
			register_sidebar( array(
				'name' => __('Footer Widget #2', 'boldway'),
				'id' => 'footer_widget_2',
				'description' => __('Footer Widget #2', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));
			register_sidebar( array(
				'name' => __('Footer Widget #3', 'boldway'),
				'id' => 'footer_widget_3',
				'description' => __('Footer Widget #3', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));
			register_sidebar( array(
				'name' => __('Footer Widget #4', 'boldway'),
				'id' => 'footer_widget_4',
				'description' => __('Footer Widget #4', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));
			register_sidebar( array(
				'name' => __('Footer Widget #5', 'boldway'),
				'id' => 'footer_widget_5',
				'description' => __('Footer Widget #5', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));
			register_sidebar( array(
				'name' => __('Footer Widget #6', 'boldway'),
				'id' => 'footer_widget_6',
				'description' => __('Footer Widget #6', 'boldway'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h4 class="heading">',
				'after_title' => '</h4>',
			));
		}
		
		
		
		
		/**
		 * Load the theme functions files
		 *
		 * @return    void
		 *
		 * @access    public
		 * @since     0.1
		*/
		public function inludes(){
			
			/* Loading vandors files
			----------------------------------*/
			if(!function_exists('mr_image_resize')){ include('vandors/mr-image-resize.php'); }
			if(!class_exists( 'TGM_Plugin_Activation')){ include('vandors/class-tgm-plugin-activation.php'); }
			
			
			/* Loading Includes files
			----------------------------------*/
			include('includes/custom-functions.php');
			include('includes/scripts-loader.php');
			include('includes/custom-css.php');
			if(class_exists( 'TGM_Plugin_Activation')){ include('includes/recommended-plugin-list.php'); }
			
			
			/* Loading Settings Files
			----------------------------------*/
			include('settings/settings-general.php');
			include('settings/settings-header.php');
			include('settings/settings-subheader.php');
			include('settings/settings-main.php');
			include('settings/settings-footer.php');
			include('settings/settings-panels.php');
			include('settings/settings-typography.php');
			include('settings/settings-home-page.php');
			include('settings/settings-export-import.php');
			
			
			/* Loading Metaboxes Files
			----------------------------------*/
			include('metaboxs/metabox-default.php');
			
			
			/* Loading Widgets Files
			----------------------------------*/
			include('widgets/widget-contact-form.php');
			include('widgets/widget-contact-info.php');
			include('widgets/widget-flickr.php');
			include('widgets/widget-map.php');
			include('widgets/widget-recent-post.php');
			include('widgets/widget-twitter-feeed.php.php');
		}
		
		
		
		
		
		
	} //End of the class
endif;