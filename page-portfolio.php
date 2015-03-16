<?php

	/**
	 * Wp in Progress
	 *
	 * @author WPinProgress
	 *
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */

	get_header();
	novalite_header_content();

?>

<div class="container content">
    <?php
        global $more;
        $more = 0;
        query_posts('cat=5');
        if(have_posts()) : while(have_posts()) : the_post();
    ?>

    <article class="portfolio">
        <div class="panel panel-black">
            <a href="<?php the_permalink(); ?>">
            <header class="panel-heading"> <?php the_title(); ?></header>
        </a>
            <div class="panel-body">
                
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('medium');
                } 
                ?>

            </div>
        </div>
    </article>
    <?php
        endwhile;
        endif;
        wp_reset_query();
    ?>
</div>



<?php get_footer(); ?>