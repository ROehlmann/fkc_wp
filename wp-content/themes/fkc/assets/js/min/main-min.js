jQuery(document).ready(function(){function o(o){o.preventDefault(),$(this).find(".dropdown").slideToggle()}var n=$(window).width(),e=n,a=992,s=$(".dropdown-unless-desktop").closest("li");n>=a?($("#headermain").find(".navbar-nav").removeClass("collapsed"),s.off("click",o),$("#philosophie-section").find(".vh2").removeClass("l-bold")):s.on("click",o),$(window).resize(function(){var n=$("#headermain").find(".navbar-nav");e=$(window).width(),e>=a?(n.removeClass("collapsed"),n.removeClass("open"),s.off("click",o),$(".dropdown-unless-desktop").hide(),$("#philosophie-section").find(".vh2").removeClass("l-bold")):(n.addClass("collapsed"),s.off("click",o),s.on("click",o),$("#philosophie-section").find(".vh2").addClass("l-bold"))}),$(".navbar-header").on("click",".navbar-nav-open",function(){$(this).closest("#headermain").find(".navbar-nav").addClass("open")}),$(".navbar-nav").on("click",".navbar-nav-close",function(){$(this).closest(".navbar-nav").removeClass("open")}),$("#footermain").on("click",".btn-scroll-top",function(){var o=0;$("html, body").stop().animate({scrollTop:o},300)})});