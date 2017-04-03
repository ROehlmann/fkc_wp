<?php
/*
	Template Name: Info Page
*/

get_header(); 

// Advanced Custom Fields
$text 				= get_field('text');
$company 			= get_field('company');
$contact_details 	= get_field('contact_details');
$email			 	= get_field('email');



$impressum 			= get_field('impressum');
$programmer_name 	= get_field('programmer_name');
$programmer_email 	= get_field('programmer_email');
?>


		
<!-- CONTENT
===================================================== -->
<div id="contentmain">


	
	<!-- Carousel-Section
    ===================================================== -->

		
	<div id="carousel-section" class="container">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('slider') ): ?>
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					<div class="slider">
						
						<?php // loop through the rows of data
						while ( have_rows('slider') ) : the_row(); 
							$slider_pic = get_sub_field('slider_pic'); ?>
							
							<?php if ( !empty($slider_pic) ) : ?>
								<div class="slider-item">
									<a href="#0">
										<img src="<?php echo $slider_pic['url']; ?>" alt="<?php echo $slider_pic['alt']; ?>">
									</a>
								</div><!-- /.slider-item -->
							<?php endif; ?>
			
						<?php endwhile; ?>
					</div><!-- /.slider -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		<?php endif; ?>
	</div><!-- /#carousel-section .container -->	

	
	
	

	<!-- Zwei Spalten -->
	<div class="container">
		<div class="row">
		
			<!-- Text
		    ===================================================== -->
			<?php if ( !empty($text) ) : ?>	
				<div class="col-lg-6 l-pull-right">
					<p class="vh5"><?php echo $text; ?></p>
				</div><!-- /.col -->
			<?php endif; ?>
	
	
			<!-- Team
		    ===================================================== -->
			<?php
			// check if the repeater field has rows of data
			if( have_rows('team') ): ?>
				<div id="team-section" class="col-xs-12 col-lg-6">
					
					<ul class="l-list-no-bullets">	
						<?php 
						// loop through the rows of data
						while ( have_rows('team') ) : the_row(); 
							$name = get_sub_field('name');
							$position = get_sub_field('position');
							$area = get_sub_field('area'); ?>
							
							<li>
							<?php if ( !empty($name) ) : ?>
								<p class="vh5">
									<span class="l-bold"><?php echo $name; ?></span><br>
									<?php if ( !empty($position) ) : ?>
										<?php echo $position; ?><br>
									<?php endif; ?>
									<?php if ( !empty($area) ) : ?>
										<?php echo $area; ?><br>
									<?php endif; ?>
								</p>	
							<?php endif; ?>
							</li>
						<?php endwhile; ?>
					</ul>
					
				</div><!-- /.col -->
			<?php endif; ?>
		
							
			
			<!-- Kontaktinformationen
		    ===================================================== -->
			<div id="address-section" class="col-xs-12 col-lg-6 l-pull-right l-clear-right">
				
				<hr class="is-hidden-lg">
		
				<address class="vh5">
					<span class="l-bold"><?php echo $company; ?></span><br>
					<?php echo $contact_details; ?><br>
					<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
				</address>
				
			</div><!-- /.col -->
		

	</div><!-- /.container -->
	
</div><!-- /#contentmain -->








<?php
get_footer();
