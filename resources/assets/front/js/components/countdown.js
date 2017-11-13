(function() {
  var getTimeRemaining = window.getTimeRemaining;
  var spin = window.spin;

  var $container = $('#countdown');
  if (!$container[0]) return;

  var deadline = Date.UTC(2017, 10, 14, 12);

  var counts = {
    days: 60,
    hours: 24,
    minutes: 60,
    seconds: 60
  };

  var items = ['days', 'hours', 'minutes', 'seconds'];

  render();

  setTimeout(function() {
    load();
    setInterval(updateCountdown, 1500);
  }, 400);

  function getMarkup(key, label) {
    return '\
      <div class="countdown-item" data-key="' + key + '">\
        <svg viewPort="0 0 0 0" version="1.1" xmlns="http://www.w3.org/2000/svg">\
          <circle class="inner-bar"></circle>\
          <circle class="bar"></circle>\
        </svg>\
        <div class="countdown-item-text">0</div>\
        <div class="countdown-item-label">' + label + '</div>\
      </div>\
    '
  }

  function load() {
    var time = getTimeRemaining(deadline);

    $('.countdown-item').each(function() {
      var $circle = $(this).find('.bar');
      var $text = $(this).find('.countdown-item-text');

      var key = $(this).data('key');
      var current = time[key];

      var r = parseInt($circle.css('r'));
      var c = Math.PI*(r*2);
      var pct = (current/counts[key] + 0.01)*c;
      $circle.css({ strokeDashoffset: 0.01 });

      spin($text, current);

      $circle.animate({ strokeDashoffset: pct }, 1000, function() {
        $(this).addClass('loaded');
      });
    });
  }

  function render() {
    var time = getTimeRemaining(deadline);
    var options = $container.data();

    var html = items.map(function(key) {
      var label = options[key + 'Label'] || (key[0].toUpperCase() + key.slice(1));
      return getMarkup(key, label)
    }).join('');

    $container.html(html);
  }

  function updateCountdown() {
    var time = getTimeRemaining(deadline);

    $('.countdown-item').each(function() {
      var key = $(this).data('key');
      var current = time[key];
      var $circle = $(this).find('.bar');

      var r = parseInt($circle.css('r'), 10);
      var c = Math.PI*(r*2);
      var pct = (current/counts[key] + 0.01)*c;

      $circle.css({ strokeDashoffset: pct });

      var $text = $(this).find('.countdown-item-text');
      $text.text(current);

      if ($text.text() != current) {
        $text.addClass('-hidden');

        setTimeout(function() {
          $text.removeClass('-hidden');
        }, 200);
      }
    });
  }
})();
