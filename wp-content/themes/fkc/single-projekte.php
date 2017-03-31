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
				<h1 class="vh1 l-bold l-not-bold-md"><?php the_title(); ?></h1>
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
				<div class="col-xs-10 col-xs-offset-1">
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
				
				<div class="grid-item project-details-whitespace is-displayed-lg"></div>
				
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
							
							<!-- ADDTIONAL CONTENT: SLIDER -->	
							<?php elseif ( $kind_of_content == 'slider' ):
								
								if( have_rows('additional_slider_first_project') ): ?>
									<!-- closing the masonry-grid for the slider -->
										</div><!-- /.grid-->
									</div><!-- /.row -->
									
									<!-- opening a standard bootstrap 1-colum row for the slider -->
									<div class="row">
										<div class="col-xs-10 col-xs-offset-1">
									
										<div class="slider">
											<?php while ( have_rows('additional_slider_first_project') ) : the_row(); 
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
										
									<!-- closing the standard bootstrap 1-column row after the slider -->
										</div><!-- /.col-xs-10.col-xs-offset-1 -->
									</div><!-- /.row -->
										
									<!-- reopening a masonry-grid after the slider-->
									<div class="row">
										<div class="grid">
											<!-- Empty div required by the Masonry plugin -->
											<div class="grid-sizer"></div>
								
								<?php endif; ?>
								<!-- ENDE ADDTIONAL CONTENT: SLIDER -->
								
							<?php endif; ?>	
						
					<?php endwhile; ?>
				
				<?php endif; ?>
		
				
			</div><!-- /.grid-->
		</div><!-- /.row -->
		
		<?php if ( have_rows('more_projects_this_customer') ) : ?>
			<?php while ( have_rows('more_projects_this_customer') ) : the_row(); ?>
			
				<?php $more_subheader = get_sub_field('more_subheader');
				if( !empty($more_subheader) ) : ?>
					<div class="row">
						<div class="col-xs-8 col-lg-10 col-lg-offset-1">
							<p class="vh2"><?php echo $more_subheader; ?></p>
						</div><!-- /.col -->
					</div><!-- /.row -->	
				<?php endif; ?>
			
				<?php if ( have_rows('more_slider') ) : ?>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="slider">
								
								<?php while( have_rows('more_slider') ) : the_row();
								$more_slider_pic = get_sub_field('more_slider_pic'); ?>
								
									<?php if ( !empty($more_slider_pic) ) : ?>
										<div class="slider-item">
											<a href="#0">
												<img src="<?php echo $more_slider_pic['url']; ?>" alt="<?php echo $more_slider_pic['alt']; ?>">
											</a>
										</div><!-- /.slider-item -->
									<?php endif; ?>
					
								<?php endwhile; ?>
							</div><!-- /.slider -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				<?php endif; ?> 
				
				<div class="row">
					<div class="grid">
										
						<!-- Empty div required by the Masonry plugin -->
						<div class="grid-sizer"></div>
				
						<?php 
						$more_description_main = get_sub_field('more_description_main');
						$more_facts_main = get_sub_field('more_facts_main');
						if ( !empty($more_description_main) || !empty($more_facts_main) ) : ?>
						
							<div class="grid-item grid-item--size2">
								<?php if ( !empty($more_description_main) ) : ?>
									<p class="vh5"><?php echo $more_description_main; ?></p>
								<?php endif; ?>
								<?php if ( !empty($more_facts_main) ) : ?>
									<p class="vh6"><?php echo $more_facts_main; ?></p>
								<?php endif; ?>
							</div><!-- /.grid-item -->
							
							<div class="grid-item project-details-whitespace is-displayed-lg"></div>
							
						<?php endif; ?>
						
						
						
						<?php if( have_rows('more_additional_content') ): ?>
							<?php while ( have_rows('more_additional_content') ) : the_row();
								$more_kind_of_content = get_sub_field('more_kind_of_content'); ?>
								
								<?php if ( $more_kind_of_content == 'text') :
									$more_additional_text = get_sub_field('more_additional_text'); ?>
									<div class="grid-item grid-item--size2">
										<p class="vh5"><?php echo $more_additional_text; ?></p>
									</div><!-- /.grid-item -->
									
								<?php elseif ( $more_kind_of_content == 'pic' ) :
									$more_additional_image = get_sub_field('more_additional_image');
									$more_small_screen_layout = get_sub_field('more_small_screen_layout'); 
									$additional_layout_class = '';
									if($more_small_screen_layout == 'span2') { $additional_layout_class = 'grid-item--size2'; }?>
												
									<div class="grid-item <?php echo $additional_layout_class; ?>">
										<img src="<?php echo $more_additional_image['url']; ?>" alt="<?php echo $more_additional_image['alt']; ?>">
									</div><!-- /.grid-item -->
									
									
								<!-- ADDTIONAL CONTENT: SLIDER -->	
								<?php elseif ( $more_kind_of_content == 'slider' ) : ?>
									<?php if( have_rows('additional_slider_extra_projects') ): ?>
										<!-- closing the masonry-grid for the slider -->
											</div><!-- /.grid-->
										</div><!-- /.row -->
										
										<!-- opening a standard bootstrap 1-colum row for the slider -->
										<div class="row">
											<div class="col-xs-10 col-xs-offset-1">
										
											<div class="slider">
												<?php while ( have_rows('additional_slider_extra_projects') ) : the_row(); 
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
											
										<!-- closing the standard bootstrap 1-column row after the slider -->
											</div><!-- /.col-xs-10.col-xs-offset-1 -->
										</div><!-- /.row -->
											
										<!-- reopening a masonry-grid after the slider-->
										<div class="row">
											<div class="grid">
												<!-- Empty div required by the Masonry plugin -->
												<div class="grid-sizer"></div>
									
									<?php endif; ?>
									<!-- ENDE ADDTIONAL CONTENT: SLIDER -->	
							
							
								<?php endif; ?>		
						
							<?php endwhile; ?>
				
						<?php endif; ?>

					</div><!-- /.grid -->
				</div><!-- /.row -->

			<?php endwhile; ?>
		<?php endif; ?>	
		
					
				
				
				
		
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
				    	$pic_for_similar_projects_section		= get_field('pic_for_similar_projects_section');
				    	$customer								= get_field('customer');
				    	$project_title							= get_field('project_title'); ?>
				    	
				    	<div class="col-xs-6 col-lg-4">
							<figure class="gallery-item">
								<a href="<?php echo get_permalink();?>" >
									<img src="<?php echo $pic_for_similar_projects_section['url']; ?>" alt="<?php echo $pic_for_similar_projects_section['alt']; ?>" >
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
