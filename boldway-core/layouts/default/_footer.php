<?php
/**
 * Footer for default layout
 *
 * @package WordPress
 * @subpackage boldway
 * @since Boldway 0.1
 */

boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/__upper-footer.php', $boldway_file_data);
boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/__footer-widgets.php', $boldway_file_data);
boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/footer/_'.$boldway_file_data['site_footer_layout'].'-footer.php', $boldway_file_data);