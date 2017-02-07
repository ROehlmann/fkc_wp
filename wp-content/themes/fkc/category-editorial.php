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
    
get_header(); ?>



<!-- CONTENT
===================================================== -->
<div id="contentmain">

	<!-- ARCHIV HEADER
    ===================================================== -->
	<div id="archivheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold">Archiv Editorial</h1>
				<p class="vh2">VI: hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>		
			</div><!-- /.col -->
		</div><!-- /.row -->
			
	</div><!-- /.container -->


	<!-- ARCHIV ITEMS
    ===================================================== -->
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
								
									<figure class="gallery-item">
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
    
    

	<!-- Archiv-Selection-Section
    ===================================================== -->
	<div id="archiv-selection-section">
	
		<!-- Archive-Selection
	    ===================================================== -->
		<?php get_template_part('template-parts/archiv', 'selection'); ?>
			
	</div><!-- /#archiv-selection-section -->
	
	
</div><!-- /#contentmain -->

	
<?php
get_footer();
