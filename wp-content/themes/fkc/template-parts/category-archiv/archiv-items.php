<div id="archive-items-section" class="container">
	    
	    <?php if( have_posts() ) : ?>
	    
		    <div class="row">
			    
			    <?php while( have_posts() ) : the_post(); ?>
			    
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
								
									<figure class="gallery-item gallery-item-archiv">
										<a href="<?php echo get_permalink();?>" >
											<img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>" >
											<figcaption>
												<h3 class="l-bold vh6"><?php echo $customer; ?></h3>
												<p class="vh6"><?php echo $project_title; ?></p>
												<p class="vh6"><?php echo $year;?></p>
											</figcaption>
										</a>
									</figure>
							
								<?php endif; ?>
		
							<?php endwhile; ?>
						
					    </div><!-- /.col -->
					    
					<?php endif; ?>
				    
			    <?php endwhile; ?>
			    
		    </div><!-- /.row -->
	    
		<?php endif; ?>
    </div><!-- /#archive-items-section .container -->
