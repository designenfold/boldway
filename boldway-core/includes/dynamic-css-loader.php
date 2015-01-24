<?php
function boldway_dynamic_css() {
  require(BOLDWAY_DRI.'/assets/css/dynamic-css.php');
  exit;
}
add_action('wp_ajax_boldway_dynamic_css', 'boldway_dynamic_css');
add_action('wp_ajax_nopriv_boldway_dynamic_css', 'boldway_dynamic_css');