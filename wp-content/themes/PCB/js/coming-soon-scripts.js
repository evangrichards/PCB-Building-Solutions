/*
	Home section slideshow
*/
function slideshow() {
    $('#fullscreen-slider li:gt(0)').hide();
    setInterval(function () {
        $('#fullscreen-slider li:first').fadeOut(1600, "linear")
            .next('li').fadeIn(1600, "linear")
            .end().appendTo('#fullscreen-slider');
    }, 3500);
};

// Home section slideshow
slideshow();
