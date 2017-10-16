


$(document).ready(function(){
    $('.page').css('min-height', $(window).height());

		// init SmoothScroll
		var scroll = new SmoothScroll('a[href*="#"]', {

			// Speed & Easing
			speed: 800, // Integer. How fast to complete the scroll in milliseconds
			offset: 200, // Integer or Function returning an integer. How far to offset the       scrolling anchor location in pixels
			easing: 'easeInOutCubic', // Easing pattern to use

		});

		// init mix-it-up
		var containerEl = document.querySelector('#container');

		var mixer = mixitup(containerEl, {
		    controls: {
		        toggleDefault: 'none'
		    }
		});

		mixer.toggleOn('.cat-1');
});
