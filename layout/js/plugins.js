


$(document).ready(function(){
    $('.page').css('min-height', $(window).height());
    $('.cont-us').css('min-height', $(window).height());

		// init SmoothScroll
		var scroll = new SmoothScroll('a[href*="#"]', {

			// Speed & Easing
			speed: 800, // Integer. How fast to complete the scroll in milliseconds
			offset: 200, // Integer or Function returning an integer. How far to offset the       scrolling anchor location in pixels
			easing: 'easeInOutCubic', // Easing pattern to use

		});

		
});
/* Function input is empty  v 1.0 */
function isNotEmpty(caller) {
    "use strict";
    if (caller.val() === '') {
        caller.css('border', '1px solid red');
        return false;
    } else {
        caller.css('border', '');
        return true;
    }
}

/* Function Insert addWebsites  v 1.0 */
function addWebsites(key) {
    "use strict";
    var catId = $("#cat_id");
    var name    = $("#nameWeb");
    var domain  = $("#domain");
    var desc    = $("#description");

    if (isNotEmpty(name) && isNotEmpty(domain) && isNotEmpty(desc)) {

        $.ajax({
            url: 'insertjs.php',
            method: 'POST',
            dataType: 'text',
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: {
                key: key,
                catId: catId.val(),
                name: name.val(),
                domain: domain.val(),
                desc: desc.val()
            }
        }).done(function (response) {
            $('#sweetalert').append(response);
        }).fail(function () {
            alert('Error');
        });
    }
}