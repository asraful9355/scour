( function( $ ) {

"use strict";

// *** On ready *** //
$( document ).on( "ready" , function() {
	responsiveClasses();
	dataCustomOptions();
	fitVideos();
	scrollProgress();
	fullscreenSection();
	imageBG();
	BGVideoYTPlayer();
	mobileMenu();
	superfishMenu();
	onePageNav();
	stickyNav();
	lightboxIframe();
	lightboxImage();
	lightboxGallery();
	twitterFeed();
	instagramFeed();
	bannerSlider();
	bannerScrollEffect();
	portfolioIsotope();
	portfolioSingleSlider();
	ProjectSingleShare();
	featuredProjectsSlider();
	teamSlider();
	testmonialsSlider();
	clientsSlider();
	sliderImageBG();
	optimizeSliderImageBG();
	contactFormValidation();
});

// *** On load *** //
$( window ).on( "load" , function() {
	websiteLoading();
	sliderImageBG();
	parallaxStellar();
	portfolioSingleExpander();
	contentAnimation();
});

// *** On resize *** //
$( window ).on( "resize" , function() {
	optimizeSliderImageBG();
	responsiveClasses();
	fullscreenSection();
	parallaxStellar();
});

// *** On scroll *** //
$( window ).on( "scroll" , function() {
	scrollProgress();
	bannerScrollEffect();
	stickyNav();
	scrollTopButton();
});

// *** On Scroll In On load *** //
$( window ).on( "load" , function() {
	$( window ).on( "scroll" , function() {
		contentAnimation();
	});
});


// *** jQuery noConflict *** //
var $ = jQuery.noConflict();


// *** General Variables *** //
var $window = $( window ),
	$this = $( this ),
	$body = $( "body" );


// *** Data Custom Options *** //
function dataCustomOptions() {
$("*[data-pattern-overlay-darkness-opacity]").each(function(){var a=$(this).data("pattern-overlay-darkness-opacity");$(this).css("background-color",convertHex("#000000",a))}),$("*[data-pattern-overlay-background-image]").each(function(){"none"==$(this).data("pattern-overlay-background-image")?$(this).css("background-image","none"):"yes"==$(this).data("pattern-overlay-background-image")&&$(this).css("background-image")}),$("*[data-remove-pattern-overlay]").each(function(){"yes"==$(this).data("remove-pattern-overlay")&&$(this).css("background","none")}),$("*[data-bg-color]").each(function(){var a=$(this).data("bg-color");$(this).css("background-color",a)}),$("*[data-bg-color-opacity]").each(function(){var a=$(this).data("bg-color-opacity"),b=$(this).css("background-color"),c=b.replace("rgb","rgba").replace(")",", "+a+")");$(this).css("background-color",c)}),$("*[data-bg-img]").each(function(){var a=$(this).data("bg-img");$(this).css("background-image","url('"+a+"')")}),$("*[data-parallax-bg-img]").each(function(){var a=$(this).data("parallax-bg-img");$(this).css("background-image","url('./images/files/parallax-bg/"+a+"')")});
}


// *** Responsive Classes *** //
function responsiveClasses() {
	var jRes = jRespond([
		{
			label: "smallest",
			enter: 0,
			exit: 479
		},{
			label: "handheld",
			enter: 480,
			exit: 767
		},{
			label: "tablet",
			enter: 768,
			exit: 991
		},{
			label: "laptop",
			enter: 992,
			exit: 1199
		},{
			label: "desktop",
			enter: 1200,
			exit: 10000
		}
	]);
	jRes.addFunc([
		{
			breakpoint: "desktop",
			enter: function() { $body.addClass( "device-lg" ); },
			exit: function() { $body.removeClass( "device-lg" ); }
		},{
			breakpoint: "laptop",
			enter: function() { $body.addClass( "device-md" ); },
			exit: function() { $body.removeClass( "device-md" ); }
		},{
			breakpoint: "tablet",
			enter: function() { $body.addClass( "device-sm" ); },
			exit: function() { $body.removeClass( "device-sm" ); }
		},{
			breakpoint: "handheld",
			enter: function() { $body.addClass( "device-xs" ); },
			exit: function() { $body.removeClass( "device-xs" ); }
		},{
			breakpoint: "smallest",
			enter: function() { $body.addClass( "device-xxs" ); },
			exit: function() { $body.removeClass( "device-xxs" ); }
		}
	]);
}


// *** Content Animation *** //
function contentAnimation() {
$("[class*='anim-']").each(function(a){var b=$(this).offset().top,c=$(this).offset().top+$(this).outerHeight(),d=$(window).scrollTop()+$(window).height(),e=$(this);d>b+$(window).height()/10?setTimeout(function(){e.addClass("anim-fired")},100*a):d+$(this).outerHeight()<c});
}


// *** RTL Case *** //
var HTMLDir = $( "html" ).css( "direction" ),
	owlRtl;

// If page is RTL
if ( HTMLDir == "rtl" ) { 
	// Owl Carousel
	owlRtl = true 
} else { 
	owlRtl = false 
}


// *** Website Loading *** //
function websiteLoading() {
	$( "#website-loading" ).find( ".loader" ).delay( 0 ).fadeOut( 500 );
	$( "#website-loading" ).delay( 600 ).fadeOut( 300 );
}


// *** Fit Videos *** //
function fitVideos() {
	$( "#full-container" ).fitVids();
}


// *** Image Background *** //
function imageBG() {
	$( ".img-bg" ).each(function() {
		var imgSrc = $( this ).find( "img" ).attr( "src" );
		$( this ).css( "background-image", "url('" + imgSrc + "')"  );
		$( this ).find( "img" ).css({ "opacity" : 0 , "visibility" : "hidden" });
	});
}


// *** Fullscreen Section *** //
function fullscreenSection() {
	$( ".fullscreen" ).css( "height", $( window ).height() );
	$( "#banner.fullscreen" ).css( "height", $( window ).height() - $( "#header" ).height() );
}


// *** Scroll Progress *** //
function scrollProgress() {
    var docheight = $(document).height();
    var winheight = $(window).height();
    var height = docheight - winheight;
    var scroll = $(document).scrollTop();
    var scrollperc = scroll/(height/100);
    $("#scroll-progress").width(scrollperc+'%');
    $(".scroll-percent").text(scrollperc.toFixed(0)+'%');	
}


// *** Scroll Top Button *** //
function scrollTopButton() {
	var windowScroll = $( window ).scrollTop();
	if ( $( window ).scrollTop() > 800 ) {
		$( ".scroll-top" ).addClass( "show" );
	} else {
		$( ".scroll-top" ).removeClass( "show" );
	}
}

$( ".scroll-top" ).click( function(e) {
	e.preventDefault();
    $( "html, body" ).animate({
        scrollTop: 0
    }, 1200, "easeInOutExpo" ); //1200 easeInOutExpo
});


// *** Stellar Parallax *** //
function parallaxStellar() {
	$(function() {
		if ( $body.hasClass( "device-lg" ) || $body.hasClass( "device-md" ) || $body.hasClass( "device-sm" ) ) {
			$.stellar({
				horizontalScrolling: false, // don't change this option
				// verticalScrolling: false,
				verticalOffset: 0,
		    	responsive: true, // false
			});
        }
	});
}


// *** Mobile Menu *** //
function mobileMenu() {
	// Cloning Main Menu to Mobile Menu
	$( "#main-menu" ).clone().appendTo( "#mobile-menu" ).removeClass().addClass( "mobile-menu" );
	
	// Cloning Logo and Nav to The Header Sticky
	var logoNavContent = $( ".logo-and-nav" ).html();
	$( "#header-sticky" ).find( ".col-md-12" ).html( logoNavContent );

	$( "#header-sticky #mobile-menu" ).addClass( "mobile-menu-sticky" );

	// For Scroll Purpose
	var mobMenuScroll = document.querySelector( "#mobile-menu" );
	SimpleScrollbar.initEl( mobMenuScroll );

	var mobMenuStickyScroll = document.querySelector( ".mobile-menu-sticky" );
	SimpleScrollbar.initEl( mobMenuStickyScroll );

	// Dropdown
	$( ".mobile-menu" ).superfish({
		popUpSelector: "ul, .megamenu",
		cssArrows: true,
		delay: 300,
		speed: 150,
		speedOut: 150,
		animation: { opacity : "show", height : "show" }, //  , height : "show"
		animationOut: { opacity : "hide", height: "hide" }
	});


	// Toggle Mobile Menu
	$( ".mobile-menu-btn" ).on( "click", function(e) {
		e.preventDefault();
		$( this ).toggleClass( "is-active" );
		$( this ).nextAll( "#mobile-menu" ).stop().slideToggle( 250 );
	});	
}


// *** Dropdown Menu *** //
function superfishMenu() {
	// Firing Superfish plugin
	$( ".main-menu" ).superfish({
		popUpSelector: "ul",
		cssArrows: true,
		delay: 300,
		speed: 100,
		speedOut: 100,
		animation: { opacity : "show" }, //  , height : "show"
		animationOut: { opacity : "hide" }
	});
}

// *** One Page Nav *** //
function onePageNav() {
   	var headerStickyCases = $( "#header-sticky" ).hasClass( "style-1" )
   							|| $( "#header-sticky" ).hasClass( "style-2" )
   							|| $( "#header-sticky" ).hasClass( "style-3" ),
	    offsetDifference = ( ! headerStickyCases ) ? 0 : 75;

	$.scrollIt({
      upKey: false,           
      downKey: false,         
      scrollTime: 0,          
	  activeClass: 'current',
      onPageChange: null,     
	  topOffset: -offsetDifference
	});

    $(  "#main-menu li a" ).on(  "click", function( e ) {
        e.preventDefault();
        var $anchor = $(this);        

        $(  "html, body" ).stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - offsetDifference
        }, 1200, 'easeInOutExpo');

        var classCases = $body.hasClass( "device-md" ) 
        				 || $body.hasClass( "device-sm" ) 
        				 || $body.hasClass( "device-xs" ) 
        				 || $body.hasClass( "device-xxs" );

        if ( classCases ) {
        	$( "#mobile-menu, .mobile-menu-sticky" ).slideUp( 250 );
        	$( ".mobile-menu-btn" ).removeClass( "is-active" );
        }
    });    
}


