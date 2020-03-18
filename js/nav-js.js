$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {  
      $('nav').removeClass('start');
      $('nav').addClass('finish');
    } else {
      $('nav').removeClass('finish');
      $('nav').addClass('start');
    }
  });