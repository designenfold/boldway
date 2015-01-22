<?php if(boldway_config('header', 'email') != ''): ?>
<div class="header-email">
	<a href="mailto:<?php echo boldway_config('header', 'email'); ?>"><i class="fa fa-envelope-o"></i> <?php echo boldway_config('header', 'email'); ?></a>
</div>
<?php endif; ?>