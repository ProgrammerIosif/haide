<header>
    <nav class="section relative flex items-center justify-between py-2" aria-label="Global">
        <div class="flex flex-1">
            <a href="/" class="-m-1.5 p-1.5 flex items-center">
                <img class="h-16 w-16 -ml-2" src={{ asset('img/logo.png') }} alt="">
                <span class="ml-2 text-4xl font-bold">Haide</span>
            </a>
        </div>
        <div class="flex flex-1 justify-end gap-5">
            @guest
                <x-anchor href="/login" colors="primary" hover="inverse" size="small">Log in</x-anchor>
                <x-anchor href="/register" colors="secondary" size="small">Sign up</x-anchor>
            @endguest
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <x-anchor tag="button" colors="secondary" size="small">Log out</x-anchor>
                </form>
            @endauth
        </div>
    </nav>
</header>