<?php 
//Display the contents
if ( have_posts() ) : ?>

	<!-- Projektauswahlmatrix -->
	<div class="row">
		<div class="grid grid--small-border">
			
			<!-- Empty div required by the Masonry plugin -->
			<div class="grid-sizer"></div>

		    <?php while ( have_posts() ) : the_post();
		    	// Könnte ich auch direkt in den Loop mit einbauen mit einer meta_query 
		    	$category_show_as				= get_field('category_show_as');
		    	
		    	if ( $category_show_as != 'pic' ) { continue; }
		    	
		    	$customer						= get_field('customer');
		    	$project_title 					= get_field('project_title');
		    	$feature_image					= get_field('feature_image'); 
		    ?>
	
			<div class="grid-item grid-item--size2 grid-item--small-border">
				<figure class="gallery-item">
					<a href="<?php echo get_permalink();?>" >
						<img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" >
						<figcaption>
							<h3 class="l-bold vh6"><?php echo $customer; ?></h3>
							<p class="vh6"><?php echo $project_title; ?></p>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.grid-item -->
	
			<?php endwhile; ?>
		</div><!-- /.grid -->
	</div><!-- /.row -->
<?php endif; ?>
<?php rewind_posts(); ?>

<!-- Weitere Projekte
===================================================== -->
<?php if ( have_posts() ) : ?>
	<div class="projects-all-list">
		<div class="row">
			<div class="col-xs-11 col-xs-offset-1 col-lg-10 col-lg-offset-1">
				<p class="vh6">mehr Projekte</p>
				<ul class="l-list-no-bullets l-inline">
					<?php while ( have_posts() ) : the_post();
			    	// Könnte ich auch direkt in den Loop mit einbauen mit einer meta_query 
			    	$category_show_as		= get_field('category_show_as');
			    	
			    	if ( $category_show_as != 'text' ) { continue; }
			    	
			    	$customer				= get_field('customer');
			    	$project_title 			= get_field('project_title');
			    	$feature_image			= get_field('feature_image'); 
			    	?>
			    	
			    		<li class="l-inline">
			    			<p class="vh2 l-bold l-inline"><a href="<?php echo get_permalink(); ?>" ><?php echo $customer; ?></a></p>
			    		</li>
				    								
					<?php endwhile; ?>
				</ul><!-- /.l-list-no-bullets -->
			</div><!-- /.col -->	
		</div><!-- /.row -->
	</div><!-- /.projects-all-list -->
<?php endif; ?>
