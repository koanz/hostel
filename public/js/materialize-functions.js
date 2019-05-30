$(document).ready(function(){
    $('.sidenav').sidenav();

    $('.scrollspy').scrollSpy();

    $('.slider').slider({
        indicators: false
    });

    $("#top-button").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
    });

    $('.materialboxed').materialbox();

    $('.tooltipped').tooltip();

    $(".sidenav").click(function(){
        var instance = M.Sidenav.getInstance(document.getElementById("mobile"));

        instance.close();
    });
});