<?php 
if(boldway_config('header', 'secondary_menu') == true): 
$class = '';
if(is_array($boldway_file_data)){ 
	if(isset($boldway_file_data['class'])){ $class = $boldway_file_data['class']; }
}
?>
<nav id="secondary_nav" role="navigation" class="<?php echo $class; ?>">
	<?php wp_nav_menu( array('theme_location'=>'secondary') ); ?>
</nav><!-- ID secondary_nav -->
<?php endif; ?>