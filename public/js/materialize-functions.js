$(document).ready(function(){
    $('.sidenav').sidenav();

    $('.scrollspy').scrollSpy();

    $('input#input_text, textarea#textarea2').characterCounter();

    $('.slider').slider();

    $("#top-button").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
    });

    $('.materialboxed').materialbox();

    $('.dropdown-trigger').dropdown();

    $('.tooltipped').tooltip();

    $('.modal').modal();
});