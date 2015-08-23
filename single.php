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


<!-- start content -->

<div class="container content">
	
    <div class="row">
       
    <div <?php post_class(array('pin-article', novalite_template('span') , novalite_template('sidebar'))); ?> >
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        
			do_action('novalite_postformat');

		?>
	        
        <div style="clear:both"></div>
        
    </div>

    <?php if ( novalite_template('span') == "col-xs-16 col-md-8" ) : ?>
        <section id="sidebar" class="col-xs-16 col-md-4">
            <div class="row">
                <?php get_sidebar(); ?>
            </div>
        </section>
    <?php endif; ?>

	<?php endwhile; get_template_part('pagination'); endif;?>
           
    </div>
</div>

<?php get_footer(); ?>