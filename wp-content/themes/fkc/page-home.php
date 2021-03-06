<?php
/*
	Template Name: Home Page
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
<div id="contentmain" class="contentmain-home">

	<!-- Leistungsspektrum
    ===================================================== -->
	<div id="leistungsspektrum-section" class="is-hidden-md">
		<div class="container">
			
			<div class="row">
				<div class="leistungsspektrum col-xs-12">
						<p class="vh1">
							Wir gestalten 
							<a href="<?php echo esc_url( $link_vis_ident ); ?>">visuelle Identitäten</a>,
							<a href="<?php echo esc_url( $link_info_med ); ?>">Informationsmedien</a> und 
							<a href="<?php echo esc_url( $link_schrift_raum ); ?>">Schrift im Raum</a>.
						</p>
				</div><!-- /.col -->
			</div><!-- /.row -->
			
		</div><!-- /.container -->
	</div><!-- /#leistungsspektrum-section -->



	<!-- Projekte 
    ===================================================== -->
    <div id="selected-projects-home" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h2 class="vh6">ausgewählte Projekte</h2>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
	</div><!-- /.container -->
	


    <?php 
    $args = array(
	    'post_type'		 	=> 'projekte',
		'meta_query'		=> 	array(
			'key'			=> 'show_on_main_page',
			'value'			=>  true,
		),
		'orderby'   		=> 'meta_value_num',
        'meta_key'			=> 'rank_main_page',
        'order'    			=> 'DESC'	
    );
	    
	//Define the loop based on arguments
	$query_featured_projects_home = new WP_Query( $args );

    //Display the contents
    if ( $query_featured_projects_home->have_posts() ) : ?>
    
    <div id="projects-section" class="container">
	    <div class="row">
		    <div class="grid grid--small-border">
			    <!-- Empty div required by the Masonry plugin -->
			    <div class="grid-sizer"></div>
			    
			    <?php while ( $query_featured_projects_home->have_posts() ) : $query_featured_projects_home->the_post();
			    	// Könnte ich auch direkt in den Loop mit einbauen mit einer meta_query 
			    	$show_on_main_page				= get_field('show_on_main_page');
			    	
			    	if ( $show_on_main_page != true ) { continue; }
			    	
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
	    
	    <!-- Link zu weiteren Projekten -->
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<p class="vh6"><a href="<?php echo get_post_type_archive_link( 'projekte' ); ?>">mehr Projekte →</a></p>
			</div><!-- /.col -->
		</div><!-- /.row --> 

    </div><!-- /#projects-section .container -->
    
	<?php endif; ?>
    <?php wp_reset_postdata(); ?>
  			




	<!-- Philosophie
    ===================================================== -->
	<div id="philosophie-section" class="container">
		
		<div class="row">
			<div class="col-lg-9 col-lg-offset-1">
				<p class="vh2 l-bold">Wir beraten in allen Fragen der Kommunikation und ­gestalten ungewöhnliche und wirkungsvolle Antworten. Wir glauben, 
dass die besten Lösungen an der Schnittstelle von inhaltlicher Auseinandersetzung und zeitgemäßer Umsetzung entstehen.</p>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
	</div><!-- /.container -->



	<!-- E-Publishing
    ===================================================== -->
	<div id="e-publishing-section" class="l-highlighted">

		<div class="container e-publishing">
			
			<div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					
					<div class="e-publishing-header">
						<h2 class="l-center-text vh1">E-Publishing</h2>
						<p class="l-center-text vh6">effizient. zeitgemäß. interaktiv.</p>
					</div><!-- /.e-publishing-header -->
					
				</div><!-- /.col -->
				
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="e-publishing-img">
						<img class="l-allow-overscaling" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie_epublish_home.png" alt="Ein Bild, das den Prozess zeigt, wie aus einer Print-Datei eine Smartphone-App wird.">			
					</div><!-- /.e-publishing-img -->
				</div><!-- /.col -->
					
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					
					<div class="e-publishing-text">
						<p class="l-center-text vh2">Wir erstellen aus Ihren Printprodukten interaktive Erlebnisse für Tablets. Dabei werden vorhandene ­InDesign-Dateien überarbeitet und um neue Dimensionen erweitert, wie z. B. 360°-Ansichten, Hyperlinks, ­Diashows, Audio- und Video-Dateien. Als Ergebnis erhalten Sie eine App für mobile Endgeräte.</p>
					</div><!-- /.e-publishing-text-->
					
					<?php // get the link to the ePublishing page
						$epublishing_page_object = get_page_by_title( 'ePublishing' );
						$epublishing_page_link = get_page_link($epublishing_page_object->ID); ?>
					<p class="l-center-text vh6"><a class="l-bold" href="<?php echo $epublishing_page_link; ?>">mehr erfahren →</a></p>
				</div><!-- /.col -->
			</div><!-- /.row -->
				
		</div><!-- /.container .e-publishing-->
			
	</div><!-- /#e-publishing-section -->




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
