$(document).ready(function() {

  // Ancora
  $('.acr').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 800, 'linear');
  });

  // Fixa menu
	$(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		if (windscroll >= 496) {
			$('nav.mn-desktop').addClass('fixed');
			$('body').css('padding-top','142px');
		} else {
			$('nav.mn-desktop').removeClass('fixed');
			$('body').css('padding-top','0');
		}
	}).scroll();

});