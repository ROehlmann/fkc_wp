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
		    
		    <?php while( $query_featured_projects->have_posts() ) : $query_featured_projects->the_post(); 
			    $featured_image = get_field('featured_image');    
				$featured_customer = get_field('featured_customer');
				$featured_project = get_field('featured_project');
				$featured_year = get_field('featured_year'); 
				$num_images = 1; 
		    ?>
	    		
	    		<div class="col-xs-6 col-lg-3">
					<a href="<?php echo $featured_image['url'];?>" data-lightbox="archiv-lightbox"
						data-title="<span class='lb-customer l-bold'><?php echo $featured_customer; ?></span>
							 			<br>
								 	<span class='lb-project'><?php echo $featured_project; ?></span>
								 	 	<br>
								 	 	<br>
								 	 <span class='lb-year'><?php echo $featured_year; ?></span>">
						<figure class="gallery-item gallery-item-archiv">
							<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" >
							<figcaption>
								<h3 class="l-bold vh6"><?php echo $featured_customer; ?></h3>
								<p class="vh6"><?php echo $featured_project; ?></p>
								<p class="vh6"><?php echo $featured_year;?></p>
							</figcaption>
						</figure>
					</a>
								
			    	<?php
					// check if the repeater field has rows of data
					if( have_rows('repeater') ): ?>
							
						<?php // loop through the rows of data
						while ( have_rows('repeater') ) : the_row(); 
							$picture = get_sub_field('picture');
							$customer = get_sub_field('customer');
							$project_title = get_sub_field('project_title');
							$year = get_sub_field('year');
							$num_images = $num_images + 1;
						 ?>
							
							<a class="is-hidden" href="<?php echo $picture['url'];?>" data-lightbox="archiv-lightbox" 
								data-title="<?php if ( !empty($customer) ): ?>
												<span class='lb-customer l-bold'><?php echo $customer; ?></span>
												<br>
											<?php endif; ?>
											<?php if ( !empty($project_title) ): ?>
												<span class='lb-project'><?php echo $project_title; ?></span>
												<br>
												<br>
											<?php endif; ?>
											<?php if ( !empty($year) ): ?>
												<span class='lb-year'><?php echo $year; ?></span>
											<?php endif; ?>
							"></a>
								
	
						<?php endwhile; ?>
					<?php endif; ?>
				  
				  
					<div class="image-counter-circles">
						<?php if ( $num_images == 1 ) : ?>
							<span class="dot-white">&#8226</span>
						<?php else : ?>
							
							<?php if ( $num_images == 2 ) : ?>
								<span>&#8226</span> <span class="dot-gray">&#8226</span>
								
							<?php elseif ( $num_images == 3 ) : ?>
								<span>&#8226</span> <span class="dot-gray">&#8226</span> <span class="dot-gray">&#8226</span>
								
							<?php elseif ( $num_images == 4 ) : ?>
								<span>&#8226</span> <span class="dot-gray">&#8226</span> <span class="dot-gray">&#8226</span>
								<span class="dot-gray">&#8226</span>
							
							<?php elseif ( $num_images >= 5 ) : ?>
								<span>&#8226</span> <span class="dot-gray">&#8226</span> <span class="dot-gray">&#8226</span> <span class="dot-gray">&#8226</span> <span class="dot-gray">&#8226</span>
							<?php endif; ?>
							
						<?php endif; ?>
					</div><!-- /.image-counter-circles -->
				</div><!-- /.col -->				
				    
		    <?php endwhile; ?>
		    
	    </div><!-- /.row -->
		 
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	
</div><!-- /#archive-items-section .container -->
