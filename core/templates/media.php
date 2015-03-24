<?php

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

function novalite_thumbnail($id) {
	
	global $post;
	
	if ( ( (is_single()) || (is_page()) )  && (!is_page_template() ) ) {
		if ( get_post_gallery() ) {
			echo get_post_gallery();
		} elseif ( has_post_thumbnail() ) {
			echo '<div class="pin-container">';
				the_post_thumbnail($id);
			echo '</div>';
		}
	} else {
	
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog');
		
		if (!empty($thumb)) :
		
	?>
		
		
			
	<?php
	
	endif;
	
	}

}

?>