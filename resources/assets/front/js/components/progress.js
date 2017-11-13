$('.progress').each(function() {
  $('.progress-bar-current').css('width', $(this).width() + 'px');

  $.ajax({
    method: 'GET',
    url: 'https://apis.zerion.io/v1/project/',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('zerion-project-id', 500);
    }
  }).then(function(data) {
    var total = +data.total_funds_raised + window.icoProgress.total;

    $('.js-progress-current').text(total.toLocaleString());

    var progressBar = total > 1 ? total * 100/20e6 : 1;
    $('.js-progress-bar').animate({ width: progressBar + '%' });

    $('.js-progress-participants').text(data.total_number_of_participants + window.icoProgress.participants);

    $('.founded-money-usd').text(window.icoProgress.usd);

    var btc = (data.total_invested_bitcoin/10e8 + window.icoProgress.btc).toLocaleString();
    $('.founded-money-btc').text(btc);

    var eth = (data.total_invested_ethereum/10e18 + window.icoProgress.eth).toLocaleString();
    $('.founded-money-eth').text(eth);
  })
})

