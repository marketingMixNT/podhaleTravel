@props(['attraction'])

<div class="flex flex-col group gap-3 ">
    <a wire:navigate href="{{ route('attraction.show', $attraction->slug) }}">
        {{-- IMG & CATEGORIES --}}
        <div class="overflow-hidden relative">
            {{-- img --}}
            <div class="overflow-hidden">
                <img src="{{ $attraction->getThumbnailUrl() }}"
                    alt="zdjęcie przedstawiające podhalańską atrakcję - {{ $attraction->name }}"
                    class="aspect-wideo object-cover h-[400px] scale-hover w-full" width="635" height="400"
                    loading="lazy">
            </div>
            {{-- categories --}}
            <div class="flex justify-start items-center mt-6  gap-y-3 flex-wrap">

                @foreach ($attraction->categories as $category)
                    <x-base.badge class="mr-4" wire:navigate
                        href="{{ route('attraction.index', ['category' => $category->slug]) }}">{{ $category->getFormatName() }}</x-base.badge>
                @endforeach
            </div>
        </div>
        {{-- CONTENT --}}
        <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row justify-between items-start sm:items-end lg:items-start 2xl:items-center px-2 py-4 gap-8 xl:gap-x-4 ">

            <div class="flex flex-col justify-between items-start gap-2">
                <h2 class="text-3xl font-medium">{{ $attraction->name }}</h2>
                <div>
                    <span class="text-sm">{{ $attraction->address }}</span>
                    <span class="text-sm">{{ $attraction->city->getFormatName() }}</span>
                </div>
                {{-- <span class="text-sm">od <span class="text-lg">{{ $apartment->price }}</span> zł</span> --}}

            </div>
            <div class=" xl:self-end mb-3"><x-base.link-btn type="secondary"
                    href="{{ route('attraction.show', $attraction->slug) }}">Sprawdź</x-base.link-btn></div>
        </div>
    </a>
</div>
