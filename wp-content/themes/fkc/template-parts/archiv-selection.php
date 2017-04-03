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


$queried_object = get_queried_object();


$slug_this_page = $queried_object->slug;
$additional_class_editorial 	= '';
$additional_class_plakat		= '';
$additional_class_briefmarken 	= '';

if ( $slug_this_page == 'editorial' ) {
	$additional_class_plakat		= 'col-xs-offset-2';
	
} elseif ( $slug_this_page == 'plakat' ) {
	$additional_class_editorial 	= 'col-xs-offset-2';
	
} elseif ( $slug_this_page == 'briefmarken') {
	$additional_class_editorial 	= 'col-xs-offset-2';
}
?>


		
<div class="container archiv-selection category-page">
	
	<div class="row is-hidden-lg">
		<div class="col-xs-12">
			<a href="#"><img class="logo logo-centered l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo"></a>
		</div><!-- /.col -->
	</div><!-- /.row -->
	
	<div class="row">
		
		<?php if ( $slug_this_page != 'editorial' ) : ?>
				<div class="col-xs-4 archiv-selection-col <?php echo $additional_class_editorial; ?>">
					<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
					<a href="<?php echo esc_url( $link_editorial ); ?>">
						<p class="l-center-text l-uppercase vh4">Archiv Editorial</p>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/titelbild-archiv-editorial.jpg" alt="">
							</div><!-- /.col -->
						</div><!-- /.row -->
					</a>
				</div><!-- /.col -->
		<?php endif; ?>
				
		<?php if ( $slug_this_page != 'plakat' ) : ?>
			<div class="col-xs-4 archiv-selection-col <?php echo $additional_class_plakat; ?>">
				<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
				<a href="<?php echo esc_url( $link_plakat ); ?>">
					<p class="l-center-text l-uppercase vh4">Archiv Plakate</p>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/titelbild-archiv-plakat.jpg" alt=""> 
						</div><!-- /.col -->
					</div><!-- /.row -->
				</a>
			</div><!-- /.col -->
		<?php endif; ?>
				
		<?php if ( $slug_this_page != 'briefmarken' ) : ?>		
			<div class="col-xs-4 archiv-selection-col <?php echo $additional_class_briefmarken; ?>">
				<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
				<a href="<?php echo esc_url( $link_briefmarken ); ?>">
					<p class="l-center-text l-uppercase vh4">Archiv Briefmarken</p>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<img class="l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/titelbild-archiv-briefmarken.jpg" alt="">
						</div><!-- /.col -->
					</div><!-- /.row -->
				</a>
			</div><!-- /.col -->
		<?php endif; ?>
	
	</div><!-- /.row -->	
	
</div><!-- /.container .archiv-selection -->
	
