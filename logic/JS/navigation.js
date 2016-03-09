$(document).ready(function () {

    $(window).scroll(function () {

        var navigationBar = document.querySelector('.menu-wrapper');

        if ($(window).scrollTop() > 700) {
            $(navigationBar).addClass('navigation-fixed');
        }
        if ($(window).scrollTop() < 700) {
            $(navigationBar).removeClass('navigation-fixed');
        }
    });
});