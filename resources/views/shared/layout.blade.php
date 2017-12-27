<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
  <script type="text/javascript" async src="https://vojs.group-ib.ru/build/main_95_72ae1413_42_91.js"></script>
  <meta charset="UTF-8">

  {!! seo_helper()->render() !!}

  <link rel="shortcut icon" type="image/png" href="/favicon.png">
  <link rel="icon" type="image/png" href="/favicon-144.png" sizes="144x144">
  <link rel="apple-touch-icon" href="/favicon-195.png?a" sizes="195x195">

  <link rel="stylesheet" href="/assets/front/css/app.css?v=33">

  <style>
    .sr-enabled .topblock .fade-in-item {
      visibility: hidden;
    }
  </style>

  <meta name="format-detection" content="telephone=no">

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

  <div class="notification error" style="display: none;"></div>
  @include('shared/alert')  
  @yield('content')

  @include('shared/footer')
  @include('shared/terms')
  @include('shared/privacy')
  @include('shared/wireForm')

  <script type="text/javascript" src="/assets/front/js/vendors.min.js?v=4"></script>
  <script type="text/javascript" src="/assets/front/js/app.min.js?v=27"></script>

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '152745565319731');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=152745565319731&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</body>
</html>
