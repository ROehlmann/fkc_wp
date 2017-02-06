<?php
/*
	Template Name: Projekte-Category Page
*/

 	// Collect the Category-links
	
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Visuelle Identitäten' );
    $cat_id_vis_ident = $category_id;
    // Get the URL of this category
    $link_vis_ident = get_category_link( $category_id );
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Informationsmedien' );
    $cat_id_info_med = $category_id;
    // Get the URL of this category
    $link_info_med = get_category_link( $category_id );  
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Schrift im Raum' );
    $cat_id_schrift_raum = $category_id;
    // Get the URL of this category
    $link_schrift_raum = get_category_link( $category_id );  
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Editorial' );
    // Get the URL of this category
    $link_editorial = get_category_link( $category_id );  
    
	// Get the ID of a given category
    $category_id = get_cat_ID( 'Plakat' );
    // Get the URL of this category
    $link_plakat = get_category_link( $category_id );  
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Briefmarken' );
    // Get the URL of this category
    $link_briefmarken = get_category_link( $category_id );  


get_header(); ?>



<!-- CONTENT
===================================================== -->
<div id="contentmain">

	<!-- Projectsheader
    ===================================================== -->
	<div id="projectsheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold"><?php echo get_cat_name($wp_query->queried_object_id); ?></h1>
				
				<!-- Visuelle Identitäten -->
				<?php if($wp_query->queried_object_id == $cat_id_vis_ident) : ?>
					<p class="vh2">VI: hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>
					
				<!-- Informationsmedien -->	
				 <?php elseif($wp_query->queried_object_id == $cat_id_info_med) :?>
					<p class="vh2">IM: hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>
					
				<!-- Schrift im Raum -->	
				 <?php elseif($wp_query->queried_object_id == $cat_id_schrift_raum) :?>
					<p class="vh2">SiR: hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>
					
				<?php endif; ?>

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
	
		<div class="container archiv-selection">
			
			<div class="row">
				<a class="is-hidden-lg" href="#"><img class="logo l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo"></a>
			</div><!-- /.row -->
			
			<div class="row">
				<div class="col-xs-4 archiv-selection-col">
					<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
					<a href="archiv-category.html">
						<p class="l-center-text l-uppercase vh4">Archiv Editorial</p>
						<div class="row">
							<div class="col-lg-4 col-lg-offset-4">
								<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-1.jpg" alt="">
							</div><!-- /.col -->
						</div><!-- /.row -->
					</a>
				</div><!-- /.col -->
					
				<div class="col-xs-4 archiv-selection-col">
					<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
					<a href="archiv-category.html">
						<p class="l-center-text l-uppercase vh4">Archiv Plakate</p>
						<div class="row">
							<div class="col-lg-4 col-lg-offset-4">
								<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-2.jpg" alt="">
							</div><!-- /.col -->
						</div><!-- /.row -->
					</a>
				</div><!-- /.col -->
					
				<div class="col-xs-4 archiv-selection-col">
					<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
					<a href="archiv-category.html">
						<p class="l-center-text l-uppercase vh4">Archiv Briefmarken</p>
						<div class="row">
							<div class="col-lg-4 col-lg-offset-4">
								<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-3.jpg" alt="">
							</div><!-- /.col -->
						</div><!-- /.row -->
					</a>
				</div><!-- /.col -->
			</div><!-- /.row -->	
			
		</div><!-- /.container .archiv-selection -->
	
	</div><!-- /#archiv-selection-section -->
</div><!-- /#contentmain -->

	
<?php
get_footer();
