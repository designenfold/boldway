<?php
/**
 * Header for default layout
 *
 * @package WordPress
 * @subpackage boldway
 * @since Boldway 0.1
 */
?>
<?php if(boldway_config('header', 'header') == true): ?>
<div id="site-header">
	<div id="site-header-inner">
		<?php boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/header/_'.$boldway_file_data['site_header_layout'].'-header.php', $boldway_file_data); ?>
	</div>
</div><!--#site-header-->
<?php endif; ?>