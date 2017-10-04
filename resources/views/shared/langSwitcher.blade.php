<div class="dropdown">
  <div class="title">
    {{ LaravelLocalization::getSupportedLocales()[LaravelLocalization::getCurrentLocale()]['native'] }}
  </div>

   <ul class="lang dropdown-menu">
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          @if (LaravelLocalization::getCurrentLocale() !== $localeCode)
        <li>
          <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
              {{ $properties['native'] }}
          </a>
        </li>
       @endif
      @endforeach
   </ul>
</div>
