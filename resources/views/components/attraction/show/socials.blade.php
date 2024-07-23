<div class="flex justify-center items-center gap-2">
    @foreach ($attraction->socials as $social)
        @if ($social->name == 'facebook')
            <a href="{{$social->link}}" target="_blank">
                <x-iconpark-facebook-o class="w-6 scale-hover" />
            </a>
        @endif

        @if ($social->name == 'instagram')
            <a href="{{$social->link}}" target="_blank">
                <x-iconpark-instagram-o class="w-6 scale-hover" />
            </a>
        @endif

        @if ($social->name == 'twitter')
            <a href="{{$social->link}}" target="_blank">
                <x-iconpark-twitter-o class="w-6 scale-hover" />
            </a>
        @endif

        @if ($social->name == 'tiktok')
            <a href="{{$social->link}}" target="_blank">
                <x-iconpark-tiktok-o class="w-6 scale-hover" />
            </a>
        @endif

        @if ($social->name == 'youtube')
            <a href="{{$social->link}}" target="_blank">
                <x-iconpark-youtube-o class="w-6 scale-hover" />
            </a>
        @endif

        @if ($social->name == 'tripadvisor')
            <a href="{{$social->link}}" target="_blank">
                <x-lineawesome-tripadvisor class="w-6 scale-hover"/>
            </a>
        @endif

        @if ($social->name == 'linkedin')
            <a href="{{$social->link}}" target="_blank">
                <x-iconpark-instagramone-o class="w-6 mb-1 scale-hover" />
            </a>
        @endif

        @if ($social->name == 'booking')
            <a href="{{$social->link}}" target="_blank">
                <x-tabler-brand-booking class="w-6 scale-hover"/>
            </a>
        @endif

    @endforeach

  

</div>