<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
  <meta charset="UTF-8">
  <title>{{__('Tokenbox — Unique ecosystem for crypto investors, traders and funds')}}</title>
  <meta name="description" content="">
  <meta itemprop="description" content=""/>
  <link rel="stylesheet" href="assets/front/css/app.css" />
  <meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
  <link rel="icon" type="image/png" href="/favicon-144.png" sizes="195x195">
  <link rel="apple-touch-icon" href="/favicon-195.png" sizes="144x144">

  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

  <script type="text/javascript">
    window.sr = ScrollReveal({
      opacity: 0,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
      distance: 0,
      viewFactor: 0.4,
      scale: 1,
      duration: 1200,
      mobile: false,
      rotate: { x: 0, y: 0, z: 0 }
    });

    if (!sr.tools.isMobile()) {
      document.documentElement.classList.add('sr-enabled')
    }
  </script>

  <style>
    .sr-enabled body > section:not(.topblock) {
      /*overflow-x: hidden;*/
    }

    .sr-enabled .topblock .fade-in-item {
      visibility: hidden;
    }
  </style>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K55HGJG');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K55HGJG"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

      @yield('content')

<footer class="footer">
<div class="wrapper">
<div class="title from-bottom">{{__('Learn more and stay tuned!')}}</div>
<div class="footer-social">
<a href="https://www.facebook.com/Tokenbox/" class="link facebook" target="_blank"><span class="fa fa-facebook-square"></span></a>
<a href="https://t.me/Tokenbox" class="link telegram" target="_blank"><span class="fa fa-telegram"></span></a>
<a href="https://twitter.com/tokenbox" class="link twitter" target="_blank"><span class="fa fa-twitter-square"></span></a>
<!--<a href="http://tokenbox.slack.com" class="link slack" target="_blank"><span class="fa fa-slack"></span></a>-->
<a href="mailto:support@tokenbox.io" class="link email"><span class="fa fa-envelope-o"></span></a>
<a href="https://www.linkedin.com/company-beta/11217933/" class="link linkedin" target="_blank"><span class="fa fa-linkedin-square"></span></a>
<a href="https://www.reddit.com/r/tokenbox/" class="link reddit" target="_blank"><span class="fa fa-reddit-square"></span></a>
<a href="https://github.com/zeriontech/tokenbox-ico-website" class="link github" target="_blank"><span class="fa fa-github-square"></span></a>
<a href="https://medium.com/tokenbox" class="link medium" target="_blank"><span class="fa fa-medium"></span></a>
</div>
<div class="copy">
<div class="logo"></div>
<a href="">{{__('Terms & Conditions')}}</a>
<a href="">{{__('User Privacy')}}</a>
</div>
</div>
</footer>

<script type="text/javascript" src="assets/front/js/app.min.js"></script>

<script type="text/javascript">
$(function(){
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
var ww = ( $(window).width() < window.screen.width ) ? $(window).width() : window.screen.width; //get proper width
var mw = 400; // min width of site
var ratio =  ww / mw; //calculate ratio
if( ww < mw){ //smaller than minimum size
$('#Viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
}else{ //regular size
$('#Viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
}
}
});
</script>

<script>
if (!sr.tools.isMobile()) {
sr.reveal('.from-bottom', {
distance: '-50px',
origin: 'top'
})
sr.reveal('.topblock .fade-in-item', { viewFactor: 0 }, 100)
// sr.reveal('.countdown', { viewFactor: 0 }, 100)
sr.reveal('.technology .fade-in-item', { viewFactor: 0 }, 100)
sr.reveal('.get-notified');
sr.reveal('.invest-in-pro');
sr.reveal('.pay-with');
sr.reveal('.become-legal');
sr.reveal('.trading-app');
sr.reveal('.issue');
sr.reveal('.big-title');
sr.reveal('.send-request');
sr.reveal('.roadmap .top');
sr.reveal('.technology');
sr.reveal('.team .member', {
distance: '-50px',
origin: 'top'
}, 100);
sr.reveal('.advisors .member', {
distance: '-50px',
origin: 'top'
}, 100);
sr.reveal('.pay-with-screen', {
distance: '50px'
}, 150)
sr.reveal('.multi-crypto');
sr.reveal('.media');
sr.reveal('.footer');
// sr.reveal('.milestone');
sr.reveal('.footer-social .link', 50)
sr.reveal('.background-icon', {
scale: 0.1,
easing: 'ease-in-out'
});
sr.reveal('.fade-in-left', {
distance: '50px',
origin: 'left'
});
sr.reveal('.fade-in-right', {
distance: '50px',
origin: 'right'
});
}
</script>

<script type="text/javascript">
$('#mc-embedded-subscribe-form-1').submit(function() {
dataLayer.push({
'event': 'custom_event',
'event_id': 'top',
'event_name': 'form'
});
});

$('#mc-embedded-subscribe-form-2').submit(function() {
dataLayer.push({
'event': 'custom_event',
'event_id': 'middle',
'event_name': 'form'
});
});

$('#mc-embedded-subscribe-form-3').submit(function() {
dataLayer.push({
'event': 'custom_event',
'event_id': 'bottom',
'event_name': 'form'
});
});
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45667677 = new Ya.Metrika({ id:45667677, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45667677" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<!-- Google Analytics counter -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-104912862-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics counter -->

<!-- Zerion Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '498450943826426'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=498450943826426&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
