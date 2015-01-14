<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
		echo '<article '; post_class(); echo '>';
			the_content();
		echo '</article>';
	endwhile;
else :
	_e('Sorry No content found', 'boldway');
endif;