$(document).ready(function(){
    var prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        var coverElement = $(".cover").height();

        if(prevScrollpos > currentScrollPos) {
            document.getElementById("navbar-top").style.top = "0";
        }else{
            document.getElementById("navbar-top").style.top = "-65px";
        }

        prevScrollpos = currentScrollPos;
        if(document.documentElement.scrollTop >= coverElement) {
            $("#top-button").fadeIn();
            $(".nav-brand-logo").addClass("logo-display");
            $(".nav-brand-logo").removeClass("logo-hide");
        }else{
            $("#top-button").fadeOut();
            if(document.documentElement.scrollTop == 0){
                $(".nav-brand-logo").addClass("logo-hide");
                $(".nav-brand-logo").removeClass("logo-display");
            }
        }
    };
});


