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

?><!DOCTYPE html>
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
<!-- featherlight styles -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/featherlight/featherlight.css"/>


<!-- Javascript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

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
			<a class="l-pull-left" href="<?php echo get_home_url(); ?>">
				<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
			</a>
			
			
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
					<a href="<?php echo get_post_type_archive_link( 'projekte' ); ?>">
						Projekte
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a href="<?php echo esc_url( $link_vis_ident ); ?>">
						visuelle Identitäten
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a href="<?php echo esc_url( $link_info_med ); ?>">
						Informationsmedien
					</a>
				</li>
				
				<li class="is-hidden-md">
					<a href="<?php echo esc_url( $link_schrift_raum); ?>">
						Schrift im Raum
					</a>
				</li>
				
				<!-- Für den Moment versteckt, bis die Inhalte stehen. Zum wieder
					 Sichtbar machen einfach "is-hidden" durch "is-hidden-md" ersetzen -->
				<li class="is-hidden">
					<a href="#0">
						ePublish
					</a>
				</li>
				
				<li>
					<a href="<?php echo get_post_type_archive_link( 'archiv' ); ?>">
						Archiv
					</a>
					
					<ul class="dropdown dropdown-unless-desktop">
						<li>
							<a href="<?php echo esc_url( $link_editorial ); ?>">
								Editorial
							</a>
						</li>
						
						<li>
							<a href="<?php echo esc_url( $link_plakat ); ?>">
								Plakat
							</a>
						</li>
						
						<li>
							<a href="<?php echo esc_url( $link_briefmarken ); ?>">
								Briefmarken
							</a>
						</li>
					</ul>
					
				</li>
				
				<li>
					<a href="<?php echo get_page_link(50); ?>">
						Info
					</a>
				</li>
					
			</ul>
		</nav>
		
	</div><!-- /.container -->

</header>
