$(document).ready(function() {

  $(window).scroll(function () {
    
    var navigationBar = document.querySelector('.menu-wrapper');
    
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 680) {
      $(navigationBar).addClass('navigation-fixed');
    }
    if ($(window).scrollTop() < 680) {
      $(navigationBar).removeClass('navigation-fixed');
    }
  });
});