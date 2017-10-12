$('.js-scroll-nav a[href^="#"]').click(function(){
  var anchor = $(this).attr('href');

  if($('.hamburger-icon').hasClass('active')) {
    setTimeout(function(){
      $('.hamburger-icon').trigger('click');
    }, 300);
  }

  $('html').animate({ scrollTop: $(anchor).offset().top }, 700);

  setTimeout(function(){
    window.location.hash = anchor;
  }, 300);

  return false;
});
