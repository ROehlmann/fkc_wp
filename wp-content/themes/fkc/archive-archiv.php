<?php
/*
	Template Name: Archiv Page
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

	<!-- Archiv
    ===================================================== -->
	<div id="archiv-selection-section">
		
		<!-- Archive-header
	    ===================================================== -->
		<div id="archivesheader" class="container">
			
			<div class="row">
				<div class="col-xs-8 col-lg-10 col-lg-offset-1">
					<h1 class="vh1 l-bold">Fernkopie Archiv</h1>
					<p class="vh2">Hier wird ein kurzer Text zum Archiv stehen. Wahrscheinlich zwei- oder dreizeilig. Hier wird ein kurzer Text zum Archiv stehen. Wahrscheinlich vier- oder fünfzeilig.</p>
				</div><!-- /.col -->
			</div><!-- /.row -->
				
		</div><!-- /#archivesheader .container -->



		<!-- Archive-Selection
	    ===================================================== -->
		<?php get_template_part('template-parts/archiv', 'selection'); ?>
		
			
	</div><!-- /#archiv-selection-section -->
</div><!-- /#contentmain -->

	
<?php
get_footer();
