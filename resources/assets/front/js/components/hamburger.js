$(function() {
  var $burger = $('.hamburger-icon');

  $burger.each(function() {
    var hamburger = $(this);

    hamburger.click(function() {
      hamburger.toggleClass('active');

      if (hamburger.hasClass('active')) {
        $('body').css('overflow', 'hidden');
        if (window.iOS()) $.lockBody();
      } else {
        $('body').css('overflow', '');
        if (window.iOS()) $.unlockBody();
      }

      $('.mobile-nav').toggleClass('opened');
      return false;
    });
  });

  var $top = $('.sticky-top');

  new Waypoint.Inview({
    element: $('.topblock')[0],
    enter: function(direction) {
      $top.removeClass('fixed');
    },

    exited: function(direction) {
      $top.toggleClass('fixed', direction == 'down');
    }
  });
});
