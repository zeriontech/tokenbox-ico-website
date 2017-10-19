$('[data-tooltip]').click(function() {
  var $tooltip = $(this).find('.tooltip');
  var $body = $('body');

  $tooltip.fadeIn();

  setTimeout(function() {
    $body.css('cursor', 'pointer');

    $(document).on('click.tooltip', function(e) {
      if (e.target == $tooltip[0] || $.contains($tooltip[0], e.target)) return;
      $tooltip.fadeOut();
      $(document).off('.tooltip');
      $body.css('cursor', '')
    });
  }, 0);
});
