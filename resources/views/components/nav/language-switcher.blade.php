@props(['class' => ''])

<ul class="{{ $class }} flex justify-center items-center gap-4">
    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" class="link-hover text-sm"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ strtoupper($localeCode) }}
            </a>
        </li>
    @endforeach
</ul>
