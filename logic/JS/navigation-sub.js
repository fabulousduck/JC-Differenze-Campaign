$(document).ready(function(){
    
    var menuButton = document.querySelector(".menu");
    var navigationSub = document.querySelector(".navigation-sub");
    
    $(menuButton).on('click', function(){
        
        $('show-menu').ready(function(){
            
            $(navigationSub).slideToggle('fast');
            
        });
        
        $(menuButton).toggleClass('show-menu');
        
    });

});