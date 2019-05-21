window.onscroll = function() {
    scrollFunction()
};


function scrollFunction() {
    if (document.body.scrollTop > 350 || document.documentElement.scrollTop >= 350) {
        $("#top-button").fadeIn();
        $("nav").addClass("top-navbar-with-scroll");
        $("nav").removeClass("top-navbar");
    } else {
        $("#top-button").fadeOut();
        $("nav").addClass("top-navbar");
        $("nav").removeClass("top-navbar-with-scroll");
    }
}