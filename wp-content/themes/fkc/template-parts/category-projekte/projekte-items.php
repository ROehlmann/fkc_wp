<?php 
	
$my_category = get_query_var('cat');

$args = array(
	    'post_type'		 	=> 'projekte',
	    'cat'				=>  $my_category,
		'meta_query'		=> 	array(
			'key'			=> 'category_show_as',
			'value'			=> 'pic',
		),
		'orderby'   		=> 'meta_value_num',
        'meta_key'			=> 'rank_category_page_pic',
        'order'    			=> 'DESC'	
);
	    
//Define the loop based on arguments
$query_featured_projects = new WP_Query( $args );
//Display the contents
if ( $query_featured_projects->have_posts() ) : ?>

	<!-- Projektauswahlmatrix -->
	<div class="row">
		<div class="grid grid--small-border">
			
			<!-- Empty div required by the Masonry plugin -->
			<div class="grid-sizer"></div>

		    <?php while ( $query_featured_projects->have_posts() ) : $query_featured_projects->the_post();
		    	// Könnte ich auch direkt in den Loop mit einbauen mit einer meta_query 
		    	$category_show_as				= get_field('category_show_as');
		    	
		    	if ( $category_show_as != 'pic' ) { continue; }
		    	
		    	$customer						= get_field('customer');
		    	$project_title 					= get_field('project_title');
		    	$feature_image					= get_field('feature_image'); 
		    ?>
	
			<div class="grid-item grid-item--size2 grid-item--small-border">
				<figure class="gallery-item gallery-item-project-selection">
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
<?php wp_reset_postdata(); ?>

<!-- Weitere Projekte
===================================================== -->
<?php
	$args = array(
    'post_type'		 	=> 'projekte',
    'cat'				=>  $my_category,
	'meta_query'		=> 	array(
		'key'			=> 'category_show_as',
		'value'			=> 'text',
	),
	'orderby'   		=> 'meta_value_num',
    'meta_key'			=> 'rank_category_page_text',
    'order'    			=> 'DESC'	
	);

	//Define the loop based on arguments
	$query_additional_projects = new WP_Query( $args );

		if ( $query_additional_projects->have_posts() ) : ?>
	<div class="projects-all-list">
		<div class="row">
			<div class="col-xs-11 col-xs-offset-1 col-lg-10 col-lg-offset-1">
				<p class="vh6">mehr Projekte</p>
				<ul class="l-list-no-bullets l-inline">
					<?php while ( $query_additional_projects->have_posts() ) : $query_additional_projects->the_post();
			    	// Könnte ich auch direkt in den Loop mit einbauen mit einer meta_query 
			    	$category_show_as		= get_field('category_show_as');
			    	
			    	if ( $category_show_as != 'text' ) { continue; }
			    	
			    	$customer				= get_field('customer');
			    	$project_title 			= get_field('project_title');
			    	$feature_image			= get_field('feature_image'); 
			    	?>
			    	
			    		<li class="l-inline">
			    			<p class="vh2 l-inline"><a href="<?php echo get_permalink(); ?>" ><?php echo $customer; ?></a></p>
			    		</li>
				    								
					<?php endwhile; ?>
				</ul><!-- /.l-list-no-bullets -->
			</div><!-- /.col -->	
		</div><!-- /.row -->
	</div><!-- /.projects-all-list -->
<?php endif; ?>
<?php wp_reset_postdata(); ?>
