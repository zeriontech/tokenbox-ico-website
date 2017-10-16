$('body').on('shown.modal', function(e, options) {
  var $modal = options.target;

  function hide() {
    $(document).off('off.modal');
    $modal.fadeOut(function() {
      $('html').removeClass('hasModal');
      history.pushState('', document.title, window.location.pathname);
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
  });
});

$('.js-modal-link').click(function() {
  var options = {
    target: $($(this).attr('href'))
  };

  $('body').trigger('shown.modal', options);
});

$(window).on('load', function() {
  if (!location.hash) return;

  var $block = $(location.hash);
  if (!$block.is('.modal')) return;

  var options = {
    target: $block
  };
  $('body').trigger('shown.modal', options);
})
