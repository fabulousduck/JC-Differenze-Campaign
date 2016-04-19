$(window).scroll(function(){
  var navigation = $('.navigation'),
      scroll = $(window).scrollTop();
      scrollBottom = navigation.offset().top;
      windowHeight = $(window).height();

  if (scroll >= scrollBottom){ 
      
      navigation.addClass('fixed');
      
  }
  
  if (scrollBottom < windowHeight){
      
      navigation.removeClass('fixed');
  }

});