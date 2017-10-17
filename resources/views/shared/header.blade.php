<div class="sticky-top">
  <div class="wrapper">
    <div class="hamburger-icon" id="hamburger-icon">
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </div>
  </div>
</div>

<div class="mobile-nav js-scroll-nav">
  <ul>
    {{ $mobile }}

    <li>
      @include('shared/langSwitcher')
    </li>
  </ul>

  @include('shared/social')
</div>

<div class="wrapper">
  <header class="header">
    <div class="header_logo">
      <a href="/" class="logo">
        <img src="/assets/front/img/logo.svg">
      </a>
    </div>

    {{ $slot }}
  </header>
</div>
