$(document).ready(function(){
    $(".container").hide();
    $(".nav.navbar-nav > li").click(function(){
        if(!$(this).hasClass("active")){
            $(".active").removeClass("active");
        $(this).addClass("active");
        }

    $(".submenu").hide();
    $(".acquisto").click(function(){
        $(".submenu").show();
    })    
    });

    $(".login").click(function(){
        $(".box-container").addClass("attiva");
        $(".container").show();
        $(".container").addClass("op");
        $(".box-container").removeClass("disattiva");
    })

    $(".btn.glyphicon.glyphicon-remove").click(function(){
        $(".container").hide();
        $(".box-container").removeClass("active");
        $(".box-container").addClass("disattiva");

    })

  
});