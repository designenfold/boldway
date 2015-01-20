<?php
add_action('wp_enqueue_scripts', 'boldway_theme_script_loader');
function boldway_theme_script_loader(){
	wp_enqueue_style('font-awesome', boldway_get_file_url('assets/css/font-awesome.css', 'url'));
	wp_enqueue_style('boldway-base', boldway_get_file_url('assets/css/boldway.css', 'url'));
	wp_enqueue_style('boldway-layout', boldway_get_file_url('layouts/'.boldway_config('site_layout').'/assets/css/'.boldway_config('site_layout').'-layout.css', 'url'));
}