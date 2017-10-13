$(function() {
  var $burger = $('.hamburger-icon');

  $burger.each(function() {
    var hamburger = $(this);

    hamburger.click(function() {
      hamburger.toggleClass('active');

      if (hamburger.hasClass('active')) {
        $('body').css('overflow', 'hidden');
      } else {
        $('body').css('overflow', '');
      }

      $('.mobile-nav').toggleClass('opened');
      return false;
    });
  });

  var $top = $('.sticky-top');

  var inview = new Waypoint.Inview({
    element: $('.get-notified-top + .big-title')[0],
    enter: function(direction) {
      $top.toggleClass('fixed', direction == 'down');
    },

    exit: function(direction) {
      $top.toggleClass('fixed', direction == 'down');
    }
  });
});
