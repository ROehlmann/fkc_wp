jQuery(document).ready(function(){
	
	var initialScreenWidth = $(window).width();
	var screenWidth = initialScreenWidth;
	var minWidthDesktop = 992;
	
	var $dropdownParent = $('.dropdown-unless-desktop').closest('li');
	
	function dropdown(event) {
	event.preventDefault();
	$(this).find(".dropdown").slideToggle();
	}
	
	
	/* Directly after page load */
	/* When page has loaded, decide if navbar-nav should be collapsed or not */
	if( initialScreenWidth >= minWidthDesktop ) {
      	$('#headermain').find('.navbar-nav').removeClass('collapsed');
      
	  	/* Dropdown: Remove dropdown handler from click event on ".dropdown-unless-desktop" items */
		$dropdownParent.off("click", dropdown);
      
      	/* if page is deskop-view, make Home - Philosophie Section: make font-weight normal */
	  	$('#philosophie-section').find('.vh2').removeClass('l-bold');
    } else {
	    /* Dropdown: Bind dropdown handler to click event on ".dropdown-unless-desktop" items */
		$dropdownParent.on("click", dropdown);
    }
	
	
	
	
	/* When resizing */
	/* Show navigation menu (and other changes) when screen size >= 992px */
	$(window).resize(function() {
		var $navbarNav = $('#headermain').find('.navbar-nav');
		
		screenWidth = $(window).width();
		if( screenWidth >= minWidthDesktop ) {
			/* Change navbar from collapsed to expanded state */
			$navbarNav.removeClass('collapsed');
			$navbarNav.removeClass('open');
			
			/* Dropdown: Remove dropdown handler from click event on ".dropdown-unless-desktop" items */
			$dropdownParent.off("click", dropdown);
			
			/* Dropdown: Hide dropdown menus that have been left open while resizing to desktop view */
			$('.dropdown-unless-desktop').hide();
			
			/* Home - Philosophie Section: make font-weight normal */
			$('#philosophie-section').find('.vh2').removeClass('l-bold');
    	} else {
	    	/* Change navbar from expanded to collapsed state */
			$navbarNav.addClass('collapsed');
			
			/* Dropdown: Bind dropdown handler to click event on ".dropdown-unless-desktop" items */
			$dropdownParent.off("click", dropdown); // remove any existing dropdown-handler bound to this element to prevent adding it several times making the dropdown open and close again ang again
			$dropdownParent.on("click", dropdown);
			
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
