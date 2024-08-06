<x-base.main>

    <x-base.heading-secondary heading="Blog" />



    <livewire:blog.components.post-list />


    <div class="flex justify-center items-center mt-20">

        <x-base.link-btn  href="{{ route('blog.archive') }}">Archiwum</x-base.link-btn>
    </div>
 







</x-base.main>
