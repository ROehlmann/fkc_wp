<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fernkopie_Custom
 */

get_header(); ?>
	
	<div class="main">
    <div class="container">
	    <div class="row">
		    <div class="col-xs-12">
				    <?php 
			    		wp_nav_menu( array(
				    		
				    		'theme_location'	=> 'projekte_nav',
				    		'container'			=> 'nav', /* The kind of HTML element that the <ul>'s container should be - e.g. nav or div */
				    		'container_class'	=> '', /* class of the element that contains the <ul> */
				    		'menu_class'		=> 'projects-nav' /* class of the <ul> element that contains the navigation links */
			    		) );
			    	?>
		    </div><!-- /col -->
	    </div><!-- /row -->
	    
	    <div class="row">
		    
		    <?php if ( have_posts() ) : 

		    while ( have_posts() ) : the_post();
		    	$project_service				= get_field('project_service');
		    	$project_feature_image 			= get_field('project_feature_image');
		        $mouseover_text					= get_field('mouseover_text');    
		    ?>
			
			<div class="col-xs-12 col-md-6">
			    <article class="project">
				    <a href="<?php echo esc_url( get_permalink() ); ?>">
				    	<figure class="">
							<img src="<?php echo $project_feature_image['url']; ?>" alt="<?php echo $project_feature_image['url']; ?>">
							<figcaption title="<?php echo $mouseover_text; ?>">
								<h4><?php echo the_title(); ?></h4>
								<p><?php echo $project_service; ?></p>
							</figcaption>
				    	</figure>
					</a>
			    </article>
		    </div><!-- /col-xs-12 col-md-6 -->
		
		    <?php
		      endwhile;
		    endif;
		      ?>
		      
	    </div><!-- /row -->
		    
    		    
    </div><!-- /container -->
</div><!-- /main -->


<?php
get_footer();
