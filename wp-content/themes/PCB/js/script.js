/* Author: By Association Only - http://byassociationonly.com */

$(document).ready(function () {

	// Slider
	$(".rslides").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		prevText: "",
  	nextText: ""
	});

	// Homepage height
  var image_height = $('.slide img').height();
  $('.page-content').css({
      'margin-top': image_height
  });

	// Initiate fade in/out and slight movement on scroll of hero section on homepage
	var $tagline = $('.hero h1');
	var $nav = $('.rslides_nav');
	var $home = $('.hero');
	var $caption = $('.caption');
	var windowScroll;

	// Functional parallaxing calculations
	function slidingTitle() {

		//Get scroll position of window
		windowScroll = $(this).scrollTop();

		//Slow scroll of .art-header-inner scroll and fade it out
		$tagline.css({
			'margin-top' : -(windowScroll/3)-35+"px",
			'opacity' : 1-(windowScroll/550)
		});

		//Slowly parallax the background of #home
		$home.css({
			'margin-top' : (-windowScroll/5)+"px"
		});

		//Fade the .nav out
		$nav.css({
			'margin-top' : -(windowScroll/18)+"px",
			'opacity' : 1-(windowScroll/150)
		});

		$caption.css({
			'margin-top' : -(windowScroll/18)+"px",
			'opacity' : 1-(windowScroll/150)
		});

	}

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {

		// dont run parallax effects

		$tagline.css({
			'position' : 'absolute'
		});

		$nav.css({
			'position' : 'absolute'
		});

		$home.css({
			'background-attachment' : 'scroll'
		});

		$caption.css({
			'background-attachment' : 'scroll'
		});

	} else {

		$(window).scroll(function() {
			slidingTitle();
		});

	}

	// Scroll to
	$('.scrollto').click(function() {
	   var elementClicked = $(this).attr("href");
	   var destination = $(elementClicked).offset().top;
	   $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 800 );
	   return false;
	});

	//Mobile menu
	$('#burger').click(function() {

		if ( $(this).hasClass('close') ) {
		  $('#burger i').removeClass('i-close').addClass('i-menu');
		} else {
			$('#burger i').removeClass('i-close').addClass('i-close');
		}

		$('html').toggleClass('noscroll');
		$(this).toggleClass('close');
		$('.mobile-menu').toggleClass('toggled');
		$('nav').toggleClass('mobile-open');

		return false;

	});

	// Modernizr find replace the logo if SVG isn't supported
	if (!Modernizr.svg) {
	  $(".logo img").attr("src", "../img/logo.png");
	}

	// Placeholder fallback
	if(!Modernizr.input.placeholder){

		$('[placeholder]').focus(function() {
		  var input = $(this);
		  if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		  }
		}).blur(function() {
		  var input = $(this);
		  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		  }
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  $(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
			  input.val('');
			}
		  })
		});

	}

});

// Homepage height
$(window).resize(function () {
  var image_height = $('.slide img').height();
  $('.page-content').css({
      'margin-top': image_height
  });
});
