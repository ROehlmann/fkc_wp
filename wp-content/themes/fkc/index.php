<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fernkopie_Custom
 */
      


get_header(); ?>

<!-- CONTENT
===================================================== -->
<div id="contentmain">

	<!-- Leistungsspektrum
    ===================================================== -->
	<div id="leistungsspektrum-section">
		<div class="container">
			
			<div class="row">
				<div class="col-xs-8 col-lg-10 col-lg-offset-1">
					<div class="leistungsspektrum">
						<p class="vh1">
							Wir gestalten 
							<a href="">visuelle Identitäten</a>,
							<a href="#0">Informationsmedien</a> und 
							<a href="#0">Schrift im Raum</a>.
						</p>
					</div><!-- /.leistungsspektrum -->
				</div><!-- /.col -->
			</div><!-- /.row -->
			
		</div><!-- /.container -->
	</div><!-- /#leistungsspektrum-section -->



	<!-- Projekte
    ===================================================== -->
	<div id="projectsheader" class="container">
		
		<div class="row">
			<div class="col-xs-8 col-lg-10 col-lg-offset-1">
				<h2 class="vh6">ausgewählte Projekte</h2>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
	</div><!-- /.container -->
		
	<div id="projects-section" class="container">
		<!-- Projektauswahlmatrix -->
		<div class="row">
			
			<div class="col-xs-12 col-lg-6">
				<figure class="gallery-item">
					<a href="projekte-einzel.html">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/light-1-1.jpg">
						<figcaption>
							<h3 class="l-bold vh6">Waldelfen AG</h3>
							<p class="vh6">Waldelfen-Publikation</p>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
			
			<div class="col-xs-12 col-lg-6">
				<figure class="gallery-item">
					<a href="projekte-einzel.html">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/light-2-1.jpg">
						<figcaption>
							<h3 class="l-bold vh6">Verband deutscher Pilzsammler e.V.</h3>
							<p class="vh6">Designer-Pilzkorb</p>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
			
			<div class="col-xs-12 col-lg-6">
				<figure class="gallery-item">
					<a href="projekte-einzel.html">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/light-3-1.jpg">
						<figcaption>
							<h3 class="l-bold vh6">Wiesenfreunde e.V.</h3>
							<p class="vh6">Rasenmähersounddesign</p>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
			
			<div class="col-xs-12 col-lg-6">
				<figure class="gallery-item">
					<a href="projekte-einzel.html">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/light-4.jpg">
						<figcaption>
							<h3 class="l-bold vh6">Straßenfeger gGmbH</h3>
							<p class="vh6">Laub verteilt</p>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
			
			<div class="col-xs-12 col-lg-6">
				<figure class="gallery-item">
					<a href="projekte-einzel.html">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beispielbilder/light-5.jpg">
						<figcaption>
							<h3 class="l-bold vh6">Yorck Kinogruppe GmbH</h3>
							<p class="vh6">Licht gedimmt</p>
						</figcaption>
					</a>
				</figure>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
		<!-- Link zu weiteren Projekten -->
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<p class="vh6"><a href="projekte-all.html">mehr Projekte →</a></p>
			</div><!-- /.col -->
		</div><!-- /.row --> 
		
	</div><!-- /.container -->



	<!-- Philosophie
    ===================================================== -->
	<div id="philosophie-section" class="container">
		
		<div class="row">
			<div class="col-lg-9 col-lg-offset-1">
				<p class="vh2 l-bold">Wir beraten in allen Fragen der Kommunikation und ­gestalten ungewöhnliche und wirkungsvolle Antworten. Wir glauben, 
dass die besten Lösungen an der Schnittstelle von inhaltlicher Auseinandersetzung und zeitgemäßer Umsetzung entstehen.</p>
			</div><!-- /.col -->
		</div><!-- /.row -->
		
	</div><!-- /.container -->



	<!-- E-Publishing
    ===================================================== -->
	<div id="e-publishing-section" class="l-highlighted">

		<div class="container e-publishing">
			
			<div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					
					<div class="e-publishing-header">
						<h2 class="l-center-text vh1">E-Publishing</h2>
						<p class="l-center-text vh6">effizient. zeitgemäß. interaktiv.</p>
					</div><!-- /.e-publishing-header -->
					<div class="e-publishing-img">
						<img class="l-allow-overscaling" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/e-publishing.svg" alt="Ein Bild, das den Prozess zeigt, wie aus einer Print-Datei eine Smartphone-App wird.">			
					</div><!-- /.e-publishing-img -->
				</div><!-- /.col -->
					
				<div class="col-xs-12 col-lg-8 col-lg-offset-2">
					
					<div class="e-publishing-text">
						<p class="l-center-text vh2">Wir erstellen aus Ihren Printprodukten interaktive Erlebnisse für Tablets. Dabei werden vorhandene ­InDesign-Dateien überarbeitet und um neue Dimensionen erweitert, wie z. B. 360°-Ansichten, Hyperlinks, ­Diashows, Audio- und Video-Dateien. Als Ergebnis erhalten Sie eine App für mobile Endgeräte.</p>
					</div><!-- /.e-publishing-text-->
					
					<!-- Für den Moment versteckt, bis die Inhalte stehen. Zum wieder
						 Sichtbar machen einfach "is-hidden" entfernen -->
					<p class="l-center-text vh6 is-hidden"><a class="l-bold" href="#0">mehr erfahren →</a></p>
				</div><!-- /.col -->
			</div><!-- /.row -->
				
		</div><!-- /.container .e-publishing-->
			
	</div><!-- /#e-publishing-section -->




	<!-- Archiv
    ===================================================== -->
	<div id="archiv-selection-section">
	
		<div class="container archiv-selection">
			
			<div class="row">
				<a class="is-hidden-lg" href="#"><img class="logo l-center-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo"></a>
			</div><!-- /.row -->
			
			<div class="row">
				<div class="col-xs-4 archiv-selection-col">
					<img class="logo l-center-img is-displayed-lg" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/fernkopie-logo.jpg" alt="Fernkopie Logo" title="Fernkopie Logo">
					<a href="archiv-category.html">
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
					<a href="archiv-category.html">
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
					<a href="archiv-category.html">
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
	
	</div><!-- /#archiv-selection-section -->
</div><!-- /#contentmain -->

	
<?php
get_footer();
