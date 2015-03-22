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
			$gallery = get_post_gallery( get_the_ID(), false );

			/* Loop through all the image and output them one by one */
			foreach( $gallery['src'] AS $src )
			{
				?>

				<img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />

				<?php
			}
		}

		elseif ( has_post_thumbnail() ) {
		
			echo '<div class="pin-container">';
				the_post_thumbnail($id);
			echo '</div>';
		
		} 

	}

}

?>