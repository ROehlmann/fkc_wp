jQuery(document).ready(function(){
	
	var initialScrollPosition = $(window).scrollTop();
	var scrollPosition = initialScrollPosition;
	
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
	
	
	
	/* Positioning the .start-grand element
	======================================== */

	/* Helper-Function: Calculate the margin of the .container element for the positioning of
	   the .start-grand element */
	   
	   // Parameters: ScreenWidth (sW)
	   // Returns: Margin of the .container element (num)
	   function getContainerMargin(sW) {
			if ( sW < 992 ) {
				return 0;
			}
			else if ( sW >= 992 && sW < 1200 ) {
				return ( ( sW - 970) / 2 );
			} 
			else if ( sW >= 1200 && sW < 1600 ) {
				return ( ( sW - 1170) / 2 );
			}
			else if ( sW >= 1600 ) {
				return ( ( sW - 1440) / 2 );
			}
		}


	/* Positioning-Function: Sets the "left" property of the .start-grand element to the correct value */
	
		/* 	Parameters: screenWidth (sW),
						scrollPosition (sP),
						scrollPositionBreakPoint (sPBP),
						containerPadding (cP),
						logoWidth (lW)
			Returns:	true
		*/
		
		function setLeftForStartGrand(sW, sP, sPBP, cP, lW) {
			var howFarRight = 0;
			var cM = getContainerMargin(sW);
			
			if ( sP > sPBP ) {
				howFarRight = ( cM + cP + lW );
			}
			else {
				howFarRight = ( cM + cP );
				// to account for the .col-lg-offset-1 we need to add the offset-factor multiplied with the container size, here as hard coded values for reasons of simplicity
				if ( sW >= 1200 && sW < 1600 ) {
					howFarRight = ( howFarRight + 97.5 );
				}
				else if ( sW >= 1600 ) {
					howFarRight = ( howFarRight + 120 );
				}
			}
			
			$('.start-grand').css('left', howFarRight);
			return true;
		}
		
		
	/* Set-State-Function: Sets the state of the .start-grand element to grand or small 
		by adding a class depending on the scroll-position */
		
		/* 	Parameters: scrollPosition (sP),
						scrollPositionBreakPoint (sPBP)
			Returns: true
		*/
		
		function setStateForStartGrand(sP, sPBP) {
			if( sP > sPBP ) {
				$('.start-grand').addClass('is-now-small');
				return true;
			} else {
				$('.start-grand').removeClass('is-now-small');
				return true;
			}
		}
		
		
	/* Calling the Positioning-Function and the Set-State-Function in the necessary contexts */
	var containerPadding = 15;
	var logoWidth = 170;
	var scrollPositionBreakPoint = 2;
	
	// After page load:
		if ( $('body').hasClass('page-template-page-home') ) {
			$('.nav-categories').find('p').removeClass('vh6').addClass('start-grand');
			setLeftForStartGrand(screenWidth, scrollPosition, scrollPositionBreakPoint, containerPadding, logoWidth);
			setStateForStartGrand(scrollPosition, scrollPositionBreakPoint);
		}
		
	// When resizing the browser window
		$(window).resize(function() {
			screenWidth = $(window).width();
			if ( $('body').hasClass('page-template-page-home') ) {	
				setLeftForStartGrand(screenWidth, scrollPosition, scrollPositionBreakPoint, containerPadding, logoWidth);
			}
		});
		
	// When scrolling
		$(window).scroll(function() {
			scrollPosition = $(window).scrollTop();
			if ( $('body').hasClass('page-template-page-home') ) {
				setLeftForStartGrand(screenWidth, scrollPosition, scrollPositionBreakPoint, containerPadding, logoWidth);
				setStateForStartGrand(scrollPosition, scrollPositionBreakPoint);
			}
		});
	

	    	
	

	

	

	
	
	

	
		
		
	
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
