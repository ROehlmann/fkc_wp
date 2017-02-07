<?php
/*
	Template Name: Archiv Page
*/

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
