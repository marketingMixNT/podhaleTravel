<ul>
    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>
