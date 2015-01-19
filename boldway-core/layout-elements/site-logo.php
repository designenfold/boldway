<div class="site-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    	<?php if(boldway_config('logo') == ''): ?>
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        <?php else: ?>
        	<img src="<?php echo boldway_config('logo'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
        <?php endif; ?>
    </a>
</div>