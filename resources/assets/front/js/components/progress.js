$('.progress').each(function() {
  $('.progress-bar-current').css('width', $(this).width() + 'px');

  $.ajax({
    method: 'GET',
    url: 'https://apis.zerion.io/v1/project/',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('zerion-project-id', 500);
    }
  }).then(function(data) {
    var total = data.total_funds_raised + window.icoProgress.total;

    $('.js-progress-current').text(total.toLocaleString());
    
    $('.js-progress-bar').animate({ width: total/2e6 + 1 + '%'});
    
    $('.founded-money-usd').text(window.icoProgress.usd);
    
    var btc = (data.total_invested_bitcoin/10e8).toLocaleString();
    $('.founded-money-btc').text(btc + window.icoProgress.btc);

    var eth = (parseInt(data.total_invested_ethereum)/10e18).toLocaleString();
    $('.founded-money-eth').text(eth + window.icoProgress.eth);
  })
})

