jQuery(document).ready(function(){function e(e){e.preventDefault(),$(this).find(".dropdown").slideToggle()}var o=$(window).width(),n=o,s=992,i=$(".dropdown-unless-desktop").closest("li");o>=s?($("#headermain").find(".navbar-nav").removeClass("collapsed"),i.off("click",e),$("#philosophie-section").find(".vh2").removeClass("l-bold")):i.on("click",e),$(".grid").masonry({columnWidth:".grid-sizer",itemSelector:".grid-item",percentPosition:!0,originLeft:!1}),$(".grid").imagesLoaded().progress(function(){$(".grid").masonry("layout")}),$(".slider").slick({dots:!0,prevArrow:"<img class='slider-button-prev' src='/wp-content/themes/fkc/assets/img/slider-button-prev.svg'>",nextArrow:"<img class='slider-button-next' src='/wp-content/themes/fkc/assets/img/slider-button-next.svg'>"}),$(window).resize(function(){var o=$("#headermain").find(".navbar-nav");n=$(window).width(),n>=s?(o.removeClass("collapsed"),o.removeClass("open"),i.off("click",e),$(".dropdown-unless-desktop").hide(),$("#philosophie-section").find(".vh2").removeClass("l-bold")):(o.addClass("collapsed"),i.off("click",e),i.on("click",e),$("#philosophie-section").find(".vh2").addClass("l-bold"))}),$(".navbar-header").on("click",".navbar-nav-open",function(){$(this).closest("#headermain").find(".navbar-nav").addClass("open")}),$(".navbar-nav").on("click",".navbar-nav-close",function(){$(this).closest(".navbar-nav").removeClass("open")}),$("#footermain").on("click",".btn-scroll-top",function(){var e=0;$("html, body").stop().animate({scrollTop:e},300)})});