<footer class="px-6 md:px-16 py-20">
    {{-- container --}}
    <div class="max-w-screen-xl mx-auto space-y-11">
        {{-- top --}}
        <div class="flex justify-between items-center">

            <div class="w-1/5">
                <a href="{{route('home')}}"><img src="{{ asset('assets/logo2.png') }}" alt="" class="w-24"></a>
            </div>
            <ul class="w-3/5 flex justify-center items-center gap-12 font-medium">
                <li><a href="">Apartamenty</a></li>
                <li><a href="">Kategorie</a></li>
                <li><a href="">O nas</a></li>
                <li><a href="">Blog</a></li>
            
            </ul>

            <div class="w-1/5 flex justify-end">
                <div class="flex justify-center items-center gap-2">
                    <a href=""><x-iconpark-facebook class="w-4"/></a>
                    <a href=""><x-iconpark-instagram class="w-4"/></a>

                </div>
            </div>
        </div>
         {{-- hr --}}
         <hr class="w-full  border border-black ">
         {{-- bottom --}}
         <div class="flex justify-between items-center">

            <div class="w-1/5">
               <a>Polityka Prywatności</a>
            </div>
            <div class="w-3/5 flex justify-center items-center gap-12 font-medium">
               <span>2024 nazwa firmy</span>
            
            </div>

            <div class="w-1/5 flex justify-end">
               marketing mix
            </div>
        </div>
    </div>
</footer>