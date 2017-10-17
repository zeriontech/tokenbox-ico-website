window.addEventListener('storage', function(e) {
  if (e.key == 'emailConfirmed') {
    $('.button-waiting')
      .removeClass('button-waiting')
      .text('Thank you')
      .addClass('button-success');
  }
});


$('input[type="tel"]').intlTelInput();
