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
$project_id_array			= array($project_id);
$project_category 			= wp_get_post_categories($project_id);
?>


<!-- CONTENT
===================================================== -->
<div id="contentmain">
	

	<!-- Content section header
    ===================================================== -->
	<div id="content-section-header" class="container">
	
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h1 class="vh1 l-bold l-not-bold-lg"><?php the_title(); ?></h1>
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
								
				<!-- Empty div required by the Masonry plugin -->
				<div class="grid-sizer"></div>
				
				<div class="grid-item grid-item--size2">
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
								<div class="grid-item grid-item--size2">
									<p class="vh5"><?php echo $additional_text; ?></p>
								</div><!-- /.grid-item -->
							<?php elseif ( $kind_of_content == 'pic' ) :
								$additional_image = get_sub_field('additional_image');
								$small_screen_layout = get_sub_field('small_screen_layout'); 
								$additional_layout_class = '';
								if($small_screen_layout == 'span2') { $additional_layout_class = 'grid-item--size2'; }?>
											
								<div class="grid-item <?php echo $additional_layout_class; ?>">
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
    <div id="similar-projects-section">
	
    	<?php
	    $args = array(
		    'post_type'		 => 'projekte',
		    'orderby'		 => 'rand',
		    'posts_per_page' => 3,
		    'cat'			 => $project_category,
		    'post__not_in'	 => $project_id_array
		    
	    );
	    
	    $similar_projects = new WP_Query( $args );
	    
	    if( $similar_projects->have_posts() ) : ?>
	    	
	    	<div class="container">
	    	
	    		<hr>
	    		<p class="vh6">ähnliche Projekte</p>
	    		
	    		<div class="row">
		    		
					<?php // The Loop
				    while ( $similar_projects->have_posts() ) : $similar_projects->the_post();
				    	$feature_image		= get_field('feature_image');
				    	$customer			= get_field('customer');
				    	$project_title		= get_field('project_title'); ?>
				    	
				    	<div class="col-xs-6 col-lg-4">
							<figure class="gallery-item">
								<a href="<?php echo get_permalink();?>" >
									<img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>" >
									<figcaption>
										<h3 class="l-bold vh6"><?php echo $customer; ?></h3>
										<p class="vh6"><?php echo $project_title; ?></p>
									</figcaption>
								</a>
							</figure>
						</div><!-- /.col -->
				    	
				    <?php endwhile; ?>
		    
	    		</div><!-- /.row -->
		    </div><!-- /.container -->
		    
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

    </div><!-- /#similar-projects -->
			
			
			
</div><!-- /#contentmain -->

<?php
get_footer();
