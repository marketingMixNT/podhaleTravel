
<form  wire:submit.prevent='submitForm' method="POST" id="contactForm">
    @csrf
    @if ($successMessage)
        <x-form.success-message successMessage="{{ $successMessage }}" />
    @endif

    {{-- name --}}
    <div class="relative z-0 w-full mb-5 group">

        <input wire:model.live.lazy="name" type="text" name="name" id="name"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-secondary-400 focus:outline-none focus:ring-0 focus:border-secondary-200 peer"
            placeholder=" " required />
        <label for="name"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Imię
            i nazwisko</label>
        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    {{-- phone --}}
    <div class="relative z-0 w-full mb-5 group">

        <input wire:model.live.lazy="phone" type="tel" name="phone" id="phone"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-secondary-400 focus:outline-none focus:ring-0 focus:border-secondary-200 peer"
            placeholder=" " required />
        <label for="phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefon</label>
        @error('phone')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    {{-- email --}}
    <div class="relative z-0 w-full mb-5 group">

        <input wire:model.live.lazy="email" type="email" name="email" id="email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-secondary-400 focus:outline-none focus:ring-0 focus:border-secondary-200 peer"
            placeholder=" " required />
        <label for="email"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
        @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    {{-- message --}}
    <div class="relative z-0 w-full mb-5 group">

     
        <textarea wire:model.live.lazy="content" name="content" id="content"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-secondary-400 focus:outline-none focus:ring-0 focus:border-secondary-200 peer min-h-[200px] max-h-[200px]"
            placeholder=" " required></textarea>
        <label for="content"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ">Wiadomość</label>
        @error('content')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <button type="submit" wire.loading.attr="disabled" type='submit' aria-label="Wyślij"
        class=" px-8 xl:px-10 py-3 bg-secondary-400 hover:bg-secondary-200  lg:text-sm xl:text-base font-medium uppercase text-white rounded-md duration-500"><svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
        xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
        <circle class="opacity-40" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
        <path class="opacity-75" fill="#fff"
            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
        </path>
    </svg>Wyślij</button>
</form>