// *** Sticky Nav *** //
function stickyNav() {
	var headerTopDistance = $( "#header-sticky" ).offset().top,
		windowScroll = $( window ).scrollTop(),
		headerSticky = $( "#header-sticky" ),
		headerStickyHeight = parseInt( $( "#header-sticky" ).height() , 10 ),
		headerHeight = parseInt( $( "#header" ).height() , 10 ),
		bannerHeight = parseInt( $( ".banner-parallax" ).height() , 10 ),
		pageTitleHeight = parseInt( $( "#page-title" ).height() , 10 );

	if ( headerSticky.hasClass( "style-1" ) ) {
		if ( windowScroll > ( bannerHeight - headerStickyHeight - 250 ) || windowScroll > ( pageTitleHeight + headerHeight - 200 ) ) {
			headerSticky.addClass( "sticky" );
		} else {
			headerSticky.removeClass( "sticky" );
		}		
	} else if ( headerSticky.hasClass( "style-2" ) || headerSticky.hasClass( "style-3" ) ) {
		if ( windowScroll > headerSticky.offset().top ) {
			headerSticky.addClass( "sticky" );
		} else {
			headerSticky.removeClass( "sticky" );
		}		
	}
}


// *** Banner Slider *** //
function bannerSlider() {
	var bannerSlider = $( ".banner-slider > .owl-carousel" );
	bannerSlider.owlCarousel({
		items: 1,
		rtl: owlRtl,
		autoplay: true,
		autoplaySpeed: 800, // Sliding autoplay speed
		autoplayTimeout: 4000, // Autoplay interval timeout.
		dragEndSpeed: 600, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: true,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 10, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: true, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        // items : 1
		    },
		    480 : {
		        // items : 2
		    },
		    768 : {
		        // items : 3
		    }
		},
		autoHeight: false,
		autoWidth: false,
		animateOut: 'owl-fadeUp-out',
	    animateIn: 'owl-fadeUp-in',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 600,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 600 // Sliding speed by using dots
	});

