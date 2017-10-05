$(document).ready(function() {
  $('.hamburger-icon').each(function() {
    var hamburger = $(this);

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
  });

  $('.js-ajax-form').submit(function() {
    var $form = $(this);
    var $button = $form.find('button');
    var buttonText = $button.text();

    $.ajax({
      url: $form.attr('action'),
      type: $form.attr('method'),
      data: $form.serialize(),
      cache: false,
      dataType: 'json',
      contentType: "application/json; charset=utf-8"
    }).done(function(response) {
      console.log(response)
      if (response.result == 'error') {
        $('.notification.error').text(response.msg).fadeIn();

        setTimeout(function() {
          $('.notification.error').fadeOut();
        }, 3000);

        return $button.html(buttonText);
      }

      $button.html('Check your email...').addClass('button-waiting');
      localStorage.setItem('waitedForm', '#' + $form.attr('id'));
    }).fail(function() {
      $button.html('Error, try later');
    })

    $button.html('<div class="button-loader"></div>');

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

window.addEventListener('storage', function(e) {
  console.log(e);

  if (e.key == 'emailConfirmed') {
    $('.button-waiting')
      .removeClass('button-waiting')
      .text('Thank you')
      .addClass('button-success');
  }
});

$(window).on('load', function() {
  if (location.search.search('confirmed') == -1) return;

  var waitedFormId = localStorage.getItem('waitedForm');
  if (!waitedFormId) return;

  var $form = $(waitedFormId);
  if ($form.length == 0) return;

  var $button = $form.find('.button');

  $button.html('<div class="button-loader"></div>').addClass('button-waiting');

  $('html').animate({
    scrollTop: $form.offset().top - 100
  }, 700, function() {
    setTimeout(function() {
      window.localStorage.setItem('emailConfirmed', true);

      $button
        .removeClass('button-waiting')
        .text('Thank you')
        .addClass('button-success');

    }, 1000);
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
