<?php if(boldway_config('header', 'topbar')): ?>
<div id="topbar" class="site-section cm-<?php echo boldway_config('header', 'topbar_color_mood'); ?>">
	<div id="topbar-inner" class="site-section-inner">
    	<div class="boldway-columns nomargin">
        	<div class="boldway-column-4 boldway-column"><?php boldway_get_file('layout-elements/secondary-menu.php', array('class'=>"sk-1")); ?></div>
            <div class="boldway-column-4 boldway-column"><?php boldway_get_file('layout-elements/header-text.php'); ?></div>
            <div class="boldway-column-4 boldway-column">
				<?php boldway_get_file('layout-elements/header-email.php'); ?>
                <?php boldway_get_file('layout-elements/header-phone.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div id="brand" class="site-section">
	<div id="brand-inner" class="site-section-inner">
    	<div class="boldway-columns nomargin">
        	<div class="boldway-column-3 boldway-column"><?php boldway_get_file('layout-elements/site-logo.php'); ?></div>
            <div class="boldway-column-5 boldway-column"><?php boldway_get_file('layout-elements/header-advertisement.php'); ?></div>
            <div class="boldway-column-4 boldway-column">
            	<?php boldway_get_file('layout-elements/header-login-register.php'); ?>
                <?php boldway_get_file('layout-elements/header-social-icons.php'); ?>
            </div>
        </div>
    </div>
</div>

<div id="site-navigation" class="site-section">
	<div id="site-navigation-inner" class="site-section-inner">
    	<?php boldway_get_file('layout-elements/primary-menu.php'); ?>
    </div>
</div>