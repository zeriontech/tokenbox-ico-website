$('.progress').each(function() {
  updateProgress();
  setInterval(updateProgress, 30000);
})

function updateProgress() {
  $('.progress-bar-current').css('width', $(this).width() + 'px');

  $.ajax({
    method: 'GET',
    url: 'https://apis.zerion.io/v1/project/',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('zerion-project-id', 42001);
    }
  }).then(function(data) {
    var total = +data.total_funds_raised + window.icoProgress.total;
    var target = total < 10e6 ? 10e6 : 20e6;
    var $label = $('.js-progress-target-label');
    $label.text($label.data(total > 10e6 ? 'final-title' : 'third-title'));

    // $('.js-progress-target').text(target.toLocaleString('en'));

    $('.js-progress-current').text(total.toLocaleString('en'));

    // var progressBar = total > 1 ? total * 100/target : 1;
    // $('.js-progress-bar').css({ width: progressBar + '%' });

    $('.js-progress-participants').text(data.total_number_of_participants + window.icoProgress.participants);

    $('.founded-money-usd').text(window.icoProgress.usd.toLocaleString('en'));

    var btc = (data.total_invested_bitcoin/10e7 + window.icoProgress.btc).toLocaleString('en');
    $('.founded-money-btc').text(btc);

    var eth = (data.total_invested_ethereum/10e17 + window.icoProgress.eth).toLocaleString('en');
    $('.founded-money-eth').text(eth);
  })
}
