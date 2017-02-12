jQuery(document).ready(function(){
	
	var initialScreenWidth = $(window).width();
	var screenWidth = initialScreenWidth;
	var minWidthDesktop = 992;
	
	/* Indicate in Navigation which page we are on */
	if ( $('body').hasClass('post-type-archive-projekte') ) {
		$('.nav-item-projekte').addClass('is-active');
	} else if ( $('body').hasClass('post-type-archive-archiv') ) {
		$('.nav-item-archiv').addClass('is-active');
	} else if ( $('body').hasClass('page-template-page-info') ) {
		$('.nav-item-info').addClass('is-active');
	} else if ( $('body').hasClass('category-visuelle-identitaeten') ) {
		// $('.nav-item-projekte').addClass('is-active');
		$('.nav-item-identitaeten').addClass('is-active');
	} else if ( $('body').hasClass('category-informationsmedien') ) {
		// $('.nav-item-projekte').addClass('is-active');
		$('.nav-item-informationsmedien').addClass('is-active');
	} else if ( $('body').hasClass('category-schrift-im-raum') ) {
		// $('.nav-item-projekte').addClass('is-active');
		$('.nav-item-schrift').addClass('is-active');
	} else if ( $('body').hasClass('category-editorial') ) {
		// $('.nav-item-archiv').addClass('is-active');
		$('.nav-item-editorial').addClass('is-active');
	} else if ( $('body').hasClass('category-plakat') ) {
		// $('.nav-item-archiv').addClass('is-active');
		$('.nav-item-plakat').addClass('is-active');
	} else if ( $('body').hasClass('category-briefmarken') ) {
		// $('.nav-item-archiv').addClass('is-active');
		$('.nav-item-briefmarken').addClass('is-active');
	}


	
	
	
	/* Function for the dropdown menu */
	var $dropdownParent = $('.dropdown-unless-desktop').closest('li').children('a');
	function dropdown(event) {
		event.preventDefault();
		$(this).closest('li').find(".dropdown").slideToggle();
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
	
	/* Initialize Masonry Layout */
	$('.grid').masonry({
		// options
		columnWidth: '.grid-sizer',
		itemSelector: '.grid-item',
		percentPosition: true,
		originLeft: false
	});
	/* layout Masonry after each image loads */
		$('.grid').imagesLoaded().progress( function() {
		$('.grid').masonry('layout');
	});
	
	
	/* Initialize Slick Slider for class "Slider"*/
	$('.slider').slick({
		dots: true,
		prevArrow: "<img class='slider-button-prev' src='/wp-content/themes/fkc/assets/img/slider-button-prev.svg'>",
		nextArrow: "<img class='slider-button-next' src='/wp-content/themes/fkc/assets/img/slider-button-next.svg'>"
	});

	
		
	
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
