$(document).ready(function () {

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
$('#navto li').each(function () {

    // select href
    var href = $(this).find('a').attr('href');

    // Check filename
    if (url == href) {

        // Add active class
        $(this).addClass('active');
    }
});

});

