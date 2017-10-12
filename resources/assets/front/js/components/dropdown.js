$('.dropdown .title').click(function () {
  $(this).closest('.dropdown').toggleClass('opened');
});

$('.mobile-nav .dropdown .title', function() {
  $('.mobile-nav').scrollTop(1000)
});
