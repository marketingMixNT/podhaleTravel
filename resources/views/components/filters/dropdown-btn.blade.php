@props(['class' => '', 'id' => '', 'title' => ''])


<div>


    <button data-dropdown-toggle="{{ $id }}"
        class="duration-500 hover:shadow-xl px-6 py-2  inline-flex items-center rounded-full  {{ $class }}"
        type="button">{{ $title }}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" aria-label="Wybierz tag"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="{{ $id }}"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-bgDark-400">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="przycisk do wyboru {{ $id }}">
            {{ $slot }}

        </ul>
    </div>
</div>
