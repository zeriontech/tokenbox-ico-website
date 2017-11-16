$('.dropdown .title').click(function () {
  console.log('1')
  $(this).closest('.dropdown').toggleClass('opened');
});

$('.mobile-nav .dropdown .title').click(function() {
  if (!$(this).closest('.dropdown').hasClass('opened')) return
  $('.mobile-nav').animate({ scrollTop: $(this).offset().top }, 700);
});
