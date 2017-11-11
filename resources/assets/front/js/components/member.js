$('.member .overlay').hover(function() {
  $(this).addClass('active');
}, function() {
  $(this).removeClass('active')
});

$('.member .overlay').on('tap', function() {
  $(this).addClass('active');
});