<?php
/**
 * default layout for Boldway
 *
 * @package WordPress
 * @subpackage boldway
 * @since Boldway 0.1
 */
?>
<?php boldway_get_file('layout-elements/site-header.php'); ?>
<div id="warp" class="bolday-layout-default header-layout-<?php echo $boldway_file_data['site_header_layout']; ?> copyright-layout-<?php echo $boldway_file_data['site_footer_layout']; ?> sidebar-layout-<?php echo $boldway_file_data['sidebar_layout']; ?> subheader-layout-<?php echo $boldway_file_data['site_subheader_layout']; ?>">
	<div id="warp-inner">
        <?php
			boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/_header.php', $boldway_file_data);
			boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/_subheader.php', $boldway_file_data);
			boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/_main.php', $boldway_file_data);
			boldway_get_file('layouts/'.$boldway_file_data['site_layout'].'/_footer.php', $boldway_file_data);
		?>
    </div>
</div><!--#warp-inner-->
<?php 
	boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_panel-bottom.php', $boldway_file_data);
	boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_panel-left.php', $boldway_file_data); 
	boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_panel-right.php', $boldway_file_data); 
	boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_panel-top.php', $boldway_file_data); 
?>
<?php boldway_get_file('layout-elements/site-footer.php'); ?>