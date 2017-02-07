<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fernkopie_Custom
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


?>


		
<div class="container archiv-selection">
	
	<div class="row">
		<a class="is-hidden-lg" href="#"><img class="logo l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo"></a>
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-xs-4 archiv-selection-col">
			<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
			<a href="<?php echo esc_url( $link_editorial ); ?>">
				<p class="l-center-text l-uppercase vh4">Archiv Editorial</p>
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4">
						<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-1.jpg" alt="">
					</div><!-- /.col -->
				</div><!-- /.row -->
			</a>
		</div><!-- /.col -->
			
		<div class="col-xs-4 archiv-selection-col">
			<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
			<a href="<?php echo esc_url( $link_plakat ); ?>">
				<p class="l-center-text l-uppercase vh4">Archiv Plakate</p>
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4">
						<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-2.jpg" alt="">
					</div><!-- /.col -->
				</div><!-- /.row -->
			</a>
		</div><!-- /.col -->
			
		<div class="col-xs-4 archiv-selection-col">
			<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
			<a href="<?php echo esc_url( $link_briefmarken ); ?>">
				<p class="l-center-text l-uppercase vh4">Archiv Briefmarken</p>
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4">
						<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/belin-3.jpg" alt="">
					</div><!-- /.col -->
				</div><!-- /.row -->
			</a>
		</div><!-- /.col -->
	</div><!-- /.row -->	
	
</div><!-- /.container .archiv-selection -->
	
