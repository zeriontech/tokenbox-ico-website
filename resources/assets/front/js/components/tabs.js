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
