$(document).ready(function() {
  setTimeout(function(){
    $('.notification').fadeOut()
  }, 5000);

  var hamburger = $('.hamburger-icon');
  hamburger.click(function() {
    hamburger.toggleClass('active');

    if (hamburger.hasClass('active')) {
      $('body').css('overflow', 'hidden');
    } else {
      $('body').css('overflow', '');
    }

    hamburger.next().toggleClass('opened');
    return false;
  });

  var anchor = window.location.hash;
  if (anchor != "") {
    $('body').animate({
      scrollTop: $(anchor).offset().top}, 700);
  }

  $('a[href^="#"]').click(function(){
    var anchor = $(this).attr('href');

    $('body').animate({
      scrollTop: $(anchor).offset().top}, 700);

    setTimeout(function(){
      window.location.hash = anchor;
    }, 300);

    if($('.hamburger-icon').hasClass('active')) {
      setTimeout(function(){
        $('.hamburger-icon').trigger('click');
      }, 300);
    }

    return false;
  });

  $('.fancy').fancybox();

  $('.slider').slick({
    autoplay: true,
    arrows: false,
    dots: true,
    fade: true,
    speed: 500,
    autoplaySpeed: 7000
  });

  //Dropdown language
  $(".dropdown .title").click(function () {
    $(this).closest('.dropdown').toggleClass("opened");
  });
});
