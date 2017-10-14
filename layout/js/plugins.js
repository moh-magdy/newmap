var scroll = new SmoothScroll('a[href*="#"]', {

	// Speed & Easing
	speed: 800, // Integer. How fast to complete the scroll in milliseconds
	offset: 200, // Integer or Function returning an integer. How far to offset the       scrolling anchor location in pixels
	easing: 'easeInOutCubic', // Easing pattern to use

});
var containerEl = document.querySelector('#container');


var mixer = mixitup(containerEl, {
    controls: {
        toggleDefault: 'none'
    }
});

mixer.toggleOn('.green')
    .then(function() {
        // Deactivate all active toggles

        
    })
    .then(function(state) {
         console.log(state.activeFilter.selector); // 'none'
         console.log(state.totalShow); // 0
    });
