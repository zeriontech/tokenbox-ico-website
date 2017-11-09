$(function() {
  $('#mc-embedded-subscribe-form-1').submit(function() {
    dataLayer.push({
      'event': 'custom_event',
      'event_id': 'top',
      'event_name': 'form'
    });

    fbq('track', 'TokenBoxPresaleSignedUp');
  });

  $('#mc-embedded-subscribe-form-2').submit(function() {
    dataLayer.push({
      'event': 'custom_event',
      'event_id': 'middle',
      'event_name': 'form'
    });

    fbq('track', 'TokenBoxPresaleSignedUp');
  });

  $('#mc-embedded-subscribe-form-3').submit(function() {
    dataLayer.push({
      'event': 'custom_event',
      'event_id': 'bottom',
      'event_name': 'form'
    });
    
    fbq('track', 'TokenBoxPresaleSignedUp');
  });

  $('#presale-form').submit(function() {
    dataLayer.push({
      'event': 'custom_event',
      'event_id': 'modal',
      'event_name': 'presale'
    });
    
    fbq('track', 'TokenBoxPresaleSignedUp');
  })
});
