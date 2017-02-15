<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fernkopie_Custom
 */
 
 $page_name = get_query_var('pagename');

?>

<div id="minheight"></div>
<!-- FOOTER
===================================================== -->
<footer id="footermain" class="l-highlighted">
    <div class="container">
	    <?php if( $page_name == 'info' ) : ?>
	    	<?php $id_impressum = get_page_by_title( 'impressum' );
		    	  $url_impressum = get_permalink($id_impressum); ?>
	    	<p class="l-pull-left"><a class="vh7 l-bold" href="<?php echo $url_impressum; ?>">Impressum</a></p>
	    
	    <?php else : ?>
	    	<p class="l-pull-left"><a class="vh7 l-bold" href="#0">→ instagram</a></p>
	    	
	    <?php endif; ?>
	    <p class="l-pull-right"><a class="vh7 l-bold btn-scroll-top" href="#">nach oben</a></p>
    </div><!-- /.container -->
</footer>



<!-- SCRIPTS
===================================================== -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>



<!-- Script for Imagesloaded -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Script for Masonry Layout -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/masonry/masonry.pkgd.min.js"></script>
<!-- Script for Slick Slider -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/slick/slick.min.js"></script>
<!-- Script for Lightbox2 -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!-- Script initializing Lightbox2 with options -->
<script>
    lightbox.option({
      'disableScrolling': true,
      'albumLabel':	'Bild %1 von %2'
    })
</script>



<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

	
<?php wp_footer(); ?>

</div><!-- /#page-wrap -->
</body>
</html>
