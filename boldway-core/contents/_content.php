<?php
boldway_get_content_file('_content-post-title', $boldway_file_data);
boldway_get_content_file('_content-post-meta', $boldway_file_data);
the_content();
wp_link_pages( array(
	'before'            => '<div class="page-links">'.__( 'Pages:', 'boldway' ),
	'after'             => '</div>',
	'link_before'       => '<span>',
	'link_after'        => '</span>',
	'pagelink'          => '%',
	'echo'              => 1
) );