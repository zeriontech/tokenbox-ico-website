$(function() {
  $('.js-bonus').each(function() {
    var items = [
      { end: Date.UTC(2017, 10, 17, 15), bonus: 15 },
      { end: Date.UTC(2017, 10, 20, 15), bonus: 10 },
      { end: Date.UTC(2017, 10, 23, 15), bonus: 5 }
    ];

    var current = null;

    for (var i = 0; i < items.length; i++) {
      var prev = items[i - 1];

      var now = new Date().getTime();

      if (now < items[i].end && !prev) {
        current = items[0];
        continue
      }

      if (now < items[i].end && now > prev.end) {
        current = items[i];
      }
    }

    if (current) {
      $(this).find('.js-value').text(current.bonus);
      $('.topblock_subtitle').inlineCountdown({
        date: current.end
      })
    }
  })
})
