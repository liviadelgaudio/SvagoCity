$(document).ready(function(){
    $(".nav.navbar-nav > li").click(function(){
        if(!$(this).hasClass("active")){
            $(".active").removeClass("active");
        $(this).addClass("active");
        }
        
    });
});