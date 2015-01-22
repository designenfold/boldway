<?php if(boldway_config('header', 'secondary_menu') == true): ?>
<nav id="secondary_nav" role="navigation">
	<?php wp_nav_menu( array('theme_location'=>'secondary') ); ?>
</nav><!-- ID secondary_nav -->
<?php endif; ?>