// Need update only url and keep &showinfo=0
var videoMarkup = '<iframe src="https://www.youtube.com/embed/lOXje_BxRQM?showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>'

$('.video_play').click(function() {
  $(this).after(videoMarkup);
});
