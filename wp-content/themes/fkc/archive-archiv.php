<?php
/*
	Template Name: Archiv Page
*/

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
	
		
		<!-- Archive-header
	    ===================================================== -->
		<div id="archivesheader" class="container">
			
			<div class="row">
				<div class="col-xs-10 col-lg-10 col-lg-offset-1">
					<h1 class="vh1 l-bold l-not-bold-md">Fernkopie Archiv</h1>
					<p class="vh2">Hier wird ein kurzer Text zum Archiv stehen. Wahrscheinlich zwei- oder dreizeilig. Hier wird ein kurzer Text zum Archiv stehen. Wahrscheinlich vier- oder fünfzeilig.</p>
				</div><!-- /.col -->
			</div><!-- /.row -->
				
		</div><!-- /#archivesheader .container -->



	<!-- Archive-Selection
	===================================================== -->
	<div id="archiv-selection-section">
	
				
		<div class="container archiv-selection archiv-page">
						
			<div class="row">
				<div class="col-xs-4 archiv-selection-col no-border-lg">
					<a href="<?php echo esc_url( $link_editorial ); ?>">
						<p class="l-center-text l-uppercase vh4"><span class="l-bold">Archiv</span><br>Editorial</p>
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-1.jpg" alt="">
							</div><!-- /.col -->
						</div><!-- /.row -->
					</a>
				</div><!-- /.col -->
					
				<div class="col-xs-4 archiv-selection-col no-border-lg">
					<a href="<?php echo esc_url( $link_plakat ); ?>">
						<p class="l-center-text l-uppercase vh4"><span class="l-bold">Archiv</span><br>Plakate</p>
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-2.jpg" alt="">
							</div><!-- /.col -->
						</div><!-- /.row -->
					</a>
				</div><!-- /.col -->
					
				<div class="col-xs-4 archiv-selection-col no-border-lg">
					<a href="<?php echo esc_url( $link_briefmarken ); ?>">
						<p class="l-center-text l-uppercase vh4"><span class="l-bold">Archiv</span><br>Briefmarken</p>
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
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
