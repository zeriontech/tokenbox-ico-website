<div class="dropdown">
  <div class="title">
    {{ LaravelLocalization::getSupportedLocales()[LaravelLocalization::getCurrentLocale()]['native'] }}
  </div>

   <ul class="lang dropdown-menu">
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
          <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                  {{ $properties['native'] }}
          </a>
        </li>
      @endforeach
   </ul>
</div>
