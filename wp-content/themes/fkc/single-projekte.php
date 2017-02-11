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
			
			
			

	<div class="container">
		<div class="row">
			<div class="grid">
				
				<!-- Möglicherweise alles in eine Row packen um das Layout zu erhalten -->
				
				<!-- Empty div required by the Masonry plugin -->
				<div class="grid-sizer"></div>
				
				<div class="grid-item">
					<p class="vh5"><?php echo $description_main; ?></p>
					<p class="vh6"><?php echo $facts_main; ?></p>
				</div><!-- /.grid-item -->
				
				<div class="grid-item project-details-whitespace"></div>
				
				<div id="blue" class="grid-item"></div>
				
				<?php if( have_rows('additional_content') ): ?>
					<?php while ( have_rows('additional_content') ) : the_row();
						$kind_of_content = get_sub_field('kind_of_content'); ?>
							<?php if ( $kind_of_content == 'text') :
								$additional_text = get_sub_field('additional_text'); ?>
								<div class="grid-item">
									<p class="vh5"><?php echo $additional_text; ?></p>
								</div><!-- /.grid-item -->
							<?php elseif ( $kind_of_content == 'pic' ) :
								$additional_image = get_sub_field('additional_image'); ?>
								<div class="grid-item">
									<img src="<?php echo $additional_image['url']; ?>" alt="<?php echo $additional_image['alt']; ?>">
								</div><!-- /.grid-item -->
							<?php endif; ?>		
						
					<?php endwhile; ?>
				
				<?php endif; ?>

<div class="grid-item"><img src="<?php get_stylesheet_directory(); ?>/wp-content/themes/fkc/assets/img/beispielbilder/burdeny-4.jpg"></div>
					
				
				<div id="purple" class="grid-item"></div>
				<div id="green" class="grid-item"></div>
				<div id="yellow" class="grid-item"></div>
				<div id="brown" class="grid-item"></div>
				<div id="pink" class="grid-item"></div>
		
				
			</div><!-- /.grid-->
		</div><!-- /.row -->
	</div><!-- /.container -->

			


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