bannerSlider.on("translated.owl.carousel",function(a){var b=bannerSlider.find(".owl-item.active .banner-center-box"),c=parseInt(b.children("h1, .description, .btn").css("top"),10);0!=c&&(console.log("It's the next...."),console.log("Same Slide!"),setTimeout(function(){setTimeout(function(){b.children("h1").css("top",100).animate({opacity:1},{duration:400,queue:!1}).animate({top:0},{duration:600,easing:"easeOutExpo"})},0),setTimeout(function(){b.children(".description").css("top",100).animate({opacity:1},{duration:400,queue:!1}).animate({top:0},{duration:600,easing:"easeOutExpo"})},100),setTimeout(function(){b.children(".btn").css("top",100).animate({opacity:1},{duration:400,queue:!1}).animate({top:0},{duration:600,easing:"easeOutExpo"})},200)},150))}),bannerSlider.on("drag.owl.carousel",function(a){bannerSlider.find(".owl-item:not( .active )").find(".banner-center-box > *").animate({opacity:0},150).css("top",1)}),bannerSlider.on("changed.owl.carousel",function(a){bannerSlider.find(".banner-center-box > *").animate({opacity:0},150).css("top",1)}),bannerSlider.on("resized.owl.carousel",function(a){bannerSlider.find(".banner-center-box > *").animate({opacity:1},150)});
}


