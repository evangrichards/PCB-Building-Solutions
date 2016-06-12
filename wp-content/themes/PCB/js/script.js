/* Author: By Association Only - http://byassociationonly.com */

$(document).ready(function () {

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
