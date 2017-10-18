window.addEventListener('storage', function(e) {
  if (e.key == 'emailConfirmed') {
    $('.button-waiting')
      .removeClass('button-waiting')
      .text('Thank you')
      .addClass('button-success');
  }
});

$(function() {
  var $phoneInput = $('input[type="tel"]');

  $('input[type="tel"]').on('input', function() {
    var val = $.trim($(this).val());
    if (!val || val.length != 1 || val == '+') return;
    $(this).val('+' + val);
  });

  $phoneInput.intlTelInput({
    autoPlaceholder: 'off'
  });

  $phoneInput.on("countrychange", function(e, countryData) {
    var val = $.trim($(this).val());
    if (val && val.indexOf('+') == 0) return
    var newVal = '+' + countryData.dialCode + ' ' + val;
    $(this).val(newVal);
  });
});

