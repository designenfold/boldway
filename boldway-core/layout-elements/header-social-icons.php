<?php if(boldway_config('header', 'social_icon_display') == true ): ?>
	<?php if( is_array( boldway_config('header', 'social_icons') )  ): ?>
    <div class="header-social-icons">
		<?php foreach( boldway_config('header', 'social_icons') as $item ): ?>
        	<a href="<?php echo $item['url']; ?>" rel="nofollow" title="<?php echo $item['title']; ?>" class="sicon-<?php echo $item['type']; ?>"><i class="fa fa-<?php echo $item['type']; ?>"></i></a>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>