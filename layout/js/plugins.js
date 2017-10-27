


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

		// init mix-it-up
		var containerEl = document.querySelector('#container');

		var mixer = mixitup(containerEl, {
		    controls: {
		        toggleDefault: 'none'
		    }
		});

		mixer.toggleOn('.cat-1');

    // nac active class add !!!!!

    // Get current page URL
     var url = window.location.href;

     // select file name
     url = url.substr(url.lastIndexOf("/") + 1);

     // Loop all menu items
     $('#navto li').each(function(){

      // select href
      var href = $(this).find('a').attr('href');

      // Check filename
      if(url == href){

       // Add active class
       $(this).addClass('active');
      }
     });

});

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


function manageData(key) {
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
            data: {
                key: key,
                catId: catId.val(),
                name: name.val(),
                domain: domain.val(),
                desc: desc.val()
            }
        }).done(function (response) {
            alert(response);
        }).fail(function () {
            alert('Error');
        });
    }
}