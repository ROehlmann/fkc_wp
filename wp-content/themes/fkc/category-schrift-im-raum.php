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

	<!-- Projectsheader
    ===================================================== -->
	<div id="projectsheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold"><?php echo get_cat_name($wp_query->queried_object_id); ?></h1>
				<p class="vh2">VI: hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>
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
	
	
    
     <!-- PROJEKTE ITEMS
    ===================================================== -->
    <div id="projects-section" class="container">

    	<?php get_template_part('template-parts/category-projekte/projekte', 'items'); ?>
		
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
