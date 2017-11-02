


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
    var catId   = $("#cat_id");
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
            $('#alert').append(response);
                name.val('');
                domain.val('');
                desc.val('');
        }).fail(function () {
            alert('Error');
        });
    }
}


/* Function Insert addComment  v 1.0 */
function addComment(key) {
    "use strict";
    var nameCom = $("#nameCom");
    var comment = $("#comment");

    if (isNotEmpty(nameCom) && isNotEmpty(comment)) {

        $.ajax({
            url: 'insertjs.php',
            method: 'POST',
            dataType: 'text',
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: {
                key: key,
                nameCom: nameCom.val(),
                comment: comment.val()
            }
        }).done(function (response) {
            $('#alert').append(response);
                nameCom.val('');
                comment.val('');
        }).fail(function () {
            alert('Error');
        });
    }
}

/* Function Insert addEmail  v 1.0 */
function addEmail(key) {
    "use strict";
    var email = $("#email");
    if (isNotEmpty(email)) {

        $.ajax({
            url: 'insertjs.php',
            method: 'POST',
            dataType: 'text',
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: {
                key: key,
                email: email.val()
            }
        }).done(function (response) {
            $('#alert').append(response);
                email.val('');
        }).fail(function () {
            alert('Error');
        });
    }
}


/* Function Insert addMessage  v 1.0 */
function addMessage(key) {
    "use strict";
    var usEmail = $("#usEmail");
    var theme   = $("#theme");
    var message = $("#message");
    if (isNotEmpty(usEmail) && isNotEmpty(theme) && isNotEmpty(message)) {

        $.ajax({
            url: 'insertjs.php',
            method: 'POST',
            dataType: 'text',
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: {
                key: key,
                usEmail: usEmail.val(),
                theme: theme.val(),
                message: message.val()
            }
        }).done(function (response) {
            $('#alert').append(response);
                usEmail.val('');
                theme.val('');
                message.val('');
        }).fail(function () {
            alert('Error');
        });
    }
}

// loding screen

$(window).on('load',function() {
  $('.sk-folding-cube').fadeOut(1000, function () {
    $(this).parent().fadeOut(1000, function () {
      $('body').css("overflow","auto");
      $(this).remove();
    });
  });
});