// *** Banner Scroll Effect *** //
function bannerScrollEffect() {
	var scrollingDistance = $( window ).scrollTop(),
		banHeadVertDistance = $( "#banner" ).height() + $( "#header" ).height();

	if ( $body.hasClass( "device-lg" ) || $body.hasClass( "device-md" ) || $body.hasClass( "device-sm" ) ) {
		// Move Scroll Effect
		// if ( scrollingDistance > 120 ) {

		if ( scrollingDistance < banHeadVertDistance ) {
			$( ".slide-content" )
				.css({ 
					"transform" : "translateY(" + scrollingDistance * 0.15 + "px)"
				});
		}
		// }

		// Opacity Scroll Effect
		if ( scrollingDistance < banHeadVertDistance ) {
			$( ".slide-content" )
				.css({
					"opacity": 1 - ( ( scrollingDistance - 120 ) / 200 )
				});
		}
    }
}


// *** Slider Image BG *** //
function sliderImageBG() {
	$( ".slider-img-bg .owl-item > li" ).each(function() {
		var imgSrc = $( this ).find( ".slide" ).children( "img" ).attr( "src" );
		$( this ).css({
			"background-image" : "url('" + imgSrc + "')",
			"background-color" : "#ccc",
    		"background-position" : "top center",
    		"background-size" : "cover",
    		"background-repeat" : "no-repeat"

		});
	});
}


// *** Optimize Slider Image BG *** //
function optimizeSliderImageBG() {
	$( ".slider-img-bg" ).each( function() {
		var imgHeight = $( this ).closest( "div" ).height();

		if ( $( ".banner-parallax" ).children( ".banner-slider" ).length > 0 ) {
			$( ".banner-parallax" ).height( $( ".banner-slider" ).height() );
		}

		$( this ).find( ".owl-item > li .slide" ).children( "img" ).css({
			"display" : "block",
			"height"  : imgHeight,
			"opacity" : 0
		});
	});
}


// *** Background Videos *** //
function BGVideoYTPlayer() {
	$(".video-background").each( function() {
		$( this ).YTPlayer({
			mute: false,
			autoPlay: true,
			opacity: 1,
			containment: ".video-background",
			showControls: false,
			startAt: 0,
			addRaster: true,
			showYTLogo: false,
			stopMovieOnBlur: false
		});
	});
}


