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

      hamburger.next().toggleClass('opened');
      return false;
    });
  });

  var inview = new Waypoint.Inview({
    element: $('.get-notified-top + .big-title')[0],
    enter: function(direction) {
      $burger.toggleClass('fixed', direction == 'down');
    },

    exit: function(direction) {
      $burger.toggleClass('fixed', direction == 'down');
    }
  });
});
