// Need update only url and keep &showinfo=0
var videoMarkup = '<iframe src="https://player.vimeo.com/video/239658386?byline=0&portrait=0&autoplay=1&cc_load_policy=1." frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'

$('.video_play').click(function() {
  $('.video').html(videoMarkup);
});
