<?php
/*
	Template Name: ePublishing Page
*/

get_header(); 

// Advanced Custom Fields
$title 				= get_field('title');
$subtitle 			= get_field('subtitle');
$contact_us 		= get_field('contact_us');

?>



<!-- CONTENT
===================================================== -->
<div id="contentmain" class="contentmain-epublishing">

	<div class="container">
		
		<!-- ePublishing HEADER
		===================================================== -->
		<div id="epublishing-header" class="row">
			<div class="col-xs-8 col-xs-offset-1">
				<h1 class="vh1 l-bold l-not-bold-md"><?php echo $title; ?></h1>
				<p class="vh2"><?php echo $subtitle; ?></p>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
		
		
		<!-- ePublishing CONTENT
		===================================================== -->
		<?php if( have_rows('content') ): ?>
					
			<?php // loop through the rows of data
			while ( have_rows('content') ) : the_row(); 
				$layout = get_sub_field('layout');
				$pic = get_sub_field('pic');  
				$text = get_sub_field('text'); ?>
				
				<div class="row epublishing-content-row">
						
					<?php if ( $layout == "pic_left") : ?>

						<div class="col-xs-4">
							<?php if ( !empty($pic) ) : ?>
								<img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>">
							<?php endif; ?>
						</div><!-- /.col -->
						
						<div class="col-xs-6">
							<p class="vh2"><?php echo $text; ?></p>
						</div><!-- /.col -->

					<?php elseif ( $layout == "pic_right") : ?>

						<div class="col-xs-5 col-xs-offset-1">
							<p class="vh2"><?php echo $text; ?></p>
						</div><!-- /.col -->
						
						<div class="col-xs-5">
							<?php if ( !empty($pic) ) : ?>
								<img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>">
							<?php endif; ?>
						</div><!-- /.col -->
					
					<?php endif; ?>
					
				</div><!-- /.row -->
					
			<?php endwhile; ?>
			
		<?php endif; ?> 

				
				
		
				
		<!-- ePublishing CONTACT US
		===================================================== -->
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<p class="vh2"><?php echo $contact_us; ?></p>
			</div><!-- /.col -->
		</div><!-- /.row -->		
		
	</div><!-- /.container -->
	
</div><!-- /#contentmain -->

	
<?php
get_footer();
