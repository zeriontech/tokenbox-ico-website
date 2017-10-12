(function() {
  if (!$('.countdown').is(':visible')) return;

  var deadline = new Date(2017, 10, 14, 12);

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

  function getMarkup(key, current, text) {
    return '\
      <div class="countdown-item" data-key="' + key + '">\
        <svg viewPort="0 0 0 0" version="1.1" xmlns="http://www.w3.org/2000/svg">\
          <circle class="inner-bar"></circle>\
          <circle class="bar"></circle>\
        </svg>\
        <div class="countdown-item-text">0</div>\
        <div class="countdown-item-label">' + key[0].toUpperCase() + key.slice(1) + '</div>\
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

  function spin($el, to) {
    setTimeout(function() {
      if (+$el.text() != to) {
        $el.text(+$el.text() + 1);
        spin($el, to);
      }
    }, 20)
  }

  function render() {
    var time = getTimeRemaining(deadline);

    var html = items.map(function(key) {
      return getMarkup(key, time[key], key)
    }).join('');

    $('#countdown').html(html);
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

  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));

    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }
})();
