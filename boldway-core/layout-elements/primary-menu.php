<?php if(boldway_config('header', 'primary_menu') == true): ?>
<nav id="navigation" role="navigation">
	<?php wp_nav_menu( array('theme_location'=>'primary') ); ?>
</nav><!-- #site-navigation -->
<?php endif; ?>