<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
		echo '<article '; post_class(); echo '>';
		
			$file_name = '';
			if( get_post_format() == '' ){ $file_name = '_content'; }
			else{ $file_name = '_content-'.get_post_format(); }
			
			boldway_get_content_file($file_name, $boldway_file_data);
			
		echo '</article>';
	endwhile;
else :
	boldway_get_content_file('_content-none', $boldway_file_data);
endif;