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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-grid.min.css">

<!-- Javascript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- HEADER
===================================================== -->
<header id="headermain">
	<div class="container">
		
		<div class="navbar navbar-header">
			<a class="l-pull-left" href="index.html"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo"></a>
			<a role="button" class="l-pull-right is-hidden-md navbar-nav-open" href="#0"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/burger-button.svg" title="Button to open the main navigation menu on mobile devices or tablets"></a>
		</div><!-- /.navbar navbar-header -->
		

	

		<nav class="navbar navbar-nav collapsed">
			<a href="#" role="button" class="is-hidden-md navbar-nav-close l-bold">schließen</a>
			<ul>
				<li><a href="projekte-all.html">Projekte</a></li>
				<li class="is-hidden-md"><a href="#0">visuelle Identitäten</a></li>
				<li class="is-hidden-md"><a href="#0">Informationsmedien</a></li>
				<li class="is-hidden-md"><a href="#0">Schrift im Raum</a></li>
				<li class="is-hidden-md"><a href="#0">ePublish</a></li>
				<li><a href="archiv-all.html">Archiv</a>
					<ul class="dropdown is-hidden">
						<li><a href="#0">Editorial</a></li>
						<li><a href="#0">Plakat</a></li>
						<li><a href="#0">Briefmarken</a></li>
					</ul>
				</li>
				<li><a href="kontakt.html">Info</a></li>
			</ul>
		</nav>
		
	</div><!-- /.container -->

</header>
