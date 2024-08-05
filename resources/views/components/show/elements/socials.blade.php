{{-- @if ($item->socials->count() > 0) --}}
    <div class="flex flex-col justify-start items-start gap-2 ">
        <h2 class="font-bold">Social Media</h2>
        <x-show.elements.social-list :item="$item" />
    </div>
{{-- @endif --}}