// *** Porfolio Isotope *** //
// Initialize Isotope
var $portfolioIsotope = $( ".portfolio-items" ).isotope({
		itemSelector: ".portfolio-item",
		isResizeBound: true,
		stagger: 0,
		transitionDuration: '0.5s',
		hiddenStyle: {
		  opacity: 0,
		  transform: 'scale(0.009)'
		},
		visibleStyle: {
		  opacity: 1,
		  transform: 'scale(1)'
		}
});
function portfolioIsotope() {	
	$( ".portfolio-categories a" ).on( "click" , function(e) {
		e.preventDefault();
		$( ".portfolio-categories a" ).removeClass( "active" );
		$( this ).addClass( "active" );
		
		var dataFilter = $( this ).data( "filter" );
		$portfolioIsotope.isotope({
			filter: dataFilter
		});
	});


var x=0;$(".loadmore-pi").click(function(a){a.preventDefault();var b=$(this).text(),c=$(this).data("text-loading"),d=$(this).data("text-loading-finished"),e=c?c:"Loading!",f=d?d:"No More!",g=$(".portfolio-items").data("pi-load-file"),h=g?g:"loadmore-portfolio-items.html";$(this).addClass("loading").find("span").text(e),$.ajax({type:"GET",url:h,success:function(a){$(".portfolio-items").waitForImages({finished:function(){console.log(".portfolio-items background image loaded"),setTimeout(function(){$(".loadmore-pi").removeClass("loading").find("span").text(b)},2500),setTimeout(function(){var c,b=$(a).find(".portfolio-item").length;$body.hasClass("device-lg")?c=4:$body.hasClass("device-md")?c=3:$body.hasClass("device-sm")||$body.hasClass("device-xs")?c=2:$body.hasClass("device-xxs")&&(c=1);var d=x+c,e=$(a).find(".portfolio-item").slice(x,d).addClass("loaded").appendTo(".portfolio-items");if(x=x+c<=b?x+c:b,imageBG(),portfolioSingleExpander(),lightboxGallery(),$portfolioIsotope.isotope("appended",e),x>=b)return $(".loadmore-pi").removeClass("colorful").addClass("dark animated shake").text(f),!1},3e3)},waitForAll:!0})}})});
}


// *** Portfolio Single Slider *** //
function portfolioSingleSlider() {
	var portfolioSingleSlider = $( ".portfolio-single-slider > .owl-carousel" );
	portfolioSingleSlider.owlCarousel({
		items: 1,
		rtl: owlRtl,
		autoplay: true,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 3000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: true,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 10, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: false, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        // items : 1
		    },
		    480 : {
		        // items : 2
		    },
		    768 : {
		        // items : 3
		    }
		},
		autoHeight: false,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});

	$( ".portfolio-single-slider .controls" ).find( ".next" ).click( function() {
	    portfolioSingleSlider.trigger('next.owl.carousel');
	})

	$( ".portfolio-single-slider .controls" ).find( ".prev" ).click( function() {
	    portfolioSingleSlider.trigger('prev.owl.carousel');
	})
}

