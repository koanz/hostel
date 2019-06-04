window.onload = function() {
    var coverElement = $(".cover").height();

    if(document.documentElement.scrollTop >= coverElement){
        $(".nav-brand-logo").addClass("logo-display");
        $(".nav-brand-logo").removeClass("logo-hide");
    }
}