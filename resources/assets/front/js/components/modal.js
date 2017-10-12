$('body').on('shown.modal', function(e, options) {
  var $modal = options.target;

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
  });
});

$('.js-modal-link').click(function() {
  var options = {
    target: $($(this).data('target'))
  };

  $('body').trigger('shown.modal', options);
  return false;
});
