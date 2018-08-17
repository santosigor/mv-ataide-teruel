$(document).ready(function() {

  var wdt = $(window).width();

  // Ancora
  $('.acr').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top -140}, 800, 'linear');
  });

  // Fixa menu desktp
	$(window).scroll(function() {
		 	if(wdt > 992) {
			var windscroll = $(window).scrollTop();
			if (windscroll >= 496) {
				$('nav.mn-desktop').addClass('fixed');
				$('body').css('padding-top','142px');
			} else {
				$('nav.mn-desktop').removeClass('fixed');
				$('body').css('padding-top','0');
			}
		}
	}).scroll();

	// menu mobile
	if(wdt < 992) {
	  $('#mn-mobile, .fmb').on('click', function(e) {
	    e.preventDefault();
	    if ($('nav.mn-desktop').hasClass('active')) {
				$('#mn-mobile, nav.mn-desktop').removeClass('active');
			} else {
				$('#mn-mobile, nav.mn-desktop').addClass('active');
			}
	  });
	}

});