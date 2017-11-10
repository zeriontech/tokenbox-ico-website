$('.video_play').click(function() {
  var $video = $(this).closest('.video');
  var $embed = $('<iframe frameborder="0" allowfullscreen></iframe>');
  $embed.attr('src', $video.data('url') + '?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1');
  $video.html($embed);
});
