<?php
/*
	Template Name: Impressum
*/

// Advanced Custom Fields
$impressum_text 	= get_field('impressum_text');
$programmer_name 	= get_field('programmer_name');
$programmer_email 	= get_field('programmer_email');

get_header(); ?>


		
<!-- CONTENT
===================================================== -->
<div id="contentmain">

	<div class="container">
	
		<p class="vh6"><?php echo $impressum_text; ?></p>
		
	
	</div><!-- /.container -->
	
</div><!-- /#contentmain -->








<?php
get_footer();
