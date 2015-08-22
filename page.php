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

    <div class="row" >
    
        <div class="<?php echo novalite_template('span') . " ". novalite_template('sidebar'); ?>" >
            <div class="pin-article">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php do_action('novalite_postformat'); ?>

                    <?php wp_link_pages(); ?>

                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>

<?php if ( novalite_template('span') == "col-xs-16 col-md-8" ) : ?>
    <section id="sidebar" class="col-xs-16 col-md-4">
        <div class="row">
            <?php get_sidebar(); ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>