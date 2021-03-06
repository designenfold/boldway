<?php
/**
 * Main for default layout
 *
 * @package WordPress
 * @subpackage boldway
 * @since Boldway 0.1
 */
?>
<div id="site-main" class="site-section">
	<div id="site-main-inner" class="site-section-inner">
		<?php
			if($boldway_file_data['sidebar_layout'] == 'full-width'){
				boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/main/_full-width.php', $boldway_file_data);
			}else{
				boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/main/_'.$boldway_file_data['sidebar_layout'].'-sidebar.php', $boldway_file_data);
			}
		?>
	</div>
</div><!--#site-header-->