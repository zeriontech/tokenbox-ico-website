$('[data-tooltip]').click(function() {
  var $tooltip = $(this).find('.tooltip');
  $tooltip.fadeIn();

  setTimeout(function() {
    $(document).on('click.tooltip', function(e) {
      if (e.target == $tooltip[0] || $.contains($tooltip[0], e.target)) return;
      $tooltip.fadeOut();
      $(document).off('.tooltip');
    });
  }, 0);
});
