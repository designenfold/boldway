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
<div id="warp" class="bolday-layout-default">
	<div id="warp-inner">
    
    	<div id="site-header">
        	<div id="site-header-inner">
            	<?php boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_header.php', $boldway_layout_data); ?>
            </div>
        </div><!--#site-header-->
        
        <div id="site-subheader">
        	<div id="site-subheader-inner">
            	<?php boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_subheader.php', $boldway_layout_data); ?>
            </div>
        </div><!--#site-header-->
        
        <div id="site-main">
        	<div id="site-main-inner">
            	<?php boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_main.php', $boldway_layout_data); ?>
            </div>
        </div><!--#site-header-->
        
        <div id="site-footer">
        	<div id="site-footer-inner">
            	<?php boldway_get_file('layouts/'.$boldway_layout_data['site_layout'].'/_footer.php', $boldway_layout_data); ?>
            </div>
        </div><!--#site-header-->
        
    </div>
</div><!--#warp-inner-->
<?php boldway_get_file('layout-elements/site-footer.php'); ?>