// Portfolio Single Expander
function portfolioSingleExpander() {
!function(){$(".portfolio-item .portfolio-single-link").on("click",function(){$("#portfolio-single-content").removeClass("opened");var c,a=$(window).scrollTop()+75,b=parseInt($(".portfolio-bottom").offset().top,10),d=$("#header-sticky").hasClass("style-1")||$("#header-sticky").hasClass("style-2")||$("#header-sticky").hasClass("style-3"),e=d?75:0;a!==b?($("html, body").animate({scrollTop:$(".portfolio-bottom").offset().top-e},{easing:"easeInOutExpo",duration:1e3}),c=1200):c=0;var f=$(this).find(".open-portfolio-single").attr("href")+" .portfolio-single-load";setTimeout(function(){$("#portfolio-single-wrap").addClass("opened").animate({height:95},0,function(){setTimeout(function(){$(".portfolio-single-loader").addClass("opened"),setTimeout(function(){$("#portfolio-single-content").load(f,function(a){$("#portfolio-single-content").waitForImages({finished:function(){$("#portfolio-single-wrap").removeClass("opened"),$(".portfolio-single-loader").removeClass("opened"),portfolioSingleSlider(),sliderImageBG(),optimizeSliderImageBG(),dataCustomOptions(),setTimeout(function(){$("#portfolio-single-wrap, #portfolio-single-content").height($(".portfolio-single-load").outerHeight()),$("#portfolio-single-content").addClass("opened")},500)},waitForAll:!0})})},1e3)},600)})},c)}),$(document).on("click",".project-close",function(a){var b=$("#header-sticky").hasClass("style-1")||$("#header-sticky").hasClass("style-2")||$("#header-sticky").hasClass("style-3"),c=b?75:0;return $("#portfolio-single-content").removeClass("opened"),$("#portfolio-single-wrap").removeClass("opened"),setTimeout(function(){$("#portfolio-single-wrap").height(0)},500),setTimeout(function(){$(".portfolio-single-load").remove()},500),setTimeout(function(){$("html, body").animate({scrollTop:$(".portfolio-top").offset().top-c},600)},1200),!1})}();
}


// *** Project Single Share *** //
function ProjectSingleShare() {
	$(".social-share").jsSocials({
	    // shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
	    shareIn: "popup",
	    showCount: false,
	    showLabel: false,
	    shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"]
	});	
}


// *** Lightbox Iframe *** //
function lightboxIframe() {
	$( ".lightbox-iframe" ).magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});	
}


// *** Lightbox Image *** //
function lightboxImage() {
	$( ".lightbox-img" ).magnificPopup({
		type: 'image',
		gallery:{
			enabled: false
		},
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});	
}

// *** Lightbox Gallery *** //
function lightboxGallery() {
	$( ".lightbox-gallery" ).magnificPopup({
		type: 'image',
		gallery:{
			enabled: true
		},
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});	
}


// *** Twitter Feed *** //
function twitterFeed() {
	$( ".twitter-feed" ).twittie({
		username: "tutsplus",
		count: 2,
		template: "<div class='tweet-content'>" +
				  	  "<i class='fa fa-twitter'></i>" +
					  "{{tweet}}" +
				  "</div>" +
				  "<a class='tweet-link' href='{{url}}'>Read More</a>"
	} , function() {
		// After loaded.
	});
}


// *** Instagram Feed *** //
function instagramFeed() {
    var feed = new Instafeed({
        userId: 5640046896,
        accessToken: '5640046896.1677ed0.f7cd85767e124a9f9f8d698cb33252a0',
	    get: 'user',
	    resolution: 'thumbnail',
	    template: '<li><a href="{{model.images.standard_resolution.url}}" data-effect="mfp-zoom-in" data-link="{{link}}" data-likes="{{likes}}" data-comments="{{comments}}"><img src="{{image}}"></a></li>',
	    limit: 8, // Number of photo will get from instagram
	    target: 'instagram-feed',
	    after: instagramPopup()
    });
    feed.run();
}

// Lightbox instagram feed widget
function instagramPopup() {
	$( ".instagram-feed" ).magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{
			enabled:true,
			callbacks: {
				beforeOpen: function() {
				// just a hack that adds mfp-anim class to markup
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				this.st.mainClass = this.st.el.attr('data-effect');
				}
			},
			closeOnContentClick: true,
			midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	  	},
		removalDelay: 300, //delay removal by X to allow out-animation
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				// adding page link for images, likes count and comments count
				var likesCount 	  = item.el.attr( "data-likes" ),
					commentsCount = item.el.attr( "data-comments" ),
					imageLink	  = item.el.attr( "data-link" );
				return '<a class="insta-link" href="' + imageLink + '">' +
				     	  "Go to Post Link!" +
				     	  '<i class="fa fa-long-arrow-right"></i>' +
				     '</a>' +
				     '<br><span><i class="fa fa-heart"></i>' + likesCount + '</span>' +
				     '<span><i class="fa fa-comment"></i>' + commentsCount + '</span>';
			}
		},
		callbacks: {
		    beforeOpen: function() {
		      // just a hack that adds mfp-anim class to markup
		      this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
		      this.st.mainClass = this.st.el.attr('data-effect');
		    }
		},
		closeOnContentClick: true,
		midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});
}


