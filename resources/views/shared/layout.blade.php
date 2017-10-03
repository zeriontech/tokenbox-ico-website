<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
  <meta charset="UTF-8">

  {!! seo_helper()->render() !!}

  <link rel="shortcut icon" type="image/png" href="/favicon.png">
  <link rel="icon" type="image/png" href="/favicon-144.png" sizes="195x195">
  <link rel="apple-touch-icon" href="/favicon-195.png" sizes="144x144">

  <link rel="stylesheet" href="/assets/front/css/app.css">

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

  <script>
  window.intercomSettings = {
    app_id: "b2wlmg1s"
  };
  </script>
  <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/b2wlmg1s';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K55HGJG" height="0" width="0" style="display:none; visibility:hidden">
    </iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  @yield('content')

  @include('shared/footer')

  <script type="text/javascript" src="/assets/front/js/app.min.js"></script>
</body>
</html>
