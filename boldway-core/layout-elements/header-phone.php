<?php if(boldway_config('header', 'phone') != ''): ?>
<div class="header-phone">
	<a href="tel:<?php echo boldway_config('header', 'phone'); ?>"><i class="fa fa-phone"></i> <?php echo boldway_config('header', 'phone'); ?></a>
</div>
<?php endif; ?>