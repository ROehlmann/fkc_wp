<?php
/*
	Template Name: Projekte-Category Page
*/
    
get_header(); ?>



<!-- CONTENT
===================================================== -->
<div id="contentmain">



	<!-- ARCHIV HEADER
    ===================================================== -->
	<div id="archivheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold">Archiv Plakate</h1>
				<p class="vh2">VI: hier wird ein kurzer erklärender Text zu der jeweiligen Kategorie stehen</p>		
			</div><!-- /.col -->
		</div><!-- /.row -->
			
	</div><!-- /.container -->



	<!-- ARCHIV ITEMS
    ===================================================== -->
    <?php get_template_part('template-parts/category-archiv/archiv', 'items'); ?>
    
    
    
	<!-- ARCHIV SELECTION SECTION
    ===================================================== -->
	<div id="archiv-selection-section">
	
		<!-- Archive-Selection
	    ===================================================== -->
		<?php get_template_part('template-parts/archiv', 'selection'); ?>
			
	</div><!-- /#archiv-selection-section -->
	
	
	
</div><!-- /#contentmain -->

	
<?php
get_footer();
