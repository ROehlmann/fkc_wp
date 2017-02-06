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
