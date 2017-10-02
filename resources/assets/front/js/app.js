$(document).ready(function() {
  var hamburger = $('.hamburger-icon');
  hamburger.click(function() {
    hamburger.toggleClass('active');

    if (hamburger.hasClass('active')) {
      $('html, body').css('overflow', 'hidden');
    } else {
      $('html, body').css('overflow', '');
    }

    hamburger.next().toggleClass('opened');
    return false;
  });

  $('.js-modal-link').click(function() {
    var $modal = $($(this).data('target'));

    function hide() {
      $(document).off('off.modal');
      $modal.fadeOut(function() {
        $('html').removeClass('hasModal');
      });
    }

    $('html').addClass('hasModal');
    $modal.fadeIn();
    $(window).scroll();

    $(document).on('keyup.modal', function(e) {
      if (e.keyCode == 27) {
        hide();
      }
    });

    $(document).one('click', '.modal-overlay', function() {
      hide();
    })

    return false;
  })

  $('.js-tabs').each(function() {
    var $items = $(this).find('.js-tab');

    $(this).find('.tabs a').click(function(e) {
      $items.hide();
      $($(this).attr('href')).fadeIn(600);
      $(this).siblings().removeClass('current');
      $(this).addClass('current');

      return false
    })
  });

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

(function() {
  if (!$('.countdown').is(':visible')) return;

  var deadline = new Date(2017, 9, 24, 12);

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
    var c = Math.PI*(67*2);
    var offset = 0; // (current/counts[key] + 0.01)*c;

    return '\
      <div class="countdown-item" data-key="' + key + '">\
        <svg width="144" height="144" viewPort="0 0 0 0" version="1.1" xmlns="http://www.w3.org/2000/svg">\
          <circle r="67" cx="72" cy="72" fill="transparent" stroke-dasharray="420.97" stroke-dashoffset="0"></circle>\
          <circle class="bar" r="67" cx="72" cy="72" fill="transparent" stroke-dasharray="420.97" style="stroke-dashoffset:' + offset + '"></circle>\
        </svg>\
        <div class="countdown-item-text">0</div>\
        <div class="countdown-item-label">' + key[0].toUpperCase() + key.slice(1) + '</div>\
      </div>\
    '
  }

  function load() {
    var time = getTimeRemaining(deadline);

    $('.countdown-item').each(function() {
      var key = $(this).data('key');
      var current = time[key];
      var $circle = $(this).find('.bar');

      var r = $circle.attr('r');
      var c = Math.PI*(r*2);
      var pct = (current/counts[key] + 0.01)*c;
      $circle.css({ strokeDashoffset: 0.01 });
      var $text = $(this).find('.countdown-item-text');

      spin($text, current);

      $circle.animate({ strokeDashoffset: pct }, 1000, function() {
        $(this).addClass('loaded');
      });
    })
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

      var r = $circle.attr('r');
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
    })
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
