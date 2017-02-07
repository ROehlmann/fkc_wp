<?php
/*
	Template Name: Projekte Page
*/

 	// Collect the Category-links
	
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Visuelle Identitäten' );
    // Get the URL of this category
    $link_vis_ident = get_category_link( $category_id );
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Informationsmedien' );
    // Get the URL of this category
    $link_info_med = get_category_link( $category_id );  
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Schrift im Raum' );
    // Get the URL of this category
    $link_schrift_raum = get_category_link( $category_id );  

get_header(); ?>



<!-- CONTENT
===================================================== -->
<div id="contentmain">

	<!-- Projectsheader
    ===================================================== -->
	<div id="projectsheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold">Unsere Projekte</h1>
				<p class="vh2">hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>
			</div><!-- /.col -->
		</div><!-- /.row -->
			
	</div><!-- /.container -->



	<!-- Projekte
    ===================================================== -->
    <div id="projectsheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h2 class="vh6">ausgewählte Projekte</h2>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
	</div><!-- /.container -->
	
	
    
    <div id="projects-section" class="container">
	    
		<?php 
	    //Display the contents
	    if ( have_posts() ) : ?>
    
			<!-- Projektauswahlmatrix -->
			<div class="row">
	    
			    <?php while ( have_posts() ) : the_post();
			    	// Könnte ich auch direkt in den Loop mit einbauen mit einer meta_query 
			    	$show_as				= get_field('show_as');
			    	
			    	if ( $show_as != 'pic' ) { continue; }
			    	
			    	$customer						= get_field('customer');
			    	$project_title 					= get_field('project_title');
			    	$feature_image					= get_field('feature_image'); 
			    ?>
		
				<div class="col-xs-12 col-lg-6">
					<figure class="gallery-item">
						<a href="<?php echo get_permalink();?>" >
							<img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" >
							<figcaption>
								<h3 class="l-bold vh6"><?php echo $customer; ?></h3>
								<p class="vh6"><?php echo $project_title; ?></p>
							</figcaption>
						</a>
					</figure>
				</div><!-- /.col -->
		
				<?php endwhile; ?>
				
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
						    	$show_as				= get_field('show_as');
						    	
						    	if ( $show_as != 'text' ) { continue; }
						    	
						    	$customer						= get_field('customer');
						    	$project_title 					= get_field('project_title');
						    	$feature_image					= get_field('feature_image'); 
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

				
		</div><!-- /#projects-section .container -->
	    


	<!-- Archiv
    ===================================================== -->
	<div id="archiv-selection-section">
	
		<!-- Archive-Selection
	    ===================================================== -->
		<?php get_template_part('template-parts/archiv', 'selection'); ?>
	
	</div><!-- /#archiv-selection-section -->
	
	
</div><!-- /#contentmain -->

	
<?php
get_footer();