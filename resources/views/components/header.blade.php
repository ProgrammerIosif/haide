<header>
    <nav class="section relative flex items-center justify-between py-2" aria-label="Global">
        <div class="flex flex-1">
            <a href="/" class="-m-1.5 p-1.5 flex items-center">
                <img class="h-16 w-16 -ml-2" src={{ asset('img/logo.webp') }} alt="">
                <span class="ml-2 text-4xl font-bold">Haide</span>
            </a>
        </div>
        {{-- desktop --}}
        <x-menu size="small" class="max-sm:hidden flex flex-1 justify-end gap-5 text-nowrap"/>
        {{-- mobile --}}
        <div onclick="openDropdown()" class="sm:hidden w-8 py-5 flex gap-1.5 flex-col justify-between cursor-pointer">
            <div class="h-0.5 bg-current"></div>
            <div class="h-0.5 bg-current"></div>
            <div class="h-0.5 bg-current"></div>
        </div>
        <div id="dropdown" class="bg-[#1d2021] scale-0 font-semibold text-xl z-20 origin-top-right ease-in-out duration-500 transition-all w-full h-screen absolute right-0 top-0 py-5">
            <div onclick="closeDropdown()">
              <div class="absolute right-4 top-2 cursor-pointer text-2xl">x</div>
            </div>
            <x-menu size="large" class="h-full flex flex-col items-center justify-center gap-2 pb-20"/>
        </div>
    </nav>
</header>
<script>
    function openDropdown() {
        document.getElementById('dropdown').classList.remove('scale-0');
        document.body.style.overflow = 'hidden';
    }
    function closeDropdown() {
        document.getElementById('dropdown').classList.add('scale-0');
        document.body.style.overflow = 'auto';
    }
</script>