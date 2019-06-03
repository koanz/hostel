$(window).on("load", function(){
    checkTopPosition();

    function checkTopPosition(){
        var coverElement = $(".cover").height();
        if(document.documentElement.scrollTop >= coverElement){
            $(".nav-brand-logo").addClass("logo-display");
            $(".nav-brand-logo").removeClass("logo-hide");
        }
    }
});

$(document).ready(function(){
    

    $('.sidenav').sidenav();

    $('.scrollspy').scrollSpy();

    //$('.parallax').parallax();

    $('.slider').slider({
        indicators: false
    });

    $("#top-button").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
    });

    $('.materialboxed').materialbox();

    //$('.tooltipped').tooltip();


    $(".sidenav").click(function(){
        var instance = M.Sidenav.getInstance(document.getElementById("mobile"));

        instance.close();
    });
});