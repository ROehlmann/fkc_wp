<div id="archive-items-section" class="container">
	    
    <?php 
	$my_category = get_query_var('cat');

	$args = array(
	    'post_type'		 	=> 'archiv',
	    'cat'				=>  $my_category,
		'orderby'   		=> 'meta_value_num',
        'meta_key'			=> 'rank_category_page',
        'order'    			=> 'DESC'	
	);
	    
	//Define the loop based on arguments
	$query_featured_projects = new WP_Query( $args );
	
	//Display the contents
	if ( $query_featured_projects->have_posts() ) : ?>    
	    
	    <div class="row">
		    
		    <?php while( $query_featured_projects->have_posts() ) : $query_featured_projects->the_post(); ?>
		    
		    	<?php
				// check if the repeater field has rows of data
				if( have_rows('repeater') ): ?>
					
					<div class="col-xs-6 col-lg-3">
						
						<?php // loop through the rows of data
						while ( have_rows('repeater') ) : the_row(); 
							$picture = get_sub_field('picture');
							$customer = get_sub_field('customer');
							$project_title = get_sub_field('project_title');
							$year = get_sub_field('year');
						 ?>
					
							<?php if ( !empty($picture) ) : ?>
							
								<a href="<?php echo $picture['url'];?>" data-lightbox="archiv-lightbox">
									<figure class="gallery-item gallery-item-archiv">
										<img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>" >
										<figcaption>
											<h3 class="l-bold vh6"><?php echo $customer; ?></h3>
											<p class="vh6"><?php echo $project_title; ?></p>
											<p class="vh6"><?php echo $year;?></p>
										</figcaption>
									</figure>
								</a>
								
						
							<?php endif; ?>
	
						<?php endwhile; ?>
					
				    </div><!-- /.col -->
				    
				<?php endif; ?>
			    
		    <?php endwhile; ?>
		    
	    </div><!-- /.row -->
    
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	
</div><!-- /#archive-items-section .container -->
