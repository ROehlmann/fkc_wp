<?php
/**
 * The template for displaying all single posts of the category "Projekte".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fernkopie_Custom
 */

/*
	Template Name: Single Project Page
*/

get_header();
// Advanced Custom Fields

// Field group "Einzelprojekt"
$subheader					= get_field('subheader');
$description_main			= get_field('description_main');
$facts_main					= get_field('facts_main');




$project_id 				= get_the_ID();
?>


<!-- CONTENT
===================================================== -->
<div id="contentmain">
	

	<!-- Content section header
    ===================================================== -->
	<div id="content-section-header" class="container">
		
	
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold"><?php the_title(); ?></h1>
				<?php if ( !empty($subheader) ) : ?>
					<p class="vh2"><?php echo $subheader; ?></p>
				<?php endif; ?>
			</div><!-- /.col -->
		</div><!-- /.row -->	
			
	</div><!-- /#content-section-header .container -->
	
	
	
	<!-- Carousel-Section
    ===================================================== -->
	<div id="carousel-section" class="container">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('slider') ): ?>
			<div class="row">
				<div class="col-xs-12">
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
			
			
			
	<!-- Text und Bilder im Wechsel (3 Arten, so wie ich das sehe)
    ===================================================== -->
	<div id="project-details-section" class="container">
		
		<div class="project-details">
			<div class="row">
				
				<div class="col-xs-12 col-lg-6">
					<div class="project-details-whitespace"></div>
				</div><!-- /.col -->
				
				<!-- Projektbeschreibung (lang) -->
				<?php if ( !empty($description_main) ) : ?>
					<div class="col-xs-12 col-lg-6 l-pull-right">
						<div class="project-details-main-info">
							<!-- <div class="row"> -->
								<!-- <div class="col-lg-10 col-lg-offset-2"> -->
									<p class="vh5"><?php echo $description_main; ?></p>
								<!-- </div><!-- /.div --> 
							<!-- </div><!-- /.row -->
							
							<!-- Aufzählung Fakten -->
							<?php if ( !empty($facts_main) ) : ?>
								<p class="vh6"><?php echo $facts_main; ?></p>
							<?php endif; ?>
						</div><!-- /.project-details-main-info -->
					</div><!-- /.col -->
				<?php endif; ?>

			
				<!-- Weitere Inhalte -->
				<?php
				// check if the repeater field has rows of data
				if( have_rows('additional_content') ): ?>
					<div class="project-details-side-info">
					
						<?php // loop through the rows of data
						while ( have_rows('additional_content') ) : the_row(); 
							$which_column 		= get_sub_field('which_column');
							$column_class 		= "l-pull-left l-clear-left";
							if( $which_column == 'right' )
								{ $column_class = "l-pull-right l-clear-right";} 
								
							$kind_of_content 	= get_sub_field('kind_of_content'); ?>
							
							<!-- if image -->
							<?php if ( $kind_of_content == 'pic' ) : 
								$additional_image = get_sub_field('additional_image'); ?>
								
								<?php if ( !empty($additional_image) ) : ?>
									<div class="col-xs-6 project-details-side-info-pic <?php echo $column_class; ?>">
										<img src="<?php echo $additional_image['url']; ?>" alt="<?php echo $additional_image['alt']; ?>" >
									</div><!-- /.col .project-details-side-info-pic -->
								<?php endif; ?>

							<!-- if text -->	
							<?php elseif ( $kind_of_content == 'text' ) : 
								$additional_text = get_sub_field('additional_text'); 
								$text_offset = get_sub_field('text_offset'); ?>
								
								
								
								<?php if ( !empty($additional_text) ) : ?>
									<?php if ( $which_column == 'left' && $text_offset == true ): ?>
										<div class="col-xs-5 col-xs-offset-1 project-details-side-info-pic <?php echo $column_class; ?>">
									<?php else : ?>
										<div class="col-xs-6 project-details-side-info-pic <?php echo $column_class; ?>">
									<?php endif; ?>
											<p><?php echo $additional_text; ?>
										</div><!-- /.col .project-details-side-info-pic -->
								<?php endif; ?>
							
							<?php endif; ?>
			
						<?php endwhile; ?>
					</div><!-- /.project-details-side-info -->
				<?php endif; ?>

				
			</div><!-- /.row -->
		</div><!-- /.project-details -->
		
	</div><!-- /#project-info-section .container -->
			


	<!-- Ähnliche Projekte
    ===================================================== -->
	<div class="container">
		<hr>
		<p class="vh6">ähnliche Projekte</p>
		<div class="row">
			<div class="col-xs-6 col-lg-4">
				<figure class="gallery-item vh6">
					<a href="projekte-einzel.html">
						<img src="img/beispielbilder/combo-2.jpg">
						<figcaption>
							<h3 class="l-bold">Guitar Street</h3>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
			
			<div class="col-xs-6 col-lg-4">
				<figure class="gallery-item vh6">
					<a href="projekte-einzel.html">
						<img src="img/beispielbilder/combo-3.jpg">
						<figcaption>
							<h3 class="l-bold">Royal Scottish Railway Services</h3>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
			
			<div class="col-xs-6 col-lg-4 is-displayed-lg">
				<figure class="gallery-item vh6">
					<a href="projekte-einzel.html">
						<img src="img/beispielbilder/combo-1.jpg">
						<figcaption>
							<h3 class="l-bold">Extravagant Flowerpots Inc.</h3>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
		</div><!-- /.row -->

	</div><!-- /.container -->			


			
</div><!-- /#contentmain -->

<?php
get_footer();
