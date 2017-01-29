jQuery(document).ready(function(){
	
	var initialScreenWidth = $(window).width();
	var minWidthDesktop = 992;
	
	/* Directly after page load */
	/* When page has loaded, decide if navbar-nav should be collapsed or not */
	if( initialScreenWidth >= minWidthDesktop ) {
      	$('#headermain').find('.navbar-nav').removeClass('collapsed');
      
      	/* if page is deskop-view, make Home - Philosophie Section: make font-weight normal */
	  	$('#philosophie-section').find('.vh2').removeClass('l-bold');
    } 
	
	/* When resizing */
	/* Show navigation menu (and other changes) when screen size >= 992px */
	$(window).resize(function() {
		var screenWidth = $(window).width();
		if( screenWidth >= minWidthDesktop ) {
			/* Change navbar from collapsed to expanded state */
			$('#headermain').find('.navbar-nav').removeClass('collapsed');
			$('#headermain').find('.navbar-nav').removeClass('open');
			
			/* Home - Philosophie Section: make font-weight normal */
			$('#philosophie-section').find('.vh2').removeClass('l-bold');
    	} else {
	    	/* Change navbar from expanded to collapsed state */
			$('#headermain').find('.navbar-nav').addClass('collapsed');
			
			/* Home - Philosophie Section: make font-weight bold */
			$('#philosophie-section').find('.vh2').addClass('l-bold');
		}
  	});
  	
  	
	
	/* Open navigation in mobile and tablet view */
	$(".navbar-header").on("click", ".navbar-nav-open", function(){
		$(this).closest("#headermain").find(".navbar-nav").addClass("open");
	});
	
	/* Close navigation in mobile and tablet view */
	$(".navbar-nav").on("click", ".navbar-nav-close", function(){
		$(this).closest(".navbar-nav").removeClass("open");
	});


	/* Scroll to top if "nach oben"-button is clicked */
	$("#footermain").on("click", ".btn-scroll-top", function() {
	    var offsetTop = 0;
		$('html, body').stop().animate({
	  		scrollTop: offsetTop
		}, 300);
  	});

	
});
