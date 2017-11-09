$('.progress').each(function() {
  $.ajax({
    method: 'GET',
    url: 'https://apis.zerion.io/v1/project/',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('zerion-project-id', 500);
    }
  }).then(function(data) {
    console.log(data);
    $('.js-progress-current').text(data.total_funds_raised.toLocaleString());
    $('.progress-target').text();
    $('.progress-bar-current').animate({ width: data.total_funds_raised/2e6 + 1 + '%'});
    $('.founded-money-usd').text();
    
    var btc = (data.total_invested_bitcoin/10e8).toLocaleString();
    $('.founded-money-btc').text(btc);

    var eth = (parseInt(data.total_invested_ethereum)/10e18).toLocaleString();
    $('.founded-money-eth').text(eth);
  })
})