// *** Mailchimp Subscribe Form *** //
$( ".signup-form" ).ajaxChimp({
    callback: mailchimpCallback,
    url: "http://themeforest.us12.list-manage.com/subscribe/post?u=271ee03ffa4f5e3888d79125e&amp;id=163f4114e2" //Replace this with your own mailchimp post URL.
});

function mailchimpCallback(resp) {
	// IMPORTANT : The input field must be type="email"
	var $subsMsg = $( ".sf1-notifications" );
    if (resp.result === 'success') {
    	$(".signup-form")[0].reset();
	    $subsMsg.children( ".sf1-notifications-content" ).html( '<i class="sf1-success-icon fa fa-check"></i>' + resp.msg ).addClass( "sent shake animated" ).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        	$(this).removeClass( "shake bounce animated" );
        });
		$subsMsg.css( "opacity", 0 );
	    $subsMsg.slideDown( 300 ).animate({ "opacity" : 1 }, 300 ).delay( 8000 ).slideUp( 400 );
        // $('.subscribe-result').hide().html('<div class="success"><i class="fa fa-check"></i>' + resp.msg + '</div>').slideDown().delay(10000).slideUp();
    }
    else if (resp.result === 'error') {
	    $subsMsg.children( ".sf1-notifications-content" ).html( '<i class="sf1-error-icon fa fa-close"></i>' + resp.msg ).removeClass( "sent" ).addClass( "bounce animated" ).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        	$(this).removeClass( "shake bounce animated" );
        });
		$subsMsg.css( "opacity", 0 );
	    $subsMsg.slideDown( 300 ).animate({ "opacity" : 1 }, 300 );
        // $('.subscribe-result').hide().html('<div class="error"><i class="fa fa-exclamation"></i>' + resp.msg + '</div>').slideDown().delay(10000).slideUp();
    }
}


// *** Featured Projects Slider *** //
function featuredProjectsSlider() {
	var featuredProjectsSlider = $( ".featured-projects-slider > .owl-carousel" );
	featuredProjectsSlider.owlCarousel({
		// items: 3,
		rtl: owlRtl,
		autoplay: false,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 3000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: false,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 30, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: true, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        items : 1
		    },
		    480 : {
		        items : 1
		    },
		    768 : {
		        items : 2
		    },
		    1200 : {
		        items : 3
		    }
		},
		autoHeight: false,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});
}


// *** Team Slider *** //
function teamSlider() {
	var teamSlider = $( ".team-slider > .owl-carousel" );
	teamSlider.owlCarousel({
		// items: 3,
		rtl: owlRtl,
		autoplay: false,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 3000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: false,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 30, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: true, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        items : 1
		    },
		    480 : {
		        items : 1
		    },
		    768 : {
		        items : 2
		    },
		    1200 : {
		        items : 3
		    }
		},
		autoHeight: false,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});
}


// *** Testmonials Slider *** //
function testmonialsSlider() {
	var testmonialsSlider = $( ".testmonials-slider > .owl-carousel" );
	testmonialsSlider.owlCarousel({
		// items: 3,
		rtl: owlRtl,
		autoplay: false,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 3000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: false,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 30, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: true, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        items : 1
		    },
		    480 : {
		        items : 1
		    },
		    768 : {
		        items : 2
		    },
		    1200 : {
		        items : 3
		    }
		},
		autoHeight: false,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});
}


