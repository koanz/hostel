$(document).ready(function(){
    $('.sidenav').sidenav();

    $('.scrollspy').scrollSpy();

    $('.slider').slider();

    $("#top-button").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
    });

    $('.materialboxed').materialbox();

    $(".sidenav").click(function(){
        var instance = M.Sidenav.getInstance(document.getElementById("mobile"));

        instance.close();
    });
});