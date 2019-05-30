var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if(prevScrollpos > currentScrollPos) {
        document.getElementById("navbar-top").style.top = "0";
    }else{
        document.getElementById("navbar-top").style.top = "-65px";
    }

    prevScrollpos = currentScrollPos;

    if(document.documentElement.scrollTop >= 350) {
        $("#top-button").fadeIn();
        $("nav").addClass("top-navbar-with-scroll");
        $("nav").removeClass("top-navbar");
    }else{
        $("#top-button").fadeOut();
        $("nav").addClass("top-navbar");
        $("nav").removeClass("top-navbar-with-scroll");
    }
};