// *** Clients Slider *** //
function clientsSlider() {
	var clientsSlider = $( ".clients-slider > .owl-carousel" );
	clientsSlider.owlCarousel({
		items: 5,
		rtl: owlRtl,
		autoplay: 4000,
		autoplaySpeed: 500, // Sliding autoplay speed
		autoplayTimeout: 3000, // Autoplay interval timeout.
		dragEndSpeed: 400, // Sliding speed by mouse drag
		autoplayHoverPause: true, // Stop autoplay on mouse hover
		loop: true,
		slideBy: 1, // Number of item are slided for each one transition
		margin: 30, // space between each item. Very useful!
		stagePadding: 0, // This used to see part of left an right items as preview style
		nav: false, // show prev and next buttons
		dots: false, // Show dots navigation
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"], // prev and next buttons content
		responsive : {
			0 : {
		        items : 1
		    },
		    480 : {
		        items : 2
		    },
		    768 : {
		        items : 3
		    },
		    992 : {
		        items : 4
		    },
		    1200 : {
		        items : 5
		    }
		},
		autoHeight: false,
		autoWidth: false,
		// animateOut: 'goDownOut',
	    // animateIn: 'goDownIn',
		navRewind: true,
		center: false, // It's used to make the carousel start from the centered item
		dotsEach: 1, // Number of items per dot
		dotData: false,
		lazyLoad: false, // img tag needs class="owl-lazy" and data-src="url-to-img" or/and data-src-retina="url-to-highres-img"
		smartSpeed: 600, // Sliding speed when hover next or prev nav
		fluidSpeed: 5000,
		navSpeed: 400,
		// fallbackEasing: "ease-in-out",
		dotsSpeed: 400 // Sliding speed by using dots
	});
}


// *** Contact Form *** //
function contactFormValidation() {
	$( "#contact-form" ).validate({
		// rules
		rules: {
			cfName: {
				required: true,
				minlength: 3
			},
			cfEmail: {
				required: true,
				email: true
			},
			cfMessage: {
				required: true,
				minlength: 8,
				maxlength: 500
			}
		}
	});

	var errorMsgData = $( ".cf-notifications" ).data( "error-msg" ),
		errorMsgDefault = 'Please Follow Error Messages and Complete as Required',
		errorMsg = ( errorMsgData ) ? ( errorMsgData ) : errorMsgDefault;

	// Submit event
	$( "#contact-form" ).on( "submit" , function( event ) {
	    if ( event.isDefaultPrevented() ) {
		    var errorContent = '<i class="cf-error-icon fa fa-close"></i>' +
		                       errorMsg;
			cfSubmitMSG(false, errorContent);
	        cfError();
	    } else {
	        event.preventDefault();
	        cfSubmitForm();
	    }
	});
}

function cfSubmitForm(){var a=$("#cfName").val(),b=$("#cfEmail").val(),c=$("#cfMessage").val();$.ajax({type:"POST",url:"./php/cf-process.php",data:"cfName="+a+"&cfEmail="+b+"&cfMessage="+c,success:function(a){"success"==a?cfSuccess():(cfError(),cfSubmitMSG(!1,a))}})}function cfSuccess(){var a=$(".cf-notifications").data("success-msg"),b="Thank you for your submission :)",c=a?a:b;$("#contact-form")[0].reset();var d='<i class="cf-success-icon fa fa-check"></i>'+c;cfSubmitMSG(!0,d),$(".cf-notifications-cont").addClass("sent"),$(".cf-notifications").css("opacity",0),$(".cf-notifications").slideDown(300).animate({opacity:1},300).delay(5e3).slideUp(400)}function cfError(){$(".cf-notifications").css("opacity",0),$(".cf-notifications").slideDown(300).animate({opacity:1},300),$(".cf-notifications-cont").removeClass("sent")}function cfSubmitMSG(a,b){var c;c="shake animated",$(".cf-notifications").delay(300).addClass(c).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("shake bounce animated")}),$(".cf-notifications").children(".cf-notifications-cont").html(b)}

} )( jQuery );


function convertHex( hex , opacity ){
	// "use strict";
	// var r, g, b, result;
    hex = hex.replace( '#' , '' );
    r = parseInt( hex.substring( 0 , 2 ) , 16 );
    g = parseInt( hex.substring( 2 , 4 ) , 16 );
    b = parseInt( hex.substring( 4 , 6 ) , 16 );

    result = 'rgba('+r+', '+g+', '+b+', '+opacity+')';
    return result;
}
