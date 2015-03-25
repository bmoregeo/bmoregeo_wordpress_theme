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
		$attachments = new Attachments( 'attachments' );
		$i = 0;
		if ( $attachments->exist() ) {
			echo '<div class="attachment-gallery panel-group" role="tablist" aria-multiselectable="true" id="accordion">';
			echo '<div class="panel panel-default">';

			while( $attachments->get() ) {
				$panel = '<div class="panel-heading" role="tab" id="heading_' . $attachments->id() . '">';
				$panel .= 	'<h4 class="panel-title">';
				$panel .= 		'<a data-toggle="collapse" data-parent="#accordion" href="#collapse_' . $attachments->id() . '" aria-expanded="true" aria-controls="collapse_' . $attachments->id() . '">' . $attachments->field( 'title' ) . '</a>';
				$panel .= 	'</h4>';
				$panel .= '</div>';
				$panel .= '<div id="collapse_' . $attachments->id() . '" class="panel-collapse collapse ';

				if ($i == 0){
					$panel .= ' in ';
				}

				$panel .= '" role="tabpanel" aria-labelledby="heading_' . $attachments->id() .'">';
				$panel .= 	'<div class="panel-body">';
				$panel .= 		'<a href="' . $attachments->url( ) . '">' . $attachments->image('medium', $my_index ) . '</a>';
				$panel .= 	'</div>';
				$panel .= '</div>';

				echo $panel;
				$i+=1;
			}
			echo '</div>';

			echo '</div>';

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