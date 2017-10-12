$('.js-ajax-form').submit(function() {
  var $form = $(this);
  var $button = $form.find('button');
  var buttonText = $button.text();

  $.ajax({
    url: $form.data('extra-action'),
    type: $form.attr('method'),
    data: $form.serialize()
  });

  $.ajax({
    url: $form.attr('action'),
    type: $form.attr('method'),
    data: $form.serialize(),
    cache: false,
    dataType: 'json',
    contentType: "application/json; charset=utf-8"
  }).done(function(response) {
    if (response.result == 'error') {
      $('.notification.error').html(response.msg).fadeIn();

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

$(window).on('load', function() {
  if (location.search.search('confirmed') == -1) return;

  var waitedFormId = localStorage.getItem('waitedForm');
  if (!waitedFormId) return;

  var $form = $(waitedFormId);
  if ($form.length == 0) return;

  if ($form.is(':hidden') && $form.closest('.modal').length) {
    $('body').trigger('shown.modal', { target: $form.closest('.modal')});
  }

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
