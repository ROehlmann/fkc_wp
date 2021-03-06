<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fernkopie_Custom
 */
 
 	// Collect the Category-links for use in the navigation menu
	
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Visuelle Identitäten' );
    // Get the URL of this category
    $link_vis_ident = get_category_link( $category_id );
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Informationsmedien' );
    // Get the URL of this category
    $link_info_med = get_category_link( $category_id );  
    
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Schrift im Raum' );
    // Get the URL of this category
    $link_schrift_raum = get_category_link( $category_id );  
    
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
    
    // Get the link to the ePublishing page
    $epublishing_page_object = get_page_by_title( 'ePublishing' );
	$epublishing_page_link = get_page_link($epublishing_page_object->ID);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-grid.min.css">
<!-- slick slider basic styles -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/slick/slick.css"/>
<!-- slick slider theme styles -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/slick/slick-theme.css"/>
<!-- lightbox2 styles -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/lightbox2/css/lightbox.min.css"/>


<!-- Javascript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script>document.addEventListener("touchstart", function(){}, true);</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		
	
<!-- Necessary for sticky footer -->
<div id="page-wrap">

<!-- HEADER
===================================================== -->
<header id="headermain">
	<div class="container">
		
		
		
		<!-- NAVBAR HEADER
		===================================================== -->
		<div class="navbar navbar-header">
			
			<!-- NAVBAR BRAND -->
			<div class="navbar-left l-pull-left">
				<a class="l-pull-left" href="<?php echo get_home_url(); ?>">
					<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.png" alt="Fernkopie Logo" title="Fernkopie Logo">
				</a>
				<nav class="nav-categories l-pull-left is-displayed-md">
					<p class="vh6">
						Wir gestalten 
						<a class="nav-item-identitaeten" href="<?php echo esc_url( $link_vis_ident ); ?>">visuelle Identitäten</a>,
						<a class="nav-item-informationsmedien" href="<?php echo esc_url( $link_info_med ); ?>">Informationsmedien</a> und 
						<a class="nav-item-schrift"href="<?php echo esc_url( $link_schrift_raum ); ?>">Schrift im Raum</a>.
					</p>
				</nav>
			</div><!-- /.navbar-left -->
			
			
			<!-- NAVBAR BURGER-BUTTON -->
			<a role="button" class="l-pull-right is-hidden-md navbar-nav-open" href="#0">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/burger-button.svg" title="Button to open the main navigation menu on mobile devices or tablets">
			</a>
			
		</div><!-- /.navbar navbar-header -->
		
		

		<!-- NAVBAR NAVIGATION MENU
		===================================================== -->
		<nav class="navbar navbar-nav collapsed">
			<a href="#" role="button" class="is-hidden-md navbar-nav-close l-bold">
				schließen
			</a>
			
			<ul>
				<li>
					<a class="nav-item-projekte" href="<?php echo get_post_type_archive_link( 'projekte' ); ?>">
						Projekte
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a class="nav-item-identitaeten" href="<?php echo esc_url( $link_vis_ident ); ?>">
						visuelle Identitäten
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a class="nav-item-informationsmedien" href="<?php echo esc_url( $link_info_med ); ?>">
						Informationsmedien
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a class="nav-item-schrift" href="<?php echo esc_url( $link_schrift_raum); ?>">
						Schrift im Raum
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a class="nav-item-epublish" href="<?php echo $epublishing_page_link; ?>">
						ePublish
					</a>
				</li>
				
				<li>
					<a class="nav-item-archiv" href="<?php echo get_post_type_archive_link( 'archiv' ); ?>">
						Archiv
					</a>
					
					<ul class="dropdown dropdown-unless-desktop">
						<li>
							<a class="nav-item-editorial" href="<?php echo esc_url( $link_editorial ); ?>">
								Editorial
							</a>
						</li>
						
						<li>
							<a class="nav-item-plakat" href="<?php echo esc_url( $link_plakat ); ?>">
								Plakat
							</a>
						</li>
						
						<li>
							<a class="nav-item-briefmarken" href="<?php echo esc_url( $link_briefmarken ); ?>">
								Briefmarken
							</a>
						</li>
					</ul>
					
				</li>
				
				<li>
					<a class="nav-item-info" href="<?php echo get_page_link(50); ?>">
						Info
					</a>
				</li>
					
			</ul>
		</nav>
		
	</div><!-- /.container -->

</header>
